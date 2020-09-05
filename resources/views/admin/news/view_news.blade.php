@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{url ('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#">Categories</a> <a href="#" class="current">View Categories</a> </div>
        <h1>Categories</h1>
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
              <h5>View Categories</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>Sl No.</th>
                    <th>TITLE</th>
                    <th>DISCRIPTION</th>
                    <th>SITE LINK</th>
                    <th>DATE</th>
                    {{-- <th>DATE</th> --}}
                    <th>ACTIONS</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($news as $n)
                  <tr class="gradeX text-center">
                   
                    <td>{{ $n->id }}</td>
                    <td>{{ $n->title }}</td>
                    <td>{{ $n->discription }}</td>
                    <td>{{ $n->url }}</td>
                    <td>{{ $n->updated_at }}</td>
                    {{-- <td>{{ $n->updated_at }}</td> --}}
                    <td class="center"><div class="fr"><a href="{{url('/admin/edit-news/'.$n->id)}}" class="btn btn-primary btn-mini">Edit</a>
                    <a  rel="{{$n->id}}" rel1="delete-category"
                        href="javascript:" class="btn btn-danger btn-mini deleteRecord">Delete</a></div></td>              
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