<!DOCTYPE html>
<html>
	<?php require_once('./components/head.php')?>
	<body>
		<?php require_once('./components/navbar.php')?>
    <main role="main">
		<div class="container">
		  <?php require_once("./" . $_GET["page"] . ".php")?>	
		</div>
		</main>
        <script type="text/javascript" src="./assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./assets/js/jquery.mask.js"></script>
        <script type="text/javascript">
            $('.zip').mask('00000-000');
            $('.phone').mask('(00) 0000-00009');
        </script>
	</body>
</html>