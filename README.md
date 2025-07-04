# Laravel Multi Tenancy

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)


**A scalable multi-tenant application built with Laravel**, supporting:
- Database-per-tenant or shared database strategies
- Automated tenant provisioning
- Isolated tenant data & configurations
- Centralized admin dashboard

### 🌟 Key Features
- **Tenant Identification**: Domain/subdomain or request parameter based
- **Database Isolation**: Separate databases or schema-based separation
- **Tenant Assets**: Isolated file storage per tenant
- **Admin Panel**: Central management for all tenants
- **Automated Migrations**: Run migrations per tenant
- **Queues & Jobs**: Tenant-aware job processing

### Use Cases
- SaaS applications
- White-label platforms
- Multi-client management systems

## 🚀 Getting Started

Follow these instructions to get the project up and running on your local machine.

### Prerequisites

- PHP 8.0 or higher
- Composer
- Node.js and npm
- MySQL or other supported database

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/projectname.git
   cd projectname
   
2. **Install dependencies**
   ```bash
    composer install
    npm install
   
3. **Environment setup**
   ```bash
    cp .env.example .env
    php artisan key:generate

4. **Database configuration**
   ```bash
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
   
5. **Run migrations**
   ```bash
    php artisan migrate
    
6. **Start the development server**
   ```bash
    php artisan serve
    npm run dev
       
7. **Clear cache**
   ```bash
    php artisan cache:clear
    php artisan view:clear
    php artisan route:clear

### License

This project is licensed under the MIT License
