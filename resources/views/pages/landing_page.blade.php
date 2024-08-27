@extends('layout.app')
 @section('landing_page')

        <body>
                <h1> GST LIBRARY WEB PORTAL</h1>

                    <ul>
                        <li><a href="home">HOME</a></li>
                        <li><a href="/aboutus">ABOUT US</a></li>
                        <li><a href="library">LIBRARY</a></li>
                        <li><a href="library">STAFF</a></li>
                        <li><a href="gst website">GST WEBSITE</a></li>

                    </ul>
                    <div>
                        <div1>
                    <ul2>
                        <li2><a href="#gst library">GST LIBRARY</a></li2>
                        <li2><a href="#catalogue">CATALOGUE</a></li2>
                       <li2><a href="#search">SEARCH</a></li2>
                       <li2><a href="#link">LINK</a></li2>
                    </ul2>
                        </div1>
                        <div2 class="slideshow-container">

<div class="mySlides fade">
    <img src="img/image 1.jpeg">
    <div class="text">Tanzania Yanadi Fursa za Madini Mkakati Korea Kusini na Asia.</div>
  </div>

  <div class="mySlides fade">
    <img src="img/image 2.jpeg">
    <div class="text">Watumishi GST Wapatiwa Semina ya Maadili, Rushwa na Magonjwa 27 Juni 2024</div>

  </div>

  <div  class="mySlides fade">
    <img src="img/image 3.jpeg">
    <div class="text">GST inaendelea kutoa elimu kwa wadau mbalimbali wa madini kwenye Wiki ya Maonesho ya Madini inayoendelea katika Viwanja vya Jakaya Kikwete, leo tarehe 22 Juni 2024, Dodoma.</div>
  </div >
  <div class="mySlides fade">
    <img src="img/image 4.jpeg">
    <div class="text">Maadhimisho ya Siku ya Wafanyakazi Duniani Mei Mosi 2024</div>
  </div>
  <div class="mySlides fade">
    <img src="img/image 5.jpeg">
    <div class="text">GST kujenga Maabara ya Kisasa jijini Dodoma, Kufanya Utafiti wa kina kufikia 50%. Waziri Mhe. Mavunde ameyasema hayo leo Aprili 24, 2024 jijini Dodoma katika kikao cha kujadili namna bora ya utendaji kazi kilichowakutanisha Watumishi wote wa GST.</div>
  </div>
  <div class="mySlides fade">
    <img src="img/image 6.jpeg">
    <div class="text">Waziri wa Madini Mhe.Anthony Mavunde amewataka Watumishi wa Taasisi ya Jiolojia na Utafiti wa Madini Tanzania (GST) kuchapa kazi kwa bidii ili kutimiza Vision 2030, GST Kujenga maabara ya Kisasa Jijini Dodoma.</div>
  </div>
  <div class="mySlides fade">
    <img src="img/image 7.jpeg">
    <div class="text">Wekeza Kwa Wanawake Kuharakisha Maendeleo Ya Taifa na Ustawi wa Jamii</div>
  </div>
                        </div2>


                    </div>
                    <div>
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
