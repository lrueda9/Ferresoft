<?php 
    require('verificador.php');
    if (isset($_SESSION['factura'])) {
    }else{
    	header('Location: ?action=XeF6Z1ui1ErToXu9dj31');
    }
?>

<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php require('nav.php');?>
        <!-- Sidebar -->
        <?php require('aside.php');?>
    </nav>

    <!-- Page Content -->
    <?php require('tabla.php');?>
</div>

<?php require('scripts.php');?>
<link href="estilos/misestilos.css" type="text/css" rel="stylesheet" media="screen,projection">
<link href="http://cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
<link href="estilos/tablas/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
<script type="text/javascript" src="estilos/tablas/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="estilos/tablas/data-tables-script.js"></script>