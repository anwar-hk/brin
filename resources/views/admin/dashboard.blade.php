@extends('layouts.adminLayout.admin_design');
@section('content')

<!--main-container-part-->
<div id="content" style="margin-top:-75px;">
    <!--breadcrumbs-->
      <div id="content-header">
        <div id="breadcrumb"> <a href="{{url ('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
      </div>
    <!--End-breadcrumbs-->
    <!--Action boxes-->
      <div class="container-fluid">
        <div class="quick-actions_homepage">
          <ul class="quick-actions">
            <li class="bg_lb"> <a href="{{url ('/admin/dashboard')}}"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
          <li class="bg_lg span3"> <a href="{{url ('/admin/view-news')}}"> <i class="icon icon-list"></i><span class="label label-important">{{$newsCount->total()}}</span> News</a> </li>
            <li class="bg_ly"> <a href="{{url ('/admin/view-products')}}"> <i class="icon icon-list"></i><span class="label label-success">{{$productsAll->total()}}</span> Sponser </a> </li>
            {{-- <li class="bg_lo"> <a href="{{url ('/admin/view-coupons')}}"> <i class="icon icon-list"></i><span class="label label-info">{{$couponCount->total()}}</span> Solutions</a> </li> --}}
            <li class="bg_lb"> <a href="{{url ('/admin/view-contact')}}"> <i class="icon icon-list"></i><span class="label label-important">{{$contactCount->total()}}</span> Contacts</a> </li>
            {{-- <li class="bg_ls"> <a href="{{url ('/admin/view-orders')}}"> <i class="icon-fullscreen"></i><span class="label label-warning">{{$orderCount->total()}}</span> Carrers</a> </li> --}}
    
          </ul>
        </div>
    <!--End-Action boxes-->    
    <!--Chart-box-->    
        
    <!--End-Chart-box--> 
        <hr/>

      </div>
    </div>
    
    <!--end-main-container-part-->
@endsection