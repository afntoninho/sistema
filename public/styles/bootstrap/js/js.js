$(function() {
var availableTags = [
"ActionScript",
"AppleScript",
"Asp",
"BASIC",
"C",
"C++",
"Clojure",
"COBOL",
"ColdFusion",
"Erlang",
"Fortran",
"Groovy",
"Haskell",
"Java",
"JavaScript",
"Lisp",
"Perl",
"PHP",
"Python",
"Ruby",
"Scala",
"Scheme"
];
$( "#policial1" ).autocomplete({
source: availableTags
});
/*$.ajax({
                                url: "/sisoc/public/ocorrencia/delete",
                                
                                dataType: "json",
                                success: function(data) {
                                    
                                    alert(data[0].nome);
                                }
                                });
                                

                                
$("#policial2").autocomplete({
    source: "/sisoc/public/ocorrencia/delete",
    minLength: 1,
    select: function( click, policial ) {
        $("#policial2").val( policial.item.nome );
        $("#matricula2").val( policial.item.matricula );
        $("#id_policial2").attr( "value", policial.item.id_policial );
      }
    
                        
});*/
    $("#policial3").click(function(){
        $.ajax({
                url: "/sisoc/public/ocorrencia/delete",
                type: "POST",
                dataType: "json",
                success: function(data) {
                    alert(data[0].nome);
                    $.map(data, function(item) {
                        alert( {
                            label: item.nome,
                            value: item.nome
                        });
                        alert(item.nome);
                    });
                }});
    });



function pegaArray(){
    var arr = [];
    $.ajax({
                url: "/sisoc/public/ocorrencia/delete",
                dataType: "json",
                success: function(data) {
                    for(var i = 0; i < data.length; i++){
                        arr[i] = data[i].nome;
                    };
                    return arr;
                }
    });
    return arr;
};

var obj = pegaArray();
alert(obj);
     


//for(var i = 0; i < obj.length; i++) {
    //arr[i] = obj[i].nome;
//}
        

$("#policial2").autocomplete({
    source: arr,
    minLength: 1,
    select: function( event, ui ) {
        $("#policial2").val(ui.item.value);
        return false;
    }
    
});






});