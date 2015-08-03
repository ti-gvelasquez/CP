<!DOCTYPE HTML>
<html dir="ltr" lang="es-CO">
<head>
<?php require_once("../template/include/meta.inc"); ?>
<title teid="sl:html:1"></title>
<?php require_once("../template/include/head-2.inc"); ?>
<script type="text/javascript" src="../template/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../template/js/dataTables.colVis.min.js"></script>
<script type="text/javascript" src="../template/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="sjs/solicitudes-functions.js"></script>
<script type="text/javascript" src="sjs/respuesta.js"></script>
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
              <div class="titulo-principal"><h1 teid="sl:html:21"></h1></div>
              <?php require_once('../template/include/alerts.inc'); ?>
              <div id="crearcaso">                 
                <form class="clearfix" name="respuesta_caso_form" id="respuesta_caso_form">
                  <table>
                      <tr>
                        <td colspan="2">
                          <label teid="sl:html:22" s></label> 
                        </td>
                        <td colspan="2">
                          <label id="cliente_correo"></label>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <label teid="sl:html:23"></label> 
                        </td>
                        <td colspan="2">
                          <label id="cliente_nombre"></label>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <label teid="sl:html:24"></label> 
                        </td>
                        <td colspan="2">
                          <label id="nombre_copropiedad"></label>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <label teid="sl:html:25"></label> 
                        </td>
                        <td colspan="2">
                          <label id="id_caso"></label>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <label teid="sl:html:26"></label>
                        </td>
                        <td colspan="2">
                         <label id="fecha_creacion_caso"></label>
                         <input type="hidden" id="id_crm_cliente">
                         <input type="hidden" id="id_copropiedad">
                         <input type="hidden" id="fecha_creacion_guardar">
                       </td>
                      </tr>
                      <tr>
                          <td colspan="4"><label teid="sl:html:27"></label><textarea rows="5" id="caso_cliente" name="caso_cliente" disabled></textarea></td>
                      </tr>
                       <tr>
                          <td colspan="4"><label teid="sl:html:28"></label><textarea rows="5" id="notas_cliente" name = "notas_cliente" disabled></textarea></td>                    
                      </tr> 
                      <tr>
                          <td colspan="4"><label teid="sl:html:29"></label><textarea rows="10" id="respuesta_caso" name="respuesta_caso" required></textarea></td>
                      </tr>
                       <tr>
                          <td colspan="4"><span><input type="checkbox" id="copia" name="copia" checked></span><span teid="sl:html:32"></span></td>
                      </tr>
                      <tr>
                          <td colspan="4">
                            <div class="botones-form">
                              <input type="submit" id="btn_enviar" class="btn icono guardar ttip positivo" teid="sl:val:30, sl:title:31">
                            </div>
                          </td>
                      </tr>
                  </table>
              </form>
            </div>
          </div>
          <!-- Finaliza codigo de la aplicacion -->
        </section>
        <footer>  
          <?php require_once('../template/include/footer.inc'); ?>
        </footer>
    </div>
</body>
</html>