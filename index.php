<?php include 'Vista/Navigation.php'; ?>
	
<?php 
	if (isset($_GET['home'])){
		include 'Vista/Home.php';
	}
	if (isset($_GET['formulario'])){
		include 'Vista/Formulario.php';
	}
	
?>

	<div id="content">
		<h3>Content</h3>
	</div>
	
	<footer>
	<p> Cualquier duda o consulta comuniquese a: </p>
	</footer>
</body>
</html>