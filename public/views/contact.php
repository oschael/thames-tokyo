<?php
$section = "Contact";

/* ========= CONTENIDO ========= */
ob_start();
?>

<!-- Hero Section -->
<section class="section-py section-px pt-hero">
    <div class="container-sm text-center">
        <div class="scroll-reveal">
            <h1 class="font-display fs-display fw-semibold text-dark mb-4">
                Start a Confidential Conversation
            </h1>
            <p class="fs-5 text-muted mx-auto lh-lg" style="max-width: 48rem;">
                Every successful partnership begins with understanding your unique access challenge. Rie personally reviews every inquiry within 24 hours.
            </p>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="section-py section-px">
    <div class="container-tt">
        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="bg-white rounded-3 shadow p-4 p-md-5 scroll-reveal">
                    <h2 class="font-display fs-3 fw-semibold text-dark mb-4">
                        Tell Us About Your Access Challenge
                    </h2>
                    
                    <form id="contact-form">
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-semibold small">
                                    Full Name *
                                </label>
                                <input type="text" id="name" name="name" required 
                                        class="form-control form-control-lg"
                                        placeholder="Your full name">
                            </div>
                            <div class="col-md-6">
                                <label for="company" class="form-label fw-semibold small">
                                    Company Name *
                                </label>
                                <input type="text" id="company" name="company" required 
                                        class="form-control form-control-lg"
                                        placeholder="Your company name">
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-semibold small">
                                    Email Address *
                                </label>
                                <input type="email" id="email" name="email" required 
                                        class="form-control form-control-lg"
                                        placeholder="your.email@company.com">
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label fw-semibold small">
                                    Phone Number
                                </label>
                                <input type="tel" id="phone" name="phone" 
                                        class="form-control form-control-lg"
                                        placeholder="Your phone number">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="sector" class="form-label fw-semibold small">
                                Sector *
                            </label>
                            <select id="sector" name="sector" required class="form-select form-select-lg">
                                <option value="">Select your sector</option>
                                <option value="pharmaceutical">Pharmaceutical</option>
                                <option value="technology">Technology</option>
                                <option value="finance">Finance</option>
                                <option value="marketing">Marketing</option>
                                <option value="consumer">Consumer Products</option>
                                <option value="manufacturing">Manufacturing</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="challenge" class="form-label fw-semibold small">
                                Access Challenge Description *
                            </label>
                            <textarea id="challenge" name="challenge" required rows="6" 
                                        class="form-control"
                                        placeholder="Describe the specific Japanese suppliers or products you need access to, and any challenges you've faced..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="timeline" class="form-label fw-semibold small">
                                Project Timeline
                            </label>
                            <select id="timeline" name="timeline" class="form-select form-select-lg">
                                <option value="">Select timeline</option>
                                <option value="immediate">Immediate (within 1 month)</option>
                                <option value="short">Short-term (1-3 months)</option>
                                <option value="medium">Medium-term (3-6 months)</option>
                                <option value="long">Long-term (6+ months)</option>
                                <option value="exploratory">Exploratory/Research</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="budget" class="form-label fw-semibold small">
                                Estimated Project Value
                            </label>
                            <select id="budget" name="budget" class="form-select form-select-lg">
                                <option value="">Select range</option>
                                <option value="under-50k">Under £50,000</option>
                                <option value="50k-100k">£50,000 - £100,000</option>
                                <option value="100k-250k">£100,000 - £250,000</option>
                                <option value="250k-500k">£250,000 - £500,000</option>
                                <option value="500k-1m">£500,000 - £1,000,000</option>
                                <option value="over-1m">Over £1,000,000</option>
                                <option value="discuss">Prefer to discuss</option>
                            </select>
                        </div>

                        <div class="form-check mb-3">
                            <input type="checkbox" id="privacy" name="privacy" required class="form-check-input">
                            <label for="privacy" class="form-check-label small text-muted">
                                I understand that this information will be used to assess my access challenge and that Thames&Tokyo will maintain strict confidentiality of all business information shared. *
                            </label>
                        </div>

                        <div class="form-check mb-4">
                            <input type="checkbox" id="newsletter" name="newsletter" class="form-check-input">
                            <label for="newsletter" class="form-check-label small text-muted">
                                I would like to receive occasional insights about accessing Japan's exclusive market (optional).
                            </label>
                        </div>

                        <button type="submit" class="submit-btn w-100 py-3 px-4 rounded-3 fw-semibold fs-5">
                            <span class="submit-text">Submit Inquiry</span>
                            <span class="loading-text d-none">Sending...</span>
                        </button>

                        <p class="small text-muted text-center mt-3 mb-0">
                            Rie personally reviews every inquiry within 24 hours. All information is kept strictly confidential.
                        </p>
                    </form>
                </div>
            </div>

            <!-- Trust & Credibility Sidebar -->
            <div class="col-lg-4">
                <div class="d-flex flex-column gap-4">
                    <!-- Founder Trust Block -->
                    <div class="trust-card bg-blue-100 p-4 rounded-3 shadow scroll-reveal">
                        <h3 class="font-display fs-5 fw-semibold text-dark mb-3">
                            On The Founder
                        </h3>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-start gap-2">
                                <div class="bullet-dot bg-dark mt-2 flex-shrink-0"></div>
                                <p class="text-secondary small mb-0">
                                    <strong>Rie Toda Flores</strong> has spent years consulting for global firms in the most rigorous and highly regulated sectors, building relationships with Japan's most exclusive suppliers.
                                </p>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div class="bullet-dot bg-dark mt-2 flex-shrink-0"></div>
                                <p class="text-secondary small mb-0">
                                    Fluent in both Japanese business culture and Western expectations, she serves as the cultural interface that transforms risk into partnership.
                                </p>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div class="bullet-dot bg-dark mt-2 flex-shrink-0"></div>
                                <p class="text-secondary small mb-0">
                                    Her network spans from 200-year-old confectionery houses in Kyoto to cutting-edge manufacturers in Tokyo, each relationship built on trust and mutual respect.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Execution Trust Block -->
                    <div class="trust-card bg-blue-100 p-4 rounded-3 shadow scroll-reveal">
                        <h3 class="font-display fs-5 fw-semibold text-dark mb-3">
                            Peace of Mind
                        </h3>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-start gap-2">
                                <div class="bullet-dot bg-success mt-2 flex-shrink-0"></div>
                                <p class="text-secondary small mb-0">
                                    <strong>Timeline Clarity:</strong> Clear timelines with realistic expectations based on cultural business rhythms, not Western urgency.
                                </p>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div class="bullet-dot bg-primary mt-2 flex-shrink-0"></div>
                                <p class="text-secondary small mb-0">
                                    <strong>Quality Assurance:</strong> Personal oversight of every step, from initial sampling to final quality control and export documentation.
                                </p>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div class="bullet-dot bg-purple mt-2 flex-shrink-0"></div>
                                <p class="text-secondary small mb-0">
                                    <strong>Relationship Continuity:</strong> We don't just make introductions—we facilitate ongoing relationships that grow stronger over time.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Direct Contact -->
                    <div class="bg-white p-4 rounded-3 shadow scroll-reveal">
                        <h3 class="font-display fs-5 fw-semibold text-dark mb-3">
                            Direct Contact
                        </h3>
                        <div class="d-flex flex-column gap-3">
                            <div>
                                <p class="small text-muted mb-1">Email Rie directly:</p>
                                <a href="mailto:rie@thamesandtokyo.com" 
                                    class="text-dark fw-semibold text-decoration-none">
                                    rie@thamesandtokyo.com
                                </a>
                            </div>
                            <div>
                                <p class="small text-muted mb-1">Response time:</p>
                                <p class="text-dark fw-semibold mb-0">Within 24 hours</p>
                            </div>
                            <div>
                                <p class="small text-muted mb-1">Confidentiality:</p>
                                <p class="text-dark fw-semibold mb-0">100% Guaranteed</p>
                            </div>
                        </div>
                    </div>

                    <!-- Success Metrics -->
                    <div class="bg-dark text-white p-4 rounded-3 shadow scroll-reveal">
                        <h3 class="font-display fs-5 fw-semibold mb-3 text-blue">
                            Proven Results
                        </h3>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="small">Client Satisfaction</span>
                                <span class="fw-semibold">98%</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="small">Supplier Relationships</span>
                                <span class="fw-semibold">200+</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="small">Years of Experience</span>
                                <span class="fw-semibold">15+</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="small">Partnerships Facilitated</span>
                                <span class="fw-semibold">£50M+</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();


/* ========= SCRIPTS DE LA VISTA ========= */
ob_start();
?>

<script>
    // Initialize contact form functionality
    document.addEventListener('DOMContentLoaded', function() {
        const contactForm = document.getElementById('contact-form');
        const submitBtn = contactForm.querySelector('button[type="submit"]');
        const submitText = submitBtn.querySelector('.submit-text');
        const loadingText = submitBtn.querySelector('.loading-text');
        
        // Form validation and submission
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (validateForm()) {
                // Show loading state
                submitBtn.disabled = true;
                submitText.classList.add('d-none');
                loadingText.classList.remove('d-none');
                
                // Simulate form submission
                setTimeout(() => {
                    // Reset form
                    contactForm.reset();
                    
                    // Show success message
                    showSuccessMessage('Thank you for your inquiry. Rie will review your submission and respond within 24 hours.');
                    
                    // Reset button state
                    submitBtn.disabled = false;
                    submitText.classList.remove('d-none');
                    loadingText.classList.add('d-none');
                }, 2000);
            }
        });
        
        // Real-time validation
        const inputs = contactForm.querySelectorAll('input[required], textarea[required], select[required]');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                validateField(this);
            });
            
            input.addEventListener('input', function() {
                if (this.classList.contains('is-invalid')) {
                    validateField(this);
                }
            });
        });
        
        function validateForm() {
            let isValid = true;
            inputs.forEach(input => {
                if (!validateField(input)) {
                    isValid = false;
                }
            });
            return isValid;
        }
        
        function validateField(field) {
            const value = field.value.trim();
            let isValid = true;
            
            // Required field check
            if (field.hasAttribute('required') && !value) {
                showFieldError(field, 'This field is required');
                isValid = false;
            }
            
            // Email validation
            if (field.type === 'email' && value && !isValidEmail(value)) {
                showFieldError(field, 'Please enter a valid email address');
                isValid = false;
            }
            
            // Privacy checkbox
            if (field.id === 'privacy' && !field.checked) {
                showFieldError(field, 'You must agree to the privacy terms');
                isValid = false;
            }
            
            if (isValid) {
                clearFieldError(field);
            }
            
            return isValid;
        }
        
        function showFieldError(field, message) {
            field.classList.add('is-invalid');
            
            // Remove existing error message
            const existingError = field.parentNode.querySelector('.invalid-feedback');
            if (existingError) {
                existingError.remove();
            }
            
            // Add error message
            const errorDiv = document.createElement('div');
            errorDiv.className = 'invalid-feedback';
            errorDiv.textContent = message;
            field.parentNode.appendChild(errorDiv);
        }
        
        function clearFieldError(field) {
            field.classList.remove('is-invalid');
            field.classList.add('is-valid');
            const errorDiv = field.parentNode.querySelector('.invalid-feedback');
            if (errorDiv) {
                errorDiv.remove();
            }
        }
        
        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
        
        function showSuccessMessage(message) {
            const successDiv = document.createElement('div');
            successDiv.className = 'position-fixed top-0 end-0 m-4 bg-success text-white p-4 rounded-3 shadow';
            successDiv.style.zIndex = '1050';
            successDiv.style.maxWidth = '24rem';
            successDiv.innerHTML = `
                <div class="d-flex align-items-center gap-3">
                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <p class="fw-semibold mb-1">Inquiry Submitted</p>
                        <p class="small mb-0">${message}</p>
                    </div>
                </div>
            `;
            
            document.body.appendChild(successDiv);
            
            // Remove after 5 seconds
            setTimeout(() => {
                successDiv.remove();
            }, 5000);
        }
        
        // Check for product parameter in URL
        const urlParams = new URLSearchParams(window.location.search);
        const product = urlParams.get('product');
        if (product) {
            const challengeField = document.getElementById('challenge');
            challengeField.value = `I'm interested in sourcing ${product} for my business. I'd like to discuss the possibility of establishing a supply relationship for this product and potentially other items from your curated collection.`;
        }
        
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
