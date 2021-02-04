<div class="header">
    <nav class="navbar navbar-expand-xl navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo.png" class="main-logo" alt="">
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
                                <div class="row text-center ml-md-3">
                                    @foreach ($categories as $category)
                                        @if ($category->status == 0)
                                        <a href="{{ route('frontend.showByCategory', $category->categorySlug) }}" class="py-2 nav-link dropdown-item col-xl-2 col-lg-2 col-sm-6 col-md-6">{{ $category->categoryName }}</a>
                                        @endif
                                    @endforeach
                                    
                                   
                                    
                              
                          
                            </div>
                            </div>
                            
                        </div>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success search my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </nav>
</div>
