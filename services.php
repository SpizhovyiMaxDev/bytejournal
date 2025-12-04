<?php
require_once __DIR__ . '/partials/header.php';
?>

<section class="services_hero">
    <div class="container">
        <h1>Our Services</h1>
        <p class="services_hero-subtitle">Comprehensive technology resources and solutions for developers and tech enthusiasts</p>
    </div>
</section>

<section class="services_cta">
    <div class="container">
        <div class="services_cta-content">
            <h2>Ready to Get Started?</h2>
            <p>Join thousands of developers who are already using ByteJournal to stay ahead in the tech world. Sign up today and unlock the full potential of our platform.</p>
            <div class="cta_buttons">
                <a href="<?= ROOT_URL ?>signup.php" class="btn">Create Free Account</a>
                <a href="<?= ROOT_URL ?>blog.php" class="btn" style="background: var(--color-gray-700);">Browse Articles</a>
            </div>
        </div>
    </div>
</section>

<section class="services_main">
    <div class="container">
        <div class="services_grid">
            <div class="service_card">
                <div class="service_icon">
                    <i class="uil uil-book-open"></i>
                </div>
                <h3>Tech Articles & Tutorials</h3>
                <p>Access hundreds of in-depth articles covering programming languages, frameworks, tools, and best practices. From beginner guides to advanced techniques, we've got you covered.</p>
                <ul class="service_features">
                    <li><i class="uil uil-check"></i> Step-by-step tutorials</li>
                    <li><i class="uil uil-check"></i> Code examples and snippets</li>
                    <li><i class="uil uil-check"></i> Real-world use cases</li>
                    <li><i class="uil uil-check"></i> Best practices and tips</li>
                </ul>
            </div>

            <div class="service_card">
                <div class="service_icon">
                    <i class="uil uil-newspaper"></i>
                </div>
                <h3>Industry News & Updates</h3>
                <p>Stay informed with the latest technology news, industry trends, and updates from the tech world. We curate and analyze the most important developments for you.</p>
                <ul class="service_features">
                    <li><i class="uil uil-check"></i> Daily tech news updates</li>
                    <li><i class="uil uil-check"></i> Industry trend analysis</li>
                    <li><i class="uil uil-check"></i> Product launches and reviews</li>
                    <li><i class="uil uil-check"></i> Expert opinions and insights</li>
                </ul>
            </div>

            <div class="service_card">
                <div class="service_icon">
                    <i class="uil uil-users-alt"></i>
                </div>
                <h3>Community Platform</h3>
                <p>Join our vibrant community of developers, share your knowledge, ask questions, and collaborate with fellow tech enthusiasts from around the world.</p>
                <ul class="service_features">
                    <li><i class="uil uil-check"></i> Discussion forums</li>
                    <li><i class="uil uil-check"></i> Q&A sections</li>
                    <li><i class="uil uil-check"></i> Code sharing and reviews</li>
                    <li><i class="uil uil-check"></i> Networking opportunities</li>
                </ul>
            </div>

            <div class="service_card">
                <div class="service_icon">
                    <i class="uil uil-graduation-cap"></i>
                </div>
                <h3>Learning Resources</h3>
                <p>Comprehensive learning paths and resources designed to help you master new technologies, improve your skills, and advance your career in tech.</p>
                <ul class="service_features">
                    <li><i class="uil uil-check"></i> Structured learning paths</li>
                    <li><i class="uil uil-check"></i> Skill assessments</li>
                    <li><i class="uil uil-check"></i> Project-based learning</li>
                    <li><i class="uil uil-check"></i> Career guidance</li>
                </ul>
            </div>

            <div class="service_card">
                <div class="service_icon">
                    <i class="uil uil-search"></i>
                </div>
                <h3>Content Discovery</h3>
                <p>Powerful search and filtering tools to help you find exactly what you're looking for. Browse by category, topic, difficulty level, or use our smart search.</p>
                <ul class="service_features">
                    <li><i class="uil uil-check"></i> Advanced search functionality</li>
                    <li><i class="uil uil-check"></i> Category-based browsing</li>
                    <li><i class="uil uil-check"></i> Tag-based filtering</li>
                    <li><i class="uil uil-check"></i> Personalized recommendations</li>
                </ul>
            </div>

            <div class="service_card">
                <div class="service_icon">
                    <i class="uil uil-mobile-android"></i>
                </div>
                <h3>Mobile-Friendly Platform</h3>
                <p>Access ByteJournal from anywhere, anytime. Our fully responsive design ensures a seamless experience across all devices - desktop, tablet, or mobile.</p>
                <ul class="service_features">
                    <li><i class="uil uil-check"></i> Responsive design</li>
                    <li><i class="uil uil-check"></i> Fast loading times</li>
                    <li><i class="uil uil-check"></i> Offline reading capability</li>
                    <li><i class="uil uil-check"></i> Cross-platform compatibility</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/partials/footer.php';
?>
