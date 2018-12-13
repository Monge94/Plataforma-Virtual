<!-- para repasar, quiwres un sistema de aula virtual, q tenga las siguientes caracteristicas: q maneje 
* materias
* secciones
* estudiantes
* profesores
* publicaciomes y comentarios
* subida de archivos
* examenes
* notas

matematica, fisica, quimica, ingles, biologia, geografia orientacion y convivencia ciencias sociales
 -->



<div class="container my-5">
	<div class="row">
		
		<?php foreach ($materias as $materia): ?>
			
			<div class="col-md-3 col-lg-3">
				<div class="card hoverable">
					<img class="card-img-top" src="<?= base_url('application') ?>/assets/29.jpg" alt="Card image cap">
					<div class="card-body">
						<h4 class="card-title"><a><?= $materia->materia ?></a></h4>
						<p class="card-text text-justify"><?= $materia->descripcion ?></p>
						

						<?php if( $user['role'] == 'alumno' ): ?>
							
							<?= anchor("estudiante/$materia->materia/$materia->seccion", 'Entrar', 'class="btn btn-primary"') ?>
						<?php else: ?>
						
							<?= anchor("profesor/$materia->materia/$materia->seccion", 'Entrar', 'class="btn btn-primary"') ?>
						<?php endif ?>
					
					</div>
				</div>
			</div>

		<?php endforeach ?>
	
	</div>
</div>

<?php if ( $user['role'] == 'profesor' ): ?>
	
	<button class="btn-floating red" data-toggle="modal" data-target="#AddClass">
	  <i class="fas fa-plus"></i>
	</button>

	<div class="modal fade" id="AddClass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Crear clase nueva.</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					
					<?= form_open('clasenueva') ?>

						<input type="hidden" name="personaid" value="<?= $personaid[0]->id_persona ?>">

						<select class="browser-default custom-select" name="materia">
							<option selected disabled>Selecciona una materia</option>

							<?php foreach ($allmaterias as $materia): ?>
								<option value="<?= $materia->id_materia ?>"><?= $materia->materia ?></option>
							<?php endforeach ?>
						</select>

						<div class="form-group mt-3">
							<label for="seccion">Sección</label>
							<input type="text" class="form-control" id="seccion" name="seccion" >
						</div>

						<div class="d-flex justify-content-end mt-4">
							<button type="submit" class="btn btn-primary p-2 ">
								<i class="fas fa-send mr-2"></i> Crear clase
							</button>
						</div>
					
					</form>

				</div>
			</div>
		</div>
	</div>
<?php endif ?>

<!-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe-AqloYzBy-EEojRb4iEHoC9tnhwqBH5v3Xm7XGhiJmxRoeg/viewform?embedded=true" width="640" height="1569" frameborder="0" marginheight="0" marginwidth="0">Cargando...</iframe> -->