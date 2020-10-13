@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{url ('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#">Contact</a> <a href="#" class="current">View Contact</a> </div>
        <h1>Contact</h1>
        @if(Session::has('flash_message_error'))
        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
        <strong>{{ session('flash_message_error') }}</strong>
        </div>
        @endif
        @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
        <strong>{{ session('flash_message_success') }}</strong>
        </div>
        @endif
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>View Contact</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>DATE</th>
                    <th>NAME</th>
                    <th>COMPANY</th>
                    <th>MOBILE</th>
                    <th>EMAIL</th>
                    <th>MESSAGE</th>
                    <th>STATUS</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($contact as $c)
                  <tr class="gradeX text-center">
                    <td>{{ date_format($c->created_at, "d-m-yy") }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->company }}</td>
                    <td>{{ $c->mobile }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->message }}</td>           
                    <td>{{ $c->status }}</td>           
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection