<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Inventariado</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              <div class="alert bg-danger">
                <div class="row">
                  <div class="col-md-12" style=" display: flex; align-items: center; ">
                    <p style="font-size: 20px; text-align:justify; font-family:'Open Sans', sans-serif;"><i class="icon fas fa-exclamation-triangle"></i><kbd>Advertencia:</kbd> Filtre con ayuda de la barra de busqueda, el codigo del libro a inventariar, hasta que solo obtenga un registro, no coloque informacion si el sistema muestra mas de una fila</p>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <button id="reset" class="btn btn-primary">Reestablecer Inventariado</button>
                    </h3>
                </div>
                <div class="card-body">
                 <table id="tabla" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th class="bg-secondary" style="font-size: 14px;">Codigo</th>
                    <th class="bg-secondary" style="font-size: 14px;">Titulo</th>
                    <th class="bg-secondary" style="font-size: 14px;">Autor</th>
                    <th class="bg-secondary" style="font-size: 14px;">Categoria</th>
                    <th class="bg-secondary" style="font-size: 14px; width:4px;">Nro E.</th>
                    <th class="bg-secondary" style="font-size: 14px;">Comprobar stock</th>
                    <th class="bg-secondary" style="font-size: 14px;">Check</th>
                    <th class="bg-secondary" style="font-size: 14px;">Estado</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      if(!empty($libros)):?>
                        <?php 
                          foreach ($libros as $key):
                        ?>
                        <tr>
                          <td style="font-size: 14px;"><?php echo $key->Codigo; ?></td>
                          <td style="font-size: 14px;"><?php echo $key->Nombre; ?></td>
                          <td style="font-size: 14px;"><?php echo $key->Autor; ?></td>
                          <td style="font-size: 14px;"><?php echo $key->Categoria; ?></td>
                          <td style="font-size: 14px;"><?php echo $key->Estante; ?></td>
                          <td>
                            <div class="input-group">
                                <input type="hidden" value="<?php echo $key->Ejemplares; ?>" id="cantidad_inventariada">
                                <input type="number" class="form control" placeholder="<?php echo "Cantidad Registrada: ".$key->Ejemplares; ?>" name="cantidad">
                            </div>
                          </td>
                          <td align="center">
                            <div class="btn-group" role="group">
                              <a class="btn btn-primary confirm" id="confirm" value="<?php echo $key->Codigo;?>" style="color: #fff;"><span class="fa fa-edit"></span></a>    
                            </div>                        
                          </td>
                          <td style="font-size: 14px;" align="center">
                            <?php 
                                if($key->EstadoInv == "Incompleto") 
                                {
                                    echo "<button class='btn btn-warning' href='#'>".$key->EstadoInv.": ".$key->Diferencia."</button>";
                                }
                                if($key->EstadoInv == "No Registrado") 
                                {
                                    echo "<button class='btn btn-danger' href='#'>".$key->EstadoInv."</button>";
                                }
                                if($key->EstadoInv == "Registrado") 
                                {
                                    echo "<button class='btn btn-success' href='#'>".$key->EstadoInv."</button>";
                                }
                            ?>
                          </td>
                        </tr>
                        <?php endforeach;?>
                      <?php endif; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->    
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- jquery-validation -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- Sweet alert 2 -->
<script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<!-- Qr code  -->
<script src="<?php echo base_url(); ?>assets/plugins/qrcode/qrcode.min.js"></script>
<script>
  $(function () {
    $('#tabla').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      
      language: 
      {
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "processing": "Procesando...",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
      },
      "buttons": [
      {
        extend: 'excelHtml5',
        text: 'Exportar a Excel',
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 7],
        },
        className: 'btn btn-success'
      }],
    }).buttons().container().appendTo('#tabla_wrapper .col-md-6:eq(0)');
  });
</script>
<script>
    $(document).on("click","#confirm",function(e){
        e.preventDefault();
        var codigo = $(this).attr("value");
        var cantidad = $('[name="cantidad"]').val();
        var inventario = $("#cantidad_inventariada").val();
        //alert(codigo+" "+cantidad+" "+inventario);
        $.ajax({
            url: '<?php echo base_url(); ?>/InventarioC/InventarioC/Confirmacion',
            method: 'POST',
            data: { 
                codigo: codigo, 
                cantidad: cantidad,
                inventario: inventario 
            },
            success: function(response) 
            {
                location.reload();
            },
            error: function(error) 
            {
                location.reload();
            }
        });
    });
</script>
<script>
    $(document).on("click","#reset",function(e){
        e.preventDefault();
        var estado = "No Registrado";
        $.ajax({
            type: 'post',
            url: '<?php echo base_url(); ?>/InventarioC/InventarioC/Reset',
            data: 
            { 
                estado: estado, 
            },
            success: function(response) 
            {
                location.reload();
            },
            error: function(error) 
            {
                location.reload();
            }
        });
    });
</script>