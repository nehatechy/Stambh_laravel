/**
 * STAMBHA Main JS - Logic for slick-slider, AOS, counter animation and responsive nav
 */
window.addEventListener("load", () => {
            document.getElementById("page").classList.add("loaded");
        });
        
$(document).ready(function() {
    

    // Initialize Hero Slick Slider
    if ($('.hero-slider-container').length) {
        $('.hero-slider-container').slick({
            dots: true,
            arrows: true,
            infinite: true,
            speed: 1000,
            fade: true,
            cssEase: 'linear',
            autoplay: false,
            autoplaySpeed: 6000,
            prevArrow: $('.hero-arrow-prev'),
            nextArrow: $('.hero-arrow-next'),
            appendDots: $('.hero-slider-dots-container'),
            pauseOnHover: false,
            pauseOnFocus: false
        });
    }

    // Sticky Navbar Scroll Effect
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('.glass-navbar').addClass('py-2 shadow-sm').removeClass('py-3');
        } else {
            $('.glass-navbar').addClass('py-3').removeClass('py-2 shadow-sm');
        }
    });

    // Mobile Navigation Menu Toggle
    $('#mobile-nav-toggle').click(function() {
        var $icon = $(this).find('.material-symbols-outlined');
        $('.mobile-nav-panel').toggleClass('active');
        
        if ($('.mobile-nav-panel').hasClass('active')) {
            $icon.text('close');
        } else {
            $icon.text('menu');
        }
    });

    // Mobile Dropdown Services Toggle
    $('#mobile-services-toggle').click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        var $this = $(this);
        $this.toggleClass('active');
        var isExpanded = $this.hasClass('active');
        $this.attr('aria-expanded', isExpanded);
        $('#mobile-services-menu').slideToggle(300);
    });

    // Close mobile nav when clicking on link
    $('.mobile-nav-panel a').click(function() {
        $('.mobile-nav-panel').removeClass('active');
        $('#mobile-nav-toggle').find('.material-symbols-outlined').text('menu');
    });

    // Statistics Counter Scroll Animation using IntersectionObserver
    const counterElements = document.querySelectorAll('.stat-counter');
    
    const animateCounter = (el) => {
        const target = parseInt(el.getAttribute('data-target'), 10);
        const suffix = el.getAttribute('data-suffix') || '';
        const duration = 2000; // 2 seconds
        const stepTime = Math.abs(Math.floor(duration / target));
        let current = 0;
        
        // Ensure stepTime is at least 15ms for smooth rendering
        const actualStepTime = Math.max(stepTime, 15);
        const increment = target / (duration / actualStepTime);
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                el.innerText = target + suffix;
                clearInterval(timer);
            } else {
                el.innerText = Math.floor(current) + suffix;
            }
        }, actualStepTime);
    };

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target); // Animates only once
                }
            });
        }, { threshold: 0.5 });

        counterElements.forEach(el => observer.observe(el));
    } else {
        // Fallback for older browsers
        counterElements.forEach(el => {
            const target = el.getAttribute('data-target');
            const suffix = el.getAttribute('data-suffix') || '';
            el.innerText = target + suffix;
        });
    }

    // Project Category Filtering
    if ($('.filter-btn').length) {
        $('.filter-btn').click(function() {
            $('.filter-btn').removeClass('active');
            $(this).addClass('active');
            const filterValue = $(this).attr('data-filter');
            
            if (filterValue === 'all') {
                $('.project-card-wrapper').fadeIn(400);
            } else {
                $('.project-card-wrapper').each(function() {
                    const category = $(this).find('.portfolio-item').attr('data-category') || $(this).attr('data-category');
                    if (category === filterValue) {
                        $(this).fadeIn(400);
                    } else {
                        $(this).fadeOut(400);
                    }
                });
            }
        });
    }
    
    // ============= mobile slider add
    
    function mobileOnlySlider() {
        if (window.innerWidth < 576) {
            if (!$(".mobile_slider").hasClass("slick-initialized")) {
                $(".mobile_slider").slick({
                    slidesToShow: 1,
                    arrows: false,
                    dots: true,
                    centerMode: true,
                    centerPadding: "0px",
                });
            }
        }
    
         else {
            if ($(".mobile_slider").hasClass("slick-initialized")) {
                $(".mobile_slider").slick("unslick");
            }
        }
    }
    
    $(document).ready(function () {
        mobileOnlySlider();
        $(window).on("resize", mobileOnlySlider);
    });
        



 
    // Init every card slider: auto-rotate only, no arrows/dots
    $('.card-slider').each(function(){
      $(this).slick({
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 2500 + (parseInt($(this).data('slider-id')) * 150), // slight stagger per card
        fade: true,
        infinite: true,
        speed: 600,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    });
 
    // Track which modal sliders have been initialized (slick needs visible container)
    $(document).on('shown.bs.modal', '.modal.full-modal', function () {
      var $slider = $(this).find('.modal-slider');
      if ($slider.length) {
        if (!$slider.hasClass('slick-initialized')) {
          $slider.slick({
            arrows: true,
            dots: true,
            autoplay: false,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: false
          });
        } else {
          $slider.slick('setPosition');
        }
      }
    });
 
  });

