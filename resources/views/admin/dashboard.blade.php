@extends('layouts.adminLayout.admin_design');
@section('content')

<!--main-container-part-->
<div id="content" style="margin-top:-75px;">
      <div id="content-header">
        <div id="breadcrumb"> <a href="{{url ('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
      </div>
      <div class="container-fluid">
        <div class="quick-actions_homepage">
          <ul class="quick-actions">
            <li class="bg_lb"> <a href="{{url ('/admin/dashboard')}}"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
          <li class="bg_lg span3"> <a href="{{url ('/admin/view-news')}}"> <i class="icon icon-list"></i><span class="label label-important">{{$newsCount->total()}}</span> News</a> </li>
            <li class="bg_ly"> <a href="{{url ('/admin/view-partners')}}"> <i class="icon icon-list"></i><span class="label label-success">{{$partners->total()}}</span> Sponser </a> </li>
            <li class="bg_lb"> <a href="{{url ('/admin/view-contact')}}"> <i class="icon icon-list"></i><span class="label label-important">{{$contactCount->total()}}</span> Contacts</a> </li>
    
          </ul>
        </div>
        <hr/>
      </div>
    </div>
@endsection