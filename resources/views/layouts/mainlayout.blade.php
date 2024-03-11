<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong|Sofia&effect=neon|outline|emboss|shadow-multiple">

    <!-- start title bar -->
    @yield('title_bar')
    <!-- end title bar -->
    
   <!-- start css -->
    @include('layouts.css')
   <!-- end css -->

 </head>
 
    <div class="page">

        <!-- start header -->
        @include('layouts.header')
        <!-- end header -->

        <!-- start page container -->
        @yield('content')
        <!-- end page container -->
        </div>

            {{-- /// contact // --}}
            <div class="contact-container"  style="z-index: 5;" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
                <a href="tel:+91 8178268047" class="icon" style="background-color: #00597F;"><i class="fas fa-phone"></i> Call Us</a>
                <a href="https://wa.me/+918178268047" class="icon" style="background-color: #006023;"><i class="fab fa-whatsapp"></i> Send us a message</a>
            </div>                       
            {{-- /// contact--end // --}}
            {{-- back to top  --}}
            <a href="#top" class="back-to-top"><i class="fas fa-arrow-up"></i></a>
            {{-- back to top end --}}

        <!-- start footer -->
        @include('layouts.footer')
        <!-- end footer -->
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
        duration: 1000
        });
    </script>

    <!-- start js -->
    @include('layouts.js')
    <!-- end js -->

</body>
</html>
