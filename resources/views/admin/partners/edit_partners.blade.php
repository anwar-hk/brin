@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="{{url ('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
  <a href="#">Partners</a> <a href="#" class="current">Edit Partners</a> </div>
<h1>Partners</h1>
</div>
<div class="container-fluid"><hr>
<div class="row-fluid">
  <div class="span12">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
        <h5>Edit Partners</h5>
      </div>
      <div class="widget-content nopadding">
      <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{url('/admin/edit-partners/'.$partners->id)}}"
        name="edit_news" id="edit_news" novalidate="novalidate"> {{csrf_field()}}
          <div class="control-group">
            <label class="control-label">Name</label>
            <div class="controls">
            <input type="text" name="name" id="name" value="{{$partners->name}}">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Image</label>
            <div class="controls">
              <input type="file" name="image" id="image">
            <input type="hidden" name="current_image" value="{{$partners->logo}}">
            @if(!empty($partners->logo))
            <img style="width:50px;" src="{{asset('/backend/backend_img/partners/'.$partners->logo)}}"> 
            @endif    
        </div>
          <div class="form-actions">
            <input type="submit" value="Save" class="btn btn-success">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection