<?php include("header.php") ?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<center><h1>Bienvenido al portal de automóvil</h1></center>
			</div>

			<div class="articulo">
				<article>
				<p> Ingrese los datos que se le pide. <br><br><br></p>
						
						<form action="#" method="post">
							<p>Año del modelo: <select name="modelo">
								<option>2015</option>
								<option>2016</option>
								<option>2017</option>
								<option>2018</option>
								<option>2019</option>
								<option>2020</option>
								<option>2021</option>
							</select></p><br>
							<p>Tipo de tracción: <select name="traccion">
								<option>AWD</option>
								<option>FWD</option>
								<option>RWD</option>
								<option>4X4</option>
							</select></p><br>
							<p>Plazo de crédito: <select name="credito">
								<option>1 mes sin intereses</option>
								<option>2 meses sin intereses</option>
								<option>3 meses sin intereses</option>
								<option>6 meses con intereses</option>
								<option>1 año con intereses</option>
								<option>2 años con intereses</option>
							</select></p><br>
							<p>Cuero interior: Sí <input type="radio" name="cuero" value="si"> No <input type="radio" name="cuero" value="no"></p><br>

							<p>Detalles adicionales deseados (opcional): <textarea name="detalles" cols="50" rows="4"></textarea></p><br>
							<p><input type="reset" name="reset" value="Enviar"></p>
							</form>
				</article>
			</div>

			<?php include("sidebar.php") ?>
		</div>
	</section>
	
    <?php include("footer.php") ?>
</body>
</html>