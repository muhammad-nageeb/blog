@extends('admin.layouts.app')

@section('main-content')


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
              <h3 class="box-title">Title</h3>
            </div>

            @include('includes.messages')

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('tag.store') }}" method="POST">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="col-lg-offset-3 col-lg-6">
                  <div class="form-group">
                    <label for="post_title">Tag title</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Tag Title">
                  </div>
                  <div class="form-group">
                    <label for="slug">Tag Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug">
                  </div>                  
	              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
	                <a class="btn btn-warning" href="{{route('tag.index')}}">Back</a>
	              </div>
                </div>
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