<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application admin product section.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all categories from DB
        $categories = DB::select('select * from category_tab order by cat_id DESC');

        // get all brands from DB
        $brands = DB::select('select * from brand_tab order by brand_id DESC');

        // get all products from DB
        $products = DB::select('select * from product_tab order by product_id DESC');

        return view('admin.product',['categories'=>$categories,'brands'=>$brands,'products'=>$products]);
    }

    /**
     * Insert products into DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function addProduct(Request $request)
    {
        $image_json='';
        $vid_json='';
        $file_json='';

        // image uploading code
        if($request->hasfile('prod_image'))
        {
            //$img_arr=array();
            foreach($request->file('prod_image') as $image)
            {
                $extension=$image->getClientOriginalExtension();
                $filename =$request->input('product_name').'_'.time().'_'.uniqid().'.'.$extension;
                $service_path=$image->move('template/images/products', $filename);
                $img_arr[] = 'template/images/products/'.$filename;  
            }
            $image_json=json_encode($img_arr);
        }

         // file uploading code
        if($request->hasfile('prod_file'))
        {
            //$img_arr=array();
            foreach($request->file('prod_file') as $image)
            {
                $extension=$image->getClientOriginalExtension();
                $originalname=$image->getClientOriginalName();
                $filename =$originalname;
                $service_path=$image->move('uploads/files/products/'.$extension, $filename);
                $file_arr[] = 'uploads/files/products/'.$extension.'/'.$filename;  
            }
            $file_json=json_encode($file_arr);
        }

          // video link uploading code
        if($request->has('prod_video') && is_array($request->prod_video) && count($request->prod_video))
        {
            foreach($request->input('prod_video') as $image)
            {
                $vid_arr[] = $image;  
            }
            $vid_json=json_encode($vid_arr);
        }
         //print_r($file_json);die();
        
        // insert category name into  db
        $checkInsert = DB::insert('insert into product_tab (brand_id,cat_id,prod_name,prod_description,prod_image,prod_video,prod_files) values(?,?,?,?,?,?,?)', [$request->input('product_brand'),$request->input('product_category'),$request->input('product_name'),$request->input('product_description'),$image_json,$vid_json,$file_json]);
        //print_r($checkInsert);die();

        if($checkInsert){
            echo '<div class="alert alert-success alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success-</strong> Product added successfully.</div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Product was not added!</div>';
        }
    }

    /**
     * Delete product from DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function delProduct(Request $request)
    {
        // delete product from  db
        $checkDelete = DB::delete('delete from product_tab where product_id = ?', [$request->input('product_id')]);
        //return redirect()->to('admin/services#allServices');

        if($checkDelete){
            echo '<div class="alert alert-success alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success-</strong> Product deleted successfully.</div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Product was not deleted!</div>';
        }
    }


    /**
     * update product into DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateChanges(Request $request)
    {      
        // update product details  db
        $checkUpdate = DB::update('update product_tab set brand_id = ?,cat_id=?,prod_name=?,prod_description=?,prod_image=?,prod_video=?,prod_files=? where product_id=?', [$request->input('update_product_brand'),$request->input('update_product_category'),$request->input('update_product_name'),$request->input('update_product_description'),$request->input('originalImages'),$request->input('originalVids'),$request->input('originalFiles'),$request->input('id')]);
        // // $checkUpdate =DB::table('product_tab')->where('product_id', $request->input('id'))->update(array('brand_id'=>$request->input('update_product_brand'))); 
        // // DB::table('product_tab')
        // //     ->where('product_id', $request->input('id'))
        // //     ->update(['brand_id' => $request->input('update_product_brand')]);
        // print_r($checkUpdate);die();

        if($checkUpdate){
            echo '<div class="alert alert-success alert-dismissible fade in w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success-</strong> Product updated successfully.</div>';
        }
        else{
            echo '<div class="alert alert-warning alert-dismissible fade in w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Warning!</strong> You havent changed anything! Product not updated</div>';
        }
    }


    /**
     * mark Trending product into DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function markTrending(Request $request)
    {      
        $pid=base64_decode($request->segment(4));

        // mark product trending  db 
        $checkUpdate =DB::table('product_tab')
        ->where('product_id', $pid)
        ->update(['trending' => '1']);

        $divVal=base64_encode($request->segment(4));
        return redirect()->to('admin/product#'.$divVal);
    }


    /**
     * unmark Trending product into DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function unmarkTrending(Request $request)
    {      
        $pid=base64_decode($request->segment(4));

        // unmark product trending  db 
        $checkUpdate =DB::table('product_tab')
        ->where('product_id', $pid)
        ->update(['trending' => '0']);

        $divVal=base64_encode($request->segment(4));
        return redirect()->to('admin/product#'.$divVal);
    }

    /**
     * download product brochure file.
     *
     * @return \Illuminate\Http\Response
     */
    public function downloadFile(Request $request)
    {      
        //print_r($request->input('file_path'))
        return response()->download($request->input('file_path'));die();
        $pid=base64_decode($request->segment(4));

        // unmark product trending  db 
        $checkUpdate =DB::table('product_tab')
        ->where('product_id', $pid)
        ->update(['trending' => '0']);

        $divVal=base64_encode($request->segment(4));
        return redirect()->to('admin/product#'.$divVal);
    }

}

