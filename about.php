<?php
require_once __DIR__ . '/partials/header.php';
?>

<section class="about_hero">
    <div class="container">
        <h1>About ByteJournal</h1>
        <p class="about_hero-subtitle">Your trusted source for technology insights, coding tutorials, and industry news</p>
    </div>
</section>

<section class="about_mission">
    <div class="container">
        <div class="about_mission-content">
            <h2>Our Mission</h2>
            <p>At ByteJournal, we believe in making technology accessible to everyone. Our mission is to provide high-quality, well-researched content that helps developers, tech enthusiasts, and curious minds stay informed about the latest trends, best practices, and innovations in the technology world.</p>
            <p>We strive to create a community where knowledge is shared freely, questions are welcomed, and learning never stops. Whether you're a seasoned developer or just starting your tech journey, ByteJournal is here to support and inspire you.</p>
        </div>
    </div>
</section>

<section class="about_values">
    <div class="container">
        <h2 class="section_title">Our Core Values</h2>
        <div class="values_grid">
            <div class="value_card">
                <div class="value_icon">
                    <i class="uil uil-lightbulb-alt"></i>
                </div>
                <h3>Innovation</h3>
                <p>We embrace new technologies and innovative approaches to problem-solving, always staying ahead of the curve.</p>
            </div>
            <div class="value_card">
                <div class="value_icon">
                    <i class="uil uil-users-alt"></i>
                </div>
                <h3>Community</h3>
                <p>We believe in the power of community and collaboration, fostering an environment where everyone can learn and grow together.</p>
            </div>
            <div class="value_card">
                <div class="value_icon">
                    <i class="uil uil-shield-check"></i>
                </div>
                <h3>Quality</h3>
                <p>We are committed to delivering accurate, well-researched, and high-quality content that our readers can trust.</p>
            </div>
            <div class="value_card">
                <div class="value_icon">
                    <i class="uil uil-graduation-cap"></i>
                </div>
                <h3>Education</h3>
                <p>We are passionate about education and making complex technical concepts accessible to learners at all levels.</p>
            </div>
        </div>
    </div>
</section>

<section class="about_team">
    <div class="container">
        <h2 class="section_title">Meet Our Team</h2>
        <div class="team_grid">
            <div class="team_member">
                <div class="team_avatar">
                    <i class="uil uil-user"></i>
                </div>
                <h3>Tech Writers</h3>
                <p class="team_role">Content Creators</p>
                <p>Our dedicated team of writers and developers work tirelessly to bring you the latest insights, tutorials, and industry news.</p>
            </div>
            <div class="team_member">
                <div class="team_avatar">
                    <i class="uil uil-code-branch"></i>
                </div>
                <h3>Developers</h3>
                <p class="team_role">Platform Builders</p>
                <p>Our development team ensures that ByteJournal remains fast, secure, and user-friendly, constantly improving the platform.</p>
            </div>
            <div class="team_member">
                <div class="team_avatar">
                    <i class="uil uil-chart-line"></i>
                </div>
                <h3>Editors</h3>
                <p class="team_role">Quality Assurance</p>
                <p>Our editorial team reviews and refines every piece of content to ensure accuracy, clarity, and relevance for our readers.</p>
            </div>
        </div>
    </div>
</section>

<section class="about_cta">
    <div class="container">
        <div class="cta_content">
            <h2>Join Our Community</h2>
            <p>Become part of the ByteJournal community and stay updated with the latest in technology. Sign up today to get personalized content recommendations and join the conversation.</p>
            <div class="cta_buttons">
                <a href="<?= ROOT_URL ?>signup.php" class="btn">Get Started</a>
                <a href="<?= ROOT_URL ?>blog.php" class="btn" style="background: var(--color-gray-700);">Explore Blog</a>
            </div>
        </div>
    </div>
</section>


<section class="about_stats">
    <div class="container">
        <div class="stats_grid">
            <div class="stat_item">
                <h3 class="stat_number">500+</h3>
                <p class="stat_label">Articles Published</p>
            </div>
            <div class="stat_item">
                <h3 class="stat_number">10K+</h3>
                <p class="stat_label">Active Readers</p>
            </div>
            <div class="stat_item">
                <h3 class="stat_number">50+</h3>
                <p class="stat_label">Expert Contributors</p>
            </div>
            <div class="stat_item">
                <h3 class="stat_number">100+</h3>
                <p class="stat_label">Categories Covered</p>
            </div>
        </div>
    </div>
</section>

<section class="about_story">
    <div class="container">
        <div class="story_content">
            <h2 class="section_title">Our Story</h2>
            <div class="story_grid">
                <div class="story_text">
                    <p>ByteJournal was born from a simple idea: technology should be accessible to everyone, regardless of their background or experience level. What started as a small blog sharing coding tips has grown into a comprehensive platform serving thousands of developers and tech enthusiasts worldwide.</p>
                    <p>Over the years, we've built a community of passionate writers, developers, and learners who share our vision. Every article, tutorial, and guide we publish is crafted with care, ensuring that our readers get the most accurate and helpful information possible.</p>
                    <p>We're constantly evolving, adding new features, improving our content, and expanding our reach. But one thing remains constant: our commitment to helping you succeed in your tech journey, one article at a time.</p>
                </div>
                <div class="story_features">
                    <div class="story_feature">
                        <i class="uil uil-check-circle"></i>
                        <h4>Verified Content</h4>
                        <p>All our articles are reviewed by industry experts</p>
                    </div>
                    <div class="story_feature">
                        <i class="uil uil-clock"></i>
                        <h4>Regular Updates</h4>
                        <p>Fresh content published weekly to keep you informed</p>
                    </div>
                    <div class="story_feature">
                        <i class="uil uil-comments"></i>
                        <h4>Active Community</h4>
                        <p>Join discussions and share your knowledge</p>
                    </div>
                    <div class="story_feature">
                        <i class="uil uil-rocket"></i>
                        <h4>Always Improving</h4>
                        <p>We continuously enhance our platform based on your feedback</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/partials/footer.php';
?>
