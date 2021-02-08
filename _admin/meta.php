<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<link rel="stylesheet" type="text/css" href="../css/stilo2.css">
<script src="http://code.jquery.com/jquery-latest.js"></script>



<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/bootstrap.js"></script>

<script src="../alertifyjs/alertify.js"></script>
<link rel="stylesheet" type="text/css" href="../alertifyjs/css/alertify.css">
<link rel="stylesheet" type="text/css" href="../alertifyjs/css/themes/default.css">





	<script>
	$(document).ready(function() {
    $('#formulario').submit(function(e) {
        e.preventDefault();
        $.ajax({
			url: "../bin/asignarE.php",
            type: "post",
            data: $(this).serialize(),
            success: function (r) {
				$("#esp").load(" #esp");
                $("#res").html(r);
					}
        
                    
       });
     });

     $('#formulario3').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../bin/subirEspecialidad.php",
            type: "post",
            
        
                    
       });
     });
});
</script>






<script>
function enviar(destino){
 document.formulario3.action=destino;
 document.formulario3.submit();
}



</script>
