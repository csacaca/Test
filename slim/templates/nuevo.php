<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>DETALLE DEL EMPLEADO</h1>
<a href="../slim/">Retornar al Listado de Empleados</a>
<form method="POST" action="../guardar"></form>
<ul>
	<li><label>Name : </label><input type="text" name="txtName" id="txtName"></li>
	<li><label>Email : </label><input type="text" name="txtEmail" id="txtEmail"></li>
	<li><label>Phone : </label><input type="text" name="txtPhone" id="txtPhone"></li>
	<li><label>Address : </label><input type="text" name="txtAddress" id="txtAddress"></li>
	<li><label>Position : </label><input type="text" name="txtPosition" id="txtPosition"></li>
	<li><label>Salary : </label><input type="text" name="txtSalary" id="txtSalary"></li>
	<li><label>Skills : </label><input type="text" name="txtSkill" id="txtSkill"></li>

</ul>
<a href="guardar">Guardar</a>
<a href="cancelar">Cancelar</a>
<input type="submit" name="btnGuardar" id="btnGuardar" value="Guardar">
</form>

</body>
</html>