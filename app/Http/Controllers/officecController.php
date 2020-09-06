<?php

namespace App\Http\Controllers;
use App\News;

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
    
}
