   
    <script type="text/javascript" src="{{asset('/') }}frontend/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('/') }}frontend/js/jquery.sticky.js"></script>  
    <script type="text/javascript" src="{{asset('/') }}frontend/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{asset('/') }}frontend/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('/') }}frontend/js/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="{{asset('/') }}frontend/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="{{asset('/') }}frontend/js/jquery.actual.min.js"></script>
    <script type="text/javascript" src="{{asset('/') }}frontend/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{asset('/') }}frontend/js/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('/') }}frontend/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="{{asset('/') }}frontend/js/jquery.elevateZoom.min.js"></script>
    <script src="{{asset('/') }}frontend/js/fancybox/source/jquery.fancybox.pack.js"></script>
    <script src="{{asset('/') }}frontend/js/fancybox/source/helpers/jquery.fancybox-media.js"></script>
    <script src="{{asset('/') }}frontend/js/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
    <script src="{{asset('/') }}frontend/js/arcticmodal/jquery.arcticmodal.js"></script>
    <script type="text/javascript" src="{{asset('/') }}frontend/js/main.js"></script>



    <script>

        (function($) {

            "use strict";

            $(document).ready(function() {

                /*  [ Filter by price ]

                - - - - - - - - - - - - - - - - - - - - */

                $('#slider-range').slider({

                    range: true,

                    min: 0,

                    max: 500,

                    values: [0, 300],

                    slide: function (event, ui) {

                        $('#amount-left').text(ui.values[0] );
                        $('#amount-right').text(ui.values[1] );

                    }

                });

                $('#amount-left').text($('#slider-range').slider('values', 0));

                $('#amount-right').text($('#slider-range').slider('values', 1));
            }); 

        })(jQuery);

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
       <script>
           toastr.error('{{ $error }}');
       </script>
    @endforeach
@endif

{!! Toastr::message() !!}