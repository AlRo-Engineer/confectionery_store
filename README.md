# Online store selling confectionery
Capstone Project
## Overview

This project is developed for a start-up business with a standard set of features. 

- Product catalog: All products in the store are divided into categories, which provides easy navigation and search for customers.

- Shopping cart: Users can add items to the cart, change the number of selected items and remove items from the cart.

- Ordering System: After adding items to the cart, customers can place an order by providing their contact information. The order information is then stored in the database for further processing. Due to the fact that the online confectionery store is a small start-up enterprise, it was decided to simplify the shopping process for our potential customers. Guest ordering is used instead of mandatory authorization and account creation;

- User Interface: The website interface is simple and intuitive, using a modern and stylish design using Bootstrap.

In the course of work on the project, all the set tasks were successfully solved, and the result was a workable online store, ready for further operation and development 

## Technologies Used

- PHP
- Laravel

# Installation

To get started with the project, follow these steps:

1. **Clone the repository**:
    ```bash
    git clone <repository-url>
    cd <repository-directory>
    ```

2. **Install dependencies**:
    ```bash
    composer install
    ```

3. **Copy the example environment file and configure your environment variables**:
    ```bash
    cp .env.example .env
    ```

4. **Generate an application key**:
    ```bash
    php artisan key:generate
    ```

5. **Run the database migrations**:
    ```bash
    php artisan migrate
    ```

6. **Start the development server**:
    ```bash
    php artisan serve
    ```

After running these commands, you should be able to access the application at `http://localhost:8000`.

## Contributing

If you would like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature-name`).
3. Make your changes and commit them (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/your-feature-name`).
5. Open a pull request.

