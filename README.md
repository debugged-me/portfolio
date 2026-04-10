# EDONG, CLARK STEVEN T. - Developer Portfolio

A high-impact, single-page developer portfolio featuring the "Kinetic Monolith" dark mode and "Clinical Editorial" light mode aesthetics.

## Overview

- **Name:** EDONG, CLARK STEVEN T.
- **Age:** 27 Years Old
- **Location:** Dahican, Mati City, Philippines, 8200
- **Title:** Digital Architect
- **Version:** v2.0.24

## Features

### Visual Design
- **Dual Theme System:** Toggle between "Kinetic Monolith" (Dark) and "Clinical Editorial" (Light)
- **Typography:** Space Grotesk (Primary), JetBrains Mono (Accents)
- **Primary Color:** Electric Blue (#2979FF)
- **High-Contrast:** Deep Slate (#0c0e10) / Pure White (#FFFFFF)

### Sections
1. **Immersive Hero:** Large-scale typography with particle/grid background
2. **System Manifest (Bio):** Personal data in technical format
3. **The Archive (Works):** Interactive project cards with hover reveals
4. **System Capabilities (Skills):** Animated skill bars and tech stack
5. **The Journey (Timeline):** Vertical protocol line (2018-2024)
6. **Initiate Link (Contact):** Technical communication portal

### Animations & Interactions
- **Boot-up Entrance:** Sequential text animations
- **Scanning Beam:** CSS keyframe grid pulse
- **Parallax Tilt:** 3D hover effect on project cards
- **Skill Bar Animation:** Progressive fill on scroll
- **Timeline Reveal:** Scroll-triggered fade-in
- **Micro-interactions:** Button scale, glow effects, ghost borders

## File Structure

```
portfolio/
├── index.php           # Main PHP template (dynamic ready)
├── styles.css          # Complete CSS with themes & animations
├── script.js           # Interactive features & scroll effects
├── contact.php         # Form handler (AJAX ready)
└── README.md           # Documentation
```

## Setup Instructions

### XAMPP Installation
1. Place this folder in `xamppfiles/htdocs/portfolio/`
2. Start Apache server from XAMPP Control Panel
3. Access at `http://localhost/portfolio/`

### Database Integration (Optional)
The PHP structure is ready for dynamic content. To integrate MySQL:

1. Create database:
```sql
CREATE DATABASE portfolio_db;
USE portfolio_db;

CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    stack VARCHAR(255),
    year VARCHAR(4),
    accent VARCHAR(7),
    icon VARCHAR(10),
    live_url VARCHAR(255),
    repo_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    subject VARCHAR(50),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

2. Update database credentials in `contact.php`

3. Replace array data in `index.php` with database queries

## Customization

### Personal Info
Edit the `$config` array in `index.php`:
```php
$config = [
    'name' => 'EDONG, CLARK STEVEN T.',
    'age' => 27,
    'location' => 'Dahican, Mati City, Philippines',
    'postal' => '8200',
    // ...
];
```

### Colors
Modify CSS custom properties in `styles.css`:
```css
:root {
    --primary: #2979FF;        /* Electric Blue */
    --accent-teal: #00D4AA;    /* Status Color */
    --accent-orange: #FF6B35;  /* Warnings */
    --accent-purple: #A855F7;  /* Highlights */
}
```

### Projects
Update the `$projects` array in `index.php` or add via database.

## Browser Support

- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+

## Credits

- **Fonts:** Google Fonts (Space Grotesk, JetBrains Mono)
- **Icons:** Unicode geometric symbols
- **Design System:** Custom "Kinetic Monolith" / "Clinical Editorial"

## License

Personal portfolio project. All rights reserved.
