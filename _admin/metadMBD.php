 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../MDB/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../MDB/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="../MDB/css/style.css">

  <link rel="stylesheet" href="../css/estilo.css">





<!-- MDBootstrap Datatables  -->
<link href="../MDB/css/addons/datatables.min.css" rel="stylesheet">

  <!-- jQuery -->
  <script type="text/javascript" src="../MDB/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../MDB/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../MDB/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../MDB/js/mdb.min.js"></script>
  

  <!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="../MDB/js/addons/datatables.min.js"></script>


<!--SWEET ALERT2-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <!-- ALERTIFY -->

<script src="../alertifyjs/alertify.js"></script>
<link rel="stylesheet" type="text/css" href="../alertifyjs/css/alertify.css">
<link rel="stylesheet" type="text/css" href="../alertifyjs/css/themes/default.css">





<script type="text/javascript">
	
$(document).ready(function(){

  // Search all columns
  $('#txt_searchall').keyup(function(){
    // Search Text
    var search = $(this).val();

    // Hide all table tbody rows
    $('table tbody tr').hide();

    // Count total search result
    var len = $('table tbody tr:not(.notfound) td:contains("'+search+'")').length;

    if(len > 0){
      // Searching text in columns and show match row
      $('table tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){
        $(this).closest('tr').show();
      });
    }else{
      $('.notfound').show();
    }

  });

  // Search on name column only
  $('#txt_name').keyup(function(){
    // Search Text
    var search = $(this).val();

    // Hide all table tbody rows
    $('table tbody tr').hide();

    // Count total search result
    var len = $('table tbody tr:not(.notfound) td:nth-child(2):contains("'+search+'")').length;

    if(len > 0){
      // Searching text in columns and show match row
      $('table tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){
         $(this).closest('tr').show();
      });
    }else{
      $('.notfound').show();
    }

  });

});

// Case-insensitive searching (Note - remove the below script for Case sensitive search )
$.expr[":"].contains = $.expr.createPseudo(function(arg) {
   return function( elem ) {
     return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
   };
});



</script>












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
