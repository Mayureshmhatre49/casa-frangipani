Implementation Plan - Luxury Villa Landing Page (HTML/CSS/JS)
Goal
Build a high-performance, luxury landing page for "Casa Frangipani" using a vanilla HTML/CSS/JS stack, replacing the previously initialized Next.js project. This setup will be easier to migrate to a Laravel Blade template later.

Proposed Changes
Cleanup
[DELETE] Remove Next.js configuration files (package.json, tsconfig.json, next.config.js, etc.) and directories (app, public).
[MOVE] Move public/assets to ./assets to fit a standard static site structure.
Core Structure
[NEW] 
index.html
Main entry point.
Dependencies: Load GSAP, ScrollTrigger, Lenis via CDN.
Structure:
<canvas> element for the hero sequence.
Hero overlay text with split-text animation class.
"The Villa Experience" section with 2-column layout.
[NEW] 
css/style.css
Design System: Define CSS variables for colors (Cream #F5F5F0, Dark Text, etc.) and fonts.
Typography: Import Google Fonts (e.g., 'Playfair Display' for headers, 'Inter' for body).
Layout: CSS Grid/Flexbox for the 2-column section.
Canvas: Full-screen fixed positioning for the hero canvas.
[NEW] 
js/main.js
Canvas Logic:
Preload first 15 frames of the JPG sequence (ezgif-frame-001.jpg...).
Render loop using requestAnimationFrame.
Function to draw specific frame based on scroll progress.
Scroll Integration:
Initialize Lenis with duration: 1.5 (or equivalent intensity setting).
Setup GSAP ScrollTrigger to scrub the frame index from 0 to 119 based on scroll position of the Hero section.
Pin the Hero section during the sequence.
Animations:
Text reveal on load/scroll.
Staggered reveal for Section 2 bullet points.
Optimization:
Intersection Observer to pause Canvas rendering when out of view.
Verification Plan
Automated Tests
None (Visual project).
Manual Verification
Open index.html in Browser:
Verify the Canvas loads the first image immediately.
Scroll down: Verify the image sequence plays smoothly.
Verify the "Experience the Pinnacle..." text reveals correctly.
Continue scrolling: Verify the section transitions to "The Villa Experience".
Check the "Staggered Reveal" of bullet points.
Verify smoothness (Lenis effect).
Check Console for any errors (404s on images, etc.).
Browser Tool Verification
I will use the browser_subagent to open the local index.html file and capture a screenshot/video to confirm the rendering and animation states.