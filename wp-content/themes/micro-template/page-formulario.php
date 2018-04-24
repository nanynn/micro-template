<?php get_header(); ?>
	<body>
		<div class="grid max-width">
			<div class="grid--item-12">
				<h2 class="form--title"><?php the_title(); ?></h2>
				<div class="form--content">
					<form action="" method="post" class="grid--item-12">
						<label for="txt--nombre">Nombre:</label>
						<input type="text" class="txt--nombre" name="txt--nombre" placeholder="Lucila Godoy">

						<label for="txt--rut">Rut:</label>
						<input type="text" class="txt--rut" name="txt--rut" placeholder="11.111.111-7">

						<label for="txt--fono">Teléfono:</label>
						<input type="text" class="txt--fono" name="txt--fono" placeholder="912345678">

						<label for="txt--seudonimo">Seudonimo:</label>
						<input type="text" class="txt--seudonimo" name="txt--seudonimo" placeholder="Gabriela Mistral">
						
						<label for="txt--seudonimo">Cuento:</label> <br>
						<input type="text" class="txt--seudonimo grid--item-9" name="txt--seudonimo" placeholder="Puedes subir un archivo Docs o PDF de hasta 10mb">
						<a href="#" class="btn--success grid--item-3">Subir</a>
					</form>
					<form action="" method="get" class="grid--item-12">
						<input type="checkbox" value="first_checkbox" class="form--check">
						<label for="text">He leido y acepto las bases 
							<a href="http://micro.dev/wp-content/uploads/2018/04/bases-microcuentos-2018.pdf" class=" form--btn__download">Descargar Bases</a>
						</label>

						<input type="submit" value="Enviar Cuento" class="btn--disabled form--btn">
					</form>
					
				</div>
			</div>
		</div>
	</body>
<?php get_footer(); ?>	