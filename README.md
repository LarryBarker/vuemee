<p align="center"><h1>Vuemee</h1></p>

## About Vuemee

Vuemee is a modern movie platform where users can puchase and share tickets, comment on, and review their favorite movies.

## Installation

Clone the repo to your machine
```
git clone git@github.com:LarryBarker/vuemee.git
cd vuemee
```

Install composer dependencies
```
composer install
```

Install npm dependencies and build assets
```
npm install && npm run dev
```

Copy env configuration file
```
cp .env.example.env
```

Generate a fresh application
```
php artisan key:generate
```

Create a new Mysql database named `vuemee`

Run migrations and seed database
```
php artisan migrate:fresh --seed
```

Serve the application and visit the provided address
```
php artisan serve
```

You can now browse movies, register for an account, login, and rate movies and order tickets.

## Tests

There is a basic test suite that can be run with the following command
```
phpunit
```

## Core Framework

Vuemee is built using Laravel, Breeze, Inertia and Vue.js. The best place to learn Laravel is by reading the [documentation](https://laravel.com/docs) or watching videos on [Laracasts](https://laracasts.com).

## Contributors

[Larry Barker](mailto:larry@larrybarker.me)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
