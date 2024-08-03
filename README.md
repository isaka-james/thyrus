<div align="center">
    <h1 align="center"> Thyrus Framework </h1>

<a href="https://github.com/isaka-james/thyrus">
    <img title="Version" src="https://img.shields.io/badge/Version-0.1.0-yellow?style=for-the-badge&logo=">
</a>

<a href="https://github.com/isaka-james/thyrus/blob/main/LICENSE">
    <img title="License" src="https://img.shields.io/badge/License-MIT-brightgreen?style=for-the-badge&logo=mit">
</a>

<img title="Report" src="https://img.shields.io/badge/Copyright-2024-red?style=for-the-badge&logo=github">

<a href="https://github.com/isaka-james/thrus">
    <img title="Author" src="https://img.shields.io/badge/GITHUB-THYRUS-blue?style=for-the-badge&logo=github">
</a>
</div>

## Overview

Thyrus is a lightweight PHP framework designed for ease of use and simplicity in deployment. It supports MVC (Model-View-Controller) architecture and is optimized for environments where you may only have limited directory access, such as free hosting platforms.

**Predecessor:** *MasterPHP (which lacked MVC architecture)*

## Features

- **Easy Hosting:** Designed to run on any PHP server without the need for complex configurations.
- **MVC Architecture:** Supports a clear separation of concerns with Model, View, and Controller.
- **Assets Management:** Includes an `assets` directory for managing static assets like CSS and images.
- **Zero Configuration:** Suitable for environments where only a partial directory is accessible.

## Directory Structure

The framework’s file structure is as follows:

```bash
├── assets
│   └── astra.css
├── astra
│   └── helpers
│       └── helpers.php
├── composer.json
├── composer.lock
├── config
│   └── database.php
├── index.php
├── routes
│   └── web.php
├── src
│   ├── Config
│   │   └── CORS.php
│   ├── Controllers
│   │   ├── Controller.php
│   │   └── TestController.php
│   ├── Database
│   │   └── DatabaseManager.php
│   ├── Models
│   │   └── BaseModel.php
│   └── Views
│       └── index.twig
└── vendor
    ├── autoload.php
    ├── composer
    │   ├── ClassLoader.php
    ......
```

## Installation

1. **Download or Clone:**

   ```
   git clone https://github.com/isaka-james/thyrus.git
   ```

2. **Navigate to the Project Directory:**

   ```
   cd thyrus
   ```

3. **Install Dependencies:**

   Ensure you have [Composer](https://getcomposer.org/) installed. Run:

   ```
   composer install
   ```

## Configuration

1. **Database Configuration:**

   Edit the `config/database.php` file to set up your database connection.

2. **Routing:**

   Define your routes in the `routes/web.php` file.

## Usage

1. **Create a Controller:**

   Extend the base controller class located at `src/Controllers/Controller.php`.

   ```php
   namespace App\Controllers;

   use Thyrus\Controller;

   class MyController extends Controller
   {
       public function index()
       {
           return $this->render('index.twig', ['data' => 'Hello World']);
       }
   }
   ```

2. **Create a Model:**

   Extend the base model class located at `src/Models/BaseModel.php`.

   ```php
   namespace App\Models;

   use App\Model;

   class MyModel extends BaseModel
   {
       // Model methods
   }
   ```

3. **Create a View:**

   Place your Twig templates in the `src/Views` directory.

   ```twig
   {# src/Views/index.twig #}
   <html>
   <body>
       <h1>{{ data }}</h1>
   </body>
   </html>
   ```

## License

Thyrus is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.
