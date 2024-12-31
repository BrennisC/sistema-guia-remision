# Sistema de Gestión de Guías de Remisión

Este sistema está diseñado para facilitar la emisión y gestión de guías de remisión en negocios. A continuación, se detallan los requisitos y pasos para instalar y ejecutar el proyecto.

# Requisitos previos

Antes de iniciar, asegúrate de tener instalado lo siguiente en tu sistema:

```bash
PHP =  8.3.9
Recomendado instalarlo con XAMPP o manualmente según tu sistema operativo.
Composer (Gestor de dependencias de PHP)
Descárgalo desde https://getcomposer.org/.
Node.js y npm (Para compilar recursos frontend)
Descarga e instala desde https://nodejs.org/.
MySQL (O cualquier base de datos compatible con Laravel)
Asegúrate de tener una base de datos creada llamada dbsistema.
Git (Opcional, para clonar el repositorio)
Pasos para ejecutar el proyecto
```

# Clonar el repositorio (opcional): Si estás utilizando Git:

```bash
git clone https://github.com/tu-usuario/sistema-guia-remision.git
cd sistema-guia-remision
```

# Instalar dependencias:

Ejecuta el siguiente comando en la raíz del proyecto para instalar las dependencias de PHP:

```bash
composer install
```

# Configurar el entorno:

Duplica el archivo .env.example y renómalo como .env.
Configura las variables de entorno de tu base de datos en el archivo .env:
env

```bash
DB_DATABASE=dbsistema
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

# Generar la clave de la aplicación:

```bash
php artisan key:generate
```

# Configurar Breeze para autenticación:

Breeze ya debería estar instalado. Si no lo está, ejecuta:

```bash
composer require laravel/breeze --dev
php artisan breeze:install blade
npm install && npm run dev
```

# Migrar la base de datos: Ejecuta las migraciones para crear las tablas necesarias:

```bash
php artisan migrate
```

# Ejecutar el servidor de desarrollo:

Levanta el servidor local de Laravel:

```bash
php artisan serve
El servidor estará disponible en http://localhost:8000.
```
# Ejecutar el servidor de desarrollo:
``Intenta actualizar los pasos que siguen para el proyecto