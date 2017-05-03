<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

	table {
    table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr .datosv:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #A9D0F5;
    color: white;
}
	label {
		font-weight: bold;
	  display: block;
	  margin: .5em 0 0 0;
	}
	#body{
		margin: 0 auto;
		padding: 0px;
		width: 100%;
		min-width: 650px;
		font-size: 10;
	}
	-table{float: center;}
	#header{width: 100%;height: 20%;padding: 3px;border: 0;margin: 0; background-color: white;}

	#container{width: 100%;height: 60%;padding: 3px;border: 0;margin: 0; background-color: white;}
	#datosventas{
		width: 80px;
		height: 20%;
		padding: 10px;
		border: 1px;
		margin: 0;
		background-color: white;
		border-radius: 10%;

	}
	#direccion{width: auto;height: auto;padding:3px ;border: 0;margin: 0; background-color: white; text-align: center;position: absolute;;left: 300px;top: 10px;}
	#tipofactura{width: 150px;height: auto;padding:3px ;border: 0;margin: 0; background-color: white; text-align: center;position: absolute;;left: 530px;top: 10px;}
	</style>
</head>
<body>
 	<fieldset style="width: 700px; height: 760px">

 	<div id="header">
 		<div id="foto">
 			
 		</div>
 	</div>

 	<div id="direccion">
 		MFMV <br>
 		Ingenieria y Innovacion<br>
 		NIT :345678<br>
 		XXXXXx<br>
 		XXXXXXX<br>
 		Colombia<br>
 		
 	</div>

 	<div id="tipofactura">
	 	<h3>Factura</h3>
	 	<table>
	 	<tr>
			 <td> Numero Factura De Ingreso :</td><td >XXXXXXXXX</td>
		 </tr>
		 
		<tr>
			 <td> Fecha   : </td><td >XXXXXXXX</td>
		 </tr>
	 	</table>
 	</div>

	<div id="container">
	<fieldset style="width: 660px; border-radius: 4%;">
		<div class="datosventas">
			<table style="min-width: 660px; border: 0px; padding: 1px;margin: 3px">
		<tr>
			 <td colspan="4"  style="background-color:#A9D0F5"><h3 align="center">Datos Ventas</h3></td>
		 </tr>
		 
		<tr>
			 <td> <label for="proveedor">Cliente : </label></td><td style="border: 1px;"><p>{{$ingreso->nombre}}</p></td>
			 <td><label for="tipo_comprobante">Tipo Comprobrante :</label></td><td style="border: 1px;"><p>{{$ingreso->tipo_comprobante}}</p></td>
		 </tr>

		 <tr>
		 	<td><label for="serie_comprobante">Serie de Comprobante : </label></td><td  style="border: 1px;"><p>{{$ingreso->serie_comprobante}}</p></td>
		 	<td><label for="num_comprobante">Numero Comprobante</label></td><td style="border: 1px;"><p>{{$ingreso->num_comprobante}}</p></td>
		 </tr>

		</table>
			
		</div>
		</fieldset>
	<fieldset style="width: 660px; border-radius: 4%;">
		<div class= ="datosv">
		<div class="col-lg-12 col-sm-12  col-md-12 col-xs-12">
		 <table id="detalles" class="table table-striped table-bordered table-condensed ">
		    <thead  style="background-color:#A9D0F5">
		     
		        <th>Opciones</th>
		        <th>Articulo</th>
		        <th>Cantidad</th>
		        <th>Precio Venta</th>
		        <th>Descuento</th>
		        <th>Subtotal</th>
		      
		    </thead>
		  
		    <tbody>
		    @foreach($detalles as $det)
		    <tr>
		    	<td>{{$det->articulo}}</td>
		    	<td>{{$det->cantidad}}</td>
		    	<td>{{$det->precio_venta}}</td>
		    	<td>{{$det->precio_compra}}</td>
		    	<td>{{$det->cantidad*$det->precio_compra}}</td>
		    </tr>
		    @endforeach
		    </tbody>
		      <tfoot>
		    	 <th>TOTAL</th>
		        <th></th>
		        <th></th>
		        <th></th>
		        <th></th>
		        <th><h4 id="total">{{$ingreso->total}}</h4></th>
		    </tfoot>
		  </table>
		</div>
</fieldset>
	
</div>
</fieldset>
</body>
</html>
