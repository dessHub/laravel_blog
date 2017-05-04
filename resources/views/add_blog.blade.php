@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <form method="POST" action="{{url('blog/store')}}"  enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                  <div  class="col-sm-12">
                      <div id="reportArea">
                          <div class="form-group">
                              <label class="col-sm-2 control-label"> Blog Name</label>
                              <div class="col-sm-6">
                                  <input class="form-control" type="text" name="blog_name" id="blog_name" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Blog Url</label>
                              <div class="col-sm-6">
                                  <input class="form-control" type="text" name="blog_url" id="blog_url" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Blog Description</label>
                              <div class="col-sm-6">
                                  <textarea class="ckeditor" name="blog_desc" id="blog_desc"></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label"> </label>
                              <input class="btn btn-primary col-sm-3" type="submit" name="submit" id="submit" value="Submit"/>
                          </div>
                          <div class="clearfix visible-lg"></div>
                      </div>
              </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
