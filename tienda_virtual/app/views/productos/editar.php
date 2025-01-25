<h1>Editar Producto</h1>
<form method="POST">
    <label>Nombre: <input type="text" name="nombre" value="<?php echo $producto['nombre']; ?>" required></label><br>
    <label>Descripción: <textarea name="descripcion" required><?php echo $producto['descripcion']; ?></textarea></label><br>
    <label>Precio: <input type="number" step="0.01" name="precio" value="<?php echo $producto['precio']; ?>" required></label><br>
    <label>Stock: <input type="number" name="stock" value="<?php echo $producto['stock']; ?>" required></label><br>
    <button type="submit">Actualizar</button>
</form>
