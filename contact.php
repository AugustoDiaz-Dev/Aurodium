
<section class="page-info-section set-bg" data-setbg="https://firebasestorage.googleapis.com/v0/b/aurodium-a116.appspot.com/o/img%2Fpattern.jpg?alt=media&token=d92b98ed-0ad6-4e7a-812d-cb5a58d1c45b" id="contact">
	<div class="pi-content">
		<div class="container">
			<div class="row">
				<div class="col-xl-5 col-lg-6">
					<h2 class="my-primary">Contacto</h2>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page-section spad contact-page set-bg" data-setbg="" id="contact-form">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mb-5 mb-lg-0 p-2">
				<h4 class="comment-title my-primary">Contacto</h4>
				<div class="row">
					<div class="col-md-9">
						<ul class="contact-info-list">
							<li>
								<div class="cf-left my-primary">Dirección</div>
								<div class="cf-right">Somewhere over the rainbow</div>
							</li>
							<li>
								<div class="cf-left my-primary">WhatsApp</div>
								<div class="cf-right my-primary">
									<a href="https://wa.me/79143308115?text=Hola!%20Tengo%20una%20consulta%20">+7 914 330 8115</a> 
								</div>
							</li>
							<li>
								<div class="cf-left my-primary">E-mail</div>
								<div class="cf-right">aurodium.cursos@gmail.com</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- <div class="social-links">
					<a href="https://github.com/AugustoDiaz-Dev"><i class="fa fa-facebook"></i></a>
					<a href="https://github.com/AugustoDiaz-Dev"><i class="fa fa-twitter"></i></a>
				</div> -->
			</div>
			<div class="col-lg-8">
				<div class="contact-form-warp">
					<h4 class="comment-title my-primary">¡Suscribiendote tenés descuentos!</h4>

					<form class="comment-form" action="send.php" method="POST">
						 
						<div class="row">

							<div class="col-md-6">
								<input type="text" name="name" minlength="3" maxlength="40" title="Mínimo 3 caracteres"  placeholder="Nombre" required>
							</div>

							<div class="col-md-6">
								<input type="email" name="email" title="Incluya un email válido con el signo @" placeholder="Email" required>
							</div>

							<div class="col-lg-12">
								<input type="text" name="subject" title="Máximo 30 caracteres" placeholder="Motivo" maxlength="30">
								<textarea name="body" title="Máximo 255 caracteres" maxlength="255" placeholder="Mensaje" required></textarea>

								<input type="hidden" name="token" id="token"/>
								
								<button class="site-btn btn-sm" type="submit" name="send">Enviar</button>
							</div>

						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
</section>