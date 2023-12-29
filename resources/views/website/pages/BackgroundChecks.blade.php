@extends('website.pages.main-layout')
@section('content')
<main>
    <h2 class="aios-starter-theme-hide-title">Main Content</h2>
    <div id="inner-page-banner" class="inner-page-banner banner-concierge">
      <div class="textwidget custom-html-widget">
        <a aria-label="ip-banner-link">
          <img src="{{asset('assets/images/inner3.webp')}}" width="100%" height="342" alt="" />
          <div class="inner-banner-check">
            BACKGROUND CHECKS
            <b class="innerhead-checks-b1">SERVICE </b>
          </div>
          <div class="tel-banner">
            <h4>Call 0161-327-4287 </h4>
          </div>
        </a>
      </div>
    </div>
    <div id="inner-page-wrapper" class="inner-page-concierge">
      <div
        id="inner-page-breadcrumbs"
        class="notranslate inner-page-breadcrumbs breadcrumbs-concierge"
      >
        <div class="container"></div>
      </div>
      <div id="content-full">
        <article id="content" class="hfeed">
          <div
            id="post-4752"
            class="post-4752 page type-page status-publish hentry"
          >
            <div class="entry entry-content">
              <div id="new-development" class="new-development">
                <div class="new-development-wrap">
                  <div class="new-development-top">
                    <div class="container">
                      <div
                        class="row new-development-row"
                        data-aios-staggered-parent="true"
                        data-aios-animation-offset="0.1"
                        data-aios-animation-reset="false"
                      >
                        <div
                          class="col-md-6 remove-margin-right"
                          data-aios-staggered-child="true"
                          data-aios-animation="slideInLeft"
                          data-aios-animation-delay="0s"
                        >
                          <div class="new-development-section">
                            <h1
                              class="new-development-title2 entry-title site-section-title2"
                            >
                              <span>
                                Just Who Are <b class="check_b"> They?</b>
                                <i class="title-line"></i>
                              </span>
                            </h1>
                            <div class="new-development-content">
                              <p>
                                It is an unavoidable truth: on first meeting
                                an individual, you have no source of
                                information about them other than what they
                                choose to tell you. How many times have you
                                used social media or a dating site and not
                                put your real name? It’s true it happens.
                                <br />
                                Knowing who you’re talking to, or dealing
                                with is a must if you want to progress the
                                relationship or friendship, yet so many of
                                us fail and fall for charm, the smile and
                                worse the lies! <br />
                                From new romance, HR requirements, new
                                tenants and private employment, our deep
                                Background checks will help put your mind at
                                ease.
                              </p>
                            </div>
                          </div>
                            <div style="margin-top:20px;">
                                <a href="{{route('contact.us')}}" class="dark-text site-button">Contact Us</a>
                            </div>
                        </div>
                        <div
                          class="col-md-6"
                          data-aios-staggered-child="true"
                          data-aios-animation="slideInRight"
                          data-aios-animation-delay="0s"
                          style="padding: 0"
                        >
                          <div
                            class="new-development-links-section check_truth_bg"
                          >
                            <div class="new-development-links-title">
                              TRUTH OR <b>LIES</b
                              ><i class="title-line2"></i>
                            </div>
                            <ul class="new-development-links-list">
                              <li>
                                IS JOHN, JOHN?
                                <!--<a href="#" data-link-target="new-development-about-us" data-link-offset="100">About Us</a>-->
                              </li>
                              <li>
                                IS LOUISE REALLY HER NAME?
                                <!--<a href="#" data-link-target="new-development-services" data-link-offset="100">Services</a>-->
                              </li>
                              <li>
                                IS THIS NANNY AS GOOD HAS SHE SAY’S?
                                <!--<a href="#" data-link-target="new-development-experience" data-link-offset="100">Our Strategy</a>-->
                              </li>
                              <li>
                                ARE THEY THE RIGHT PEOPLE TO RENT TO?
                                <!--<a href="#" data-link-target="new-development-testimonials" data-link-offset="100">Testimonials</a>-->
                              </li>
                              <li>
                                IS THEIR DATING PROFILE REALLY THEM?
                                <!--<a href="#" data-link-target="new-development-listings" data-link-offset="100">New Development Listings</a>-->
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div
                        class="new-development-about-section"
                        id="new-development-about-us"
                        data-aios-staggered-parent="true"
                        data-aios-animation-offset="0.1"
                        data-aios-animation-reset="false"
                      >
                        <div class="row new-development-row">
                          <div
                            class="col-md-6"
                            data-aios-staggered-child="true"
                            data-aios-animation="slideInLeft"
                            data-aios-animation-delay="0s"
                          >
                            <div class="new-development-about-text">
                              <div
                                class="new-development-about-title new-development-section-title-bg "
                              >
                                                                 <h1 class="strategy_title entry-title site-section-title">
                              <span>
                             The <b> Importance</b>
                                <i class="title-line1"></i>
                              </span>
                            </h1>
                              </div>
                              <div class="new-development-about-content">
                                <p>
                                  A new partner, potential tenants, company
                                  employees, those looking at someone to
                                  carry out sensitive and discreet work. NHS
                                  roles, children’s services and caring for
                                  the elderly. Company take-overs, Due
                                  diligence for financial decisions, knowing
                                  a person is key, but really knowing about
                                  them is more. Our detailed background
                                  checks provide you with all the important
                                  information you need to take an informed
                                  decision.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div
                            class="col-md-6"
                            data-aios-staggered-child="true"
                            data-aios-animation="slideInUp"
                            data-aios-animation-delay="0s"
                          >
                            <div class="new-development-about-photo">
                              <img
                                src="{{asset('assets/images/check_importance.webp')}}"
                                alt="About Development Photo"
                                class="new-development-about-photo"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="new-development-bottom">
                    <div class="container">
                      <div
                        class="new-development-services-section"
                        id="new-development-services"
                        data-aios-staggered-parent="true"
                        data-aios-animation-offset="0.1"
                        data-aios-animation-reset="false"
                      >
                        <div
                          class="new-development-services-title new-development-section-title-bg "
                          data-aios-staggered-child="true"
                          data-aios-animation="slideInUp"
                          data-aios-animation-delay="0s"
                        >
                  <h1 class="service_title entry-title site-section-title">
                              <span>
                              <b>WHO WE CONFIRM</b>
                                <i class="title-line3"></i>
                              </span>
                            </h1>
                        </div>
                        <img
                          src="{{asset('assets/images/background checks.webp')}}"
                          alt="Services Development Photo"
                          class="new-development-services-photo service_img"
                          data-aios-staggered-child="true"
                          data-aios-animation="slideInUp"
                          data-aios-animation-delay="0s"
                        />
                        <div class="row">
                          <div
                            class="col-md-4 col-sm-6 col-12 mx-auto"
                            data-aios-staggered-child="true"
                            data-aios-animation="slideInLeft"
                            data-aios-animation-delay="0.2s"
                          >
                            <ul class="new-development-services-list">
                              <li><span> New Partner</span></li>
                              <li><span>New Friends</span></li>
                              <li><span> New Tenants</span></li>
                              <li><span> Tradesmen</span></li>
                              <li><span> Property Due Diligence</span></li>
                              <li><span> Asset Specialist</span></li>
                              <li><span> NHS International Staff</span></li>
                              <li><span> Local Authority Request</span></li>
                            </ul>
                          </div>
                          <div
                            class="col-md-4 col-sm-6 col-12 mx-auto"
                            data-aios-staggered-child="true"
                            data-aios-animation="slideInLeft"
                            data-aios-animation-delay="0.4s"
                          >
                            <ul class="new-development-services-list">
                              <li><span> Private Nanny</span></li>
                              <li><span> Private Chef</span></li>
                              <li><span>Private House Staff</span></li>
                              <li><span> Private Security</span></li>
                              <li><span> Private Care staff</span></li>
                              <li><span> Private Crew</span></li>
                            </ul>
                          </div>
                          <div class="hidden-lg hidden-md clearfix"></div>
                          <div
                            class="col-md-4 col-sm-6 col-12 mx-auto"
                            data-aios-staggered-child="true"
                            data-aios-animation="slideInRight"
                            data-aios-animation-delay="0.6s"
                          >
                            <ul class="new-development-services-list">
                              <li><span> New employee</span></li>
                              <li><span>Executive Level Checks</span></li>
                              <li><span> New Business Acquaintance </span>
                              </li>
                              <li><span>Company Backgrounds </span></li>
                              <li><span> International Due Diligence</span>
                              </li>
                              <li><span> High Net Worth Claims</span></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="container">
                      <div
                        class="new-development-experience-section"
                        id="new-development-experience"
                        data-aios-staggered-parent="true"
                        data-aios-animation-offset="0.1"
                        data-aios-animation-reset="false"
                      >
                        <div class="new-development-experience-content">
                          <div class="row">
                            <div
                              class="col-md-6"
                              data-aios-staggered-child="true"
                              data-aios-animation="slideInLeft"
                              data-aios-animation-delay="0s"
                            >
                              <div class="new-development-experience-text">
                            <h1 class="evidence_title entry-title site-section-title">
                              <span>
                               THE
                                <b>    Checks</b>
                                <i class="title-line"></i>
                              </span>
                            </h1>

                                <p>
                                  In some instances, an employer for
                                  instance, will only require a basic
                                  background check, which may include a
                                  Criminal record check. For others It could
                                  be you need a more in-depth background
                                  check due to the situation or possible
                                  opportunity you are presenting. We can
                                  delve into a person’s background and
                                  credit history as far back has 
                                    required. We can visit past employers, or
                                  landlords. Speak to other family members
                                  and friends, really get a feel for the
                                  person, who they really are, not what they
                                  just put on an application form or dating
                                  site. If they are hiding something, we
                                  will uncover it. <br />
                                  All our findings will be compiled into a
                                  resourceful report to help you make a
                                  decision of importance.
                                </p>
                              </div>
                            </div>
                            <div
                              class="col-md-6"
                              data-aios-staggered-child="true"
                              data-aios-animation="slideInUp"
                              data-aios-animation-delay="0s"
                            >
                              <div
                                class="new-development-experience-photo1"
                              >
                                <img
                                  src="{{asset('assets/images/check_checks.webp')}}"
                                  alt="Experience Development Photo"
                                  class="new-development-experince-photo"
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="new-development-past-experience-section"
                        data-aios-staggered-parent="true"
                        data-aios-animation-offset="0.1"
                        data-aios-animation-reset="false"
                      >
                        <div
                          class="new-development-past-experience-content"
                        >
                          <div class="row">
                            <div
                              class="col-md-6"
                              data-aios-staggered-child="true"
                              data-aios-animation="slideInUp"
                              data-aios-animation-delay="0s"
                            >
                              <div
                                class="new-development-past-experience-photo"
                              >
                                <img
                                  src="{{asset('assets/images/check_overview.webp')}}"
                                  alt="Past Experience Development Photo"
                                  class="new-development-past-experience-photo"
                                  style="height: 345px"
                                />
                              </div>
                            </div>
                            <div
                              class="col-md-6"
                              data-aios-staggered-child="true"
                              data-aios-animation="slideInRight"
                              data-aios-animation-delay="0s"
                            >
                              <div
                                class="new-development-past-experience-text"
                              >
                                <div
                                  class="new-development-past-experience-title new-development-section-title"
                                >
                                  OVERVIEW <i class="title-line"></i>
                                </div>

                                <ul>
                                  <li>
                                    <strong class="overview_symbol">➢</strong>
                                    <span>Full In-Depth Checks</span>
                                  </li>
                                  <li>
                                   <strong class="overview_symbol">➢</strong>
                                    <span> Criminal Record Checks </span>
                                  </li>
                                  <li>
                                     <strong class="overview_symbol">➢</strong>
                                    <span> International Backgrounds </span>
                                  </li>
                                  <li>
                                   <strong class="overview_symbol">➢</strong>
                                    <span> Company Due-Diligence </span>
                                  </li>
                                  <li>
                                  <strong class="overview_symbol">➢</strong>
                                    <span
                                      >Face to Face Confirmation Checks
                                    </span>
                                  </li>
                                  <li>
                                   <strong class="overview_symbol">➢</strong>
                                    <span> Full UK Coverage</span>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="comments-template"></div>
          </div>
        </article>
        <!-- end #content -->
      </div>
      <!-- end of #inner-page-wrapper .inner -->
    </div>
    <!-- end of #inner-page-wrapper -->
  </main>
@endsection