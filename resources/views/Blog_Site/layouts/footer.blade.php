<footer>
    <!-- Footer Start-->
    <div class="footer-main">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row  justify-content-between">
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                @if ($logo!=null)
                                <a href="index.html"><img src="{{asset($logo->name)}}" alt=""></a>
                                @else
                                <div class="section-tittle section-tittle5 mb-50">
                                    <div class="front-text">
                                        <h4>Afro-European Engineers</h4>
                                    </div>
                                </div>
                                @endif
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Follow us</h4>
                                </div>
                                <div class="footer-social d-flex justify-content-center">
                                    @if ($accounts!=null)
                                    <a href="{{$accounts->twitter}}"><i class="fab fa-twitter"></i></a>
                                    <a href="{{$accounts->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{$accounts->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="{{$accounts->youtube}}"><i class="fab fa-youtube"></i></a>
                                    <a href="{{$accounts->instagram}}"><i class="fab fa-instagram"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                       @if ($location_info!=null)
                       <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Location and Contact</h4>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon">
                                    <i class="fas fa-map-marker"></i>
                                </span>
                                <div class="media-body">
                                    <p>{{$location_info->location_info}}</p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon">
                                    <i class="fas fa-phone"></i>
                                </span>
                                <div class="media-body">
                                    <p>{{$location_info->telephone_numbers}}</p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon">
                                    <i class="fas fa-paper-plane"></i>
                                </span>
                                <div class="media-body">
                                    <p>{{$location_info->po_box_info}}</p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon">
                                    <i class="fa fa-fax"></i>
                                </span>
                                <div class="media-body">
                                    <p>{{$location_info->fax_info}}</p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <div class="media-body">
                                    <p>{{$location_info->email}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="single-footer-caption mb-50">
                            <!-- Form -->
                            <div class="footer-tittle">
                                <h4>Find us on the map</h4>
                            </div>
                            {!!"$location_info->google_map_link"!!}
                        </div>
                    </div>
                       @endif
                    </div>
                    <!-- Copy-Right -->
                    <div class="row align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right d-flex justify-content-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
&copy;<script>document.write(new Date().getFullYear());</script> Afro-European Engineers. All rights reserved | Template by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Footer End-->
</footer>
