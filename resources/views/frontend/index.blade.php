<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="utf-8">
  <title>@lang('lang.SDU Clubs'): @yield('title')</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <!-- font awesome -->
  <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/font-awesome.css')}}">
  <!-- main css -->
  <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/style.css')}}">
    <!-- responsive css -->
  <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/responsive.css')}}">
   <!-- color skin-->
  <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/skins/color-1.css')}}">
  <!-- switcher  css -->
  <link rel="stylesheet" type="text/css" class="alternate-style" title="color-1" href="{{asset('/frontend/css/skins/color-1.css')}}" >
  <link rel="stylesheet" type="text/css" class="alternate-style" title="color-2" href="{{asset('/frontend/css/skins/color-2.css')}}" disabled>
  <link rel="stylesheet" type="text/css" class="alternate-style" title="color-3" href="{{asset('/frontend/css/skins/color-3.css')}}" disabled>
  <link rel="stylesheet" type="text/css" class="alternate-style" title="color-4" href="{{asset('/frontend/css/skins/color-4.css')}}" disabled>
  <link rel="stylesheet" type="text/css" class="alternate-style" title="color-5" href="{{asset('/frontend/css/skins/color-5.css')}}" disabled>
  <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/style-switcher.css')}}">
  
 
</head>
<body >

  <!-- header start-->
<header class="header">
  <div class="container">
    <div class="row justify-content-between">
      <div class="logo">
        <a href="index.html">M</a>
      </div>
      <a class="link" href="{{route('locale', __('lang.set_lang'))}}">@lang('lang.set_lang')</a>
      <div class="humburger-btn outer-shadow hover-in-shadow">
        <span></span>
      </div>
    </div>
  </div>
</header>
 <!-- header end-->
  
  <!-- navigation menu start-->
  <nav class="nav-menu">
    <div class="close-nav-menu outer-shadow hover-in-shadow">&times;</div>
    <div class="nav-menu-inner">
      <ul>
        <li><a href="#home" class="link-item inner-shadow active">@lang('lang.Home')</a></li>
        <li><a href="#about" class="link-item outer-shadow hover-in-shadow">@lang('lang.About Us')</a></li>
        <li><a href="#sections" class="link-item outer-shadow hover-in-shadow">@lang('lang.Sections')</a></li>
        <li><a href="#clubs" class="link-item outer-shadow hover-in-shadow">@lang('lang.Clubs')</a></li>
        <li><a href="#contact" class="link-item outer-shadow hover-in-shadow">@lang('lang.Join')</a></li>
      </ul>
    </div>
    <!-- copyright text-->
    <p class="copyright-text">&copy; 2021 meeamoon</p>

   
  </nav>
  <div class="fade-out-effect"></div>
  <!-- navigation menu end-->

    <!-- home start-->
    <section class="home-section section active" id="home">
      <!-- effect start-->
      <div class="effect-wrap">
        <div class="effect effect-1">
        </div>
        <div class="effect effect-2">
          <div></div><div></div><div></div><div></div><div></div><div></div><div></div>
          <div></div><div></div><div></div><div></div><div></div><div></div><div></div>
          <div></div><div></div><div></div><div></div><div></div><div></div>
          <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
        </div>
        <div class="effect effect-3">
        </div>
        <div class="effect effect-4">
        </div>
        <div class="effect effect-5">
          <div></div><div></div><div></div><div></div><div></div>
          <div></div><div></div><div></div><div></div><div></div>
        </div>
      </div>
        <!-- effect end-->
      <div class="container">
        <div class="row full-screen aligh-items-center ">
          <div class="home-text">
            <h2>@lang('lang.SDU Clubs')</h2>
            <h1>@lang('lang.Discover a new world')</h1>
            <a href="#contact" class="link-item btn-1 outer-shadow hover-in-shadow">@lang('lang.Join')</a>
          </div>
          <div class="home-img">
            <div class="img-box inner-shadow">
              <img src="img/home-pic.png" class="outer-shadow" alt="home">
            </div>
          </div>
        </div>
      </div>
    </section>
      <!-- home end-->


      <!-- about start-->
      <section class="about-section section" id="about">
        <div class="container">
          <div class="row">
            <div class="section-title">
              <h2 data-heading="main info">@lang('lang.About Us')</h2>
            </div>
          </div>
          <div class="row">
            <div class="about-img">
              <div class="img-box inner-shadow">
                <img src="img/about-pic.png" class="outer-shadow" alt="about-pic">
              </div>
                 <!-- social link start-->
              <div class="social-links">
                <a href="#" class="outer-shadow hover-in-shadow"><i class="fab fa-facebook-f"></i></a>
                <a href="#"  class="outer-shadow hover-in-shadow"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/sdulife/?hl=ru" target="_blank" class="outer-shadow hover-in-shadow"><i class="fab fa-instagram"></i></a>
                <a href="#"  class="outer-shadow hover-in-shadow"><i class="fab fa-linkedin-in"></i></a>
              </div>
                 <!-- social link end-->
            </div>
            <div class="about-info">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id omnis delectus quasi dicta pariatur architecto porro, quas eaque voluptatum optio, sit magni odio repellendus sequi adipisci modi iusto recusandae ullam.</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam itaque, veritatis odit dicta quasi fugit facere, veniam rem eveniet similique commodi quaerat dolorum error asperiores quod quae cum, sapiente nisi.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- about end-->

      <!-- sections start-->
      <section class="service-section section" id="sections">
        <div class="container">
          <div class="row">
            <div class="section-title">
              <h2 data-heading="sections">@lang('lang.What we do?')</h2>
            </div>
          </div>
          <div class="row">

            <div class="service-item">
              <div class="service-item-inner outer-shadow">
                <div class="icon inner-shadow">
                  <i class="fas fa-camera"></i>
                 </div>
                 <h3>Photo </h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Esse odit quasi distinctio facilis, unde, veritatis, ea nisi eaque</p>
              </div>
            </div>

            <div class="service-item">
              <div class="service-item-inner outer-shadow">
                <div class="icon inner-shadow">
                  <i class="fas fa-search"></i>
                 </div>
                 <h3>Debate </h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse odit quasi distinctio facilis, unde, veritatis, ea nisi eaque.</p>
              </div>
            </div>

            <div class="service-item">
              <div class="service-item-inner outer-shadow">
                <div class="icon inner-shadow">
                  <i class="fas fa-palette"></i>
                 </div>
                 <h3>Organization</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse odit quasi distinctio facilis, unde, veritatis, ea nisi eaque</p>
              </div>
            </div>

            <div class="service-item">
              <div class="service-item-inner outer-shadow">
                <div class="icon inner-shadow">
                  <i class="fas fa-laptop"></i>
                 </div>
                 <h3>Education</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse odit quasi distinctio facilis, unde, veritatis, ea nisi eaque</p>
              </div>
            </div>

            <div class="service-item">
              <div class="service-item-inner outer-shadow">
                <div class="icon inner-shadow">
                  <i class="fas fa-mountain"></i>
                 </div>
                 <h3>Entertainment</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Esse odit quasi distinctio facilis, unde, veritatis, ea nisi eaque</p>
              </div>
            </div>

            <div class="service-item">
              <div class="service-item-inner outer-shadow">
                <div class="icon inner-shadow">
                  <i class="fas fa-music"></i>
                 </div>
                 <h3>Dance</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse odit quasi distinctio facilis, unde, veritatis, ea nisi eaque</p>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- sections end-->

      <!-- clubs section start-->
      <section class="clubs-section section" id="clubs">
        <div class="container">
          <div class="row">
            <div class="section-title">
              <h2 data-heading="Clubs">Clubs</h2>
            </div>
          </div>
          <!-- clubs filter start-->
          <div class="row">
            <div class="clubs-filter">
              <span class="filter-item outer-shadow active" data-target="all">all</span>
              <span class="filter-item" data-target="photo">photo</span>
              <span class="filter-item" data-target="dance">dance</span>
              <span class="filter-item" data-target="organization">organization</span>
              <span class="filter-item" data-target="entertainment">entertainment</span>
            </div>
          </div>
           <!-- clubs filter end-->

           <!-- clubs item start-->
          <div class="row clubs-items">
              
          <div class="clubs-item" data-category="organization">
            <div class="clubs-item-inner outer-shadow">
              <div class="clubs-item-img">
                <img src="img/portfolio/thumb/project-1.png" alt="event" data-screenshots="img/portfolio/large/project-1/event-1.png,
                img/portfolio/large/project-1/event-2.png,
                img/portfolio/large/project-1/event-3.jpeg,
                img/portfolio/large/project-1/event-4.jpeg
              ">

                <!--view-->
                <span class="view-club">view</span>
              </div>
                <p class="clubs-item-title">Event club</p>

                <!--clubs item details start-->
                <div class="clubs-item-details">
                  <div class="row">
                    <div class="description">
                     <h3>What we do?</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam deleniti perferendis ab minus sit velit facilis distinctio repellendus enim quod ut exercitationem sunt vel, alias veritatis repellat placeat ipsum perspiciatis!</p>
                    </div>
                    <div class="info">
                      <h3>Club info</h3>
                      <ul>
                        <li>Date - <span>2008</span></li>
                        <li>Хэд - <span>Имя Фамилия</span></li>
                        <li>№ of members - <span>20</span></li>
                        <li>instagram - <span><a href="#">event_sdu</a></span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--clubs item details end-->
              </div>
          </div>

          <div class="clubs-item" data-category="organization">
            <div class="clubs-item-inner outer-shadow">
              <div class="clubs-item-img">
                <img src="img/portfolio/thumb/6.png" alt="event" data-screenshots="img/portfolio/large/project-2/1.jpeg,
                img/portfolio/large/project-2/2.jpeg,img/portfolio/large/project-2/3.jpeg,img/portfolio/large/project-2/4.jpeg">

                <!--view-->
                <span class="view-club">view</span>
              </div>
                <p class="clubs-item-title">enactus club</p>

                <!--clubs item details start-->
                <div class="clubs-item-details">
                  <div class="row">
                    <div class="description">
                     <h3>What we do?</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam deleniti perferendis ab minus sit velit facilis distinctio repellendus enim quod ut exercitationem sunt vel, alias veritatis repellat placeat ipsum perspiciatis!</p>
                    </div>
                    <div class="info">
                      <h3>Club info</h3>
                      <ul>
                        <li>Date - <span>2008</span></li>
                        <li>Хэд - <span>Имя Фамилия</span></li>
                        <li>№ of members - <span>20</span></li>
                        <li>instagram - <span><a href="#">enactus_sdu</a></span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--clubs item details end-->
              </div>
          </div>

          <div class="clubs-item" data-category="photo">
            <div class="clubs-item-inner outer-shadow">
              <div class="clubs-item-img">
                <img src="img/portfolio/thumb/3.png" alt="event" data-screenshots="img/portfolio/large/project-3/1.jpeg">

                <!--view-->
                <span class="view-club">view</span>
              </div>
                <p class="clubs-item-title">pandup club</p>

                <!--clubs item details start-->
                <div class="clubs-item-details">
                  <div class="row">
                    <div class="description">
                     <h3>What we do?</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam deleniti perferendis ab minus sit velit facilis distinctio repellendus enim quod ut exercitationem sunt vel, alias veritatis repellat placeat ipsum perspiciatis!</p>
                    </div>
                    <div class="info">
                      <h3>Club info</h3>
                      <ul>
                        <li>Date - <span>2008</span></li>
                        <li>Хэд - <span>Имя Фамилия</span></li>
                        <li>№ of members - <span>20</span></li>
                        <li>instagram - <span><a href="#">pandup_sdu</a></span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--clubs item details end-->
              </div>
          </div>

          <div class="clubs-item" data-category="entertainment">
            <div class="clubs-item-inner outer-shadow">
              <div class="clubs-item-img">
              <img src="img/portfolio/thumb/4.png" alt="event" data-screenshots="img/portfolio/large/project-4/mk-1.jpeg,
                img/portfolio/large/project-4/mk-2.jpeg,img/portfolio/large/project-4/mk-3.jpeg,img/portfolio/large/project-4/mk-4.jpeg">

                <!--view-->
                <span class="view-club">view</span>
              </div>
                <p class="clubs-item-title">mountain_kings club</p>

                <!--clubs item details start-->
                <div class="clubs-item-details">
                  <div class="row">
                    <div class="description">
                     <h3>What we do?</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam deleniti perferendis ab minus sit velit facilis distinctio repellendus enim quod ut exercitationem sunt vel, alias veritatis repellat placeat ipsum perspiciatis!</p>
                    </div>
                    <div class="info">
                      <h3>Club info</h3>
                      <ul>
                        <li>Date - <span>2008</span></li>
                        <li>Хэд - <span>Имя Фамилия</span></li>
                        <li>№ of members - <span>20</span></li>
                        <li>instagram - <span><a href="#">mountain_kings.sdu</a></span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--clubs item details end-->
              </div>
          </div>

          <div class="clubs-item" data-category="dance">
            <div class="clubs-item-inner outer-shadow">
              <div class="clubs-item-img">
                <img src="img/portfolio/thumb/5.png" alt="event" data-screenshots="img/portfolio/large/project-5/1.jpeg,img/portfolio/large/project-5/2.jpeg">

                <!--view-->
                <span class="view-club">view</span>
              </div>
                <p class="clubs-item-title">mmdance club</p>

                <!--clubs item details start-->
                <div class="clubs-item-details">
                  <div class="row">
                    <div class="description">
                     <h3>What we do?</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam deleniti perferendis ab minus sit velit facilis distinctio repellendus enim quod ut exercitationem sunt vel, alias veritatis repellat placeat ipsum perspiciatis!</p>
                    </div>
                    <div class="info">
                      <h3>Club info</h3>
                      <ul>
                        <li>Date - <span>2008</span></li>
                        <li>Хэд - <span>Имя Фамилия</span></li>
                        <li>№ of members - <span>20</span></li>
                        <li>instagram - <span><a href="#">mmdance_sdu</a></span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--clubs item details end-->
              </div>
          </div>

          <div class="clubs-item" data-category="dance">
            <div class="clubs-item-inner outer-shadow">
              <div class="clubs-item-img">
              <img src="img/portfolio/thumb/2.png" alt="event" data-screenshots="img/portfolio/large/project-2/1.jpeg,
                img/portfolio/large/project-2/2.jpeg,img/portfolio/large/project-2/3.jpeg,img/portfolio/large/project-2/4.jpeg">
                <!--view-->
                <span class="view-club">view</span>
              </div>
                <p class="clubs-item-title">orlean club</p>

                <!--clubs item details start-->
                <div class="clubs-item-details">
                  <div class="row">
                    <div class="description">
                     <h3>What we do?</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam deleniti perferendis ab minus sit velit facilis distinctio repellendus enim quod ut exercitationem sunt vel, alias veritatis repellat placeat ipsum perspiciatis!</p>
                    </div>
                    <div class="info">
                      <h3>Club info</h3>
                      <ul>
                        <li>Date - <span>2008</span></li>
                        <li>Хэд - <span>Имя Фамилия</span></li>
                        <li>№ of members - <span>20</span></li>
                        <li>instagram - <span><a href="#">orlean_sdu</a></span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--clubs item details end-->
              </div>
          </div>

          </div>
           <!-- clubs item end-->
        </div>
      </section>

       <!-- clubs section end-->

       <!-- contact section start -->
       <section class="contact-section section" id="contact">
         <div class="container">
           <div class="row">
             <div class="section-title">
               <h2 data-heading="join">Join US</h2>
             </div>
           </div>
           <div class="row">
              <!-- contact item start-->
                <div class="contact-item">
                  <div class="contact-item-inner outer-shadow">
                    <i class="fas fa-phone"></i>
                    <span>Phone</span>
                    <p>+7 (727) 307 95 65 </p>
                  </div>
                </div>
              <!-- contact item end-->

               <!-- contact item start-->
               <div class="contact-item">
                <div class="contact-item-inner outer-shadow">
                  <i class="fab fa-instagram"></i>
                  <span>instagram</span>
                  <p>@sdu_life</p>
                </div>
              </div>
              <!-- contact item end-->

               <!-- contact item start-->
               <div class="contact-item">
                <div class="contact-item-inner outer-shadow">
                  <i class="fas fa-map-marker-alt"></i>
                  <span>Address</span>
                  <p>Almaty region, Karasay area 040900, 
                     Kaskelen city, Abylai khan street, 1/1</p>
                </div>
              </div>
              <!-- contact item end-->
              
              </div>
           
              <div class="row">
                <div class="contact-form">
          <form action="{{ route('contact.send') }} "  method="post" enctype="multipart/form-data">
          @csrf               
                    <div class="row">
                      <div class="w-50">
                        <div class="input-group outer-shadow hover-in-shadow">
                          <input type="text" placeholder="Name Surname" name="name" class="input-control">
                        </div>
                        <div class="input-group outer-shadow hover-in-shadow">
                          <input type="text" placeholder="faculty course" name="faculty" class="input-control">
                        </div>
                        <div class="input-group outer-shadow hover-in-shadow">
                          <input type="tel" placeholder="phone number" name="phone" class="input-control">
                        </div>
                        <div class="input-group outer-shadow hover-in-shadow">
                          <input type="tel" placeholder="club" name="club" class="input-control">
                        </div>
                        </div>
                      <div class="w-50">
                        <div class="input-group outer-shadow hover-in-shadow">
                          <textarea class="input-control" placeholder="your message" name="message"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="submit-btn">
                        <button type="submit" class="btn-1 outer-shadow hover-in-shadow">Submit</button>
                      </div>
                  </div>
                  </form>
                  <form action="{{route('upload.uploadfile')}}" method="POST" enctype="multipart/form-data">
       @csrf
       <div>
       <label for="file"  class="input-control"> Choose file </label>
       <input type="file" class="input-control" name="file" id="file" />
       </div>
       <button type="submit" class="btn-1 outer-shadow hover-in-shadow">Upload</button>
        </form>
                  </div>
                    </div>
            </div>
       </section>
       <!-- contact section end-->
  

            <!-- clubs popup start-->
              <div class="pp clubs-popup">
                <div class="pp-details">
                 <div class="pp-details-inner">
                   <div class="pp-title">
                     <h2>Event Club</h2>
                     <p>Category - <span class="pp-club-category">Organization</span></p>
                   </div>
                   <div class="pp-club-details">
                    <div class="row">
                      <div class="description">
                       <h3>What we do?</h3>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam deleniti perferendis ab minus sit velit facilis distinctio repellendus enim quod ut exercitationem sunt vel,
                          alias veritatis repellat placeat ipsum perspiciatis!</p>
                      </div>
                      <div class="info">
                        <h3>Club info</h3>
                        <ul>
                          <li>Date - <span>2008</span></li>
                          <li>Хэд - <span>Имя Фамилия</span></li>
                          <li>№ of members - <span>20</span></li>
                          <li>instagram - <span><a href="#">event_sdu</a></span></li>
                        </ul>
                      </div>
                    </div>
                   </div>
                 </div>
                </div>
                
                <div class="separator"></div>

                <div class="pp-main">
                  <div class="pp-main-inner">
                    <div class="pp-club-details-btn outer-shadow hover-in-shadow">Portfolio <i class="fas fa-plus"></i></div>
                    <div class="pp-close outer-shadow hover-in-shadow ">&times;</div>
                    <img src="img/portfolio/large/project-1/event-1.png" alt="img" class="pp-img outer-shadow">
                    <div class="pp-counter">1 of 6</div>
                  </div>
                  <div class="pp-loader">
                    <div></div>
                  </div>
                  <!--pp navigation-->
                  <div class="pp-prev"><i class="fas fa-play"></i></div>
                  <div class="pp-next"><i class="fas fa-play"></i></div>
                </div>
              </div>
            <!-- clubs popup end-->

                <!-- style switcher start-->

                <div class="style-switcher outer-shadow">
                  <div class="style-switcher-toggler s-icon outer-shadow hover-in-shadow">
                    <i class="fas fa-cog fa-spin"></i>
                  </div>
                  <div class="day-night s-icon outer-shadow hover-in-shadow">
                    <i class="fas"></i>
                  </div>
                 

                  <h4>Theme Colors</h4>
                  <div class="colors">
                    <span class="color-1" onclick="setActiveStyle(' + color-1 + ')"></span>
                    <span class="color-2" onclick="setActiveStyle(' + color-2 + ')"></span>
                    <span class="color-3" onclick="setActiveStyle(' + color-3 + ')"></span>
                    <span class="color-4" onclick="setActiveStyle(' + color-4 + ')"></span>
                    <span class="color-5" onclick="setActiveStyle(' + color-5 + ')"></span>
                  </div>
                </div>
                <!-- style switcher end-->



<!-- main js -->
<script>
  //navigation menu
(() =>{
     const humburgerBtn = document.querySelector(".humburger-btn"),
     navMenu = document.querySelector(".nav-menu"),
     closeNavBtn = navMenu.querySelector(".close-nav-menu");

     humburgerBtn.addEventListener("click", showNavMenu);
     closeNavBtn.addEventListener("click",  hideNavMenu);

     function showNavMenu(){
        navMenu.classList.add("open");
        bodyScrollingToggle();
    }

    function hideNavMenu(){
        navMenu.classList.remove("open");
        fadeOutEffect();
        bodyScrollingToggle();
    }
    function fadeOutEffect(){
        document.querySelector(".fade-out-effect").classList.add("active");
        setTimeout(() =>{
        document.querySelector(".fade-out-effect").classList.remove("active");
        },300)
    }
    //attach and event handler to document
    document.addEventListener("click", (event) =>{
        if(event.target.classList.contains('link-item')){
           if(event.target.hash !==""){
               event.preventDefault();
               const hash = event.target.hash;
               document.querySelector(".section.active").classList.add("hide");
               document.querySelector(".section.active").classList.remove("active");
               document.querySelector(hash).classList.add("active");
               document.querySelector(hash).classList.remove("hide");
               navMenu.querySelector(".active").classList.add("outer-shadow","hover-in-shadow");
               navMenu.querySelector(".active").classList.remove("active","inner-shadow");
               if(navMenu.classList.contains("open")){
               event.target.classList.add("active","inner-shadow");
               event.target.classList.remove("outer-shadow","hover-in-shadow");
               hideNavMenu();
               
               }
               else{
               let navItems = navMenu.querySelectorAll(".link-item");
               navItems.forEach((item) =>{
                   if(hash === item.hash){
                    item.classList.add("active","inner-shadow");
                    item.classList.remove("outer-shadow","hover-in-shadow");
                   }
               })
               fadeOutEffect();
               }
           }
        }
        
    })
})();


function bodyScrollingToggle(){
    document.body.classList.toggle("stop-scrolling");
}

/*
clubs filter and popup----------------------------------------
*/

(() => {
 const filterContainer = document.querySelector(".clubs-filter"),
 clubsItemContainer = document.querySelector(".clubs-items"),
 clubsItems = document.querySelectorAll(".clubs-item"),
 popup = document.querySelector(".clubs-popup"),
 prevBtn = popup.querySelector(".pp-prev"),
 nextBtn = popup.querySelector(".pp-next"),
 closeBtn = popup.querySelector(".pp-close"),
 clubsDetailsContainer = popup.querySelector(".pp-details"),
 clubsDetailsBtn = popup.querySelector(".pp-club-details-btn");
 let itemIndex, slideIndex,screenshots;

 /*
 filter portfolio items----------------------------------------
*/
filterContainer.addEventListener("click", (event)=>{
    if(event.target.classList.contains("filter-item") &&
    !event.target.classList.contains("active")){
      //  deactivate existing active 'filter-item'
     filterContainer.querySelector(".active").classList.remove("outer-shadow","active");
     //activate new 'filter item'
     event.target.classList.add("active","outer-shadow");
     const target = event.target.getAttribute("data-target");
     clubsItems.forEach((item) => {
        if(target === item.getAttribute("data-category") || target === 'all'){
            item.classList.remove("hide");
            item.classList.add("show");
        }
        else{
            item.classList.remove("show");
            item.classList.add("hide");
        }
     })
    }
  })


  clubsItemContainer.addEventListener("click", (event) =>{
      if(event.target.closest(".clubs-item-inner")){
          const clubsItem = event.target.closest(".clubs-item-inner").parentElement;
         // get the information
         itemIndex = Array.from(clubsItem.parentElement.children).indexOf(clubsItem);
         screenshots = clubsItems[itemIndex].querySelector(".clubs-item-img img").getAttribute("data-screenshots");
        //screenshots
        screenshots = screenshots.split(",");
        if(screenshots.length === 1){
            prevBtn.style.display="none";
            nextBtn.style.display="none";
        }
        else{
            prevBtn.style.display="block";
            nextBtn.style.display="block";
        }
        slideIndex = 0;
        popupToggle();
        popupSlideshow();
        // popupDetails();
      }
  })

  closeBtn.addEventListener("click", () => {
    popupToggle();
  })

  function popupToggle(){
      popup.classList.toggle("open");
      bodyScrollingToggle();
  }

  function popupSlideshow(){
    const imgSrc = screenshots[slideIndex];
    const popupImg = popup.querySelector(".pp-img");
    //activate loader
    popup.querySelector(".pp-loader").classList.add("active");
    popupImg.src=imgSrc;
    popupImg.onload = () =>{
       // deactivate loader after the pop
    popup.querySelector(".pp-loader").classList.remove("active");
    }
    popup.querySelector(".pp-counter").innerHTML = (slideIndex+1) + " of " +
    screenshots.length;
  }

  //next slides
  nextBtn.addEventListener("click", () =>{
      if(slideIndex === screenshots.length-1){
          slideIndex = 0;
      }
      else{
          slideIndex++;
      }
      popupSlideshow();
      console.log("slideIndex:" + slideIndex);
  })
  //prev slides
  prevBtn.addEventListener("click", () =>{
    if(slideIndex === 0){
        slideIndex = screenshots.length-1;
    }
    else{
        slideIndex--;
    }
    popupSlideshow();
    console.log("slideIndex:" + slideIndex);
})
   function popupDetails(){
       const details = clubsItems[itemIndex].querySelector(".clubs-item-details").innerHTML;
       popup.querySelector(".pp-club-details").innerHTML = details;
       const title = clubsItems[itemIndex].querySelector(".clubs-item-title").innerHTML;
      popup.querySelector(".pp-title h2").innerHTML = title;
      
   }

 clubsDetailsBtn.addEventListener("click",() =>{
     popupDetailsToggle();
 })

 function popupDetailsToggle(){
    if(clubsDetailsContainer.classList.contains("active")){
        clubsDetailsBtn.querySelector("i").classList.remove("fa-minus");
        clubsDetailsBtn.querySelector("i").classList.add("fa-plus");
        clubsDetailsContainer.classList.remove("active");
        clubsDetailsContainer.style.maxHeight = 0 + "px";
    }
    else{
        clubsDetailsBtn.querySelector("i").classList.remove("fa-plus");
        clubsDetailsBtn.querySelector("i").classList.add("fa-minus");
        clubsDetailsContainer.classList.add("active");
        clubsDetailsContainer.style.maxHeight = clubsDetailsContainer.scrollHeight + "px";
        popup.scrollTo(0,clubsDetailsContainer.offsetTop);
    }
 }
})();

//hide all sections
(() => {
     const sections = document.querySelectorAll(".section");
     sections.forEach((section) => {
         if(!section.classList.contains("active")){
             section.classList.add("hide");
         }
     })
})();

</script>
<!-- style switcher js -->
<script >
  

const styleSwitcherToggler = document.querySelector(".style-switcher-toggler");
styleSwitcherToggler.addEventListener("click", () =>{
     document.querySelector(".style-switcher").classList.toggle("open");
})

window.addEventListener("scroll", () => {
    if(document.querySelector(".style-switcher").classList.contains("open")){
        document.querySelector(".style-switcher").classList.remove("open");
    }
})

const alternateStyles = document.querySelectorAll(".alternate-style");

function setActiveStyle(color){
   alternateStyles.forEach((style) =>{
       if(color === style.getAttribute("title")){
           style.removeAttribute("disabled");
       }
       else{
           style.setAttribute("disabled", "true");
       }
   })
}


const dayNight = document.querySelector(".day-night");

dayNight.addEventListener("click", () => {
    dayNight.querySelector("i").classList.toggle("fa-sun");
    dayNight.querySelector("i").classList.toggle("fa-moon");
    document.body.classList.toggle("dark");
})

window.addEventListener("load", () =>{
    if(document.body.classList.contains("dark")){
       dayNight.querySelector("i").classList.add("fa-sun");
    }
    else{
       dayNight.querySelector("i").classList.add("fa-moon");
    }
})
</script>
</body>
</html>

