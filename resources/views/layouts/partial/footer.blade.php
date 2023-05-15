<!-- Footer Start Here -->
<footer>
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="widget" style="font-weight: 500;">
                        <h2 class="widget-title">{{ __('footer.about-h2') }}</span></h2>
                        <ul>
                            <li>
                                <p class="text-justify">
                                    {{ __('footer.about-p') }}
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="widget" style="font-weight: 500;">
                        <h2 class="widget-title text-center">{{ __('footer.links-h2') }}</span></h2>
                        <ul class="col-lg-6 col-md-6 col-sm-6">
                            <li class="text-center"><img src="{{asset('public/assets/images/footer/mpfd.jpg')}}" alt=""><a href="https://www.mpforest.gov.in/" target="_blank"><p>{{ __('footer.mpfd') }}</p></a></li>
                            <li class="text-center"><img src="{{asset('public/assets/images/footer/mptfs.png')}}" alt=""><a href="http://www.mptigerfoundation.org/" target="_blank"><p>{{ __('footer.mptfs') }}</p></a></li>
                        </ul>
                        <ul class="col-lg-6 col-md-6 col-sm-6">
                            <li class="text-center"><img src="{{asset('public/assets/images/footer/ntca.jpg')}}" alt=""><a href="https://projecttiger.nic.in/" target="_blank"><p>{{ __('footer.ntca') }}</p></a></li>
                            <li class="text-center"><img src="{{asset('public/assets/images/footer/cza.jpg')}}" alt=""><a href="http://cza.nic.in/" target="_blank"><p>{{ __('footer.cza') }}</p></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="widget text-center" style="font-weight: 500;">
                        <h2 class="widget-title">{{ __('footer.contact-h2') }}</span></h2>
                        <ul>
                            <li><p>{{ __('footer.contact-li1') }}</p></li>
                            <li><p>{{ __('footer.contact-li2') }}</p></li>
                            <li><p>{{ __('footer.contact-li3') }} <br> {{ __('footer.contact-li3-br') }}</p></li>
                            <li><p>{{ __('footer.contact-li4') }} <br> {{ __('footer.contact-li4-br') }}</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="widget">
                        <div class="copyright cpy">
                            <p style="margin-bottom: 5px;">
                                <a href="{{url('/')}}" target="_blank">{{ __('footer.mmsj-title') }}</a><br>
                                <span><a href="https://blueoceantech.in/" target="_blank">{{ __('footer.bot-title') }}</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center" style="font-weight:500;font-size:14px;font-weight:600;color:#1b3a1f;letter-spacing:0.8px;margin-bottom:10px;">
                        <i class="fa fa-bar-chart" style="margin-right: 5px;"></i>
                        {{ trans('Total Number of Visitors : ') }}
        
                        {{ $trackers->sum('hits') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End Here -->
