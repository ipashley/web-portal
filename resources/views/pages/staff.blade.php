@extends('layout.app')
@section('content')

<h1 id="text">GST STAFF MEMBERS</h1>
<img src="/gst_logo.png" alt="gst_logo" style="width:60px; height:60px; position:relative; bottom:20px; left:950px;">

<table class="members">

  @if(session('success'))
       <div class="alert alert-success">
         {{ session('success') }}
      </div>
  @endif
  <tr>
    <th style="width:5%">S/N</th>
    <th>Name of Staff</th>
    <th>Email</th>
    <th>Phone Number</th>
     <th>Position</th>
  </tr>
  @foreach($staffs as $value)
  <tr>
    <td>{{ $loop->index + 1  }}</td>
    <td>{{ $value->sname  }}</td>
    <td>{{ $value->Email  }}</td>
    <td>{{ $value->Phone  }}</td>
    <td>{{ $value->Position  }}</td>
  </tr>
  @endforeach


</table>

@endsection