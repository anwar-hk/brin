<?php

namespace App\Http\Controllers;
use App\News;
use App\Contact;
use Mail;

use Illuminate\Http\Request;

class OfficecController extends Controller
{
    public function index(){
        //
    }

    public function manageItSupport(){

        return view('frontend.office.solutions.manage_it_supports');
    }
    public function officeSetup(){
        return view('frontend.office.solutions.office_setup');
    }
    public function networkSolutions(){
        return view('frontend.office.solutions.network_solutions');
    }
    public function itManagementServices(){
        return view('frontend.office.solutions.o_and_m_services');
    }
    public function cloudComputingServives(){
        return view('frontend.office.solutions.cloud_computing_services   ');
    }
    public function itSecurity(){
        return view('frontend.office.solutions.it_security');
    }
    public function itProductSupply(){
        return view('frontend.office.solutions.it_product_supply');
    }
    public function viewNews(Request $request){
        $news = News::get();
        // dd($news);
        return view ('news')->with(compact('news'));
    
    }

    public function addContact(Request $request){
        $data = $request->all();
        if($data){ 
            $contact = new Contact;
            $contact->name = $data['name'];
            $contact->company = $data['company'];
            $contact->mobile = $data['phone'];
            $contact->email = $data['email'];
            $contact->message = $data['contact_message'];
            $contact->status = 0;
            $contact->save();
            $to = "anwarhk.ah@gmail.com"; // Please insert your email here
            $subject = 'Contact Us';
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
            $message = "Name: ". $contact->name . "<br>
                        Company: ". $contact->company . "<br>
                        Phone: ". $contact->phone . "<br>
                        Email: ". $contact->email . "<br>
                        Message: " . $contact->message . "";
            //Email Send Function
            $response = $this->send_email($to, $subject, $message ,$headers);
            dd($response);
            if($response == true){
                return response()->json([
                    'html'=>'<div class="success">Request Submitted Successfully.</div>' 
                ]);
            }
        }
        return response()->json([
            'html'=>'<div class="success">Request Submitted U   nsuccessfully.</div>'
        ]);
    
    }
    private function send_email($to, $subject, $message ,$headers)
    {
        // $this->email->from('', 'Caesars');
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message_body);
        if ($this->email->send()) {
            return true;
        } else {
            return false;
        }
    }
}
