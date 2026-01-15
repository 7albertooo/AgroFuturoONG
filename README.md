# AgroFuturoONG

## 📝 Descripción del Proyecto

Esta es una aplicación web para gestionar proyectos de **ONG de desarrollo rural**, centrada en:

- **Agricultura sostenible**: Fomento de técnicas de cultivo respetuosas con el medio ambiente.
- **Microcréditos**: Apoyo financiero a pequeños agricultores y emprendedores rurales.

La aplicación permite que los beneficiarios:

1. **Envíen solicitudes de ayuda**: Formulario intuitivo para peticiones de financiación.
2. **Accedan a formación**: Cursos sobre agricultura y gestión financiera.
3. **Realicen exámenes**: Validación de conocimientos para el acceso a fondos.
4. **Seguimiento**: Control del estado de las subvenciones o microcréditos.

Incluye un **panel de administración**, perfiles de usuario y herramientas de seguimiento.

---

## 🚀 Funcionalidades Principales

- **Gestión de Solicitudes**: Formulario completo y seguimiento de estados.
- **Zona de Formación**: Módulos de aprendizaje y mini-exámenes interactivos.
- **Perfiles Personalizados**: Historial de actividades y solicitudes del usuario.
- **Panel Administrativo**: Gestión centralizada de usuarios, cursos y desembolsos.

---

## 🛠️ Tecnologías Utilizadas

- **Backend**: PHP 8.x
- **Base de Datos**: MySQL
- **Frontend**: HTML5
- **Estilos**: Tailwind CSS v4 (Engine de alto rendimiento)
- **Servidor Local**: XAMPP (Apache)

---

## 📂 Estructura del Proyecto

```text
AgroFuturoONG/
├── app/                # Lógica de la aplicación (PHP)
├── public/             # Archivos accesibles públicamente
│   ├── style/          # CSS generado (style.css)
│   └── assets/         # Imágenes y recursos estáticos
├── src/                # Archivos fuente del frontend
│   └── input.css       # Configuración de Tailwind CSS v4
├── index.php           # Punto de entrada de la aplicación
├── package.json        # Dependencias y scripts de Node.js
└── README.md           # Documentación
```

---

## ⚙️ Instalación y Configuración

Siga estos pasos para configurar el proyecto en su entorno local:

### 1. Requisitos Previos

- Instalar [XAMPP](https://www.apachefriends.org/index.html) con PHP 8.x.
- Instalar [Node.js](https://nodejs.org/) (versión 20 o superior recomendada para Tailwind v4).

### 2. Clonar el Repositorio

Acceda a la carpeta `htdocs` de su instalación de XAMPP, abra una terminal y ejecute:

```bash
git clone https://github.com/7albertooo/AgroFuturoONG.git
cd AgroFuturoONG
```

### 3. Instalación de Dependencias

Este proyecto utiliza **Tailwind CSS v4** mediante npm. Para que el CSS funcione, es necesario instalar las herramientas de desarrollo:

```bash
npm install
```

### 4. Configurar la Base de Datos

1. Abre **phpMyAdmin** (`http://localhost/phpmyadmin`).
2. Crea una nueva base de datos llamada `agrofuturo`.
3. Importa el archivo SQL (si está disponible) o configura las tablas necesarias.

---

## 🎨 Configuración de Tailwind CSS v4

En esta versión (v4), la configuración se maneja directamente desde el archivo CSS sin necesidad de un `tailwind.config.js` por defecto.

1.  **Archivo Fuente**: El código base está en `src/input.css`, donde se importa Tailwind:
    ```css
    @import "tailwindcss";
    ```
2.  **Generación de Estilos**: Al ejecutar el compilador, se genera el archivo `public/style/style.css`, que es el que se enlaza en el proyecto:
    ```html
    <link rel="stylesheet" href="./public/style/style.css" />
    ```

### Comandos de Compilación

Para que las clases de Tailwind que escribas en tus archivos `.php` o `.html` se traduzcan en estilos reales, usa estos comandos:

- **Compilar para Producción**: Genera el CSS optimizado y minificado.
  ```bash
  npm run build
  ```
- **Modo Desarrollo (Recomendado)**: Escucha cambios en tiempo real y actualiza el CSS automáticamente.
  ```bash
  npm run dev
  ```

> [!TIP]
> Mantén la terminal con `npm run dev` abierta mientras trabajas para que los estilos se actualicen al instante al guardar tus archivos.

---
