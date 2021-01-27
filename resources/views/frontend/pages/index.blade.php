@extends('frontend.layouts.master')
@section('content')

<!---Navbar Start --->
@include('frontend.layouts.navbar')
<!---  Navbar End  --->


<div class="container mt-4">
    <div class="row">
        <div class="col-xl-9 col-12 line-right">

            <div class="row">
                @foreach ($featured as $news)
                    @if ($loop->index == 0)
                    <div class="col-md-8 line-right">
                        <a class="news-box" href="#">
    
                            <div class="row">
    
                                <div class="col-md-6 col-12">
                                    <img src="{{ asset("storage/uploads/$news->image") }}">
                                </div>
                                <div class="col-md-6 col-12 mt-4 mt-md-0">
                                    <h1>{{ Str::words($news->title, 8) }}</h1>
                                    <p>{{ Str::words($news->body, 30) }}
                                    </p>
                                    <small><i class="fas fa-clock"></i> ১০ মিনিট আগে</small>
                                </div>
    
    
                            </div>
    
                        </a>
                    </div>
                    @endif
                    @if ($loop->index == 1)
                    <div class="col-md-4 mt-4 mt-md-0">
                        <a class="news-box" href="#">
    
                            <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                            <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                            </p>
    
                            <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <div class="line-bottom mt-4 mb-4">
                        </div>
                    </div>
                    @endif
                @endforeach

            </div>


            <div class="row">

              @foreach ($featured as $news)
              @if ($loop->index > 1 && $loop->index <= 4)
             
                <div class="col-md-4 line-right">
                    <a class="news-box" href="#">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>
                        <small><i class="fas fa-clock"></i> ১০ মিনিট আগে</small>
                    </a>
                </div> 
              @endif
              @endforeach

              <div class="col-md-12">
                <div class="line-bottom mt-4 mb-4"></div>
              </div>

                
            </div>

            
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="row">
                        @foreach ($featured as $news)
                        @if ($loop->index > 4 && $loop->index <= 7)
                        <div class="col-md-4">
                            <a class="news-bar">
                                <div class="row">
                                    <div class="col-4 col-md-6 pr-2">
                                        <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                                    </div>
                                    <div class="col-8 col-md-6 pl-2">
                                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                                    </div>
                                </div>
                            </a>
                            <div class=" line-bottom mt-0 mt-md-4"></div>
                        </div> 
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        @foreach ($featured as $news)
                           @if ($loop->index > 7 && $loop->index <= 10)
                           <div class="col-md-4">
                            <a class="news-bar">
                                <div class="row">
                                    <div class="col-4 col-md-6 pr-2">
                                        <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                                    </div>
                                    <div class="col-8 col-md-6 pl-2">
                                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                                    </div>


                                </div>

                            </a>
                        </div>
                           @endif             
                        @endforeach

                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-3">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">First Panel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Second Panel</a>
                </li>

            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                    <div class="news-bar mt-4">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </div>
                    <div class="news-bar mt-4">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </div>


                    <div class="news-bar mt-4">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </div>


                    <div class="news-bar mt-4">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tabs-2" role="tabpanel">
                    <p>Second Panel</p>
                </div>
            </div>
            <!-- box ad -->
            <div class="mt-2">
                <img class="img-fluid" src="https://via.placeholder.com/300.png" alt="">
            </div>
        </div>


        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>

        <div class="col-md-12">
            <div class="text-center">
                <img src="https://via.placeholder.com/970x90" alt="">
            </div>
        </div>

        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>

        <!-- cat one -->

        <div class="col-md-12">
            <div class=" mt-4 mb-4">
                <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
            </div>
        </div>

        <div class="col-12">

            <div class="row">
                <div class="col-md-3 line-right">
                    <a class="news-box" href="#">
                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </a>

                </div>

                <div class="col-md-9">

                    <div class="row">
                        <div class="col-md-4">
                            <a class="news-box" href="#">

                                <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>

                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>

                            </a>
                        </div>

                        <div class="col-md-4">
                            <a class="news-box" href="#">

                                <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>

                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>

                            </a>
                        </div>

                        <div class="col-md-4">
                            <a class="news-box" href="#">

                                <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>

                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>

                            </a>
                        </div>
                    </div>

                </div>



            </div>

        </div>
        <!-- cat one -->





        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>

        <!-- cat latest popular -->
        <div class="col-12">

            <div class="row">

                <div class="col-xl-3 col-12 ">
    
                    <div class=" mt-4 mt-md-0">
                        <img class="img-fluid" src="https://via.placeholder.com/300.png" alt="">
                    </div>
                    <div class="line-bottom mt-4 mb-4"></div>
                    <!-- box ads end -->
    
                    <a class="news-bar">
    
                        <div class="row">
    
                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                    <div class="line-bottom mt-4 mb-4"></div>
                    <a class="news-bar">
    
                        <div class="row">
    
                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <a class="news-box mb-4">
                                <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                                </p>

                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>


                            </a>

                        </div>

                        <div class="col-md-6">

                            <a class="news-box mb-4">

                                <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                                </p>

                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>

                            </a>

                        </div>

                        <div class="col-md-6">

                            <a class="news-box mb-4">

                                <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                                </p>

                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>

                            </a>

                        </div>
                    </div>



                </div>

                <div class="col-md-3">

                    <a class="news-box" href="#">

                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>

                    </a>

                    <div class="news-bar mt-4">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </div>

                    <div class="news-bar mt-4">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </div>

                    <div class="news-bar mt-4">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </div>



                </div>


            </div>

        </div>
        <!-- cat two -->

<!-- fetured section ends here -->






        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>



        <div class="col-md-12">
            <div class=" mt-4 mb-4">
                <h2 class="cat-title">section 1 <i class="far fa-arrow-alt-circle-right"></i></h2>
            </div>
        </div>


        <div class="col-12">

            <div class="row">
                <div class="col-md-3 line-right">

                    <a class="news-box mb-4">

                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>


                    </a>

                </div>

                <div class="col-md-3 line-right">

                    <a class="news-box mb-4">

                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>


                    </a>

                </div>

                <div class="col-md-3 line-right">

                    <a class="news-box mb-4">

                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>

                    </a>

                </div>

                <div class="col-md-3">

                    <a class="news-box mb-4">

                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>


                    </a>

                </div>





            </div>

        </div>

        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>


        <div class="col-md-12">
            <div class=" mt-4 mb-4">
                <h2 class="cat-title">section2 <i class="far fa-arrow-alt-circle-right"></i></h2>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 line-right">


                    <a class="news-box mb-4">

                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>

                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>


                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>

                        </div>

                    </a>

                </div>

                <div class="col-md-4  line-right">
                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </a>


                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>


                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </a>



                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </a>



                </div>


                <div class="col-md-4  line-right">
                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </a>


                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>


                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </a>



                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>


        <div class="col-md-12">
            <div class=" mt-4 mb-4">
                <h2 class="cat-title">section3 <i class="far fa-arrow-alt-circle-right"></i></h2>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 line-right">
                    <div class="news-box mb-4">

                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>

                    </div>

                </div>
                <div class="col-md-6">



                    <div class="news-bar big">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </div>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>


                    <div class="news-bar big">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </div>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <div class="news-bar big">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </div>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <div class="news-bar big">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </div>



                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>


        <div class="col-md-12">
            <div class=" mt-4 mb-4">
                <h2 class="cat-title">sectin4 <i class="far fa-arrow-alt-circle-right"></i></h2>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 line-right">


                    <a class="news-box mb-4">

                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>

                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>


                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>

                        </div>

                    </a>

                </div>
                <div class="col-md-4  line-right">



                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </a>


                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>


                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </a>



                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </a>



                </div>


                <div class="col-md-4">


                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>


        <div class="col-md-12">
            <div class=" mt-4 mb-4">
                <h2 class="cat-title">section5 <i class="far fa-arrow-alt-circle-right"></i></h2>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 line-right">
                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>


                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>


                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>


                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </a>

                </div>
                <div class="col-md-4  line-right">



                    <a class="news-box mb-4">

                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>

                    </a>



                </div>


                <div class="col-md-4">
                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>


                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>


                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>


                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে।
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </a>

                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>



        <div class="col-md-12">
            <div class=" mt-4 mb-4">
                <h2 class="cat-title">section6 <i class="far fa-arrow-alt-circle-right"></i></h2>
            </div>
        </div>


        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 line-right">
                    <a class="news-box mb-4">

                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>

                    </a>

                </div>
                <div class="col-md-6">



                    <div class="news-bar big">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </div>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>


                    <div class="news-bar big">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </div>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <div class="news-bar big">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </div>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <div class="news-bar big">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </div>



                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>

    </div>
</div>


<div class="section-video mt-4 mb-4">

    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class=" mt-4 mb-4">
                    <h2 class="cat-title">ভিডিও <i class="far fa-arrow-alt-circle-right"></i></h2>
                </div>
            </div>

            <div class="col-md-12 mb-4">

                <div class="videoone"></div>

            </div>

            <div class="col-md-3 mb-4">

                <div class="video"></div>

            </div>

            <div class="col-md-3 mb-4">

                <div class="video"></div>

            </div>

            <div class="col-md-3 mb-4">

                <div class="video"></div>

            </div>

            <div class="col-md-3 mb-4">

                <div class="video"></div>

            </div>


        </div>
    </div>

</div>





<div class="container">
    <div class="row">




        <div class="col-md-12">
            <div class=" mt-4 mb-4">
                <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
            </div>
        </div>


        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 line-right">
                    <a class="news-box mb-4">

                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>

                    </a>

                </div>
                <div class="col-md-6">



                    <div class="news-bar big">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </div>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>


                    <div class="news-bar big">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </div>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <div class="news-bar big">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </div>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <div class="news-bar big">

                        <div class="row">

                            <div class="col-4 col-md-4 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>


                    </div>



                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>


        <div class="col-md-12">
            <div class=" mt-4 mb-4">
                <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
            </div>
        </div>



        <div class="col-12">

            <div class="row">
                <div class="col-md-3 line-right">

                    <a class="news-box mb-4">

                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>


                    </a>

                </div>

                <div class="col-md-3 line-right">

                    <a class="news-box mb-4">

                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>


                    </a>

                </div>

                <div class="col-md-3 line-right">

                    <a class="news-box mb-4">

                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>


                    </a>

                </div>

                <div class="col-md-3">

                    <a class="news-box mb-4">

                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>


                    </a>

                </div>





            </div>

        </div>

        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>


        <div class="col-12">

            <div class="row">
                <div class="col-md-3">

                    <div class=" mt-4 mb-4">
                        <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
                    </div>




                    <a class="news-box mb-4">


                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>


                    </a>



                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>




                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>


                </div>

                <div class="col-md-3">

                    <div class=" mt-4 mb-4">
                        <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
                    </div>


                    <a class="news-box mb-4">


                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>


                    </a>



                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>




                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>


                </div>

                <div class="col-md-3">

                    <div class=" mt-4 mb-4">
                        <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
                    </div>


                    <a class="news-box mb-4">


                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>


                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>


                </div>

                <div class="col-md-3">

                    <div class=" mt-4 mb-4">
                        <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
                    </div>


                    <a class="news-box mb-4">


                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>


                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>


                </div>

            </div>

        </div>

        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>

        <div class="col-12">

            <div class="row">
                <div class="col-md-3">

                    <div class=" mt-4 mb-4">
                        <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
                    </div>


                    <a class="news-box mb-4">


                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>


                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>


                </div>

                <div class="col-md-3">

                    <div class=" mt-4 mb-4">
                        <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
                    </div>


                    <a class="news-box mb-4">


                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>


                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>


                </div>

                <div class="col-md-3">

                    <div class=" mt-4 mb-4">
                        <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
                    </div>


                    <a class="news-box mb-4">


                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>


                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>


                </div>

                <div class="col-md-3">

                    <div class=" mt-4 mb-4">
                        <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
                    </div>


                    <a class="news-box mb-4">


                        <img class="mb-4" src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">

                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>

                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>


                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <a class="news-bar">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>


                        </div>

                    </a>


                </div>

            </div>

        </div>

        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>
    </div>
</div>

@include('frontend.layouts.footer')



@endsection