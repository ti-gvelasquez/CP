$(document).ready(function(){
 $(document).renderme('co');
 $('.selector-copropiedad').html("<span class=titulo-cop><strong>"+ sessionStorage.getItem('ncp') +"</strong></span>");
 var params={};window.location.search.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(str,key,value){params[key] = value;}) 

 var arr2 = { token:sessionStorage.getItem('token'),body:{id_copropiedad:sessionStorage.getItem('cp'),tipo_documento:"consecutivos"}};
 var datosCifras = traerDatosSync("contabilidad/obtener/consecutivos/", arr2); 
 popularCifras(datosCifras);

 //console.warn(datosCifras);
 
$(document).renderme('co');

});