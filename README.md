# How to Run the LittleSeedPlants
## Prerequisites

XAMPP installed
PHP installed
Composer installed
Git installed

## Steps

### 1. Clone the repository
bashCopygit clone https://github.com/asukulu/LittleSeedPlants.git

### 2. Navigate to the project directory
bashCopycd LittleSeedPlants

### 3. Install dependencies
bashCopycomposer install

### 4. Set up the environment file
bashCopycp .env.example .env
php artisan key:generate

### 5. Configure the database connection

Open the .env file and update the database settings:
CopyDB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=littleseed
DB_USERNAME=root
DB_PASSWORD=



### 6. Start XAMPP

Launch XAMPP Control Panel
Start Apache and MySQL services
Click on "Admin" next to MySQL to open phpMyAdmin in your browser
Create a new database named "littleseed" if it doesn't exist


### 7. Run database migrations
bashCopyphp artisan migrate

This will create all necessary tables in the database


### 8. Seed the database (optional)
bashCopyphp artisan db:seed

This will populate the database with sample data, if available


### 9. Start the development server
bashCopyphp artisan serve

The website will be accessible at http://127.0.0.1:8000


### 10. Access the website

Open your browser and navigate to http://127.0.0.1:8000



## Troubleshooting

If you encounter any database connection issues, make sure MySQL is running in XAMPP
If you get a 500 error, check the Laravel logs at storage/logs/laravel.log
For permission issues, ensure the storage and bootstrap/cache directories are writable

===========================================================================================

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# LittleSeedPlants
