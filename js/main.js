$(document).ready(function() {
    $('#example').DataTable({

        "ajax":{
            "url": "php/consulta.php",
            "method": "POST"
        },
        "columns":[
            {"data": "id"},
            {"data": "nombre"},
            {"data": "documento"},
            {"data": "tel"},
            {"data": "direccion"},
            {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"}
        ]
    });
} );








// function jax(){
//     var nombre= document.getElementById('nombre').value;
//     var edad  = $.trim($('#edad').val());

//     $.ajax({
//         url: "php/consulta.php",
//         type: "POST",
//         dataType: "json",
//         data: {"nom": nombre, "edad": edad},
//         success: function(data){
//             alert(data);
//         },
//         error: function(x){
//             alert(x);
//         }
//     })
// }