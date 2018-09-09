@extends('admin.layouts.app')

@section('main-contenct')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="post_title">Post title</label>
                    <input type="text" class="form-control" id="post_tite" name="post_tite" placeholder="Enter post">
                  </div>
                  <div class="form-group">
                    <label for="subpost_title">Post Sub title</label>
                    <input type="text" class="form-control" id="subpost_title" name="subpost_title" placeholder="Enter subpost">
                  </div> 
                  <div class="form-group">
                    <label for="slug">Post Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug">
                  </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                      <label for="image">File input</label>
                      <input type="file" id="image" name="image">

                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="status">Publish
                      </label>
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Write Post Body Here
                      <small>Simple and fast</small>
                    </h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body pad">
                    <form>
                      <textarea class="textarea" name="body" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </form>
                  </div>
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        
      </div>
      <!-- /.row -->
    </section>
  </div>
  <!-- /.content-wrapper -->

@endsection