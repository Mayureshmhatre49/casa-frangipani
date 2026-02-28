
// Wait for DOM
document.addEventListener("DOMContentLoaded", () => {

    // --- Configuration ---
    const config = {
        frameCount: 120,
        urlPrefix: "./assets/hero-sequence/ezgif-frame-",
        urlSuffix: ".jpg",
        canvasId: "hero-canvas",
        scrollTriggerTrigger: ".hero-section"
    };

    // --- State ---
    const canvas = document.getElementById(config.canvasId);
    const ctx = canvas.getContext("2d");
    const images = [];
    const seq = { frame: 0 }; // Object to tween

    // Set canvas dimensions
    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        render(); // Re-render current frame on resize
    }
    window.addEventListener('resize', resizeCanvas);
    resizeCanvas();

    // --- Image Preloading ---

    // Helper to generate image path with 3-digit padding
    const currentFrame = index => (
        `${config.urlPrefix}${(index + 1).toString().padStart(3, '0')}${config.urlSuffix}`
    );

    // Load first batch (LCP optimization)
    const preloadImages = () => {
        // Preload all images but prioritize 0-15
        for (let i = 0; i < config.frameCount; i++) {
            const img = new Image();
            img.src = currentFrame(i);
            images.push(img);
            // If it's the first frame, render immediately when loaded
            if (i === 0) {
                img.onload = render;
            }
        }
    };

    preloadImages();

    // --- Rendering ---

    function render() {
        // Ensure strictly integer frame index
        const frameIndex = Math.min(config.frameCount - 1, Math.floor(seq.frame));
        const img = images[frameIndex];

        if (img && img.complete) {
            // Draw image generic cover (scale to fill)
            const hRatio = canvas.width / img.width;
            const vRatio = canvas.height / img.height;
            const ratio = Math.max(hRatio, vRatio);
            const centerShift_x = (canvas.width - img.width * ratio) / 2;
            const centerShift_y = (canvas.height - img.height * ratio) / 2;

            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.drawImage(img, 0, 0, img.width, img.height,
                centerShift_x, centerShift_y, img.width * ratio, img.height * ratio);
        }
    }

    // --- GSAP ScrollTrigger ---

    gsap.registerPlugin(ScrollTrigger);
    gsap.defaults({ ease: "power2.out", duration: 1 });

    // --- Initial States (MUST be before ScrollTrigger batches to prevent FOUC) ---
    gsap.set(".sf-card, .gallery-item", { opacity: 0, y: 40 });
    gsap.set(".am-card", { opacity: 0, y: 25, scale: 0.96 });
    gsap.set(".ideal-card", { opacity: 0, scale: 0.85, y: 25 });

    // Pin hero and scrub sequence
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".hero-section",
            start: "top top",
            end: "+=300%", // Scroll distance to play sequence
            pin: true,
            scrub: 1, // Increased from 0.5 to 1 for "heavier" premium feel
            // markers: true, // Debug
            onUpdate: render // Render on scroll update
        }
    });

    tl.to(seq, {
        frame: config.frameCount - 1,
        snap: "frame",
        ease: "none",
        duration: 1
    });

    // --- Text Animations ---

    // --- Hero Text Entrance Animation ---
    // Reverted to simple fade-up as per user request
    gsap.from(".hero-content .hero-title", {
        opacity: 0,
        y: 30,
        duration: 1.5,
        ease: "power3.out",
        delay: 0.5
    });

    // Optional: simple fade for the rest to ensure they look nice but no complex timeline
    gsap.from(".hero-subheading, .hero-ctas", {
        opacity: 0,
        y: 20,
        duration: 1,
        delay: 1,
        ease: "power3.out"
    });

    // Fade out hero text on scroll
    gsap.to(".hero-content", {
        scrollTrigger: {
            trigger: ".hero-section",
            start: "top top",
            end: "bottom top",
            scrub: true
        },
        opacity: 0,
        y: -50,
        scale: 0.95
    });

    // --- Immersive Room Tour Animation ---
    // For each room section: Pin it, Scale Background, Reveal Text
    const sections = gsap.utils.toArray('.immersive-section');

    sections.forEach((section, i) => {
        const bg = section.querySelector('.immersive-bg');
        const content = section.querySelector('.glass-capsule');

        // Pinning the section
        ScrollTrigger.create({
            trigger: section,
            start: "top top",
            end: "+=100%", // Pin for 1 screen height equivalent
            pin: true,
            scrub: true,
            // markers: true
        });

        // Background Parallax (Scale Up)
        gsap.fromTo(bg,
            { scale: 1 },
            {
                scale: 1.2,
                ease: "none",
                scrollTrigger: {
                    trigger: section,
                    start: "top top",
                    end: "+=100%",
                    scrub: true
                }
            }
        );

        // Content Reveal (Float Up with Scale)
        gsap.from(content, {
            y: 50,
            opacity: 0,
            scale: 0.95,
            duration: 1,
            ease: "power3.out",
            scrollTrigger: {
                trigger: section,
                start: "top center", // Trigger when section hits middle
                toggleActions: "play none none reverse"
            }
        });
    });

    // Amenities Reveal (Updated Trigger)

    // Amenities Reveal
    ScrollTrigger.batch(".amenity-item", {
        onEnter: batch => gsap.to(batch, { opacity: 1, y: 0, scale: 1, stagger: 0.05, duration: 0.8, ease: "back.out(1.5)" }),
        start: "top 90%"
    });

    // Ideal For Cards
    ScrollTrigger.batch(".ideal-card", {
        onEnter: batch => gsap.to(batch, { opacity: 1, scale: 1, y: 0, stagger: 0.1, duration: 0.8, ease: "back.out(1.2)" }),
        start: "top 85%"
    });

    // Gallery Fade In
    ScrollTrigger.batch(".gallery-item", {
        onEnter: batch => gsap.to(batch, { opacity: 1, y: 0, stagger: 0.1, duration: 1, ease: "power2.out" }),
        start: "top 85%"
    });

    // Features Reveal (Fixed: was missing)
    ScrollTrigger.batch(".sf-card", {
        onEnter: batch => gsap.to(batch, { opacity: 1, y: 0, stagger: 0.1, duration: 0.8, ease: "power2.out" }),
        start: "top 85%"
    });

    // General Section Reveal (Titles & Text)
    // Select all section titles and intro texts
    const textElements = gsap.utils.toArray('.section-title, .intro-text p');

    textElements.forEach(el => {
        gsap.from(el, {
            scrollTrigger: {
                trigger: el,
                start: "top 85%",
                toggleActions: "play none none reverse"
            },
            y: 40,
            opacity: 0,
            duration: 1.2,
            ease: "power3.out"
        });
    });

    // Special Split Text effect simulation for "Experience" Paragraph using spans if we had them, 
    // but for now, we'll just ensure smooth fade-up is consistent.

    // --- Smooth Scroll (Lenis) ---
    const lenis = new Lenis({
        duration: 1.4,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        smoothWheel: true,
        smoothTouch: false,
        touchMultiplier: 1.5
    });

    // Link Lenis to GSAP ticker for frame-perfect sync
    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
    });
    gsap.ticker.lagSmoothing(0);

    // --- Header Scroll Logic (Floating Capsule) ---
    const header = document.querySelector('.site-header');
    if (header) {
        const toggleHeader = () => {
            if (window.scrollY > 50) header.classList.add('scrolled');
            else header.classList.remove('scrolled');
        };
        window.addEventListener('scroll', toggleHeader, { passive: true });
        toggleHeader(); // Check on load
    }

    // --- Optimization: Intersection Observer ---
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                // Optional: Pause logic if needed
            }
        });
    });
    // Observer the container of the canvas instead of directly the canvas for better results
    const heroSection = document.querySelector('.hero-section');
    if (heroSection) observer.observe(heroSection);

    // --- Map iframe scroll fix ---
    // Only enable iframe pointer-events on click, disable on scroll-away
    const mapCard = document.querySelector('.loc-map-card');
    if (mapCard) {
        mapCard.addEventListener('click', function () {
            this.classList.add('map-active');
        });
        // Deactivate when user scrolls away
        document.addEventListener('scroll', function () {
            if (mapCard.classList.contains('map-active')) {
                mapCard.classList.remove('map-active');
            }
        }, { passive: true });
        // Deactivate when clicking outside
        document.addEventListener('click', function (e) {
            if (!mapCard.contains(e.target)) {
                mapCard.classList.remove('map-active');
            }
        });
    }

    // Amenity card reveal
    ScrollTrigger.batch(".am-card", {
        onEnter: batch => gsap.to(batch, { opacity: 1, y: 0, scale: 1, stagger: 0.06, duration: 0.7, ease: "back.out(1.3)" }),
        start: "top 90%"
    });

});
