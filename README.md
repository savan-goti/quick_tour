# 🎯 Symfony Quick Tour

A beginner-friendly **Symfony 7.4** project built as a quick introduction to the Symfony PHP framework. This project demonstrates the core concepts of Symfony — routing, controllers, Twig templating, and the request/response lifecycle.

---

## 📋 Table of Contents

- [About](#about)
- [Tech Stack](#tech-stack)
- [Requirements](#requirements)
- [Installation](#installation)
- [Running the Application](#running-the-application)
- [Project Structure](#project-structure)
- [Available Routes](#available-routes)
- [Configuration](#configuration)
- [Learn More](#learn-more)

---

## About

This project is a **quick tour** of Symfony — covering the essentials:

- Creating **controllers** that handle HTTP requests
- Defining **routes** using PHP attributes
- Rendering **Twig templates** for dynamic HTML responses
- Returning plain **Response** objects directly from controllers

It serves as a practical starting point for developers new to Symfony.

---

## Tech Stack

| Technology | Version |
|---|---|
| PHP | >= 8.2 |
| Symfony Framework | 7.4.* |
| Twig (Templating) | ^3.0 |
| Symfony Console | 7.4.* |
| Symfony Dotenv | 7.4.* |
| Symfony Yaml | 7.4.* |

---

## Requirements

Before getting started, make sure you have the following installed:

- **PHP** >= 8.2 (with `ext-ctype` and `ext-iconv` extensions)
- **Composer** (dependency manager for PHP)
- **WAMP / XAMPP / Laragon** or any local PHP server (optional)

---

## Installation

### 1. Clone the Repository

```bash
git clone <your-repo-url> quick_tour
cd quick_tour
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Configure Environment

Copy the example environment file and update with your values:

```bash
cp .env .env.local
```

Edit `.env.local` and set your `APP_SECRET`:

```env
APP_ENV=dev
APP_SECRET=your_secret_key_here
```

---

## Running the Application

### Option A: PHP Built-in Server

```bash
php -S localhost:8000 -t public/
```

Then open your browser and visit: [http://localhost:8000](http://localhost:8000)

### Option B: Symfony CLI (if installed)

```bash
symfony server:start
```

### Option C: Via WAMP/XAMPP

Place the project inside your web server's `www` / `htdocs` directory and access it via your local server URL.

---

## Project Structure

```
quick_tour/
├── bin/                    # CLI executables (e.g., console)
├── config/                 # App configuration files
├── public/                 # Web root (index.php entry point)
├── src/
│   ├── Controller/
│   │   └── DefaultController.php   # Main application controller
│   └── Kernel.php          # Application kernel
├── templates/
│   ├── base.html.twig      # Base layout template
│   └── default/
│       └── index.html.twig # Default page template
├── var/                    # Cache and logs (auto-generated)
├── vendor/                 # Composer dependencies
├── .env                    # Environment variables
├── composer.json           # Project dependencies
└── README.md               # Project documentation
```

---

## Available Routes

| Method | URL | Description |
|--------|-----|-------------|
| `GET` | `/hello/{name}` | Greets the user by name using a Twig template |
| `GET` | `/simplicity` | Returns a plain text response directly |

### Examples

```
http://localhost:8000/hello/World
→ Renders: "Hello World" via Twig template

http://localhost:8000/simplicity
→ Returns: "Simple! Easy! Great!"
```

---

## Configuration

Environment variables are managed via `.env` files:

| Variable | Default | Description |
|----------|---------|-------------|
| `APP_ENV` | `dev` | Application environment (`dev`, `prod`, `test`) |
| `APP_SECRET` | *(empty)* | A secret key used for security tokens |
| `APP_SHARE_DIR` | `var/share` | Shared storage directory |
| `DEFAULT_URI` | `http://localhost` | Default URI for non-HTTP contexts |

> **Note:** Never commit secrets into `.env`. Use `.env.local` for sensitive values — it is excluded from version control via `.gitignore`.

---

## Learn More

- 📖 [Symfony Documentation](https://symfony.com/doc/current/index.html)
- 🎓 [Symfony Quick Tour](https://symfony.com/doc/current/quick_tour/the_big_picture.html)
- 🌿 [Twig Documentation](https://twig.symfony.com/doc/)
- 📦 [Composer Documentation](https://getcomposer.org/doc/)

---

## License

This project is for **learning purposes** and is licensed as proprietary. Feel free to use it as a reference for your own Symfony projects.

---

> Built with ❤️ using [Symfony 7.4](https://symfony.com/)
