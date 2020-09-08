<?php

namespace App\Http\Controllers;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;
use App\News;
use App\Contact;
use App\Mail\contactMail;
use Mail;

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
        return view ('news')->with(compact('news' , ));
    
    }

    public function addContact(Request $request){
        $data = $request->all();
        if($data){ 
            $response = Mail::to('anwarhk.ah@gmail.com')->send(new contactMail($data));
            $contact = new Contact;
            $contact->name = $data['name'];
            $contact->company = $data['company'];
            $contact->mobile = $data['phone'];
            $contact->email = $data['email'];
            $contact->message = $data['contact_message'];
            $contact->status = 0;
            $contact->save();
            return response()->json([
                'html'=>'<div class="success">Request Submitted Successfully.</div>' 
            ]);
        }
        return response()->json([
            'html'=>'<div class="success">Request Submitted Unsuccessfully.</div>'
        ]);
    
    }

}
