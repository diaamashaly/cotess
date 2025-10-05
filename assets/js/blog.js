// Blog Page JavaScript

$(document).ready(function () {
  // Initialize blog functionality
  initBlogSearch();
  initBlogFilters();
  initLoadMore();
  initNewsletterForm();
  initScrollAnimations();
  initHeroAnimations();
});

// Blog Search Functionality
function initBlogSearch() {
  const searchInput = $("#blogSearch");
  const searchBtn = $(".search-btn");

  // Search on input
  searchInput.on("input", function () {
    const searchTerm = $(this).val().toLowerCase();
    filterBlogPosts(searchTerm);
  });

  // Search on button click
  searchBtn.on("click", function () {
    const searchTerm = searchInput.val().toLowerCase();
    filterBlogPosts(searchTerm);
  });

  // Search on Enter key
  searchInput.on("keypress", function (e) {
    if (e.which === 13) {
      const searchTerm = $(this).val().toLowerCase();
      filterBlogPosts(searchTerm);
    }
  });
}

// Blog Filter Functionality
function initBlogFilters() {
  $(".filter-btn").on("click", function () {
    const filter = $(this).data("filter");

    // Update active filter button
    $(".filter-btn").removeClass("active");
    $(this).addClass("active");

    // Filter blog posts
    filterBlogPostsByCategory(filter);
  });
}

// Filter blog posts by search term
function filterBlogPosts(searchTerm) {
  $(".blog-post").each(function () {
    const post = $(this);
    const title = post.find("h3").text().toLowerCase();
    const content = post.find("p").text().toLowerCase();
    const category = post.find(".blog-category").text().toLowerCase();

    if (
      title.includes(searchTerm) ||
      content.includes(searchTerm) ||
      category.includes(searchTerm)
    ) {
      post.removeClass("hidden").addClass("fade-in");
    } else {
      post.addClass("hidden").removeClass("fade-in");
    }
  });

  // Update load more button visibility
  updateLoadMoreVisibility();
}

// Filter blog posts by category
function filterBlogPostsByCategory(category) {
  $(".blog-post").each(function () {
    const post = $(this);
    const postCategory = post.data("category");

    if (category === "all" || postCategory === category) {
      post.removeClass("hidden").addClass("fade-in");
    } else {
      post.addClass("hidden").removeClass("fade-in");
    }
  });

  // Update load more button visibility
  updateLoadMoreVisibility();
}

// Load More Functionality
function initLoadMore() {
  let visiblePosts = 6; // Initially show 6 posts
  const totalPosts = $(".blog-post").length;

  // Hide posts beyond initial count
  $(".blog-post").each(function (index) {
    if (index >= visiblePosts) {
      $(this).addClass("hidden");
    }
  });

  // Load more button click
  $("#loadMoreBtn").on("click", function () {
    visiblePosts += 3; // Load 3 more posts

    $(".blog-post").each(function (index) {
      if (index < visiblePosts) {
        $(this).removeClass("hidden").addClass("fade-in");
      }
    });

    // Hide load more button if all posts are visible
    if (visiblePosts >= totalPosts) {
      $(this).hide();
    }

    // Smooth scroll to new posts
    setTimeout(() => {
      $("html, body").animate(
        {
          scrollTop:
            $(`.blog-post:nth-child(${visiblePosts - 2})`).offset().top - 100,
        },
        800
      );
    }, 300);
  });

  // Initial visibility check
  updateLoadMoreVisibility();
}

// Update load more button visibility
function updateLoadMoreVisibility() {
  const visiblePosts = $(".blog-post:not(.hidden)").length;
  const totalPosts = $(".blog-post").length;

  if (visiblePosts >= totalPosts) {
    $("#loadMoreBtn").hide();
  } else {
    $("#loadMoreBtn").show();
  }
}

// Newsletter Form Functionality
function initNewsletterForm() {
  $(".newsletter-form").on("submit", function (e) {
    e.preventDefault();

    const email = $(this).find(".newsletter-input").val();
    const submitBtn = $(this).find(".newsletter-btn");
    const originalText = submitBtn.html();

    // Validate email
    if (!isValidEmail(email)) {
      showNotification("Please enter a valid email address.", "error");
      return;
    }

    // Show loading state
    submitBtn.html('<i class="fas fa-spinner fa-spin"></i> Subscribing...');
    submitBtn.prop("disabled", true);

    // Simulate API call
    setTimeout(() => {
      // Reset button
      submitBtn.html(originalText);
      submitBtn.prop("disabled", false);

      // Show success message
      showNotification(
        "Thank you for subscribing! Check your email for confirmation.",
        "success"
      );

      // Clear form
      $(this).find(".newsletter-input").val("");
    }, 2000);
  });
}

// Email validation
function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

// Notification system
function showNotification(message, type = "info") {
  // Remove existing notifications
  $(".notification").remove();

  const notification = $(`
    <div class="notification notification-${type}">
      <div class="notification-content">
        <i class="fas fa-${
          type === "success"
            ? "check-circle"
            : type === "error"
            ? "exclamation-circle"
            : "info-circle"
        }"></i>
        <span>${message}</span>
      </div>
      <button class="notification-close">
        <i class="fas fa-times"></i>
      </button>
    </div>
  `);

  // Add to page
  $("body").append(notification);

  // Show notification
  setTimeout(() => {
    notification.addClass("show");
  }, 100);

  // Auto hide after 5 seconds
  setTimeout(() => {
    hideNotification(notification);
  }, 5000);

  // Close button functionality
  notification.find(".notification-close").on("click", function () {
    hideNotification(notification);
  });
}

// Hide notification
function hideNotification(notification) {
  notification.removeClass("show");
  setTimeout(() => {
    notification.remove();
  }, 300);
}

// Hero animations
function initHeroAnimations() {
  // Trigger hero animations on page load
  setTimeout(() => {
    $(".blog-hero-content").addClass("animate");
    $(".blog-search-container").addClass("animate");
  }, 300);
}

// Scroll animations
function initScrollAnimations() {
  // Intersection Observer for fade-in animations
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("animate-in");
      }
    });
  }, observerOptions);

  // Observe elements
  $(".blog-post, .newsletter-content").each(function () {
    observer.observe(this);
  });

  // Staggered animation for blog posts
  $(".blog-post").each(function (index) {
    $(this).css("animation-delay", `${index * 0.1}s`);
  });
}

// Smooth scroll for navigation links
$('a[href^="#"]').on("click", function (e) {
  e.preventDefault();

  const target = $(this.getAttribute("href"));
  if (target.length) {
    $("html, body").animate(
      {
        scrollTop: target.offset().top - 80,
      },
      800
    );
  }
});

// Add notification styles if not already present
if (!$("#notification-styles").length) {
  $("head").append(`
    <style id="notification-styles">
      .notification {
        position: fixed;
        top: 100px;
        right: 20px;
        background: rgba(0, 0, 0, 0.9);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        padding: 15px 20px;
        backdrop-filter: blur(10px);
        z-index: 9999;
        transform: translateX(400px);
        opacity: 0;
        transition: all 0.3s ease;
        min-width: 300px;
        max-width: 400px;
      }
      
      .notification.show {
        transform: translateX(0);
        opacity: 1;
      }
      
      .notification-content {
        display: flex;
        align-items: center;
        gap: 10px;
        color: white;
        margin-right: 20px;
      }
      
      .notification-success {
        border-left: 4px solid #10b981;
      }
      
      .notification-error {
        border-left: 4px solid #ef4444;
      }
      
      .notification-info {
        border-left: 4px solid #3b82f6;
      }
      
      .notification-success .notification-content i {
        color: #10b981;
      }
      
      .notification-error .notification-content i {
        color: #ef4444;
      }
      
      .notification-info .notification-content i {
        color: #3b82f6;
      }
      
      .notification-close {
        position: absolute;
        top: 10px;
        right: 10px;
        background: none;
        border: none;
        color: rgba(255, 255, 255, 0.6);
        cursor: pointer;
        padding: 5px;
        border-radius: 3px;
        transition: all 0.3s ease;
      }
      
      .notification-close:hover {
        color: white;
        background: rgba(255, 255, 255, 0.1);
      }
      
      @media (max-width: 768px) {
        .notification {
          right: 10px;
          left: 10px;
          min-width: auto;
          max-width: none;
        }
      }
    </style>
  `);
}

// Add fade-in animation styles
if (!$("#fade-in-styles").length) {
  $("head").append(`
    <style id="fade-in-styles">
      .fade-in {
        animation: fadeInUp 0.6s ease forwards;
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
      
      .animate-in {
        animation: slideInUp 0.8s ease forwards;
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
    </style>
  `);
}
