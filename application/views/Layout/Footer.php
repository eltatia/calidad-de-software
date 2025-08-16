<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Edicion - &copy; 2024 <a href="#"> &nbsp;&nbsp;  QrBook</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- Modales de todos los modulos  -->
 <!-- Modal (Libro - Nuevo libro)-->
 <div class="modal fade" id="NuevoLibro" role="dialog">
    <div class="modal-dialog">   
      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header bg-primary">
            <h4 class="modal-title">Nuevo libro</h4>
          </div>
          <div class="row">
            <div class="col-md-5">
            <br><br>
            <img src="<?php echo base_url(); ?>assets/img/06.png" alt="" heigth="200" width="250" align="center" style="transform: scaleX(-1);">
            </div>
            <div class="col-md-7">
              <div class="modal-body">
              <form method="post" id="formR" action="<?php echo base_url(); ?>/MantenimientoC/LibrosC/RegistrarLibro">   
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Titulo" name="nombre">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-edit"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Autor" name="autor">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user-circle"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Editorial" name="editorial">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-book"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Edicion" name="edicion">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-tag"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="number" class="form-control" placeholder="Numero de ejemplares" name="ejemplares">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-plus"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <select class="form-control" name="categoria">
                <option value="">Seleccione categoria</option>
                  <option value="Generalidades">Generalidades</option>
                  <option value="Filosofia">Filosofia</option>
                  <option value="Religion">Religion</option>
                  <option value="Ciencias sociales">Ciencias Sociales</option>
                  <option value="Lenguaje">Lenguaje</option>
                  <option value="Idiomas">Idiomas</option>
                  <option value="Obras literarias">Obras Literarias</option>
                  <option value="Matematicas">Matematicas</option>
                  <option value="Tecnologias">Tecnologias</option>
                  <option value="Artes">Artes</option>
                  <option value="Ciencias naturales">Ciencias naturales</option>
                </select>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-cubes"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
              <input type="number" class="form-control" placeholder="Numero de estante" name="estante">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-cubes"></span>
                  </div>
                </div>
              </div>
              <button class="btn btn-primary btn-block" type="submit" id="addis">Registrar</button>
            </form>
          </div>
          </div>
          </div>
          <div class="modal-footer">
              <button type="reset" class="btn btn-dark btn-block" data-dismiss="modal">Cancelar</button>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal (Estudiante - Nuevo estudiante)-->
<div class="modal fade" id="NuevoEstudiante" role="dialog">
    <div class="modal-dialog">   
      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header bg-primary">
            <h4 class="modal-title">Nuevo estudiante</h4>
          </div>
          <div class="row">
            <div class="col-md-5">
              <br>
               <img src="<?php echo base_url(); ?>assets/img/07.png" alt="" heigth="200" width="220" align="center" style="transform: scaleX(-1);">
            </div>
            <div class="col-md-7">
            <div class="modal-body">
            <form method="post" id="formCE" action="<?php echo base_url(); ?>/MantenimientoC/EstudiantesC/RegistrarEstudiante">   
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Dni" name="dni">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-book"></span>
                  </div>
                </div>
              </div>  
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Apellidos" name="apellidos">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="number" class="form-control" placeholder="Grado" name="grado">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-tag"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Sección" name="seccion">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-tag"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <select class="form-control" name="genero">
                <option value="">Genero</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-tag"></span>
                  </div>
                </div>
              </div>
              <button class="btn btn-primary btn-block" type="submit" id="reg">Registrar</button>
            </form>
          </div>
            </div>
          </div>
          <div class="modal-footer">
              <button type="reset" class="btn btn-dark btn-block" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
</div>
 <!-- Modal (Libro - Editar datos libro)-->
 <div class="modal fade" id="EditLibro" role="dialog">
    <div class="modal-dialog">   
      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header bg-primary">
            <h4 class="modal-title">Editar datos</h4>
          </div>
          <div class="modal-body">
            <form method="post" id="EditL" action="<?php echo base_url(); ?>/MantenimientoC/LibrosC/EditarLibro"> 
              <input type="hidden"  name="U_codigo" id="U_codigo">
              <label for="U_nombre">Titulo</label>  
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Titulo" name="U_nombre" id="U_nombre">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-edit"></span>
                  </div>
                </div>
              </div>
              <label for="U_autor">Autor</label>  
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Autor" name="U_autor" id="U_autor">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user-circle"></span>
                  </div>
                </div>
              </div>
              <label for="U_editorial">Editorial</label>  
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Editorial" name="U_editorial" id="U_editorial">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-book"></span>
                  </div>
                </div>
              </div>
              <label for="U_edicion">Edicion</label>  
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Edicion" name="U_edicion" id="U_edicion">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-tag"></span>
                  </div>
                </div>
              </div>
              <label for="U_ejemplares">Ejemplares</label>  
              <div class="input-group mb-3">
                <input type="number" class="form-control" placeholder="Numero de ejemplares" name="U_ejemplares" id="U_ejemplares">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-plus"></span>
                  </div>
                </div>
              </div>
              <label for="U_ejemplares">Categoria</label>  
              <div class="input-group mb-3">
                <select class="form-control" name="U_categoria" id="U_categoria">
                  <option value="">Seleccione categoria</option>
                  <option value="Generalidades">Generalidades</option>
                  <option value="Religion">Religion</option>
                  <option value="Ciencias sociales">Ciencias Sociales</option>
                  <option value="Obras literarias">Obras Literarias</option>
                  <option value="Matematicas">Matematicas</option>
                  <option value="Computacion">Computacion</option>
                </select>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-cubes"></span>
                  </div>
                </div>
              </div>
              <label for="U_ejemplares">Estante</label>  
              <div class="input-group mb-3">
                <input type="number" class="form-control" placeholder="Estante" name="U_estante" id="U_estante">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-cubes"></span>
                  </div>
                </div>
              </div>
              <button class="btn btn-primary btn-block" type="submit" id="modis">Cambiar</button>
            </form>
          </div>
          <div class="modal-footer">
              <button type="reset" class="btn btn-dark btn-block" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal (Libro - codigoQR)-->
<div class="modal fade" id="QrModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" id="myModalLabel">QR Generado</h4>
            </div>
            <div class="modal-body" align="center">
                <div id="Qrcode"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="QrCodigo">Guardar QR</button>
                <button type="button" class="btn btn-dark" id="close">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal (Modificar datos estudiante - Estudiante) -->
<div class="modal fade" id="EditEstudiante" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title">Modificar datos</h4>
            </div>
        <div class="modal-body">
            <form method="post" id="formEE" action="<?php echo base_url(); ?>/MantenimientoC/EstudiantesC/ModificarEstudiante">
                <input type="hidden" name="dni" id="dni">
                <label for="U_dni">Dni</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Dni" name="dni_U" id="U_dni">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-edit"></span>
                        </div>
                    </div>
                </div>
                <label for="U_nom">Nombre</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="U_nom">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-edit"></span>
                        </div>
                    </div>
                </div>
                <label for="U_apellidos">Apellidos</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" id="U_apellidos">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-edit"></span>
                        </div>
                    </div>
                </div>
                <label for="U_grado">Grado</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Grado" name="grado" id="U_grado">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-edit"></span>
                        </div>
                    </div>
                </div>
                <label for="U_seccion">Seccion</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Seccion" name="seccion" id="U_seccion">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-edit"></span>
                        </div>
                    </div>
                </div>
                <label for="U_genero">Genero</label>  
                  <div class="input-group mb-3">
                  <select class="form-control" name="gnro" id="gnro">
                    <option value="">Genero</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                  </select>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-cubes"></span>
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary btn-block" type="submit" id="addis">Editar</button>
            </form>
            </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-block btn-dark" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal (Prestamo)-->
<div class="modal fade" id="RegPrestamo" role="dialog">
    <div class="modal-dialog">   
      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header bg-primary">
            <h4 class="modal-title">Prestamo</h4>
          </div>
          <div class="modal-body">
            <form method="post" id="RegistrarPrestamo" action="<?php echo base_url(); ?>/PrestamoC/PrestamoC/RegistrarPrestamo">   
            <div class="input-group mb-3">
              <select class="form-control" name="dni" id="dni">
                <option value="">Nombre del estudiante</option>
                <?php if(!empty($estudiantesDni)): ?>
                  <?php foreach ($estudiantesDni as $row): ?>
                    <option value="<?php echo $row->Dni; ?>"><?php echo $row->Nombre." ".$row->Apellidos; ?></option>
                  <?php endforeach; ?>
                <?php endif;?>
              </select>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-cubes"></span>
                </div>
              </div>
            </div>  
            <div class="input-group mb-3">
              <select class="form-control" name="codigo" id="codigo">
                <option value="">Titulo del libro</option>
                <?php if(!empty($datosLibro)): ?>
                  <?php foreach ($datosLibro as $row): ?>
                    <option value="<?php echo $row->Codigo; ?>"><?php echo $row->Codigo." ".$row->Nombre;?></option>
                  <?php endforeach; ?>
                <?php endif;?>
              </select>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-cubes"></span>
                </div>
              </div>
            </div>
              <button class="btn btn-primary btn-block" type="submit" id="reg">Registrar prestamo</button>
            </form>
          </div>
          <div class="modal-footer">
              <button type="reset" class="btn btn-dark btn-block" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal (Observaciones)-->
<div class="modal fade" id="Observaciones" role="dialog">
    <div class="modal-dialog">   
      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header bg-primary">
            <h4 class="modal-title">Observacion</h4>
          </div>
          <div class="modal-body">
            <form method="post" id="RegistrarObservaciones" action="<?php echo base_url(); ?>/PrestamoC/PrestamoC/ObservarPrestamo">   
                <input type="hidden" id="codigo_pres" name="codigo_pres">
                <label for="descripcion">Descripcion</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Descripcion" name="descripcion" id="descripcion">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-edit"></span>
                        </div>
                    </div>
                </div>
              <button class="btn btn-primary btn-block" type="submit" id="reg">Registrar prestamo</button>
            </form>
          </div>
          <div class="modal-footer">
              <button type="reset" class="btn btn-dark btn-block" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>