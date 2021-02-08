@extends('frontend.layouts.master')
@section('content')
@section('title')
    {{ $news->title .' - '. config('app.name') ?? config('app.name') }}
@endsection
@section('description')
    {{ Str::limit(strip_tags($news->body), 160) ?? Str::limit($webInfo->site_description, 160) }}
@endsection
@section('keywords')
    {{ Str::limit($news->meta_tags, 160) }}
@endsection
{{-- navbar --}}
@include('frontend.layouts.navbar')
    
    <div class="container mt-4">
        <div class="row">



            <div class="col-md-2 mb-4" style="height: auto !important;">

                <div class="shadow-sm" style="background:#f6f6f6; padding: 10px 5px 10px 5px; border-bottom: 4px solid #1c4a7b; border-top: 4px solid #1c4a7b;">
                    <p class="mt-2 p-2" style=" color: #1f1f1f;  font-size: 20px;">
                        নিজস্ব প্রতিবেদক
                    </p>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>

                    <p class="mb-2" style=" color: #1f1f1f;">
                    </p>
                    <p class="p-2">
                        {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }} 
                    </p>

                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    @if (!$news->updated_at === $news->created_at)
                    <p class="p-2 d-none d-md-block">
                        আপডেট : {{ bangla_date($news->updated_at->timestamp ,"en", "d-m-y") }} 
                    </p>
                    <p></p>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    @endif
                    

                    

                    <div class="social">
                        <center>
                            <div class="a2a_kit a2a_kit_size_29 a2a_default_style text-center" style="line-height: 29px;">
                                <a class="a2a_dd" href="https://www.addtoany.com/share#url=https%3A%2F%2Fdailysylhetmirror.com%2Fnews%2F34486&amp;title=Sylhet%20Mirror%20%7C%20%E0%A6%B8%E0%A6%BF%E0%A6%B2%E0%A7%87%E0%A6%9F%E0%A7%87%20%E0%A7%AC%E0%A7%A8%20%E0%A6%9C%E0%A6%A8%20%E0%A6%B6%E0%A6%A8%E0%A6%BE%E0%A6%95%E0%A7%8D%E0%A6%A4%E0%A7%87%E0%A6%B0%20%E0%A6%A6%E0%A6%BF%E0%A6%A8%E0%A7%87%20%E0%A6%B8%E0%A7%81%E0%A6%B8%E0%A7%8D%E0%A6%A5%20%E0%A7%AC%E0%A7%A7"><span class="a2a_svg a2a_s__default a2a_s_a2a" style="background-color: rgb(1, 102, 255); width: 29px; line-height: 29px; height: 29px; background-size: 29px; border-radius: 4px;"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g fill="#FFF"><path d="M14 7h4v18h-4z"></path><path d="M7 14h18v4H7z"></path></g></svg></span>
                                    <span class="a2a_label a2a_localize" data-a2a-localize="inner,Share">Share</span>
                                </a>
                                <a class="a2a_button_facebook" target="_blank" href="/#facebook" rel="nofollow noopener"><span class="a2a_svg a2a_s__default a2a_s_facebook" style="background-color: rgb(24, 119, 242); width: 29px; line-height: 29px; height: 29px; background-size: 29px; border-radius: 4px;"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" d="M17.78 27.5V17.008h3.522l.527-4.09h-4.05v-2.61c0-1.182.33-1.99 2.023-1.99h2.166V4.66c-.375-.05-1.66-.16-3.155-.16-3.123 0-5.26 1.905-5.26 5.405v3.016h-3.53v4.09h3.53V27.5h4.223z"></path></svg></span><span class="a2a_label">Facebook</span></a>
                                <a class="a2a_button_twitter" target="_blank" href="/#twitter" rel="nofollow noopener"><span class="a2a_svg a2a_s__default a2a_s_twitter" style="background-color: rgb(85, 172, 238); width: 29px; line-height: 29px; height: 29px; background-size: 29px; border-radius: 4px;"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" d="M28 8.557a9.913 9.913 0 0 1-2.828.775 4.93 4.93 0 0 0 2.166-2.725 9.738 9.738 0 0 1-3.13 1.194 4.92 4.92 0 0 0-3.593-1.55 4.924 4.924 0 0 0-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.942 4.942 0 0 0-.665 2.477c0 1.71.87 3.214 2.19 4.1a4.968 4.968 0 0 1-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174-.318 0-.626-.03-.928-.086a4.935 4.935 0 0 0 4.6 3.42 9.893 9.893 0 0 1-6.114 2.107c-.398 0-.79-.023-1.175-.068a13.953 13.953 0 0 0 7.55 2.213c9.056 0 14.01-7.507 14.01-14.013 0-.213-.005-.426-.015-.637.96-.695 1.795-1.56 2.455-2.55z"></path></svg></span><span class="a2a_label">Twitter</span></a>
                                <a class="a2a_button_facebook_messenger" target="_blank" href="/#facebook_messenger" rel="nofollow noopener"><span class="a2a_svg a2a_s__default a2a_s_facebook_messenger" style="background-color: rgb(0, 132, 255); width: 29px; line-height: 29px; height: 29px; background-size: 29px; border-radius: 4px;"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" d="M16 5C9.986 5 5.11 9.56 5.11 15.182c0 3.2 1.58 6.054 4.046 7.92V27l3.716-2.06c.99.276 2.04.425 3.128.425 6.014 0 10.89-4.56 10.89-10.183S22.013 5 16 5zm1.147 13.655L14.33 15.73l-5.423 3 5.946-6.31 2.816 2.925 5.42-3-5.946 6.31z"></path></svg></span><span class="a2a_label">Facebook Messenger</span></a>
                                <a class="a2a_button_whatsapp" target="_blank" href="/#whatsapp" rel="nofollow noopener"><span class="a2a_svg a2a_s__default a2a_s_whatsapp" style="background-color: rgb(18, 175, 10); width: 29px; line-height: 29px; height: 29px; background-size: 29px; border-radius: 4px;"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M16.21 4.41C9.973 4.41 4.917 9.465 4.917 15.7c0 2.134.592 4.13 1.62 5.832L4.5 27.59l6.25-2.002a11.241 11.241 0 0 0 5.46 1.404c6.234 0 11.29-5.055 11.29-11.29 0-6.237-5.056-11.292-11.29-11.292zm0 20.69c-1.91 0-3.69-.57-5.173-1.553l-3.61 1.156 1.173-3.49a9.345 9.345 0 0 1-1.79-5.512c0-5.18 4.217-9.4 9.4-9.4 5.183 0 9.397 4.22 9.397 9.4 0 5.188-4.214 9.4-9.398 9.4zm5.293-6.832c-.284-.155-1.673-.906-1.934-1.012-.265-.106-.455-.16-.658.12s-.78.91-.954 1.096c-.176.186-.345.203-.628.048-.282-.154-1.2-.494-2.264-1.517-.83-.795-1.373-1.76-1.53-2.055-.158-.295 0-.445.15-.584.134-.124.3-.326.45-.488.15-.163.203-.28.306-.47.104-.19.06-.36-.005-.506-.066-.147-.59-1.587-.81-2.173-.218-.586-.46-.498-.63-.505-.168-.007-.358-.038-.55-.045-.19-.007-.51.054-.78.332-.277.274-1.05.943-1.1 2.362-.055 1.418.926 2.826 1.064 3.023.137.2 1.874 3.272 4.76 4.537 2.888 1.264 2.9.878 3.43.85.53-.027 1.734-.633 2-1.297.266-.664.287-1.24.22-1.363-.07-.123-.26-.203-.54-.357z"></path></svg></span><span class="a2a_label">WhatsApp</span></a>
                                <div style="clear: both;"></div>
                            </div>
                        </center>
                        <script async="" src="https://static.addtoany.com/menu/page.js"></script>
                    </div>

                </div>


            </div>
            <div class="col-md-7">

                <div class="news-box">

                    <img class="mb-4" src="{{ asset("storage/uploads/$news->image") }}">

                    <h1> {{ $news->title }} </h1>
                    <small><i class="fas fa-clock    "></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }}</small>
                    <p class="text-justify" style="font-size: 18px;">
                        {{ strip_tags($news->body) }}
                    </p>



                </div>

                <br>
                <hr>

                <div class="row">

                    <div class="col-md-12">
                        <div class=" mt-4 mb-4">
                            <h2 class="cat-title">
                                আরও খবর <i class="far fa-arrow-alt-circle-right"></i></h2>
                        </div>
                    </div>
                    @foreach ($reletedNewses as $news)
                     <div class="col-md-4">
                        <a class="news-box mb-4" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">

                            <img class="mb-4" src="{{ asset("storage/uploads/$news->image") }}">

                            <h1> {{ Str::words($news->title, 8, '...') }} </h1>
                            <p>{{ Str::words(strip_tags($news->body), 20, '...') }}
                            </p>

                            <small><i class="fas fa-clock"></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }} </small>

                        </a>
                    </div> 
                   
                    @endforeach

                    <a href="{{ route('frontend.showByCategory', [$news->category->categorySlug]) }}" class="btn btn-primary btn-block" style="background: #1c4a7b"><h4 class="m-0" ><b>আরও</b></h4></a>

                    
                </div>

            </div>
            <!-- side panel -->
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

                    @foreach ($recentNews as $news)
                    <a href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                    <div class="news-bar mt-4">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="{{ asset("storage/uploads/$news->image") }}">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1>{{ Str::words($news->title, 8) }}</h1>
                                <small><i class="fas fa-clock"></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }}</small>
                            </div>
                        </div>
                    </div>
                    </a>
                    @endforeach

                </div>
                <div class="tab-pane" id="tabs-2" role="tabpanel">
                    <!--secound panel-->
                    @foreach ($mostReaded as $news)
                    <div class="news-bar mt-4">
                        <a href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="{{ asset("storage/uploads/$news->image") }}">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1>{{ Str::words($news->title, 8, '...') }}</h1>
                                <small><i class="fas fa-clock    "></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }}</small>
                            </div>
                        </div>
                    </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- box ad -->
            <div class="mt-2">
                 <!-- box ad -->
            @foreach (ad() as $ad)
            @if ($ad->adname == 'showPage-box-ad' && $ad->adtype == 1)
                <div class="mt-2">
                    <img class="img-fluid" src="{{ asset("storage/ad/$ad->adimage") }}" alt="">
                </div>
            @endif
            @if ($ad->adname == 'showPage-box-ad' && $ad->adtype == 2)
                {{ $ad->adscript }}
            @endif
            @endforeach
            </div>
        </div>
        <!-- side panel ends -->



            <div class="col-md-12">
                <div class="line-bottom mt-4 mb-4">
                </div>
            </div>

             <!--banner ad-->
             <div class="col-md-12">
                <div class="text-center">
                    @foreach (ad() as $ad)
                    @if ($ad->adname == 'showPage-banner-ad-1' && $ad->adtype == 1)
                        
                            <img class="img-fluid" src="{{ asset("storage/ad/$ad->adimage") }}" alt="">
                        
                    @endif
                    @if ($ad->adname == 'showPage-box-ad-1' && $ad->adtype == 2)
                        {{ $ad->adscript }}
                    @endif
                @endforeach
                </div>
            </div>
            <!--banner ad end-->

            <div class="col-md-12">
                <div class="line-bottom mt-4 mb-4">
                </div>
            </div>

        </div>
    </div>
@include('frontend.layouts.footer')
@endsection