# Task Manager App (Laravel & Vue.js)

![Task Manager App Preview](https://user-images.githubusercontent.com/91134535/203548827-f7a88c7a-5b53-4ead-bb96-4deab901bbf8.png)

The Task Manager App is a web application built using the Laravel PHP framework on the backend and Vue.js on the frontend. This app is designed to help users manage their tasks and to-do lists efficiently. While the app currently includes basic features, it's a work in progress with plans for implementing more advanced functionalities in the future.

## Features

- User registration and authentication system.
- Create, update, and delete tasks.
- Mark tasks as completed or pending.
- Responsive design for seamless use across devices.

## In Progress

The Task Manager App is actively being developed, with the following features planned for implementation:

- Task prioritization and categorization.
- Due dates and reminders for tasks.
- Collaborative task sharing and management.
- Task search and filtering capabilities.

## Getting Started

To run the Task Manager App on your local machine, follow these steps:

1. **Clone the repository:**

   ```
   git clone https://github.com/Alejandraj0rge/project-saffron.git
   ```

2. **Navigate to the project directory:**

   ```
   cd project-saffron
   ```

3. **Install dependencies:**

   ```
   composer install
   npm install
   ```

4. **Set up environment variables:**

   Duplicate the `.env.example` file and rename it to `.env`. Update the necessary database and application configuration settings.

5. **Generate application key:**

   ```
   php artisan key:generate
   ```

6. **Run migrations:**

   ```
   php artisan migrate
   ```

7. **Start the development server:**

   ```
   php artisan serve
   ```

8. **Compile assets:**

   ```
   npm run dev
   ```

9. **Open the application:**

   Once the server is running, open your web browser and navigate to [http://localhost:8000](http://localhost:8000) to access the Task Manager App.

## Usage

1. Register or log in using the provided authentication system.
2. Add tasks using the "Add Task" button.
3. Edit or delete tasks using the corresponding actions.
4. Mark tasks as completed or pending by clicking the checkbox.

## Technologies Used

- Laravel: A PHP web application framework for building robust backend systems.
- Vue.js: A progressive JavaScript framework for building user interfaces.
- MySQL: Database management system for storing task data.
- Bootstrap: CSS framework for responsive and visually appealing designs.

## Screenshots

![Screenshot 1](https://user-images.githubusercontent.com/91134535/203548827-f7a88c7a-5b53-4ead-bb96-4deab901bbf8.png)
![Screenshot 2](https://user-images.githubusercontent.com/91134535/203551241-2abd61f3-3122-4a03-84cc-083e853ef4f4.png)

