<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 col-sm-12 line-right">
            <div class="footer-widget">
                <div class="widget-about">


                    <a href="">
                        <img class="img-fluid" src="{{ asset("storage/propertes/".webLogo()->header_logo) }}" style="width: 220px;">
                    </a>
                    <p>{{ webInfo()->site_description }}</p>
                    <ul class="contact-details mb-2">

                        <li>
                            <span class="fas fa-envelope-open"></span>
                            <a href="mailto:{{ contactInfo()->email }}">{{ contactInfo()->email }}</a>
                        </li>

                    </ul>
                    <br>


                    <a href="page/about-us" class="btn hyper-link"><i class="fas fa-newspaper"></i> About Us</a> &nbsp; &nbsp;
                    <a href="page/contact-us" class="btn hyper-link"><i class="fas fa-phone"></i> Contact Us</a> &nbsp; &nbsp;
                    <a href="page/privacy-policy" class="btn hyper-link">Privacy Policy</a> &nbsp; &nbsp;


                    <a href="page/terms-of-service" class="btn hyper-link"> Terms of Service</a> &nbsp; &nbsp;
                    <a href="page/disclaimer" class="btn hyper-link"> Disclaimer </a>

                </div>
            </div>
            <!-- Ends: .footer-widget -->
        </div>




        <!-- end /.col-md-4 -->
        <div class="col-md-3 col-sm-4 d-none d-md-block">
            <div class="footer-widget">
                <div class="footer-menu footer-menu--1">

                    <ul>
                        @foreach (footer_cat() as $category)
                            
                        @if ($loop->index <= 9)
                        <li> 
                            <a href="{{ route('frontend.showByCategory', $category->categorySlug) }}"><i class="far fa-arrow-alt-circle-right"></i> &nbsp; &nbsp; {{ $category->categoryName }}</a>
                        </li>
                        @endif
                       

                        @endforeach
                       


                    </ul>
                </div>
                <!-- end /.footer-menu -->
            </div>
            <!-- Ends: .footer-widget -->
        </div>
        <!-- end /.col-md-3 -->



        <!-- end /.col-md-4 -->
        <div class="col-md-3 col-sm-4 d-none d-md-block">
            <div class="footer-widget">
                <div class="footer-menu footer-menu--1 text-right">

                    <ul>

                        @foreach (footer_cat() as $category)
                            
                        @if ($loop->index > 9 && $loop->index > 19)
                        <li> 
                            <a href="{{ route('frontend.showByCategory', $category->categorySlug) }}"><i class="far fa-arrow-alt-circle-right"></i> &nbsp; &nbsp; {{ $category->categoryName }}</a>
                        </li>
                        @endif
                       

                        @endforeach


                    </ul>
                </div>
                <!-- end /.footer-menu -->
            </div>
            <!-- Ends: .footer-widget -->
        </div>
        <!-- end /.col-md-3 -->



        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>

        <div class="col-md-12 mb-5">
            <center>
                <p class="copyright">{{ webInfo()->footer_info }}</p>
            </center>
        </div>

    </div>
    <!-- end /.row -->
</div>