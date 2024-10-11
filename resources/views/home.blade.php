@extends('layouts.app')
@section('content')


    <!-- Top News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="owl-carousel owl-carousel-2 carousel-item-3 position-relative">
                <div class="d-flex">
                    <img src="{{ url('front/img/top-01.jpg') }}" style="{{ url('front/width: 80px; height: 80px; object-fit: cover;')}}">
                    <div class="d-flex align-items-center bg-light px-3" style="{{ url('height: 80px;')}}">
                        <a class="text-secondary font-weight-semi-bold" href="">চট্টগ্রামে ‘প্রতিবাদী সাংস্কৃতিক পদযাত্রা’</a>
                    </div>
                </div>
                <div class="d-flex">
                    <img src="{{ url('front/img/top-02.jpg') }}" style="{{ url('front/width: 80px; height: 80px; object-fit: cover;')}}">
                    <div class="d-flex align-items-center bg-light px-3" style="{{ url('height: 80px;')}}">
                        <a class="text-secondary font-weight-semi-bold" href="">হত্যাকাণ্ডের তদন্ত ও আটক শিক্ষার্থীদের মুক্তির দাবি ক্ষুব্ধ নারীসমাজের</a>
                    </div>
                </div>
                <div class="d-flex">
                    <img src="{{ url('front/img/top-03.jpg') }}" style="{{ url('front/width: 80px; height: 80px; object-fit: cover;')}}">
                    <div class="d-flex align-items-center bg-light px-3" style="{{ url('height: 80px;')}}">
                        <a class="text-secondary font-weight-semi-bold" href="">হত্যাকাণ্ড রাষ্ট্রীয় মদদে হয়েছে, আন্তর্জাতিক তদন্ত দরকার: অধ্যাপক সলিমুল্লাহ খান</a>
                    </div>
                </div>
                <div class="d-flex">
                    <img src="{{ url('front/img/top-04.jpg') }}" style="{{ url('front/width: 80px; height: 80px; object-fit: cover;')}}">
                    <div class="d-flex align-items-center bg-light px-3" style="{{ url('height: 80px;')}}">
                        <a class="text-secondary font-weight-semi-bold" href="">খেলা শুরু করতে দেরি, সিটিকে ৩১ কোটি টাকা জরিমানা</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top News Slider End -->


    <!-- Main News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
                        <div class="position-relative overflow-hidden" style="height: 435px;">
                            <img class="img-fluid h-100" src="{{ url('front/img/main-01.jpg') }}" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-1">
                                    <a class="text-white" href="">বাংলাদেশ</a>
                                    <span class="px-2 text-white">/</span>
                                    <a class="text-white" href="">প্রকাশ: ৩১ জুলাই ২০২৪</a>
                                </div>
                                <a class="h2 m-0 text-white font-weight-bold" href="">ডিবি থেকে হারুনকে বদলি</a>
                            </div>
                        </div>
                        <div class="position-relative overflow-hidden" style="height: 435px;">
                            <img class="img-fluid h-100" src="{{ url('front/img/main-02.jpg') }}" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-1">
                                    <a class="text-white" href="">রাজনীতি</a>
                                    <span class="px-2 text-white">/</span>
                                    <a class="text-white" href="">প্রকাশ: ৩১ জুলাই ২০২৪</a>
                                </div>
                                <a class="h2 m-0 text-white font-weight-bold" href="">জামায়াত-শিবির নিষিদ্ধের ঘোষণা যেকোনো সময়: স্বরাষ্ট্রমন্ত্রী</a>
                            </div>
                        </div>
                        <div class="position-relative overflow-hidden" style="height: 435px;">
                            <img class="img-fluid h-100" src="{{ url('front/img/main-03.jpg') }}" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-1">
                                    <a class="text-white" href="">রাজনীতি</a>
                                    <span class="px-2 text-white">/</span>
                                    <a class="text-white" href="">প্রকাশ: ৩১ জুলাই ২০২৪</a>
                                </div>
                                <a class="h2 m-0 text-white font-weight-bold" href="">ছাত্র ইউনিয়নের মশালমিছিলে পুলিশের লাঠিপেটার অভিযোগ</a>
                            </div>
                        </div>
                        <div class="position-relative overflow-hidden" style="height: 435px;">
                            <img class="img-fluid h-100" src="{{ url('front/img/main-04.jpg') }}" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-1">
                                    <a class="text-white" href="">বাণিজ্য</a>
                                    <span class="px-2 text-white">/</span>
                                    <a class="text-white" href="">প্রকাশ: ৩১ জুলাই ২০২৪</a>
                                </div>
                                <a class="h2 m-0 text-white font-weight-bold" href="">খোলাবাজারে ডলার ১২৫, মানি চেঞ্জাররা বেঁধে দিল ১১৯ টাকা</a>
                            </div>
                        </div>
                        <div class="position-relative overflow-hidden" style="height: 435px;">
                            <img class="img-fluid h-100" src="{{ url('front/img/main-05.jpg') }}" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-1">
                                    <a class="text-white" href="">বিশ্ব</a>
                                    <span class="px-2 text-white">/</span>
                                    <a class="text-white" href="">প্রকাশ: ৩১ জুলাই ২০২৪</a>
                                </div>
                                <a class="h2 m-0 text-white font-weight-bold" href="">স্বচ্ছ তদন্তে বাংলাদেশ সরকারকে চাপ দিতে যুক্তরাজ্যের পার্লামেন্টে কথা বললেন রূপা ও আপসানা</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    
                    <div class="d-flex mb-3">
                        <img src="{{ url('front/img/main-side-01.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">রাজনীতি</a>
                                <span class="px-1">||</span>
                                <span>১৪ জুলাই ২০২৪</span>
                            </div>
                            <a class="h6 m-0" href="">শিক্ষকের বাসার সামনে হাতবোমা বিস্ফোরণ</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="{{ url('front/img/main-side-02.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">রাজনীতি</a>
                                <span class="px-1">||</span>
                                <span>১৪ জুলাই ২০২৪</span>
                            </div>
                            <a class="h6 m-0" href="">রাজশাহী বিশ্ববিদ্যালয়ের ৫ শিক্ষার্থী আটক, ছাড়িয়ে নিতে থানায় শিক্ষকেরা</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="{{ url('front/img/main-side-03.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">বিশ্বজুড়ে</a>
                                <span class="px-1">||</span>
                                <span>১৪ জুলাই ২০২৪</span>
                            </div>
                            <a class="h6 m-0" href="">ক্রেডিট কার্ডে বাংলাদেশিদের ব্যয় বেশি বেড়েছে যুক্তরাষ্ট্রে, কেন্দ্রীয় ব্যাংকের প্রতিবেদন</a>
                        </div>
                    </div>
                   
                    <div class="d-flex mb-3">
                        <img src="{{ url('front/img/main-side-04.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">বাণিজ্য</a>
                                <span class="px-1">||</span>
                                <span>১৪ জুলাই ২০২৪</span>
                            </div>
                            <a class="h6 m-0" href="">অফশোর ব্যাংকিংয়ে মুনাফা বেশি, যেভাবে হিসাব খোলা যাবে</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider-right side End -->


    <!-- সর্বশেষ ভিডিও -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                <h3 class="m-0">সর্বশেষ ভিডিও</h3>
                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
            </div>
            <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="{{ url('front/img/news-300x300-1.jpg') }}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a class="text-white" href="">Technology</a>
                            <span class="px-1 text-white">/</span>
                            <a class="text-white" href="">January 01, 2045</a>
                        </div>
                        <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="{{ url('front/img/news-300x300-2.jpg') }}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a class="text-white" href="">Technology</a>
                            <span class="px-1 text-white">/</span>
                            <a class="text-white" href="">January 01, 2045</a>
                        </div>
                        <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="{{ url('front/img/news-300x300-3.jpg') }}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a class="text-white" href="">Technology</a>
                            <span class="px-1 text-white">/</span>
                            <a class="text-white" href="">January 01, 2045</a>
                        </div>
                        <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="{{ url('front/img/news-300x300-1.jpg') }}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a class="text-white" href="">Technology</a>
                            <span class="px-1 text-white">/</span>
                            <a class="text-white" href="">January 01, 2045</a>
                        </div>
                        <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem..</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="{{ url('front/img/news-300x300-5.jpg') }}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a class="text-white" href="">Technology</a>
                            <span class="px-1 text-white">/</span>
                            <a class="text-white" href="">January 01, 2045</a>
                        </div>
                        <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--  সর্বশেষ ভিডিও End -->

 <!-- দেশজুড়ে,রাজনীতি With Sidebar Start -->
 <div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">দেশজুড়ে</h3>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="{{ url('front/img/desh-01.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 14px;">
                                    <a href="">রাজনীতি</a>
                                    <span class="px-1">/</span>
                                    <span>১০ মার্চ ২০২৪</span>
                                </div>
                                <a class="h4" href="">‘বিরোধী নেতাদের গ্রেপ্তার করে সরকার দৃষ্টি ঘোরাতে চায়’</a>
                                <p class="m-0">দৃষ্টি ভিন্ন দিকে ঘোরাতে সরকার বিরোধী রাজনৈতিক নেতাদের গণগ্রেপ্তার করছে বলে এক বিবৃতিতে অভিযোগ করেছেন বিভিন্ন রাজনৈতিক দলের নেতারা। তাঁরা অবিলম্বে এ হয়রানি বন্ধের আহ্বান জানান। পাশাপাশি গভীর রাতে এবি পার্টির ...</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{ url('front/img/desh-02.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">কোটা সংস্কার</a>
                                    <span class="px-1">/</span>
                                    <span> ১৪ ঘণ্টা আগে</span>
                                </div>
                                <a class="h6 m-0" href="">সংহতি জানিয়ে রাস্তায় নামছেন তারকারা</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{ url('front/img/desh-03.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">বাণিজ্য</a>
                                    <span class="px-1">/</span>
                                    <span> ১৪ ঘণ্টা আগে</span>
                                </div>
                                <a class="h6 m-0" href="">ইন্টারনেট বন্ধে অনলাইনভিত্তিক ব্যবসায় ক্ষতি সাড়ে ১৭০০ কোটি টাকা</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="{{ url('front/img/desh-04.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 14px;">
                                    <a href="">রাজনীতি</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ : ২৪ ঘণ্টা আগে</span>
                                </div>
                                <a class="h4" href="">সরকার নিজেদের রক্ষায় যা ইচ্ছা তাই করছে: মির্জা ফখরুল</a>
                                <p class="m-0">ঢাকা: বিএনপি মহাসচিব মির্জা ফখরুল ইসলাম আলমগীর বলেছেন, গণবিচ্ছিন্ন সরকার আইন, সংবিধান, গণতান্ত্রিক রীতি-নীতি, মানবিকতাকে বৃদ্ধাঙ্গুলি প্রদর্শন করে জনরোষ থেকে নিজেদের রক্ষা করতে যা ইচ্ছা তাই করছে। বুধবার (৩১ জুলাই) ...</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{ url('front/img/desh-05.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">ঢাকা বিশ্ববিদ্যালয়</a>
                                    <span class="px-1">/</span>
                                    <span> ১৪ ঘণ্টা আগে</span>
                                </div>
                                <a class="h6 m-0" href="">‘অনুমানে’ দুই শিক্ষকের বিরুদ্ধে আরেক শিক্ষকের জিডি</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{ url('front/img/desh-06.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">রাজনীতি</a>
                                    <span class="px-1">/</span>
                                    <span>১০ মার্চ ২০২৪</span>
                                </div>
                                <a class="h6 m-0" href="">অপকর্ম আড়াল করতে সরকার জামায়াতকে নিষিদ্ধের ষড়যন্ত্র করছে: জামায়াত</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-3 pb-3">
                    <a href=""><img class="img-fluid w-100" src="{{ url('front/img/banner-02.gif') }}" alt=""></a>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">রাজনীতি</h3>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="{{ url('front/img/rajnati-01.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 14px;">
                                    <a href="">রাজনীতি</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ০১ আগস্ট ২০২৪</span>
                                </div>
                                <a class="h4" href="">আপাতত দলীয় ব্যানারে কর্মসূচি করবে না বিএনপি</a>
                                <p class="m-0">কোটা সংস্কার আন্দোলন ঘিরে সারা দেশে নেতা-কর্মীদের গণগ্রেপ্তারসহ নানামুখী নিপীড়নের মধ্যে আপাতত দলীয় ব্যানারে কর্মসূচি করবে না বিএনপি। কারফিউ বলবৎ থাকাসহ গ্রেপ্তার অভিযানের এই সময়টাতে দলের কর্মী-সমর্থকেরা যুগপৎ আন্দোলনের শরিক দলগুলোর কর্মসূচিতে সক্রিয় থাকবেন। ...</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{ url('front/img/rajnati-02.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">রাজনীতি</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ০১ আগস্ট ২০২৪</span>
                                </div>
                                <a class="h6 m-0" href="">হামলা, গ্রেপ্তার-নির্যাতন ও হত্যা করে ক্ষমতা দীর্ঘস্থায়ী করা যাবে না: সিপিবি</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{ url('front/img/rajnati-03.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">‘মার্চ ফর জাস্টিস’</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ০১ আগস্ট ২০২৪</span>
                                </div>
                                <a class="h6 m-0" href="">শিক্ষার্থীদের বিক্ষোভ, পুলিশের সঙ্গে পাল্টাপাল্টি ধাওয়া</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="{{ url('front/img/rajnati-04.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 14px;">
                                    <a href="">রাজনীতি</a>
                                    <span class="px-1">/</span>
                                    <span>০১ আগস্ট ২০২৪</span>
                                </div>
                                <a class="h4" href="">তোপের মুখে ওবায়দুল কাদের, ‘ভুয়া ভুয়া’ স্লোগান</a>
                                <p class="m-0">সাবেক ছাত্রলীগ নেতাদের তোপের মুখে পড়লেন আওয়ামী লীগের সাধারণ সম্পাদক ওবায়দুল কাদের। সাবেক ছাত্রনেতাদের মতবিনিময়ের জন্য ডেকে কথা বলতে না দেওয়ায় এমন পরিস্থিতির সৃষ্টি হয়। এ সময় সাবেক ছাত্রনেতাদের কেউ কেউ ‘ভুয়া ভুয়া’ বলেও স্লোগান দেন।...</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{ url('front/img/rajnati-05.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">রাজনীতি</a>
                                    <span class="px-1">/</span>
                                    <span>০১ আগস্ট ২০২৪</span>
                                </div>
                                <a class="h6 m-0" href="">পুলিশ ঘিরে রাখায় পল্টন মোড়ে সমাবেশ করতে পারেনি গণতন্ত্র মঞ্চ</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{ url('front/img/rajnati-06.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">রাজনীতি</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ৩০ জুলাই ২০২৪</span>
                                </div>
                                <a class="h6 m-0" href="">আন্দালিব রহমান পার্থ আবার রিমান্ডে</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 pb-3">
                    <a href=""><img class="img-fluid w-100" src="{{ url('front/img/banner-03.png') }}" alt=""></a>
                </div>
            </div>
           
            <div class="col-lg-4 pt-3 pt-lg-0">
                  <!-- সম্পাদকীয়  Start -->
                  <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">সম্পাদকীয়</h3>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="{{ url('front/img/post-14.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">সম্পাদকীয়</a>
                                <span class="px-1">||</span>
                                <span>১২ জুলাই ২০২৪</span>
                            </div>
                            <a class="h6 m-0" href="">সরকারের ভুল নীতির দায় কেন জনগণ নেবে</a>
                        </div>
                    </div>
                </div>
                <!-- সম্পাদকীয় End -->
                   <!-- কলাম  Start -->
                   <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">কলাম</h3>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="{{ url('front/img/post-17.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">কলাম</a>
                                <span class="px-1">||</span>
                                <span>১২ জুলাই ২০২৪</span>
                            </div>
                            <a class="h6 m-0" href="">নীলফামারী–লালমনিরহাটে আর কত দুর্ভোগ</a>
                        </div>
                    </div>
                </div>
                <!-- কলাম End -->
                   <!-- সাক্ষাৎকার  Start -->
                   <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">সাক্ষাৎকার</h3>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="{{ url('front/img/post-15.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">সাক্ষাৎকার</a>
                                <span class="px-1">||</span>
                                <span>১২ জুলাই ২০২৪</span>
                            </div>
                            <a class="h6 m-0" href="">বিমানের ফ্লাইট বিলম্ব প্রতিযোগিতায় টিকে থাকতে হবে</a>
                                
                        </div>
                    </div>
                </div>
                <!-- সাক্ষাৎকার End -->
                <!--সংযোগ থাকুন Follow Start -->
                <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">সংযোগ থাকুন</h3>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #39569E;">
                            <small class="fab fa-facebook-f mr-2"></small><small>12,345 Fans</small>
                        </a>
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #52AAF4;">
                            <small class="fab fa-twitter mr-2"></small><small>12,345 Followers</small>
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #0185AE;">
                            <small class="fab fa-linkedin-in mr-2"></small><small>12,345 Connects</small>
                        </a>
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #C8359D;">
                            <small class="fab fa-instagram mr-2"></small><small>12,345 Followers</small>
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #DC472E;">
                            <small class="fab fa-youtube mr-2"></small><small>12,345 Subscribers</small>
                        </a>
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #1AB7EA;">
                            <small class="fab fa-vimeo-v mr-2"></small><small>12,345 Followers</small>
                        </a>
                    </div>
                </div>
                <!-- Social Follow End -->

              

                <!-- Ads Start -->
                <div class="mb-3 pb-3">
                    <a href=""><img class="img-fluid" src="{{ url('front/img/sidebarAd-02.jpg') }}" alt=""></a>
                </div>
                <div class="mb-3 pb-3">
                    <a href=""><img class="img-fluid" src="{{ url('front/img/sidebarAd-01.jpg') }}" alt=""></a>
                </div>
                <!-- Ads End -->
					
	<!--প্রয়োজনী (বাংলাদেশ) -->
	  
	<div>
		<div class="how2 how2-cl4 flex-s-c m-b-30">
			<h3 class="f1-m-2 cl3 tab01-title">
				প্রয়োজনী (বাংলাদেশ)
			</h3>
		</div>

		<div class="flex-wr-s-s m-rl--5">
			<li>
				<a target="_blank" href="https://www.dsebd.org/">
					<img class="max-w-full" src="{{ url('front/img/stock_bangla.png') }}" alt="IMG" width="315" height="60">
				</a>
			</li>
			<li>
				<a target="_blank" href="https://www.bb.org.bd/en/index.php/econdata/exchangerate">
					<img class="max-w-full" src="{{ url('front/img/currency_bangla.png') }}" alt="IMG" width="315" height="60">
				</a>
			</li>
			<li>
				<a target="_blank" href="https://www.bb.org.bd/en/index.php/econdata/exchangerate">
					<img class="max-w-full" src="{{ url('front/img/weather_bn.png') }}" alt="IMG" width="315" height="60">
				</a>
			</li>
			<li>
				<a target="_blank" href="https://mof.portal.gov.bd/site/view/budget_mof">
					<img class="max-w-full" src="{{ url('front/img/budget_bn_new.png') }}" alt="IMG" width="315" height="60">
				</a>
			</li>
		</div>	
	</div>
               
            </div>
        </div>
    </div>
</div>
</div>
<!-- দেশজুড়ে,রাজনীতি With Sidebar End -->

  <!-- বাণিজ্য,বিশ্বজুড়ে With Sidebar Start -->
  <div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">বাণিজ্য</h3>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="{{ url('front/img/business-01.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 14px;">
                                    <a href="">করপোরেট সংবাদ</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ০৬ জুলাই ২০২৪</span>
                                </div>
                                <a class="h4" href="">র‍্যাংগস ই-মার্ট এনেছে এলজির নতুন ‘ওএলইডি সি থ্রি সিরিজ’</a>
                                <p class="m-0"> এলজি ব্র্যান্ডের সর্বশেষ ওএলইডি সি থ্রি সিরিজের টিভি বাজারে এনেছে র‍্যাংগস ই-মার্ট। ৩ জুলাই ঢাকার র‍্যাংগস ই-মার্টের গুলশান-২-এর শোরুমে এক অনুষ্ঠানে এই নতুন মডেলের টিভি প্রদর্শিত হয়।

                                    অনুষ্ঠানে উপস্থিত ছিলেন র‍্যানকন হোল্ডিংস লিমিটেডের ব্যবস্থাপনা পরিচালক ফারহানা করিম, এলজি ...</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{ url('front/img/business-02.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">করপোরেট সংবাদ</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ০৬ জুলাই ২০২৪</span>
                                </div>
                                <a class="h6 m-0" href="">অনুষ্ঠিত হলো ‘স্টার্টআপ ফাউন্ডারস মিট’</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{ url('front/img/business-03.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">করপোরেট</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ০৬ জুলাই ২০২৪</span>
                                </div>
                                <a class="h6 m-0" href="">১০ হাজার দক্ষ শ্রমিক তৈরিতে রিহ্যাবের সঙ্গে অর্থ মন্ত্রণালয়ের চুক্তি</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="{{ url('front/img/business-04.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 14px;">
                                    <a href="">ব্যাংক</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ২৯ জুলাই ২০২৪</span>
                                </div>
                                <a class="h4" href="">ব্যাংকের ঋণে বিদেশ যাওয়ার আগ্রহ বাড়ছে</a>
                                <p class="m-0">অনেক বেকার যুবকই আছেন, যাঁরা বিদেশে গিয়ে কাজ করতে চান। এমন অনেক নারীও আছেন। দেশে যে কাজ করতে চান না, তা করতে রাজি তাঁরা বিদেশে গিয়ে। এসব যুবক ও নারী মা-বাবা ও সন্তানের জন্য প্রবাসী আয় (রেমিট্যান্স) পাঠাবেন দেশে, তার বদলে একটু স্বাচ্ছন্দ্যের জীবন চান। ...</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{ url('front/img/business-05.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">ব্যাংক</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ৩১ জুলাই ২০২৪</span>
                                </div>
                                <a class="h6 m-0" href="">খোলাবাজারে ডলার ১২৫, মানি চেঞ্জাররা বেঁধে দিল ১১৯ টাকা</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{ url('front/img/business-06.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">বিশ্ববাণিজ্য</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ৩১ জুলাই ২০২৪</span>
                                </div>
                                <a class="h6 m-0" href="">ইরানে হামাস নেতা হানিয়া হত্যার জেরে বেড়েছে তেলের দাম</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-3 pb-3">
                    <a href=""><img class="img-fluid w-100" src="{{ url('front/img/banner-01.gif')}}" alt=""></a>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">বিশ্বজুড়ে</h3>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="{{ url('front/img/world-01.jpg')}}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 14px;">
                                    <a href="">ভারত</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ৩১ জুলাই ২০২৪</span>
                                </div>
                                <a class="h4" href="">বিজেপির বঙ্গভঙ্গের বিরুদ্ধে পশ্চিমবঙ্গ বিধানসভায় প্রস্তাব আনছে তৃণমূল</a>
                                <p class="m-0">এবারের লোকসভা নির্বাচনে বিজেপির ভরাডুবি, এরপর ছয়টি বিধানসভা আসনের উপনির্বাচনে হারের পর রাজ্য রাজনীতিকে চাঙা রাখতে বিজেপি পশ্চিমবঙ্গ ভেঙে আলাদা রাজ্য গড়ার দাবি তুলেছে। সেই অস্ত্রকে সামনে এনে বিজেপি এখন মেতে উঠেছে বঙ্গভঙ্গ আন্দোলন নিয়ে। তবে বিজেপির এই ...</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{ url('front/img/world-02.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">ভারত</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ৩১ জুলাই ২০২৪</span>
                                </div>
                                <a class="h6 m-0" href="">কমলাকে নিজেদের মনে করেন ভারতের ছোট্ট একটি গ্রামের বাসিন্দারা</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{ url('front/img/world-03.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">ইউরোপ</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ১৩ জুলাই ২০২৪</span>
                                </div>
                                <a class="h6 m-0" href="">নাম নিয়ে বাইডেনের গড়বড়, ভুলকে ভুলতে বললেন জেলেনস্কি</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="{{ url('front/img/world-04.jpg') }}" style="{{ url('object-fit: cover;')}}">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 14px;">
                                    <a href="">বিশ্ব</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ৩১ জুলাই ২০২৪</span>
                                </div>
                                <a class="h4" href="">হানিয়াকে হামাসের তুলনামূলক মধ্যপন্থী নেতা ভাবা হতো</a>
                                <p class="m-0">গাজা যুদ্ধ শুরু হওয়ার পর আন্তর্জাতিক নানা আলোচনায় কড়া ভাষায় কথা বলতে দেখা গেছে ইরানে নিহত হামাস নেতা ইসমাইল হানিয়াকে। যদিও আন্তর্জাতিক কূটনৈতিক অঙ্গনে অনেকে হামাসের অন্যান্য কট্টরপন্থী নেতাদের তুলনায় তাঁকে অধিক মধ্যপন্থী বলে মনে করতেন।...</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{ url('front/img/world-05.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">ইউরোপ</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ১১ জুলাই ২০২৪,</span>
                                </div>
                                <a class="h6 m-0" href="">ন্যাটোর ৭৫তম শীর্ষ সম্মেলন
                                    পুতিনের বিরুদ্ধে ঐক্যের ডাক </a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{ url('front/img/news-100x100-3.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">ইউরোপ</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ১০ জুলাই ২০২৪</span>
                                </div>
                                <a class="h6 m-0" href="">মোদির মস্কো সফরে নাখোশ পশ্চিম </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 pb-3">
                    <a href=""><img class="img-fluid w-100" src="{{ url('front/img/banner-03.png') }}" alt=""></a>
                </div>
            </div>
           
            <div class="col-lg-4 pt-3 pt-lg-0">
             

              

             

                <!--বাণিজ্য-ভিডিও Start -->
                <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">বাণিজ্য-ভিডিও</h3>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="{{ url('front/img/news-100x100-1.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="{{ url('front/img/news-100x100-2.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="{{ url('front/img/news-100x100-3.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="{{ url('front/img/news-100x100-4.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="{{ url('front/img/news-100x100-2.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="{{ url('front/img/news-100x100-3.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="{{ url('front/img/news-100x100-5.jpg') }}" style="width: 100px; height: 95px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                </div>
                <!-- বাণিজ্য-ভিডিও End -->
                   <!-- Ads Start -->
                <div class="mb-3 pb-3">
                    <a href=""><img class="img-fluid" src="{{ url('front/img/banner-islamic.png')}}" style="width: 500px; height: 60px; object-fit: cover;" alt=""></a>
                </div>
             
                <!-- Ads End -->
  <!--বিশ্বজুড়ে-ভিডিও Start -->
  <div class="pb-3">
    <div class="bg-light py-2 px-4 mb-3">
        <h3 class="m-0">বিশ্বজুড়ে-ভিডিও</h3>
    </div>
    <div class="d-flex mb-3">
        <img src="{{ url('front/img/news-100x100-1.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
            <div class="mb-1" style="font-size: 13px;">
                <a href="">Technology</a>
                <span class="px-1">/</span>
                <span>January 01, 2045</span>
            </div>
            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
        </div>
    </div>
    <div class="d-flex mb-3">
        <img src="{{ url('front/img/news-100x100-2.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
            <div class="mb-1" style="font-size: 13px;">
                <a href="">Technology</a>
                <span class="px-1">/</span>
                <span>January 01, 2045</span>
            </div>
            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
        </div>
    </div>
    <div class="d-flex mb-3">
        <img src="{{ url('front/img/news-100x100-3.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
            <div class="mb-1" style="font-size: 13px;">
                <a href="">Technology</a>
                <span class="px-1">/</span>
                <span>January 01, 2045</span>
            </div>
            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
        </div>
    </div>
    <div class="d-flex mb-3">
        <img src="{{ url('front/img/news-100x100-4.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
            <div class="mb-1" style="font-size: 13px;">
                <a href="">Technology</a>
                <span class="px-1">/</span>
                <span>January 01, 2045</span>
            </div>
            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
        </div>
    </div>
    <div class="d-flex mb-3">
        <img src="{{ url('front/img/news-100x100-2.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
            <div class="mb-1" style="font-size: 13px;">
                <a href="">Technology</a>
                <span class="px-1">/</span>
                <span>January 01, 2045</span>
            </div>
            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
        </div>
    </div>
    <div class="d-flex mb-3">
        <img src="{{ url('front/img/news-100x100-3.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
            <div class="mb-1" style="font-size: 13px;">
                <a href="">Technology</a>
                <span class="px-1">/</span>
                <span>January 01, 2045</span>
            </div>
            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
        </div>
    </div>
    <div class="d-flex mb-3">
        <img src="{{ url('front/img/news-100x100-5.jpg') }}" style="width: 100px; height: 100px; object-fit: cover;">
        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
            <div class="mb-1" style="font-size: 13px;">
                <a href="">Technology</a>
                <span class="px-1">/</span>
                <span>January 01, 2045</span>
            </div>
            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
        </div>
    </div>
</div>
  <!-- বিশ্বজুড়ে-ভিডিও End -->
             
            </div>
        </div>
    </div>
</div>
</div>
<!-- বাণিজ্য,বিশ্বজুড়ে With Sidebar End -->

    <!-- তথ্য ও প্রযুক্তি, Slider Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">তথ্য ও প্রযুক্তি</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ url('front/img/tech-01.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">ফ্রিল্যান্সিং</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ৩১ জুলাই ২০২৪,</span>
                                </div>
                                <a class="h4 m-0" href="">কোটা সংস্কার আন্দোলনে নিহত ফ্রিল্যান্সার মুগ্ধকে নিয়ে ফাইভআরের শোক </a>
                            </div>
                        </div>
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ url('front/img/tech-02.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">সাইবার–জগৎ</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ৩১ জুলাই ২০২৪</span>
                                </div>
                                <a class="h4 m-0" href="">সাইবার হামলার ঝুঁকিতে আইফোন, যুক্তরাষ্ট্রের জরুরি সতর্কতা জারি</a>
                            </div>
                        </div>
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ url('front/img/tech-03.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">প্রযুক্তি</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ৩০ জুলাই ২০২৪</span>
                                </div>
                                <a class="h4 m-0" href="">বায়ুশক্তিতে চলবে বিশাল কার্গো জাহাজ</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">তথ্য ও প্রযুক্তি (ভিডিও)</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ url('front/img/news-500x280-4.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                            </div>
                        </div>
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ url('front/img/news-500x280-5.jpg')}}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                            </div>
                        </div>
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ url('front/img/news-500x280-6.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Category News Slider End -->


    <!--  বিনোদন Slider Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">বিনোদন</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ url('front/img/entertain-01.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">বলিউড</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ৩১ জুলাই ২০২৪</span>
                                </div>
                                <a class="h4 m-0" href="">এই তামান্না কেন আর সেই তামান্না নেই</a>
                            </div>
                        </div>
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ url('front/img/entertain-02.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">টেলিভিশন</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ৩১ জুলাই ২০২৪</span>
                                </div>
                                <a class="h4 m-0" href="">গুলিতে নিহত তানজিন তিশার সহকারী</a>
                            </div>
                        </div>
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ url('front/img/entertain-01.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">হলিউড</a>
                                    <span class="px-1">/</span>
                                    <span>প্রকাশ: ৩১ জুলাই ২০২৪</span>
                                </div>
                                <a class="h4 m-0" href="">লিফটে আটকা ১ ঘণ্টা ১১ মিনিট!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">বিনোদন (ভিডিও)</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ url('front/img/news-500x280-3.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                            </div>
                        </div>
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ url('front/img/news-500x280-2.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                            </div>
                        </div>
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ url('front/img/news-500x280-1.jpg') }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Category News Slider End -->
 <!-- খেলা Slider Start -->
 <div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-3">
                <div class="bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">খেলা</h3>
                </div>
                <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ url('front/img/play-01.jpg') }}" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 13px;">
                                <a href="">প্যারিস অলিম্পিক</a>
                                <span class="px-1">/</span>
                                <span>প্রকাশ: ৩১ জুলাই ২০২৪</span>
                            </div>
                            <a class="h4 m-0" href="">সেই ফ্রান্সকেই প্রতিপক্ষ হিসেবে পেল আর্জেন্টিনা</a>
                        </div>
                    </div>
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ url('front/img/play-02.jpg') }}" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 13px;">
                                <a href="">ক্রিকেট</a>
                                <span class="px-1">/</span>
                                <span>প্রকাশ: ৩১ জুলাই ২০২৪</span>
                            </div>
                            <a class="h4 m-0" href="">রুট এখন টেস্টের এক নম্বর ব্যাটসম্যান</a>
                        </div>
                    </div>
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ url('front/img/play-03.jpg') }}" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 13px;">
                                <a href="">টেনিস</a>
                                <span class="px-1">/</span>
                                <span>প্রকাশ: ১৩ জুলাই ২০২৪</span>
                            </div>
                            <a class="h4 m-0" href="">পাওলিনিকে হারিয়ে উইম্বলডনের নতুন রানি ক্রেইচিকোভা</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 py-3">
                <div class="bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">খেলা (ভিডিও)</h3>
                </div>
                <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ url('front/img/news-500x280-3.jpg') }}" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ url('front/img/news-500x280-2.jpg') }}" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ url('front/img/news-500x280-1.jpg') }}" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Category News Slider End -->

   

   @endsection