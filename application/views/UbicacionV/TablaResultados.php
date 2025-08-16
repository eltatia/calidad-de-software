
    <?php if (!empty($resultados)): ?>
    <?php foreach ($resultados as $key): ?>
    <tr>
        <td><?php echo $key->Nombre; ?></td>
        <td><?php echo $key->Autor; ?></td>
        <td><?php echo $key->Categoria; ?></td>
        <td><?php echo $key->Estante; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
        <td colspan="4">No se encontraron resultados.</td>
    </tr>
    <?php endif; ?>
