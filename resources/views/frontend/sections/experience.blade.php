<section class="experience-area section-padding">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 d-none d-lg-block">
                <figure class="single-image wow fadeInLeft">
                    <img src="{{$experiences->image}}" alt="">
                </figure>
            </div>
            <div class="col-lg-6">
                <div class="experience-text">
                    <h3 class="title wow fadeInUp" data-wow-delay="0.3s">{{$experiences->title}}</h3>
                    <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                        {!! $experiences->description !!}
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="icon-info wow fadeInUp" data-wow-delay="0.3s">
                                <div class="icon"><i class="fas fa-mobile-android-alt"></i></div>
                                <h6><a href="callto:{{$experiences->phone}}" class="text">{{$experiences->phone}}</a></h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="icon-info wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon"><i class="fas fa-envelope"></i></div>
                                <h6><a href="mailto:{{$experiences->email}}" class="text">{{$experiences->email}}</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>