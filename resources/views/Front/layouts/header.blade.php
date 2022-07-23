      <!-- header section start here -->
      <header class="header-area">
         <div class="top-header">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-8 col-md-7">
                     <ul class="header-left-content">
                        <li>
                           <i class="bx bx-home"></i>
                           Truganina 3029 Victoria 
                        </li>
                        <li>
                           <i class="bx bx-phone-call"></i>
                           <a href="tel:03 9989 3652">03 9989 3652</a>
                        </li>
                        <li>
                           <i class="bx bx-envelope"></i>
                           <a href="mailto:support@splyint.com">support@splyint.com</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-lg-4 col-md-5">
				  
                    <div class="header-right-content">
				
	
				
                        <ul class="button_sections">
						
							<div class="dropdown">
								<button class="dropbtn">Login</button>
								<div class="dropdown-content">
								 <a href="{{route('login')}}"><span>User Login</span></a>
								  <a href="{{route('carrier.login')}}"><span>Carrier Login</span></a>
								
								</div>
							</div>
							
							<div class="dropdown">
								<button class="dropbtn1">Register</button>
								<div class="dropdown-content">
								 <a href="{{route('user.register')}}"><span>User Register</span></a>
								  <a href="{{route('carrier.register')}}"><span>Carrier Register</span></a>
								
								</div>
							</div>
                           <!-- <li>
                              <a href="{{route('login')}}"><span>Login</span></a>
							  
                           </li> -->
                           <li>
                              <a href="#" class="start_shipping"><span>Start Shipping</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="navbar-section">
            <div class="container">
               <nav class="navbar navbar-expand-lg">
                  <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('front/assets/images/splyint-logo.png')}}" title="logo" alt="logo" /></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"><i class='bx bx-menu'></i></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarText">
                     <ul class="navbar-nav m-auto">
					 <!--
                        <li class="nav-item">
                           <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Blogs</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Contact Us</a>
                        </li>
						-->
                     </ul>
                     <span class="navbar-text">
                     <a href="#"> Get A Quote</a>
                     </span>
                  </div>
               </nav>
            </div>
         </div>
      </header>
      <!-- header section end here -->
	  
	  <style>
/* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn1 {
  background-color: #0383FF;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>