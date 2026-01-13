# Professional Portfolio - Luxury Design

A sophisticated and luxurious professional portfolio website built with PHP core, featuring modern design principles and smooth animations.

## Features

### Design & UI
- **Luxury Design**: Premium aesthetic with elegant typography and sophisticated color scheme
- **Responsive Layout**: Fully responsive design that works on all devices
- **Modern Animations**: Smooth scroll effects, hover animations, and loading transitions
- **Custom Cursor**: Interactive cursor effects for enhanced user experience
- **Gradient Backgrounds**: Beautiful gradient overlays and accent colors

### Sections
- **Hero Section**: Eye-catching introduction with call-to-action buttons
- **About**: Professional summary with statistics showcase
- **Skills**: Organized skill categories with modern tag design
- **Projects**: Portfolio showcase with hover effects and project details
- **Contact**: Interactive contact form with validation

### Technical Features
- **PHP Core**: Built with pure PHP for backend functionality
- **Contact Form**: Fully functional contact form with email sending
- **Form Validation**: Client-side and server-side validation
- **Email Templates**: HTML email templates for contact submissions
- **Smooth Scrolling**: JavaScript-powered smooth navigation
- **Intersection Observer**: Scroll-triggered animations
- **Mobile Navigation**: Responsive hamburger menu

## File Structure

```
portfolio/
├── index.php          # Main portfolio page
├── styles.css         # All styling and responsive design
├── script.js          # JavaScript functionality and animations
├── contact.php        # Contact form handler
└── README.md          # Documentation
```

## Setup Instructions

1. **Upload Files**: Upload all files to your web server
2. **Configure Email**: Edit `contact.php` and update the email address on line 32:
   ```php
   $to = 'your.email@example.com'; // Replace with your email
   ```
3. **Customize Content**: Edit `index.php` to update your personal information:
   - Name and title
   - Skills and expertise
   - Project details
   - Contact information

## Customization

### Personal Information
Update the `$portfolio` array in `index.php`:
```php
$portfolio = [
    'name' => 'Your Name',
    'title' => 'Your Professional Title',
    'tagline' => 'Your Professional Tagline',
    'email' => 'your.email@example.com',
    'phone' => '+1 (555) 123-4567',
    'location' => 'Your City, Country',
    // ... social links
];
```

### Skills
Modify the `$skills` array to reflect your expertise:
```php
$skills = [
    'Frontend' => ['HTML5', 'CSS3', 'JavaScript', 'React', 'Vue.js'],
    'Backend' => ['PHP', 'Laravel', 'Node.js', 'Python', 'MySQL'],
    'Tools' => ['Git', 'Docker', 'AWS', 'Figma', 'Photoshop']
];
```

### Projects
Update the `$projects` array with your portfolio pieces:
```php
$projects = [
    [
        'title' => 'Project Name',
        'description' => 'Project description...',
        'tech' => ['Technology', 'Stack', 'Used'],
        'demo' => 'https://demo-link.com',
        'github' => 'https://github.com/username/repo'
    ]
];
```

### Colors & Styling
Customize the color scheme in `styles.css` by modifying the CSS variables:
```css
:root {
    --primary-color: #1a1a1a;
    --accent-color: #d4af37;
    --gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    /* ... other variables */
}
```

## Browser Support
- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## Performance Features
- Optimized CSS with efficient selectors
- Minimal JavaScript for fast loading
- Responsive images and layouts
- Smooth animations with CSS transforms
- Lazy loading for better performance

## Contact Form Features
- HTML5 form validation
- PHP server-side validation
- Email sanitization and security
- HTML email templates
- Contact logging (optional)
- AJAX support for seamless submission

## License
This portfolio template is free to use and modify for personal and commercial projects.

## Support
For questions or customization help, feel free to reach out through the contact form on the portfolio.

---

**Note**: Remember to test the contact form functionality and ensure your server supports PHP mail() function or configure SMTP for email sending.