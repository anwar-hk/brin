<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Partners;
use App\News;
use App\Contact;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(Request $request){
      if($request->isMethod('post')){
          $data = $request->input();
          if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
            return redirect('admin/dashboard');
          }
          else{
            return redirect('/admin')->with('flash_message_error','Invalid Username or Password');
          }
      }
      // echo"<pre>";print_r($request);die;
      return view('admin.admin_login');
    }
    
    public function dashboard($id = null){
      $newsCount = News::paginate();  
      $contactCount = Contact::paginate();  
      $partners = Partners::paginate();  
      return view('admin.dashboard')->with(compact('newsCount','contactCount','partners' ));
    }

    public function settings(){
      return view('admin.settings');
    }

    public function chkPassword(Request $request){
        $data = $request->all();
        $current_password = $data['pwd_current'];
        $email_login = Auth::user()->email;
        $check_pwd = User::where(['email'=>$email_login])->first();
        if(Hash::check($current_password,$check_pwd->password)){
            echo "true"; die();
        }else {
            echo "false"; die();
        }
    }
    
    public function updatAdminPwd(Request $request){
        $data = $request->all();
        $current_password=$data['pwd_current'];
        $email_login=Auth::user()->email;
        $check_password=User::where(['email'=>$email_login])->first();
        if(Hash::check($current_password,$check_password->password)){
            $password=bcrypt($data['pwd_new']);
            User::where('email',$email_login)->update(['password'=>$password]);
            return redirect('/admin/settings')->with('message','Password Update Successfully');
        }else{
            return redirect('/admin/settings')->with('message','InCorrect Current Password');
        }
    }

    public function logout(){
      Session::flush();
      return redirect('/admin')->with('flash_message_success','Logged Out Successfully!!!');
    }
}