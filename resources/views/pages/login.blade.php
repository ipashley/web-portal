@extends('layout.app')
@section('content')


<div>


<div class="form">
    
        <h1 style="text-align:center; color:black;">Admin Login</h1>
    
    <form action="{{route('pages.myAdmin')}}" method="GET" onsubmit="return validation()" name="login" class="field">
     @csrf
             <img src="/usericon.png" alt="usericon" style="width:60px; height:60px;position:relative; left:50px;">  

              <input type="text"   id="fname" name="uname" placeholder="Enter UserName/Email"><br>
              <p id="err"></p>
              <input type="text"   id="passwd" name="passwd" placeholder="Enter Password"><br>
               <label style="color:black; position:relative; top:100px;">
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>             
             
            <button type="submit" style="position:relative; top:150px; left:20px;">Login</button>
         </form>
         <div class="remember">
         
          <a href="" style="color:black;" >Forget your password?</a>
         </div>

    </div>
      
            
</div>
   <script>
function validation(){
  var fname;
  var passwd;
  
  fname=document.login.fname.value;
  passwd=document.login.passwd.value;
  if(fname==''){
       document.getElementById('err').innerHTML="<span style='color:red;'>please enter username/password</span>";
       return false;
  }else if(passwd==''){
     document.getElementById('err').innerHTML="<span style='color:red;'>please enter username/password</span>";
       return false;
  }else{
    return true;
  }

}



</script>

@endsection