<?=$cabecera?>
    
    <div class="fw-bold mt-2 fs-3 text">
        Añadir Imagen
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <p class="card-text">

                <form method="post" action="<?=site_url('/actualizarUser')?>" enctype="multipart/form-data">
                    
                    <input type="hidden" value="<?=$user['id']?>" name="id">

                    <div class="form-group">
                        <label for="my-input">Selecciona una imagen:</label>
                        <input id="imagen" value="<?=$user['Imagen']?>" class="form-control" type="file" name="imagen">
                    </div>
                    </br>
                    <button class="btn btn-success" type="submit">Subir</button>
                        <a href="<?=base_url('listUser');?>" class="btn btn-danger">Cancelar</a>
                </form>

            </p>
        </div>
    </div>
<?=$pie?>