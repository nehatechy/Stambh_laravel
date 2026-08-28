<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Stambha | Structural Integrity by Design')</title>
        <meta name="description" content="@yield('meta_description', 'Stambha provides expert structural engineering and architectural consultancy services built on integrity and safety.')">
        <meta name="robots" content="@yield('meta_robots', 'index, follow')">
        <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="48x48" type="image/x-icon">
        <link rel="canonical" href="{{ url()->current() }}">
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-K8ZR45J85Y"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-K8ZR45J85Y');
        </script>
       
        <!-- Bootstrap 5.3.3 CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous">
        <!-- Slick Slider CSS -->
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />

        <!-- Custom Tectonic Design Stylesheet -->
        <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
         @verbatim
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "ProfessionalService",
          "@id": "https://stambhaconsultants.com/#organization",
          "name": "Stambha Consultants",
          "alternateName": "Stambha Consultancy",
          "url": "https://stambhaconsultants.com",
          "logo": "https://stambhaconsultants.com/front/images/Main.svg",
          "image": "https://stambhaconsultants.com/front/images/Main.svg",
          "description": "Stambha Consultants is a structural engineering consultancy based in Jaipur, Rajasthan, delivering RCC structural design, steel structure design, foundation design and analysis, earthquake-resistant design, and structural audits and retrofitting for architects, real estate developers, and construction firms across Jaipur and Rajasthan.",
          "founder": {
            "@type": "Person",
            "name": "Neeraj Agarwal",
            "sameAs": "https://www.linkedin.com/in/neeraj-stambha-consultants/"
          },
          "telephone": "+91-9875803748",
          "email": "stambhaconsultants@gmail.com",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "157, Santosh Nagar, Nirman Nagar",
            "addressLocality": "Jaipur",
            "addressRegion": "Rajasthan",
            "postalCode": "302019",
            "addressCountry": "IN"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 26.8822838,
            "longitude": 75.7566761
          },
          "areaServed": [
            { "@type": "City", "name": "Jaipur" },
            { "@type": "State", "name": "Rajasthan" }
          ],
          "sameAs": [
            "https://www.linkedin.com/in/neeraj-stambha-consultants/"
          ]
        }
        </script>
        @endverbatim
    </head>

    <body>
        <!--<div id="page">-->
        @include('front.partials.header')
          @yield('content')
        @include('front.partials.footer')
         <!--</div>-->
 <!-- jQuery (Required for Slick Carousel) -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>

        <!-- Bootstrap 5.3.3 JS Bundle -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

        <!-- Slick Slider JS -->
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

           <script src="{{ asset('front/js/main.js') }}"></script>
    </body>
    </html>