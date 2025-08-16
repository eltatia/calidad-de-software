<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Busqueda de libros</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              <div class="alert bg-warning">
                <div class="row">
                  <div class="col-md-2">
                    <img src="<?php echo base_url(); ?>assets/img/qrlecture.jpg" alt="" width="160">
                  </div>
                  <div class="col-md-10" style=" display: flex; align-items: center; ">
                    <p style="font-size: 20px; text-align:justify;"><i class="icon fas fa-exclamation-triangle"></i><kbd>Instrucciones:</kbd> Hacer click en el espacio "Titulo", utilizar el lector QR y apuntar hacia el codigo QR del libro para obtener informacion sobre el mismo</p>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
              <img src="<?php echo base_url(); ?>assets/img/08.png" alt="" heigth="80" width="180" align="center" style="transform: scaleX(-1);">
          </div>
          <div class="col-md-10">
            <!-- Default box -->
            <br>
            <div class="card">
              <div class="card-body">
                <br>
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg" placeholder="Titulo" name="codigo" id="nombre">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-qrcode"></span>
                        </div>
                    </div>
                </div>
                <table id="tabla" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th class="bg-secondary">Nombre</th>
                    <th class="bg-secondary">Autor</th>
                    <th class="bg-secondary">Categoria</th>
                    <th class="bg-secondary">Nro Estante</th>
                  </tr>
                  </thead>
                  <tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <br>
      </div>
    </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#nombre').on('input', function() 
    {
        var termino = $(this).val();
        if (termino.length >= 3) 
        {
            $.ajax({
                url: "<?php echo base_url(); ?>UbicacionC/UbicacionC/BuscarDatos",
                method: "POST",
                data: { termino: termino },
                dataType: "html",
                success: function(data) {
                    $('#tabla tbody').html(data);
                }
            });
        } 
        else 
        {
            $('#tabla tbody').empty();
        }
    });
});
</script>