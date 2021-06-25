@extends('admin.layout')

@section('content')

<div class="row">
{!! Form::open(['route'=>'page-create','enctype'=>'multipart/form-data'])!!}
	@if($errors->any())
		<div class="alert alert-danger">
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
		</div>
		@endif
		@csrf 
		<div class="x_panel">
		<div class="x_title">
		<h2 class="sub_title">Page Content</h2>
		<ul class="nav navbar-right panel_toolbox">
		<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></li>
		<li><a class="close-link"><i class="fa fa-close"></i></a><li>
		</ul>
		<div class="clearfix"></div>
		</div>
		<div class="x_content">
		<div class="form-group has-feedback" style="position:relative;">
			<label for="name" class="hws_form_label">Title:</label>
			{!! Form::text('title','home',['class'=>'form-control','required'=>'required','readonly'=>'readonly'])!!}
			<span class="hws_error text-right text-danger">
				{{$errors->first('title')}}
			</span>
		</div>
		<div class="form-group has-feedback" style="position:relative;">
			<label for="name" class="hws_form_label">Banner Image:</label>
			{!! Form::file('image',['class'=>'form-control','id'=>'file'])!!}
		</div><br><br>
		<div class="form-group has-feedback" style="position:relative;">
			<label for="name" class="hws_form_label">Second Section</label><br>
			<label for="name" class="hws_form_label">Title:</label>
			{!! Form::hidden('txt_name[]','second_title')!!}
			{!! Form::text('second_title','',['class'=>'form-control','required'=>'required'])!!}			
			<label for="name" class="hws_form_label">Image:</label>
			{!! Form::file('second_image',['class'=>'form-control','id'=>'file'])!!}
			<label for="name" class="hws_form_label">Content:</label>
			{!!Form::textarea('second_text','',['class'=>'form-control'])!!}
		</div><br><br>	
		<div class="form-group has-feedback" style="position:relative;">
			<label for="name" class="hws_form_label">Third Section</label><br>
			<label for="name" class="hws_form_label">Icon:</label>
			{!! Form::hidden('txt_name[]','third_icon')!!}
			{!! Form::text('third_icon','',['class'=>'form-control'])!!}
			<label for="name" class="hws_form_label">Title:</label>
			{!! Form::hidden('txt_name[]','third_title')!!}
			{!! Form::text('third_title','',['class'=>'form-control'])!!}
			<label for="name" class="hws_form_label">Content:</label>
			{!!Form::textarea('third_text','',['class'=>'form-control'])!!}
		</div><br><br>	
		<div class="form-group has-feedback" style="position:relative;">
			<label for="name" class="hws_form_label">Fourth Section</label><br>			
			<label for="name" class="hws_form_label">Title:</label>
			{!! Form::hidden('txt_name[]','fourth_title')!!}
			{!! Form::text('fourth_title','',['class'=>'form-control'])!!}
			<label for="name" class="hws_form_label">Image:</label>
			{!! Form::file('fourth_image',['class'=>'form-control'])!!}
			<label for="name" class="hws_form_label">Image Title</label>
			{!! Form::hidden('txt_name[]','image_title')!!}
			{!! Form::text('image_title','',['class'=>'form-control'])!!}
		</div>	

		{!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
</div>
</div>
{!! Form::close()!!}
</div>
@endsection

@push('footer-script')
@endpush