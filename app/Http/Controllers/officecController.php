<?php

namespace App\Http\Controllers;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;
use App\News;
use App\Contact;
use App\Partners;
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
    // news 
    public function viewNews(Request $request){
        $news = News::paginate(5);
        foreach($news as $url ){
            $link = "http://$url->url";
            $url->link = $link;
        }
        return view ('news')->with(compact('news'));
    }

    //sponser

    //contact form
    public function addContact(Request $request){
        $data = $request->all();
        // dd($data);
        if($data){ 
            
            $contact = new Contact;
            $contact->name = $data['name'];
            $contact->company = $data['company'];
            $contact->mobile = $data['phone'];
            $contact->email = $data['email'];
            if(!empty($data['address'])){
                $contact->address = $data['address'];
            }
            $contact->message = $data['contact_message'];
            $contact->status = $data['status'];
            $contact->save();
            Mail::to('anwarhk.ah@gmail.com')->send(new contactMail($data));
            return response()->json([
                'html'=>'<div class="success">Request Submitted Successfully.</div>' 
            ]);
        }
        return response()->json([
            'html'=>'<div class="success">Request Submitted Unsuccessfully.</div>'
        ]);
    
    }

    public function viewContact(Request $request){
        $contact = Contact::get();
        // dd($contact);
        return view ('admin/contact/view_contact')->with(compact('contact'));
    
    }


}
