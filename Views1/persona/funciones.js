$(document).ready(function(){
    
// No copiar, pegar y cortar

    $("input:text").bind('copy', function(e) {
        return false;
    });
    $("input:text").bind('paste', function(e) {
        return false;
    });        
    $("input:text").bind('cut', function(e) {
        return false;
    });

// Solo enteros
    $(".bonificacion").keypress(function (e){
     tecla = (document.all) ? e.keyCode : e.which;
    if (tecla===8||tecla===0) return true;   
    patron =/[0-9]/;
    te = String.fromCharCode(tecla);
    return patron.test(te);     
    });
    
// Solo Real
    $(".precio").keypress(function (e){
     tecla = (document.all) ? e.keyCode : e.which;
    if (tecla===8||tecla===0) return true;   
    patron =/[0-9/./,]/;
    te = String.fromCharCode(tecla);
    return patron.test(te);     
    });
// Solo Real
    $(".cantidad").keypress(function (e){
     tecla = (document.all) ? e.keyCode : e.which;
    if (tecla===8||tecla===0) return true;   
    patron =/[0-9/./,]/;
    te = String.fromCharCode(tecla);
    return patron.test(te);     
    });    
    
// Solo si y no
    $(".sino").keypress(function (e){
     tecla = (document.all) ? e.keyCode : e.which;
    if (tecla===8||tecla===0) return true;   
    patron =/[1-2]/;
    te = String.fromCharCode(tecla);
    return patron.test(te);     
    });

// Solo Letras
    $(".tipo_precio").keypress(function (e){
     tecla = (document.all) ? e.keyCode : e.which;
    if (tecla===8||tecla===0||tecla===32||tecla===37||tecla===39) return true;   
    patron = /[Pp/Oo/Bb/Rr/Ss/Nn/Ee]/;
    te = String.fromCharCode(tecla);
    return patron.test(te);     
    });
       
// VALIDO INGRESO DE DATOS
        
$('#submitinf_mes').click(function(){    
    
    if($('#anio').val().length < 4) {    
      alert("Es OBLIGATORIO ingresar un valor para el AÑO");
      $("#anio").focus();
      return false;
    }

    if(isNaN($('#mes').val())) {    
      alert("Es OBLIGATORIO ingresar un valor para el MES");
      $("#mes").focus();
      return false;
    }

    if( isNaN( $('#id_informante').val())) {    
      alert("Es OBLIGATORIO ingresar un valor para el INFORMANTE");
      $("#id_informante").focus();
      return false;
    }
            
});        
       

});  

// Enter como Tab

/*$('input').live("keydown", function(e) {
                    if (e.keyCode === 13 ){
                            var inputs = $(this).parents("html").eq(0).find("input").filter(':visible');
                            var idx = inputs.index(this);                           
                                inputs[idx + 1].focus();
                                return false;
                    }
            });
$('a,select,textarea').live("keydown", function(e) {
                    if (e.keyCode === 13 ){
                            var inputs = $(this).parents("html").eq(0).find("input,a,select,textarea").filter(':visible');
                            var idx = inputs.index(this);                           
                                inputs[idx + 1].focus();
                                return false;
                    }
            });
*/
function setTwoNumberDecimal(el) {
        el.value = parseFloat(el.value).toFixed(3);
    };

function mayuscula(campo){
                campo.value = campo.value.toUpperCase();
                };

$.fn.selectRange = function(start, end) {
    if(!end) end = start;
    return this.each(function() {
        if (this.setSelectionRange) {
            this.focus();
            this.setSelectionRange(start, end);
        } else if (this.createTextRange) {
            var range = this.createTextRange();
            range.collapse(true);
            range.moveEnd('character', end);
            range.moveStart('character', start);
            range.select();
        }
    });
};
// COMBO departamento
 $(document).ready(function() {
                    $.ajax({
                            type: "POST",
                            url: "/rucvm1/Views1/persona/getDepartamento.php",
                            success: function(response)
                            {
                                $('.selector-departamento select').html(response).fadeIn();
                            }
                    });
 
                });
// COMBO localidades
// 
$(document).ready(function() {
                    $(".selector-departamento select").change(function() {
                      $(".selector-localidad select").empty();
                         $.getJSON('/rucvm1/Views/persona/getLocalidades.php?departamento='+$(".selector-departamento select").val(),function(data){
                             $(".selector-localidad select").append('<option value="a">'+'Seleccionar...'+'</option>'); 
                             $.each(data, function(id,value){
                                $(".selector-localidad select").append('<option value="'+id+'">'+id+' - '+value+'</option>');
                            });
                         });
                    });
                });     
// COMBO INFORMANTES SIN SEMANAS
// 
$(document).ready(function() { 
                    $(".selector-mes select").change(function() {
                      $(".selector-informantes select").empty();
                         $.getJSON('getInformantes_1.php',function(data){
                             $(".selector-informantes select").append('<option value="a">'+'Seleccionar...'+'</option>'); 
                             $.each(data, function(id,value){
                                $(".selector-informantes select").append('<option value="'+id+'">'+id+' - '+value+'</option>');
                            });
                         });
                    }); 
                 });     
// 
// 
// $(document).ready(function() {
//                    $.ajax({
//                            type: "POST",
//                            url: "getInformantes.php",
//                            success: function(response)
//                            {
//                                $('.selector-informante select').html(response).fadeIn();
//                            }
//                    });
// 
//                });
//                
//       
// COMBO FORMULARIOS
 $(document).ready(function() {
                    $(".selector-informante select").change(function() {
                      $(".selector-formulario select").empty();
                         $.getJSON('getFormularios.php?id_informante='+$(".selector-informante select").val(),function(data){
                            $.each(data, function(id,value){
                                $(".selector-formulario select").append('<option value="'+id+'">'+value+'</option>');
                            });
                         });
                    });
                });                
// COMBO FORMULARIOS SIN SEMANA
 $(document).ready(function() {
                    $(".selector-informantes select").change(function() {
                      $(".selector-formulario select").empty();
                         $.getJSON('getFormularios.php?id_informante='+$(".selector-informantes select").val(),function(data){
                            $.each(data, function(id,value){
                                $(".selector-formulario select").append('<option value="'+id+'">'+value+'</option>');
                            });
                         });
                    });
                }); 
                
function setTwoNumberDecimal(el) {
        el.value = parseFloat(el.value).toFixed(2);
    };
    
    
function avisof(url){
if (!confirm("A T E N C I Ó N ! ! ! \n\n\
              Se procederá a Borrar este Formulario, todos los precios antes ingresados para el mismo serán eliminados.\n\
              Si desea continuar y eliminarlo [ACEPTAR], caso contrario [CANCELAR]. ")) 
    {
        return false;
    }
else 
    {
        document.location = url;
        return true;
    }
}

function avisoi(url, mes){
  m=mes;  
if (!confirm("A T E N C I Ó N ! ! ! \n\n\
              Se procederá a Borrar este Informantes, todos los formularios y precios ingresados en el mes de "+m+" para el mismo serán eliminados.\n\
              Si desea continuar y eliminarlo [ACEPTAR], caso contrario [CANCELAR]. ")) 
    {
        return false;
    }
else 
    {
        document.location = url;
        return true;
    }
}

function avisoj(url, mes){
  m=mes;  
if (!confirm("A T E N C I Ó N ! ! ! \n\n\
              Se procederá a CERRAR este Informante, todos los formularios y precios ingresados seran guardado y no podran ser MODIFICADOS.\n\
              Si desea continuar y cerrar el informante [ACEPTAR], caso contrario [CANCELAR]. ")) 
    {
        return false;
    }
else 
    {
        document.location = url;
        return true;
    }
}


function avisok(url, mes){
  m=mes;  
if (!confirm("A T E N C I Ó N ! ! ! \n\n\
              Se procederá a Finalizar este informante,todos los formularios y precios ingresados seran guardado y solo podran ser MODIFICADOS por el SUPERVISOR.\n\
              Si desea continuar y FINALIZAR el informante [ACEPTAR], caso contrario [CANCELAR]. ")) 
    {
        return false;
    }
else 
    {
        document.location = url;
        return true;
    }
}

function analizap(campo){                
                campo1='#tipoprecio'+campo;
                campo2='#precio'+campo;                
                if ($(campo1).val() === 'S' || $(campo1).val() === 'N' || $(campo1).val() === 'E' || $(campo1).val() === ''){
                    $(campo2).val(0.00);
                    $(campo2).attr('readonly','readonly');                    
                    $(campo2).focus();             
                }
                else{
                    $(campo2).removeAttr('readonly');                  
                    $(campo2).focus();
                    
                }
                };
