document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.querySelector(".custom-navbar");
  const hotline = document.querySelector(".hotline-header");
  const backToTopBtn = createBackToTopButton();

  // Navbar sticky + hotline hide
  window.addEventListener("scroll", () => {
    const scrollY = window.scrollY;

    if (scrollY > 80) {
      navbar.classList.add("navbar-shrink", "shadow-sm");
      hotline?.classList.add("slide-up");
      backToTopBtn.style.display = "block";
    } else {
      navbar.classList.remove("navbar-shrink", "shadow-sm");
      hotline?.classList.remove("slide-up");
      backToTopBtn.style.display = "none";
    }
  });

  // Smooth internal scroll
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", (e) => {
      const targetID = anchor.getAttribute("href");
      const targetEl = document.querySelector(targetID);
      if (targetEl) {
        e.preventDefault();
        targetEl.scrollIntoView({ behavior: "smooth", block: "start" });
      }
    });
  });

  // Hero text fancy animation
  animateHeroHeading(".hero-section h1", 40);
  animateButton(".hero-btn");

  // Button hover effects
  document.querySelectorAll(".btn").forEach(btn => {
    btn.style.transition = "transform 0.3s ease";
    btn.addEventListener("mouseenter", () => btn.style.transform = "scale(1.08)");
    btn.addEventListener("mouseleave", () => btn.style.transform = "scale(1)");
  });

  // Scroll animations
  revealOnScroll(".fade-in");

  // Testimonial
  setupTestimonialFade();

  // Back to top button
  function createBackToTopButton() {
    const btn = document.createElement("button");
    btn.innerHTML = "↑";
    btn.id = "backToTopBtn";
    Object.assign(btn.style, {
      position: "fixed",
      bottom: "40px",
      right: "40px",
      padding: "12px 16px",
      fontSize: "22px",
      borderRadius: "50%",
      backgroundColor: "#ff4d00",
      color: "#fff",
      border: "none",
      cursor: "pointer",
      zIndex: "9999",
      boxShadow: "0 8px 20px rgba(0,0,0,0.2)",
      display: "none",
      transition: "all 0.4s ease",
    });
    document.body.appendChild(btn);
    btn.addEventListener("click", () => window.scrollTo({ top: 0, behavior: "smooth" }));
    return btn;
  }

  // Animate h1 letter-by-letter
  function animateHeroHeading(selector, speed) {
    const el = document.querySelector(selector);
    if (!el) return;

    const text = el.textContent.trim();
    el.textContent = "";
    text.split("").forEach((char, i) => {
      const span = document.createElement("span");
      span.textContent = char;
      span.style.opacity = "0";
      span.style.display = "inline-block";
      span.style.transform = "translateX(40px)";
      span.style.transition = `all 0.4s ease ${i * speed}ms`;
      el.appendChild(span);

      requestAnimationFrame(() => {
        setTimeout(() => {
          span.style.opacity = "1";
          span.style.transform = "translateX(0)";
        }, 50);
      });
    });
  }

  // Animate button entrance
  function animateButton(selector) {
    const btn = document.querySelector(selector);
    if (!btn) return;

    btn.style.opacity = "0";
    btn.style.transform = "translateY(50px)";
    setTimeout(() => {
      btn.style.transition = "all 0.8s ease";
      btn.style.opacity = "1";
      btn.style.transform = "translateY(0)";
    }, 1000);
  }

  // Scroll reveal animation
  function revealOnScroll(selector) {
    const elements = document.querySelectorAll(selector);
    const obs = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("appear");
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });

    elements.forEach(el => {
      el.classList.add("invisible");
      obs.observe(el);
    });
  }

  // Testimonial fade
  function setupTestimonialFade() {
    const testimonial = document.querySelector(".testimonial-section blockquote");
    if (!testimonial) return;
    testimonial.style.opacity = "1";

    setInterval(() => {
      testimonial.style.transition = "opacity 1s ease";
      testimonial.style.opacity = "0.3";
      setTimeout(() => testimonial.style.opacity = "1", 1000);
    }, 6000);
  }
});
