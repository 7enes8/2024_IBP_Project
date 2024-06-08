        <!-- Home Slider -->
        <div class="home-slider-area">
            <div class="home-slider owl-theme owl-carousel">
                @foreach ($sliderdata as $rs)

                <div class="slider-item slider-bg-one" >
                    <div class="d-table">
                        <div class="d-table-cell" style="background-color:black;">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-5">
                                        <div class="slider-text">
                                            <h1>{{$rs->title}}</h1>
                                            <p>{{$rs->keywords}}</p>
                                            <a href="{{route('services', ['id' => $rs->id])}}">READ MORE 
                                                <i class="icofont-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="slider-shape">
                                            <img class="s-s-one" src="{{Storage::url($rs->image)}}" style="width: 840px; height:801px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End Home Slider -->

        <!-- Slider Bottom -->
        <div class="slider-bottom-area">
            <div class="container">
                <div class="row slider-bottom-wrap">
                    <div class="col-sm-6 col-lg-4">
                        <div class="banner-bottom">
                            <ul>
                                <li>
                                    <i class="flaticon-leader"></i>
                                </li>
                                <li>
                                    <span>100% Legal</span>
                                    <p>Govt Approved</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="banner-bottom">
                            <ul>
                                <li>
                                    <i class="flaticon-auction"></i>
                                </li>
                                <li>
                                    <span>Trusted</span>
                                    <p>99% Case Won</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="banner-bottom">
                            <ul>
                                <li>
                                    <i class="flaticon-support"></i>
                                </li>
                                <li>
                                    <span>Support</span>
                                    <p>Full Time Support</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Bottom -->