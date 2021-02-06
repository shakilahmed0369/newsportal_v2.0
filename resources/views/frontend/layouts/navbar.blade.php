
<div class="header">
    <div style="font-size: 15px; background-color: #1c4a7b" class="desktop-top-header top-header d-print-none ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-sm-12 offset-xl-0">
                    <ul class="list-inline text-white top_head_left_part my-1">
                    <li class="list-inline-item pr-2">{{ contactInfo()->city }}, {{ contactInfo()->country }} </li>
                    <li class="list-inline-item pr-2">{{ bangla_date(time() ,"en", "d m y") }},   {{ bangla_date(time() ,"bn", "d m y") }} <br></li>
                    <li class="list-inline-item pr-2"><a class="text-decoration-none text-white" href="https://www.jugantor.com/todays-paper">আজকের পত্রিকা</a></li>

                    </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-12 pr-2">
                    <ul class="list-inline text-right text-white my-1">
                    <li class="list-inline-item"><a class="text-decoration-none text-white" target="_blank" href="{{ contactInfo()->fb }}"><i class="fab fa-facebook-f"></i></a></li>

                    <li class="list-inline-item"><a class="text-decoration-none text-white" target="_blank" href="{{ contactInfo()->tw }}"><i class="fab fa-twitter"></i></a></li>

                    <li class="list-inline-item"><a class="text-decoration-none text-white" target="_blank" href="{{ contactInfo()->yt }}"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                    </div>
            </div>
        </div>
        </div>



    <nav class="navbar navbar-expand-xl navbar-light bg-light p-1">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img style="width: 140px !important;" src="{{ asset("storage/propertes/".webLogo()->header_logo) }}" class="main-logo" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-md-5 ml-0">
                    @foreach ($categories as $category)
                    @if ($category->status == 1)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.showByCategory', $category->categorySlug) }}"> {{ $category->categoryName }}</a>
                        </li>
                    @endif
                    
                    @endforeach
                    

                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> আরও</a>
                        
                        <div style="box-shadow: 0 1px 2px rgba(0,0,0,0.3); border-radius: 0px; margin-top: 5px" class="dropdown-menu w-100 top-auto py-4" aria-labelledby="dropdownId">
                        
                            <div class="container">

                            
                                <div class="row w-100 text-left ml-md-3">
                                    @foreach ($categories as $category)
                                        @if (@$category->status == 0)
                                        <a href="{{ route('frontend.showByCategory', $category->categorySlug) }}" class="py-2 nav-link dropdown-item col-xl-2 col-lg-2 col-sm-6 col-md-6">{{ $category->categoryName }}</a>
                                        @endif
                                    @endforeach                       
                                </div>
                            </div>
                            
                        </div>
                    </li>

                    {{-- search button --}}
                    <li class="nav-link pt-1 ml-md-5">
                        <a style="font-size: 20px;" class="nav-link search-icon icon-search p-0 " data-toggle="collapse" href="#collapseSearch" style="" aria-expanded="false">
                        <i style="color:#1c4a7b" class="fas fa-search align-bottom"></i>
                        </a>
                    </li>

    

                </ul>
                
            </div>
        </div>

        
    </nav>

    <div class="search-box bg-white mt-2">
        
            
            <form action="{{ route('frontend.search' ) }}" method="GET" style="background-color:#dfdfdf !important" class="input-group input-group-lg mb-0 pb-0 w-100 p-0 mb-0 bg-white rounded srch_form collapse" id="collapseSearch">
                <input type="text" name="keywords" class="form-control srch_keyword" placeholder="সার্চ করুন..." value="">
                <div class="input-group-append">
                    <button style="background-color: #1c4a7b !important; color: #ffff;" class="btn btn-sm" type="submit"><i class="fas fa-search srch_btn"></i></button>
                    <button  class="btn btn-sm btn-danger search-icon" data-toggle="collapse" href="#collapseSearch" aria-expanded="true" aria-controls="collapseSearch" type="button"><i class="fas fa-times text-white"></i></button>
                    </div>
            </form>
            
        
    </div>
</div>

<div style="position: fixed" class="acme-news-ticker fixed-bottom d-none d-md-block" >
    <div class="acme-news-ticker-label">News Ticker Label</div>
    <div class="acme-news-ticker-box">
      <ul class="my-news-ticker">
          @foreach (breakingNews() as $news)
            <li>
                <img style="margin-right:12px" width="50px" src="{{ asset("storage/propertes/logo.png") }}" alt="">
                <a href="{{ route('frontend.showNews', [$news->category->categorySlug, $news->slug]) }}"><b>{{ $news->title }}</b></a>
            </li>
            
          @endforeach
        

      </ul>
    </div>
    <div class="acme-news-ticker-controls acme-news-ticker-horizontal-controls">
      <span class="acme-news-ticker-arrow acme-news-ticker-prev"></span>
      <span class="acme-news-ticker-pause"></span>
      <span class="acme-news-ticker-arrow acme-news-ticker-next"></span>
    </div>
  </div>

  