@extends('frontend.layouts.master')
@section('content')
@section('title')
    {{ $page->title .' - '. config('app.name') ?? config('app.name') }}
@endsection
@section('description')
    {{ Str::limit($page->body, 160) ?? Str::limit($webInfo->site_description, 160) }}
@endsection
{{-- navbar --}}
@include('frontend.layouts.navbar')
    
    <div class="container mt-4">
        <div class="row">

            <div class="col-md-7 offset-3">

                <div class="news-box">

                    <h1> {{ $page->title }} </h1>
                    <hr>
                    <p class="text-justify" style="font-size: 18px;">
                        {{ strip_tags($page->content) }}
                    </p>


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