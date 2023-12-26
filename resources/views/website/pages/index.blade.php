@extends('website.pages.main-layout')
@section('content')
    <main>
      <h2 class="aios-starter-theme-hide-title">Main Content</h2>

      <section id="hp-slideshow" class="hp-slideshow">
        <h2 class="hidden">HP Slideshow</h2>

        <div class="slideshow-wrap">
          <div class="slideshow-slider">
            <video loop id="myVideo1" style="width: 100%" autoplay muted>
              <source src="{{asset('assets/video/video.mp4')}}" type="video/mp4" />
              Your browser does not support HTML5 video.
            </video>
            <input type="hidden" placeholder="Enter here" class="form-control my-2 textarea" id="mybox"
              value="Surveillance UK" />
          </div>
          <div class="slideshow-contact">
            <div>
              <div class="textwidget custom-html-widget">
                <a href="#" style="color: white; font-size: 60px; font-weight: 600">
                  <img src="{{asset('assets/images/center-logo.png')}}" alt="The Oppenheim Group Real Estate - Logo"
                    class="slideshow-contact-logo skip-lazyload" />
                </a>

                <div class="slideshow-contat-btn-row">
                  <a href="#" target="_blank" class="slideshow-learn-more site-button" rel="noopener">MANCHESTER</a>
                  <a href="#" target="_blank" class="slideshow-learn-more site-button" rel="noopener">LONDON</a>
                  <a href="#" target="_blank" class="slideshow-learn-more site-button" rel="noopener">EUROPE</a>
                  <a href="#" target="_blank" class="slideshow-learn-more site-button" rel="noopener">GLOBAL</a>
                </div>
              </div>
            </div>
          </div>
          <div class="slideshow-slider-arrow">
            <span><img src="{{asset('assets/images/slideshow-arrow-a.webp')}}" alt="Slideshow Arrow" /></span>
          </div>
        </div>
      </section>

      <div class="floating-bg-a">
        <!-- PS. Don't delete this tag! -->
      </div>

      <div class="hp-ajax-based">
        <!-- PS. Don't delete this tag! -->
      </div>

      <section id="hp-fl" class="hp-fl">
        <h2 class="hidden">Featured Listings</h2>

        <div class="fl-wrap" data-background-attachment-fixed-rollback="">
          <div class="fl-container site-container clearfix">
            <div class="textwidget custom-html-widget">
              <div class="fl-left">
                <div class="fl-section-number site-section-number">01</div>
                <div class="fl-title site-section-title notranslate">
                  <span>Featured <b>Services</b><i class="title-line extend-left">
                      <!-- PS. Don't Delete This Tag --></i></span>
                </div>
                <div class="fl-view-all-properties-wrapper">
                  <a href="{{route('services.all')}}"
                    class="fl-view-all-properties site-button dark-text hidden-xs hidden-sm">View All Our Services +</a>
                </div>
              </div>
              <div class="notranslate">
                <div class="fl-list clearfix">
                  <div class="fl-list-row fl-row-a">
                    <div class="fl-list-col w-mb">
                      <a href="{{route('surveillance.services')}}" class="fl-item">
                        <canvas width="379" height="305" style="
                              background-image: url({{asset('assets/images/COVERTSURVEILLANCE.webp')}});
                            " class="custom-img fl-img"></canvas>
                        <div class="fl-info">
                          <span class="fl-price">Covert Surveillance</span>
                        </div>
                        <div class="fl-hover visible-c-b">
                          <canvas width="550" height="441" style="
                                background-image: url({{asset('assets/images/COVERTSURVEILLANCE.webp')}});
                              " class="custom-img fl-img"></canvas>
                          <div class="fl-info">
                            <span class="fl-address">
                              Covert Surveillance
                            </span>
                            <span class="fl-view-details site-button no-line">View Details +</span>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="fl-list-col w-mb w-ml">
                      <a href="{{route('cheating.partner')}}" class="fl-item">
                        <canvas width="379" height="305" style="
                              background-image: url({{asset('assets/images/CheatingPartner.webp')}});
                            " class="custom-img fl-img"></canvas>
                        <div class="fl-info">
                          <span class="fl-price">Catch A Cheating Partner</span>
                        </div>
                        <div class="fl-hover size-lg visible-r-b">
                          <canvas width="550" height="441" style="
                                background-image: url({{asset('assets/images/CheatingPartner.webp')}});
                              " class="custom-img fl-img"></canvas>
                          <div class="fl-info">
                            <span class="fl-address"> Catch A Cheating Partner</span>
                            <span class="fl-view-details site-button no-line">View Details +</span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="fl-list-row fl-row-b">
                    <div class="fl-list-col w-mb">
                      <a href="{{route('background.checks')}}" class="fl-item">
                        <canvas width="379" height="305" style="
                              background-image: url({{asset('assets/images/backgroundchecks.webp')}});
                              background-size: 440px 230px;
                            " class="custom-img fl-img"></canvas>
                        <div class="fl-info">
                          <span class="fl-price" style="color:black;">Background Checks</span>
                        </div>
                        <div class="fl-hover visible-l-b">
                          <canvas width="550" height="441" style="
                                background-image: url({{asset('assets/images/backgroundchecks.webp')}});
                                background-size: 388px 198px;
                              " class="custom-img fl-img"></canvas>
                          <div class="fl-info">
                            <span class="fl-address">Background Checks </span>
                            <span class="fl-view-details site-button no-line">View Details +</span>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="fl-list-col w-ml w-mb">
                      <a href="{{route('gps.tracker')}}" class="fl-item">
                        <canvas width="379" height="305" style="
                              background-image: url({{asset('assets/images/GPS-tracking.webp')}});
                            " class="custom-img fl-img"></canvas>
                        <div class="fl-info">
                          <span class="fl-price">GPS Vehicle Tracking</span>
                        </div>
                        <div class="fl-hover visible-c-c">
                          <canvas width="550" height="441" style="
                                background-image: url({{asset('assets/images/GPS-tracking.webp')}});
                              " class="custom-img fl-img"></canvas>
                          <div class="fl-info">
                            <span class="fl-address">
                              GPS Vehicle Tracking</span>
                            <span class="fl-view-details site-button no-line">View Details +</span>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="fl-list-col w-ml w-mb">
                      <a href="{{route('corporate')}}" class="fl-item">
                        <canvas width="379" height="305" style="
                              background-image: url({{asset('assets/images/Coprateservices.webp')}});
                            " class="custom-img fl-img"></canvas>
                        <div class="fl-info">
                          <span class="fl-price"> Business & Corporate Help
                          </span>
                        </div>
                        <div class="fl-hover visible-r-b">
                          <canvas width="550" height="441" style="
                                background-image: url({{asset('assets/images/Coprateservices.webp')}});
                              " class="custom-img fl-img"></canvas>
                          <div class="fl-info">
                            <span class="fl-address"> Business & Corporate Help
                            </span>
                            <span class="fl-view-details site-button no-line">View Details +</span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="fl-list-row fl-row-c">
                    <div class="fl-list-col">
                      <a href="{{route('legal.investigation')}}" class="fl-item">
                        <canvas width="379" height="305" style="
                              background-image: url({{asset('assets/images/Litigationservices.webp')}});
                            " class="custom-img fl-img"></canvas>
                        <div class="fl-info">
                          <span class="fl-price"> Solicitors & Barristers </span>
                        </div>
                        <div class="fl-hover size-md visible-l-b">
                          <canvas width="550" height="441" style="
                                background-image: url({{asset('assets/images/Litigationservices.webp')}});
                              " class="custom-img fl-img"></canvas>
                          <div class="fl-info">
                            <span class="fl-address"> Solicitors & Barristers</span>
                            <span class="fl-view-details site-button no-line">View Details +</span>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="fl-list-col w-ml">
                      <a href="{{route('people.tracing')}}" class="fl-item">
                        <canvas width="379" height="305" style="
                              background-image: url({{asset('assets/images/Missingperson.webp')}});
                            " class="custom-img fl-img"></canvas>
                        <div class="fl-info">
                          <span class="fl-price">People Tracing</span>
                        </div>
                        <div class="fl-hover size-lg visible-c-b">
                          <canvas width="550" height="441" style="
                                background-image: url({{asset('assets/images/Missingperson.webp')}});
                              " class="custom-img fl-img"></canvas>
                          <div class="fl-info">
                            <span class="fl-address">People Tracing</span>
                            <span class="fl-view-details site-button no-line">View Details +</span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="fl-right">
                <a href="{{route('services.all')}}" class="fl-view-all-properties site-button dark-text hidden-md hidden-lg">View
                  All Our Services +</a>
                <div class="fl-cta">
                  <div>
                    <a href="{{route('international.clients')}}" class="fl-cta-link site-button reversed">International
                      Clients</a>
                  </div>
                  <div>
                    <a href="{{route('landloads')}}" class="fl-cta-link site-button reversed">LANDLORDS / INVESTORS</a>
                  </div>
                  <div>
                    <a href="{{route('faqs')}}" class="fl-cta-link site-button reversed"> FAQ’s</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="lead-section" class="lead-text">
        <h1>“We Can Lead To The Truth, We Can’t Make You Believe It”</h1>
      </section>

      <section id="hp-welcome" class="hp-welcome-v2" data-aios-staggered-parent="true" data-aios-animation-offset="0.1"
        data-aios-animation-reset="false">
        <div class="textwidget custom-html-widget">
          <div class="welcome-v2-wrap">
            <div class="welcome-v2-title" data-aios-staggered-child="true" data-aios-animation="fadeInUp"
              data-aios-animation-delay="0">
              <div class="welcome-section-number site-section-number">02</div>
              <h2 class="welcome-title site-section-title">
                <span>
                  Surveillance
                  <b>UK</b>
                  <i class="title-line extend-right"></i>
                </span>
              </h2>
            </div>
            <div class="welcome-v2-row">
              <div class="welcome-v2-img" data-aios-staggered-child="true" data-aios-animation="fadeIn"
                data-aios-animation-delay="0.25s">
                <img class="lazyload" src="{{asset('assets/images/about-v2-photo.webp')}}" alt="Jason Oppenheim" width="703"
                  height="982" />
              </div>
              <div class="welcome-v2-text" data-aios-staggered-child="true" data-aios-animation="fadeIn"
                data-aios-animation-delay="0.25s">
                <div class="welcome-v2-text-inner">
                  <p>
                    They say, “All that we can not see, is not real” We say
                    Prove it!
                  </p>

                  <p>
                    Hi, and thank you for taking a few minutes to visit our
                    site. We appreciate for most there will be an anxious and
                    emotional reason you have. Maybe you think your partner is
                    cheating, be that a cheating wife, cheating husband, or
                    cheating partner, you just have that feeling. Visit our
                    cheating partner page for some tell tale signs. <br />
                    It could be you are a business owner and you feel an
                    employee is claiming for a ‘false injury’ at work, a slip
                    or fall which is stopping them being ‘mobile’ or continue
                    doing their employed role, costing your business thousands
                    in sickness payments or Insurance claims.
                  </p>
                  <p>
                    From cheating partners, fake injury at work claims, legal
                    investigations including pre-divorce investigations and
                    asset tracing, missing person tracing, International
                    investigations, bug sweeping, and fraud. A full range of
                    surveillance, including, static surveillance, rural
                    surveillance, covert surveillance and cyber, Over the
                    years, we have helped many corporate, private and legal
                    clients to obtain the evidence that as given them the
                    ability to make informed decisions, win cases and achieve
                    absolute peace of mind.
                  </p>
                  <a href="{{route('contact.us')}}" class="welcome-read-more site-button " target="_blank"
                    data-aios-staggered-child="true" data-aios-animation="fadeIn" data-aios-animation-delay="0.75s"
                    rel="noopener">Contact Us</a>
                </div>
              </div>
            </div>
            <div class="col-md-12 hide">
              <a href="#" class="meet-the-team-cta">Meet The Team</a>
            </div>
          </div>
        </div>
      </section>

      <section id="hp-concierge" class="hp-concierge-v2" data-aios-staggered-parent="true"
        data-aios-animation-offset="0.1" data-aios-animation-reset="false">
        <h2 class="hidden">Concierge</h2>
        <div class="hp-concierge-wrap">
          <div class="hp-concierge-text" data-aios-staggered-child="true" data-aios-animation="fadeIn"
            data-aios-animation-delay="0s">
            <div class="hp-concierge-text-inner">
              <div class="hp-concierge-section-number site-section-number">
                03
              </div>
              <div class="hp-concierge-title site-section-title">
                <span>
                  Private <b>Investigations</b>
                  <i class="title-line extend-left"></i>
                </span>
              </div>
              <p>
                Our range of surveillance services are complemented by intense
                investigation work, which combines leads to unquestionable
                results, backed by the required evidence. Catching a cheating
                partner, Internal fraud, or theft in the workplace, locating a
                missing person including adoption investigations. From the
                ever increase in cyber-crime, dating site scams, to retrieving
                deleted messages and data. Our Private Investigators come with
                a wealth of tradecraft skills and discretion, which is
                paramount! to get you the answers.
              </p>
              <a href="{{route('contact.us')}}" class="dark-text site-button">Contact Us</a>
            </div>
          </div>
          <div class="hp-concierge-img" data-aios-staggered-child="true" data-aios-animation="fadeInLeft"
            data-aios-animation-delay="0s">
            <div id="twenty20-1" class="twenty20" style="width: 100%">
              <div class="main_box">
                <div class="box1">
                  <img src="{{asset('assets/images/slide1.webp')}}" />
                </div>
                <div class="box2" style="width: 50%">
                  <img src="{{asset('assets/images/slide2.webp')}}" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="sl-mag" class="sl-mag hidden" data-aios-staggered-parent="true" data-aios-animation-offset="0.1"
        data-aios-animation-reset="false">
        <h2 class="hidden">Sunset Living Magazine</h2>
        <div class="sl-mag-wrap">
          <div class="textwidget custom-html-widget">
            <div class="sl-mag-col col-left">
              <div class="sl-mag-txt" data-aios-staggered-child="true" data-aios-animation="fadeInUp"
                data-aios-animation-delay="0s">
                <div class="sl-mag-txt-heading">
                  Read our new
                  <div>"SUNSET LIVING" magazine...</div>
                </div>
                <p>
                  We are excited to share with you The Oppenheim Group's new
                  real estate/lifestyle magazine, “Sunset Living.” Our team
                  has worked diligently in hopes of bringing you an amazing
                  and curated product.
                </p>
                <p>
                  You can find our magazine online, at our open houses, and at
                  brokerage events, as well as in our offices in West
                  Hollywood, Newport Beach, and Cabo San Lucas.
                </p>
                <a href="#" class="site-button dark-text">Read The Magazine +</a>
              </div>
            </div>
            <div class="sl-mag-col col-right">
              <div class="sl-mag-img" data-aios-staggered-child="true" data-aios-animation="fadeInRight"
                data-aios-animation-delay="0s">
                <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                  data-src="https://ogroup.com/wp-content/themes/ogroup.com/images/sunset/sl-content-img2.webp"
                  alt="Sunset Living" class="img-responsive lazyload" />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="hp-new-agents" class="hp-new-agents">
        <div class="new-agents-wrap">
          <div class="textwidget custom-html-widget"></div>
        </div>
      </section>

      <section id="hp-cta" class="hp-cta">
        <h2 class="hidden">Call To Action</h2>

        <div class="cta-wrap">
          <div class="cta-container site-container">
            <div class="textwidget custom-html-widget">
              <div class="cta-list clearfix">
                <div class="cta-col" data-aios-reveal="true" data-aios-animation="slideInLeft"
                  data-aios-animation-delay="0s" data-aios-animation-reset="false" data-aios-animation-offset="0.1">
                  <a href="#" class="cta-item">
                    <img src="{{asset('assets/images/zoom1.webp')}}" alt="Surveillance" class="cta-img lazyload" />
                    <div class="cta-name">Surveillance</div>
                  </a>
                </div>
                <div class="cta-col" data-aios-reveal="true" data-aios-animation="slideInRight"
                  data-aios-animation-delay="0s" data-aios-animation-reset="false" data-aios-animation-offset="0.1">
                  <a href="#" class="cta-item">
                    <img src="{{asset('assets/images/zoom2.webp')}}" alt="Government Depts" class="cta-img lazyload" />
                    <div class="cta-name">Government Depts</div>
                  </a>
                </div>
                <div class="cta-col" data-aios-reveal="true" data-aios-animation="slideInRight"
                  data-aios-animation-delay="0s" data-aios-animation-reset="false" data-aios-animation-offset="0.1">
                  <a href="#" class="cta-item">
                    <img src="{{asset('assets/images/zoom3.webp')}}" alt="International Enquiries" class="cta-img lazyload" />
                    <div class="cta-name">International Enquiries</div>
                  </a>
                </div>

                <div class="cta-col" data-aios-reveal="true" data-aios-animation="slideInRight"
                  data-aios-animation-delay="0s" data-aios-animation-reset="false" data-aios-animation-offset="0.1">
                  <a href="#" class="cta-item">
                    <img src="{{asset('assets/images/zoom4.webp')}}" alt="Legal Depts " class="cta-img lazyload" />
                    <div class="cta-name">Legal Depts</div>
                  </a>
                </div>
                <div class="cta-col" data-aios-reveal="true" data-aios-animation="slideInLeft"
                  data-aios-animation-delay="0s" data-aios-animation-reset="false" data-aios-animation-offset="0.1">
                  <a href="#" class="cta-item">
                    <img src="{{asset('assets/images/zoom5.webp')}}" alt="Insurance Depts " class="cta-img lazyload" />
                    <div class="cta-name">Insurance Depts</div>
                  </a>
                </div>
                <div class="cta-col" data-aios-reveal="true" data-aios-animation="slideInLeft"
                  data-aios-animation-delay="0s" data-aios-animation-reset="false" data-aios-animation-offset="0.1">
                  <a href="#" class="cta-item">
                    <img src="{{asset('assets/images/Landlord-Help.webp')}}" alt="Landlord" class="cta-img lazyload" />
                    <div class="cta-name">LANDLORDS / INVESTORS</div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="hp-performance" class="hp-performance">
        <h2 class="hidden">Our Numbers Proven Performance</h2>

        <div class="performance-wrap" data-background-attachment-rollback="">
          <div class="container">
            <div class="textwidget custom-html-widget">
              <div class="performance-title site-section-title">
                <span>
                  <strong class="performance-section-number site-section-number">04</strong>
                  Why Work With Us <b>Our Numbers</b>
                  <i class="title-line"></i>
                </span>
              </div>
              <ul class="performance-list">
                <li class="fast">
                  <span><i>100</i>%</span>Fully<br />Compliant and UK
                  registered
                </li>
                <li>
                  <span><i>365</i>days</span>Evening Calls &<br />Full after
                  care service
                </li>
                <li>
                  <span><i>174</i>+</span>International<br />Agent Access
                </li>
                <li>
                  <span><i>75</i></span>UK Special Forces & Ex-<br />Military Trained Agents
                </li>
                <li>
                  <span><i>98</i>%</span>Success Rate<br />(Even Bond was not
                  100%!)
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section id="hp-blog" class="hp-blog" data-aios-staggered-parent="true" data-aios-animation-offset="0.1"
        data-aios-animation-reset="false">
        <h2 class="hidden">In The Media</h2>

        <div class="blog-wrap">
          <div class="blog-left-bg">
            <!-- PS. Don't delete this tag! -->
          </div>
          <div class="blog-right-bg">
            <!-- PS. Don't delete this tag! -->
          </div>
          <div class="textwidget custom-html-widget">
            <div class="blog-divider">
              <canvas width="1600" height="156" data-background-attachment-fixed-rollback=""></canvas>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-4 blog-top">
                  <div class="blog-left" data-aios-staggered-child="true" data-aios-animation="fadeIn"
                    data-aios-animation-delay="0s">
                    <div class="blog-section-number site-section-number">
                      05
                    </div>
                    <div class="blog-title site-section-title">
                      <span>
                        In the <b>SPOTLIGHT</b>
                        <i class="title-line extend-left"></i>
                      </span>
                    </div>
                    <div class="blog-content">
                      <p>
                        Over the years Surveillance UK as worked for a wide
                        variety of clients, and had the privilege to be chosen
                        to provide expert advise on a wide range of public
                        topics. Some of our favourites still stand out, never
                        getting old. Our agent reach is global, and is
                        cemented by our excelled reputation within the
                        surveillance and Investigation industry. It is our
                        Dedication, Discretion and Perseverance that provides
                        our clients with a service beyond their expectations.
                        It’s also what keeps us in the ‘spot light’ albeit,
                        has ghost of the night. Just allowing Surveillance UK
                        to work on your behalf, is already the right result
                      </p>
                    </div>
                    <a href="{{route('contact.us')}}" class="blog-explore-more site-button">Contact us</a>
                  </div>
                </div>
                <div class="col-md-7 col-md-offset-1">
                  <div class="blog-right">
                    <div class="blog-post-list clearfix">
                      <div class="post-item" data-aios-staggered-child="true" data-aios-animation="fadeInLeft"
                        data-aios-animation-delay="0s">
                        <div class="post-info">
                          <div class="post-desc">
                            <div class="post-content">
                              <p>
                                During the well know Hacking scandal in the
                                UK, which lead to the downfall of the News of
                                the World media organisation. Our Principal
                                Investigator was chosen to be interviewed by
                                ITV’s Good Morning Britain for a fresh, and
                                in-depth explanation on how the ‘hackers’ did
                                it and what counter measure the public could
                                do to ensure their own personal security.
                              </p>
                            </div>
                          </div>
                          <a href="#" class="post-img">
                            <div class="post-date">
                              <span class="day">11</span>
                              <span class="month">Oct</span>
                              <span class="year">2021</span>
                            </div>
                            <img class="lazyload spot-img" src="{{asset('assets/images/Pic 1 - Good Morning Brit Logo.webp')}}" style="
                                  background-image: url();
                                  background-size: cover;
                                  background-position: center;
                                  background-repeat: no-repeat;
                                " alt="Record Sale" />
                          </a>
                        </div>
                      </div>
                      <div class="post-item" data-aios-staggered-child="true" data-aios-animation="fadeInLeft"
                        data-aios-animation-delay="0s">
                        <div class="post-info">
                          <div class="post-desc">
                            <div class="post-content">
                              <p>
                                A successful surveillance investigation took
                                part on behalf of a senior Universal Studio’s
                                staff member who while working with her legal
                                team could not track down her husband who had
                                absconded with hundreds of thousands of
                                pounds. Implementing some covert surveillance
                                techniques and methodical tracing, we located
                                Mr ‘H’ living on a canal barge. It led to a
                                successful divorce, the whole story itself was
                                a good movie.
                              </p>
                            </div>
                          </div>
                          <a href="#" class="post-img">
                            <div class="post-date">
                              <span class="day">12</span>
                              <span class="month">Dec</span>
                              <span class="year">2019</span>
                            </div>
                            <img class="lazyload spot-img" src="{{asset('assets/images/Pic 2 - Universal LA.webp')}}" style="
                                  background-image: url();
                                  background-size: cover;
                                  background-position: center;
                                  background-repeat: no-repeat;
                                " alt="Record Sale" />
                          </a>
                        </div>
                      </div>
                      <div class="post-item" data-aios-staggered-child="true" data-aios-animation="fadeInLeft"
                        data-aios-animation-delay="0s">
                        <div class="post-info">
                          <div class="post-desc">
                            <div class="post-content">
                              <p>
                                One of our more endearing missing person cases
                                involved locating the birth mum of one of the
                                UK’s leading illustrators for children’s
                                books. Many of you would have read her books
                                to your children. After years of searching
                                herself, she kept coming up against brick
                                walls. Our team, not only located her real
                                birth mum, but just so happened mum, although
                                separated and re-married, remained friends
                                with our clients’ real birth dad to. Needless
                                to say, lots of happy tears flowed on the
                                reunion.
                              </p>
                            </div>
                          </div>
                          <a href="#" class="post-img">
                            <div class="post-date">
                              <span class="day">17</span>
                              <span class="month">Nov</span>
                              <span class="year">2021</span>
                            </div>
                            <img class="lazyload spot-img" src="{{asset('assets/images/Pic 3 - Adoption pic.webp')}}" style="
                                  background-image: url();
                                  background-size: cover;
                                  background-position: center;
                                  background-repeat: no-repeat;
                                " alt="Record Sale" />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="hp-testi" class="hp-testi" data-aios-staggered-parent="true" data-aios-animation-offset="0.1"
        data-aios-animation-reset="false">
        <h2 class="hidden">What Our Client Are Saying</h2>

        <div class="testi-wrap">
          <div class="textwidget custom-html-widget">
            <div class="clearfix">
              <div class="testi-left" data-aios-staggered-child="true" data-aios-animation="slideInLeft"
                data-aios-animation-delay="0s">
                <div class="testi-photo">
                  <canvas width="906" height="664"
                    lazyloaddata-bgset="https://ogroup.com/wp-content/themes/ogroup.com/images/testi-photo-d.webp"
                    class="hidden-xs hidden-sm lazyload"></canvas>
                  <canvas width="906" height="664"
                    data-bgset="https://ogroup.com/wp-content/themes/ogroup.com/images/testi-photo-d.webp"
                    class="hidden-md hidden-lg lazyload"></canvas>
                </div>
              </div>
              <div class="testi-right" data-aios-staggered-child="true" data-aios-animation="slideInRight"
                data-aios-animation-delay="0s" data-background-attachment-fixed-rollback="">
                <div class="testi-section-number site-section-number">06</div>
                <div class="testi-title site-section-title">
                  <span>
                    What Our <b>Clients Are Saying</b>
                    <i class="title-line extend-right"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="testi-main" data-aios-staggered-child="true" data-aios-animation="fadeInUp"
                data-aios-animation-delay="0.5s">
                <div class="testi-slider">
                  <div class="testi-slider-slide">
                    <div class="testi-content">
                      “Being in the public eye it is not easy to trust anyone,
                      but thankfully after reaching out to the team at
                      Surveillance UK, my worries were easily eased. I needed
                      to confirm the background of an individual I let into my
                      life, and the undercover agents did this for me. With
                      both surveillance and background checks, it turned out
                      not to be a happy ending for the individual who was
                      trying to scam me. A complex situation, executed with
                      perfection.”
                    </div>
                    <a href="#" class="testi-author">JH– Actress <br />
                      <i></i>
                    </a>
                  </div>
                  <div class="testi-slider-slide">
                    <div class="testi-content">
                      “Were done we start, oh my god I could not be any happier
                      in my life and it is all down to you. I was looking for
                      my real mum after being adopted as a baby, and spent
                      years searching. Your team were so kind and friendly and
                      really help me after I pretty much give up. Not only
                      have they found her, but I have more sisters and
                      brothers I never knew. Thank You thank you thank you… I
                      want to cry again...happy tears x”
                    </div>
                    <a href="#" class="testi-author">Sharon and Mike Pickering <br />
                      <i> - Nottingham</i>
                    </a>
                  </div>
                  <div class="testi-slider-slide">
                    <div class="testi-content">
                      “After taking over a bespoke hotel, with high profile A
                      list clients, we contacting the team at Surveillance UK
                      to help get to the bottom and eradicate an internal
                      long-established Fraud & Theft issue we inherited. By
                      covertly placing a member of the SUK team among the
                      staff, they were able to identify the culprits, and put
                      a stop to the employees who had stolen thousands. The
                      strategy they laid out and implemented was in a word
                      amazing.”
                    </div>
                    <a href="#" class="testi-author">
                      Dean Hewitt <br />
                      <i>-Bridge Hotel Cheshire</i>
                    </a>
                  </div>
                  <div class="testi-slider-slide">
                    <div class="testi-content">
                      “I contact Surveillance UK to help me in a marital
                      situation after suspecting my wife cheating. It was the
                      smartest thing I ever did. The guidance and patience of
                      the agents was so professional, and I will always be
                      grateful. Sadly, my concerns were confirmed and the
                      surveillance put in place provided me with undeniable
                      answers. My wife was caught cheating, multiple times,
                      with the builder I trusted to work on my property. I
                      would never have known without Surveillance UK agents.
                      Thank you, James, and team.”
                    </div>
                    <a href="#" class="testi-author">
                      Mohammed K. <br />
                      <i> – Business Owner / Chemist - Cheadle </i>
                    </a>
                  </div>
                  <div class="testi-slider-slide">
                    <div class="testi-content">
                      “I have recommended Surveillance UK several times to
                      help our clients in legal situations. They provide an
                      unparalleled service and really know what they are doing
                      and how to provide results. I wish them continued
                      success, and I know I can count on them for my clients.
                      ”
                    </div>
                    <a href="#" class="testi-author">S.Greg son <br />
                      <i> – Solicitor (Partner Ever sheds)</i>
                    </a>
                  </div>

                  <div class="testi-slider-slide">
                    <div class="testi-content">
                      “Living in L. A, I wasn’t sure I would ever find a
                      missing person who took all my money. My lawyer reached
                      out to Surveillance UK, and we sent them all the details
                      we had. God lord, they found him I could not believe it.
                      It resulted in my lawyer being able to start proceedings
                      to get my money back. Thank you, kind sirs and madam,
                      you really are the best, and thank you for my flowers.
                      Be sure to visit if you come to L. A”
                    </div>
                    <a href="#" class="testi-author">Babs <br />
                      <i> – costume designer L. A (USA)</i>
                    </a>
                  </div>
                </div>
                <div class="testi-slider-controls">
                  <div class="testi-prev">
                    <span class="ai-font-arrow-g-p"></span>Prev
                  </div>
                  <div class="mobile-testi-arrow">
                    <div class="mob-testi-prev">
                      <span class="ai-font-arrow-g-p"></span>Prev
                    </div>
                    <div class="mob-testi-next">
                      Next <span class="ai-font-arrow-g-n"></span>
                    </div>
                  </div>
                  <div class="testi-next">
                    Next <span class="ai-font-arrow-g-n"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection