<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Prestamos Observados</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-body">
                 <table id="tabla" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th class="bg-secondary">Nro</th>
                    <th class="bg-secondary">Codigo Prestamo</th>
                    <th class="bg-secondary">Descripcion</th>
                    <th class="bg-secondary">Estudiante</th>
                    <th class="bg-secondary">Estado de la observacion</th>
                    <th class="bg-secondary">Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                      if(!empty($prestamosObservados)):?>
                        <?php 
                          foreach ($prestamosObservados as $key):
                        ?>
                        <tr>
                          <td style="font-size: 14px;"><?php echo $key->Id; ?></td>
                          <td style="font-size: 14px;"><?php echo $key->prestamo_Nro; ?></td>
                          <td style="font-size: 14px;"><?php echo $key->Descripcion; ?></td>
                          <td style="font-size: 14px;"><?php echo $key->Nombre_estudiante; ?></td>
                          <td style="font-size: 14px;"><?php echo $key->Estado; ?></td>
                          <td align="center">
                            <a class="btn btn-primary" id="regularizar" value="<?php echo $key->Id; ?>" style="color: #fff;"><span class="fa fa-check"></span></a>   
                          </td>
                        </tr>
                        <?php endforeach; ?>
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
<!-- /.content-wrapper -->
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
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
          columns: [0, 1, 2, 3, 4],
        },
        className: 'btn btn-success',
      }],
    }).buttons().container().appendTo('#tabla_wrapper .col-md-6:eq(0)');
  });
</script>
<script>
    $(document).on("click","#regularizar",function(e){
        e.preventDefault();
        var edit_id = $(this).attr("value");
        Swal.fire({
        html: '<img src="<?php echo base_url(); ?>/assets/img/advertis.png" style="max-width: 50%;" />',
        title: '¿Regularizar?',
        text: 'Esta acción no se puede deshacer. ¿Quieres continuar?',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Regularizar',
        cancelButtonText: 'No,Cancelar',
        }).then((result) => 
        {
          if (result.isConfirmed) 
          {
            $.ajax({
              url: "<?php echo base_url(); ?>/PrestamoC/PrestamoC/RegularizarPrestamo",
              type: "post",
              dataType: "json",
              data:
              {
                  edit_id: edit_id,
              },
            });
          }
          location.reload();
        });
    });
</script>
