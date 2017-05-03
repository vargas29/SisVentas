
@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar cliente: {{ $persona->nombre}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>
			

			{!!Form::model($persona,['method'=>'PATCH','route'=>['ventas.cliente.update',$cliente->idpersona]])!!}
            {{Form::token()}}
           
	<<div class="row">
	
		<div class="col-lg-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" required value="{{$persona->nombre}}" class="form-control" placeholder="Nombre...">
            </div>
		</div>
		

	<div class="col-lg-6 col-sm-6 col-xs-12">
		<div class="form-group">
            	<label for="direccion">Direccion</label>
            	<input type="text" name="direccion" required value="{{$persona->direccion}}" class="form-control" placeholder="Direccion...">
            </div>
		</div>

		  <div class="col-lg-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label>Documento</label>
            	<select name="tipo_documento" class="form-group">
            	@if ($persona->tipo_documento == 'CC')
            		<option value="CC" selected>CC</option>
            		<option value="TI">TI</option>
					<option value="pasaporte">Pasaporte</option>
					@elseif ($persona->tipo_documento == 'TI')
            		<option value="CC" >CC</option>
            		<option value="TI" selected>TI</option>
					<option value="pasaporte">Pasaporte</option>
					@else($persona->tipo_documento == 'pasaporte')
            		<option value="CC" >CC</option>
            		<option value="TI">TI</option>
					<option value="pasaporte" selected>Pasaporte</option>
					@endif	            	
            	</select>
            </div>
		</div>

		<div class="col-lg-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="num_documento">Numero de Documento</label>
            	<input type="text" name="num_documento" required value="{{old('num_documento}}" class="form-control" placeholder="Numero de Documento ...">
            </div>
		</div>

		<div class="col-lg-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="telefono">Telefono</label>
            	<input type="text" name="telefono" required value="{{old('telefono')}}" class="form-control" placeholder="Telefono...">
            </div>
		</div>

		<div class="col-lg-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="email">Email</label>
            	<input type="email" name="email" equired value="{{old('email')}}" class="form-control" placeholder="Email...">
            </div>
		</div>

		

		<div class="col-lg-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
		</div>
	
	</div>
		
            
			{!!Form::close()!!}		
            
	
@endsection