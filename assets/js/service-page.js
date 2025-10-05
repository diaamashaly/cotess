// Service Page JavaScript

$(document).ready(function () {
  // Initialize service page animations
  initServicePageAnimations();

  // Initialize mobile device animations
  initMobileDeviceAnimations();

  // Initialize scroll animations
  initScrollAnimations();

  // Initialize pricing card interactions
  initPricingInteractions();

  // Initialize technology item animations
  initTechItemAnimations();

  // Initialize mobile app mockup interactions
  initMobileAppMockup();
});

// Service Page Animations
function initServicePageAnimations() {
  // Animate service hero content on load
  $(".service-hero-content").addClass("fade-in-up");

  // Animate mobile mockup
  $(".mobile-mockup-container").addClass("fade-in-right");

  // Animate floating devices
  $(".mobile-device").each(function (index) {
    $(this).css("animation-delay", index * 0.5 + "s");
  });
}

// Mobile Device Animations
function initMobileDeviceAnimations() {
  // Add hover effects to mobile devices
  $(".mobile-device").hover(
    function () {
      $(this).addClass("device-hover");
    },
    function () {
      $(this).removeClass("device-hover");
    }
  );

  // Animate app interface elements
  $(".app-interface").addClass("app-interface-animated");
}

// Scroll Animations
function initScrollAnimations() {
  // Intersection Observer for scroll animations
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  };

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add("animate-in");
      }
    });
  }, observerOptions);

  // Observe elements for animation
  const animateElements = document.querySelectorAll(
    ".feature-card, .tech-category, .portfolio-item, .pricing-card"
  );

  animateElements.forEach(function (el) {
    observer.observe(el);
  });
}

// Pricing Card Interactions
function initPricingInteractions() {
  $(".pricing-card").hover(
    function () {
      $(this).addClass("pricing-hover");
      // Add ripple effect
      createRippleEffect($(this));
    },
    function () {
      $(this).removeClass("pricing-hover");
    }
  );

  // Pricing card click handler
  $(".pricing-footer .btn").click(function (e) {
    e.preventDefault();
    const pricingCard = $(this).closest(".pricing-card");
    const packageType = pricingCard.find("h3").text();

    // Show selection animation
    pricingCard.addClass("selected");

    setTimeout(function () {
      pricingCard.removeClass("selected");
      // Scroll to contact section
      $("html, body").animate(
        {
          scrollTop: $("#contact").offset().top - 100,
        },
        1000
      );
    }, 1000);
  });
}

// Technology Item Animations
function initTechItemAnimations() {
  $(".tech-item").hover(
    function () {
      $(this).addClass("tech-hover");

      // Add icon bounce animation
      const icon = $(this).find("i");
      icon.addClass("icon-bounce");

      setTimeout(function () {
        icon.removeClass("icon-bounce");
      }, 600);
    },
    function () {
      $(this).removeClass("tech-hover");
    }
  );
}

// Mobile App Mockup Interactions
function initMobileAppMockup() {
  // Add hover effects for the single screenshot
  $(".mobile-mockup").hover(
    function () {
      $(this).addClass("mockup-hover");
    },
    function () {
      $(this).removeClass("mockup-hover");
    }
  );
}

// Ripple Effect Function
function createRippleEffect(element) {
  const ripple = $('<div class="ripple-effect"></div>');
  element.append(ripple);

  setTimeout(function () {
    ripple.remove();
  }, 600);
}

// Portfolio Item Interactions
function initPortfolioInteractions() {
  $(".portfolio-item").hover(
    function () {
      const overlay = $(this).find(".portfolio-overlay");
      overlay.addClass("overlay-visible");

      // Animate portfolio content
      const content = $(this).find(".portfolio-content");
      content.addClass("content-animate");
    },
    function () {
      const overlay = $(this).find(".portfolio-overlay");
      overlay.removeClass("overlay-visible");

      const content = $(this).find(".portfolio-content");
      content.removeClass("content-animate");
    }
  );
}

// Feature Card Interactions
function initFeatureCardInteractions() {
  $(".feature-card").hover(
    function () {
      $(this).addClass("feature-hover");

      // Animate feature icon
      const icon = $(this).find(".feature-icon");
      icon.addClass("icon-rotate");

      // Animate feature list
      const listItems = $(this).find(".feature-list li");
      listItems.each(function (index) {
        const item = $(this);
        setTimeout(function () {
          item.addClass("list-item-animate");
        }, index * 100);
      });
    },
    function () {
      $(this).removeClass("feature-hover");

      const icon = $(this).find(".feature-icon");
      icon.removeClass("icon-rotate");

      const listItems = $(this).find(".feature-list li");
      listItems.removeClass("list-item-animate");
    }
  );
}

// Service Hero Stats Animation
function animateServiceStats() {
  $(".stat-number").each(function () {
    const $this = $(this);
    const countTo = $this.attr("data-count");

    $({countNum: $this.text()}).animate(
      {
        countNum: countTo,
      },
      {
        duration: 2000,
        easing: "linear",
        step: function () {
          $this.text(Math.floor(this.countNum));
        },
        complete: function () {
          $this.text(this.countNum);
        },
      }
    );
  });
}

// Mobile Mockup Animation
function animateMobileMockup() {
  const mockup = $(".mobile-mockup");
  const appContent = $(".app-content");

  // Animate mockup entrance
  mockup.addClass("mockup-entrance");

  // Animate app content cards
  setTimeout(function () {
    $(".content-card").each(function (index) {
      const card = $(this);
      setTimeout(function () {
        card.addClass("card-slide-in");
      }, index * 200);
    });
  }, 1000);

  // Animate navigation items
  setTimeout(function () {
    $(".nav-item").each(function (index) {
      const item = $(this);
      setTimeout(function () {
        item.addClass("nav-item-animate");
      }, index * 100);
    });
  }, 500);
}

// Initialize all animations when page loads
$(window).on("load", function () {
  // Animate service stats
  animateServiceStats();

  // Animate mobile mockup
  animateMobileMockup();

  // Initialize portfolio interactions
  initPortfolioInteractions();

  // Initialize feature card interactions
  initFeatureCardInteractions();
});

// Add CSS animations via JavaScript
const style = document.createElement("style");
style.textContent = `
  .fade-in-up {
    animation: fadeInUp 1s ease-out forwards;
  }
  
  .fade-in-right {
    animation: fadeInRight 1s ease-out forwards;
  }
  
  .device-hover {
    transform: scale(1.1) rotate(5deg) !important;
    z-index: 100 !important;
  }
  
  .app-interface-animated {
    animation: appInterfacePulse 3s ease-in-out infinite;
  }
  
  .animate-in {
    animation: slideInUp 0.8s ease-out forwards;
  }
  
  .pricing-hover {
    transform: translateY(-15px) scale(1.02) !important;
  }
  
  .selected {
    animation: selectedPulse 1s ease-in-out;
  }
  
  .ripple-effect {
    position: absolute;
    border-radius: 50%;
    background: rgba(16, 185, 129, 0.3);
    transform: scale(0);
    animation: ripple 0.6s linear;
    pointer-events: none;
  }
  
  .tech-hover {
    transform: translateY(-5px) scale(1.05);
  }
  
  .icon-bounce {
    animation: iconBounce 0.6s ease-in-out;
  }
  
  
  .overlay-visible {
    opacity: 1 !important;
  }
  
  .content-animate {
    animation: contentSlideUp 0.5s ease-out forwards;
  }
  
  .feature-hover {
    transform: translateY(-10px) scale(1.02);
  }
  
  .icon-rotate {
    animation: iconRotate 0.6s ease-in-out;
  }
  
  .list-item-animate {
    animation: listItemSlide 0.3s ease-out forwards;
  }
  
  .mockup-entrance {
    animation: mockupEntrance 1s ease-out forwards;
  }
  
  .card-slide-in {
    animation: cardSlideIn 0.5s ease-out forwards;
  }
  
  .nav-item-animate {
    animation: navItemSlide 0.3s ease-out forwards;
  }
  
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  
  @keyframes fadeInRight {
    from {
      opacity: 0;
      transform: translateX(30px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }
  
  @keyframes appInterfacePulse {
    0%, 100% {
      opacity: 1;
    }
    50% {
      opacity: 0.8;
    }
  }
  
  @keyframes slideInUp {
    from {
      opacity: 0;
      transform: translateY(50px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  
  @keyframes selectedPulse {
    0% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.05);
    }
    100% {
      transform: scale(1);
    }
  }
  
  @keyframes ripple {
    to {
      transform: scale(4);
      opacity: 0;
    }
  }
  
  @keyframes iconBounce {
    0%, 100% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.2);
    }
  }
  
  
  @keyframes numberPulse {
    0% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.1);
    }
    100% {
      transform: scale(1);
    }
  }
  
  @keyframes contentSlideUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  
  @keyframes iconRotate {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }
  
  @keyframes listItemSlide {
    from {
      opacity: 0;
      transform: translateX(-20px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }
  
  @keyframes mockupEntrance {
    from {
      opacity: 0;
      transform: scale(0.8) rotateY(45deg);
    }
    to {
      opacity: 1;
      transform: scale(1) rotateY(0deg);
    }
  }
  
  @keyframes cardSlideIn {
    from {
      opacity: 0;
      transform: translateX(-30px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }
  
  @keyframes navItemSlide {
    from {
      opacity: 0;
      transform: translateY(-10px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
`;
document.head.appendChild(style);

// Sales Section Functionality
function initSalesSection() {
  // Initialize countdown timer
  initCountdownTimer();

  // Initialize sales animations
  initSalesAnimations();
}

function initCountdownTimer() {
  // Set countdown target (48 hours from now)
  const countdownTarget = new Date().getTime() + 48 * 60 * 60 * 1000;

  function updateCountdown() {
    const now = new Date().getTime();
    const distance = countdownTarget - now;

    if (distance < 0) {
      // Timer expired - reset to 48 hours
      const newTarget = new Date().getTime() + 48 * 60 * 60 * 1000;
      localStorage.setItem("countdownTarget", newTarget.toString());
      return;
    }

    const hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Update timer display
    $(".timer-number").eq(0).text(hours.toString().padStart(2, "0"));
    $(".timer-number").eq(1).text(minutes.toString().padStart(2, "0"));
    $(".timer-number").eq(2).text(seconds.toString().padStart(2, "0"));

    // Add urgency effects when time is running low
    if (hours < 2) {
      $(".timer-number").addClass("urgent");
      $(".countdown-timer h3").addClass("urgent");
    }
  }

  // Load saved countdown target or create new one
  const savedTarget = localStorage.getItem("countdownTarget");
  if (savedTarget) {
    const target = parseInt(savedTarget);
    if (target > new Date().getTime()) {
      countdownTarget = target;
    }
  } else {
    localStorage.setItem("countdownTarget", countdownTarget.toString());
  }

  // Update countdown every second
  updateCountdown();
  setInterval(updateCountdown, 1000);
}

function initSalesAnimations() {
  // Animate sales cards on scroll
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("animate-in");
        }
      });
    },
    {
      threshold: 0.1,
    }
  );

  // Observe all sales cards
  document.querySelectorAll(".sales-card").forEach((card) => {
    observer.observe(card);
  });

  // Add hover effects to sales buttons
  $(".btn-sales-primary, .btn-sales-whatsapp").hover(
    function () {
      $(this).addClass("button-hover");
    },
    function () {
      $(this).removeClass("button-hover");
    }
  );

  // Add click tracking for sales buttons
  $(".btn-sales-primary").on("click", function () {
    // Track conversion
    console.log("Primary sales button clicked");
    // You can add analytics tracking here
  });

  $(".btn-sales-whatsapp").on("click", function () {
    // Track conversion
    console.log("WhatsApp sales button clicked");
    // You can add analytics tracking here
  });
}

// Scroll Animation Observer for Why Choose Us Section
function initScrollAnimations() {
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  };

  const scrollObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("animate-in");
      }
    });
  }, observerOptions);

  // Observe fade-in elements
  document
    .querySelectorAll(".fade-in-on-scroll, .fade-in-up")
    .forEach((element) => {
      scrollObserver.observe(element);
    });
}

// Initialize sales section when document is ready
$(document).ready(function () {
  initSalesSection();
  initScrollAnimations();
});
