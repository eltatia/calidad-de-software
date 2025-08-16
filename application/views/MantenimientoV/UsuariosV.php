<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuarios del sistema</h1>
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
                    <th class="bg-secondary">Nombre</th>
                    <th class="bg-secondary">Apellidos</th>
                    <th class="bg-secondary">Dni</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      if(!empty($usuarios)):?>
                        <?php 
                          foreach ($usuarios as $key):
                        ?>
                        <tr>
                          <td style="font-size: 14px;"><?php echo $key->Nombre; ?></td>
                          <td style="font-size: 14px;"><?php echo $key->Apellidos; ?></td>
                          <td style="font-size: 14px;"><?php echo $key->Dni; ?></td>
                        </tr>
                        <?php endforeach; ?>
                      <?php endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->
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
        className: 'btn btn-success'
      }],
    }).buttons().container().appendTo('#tabla_wrapper .col-md-6:eq(0)');
  });
</script>