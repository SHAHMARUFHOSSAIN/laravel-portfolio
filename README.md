# Portfolio Website - Installation Guide

A modern, production-ready portfolio website built with Laravel 11, Filament, Livewire, and Tailwind CSS.

## Requirements

- PHP 8.2+
- Composer
- Node.js 18+
- MySQL 8.0+ or PostgreSQL
- Git

## Installation

### Step 1: Clone or Download the Project

```bash
# If starting fresh, create project with composer
composer create-project laravel/laravel portfolio-shah
cd portfolio-shah

# Or if you have the files, copy them to your project directory
```

### Step 2: Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### Step 3: Environment Configuration

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

Edit the `.env` file with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

### Step 4: Create Database

```sql
-- Login to MySQL
mysql -u root -p

-- Create database
CREATE DATABASE portfolio CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Exit
EXIT;
```

### Step 5: Run Migrations

```bash
php artisan migrate
```

### Step 6: Create Admin User (for Filament)

```bash
php artisan make:filament-user

# Follow the prompts:
# Name: Admin
# Email: admin@example.com
# Password: (enter a strong password)
```

### Step 7: Seed Demo Data (Optional)

```bash
php artisan db:seed
```

This will populate your database with sample profile, skills, projects, services, and testimonials.

### Step 8: Create Storage Link

```bash
php artisan storage:link
```

### Step 9: Build Assets

```bash
# Development build
npm run dev

# Production build
npm run build
```

### Step 10: Start the Server

```bash
# Development server
php artisan serve

# The application will be available at http://localhost:8000
```

## Admin Panel

Access the Filament admin panel at:

```
http://localhost:8000/admin
```

Login with the credentials you created in Step 6.

## Features

### Frontend
- **Hero Section**: Profile photo, name, title, bio, CTAs, social links
- **About Section**: Full bio, skills with progress bars, experience timeline
- **Projects Section**: Grid layout with filtering by technology
- **Services Section**: Service cards with features
- **Testimonials Section**: Client reviews with ratings
- **Contact Section**: Live validation, stores messages, sends emails
- **Dark/Light Mode**: Toggle with persistence
- **Responsive Design**: Mobile-first approach

### Admin Panel (Filament)
- **Profile Management**: Name, photo, bio, social links
- **Project Management**: CRUD with images and technology tags
- **Skills Management**: Categories, percentages, icons
- **Experience Management**: Timeline entries
- **Services Management**: Features list
- **Testimonials Management**: Client reviews
- **Contact Messages**: View and manage inquiries

### Livewire Features
- Real-time project filtering
- Contact form validation
- Theme toggle

## Project Structure

```
portfolio-shah/
├── app/
│   ├── Filament/Resources/     # Admin panel resources
│   ├── Http/
│   │   ├── Controllers/         # Controllers
│   │   ├── Livewire/            # Livewire components
│   │   └── Middleware/          # Custom middleware
│   ├── Mail/                    # Email classes
│   ├── Models/                  # Eloquent models
│   └── Providers/               # Service providers
├── config/                      # Configuration files
├── database/
│   ├── migrations/              # Database migrations
│   └── seeders/                # Database seeders
├── public/                     # Public assets
├── resources/
│   ├── css/                    # Stylesheets
│   ├── js/                     # JavaScript
│   └── views/                  # Blade views
│       ├── layouts/            # Layout files
│       ├── livewire/           # Livewire views
│       ├── partials/           # Partial views
│       └── sections/           # Page sections
├── routes/                     # Route definitions
└── storage/                   # Storage files
```

## Artisan Commands

```bash
# Clear caches
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Fresh install
php artisan migrate:fresh --seed

# Create admin user
php artisan make:filament-user

# List routes
php artisan route:list

# Storage link
php artisan storage:link
```

## Customization

### Update Profile
1. Go to Admin Panel > Profile
2. Update your information
3. Upload your photo
4. Add social links

### Add Projects
1. Go to Admin Panel > Projects
2. Click "New Project"
3. Fill in details and upload images
4. Select technologies used

### Modify Skills
1. Go to Admin Panel > Skills
2. Add/edit skills with percentages
3. Organize by category

### Change Theme Colors
Edit `tailwind.config.js`:

```javascript
colors: {
    primary: {
        500: '#3b82f6', // Your custom primary color
    },
},
```

## Deployment

### For Production

1. Set `APP_ENV=production` in `.env`
2. Set `APP_DEBUG=false`
3. Run `php artisan config:cache`
4. Run `php artisan route:cache`
5. Point web server to `public/` directory

### Recommended Hosting
- Laravel Forge
- Vapor
- DigitalOcean App Platform
- Railway

## Troubleshooting

### Images not displaying
```bash
php artisan storage:link
```

### Database connection errors
Check `.env` database credentials and ensure MySQL is running.

### CSS/JS not loading
```bash
npm run dev
# or
npm run build
```

## License

This project is open-sourced software licensed under the MIT license.
