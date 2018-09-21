## About This Project

Remove "Barryvdh\Debugbar\ServiceProvider::class," from app.php provider
Remove "'Debugbar' => Barryvdh\Debugbar\Facade::class," from app.php aliases

Run:

composer install --no-dev [ this will install without debugger and testing stuff]
php artisan laratrust:migration

Edit

.env file for production


##Change your .env file

APP_ENV=production
APP_DEBUG=false
APP_KEY=SomeRandomString

DB_HOST=localhost
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD=XXXXXXXXX

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=localhost
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=sendgrid.com
MAIL_PORT=2525
MAIL_USERNAME=XXXXXXXXXXX
MAIL_PASSWORD=XXXXXXXXXXX
MAIL_ENCRYPTION=null