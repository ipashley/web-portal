@extends('layout.app')
@section('content')
<div class="container"> 

<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
<img src="/search.png" alt="search" style="position:relative; top:15px; left:5px;">
<nav class="column">
<a href="Home" class="">home</a>

<a href="About us" class="">about us</a>

<a href="Staff" class="">staff</a>

<a href="Books" class="">Book</a>
</nav>
<div id="">
    <div class="text"><P>BOOKS AVAILABLE</P></div>
    <div class="image" style="background:green;">
    <img src="/book.jpg" alt="book" style="border-radius: 50px 75px 15px; width:190px; height:200px; ">
    </div>
</div>
</div>



@endsection