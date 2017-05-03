<?php $__env->startSection('contenido'); ?>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar cliente: <?php echo e($persona->nombre); ?></h3>
			<?php if(count($errors)>0): ?>
			<div class="alert alert-danger">
				<ul>
				<?php foreach($errors->all() as $error): ?>
					<li><?php echo e($error); ?></li>
				<?php endforeach; ?>
				</ul>
			</div>
			<?php endif; ?>
		</div>
	</div>
			

			<?php echo Form::model($persona,['method'=>'PATCH','route'=>['ventas.cliente.update',$cliente->idpersona]]); ?>

            <?php echo e(Form::token()); ?>

           
	<<div class="row">
	
		<div class="col-lg-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" required value="<?php echo e($persona->nombre); ?>" class="form-control" placeholder="Nombre...">
            </div>
		</div>
		

	<div class="col-lg-6 col-sm-6 col-xs-12">
		<div class="form-group">
            	<label for="direccion">Direccion</label>
            	<input type="text" name="direccion" required value="<?php echo e($persona->direccion); ?>" class="form-control" placeholder="Direccion...">
            </div>
		</div>

		  <div class="col-lg-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label>Documento</label>
            	<select name="tipo_documento" class="form-group">
            	<?php if($persona->tipo_documento == 'CC'): ?>
            		<option value="CC" selected>CC</option>
            		<option value="TI">TI</option>
					<option value="pasaporte">Pasaporte</option>
					<?php elseif($persona->tipo_documento == 'TI'): ?>
            		<option value="CC" >CC</option>
            		<option value="TI" selected>TI</option>
					<option value="pasaporte">Pasaporte</option>
					<?php else: ?>
            		<option value="CC" >CC</option>
            		<option value="TI">TI</option>
					<option value="pasaporte" selected>Pasaporte</option>
					<?php endif; ?>	            	
            	</select>
            </div>
		</div>

		<div class="col-lg-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="num_documento">Numero de Documento</label>
            	<input type="text" name="num_documento" required value="<?php echo e(old('num_documento); ?>" class="form-control" placeholder="Numero de Documento ...">
            </div>
		</div>

		<div class="col-lg-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="telefono">Telefono</label>
            	<input type="text" name="telefono" required value="<?php echo e(old('telefono')); ?>" class="form-control" placeholder="Telefono...">
            </div>
		</div>

		<div class="col-lg-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="email">Email</label>
            	<input type="email" name="email" equired value="<?php echo e(old('email')); ?>" class="form-control" placeholder="Email...">
            </div>
		</div>

		

		<div class="col-lg-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
		</div>
	
	</div>
		
            
			<?php echo Form::close(); ?>		
            
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>