<?php
$section = "Page nout found";

/* ========= CONTENIDO ========= */
ob_start();
?>

<!-- Hero Quote Section -->
<section class="pt-32 pb-20 px-6">
    <div class="max-w-4xl mx-auto text-center">
        <div class="scroll-reveal">
            <h1 class="font-display text-5xl md:text-6xl font-semibold text-gray-900 mb-12">
                404
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                The page you are looking for does not exist or is not available.
            </p>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();


/* ========= SCRIPTS DE LA VISTA ========= */
ob_start();
?>

<script>
    // Initialize timeline interactions
    document.addEventListener('DOMContentLoaded', function() {
        const timelineItems = document.querySelectorAll('.timeline-item');
        
        timelineItems.forEach(item => {
            item.addEventListener('click', function() {
                const content = this.querySelector('.timeline-content');
                const arrow = this.querySelector('svg');
                const isExpanded = content.classList.contains('expanded');
                
                // Close all other items
                timelineItems.forEach(otherItem => {
                    if (otherItem !== this) {
                        otherItem.classList.remove('active');
                        otherItem.querySelector('.timeline-content').classList.remove('expanded');
                        otherItem.querySelector('svg').style.transform = 'rotate(0deg)';
                    }
                });
                
                // Toggle current item
                if (isExpanded) {
                    this.classList.remove('active');
                    content.classList.remove('expanded');
                    arrow.style.transform = 'rotate(0deg)';
                } else {
                    this.classList.add('active');
                    content.classList.add('expanded');
                    arrow.style.transform = 'rotate(180deg)';
                }
            });
        });
        
        // Initialize scroll reveal
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