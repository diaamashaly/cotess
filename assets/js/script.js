// Modern JavaScript for Costess Tech

jQuery(function ($) {
  // ===== SMOOTH SCROLLING & NAVIGATION =====

  // Enhanced smooth scrolling for navigation links
  $('a[href^="#"]').on("click", function (e) {
    e.preventDefault();
    const target = $(this.getAttribute("href"));
    if (target.length) {
      const offsetTop = target.offset().top - 80; // Account for fixed navbar
      $("html, body").animate(
        {
          scrollTop: offsetTop,
        },
        10,
        "easeInOutCubic",
      );
    }
  });

  // Navbar background change on scroll
  $(window).scroll(function () {
    const scroll = $(window).scrollTop();
    if (scroll >= 50) {
      $(".navbar").addClass("navbar-scrolled");
    } else {
      $(".navbar").removeClass("navbar-scrolled");
    }
  });

  // Active navigation on scroll
  function updateActiveNav() {
    const scrollPos = $(window).scrollTop() + 100;

    $(".navbar-nav .nav-link").each(function () {
      const href = $(this).attr("href");
      if (href && href.startsWith("#")) {
        const target = $(href);
        if (target.length) {
          const targetTop = target.offset().top;
          const targetBottom = targetTop + target.outerHeight();

          if (scrollPos >= targetTop && scrollPos < targetBottom) {
            $(".navbar-nav .nav-link").removeClass("active");
            $(this).addClass("active");
          }
        }
      }
    });
  }

  // ===== SCROLL ANIMATIONS =====

  // Enhanced scroll animations
  function animateOnScroll() {
    $(
      ".animate-on-scroll, .animate-slide-left, .animate-slide-right, .animate-scale, .animate-rotate",
    ).each(function () {
      const elementTop = $(this).offset().top;
      const elementBottom = elementTop + $(this).outerHeight();
      const viewportTop = $(window).scrollTop();
      const viewportBottom = viewportTop + $(window).height();

      if (elementBottom > viewportTop && elementTop < viewportBottom) {
        $(this).addClass("animated");
      }
    });
  }

  // Legacy fade-in animation for backward compatibility
  function fadeInOnScroll() {
    $(".fade-in").each(function () {
      const elementTop = $(this).offset().top;
      const elementBottom = elementTop + $(this).outerHeight();
      const viewportTop = $(window).scrollTop();
      const viewportBottom = viewportTop + $(window).height();

      if (elementBottom > viewportTop && elementTop < viewportBottom) {
        $(this).addClass("visible");
      }
    });
  }

  // Counter animation for statistics
  function animateCounters() {
    $(".stat-item h3").each(function () {
      const $this = $(this);
      const countTo = parseInt($this.text().replace(/\D/g, ""));

      $({ countNum: 0 }).animate(
        {
          countNum: countTo,
        },
        {
          duration: 2000,
          easing: "swing",
          step: function () {
            $this.text(Math.floor(this.countNum) + "+");
          },
          complete: function () {
            $this.text(countTo + "+");
          },
        },
      );
    });
  }

  // ===== SCROLL EVENT HANDLERS =====

  // Throttled scroll handler for better performance
  let scrollTimeout;
  $(window).on("scroll", function () {
    // Update active navigation
    if (scrollTimeout) {
      clearTimeout(scrollTimeout);
    }
    scrollTimeout = setTimeout(updateActiveNav, 10);

    // Trigger animations
    animateOnScroll();
    fadeInOnScroll();

    // Trigger counter animation when stats section is visible
    const statsSection = $("#about .stat-item").first();
    if (
      statsSection.length &&
      statsSection.offset().top < $(window).scrollTop() + $(window).height()
    ) {
      if (!statsSection.hasClass("animated")) {
        statsSection.addClass("animated");
        animateCounters();
      }
    }

    // Parallax effect for hero section
    const scrolled = $(window).scrollTop();
    const parallax = $(".hero-section");
    const speed = scrolled * 0.1;
    parallax.css("transform", "translateY(" + speed + "px)");

    // Back to top button visibility
    if ($(window).scrollTop() > 300) {
      $(".back-to-top").fadeIn();
    } else {
      $(".back-to-top").fadeOut();
    }
  });

  // ===== INITIALIZATION =====

  // Set initial states
  updateActiveNav();
  animateOnScroll();
  fadeInOnScroll();

  // ===== CONTACT FORM =====

  // Contact form handling
  $("#contactForm").on("submit", function (e) {
    e.preventDefault();
    const $form = $(this);
    const $submitBtn = $form.find('button[type="submit"]');
    const originalText = $submitBtn.text();

    // Show loading state
    $submitBtn
      .html('<span class="loading"></span> Sending...')
      .prop("disabled", true);

    // Simulate form submission (replace with actual form handling)
    setTimeout(function () {
      $form[0].reset();
      showAlert(
        "success",
        "Thank you! Your message has been sent successfully. We'll get back to you soon.",
      );
      $submitBtn.text(originalText).prop("disabled", false);
    }, 2000);
  });

  // Alert function
  function showAlert(type, message) {
    const alertClass = type === "success" ? "alert-success" : "alert-danger";
    const alertHtml = `
      <div class="alert ${alertClass} alert-dismissible fade show" role="alert">
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
    `;
    $("#contactForm").before(alertHtml);
    setTimeout(function () {
      $(".alert").fadeOut();
    }, 5000);
  }

  // ===== FORM VALIDATION =====

  function validateForm() {
    let isValid = true;
    const name = $("#name").val().trim();
    const email = $("#email").val().trim();
    const subject = $("#subject").val().trim();
    const message = $("#message").val().trim();

    $(".form-control").removeClass("is-invalid");

    if (name === "") {
      $("#name").addClass("is-invalid");
      isValid = false;
    }
    if (email === "" || !isValidEmail(email)) {
      $("#email").addClass("is-invalid");
      isValid = false;
    }
    if (subject === "") {
      $("#subject").addClass("is-invalid");
      isValid = false;
    }
    if (message === "") {
      $("#message").addClass("is-invalid");
      isValid = false;
    }
    return isValid;
  }

  function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }

  // Real-time form validation
  $(".form-control").on("blur", function () {
    const $this = $(this);
    const value = $this.val().trim();

    if ($this.attr("id") === "email") {
      if (value === "" || !isValidEmail(value)) {
        $this.addClass("is-invalid");
      } else {
        $this.removeClass("is-invalid").addClass("is-valid");
      }
    } else {
      if (value === "") {
        $this.addClass("is-invalid");
      } else {
        $this.removeClass("is-invalid").addClass("is-valid");
      }
    }
  });

  // ===== ANIMATIONS =====

  // Typing animation for hero title
  function typeWriter(element, text, speed = 100) {
    let i = 0;
    element.html("");
    function type() {
      if (i < text.length) {
        element.html(element.html() + text.charAt(i));
        i++;
        setTimeout(type, speed);
      }
    }
    type();
  }

  // Initialize typing animation
  const heroTitle = $(".hero-section h1");
  const originalText = heroTitle.text();
  typeWriter(heroTitle, originalText, 50);

  // Service card hover effects
  $(".service-card").hover(
    function () {
      $(this)
        .find(".service-icon")
        .addClass("animate__animated animate__pulse");
    },
    function () {
      $(this)
        .find(".service-icon")
        .removeClass("animate__animated animate__pulse");
    },
  );

  // Portfolio card click effect
  $(".portfolio-card").on("click", function () {
    $(this).addClass("animate__animated animate__zoomIn");
    setTimeout(() => {
      $(this).removeClass("animate__animated animate__zoomIn");
    }, 1000);
  });

  // ===== UI COMPONENTS =====

  // Mobile menu functionality with blur overlay
  function toggleMobileMenu(show) {
    const $overlay = $(".menu-overlay");
    const $body = $("body");

    if (show) {
      $overlay.removeClass("active");
      $body.addClass("menu-open");
    } else {
      $overlay.addClass("active");
      $body.removeClass("menu-open");
    }
  }

  // Handle navbar toggle events
  $(".navbar-toggler").on("click", function () {
    const isExpanded = $(this).attr("aria-expanded") === "true";
    setTimeout(() => {
      toggleMobileMenu(!isExpanded);
    }, 50);
    $(".menu-overlay").removeClass("active");
  });

  // Handle Bootstrap collapse events
  $("#navbarNav").on("show.bs.collapse", function () {
    toggleMobileMenu(true);
  });

  $("#navbarNav").on("hide.bs.collapse", function () {
    toggleMobileMenu(false);
    $(".menu-overlay").removeClass("active");
  });

  // Close menu when overlay is clicked
  $(".menu-overlay").on("click", function () {
    if ($(window).width() < 992) {
      $(".navbar-collapse").collapse("hide");
      $(".menu-overlay").removeClass("active");
    }
  });

  // Close menu when nav link is clicked
  $(".navbar-nav .nav-link").on("click", function () {
    if ($(window).width() < 992) {
      $(".navbar-collapse").collapse("hide");
      $(".menu-overlay").removeClass("active");
    }
  });

  // Back to top button
  const backToTop = $(
    '<button class="btn btn-primary back-to-top" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000; border-radius: 50%; width: 50px; height: 50px; display: none;"><i class="fas fa-arrow-up"></i></button>',
  );
  $("body").append(backToTop);

  backToTop.on("click", function () {
    $("html, body").animate({ scrollTop: 0 }, 800);
  });

  // ===== LANGUAGE SWITCHER =====

  $(".language-toggle").on("click", function (e) {
    e.preventDefault();
    const selectedLang = $(this).data("lang");
    $(".language-toggle").removeClass("active");
    $(this).addClass("active");
    $(document).trigger("languageChanged", [selectedLang]);
    $(".menu-overlay").removeClass("active");
  });

  // Set initial active language (English)
  $('.language-toggle[data-lang="en"]').addClass("active");

  // ===== BOOTSTRAP INITIALIZATION =====

  // Initialize tooltips if Bootstrap tooltips are used
  if (typeof bootstrap !== "undefined") {
    const tooltipTriggerList = [].slice.call(
      document.querySelectorAll('[data-bs-toggle="tooltip"]'),
    );
    const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  }

  // ===== PAGE LOAD =====

  // Preloader (optional)
  $(window).on("load", function () {
    $(".preloader").fadeOut("slow");
  });

  // Add custom styles for validation
  $("<style>")
    .prop("type", "text/css")
    .html(
      `
      .form-control.is-invalid {
        border-color: #ef4444;
        box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.1);
      }
      .form-control.is-valid {
        border-color: #10b981;
        box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.1);
      }
    `,
    )
    .appendTo("head");
});

// ===== UTILITY FUNCTIONS =====

// Debounce function for performance optimization
function debounce(func, wait, immediate) {
  let timeout;
  return function () {
    const context = this;
    const args = arguments;
    const later = function () {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    const callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
}

// Fade-in on scroll functionality
function initScrollAnimations() {
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("animate");
      }
    });
  }, observerOptions);

  // Observe all fade-in elements
  const fadeElements = document.querySelectorAll(`
    .fade-in-on-scroll,
    .fade-in-left,
    .fade-in-right,
    .fade-in-up,
    .fade-in-scale
  `);

  fadeElements.forEach((element) => {
    observer.observe(element);
  });
}

// Initialize services tabs
function initServicesTabs() {
  const tabBtns = document.querySelectorAll(".tab-btn");
  const tabContents = document.querySelectorAll(".tab-content");

  tabBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      const targetTab = btn.getAttribute("data-tab");

      // Remove active class from all buttons and contents
      tabBtns.forEach((b) => b.classList.remove("active"));
      tabContents.forEach((content) => content.classList.remove("active"));

      // Add active class to clicked button and corresponding content
      btn.classList.add("active");
      document.getElementById(targetTab).classList.add("active");
    });
  });
}

function initPortfolioTabs() {
  const tabBtns = document.querySelectorAll(".portfolio-tab-btn");
  const tabContents = document.querySelectorAll(".portfolio-tab-content");

  tabBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      const targetTab = btn.getAttribute("data-tab");

      // Remove active class from all buttons and contents
      tabBtns.forEach((b) => b.classList.remove("active"));
      tabContents.forEach((content) => content.classList.remove("active"));

      // Add active class to clicked button and corresponding content
      btn.classList.add("active");
      document.getElementById(targetTab).classList.add("active");
    });
  });
}

// Open WhatsApp function
function openWhatsApp(serviceName = null) {
  const phoneNumber = "966592787913";
  let message =
    "Hello! I'm interested in your services. Can you provide more information?";

  if (serviceName) {
    message = `Hello! I'm interested in your ${serviceName} service. Can you provide more information about pricing and details?`;
  }

  const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(
    message,
  )}`;

  // Open WhatsApp in a new tab
  window.open(whatsappUrl, "_blank");
}

// Vector Map Enhancement
function initVectorMap() {
  const locationCard = document.querySelector(".location-info-card");
  const dataPoints = document.querySelectorAll(".data-point");
  const continents = document.querySelectorAll(".continent");

  // Add hover effects to continents
  if (continents.length > 0) {
    continents.forEach((continent, index) => {
      continent.addEventListener("mouseenter", () => {
        continent.style.fill = "rgba(16, 185, 129, 0.3)";
        continent.style.stroke = "rgba(16, 185, 129, 0.7)";
        continent.style.strokeWidth = "2";
      });

      continent.addEventListener("mouseleave", () => {
        continent.style.fill = "rgba(16, 185, 129, 0.1)";
        continent.style.stroke = "rgba(16, 185, 129, 0.3)";
        continent.style.strokeWidth = "1";
      });
    });
  }

  // Add enhanced hover effects to data points
  if (dataPoints.length > 0) {
    dataPoints.forEach((point) => {
      const icon = point.querySelector(".data-icon");
      const label = point.querySelector(".data-label");

      point.addEventListener("mouseenter", () => {
        if (icon) {
          icon.style.transform = "scale(1.2)";
          icon.style.boxShadow = "0 12px 30px rgba(16, 185, 129, 0.4)";
        }
        if (label) {
          label.style.opacity = "1";
          label.style.transform = "translateY(-5px)";
        }
      });

      point.addEventListener("mouseleave", () => {
        if (icon) {
          icon.style.transform = "scale(1)";
          icon.style.boxShadow = "none";
        }
        if (label) {
          label.style.opacity = "0";
          label.style.transform = "translateY(0)";
        }
      });
    });
  }

  // Add floating animation to location card
  if (locationCard) {
    locationCard.addEventListener("mouseenter", () => {
      locationCard.style.transform = "translateY(-8px)";
      locationCard.style.boxShadow = "0 20px 40px rgba(0, 0, 0, 0.3)";
    });

    locationCard.addEventListener("mouseleave", () => {
      locationCard.style.transform = "translateY(0)";
      locationCard.style.boxShadow = "none";
    });
  }
}

// Initialize scroll animations when document is ready
jQuery(function ($) {
  initScrollAnimations();
  initServicesTabs();
  initPortfolioTabs();
  initVectorMap();
});