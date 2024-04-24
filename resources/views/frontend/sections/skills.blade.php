<section class="skills-area section-padding-top" id="skills-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h3 class="title">{{$skillSetting->title}}</h3>
                            <div class="desc">
                                <p>{{$skillSetting->sub_title}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row skills">
                    @foreach ($skillItem as $item)
                    <div class="col-sm-4">
                        <div class="bar_group wow fadeInUp" data-wow-delay="0.3s" data-max="100">
                            <div class="title"><span><i class="{{$item->icon}}" style="font-size: 25px"></i></span> {{$item->name}}</div> 
                            <div class="bar_group__bar thick elastic"></div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <figure class="single-image text-right wow fadeInRight">
                    <img src="{{$skillSetting->image}}" alt="">
                </figure>
            </div>
        </div>
    </div>
</section>