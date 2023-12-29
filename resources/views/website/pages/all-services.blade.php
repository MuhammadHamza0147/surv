@extends('website.pages.main-layout')
@section('head')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
@endsection
@section('content')
<main>
    <h2 class="aios-starter-theme-hide-title">Main Content</h2>
    <div id="inner-page-banner" class="inner-page-banner banner-local-exposure">
        <div class="textwidget custom-html-widget">
            <a aria-label="ip-banner-link">
                <img src="{{asset('assets/images/inner4.webp')}}" alt="" width="100%" height="342" />
                <div class="inner-banner-head">ALL SERVICES</div>
                <div class="tel-banner">
                    <h4>Call 0161-327-4287 </h4>
                </div>
            </a>
        </div>
    </div>
    <div id="inner-page-wrapper" class="inner-page-local-exposure">
        <div id="inner-page-breadcrumbs" class="notranslate inner-page-breadcrumbs breadcrumbs-local-exposure">
            <div class="container"></div>
        </div>
        <div class="container">
            <div id="content-full">
                <section id="hp-concierge" class="hp-concierge-v21 visible" data-aios-staggered-parent="true"
                    data-aios-animation-offset="0.1" data-aios-animation-reset="false" data-aios-reveal-mobile="false">
                    <div class="textwidget custom-html-widget">
                        <div class="welcome-v2-wrap" style="margin-top: 20px">
                            <div class="welcome-v2-title" data-aios-staggered-child="true"
                                data-aios-animation="fadeInUp" data-aios-animation-delay="0">
                                <!-- <div class="welcome-section-number site-section-number">02</div> -->
                                <h2 class="welcome-title site-section-title">
                                    <span>
                                        All Services
                                        <b style="visibility: hidden">UK</b>
                                        <i class="title-line extend-right"></i>
                                    </span>
                                </h2>

                                <div class="oppenheim-group-content aos-init aos-animate" data-aos-once="true"
                                    data-aos="fade-up">
                                    <div class="containers">
                                        <p style="font-size: 21px">
                                            At Surveillance UK we offer a wide range of
                                            surveillance and Private Investigation services, both
                                            to UK & International clients. Although our services
                                            are available to all our clients, we have categorised
                                            them into their most popular requested areas
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- 1 row -->
                            <div class="welcome-v2-row">
                                <div class="welcome-v2-img">
                                    <img class="lazyload" data-aos-once="true" data-aos="fade-right"
                                        src="{{asset('assets/images/Other-allServices.webp')}}" alt="Jason Oppenheim"
                                        width="703" height="982" />
                                </div>
                                <div class="welcome-v2-text" data-aios-staggered-child="true"
                                    data-aios-animation="fadeIn" data-aios-animation-delay="0.25s">
                                    <div class="welcome-v2-text-inner welcome-v2-text-inner1" style="max-width: 750px">
                                        <p class="main_all_head" data-aos-once="true" data-aos="fade-left">
                                            Private Client Investigations include
                                        </p>
                                        <ul class="main_ul" data-aos-once="true" data-aos="fade-left"
                                            data-aos-delay="400">
                                            <li>Catching a cheating partner</li>
                                            <li>GPS Tracking Vehicle and Personal</li>
                                            <li>Background Check Search</li>
                                            <li>Missing Person</li>
                                            <li>Data Recovery</li>
                                            <li>Bug sweeping of residence</li>
                                            <li>CCTV / Surveillance Installation</li>
                                            <li>Adoption cases</li>
                                            <li>Arranged Marriages</li>
                                            <li>Dating Site Scams</li>
                                            <li>Pre-Marital Investigations</li>
                                            <li>Proof Of Cohabiting</li>
                                            <li>Divorce Investigations</li>
                                            <li>Online Dating Checks</li>
                                            <li>Fraud Investigations</li>
                                            <li>Tracing Services</li>
                                        </ul>
                                        <div style="margin-top: 20px">
                                            <a href="{{route('contact.us')}}" class="welcome-read-more site-button "
                                                target="_blank" data-aios-staggered-child="true"
                                                data-aios-animation="fadeIn" data-aios-animation-delay="0.75s"
                                                rel="noopener">Contact Us</a>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- 2 row -->

                            <div class="welcome-v2-row" style="margin-top: 120px; flex-direction: row-reverse">
                                <div class="welcome-v2-img" data-aios-staggered-child="true"
                                    data-aios-animation="fadeIn" data-aios-animation-delay="0.25s">
                                    <img class="lazyload" data-aos-once="true" data-aos="fade-left"
                                        src="{{asset('assets/images/Corporate-allServices.webp')}}"
                                        alt="Jason Oppenheim" width="703" height="982" />
                                </div>
                                <div class="welcome-v2-text" data-aios-staggered-child="true"
                                    data-aios-animation="fadeIn" data-aios-animation-delay="0.25s">
                                    <div class="welcome-v2-text-inner welcome-v2-text-inner1" style="max-width: 750px">
                                        <p class="main_all_head" data-aos-once="true" data-aos="fade-right">
                                            Business & Corporate Investigations
                                        </p>

                                        <ul class="main_ul" data-aos-once="true" data-aos="fade-right"
                                            data-aos-delay="400">
                                            <li>Employee Theft</li>
                                            <li>False work injury claims</li>
                                            <li>Employee Background Checks</li>
                                            <li>Security consultancy</li>
                                            <li>Data recovery</li>
                                            <li>Bug sweeping</li>
                                            <li>Security Installations</li>
                                            <li>Employee sick leave</li>
                                            <li>Fire Risk Assessments</li>
                                            <li>GPS Tracking asset and vehicle</li>
                                            <li>Loss Time Investigations</li>
                                            <li>Brand Protection</li>
                                            <li>Trade & Supplier Checks</li>
                                            <li>International Risk Management & DD</li>
                                            <li>Investment Due Diligence</li>
                                        </ul>

                                        <div style="margin-top: 20px">
                                            <a href="{{route('contact.us')}}" class="welcome-read-more site-button "
                                                target="_blank" data-aios-staggered-child="true"
                                                data-aios-animation="fadeIn" data-aios-animation-delay="0.75s"
                                                rel="noopener">Contact Us</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 3 row -->

                            <div class="welcome-v2-row" style="margin-top: 120px">
                                <div class="welcome-v2-img" data-aios-staggered-child="true"
                                    data-aios-animation="fadeIn" data-aios-animation-delay="0.25s">
                                    <img class="lazyload" data-aos-once="true" data-aos="fade-right"
                                        src="{{asset('assets/images/Legal-allServices.webp')}}" alt="Jason Oppenheim"
                                        width="703" height="982" />
                                </div>
                                <div class="welcome-v2-text" data-aios-staggered-child="true"
                                    data-aios-animation="fadeIn" data-aios-animation-delay="0.25s">
                                    <div class="welcome-v2-text-inner welcome-v2-text-inner1" style="max-width: 750px">
                                        <p class="main_all_head" data-aos-once="true" data-aos="fade-left">
                                            Legal & Solicitors
                                        </p>

                                        <ul class="main_ul" data-aos-once="true" data-aos="fade-left"
                                            data-aos-delay="400">
                                            <li>Process Service</li>
                                            <li>Client litigation services</li>
                                            <li>Pre-Divorce asset tracing</li>
                                            <li>Tracing Services</li>
                                            <li>Insurance Investigations</li>
                                            <li>Locus Reports</li>
                                            <li>+ All Listed services</li>
                                        </ul>

                                        <div style="margin-top: 20px">
                                            <a href="{{route('contact.us')}}" class="welcome-read-more site-button "
                                                target="_blank" data-aios-staggered-child="true"
                                                data-aios-animation="fadeIn" data-aios-animation-delay="0.75s"
                                                rel="noopener">Contact Us</a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 4 row -->

                            <div class="welcome-v2-row" style="margin-top: 120px; flex-direction: row-reverse">
                                <div class="welcome-v2-img" data-aios-staggered-child="true"
                                    data-aios-animation="fadeIn" data-aios-animation-delay="0.25s">
                                    <img class="lazyload" data-aos-once="true" data-aos="fade-left"
                                        src="{{asset('assets/images/Landlord-allServices.webp')}}" alt="Jason Oppenheim"
                                        width="703" height="982" />
                                </div>
                                <div class="welcome-v2-text" data-aios-staggered-child="true"
                                    data-aios-animation="fadeIn" data-aios-animation-delay="0.25s">
                                    <div class="welcome-v2-text-inner welcome-v2-text-inner1" style="max-width: 750px">
                                        <p class="main_all_head" data-aos-once="true" data-aos="fade-right">
                                            Landlord & Investors
                                        </p>

                                        <ul class="main_ul" data-aos-once="true" data-aos="fade-right"
                                            data-aos-delay="400">
                                            <li>Sub-letting Investigations</li>
                                            <li>Tenant checks</li>
                                            <li>Property Sourcer background checks</li>
                                            <li>Neighbour complaints</li>
                                            <li>End of Tenancy document personal service</li>
                                            <li>Locate Missing Tenant</li>
                                            <li>Investment Due Diligence</li>
                                        </ul>

                                        <div style="margin-top: 20px">
                                            <a href="{{route('contact.us')}}" class="welcome-read-more site-button "
                                                target="_blank" data-aios-staggered-child="true"
                                                data-aios-animation="fadeIn" data-aios-animation-delay="0.75s"
                                                rel="noopener">Contact Us</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 5 row -->
                            <div class="welcome-v2-row" style="margin-top: 120px">
                                <div class="welcome-v2-img" data-aios-staggered-child="true"
                                    data-aios-animation="fadeIn" data-aios-animation-delay="0.25s">
                                    <img class="lazyload" data-aos-once="true" data-aos="fade-right"
                                        src="{{asset('assets/images/Client-allServices.webp')}}" alt="Jason Oppenheim"
                                        width="703" height="982" />
                                </div>
                                <div class="welcome-v2-text" data-aios-staggered-child="true"
                                    data-aios-animation="fadeIn" data-aios-animation-delay="0.25s">
                                    <div class="welcome-v2-text-inner welcome-v2-text-inner1" style="max-width: 750px">
                                        <p class="main_all_head" data-aos-once="true" data-aos="fade-left">
                                            Other Services
                                        </p>

                                        <ul class="main_ul" data-aos-once="true" data-aos="fade-left"
                                            data-aos-delay="400">
                                            <li>Close Protection Services (Adults & Minors)</li>
                                            <li>Residential Security</li>
                                            <li>Property Security & Monitoring</li>
                                            <li>Asset Protection</li>
                                            <li>Goods in Transit Security</li>
                                        </ul>

                                        <div style="margin-top: 20px">
                                            <a href="{{route('contact.us')}}" class="welcome-read-more site-button "
                                                target="_blank" data-aios-staggered-child="true"
                                                data-aios-animation="fadeIn" data-aios-animation-delay="0.75s"
                                                rel="noopener">Contact Us</a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 6 row -->

                            <div class="welcome-v2-row" style="margin-top: 120px; flex-direction: row-reverse">
                                <div class="welcome-v2-img" data-aios-staggered-child="true"
                                    data-aios-animation="fadeIn" data-aios-animation-delay="0.25s">
                                    <img class="lazyload" data-aos-once="true" data-aos="fade-left"
                                        src="{{asset('assets/images/Bespoke-allServices.webp')}}" alt="Jason Oppenheim"
                                        width="703" height="982" />
                                </div>
                                <div class="welcome-v2-text" data-aios-staggered-child="true"
                                    data-aios-animation="fadeIn" data-aios-animation-delay="0.25s">
                                    <div class="welcome-v2-text-inner welcome-v2-text-inner1" style="max-width: 750px">
                                        <p class="main_all_head" data-aos-once="true" data-aos="fade-right">
                                            Bespoke
                                        </p>

                                        <ul class="main_ul" data-aos-once="true" data-aos="fade-right"
                                            data-aos-delay="400">
                                            <li>GPS Tracking, Listening & Covert Cameras</li>
                                            <li>Made & Designed to order</li>
                                        </ul>

                                        <div style="margin-top: 20px">
                                            <a href="{{route('contact.us')}}" class="welcome-read-more site-button "
                                                target="_blank" data-aios-staggered-child="true"
                                                data-aios-animation="fadeIn" data-aios-animation-delay="0.75s"
                                                rel="noopener">Contact Us</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 7 row -->
                            <div class="welcome-v2-row" style="margin-top: 120px; margin-bottom: 120px">
                                <div class="welcome-v2-img">
                                    <img class="lazyload" data-aos-once="true" data-aos="fade-right"
                                        src="{{asset('assets/images/Councils-allServices.webp')}}" alt="Jason Oppenheim"
                                        width="703" height="982" />
                                </div>
                                <div class="welcome-v2-text">
                                    <div class="welcome-v2-text-inner welcome-v2-text-inner1" style="max-width: 750px">
                                        <p class="main_all_head" data-aos-once="true" data-aos="fade-left">
                                            Council & Civil Services Departments
                                        </p>

                                        <ul class="main_ul" data-aos-once="true" data-aos="fade-left"
                                            data-aos-delay="400">
                                            <li>Please contact us direct</li>
                                        </ul>

                                        <div style="margin-top: 20px">
                                            <a href="{{route('contact.us')}}" class="welcome-read-more site-button "
                                                target="_blank" data-aios-staggered-child="true"
                                                data-aios-animation="fadeIn" data-aios-animation-delay="0.75s"
                                                rel="noopener">Contact Us</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 hide">
                                <a href="#" class="meet-the-team-cta">Meet The Team</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- end #content-full -->

            <div class="clearfix"></div>
        </div>
        <!-- end of #inner-page-wrapper .inner -->
    </div>
    <!-- end of #inner-page-wrapper -->
</main>
@endsection
@section('script')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection