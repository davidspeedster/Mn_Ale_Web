<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                @if ($logo!=null)
                <img src="{{asset($logo->name)}}" alt="">
                @else
                <div class="section-tittle section-tittle5 mb-50">
                    <div class="front-text">
                        <h4>Afro-European Engineers</h4>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
   <div class="header-area header-transparent">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
               <div class="container-fluid">
                   <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    @if ($location_info!=null)
                                    <li>{{$location_info->telephone_numbers}}</li>
                                    <li>{{$location_info->email}}</li>
                                    @endif
                                    <li>Monday - Friday 8:30 am - 6:30 pm, Sunday - CLOSED</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">
                                    @if ($accounts!=null)
                                    <li><a href="{{$accounts->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{$accounts->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{$accounts->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="{{$accounts->youtube}}"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="{{$accounts->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                   </div>
               </div>
            </div>
           <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <!-- logo-1 -->
                                @if ($logo!=null)
                                <a href="/" class="big-logo"><img src="{{asset($logo->name)}}"alt="logo"></a>
                                <!-- logo-2 -->
                                <a href="/" class="small-logo"><img src="{{asset($logo->name)}}" alt="logo"></a>
                                @else
                                <div class="section-tittle section-tittle5 mb-50">
                                    <div class="front-text">
                                        <h4>Afro-European Engineers</h4>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/about">About Us</a>
                                            <ul class="submenu">
                                                <li><a href="/about">Who We Are</a></li>
                                                <li><a href="/processes">Processes</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/our_team">Our Team</a></li>
                                        <li><a href="/projects">Projects</a>
                                            <ul class="submenu">
                                                <li><a href="/featuredProjects">Featured Projects</a></li>
                                                @foreach ($project_categories as $category)
                                            <li><a href="/singleCategoryView/{{$category->id}}">{{$category->projectCategoryName}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="/AEE_Dark/services">Services</a></li>
                                        <li><a href="/newsFeed">News Feed</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <a href="/AEE_Dark/contact" class="btn">Contact Now</a>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
   </div>
    <!-- Header End -->
</header>
