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
        return view ('news')->with(compact('news'));
    
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

    function sadfg(Request $request){
        $data = $request->all();
            $contact = new Contact;
            $contact->name = $data['name'];
            $contact->company = $data['company'];
            $contact->mobile = $data['phone'];
            $contact->email = $data['email'];
            $contact->message = $data['contact_message'];
            $contact->status = 0;
            $contact->save();
            $subject = "Contact from " . $data['name']; 
            $name = $data['name'];
            $company = $data['company'];
            $mobile = $data['phone'];
            $emailAddress = $data['email'];
            $message = "Name: ". $contact->name . "<br>
                    Company: ". $contact->company . "<br>
                    Phone: ". $contact->phone . "<br>
                    Email: ". $contact->email . "<br>
                    Message: " . $contact->message . "";

            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            try {
            //Server settings
            // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.sendgrid.net';                  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'anwarhk.ah@gmail.com';                 // SMTP username
                $mail->Password = 'kIgCLKG3Bb9mJSrv';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to

                // Sender
                $mail->setFrom("anwarhk.ah@gmail.com", "BrinTechSolutions");

                // who will receive the email submission
                $mail->addAddress('anwarhk.ah1@gmail.com');     // Add a recipient
                // $mail->addAddress('ellen@example.com');               // Name is optional


                $mail->addReplyTo($emailAddress, $name);
                
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    = $message;
                $mail->AltBody = $message;
                $response = $mail->send();
                $request->session()->flash('status', 'Your Request Submited');
                    return response()->json([
                        'html'=>'<div class="success">Request Submitted Successfully.</div>' 
                    ]);
                }
            
            catch (Exception $e) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            }

    }
}
