@extends('frontend.layout.app')
@section('content')
<!-- main of the page -->
<main id="main">
    <!-- main slider of the page -->
    <section class="main-slider">
        <!-- slide of the page -->
        <div class="slide bg-full overlay" style="background-image: url({{ asset('public/frontend/images/home.jpg') }})">
            <div class="holder">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1>We Deliver Fast International Cargo Services</h1>
                            <span class="sub-title">On Time Delivery Don't Worry Be Happy !</span>
                            <!--                            <div class="btn-holder">
                                                            <a href="#" class="btn-primary text-center text-uppercase active md-round">BUY THEME</a>
                                                            <a href="#" class="btn-primary text-center text-uppercase md-round">Get a Quote</a>
                                                        </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slide of the page end -->
        <!-- slide of the page -->
        <div class="slide bg-full overlay" style="background-image: url({{ asset('public/frontend/images/home_1.jpg') }})">
            <div class="holder">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1>International Freight Forward</h1>
                            <span class="sub-title">On Time Delivery Don't Worry Be Happy !</span>
                            <!--                            <div class="btn-holder">
                                                            <a href="#" class="btn-primary text-center text-uppercase active md-round">BUY THEME</a>
                                                            <a href="#" class="btn-primary text-center text-uppercase md-round">Get a Quote</a>
                                                        </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slide of the page end -->
        <!-- slide of the page -->
        <div class="slide bg-full overlay" style="background-image: url({{ asset('public/frontend/images/home_2.jpg')}})">
            <div class="holder">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1>Fast &amp; Safe Transport</h1>
                            <span class="sub-title">On Time Delivery Don't Worry Be Happy !</span>
                            <!--                            <div class="btn-holder">
                                                            <a href="#" class="btn-primary text-center text-uppercase active md-round">BUY THEME</a>
                                                            <a href="#" class="btn-primary text-center text-uppercase md-round">Get a Quote</a>
                                                        </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slide of the page end -->
    </section>
    <!-- main slider of the page end -->
    <!-- service sec of the page -->
    <section class="service-sec container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2 class="heading text-uppercase">OUR SERVICES</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="icon"><img src="{{ asset('public/frontend/images/INTERNATIONAL_FREIGHT_FORWARDING_small.png') }}" alt="Icon" class="img-responsive"></div>
                <div class="txt-holder">
                    <h3 class="heading2">INTERNATIONAL FREIGHT FORWARDING</h3>
                    <p>We handle International freight forwarding with the collaboration of important shipping companies with whom we uphold agreements and business relationships.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="icon"><img src="{{ asset('public/frontend/images/LCL_FCL_SHIPMENTS_small.png') }}" alt="Icon" class="img-responsive"></div>
                <div class="txt-holder">
                    <h3 class="heading2">LCL/FCL SHIPMENTS</h3>
                    <p>FCL = Full Container Load.</p>
                    <p>LCL = Less than Container Load.</p>
                    <p>you can choose FCL, or LCL if your overall cargo volume does not meet one full container requirements.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="icon"><img src="{{ asset('public/frontend/images/BREAK_BULK_small.png') }}" alt="Icon" class="img-responsive"></div>
                <div class="txt-holder">
                    <h3 class="heading2">BREAK BULK</h3>
                    <p>we do work very closely with many associated brokers in fixing cargoes and vessels. With our team is able to provide ideal match between cargo and right kind of vessel.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="service-sec container" style="padding-top: 0px;">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="icon"><img src="{{ asset('public/frontend/images/AIR_CARGO_small.png') }}" alt="Icon" class="img-responsive"></div>
                <div class="txt-holder">
                    <h3 class="heading2">AIR CARGO</h3>
                    <p>Leo global Logistics specialized in providing value added international air freight forwarding services to companies large and small. Partnership with major airlines to offer lowest price and best transit time.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="icon"><img src="{{ asset('public/frontend/images/3PL_small.png') }}" alt="Icon" class="img-responsive"></div>
                <div class="txt-holder">
                    <h3 class="heading2">3PL</h3>
                    <p>Leo Global Logistic AS Third party logistics providers typically specialize in integrated operation, warehousing and transportation services which can be scaled and customized to customer and companies.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="icon"><img src="{{ asset('public/frontend/images/PROJECT_CARGO_small.png') }}" alt="Icon" class="img-responsive"></div>
                <div class="txt-holder">
                    <h3 class="heading2">PROJECT CARGO</h3>
                    <p>Managing heavy lift projects requires special expertise, care and detailing. We have built a formidable reputation in Project Cargo Logistics and heavy lift shipments with our dedicated operations team.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="service-sec container" style="padding-top: 0px;">
        <div class="row">
            <div class="col-xs-12 col-sm-2"></div>
            <div class="col-xs-12 col-sm-4">
                <div class="icon"><img src="{{ asset('public/frontend/images/CHARTERING_small.png') }}" alt="Icon" class="img-responsive"></div>
                <div class="txt-holder">
                    <h3 class="heading2">CHARTERING</h3>
                    <p>Where customers transportation requirements exceed the limitations of containerized transport we provide tailor-made solutions through our global chartering team.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="icon"><img src="{{ asset('public/frontend/images/CUSTOM_CLEARANCE_small.png') }}" alt="Icon" class="img-responsive"></div>
                <div class="txt-holder">
                    <h3 class="heading2">CUSTOM CLEARANCE</h3>
                    <p>Our expert team is competent to handle all aspects of customs processes, including: import / export clearance, declarations, Performa invoices and certificates of origin. Import and export customs clearance.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- service sec of the page end -->
    <!-- Tracking sec of the page -->
    <section class="tracking-sec bg-full" style="background-image: url({{ asset('public/frontend/images/img02.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="txt-holder">
                        <h2 class="heading text-uppercase">MOVE TOGETHER</h2>
                        <p>The supply chain relies on the efficient management of assets and logistics to get raw materials, parts and finished products from one place to another. When you’re sending goods around the world, it’s vital to use your transportation resources in the right way.Pairing the optimized usage of containers, vehicles and other assets with effective logistics execution including financial audit & settlement greatly improves operational efficiency, security and speed.</p>
                        <p>We’ll explore the various modes of transportation in the global supply chain, how organizations can use them and why they matter. A shipping container is a metal box structure that can be easily moved between trucks, railcars, ocean-going vessels and other transportation, quickly and easily. All shipping containers are manufactured to common standards that will fit to specific chassis, railcars and other transportation.</p>
                        <!--<a href="about.html" class="more">Find out more</a>-->
                    </div>
                </div>
                <!--                <div class="col-xs-12 col-sm-5 col-md-4">
                                    <div class="track-holder bg-full" style="background-image: url({{ asset('public/frontend/images/img03.jpg') }})">
                                        <form action="#" class="track-form">
                                            <fieldset>
                                                <label for="text">AWB No./BL No./Container No.</label>
                                                <input type="text" id="text" class="form-control md-round" placeholder="Insert trucking number here">
                                                <p>Please enter (House) Air Waybill No., B/L No., or Container No. For optional search using your Customer Account No., please click <a href="#">here</a>.</p>
                                                <button type="submit" class="btn-primary text-center text-uppercase md-round">TRACK IT</button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>-->
            </div>
        </div>
    </section>
    <!-- Tracking sec of the page end -->
    <!-- News sec of the page -->
<!--    <section class="news-sec">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="heading text-uppercase">LATEST NEWS</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                     news block of the page 
                    <div class="news-block">
                        <div class="img-holder">
                            <a href="blog-detail.html">
                                <img src="{{ asset('public/frontend/images/img04.jpg') }}" alt="image description" class="img-responsive">
                            </a>
                        </div>
                        <div class="txt-holder">
                            <time class="time" datetime="2017-02-03 20:00">March 20, 2017</time>
                            <h4 class="heading2"><a href="blog-detail.html">Why Choose Our Warehousing Service?</a></h4>
                            <p>Loconsectetur rem ipsum dolor sit amet, consectetur ipsum dolor sit ametadipisicing elit consectetur</p>
                        </div>
                    </div>
                     news block of the page end 
                </div>
                <div class="col-xs-12 col-sm-6">
                     news block of the page 
                    <div class="news-block">
                        <div class="img-holder">
                            <a href="blog-detail.html">
                                <img src="{{ asset('public/frontend/images/img05.jpg') }}" alt="image description" class="img-responsive">
                            </a>
                        </div>
                        <div class="txt-holder">
                            <time class="time" datetime="2017-02-03 20:00">March 20, 2017</time>
                            <h4 class="heading2"><a href="blog-detail.html">Continually engage distributed infrastructures</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitipsum dolor sit amet, consectetur adipisicing elit</p>
                        </div>
                    </div>
                     news block of the page end 
                </div>
                <div class="col-xs-12 col-sm-6">
                     news block of the page 
                    <div class="news-block">
                        <div class="img-holder">
                            <a href="blog-detail.html">
                                <img src="{{ asset('public/frontend/images/img06.jpg') }}" alt="image description" class="img-responsive">
                            </a>
                        </div>
                        <div class="txt-holder">
                            <time class="time" datetime="2017-02-03 20:00">March 20, 2017</time>
                            <h4 class="heading2"><a href="blog-detail.html">Top Benefits Of Hiring Our Trucking Service</a></h4>
                            <p>Lorem ipsum adipisicing elit dolor sit amet, consectetur ipsum dolor sit amet, consectetur adipisicing elitadipisicing elit</p>
                        </div>
                    </div>
                     news block of the page end 
                </div>
                <div class="col-xs-12 col-sm-6">
                     news block of the page 
                    <div class="news-block">
                        <div class="img-holder">
                            <a href="blog-detail.html">
                                <img src="{{ asset('public/frontend/images/img07.jpg') }}" alt="image description" class="img-responsive">
                            </a>
                        </div>
                        <div class="txt-holder">
                            <time class="time" datetime="2017-02-03 20:00">March 20, 2017</time>
                            <h4 class="heading2"><a href="blog-detail.html">Personal Change of Management</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitipsum dolor sit amet, consectetur adipisicing elit</p>
                        </div>
                    </div>
                     news block of the page end 
                </div>
            </div>
        </div>
        <div class="img-icon"><img src="{{ asset('public/frontend/images/img08.png') }}" alt="image description" class="img-responsive"></div>
    </section>-->
    <!-- News sec of the page end -->
    <!-- Call to action of the page -->
<!--    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 col-md-8">
                    <h2 class="heading text-uppercase">WE'RE READY TO COLLECT YOUR PACKAGE</h2>
                    <span>I can be of assistance, please do not hesitate to contact us.</span>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-4">
                    <a href="{{ route('contactus') }}" class="btn-primary text-center text-uppercase md-round">Get a quote</a>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Call to action of the page end -->
    <!-- Counter holder of the page -->
    <!--    <div class="counter-holder bg-full" style="background-image: url({{ asset('public/frontend/images/img09.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 counter-block">
                        <span class="icon"><img src="{{ asset('public/frontend/images/icon04.png') }}" alt="icon" class="img-responsive"></span>
                        <div class="txt-holder">
                            <span class="counter">7900</span>
                            <span class="sub-title">EMPLOYEES ALL OVER THE WORLD</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 counter-block">
                        <span class="icon"><img src="{{ asset('public/frontend/images/icon05.png') }}" alt="icon" class="img-responsive"></span>
                        <div class="txt-holder">
                            <span class="counter">300</span>
                            <span class="sub-title">FEET SIZE</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 counter-block">
                        <span class="icon"><img src="{{ asset('public/frontend/images/icon06.png') }}" alt="icon" class="img-responsive"></span>
                        <div class="txt-holder">
                            <span class="counter">700</span>
                            <span class="sub-title">KILOMETERS PER YEAR</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 counter-block">
                        <span class="icon"><img src="{{ asset('public/frontend/images/icon07.png') }}" alt="icon" class="img-responsive"></span>
                        <div class="txt-holder">
                            <span class="counter">451</span>
                            <span class="sub-title">CLIENTS WORLDWIDE</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    <!-- Counter holder of the page end -->
    <!-- Contact sec of the page -->
<!--    <div class="contact-sec container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                quote block of the page 
                <div class="quote-block bg-full" style="background-image: url({{ asset('public/frontend/images/img10.jpg') }})">
                    <form class="quote-form" method='post'>
                        <fieldset>
                            <h2 class="text-uppercase">REQUEST A QUICK QUOTE</h2>
                            <div class="form-group">
                                <div class="col">
                                    <input type="text" class="form-control md-round" placeholder="Your name">
                                </div>
                                <div class="col">
                                    <input type="email" class="form-control md-round" placeholder="Your email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col">
                                    <input type="text" class="form-control md-round" placeholder="Dimension">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control md-round" placeholder="City of departure">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col">
                                    <input type="text" class="form-control md-round" placeholder="Delivery city">
                                </div>
                                <div class="col">
                                    <select class="form-control md-round">
                                        <option value="0">Freight type</option>
                                        <option value="1">Freight type</option>
                                        <option value="2">Freight type</option>
                                        <option value="3">Freight type</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col">
                                    <select class="form-control md-round">
                                        <option value="0">incortem</option>
                                        <option value="1">incortem</option>
                                        <option value="2">incortem</option>
                                        <option value="3">incortem</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control md-round" placeholder="Total gross weight (KG)">
                                </div>
                            </div>
                            <textarea class="md-round" placeholder="Message"></textarea>
                            <button type="submit" class="btn-primary md-round text-center text-uppercase">SUBMIT MESSAGE</button>
                        </fieldset>
                    </form>
                </div>
                quote block of the page end 
            </div>
            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                 Contact list of the page 
                <ul class="list-unstyled contact-list">
                    <li>
                        <span class="icon"><i class="ti-alarm-clock"></i></span>
                        <div class="txt-holder">
                            <h3 class="text-uppercase">OPENING HOURS</h3>
                            <time datetime="2017-02-03 20:00">Monday - Friday 09.00 - 18.00</time>
                            <time datetime="2017-02-03 09:00">Saturday 09.00 - 14.00</time>
                        </div>
                    </li>
                    <li>
                        <span class="icon"><i class="ti-headphone-alt"></i></span>
                        <div class="txt-holder">
                            <h3 class="text-uppercase">CALL US ANYTIME</h3>
                            <a href="#" class="tel">1-1349-334-6823</a>
                            <a href="#" class="tel">2-8218-334-7913</a>
                        </div>
                    </li>
                    <li>
                        <span class="icon"><i class="ti-email"></i></span>
                        <div class="txt-holder">
                            <h3 class="text-uppercase">EMAIL US</h3>
                            <a href="#" class="mail">info@kallyas-cargo.com</a>
                            <a href="#" class="mail">office@kallyas-cargo.com</a>
                        </div>
                    </li>
                </ul>
                 Contact list of the page end 
            </div>
        </div>
    </div>-->
    <!-- Contact sec of the page end -->
    <!-- Testimonail sec of the page -->
<!--    <div class="testimonail-sec bg-full overlay" style="background-image: url({{ asset('public/frontend/images/img11.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                     Testimonail Slider of the page 
                    <div class="testimonail-slider">
                         Slide of the page 
                        <blockquote class="slide text-center">
                            <div class="img-holder round"><img src="{{ asset('public/frontend/images/img12.jpg') }}" alt="image description" class="img-responsive"></div>
                            <q>“ Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna is <br class="hidden-sm">nostrud exerco laboquip exmmodo consequat. Duis arud exercitatioute irure dolore eu fugiat nulla pariatur ”</q>
                            <cite>
                                <strong>Frank Martin</strong>
                                <span>Transporter</span>
                            </cite>
                        </blockquote>
                         Slide of the page end 
                         Slide of the page 
                        <blockquote class="slide text-center">
                            <div class="img-holder round"><img src="{{ asset('public/frontend/images/img23.jpg') }}" alt="image description" class="img-responsive"></div>
                            <q>“ Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna is <br class="hidden-sm">nostrud exerco laboquip exmmodo consequat. Duis arud exercitatioute irure dolore eu fugiat nulla pariatur ”</q>
                            <cite>
                                <strong>Clara Sonata</strong>
                                <span>Transporter</span>
                            </cite>
                        </blockquote>
                         Slide of the page end 
                         Slide of the page 
                        <blockquote class="slide text-center">
                            <div class="img-holder round"><img src="{{ asset('public/frontend/images/img28.jpg') }}" alt="image description" class="img-responsive"></div>
                            <q>“ Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna is <br class="hidden-sm">nostrud exerco laboquip exmmodo consequat. Duis arud exercitatioute irure dolore eu fugiat nulla pariatur ”</q>
                            <cite>
                                <strong>Dom Dominate</strong>
                                <span>Transporter</span>
                            </cite>
                        </blockquote>
                         Slide of the page end 
                    </div>
                     Testimonail Slider of the page end 
                </div>
            </div>
        </div>
    </div>-->
    <!-- Testimonail sec of the page end -->
    <!-- client sec of the page -->
<!--    <div class="client-sec container">
        <div class="row">
            <div class="col-xs-12 line-box">
                 client logo of the page 
                <ul class="list-unstyled client-logo line">
                    <li><a href="#"><img src="{{ asset('public/frontend/images/logo01.png') }}" alt="logo" class="img-responsive"></a></li>
                    <li><a href="#"><img src="{{ asset('public/frontend/images/logo02.png') }}" alt="logo" class="img-responsive"></a></li>
                    <li><a href="#"><img src="{{ asset('public/frontend/images/logo03.png') }}" alt="logo" class="img-responsive"></a></li>
                    <li><a href="#"><img src="{{ asset('public/frontend/images/logo04.png') }}" alt="logo" class="img-responsive"></a></li>
                    <li><a href="#"><img src="{{ asset('public/frontend/images/logo05.png') }}" alt="logo" class="img-responsive"></a></li>
                    <li><a href="#"><img src="{{ asset('public/frontend/images/logo01.png') }}" alt="logo" class="img-responsive"></a></li>
                </ul>
                 client logo of the page end 
            </div>
        </div>
    </div>-->
    <!-- client sec of the page end -->
</main>
<!-- main of the page end -->
@endsection