@extends('layout.app')
@section('content')

<table>
<img src="/gst_logo.png" alt="gstlogo" style="width:72px; height:60px; position:absolute; top:1.5px; left:1080px;">

<h1 style="text-align:center; color:goldenrod;">GST STAFF MEMBERS</h1>

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