# 📦 PMS Laravel Project

A simple Laravel-based Product Management System (PMS).

## 🚀 Requirements
- PHP >= 8.x  
- Composer  
- MySQL
- Git  

## 📥 Setup Instructions

Clone the project:
git clone <your-repo-url>  
cd your-project  

Install dependencies:
composer install  

Copy environment file:
cp .env.example .env  

Create database:
CREATE DATABASE pms_db;  

Configure `.env` database settings:
DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=pms_db  
DB_USERNAME=root  
DB_PASSWORD=  

Generate application key:
php artisan key:generate  

## 🗄️ Database Setup

Run migrations and seed database (this will reset all tables and insert sample data):
php artisan migrate:fresh --seed  

## ▶️ Run Project

Start Laravel server:
php artisan serve  

Open in browser:
http://127.0.0.1:8000  

## 🧹 Useful Commands

Clear caches:
php artisan cache:clear  
php artisan config:clear  
php artisan route:clear  
php artisan view:clear  

Rebuild autoload:
composer dump-autoload  

## ⚠️ Notes
- Always configure `.env` before running migrations  
- Do NOT use migrate:fresh in production (it deletes all data)  
- Seeder is for demo/sample data only  

## ⚡ Quick Start

composer install  
cp .env.example .env  
php artisan key:generate  
php artisan migrate:fresh --seed  
php artisan serve  

## 🎯 Done
Your PMS Laravel project is now ready 🚀