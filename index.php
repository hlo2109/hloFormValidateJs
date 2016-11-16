<!DOCTYPE html>
<html>
<head>
	<title>hloSubimgJs</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.js"></script>
	<script type="text/javascript" src="hloFormValidateJs.js"></script>
	<script type="text/javascript">
		$(function(){
			$("#example").hloFormValidateJs({
				"style":"top:0px; right:20px; background:#D32F2F; color:#fff; font-size:12px",
				"textEmail":"Email requerido",
				"textNormal":"Campo requerido",
				"mintextarea":50,
				"textTextarea":"No se permiten menos de 50 caracteres.",
				"textPassword":"Mínimo 6 caracteres",
				"expPassword":(/^[a-zA-Z0-9!@#$%^&*]{6,16}$/),
				"textNumber":"Solo números",
				"textText":"Solo texto"

			})
		})
	</script>
</head>
<body>
	<h1>hloFormJs</h1>
	<div class="conform">
		<div class="container">
			 <div class="row">
			    <form id="example" class="col s12">
			      <div class="row">
			        <div class="input-field col s6 ">
			          <input id="first_name" type="text" class="validate">
			          <label for="first_name">First Name</label>
			        </div>
			        <div class="input-field col s6">
			          <input id="last_name" type="text" class="validate">
			          <label for="last_name">Last Name</label>
			        </div>
			      </div>			     
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="password" type="password" data-type="password" class="validate">
			          <label for="password">Password</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="email" type="text" data-type="email" class="validate">
			          <label for="email">Email</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="email" type="text" data-type="text" class="validate">
			          <label for="email">Text</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="email" type="text" data-type="number" class="validate">
			          <label for="email">Number</label>
			        </div>
			      </div>
			      <div class="input-field col s12">
			          <textarea id="textarea1" class="materialize-textarea validate" data-type="textarea" ></textarea>
			          <label for="textarea1">Textarea</label>
			        </div>
			      <button class="btn">Enviar</button>
			    </form>
			  </div>
		</div>
	</div>


	</div>
</body>
</html>