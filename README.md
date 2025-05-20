# Ordering System

A simple Vue.js ordering system web application that allows users to submit orders, compute costs including taxes and shipping, and view order summaries with pagination and print options.

## Members
- Lina Ignacio
- Mark Lawrence Gonzales
- Drachir Carlo Tacal
- Eman Briones

## Features

- Dynamic form to submit school supply orders
- Real-time summary with tax, shipping, and total
- Pagination for submitted orders
- Summary table
- Simple session management and logout functionality

## Technologies Used

- **Frontend:** Vue 3 (`order-management-client`)
- **Backend:** Laravel (`ordering_system`)
- **Database:** MySQL
- **HTTP Client:** Axios


## Project Setup

### 1. Clone the Repository

- git clone https://github.com/Drak218/ABC_ordering_system.git
- cd ABC_ordering_system

###2. Backend Setup (Laravel)

- cd ordering_system
- composer install
- cp .env.example .env
- php artisan key:generate

- Update your .env file with your database credentials:
- DB_DATABASE=ordering_system_db
- DB_USERNAME=your_db_username
- DB_PASSWORD=your_db_password

- Run migrations (if applicable):
- php artisan migrate

- Start the backend server:
- php artisan serve

###3. Frontend Setup (Vue.js)

- cd ../order-management-client
- npm install
- npm run dev

✅ Default URLs

  Frontend (Vite): http://localhost:5173
  
  Backend (Laravel): http://localhost:8000

📌 Notes

  Ensure MySQL is running and the ordering_system_db database is created manually if migrations are not used.

  The backend serves as an API; all user interaction happens via the Vue frontend.

  Make sure CORS is properly configured in Laravel (app/Http/Middleware/HandleCors.php) if you run into frontend-backend communication issues.

📄 License

This project is for academic or internal use only.
