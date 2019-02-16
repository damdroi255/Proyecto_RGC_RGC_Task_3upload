<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Especial para móviles -->
        <title>Gestión - PRO_RGC_Task</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- Mis propios estilos -->
        <link rel="stylesheet" href="css/estilos.css"> 
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Gestión PRO_RGC_Task</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a class="btn" data-toggle="modal" data-target="#modalSinImplementar">Inicio</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if(isset($_SESSION["usuarioActual"])){//Si hay un usuario autentificado ?>
                                <li><a href="/PRO_RGC_Task/cerrarSesion.php">
                                    <span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión de: 
                                        <?php if(isset($_SESSION["usuarioActual"])){ echo $_SESSION["usuarioActual"];}//Si hay un usuario autentificado ?>
                                </a></li>
                        <?php } else { //Si NO hay un usuario autentificado ?>
                                <li><a class="btn" data-toggle="modal" data-target="#modalSesion">
                                    <span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión
                                </a></li>
                        <?php } ?>
                    </ul>
				</div>
            </div>
        </nav>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Sin implementar</h4>
              </div>
              <div class="modal-body">
                <p>Esta opción aún no ha sido implementada.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <form action="/PRO_RGC_Task/validarinicio.php" method="GET">
            <div id="modalSesion" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content -->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Autenticación de usuarios</h4>
                  </div>
                  <div class="modal-body">
                      <!--<div class="radio">
                        <label><input type="radio" name="usuarioActual" value="admin"/>
                            Como Administrador</label>
                      </div>
                      <div class="radio">
                          <label><input type="radio" name="usuarioActual" value="usuario" checked />
                              Como Usuario Autentificado</label>
                      </div>-->
                    <div class="form-group">
                        <label class="control-label" for="usuarioActual">Usuario:</label>
                        <input type="text" class="form-control" id="usuarioActual" name="usuarioActual"/>
                        <span class="help-block"></span> 
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="contra">Contraseña:</label>
                        <input type="password" class="form-control" id="contra" name="contra"/>
                        <span class="help-block"></span> 
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                  </div>
                </div>
              </div>
            </div>
        </form>


