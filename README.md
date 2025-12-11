# 🚀 Práctica de Desarrollo Web Full Stack: Sistema de Gestión de Artículos con Laravel

**Autor:** Álvaro Lozano Artero
**Asignatura:** Desarrollo Web Full Stack

---

## 📚 Descripción General del Proyecto

Este proyecto de práctica se enfoca en el desarrollo de una aplicación web completa para la **Gestión de Artículos** utilizando el *framework* **Laravel 12**. Su principal objetivo es consolidar los conocimientos fundamentales del ecosistema Laravel, incluyendo la implementación de un **CRUD** (Crear, Leer, Actualizar, Eliminar) robusto para la entidad `Article`.

La aplicación se ha desarrollado poniendo especial énfasis en:
* **Routing y Controladores:** Definición de rutas y la lógica de negocio asociada.
* **Modelos y ORM Eloquent:** Interacción con la base de datos de manera eficiente.
* **Migraciones y Seeders:** Gestión de la estructura y población de la base de datos.
* **Vistas Blade:** Implementación de la capa de presentación.
* **Autenticación y Middleware:** Asegurando el acceso y la protección de rutas.

---

## 🔑 Módulos y Funcionalidades Implementadas

### 1. Autenticación y Seguridad

La seguridad y la gestión de usuarios se implementan a través del *starter kit* **Laravel Breeze**, garantizando un flujo de autenticación estándar y seguro.

* **Flujo de Usuario:** Registro (`/register`) e Inicio de Sesión (`/login`).
* **Rutas Protegidas:** El acceso al panel principal (`/dashboard`) requiere que el usuario esté autenticado y verificado.
* **Gestión de Perfil:** El módulo `/profile` permite a los usuarios editar su información personal, actualizar su contraseña y eliminar su cuenta.

### 2. Gestión de Artículos (CRUD)

El módulo principal se centra en la administración del recurso `Article`, orquestado por el **`ArticleController.php`** y el modelo **`Article.php`**.

| Acción | Verbo HTTP | URI | Requisito |
| :--- | :--- | :--- | :--- |
| **Listado** | `GET` | `/articles` | Público |
| **Detalle** | `GET` | `/articles/{id}` | Público |
| **Creación (Formulario)** | `GET` | `/articles/create` | Autenticación |
| **Alta** | `POST` | `/articles` | Autenticación |
| **Edición (Formulario)** | `GET` | `/articles/{id}/edit` | Autenticación |
| **Actualización** | `PUT`/`PATCH` | `/articles/{id}` | Autenticación |
| **Eliminación** | `DELETE` | `/articles/{id}` | Autenticación |

**Estructura del Artículo:**
Cada artículo almacena los siguientes campos: `title` (título), `body` (cuerpo/contenido), `date` (fecha) y `user_id` (clave foránea del autor).

---

## 🔐 Credenciales de Acceso Rápido

Para facilitar las pruebas de las rutas protegidas (`/login`, `/dashboard`, etc.), se ha configurado un usuario administrador por defecto mediante *seeders*.

| Tipo de Acceso | Email de Usuario | Contraseña |
| :--- | :--- | :--- |
| **Administrador/Prueba** | `admin@admin.com` | `password123` |

---

## 🛠️ Estructura del Código y Componentes Clave

Los siguientes archivos y directorios son centrales para la funcionalidad del proyecto:

| Componente | Fichero/Directorio | Propósito |
| :--- | :--- | :--- |
| **Rutas Web** | `routes/web.php` | Definición de las rutas del *front-end* (`/articles`, `/dashboard`, etc.). |
| **Modelo ORM** | `app/Models/Article.php` | Modelo Eloquent que mapea la tabla `articles`. |
| **Controlador** | `app/Http/Controllers/ArticleController.php` | Lógica de negocio para las operaciones CRUD de artículos. |
| **Migración BD** | `database/migrations/2025_11_10_131544_create_article_table.php` | Definición de la estructura de la tabla `articles`. |
| **Población BD** | `database/seeders/UsersSeeder.php` / `ArticlesSeeder.php` | Generación de **100 usuarios** y **100 artículos** de prueba utilizando Faker. |
| **Interfaz Usuario** | `resources/views` | Vistas Blade para la presentación de datos (`welcome`, `dashboard`, vistas de artículos). |
| **Activos Front-end** | `resources/css` / `resources/js` | Archivos de estilos y *scripts* gestionados y compilados con **Vite**. |

---

## 🌐 Mapeo de Rutas Principales

| Verbo HTTP | URI | Descripción |
| :--- | :--- | :--- |
| `GET` | `/` | Página de bienvenida inicial. |
| `GET` | `/hola` | Ruta de prueba con respuesta de texto ("Hola, mundo"). |
| `POST` | `/register` | Vista para el registro de nuevos usuarios. |
| `GET` | `/login` | Vista para el inicio de sesión de usuarios. |
| `GET` | `/dashboard` | Panel principal (requiere autenticación). |
| `GET` | `/profile` | Gestión de la cuenta de usuario. |
| **CRUD** | `/articles...` | Conjunto de rutas para la gestión de artículos (ver tabla superior). |****