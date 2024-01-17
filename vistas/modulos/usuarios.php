<div class="content-wrapper">
  <section class="content-header">

    <h1>
      Administrar Usuarios
    </h1>

    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <!-- <li><a href="#">Examples</a></li> -->
      <li class="active">Administrar Usuarios</li>
    </ol>

  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">

      <div class="box-header with-border">

        <!-- <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div> -->

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">Agregar Usuario</button>

      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive table-hover tablas">

          <thead>

            <tr>

              <th style="width: 10px;">No.</th>
              <th>Nombre</th>
              <th>Usuario</th>
              <th>Imagen</th>
              <th>Perfil</th>
              <th>Estado</th>
              <th>Ultimo Login</th>
              <th>Accion</th>

            </tr>

          </thead>

          <tbody>

            <tr>

              <td>1</td>
              <td>Usuario Administador</td>
              <td>admin</td>
              <td><img src="vistas/img/usuarios/default/anonymous.png" alt="img" class="img-thumbnail" width="40px"></td>
              <td>Administrador</td>
              <td><button class="btn btn-success btn-xs">Activado</button></td>
              <td>2024-01-13 09:07:32</td>
              <td>
                <div class="btn-group">

                  <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>
              </td>

            </tr>
            <tr>

              <td>1</td>
              <td>Usuario Administador</td>
              <td>admin</td>
              <td><img src="vistas/img/usuarios/default/anonymous.png" alt="img" class="img-thumbnail" width="40px"></td>
              <td>Administrador</td>
              <td><button class="btn btn-success btn-xs">Activado</button></td>
              <td>2024-01-13 09:07:32</td>
              <td>
                <div class="btn-group">

                  <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>
              </td>

            </tr>
            <tr>

              <td>1</td>
              <td>Usuario Administador</td>
              <td>admin</td>
              <td><img src="vistas/img/usuarios/default/anonymous.png" alt="img" class="img-thumbnail" width="40px"></td>
              <td>Administrador</td>
              <td><button class="btn btn-warning btn-xs">Desactivado</button></td>
              <td>2024-01-13 09:07:32</td>
              <td>
                <div class="btn-group">

                  <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>
              </td>

            </tr>

          </tbody>

        </table>

      </div>

      <div class="box-footer">
        Footer
      </div>


    </div>


  </section>

</div>

<!--  
    * MODAL AGREGAR USUARIO
  -->
<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <form role="form" action="" method="post" enctype="multipart/form-data">

        <div class="modal-header bg-primary" style="color: whitesmoke;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar usuario</h4>
        </div>
        <div class="modal-body">
          <div class="box-body">

            <!-- Input NOMBRE -->
            <div class="form-group">
              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-address-book"></i></span>
                <input type="text" class="form-control" name="nuevoNombre" placeholder="Ingresar nombre" required>

              </div>
            </div>

            <!-- Input USUARIO -->
            <div class="form-group">
              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="nuevoUsuario" placeholder="Ingresar usuario" required>

              </div>
            </div>

            <!-- Input PASSWORD -->
            <div class="form-group">
              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="nuevoPassword" placeholder="Ingresar contraseña" required>

              </div>
            </div>

            <!-- Input PERFIL -->
            <div class="form-group">
              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th-list"></i></span>
                <select name="nuevoPerfil" class="form-control">
                  <option value="" disabled selected>Seleccione el perfil</option>
                  <option value="Administrador">Administrador</option>
                  <option value="Especial">Especial</option>
                  <option value="Vendedor">Vendedor</option>
                </select>

              </div>
            </div>

            <!-- Input FOTO -->
            <div class="form-group panel panel-primary">
              <div class="panel-heading">Subir Foto</div>
              <div class="panel-body">
                <input type="file" name="nuevaFoto" class="nuevaFoto" class="form-control">
                <p class="help-block">Max. 2MB</p>
                <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">
              </div>
            </div>


          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

        <?php
        
        $crearUsuario = new ControladorUsuarios();
        $crearUsuario -> ctrCrearUsuario();
        
        ?>

      </form>

    </div>

  </div>
</div>
