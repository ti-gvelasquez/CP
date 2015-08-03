<!DOCTYPE HTML>
<html dir="ltr" lang="es-CO">
<head>
<?php require_once("../template/include/meta.inc"); ?>
<title teid="vo:html:1"></title>
<?php require_once("../template/include/head-1.inc"); ?>
<script type="text/javascript" src="../template/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../template/js/dataTables.colVis.min.js"></script>
<script type="text/javascript" src="../template/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="sjs/votaciones-functions.js"></script>
<script type="text/javascript" src="sjs/editar-pregunta.js"></script>
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
            <div class="titulo-principal">
              <h1 class="title encuestas" teid="vo:html:29"></h1>
            </div>
            <?php require_once('../template/include/alerts.inc'); ?>
              <div class="clearfix">
                <form id="form-edita-pregunta">
                  <table>
                      <tr>
                        <td>
                          <label for="enunciado_pregunta0" teid="vo:html:17"></label>
                        </td>
                        <td>
                          <input type=text class="input" id="enunciado_pregunta0" name="enunciado_pregunta0" required/>
                        </td>
                      </tr>
                      <tr>
                        <td  width="50%" colspan="2">
                          <label for="opciones_pregunta0" teid="vo:html:30"></label>
                        </td>
                        <td class="opciones" colspan="2">
                          <textarea id="opciones_pregunta0" rows="4" required></textarea>
                        </td>
                      </tr>
                    </table>
                      </div>
                    <div class="botones-form">
                      <input type="submit" class="btn icono guardar ttip positivo" teid="vo:val:31, vo:title:32"/>
                      <input type="hidden" id="id_encuesta" value=""/>
                    </div>                            
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