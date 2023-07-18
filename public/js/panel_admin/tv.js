
$.ajax({
    type: "GET",
    dataType: "json",
    url: 'name archivo carga de pacientes espera',
}).done( function(data) {
    var table='<div id="div_panel">';     
    var estado;
    $("#contenido_grid").html('');
        for (var i = 0; i < data.length; i++) {
            table+='<div class="row" id="row_contenido_grid">'
                    +'<div class="col .border-default"> val del archivo php, formato ('+data[i].EJEMPLO+')</div>'
                    +'<div class="col .border-default"> val del archivo php, formato ('+data[i].EJEMPLO+')</div>'
                    +'<div class="col .border-default"> val del archivo php, formato ('+data[i].EJEMPLO+')</div>'
                    +'<div class="col .border-default"> val del archivo php, formato ('+data[i].EJEMPLO+')</div>'
                    +'<div class="col .border-default"> val del archivo php, formato ('+data[i].EJEMPLO+')</div>'
                    +'</div>';
        }
    table+='</div>';
    $("#contenido_grid").append(table);
});