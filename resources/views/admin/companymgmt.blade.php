@extends('admin.layout')
@section('content')

<div class="container">
  <h2>Company Management</h2>
  <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>  
  <table style="width:100%">
    <thead>
      <tr class="row btn btn-primary btn-lg btn-block">
        <th class="col-sm-12"><a href="{{ url('/admin/addcompany') }}" class="btn btn-dark" role="button" aria-pressed="true">
          <span style="padding: 10px;">Add</span></a></th>
      </tr>
    </thead>
  </table>
  
  <table class="table">
    <thead>      
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Country</th>
		    <th>Subject</th>
		    <th>Action</th>		
      </tr>
    </thead>
    <tbody>
	@foreach($datatests as $item)	
      <tr>
        <td>{{$item['name']}}</td>
		    <td>{{$item['email']}}</td>
        <td>{{$item['country']}}</td>
		    <td>{{$item['subject']}}</td>
		    <td><a href={{"delete/".$item['id']}}><i class="fa fa-trash-o" style="font-size:18px;color:red"></i></a>
	    	<a href={{"edit/".$item['id']}}><i class="fa fa-edit" style="font-size:18px;color:red; padding:0 0 0 10px;"></i> </a>
		    </td>
      </tr>
	  @endforeach      
    </tbody>
  </table>
</div>

@endsection

@push('footer-script')
@endpush