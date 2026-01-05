# 🍽️ GLA CRAVE- Online Food Ordering System

[![PHP](https://img.shields.io/badge/PHP-7.4-blue?logo=php&logoColor=white)](https://www.php.net/) 
[![MySQL](https://img.shields.io/badge/MySQL-5.7-blue?logo=mysql&logoColor=white)](https://www.mysql.com/) 
[![Bootstrap](https://img.shields.io/badge/Bootstrap-4-purple?logo=bootstrap&logoColor=white)](https://getbootstrap.com/) 
[![Apache](https://img.shields.io/badge/Apache-XAMPP-red?logo=apache&logoColor=white)](https://www.apachefriends.org/) 
[![VS Code](https://img.shields.io/badge/VS%20Code-1.80-blue?logo=visual-studio-code&logoColor=white)](https://code.visualstudio.com/)
[![GitHub](https://img.shields.io/badge/GitHub-black?logo=github&logoColor=white)](https://github.com/)

Dynamic web-based food ordering system using PHP & MySQL. Users can browse dishes, add items to the cart, place orders, and manage accounts. Admins can manage restaurants, dishes, and view customer orders through a secure backend interface.

---

## 🎯 Project Purpose

To build a full-stack food ordering platform demonstrating:

- Dynamic content rendering with PHP & MySQL  
- User authentication and session management  
- Real-time cart and order processing  
- Admin dashboard for managing food, orders, and restaurants  

---

## 🔑 Key Features

| Feature | Description |
|---------|-------------|
| User Registration & Login | Secure authentication with session handling |
| Restaurant & Dish Browsing | View available restaurants and their menus |
| Cart & Checkout System | Add dishes to cart and place orders |
| Order History | View past orders with timestamps |
| Admin Panel | Manage dishes, restaurants, and delete orders |
| Logout Functionality | Secure session termination |

---

## 🧱 System Architecture

| Component | Technology |
|----------|-----------|
| Frontend | HTML, CSS, Bootstrap |
| Backend  | PHP |
| Database | MySQL |
| Server   | Apache (via XAMPP) |

---

## 📂 Project Structure

| File / Folder | Description |
|---------------|-------------|
| index.php | Landing page with dish and restaurant listings |
| login.php | User login |
| logout.php | Session logout |
| registration.php | User registration |
| checkout.php | Cart & checkout logic |
| your_orders.php | Displays user's order history |
| delete_orders.php | Admin deletes past orders |
| dishes.php | Admin view to manage dishes |
| restaurants.php | Admin view to manage restaurants |
| product-action.php | Handles cart operations (add, remove) |
| 01 LOGIN DETAILS.txt | Admin login credentials |

---

## 🧮 Core Logic

### Add to Cart
```php
$_SESSION["cart_item"][$code] = array(
  'name' => $product["title"],
  'price' => $product["price"],
  'quantity' => $quantity
);
```

### Secure Session Handling
```php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
}
```

---

## 🗃️ Database Schema

| Table       | Purpose                                 |
| ----------- | --------------------------------------- |
| Users       | Stores registered user information      |
| Restaurants | Contains restaurant names and details   |
| Dishes      | Menu items associated with restaurants  |
| Orders      | Tracks which user ordered what and when |

---

## 🖥️ How to Use

1. Clone or download the repository.
2. Import the database `.sql` file into phpMyAdmin.
3. Place the project folder in your XAMPP `htdocs` directory.
4. Start Apache and MySQL from the XAMPP control panel.
5. Visit `http://localhost/online-food-ordering` in your browser.
6. Register a user account or log in as admin (`admin` / `codeastro`).
7. Browse restaurants, add dishes to cart, and place orders.

---

## 📷 User Interface

* Dish grid with images, prices, and “Add to Cart”
* Admin dashboard for viewing orders and managing menu
* Responsive design with Bootstrap

## 🧰 Tools & Tech Stack

| Category                    | Tools / Technologies                                       | Badge                                                                                                                                                           |
| --------------------------- | ---------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Programming                 | PHP, JavaScript, HTML, CSS                                 | ![PHP](https://img.shields.io/badge/PHP-7.4-blue?logo=php&logoColor=white), ![JS](https://img.shields.io/badge/JS-ES6-yellow?logo=javascript&logoColor=black) |
| Database                    | MySQL                                                      | ![MySQL](https://img.shields.io/badge/MySQL-5.7-blue?logo=mysql&logoColor=white)                                                                               |
| Frameworks & Libraries      | Bootstrap 4                                                | ![Bootstrap](https://img.shields.io/badge/Bootstrap-4-purple?logo=bootstrap&logoColor=white)                                                                   |
| Server                      | Apache (XAMPP)                                             | ![Apache](https://img.shields.io/badge/Apache-XAMPP-red?logo=apache&logoColor=white)                                                                           |
| IDE / Editor                | VS Code                                                    | ![VS Code](https://img.shields.io/badge/VS%20Code-1.80-blue?logo=visual-studio-code&logoColor=white)                                                           |
| Version Control & Dev Tools | GitHub, Email Template Development, Modular Content (SFMC) | ![GitHub](https://img.shields.io/badge/GitHub-black?logo=github&logoColor=white), ![SFMC](https://img.shields.io/badge/SFMC-lightgrey)                         |

---

## 🧠 Learnings

* PHP session management
* Dynamic cart and checkout system
* CRUD operations with MySQL
* Role-based access control for admin and users
* Designing responsive email templates
* Translating UI/UX wireframes into interactive code
* Using modular content for email campaigns
* Optimizing development processes to reduce AHT and improve productivity

---

## 📬 Contact

Feel free to contribute or report issues via GitHub.  
For questions, reach out via email or LinkedIn.
