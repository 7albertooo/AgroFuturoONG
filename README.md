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
│   ├── config/                   # Configuración de la aplicación
│   │   └── constantes.php        # Constantes globales del proyecto
│   ├── conexion/                 # Gestión de base de datos
│   │   └── ejConexion.php        # Ejemplo de conexión a la BD
│   ├── controladores/            # Controladores de la aplicación
│   │   └── ejemploControlador.php # Ejemplo de controlador
│   └── funciones/                # Funciones auxiliares y utilidades
│       └── ejemploFuncion.php    # Ejemplo de función auxiliar
├── public/                       # Archivos accesibles públicamente
│   ├── assets/                   # Imágenes y recursos estáticos
│   │   ├── style/                # Archivos CSS (Tailwind)
│   │   │   ├── styles.css        # CSS compilado de Tailwind
│   │   │   └── tailwind.css      # Importación de Tailwind
│   │   └── img.png               # Recursos de imágenes
│   └── vistas/                   # Vistas públicas
│       │── header.php        # Encabezado de la aplicación
│       └── index.php             # Punto de entrada de la aplicación
├── node_modules/                 # Dependencias de npm
├── .env                          # Archivo de configuración de entorno
├── .gitignore                    # Archivo de configuración de Git
├── package.json                  # Configuración de npm
├── package-lock.json             # Bloqueo de versiones de dependencias
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



