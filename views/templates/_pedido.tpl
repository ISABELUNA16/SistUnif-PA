<!DOCTYPE html>
<html>
	<head>
		<title>Sky Forms</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="views/css/pedido.css">
		<link rel="stylesheet" href="views/css/font-awesome.css">
		<link rel="stylesheet" href="views/css/forms-pedido.css">
		<link rel="stylesheet" href="views/css/tabpedido.css">
		<link rel="stylesheet" href="views/css/tab-pedido.css">
	</head>
	<body class="bg-blue">
		<div class="body body-s">
			<div class="sky-tabs sky-tabs-pos-top-left sky-tabs-response-to-icons">
				<input type="radio" name="sky-tabs" checked id="sky-tab1" class="sky-tab-content-1">
				<label for="sky-tab1"><span><span><i class="fa fa-bolt"></i>Nuevo</span></span></label>

				<input type="radio" name="sky-tabs" id="sky-tab2" class="sky-tab-content-2">
				<label for="sky-tab2"><span><span><i class="fa fa-picture-o"></i>Buscar</span></span></label>

				<input type="radio" name="sky-tabs" id="sky-tab3" class="sky-tab-content-3">
				<label for="sky-tab3"><span><span><i class="fa fa-cogs"></i>Seguimiento</span></span></label>

				<input type="radio" name="sky-tabs" id="sky-tab4" class="sky-tab-content-4">
				<label for="sky-tab4"><span><span><i class="fa fa-globe"></i>Reporte</span></span></label>

				<ul>
					<li class="sky-tab-content-1">
					 <div>
						<h1>Nuevo Pedido</h1>
						<form action="" class="sky-form">
						 <fieldset>
						    <div class="row">
							<section class="col col-5">
							  <label class="input">
								<i class="icon-append icon-users"></i>
								<input type="text" placeholder="Nombre alumno">
								<!--<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>-->
								<br>	

								<input type="text" placeholder="Código Alumno">
								<br>
								<input type="text" placeholder="Carrera Profesional">
								<br>
								<input type="text" placeholder="Sexo">
							  </label>
							</section>
							 </div>
							</fieldset>
						  <fieldset>
						  <div class="row">
							 <div class="part2" >
								 <section class="col col-5">
								    <label class="input">
									<br>
									<input type="text" placeholder="E-mail">
									<br>
									<input type="text" placeholder="Teléfono ">	
									<br>
									<input type="text" placeholder="Fecha de Matrícula">
								  </label>
								</section>
								
							  </div>
							</div>
								

									<div>
									<section class="col col-6">
										<label class="checkbox">
										<input type="checkbox" name="checkbox">
										<i></i>Pack Masculino</label>
										<label class="checkbox"><input type="checkbox">
										<i></i>Pack Femenino
										</label>
								
									</section>
										</div>
								</fieldset>
						
						  <footer>
						       <button type="submit" class="button button-alert"><i class="fa <fa-></fa->undo"></i> Regresar</button>
						  </footer>
						</form>
						</div>
					  </li>

					<li class="sky-tab-content-2">
						<div class="typography">
							<h1>Leonardo da Vinci</h1>
							<p>Italian Renaissance polymath: painter, sculptor, architect, musician, mathematician, engineer, inventor, anatomist, geologist, cartographer, botanist, and writer. His genius, perhaps more than that of any other figure, epitomized the Renaissance humanist ideal. Leonardo has often been described as the archetype of mysterious, and that the empirical methods he employed were unusual for his time.</p>
							<p>Born out of wedlock to a notary, Piero da Vinci, and a peasant woman, Caterina, at Vinci in t his earlier working life was spent in the service of Ludovico il Moro in Milan. He later worked in Rome, Bologna and Venice, and he spent his last years in France at the home awarded him by Francis I.</p>
							<p class="text-right"><em>Find out more about Leonardo da Vinci from <a href="http://en.wikipedia.org/wiki/Leonardo_da_Vinci" target="_blank">Wikipedia</a>.</em></p>
						</div>
					</li>

					<li class="sky-tab-content-3">
						<div class="typography">
							<h1>Albert Einstein</h1>
							<p>German-born theoretical physicist who developed the general theory of relativity, one of the two pillars of modern physics (alongside quantum  latter was pivotal in establishing quantum theory.</p>
							<p>Near the beginning of his career, Einstein thought that Newtonian mechanics was no longer enough to reconcile the laws of classical mechanics with the laws of the electromagnetic field. This led to the development of his special theory of ation in 1916, he published a paper on the general theory of relativity.</p>
							<p>He continued to deal with problems of statistical mechanics and quantum theory, which led to his explanations of particle theory and the motion of molecules. He also ito model the large-scale structure of the universe.</p>
							<p class="text-right"><em>Find out more about Albert Einstein from <a href="http://en.wikipedia.org/wiki/Albert_Einstein" target="_blank">Wikipedia</a>.</em></p>
						</div>
					</li>

					<li class="sky-tab-content-4">
						<div class="typography">
							<h1>Isaac Newton</h1>
							<p>English physicist and mathematician who is widely regarded as one of the most influential scientists of all time and as a key figure in the scientific and shares credit with Gottfried Leibniz for the invention of the infinitesimal calculus.</p>
							<p>Newton's Principia formulated the laws of motion and universal gravitation that dominated scientists' view of the physical universe for the next three centuries. last doubts about the validity of the heliocentric model of the cosmos.</p>
							<p class="text-right"><em>Find out more about Isaac Newton from <a href="http://en.wikipedia.org/wiki/Isaac_Newton" target="_blank">Wikipedia</a>.</em></p>
						</div>
					</li>
				</ul>
			</div>
			<!--/ tabs -->
		</div>
	</body>
  	
</html>
