## Instalación
1. Crear base de datos `eqson`.
2. Cargar el _script_ del módelo físico ubicado en [app/src/eqson.sql](./app/src/eqson.sql).

## Configuración
1. Crear usuario administrador:
`INSERT Usuario VALUES('admin', 'admin', 'Urb. Adepa J-7', 1)`.

## Ejecución
1. Inicializar un servidor web: `php -S localhost:3000`.
2. Dirigirse a: `http://localhost:3000/index.php`.
