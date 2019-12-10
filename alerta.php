<?php 
function mostrarAlerta($tipo){

	if (isset($_SESSION[$tipo])){

		echo "<div class='alert alert-$tipo'>";
		echo $_SESSION[$tipo];
		echo "</div>";

		unset($_SESSION[$tipo]);
	}
}

?>