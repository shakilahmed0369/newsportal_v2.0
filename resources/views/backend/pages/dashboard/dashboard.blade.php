@extends('backend.layouts.master')
@section('content')

<!-- [ Main Content ] start -->
<div class="row">
    <!-- table card-1 start -->
    <div class="col-md-12 col-xl-4">
        <!-- widget primary card start -->
        <a href="{{ route('admin.news.index') }}">
            <div class="card flat-card widget-primary-card">
                <div class="row-table">
                    <div class="col-sm-3 card-body">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="col-sm-9">
                        <h4>{{ $news }}</h4>
                        <h6>News Published</h6>
                    </div>
                </div>
            </div>
        </a>
        <!-- widget primary card end -->  
    </div>
    <!-- table card-1 end -->

    <!-- table card-1 start -->
    <div class="col-md-12 col-xl-4">
        <!-- widget primary card start -->
        <a href="">
            <div class="card flat-card widget-primary-card">
                <div class="row-table">
                    <div class="col-sm-3 card-body">
                        <i class="fas fa-list"></i>
                    </div>
                    <div class="col-sm-9">
                        <h4>{{ $categoryCount }}</h4>
                        <h6>Categoris</h6>
                    </div>
                </div>
            </div>
        </a>
        <!-- widget primary card end -->  
    </div>
    <!-- table card-1 end -->

    <!-- table card-1 start -->
    <div class="col-md-12 col-xl-4">
        <!-- widget primary card start -->
        <a href="">
            <div class="card flat-card widget-primary-card">
                <div class="row-table">
                    <div class="col-sm-3 card-body">
                        <i class="far fa-images"></i>
                    </div>
                    <div class="col-sm-9">
                        <h4>{{ $gallery }}</h4>
                        <h6>Gallery</h6>
                    </div>
                </div>
            </div>
        </a>
        <!-- widget primary card end -->  
    </div>
    <!-- table card-1 end -->

    <!-- table card-1 start -->
    <div class="col-md-12 col-xl-4">
        <!-- widget primary card start -->
        <a href="">
            <div class="card flat-card widget-primary-card">
                <div class="row-table">
                    <div class="col-sm-3 card-body">
                        <i class="fas fa-video"></i>
                    </div>
                    <div class="col-sm-9">
                        <h4>{{ $videos }}</h4>
                        <h6>Videos</h6>
                    </div>
                </div>
            </div>
        </a>
        <!-- widget primary card end -->  
    </div>
    <!-- table card-1 end -->


    <!-- table card-1 start -->
    <div class="col-md-12 col-xl-4">
        <!-- widget primary card start -->
        <a href="">
            <div class="card flat-card widget-primary-card">
                <div class="row-table">
                    <div class="col-sm-3 card-body">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <div class="col-sm-9">
                        <h4>{{ $role }}</h4>
                        <h6>Roles</h6>
                    </div>
                </div>
            </div>
        </a>
        <!-- widget primary card end -->  
    </div>
    <!-- table card-1 end -->
    

</div>
<!-- [ Main Content ] end -->
@endsection