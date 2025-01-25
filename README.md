# tienda_virtual

sistema de Gestión de Productos en una Tienda Virtual

## Características
Gestión de Productos:

Crear, Leer, Actualizar y Eliminar productos en la base de datos.

Patrón MVC:

Separar las responsabilidades en tres componentes principales:

Modelo: Interactúa con la base de datos (Producto.php).

Vista: Presenta los datos al usuario (listar.php, crear.php, editar.php, eliminar.php).

Controlador: Maneja la lógica de la aplicación (ProductoController.php).

## Requisitos
-XAMPP (Modulos Apache y MySql Habilitados)

## Instalacion
1.CREATE DATABASE tienda_virtual;

USE tienda_virtual;

CREATE TABLE productos (
    id_producto INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT NOT NULL,
    precio DECIMAL(8, 2) NOT NULL,
    stock INT NOT NULL
);

2.Coloca la carpeta "tienda_virtual" dentro del directorio htdocs en la ruta de xampp
3.Ahora puedes usar el programa accediendo a http://localhost/tienda_virtual/public/index.php?action=crear
