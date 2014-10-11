<ul id='ventasmenu' class="nav nav-tabs nav-stacked main-menu">
	<li class="nav-header hidden-tablet">Ventas</li>
	<li><a class="ajax-link" id="change" data-path="sendpay" href="javascript:void(0);">
		<i class="icon-refresh"></i><span class="hidden-tablet"> Enviar petición Pago</span>
	</a></li>
	<li><a class="ajax-link" id="getsalesxml" data-path="vfallidas" href="javascript:void(0);">
		<i class="icon-random"></i><span class="hidden-tablet"> Eliminar Pago</span>
	</a></li>
	<li><a class="ajax-link" id="getsalesxml" data-path="vfallidas" href="javascript:void(0);">
		<i class="icon-repeat"></i><span class="hidden-tablet"> alguna otra cosa</span>
	</a></li>
	<li><a class="ajax-link" href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
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