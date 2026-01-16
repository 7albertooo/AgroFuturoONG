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

### 2. Instalar Dependencias y Generar CSS

Para que los estilos de Tailwind funcionen, debes instalar las dependencias de Node.js y compilar el archivo CSS:

```bash
npm install
```

Miewtras desarrollas, ejecuta el siguiente comando para que Tailwind guarde los cambios automáticamente y puedas verlos en el navegador:

```bash
npm run css
```

Para subir en github ejecuta:

```bash
git add .
git commit -m "Mensaje"
git push -u origin tu-rama
```

Cada vez que entres en el proyecto en VSCODE ejecuta:

```bash
git pull
npm run css
```

### 3. Configurar la Base de Datos

1. Abre **phpMyAdmin** (`http://localhost/phpmyadmin`).
2. Crea una nueva base de datos llamada `agrofuturo`.
3. Importa el archivo SQL (si está disponible) o configura las tablas necesarias.



# 🔥 Flujo Para Trabajar en Proyecto

## 1️⃣ Actualizar `main`

```bash
git checkout main
git pull
```

## 2️⃣ Crear rama nueva

```bash
git checkout -b tu-rama
```

## 3️⃣ Programar y guardar

```bash
git add .
git commit -m "comentario"
git push -u origin tu-rama
```

## 4️⃣ Pull Request en GitHub

👉 Unir `tu-rama` → `main`

---

## ⚠️ Conflictos (lo que da miedo 😅)

### ¿Cuándo aparecen?

Cuando tú y tu compañero modificáis **la misma línea del mismo archivo**.

**Ejemplo:**
Los dos tocáis `header.php`.

### Cómo evitarlos

* ✅ Cada uno en su rama
* ✅ No tocar los mismos archivos a la vez
* ✅ Hacer `git pull` antes de empezar

### 🧯 Si hay conflicto (resumen rápido)

Git te mostrará algo así:

```text
tu código
código de tu compañero
```

Pasos para resolverlo:

1. ✔️ Decidir qué se queda
2. ✔️ Guardar
3. ✔️ `git add`
4. ✔️ `git commit`

