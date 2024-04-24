@php

    $generlaSetting = \App\Models\GeneralSetting::first();
    $footerInfo = \App\Models\FooterInfo::first();
    $footerSocial = \App\Models\FooterSocialLink::all();
    $footerUseful = \App\Models\FooterUsefulLinks::all();
    $footerContact = \App\Models\FooterContactInfo::first();
    $footerHelp = \App\Models\FooterHelpLink::all();

@endphp

<!-- Footer-Area-Start -->
<footer class="footer-area">
    <div class="container">
        <div class="row footer-widgets">
            <div class="col-md-12 col-lg-3 widget">
                <div class="text-box">
                    <figure class="footer-logo">
                        <img src="{{ asset($generlaSetting->footer_logo) }}" alt="">
                    </figure>
                    <p>{{ $footerInfo->info }}</p>
                    <ul class="d-flex flex-wrap">

                        @foreach ($footerSocial as $social)
                            <li><a href="{{ $social->url }}"><i class="{{ $social->icon }}"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 offset-lg-1 widget">
                <h3 class="widget-title">Linkek</h3>
                <ul class="nav-menu">
                    @foreach ($footerUseful as $useful)
                        <li><a href="{{ $useful->url }}">{{ $useful->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Kapcsolat</h3>
                <ul>
                    <li>{{ $footerContact->address }}</li>
                    <li><a href="callto:{{ $footerContact->phone }}">{{ $footerContact->phone }}</a></li>
                    <li><a href="mailto:{{ $footerContact->email }}">{{ $footerContact->email }}</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Segítség</h3>
                <ul class="nav-menu">
                    @foreach ($footerHelp as $help)
                        <li><a href="{{ $help->url }}">{{ $help->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>{{ $footerInfo->copy_right }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer-Area-End -->
