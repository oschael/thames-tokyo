<?php
$section = "Page not found";

/* ========= CONTENIDO ========= */
ob_start();
?>

<!-- Hero Quote Section -->
<section class="section-hero section-px">
    <div class="max-w-4xl mx-auto text-center">
        <div class="scroll-reveal">
            <h1 class="font-display display-1 fw-semibold text-gray-900 mb-5">
                404
            </h1>
            <p class="fs-5 text-gray-600 max-w-3xl mx-auto mb-5">
                The page you are looking for does not exist or is not available.
            </p>
            <a href="/" class="btn-primary-tt">
                Return to Home
            </a>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();


/* ========= SCRIPTS DE LA VISTA ========= */
ob_start();
?>

<script>
    // Initialize scroll reveal
    document.addEventListener('DOMContentLoaded', function() {
        initScrollReveal();
    });
    
    function initScrollReveal() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.scroll-reveal').forEach(el => {
            observer.observe(el);
        });
    }
</script>

<?php
$pageScripts = ob_get_clean();

include __DIR__ . '/../layout.php';
