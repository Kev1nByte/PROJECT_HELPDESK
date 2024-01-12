<?php
    require_once("../../config/conexion.php"); 
    if(isset($_SESSION["usu_id"])){ 
?>

<!DOCTYPE html>
<html>
<head lang="es">

    <?php
        require_once("../MainHead/head.php");
    ?>
	
    <title>Kevin Byte</title>
</head>
<body class="with-side-menu">

    <?php
        require_once("../MainHeader/header.php");
    ?>

	<div class="mobile-menu-left-overlay"></div>
	
    <?php
        require_once("../MainNav/nav.php");
    ?>

    <!-- Contenido     -->
	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12">
					<div class="row">
						<div class="col-sm-4">
	                        <article class="statistic-box green">
	                            <div>
	                                <div class="number" id="lbltotal"></div>
	                                <div class="caption"><div>Total de Tickets</div></div>
	                            </div>
	                        </article>
	                    </div>
						<div class="col-sm-4">
	                        <article class="statistic-box yellow">
	                            <div>
	                                <div class="number" id="lbltotalabierto"></div>
	                                <div class="caption"><div>Total de Tickets Abiertos</div></div>
	                            </div>
	                        </article>
	                    </div>
						<div class="col-sm-4">
	                        <article class="statistic-box red">
	                            <div>
	                                <div class="number" id="lbltotalcerrado"></div>
	                                <div class="caption"><div>Total de Tickets Cerrados</div></div>
	                            </div>
	                        </article>
	                    </div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- Contenido -->
    <?php
        require_once("../MainJs/js.php");
    ?>
    <script type="text/javascript" src="home.js"></script>

<?php

}else{
    header("Location:".Conectar::ruta()."index.php");
}

?>

</body>
</html>