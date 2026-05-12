PHP Image to WebP Converter with Watermark

Convert JPG, JPEG, PNG, GIF images to WebP format instantly using PHP — with automatic watermarking support. Lightweight, fast, and easy to deploy on any PHP server.


Features:
Convert JPG / JPEG / PNG / GIF → WebP format
Automatic watermark overlay on converted images
100% quality WebP output
Clean Bootstrap 5 UI with Lottie animation
Simple one-click download after conversion
Lightweight — no database required
Works on any Apache / Nginx + PHP server


Tech Stack:
TechnologyPurposePHP 8.xBackend image processingIntervention Image v3Image read, convert & watermarkGD LibraryPHP image driverBootstrap 5.3Responsive frontend UILottie AnimationUI illustrationComposerDependency management

Installation:
Prerequisites

PHP >= 8.0
Composer
GD extension enabled (extension=gd in php.ini)

Steps:
bash# 1. Clone the repository
git clone https://github.com/aneesraza-dev/image-process-php.git

# 2. Navigate into the project
cd image-process-php

# 3. Install dependencies
composer install

# 4. Make sure uploads folder is writable
chmod 777 uploads/

# 5. Run with PHP built-in server (for local testing)
php -S localhost:8000
Then open http://localhost:8000 in your browser.

How It Works

User uploads an image (.jpg, .jpeg, .png, or .gif)
PHP reads the image using Intervention Image
Watermark (watermark.png) is scaled and placed at the center with 50% opacity
Image is converted to WebP at 100% quality
Converted image is saved in the uploads/ folder
A download link is shown to the user


📁~Project Structure
image-process-php/
├── index.php          # Main application file (UI + backend logic)
├── watermark.png      # Watermark image applied to conversions
├── composer.json      # PHP dependencies
├── composer.lock      # Locked dependency versions
├── uploads/           # Converted WebP images stored here
├── vendor/            # Composer packages (Intervention Image)
└── .github/
    └── workflows/     # GitHub Actions CI/CD workflows

Usage

Open the app in your browser
Click "Insert Image" and select a .jpg, .jpeg, .png, or .gif file
Click "Convert"
Download your converted .webp image instantly


Why WebP?
WebP is a modern image format by Google that provides:

25–35% smaller file size compared to JPEG
Better quality at the same file size
Supported by all modern browsers (Chrome, Firefox, Safari, Edge)
Faster page load times → better SEO and Core Web Vitals


Configuration
To change the watermark, simply replace watermark.png in the root directory with your own logo/image (PNG with transparency recommended).
To adjust watermark size or opacity, edit these lines in index.php:
php$watermark->scale(width: 100);          // Change watermark width (px)
$image->place($watermark, "center", 20, 20, 50);  // Last param = opacity (0-100)

Contributing
Contributions are welcome! Feel free to:

Fork the repository
Create a new branch (git checkout -b feature/your-feature)
Commit your changes (git commit -m 'Add some feature')
Push to the branch (git push origin feature/your-feature)
Open a Pull Request



Author:
Muhammad Anees Raza

GitHub: @aneesraza-dev


Support
Agr ya Project Apko Useful lga ho tu Star zarror dijiyay ga, isse boht motivation milta hia 
