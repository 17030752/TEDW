function myfunction(){
    //alert('hola mundo boton 2 desde funcion');
    document.getElementById('msg1').innerHTML="this is a content from msg 1";
}
$(document).ready(function () {
    $('#btn3').click(function () { 
       alert('hello from jquery');
        
    });
    $('#btn4').click(function () { 
        $('#btn4').click(function () { 
            $('#msg4').html('this a new content from jquery');
            $('#msg5').html('this a new content from jquery');
            $('#msg6').html('this a new content from jquery');
            $('#msg4').css('color','red');
            $('#msg5').css('color','green');
            $('#msg6').css('color','blue');
            $('.msg').css('color','yellow');
            $('.msg').css({'font-size':'30pt','text-align':'center'});
        });
         
     });
     $('#btn5').click(function () { 
        alert('hello from jquery');
         $('#firstname').val("valor de jquery");
         $('#lastname').val("valor de jquery2");
         $('input').css({'color':'#FF0000','font-size':'20pt'});
     });
});
