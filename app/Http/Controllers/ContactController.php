<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the Contact page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all services
        $services = DB::select('select * from service_tab');

        return view('contactus',['all_services'=>$services]);
    }

    /**
     * get contact form submit
     *
     * @return \Illuminate\Http\Response
     */
    public function postContact(Request $request)
    {
        
        // get all services
        $email = DB::select('select user_email from users_tab where role=?',['admin']);
        $contact_mail=str_replace(' ', '', $request->input('contactform-email'));

        $admin_email=$email[0]->user_email;

        // send message to admin email----------------------------
        $message_data = array(
                'contact_name' => $request->input('contactform-name'),
                'contact_mail' => $request->input('contactform-email'),
                'contact_message' => $request->input('contactform-message'),
                'contact_service' => $request->input('contactform-service'),
                'contact_phone' => $request->input('contactform-phone'),
                'contact_subject' => $request->input('contactform-subject')
        );
        //print_r($message_data);die();
        Mail::send('mails.ContactMessage', $message_data, function ($message)use ($admin_email) {
            $message->from('impulse@bizmo-tech.com', 'Impulse World Trends ADMIN');        
            $message->to($admin_email)->subject('Message from Impulse Trends Website');
        });        

        //echo $contact_mail;die();
        $data = array(
                'contact_name' => $request->input('contactform-name')
        );
        //print_r($request->input('contactform-email'));die();
        Mail::send('mails.contactForm', $data, function ($message)use ($contact_mail) {
            $message->from('impulse@bizmo-tech.com', 'Impulse World Trends ADMIN');        
            $message->to($contact_mail)->subject('Acknowledge from Impulse World Trends');
        });  

        echo '<h3>Thank You! Your Message has been successfully submitted.</h3>';      
    }

    /**
     * get quick contact form submit
     *
     * @return \Illuminate\Http\Response
     */
    public function quickContact(Request $request)
    {
        //print_r($_POST);die();
        // get all services
        $email = DB::select('select user_email from users_tab where role=?',['admin']);

        $contact_mail=str_replace(' ', '', $request->input('quick-contact-form-email'));
        $admin_email=$email[0]->user_email;

        // send message to admin email----------------------------
        $message_data = array(
                'contact_name' => $request->input('quick-contact-form-name'),
                'contact_mail' => $request->input('quick-contact-form-email'),
                'contact_message' => $request->input('quick-contact-form-message')
                // 'contact_service' => $request->input('quick-contact-form-name')
                // 'contact_name' => $request->input('quick-contact-form-name')
                // 'contact_name' => $request->input('quick-contact-form-name')
        );
        //print_r($message_data);die();
        Mail::send('mails.quickContactMessage', $message_data, function ($message)use ($admin_email) {
            $message->from('impulse@bizmo-tech.com', 'Impulse World Trends ADMIN');        
            $message->to($admin_email)->subject('Quick Contact via Impulse World Trends website');
        });

        // send acknowledge message to sender
        $data = array(
                'contact_name' => $request->input('quick-contact-form-name')
        );
        //print_r($request->input('contactform-email'));die();
        Mail::send('mails.quickContactForm', $data, function ($message)use ($contact_mail) {
            $message->from('impulse@bizmo-tech.com', 'Impulse World Trends ADMIN');        
            $message->to($contact_mail)->subject('Reply from Impulse World Trends');
        });  

        
        echo '<h5>Thank You! Your Mail has been send.</h5>';      
    }

    /**
     * subscribe email form
     *
     * @return \Illuminate\Http\Response
     */
    public function subscribeEmail(Request $request)
    {
        echo ($request->input('widget-subscribe-form-email'));die();
        // get all services
        $email = DB::select('select user_email from users_tab where role=?',['admin']);
        $contact_mail=str_replace(' ', '', $request->input('quick-contact-form-email'));
        //echo $contact_mail;die();
        $data = array(
                'contact_name' => $request->input('quick-contact-form-name')
        );
        //print_r($request->input('contactform-email'));die();
        Mail::send('mails.quickContactForm', $data, function ($message)use ($contact_mail) {
            $message->from('impulse@bizmo-tech.com', 'Impulse World Trends ADMIN');        
            $message->to($contact_mail)->subject('Reply from Impulse World Trends');
        });  
        
        echo '<h5>Thank You! Your Mail has been send.</h5>';      
    }
}
