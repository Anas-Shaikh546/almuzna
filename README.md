

```markdown
# AlMuzna — Full-Stack E-Commerce Platform 🛒

[![PHP](https://img.shields.io/badge/PHP-7.4%20%7C%208.x-777BB4?style=flat-square&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=flat-square&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-UI-7952B3?style=flat-square&logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![JavaScript](https://img.shields.io/badge/JavaScript-AJAX-F7DF1E?style=flat-square&logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)

An end-to-end e-commerce platform designed with a modular PHP backend and relational MySQL storage. **AlMuzna** delivers a complete online shopping workflow, featuring dynamic client-side interactions (AJAX), authenticated customer management, and an administrative control panel for inventory and business operations.

---

## 🛠️ Tech Stack

| Domain | Technologies Used |
| :--- | :--- |
| **Backend & Logic** | PHP, Session Management, Custom Middleware Rules |
| **Database & Persistence** | MySQL, Relational Schema Design, Foreign Key Constraints |
| **Frontend & UI** | HTML5, CSS3, JavaScript (ES6+), jQuery, Bootstrap, Font Awesome |
| **Async Operations** | AJAX (Dynamic Cart Calculations & Quantity Updates) |
| **Environment** | Apache (XAMPP / WAMP) |

---

## 🔑 Key Features & System Capabilities

### 🛍️ Customer Experience
* **Product Catalog & Discovery:** Categorized product listings with dynamic category/subcategory filtering and product details.
* **Asynchronous Shopping Cart:** Dynamic cart updates, real-time subtotal calculations, product removals, and coupon code redemptions powered by AJAX without page reloads.
* **Authentication & Account Portal:** Secure user registration, password encryption, order history tracking, wishlist management, and profile termination.
* **Checkout & Order Processing:** Multi-step checkout workflow with order summary generation and payment option routing.

### ⚙️ Centralized Administration Panel
* **Catalog Management:** Full CRUD operations for products, hierarchical categories, product bundles, and manufacturers.
* **Order & Transaction Tracking:** Real-time visibility into customer orders, payment records, and transactional statuses.
* **Promotions & Store Settings:** Dynamic coupon generation, store configuration, terms management, and customer enquiry routing.

---

## 🏗️ Architecture & Module Structure

```text
almuzna/
├── admin_area/          # Centralized store administration & CMS workflows
│   ├── dashboard.php    # Analytics & administrative overview
│   └── ...              # CRUD handlers for products, orders, categories, coupons
├── customer/            # Authenticated user account portal & order history
├── functions/           # Core application helper logic & data formatters
├── includes/            # Global database connection, shared layout components
│   └── db.php           # Database initialization
├── js/                  # Client-side scripts & AJAX logic
├── styles/              # Custom stylesheets and layout overrides
└── index.php            # Primary storefront entry point

```

---

## 🔄 Core Application Flow

```text
[ Customer ]
     │
     ├── 1. Browse / Filter Catalog
     ├── 2. Add / Update Cart (AJAX)
     ├── 3. Authenticate / Account Checkout
     └── 4. Process Order & Generate Invoice
            │
            ▼
   [( MySQL Database )] ◄── Relational Sync ──► [( Admin Dashboard )]
                                                    ├── Product Inventory CRUD
                                                    ├── Order & Payment Auditing
                                                    └── Coupon & Promotion Engine

```

---

## 🚀 Local Installation & Setup

### Prerequisites

* **PHP** (v7.4 or higher)
* **MySQL** (v5.7 or higher)
* **Local Web Server** (XAMPP, WAMP, or MAMP)

### Quickstart

1. **Clone the Repository**
```bash
git clone [https://github.com/Anas-Shaikh546/almuzna.git](https://github.com/Anas-Shaikh546/almuzna.git)

```


2. **Deploy to Server Directory**
Move the project folder to your local web server root (e.g., `C:\xampp\htdocs\almuzna`).
3. **Database Configuration**
* Start Apache and MySQL from your control panel.
* Import the project's SQL schema into MySQL via phpMyAdmin.
* Update database credentials in `includes/db.php`:
```php
$con = mysqli_connect("localhost", "your_username", "your_password", "almuzna_db");

```




4. **Launch Application**
Open your browser and navigate to: `http://localhost/almuzna/`

---

## 🔮 Engineering Roadmap

* [ ] **Security Hardening:** Refactor legacy queries to prepared statements (`PDO` / `MySQLi`) to prevent SQL injection.
* [ ] **Architecture Refactoring:** Transition from procedural routing to a structured **MVC** architecture.
* [ ] **API Layer:** Implement RESTful API endpoints for head-less frontend consumption.
* [ ] **Containerization:** Add `Dockerfile` and `docker-compose.yml` for isolated container deployment.

---

## 👨‍💻 Author

**Anas Shaikh**

*Computer Science Engineering Student | Full-Stack & Backend Enthusiast*

* **GitHub:** [@Anas-Shaikh546](https://www.google.com/search?q=https://github.com/Anas-Shaikh546)
* **LinkedIn:** [Anas Shaikh](https://www.google.com/search?q=www.linkedin.com/in/shaikh-anas-786b98262ca)
* 

```

```
