	</main>
	
	<footer>
		<!--Logo do rodapé e direitos autorais-->
		<div class="logo-rodape">
			<a href="index.php">
				<img src="images/logo-rodape.svg" alt="Logo Rodapé">
			</a>

			<p>2018 Todos os Direitos Reservados</p>
		</div>
	</footer>
	
	<!-- link do script Jquery da animação do meno toggle-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="bower_components/wow/dist/wow.min.js"></script>
	<script>
		$(function(){ 
			$('.toogle').click(function(){//função do botão toggle que da ação no menu responsivo
				$('.layout').toggleClass('ativo')
				$('.menu-responsivo').toggleClass('ativo')
				$('.toogle').toggleClass('ativo')
			});	
			new WOW().init(); 	

		});
	</script>
</body>
</html>