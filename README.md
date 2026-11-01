## Requisitos previos a la instalacion

- PHP 8.3 o superior
- Composer.

## Guia de instalación

- Clona el repositorio:

```bash
git clone https://github.com/RubenBof/Prueba_Clicko
```
Accede al directorio:

```bash
cd Prueba_Clicko
```
Instala las dependencias:

```bash
composer install
```

Crea el archivo de configuración local:

```bash
cp .env.example .env
```

Genera la clave de la aplicación:

```bash
php artisan key:generate
```

## Base de datos

Ejecuta las migraciones y el seeder:

```bash
New-Item database\database.sqlite
php artisan db:seed --class=UserSeeder

```

## Ejecutar la API

Inicia el servidor y abre "http://127.0.0.1:8000":

```bash
php artisan serve
```

## Las rutas de la API
### GET - /api/users
Devuelve la colección de usuarios.

### POST - /api/users
Crea un usuario, los datos deben enviarse en un json en el body.
Cabecera:

`Content-Type: application/json`

Body:

```json
{
    "name": "Ana García",
    "email": "ana@example.com",
    "password": "password123"
}
```

### GET - /api/users/{id}
Devuelve los datos del usuario de la 'id' indicada.


### PUT - /api/users/{id}
Permite editar el usuario de la 'id' indicada, enviando los datos en un json en el body.

Body:

```json
{
    "name": "Ana García Actualizada"
}
```


### DELETE - /api/users/{id}
Elimina al usuario de la 'id' indicada.

### GET - /api/users/dominios
Muestra los tres dominios de correo mas usados entre los usuarios.
Ejemplo de respuesta:

```json
[
    {
        "domain": "gmail.com",
        "total": 8
    },
    {
        "domain": "outlook.com",
        "total": 5
    },
    {
        "domain": "hotmail.com",
        "total": 4
    }
]
```

## Seguridad y configuración

- No publiques el archivo `.env`.
- No incluyas contraseñas reales ni credenciales en el repositorio.
- El archivo `.env.example` debe contener únicamente valores de ejemplo.
- Las contraseñas de usuario deben almacenarse mediante el mecanismo de hash de Laravel.

## Licencia

Proyecto desarrollado como prueba técnica para Clicko.