<?php
$section = "Delicatessen";

/* ========= CONTENIDO ========= */
ob_start();
?>

<!-- Hero Section -->
<section class="section-py section-px pt-hero">
    <div class="container-sm text-center">
        <div class="scroll-reveal">
            <h1 class="font-display fs-display fw-semibold text-dark mb-4">
                Taste the Access
            </h1>
            <p class="fs-5 text-muted mx-auto lh-lg" style="max-width: 48rem;">
                A curated collection of products sourced through our exclusive network, demonstrating the quality and relationships we unlock for clients. Each item tells a story of artisanal tradition and cultural connection.
            </p>
        </div>
    </div>
</section>

<!-- Interactive Japan Map Section -->
<section class="section-py section-px bg-white">
    <div class="container-tt">
        <div class="text-center mb-5 scroll-reveal">
            <h2 class="font-display fs-2 fw-semibold text-dark mb-3">
                Explore by Region
            </h2>
            <p class="fs-5 text-muted mx-auto" style="max-width: 48rem;">
                Click on a region to discover the unique products and artisans from Japan's most exclusive suppliers.
            </p>
        </div>

        <div class="japan-map mb-5">
            <svg viewBox="0 0 600 400" class="w-100 h-auto">
                <!-- Simplified Japan map regions -->
                <!-- Kyoto Region -->
                <path class="map-region" data-region="kyoto" d="M280 200 L320 200 L320 240 L280 240 Z" fill="#8A9B8A" stroke="#2C2C2C" stroke-width="2"/>
                <text x="300" y="225" text-anchor="middle" class="small fw-semibold" fill="white">Kyoto</text>
                
                <!-- Niigata Region -->
                <path class="map-region" data-region="niigata" d="M300 160 L340 160 L340 200 L300 200 Z" fill="#8A9B8A" stroke="#2C2C2C" stroke-width="2"/>
                <text x="320" y="185" text-anchor="middle" class="small fw-semibold" fill="white">Niigata</text>
                
                <!-- Miyazaki Region -->
                <path class="map-region" data-region="miyazaki" d="M280 280 L320 280 L320 320 L280 320 Z" fill="#8A9B8A" stroke="#2C2C2C" stroke-width="2"/>
                <text x="300" y="305" text-anchor="middle" class="small fw-semibold" fill="white">Miyazaki</text>
                
                <!-- Other regions -->
                <path class="map-region" data-region="other" d="M200 180 L240 180 L240 220 L200 220 Z" fill="#B85450" stroke="#2C2C2C" stroke-width="2" opacity="0.6"/>
                <text x="220" y="205" text-anchor="middle" class="small fw-semibold" fill="white">Other</text>
            </svg>
        </div>

        <div class="d-flex flex-wrap justify-content-center gap-3">
            <button class="region-filter active btn btn-outline-dark rounded-pill px-4 py-2" data-region="all">
                All Products
            </button>
            <button class="region-filter btn btn-outline-dark rounded-pill px-4 py-2" data-region="kyoto">
                Kyoto
            </button>
            <button class="region-filter btn btn-outline-dark rounded-pill px-4 py-2" data-region="niigata">
                Niigata
            </button>
            <button class="region-filter btn btn-outline-dark rounded-pill px-4 py-2" data-region="miyazaki">
                Miyazaki
            </button>
        </div>
    </div>
</section>

<!-- Products Grid Section -->
<section class="section-py section-px">
    <div class="container-tt">
        <div class="row g-4" id="products-container">
            
            <!-- Kyoto Products -->
            <div class="col-md-6 col-lg-4">
                <div class="product-card bg-white rounded-3 shadow overflow-hidden h-100" data-region="kyoto">
                    <img src="https://kimi-web-img.moonshot.cn/img/the-wadas.com/8968354bf2f370de9c47c0fc952ee0ec5252c422.jpg" alt="Izutsu Yatsuhashi Cookies" class="w-100 object-cover" style="height: 12rem;">
                    <div class="p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge bg-primary-subtle text-primary">Kyoto</span>
                            <span class="text-dark fw-semibold">£28</span>
                        </div>
                        <h3 class="font-display fs-5 fw-semibold mb-2">Izutsu Yatsuhashi</h3>
                        <p class="text-muted small mb-3">Traditional koto-shaped rice flour cookies with cinnamon, from a 210-year-old Kyoto confectionery</p>
                        <div class="access-story p-3 rounded-2 small text-secondary mb-3">
                            <strong>Access Story:</strong> Izutsu Yatsuhashi Honpo has been operating for over 210 years in Kyoto. Their products are rarely exported and require direct relationships with the family-owned business to source.
                        </div>
                        <button class="inquiry-btn w-100 text-white py-2 px-3 rounded-2 small fw-medium">
                            Discuss sourcing for your business
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="product-card bg-white rounded-3 shadow overflow-hidden h-100" data-region="kyoto">
                    <img src="assets/img/kyoto-heritage.jpg" alt="ITO Confetti Kyoto" class="w-100 object-cover" style="height: 12rem;">
                    <div class="p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge bg-primary-subtle text-primary">Kyoto</span>
                            <span class="text-dark fw-semibold">£32</span>
                        </div>
                        <h3 class="font-display fs-5 fw-semibold mb-2">ITO Confetti Kyoto</h3>
                        <p class="text-muted small mb-3">Luxury Uji matcha white chocolate cream sandwich cookies, limited seasonal production</p>
                        <div class="access-story p-3 rounded-2 small text-secondary mb-3">
                            <strong>Access Story:</strong> Made with premium Uji matcha from Marusou, a long-established Kyoto tea specialty store. Limited production runs make these highly sought after and difficult to source outside Japan.
                        </div>
                        <button class="inquiry-btn w-100 text-white py-2 px-3 rounded-2 small fw-medium">
                            Discuss sourcing for your business
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="product-card bg-white rounded-3 shadow overflow-hidden h-100" data-region="kyoto">
                    <img src="assets/img/kyoto-heritage.jpg" alt="Kyo-ame Craft Candies" class="w-100 object-cover" style="height: 12rem;">
                    <div class="p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge bg-primary-subtle text-primary">Kyoto</span>
                            <span class="text-dark fw-semibold">£24</span>
                        </div>
                        <h3 class="font-display fs-5 fw-semibold mb-2">Kyo-ame Craft Candies</h3>
                        <p class="text-muted small mb-3">Traditional Kyoto candies in seasonal flavors (sakura, yuzu, matcha), made to order</p>
                        <div class="access-story p-3 rounded-2 small text-secondary mb-3">
                            <strong>Access Story:</strong> Each candy is hand-crafted using traditional methods passed down through generations. Made-to-order production ensures freshness but requires advance planning and established relationships.
                        </div>
                        <button class="inquiry-btn w-100 text-white py-2 px-3 rounded-2 small fw-medium">
                            Discuss sourcing for your business
                        </button>
                    </div>
                </div>
            </div>

            <!-- Niigata Products -->
            <div class="col-md-6 col-lg-4">
                <div class="product-card bg-white rounded-3 shadow overflow-hidden h-100" data-region="niigata">
                    <img src="assets/img/niigata-rice.jpg" alt="Niigata No Hoshi Star Crackers" class="w-100 object-cover" style="height: 12rem;">
                    <div class="p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge bg-success-subtle text-success">Niigata</span>
                            <span class="text-dark fw-semibold">£22</span>
                        </div>
                        <h3 class="font-display fs-5 fw-semibold mb-2">Niigata No Hoshi</h3>
                        <p class="text-muted small mb-3">Star-shaped rice crackers with sweet soy sauce, made from 100% locally sourced Niigata rice</p>
                        <div class="access-story p-3 rounded-2 small text-secondary mb-3">
                            <strong>Access Story:</strong> Made exclusively with rice from Niigata's premium rice-growing region. The producer maintains strict quality control and only works with distributors who understand their commitment to local agriculture.
                        </div>
                        <button class="inquiry-btn w-100 text-white py-2 px-3 rounded-2 small fw-medium">
                            Discuss sourcing for your business
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="product-card bg-white rounded-3 shadow overflow-hidden h-100" data-region="niigata">
                    <img src="https://kimi-web-img.moonshot.cn/img/www.ricecrackersnacks.com/7daf46862eac4c0f870800d30751470806af2f56.jpg" alt="Sanko Niigata Jikomi Shio Senbei" class="w-100 object-cover" style="height: 12rem;">
                    <div class="p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge bg-success-subtle text-success">Niigata</span>
                            <span class="text-dark fw-semibold">£26</span>
                        </div>
                        <h3 class="font-display fs-5 fw-semibold mb-2">Sanko Niigata Jikomi</h3>
                        <p class="text-muted small mb-3">Premium salt rice crackers, traditional artisan method, family producer since 1950</p>
                        <div class="access-story p-3 rounded-2 small text-secondary mb-3">
                            <strong>Access Story:</strong> Family-owned producer using traditional methods unchanged since 1950. Their commitment to artisanal production means limited quantities and selective partnerships with distributors.
                        </div>
                        <button class="inquiry-btn w-100 text-white py-2 px-3 rounded-2 small fw-medium">
                            Discuss sourcing for your business
                        </button>
                    </div>
                </div>
            </div>

            <!-- Miyazaki Products -->
            <div class="col-md-6 col-lg-4">
                <div class="product-card bg-white rounded-3 shadow overflow-hidden h-100" data-region="miyazaki">
                    <img src="assets/img/yuzu-grove.jpg" alt="Kagura-no-Sato Green Yuzu Kosho" class="w-100 object-cover" style="height: 12rem;">
                    <div class="p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge bg-warning-subtle text-warning">Miyazaki</span>
                            <span class="text-dark fw-semibold">£35</span>
                        </div>
                        <h3 class="font-display fs-5 fw-semibold mb-2">Kagura-no-Sato Yuzu Kosho</h3>
                        <p class="text-muted small mb-3">Organic green yuzu peel with green chili, spice paste from boutique producer</p>
                        <div class="access-story p-3 rounded-2 small text-secondary mb-3">
                            <strong>Access Story:</strong> Grown in Miyazaki's mountains with extreme temperature differences. Kagura No Sato cultivates their own organic yuzu and chili peppers, with hand-peeled yuzu skins and minimal salt production methods.
                        </div>
                        <button class="inquiry-btn w-100 text-white py-2 px-3 rounded-2 small fw-medium">
                            Discuss sourcing for your business
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="product-card bg-white rounded-3 shadow overflow-hidden h-100" data-region="miyazaki">
                    <img src="assets/img/yuzu-grove.jpg" alt="Marugoto Yuzu Shibori" class="w-100 object-cover" style="height: 12rem;">
                    <div class="p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge bg-warning-subtle text-warning">Miyazaki</span>
                            <span class="text-dark fw-semibold">£42</span>
                        </div>
                        <h3 class="font-display fs-5 fw-semibold mb-2">Marugoto Yuzu Shibori</h3>
                        <p class="text-muted small mb-3">100% pure organic yuzu juice from whole fruit, limited harvest</p>
                        <div class="access-story p-3 rounded-2 small text-secondary mb-3">
                            <strong>Access Story:</strong> Premium yuzu juice made from whole fruit with no additives. Limited harvest production from organic certified orchards in Miyazaki, requiring advance commitment from buyers.
                        </div>
                        <button class="inquiry-btn w-100 text-white py-2 px-3 rounded-2 small fw-medium">
                            Discuss sourcing for your business
                        </button>
                    </div>
                </div>
            </div>

            <!-- Additional Products -->
            <div class="col-md-6 col-lg-4">
                <div class="product-card bg-white rounded-3 shadow overflow-hidden h-100" data-region="other">
                    <img src="https://kimi-web-img.moonshot.cn/img/kuzefukuandsons.com/7a1f5f72c60d33eec92927a84b5efc3d3ec5a1d5.png" alt="Suehiro Saishikomi Shoyu" class="w-100 object-cover" style="height: 12rem;">
                    <div class="p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge bg-purple-subtle text-purple">Hyogo</span>
                            <span class="text-dark fw-semibold">£38</span>
                        </div>
                        <h3 class="font-display fs-5 fw-semibold mb-2">Suehiro Saishikomi Shoyu</h3>
                        <p class="text-muted small mb-3">Double-brewed soy sauce using soft Ibo River water, rich umami, small brewery</p>
                        <div class="access-story p-3 rounded-2 small text-secondary mb-3">
                            <strong>Access Story:</strong> Traditional soy sauce brewery using Ibo River's soft water for double-brewing process. Small production runs and commitment to traditional methods limit availability to established relationships.
                        </div>
                        <button class="inquiry-btn w-100 text-white py-2 px-3 rounded-2 small fw-medium">
                            Discuss sourcing for your business
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="product-card bg-white rounded-3 shadow overflow-hidden h-100" data-region="other">
                    <img src="https://kimi-web-img.moonshot.cn/img/www.snackhawaii.com/d43b361d5060da4430e83f3674e5647a5dcd46bd.jpg" alt="Kabukiage Rice Crackers" class="w-100 object-cover" style="height: 12rem;">
                    <div class="p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge bg-purple-subtle text-purple">Tokyo</span>
                            <span class="text-dark fw-semibold">£18</span>
                        </div>
                        <h3 class="font-display fs-5 fw-semibold mb-2">Kabukiage Rice Crackers</h3>
                        <p class="text-muted small mb-3">Kabuki theater motifs, sweet-salty soy sauce, cultural icon with limited distribution</p>
                        <div class="access-story p-3 rounded-2 small text-secondary mb-3">
                            <strong>Access Story:</strong> Cultural icon crackers featuring traditional Kabuki motifs. Limited distribution through select channels that understand the cultural significance and maintain brand integrity.
                        </div>
                        <button class="inquiry-btn w-100 text-white py-2 px-3 rounded-2 small fw-medium">
                            Discuss sourcing for your business
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="product-card bg-white rounded-3 shadow overflow-hidden h-100" data-region="other">
                    <img src="assets/img/kyoto-heritage.jpg" alt="Narazuke Pickles" class="w-100 object-cover" style="height: 12rem;">
                    <div class="p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge bg-purple-subtle text-purple">Nara</span>
                            <span class="text-dark fw-semibold">£55</span>
                        </div>
                        <h3 class="font-display fs-5 fw-semibold mb-2">Narazuke Pickles</h3>
                        <p class="text-muted small mb-3">Four-year sake lees pickles from Nara, the ultimate patience craft</p>
                        <div class="access-story p-3 rounded-2 small text-secondary mb-3">
                            <strong>Access Story:</strong> Made using 1,300-year-old methods with vegetables pickled in sake lees for four years. Requires relationships with traditional pickle makers who maintain the ancient fermentation processes.
                        </div>
                        <button class="inquiry-btn w-100 text-white py-2 px-3 rounded-2 small fw-medium">
                            Discuss sourcing for your business
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-py section-px bg-dark text-white">
    <div class="container-sm text-center">
        <h2 class="font-display fs-1 fw-semibold mb-3">
            Ready to Source These Products?
        </h2>
        <p class="fs-5 mb-4 opacity-75">
            Every product in our delicatessen represents a relationship we've built with Japan's most exclusive suppliers. Let us help you access these quality standards for your business.
        </p>
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
            <a href="contact.html" class="btn btn-light text-dark px-4 py-3 fw-semibold">
                Discuss sourcing for your business
            </a>
            <a href="services.html" class="btn btn-outline-light px-4 py-3 fw-semibold">
                Learn about our services
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
    // Initialize delicatessen interactions
    document.addEventListener('DOMContentLoaded', function() {
        const regionFilters = document.querySelectorAll('.region-filter');
        const mapRegions = document.querySelectorAll('.map-region');
        const productCards = document.querySelectorAll('.product-card');
        
        // Filter functionality
        regionFilters.forEach(filter => {
            filter.addEventListener('click', function() {
                const region = this.getAttribute('data-region');
                
                // Update active filter
                regionFilters.forEach(f => f.classList.remove('active'));
                this.classList.add('active');
                
                // Update map regions
                mapRegions.forEach(mapRegion => {
                    if (region === 'all' || mapRegion.getAttribute('data-region') === region) {
                        mapRegion.classList.add('active');
                    } else {
                        mapRegion.classList.remove('active');
                    }
                });
                
                // Filter products
                filterProducts(region);
            });
        });
        
        // Map region clicks
        mapRegions.forEach(mapRegion => {
            mapRegion.addEventListener('click', function() {
                const region = this.getAttribute('data-region');
                
                // Update active filter
                regionFilters.forEach(f => f.classList.remove('active'));
                const correspondingFilter = document.querySelector(`[data-region="${region}"]`);
                if (correspondingFilter) {
                    correspondingFilter.classList.add('active');
                }
                
                // Update map regions
                mapRegions.forEach(mr => mr.classList.remove('active'));
                this.classList.add('active');
                
                // Filter products
                filterProducts(region);
            });
        });
        
        // Product card clicks
        productCards.forEach(card => {
            card.addEventListener('click', function() {
                // Show inquiry modal or redirect to contact
                const productName = this.querySelector('h3').textContent;
                const contactUrl = `contact.html?product=${encodeURIComponent(productName)}`;
                window.location.href = contactUrl;
            });
        });
        
        function filterProducts(region) {
            productCards.forEach(card => {
                const cardRegion = card.getAttribute('data-region');
                const cardCol = card.closest('.col-md-6');
                if (region === 'all' || cardRegion === region) {
                    cardCol.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 100);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        cardCol.style.display = 'none';
                    }, 300);
                }
            });
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
