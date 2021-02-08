<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


<link rel="stylesheet" type="text/css" href="../css/estiloD.css">





<!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../MD/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../MD/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="../MD/css/style.css">

  <!-- jQuery -->
  <script type="text/javascript" src="../MD/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../MD/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../MD/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../MD/js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>







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
