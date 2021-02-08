$(function () {
	$('#form-search').submit(function(e) {
		e.preventDefault();
	})
	$('#buscar').keyup(function(){
		var envio= $('#buscar').val();
		$('#resultado-q').html('<h4><img src="img/loading.gif" width="20" height="20" /> Cargando</h4>');
		$.ajax({
			type: 'post',
			url: 'bin/buscador.php',
			data: ('buscar='+envio),
			success: function(r) {
				if(r != '') {
					$('#resultado-q').html(r);
				}
			}
		})
	})
})