<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/bg/bg10.jpg" data-speed="0.8">
    <div class="section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb100">
                    <h2 class="section-heading">{{$data5[0]->titre1}} <span class="theme-accent-color">{{$data5[0]->titre2}}</span>{{$data5[0]->titre3}}</h2>
                    <hr class="thin-hr">
                    <h3 class="section-subheading secondary-font">{{$data5[0]->btn1}}</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="1" data-items-desktop="[1200,1]" data-items-desktop-small="[980,1]" data-items-tablet="[768,1]" data-items-mobile="[479,1]">
                        @foreach ($data5[0] as $value)
                            
                        
                        <li>
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-2 item-caption">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <img src="{{ asset('img/'.$data5[0]->img1)}}" class="img-responsive testimonial-author" alt="">
                                        </div>
                                        <div class="col-sm-10">                                                
                                            <h4>{{$data5[0]->btn2}}</h4>
                                            <p>{{$data5[0]->btn3}}</p>
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star theme-accent-color"></i></li>
                                                <li><i class="fa fa-star theme-accent-color"></i></li>
                                                <li><i class="fa fa-star theme-accent-color"></i></li>
                                                <li><i class="fa fa-star theme-accent-color"></i></li>
                                                <li><i class="fa fa-star theme-accent-color"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>