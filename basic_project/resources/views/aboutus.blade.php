@extends('Layout.layout')




<title>About Us</title>

  
@section('content')

      <!-- hi, we are brave-->
      <section class="section section-lg bg-default">
        <div class="container container-bigger">
          <div class="row row-50 justify-content-md-center align-items-lg-center justify-content-xl-between flex-lg-row-reverse">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <h3>hi, I am Faris</h3>
              <div class="divider divider-decorate"></div>
              <p class="heading-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              <p class="text-spacing-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p><a class="button button-default-outline button-nina" href="#">learn more</a>
            </div>
            <div class="col-md-10 col-lg-6"><img src="images/about-us-1-720x459.jpg" alt="" width="720" height="459"/>
            </div>
          </div>
        </div>
      </section>

      <!-- Small Features-->
      <section class="section section-lg section-lg-alternative bg-gray-lighter novi-background bg-cover">
        <div class="container container-wide">
          <div class="row row-50 justify-content-sm-center text-gray-light">
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal">
                <div class="box-minimal-header">
                  <div class="box-minimal-icon box-minimal-icon-lg novi-icon mdi mdi mdi-airplane"></div>
                  <h6 class="box-minimal-title">Air Tickets</h6>
                </div>
                <p>At our travel agency, you can book air tickets to any world destination. We also provide online ticket booking via our website in just a couple of steps.</p>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal">
                <div class="box-minimal-header">
                  <div class="box-minimal-icon box-minimal-icon-lg novi-icon mdi mdi-map"></div>
                  <h6 class="box-minimal-title">Voyages & Cruises</h6>
                </div>
                <p>Besides regular tours and excursions, we also offer a variety of cruises & sea voyages for different customers  looking for awesome experiences.</p>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal">
                <div class="box-minimal-header">
                  <div class="box-minimal-icon box-minimal-icon-lg novi-icon mdi mdi-city"></div>
                  <h6 class="box-minimal-title">Hotel Bookings</h6>
                </div>
                <p>We offer a wide selection of hotel ranging from 5-star ones to small properties located worldwide so that you could book a hotel you like.</p>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal">
                <div class="box-minimal-header">
                  <div class="box-minimal-icon box-minimal-icon-lg novi-icon mdi mdi-beach"></div>
                  <h6 class="box-minimal-title">Tailored Summer Tours</h6>
                </div>
                <p>Our agency provides varied tours including tailored summer tours for clients who are searching for an exclusive and memorable vacation.</p>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- our team-->
      <section class="section section-lg text-center novi-background bg-cover">
        <div class="container container-wide">
          <h3>MEET OUR TEAM</h3>
          <div class="divider divider-decorate"></div>
          <div class="row row-50 row-xxl-90 justify-content-sm-center offset-custom-2">
            <div class="col-md-6 col-lg-3">
              <div class="team-classic team-classic-circle">
                <figure><img class="rounded-circle" src="images/team-07-300x300.jpg" alt="" width="300" height="300"/>
                </figure>
                <div class="team-classic-caption">
                  <h5><a class="team-classic-title" href="#">Sandra Ferguson</a></h5>
                  <p class="team-classic-job-position">Founder, Director</p>
                  <ul class="list-inline list-team">
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="team-classic team-classic-circle">
                <figure><img class="rounded-circle" src="images/team-08-300x300.jpg" alt="" width="300" height="300"/>
                </figure>
                <div class="team-classic-caption">
                  <h5><a class="team-classic-title" href="#">Ronald Chen</a></h5>
                  <p class="team-classic-job-position">Tour Manager</p>
                  <ul class="list-inline list-team">
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="team-classic team-classic-circle">
                <figure><img class="rounded-circle" src="images/team-09-300x300.jpg" alt="" width="300" height="300"/>
                </figure>
                <div class="team-classic-caption">
                  <h5><a class="team-classic-title" href="#">Frances Watson</a></h5>
                  <p class="team-classic-job-position">Travel Agent</p>
                  <ul class="list-inline list-team">
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="team-classic team-classic-circle">
                <figure><img class="rounded-circle" src="images/team-10-300x300.jpg" alt="" width="300" height="300"/>
                </figure>
                <div class="team-classic-caption">
                  <h5><a class="team-classic-title" href="#">Joe Myers</a></h5>
                  <p class="team-classic-job-position">Reservations Coordinator</p>
                  <ul class="list-inline list-team">
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="team-classic team-classic-circle">
                <figure><img class="rounded-circle" src="images/team-12-300x300.jpg" alt="" width="300" height="300"/>
                </figure>
                <div class="team-classic-caption">
                  <h5><a class="team-classic-title" href="#">Brenda Lopez</a></h5>
                  <p class="team-classic-job-position">PR Manager</p>
                  <ul class="list-inline list-team">
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="team-classic team-classic-circle">
                <figure><img class="rounded-circle" src="images/team-13-300x300.jpg" alt="" width="300" height="300"/>
                </figure>
                <div class="team-classic-caption">
                  <h5><a class="team-classic-title" href="#">Deborah Stewart</a></h5>
                  <p class="team-classic-job-position">Marketing Manager</p>
                  <ul class="list-inline list-team">
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="team-classic team-classic-circle">
                <figure><img class="rounded-circle" src="images/team-14-300x300.jpg" alt="" width="300" height="300"/>
                </figure>
                <div class="team-classic-caption">
                  <h5><a class="team-classic-title" href="#">Patrick Douglas</a></h5>
                  <p class="team-classic-job-position">Travel Consultant</p>
                  <ul class="list-inline list-team">
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="team-classic team-classic-circle">
                <figure><img class="rounded-circle" src="images/team-15-300x300.jpg" alt="" width="300" height="300"/>
                </figure>
                <div class="team-classic-caption">
                  <h5><a class="team-classic-title" href="#">Ruth Marshall</a></h5>
                  <p class="team-classic-job-position">Office Manager</p>
                  <ul class="list-inline list-team">
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Our history-->
      <section class="section section-lg bg-gray-700 novi-background bg-cover">
        <div class="container container-bigger">
          <div class="row row-fix row-50 justify-content-sm-center justify-content-xl-between">
            <div class="col-sm-10 col-md-12 col-xl-7">
              <h3>Agency's Timeline</h3>
              <div class="divider divider-decorate"></div>
              <p class="text-gray-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </p>
              <div class="time-line-vertical inset-md">
                <div class="time-line-vertical-element">
                  <div class="unit unit-sm flex-column flex-md-row unit-spacing-xxl">
                    <div class="unit-left">
                      <div class="time-line-time">
                        <time class="wow fadeInLeft" data-wow-delay=".0s" datetime="2018">April 2016</time>
                      </div>
                    </div>
                    <div class="unit-body">
                      <div class="time-line-content wow fadeInRight" data-wow-delay=".6s">
                        <h5>We gathered the team of dedicated and knowledgeable traveling specialists</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="time-line-vertical-element">
                  <div class="unit flex-column flex-md-row unit-spacing-xxl">
                    <div class="unit-left">
                      <div class="time-line-time">
                        <time class="wow fadeInLeft" data-wow-delay=".1s" datetime="2018">September 2016</time>
                      </div>
                    </div>
                    <div class="unit-body">
                      <div class="time-line-content wow fadeInRight" data-wow-delay=".7s">
                        <h5>Extending our range of tours and excursions</h5>
                        <p>Aenean et tortor at risus viverra adipiscing at in tellus. Nam aliquam sem et tortor consequat id porta nibh venenatis. Eu lobortis elementum nibh tellus. Id eu nisl nunc mi. </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="time-line-vertical-element">
                  <div class="unit flex-column flex-md-row unit-spacing-xxl">
                    <div class="unit-left">
                      <div class="time-line-time">
                        <time class="wow fadeInLeft" data-wow-delay=".2s" datetime="2018">March 2019</time>
                      </div>
                    </div>
                    <div class="unit-body">
                      <div class="time-line-content wow fadeInRight" data-wow-delay=".8s">
                        <h5>Partnering with international tour companies</h5>
                        <p>Malesuada fames ac turpis egestas sed tempus urna et pharetra. Cursus mattis molestie a iaculis at erat pellentesque. Turpis in eu mi bibendum neque egestas congue quisque</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-10 col-md-12 col-xl-4">
              <div class="row row-30">
                <div class="col-md-4 col-xl-12 wow fadeInUp" data-wow-delay=".1s"><img src="images/about-us-2-420x280.jpg" alt="" width="420" height="280"/>
                </div>
                <div class="col-md-4 col-xl-12 wow fadeInUp" data-wow-delay=".2s"><img src="images/about-us-3-420x280.jpg" alt="" width="420" height="280"/>
                </div>
                <div class="col-md-4 col-xl-12 wow fadeInUp" data-wow-delay=".3s"><img src="images/about-us-4-420x280.jpg" alt="" width="420" height="280"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Projects-->
      <section class="section section-lg bg-gray-lighter text-center novi-background bg-cover">
        <div class="container container-wide">
          <div class="row row-fix row-50 justify-content-md-center">
            <div class="col-sm-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
              <h3>Destinations</h3>
              <div class="divider divider-decorate"></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
            </div>
          </div>
          <div class="row row-50" data-lightgallery="group">
            <div class="col-sm-12 col-md-6 col-lg-4"><a class="gallery-item titled-gallery-item" href="images/project-1-1200x800-original.jpg" data-lightgallery="item">
                <div class="gallery-item-image">
                  <figure><img src="images/project-1-570x380.jpg" alt="" width="570" height="380"/>
                  </figure>
                  <div class="caption">
                  </div>
                </div></a>
              <div class="titled-gallery-caption"><a href="#">Bora Bora</a></div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4"><a class="gallery-item titled-gallery-item" href="images/project-2-1200x800-original.jpg" data-lightgallery="item">
                <div class="gallery-item-image">
                  <figure><img src="images/project-2-570x380.jpg" alt="" width="570" height="380"/>
                  </figure>
                  <div class="caption">
                  </div>
                </div></a>
              <div class="titled-gallery-caption"><a href="#">Egypt</a></div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4"><a class="gallery-item titled-gallery-item" href="images/project-3-1200x800-original.jpg" data-lightgallery="item">
                <div class="gallery-item-image">
                  <figure><img src="images/project-3-570x380.jpg" alt="" width="570" height="380"/>
                  </figure>
                  <div class="caption">
                  </div>
                </div></a>
              <div class="titled-gallery-caption"><a href="#">Thailand</a></div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4"><a class="gallery-item titled-gallery-item" href="images/project-4-1200x800-original.jpg" data-lightgallery="item">
                <div class="gallery-item-image">
                  <figure><img src="images/project-4-570x380.jpg" alt="" width="570" height="380"/>
                  </figure>
                  <div class="caption">
                  </div>
                </div></a>
              <div class="titled-gallery-caption"><a href="#">Dominicana</a></div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4"><a class="gallery-item titled-gallery-item" href="images/project-5-1200x800-original.jpg" data-lightgallery="item">
                <div class="gallery-item-image">
                  <figure><img src="images/project-5-570x380.jpg" alt="" width="570" height="380"/>
                  </figure>
                  <div class="caption">
                  </div>
                </div></a>
              <div class="titled-gallery-caption"><a href="#">Jamaica</a></div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4"><a class="gallery-item titled-gallery-item" href="images/project-6-1200x800-original.jpg" data-lightgallery="item">
                <div class="gallery-item-image">
                  <figure><img src="images/project-6-570x380.jpg" alt="" width="570" height="380"/>
                  </figure>
                  <div class="caption">
                  </div>
                </div></a>
              <div class="titled-gallery-caption"><a href="#">Huntington Beach</a></div>
            </div>
            <div class="col-12"><a class="button button-secondary button-nina" href="#">view all Destinations</a></div>
          </div>
        </div>
      </section>

     
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"> </div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>

  @endsection