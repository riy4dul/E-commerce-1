
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ebazzarbd</title>
    @include('frontend/layout/headerScript')
    <link rel="icon" href="{{asset('frontend/images/favicion.png')}}" type="image/gif" sizes="16x16">
</head>
<body class="cms-index-index index-opt-1">

    <div class="wrapper">


        <!-- HEADER -->
		 @include('frontend/layout/header')
        <!-- end HEADER -->        

        <!-- MAIN -->
        @yield('content')

        <!-- end MAIN -->

        <!-- FOOTER -->
        @include('frontend/layout/footer')
        <!-- end FOOTER -->        
        
        <!--back-to-top  -->
        <a href="#" class="back-to-top">
            <i aria-hidden="true" class="fa fa-angle-up"></i>
        </a>
        
    </div>

    @include('frontend/layout/footerScript')

    
    
</body>
</html>