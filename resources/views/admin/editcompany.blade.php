@extends('admin.layout')

@section('content')

<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
  margin-left: 16px;
}

.col-75 {
  float: left;
  width: 65%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

<div class="container">
<h2>Update Data</h2>

  <form action="{{url('/admin/edit')}}" method="post">
  @csrf  
  <input type="hidden" name="id" value="{{$data['id']}}">
    <div class="row">
      <div class="col-25">
        <label for="name">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="name" value="{{$data['name']}}">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" value="{{$data['email']}}">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia"{{$data->country =="australia" ? 'selected' : ''}}>Australia</option>
          <option value="canada"{{$data->country =="canada" ? 'selected' : ''}}>Canada</option>
          <option value="usa"{{$data->country =="usa" ? 'selected' : ''}}>USA</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" style="height:200px"> {{$data['subject']}} </textarea>
      </div>
    </div>
	<div class="col-75">
    <div class="row">
      <input type="submit" value="Update">
    </div>
	</div>
  </form>
</div>

@endsection

@push('footer-script')
@endpush