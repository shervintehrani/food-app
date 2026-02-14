# Laravel Small Food Ordering System (JSON Storage)

A simple food ordering mini-project built with Laravel. This project
demonstrates how to build a small ordering system without using a
database, storing menus and orders in JSON files instead.

## Features

-   Menu stored in JSON file
-   Order storage using JSON
-   Session-based shopping cart
-   Blade UI with Bootstrap
-   MVC architecture
-   Service layer for file storage

## Installation

Enter project directory:

cd food-order-app

Install dependencies:

composer install

Copy environment file:

cp .env.example .env

Generate application key:

php artisan key:generate

Run the server:

php artisan serve

Open in browser:

http://127.0.0.1:8000

## JSON Storage

Menu items are stored in: storage/app/data/menu.json

Orders are stored in: storage/app/data/orders.json

## How It Works

1.  Menu is loaded from menu.json
2.  Items are added to session cart
3.  Checkout saves cart into orders.json
4.  Cart session is cleared


