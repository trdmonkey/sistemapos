<div id="back"></div>
<div class="login-box">



    <!-- /.login-logo -->
    <div class="login-box-body" style="border-radius: 15px; -webkit-box-shadow: 4px 6px 39px -6px rgba(132,146,186,1);
-moz-box-shadow: 4px 6px 39px -6px rgba(132,146,186,1);
box-shadow: 4px 6px 39px -6px rgba(132,146,186,1);">

        <div class="login-logo">
            <img src="vistas/img/plantilla/Logo7.png" alt="">
        </div>

        <p class="login-box-msg" style="letter-spacing: 2px;">Ingresa al sistema</p>

        <form method="post">

            <div class="form-group has-feedback">
                <input type="text" name="ingUsuario" required class="form-control" placeholder="Usuario" style="border-radius: 5px;">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="password" name="ingPassword" required class="form-control" placeholder="Contraseña" style="border-radius: 5px;">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <br>
            <div class="row">
                
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-sm btn-bold btn-outline-info">Ingresar</button>
                </div>
                <!-- /.col -->
                <br><br><br><br>
            </div>

            <?php
            
            $login = new ControladorUsuarios();
            $login -> ctrIngresoUsuario();
            
            ?>

        </form>


    </div>

</div>
