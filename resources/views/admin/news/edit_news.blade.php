@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="{{url ('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
  <a href="#">news</a> <a href="#" class="current">Edit News</a> </div>
<h1>news</h1>
</div>
<div class="container-fluid"><hr>
<div class="row-fluid">
  <div class="span12">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
        <h5>Edit News</h5>
      </div>
      <div class="widget-content nopadding">
      <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{url('/admin/edit-news/'.$newsDetails->id)}}"
        name="edit_news" id="edit_news" novalidate="novalidate"> {{csrf_field()}}
          <div class="control-group">
            <label class="control-label">Title</label>
            <div class="controls">
            <input type="text" name="title" id="title" value="{{$newsDetails->title}}">
            </div>
          </div>
          <div class="control-group">
              <label class="control-label">Discription</label>
              <div class="controls">
                <textarea name="discription" id="discription">{{$newsDetails->discription}} </textarea>
              </div>
            </div>
          <div class="control-group">
            <label class="control-label">URL</label>
            <div class="controls">
              <input type="text" name="url" id="url" value="{{$newsDetails->url}}">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Image</label>
            <div class="controls">
              <input type="file" name="image" id="image">
            <input type="hidden" name="current_image" value="{{$newsDetails->image}}">
            @if(!empty($newsDetails->image))
            <img style="width:50px;" src="{{asset('/backend/backend_img/news/'.$newsDetails->image)}}"> 
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