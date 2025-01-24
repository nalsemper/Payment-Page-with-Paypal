# Payment-Page-with-PayPal

This is a project using PHP and MySQL to create a payment page with PayPal integration. It’s built with XAMPP to make it easy to run on your local machine.

## Features
- Easy-to-use payment form.
- PayPal integration for secure payments.
- Saves transaction data in the database.

## How to Set Up
1. Install XAMPP on your computer.
2. Clone this project to your XAMPP `htdocs` folder.
3. Create a database in phpMyAdmin and import the provided SQL file.
4. Update the `config.php` file with your database and PayPal API details.
5. Open the project in your browser by going to `http://localhost/Payment-Page-with-Paypal`.

## How It Works
1. View available items/products on the payment page.
2. Click on an item and proceed to payment using PayPal.
3. After payment, the transaction is stored in the database.

## Technologies Used
- PHP
- MySQL
- PayPal API
- XAMPP

## Development Steps
- Set up the project environment.
- Create a configuration file for database and API keys.
- Fetch data from the database.
- Process payments using PayPal in two steps (API integration and database recording).
