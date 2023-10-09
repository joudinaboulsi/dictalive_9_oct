
(function ($) {

  "use strict";
  // Get Device width
  let device_width = window.innerWidth;
   // Automatically initialize lazy loading for elements with the "lazyload" class
   document.addEventListener("DOMContentLoaded", function () {
    // Initialize lazy loading for elements with the "lazyload" class
    $("lazyload").lazyload({
      effect : "fadeIn"
  });
  });

  document.addEventListener("DOMContentLoaded", function () {
    const scrollTrigger = document.querySelector(".scroll-trigger");
    const textContainer = document.querySelector(".text-container");
  });

  document.addEventListener("DOMContentLoaded", function () {
    const video = document.querySelector("video");
    const content = document.querySelector(".award__text-8");

    // Check if a video element exists in the DOM
    if (video) {
      video.addEventListener("ended", function () {
        content.style.opacity = 1; // Show the content
        video.style.display = "none"; // Hide the video
      });
    }

    // Adjust the parallax effect based on scroll position
    window.addEventListener("scroll", function () {
      const scroll = window.scrollY;
      const parallax = scroll * 0.5; // Adjust the parallax speed as needed
      if (content) {
        content.style.transform = `translate(-50%, -50%) translateY(-${parallax}px)`;
      }
    });
  });


  document.addEventListener("DOMContentLoaded", function () {
    const textElement = document.querySelector(".scroll-text");

    window.addEventListener("scroll", function () {
      // Calculate the horizontal translation based on the scroll position
      const translateX = window.scrollY; // You can adjust the speed by multiplying or dividing

      // Apply the horizontal translation to the text element while keeping top centered
      if (textElement) {
        textElement.style.left = `calc(50% + ${translateX}px)`;
      }
    });
  });



  /////////////////////////////////////////////////////
  // 00. Preloader
  $(document).ready(function () {
    $('.preloader').hide();
  });

  /////////////////////////////////////////////////////

  // 07. Data backgrond
  $("[data-background").each(function () {
    $(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
  });



  /////////////////////////////////////////////////////
  // 01. Cursor Animations

  // Home Page Client Cursor
  var client_cursor = document.getElementById("client_cursor");

  // Team Page Team Cursor
  var team_cursor = document.getElementById("team_cursor");

  // Portfolio  Cursor
  var portf_cursor_6 = document.getElementById("portf_cursor_6");

  // Featured  Cursor
  var featured_cursor = document.getElementById("featured_cursor");

  var portfolio4_cursor = document.getElementById("portfolio4_cursor");

  function mousemoveHandler(e) {
    try {
      const target = e.target;

      let tl = gsap.timeline({
        defaults: {
          x: e.clientX,
          y: e.clientY,
        }
      })
      let t2 = gsap.timeline({
        defaults: {
          x: e.clientX,
          y: e.clientY,
        }
      })

      // Home Page Client Cursor
      if (target.closest(".testimonial__img")) {
        tl.to(client_cursor, {
          opacity: 1,
          ease: "power4.out"
        }, "-=0.3");
      }
      else {
        t2.to(client_cursor, {
          opacity: 0,
          ease: "power4.out"
        }, "-=0.3");
      }

      // Team Page Team Cursor
      if (target.closest(".team__slider")) {
        tl.to(team_cursor, {
          opacity: 1,
          ease: "power4.out"
        }, "-=0.3");
      }
      else {
        t2.to(team_cursor, {
          opacity: 0,
          ease: "power4.out"
        }, "-=0.3");
      }

      // Portfolio Cursor
      if (target.closest(".portfolio__item-6")) {
        tl.to(portf_cursor_6, {
          opacity: 1,
          ease: "power4.out"
        }, "-=0.3");
      }
      else {
        t2.to(portf_cursor_6, {
          opacity: 0,
          ease: "power4.out"
        }, "-=0.3");
      }
      // Portfolio Cursor
      if (target.closest(".portfolio__item-6")) {
        tl.to(portf_cursor_6, {
          opacity: 1,
          ease: "power4.out"
        }, "-=0.3");
      }
      else {
        t2.to(portf_cursor_6, {
          opacity: 0,
          ease: "power4.out"
        }, "-=0.3");
      }

      // featured  Cursor
      if (target.closest(".portfolio__slider-3")) {
        tl.to(featured_cursor, {
          opacity: 1,
          ease: "power4.out"
        }, "-=0.3");
      }
      else {
        t2.to(featured_cursor, {
          opacity: 0,
          ease: "power4.out"
        }, "-=0.3");
      }

      // featured  Cursor
      if (target.closest(".portfolio__area-5")) {
        tl.to(portfolio4_cursor, {
          opacity: 1,
          ease: "power4.out"
        }, "-=0.3");
      }
      else {
        t2.to(portfolio4_cursor, {
          opacity: 0,
          ease: "power4.out"
        }, "-=0.3");
      }

      // Main Cursor Moving 
      tl.to(".cursor1", {
        ease: "power2.out"
      })
        .to(".cursor2", {
          ease: "power2.out"
        }, "-=0.4")

    } catch (error) {
      console.log(error)
    }

  }
  document.addEventListener("mousemove", mousemoveHandler);
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 02. Offcanvas 
  $("#open_offcanvas").click(function () {
    $('.offcanvas__area').css('opacity', '1');
    $('.offcanvas__area').css('visibility', 'visible');
  });
  $("#close_offcanvas").click(function () {
    $('.offcanvas__area').css('opacity', '0');
    $('.offcanvas__area').css('visibility', 'hidden');
  });


  /////////////////////////////////////////////////////*
  $(document).ready(function () {




    const offcanvasArea = $('.offcanvas__area');

    function isPageEnd() {
      return window.innerHeight + window.scrollY >= document.body.offsetHeight - 500;
    }

    function openOffcanvas() {
      setTimeout(function () {
        offcanvasArea.css('opacity', '1');
        offcanvasArea.css('visibility', 'visible');
      }, 1000);

    }

    function handleScroll() {
      if (isPageEnd()) {

        openOffcanvas();
        // You can remove the scroll event listener if you only want the offcanvas to open once
        $(window).off('scroll', handleScroll);
      }
    }

    // Attach the scroll event listener
    $(window).on('scroll', handleScroll);
  });

  // 02. at end of the page open the modal
  $("#open_offcanvas").click(function () {
    $('.offcanvas__area').css('opacity', '1');
    $('.offcanvas__area').css('visibility', 'visible');
  });
  $("#close_offcanvas").click(function () {
    $('.offcanvas__area').css('opacity', '0');
    $('.offcanvas__area').css('visibility', 'hidden');
  });
  /////////////////////////////////////////////////////
  $("#open_offcanvas").click(function () {
    $('.offcanvas__area').css('opacity', '1');
    $('.offcanvas__area').css('visibility', 'visible');
  });
  $("#close_offcanvas").click(function () {
    $('.offcanvas__area').css('opacity', '0');
    $('.offcanvas__area').css('visibility', 'hidden');
  });
  /////////////////////////////////////////////////////
  // 03. Scroll Top
  let scroll_top = document.getElementById("scroll_top");
  if (scroll_top) {
    window.onscroll = function () {
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        scroll_top.style.display = "block";
      } else {
        scroll_top.style.display = "none";
      }
    };

    scroll_top.addEventListener('click', function () {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    });
  }
  ////////////////////////////////////////////////

  /////////////////////////////////////////////////////
  // 06. Header 2
  let header_bg_2 = document.querySelector(".header__area-2");
  let header_logo = document.querySelector(".header-logo");

  if (header_bg_2) {
    window.onscroll = function () {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        header_bg_2.style.background = "#ffffff";
        header_logo.style.width = "160px"
        if (scroll_top) {
          scroll_top.style.display = "block";
        }
      } else {
        header_bg_2.style.background = "transparent";
        header_logo.style.width = "200px"
        if (scroll_top) {
          scroll_top.style.display = "none";
        }
      }
    };
  }
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 10. Roll Slider
  var roll_slider = new Swiper(".roll__slider", {
    loop: true,
    freemode: true,
    slidesPerView: 1,
    spaceBetween: 0,
    centeredSlides: true,
    allowTouchMove: false,
    speed: 2000,
    autoplay: {
      delay: 1,
      disableOnInteraction: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 3,
      },
      800: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
      1300: {
        slidesPerView: 5,
      },
      1900: {
        slidesPerView: 7,
      },
    },
  });

  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 15. Portfolio Slider 
  var total_portfolio_item = $('.portfolio__item-6').length;
  if (total_portfolio_item) {
    $('.portfolio__total').html(total_portfolio_item);
  }

  $(document).on('scroll', function () {
    $('.portfolio__item-6').each(function () {
      if ($(this).position().top <= $(document).scrollTop() && ($(this).position().top + $(this).outerHeight()) > $(document).scrollTop()) {

        var item_num = $(this).data('portfitem');
        $('.portfolio__current').html(item_num);
        $(this).addClass('active').siblings().removeClass('active');
      }
    });
  });
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 18. Button Hover Animation
  $('.btn-hover').on('mouseenter', function (e) {
    var x = e.pageX - $(this).offset().left;
    var y = e.pageY - $(this).offset().top;

    $(this).find('span').css({
      top: y,
      left: x
    });
  });

  $('.btn-hover').on('mouseout', function (e) {
    var x = e.pageX - $(this).offset().left;
    var y = e.pageY - $(this).offset().top;

    $(this).find('span').css({
      top: y,
      left: x
    });
  });
  /////////////////////////////////////////////////////


  // 19. Button Move Animation
  const all_btns = gsap.utils.toArray(".btn_wrapper");
  if (all_btns.length > 0) {
    var all_btn = gsap.utils.toArray(".btn_wrapper");
  }
  else {
    var all_btn = gsap.utils.toArray("#btn_wrapper");
  }
  const all_btn_cirlce = gsap.utils.toArray(".btn-item");
  all_btn.forEach((btn, i) => {
    $(btn).mousemove(function (e) {
      callParallax(e);
    });
    function callParallax(e) {
      parallaxIt(e, all_btn_cirlce[i], 80);
    }

    function parallaxIt(e, target, movement) {
      var $this = $(btn);
      var relX = e.pageX - $this.offset().left;
      var relY = e.pageY - $this.offset().top;

      gsap.to(target, 0.5, {
        x: ((relX - $this.width() / 2) / $this.width()) * movement,
        y: ((relY - $this.height() / 2) / $this.height()) * movement,
        ease: Power2.easeOut,
      });
    }
    $(btn).mouseleave(function (e) {
      gsap.to(all_btn_cirlce[i], 0.5, {
        x: 0,
        y: 0,
        ease: Power2.easeOut,
      });
    });
  });
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 20. Register GSAP
  gsap.registerPlugin(ScrollTrigger, ScrollSmoother, TweenMax, ScrollToPlugin);
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 21. Config GSAP
  gsap.config({
    nullTargetWarn: false,
  });
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 23. Choose Section
  if (device_width > 1200) {

    var workflow_section_3 = document.querySelector('.workflow__wrapper-3');
    if (workflow_section_3) {

      let duration = 1,
        sections = gsap.utils.toArray(".wf_panel"),
        sectionIncrement = duration / (sections.length - 1),
        tl = gsap.timeline({
          scrollTrigger: {
            trigger: ".workflow__wrapper-3",
            pin: true,
            scrub: 1,
            start: "top top",
            end: "+=5000"
          }
        });

      tl.to(sections, {
        xPercent: -100 * (sections.length - 1),
        duration: duration,
        ease: "none"
      });

      sections.forEach((section, index) => {
        let tween = gsap.from(section, {
          opacity: 0,
          scale: 0.6,
          duration: 0.5,
          force3D: true,
          paused: true
        });
        addSectionCallbacks(tl, {
          start: sectionIncrement * (index - 0.99),
          end: sectionIncrement * (index + 0.99),
          onEnter: () => tween.play(),
          onLeave: () => tween.reverse(),
          onEnterBack: () => tween.play(),
          onLeaveBack: () => tween.reverse()
        });
        index || tween.progress(1);
      });

      function addSectionCallbacks(timeline, { start, end, param, onEnter, onLeave, onEnterBack, onLeaveBack }) {
        let trackDirection = animation => {
          let onUpdate = animation.eventCallback("onUpdate"),
            prevTime = animation.time();
          animation.direction = animation.reversed() ? -1 : 1;
          animation.eventCallback("onUpdate", () => {
            let time = animation.time();
            if (prevTime !== time) {
              animation.direction = time < prevTime ? -1 : 1;
              prevTime = time;
            }
            onUpdate && onUpdate.call(animation);
          });
        },
          empty = v => v;
        timeline.direction || trackDirection(timeline);
        start >= 0 && timeline.add(() => ((timeline.direction < 0 ? onLeaveBack : onEnter) || empty)(param), start);
        end <= timeline.duration() && timeline.add(() => ((timeline.direction < 0 ? onEnterBack : onLeave) || empty)(param), end);
      }
    }
  }
  /////////////////////////////////////////////////////
  if (device_width > 1200) {

    var workflow_section_3 = document.querySelector('.workflow__wrapper-4');
    if (workflow_section_3) {

      let duration = 1,
        sections = gsap.utils.toArray(".wf_panel"),
        sectionIncrement = duration / (sections.length - 1),
        tl = gsap.timeline({
          scrollTrigger: {
            trigger: ".workflow__wrapper-4",
            pin: true,
            scrub: 1,
            start: "top top",
            end: "+=5000"
          }
        });

      tl.to(sections, {
        xPercent: -100 * (sections.length - 1),
        duration: duration,
        ease: "none"
      });

      sections.forEach((section, index) => {
        let tween = gsap.from(section, {
          opacity: 0,
          scale: 0.6,
          duration: 0.5,
          force3D: true,
          paused: true
        });
        addSectionCallbacks(tl, {
          start: sectionIncrement * (index - 0.99),
          end: sectionIncrement * (index + 0.99),
          onEnter: () => tween.play(),
          onLeave: () => tween.reverse(),
          onEnterBack: () => tween.play(),
          onLeaveBack: () => tween.reverse()
        });
        index || tween.progress(1);
      });

      function addSectionCallbacks(timeline, { start, end, param, onEnter, onLeave, onEnterBack, onLeaveBack }) {
        let trackDirection = animation => {
          let onUpdate = animation.eventCallback("onUpdate"),
            prevTime = animation.time();
          animation.direction = animation.reversed() ? -1 : 1;
          animation.eventCallback("onUpdate", () => {
            let time = animation.time();
            if (prevTime !== time) {
              animation.direction = time < prevTime ? -1 : 1;
              prevTime = time;
            }
            onUpdate && onUpdate.call(animation);
          });
        },
          empty = v => v;
        timeline.direction || trackDirection(timeline);
        start >= 0 && timeline.add(() => ((timeline.direction < 0 ? onLeaveBack : onEnter) || empty)(param), start);
        end <= timeline.duration() && timeline.add(() => ((timeline.direction < 0 ? onEnterBack : onLeave) || empty)(param), end);
      }
    }
  }

  /////////////////////////////////////////////////////
  if (device_width > 100) {
    const enableSmoothScroll = device_width >= 992;

    const smoother = ScrollSmoother.create({
      smooth: 1.35,
      effects: enableSmoothScroll,
      smoothTouch: false,
      normalizeScroll: false,
      ignoreMobileResize: true,
    });

    // Add a click event listener to all links with hash values
    document.querySelectorAll('a[href*="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        $('.offcanvas__area').css('opacity', '0');
        $('.offcanvas__area').css('visibility', 'hidden');
        const href = this.getAttribute('href');

        if (href.includes('#')) {
          const sectionId = href.split('#')[1];

          if (sectionId) {
            smoother.scrollTo(`#${sectionId}`, true, 'top top');
          }
        }
      });
    });

    // Check for a section ID in the URL and scroll to it
    const sectionId = window.location.hash.substring(1);
    if (sectionId) {
      // Scroll to the specified section
      smoother.scrollTo(`#${sectionId}`, true, 'top top');
    }


    ///////////////////////////////////////////////////// 
    const videoBtn = document.querySelector(".video-btn");
    if (videoBtn) {
      videoBtn.addEventListener("click", e => {
        smoother.scrollTo("#video-section", true, "center center");
      });
    }

    // Check if the element with class "service-btn" exists
    const serviceBtn = document.querySelector(".service-btn");
    if (serviceBtn) {
      serviceBtn.addEventListener("click", e => {
        smoother.scrollTo("#service-section", true, "center center");
      });
    }

    // 25. Title Animation
    let splitTitleLines = gsap.utils.toArray(".title-anim");

    splitTitleLines.forEach(splitTextLine => {
      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: splitTextLine,
          start: 'top 90%',
          end: 'bottom 60%',
          scrub: false,
          markers: false,
          toggleActions: 'play none none none'
        }
      });

      const itemSplitted = new SplitText(splitTextLine, { type: "words, lines" });
      gsap.set(splitTextLine, { perspective: 400 });
      itemSplitted.split({ type: "lines" })
      tl.from(itemSplitted.lines, { duration: 1, delay: 0.3, opacity: 0, rotationX: -80, force3D: true, transformOrigin: "top center -50", stagger: 0.1 });
    });
    /////////////////////////////////////////////////////



    /////////////////////////////////////////////////////
    // 27. Text Animation
    let splitTextLines = gsap.utils.toArray(".text-anim p");

    splitTextLines.forEach(splitTextLine => {
      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: splitTextLine,
          start: 'top 90%',
          duration: 2,
          end: 'bottom 60%',
          scrub: false,
          markers: false,
          toggleActions: 'play none none none'
        }
      });

      const itemSplitted = new SplitText(splitTextLine, { type: "lines" });
      gsap.set(splitTextLine, { perspective: 400 });
      itemSplitted.split({ type: "lines" })
      tl.from(itemSplitted.lines, { duration: 1, delay: 0.5, opacity: 0, rotationX: -80, force3D: true, transformOrigin: "top center -50", stagger: 0.1 });
    });
    /////////////////////////////////////////////////////


    /////////////////////////////////////////////////////
    // 28. Text Animation Top
    let text_anim_top = gsap.utils.toArray(".text-anim-top");

    text_anim_top.forEach(splitTextLine2 => {
      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: splitTextLine2,
          start: 'top 100%',
          toggleActions: 'play none play reset'
        }
      });

      const itemSplitted = new SplitText(splitTextLine2, { type: 'words' }),
        textNumWords = itemSplitted.words.length;

      gsap.delayedCall(0.05, function () {
        for (var i = 0; i < textNumWords; i++) {
          tl.from(itemSplitted.words[i], 1, { force3D: true, scale: Math.random() > 0.5 ? 0 : 2, opacity: 0 }, Math.random());
        }
      });
    });

  }
  jQuery(document).ready(function () {
    /////////////////////////////////////////////////////
    // 29. Offcanvas Menu
    $('.offcanvas__menu').meanmenu({
      meanScreenWidth: "5000",
      meanMenuContainer: '.offcanvas__menu-wrapper',
      meanMenuCloseSize: '36px',

    });
    // Add a click event handler to links with section IDs
    $('.offcanvas__menu-wrapper.mean-container .mean-nav>ul li a.contact').click(function (e) {
      // Prevent the default link behavior
      $('.offcanvas__area').css('opacity', '0');
      $('.offcanvas__area').css('visibility', 'hidden');

      const sectionId = $(this).attr('href').split('#')[1];
      if (sectionId) {
        // Animate scrolling to the specified section
        $('html, body').animate({
          scrollTop: $('#' + sectionId).offset().top
        }, 0);
      }
    });
    $('.menu-anim > li:has(ul) > a').click(function (e) {
      e.preventDefault(); // Prevent the default link behavior

      // Toggle the submenu visibility for this specific menu item
      const submenu = $(this).next('ul');
      submenu.slideToggle();

      // Find the associated mean-expand icon for this menu item
      const icon = $('.mean-expand');

      // Check if the icon has the 'mean-clicked' class
      const isClicked = icon.hasClass('mean-clicked');

      // Update the icon text and toggle the 'mean-clicked' class based on both conditions
      if (isClicked) {
        icon.text('+');
        icon.removeClass('mean-clicked');
      } else {
        icon.text('-');
        icon.addClass('mean-clicked');
      }
    });

    // Toggle the submenu visibility when clicking the mean-expand icon directly
    $('.mean-expand').click(function (e) {
      e.preventDefault(); // Prevent the default link behavior

      // Toggle the submenu visibility for this specific menu item

      // Check if the icon has the 'mean-clicked' class
      const isClicked = $(this).hasClass('mean-clicked');

      // Update the icon text and toggle the 'mean-clicked' class based on both conditions
      if (isClicked) {
        $(this).text('+');
        $(this).removeClass('mean-clicked');
      } else {
        $(this).text('-');
        $(this).addClass('mean-clicked');
      }
    });



    /////////////////////////////////////////////////////
  });


  /////////////////////////////////////////////////////
  // 32. Menu Text Animation
  document.querySelectorAll('.menu-anim > li > a').forEach(button => button.innerHTML = '<div class="menu-text"><span>' + button.textContent.split('').join('</span><span>') + '</span></div>');

  setTimeout(() => {
    var menu_text = document.querySelectorAll(".menu-text span")
    menu_text.forEach((item) => {
      var font_sizes = window.getComputedStyle(item, null);
      let font_size = font_sizes.getPropertyValue("font-size");
      let size_in_number = parseInt(font_size.replace("px", ""));
      let new_size = parseInt(size_in_number / 3)
      new_size = new_size + "px"
      if (item.innerHTML == " ") {
        item.style.width = new_size
      }
    })
  }, 1000)
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 33. Main Portfolio Sticky
  ScrollTrigger.create({
    trigger: ".portfolio__wrapper-6",
    start: "top top",
    end: "bottom bottom",
    pin: ".portfolio__title-wrap-6",
    pinSpacing: false,
  });
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 34. Hero 3 Animation
  const radio_buttons = document.querySelector("#video_check");
  const video_start = document.querySelector(".hero__area-3");

  if (radio_buttons) {
    radio_buttons.addEventListener('click', function () {
      let video = document.querySelector(".video-title")
      let videoClose = document.querySelector(".video-title.close-video-title")
      if (radio_buttons.checked) {
        document.querySelector(".wrapper").style.zIndex = "1";
        video.style.display = "none";
        videoClose.style.display = "block";
        video_start.classList.add('start-video');
        document.querySelector('.header__area-3').classList.add('bg-white');

      }
      else {
        document.querySelector(".wrapper").style.zIndex = "999";
        video.style.display = "block";
        videoClose.style.display = "none";
        video_start.classList.remove('start-video');
        document.querySelector('.header__area-3').classList.remove('bg-white');
      }
    });
  }
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 35. Home Page 2 Animations
  let tBanner = gsap.timeline()

  let heading_title_service = new SplitText(".service-title-3", { type: "chars" })
  let heading_char_service = heading_title_service.chars

  tBanner.from(heading_char_service, {
    rotate: 20,
    ease: "back.out",
    opacity: 0,
    duration: 2,
    stagger: 0.1
  })


  function startAnimation(entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // Element is in the viewport, start the animation
        let scrollBanner = gsap.timeline();

        let heading_title_scroll = new SplitText(entry.target, { type: "chars" });
        let heading_char_scroll = heading_title_scroll.chars;

        scrollBanner.from(heading_char_scroll, {
          rotate: 20,
          ease: "back.out",
          opacity: 0,
          duration: 2,
          stagger: 0.1
        });

        // Once the animation starts, stop observing further intersections
        observer.unobserve(entry.target);
      }
    });
  }

  // Create Intersection Observers for each check-list element
  const checklistElements = document.querySelectorAll('.check-list');

  checklistElements.forEach((element) => {
    const observer = new IntersectionObserver(startAnimation, {
      root: null, // Use the viewport as the root
      rootMargin: '0px', // No margin around the viewport
      threshold: 0.5 // Trigger the animation when 50% of the element is in the viewport
    });

    // Start observing the current check-list element
    observer.observe(element);
  });

  let tHero = gsap.timeline()

  let heading_title = new SplitText(".sec-title-3", { type: "chars" })
  let heading_char = heading_title.chars

  tHero.from(heading_char, {
    rotate: 20,
    ease: "back.out",
    opacity: 0,
    duration: 2,
    stagger: 0.1
  })

  tHero.from(".hero2-shape img", {
    xPercent: -100,
    duration: 1,
  }, '-=6.5')

  tHero.from(".hero__text-2 p", {
    opacity: 0,
    x: -30,
    duration: 1.5
  }, '-=5')

  var hero_bts = document.querySelector(".hero__text-2 .btn_wrapper")
  if (hero_bts) {
    var hero_btn = document.querySelector(".hero__text-2 .btn_wrapper")
  }
  else {
    var hero_btn = document.querySelector(".hero__text-2 #btn_wrapper")
  }
  tHero.from(hero_btn, {
    opacity: 0,
    y: -70,
    ease: "bounce",
    duration: 1.5
  }, '-=5')

  // All Buttons 
  let arr1 = gsap.utils.toArray("#btn_wrapper")
  let arr2 = gsap.utils.toArray(".btn_wrapper")
  const all_buttons = arr1.concat(arr2);

  all_buttons.forEach((btn) => {
    if (!(btn.classList.contains("hero__button"))) {
      gsap.from(btn, {
        scrollTrigger: {
          trigger: btn,
          start: "top center+=150",
          markers: false,
        },
        opacity: 0,
        y: -70,
        ease: "bounce",
        duration: 1.5,
      })
    }
  })

  let imageTl = gsap.timeline({
    scrollTrigger: {
      trigger: ".about__img-2",
      start: "top bottom",
      markers: false,
      scrub: 1,
      end: "bottom center"
    }
  })

  // Image pin 
  imageTl.to(".about__img-2 img", {
    scale: 1.15,
    duration: 1,
  })
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 36. Award Animation
  let award_timeline = gsap.timeline({
    scrollTrigger: {
      trigger: ".award__text",
      start: "top center+=150",
    }
  })

  gsap.set(".award__text", {
    opacity: 0,
    y: -500,
  })
  award_timeline.to(".award__text", {
    opacity: 1,
    y: 0,
    duration: 2,
    ease: "bounce",
  })

  gsap.set(".award__text-2", { opacity: 0, y: -500 })

  award_timeline.to(".award__text-2", {
    opacity: 1,
    y: 0,
    duration: 2,
    ease: "bounce"
  }, "-=1.5")

  award_timeline.to(".award__text", {
    x: -100,
    duration: 2,
  }, "-=1")
  award_timeline.to(".award__text-2", {
    x: -100,
    duration: 2,
  }, "-=1")
  award_timeline.to(".award__text", {
    x: 0,
    duration: 2,
  }, "-=1")
  award_timeline.to(".award__text-2", {
    x: 0,
    duration: 2,
  }, "-=1")
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 40. Portfolio Slider 3
  var portfolio_slider_3 = new Swiper(".portfolio__slider-3", {
    speed: 1500,
    loop: true,
    effect: 'fade',
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".pp-next",
      prevEl: ".pp-prev",
    },
  });
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 43. Workflow Slider Animation | animation__fade
  gsap.set(".fade_left", { x: -20, opacity: 0, })
  gsap.to(".fade_left", {
    scrollTrigger: {
      trigger: ".fade_left",
      start: "top center+=300",
    },
    x: 0,
    opacity: 1,
    ease: "power2.out",
    duration: 1,
    stagger: {
      each: 0.2,
    }
  })
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 44. Workflow Slider Animation 2 |  fade_bottom
  gsap.set(".fade_bottom", { y: 30, opacity: 0 });

  if (device_width < 1023) {
    const fadeArray = gsap.utils.toArray(".fade_bottom")
    fadeArray.forEach((item, i) => {
      let fadeTl = gsap.timeline({
        scrollTrigger: {
          trigger: item,
          start: "top center+=200",
        }
      })
      fadeTl.to(item, {
        y: 0,
        opacity: 1,
        ease: "power2.out",
        duration: 1.5,
      })
    })
  }
  else {
    gsap.to(".fade_bottom", {
      scrollTrigger: {
        trigger: ".fade_bottom",
        start: "top center+=300",
        markers: false
      },
      y: 0,
      opacity: 1,
      ease: "power2.out",
      duration: 1,
      stagger: {
        each: 0.2
      }
    })
  }
  /////////////////////////////////////////////////////


  /////////////////////////////////////////////////////
  // 45. Blog animation 
  gsap.set(".blog__animation .blog__item", { x: 50, opacity: 0 });

  if (device_width < 1023) {
    const blogList = gsap.utils.toArray(".blog__animation .blog__item")
    blogList.forEach((item, i) => {
      let blogTl = gsap.timeline({
        scrollTrigger: {
          trigger: item,
          start: "top center+=200",
        }
      })
      blogTl.to(item, {
        x: 0,
        opacity: 1,
        ease: "power2.out",
        duration: 1.5,
      })
    })
  }
  else {
    gsap.to(".blog__animation .blog__item", {
      scrollTrigger: {
        trigger: ".blog__animation .blog__item",
        start: "top center+=300",
        markers: false
      },
      x: 0,
      opacity: 1,
      ease: "power2.out",
      duration: 2,
      stagger: {
        each: 0.3
      }
    })
  }
  /////////////////////////////////////////////////////



  /////////////////////////////////////////////////////
  // 48. Zoom In Animation
  gsap.set(".zoom_in", { opacity: 0, y: 30, scale: 0.5, });
  gsap.to(".zoom_in", {
    scrollTrigger: {
      trigger: ".zoom_in",
      start: "top center+=200",
      markers: false
    },
    y: 0,
    opacity: 1,
    scale: 1,
    ease: "power2.out",
    duration: 1,
    stagger: {
      each: 0.2
    }
  })
  /////////////////////////////////////////////////////




  /////////////////////////////////////////////////////
  // 57. Portfolio 6 Animation 
  const portfolio_listss = gsap.utils.toArray(".portfolio__item-6 img")
  if (portfolio_listss) {
    portfolio_listss.forEach((item, i) => {
      gsap.from(item, {
        scrollTrigger: {
          trigger: item,
          start: "top center",
          scrub: 1.5,
        },
        scale: 2.5,
        duration: 1,
      })
    })
  }
  /////////////////////////////////////////////////////


  // Charchater Come Animation 
  let char_come = document.querySelectorAll(".animation__char_come")

  char_come.forEach((char_come) => {
    let split_char = new SplitText(char_come, { type: "chars, words" })
    gsap.from(split_char.chars, { duration: 1, x: 70, autoAlpha: 0, stagger: 0.05 });
  })


  // Charchater Come long Animation 
  let char_come_long = document.querySelectorAll(".animation__char_come_long")

  char_come_long.forEach((char_come) => {
    let split_char = new SplitText(char_come, { type: "chars, words" })
    gsap.from(split_char.chars, { duration: 1, x: 70, autoAlpha: 0, stagger: 0.15 });
  })


  // Charchater Up Animation 
  let char_up = document.querySelector(".animation__char_up")
  let split_char_up = new SplitText(char_up, { type: "chars, words" })
  gsap.from(split_char_up.chars, { duration: 1, y: 15, autoAlpha: 0, stagger: 0.05 });



  // Service Page hero Animation 
  let word_up = document.querySelector(".animation__word_up")
  let split_word_up = new SplitText(word_up, { type: "words", position: "absolute" })
  gsap.from(split_word_up.words, { duration: 1, y: 50, autoAlpha: 0, stagger: 0.05 });

  // Service Page hero Animation   
  let word_come = document.querySelectorAll(".animation__word_come")
  word_come.forEach((word_come) => {
    let split_word_come = new SplitText(word_come, { type: "chars words", position: "absolute" })
    gsap.from(split_word_come.words, { duration: 1, x: 50, autoAlpha: 0, stagger: 0.05 });
  })

  // Service Page hero Animation   
  let word_come_long = document.querySelectorAll(".animation__word_come_long")
  word_come_long.forEach((word_come_long) => {
    let split_word_come_long = new SplitText(word_come_long, { type: "chars words", position: "absolute" })
    gsap.from(split_word_come_long.words, { duration: 1, x: 50, autoAlpha: 0, stagger: 0.5 });
  })


  // Home page Hero Animation 



  // Mode JS
  $('.mode-type button').on('click', function (e) {
    $(this).addClass('active').siblings().removeClass('active');

    var mode_val = $('.mode-type button.active').attr('data-mode');
    if (mode_val == 'dark') {
      $('body').addClass('dark');
    } else {
      $('body').removeClass('dark');
    }
  });

  // Cursor JS
  $('#cursor_style').on('change', function () {
    var cursor_val = $(this).val();

    if (cursor_val == '1') {
      $('.cursor1').hide();
      $('.cursor2').hide();
    } else {
      $('.cursor1').show();
      $('.cursor2').show();
    }
  });







  // Home One Hero Animation 
  let HomeDigital = gsap.timeline()
  let HomeDigitalImage = gsap.timeline()

  let hero7_thum_anim = document.querySelector(".hero7__thum-anim")
  if (hero7_thum_anim) {
    let hero7_thumb_1 = document.querySelector(".image-1")
    let hero7_thumb_2 = document.querySelector(".image-2")
    let hero7_thumb_3 = document.querySelector(".image-3")
    let hero7_thumb_4 = document.querySelector(".image-4")

    gsap.from(".image-1", {
      x: 65,
      yPercent: 100,
      opacity: 0,
      duration: 2,
      delay: 1
    })

    gsap.from(".image-2", {
      delay: 1.5,
      scale: 0,
      duration: 1.5
    })

    gsap.from(".image-3", {
      x: 65,
      yPercent: -100,
      duration: 2,
      opacity: 0,
      delay: 1
    })
    gsap.from(".image-4", {
      xPercent: -100,
      yPercent: -100,
      duration: 2,
      opacity: 0,
      delay: 1
    })

  }


  // Charchater Come long Animation 
  let mark = document.querySelector(".hero__area-3 .title-left")
  let eting = document.querySelector(".hero__area-3 .title-right")
  let hero__text_animation = document.querySelector(".hero__text-animation")


  let split_creatives = new SplitText(mark, { type: "chars" })
  let split_solutions = new SplitText(eting, { type: "chars" })
  let split_text_animation = new SplitText(hero__text_animation, { type: "chars words" })

  HomeDigital.from(split_creatives.chars, { duration: 2, x: 100, autoAlpha: 0, stagger: 0.2 });
  HomeDigital.from(split_solutions.chars, { duration: 1, x: 100, autoAlpha: 0, stagger: 0.1 }, "-=1");
  HomeDigital.from(split_text_animation.words, { duration: 1, x: 50, autoAlpha: 0, stagger: 0.05 }, "-=1");



  // Home page Hero Animation 
  let homeCreative = gsap.timeline()

  // Charchater Come long Animation 
  let creative = document.querySelector(".service__hero-right-2 .creative")
  let solution = document.querySelector(".service__hero-right-2 .solution")
  let heroContent = document.querySelector(".service__hero-right-2 .animate_content")


  let split_creative = new SplitText(creative, { type: "chars" })
  let split_solution = new SplitText(solution, { type: "chars" })
  let split_herocontent = new SplitText(heroContent, { type: "chars words" })

  homeCreative.from(split_creative.chars, { duration: 1, x: 70, autoAlpha: 0, stagger: 0.1 });
  homeCreative.from(split_solution.chars, { duration: 1, x: 70, autoAlpha: 0, stagger: 0.1 }, "-=1.5");
  homeCreative.from(split_herocontent.words, { duration: 1, x: 50, autoAlpha: 0, stagger: 0.05 }, "-=1");


  // Home page Hero Animation 
  gsap.set(".experience", {
    y: 50,
    opacity: 0,
  })
  let homeAgency = gsap.timeline()

  // Charchater Come long Animation 
  let hero__title = document.querySelector(".hero__title")
  let hero__subtitle = document.querySelector(".hero__sub-title")


  let split_hero__title = new SplitText(hero__title, { type: "chars" })
  let split_hero__subtitle = new SplitText(hero__subtitle, { type: "chars words" })

  homeAgency.from(split_hero__title.chars, { duration: 1, x: 70, autoAlpha: 0, stagger: 0.1 });
  homeAgency.from(split_hero__subtitle.words, { duration: 1, x: 50, autoAlpha: 0, stagger: 0.05 }, "-=1");

  homeAgency.to(".experience", {
    y: 0,
    opacity: 1,
    duration: 2,
    ease: "power2.out"
  }, '-=1.5')




  /////////////////////////////////////////////////////
  // 69. Workflow Slider Animation 2 |  fade_bottom_5
  gsap.set(".fade_bottom_5", { y: 30, opacity: 0 });

  if (device_width < 1023) {
    const fadeArray = gsap.utils.toArray(".fade_bottom_5")
    fadeArray.forEach((item, i) => {
      let fadeTl = gsap.timeline({
        scrollTrigger: {
          trigger: item,
          start: "top center+=200",
        }
      })
      fadeTl.to(item, {
        y: 0,
        opacity: 1,
        ease: "power2.out",
        duration: 1.5,
      })
    })
  }
  else {
    gsap.to(".fade_bottom_5", {
      scrollTrigger: {
        trigger: ".fade_bottom_5",
        start: "top center+=300",
        markers: false
      },
      y: 0,
      opacity: 1,
      ease: "power2.out",
      duration: 1,
      stagger: {
        each: 0.2
      }
    })
  }
  /////////////////////////////////////////////////////


  // =========================================================
  // Image Hover
  const hover_title = document.querySelectorAll(".hover_wrap");

  if (hover_title) {
    function hoverImgFunc(event, hover_title) {
      const contentBox = hover_title.getBoundingClientRect();
      const dx = event.clientX - contentBox.x;
      const dy = event.clientY - contentBox.y;
      hover_title.children[0].style.transform = `translate(${dx}px, ${dy}px)`;
    }

    hover_title.forEach((item, i) => {
      item.addEventListener("mousemove", (event) => {
        setInterval(hoverImgFunc(event, item), 1000);
      });
    });
  }
  // =========================================================


  // Tilt JS
  let tilt = document.querySelectorAll(".wc-tilt");
  let tilt_2 = document.querySelectorAll(".wc-tilt-2");

  if (tilt) {
    VanillaTilt.init(document.querySelectorAll(".wc-tilt"), {
      max: 15,
      speed: 3000,
    });
  }

  if (tilt_2) {
    VanillaTilt.init(document.querySelectorAll(".wc-tilt-2"), {
      max: 10,
      speed: 3000,
    });
  }


})(jQuery);

