<!DOCTYPE html>
<?php
include_once("indexPte.php");
include_once 'clases/conexion.php';
?>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Registro de empresa </div>
            <div class="card-body">
              <div class="table-responsive">
                <!-- form -->
                <form class="form" method="POST" action="ejecutarRegistroEmpresaPte.php">
                  <table  style="margin: 0 auto;">
                    <tr>
            <td>&nbsp;</td>

                    </tr>
                    <tr>
                      <td>Nombre Empresa</td>
                      <td><input type="text" class="form-control" name="txtNombre" required  placeholder="Nombre Empresa"/></td>
                    <td>&nbsp;</td>
                    </tr>
                    <tr>
            <td>&nbsp;</td>

                    </tr>
                    <tr>
                      <td>Dirección </td>
                      <td><input type="text" class="form-control" name="txtDireccion" required  placeholder="Dirección"/></td>
                    <td>&nbsp;</td>
                    </tr>
                    <tr>
            <td>&nbsp;</td>

                    </tr>
<?echo $_SESSION['idUsuario'];?>
                    <tr>
                      <td>Teléfono</td>
                      <td><input type="text" class="form-control" name="txtTelefono" required  placeholder="9 12345678"/></td>
                    <td>&nbsp;</td>
                    </tr>
                    <tr>
            <td>&nbsp;</td>

                    </tr>
                    <tr>
                      <td>Correo</td>
                      <td><input type="mail" class="form-control" name="txtCorreo" required  placeholder="Ej: correo@algo.com"/></td>
                    <td>&nbsp;</td>
                    </tr>
                    <tr>
            <td>&nbsp;</td>

                    </tr>
                  <tr>
                    <td>Categoría</td>
                    <td><select name="selectCat">
                      <?
                        $consulta = "SELECT id_cat, nombre_cat FROM categoria";
                        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
                        while ($columna = mysqli_fetch_array( $resultado ))
                        {
                          echo '<option value="'.$columna['id_cat'].'">'.$columna['nombre_cat'].'</option>';

                        }

                      ?>
                    </td>
                  <td>&nbsp;</td>
                  </tr>
                  <tr>
          <td>&nbsp;</td>

                  </tr>
                  <tr>
                    <td>Región</td>
                    <td><select name="selectRegion">
                      <?
                        $consultaRegion = "SELECT id_reg, nombre_reg FROM region";
                        $resultadoReg = mysqli_query( $conexion, $consultaRegion ) or die ( "Algo ha ido mal en la consulta a la base de datos");
                        while ($columna = mysqli_fetch_array( $resultadoReg ))
                        {
                          echo '<option value="'.$columna['id_reg'].'"> '.$columna['nombre_reg'].'</option>';

                        }

                      ?>
                    </td>
                  <td>&nbsp;</td>
                  </tr>
                  <tr>
          <td>&nbsp;</td>

                  </tr>
                  <tr>
                    <td>Ciudad</td>
                    <td><select name="selectCiudad">
                      <?
                        $consultaCiu = "SELECT id_ciu, nombre_ciu FROM ciudad";
                        $resultadoCiu = mysqli_query( $conexion, $consultaCiu ) or die ( "Algo ha ido mal en la consulta a la base de datos");
                        while ($columna = mysqli_fetch_array( $resultadoCiu ))
                        {
                          echo '<option value="'.$columna['id_ciu'].'"> '.$columna['nombre_ciu'].'</option>';

                        }

                      ?>
                    </td>
                    <tr>
            <td>&nbsp;</td>

                    </tr>
                    <tr>
                      <td>Descripción</td>
                      <td><td>&nbsp;</td>
                    </tr>
                    <tr>
            <td>&nbsp;</td>

                    </tr>
                  </tr><tr>
                    <td></td>
                    <td><textarea name="txtDescripcion" rows="10" cols="40" placeholder="Escriba una breve descripción de su empresa"></textarea></td>
                  <td>&nbsp;</td>
                  </tr>
                  <tr>
          <td>&nbsp;</td>

                  </tr>
                  <td>&nbsp;</td>
                  </tr>
                  <tr>
          <td>&nbsp;</td>

                  </tr>





                    <tr>
            <td>&nbsp;</td>

                    </tr>
                    <tr>
                      <td></td>
                      <td><div>
                        <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                      </div></td>
                      <th></th>
                    </tr>
                  </table>
                </form>
              </div>
            </div>
          <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Grupo Macer 2019</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
