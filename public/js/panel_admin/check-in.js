var conc = '';
$("#id_btn_number1").click(function(){
    if (conc.length<9){
        conc +=  "1";
        $("#id_pac_rut").val(conc);
    }
});
$("#id_btn_number2").click(function(){
    if (conc.length<9){
        conc +=  "2";
        $("#id_pac_rut").val(conc);
    }
});
$("#id_btn_number3").click(function(){
    if (conc.length<9){
        conc +=  "3";
        $("#id_pac_rut").val(conc);
    }
});
$("#id_btn_number4").click(function(){
    if (conc.length<9){
        conc +=  "4";
        $("#id_pac_rut").val(conc);
    }
});
$("#id_btn_number5").click(function(){
    if (conc.length<9){
        conc +=  "5";
        $("#id_pac_rut").val(conc);
    }
});
$("#id_btn_number6").click(function(){
    if (conc.length<9){
        conc +=  "6";
        $("#id_pac_rut").val(conc);
    }
});
$("#id_btn_number7").click(function(){
    if (conc.length<9){
        conc +=  "7";
        $("#id_pac_rut").val(conc);
    }
});
$("#id_btn_number8").click(function(){
    if (conc.length<9){
        conc +=  "8";
        $("#id_pac_rut").val(conc);
    }
});
$("#id_btn_number9").click(function(){
    if (conc.length<9){
        conc +=  "9";
        $("#id_pac_rut").val(conc);
    }
});
$("#id_btn_number0").click(function(){
    if (conc.length<9){
        conc +=  "0";
        $("#id_pac_rut").val(conc);
    }
});
$("#id_btn_numberK").click(function(){
    if (conc.length<9){
        conc +=  "K";
        $("#id_pac_rut").val(conc);
    }
});
$("#id_btn_numberX").click(function(){
    const str = $("#id_pac_rut").val();
    const newStr = str.slice(0, -1)
    $("#id_pac_rut").val(newStr);

});

var Fn = {
    // Valida el rut con su cadena completa "XXXXXXXX-X"
    validaRut : function (rutCompleto) {
        var rutCompleto_ =  rutCompleto.replace(/\./g, "");

        if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test( rutCompleto_ ))
            return false;
        var tmp     = rutCompleto_.split('-');
        var digv    = tmp[1]; 
        var rut     = tmp[0];
        if ( digv == 'K' ) digv = 'k' ;
        return (Fn.dv(rut) == digv );
    },
    dv : function(T){
        var M=0,S=1;
        for(;T;T=Math.floor(T/10))
            S=(S+T%10*(9-M++%6))%11;
        return S?S-1:'k';
    }
}

$("#id_btn_aceptar").click(function(){
    let rut = $("#id_pac_rut").val();

    var actual = rut.replace(/^0+/, "");
    
    if (actual != '' && actual.length > 1) {
        var sinPuntos = actual.replace(/\./g, "");
        var actualLimpio = sinPuntos.replace(/-/g, "");
        var inicio = actualLimpio.substring(0, actualLimpio.length - 1);
        var rutPuntos = "";
        var i = 0;
        var j = 1;
        for (i = inicio.length - 1; i >= 0; i--) {
            var letra = inicio.charAt(i);
            rutPuntos = letra + rutPuntos;
            if (j % 3 == 0 && j <= inicio.length - 1) {
                rutPuntos = "." + rutPuntos;
            }
            j++;
        }
        
        var dv = actualLimpio.substring(actualLimpio.length - 1);
        rutPuntos = rutPuntos + "-" + dv;
        
        if (Fn.validaRut(rutPuntos)) {
            $("#id_pac_rut").val(rutPuntos);
            $("#id_pac_rut").val();
        } else {
            ohSnap('RUT incorrecto!', {color: 'orange', 'duration':'5000'});
        }
        
    }
});