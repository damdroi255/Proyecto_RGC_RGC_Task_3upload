<table>
	<tr>
		<?php
			echo $total_registros." Registros en ".$total_paginas." P&aacute;ginas.";
			if($total_registros){
				echo "<td>&nbsp;<a href='index.php?opcion=".$variable_pie."&pagina=1'> << </a>&nbsp;</td>";
				if(($pagina-1)>0){
					echo "<td>&nbsp;<a href='index.php?opcion=".$variable_pie."&pagina=".($pagina-1)."'> < </a>&nbsp;</td>";
				}
				for($i=1;$i<=$total_paginas;$i++){
					if($pagina==$i) {
						echo "<td>&nbsp;<strong><a href='#'> (".$pagina.") </a></strong>&nbsp;</td>";
					}else{
						echo "<td>&nbsp;<a href='index.php?opcion=".$variable_pie."&pagina=$i'> $i </a>&nbsp;</td>";
					}
				}
				if(($pagina+1)<=$total_paginas){
					echo "<td>&nbsp;<a href='index.php?opcion=".$variable_pie."&pagina=".($pagina+1)."'> > </a>&nbsp;</td>";
				}
				echo "<td>&nbsp;<a href='index.php?opcion=".$variable_pie."&pagina=".($total_paginas)."'> >> </a>&nbsp;</td>";
			}
		?>
	</tr>
</table>


