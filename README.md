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
- **Estilos**: Tailwind CSS (via npm)
- **Servidor Local**: XAMPP (Apache)

---

## 📂 Estructura del Proyecto

```text
AgroFuturoONG/
├── app/                          # Lógica de la aplicación (PHP)
│   ├── config/                   # Configuración y conexión a la base de datos
│   │   └── conexion/             # Conexión MySQL y variables de entorno
│   │       └── conexion.php
│   ├── controladores/            # Controladores del sistema
│   │   ├── adminC.php
│   │   ├── loginControlador.php
│   │   ├── logout.php
│   │   └── registroControlador.php
│   └── funciones/                # Funciones de negocio y helpers
│       ├── adminF.php
│       ├── checkout.php
│       ├── datosAdmin.php
│       ├── datosUser.php
│       ├── guardarPago.php
│       ├── loginF.php
│       ├── registroF.php
│       └── validaciones.php
├── public/                       # Archivos accesibles desde el navegador
│   ├── assets/                   # Recursos estáticos (imágenes, iconos, etc.)
│   └── vistas/                   # Vistas PHP públicas
│       ├── admin.php
│       ├── ayuda.php
│       ├── contacto.php
│       ├── footer.php
│       ├── header.php
│       ├── index.php
│       ├── login.php
│       ├── pago.php
│       ├── registro.php
│       └── user.php
├── vendor/                       # Dependencias instaladas por Composer
│   └── ...
├── .env                          # Configuración de entorno (variables privadas)
├── .gitignore                    # Archivos y carpetas ignorados por Git
├── composer.json                 # Dependencias PHP del proyecto
├── composer.lock                 # Versión exacta de dependencias
└── README.md                     # Documentación del proyecto
```

---

## ⚙️ Instalación y Configuración

### 1. Clonar el Repositorio

Accede a la carpeta `htdocs` de XAMPP, abre una terminal y ejecuta:

```bash
git clone https://github.com/7albertooo/AgroFuturoONG.git
```

### 2. Subir y Actualizar Cambios


Para subir en github ejecuta:

```bash
git add .
git commit -m "Mensaje"
git push -u origin tu-rama
```

Cada vez que entres en el proyecto en VSCODE ejecuta:

```bash
git checkout feature
git pull origin main
```
Y arranca el servidor de XAMPP.


### 3. Configurar la Base de Datos

1. Abre **phpMyAdmin** (`http://localhost/phpmyadmin`).
2. Crea una nueva base de datos llamada `agrofuturo`.
3. Importa el archivo SQL (si está disponible) o configura las tablas necesarias.



