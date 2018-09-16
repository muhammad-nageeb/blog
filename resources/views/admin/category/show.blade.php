@extends('admin.layouts.app')

@section('headSection')
{{-- DataTable --}}
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">

@endsection

@section('main-content')

	<!-- Content Wrapper. Contains page content -->
	  <div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Blank page
	        <small>it all starts here</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li><a href="#">Examples</a></li>
	        <li class="active">Blank page</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">

	      <!-- Default box -->
	      <div class="box">
	        <div class="box-header with-border">
	          <h3 class="box-title">Title</h3>
		        <a class="col-lg-offset-5 btn btn-success" href="{{route('category.create')}}">Add new Category</a>
	          <div class="box-tools pull-right">
	            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
	              <i class="fa fa-minus"></i></button>
	            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
	              <i class="fa fa-times"></i></button>
	          </div>
	        </div>
	        <div class="box-body">
	        <div class="box-body">
	            <div class="box">
		            <div class="box-header">
		            	<h3 class="box-title">Data Table With Full Features</h3>
		            </div>
	            	<!-- /.box-header -->
		            <div class="box-body">
		                <table id="example1" class="table table-bordered table-striped">
		                <thead>
		                <tr>
		                  <th>N:</th>
		                  <th>Category Name</th>
		                  <th>Slug</th>
		                  <th>Edit</th>
		                  <th>Delete</th>
		                </tr>
		                </thead>
		                <tbody>
		        		@foreach($categories as $cat)
		                <tr>
		                  <td>{{$loop->index + 1}}</td>
		                  <td>{{$cat->name}}</td>
		                  <td>{{$cat->slug}}</td>
		                   <td><a href="{{route('category.edit',$cat->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
              				</td>
		                  <td>	                  					
		                	<form id="delete_form_{{$cat->id}}" method="post" action="{{route('category.destroy',$cat->id)}}" style="display: none">
		                		{{csrf_field()}}
		                		{{method_field('DELETE')}}		                	
		                	</form>
							<a href="#" onclick="if(confirm('Are you sure, You want to delete this?')){event.preventDefault();document.getElementById('delete_form_{{$cat->id}}').submit()}else{}"><span class="glyphicon glyphicon-trash"></span>
							</td>
		                </tr>
		        		@endforeach

		               <tfoot><
		                <tr>
		                  <th>N:</th>
		                  <th>Tag Name</th>
		                  <th>Slug</th>
		                  <th>Edit</th>
		                  <th>Delete</th>
		                </tr>
		                </tfoot>
		            	</tbody>
		              </table>
		            </div>
		            <!-- /.box-body -->
	          	</div>
          <!-- /.box -->
	        </div>	        </div>
	        <!-- /.box-body -->
	        <div class="box-footer">
	          Footer
	        </div>
	        <!-- /.box-footer-->
	      </div>
	      <!-- /.box -->

	    </section>
	    <!-- /.content -->
	  </div>
	  <!-- /.content-wrapper -->

@endsection

@section('footerSection')
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>


<!-- DataTables -->
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
@endsection 