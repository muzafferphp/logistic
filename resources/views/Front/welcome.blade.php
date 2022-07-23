@extends('Front.layouts.layout')
@section('content') 
      <!-- banner section start here -->
      <div class="banner-section">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-7">
                  <div class="banner_text">
                     <span>WELCOME TO EZIO</span>
                     <h1>
                        Make Faster Delivery In <br />
                        A Quick Solution
                     </h1>
                     <p>Join the millions getting bargain deals on shipping cars furniture freight and more</p>
                     <div class="two_btn">
                        <a href="">Get A Quote</a>
                        <a href="">Contact Us</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-5">
                  <div class="banner_form">
                     <h2>Quick Quote Price</h2>
                     <p>Let's start a price quote on transport</p>
                     <form>
                        <div class="mb-3">
                           <label for="Select" class="form-label">Transportation Route</label>
                           <select id="Select" class="form-select">
                              <option>90 K. M.</option>
                              <option>91 K. M.</option>
                              <option>92 K. M.</option>
                              <option>93 K. M.</option>
                           </select>
                        </div>
                        <div class="mb-3 mt-4">
                           <label for="Select" class="form-label">Dispatch Country</label>
                           <select id="Select" class="form-select">
                              <option>London</option>
                              <option>91 K. M.</option>
                              <option>92 K. M.</option>
                              <option>93 K. M.</option>
                           </select>
                        </div>
                        <div class="mb-3 mt-4">
                           <label for="Select" class="form-label">Dispatch Country</label>
                           <select id="Select" class="form-select">
                              <option>Australia</option>
                              <option>91 K. M.</option>
                              <option>92 K. M.</option>
                              <option>93 K. M.</option>
                           </select>
                        </div>
                        <button type="submit" class="btn btn-primary">apply now</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end here -->
      <!-- about us section start here -->
      <section class="about-us-area">
         <div class="container">
            <div class="row ">
               <div class="col-lg-6">
                  <div class="about-img">
                     <img src="{{asset('front/assets/images/about-img.jpg')}}" alt="Image" class="w-100" />
                     <div class="experience">
                        <div class="">
                           <h2>20 Years Of Experience</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="about-content">
                     <span class="top-title">About Us</span>
                     <h2>Modern And Trusted Logistics Company</h2>
                     <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident possimus quae adipisci quisquam distinctio nemo, tempora corrupti expedita nihil. Reiciendis impedit voluptates temporibus aut consectetur,
                        vitae culpa et consectetur adipisicing elit. Provident possimus quae.
                     </p>
                     <ul>
                        <li>
                           <i class="bx bx-check"></i>
                           24/7 Business Support
                        </li>
                        <li>
                           <i class="bx bx-check"></i>
                           Secure Transportation
                        </li>
                        <li>
                           <i class="bx bx-check"></i>
                           World Wide Most Effective Business
                        </li>
                        <li>
                           <i class="bx bx-check"></i>
                           Easy And Quick Problem Analysis
                        </li>
                     </ul>
                     <a href="#" class="default-btn">
                     <span>About Us</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about section end here -->
      <!-- services section start here -->
      <section class="service_section">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="services_headingtext">
                     <span>our services</span>
                     <h2>What do we transport?</h2>
                     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit porro, aliquid reprehenderit iusto inventore sint <br>beatae ipsum impedit in sit numquam illum distinctio sequi quisquam et hic tempore</p>
                  </div>
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-lg-4 mt-4">
                  <div class="services_box">
                     <img src="{{asset('front/assets/images/truck.svg')}}" alt="truck">
                     <h3>Full Truck Loads</h3>
                     <p>Book your FTL’s online in a few seconds, and benefit from transparent dynamic pricing based on real time demand.</p>
                  </div>
               </div>
               <div class="col-lg-4 mt-4">
                  <div class="services_box">
                     <img src="{{asset('front/assets/images/recurring.svg')}}" alt="recurring">
                     <h3>Recurring</h3>
                     <p>Book your FTL’s online in a few seconds, and benefit from transparent dynamic pricing based on real time demand.</p>
                  </div>
               </div>
               <div class="col-lg-4 mt-4">
                  <div class="services_box">
                     <img src="{{asset('front/assets/images/pallets.svg')}}" alt="truck">
                     <h3>Pallets</h3>
                     <p>Book your FTL’s online in a few seconds, and benefit from transparent dynamic pricing based on real time demand.</p>
                  </div>
               </div>
               <div class="col-lg-4 mt-4">
                  <div class="services_box">
                     <img src="{{asset('front/assets/images/spot.svg')}}" alt="truck">
                     <h3>Spot</h3>
                     <p>Book your FTL’s online in a few seconds, and benefit from transparent dynamic pricing based on real time demand.</p>
                  </div>
               </div>
               <div class="col-lg-4 mt-4">
                  <div class="services_box">
                     <img src="{{asset('front/assets/images/dry.svg')}}" alt="truck">
                     <h3>Dry & Refrigerated freight</h3>
                     <p>Book your FTL’s online in a few seconds, and benefit from transparent dynamic pricing based on real time demand.</p>
                  </div>
               </div>
               <div class="services_button">
                  <a href="#" class="default-btn">
                  <span>Our Services</span>
                  </a>
               </div>
            </div>
         </div>
         </div>
      </section>
      <!-- services section end here -->
      <!-- testimonial section start here -->
      <section class="testimonials-area-two ">
         <div class="container">
         <div class="section-title">
            <span>Our Clients</span>
            <h2>Let's Know About All Of Our Client Says</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et<br> dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
         </div>
         <div class="owl-carousel owl-theme">
            <div class="item">
               <div class="single-testimonials-two">
                  <img src="{{asset('front/assets/images/testimonials-1.jpg')}}" alt="Image">
                  <h3>Denial Peer</h3>
                  <span>Marketer</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                  <ul>
                     <li>
                        <i class="bx bxs-star"></i>
                     </li>
                     <li>
                        <i class="bx bxs-star"></i>
                     </li>
                     <li>
                        <i class="bx bxs-star"></i>
                     </li>
                     <li>
                        <i class="bx bxs-star"></i>
                     </li>
                     <li>
                        <i class="bx bxs-star"></i>
                     </li>
                  </ul>
                  <div class="quotes">
                     <i class="flaticon-left-quotes-sign"></i>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="single-testimonials-two">
                  <img src="{{asset('front/assets/images/testimonials-3.jpg')}}" alt="Image">
                  <h3>Jecty Smith</h3>
                  <span>UI UX Designer</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                  <ul>
                     <li>
                        <i class="bx bxs-star"></i>
                     </li>
                     <li>
                        <i class="bx bxs-star"></i>
                     </li>
                     <li>
                        <i class="bx bxs-star"></i>
                     </li>
                     <li>
                        <i class="bx bxs-star"></i>
                     </li>
                     <li>
                        <i class="bx bxs-star"></i>
                     </li>
                  </ul>
                  <div class="quotes">
                     <i class="flaticon-left-quotes-sign"></i>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="single-testimonials-two">
                  <img src="{{asset('front/assets/images/testimonials-3.jpg')}}" alt="Image">
                  <h3>Jecty Smith</h3>
                  <span>UI UX Designer</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                  <ul>
                     <li>
                        <i class="bx bxs-star"></i>
                     </li>
                     <li>
                        <i class="bx bxs-star"></i>
                     </li>
                     <li>
                        <i class="bx bxs-star"></i>
                     </li>
                     <li>
                        <i class="bx bxs-star"></i>
                     </li>
                     <li>
                        <i class="bx bxs-star"></i>
                     </li>
                  </ul>
                  <div class="quotes">
                     <i class="flaticon-left-quotes-sign"></i>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- testimonial section end here -->
      <!-- team section start here -->
      <section class="team-section">
         <div class="container">
            <div class="section-title">
               <span>Our Team</span>
               <h2>Need Immediate Support Or Any Help?<br> Contact Our Team</h2>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <div class="single-team-member">
                     <img src="{{asset('front/assets/images/team-1.jpg')}}" alt="Image">
                     <div class="team-content">
                        <span>Cargo Department</span>
                        <h3>David Cunningham</h3>
                        <div class="team-social">
                           <a href="#" class="control">
                           <i class="bx bx-share-alt"></i>
                           </a>
                           <ul>
                              <li>
                                 <a href="#">
                                 <i class="bx bxl-twitter"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="bx bxl-instagram"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="bx bxl-facebook"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="bx bxl-linkedin-square"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="single-team-member">
                     <img src="{{asset('front/assets/images/team-2.jpg')}}" alt="Image">
                     <div class="team-content">
                        <span>Shipment Department.</span>
                        <h3>Michele A. Murphy</h3>
                        <div class="team-social">
                           <a href="#" class="control">
                           <i class="bx bx-share-alt"></i>
                           </a>
                           <ul>
                              <li>
                                 <a href="#">
                                 <i class="bx bxl-twitter"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="bx bxl-instagram"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="bx bxl-facebook"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="bx bxl-linkedin-square"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                  <div class="single-team-member">
                     <img src="{{asset('front/assets/images/team-3.jpg')}}" alt="Image">
                     <div class="team-content">
                        <span>CEO</span>
                        <h3>Margert Scott</h3>
                        <div class="team-social">
                           <a href="#" class="control">
                           <i class="bx bx-share-alt"></i>
                           </a>
                           <ul>
                              <li>
                                 <a href="#">
                                 <i class="bx bxl-twitter"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="bx bxl-instagram"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="bx bxl-facebook"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="bx bxl-linkedin-square"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- team section end here -->
      <!-- blog section start here -->
      <section class="blog-area">
         <div class="container">
            <div class="section-title">
               <span>Our Blog</span>
               <h2>Make A Relation With Our Blog Article<br> And Meet With Our Blogs</h2>
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit porro, aliquid reprehenderit iusto inventore<br> sint beatae ipsum impedit in sit numquam illum distinctio sequi quisquam et hic tempore</p>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <div class="single-blog-post">
                     <div class="post-image">
                        <a href="#">
                        <img src="{{asset('front/assets/images/blog-1.jpg')}}" alt="image">
                        </a>
                     </div>
                     <div class="blog-content">
                        <div class="date">
                           <i class="bx bx-calendar"></i>
                           <span>06 October 2019</span>
                        </div>
                        <h3>
                           <a href="#">New Cargo Shipment Is Open On The Global Market</a>
                        </h3>
                        <p>Luis ipsum suspendisse ultrices. Risus commodo viverra maecenas accumsan lacus vel facilisis ultrices Risus ipsum.</p>
                        <a href="blog-details.html" class="default-btn">
                        <span>Read More</span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="single-blog-post">
                     <div class="post-image">
                        <a href="#">
                        <img src="{{asset('front/assets/images/blog-2.jpg')}}" alt="image">
                        </a>
                     </div>
                     <div class="blog-content">
                        <div class="date">
                           <i class="bx bx-calendar"></i>
                           <span>07 October 2019</span>
                        </div>
                        <h3>
                           <a href="#">Transportation Charged Has Removed Form This Months</a>
                        </h3>
                        <p>Luis ipsum suspendisse ultrices. Risus commodo viverra maecenas accumsan lacus vel facilisis ultrices Risus ipsum.</p>
                        <a href="blog-details.html" class="default-btn">
                        <span>Read More</span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                  <div class="single-blog-post">
                     <div class="post-image">
                        <a href="#">
                        <img src="{{asset('front/assets/images/blog-3.jpg')}}" alt="image">
                        </a>
                     </div>
                     <div class="blog-content">
                        <div class="date">
                           <i class="bx bx-calendar"></i>
                           <span>08 October 2019</span>
                        </div>
                        <h3>
                           <a href="#">Marketing Policy Added To The Logistic Service</a>
                        </h3>
                        <p>Luis ipsum suspendisse ultrices. Risus commodo viverra maecenas accumsan lacus vel facilisis ultrices Risus ipsum.</p>
                        <a href="blog-details.html" class="default-btn">
                        <span>Read More</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- blog section end here -->
@endsection