![Screenshot 2022-12-03 at 22-37-14 E-Ticaretim - Ana Sayfa](https://user-images.githubusercontent.com/76810832/205458779-6dff912f-49bf-44ce-beae-69007e857151.png)

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve
