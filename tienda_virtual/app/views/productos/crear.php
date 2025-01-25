<h1>Crear Producto</h1>
<form method="POST">
    <label>Nombre: <input type="text" name="nombre" required></label><br>
    <label>Descripción: <textarea name="descripcion" required></textarea></label><br>
    <label>Precio: <input type="number" step="0.01" name="precio" required></label><br>
    <label>Stock: <input type="number" name="stock" required></label><br>
    <button type="submit">Guardar</button>
</form>
