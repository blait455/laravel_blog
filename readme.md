# About This Project


##Setting up for production

#####Change your .env file <br />
 After running ` git pull ` from bitbucket, create a `.env` file set you `.env` file like this. 
 There will be a `.env.example` file in there for reference, can use that or use the description below.
  
 - APP_ENV=production
 - APP_DEBUG=false
 - APP_KEY=SomeRandomString 
<br /><br />
 - DB_HOST=localhost
 - DB_DATABASE=[your database name]
 - DB_USERNAME=[your user name]
 - DB_PASSWORD=[your database password name]
<br /><br />
 - CACHE_DRIVER=file
 - SESSION_DRIVER=file
 - QUEUE_DRIVER=sync
<br /><br />
 - REDIS_HOST=localhost
 - REDIS_PASSWORD=null
 - REDIS_PORT=6379
<br /><br />
 - MAIL_DRIVER=smtp
 - MAIL_HOST=sendgrid.com
 - MAIL_PORT=2525
 - MAIL_USERNAME=XXXXXXXXXXX
 - MAIL_PASSWORD=XXXXXXXXXXX
 - MAIL_ENCRYPTION=null

 Run `php artisan key:generate ` <br />
 
 Remove `"Barryvdh\Debugbar\ServiceProvider::class,"` from app.php provider. <br />
 Remove `"'Debugbar' => Barryvdh\Debugbar\Facade::class,"` from app.php aliases

 Run `composer install --no-dev` [ this will install without debugger and testing stuff ] <br />
 
 Run `php artisan migrate` to install tables <br />
 Run `php artisan laratrust:migration `  permissions  <br />
 
 > set up your server or you can run this project in your local by using `php artisan serve`

<br />

##Setting up for Test

#####Change your .env file <br />
 After running ` git pull ` from bitbucket, create a `.env` file set you `.env` file like this. 
 There will be a `.env.example` file in there for reference, can use that or use the production one above with slight change.
 
   - APP_ENV=local
   - APP_DEBUG=true
   
 Run `php artisan key:generate ` <br />
 Run `composer install --no-dev` [ this will install without debugger and testing stuff ] <br />
  
  Run `php artisan migrate` to install tables <br />
  Run ` php artisan laratrust:migration `  .env file for production <br />
  Run `php artisan db:seed` to use Facker data 
 
 