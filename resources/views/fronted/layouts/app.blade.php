<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>বাংলা নিউজপেপার</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    

    <!-- Favicon -->
    <link href="{{ url('front/img/favicon.icon') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">   

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url('front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('front/css/style.css') }}" rel="stylesheet">
    @yield('style')
</head>
<body>

  <!-- Topbar Start -->
  <div class="container-fluid">
        <div class="row align-items-center bg-light px-lg-5">
            <div class="col-12 col-md-8">
                <div class="d-flex justify-content-between">
                    <div class="bg-primary text-white text-center py-2" style="width: 100px;">সর্বশেষ:</div>
                    <div class="owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 100px); padding-left: 90px;">
                        <div class="text-truncate"><a class="text-secondary" href="">	উত্তরে বাড়ছে চার নদীর পানি, বন্যা পরিস্থিতির অবনতি</a></div>
                        <div class="text-truncate"><a class="text-secondary" href="">গ্যাসের তীব্র সংকটে ভোগান্তি বেড়েছে লোডশেডিং</a></div>
                        <div class="text-truncate"><a class="text-secondary" href="">	উত্তরে বাড়ছে চার নদীর পানি, বন্যা পরিস্থিতির অবনতি</a></div>
                        <div class="text-truncate"><a class="text-secondary" href="">গ্যাসের তীব্র সংকটে ভোগান্তি বেড়েছে লোডশেডিং</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-right d-none d-md-block">
                শুক্রবার, ১২ জুলাই ২০২৪
            </div>
        </div>
        <div class="row align-items-center py-2 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">বাংলা </span>নিউজপেপার</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <img class="img-fluid" src="{{ url('front/img/banner-01.gif') }}" alt="">
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">বাংলা</span>নিউজপেপার</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">প্রচ্ছদ</a>
                    <a href="#" class="nav-item nav-link">দেশজুড়ে</a>
                    <a href="#" class="nav-item nav-link">বিশ্বজুড়ে</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">রাজনীতি</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">নিবন্ধিত রাজনৈতিক দল</a>
                            <a href="#" class="dropdown-item">বাংলাদেশ আওয়ামী লীগ</a>
                            <a href="#" class="dropdown-item">বাংলাদেশ জাতীয়তাবাদী দল</a>
                        </div>
                       
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">বাণিজ্য</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">অর্থ-বাণিজ্য</a>
                            <a href="#" class="dropdown-item">পুঁজিবাজার</a>
                            <a href="#" class="dropdown-item">ব্যাংক-বীমা</a>
                            <a href="#" class="dropdown-item">কর্পোরেট</a>
                            <a href="#" class="dropdown-item">অটোমোবাইল</a>
                        </div>
                       
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">রাজনীতি</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">নিবন্ধিত রাজনৈতিক দল</a>
                            <a href="#" class="dropdown-item">বাংলাদেশ আওয়ামী লীগ</a>
                            <a href="#" class="dropdown-item">বাংলাদেশ জাতীয়তাবাদী দল</a>
                        </div>
                       
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">খেলা</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">ক্রিকেট</a>
                            <a href="#" class="dropdown-item">ফুটবল</a>
                            <a href="#" class="dropdown-item">টেনিস</a>
                        </div>
                       
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">বিনোদন</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">ওটিটি</a>
                            <a href="#" class="dropdown-item">ঢালিউড</a>
                            <a href="#" class="dropdown-item">টালিউড</a>
                            <a href="#" class="dropdown-item">বলিউড</a>
                            <a href="#" class="dropdown-item">হলিউড</a>
                            <a href="#" class="dropdown-item">গান</a>
                        </div>
                       
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">মতামত</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">সম্পাদকীয়</a>
                            <a href="#" class="dropdown-item">কলাম</a>
                            <a href="#" class="dropdown-item">সাক্ষাৎকার</a>
                            <a href="#" class="dropdown-item">স্মরণ</a>
                            <a href="#" class="dropdown-item">প্রতিক্রিয়া</a>
                        </div>
                       
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">রাজধানী</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">নিবন্ধিত রাজনৈতিক দল</a>
                            <a href="#" class="dropdown-item">বাংলাদেশ আওয়ামী লীগ</a>
                            <a href="#" class="dropdown-item">বাংলাদেশ জাতীয়তাবাদী দল</a>
                        </div>
                       
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">চট্টগ্রাম</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">নিবন্ধিত রাজনৈতিক দল</a>
                            <a href="#" class="dropdown-item">বাংলাদেশ আওয়ামী লীগ</a>
                            <a href="#" class="dropdown-item">বাংলাদেশ জাতীয়তাবাদী দল</a>
                        </div>
                       
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">আইন-আদালত</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">নিবন্ধিত রাজনৈতিক দল</a>
                            <a href="#" class="dropdown-item">বাংলাদেশ আওয়ামী লীগ</a>
                            <a href="#" class="dropdown-item">বাংলাদেশ জাতীয়তাবাদী দল</a>
                        </div>
                       
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">সংগঠন</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">নিবন্ধিত রাজনৈতিক দল</a>
                            <a href="#" class="dropdown-item">বাংলাদেশ আওয়ামী লীগ</a>
                            <a href="#" class="dropdown-item">বাংলাদেশ জাতীয়তাবাদী দল</a>
                        </div>
                       
                    </div>
                    
                    
                </div>  
                          
                
               
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

   <!--  Header  -->
  
 
  @yield('content')
  @extends('fronted.layouts.footer')

  <!--  End Header  -->
 


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('front/lib/easing/easing.min.js') }}"></script>
    <script src="{{ url('front/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ url('front/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ url('front/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ url('front/js/main.js') }}"></script>
    @yield('script')
</body>

</html>