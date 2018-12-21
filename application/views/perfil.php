<div class="container-fluid my-5 px-5">
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					<!-- <p class="mb-5"><?php var_dump($perfil) ?></p> -->

					<div class="row mb-4">
						<div class="col d-flex justify-content-end">
							<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editar"><i class="fas fa-edit mr-2"></i>Editar</button>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<p class="font-weight-bold">Nombre:</p>
						</div>
						<div class="col-md-4">
							<p><?= $perfil[0]->nombre ?></p>
						</div>
						<div class="col-md-2">
							<p class="font-weight-bold">Apellido:</p>
						</div>
						<div class="col-md-4">
							<p><?= $perfil[0]->apellido ?></p>
						</div>
					</div>

					<div class="row">
						<div class="col-md-2">
							<p class="font-weight-bold">Email:</p>
						</div>
						<div class="col-md-4 ">
							<p><?= $perfil[0]->correo ?></p>
						</div>
						<div class="col-md-2">
							<p class="font-weight-bold text-nowrap">Teléfono:</p>
						</div>
						<div class="col-md-4">
							<p><?= $perfil[0]->telefono ?></p>
						</div>
					</div>

					<div class="row">
						<div class="col-md-2">
							<p class="font-weight-bold">Usuario:</p>
						</div>
						<div class="col-md-4">
							<p><?= $perfil[0]->usuario ?></p>
						</div>
						<div class="col-md-2">
							<p class="font-weight-bold">Clave:</p>
						</div>
						<div class="col-md-4">
							<p><?= $perfil[0]->clave ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<p class="font-weight-bold">Foto de Perfil:</p>
					<div class="view overlay zoom">

						<?php if (isset($perfil[0]->foto_perfil)): ?>
							<img src="<?= base_url('application/third_party/').$perfil[0]->foto_perfil ?>" class="img-thumbnail img-fluid" alt="404 image not found">

						<?php else: ?>
							<img src="<?= base_url('application/assets/user.png') ?>" class="img-thumbnail img-fluid" alt="404 image not found">
						<?php endif ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php var_dump($perfil) ?>


<!-- Modal -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Editar perfil</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?= form_open_multipart('Profesores/editperfil') ?>

				<input type="hidden" name="idpersona" value="<?= $perfil[0]->id_persona ?>">

				<div class="modal-body md-form">
					<div class="form-row mb-4">
						<div class="col form-group">
							<i class="fas fa-user prefix"></i>
							<input type="text" id="nombre" class="form-control" name="nombre" value="<?= $perfil[0]->nombre ?>">
							<label for="nombre">Nombre</label>
						</div>
						<div class="col form-group">
							<i class="fas fa-user prefix"></i>
							<label for="apellido">Apellido</label>
							<input type="text" id="apellido" class="form-control" name="apellido" value="<?= $perfil[0]->apellido ?>">
						</div>
					</div>

					<div class="form-row mb-4">
						<div class="col form-group">
							<i class="fas fa-envelope prefix"></i>
							<label for="email">Email</label>
							<input type="email" id="email" class="form-control validate" name="email" value="<?= $perfil[0]->correo ?>">
						</div>
						<div class="col form-group">
							<i class="fas fa-phone prefix"></i>
							<label for="telefono">Teléfono</label>
							<input type="text" id="telefono" class="form-control" name="telefono" value="<?= $perfil[0]->telefono ?>">
						</div>
					</div>

					<div class="form-row mb-4">
						<div class="col form-group">
							<i class="fas fa-user prefix"></i>
							<label for="user">Usuario</label>
							<input type="text" id="user" class="form-control" name="usuario" value="<?= $perfil[0]->usuario ?>">
						</div>
						<div class="col form-group">
							<i class="fas fa-lock prefix"></i>
							<label for="clave">Clave</label>
							<input type="password" id="clave" class="form-control" name="clave" value="<?= $perfil[0]->clave ?>">
						</div>
					</div>

					<div class="form-row">
						<div class="col file-field">
							<div class="btn btn-primary btn-sm float-left p-2">
								<i class="fas fa-upload mr-2"></i><span>Choose image</span>
								<input type="file" name="image" accept="image/*">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" placeholder="Upload your image file">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary btn-sm">Editar</button>
				</div>
			</form>
		</div>
	</div>
</div>

