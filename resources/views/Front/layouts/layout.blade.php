<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link href="{{asset('front/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
      <link href="{{asset('front/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="{{asset('front/assets/css/flaticon.css')}}" />
      <link rel="stylesheet" href="{{asset('front/assets/css/boxicons.min.css')}}" />
      <link rel="stylesheet" href="{{asset('front/assets/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="{{asset('front/assets/css/owl.carousel.min.css')}}">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
      <title>{{ config('app.name') }}</title>
	  <script src="//code.tidio.co/szawjrrkfwfr2ddr3lxsjjeira6xfuk6.js" async></script>
   </head>
   <body>


@include('Front.layouts.header')
@yield('content')
@include('Front.layouts.footer')
	  
      <!-- footer section start here -->
      <script src="{{asset('front/assets/js/jquery.min.js')}}"></script>
      <script src="{{asset('front/assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('front/assets/js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('front/assets/js/custom.js')}}"></script>
      <script src="{{asset('front/assets/js/developer.js')}}"></script>
      <script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>
	  <script src="{{asset('front/assets/js/jquery.validation.js')}}"></script>
	  	  
	  <script>
		
		$('#remember-1').change(function() {
			$(this).is(':checked') ? $('#test-input').attr('type', 'text') : $('#test-input').attr('type', 'password');
		});
	  </script>
   </body>
</html>
</html>