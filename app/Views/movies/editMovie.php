<?=$cabecera?>
    
    <div class="fw-bold mt-4 pt-2 fs-3 text">
        Formulario de Edición
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Modificar pelicula</del></h5>
            <p class="card-text">

                <form method="post" action="<?=site_url('/actualizarMovie')?>" enctype="multipart/form-data">
                    
                    <input type="hidden" value="<?=$movie['id']?>" name="id">

                    <div class="form-group">
                        <label for="my-input">Titulo:</label>
                        <input id="title" value="<?=$movie['title']?>" class="form-control" type="text" name="title">
                    </div>
                
                    <div class="form-group">
                        <label for="my-input">Sinopsis:</label>
                        <input id="synopsis" value="<?=$movie['synopsis']?>" class="form-control" type="text" name="synopsis">
                    </div>
                
                    <div class="form-group">
                        <label for="my-input">Año:</label>
                        <input id="year" value="<?=$movie['year']?>" class="form-control" type="text" name="year" placeholder="1996">
                    </div>
                
                    <div class="form-group">
                        <label for="my-input">Cover:</label>
                        <input type="text" value="<?=$movie['cover']?>" class="form-control" id="cover" name="cover">
                    </div>

                    </br>
                    <button class="btn btn-success" type="submit"><i class="fa-solid fa-arrows-rotate" style="color: #ffffff;"></i></button>
                        <a href="<?=base_url('listMovie');?>" class="btn btn-danger"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></a>
                </form>

            </p>
        </div>
    </div>
    <div class="my-4 py-4"></div>
<?=$pie?>