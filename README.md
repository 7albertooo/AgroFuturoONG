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
- **Estilos**: Bootstrap 5.3 (vía CDN)
- **Servidor Local**: XAMPP (Apache)

---

## 📂 Estructura del Proyecto

```text
AgroFuturoONG/
├── app/                    # Lógica de la aplicación (PHP)
│   ├── conexion/           # Gestión de base de datos
│   ├── controladores/      # Controladores de la aplicación
│   ├── funciones/          # Funciones auxiliares y utilidades
│   └── vistas/             # Vistas (HTML/PHP) y layouts
├── public/                 # Archivos accesibles públicamente
│   ├── assets/             # Imágenes y recursos estáticos
│   └── index.php           # Punto de entrada de la aplicación
└── README.md               # Documentación
└── .gitignore              # Archivo de configuración de Git
└── .env                    # Archivo de configuración de entorno
```

---

## ⚙️ Instalación y Configuración

### 1. Clonar el Repositorio

Accede a la carpeta `htdocs` de XAMPP, abre una terminal y ejecuta:

```bash
git clone https://github.com/7albertooo/AgroFuturoONG.git
```

### 2. Configurar la Base de Datos

1. Abre **phpMyAdmin** (`http://localhost/phpmyadmin`).
2. Crea una nueva base de datos llamada `agrofuturo`.
3. Importa el archivo SQL (si está disponible) o configura las tablas necesarias.


