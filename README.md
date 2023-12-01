#Cache laravel system
Clone the project and cd in the root directory
Change the database name from env file
Do composer install
migrate and seed php artisan migrate, php artisan db:seed --class=ProductSeeder
php artisan serve
go to route to test it http://127.0.0.1:8000/search
l am using Memcached. The Cache results expires in 60 minutes
