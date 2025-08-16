<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Libros de la biblioteca</h1>
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
              <div class="card-header d-flex justify-content-between">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#NuevoLibro">Registrar libro</button>
                </div>
              </div>
              <div class="card-body">
                 <table id="tabla" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th class="bg-secondary" style="font-size: 14px;">Codigo</th>
                    <th class="bg-secondary" style="font-size: 14px;">Titulo</th>
                    <th class="bg-secondary" style="font-size: 14px;">Autor</th>
                    <th class="bg-secondary" style="font-size: 14px;">Editorial</th>
                    <th class="bg-secondary" style="font-size: 14px;">Edición</th>
                    <th class="bg-secondary" style="font-size: 14px;">Ejemplares</th>
                    <th class="bg-secondary" style="font-size: 14px;">Categoria</th>
                    <th class="bg-secondary" style="font-size: 14px;">Nro E.</th>
                    <th class="bg-secondary" style="font-size: 14px;">QR</th>
                    <th class="bg-secondary" style="font-size: 14px;">Acciones</th>
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
                          <td style="font-size: 14px;"><?php echo $key->Editorial; ?></td>
                          <td style="font-size: 14px;"><?php echo $key->Edicion; ?></td>
                          <td style="font-size: 14px;"><?php echo $key->Ejemplares; ?></td>
                          <td style="font-size: 14px;"><?php echo $key->Categoria; ?></td>
                          <td style="font-size: 14px;"><?php echo $key->Estante; ?></td>
                          <td align="center">
                            <?php
                                if(!empty($key->Qr))
                                {
                                  echo '<img src="'. $key->Qr .'" height="40%" width="40%">';
                                }
                            ?>
                          </td>
                          <td align="center">
                            <div class="btn-group" role="group">
                              <a class="btn btn-primary" id="edit" value="<?php echo $key->Codigo; ?>" style="color: #fff;"><span class="fa fa-edit"></span></a>    
                              <a class="btn btn-warning" id="qr" value="<?php echo $key->Codigo; ?>" style="color: #fff;"><span class="fa fa-qrcode"></span></a>   
                              <a class="btn btn-dark" id="trash" value="<?php echo $key->Codigo; ?>" style="color: #fff;"><span class="fa fa-trash"></span></a>
                            </div>                        
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
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7],
        },
        text: 'Exportar a Excel',
        className: 'btn btn-success'
      },
    ]
    }).buttons().container().appendTo('#tabla_wrapper .col-md-6:eq(0)');
  });
</script>
<script>
$(function () {
  $('#formR').validate({
    rules: {
      nombre: {
        required: true,
      },
      autor: {
        required: true,
      },
      editorial: {
        required: true,
      },
      edicion: {
        required: true,
      },
      ejemplares: {
        required: true,
      },
      categoria:
      {
        required: true,
      },
      estante:
      {
        required: true,
      },
    },
    messages: 
    {
      nombre: {
        required: "Completa el campo vacio",
      },
      autor: {
        required: "Completa el campo vacio",
      },
      editorial: 
      {
        required: "Completa el campo vacio",
      },
      edicion: 
      {
        required: "Completa el campo vacio",
      },
      ejemplares: 
      {
        required: "Completa el campo vacio",
      },
      categoria: 
      {
        required: "Completa el campo vacio",
      },
      estante: 
      {
        required: "Completa el campo vacio",
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
  $('#EditL').validate({
    rules: {
      U_nombre: {
        required: true,
      },
      U_autor: {
        required: true,
      },
      U_editorial: {
        required: true,
      },
      U_edicion: {
        required: true,
      },
      U_ejemplares: {
        required: true,
      },
      U_categoria: 
      {
        required: true,
      },
      U_estante: 
      {
        required: true,
      },
    },
    messages: 
    {
      U_nombre: {
        required: "Completa el campo vacio",
      },
      U_autor: {
        required: "Completa el campo vacio",
      },
      U_editorial: 
      {
        required: "Completa el campo vacio",
      },
      U_edicion: 
      {
        required: "Completa el campo vacio",
      },
      U_ejemplares: 
      {
        required: "Completa el campo vacio",
      },
      U_categoria: 
      {
        required: "Completa el campo vacio",
      },
      U_estante: 
      {
        required: "Completa el campo vacio",
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
        var codigo = $(this).closest("tr").find("td:eq(0)").text();
        var nombre = $(this).closest("tr").find("td:eq(1)").text();
        var autor = $(this).closest("tr").find("td:eq(2)").text();
        var editorial = $(this).closest("tr").find("td:eq(3)").text();
        var edicion = $(this).closest("tr").find("td:eq(4)").text();
        var ejemplares = $(this).closest("tr").find("td:eq(5)").text();
        var categoria = $(this).closest("tr").find("td:eq(6)").text();
        var estante = $(this).closest("tr").find("td:eq(7)").text();
        $("#EditLibro").modal('show');
        $("#U_codigo").val(codigo);
        $("#U_nombre").val(nombre);
        $("#U_autor").val(autor);
        $("#U_editorial").val(editorial);
        $("#U_edicion").val(edicion);
        $("#U_ejemplares").val(ejemplares);
        $("#U_categoria").val(categoria);
        $("#U_estante").val(estante);
    });
</script>
<script>
    $(document).on("click","#trash",function(e){
      e.preventDefault();
      var del_id = $(this).attr("value");
      //alert(del_id);
      Swal.fire({
        html: '<img src="<?php echo base_url(); ?>/assets/img/advertis.png" style="max-width: 50%;" />',
        title: '¿Eliminar Libro?',
        text: 'Esta acción no se puede deshacer. ¿Quieres continuar?',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonText: 'No,Cancelar',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si,Eliminar'
        }).then((result) => 
        {
          if (result.isConfirmed) 
          {
            $.ajax({
            url: "<?php echo base_url(); ?>/MantenimientoC/LibrosC/EliminarLibro",
            type: "post",
            dataType: "json",
            data: {
              del_id: del_id
              },
            });
          }
          location.reload();
        });
    });
</script>
<script>
    $(document).on("click","#qr",function(e){
      codigo = $(this).closest("tr").find("td:eq(0)").text();
      var opciones = {
            text: codigo,
            width: 200,
            height: 200
        };
      $("#QrModal").modal('show');
      $("#QrCodigo").val(codigo);
      var qrCode = new QRCode(document.getElementById("Qrcode"), opciones);
    });
    $(document).on("click","#close",function(e){
      location.reload();
    });
</script>
<script>
    $(document).on("click","#QrCodigo",function(e){
      var codigo = $(this).attr("value");
      var imagenQr = $('#Qrcode img').attr('src');
      //alert(imagenQr);
      $.ajax({
        url: '<?php echo base_url(); ?>/MantenimientoC/LibrosC/GuardarQrLibro',
        method: 'POST',
        data: { 
          codigo: codigo, 
          imagenQr: imagenQr 
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
    $(document).on("click","#Stock",function(e){
        e.preventDefault();
        var codigo = $(this).attr("value");
        $("#Stock").modal('show');
    });
</script>