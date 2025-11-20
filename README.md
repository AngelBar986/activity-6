# Activity 6 – CRUD de Productos con Laravel 10

Este proyecto implementa un CRUD completo de productos usando Laravel 10, siguiendo las instrucciones de la Actividad 6.

---

## 🧩 Estructura del proyecto

El proyecto contiene:

- Migración: create_products_table
- Modelo: Product
- Controlador tipo resource: ProductController
- Vistas Blade:
  - product-view.blade.php
  - product-edit.blade.php
  - product-create.blade.php

---

## 🗂️ Archivos generados

- database/migrations/xxxx_xx_xx_create_products_table.php
- app/Models/Product.php
- app/Http/Controllers/ProductController.php
- resources/views/products/product-view.blade.php
- resources/views/products/product-edit.blade.php
- resources/views/products/product-create.blade.php

---

## ⚙️ Cómo ejecutar el proyecto

### 1. Clonar el repositorio:

git clone https://github.com/AngelBar986/activity-6.git

---

### 2. Entrar a la carpeta del proyecto:

cd activity-6

---

### 3. Instalar dependencias:

composer install

---

### 4. Crear archivo .env:

cp .env.example .env

---

### 5. Generar la key de la aplicación:

php artisan key:generate

---

### 6. Crear la base de datos (si usas MySQL)

Nombre sugerido:

activity6

---

### 7. Ejecutar migraciones:

php artisan migrate

---

### 8. Iniciar servidor Laravel:

php artisan serve

La aplicación estará disponible en:

http://127.0.0.1:8000

---

## ✔️ Notas importantes

- Las vistas están dentro de resources/views/products
- El controlador maneja todo el CRUD
- La migración crea la tabla products
- El proyecto está listo para pruebas locales con XAMPP

