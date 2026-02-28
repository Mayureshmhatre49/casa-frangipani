# Read v4 index.html
$html = Get-Content "c:\xampp\htdocs\casa-frangipani\v4\index.html" -Raw -Encoding UTF8

# 1. Fix hero-sequence image path: ./assets/ -> /assets/
$html = $html -replace '\./assets/hero-sequence/', '/assets/hero-sequence/'

# 2. Fix the CSS/JS links in head - update external css/js references that point to relative paths
$html = $html -replace 'href="css/style\.css"', 'href="/css/buy-page.css"'

# 3. Replace the page title and meta
$html = $html -replace '<title>Casa Frangipani \| Luxury Villa For Sale in Alibag / Mandwa</title>', '<title>Casa Frangipani | Luxury Villa For Sale in Alibag / Mandwa – Buy Private Estate</title>'

# 4. Fix canonical URL to actual domain
$html = $html -replace 'href="https://www\.example\.com/casa-frangipani-alibag"', 'href="{{ url(''/casa-frangipani-luxury-villa-buy-alibaug'') }}"'
$html = $html -replace 'content="https://www\.example\.com/casa-frangipani-alibag"', 'content="{{ url(''/casa-frangipani-luxury-villa-buy-alibaug'') }}"'
$html = $html -replace '"url": "https://www\.example\.com/casa-frangipani-alibag"', '"url": "{{ url(''/casa-frangipani-luxury-villa-buy-alibaug'') }}"'
$html = $html -replace '"@id": "https://www\.example\.com/casa-frangipani-alibag#business"', '"@id": "{{ url(''/casa-frangipani-luxury-villa-buy-alibaug'') }}#business"'
$html = $html -replace '"@id": "https://www\.example\.com/casa-frangipani-alibag#listing"', '"@id": "{{ url(''/casa-frangipani-luxury-villa-buy-alibaug'') }}#listing"'

# 5. Replace the enquiry form: add CSRF token and wire endpoint
$oldForm = '<form id="contactForm" novalidate>'
$newForm = '<form id="contactForm" novalidate data-action="{{ route(''buy.enquiry.store'') }}">' + "`n" + '        @csrf'
$html = $html -replace [regex]::Escape($oldForm), $newForm

# 6. Replace the fake form submission JS with a real fetch to the Laravel endpoint
$oldSubmit = @'
          const payload = Object.fromEntries(new FormData(contactForm).entries());

          try {
            formStatus.textContent = "Submitting your request...";
            // Example production submit:
            // await fetch('/contact', {
            //   method: 'POST',
            //   headers: { 'Content-Type': 'application/json' },
            //   body: JSON.stringify(payload)
            // });

            await new Promise(function (resolve) { setTimeout(resolve, 700); });

            formStatus.textContent = "Thank you. Our private client desk will contact you shortly.";
            formStatus.classList.add("success");
            contactForm.reset();
            console.info("Contact payload preview:", payload);
          } catch (error) {
            formStatus.textContent = "Submission failed. Please call +91 90000 00000.";
            formStatus.classList.add("error");
          }
'@

$newSubmit = @'
          const formData = new FormData(contactForm);
          const action = contactForm.getAttribute("data-action");
          const token = contactForm.querySelector('[name="_token"]').value;

          try {
            formStatus.textContent = "Submitting your request...";
            const response = await fetch(action, {
              method: "POST",
              headers: { "X-CSRF-TOKEN": token, "Accept": "application/json" },
              body: formData
            });
            const data = await response.json();
            if (data.success) {
              formStatus.textContent = data.message || "Thank you. Our private client desk will contact you shortly.";
              formStatus.classList.add("success");
              contactForm.reset();
            } else {
              throw new Error(data.message || "Unknown error");
            }
          } catch (error) {
            formStatus.textContent = "Submission failed. Please call or WhatsApp us directly.";
            formStatus.classList.add("error");
          }
'@

$html = $html -replace [regex]::Escape($oldSubmit), $newSubmit

# 7. Update the hero section title to reflect BUY page (not rental)
$html = $html -replace 'Stay at Casa Frangipani', 'Own Casa Frangipani'
$html = $html -replace 'A Private Luxury Villa in Alibaug', 'A Private Seafront Estate in Alibaug'
$html = $html -replace 'Experience the Pinnacle of Private Luxury\. A fully serviced private pool villa designed for relaxed\s+coastal living\.', 'A rare opportunity to acquire an ultra-luxury seafront estate in Mandwa, Alibag. Designed for discerning buyers seeking privacy, prestige, and coastal legacy.'
$html = $html -replace 'Check Availability', 'Schedule Private Tour'
$html = $html -replace 'href="#booking"', 'href="#ownership" data-open-modal="contactModal" data-focus="#fullName"'

# 8. Add the buy-page JS file script tag before closing body
$html = $html -replace '</body>', '<script src="/js/buy-page.js"></script>' + "`n" + '</body>'

# Remove the old duplicate gsap defer scripts (already loaded in head)
$html = $html -replace '  <script defer src="https://cdn\.jsdelivr\.net/npm/gsap@3\.12\.5/dist/gsap\.min\.js"></script>\r?\n', ''
$html = $html -replace '  <script defer src="https://cdn\.jsdelivr\.net/npm/gsap@3\.12\.5/dist/ScrollTrigger\.min\.js"></script>\r?\n', ''

# 9. Add DOCTYPE blade comment at top
$bladeHeader = "{{-- Casa Frangipani | Buy Page | /casa-frangipani-luxury-villa-buy-alibaug --}}`n"
$html = $bladeHeader + $html

# Write the blade file
$html | Set-Content "c:\xampp\htdocs\casa-frangipani\resources\views\buy.blade.php" -Encoding UTF8
Write-Host "buy.blade.php created successfully!"
Write-Host "File size: $((Get-Item 'c:\xampp\htdocs\casa-frangipani\resources\views\buy.blade.php').Length) bytes"
