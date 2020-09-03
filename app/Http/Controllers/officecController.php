<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class officecController extends Controller
{
    public function index(){
        //
    }

    public function manageItSupport(){
        return view('frontend.office.office_setup');
    }
    public function officeSetup(){
        return view('frontend.office.office_setup');
    }
    public function networkSolutions(){
        return view('frontend.office.office_setup');
    }
    public function itManagementServices(){
        return view('frontend.office.office_setup');
    }
    public function cloudComputingServives(){
        return view('frontend.office.office_setup');
    }
   
}
