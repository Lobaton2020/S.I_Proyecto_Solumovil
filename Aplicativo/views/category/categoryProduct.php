<?php foreach($rows as $row): ?>
             <tr>
             <td><?php echo $row->id_categoria_producto_PK; ?></td>
             <td><?php echo $row->nombre_categoria_producto; ?></td>
             <td><?php echo $row->descripcion_categoria_producto; ?></td>
             <td><?php echo $row->id_estado_FK == 1 ? "Activo" : "Inactivo";?></td>
             <td>
             <a href="?c=category&m=show&type=producto&id=<?php echo $row->id_categoria_producto_PK;?>" class="btn btn-outline-default" tabindex="0" title="Actualizar" data-toggle="tool"><i class="fas fa-edit"></i></a>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');"
                 href="?c=category&m=delete&type=producto&id=<?php echo $row->id_categoria_producto_PK;?>" class="btn btn-outline-default" tabindex="0" 
                 title="Eliminar" data-toggle="tool"><i class="fas fa-trash"></i></a>
               </td>
             </tr>      
        <?php endforeach; ?>