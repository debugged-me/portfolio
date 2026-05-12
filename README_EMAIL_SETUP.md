# Email Setup for XAMPP Portfolio

## Problem
The contact form shows "Message saved, but email delivery failed on this server" because XAMPP doesn't have SMTP configured by default.

## Solution Options

### Option 1: Use PHPMailer with Gmail (Recommended)
1. Install PHPMailer via Composer:
   ```bash
   cd /Applications/XAMPP/xamppfiles/htdocs/portfolio
   composer require phpmailer/phpmailer
   ```

2. Edit `phpmailer-config.php` and update these lines:
   ```php
   $mail->Username   = 'your-email@gmail.com';  // Your Gmail address
   $mail->Password   = 'your-app-password';     // Gmail App Password (not your regular password)
   ```

3. Generate a Gmail App Password:
   - Go to Google Account settings
   - Enable 2-factor authentication
   - Go to Security → App passwords
   - Generate a new app password for "Mail"

### Option 2: Configure XAMPP Sendmail
1. Edit `/Applications/XAMPP/xamppfiles/etc/php.ini`:
   ```ini
   SMTP = smtp.gmail.com
   smtp_port = 587
   sendmail_from = your-email@gmail.com
   sendmail_path = /usr/sbin/sendmail -t -i
   ```

2. Restart Apache

### Option 3: Use MailHog (Development Only)
1. Download MailHog
2. Run it and configure php.ini to use MailHog's SMTP

## Testing
After setup, test the contact form. Messages should be delivered successfully instead of just being saved locally.

## Current Status
- ✅ SMTP configuration file created
- ✅ Contact form updated to use SMTP when available
- ✅ Fallback to regular mail() if SMTP fails
- ⏳ Need to configure actual SMTP credentials
