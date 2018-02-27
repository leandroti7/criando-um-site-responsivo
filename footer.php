	</main>
	
	<footer>
		<!--Logo do rodapé e direitos autorais-->
		<div class="logo-rodape">
			<a href="index.php">
				<img src="<?bloginfo('template_url')?>/images/logo-rodape.svg" alt="Logo Rodapé">
			</a>

			<p><? echo date('Y');?> Todos os Direitos Reservados <a href="mailto:<? bloginfo ('admin_email');?>"><?bloginfo('admin_email'); ?></a></p>
		</div>
	</footer>
	
	<!-- link do script Jquery da animação do meno toggle-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?bloginfo('template_url')?>/bower_components/wow/dist/wow.min.js"></script>
	
	<?if (is_page('portifolio')):?>
		<script src="<?bloginfo('template_url');?>/bower_components/lightbox2/dist/js/lightbox.min.js"></script>
	<?endif;?>
	
	<?if(is_front_page()):?>
		<script src="<?bloginfo('template_url')?>/bower_components/slick-carousel/slick/slick.min.js""></script>
	<?endif;?>

	<script>
		$(function(){ 
			$('.toogle').click(function(){//função do botão toggle que da ação no menu responsivo
				$('.layout').toggleClass('ativo')
				$('.menu-responsivo').toggleClass('ativo')
				$('.toogle').toggleClass('ativo')
			});	
			new WOW().init(); 	

			<? if(is_front_page()):?>
				$('.slide').slick({
					infinite: true,
					autoplay: true,
 					autoplaySpeed: 2000,
				});
			<?endif;?>


		});
	</script>
	<?wp_footer();?>
</body>
</html>