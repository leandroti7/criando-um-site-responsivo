<section class="sobre">
			<div class="container">
				
				<div class="texto">
				
					<!--Breve Texto Sobre mim-->
					<p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</strong> Cum, esse neque voluptatem mollitia est, vitae, fuga a consequatur doloribus, non deserunt ipsa adipisci. Velit, cum dolore, nostrum sit excepturi beatae.</p>
				</div>
					
					<!--acessando o post criado como habilidades no wordpress-->
				<?query_posts('post_type=habilidades');?>
					<ul class="habilidades">
							<!-- Se existir um post-->
						<? if(have_posts()): 
								//com a condição while enquanto tiver o post the_post() vai editar o mesmo
								while(have_posts()): the_post(); ?>

									<li class="habilidade-x">
										<h2>		
											<!--adicionando a classe do pos com o the_field(),   e o titulo com o the_title()-->
											<i class="fab <?the_field('icone');?>"></i><strong> <?the_title();?></strong>
										</h2>
									</li>
								<!--fim do while-->	
						<?		endwhile;
							//Se não existir post the_post()
							else :?>
								Não há habilidades cadastradas...	
							<!--fim do if-->
						<?  endif; ?>
					</ul>

				<?wp_reset_query();?>	



				
					
				

				<!--Botao Saiba Mais -->
					<a href="portifolio.php" class="botao pequeno"><i class="fas fa-images"></i> Acessar Portifólio</a>
			</div>
		</section>