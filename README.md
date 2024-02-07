# Real-Time Chat Application Documentation

## Author: [Demarillac Izere](https://github.com/demarillacizere/)
## Introduction
This is a comprehensive guide for setting up, configuring, and using a real-time chat application built with PHP Laravel and Livewire. This application allows users to engage in real-time text-based communication over the web.

### Technologies Used
- **PHP Laravel:** A powerful PHP framework for building web applications.
- **Livewire:** A full-stack framework for Laravel that makes building dynamic interfaces simple, without leaving the comfort of Laravel.

## Installation
Follow these steps to set up the real-time chat application on your local development environment:

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/demarillacizere/Realtime-Chat.git
   cd repository
   ```

2. **Install Dependencies:**

```bash
composer install
```

3. **Set Up Environment Variables:**

- Rename .env.example to .env.
- Configure your database connection in the .env file.

4. **Generate Application Key:**

```bash
php artisan key:generate
```
5. **Run Migrations:**

```bash
php artisan migrate
```

6. **Configure Pusher:**
- Create a new app on [Pusher](https://pusher.com/) 
- Set up Pusher credentials and configuration in the `.env` file for integrating Pusher for real-time messaging.

6. **Start the Development Server:**

```bash
php artisan serve
```

7. **Access the Application:**
```
Visit http://localhost:8000 in your web browser.
```

## Usage
Once the application is installed and running, users can perform the following actions:

- Register/Login: Users can create a new account or log in with existing credentials.
- Real-Time Chat: Users can engage in real-time chat with other users who are logged into the application.
- User Presence: The application displays the online/offline status of users.

## Features

- **Real-Time Messaging**
  - Utilizes Livewire to provide real-time messaging functionality without the need for page refreshes.
  - Messages are instantly displayed to all users participating in the chat conversation.
  - Supports sending text messages with timestamps for easy tracking.

- **User Authentication**
  - Implements Laravel's built-in authentication system for user registration and login.
  - Users can securely create new accounts or log in with existing credentials.

- **Online Presence**
  - Displays the online/offline status of users within the chat interface.
  - Users are notified when other users come online or go offline.

## Architecture

### Frontend
- **Blade Templates:** Used for rendering HTML views.
- **Livewire Components:** Responsible for handling user interactions and updating the UI in real-time.

### Backend
- **PHP Laravel:** Provides the backend framework for handling HTTP requests, database interactions, and business logic.
- **Eloquent ORM:** Laravel's ORM is used for interacting with the database and managing application data.

### Database
- MYSQL Database used for storing user information and chat messages.

### Pusher WebSocket
- For enhanced real-time capabilities, WebSocket technology was integrated into the application using Pusher.

## Configuration Options

The application offers various configuration options that can be adjusted according to specific requirements. These options include:

- **Database Configuration:** Configure the database connection settings in the `.env` file.
- **Livewire Configuration:** Fine-tune Livewire settings in the `config/livewire.php` file.
- **Pusher Configuration:** Set up Pusher credentials and configuration in the `.env` file for integrating Pusher for real-time messaging

## Troubleshooting

If you encounter any issues during installation or usage, consider the following troubleshooting steps:

* Check Environment Configuration: Ensure that all environment variables are correctly set up, especially database connection settings.
* Review Error Logs: Check Laravel's error logs (storage/logs/laravel.log) for any error messages or exceptions.
* Clear Cache: Sometimes, clearing the application cache (php artisan cache:clear) can resolve unexpected behavior.