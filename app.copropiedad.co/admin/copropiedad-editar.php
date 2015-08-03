<!DOCTYPE HTML>
<html dir="ltr" lang="es-CO">
<head>
<?php require_once("../template/include/meta.inc"); ?>
<title teid="ccp:html:1"></title>
<?php require_once("../template/include/head-1.inc"); ?>
<script type="text/javascript" src="../template/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../template/js/dataTables.colVis.min.js"></script>
<script type="text/javascript" src="../template/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="sjs/copropiedad-functions.js"></script>
<script type="text/javascript" src="sjs/copropiedad-editar.js"></script>
</head>
<body>
<header>
  <?php require_once("../template/include/header.inc"); ?>
</header>
    <div id="contenido-principal">
        <section id="central">
            <aside>
              <div class="trescolumnas primera">
                  <?php //require_once('../template/include/newmenu.inc'); ?>
                  <?php //require_once('../template/include/appmenu-1.inc'); ?>
                  <?php require_once('../template/include/backbutton.inc'); ?>
              </div>
              <div class="trescolumnas centro">
                  <?php require_once('../template/include/today.inc'); ?>
              </div>
              <div class="trescolumnas ultima">
                <?php require_once('../template/include/copropiedades.inc'); ?>
              </div>
            </aside>

            <div class="breadcrumb">
              <?php require_once('../template/include/breadcrumbs.inc'); ?>
            </div>

            <div class="contenedor mitad">
              <!-- Codigo de la aplicacion -->
              <div class="titulo-principal"><h1 teid="ccp:html:17"></h1></div>
              <?php require_once('../template/include/alerts.inc'); ?>

              <form class="clearfix" id="copropiedad_form_editar">
                <table>
                  <tr>
                    <td colspan="4">
                      <label for="nombre" teid="ccp:html:11"></label>
                      <input type="text" id="nombre" name="nombre" required>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="4">
                      <label for="direccion" teid="ccp:html:12"></label>
                      <input type="text" id="direccion" name="direccion" required>
                    </td>
                  </tr>
                  <tr>
                    <td width="33%"></td>
                    <td width="33%"></td>
                    <td width="34%"></td>
                  </tr>
                  <tr>
                    <td>
                      <label for="telefono" teid="ccp:html:13"></label>
                      <input type="tel" id="telefono" name="telefono" required>
                    </td>
                    <td>
                      <label for="nit" teid="ccp:html:14"></label>
                      <input type="text" id="nit" name="nit" required>
                    </td>                                                                                                
                    <td>
                      <label for = "ciudad" teid="ccp:html:15"></label>
                      <input type = "text" id="ciudad" name="ciudad" required>
                    </td>                    
                  </tr>
                  <tr>
                    <td colspan="">                                
                      <input type="hidden" id = "id_crm_persona"></input>
                      <input type="hidden" id = "fecha_creacion"></input>
                      <input type="hidden" id = "referencia"></input>
                      <input type="hidden" id = "vigencia"></input>
                      <input type="hidden" id = "pagosonline"></input>
                    </td>
                  </tr>                                                                                                            
              </table>
              <div class="botones-form">
                <input type="submit" class="btn icono guardar ttip positivo" teid="ccp:val:18, ccp:title:24">
              </div>
            </form>
          </div>            
            <!-- Finaliza codigo de la aplicacion -->
        </section>
        <footer>  
          <?php require_once('../template/include/footer.inc'); ?>
        </footer>
    </div>
</body>
</html>