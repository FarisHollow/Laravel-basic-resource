@extends('Layout.layout')

   @section('content')
     
     
     
     <!-- Base typography-->
      <section class="section section-lg bg-default">
        <!-- section wave-->
        <div class="section-wave">
          <svg x="0px" y="0px" width="1920px" height="45px" viewbox="0 0 1920 45" preserveAspectRatio="none">
            <path d="M1920,0c-82.8,0-108.8,44.4-192,44.4c-78.8,0-116.5-43.7-192-43.7 c-77.1,0-115.9,44.4-192,44.4c-78.2,0-114.6-44.4-192-44.4c-78.4,0-115.3,44.4-192,44.4C883.1,45,841,0.6,768,0.6 C691,0.6,652.8,45,576,45C502.4,45,461.9,0.6,385,0.6C306.5,0.6,267.9,45,191,45C115.1,45,78,0.6,0,0.6V45h1920V0z"></path>
          </svg>
        </div>
        <div class="container">
          <div class="row row-50 row-fix">
            <div class="col-lg-10 col-xl-8">
              <ul class="list-xl">
                <li>
                  <h1>H1 Heading</h1>
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
                <li>
                  <h2>H2 Heading</h2>
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
                <li>
                  <h3>H3 Heading</h3>
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
                <li>
                  <h4>H4 Heading</h4>
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
                <li>
                  <h5>H5 Heading</h5>
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
                <li>
                  <h6>H6 Heading</h6>
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Blockquote-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50 row-fix">
            <div class="col-lg-10 col-xl-8">
              <h3>Blockquote</h3>
              <article class="quote-primary">
                <svg class="quote-primary-mark" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">
                  <path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>
                </svg>
                <div class="quote-primary-text">
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.  </p>
                </div>
                <p class="quote-primary-meta"><span>by</span><span class="cite">Ronald Chen</span></p>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- HTML Text Elements-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-fix">
            <div class="col-lg-10 col-xl-8">
              <h3>HTML Text Elements</h3>
              <ul class="list-xs">
                <li><a href="#">Link text</a></li>
                <li><a class="link-hover" href="#">Hover link text</a></li>
                <li><span class="font-weight-bold">Bold Text</span></li>
                <li><span class="font-italic">Italic Text</span></li>
                <li>
                  <mark>This is a highlighted text</mark>
                </li>
                <li><span class="text-strike">This is a strikethrough text</span></li>
                <li><span class="text-underline">This is an underlined text.</span></li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Unordered List-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50 row-fix">
            <div class="col-lg-10 col-xl-8">
              <h3>Unordered List</h3>
              <p>We specialize in a variety of services. Our aim is to deliver the top level of customer service based on your requests.</p>
              <ul class="list-marked">
                <li>Consulting</li>
                <li>Customer Service</li>
                <li>Innovation</li>
                <li>Management</li>
                <li>Ethics</li>
              </ul>
              <p>We hope that with our services you will receive the most personalized help in purchasing any kind of products you are looking for.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Ordered List-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50 row-fix">
            <div class="col-lg-10 col-xl-8">
              <h3>Ordered List</h3>
              <p>We specialize in a variety of services. Our aim is to deliver the top level of customer service based on your requests.</p>
              <ol class="list-ordered">
                <li>Consulting</li>
                <li>Customer Service</li>
                <li>Innovation</li>
                <li>Management</li>
                <li>Ethics</li>
              </ol>
              <p>We hope that with our services you will receive the most personalized help in purchasing any kind of products you are looking for.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Icon List-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-fix">
            <div class="col-sm-12">
              <h3>Icon List</h3>
              <div class="row row-30">
                <div class="col-sm-9 col-md-6 col-lg-4">
                  <article class="box-minimal">
                    <div class="box-minimal-header">
                      <div class="box-minimal-icon fl-bigmug-line-megaphone11"></div>
                      <h6 class="box-minimal-title">Best Service</h6>
                    </div>
                    <div class="box-minimal-text">Our mission is to attract and retain customers by providing Best in Class solutions and fostering a profitable, disciplined culture of safety, service, and trust.</div>
                  </article>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-4">
                  <article class="box-minimal">
                    <div class="box-minimal-header">
                      <div class="box-minimal-icon fl-bigmug-line-note35"></div>
                      <h6 class="box-minimal-title">Reputation</h6>
                    </div>
                    <div class="box-minimal-text">We have established a strong presence in the industry. Our award-winning services earn a reputation for quality and excellence that few can rival.</div>
                  </article>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-4">
                  <article class="box-minimal">
                    <div class="box-minimal-header">
                      <div class="box-minimal-icon fl-bigmug-line-square160"></div>
                      <h6 class="box-minimal-title">Safety & Security</h6>
                    </div>
                    <div class="box-minimal-text">Safety for our employees, customers and the community we work with will always remain our primary focus in all the policies, procedures and programs.</div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Image Centered-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-fix">
            <div class="col-lg-10 col-xl-8">
              <h3>Image Centered</h3>
              <figure class="figure-light"><img class="img-centered" src="images/typography-1-770x480.jpg" alt="" width="770" height="480"/>
                <figcaption>
                  <p>The Best Tours</p>
                </figcaption>
              </figure>
              <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Image Left-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-fix">
            <div class="col-lg-10 col-xl-8">
              <h3>Image Left</h3>
              <div class="row row-30">
                <div class="col-md-6"><img src="images/typography-1-770x480.jpg" alt="" width="770" height="480"/>
                </div>
                <div class="col-md-6">
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Image Right-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-xl-8">
              <h3>Image Right</h3>
              <div class="row row-30 flex-md-row-reverse">
                <div class="col-md-6"><img src="images/typography-1-770x480.jpg" alt="" width="770" height="480"/>
                </div>
                <div class="col-md-6">
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<a class="section section-banner" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" style="background-image: url(images/banner/background-03-1920x310.jpg); background-image: -webkit-image-set( url(images/banner/background-03-1920x310.jpg) 1x, url(images/banner/background-03-3840x620.jpg) 2x )"><img src="images/banner/foreground-03-1600x310.png" srcset="images/banner/foreground-03-1600x310.png 1x, images/banner/foreground-03-3200x620.png 2x" alt="" width="1600" height="310"></a>
@endsection
