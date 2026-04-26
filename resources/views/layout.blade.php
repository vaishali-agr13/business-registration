@include('header')


<body>

<div class="page-wrapper position-relative">

    <!-- 🔥 Video Background Section -->
    <section class="position-relative min-vh-100">

        <!-- Video -->
        <video 
            class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
            autoplay muted loop playsinline
            style="z-index:0;">
            
            <source src="{{ asset('assets/images/backgrounds/banner-video.mp4') }}" type="video/mp4">
        </video>

        <!-- Dark Overlay -->
        <div 
            class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"
            style="z-index:1;">
        </div>

        <!-- 🔥 Content (Login / Other Pages) -->
        <div 
            class="position-relative" width:100%;
            style="z-index:2;">
            
            @yield('content')

        </div>

    </section>

    

</div>


<!-- JS -->
<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/libs/owl.carousel/dist/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/libs/aos-master/dist/aos.js')}}"></script>

<!-- Icons -->
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

@stack('scripts')

</body>
</html>