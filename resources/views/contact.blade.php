@extends('layouts.layouts')
@extends('layouts.links')

@section('section')

<!-- CONTACT -->
<section class="contact section" id="contact">
    <div class="contact__container container grid">
        <div class="contact__data">
            <h2 class="section__title">Contact Me</h2>

            <p class="contact__description">Tell me about your next project.</p>

            <button class="contact__button button" id="contact-btn">
                Copy Email <i class="ri-file-copy-line"></i>
                <!-- Email -->
                <span class="contact__email" id="contact-email">skhanzaakhlaqk64@gmail.com</span>
            </button>
        </div>

        <div class="contact__content grid">
            <div class="contact__info grid">
                <div>
                    <h3 class="contact__title">Email</h3>
                    <address class="contact__address">
                        skhanzaakhlaqk64@gmail.com
                    </address>
                </div>

                <div>
                    <h3 class="contact__title">Location</h3>
                    <address class="contact__address">Azad Kashmir- Rawalakot</address>
                </div>
            </div>

            <div class="contact__social">
                <h3 class="contact__title">Social Media</h3>

                <div class="contact__links">
                    <a href="https://www.linkedin.com/in/hanza-akhlaq-702854280/" target="_blank" class="contact__link">
                        Linkedin
                        <i class="ri-arrow-right-up-long-line"></i>
                    </a>

                    <a href="https://github.com/repos?q=owner%3A%40me" target="_blank" class="contact__link">
                        GitHub
                        <i class="ri-arrow-right-up-long-line"></i>
                    </a>

                    <a href="https://www.instagram.com/i.m_hanza?igsh=ZWxhYnB4Zmtqandv" target="_blank"
                        class="contact__link">
                        Instagram
                        <i class="ri-arrow-right-up-long-line"></i>
                    </a>

                    <a href="https://www.facebook.com/hanzlaa.khan.9" target="_blank" class="contact__link">
                        FaceBook
                        <i class="ri-arrow-right-up-long-line"></i>
                    </a>
                </div>
            </div>

            <div class="contact__write">
                <h3 class="contact__title">Write Me & We'll Talk</h3>

                <div class="contact__links">
                    <a href="https://Wa.me/+923348469311" target="_blank" class="contact__link">
                        WhatsApp
                        <i class="ri-arrow-right-up-long-line"></i>
                    </a>



                    <a href="https://www.instagram.com/i.m_hanza?igsh=ZWxhYnB4Zmtqandv" target="_blank"
                        class="contact__link">
                        Instagram
                        <i class="ri-arrow-right-up-long-line"></i>
                    </a>

                    <a href="https://github.com/repos?q=owner%3A%40me" target="_blank" class="contact__link">
                        GitHub
                        <i class="ri-arrow-right-up-long-line"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Copy email to clipboard
    const copyBtn = document.getElementById("contact-btn");
    const emailElement = document.getElementById("contact-email");

    if (copyBtn && emailElement) {
        copyBtn.addEventListener("click", () => {
            const text = emailElement.textContent;

            if (navigator.clipboard && window.isSecureContext) {
                navigator.clipboard.writeText(text);
            } else {
                // Fallback for mobile / insecure HTTP
                const textarea = document.createElement("textarea");
                textarea.value = text;
                textarea.style.position = "fixed";
                textarea.style.left = "-9999px";
                document.body.appendChild(textarea);
                textarea.focus();
                textarea.select();
                document.execCommand("copy");
                document.body.removeChild(textarea);
            }

            copyBtn.innerHTML = "Email Copied ✓";

            setTimeout(() => {
                copyBtn.innerHTML = "Copy email";
            }, 2000);
        });
    }

    // ScrollReveal animations
    ScrollReveal().reveal('.contact__data', {
        origin: 'left',
        distance: '50px',
        duration: 1000,
        delay: 200,
        easing: 'ease-in-out',
        reset: true
    });

    ScrollReveal().reveal('.contact__info, .contact__social, .contact__write', {
        origin: 'bottom',
        distance: '50px',
        duration: 1000,
        delay: 400,
        easing: 'ease-in-out',
        reset: true
    });

    ScrollReveal().reveal('.contact__link', {
        origin: 'right',
        distance: '50px',
        duration: 1000,
        delay: 600,
        easing: 'ease-in-out',
        reset: true,
        interval: 200
    });

    // Optional: Add a click event to the contact links for additional interactivity
    document.querySelectorAll('.contact__link').forEach(link => {
        link.addEventListener('click', function () {
            // You can add any additional behavior here if needed
            console.log('Contact link clicked: ' + this.textContent.trim());
        });
    });
</script>



@section('title')
    Contact
@endsection