<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficecController extends Controller
{
    public function index(){
        //
    }

    public function manageItSupport(){

        return view('frontend.office.manage_it_supports');
    }
    public function officeSetup(){
        return view('frontend.office.office_setup');
    }
    public function networkSolutions(){
        return view('frontend.office.network_solutions');
    }
    public function itManagementServices(){
        return view('frontend.office.o_and_m_services');
    }
    public function cloudComputingServives(){
        return view('frontend.office.cloud_computing_services   ');
    }
   
}
