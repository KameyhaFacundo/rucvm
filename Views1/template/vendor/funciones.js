// COMBO institucion
$(document).ready(function() {
    var idinstitucion1 = $('#idinstitucion1').val();
            $.ajax({
                    url: "/rucvm/Views1/usuario/getInstitucion.php",
                    type: "POST",
                    dataType: 'html',
                    data: {"idinstitucion1": idinstitucion1},
                    success: function(response)
                    {
                        $('.selector-institucion select').html(response).fadeIn();
                    }
            });

        });


// COMBO profesional
 $(document).ready(function() {
            var profesional1 = $('#idprofesional1').val();
            var idusuario = $('#idusuario').val();
                    $.ajax({
                            url: "/rucvm/Views1/ficha/getProfesional.php",
                            type: "POST",
                            dataType: 'html',
                            data: {"profesional1": profesional1, "idusuario": idusuario},
                            success: function(response)
                            {
                                $('.selector-profesional select').html(response).fadeIn();
                            }
                    });
 
                });


// COMBO departamento
 $(document).ready(function() {
            var departamento1 = $('#departamento1').val();           
                    $.ajax({
                            url: "http://181.88.186.115/rucvm/Views1/persona/getDepartamento.php",
                            type: "POST",
                            dataType: 'html',
                            data: {"departamento1": departamento1},
                            success: function(response)
                            {
                                $('.selector-departamento select').html(response).fadeIn();
                            }
                    });
 
                });
// COMBO localidades
// 
$(document).ready(function() {         
                var localidad1 = $('#localidad1').val();
                var departamento1 = $('#departamento1').val();
                var bandera = 0;
                var selected = 'selected';
                if(localidad1 != bandera){
                    $.ajax({
                            url: "http://181.88.186.115/rucvm/Views1/persona/getLocalidades1.php",
                            type: "POST",
                            dataType: 'html',
                            data: {"departamento1": departamento1, "localidad1": localidad1},
                            success: function(response)
                            {
                                $('.selector-localidad select').html(response).fadeIn();
                            }
                    });
                    $(".selector-departamento select").change(function() {
                    $(".selector-localidad select").empty();
                         $.getJSON('http://181.88.186.115/rucvm/Views1/persona/getLocalidades2.php?departamento='+$(".selector-departamento select").val(),function(data){
                             $(".selector-localidad select").append('<option value="0">'+'Seleccionar localidad'+'</option>'); 
                             $.each(data, function(id,value){  
                                      $(".selector-localidad select").append('<option value="'+id+'">'+value+'</option>');                                  
                            });
                         });
                    });
                }else{
                    $(".selector-departamento select").change(function() {
                   $(".selector-localidad select").empty();
                         $.getJSON('http://181.88.186.115/rucvm/Views1/persona/getLocalidades.php?departamento='+$(".selector-departamento select").val(),function(data){
                             $(".selector-localidad select").append('<option value="0">'+'Seleccionar localidad'+'</option>'); 
                             $.each(data, function(id,value){  
                                      $(".selector-localidad select").append('<option value="'+id+'">'+value+'</option>');                                  
                            });
                         });
                    });
                }
});

// COMBO comisarias
$(document).ready(function() {
            var idcomisaria1 = $('#idcomisaria1').val();           
                    $.ajax({
                            url: "http://181.88.186.115/rucvm/Views1/ficha4/getComisaria.php",
                            type: "POST",
                            dataType: 'html',
                            data: {"idcomisaria1": idcomisaria1},
                            success: function(response)
                            {
                                $('.selector-comisaria select').html(response).fadeIn();
                            }
                    });
                });

// COMBO fiscalias
$(document).ready(function() {
            var idfiscalia1 = $('#idfiscalia1').val();           
                    $.ajax({
                            url: "http://181.88.186.115/rucvm/Views1/cautelar/getFiscalia.php",
                            type: "POST",
                            dataType: 'html',
                            data: {"idfiscalia1": idfiscalia1},
                            success: function(response)
                            {
                                $('.selector-fiscalia select').html(response).fadeIn();
                            }
                    });
                });

// COMBO causas
$(document).ready(function() {
           
            var idcausa1 = $('#idcausa1').val();

           
                    $.ajax({
                            url: "http://181.88.186.115/rucvm/Views1/cautelar/getCausa.php",
                            type: "POST",
                            dataType: 'html',
                            data: {"idcausa1": idcausa1},
                            success: function(response)
                            {
                                $('.selector-causa select').html(response).fadeIn();
                               
                            }
                             
                    });
                });

// COMBO tipomedida
$(document).ready(function() {
            var idtipo_medida1 = $('#idtipo_medida1').val();           
                    $.ajax({
                            url: "http://181.88.186.115/rucvm/Views1/cautelar/getTipomedida.php",
                            type: "POST",
                            dataType: 'html',
                            data: {"idtipo_medida1": idtipo_medida1},
                            success: function(response)
                            {
                                $('.selector-tipomedida select').html(response).fadeIn();
                            }
                    });
                });

// COMBO dependencia de origen
$(document).ready(function() {
            var ca_deporigen1 = $('#ca_deporigen1').val();        
                    $.ajax({
                            url: "http://181.88.186.115/rucvm/Views1/cautelar/getOficinas.php",
                            type: "POST",
                            dataType: 'html',
                            data: {"ca_deporigen1": ca_deporigen1},
                            success: function(response)
                            {
                                $('.selector-oficinas select').html(response).fadeIn();
                            }
                    });
                });