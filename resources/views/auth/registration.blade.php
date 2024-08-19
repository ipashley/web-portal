@extends('layout.app')
 @section('registration')
 <body>

<header>
  
       
   
</header>

<div class="form">
    <div class="registration">
        <h1>Registration form</h1>
    </div>
    <form action="landing_page.php" method="GET">
      
        <div class="container">
        <div class="column1">
            <input type="text"   id="fname" name="fname" value=" Your First Name"></br>
            <input type="text"   id="email" name="email" value="Your Email"></br>
            <input type="text"   id="pass" name="pass" value=" Your Password"></br>
        </div>
    
        <div class="column2">
            <input type="text"   id="lname" name="lname" value=" Your Last Name"></br>
            <input type="text"   id="number" name="number" value="Your Phone Number"></br>
          <input type="text"   id="passwd" name="passwd" value="Confirm Your Password"></br>


          <div class="button">
            <button>Register</button>
        </div>
    </div>
      
            
        </div>
    </form>
</div>    
</body>
    



    
 @endsection
