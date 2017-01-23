<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<form class="contact_form" action="#" id="contact_form" runat="server">
		<h2>Employee</h2>
		<fieldset>
		<legend>Datos Personales</legend>
		<div>
			<ul>
				<li>
					<label for="name">Name:</label>
					<input type="text" placeholder="<Name>" title="Ingrese el nombre del Empleado" required />
				</li>
				<li>
					<label>Gender:</label>
					<input type="radio" name="animal" value="Cat" />F
                    <input type="radio" name="animal" value="Dog" />M<br />
				</li>
				<li>
					<label for="name">Age:</label>
					<input type="number" name="txtAge" id="txtAge" min="1" max="99999" size="5" placeholder="Age" title="Ingrese la edad del empleado" required>
				</li>
			</ul>
		</div>
		</fieldset>
		<fieldset>
		<legend>Datos Laborales</legend>
		<div>
			<ul>
				<li>
					<label>Is On Line:</label>
					<input type="radio" name="animal" value="Cat" />SI
                    <input type="radio" name="animal" value="Dog" />NO<br />
				</li>
				<li>
					<label for="name">Salary:</label>
					S/.<input type="number" name="txtSalary" min="1" max="9999" size="4" placeholder="Salary" title="Ingrese el Salario del Empleado" required>
				</li>

				<li>
					<label for="name">Position:</label>
					<select>
						<option value="0">-- Seleccione Posicion --</option>
					  	<option value="Analista Programador">Analista Programador</option>
					  	<option value="Analista de Sistemas">Analista de Sistemas</option>
					  	<option value="Arquitecto de Software">Arquitecto de Software</option>
					  	<option value="Desarrollador de Software">Desarrollador de Software</option>
					  	<option value="Diseñador">Diseñador</option>
					  	<option value="Tester">Tester</option>
					</select>
				</li>
				<li>
					<label for="email">Email:</label>
					<input type="email" name="txtEmail" id="txtEmail" placeholder="info@developerji.com" required />
					<span class="form_hint">Formato correcto: "name@something.com"</span>
				</li>
				<li>
					<label for="">Address:</label>
					<textarea name="txtAddress" id="txtAddress" cols="40" rows="1" placeholder="Address" required></textarea>
				</li>
				<li>
					<label>Skill:</label>
					<ul>
						<li><Input type = "Checkbox" Name ="checkboxes" value="Google Chrome">Python</li>
					    <li><Input type = "Checkbox" Name ="checkboxes" value="Firefox">CSS</li>
					    <li><Input type = "Checkbox" Name ="checkboxes" value="Safari">C#</li>
					    <li><Input type = "Checkbox" Name ="checkboxes" value="Internet Explorer" >JS</li>
					    <li><Input type = "Checkbox" Name ="checkboxes" value="Opera" >Lisp</li>
				    </ul>
				</li>
			</ul>
		</div>
		</fieldset>
		<br>
		<button class="submit" type="submit">Guardar</button>
		<button class="submit" type="submit">Cancelar</button>
	</form>

</body>
</html>