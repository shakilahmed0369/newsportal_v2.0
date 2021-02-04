@extends('frontend.layouts.master')
@section('content')
{{-- navbar --}}
@include('frontend.layouts.navbar')
<div class="container category mt-4">
    <div class="row">

        <div class="col-md-9">

            <div class="row">

                <div class="col-md-12">
                    <div class=" mt-4 mb-4">
                        <h2 class="cat-title">{{ $category->categoryName }} <i class="far fa-arrow-alt-circle-right"></i></h2>
                    </div>
                </div>

                @foreach ($newses as $news)
                <div class="col-md-4">

                    <a class="news-box mb-4" href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}">

                        <img class="mb-4" src="{{ asset("storage/uploads/$news->image") }}">

                        <h1>{{ Str::words($news->title, 8, '...') }}</h1>
                        <p>{{ Str::words($news->body, 20, '...') }}
                        </p>

                        <small><i class="fas fa-clock    "></i> {{ bangla_date($news->created_at->timestamp ,"en", "d-m-y") }}</small>
                    </a>

                </div>  
                @endforeach
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

        {{-- pagination starts --}}
            {{ $newses->links() }}
        {{-- pagination starts ends--}}
        
        




    </div>
</div>


@endsection
