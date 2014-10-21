
<ul id='ventasmenu' class="nav nav-tabs nav-stacked main-menu">
	<li class="nav-header hidden-tablet">Ventas</li>
	<li><a class="ajax-link" href="./ventas-cambio-id">
		<i class="icon-refresh"></i><span class="hidden-tablet"> Cambiar Ids Ventas</span>
	</a></li>
	<li><a class="ajax-link" href="./ventas-fallidas">
		<i class="icon-random"></i><span class="hidden-tablet"> Reenviar Peticiones de ventas fallidas</span>
	</a></li>
	<li><a class="ajax-link" href="./ventas-revertir">
		<i class="icon-repeat"></i><span class="hidden-tablet"> Revertir Id ventas</span>
	</a></li>
	<li><a class="ajax-link" href="./ventas-xml">
		<i class="icon-font"></i><span class="hidden-tablet"> Enviar XML custom</span>
	</a></li>
	<li><a class="ajax-link" href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
</ul>

	<script type="text/javascript">
		var $ventasmenu = $('ul#ventasmenu');
		$('a', $ventasmenu).on('click', function(){
			var view = $(this).attr('data-path');
			console.log(view)
			$().getAtmMenu({'params':'one','view': view});

		});

		</script>