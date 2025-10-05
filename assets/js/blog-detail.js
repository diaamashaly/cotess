// Blog Detail Page JavaScript

$(document).ready(function () {
  // Initialize blog detail functionality
  initSmoothScroll();
  initTableOfContents();
  initCodeCopy();
  initCommentForm();
  initSocialShare();
  initScrollAnimations();
  initReadingProgress();
});

// Smooth scroll for table of contents links
function initSmoothScroll() {
  $('a[href^="#"]').on("click", function (e) {
    e.preventDefault();

    const target = $(this.getAttribute("href"));
    if (target.length) {
      const offset = 100; // Account for fixed navbar
      $("html, body").animate(
        {
          scrollTop: target.offset().top - offset,
        },
        800
      );

      // Highlight the section briefly
      target.addClass("highlight-section");
      setTimeout(() => {
        target.removeClass("highlight-section");
      }, 2000);
    }
  });
}

// Table of contents functionality
function initTableOfContents() {
  // Add scroll spy functionality
  const sections = $(".article-body h2[id]");
  const tocLinks = $(".table-of-contents a");

  if (sections.length > 0) {
    $(window).on("scroll", function () {
      let current = "";

      sections.each(function () {
        const sectionTop = $(this).offset().top - 150;
        const sectionHeight = $(this).outerHeight();

        if (
          $(window).scrollTop() >= sectionTop &&
          $(window).scrollTop() < sectionTop + sectionHeight
        ) {
          current = $(this).attr("id");
        }
      });

      // Update active link
      tocLinks.removeClass("active");
      if (current) {
        $(`.table-of-contents a[href="#${current}"]`).addClass("active");
      }
    });
  }
}

// Code copy functionality
function initCodeCopy() {
  $(".copy-code-btn").on("click", function () {
    const codeBlock = $(this).closest(".code-block").find("code");
    const text = codeBlock.text();

    // Create temporary textarea
    const textarea = document.createElement("textarea");
    textarea.value = text;
    document.body.appendChild(textarea);
    textarea.select();
    document.execCommand("copy");
    document.body.removeChild(textarea);

    // Show feedback
    const btn = $(this);
    const originalIcon = btn.html();
    btn.html('<i class="fas fa-check"></i>');
    btn.addClass("copied");

    setTimeout(() => {
      btn.html(originalIcon);
      btn.removeClass("copied");
    }, 2000);

    // Show notification
    showNotification("Code copied to clipboard!", "success");
  });
}

// Comment form functionality
function initCommentForm() {
  const addCommentBtn = $("#addCommentBtn");
  const addCommentForm = $("#addCommentForm");
  const cancelCommentBtn = $("#cancelComment");

  // Show comment form
  addCommentBtn.on("click", function () {
    addCommentForm.slideDown(300);
    $(this).hide();
  });

  // Hide comment form
  cancelCommentBtn.on("click", function () {
    addCommentForm.slideUp(300);
    addCommentBtn.show();
  });

  // Handle form submission
  $(".comment-form-card form").on("submit", function (e) {
    e.preventDefault();

    const form = $(this);
    const submitBtn = form.find('button[type="submit"]');
    const originalText = submitBtn.text();

    // Show loading state
    submitBtn.text("Posting...").prop("disabled", true);

    // Simulate API call
    setTimeout(() => {
      // Reset form
      form[0].reset();

      // Reset button
      submitBtn.text(originalText).prop("disabled", false);

      // Hide form
      addCommentForm.slideUp(300);
      addCommentBtn.show();

      // Show success message
      showNotification("Comment posted successfully!", "success");
    }, 2000);
  });
}

// Social share functionality
function initSocialShare() {
  const shareButtons = $(".share-btn");
  const url = encodeURIComponent(window.location.href);
  const title = encodeURIComponent($(".blog-title").text());

  shareButtons.on("click", function (e) {
    e.preventDefault();

    const platform = $(this).attr("class").split(" ")[1];
    let shareUrl = "";

    switch (platform) {
      case "facebook":
        shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
        break;
      case "twitter":
        shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${title}`;
        break;
      case "linkedin":
        shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${url}`;
        break;
      case "whatsapp":
        shareUrl = `https://wa.me/?text=${title} ${url}`;
        break;
    }

    if (shareUrl) {
      window.open(shareUrl, "_blank", "width=600,height=400");
    }
  });
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
  $(".blog-article, .sidebar-card, .comment, .related-post-card").each(
    function () {
      observer.observe(this);
    }
  );
}

// Reading progress bar
function initReadingProgress() {
  // Create progress bar
  const progressBar = $('<div class="reading-progress"></div>');
  $("body").append(progressBar);

  // Update progress on scroll
  $(window).on("scroll", function () {
    const article = $(".article-body");
    if (article.length) {
      const articleTop = article.offset().top;
      const articleHeight = article.outerHeight();
      const windowHeight = $(window).height();
      const scrollTop = $(window).scrollTop();

      const progress = Math.min(
        Math.max((scrollTop - articleTop + windowHeight) / articleHeight, 0),
        1
      );

      progressBar.css("width", `${progress * 100}%`);
    }
  });
}

// Newsletter form functionality
function initNewsletterForm() {
  $(".sidebar-newsletter").on("submit", function (e) {
    e.preventDefault();

    const email = $(this).find(".newsletter-input").val();
    const submitBtn = $(this).find(".newsletter-btn");
    const originalText = submitBtn.text();

    // Validate email
    if (!isValidEmail(email)) {
      showNotification("Please enter a valid email address.", "error");
      return;
    }

    // Show loading state
    submitBtn.text("Subscribing...").prop("disabled", true);

    // Simulate API call
    setTimeout(() => {
      // Reset button
      submitBtn.text(originalText).prop("disabled", false);

      // Clear form
      $(this).find(".newsletter-input").val("");

      // Show success message
      showNotification("Thank you for subscribing!", "success");
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

// Initialize newsletter form when page loads
$(document).ready(function () {
  initNewsletterForm();
});

// Add custom styles for reading progress and animations
if (!$("#blog-detail-styles").length) {
  $("head").append(`
    <style id="blog-detail-styles">
      .reading-progress {
        position: fixed;
        top: 0;
        left: 0;
        width: 0%;
        height: 3px;
        background: linear-gradient(90deg, #10b981, #0891b2);
        z-index: 9999;
        transition: width 0.3s ease;
      }
      
      .highlight-section {
        background: rgba(16, 185, 129, 0.1) !important;
        border-radius: 10px;
        padding: 20px !important;
        transition: all 0.3s ease;
      }
      
      .table-of-contents a.active {
        color: #10b981 !important;
        font-weight: 600;
      }
      
      .copy-code-btn.copied {
        color: #10b981 !important;
        background: rgba(16, 185, 129, 0.1) !important;
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
