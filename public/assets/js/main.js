// Main JavaScript for Thames&Tokyo website

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initTypewriter();
    initScrollReveal();
    initTrustCards();
    initCarousel();
    initMobileMenu();
    initSmoothScroll();
    initFormValidation();
});

// Typewriter effect for hero tagline
function initTypewriter() {
    const typedElement = document.getElementById('typed-text');
    if (typedElement) {
        const typed = new Typed('#typed-text', {
            strings: [
                'Curating the inaccessible',
                'Your bridge to Japan',
                'Unlocking hidden quality'
            ],
            typeSpeed: 80,
            backSpeed: 50,
            backDelay: 2000,
            startDelay: 500,
            loop: true,
            showCursor: true,
            cursorChar: '|'
        });
    }
}

// Scroll reveal animations
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

    // Observe all scroll-reveal elements
    document.querySelectorAll('.scroll-reveal').forEach(el => {
        observer.observe(el);
    });
}

// Trust challenge cards interaction
function initTrustCards() {
    const trustCards = document.querySelectorAll('.trust-card');
    
    trustCards.forEach(card => {
        card.addEventListener('click', function() {
            const hiddenDetails = this.querySelector('.hidden-details');
            const isExpanded = this.classList.contains('expanded');
            
            // Close all other cards
            trustCards.forEach(otherCard => {
                if (otherCard !== this) {
                    otherCard.classList.remove('expanded');
                    const otherDetails = otherCard.querySelector('.hidden-details');
                    otherDetails.style.opacity = '0';
                    otherDetails.style.maxHeight = '0';
                }
            });
            
            // Toggle current card
            if (isExpanded) {
                this.classList.remove('expanded');
                hiddenDetails.style.opacity = '0';
                hiddenDetails.style.maxHeight = '0';
                this.querySelector('span').textContent = 'Click to learn more →';
            } else {
                this.classList.add('expanded');
                hiddenDetails.style.opacity = '1';
                hiddenDetails.style.maxHeight = '200px';
                this.querySelector('span').textContent = 'Click to collapse ←';
            }
        });
    });
}

// Product carousel
function initCarousel() {
    const carousel = document.getElementById('delicatessen-carousel');
    if (carousel) {
        new Splide('#delicatessen-carousel', {
            type: 'loop',
            perPage: 3,
            perMove: 1,
            gap: '2rem',
            autoplay: true,
            interval: 4000,
            pauseOnHover: true,
            breakpoints: {
                768: {
                    perPage: 1,
                    gap: '1rem'
                },
                1024: {
                    perPage: 2,
                    gap: '1.5rem'
                }
            }
        }).mount();
    }
}

// Mobile menu toggle
function initMobileMenu() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const nav = document.querySelector('nav');
    
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function() {
            // Create mobile menu if it doesn't exist
            let mobileMenu = document.getElementById('mobile-menu');
            if (!mobileMenu) {
                mobileMenu = createMobileMenu();
                nav.appendChild(mobileMenu);
            }
            
            // Toggle menu visibility
            mobileMenu.classList.toggle('hidden');
        });
    }
}

function createMobileMenu() {
    const mobileMenu = document.createElement('div');
    mobileMenu.id = 'mobile-menu';
    mobileMenu.className = 'md:hidden bg-white border-t border-gray-200 py-4 hidden';
    mobileMenu.innerHTML = `
        <div class="px-6 space-y-4">
            <a href="index.html" class="block text-gray-900 font-medium">Home</a>
            <a href="about.html" class="block text-gray-600 hover:text-gray-900">About</a>
            <a href="services.html" class="block text-gray-600 hover:text-gray-900">Services</a>
            <a href="access-stories.html" class="block text-gray-600 hover:text-gray-900">Access Stories</a>
            <a href="delicatessen.html" class="block text-gray-600 hover:text-gray-900">Delicatessen</a>
            <a href="contact.html" class="block text-gray-600 hover:text-gray-900">Contact</a>
        </div>
    `;
    return mobileMenu;
}

// Smooth scroll for anchor links
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// Utility function for staggered animations
function staggerAnimation(elements, delay = 100) {
    elements.forEach((element, index) => {
        setTimeout(() => {
            element.classList.add('revealed');
        }, index * delay);
    });
}

// Page transition effects
function initPageTransitions() {
    // Add loading animation when navigating
    document.querySelectorAll('a[href$=".html"]').forEach(link => {
        link.addEventListener('click', function(e) {
            if (this.hostname === window.location.hostname) {
                e.preventDefault();
                
                // Add fade out effect
                document.body.style.opacity = '0.8';
                document.body.style.transition = 'opacity 0.3s ease';
                
                // Navigate after animation
                setTimeout(() => {
                    window.location.href = this.href;
                }, 300);
            }
        });
    });
}

// Initialize page transitions
initPageTransitions();

// Navbar scroll effect
window.addEventListener('scroll', function() {
    const nav = document.querySelector('nav');
    if (window.scrollY > 50) {
        nav.classList.add('shadow-lg');
    } else {
        nav.classList.remove('shadow-lg');
    }
});

// Add loading animation when page loads
window.addEventListener('load', function() {
    document.body.style.opacity = '0';
    document.body.style.transition = 'opacity 0.5s ease';
    
    setTimeout(() => {
        document.body.style.opacity = '1';
    }, 100);
});

// Form validation helper (for contact page)
function validateForm(form) {
    const inputs = form.querySelectorAll('input[required], textarea[required], select[required]');
    let isValid = true;
    
    inputs.forEach(input => {
        if (!input.value.trim()) {
            input.classList.add('border-red-500');
            isValid = false;
        } else {
            input.classList.remove('border-red-500');
        }
    });
    
    return isValid;
}

// Email validation helper
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Success message helper
function showSuccessMessage(message, duration = 3000) {
    const successDiv = document.createElement('div');
    successDiv.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50';
    successDiv.textContent = message;
    
    document.body.appendChild(successDiv);
    
    // Animate in
    setTimeout(() => {
        successDiv.style.transform = 'translateX(0)';
        successDiv.style.transition = 'transform 0.3s ease';
    }, 100);
    
    // Remove after duration
    setTimeout(() => {
        successDiv.style.transform = 'translateX(100%)';
        setTimeout(() => {
            document.body.removeChild(successDiv);
        }, 300);
    }, duration);
}

// Error message helper
function showErrorMessage(message, duration = 3000) {
    const errorDiv = document.createElement('div');
    errorDiv.className = 'fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg z-50';
    errorDiv.textContent = message;
    
    document.body.appendChild(errorDiv);
    
    // Animate in
    setTimeout(() => {
        errorDiv.style.transform = 'translateX(0)';
        errorDiv.style.transition = 'transform 0.3s ease';
    }, 100);
    
    // Remove after duration
    setTimeout(() => {
        errorDiv.style.transform = 'translateX(100%)';
        setTimeout(() => {
            document.body.removeChild(errorDiv);
        }, 300);
    }, duration);
}

// Export functions for use in other pages
window.ThamesTokyo = {
    validateForm,
    isValidEmail,
    showSuccessMessage,
    showErrorMessage,
    staggerAnimation
};

// ============================================
// Form Validation & Submission
// ============================================

const contactForm = document.getElementById('contact-form');
const formFeedback = document.getElementById('form-feedback');

function initFormValidation() {
    if (!contactForm) return;
    
    contactForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        e.stopPropagation();
        
        if (!contactForm.checkValidity()) {
            contactForm.classList.add('was-validated');
            return;
        }
        
        // Get form data
        const formData = new FormData(contactForm);
        const data = Object.fromEntries(formData);
        
        try {
            // Show loading state
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.disabled = true;
            submitBtn.textContent = 'Enviando...';
            
            // Using Formspree (recommended)
            // 1. Sign up at https://formspree.io/
            // 2. Create a new form
            // 3. Replace 'YOUR_FORM_ID' below with your actual Formspree form ID
            
            const response = await fetch('https://formspree.io/f/mbddlgrg', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            });
            
            const success = response.ok;
            
            if (success) {
                showFormFeedback('success', '¡Mensaje enviado con éxito! Te contactaremos pronto.');
                contactForm.reset();
                contactForm.classList.remove('was-validated');
            } else {
                throw new Error('Error en el envío');
            }
            
            // Restore button
            submitBtn.disabled = false;
            submitBtn.textContent = originalText;
            
        } catch (error) {
            console.error('Error submitting form:', error);
            showFormFeedback('danger', 'Hubo un error al enviar el mensaje. Por favor intenta nuevamente.');
            
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            submitBtn.disabled = false;
            submitBtn.textContent = 'Enviar mensaje';
        }
    });
}

function showFormFeedback(type, message) {
    if (!formFeedback) return;
    
    formFeedback.className = `alert alert-${type} show`;
    formFeedback.textContent = message;
    formFeedback.setAttribute('role', 'alert');
    
    // Auto-hide after 5 seconds
    setTimeout(() => {
        formFeedback.classList.remove('show');
    }, 5000);
}