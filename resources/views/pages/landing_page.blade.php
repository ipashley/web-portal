@extends('layout.app')
 @section('landing_page')

       <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category"><img src="/search.png" style="position:relative; top:10px; left:1005px;">

        <body class="land">
          
                <img src="image/emblem.png" alt="emblem" style="width:80px; height:80px; position:relative; top:100px; left:0px;"><h1 class="headtitle"> GST LIBRARY WEB PORTAL</h1><img src="/gst_logo.png" alt="gst_logo" style="width:80px; height:80px; position:relative; bottom:10px; left:1000px;">

                    <ul class="navigation">
                        <li class="ul1"><a href="home">HOME</a></li>
                        <li class="ul1"><a href="{{route('about')}}">ABOUT US</a></li>
                        <li class="ul1"><a href="library">LIBRARY</a></li>
                        <li class="ul1"><a href="{{route('pages.staff')}}">STAFF</a></li>
                        <li class="ul1"><a href="https://www.gst.go.tz">GST WEBSITE</a></li>

                        <!-- <input type="search" name="" id="">
                        <input type="button" value="search"> -->
                      

                    </ul>
                    <div class="mainContainer">
                        <div class="div1" >
                    <ul >
                        <li class="ul2"><a href="#gst library">GST LIBRARY</a></li>
                        <li class="ul2"><a href="#catalogue">CATALOGUE</a></li>
                       <li class="ul2"><a href="#link">LINK</a></li>
                      
                    </ul>
                        </div>
  <div class="slideshow-container">

    <div class="mySlides fade">
       <img src="img/image 1.jpeg" alt="image 1" class="images">
       <div class="text">Tanzania Yanadi Fursa za Madini Mkakati Korea Kusini na Asia.</div>
    </div> 

    <div class="mySlides fade">
        <img src="img/image 2.jpeg" alt="image 1" class="images">
        <div class="text">Watumishi GST Wapatiwa Semina ya Maadili, Rushwa na Magonjwa 27 Juni 2024</div>
    </div>

    <div  class="mySlides fade">
        <img src="img/image 3.jpeg" class="images">
        <div class="text">GST inaendelea kutoa elimu kwa wadau mbalimbali wa madini kwenye Wiki ya Maonesho ya Madini inayoendelea katika Viwanja vya Jakaya Kikwete, leo tarehe 22 Juni 2024, Dodoma.</div>
    </div >
     <div class="mySlides fade">
        <img src="img/image 4.jpeg" class="images">
        <div class="text">Maadhimisho ya Siku ya Wafanyakazi Duniani Mei Mosi 2024</div>
     </div>
    <div class="mySlides fade">
       <img src="img/image 5.jpeg" class="images">
       <div class="text">GST kujenga Maabara ya Kisasa jijini Dodoma, Kufanya Utafiti wa kina kufikia 50%. Waziri Mhe. Mavunde ameyasema hayo leo Aprili 24, 2024 jijini Dodoma katika kikao cha kujadili namna bora ya utendaji kazi kilichowakutanisha Watumishi wote wa GST.</div>
    </div>
    <div class="mySlides fade">
       <img src="img/image 6.jpeg" class="images">
       <div class="text">Waziri wa Madini Mhe.Anthony Mavunde amewataka Watumishi wa Taasisi ya Jiolojia na Utafiti wa Madini Tanzania (GST) kuchapa kazi kwa bidii ili kutimiza Vision 2030, GST Kujenga maabara ya Kisasa Jijini Dodoma.</div>
    </div>
    
   </div>    


                    </div>
                    <div class="letdot">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                      </div>

                      <script>
                      let slideIndex = 0;
                      showSlides();

                      function showSlides() {
                        let i;
                        let slides = document.getElementsByClassName("mySlides");
                        let dots = document.getElementsByClassName("dot");
                        for (i = 0; i < slides.length; i++) {
                          slides[i].style.display = "none";
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) {slideIndex = 1}
                        for (i = 1; i < dots.length; i++) {
                          dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex-1].style.display = "block";
                        dots[slideIndex-1].className += " active";
                        setTimeout(showSlides, 2000);
                      }
                      </script>
                        <footer>
                            LIBRARY @2024 All right reserved developed by GST ICT Team
                        </footer>

 @endsection
