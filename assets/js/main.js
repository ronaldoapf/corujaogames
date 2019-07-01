$(function(){
    $('.mask-cpf').mask("000.000.000-00");
    $('.mask-cep').mask("00000-000");

    $('#confirma-senha').blur(function(){
        var senha1 = $("#senha").val();
        var senha2 = $("#confirma-senha").val();
        
        if(senha1 != senha2){
            alert("Senhas não conferem");
            $('button').css("disabled");
        }

        else $('button').css('enabled');
    });
});