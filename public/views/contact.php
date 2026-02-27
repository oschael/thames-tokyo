<?php
$section = "Contact";

/* ========= CONTENIDO ========= */
ob_start();
?>

<!-- Hero Section -->
<section class="pt-32 pb-20 px-6">
    <div class="max-w-4xl mx-auto text-center">
        <div class="scroll-reveal">
            <h1 class="font-display text-5xl md:text-6xl font-semibold text-gray-900 mb-8">
                Start a Confidential Conversation
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Every successful partnership begins with understanding your unique access challenge. Rie personally reviews every inquiry within 24 hours.
            </p>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-3 gap-16">
            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg p-8 scroll-reveal">
                    <h2 class="font-display text-3xl font-semibold text-gray-900 mb-8">
                        Tell Us About Your Access Challenge
                    </h2>
                    
                    <form id="contact-form" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Full Name *
                                </label>
                                <input type="text" id="name" name="name" required 
                                        class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none"
                                        placeholder="Your full name">
                            </div>
                            <div>
                                <label for="company" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Company Name *
                                </label>
                                <input type="text" id="company" name="company" required 
                                        class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none"
                                        placeholder="Your company name">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Email Address *
                                </label>
                                <input type="email" id="email" name="email" required 
                                        class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none"
                                        placeholder="your.email@company.com">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Phone Number
                                </label>
                                <input type="tel" id="phone" name="phone" 
                                        class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none"
                                        placeholder="Your phone number">
                            </div>
                        </div>

                        <div>
                            <label for="sector" class="block text-sm font-semibold text-gray-700 mb-2">
                                Sector *
                            </label>
                            <select id="sector" name="sector" required 
                                    class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
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

                        <div>
                            <label for="challenge" class="block text-sm font-semibold text-gray-700 mb-2">
                                Access Challenge Description *
                            </label>
                            <textarea id="challenge" name="challenge" required rows="6" 
                                        class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none resize-none"
                                        placeholder="Describe the specific Japanese suppliers or products you need access to, and any challenges you've faced..."></textarea>
                        </div>

                        <div>
                            <label for="timeline" class="block text-sm font-semibold text-gray-700 mb-2">
                                Project Timeline
                            </label>
                            <select id="timeline" name="timeline" 
                                    class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                                <option value="">Select timeline</option>
                                <option value="immediate">Immediate (within 1 month)</option>
                                <option value="short">Short-term (1-3 months)</option>
                                <option value="medium">Medium-term (3-6 months)</option>
                                <option value="long">Long-term (6+ months)</option>
                                <option value="exploratory">Exploratory/Research</option>
                            </select>
                        </div>

                        <div>
                            <label for="budget" class="block text-sm font-semibold text-gray-700 mb-2">
                                Estimated Project Value
                            </label>
                            <select id="budget" name="budget" 
                                    class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
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

                        <div class="flex items-start space-x-3">
                            <input type="checkbox" id="privacy" name="privacy" required 
                                    class="mt-1 h-4 w-4 text-gray-900 border-gray-300 rounded focus:ring-gray-900">
                            <label for="privacy" class="text-sm text-gray-600">
                                I understand that this information will be used to assess my access challenge and that Thames&Tokyo will maintain strict confidentiality of all business information shared. *
                            </label>
                        </div>

                        <div class="flex items-start space-x-3">
                            <input type="checkbox" id="newsletter" name="newsletter" 
                                    class="mt-1 h-4 w-4 text-gray-900 border-gray-300 rounded focus:ring-gray-900">
                            <label for="newsletter" class="text-sm text-gray-600">
                                I would like to receive occasional insights about accessing Japan's exclusive market (optional).
                            </label>
                        </div>

                        <button type="submit" 
                                class="submit-btn w-full text-white py-4 px-8 rounded-lg font-semibold text-lg">
                            <span class="submit-text">Submit Inquiry</span>
                            <span class="loading-text hidden">Sending...</span>
                        </button>

                        <p class="text-sm text-gray-500 text-center">
                            Rie personally reviews every inquiry within 24 hours. All information is kept strictly confidential.
                        </p>
                    </form>
                </div>
            </div>

            <!-- Trust & Credibility Sidebar -->
            <div class="space-y-8">
                <!-- Founder Trust Block -->
                <div class="trust-card trust-card--gradient p-6 rounded-lg shadow-lg scroll-reveal">
                    <h3 class="font-display text-xl font-semibold text-gray-900 mb-4">
                        On The Founder
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-gray-900 rounded-full mt-2 flex-shrink-0"></div>
                            <p class="text-gray-700 text-sm">
                                <strong>Rie Toda Flores</strong> has spent years consulting for global firms in the most rigorous and highly regulated sectors, building relationships with Japan's most exclusive suppliers.
                            </p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-gray-900 rounded-full mt-2 flex-shrink-0"></div>
                            <p class="text-gray-700 text-sm">
                                Fluent in both Japanese business culture and Western expectations, she serves as the cultural interface that transforms risk into partnership.
                            </p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-gray-900 rounded-full mt-2 flex-shrink-0"></div>
                            <p class="text-gray-700 text-sm">
                                Her network spans from 200-year-old confectionery houses in Kyoto to cutting-edge manufacturers in Tokyo, each relationship built on trust and mutual respect.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Execution Trust Block -->
                <div class="trust-card trust-card--gradient p-6 rounded-lg shadow-lg scroll-reveal">
                    <h3 class="font-display text-xl font-semibold text-gray-900 mb-4">
                        Peace of Mind
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-green-500 rounded-full mt-2 flex-shrink-0"></div>
                            <p class="text-gray-700 text-sm">
                                <strong>Timeline Clarity:</strong> Clear timelines with realistic expectations based on cultural business rhythms, not Western urgency.
                            </p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 flex-shrink-0"></div>
                            <p class="text-gray-700 text-sm">
                                <strong>Quality Assurance:</strong> Personal oversight of every step, from initial sampling to final quality control and export documentation.
                            </p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-purple-500 rounded-full mt-2 flex-shrink-0"></div>
                            <p class="text-gray-700 text-sm">
                                <strong>Relationship Continuity:</strong> We don't just make introductions—we facilitate ongoing relationships that grow stronger over time.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Direct Contact -->
                <div class="bg-white p-6 rounded-lg shadow-lg scroll-reveal">
                    <h3 class="font-display text-xl font-semibold text-gray-900 mb-4">
                        Direct Contact
                    </h3>
                    <div class="space-y-4">
                        <div>
                            <p class="text-sm text-gray-600 mb-1">Email Rie directly:</p>
                            <a href="mailto:rie@thamesandtokyo.com" 
                                class="text-gray-900 font-semibold hover:text-gray-600 transition-colors">
                                rie@thamesandtokyo.com
                            </a>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600 mb-1">Response time:</p>
                            <p class="text-gray-900 font-semibold">Within 24 hours</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600 mb-1">Confidentiality:</p>
                            <p class="text-gray-900 font-semibold">100% Guaranteed</p>
                        </div>
                    </div>
                </div>

                <!-- Success Metrics -->
                <div class="bg-gray-900 text-white p-6 rounded-lg shadow-lg scroll-reveal">
                    <h3 class="font-display text-xl font-semibold mb-4">
                        Proven Results
                    </h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-sm">Client Satisfaction</span>
                            <span class="font-semibold">98%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm">Supplier Relationships</span>
                            <span class="font-semibold">200+</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm">Years of Experience</span>
                            <span class="font-semibold">15+</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm">Partnerships Facilitated</span>
                            <span class="font-semibold">£50M+</span>
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
                submitText.classList.add('hidden');
                loadingText.classList.remove('hidden');
                
                // Simulate form submission
                setTimeout(() => {
                    // Reset form
                    contactForm.reset();
                    
                    // Show success message
                    showSuccessMessage('Thank you for your inquiry. Rie will review your submission and respond within 24 hours.');
                    
                    // Reset button state
                    submitBtn.disabled = false;
                    submitText.classList.remove('hidden');
                    loadingText.classList.add('hidden');
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
                if (this.classList.contains('error')) {
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
            field.classList.add('error');
            
            // Remove existing error message
            const existingError = field.parentNode.querySelector('.field-error');
            if (existingError) {
                existingError.remove();
            }
            
            // Add error message
            const errorDiv = document.createElement('div');
            errorDiv.className = 'field-error text-red-500 text-sm mt-1';
            errorDiv.textContent = message;
            field.parentNode.appendChild(errorDiv);
        }
        
        function clearFieldError(field) {
            field.classList.remove('error');
            const errorDiv = field.parentNode.querySelector('.field-error');
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
            successDiv.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-4 rounded-lg shadow-lg z-50 max-w-sm';
            successDiv.innerHTML = `
                <div class="flex items-center space-x-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <p class="font-semibold">Inquiry Submitted</p>
                        <p class="text-sm">${message}</p>
                    </div>
                </div>
            `;
            
            document.body.appendChild(successDiv);
            
            // Animate in
            setTimeout(() => {
                successDiv.style.transform = 'translateX(0)';
                successDiv.style.transition = 'transform 0.3s ease';
            }, 100);
            
            // Remove after 5 seconds
            setTimeout(() => {
                successDiv.style.transform = 'translateX(100%)';
                setTimeout(() => {
                    document.body.removeChild(successDiv);
                }, 300);
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