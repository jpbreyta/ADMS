# 📖 MVC Project in Pure PHP

This project follows the **Model-View-Controller (MVC)** pattern using only **pure PHP** (no frameworks). Below is a breakdown of how each folder and file is structured and how they function in the system.

---

## 🏗 **Folder Structure and Purpose**

```
mvc_project/
│── app/
│   ├── controllers/       # Core application controllers
│   ├── models/            # Business logic and database interactions
│   ├── views/             # Shared user interface templates
│
│── admin/
│   ├── controllers/       # Admin-specific controllers
│   ├── models/            # Admin-related models
│   ├── views/             # Admin panel templates
│
│── user/
│   ├── controllers/       # User-side controllers
│   ├── models/            # User-related models
│   ├── views/             # User interface templates
│
│── config/
│   ├── config.php         # Configuration settings (e.g., database connection)
│
│── public/
│   ├── index.php          # Main entry point of the application
│
│── README.md              # Documentation
```

---

## 📂 **How Each Folder Works**

### 🔹 `app/`
This folder contains the **core application logic** that is shared between both the `admin/` and `user/` sections.
- **controllers/** → Handles requests and directs traffic to the appropriate models and views.
- **models/** → Contains business logic and database interaction.
- **views/** → Contains reusable front-end templates that can be used by both admin and user interfaces.

### 🔹 `admin/`
This folder contains logic and templates **specific to the admin panel**.
- **controllers/** → Handles admin-related requests (e.g., managing users, products, or settings).
- **models/** → Contains database operations related to the admin section.
- **views/** → Templates for admin-related pages (e.g., dashboard, reports, settings).

### 🔹 `user/`
This folder manages all **user-facing functionalities**.
- **controllers/** → Handles user-related actions (e.g., login, profile, orders).
- **models/** → Manages database queries for user-specific features.
- **views/** → Displays web pages accessible to users.

### 🔹 `config/`
Contains the **configuration settings** for the application.
- **config.php** → Stores database connection details and other essential settings.

### 🔹 `public/`
This is the **entry point** of the application.
- **index.php** → Acts as the front controller, processing requests and routing them to the correct controllers.

---

## 🚀 **How the MVC Flow Works**

1. A user accesses the application through `public/index.php`.
2. `index.php` loads the appropriate controller based on the request.
3. The controller processes the request, interacts with the model (if needed), and fetches data.
4. The retrieved data is sent to a view, which generates the HTML output.
5. The response is sent back to the browser.

---

## 🔥 **Example Usage**

### Routing Example (inside `public/index.php`)
```php
require_once '../config/config.php';
require_once '../app/controllers/BaseController.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'User';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerName = ucfirst($controller) . 'Controller';
$controllerFile = "../app/controllers/$controllerName.php";

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controllerInstance = new $controllerName();
    if (method_exists($controllerInstance, $action)) {
        $controllerInstance->$action();
    } else {
        echo "Action not found!";
    }
} else {
    echo "Controller not found!";
}
```

This simple routing mechanism loads the appropriate controller and method based on the URL parameters.

---

## ✅ **Next Steps**
- Implement **models** to interact with a database.
- Develop **views** with HTML and PHP to display data.
- Improve routing for a more flexible and scalable system.
- Secure the application with **user authentication**.

This structure allows for **scalability** and **separation of concerns**, making the project easier to manage.

---

This README serves as a guide for developers working on this **pure PHP MVC project**. 🚀