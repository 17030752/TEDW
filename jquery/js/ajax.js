$(document).ready(initpage);
function initpage(){
    $('#example').DataTable();
    $('#btn').click(function () { 
        $.get('myscript.php').done(function(data){
            console.log(data);
            $('#welcome').html(data);
               }).fail(function(error){
                   console.log(error);
               });
          
      });
      $('#btn2').click(function () { 
        $.get('people.php').done(function(data){
           $.each(data, function (indexInArray, valueOfElement) { 
                $('#tblpeople > tbody:last-child').append(
                    '<tr>'+
                    '<td>'+ valueOfElement.id+'</td>'+
                    '<td>'+ valueOfElement.name+'</td>'+
                    '<td>'+valueOfElement.phone+'</td>'+
                    '<td>'+valueOfElement.address+'</td>'+
                    '<td>'+valueOfElement.email+'</td>'+
                    '</tr>'
                );
           });
      }).fail(function(error){
          console.log(error);
      });
    });
}