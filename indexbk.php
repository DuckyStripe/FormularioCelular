<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/styles.css" />
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
	<title>Form</title>
</head>

<body>
	<header>
		<img src="/img/CFELogo.png" alt="LogoCFE">
	</header>
	<div class="centrado">
		<form action="#">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col listas">
						<label class="form-label labe" for="name">División:</label> <br />
						<input type="text" class="form-control" name="Division" id="Division" placeholder="División" required />

						<label class="form-label labe" for="name">Telefono Fijo:</label><br />
						<input type="phone" class="form-control" name="TelFijo" id="TelFijo" placeholder="55 5555 5555" required />

						<label class="form-label labe" for="name">Telefono Celular:</label><br />
						<input class="form-select" type="phone" name="TelCel" id="TelCel" placeholder="55 5555 5555" required />

						<label class="form-label labe" for="name">Numero de Servicio:</label><br />
						<input class="form-select" type="number" name="NumberService" id="NumberService" placeholder="012345678912" required />

					</div>
					<div class="col listas">
						<label class="form-label labe" for="phone">Area (Cuenta):</label><br />
						<input type="text" class="form-control" name="Area" id="Area" placeholder="20DP21A018882495" required />

						<label class="form-label labe" for="email">Zona:</label><br />
						<input type="text" class="form-control" name="Zona" id="Zona" placeholder="DP21A" required />

						<label class="form-label labe" for="email">Colonia:</label><br />
						<input type="text" class="form-control" name="Colonia" id="Colonia" placeholder="M21271 - OBRERA" required />
						<label class="form-label labe" for="email">Solicitudes:</label><br />
						<input type="TEXT" class="form-control" name="Solicitudes" id="Solicitudes" placeholder="M2132713588" required />


					</div>
				</div>
				<div class="row">
					<label class="form-label labe" for="email">Observaciones:</label><br />
					<input type="TEXTAREA" class="form-control" name="Solicitudes" id="Solicitudes" placeholder="Observaciones" required />
				</div>
				<div class="row boton">
					<input type="submit" class="btn btn-success" value="Enviar" />
				</div>
			</div>

	</div>
	</form>
	</div>
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>