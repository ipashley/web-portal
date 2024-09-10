@extends('layout.app')
@section('content')
 

<div class="former">
    @if ($errors->any())
        <div class="alert alert-danger">
            There is problem in your input
              <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{$errors}}</li>
                 @endforeach
              </ul>
        </div>
    @endif                 
<h2 style="position:relative; top:5px; text-align:center;">myAdmin</h2>
<div class="add">
   <h2 style="text-align:center;">Add Members</h2>
 <form action="{{route('pages.store')}}" method="POST" class="fields">
               
@csrf
              <input type="text" name="sname" placeholder="Enter Name" style="margin-bottom:10px;"><br>

              <input type="text" name="Email" placeholder="Enter your Email" style="margin-bottom:10px;"><br>

              <input type="text" name="Phone" placeholder="Enter Phone Number" style="margin-bottom:10px;"><br>

              <input type="text" name="Position" placeholder="Enter position" style="margin-bottom:10x;"><br>
            <button type="submit" style="position:relative;top:50px; left:20px;background-color: #99730a;  color:white;">Add</button>
         </form>
</div>
<div class="table">


</div>
<button  type="submit" style="position:relative; top:5px; left:20px; background-color: #99730a; color:white;">Delete</button>
<button type="submit" style="position:relative; top:5px; left:40px; background-color: #99730a;  color:white;">Update</button>
<button type="submit" style="position:relative; top:5px; left:60px; background-color: #99730a;  color:white;">View</button>



</div>



@endsection