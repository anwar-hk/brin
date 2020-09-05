@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="{{url ('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#">News</a> <a href="#" class="current">Add News</a> </div>
      <h1>News</h1>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Add News</h5>
            </div>
            <div class="widget-content nopadding">
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/add-news') }}"
                name="add_news" id="add_news" novalidate="novalidate"> {{csrf_field()}}
                <div class="control-group">
                  <label class="control-label">News Title</label>
                  <div class="controls">
                    <input type="text" name="titel" id="titel">
                  </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Discription</label>
                    <div class="controls">
                      <textarea name="discription" id="discription"> </textarea>
                    </div>
                  </div>
                <div class="control-group">
                  <label class="control-label">URL</label>
                  <div class="controls">
                    <input type="text" name="url" id="url">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Image</label>
                    <div class="controls">
                      <div class="uploader" id="uniform-undefined">
                      <input name="image" id="image[]" type="file">
                      </div>
                    </div>
                </div>
                <div class="form-actions">
                  <input type="submit" value="Add News  " class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection