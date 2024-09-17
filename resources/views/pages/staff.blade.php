@extends('layout.app')
@section('content')

<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." ><img src="/search.png" style="position:relative; top:10px; left:1005px;">

<h1 id="heading"> GST STAFF MEMBERS</h1>
<img src="/gst_logo.png" alt="gst_logo" style="width:80px; height:80px; position:relative; bottom:20px; left:1000px;">
 <ul class="navigation">
        <li class="ul1"><a href="{{route('landing_page')}}">HOME</a></li>
        <li class="ul1"><a href="/aboutus">ABOUT US</a></li>
        <li class="ul1"><a href="library">LIBRARY</a></li>
        <li class="ul1"><a href="{{route('pages.staff')}}">STAFF</a></li>
        <li class="ul1"><a href="gst website">GST WEBSITE</a></li>

    </ul>
    
<table id="members">

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
  @foreach($staffs  as $value)
  <tr>
    <td>{{ $loop->index + 1  }}</td>
    <td>{{ $value->sname  }}</td>
    <td>{{ $value->Email  }}</td>
    <td>{{ $value->Phone  }}</td>
    <td>{{ $value->Position  }}</td>
  </tr>
  @endforeach


</table>
{{-- 
Functionality of search button  --}}
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("members");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
 for (i = 1; i < tr.length; i++) { // Start at 1 to skip the header row
        tr[i].style.display = "none"; // Hide the row initially

  // Loop through all columns of the current row
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            if (td[j]) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = ""; // Show the row if a match is found
                    break; // Stop checking other cells in this row
    }
  }
}
 }
}
</script>

@endsection