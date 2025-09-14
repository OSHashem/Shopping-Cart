# 🛒 Shopping Cart

A Shopping Cart web application built with **Laravel**, featuring secure user authentication, product browsing, cart management, and Stripe-powered checkout.  

> 📝 This project was developed as part of my internship at **IT-Gates**.  

## 🚀 Features
- User authentication (login/register/logout)  
- Product listing and details pages  
- Add to cart / remove from cart functionality  
- Checkout process with **Stripe Payment Gateway** integration  
- Order management linked to users  
- Built on MVC architecture with Laravel best practices  

## 🛠️ Technologies Used
- PHP, Laravel  
- Blade Templates  
- MySQL (via Eloquent ORM)  
- Stripe API  
- Composer, Artisan  

## 📂 Project Structure
- `app/Models` → Eloquent models (User, Product, Order, etc.)  
- `app/Http/Controllers` → Application logic  
- `resources/views` → Blade templates for UI  
- `.env` → Environment variables (Stripe keys, DB credentials)  

## ⚡ Getting Started

### Installation
```bash
# Clone the repository
git clone https://github.com/OSHashem/Shopping-Cart.git
cd Shopping-Cart

# Install dependencies
composer install
npm install && npm run dev

# Copy environment file and set up keys
cp .env.example .env

# Generate app key
php artisan key:generate

# Run migrations
php artisan migrate

# Serve the app
php artisan serve
