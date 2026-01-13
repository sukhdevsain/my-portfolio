<?php
// Portfolio Configuration
$portfolio = [
    'name' => 'Your Name',
    'title' => 'Full Stack Web Developer',
    'tagline' => 'Crafting Digital Experiences with Precision & Elegance',
    'email' => 'your.email@example.com',
    'phone' => '+1 (555) 123-4567',
    'location' => 'Your City, Country',
    'social' => [
        'github' => 'https://github.com/yourusername',
        'linkedin' => 'https://linkedin.com/in/yourusername',
        'twitter' => 'https://twitter.com/yourusername'
    ]
];

$skills = [
    'Frontend' => ['HTML5', 'CSS3', 'JavaScript', 'Bootstrap', 'Tailwind CSS'],
    'Backend' => ['PHP', 'Laravel', 'Symfony', 'MySQL', 'REST APIs'],
    'Tools' => ['Git', 'GitHub', 'WordPress', 'Figma', 'Canva']
];

$projects = [
    [
        'title' => 'E-Commerce Platform',
        'description' => 'Full-featured online store with admin dashboard, payment integration, and inventory management.',
        'tech' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript'],
        'image' => 'project1.jpg',
        'demo' => '#',
        'github' => '#'
    ],
    [
        'title' => 'User Management System',
        'description' => 'Comprehensive user authentication and profile management system with role-based access.',
        'tech' => ['PHP', 'MySQL', 'CSS3', 'JavaScript'],
        'image' => 'project2.jpg',
        'demo' => '#',
        'github' => '#'
    ],
    [
        'title' => 'WordPress Custom Theme',
        'description' => 'Responsive custom WordPress theme with advanced customization options and SEO optimization.',
        'tech' => ['WordPress', 'PHP', 'CSS3', 'JavaScript'],
        'image' => 'project3.jpg',
        'demo' => '#',
        'github' => '#'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $portfolio['name']; ?> - <?php echo $portfolio['title']; ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <img src="./logo.jpg" alt="">
            </div>
            <ul class="nav-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-name"><?php echo $portfolio['name']; ?></h1>
                    <h2 class="hero-title"><?php echo $portfolio['title']; ?></h2>
                    <p class="hero-tagline"><?php echo $portfolio['tagline']; ?></p>
                    <div class="hero-buttons">
                        <a href="#projects" class="btn btn-primary">View My Work</a>
                        <a href="#contact" class="btn btn-secondary">Get In Touch</a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="image-placeholder">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-scroll">
            <span>Scroll Down</span>
            <i class="fas fa-arrow-down"></i>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-header">
                <h2>About Me</h2>
                <p>Passionate about creating exceptional digital experiences</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <p>I am a dedicated and self-motivated web developer with strong hands-on experience in building modern and responsive web applications. I have solid knowledge of HTML5, CSS3, Bootstrap, Tailwind CSS, JavaScript, and backend technologies including PHP, Laravel, and Symfony.</p>
                    <p>I have worked extensively with MySQL databases, REST APIs, authentication systems, and CRUD operations. I also have practical experience in WordPress development, custom themes and plugins, and version control using Git and GitHub.</p>
                    <div class="about-stats">
                        <div class="stat">
                            <h3>50+</h3>
                            <p>Projects Completed</p>
                        </div>
                        <div class="stat">
                            <h3>3+</h3>
                            <p>Years Experience</p>
                        </div>
                        <div class="stat">
                            <h3>100%</h3>
                            <p>Client Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <div class="container">
            <div class="section-header">
                <h2>Skills & Expertise</h2>
                <p>Technologies I work with to bring ideas to life</p>
            </div>
            <div class="skills-grid">
                <?php foreach($skills as $category => $skillList): ?>
                <div class="skill-category">
                    <h3><?php echo $category; ?></h3>
                    <div class="skill-items">
                        <?php foreach($skillList as $skill): ?>
                        <span class="skill-item"><?php echo $skill; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <div class="section-header">
                <h2>Featured Projects</h2>
                <p>A showcase of my recent work and achievements</p>
            </div>
            <div class="projects-grid">
                <?php foreach($projects as $project): ?>
                <div class="project-card">
                    <div class="project-image">
                        <div class="image-placeholder">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="project-overlay">
                            <a href="<?php echo $project['demo']; ?>" class="project-link">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <a href="<?php echo $project['github']; ?>" class="project-link">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3><?php echo $project['title']; ?></h3>
                        <p><?php echo $project['description']; ?></p>
                        <div class="project-tech">
                            <?php foreach($project['tech'] as $tech): ?>
                            <span><?php echo $tech; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Let's Work Together</h2>
                <p>Ready to bring your ideas to life? Let's connect!</p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>Email</h4>
                            <p><?php echo $portfolio['email']; ?></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h4>Phone</h4>
                            <p><?php echo $portfolio['phone']; ?></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>Location</h4>
                            <p><?php echo $portfolio['location']; ?></p>
                        </div>
                    </div>
                </div>
                <form class="contact-form" method="POST" action="contact.php">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-text">
                    <p>&copy; <?php echo date('Y'); ?> <?php echo $portfolio['name']; ?>. All rights reserved.</p>
                </div>
                <div class="footer-social">
                    <?php foreach($portfolio['social'] as $platform => $url): ?>
                    <a href="<?php echo $url; ?>" target="_blank">
                        <i class="fab fa-<?php echo $platform; ?>"></i>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>