    <?=$cabecera?>
    <a class="btn btn-success mt-3" href="<?=base_url('crearMovie')?>">Agregar nueva pelicula</a>
    <br>
    <br>
        <table class="table table-light table-hover">
            <thead class="table-dark text-center">
                <tr>
                    <th>#</th>
                    <th>Titulo</th>
                    <th>Sinopsis</th>
                    <th>Año</th>
                    <th>Cover</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($movies as $movie): ?>
                <tr>
                    <td><?=$movie['id'];?></td>
                    <td class="text-center"><?=$movie['title'];?></td>
                    <td><?=$movie['synopsis'];?></td>
                    <td><?=$movie['year'];?></td>
                    <td><?=$movie['cover'];?></td>
                    <td class="text-center">
                    <a href="<?=base_url('editar/'.$movie['id']);?>" class="btn btn-info mb-2" type="button"><i class="fa-solid fa-pen-to-square" style="color: #2f3641;"></i></a>
                        <a href="<?=base_url('borrar/'.$movie['id']);?>" class="btn btn-danger" type="button"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            
            </tbody>
        </table>
        <?=$pie?>