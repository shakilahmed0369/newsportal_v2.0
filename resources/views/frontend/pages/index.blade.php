@extends('frontend.layouts.master')
@section('content')
{{-- navbar --}}
@include('frontend.layouts.navbar')
<div class="container mt-4">
    <div class="row">
        <div class="col-xl-9 col-12 line-right">

            <div class="row">
                @foreach ($featured as $news)
                    @if ($loop->index == 0)
                    <div class="col-md-8 line-right">
                        <a class="news-box" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <img src="{{ asset("storage/uploads/$news->image") }}">
                                </div>
                                <div class="col-md-6 col-12 mt-4 mt-md-0">
                                    <h1>{{ Str::words($news->title, 8) }}</h1>
                                    <p>{{ Str::words($news->body, 30) }}</p>
                                    <small><i class="fas fa-clock"></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }}</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @if ($loop->index == 1)
                    <div class="col-md-4 mt-4 mt-md-0">
                        <a class="news-box" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}"">
                            <h1>{{ Str::words($news->title, 8) }}</h1>
                            <p>{{ Str::words($news->body, 30) }}</p>
                            <small><i class="fas fa-clock"></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y")  }}</small>
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
                    <a class="news-box" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                        <h1>{{ Str::words($news->title, 8) }}</h1>
                        <p>{{ Str::words($news->body, 30) }}</p>
                        <small><i class="fas fa-clock"></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }}</small>
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
                            <a class="news-bar" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                                <div class="row">
                                    <div class="col-4 col-md-6 pr-2">
                                        <img src="{{ asset("storage/uploads/$news->image") }}">
                                    </div>
                                    <div class="col-8 col-md-6 pl-2">
                                        <h1>{{ Str::words($news->title, 8) }}</h1>
                                        <small><i class="fas fa-clock"></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }}</small>
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
                            <a class="news-bar" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                                <div class="row">
                                    <div class="col-4 col-md-6 pr-2">
                                        <img src="{{ asset("storage/uploads/$news->image") }}">
                                    </div>
                                    <div class="col-8 col-md-6 pl-2">
                                        <h1>{{ Str::words($news->title, 8) }}</h1>
                                        <small><i class="fas fa-clock"></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y")  }}</small>
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
                    <div class="news-bar mt-4">

                        <div class="row">

                            <div class="col-4 col-md-6 pr-2">
                                <img src="">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- box ad -->
            <div class="mt-2">
                <img class="img-fluid" src="https://via.placeholder.com/300.png" alt="">
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
                <img src="https://via.placeholder.com/970x90" alt="">
            </div>
        </div>
         <!--banner ad end-->

        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>




    {{-- section loop strats here --}}
        @foreach ($sections as $section)

    {{-- Section 1 starts here --}}
        @if ($section->id == 1 && !$section->position == null)
                <!-- cat one -->
            <div class="col-md-12">
                <div class=" mt-4 mb-4">
                    <a href=""><h2 class="cat-title">{{ $section->category->categoryName }}<i class="far fa-arrow-alt-circle-right"></i></h2></a>
                </div>
            </div>

            <div class="col-md-12">

                        <div class="row">
                            @foreach (mainNews($section->position, 0, 4) as $news)
                                <div class="col-md-3">
                                    <a class="news-box" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                                        <img class="mb-4" src="{{ asset("storage/uploads/$news->image") }}">
                                        <h1>{{ Str::words($news->title, 8) }}</h1>
                                        <p>{{ Str::words($news->body, 20, '...') }}
                                        </p>
                                        <small><i class="fas fa-clock"></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }}</small>

                                    </a>
                                </div>
                            @endforeach
                    </div>

            </div>
        <!-- cat one -->

        {{-- Dvider --}}
        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>
        {{-- Dvider end--}}

        @endif 
    {{-- section 1 end here --}}
        
    {{-- section 2 starts here --}}
        @if ($section->id == 2 && !$section->position == null)
            <div class="col-md-12">
                <div class=" mt-4 mb-4">
                    <h2 class="cat-title">{{ $section->category->categoryName }} <i class="far fa-arrow-alt-circle-right"></i></h2>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    
                    <div class="col-md-4 line-right">
                        @foreach (mainNews($section->position, 0, 2) as $news)
                            @if ($loop->index === 0)
                            <a class="news-box mb-4" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                                <img class="mb-4" src="{{ asset("storage/uploads/$news->image") }}">
                                <h1>{{ Str::words($news->title, 8) }}</h1>
                                <p>{{ Str::words($news->body, 40) }}</p>
                                <small><i class="fas fa-clock"></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }}</small>
                            </a>
                            <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                            @endif
                            @if ($loop->index === 1)
                            <a class="news-bar">
                                <div class="row">
                                    <div class="col-4 col-md-4 pr-2">
                                        <img src="{{ asset("storage/uploads/$news->image") }}">
                                    </div>
                                    <div class="col-8 col-md-8 pl-2">
                                        <h1>{{ Str::words($news->title, 8) }}</h1>
                                        <p class="d-none d-md-block">{{ Str::words($news->body, 15) }}</p>
                                        <small><i class="fas fa-clock"></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }}</small>
                                    </div>
                                </div>
                            </a>
                            @endif
                        @endforeach
                    </div>
    
                    <div class="col-md-4  line-right">
                        @foreach (mainNews($section->position, 2, 4) as $news)
                        <a class="news-bar" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                            <div class="row">
                                <div class="col-4 col-md-4 pr-2">
                                    <img src="{{ asset("storage/uploads/$news->image") }}">
                                </div>
                                <div class="col-8 col-md-8 pl-2">
                                    <h1>{{ Str::words($news->title, 8, '...') }}</h1>
                                    <p class="d-none d-md-block">{{ Str::words($news->body, 15, '...') }}
                                    </p>
                                    <small><i class="fas fa-clock    "></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }} </small>
                                </div>
                            </div>
                        </a>
                       @if ($loop->index < 3)
                       <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                       @endif
                       @endforeach
                    </div>

                    <div class="col-md-4">
                        @foreach (mainNews($section->position, 6, 4) as $news)
                        <a class="news-bar" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                            <div class="row">
                                <div class="col-4 col-md-4 pr-2">
                                    <img src="{{ asset("storage/uploads/$news->image") }}">
                                </div>
                                <div class="col-8 col-md-8 pl-2">
                                    <h1>{{ Str::words($news->title, 8, '...') }}</h1>
                                    <p class="d-none d-md-block">{{ Str::words($news->body, 15, '...') }}
                                    </p>
                                    <small><i class="fas fa-clock    "></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }} </small>
                                </div>
                            </div>
                        </a>
                        @if ($loop->index < 3)
                            <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- Dvider --}}
            <div class="col-md-12">
                <div class="line-bottom mt-4 mb-4"></div>
            </div>
            {{-- Dvider end--}}
        @endif 

    {{-- Section 2 ends here --}}


    {{-- Section 3 starts here --}}
        @if ( $section->id == 3 && !$section->position === null)
                <!-- cat one -->
            <div class="col-md-12">
                <div class=" mt-4 mb-4">
                    <a href=""><h2 class="cat-title">{{ $section->category->categoryName }}<i class="far fa-arrow-alt-circle-right"></i></h2></a>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    @foreach (mainNews($section->position, 0, 4) as $news)
                        <div class="col-md-3">
                            <a class="news-box" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                                    <img class="mb-4" src="{{ asset("storage/uploads/$news->image") }}">
                                    <h1>{{ Str::words($news->title, 8) }}</h1>
                                    <p>{{ Str::words($news->body, 25, '...') }}
                                    </p>
                                    <small><i class="fas fa-clock"></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }}</small>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        <!-- cat one -->

        {{-- Dvider --}}
        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>
        {{-- Dvider end--}}
        @endif

{{-- section 3 ends here --}}

    


{{-- section 4 strats here --}}
        @if ($section->id === 4 && !$section->position == null)
        <div class="col-md-12">
            <div class=" mt-4 mb-4">
                <h2 class="cat-title">{{ $section->category->categoryName }}<i class="far fa-arrow-alt-circle-right"></i></h2>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 line-right">
                    @foreach (mainNews($section->position, 0, 1) as $news)
                    <a href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                    <div class="news-box mb-4">
                        <img class="mb-4" src="{{ asset("storage/uploads/$news->image") }}">
                        <h1>{{ Str::words($news->title, 8, '...') }}</h1>
                        <p>{{ Str::words($news->body, 80, '...') }}</p>
                        <small><i class="fas fa-clock    "></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }} </small>
                    </div> 
                    </a> 
                    @endforeach
                </div>

                <div class="col-md-6">
                    @foreach (mainNews($section->position, 1, 4) as $item)
                    <div class="news-bar big">
                        <div class="row">
                            <div class="col-4 col-md-4 pr-2">
                                <img src="{{ asset("storage/uploads/$news->image") }}">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1>{{ Str::words($news->title, 8, '...') }}</h1>
                                <p class="d-none d-md-block">{{ Str::words($news->body, 25, '...') }}</p>
                                <small><i class="fas fa-clock    "></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }} </small>
                            </div>
                        </div>
                    </div>
                    @if ($loop->index < 3)
                        <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        {{-- Dvider --}}
        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>
        {{-- Dvider end --}}
        @endif
{{-- section 4 ends here --}}

    

        


    {{-- section 5 starts here --}}
        @if ($section->id == 5 && !$section->position == null)
            <div class="col-md-12">
                <div class=" mt-4 mb-4">
                    <h2 class="cat-title">{{ $section->category->categoryName }} <i class="far fa-arrow-alt-circle-right"></i></h2>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    
                    <div class="col-md-4 line-right">
                        @foreach (mainNews($section->position, 0, 2) as $news)
                            @if ($loop->index === 0)
                            <a class="news-box mb-4" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                                <img class="mb-4" src="{{ asset("storage/uploads/$news->image") }}">
                                <h1>{{ Str::words($news->title, 8) }}</h1>
                                <p>{{ Str::words($news->body, 40) }}</p>
                                <small><i class="fas fa-clock"></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }}</small>
                            </a>
                            <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                            @endif
                            @if ($loop->index === 1)
                            <a class="news-bar">
                                <div class="row">
                                    <div class="col-4 col-md-4 pr-2">
                                        <img src="{{ asset("storage/uploads/$news->image") }}">
                                    </div>
                                    <div class="col-8 col-md-8 pl-2">
                                        <h1>{{ Str::words($news->title, 8) }}</h1>
                                        <p class="d-none d-md-block">{{ Str::words($news->body, 15) }}</p>
                                        <small><i class="fas fa-clock"></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }}</small>
                                    </div>
                                </div>
                            </a>
                            @endif
                        @endforeach
                    </div>
    
                    <div class="col-md-4  line-right">
                        @foreach (mainNews($section->position, 2, 4) as $news)
                        <a class="news-bar" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                            <div class="row">
                                <div class="col-4 col-md-4 pr-2">
                                    <img src="{{ asset("storage/uploads/$news->image") }}">
                                </div>
                                <div class="col-8 col-md-8 pl-2">
                                    <h1>{{ Str::words($news->title, 8, '...') }}</h1>
                                    <p class="d-none d-md-block">{{ Str::words($news->body, 15, '...') }}
                                    </p>
                                    <small><i class="fas fa-clock    "></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }} </small>
                                </div>
                            </div>
                        </a>
                       @if ($loop->index < 3)
                       <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                       @endif
                       @endforeach
                    </div>

                    <div class="col-md-4">
                        @foreach (mainNews($section->position, 6, 4) as $news)
                        <a class="news-bar" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                            <div class="row">
                                <div class="col-4 col-md-4 pr-2">
                                    <img src="{{ asset("storage/uploads/$news->image") }}">
                                </div>
                                <div class="col-8 col-md-8 pl-2">
                                    <h1>{{ Str::words($news->title, 8, '...') }}</h1>
                                    <p class="d-none d-md-block">{{ Str::words($news->body, 15, '...') }}
                                    </p>
                                    <small><i class="fas fa-clock    "></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }} </small>
                                </div>
                            </div>
                        </a>
                        @if ($loop->index < 3)
                            <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- Dvider --}}
            <div class="col-md-12">
                <div class="line-bottom mt-4 mb-4"></div>
            </div>
            {{-- Dvider end--}}
        @endif 

    {{-- Section 5 ends here --}}



    {{-- Section 6 strats here --}}
    @if ($section->id == 6 && !$section->position == null)
        <div class="col-md-12">
            <div class=" mt-4 mb-4">
                <h2 class="cat-title">{{ $section->category->categoryName }} <i class="far fa-arrow-alt-circle-right"></i></h2>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 line-right">
                    @foreach (mainNews($section->position, 0, 4) as $news)
                    <a class="news-bar" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                        <div class="row">
                            <div class="col-4 col-md-4 pr-2">
                                <img src="{{ asset("storage/uploads/$news->image") }}">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> {{ Str::words($news->title, 8, '...') }} </h1>
                                <p class="d-none d-md-block">{{ Str::words($news->body, 14, '...') }}
                                </p>
                                <small><i class="fas fa-clock    "></i>{{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }} </small>
                            </div>
                        </div>
                    </a>
                    @if ($loop->index < 3)
                        <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    @endif
                    @endforeach

                </div>

                <div class="col-md-4  line-right">
                    @foreach (mainNews($section->position, 4, 2) as $news)
                    @if ($loop->index === 0)
                    <a class="news-box mb-4" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                        <img class="mb-4" src="{{ asset("storage/uploads/$news->image") }}">

                        <h1>{{ Str::words($news->title, 8, '...') }}</h1>
                        <p>{{ Str::words($news->body, 25, '...') }}
                        </p>
                        <small><i class="fas fa-clock"></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }} </small>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    @endif
                    @if ($loop->index === 1)    
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-4 pr-2">
                                <img src="{{ asset("storage/uploads/$news->image") }}">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> {{ Str::words($news->title, 8, '...') }} </h1>
                                <p class="d-none d-md-block">{{ Str::words($news->body, 14, '...') }}
                                </p>
                                <small><i class="fas fa-clock    "></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }} </small>
                            </div>
                        </div>
                    </a>
                    @endif
                    @endforeach
                </div>

                <div class="col-md-4">
                    @foreach (mainNews($section->position, 6, 4) as $news)
                    <a class="news-bar" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                        <div class="row">
                            <div class="col-4 col-md-4 pr-2">
                                <img src="{{ asset("storage/uploads/$news->image") }}">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> {{ Str::words($news->title, 8, '...') }} </h1>
                                <p class="d-none d-md-block">{{ Str::words($news->body, 14, '...') }}
                                </p>
                                <small><i class="fas fa-clock    "></i>{{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }} </small>
                            </div>
                        </div>
                    </a>
                    @if ($loop->index < 3)
                        <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    @endif
                    @endforeach

                </div>
            </div>
        </div>

         {{-- Dvider --}}
         <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4"></div>
        </div>
        {{-- Dvider end--}}
    @endif
    {{-- Section 6 ends here --}}
 

    {{-- section 7 strats here --}}
        @if ($section->id === 7 && !$section->position == null)
        <div class="col-md-12">
            <div class=" mt-4 mb-4">
                <h2 class="cat-title">{{ $section->category->categoryName }}<i class="far fa-arrow-alt-circle-right"></i></h2>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 line-right">
                    @foreach (mainNews($section->position, 0, 1) as $news)
                    <a href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                    <div class="news-box mb-4">
                        <img class="mb-4" src="{{ asset("storage/uploads/$news->image") }}">
                        <h1>{{ Str::words($news->title, 8, '...') }}</h1>
                        <p>{{ Str::words($news->body, 80, '...') }}</p>
                        <small><i class="fas fa-clock    "></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }} </small>
                    </div>
                    </a> 
                    @endforeach
                </div>

                <div class="col-md-6">
                    @foreach (mainNews($section->position, 1, 4) as $news)
                    <a href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                    <div class="news-bar big">
                        <div class="row">
                            <div class="col-4 col-md-4 pr-2">
                                <img src="{{ asset("storage/uploads/$news->image") }}">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1>{{ Str::words($news->title, 8, '...') }}</h1>
                                <p class="d-none d-md-block">{{ Str::words($news->body, 25, '...') }}</p>
                                <small><i class="fas fa-clock    "></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }} </small>
                            </div>
                        </div>
                    </div>
                    </a>
                    @if ($loop->index < 3)
                        <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        {{-- Dvider --}}
        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>
        {{-- Dvider end --}}
        @endif
{{-- section 7 ends here --}}
        
@endforeach
{{-- loop end --}}
    </div>
</div>

{{-- video section(8) starts --}}
        @if (count($videos)>0)
        <div class="section-video mt-4 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class=" mt-4 mb-4">
                            <h2 class="cat-title">ভিডিও <i class="far fa-arrow-alt-circle-right"></i></h2>
                        </div>
                    </div>
                        @foreach ($videos as $video)
                            @if ($loop->index == 0)
                            <div class="col-md-12 mb-4">

                                <div class="videoone d-flex justify-content-center text-center align-items-center">
                                    <iframe style="border: none" width="100%" height="100%"
                                    src="{{ $video->video_link }}">
                                    </iframe> 
                                </div>
                            </div>
                            @endif
                            @if ($loop->index == 1)
                            <div class="col-md-3 mb-4">
                                <div class="">
                                    <div class="">
                                        <iframe style="border: none" width="100%" height=""
                                        src="{{ $video->video_link }}">
                                        </iframe> 
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                </div>
            </div>

        </div>
        @endif
{{-- video section(8) ends --}}





<div class="container">
    <div class="row">
        @foreach ($sections as $section)
          
    {{-- section 9 strats here --}}
        @if ($section->id === 9 && !$section->position == null)
        <div class="col-md-12">
            <div class=" mt-4 mb-4">
                <h2 class="cat-title">{{ $section->category->categoryName }}<i class="far fa-arrow-alt-circle-right"></i></h2>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 line-right">
                    @foreach (mainNews($section->position, 0, 1) as $news)
                    <a href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                    <div class="news-box mb-4">
                        <img class="mb-4" src="{{ asset("storage/uploads/$news->image") }}">
                        <h1>{{ Str::words($news->title, 8, '...') }}</h1>
                        <p>{{ Str::words($news->body, 80, '...') }}</p>
                        <small><i class="fas fa-clock    "></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }} </small>
                    </div> 
                    </a> 
                    @endforeach
                </div>

                <div class="col-md-6">
                    @foreach (mainNews($section->position, 1, 4) as $news)
                    <a href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                    <div class="news-bar big">
                        <div class="row">
                            <div class="col-4 col-md-4 pr-2">
                                <img src="{{ asset("storage/uploads/$news->image") }}">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1>{{ Str::words($news->title, 8, '...') }}</h1>
                                <p class="d-none d-md-block">{{ Str::words($news->body, 25, '...') }}</p>
                                <small><i class="fas fa-clock    "></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }} </small>
                            </div>
                        </div>
                    </div>
                    </a>
                    @if ($loop->index < 3)
                        <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        {{-- Dvider --}}
        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>
        {{-- Dvider end --}}
        @endif
{{-- section  ends here --}}
        

       

{{-- Section 10 starts here --}}
    @if ($section->id == 10 && !$section->position  == null)
        <!-- cat one -->
        <div class="col-md-12">
            <div class=" mt-4 mb-4">
                <a href=""><h2 class="cat-title">{{ $section->category->categoryName }}<i class="far fa-arrow-alt-circle-right"></i></h2></a>
            </div>
        </div>

        <div class="col-md-12">

                    <div class="row">
                        @foreach (mainNews($section->position, 0, 4) as $news)
                            <div class="col-md-3">
                                <a class="news-box" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                                    <img class="mb-4" src="{{ asset("storage/uploads/$news->image") }}">
                                    <h1>{{ Str::words($news->title, 8) }}</h1>
                                    <p>{{ Str::words($news->body, 25, '...') }}
                                    </p>
                                    <small><i class="fas fa-clock"></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }}</small>

                                </a>
                            </div>
                        @endforeach
                </div>

        </div>
    <!-- cat one -->

    {{-- Dvider --}}
    <div class="col-md-12">
        <div class="line-bottom mt-4 mb-4">
        </div>
    </div>
    {{-- Dvider end--}}
    @endif 
{{-- section 10 end here --}}

@endforeach
{{-- loop end --}}



{{-- section 11 to 18 strats here --}}
        <div class="col-12">

            <div class="row">
                @foreach ($sections as $section)
                   @if ($section->id > 10 && $section->id <= 18)
                   @if (!$section->position == null)
                   <div class="col-md-3">

                    <div class=" mt-4 mb-4">
                        <h2 class="cat-title">{{ $section->category->categoryName }} <i class="far fa-arrow-alt-circle-right"></i></h2>
                    </div>

                    @foreach (mainNews($section->position, 0, 4) as $news)
                        @if ($loop->index == 0)
                        <a class="news-box mb-4" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                            <img class="mb-4" src="{{ asset("storage/uploads/$news->image") }}
                            ">
    
                            <h1> {{ Str::words($news->title, 8, '...') }} </h1>
    
                            <small><i class="fas fa-clock    "></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }} </small>
                        </a>
                        <div class=" line-bottom mt-0 mt-md-4 mb-4"></div> 
                        @endif
                        @if ($loop->index > 0)
                        <a class="news-bar" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">
                            <div class="row">
                                <div class="col-4 col-md-6 pr-2">
                                    <img src="{{ asset("storage/uploads/$news->image") }}
                                    ">
                                </div>
                                <div class="col-8 col-md-6 pl-2">
                                    <h1> {{ Str::words($news->title, 8, '...') }} </h1>
                                    <small><i class="fas fa-clock    "></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }} </small>
                                </div>
                            </div>
                        </a>
                        @if ($loop->index < 3)
                        <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                        @endif
                        @endif
                    @endforeach

                </div> 
                   @endif

                   @endif 
                {{-- Dvider --}}
                @if ($section->id == 14)
                <div class="col-md-12">
                    <div class="line-bottom mt-4 mb-4">
                    </div>
                </div>
                @endif
                {{-- Dvider end --}}
                @endforeach
            </div>
            {{-- section 11 to 18 strats here --}}

        </div>
    </div>
</div>
{{-- footer --}}
@include('frontend.layouts.footer')

@endsection