<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Estudiantes</h1>
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
              <div class="card-header">
                <h3 class="card-title">
                  <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#NuevoEstudiante">Registrar estudiante</button>
                </h3>
              </div>
              <div class="card-body">
                 <table id="tabla" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th class="bg-secondary">Dni</th>
                    <th class="bg-secondary">Nombre</th>
                    <th class="bg-secondary">Apellidos</th>
                    <th class="bg-secondary">Grado</th>
                    <th class="bg-secondary">Seccion</th>
                    <th class="bg-secondary">Género</th>
                    <th class="bg-secondary">Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      if(!empty($estudiantes)):?>
                        <?php 
                          foreach ($estudiantes as $key):
                        ?>
                        <tr>
                          <td style="font-size: 14px;"><?php echo $key->Dni; ?></td>
                          <td style="font-size: 14px;"><?php echo $key->Nombre; ?></td>
                          <td style="font-size: 14px;"><?php echo $key->Apellidos; ?></td>
                          <td style="font-size: 14px;"><?php echo $key->Grado; ?></td>
                          <td style="font-size: 14px;"><?php echo $key->Seccion; ?></td>
                          <td style="font-size: 14px;"><?php echo $key->Genero; ?></td>
                          <td align="center">
                            <a class="btn btn-primary" id="edit" value="<?php echo $key->Dni; ?>" style="color: #fff;"><span class="fa fa-edit"></span></a>                              
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
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5],
        },
        text: 'Exportar a Excel',
        className: 'btn btn-success'
      }],
    }).buttons().container().appendTo('#tabla_wrapper .col-md-6:eq(0)');
  });
</script>
<script>
$(function () {
  $('#formCE').validate({
    rules: {
      dni: {
        required: true,
        number: true,
        remote: 
        {
            url: "<?php echo base_url(); ?>MantenimientoC/EstudiantesC/ComprobarDuplicadoRegistro",
            type: "post",
        },
      },
      nombre: {
        required: true,
      },
      apellidos: {
        required: true,
      },
      grado: {
        required: true,
      },
      seccion: {
        required: true,
      },
      genero: {
        required: true,
      },
    },
    messages: 
    {
      dni: {
        required: "Ingrese un valor",
        number: "Ingresa un valor numerico",
        remote: "Ya existe el DNI",
      },
      nombre: {
        required: "Ingrese un valor",
      },
      apellidos: {
        required: "Ingrese un valor",
      },
      grado: {
        required: "Ingrese un valor",
      },
      seccion: {
        required: "Ingrese un valor",
      },
      genero: {
        required: "Seleccione un valor",
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.input-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
<script>
$(function () {
  $('#formEE').validate({
    rules: {
      dni_U: {
        required: true,
        number: true,
      },
      nombre: {
        required: true,
      },
      apellidos: {
        required: true,
      },
      grado: {
        required: true,
      },
      seccion: {
        required: true,
      },
      gnro: {
        required: true,
      },
    },
    messages: 
    {
      dni_U: {
        required: "Ingrese un valor",
        number: "Ingresa un valor numerico",
      },
      nombre: {
        required: "Ingrese un valor",
      },
      apellidos: {
        required: "Ingrese un valor",
      },
      grado: {
        required: "Ingrese un valor",
      },
      seccion: {
        required: "Ingrese un valor",
      },
      gnro: {
        required: "Seleccione un valor",
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.input-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
<script>
    $(document).on("click","#edit",function(e){
        e.preventDefault();
        var dni = $(this).closest("tr").find("td:eq(0)").text();
        var nombre = $(this).closest("tr").find("td:eq(1)").text();
        var apellidos = $(this).closest("tr").find("td:eq(2)").text();
        var grado = $(this).closest("tr").find("td:eq(3)").text();
        var seccion = $(this).closest("tr").find("td:eq(4)").text();
        var genero = $(this).closest("tr").find("td:eq(5)").text();
        $("#EditEstudiante").modal('show');
        $("#dni").val(dni);
        $("#U_dni").val(dni);
        $("#U_nom").val(nombre);
        $("#U_apellidos").val(apellidos);
        $("#U_grado").val(grado);
        $("#U_seccion").val(seccion);
        $("#U_genero").val(genero);
    });
</script>