<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package apleitao.
 */
?>

<section class="content-main contacts<?php if ( is_page_template( 'page-templates/template-pedrasnaturais.php' ) ) { echo ' contacts--dark'; }
?>">
	<div class="container container--menu">
		<div class="container container--text">
			<h1 class="title title--main<?php if ( !is_page_template( 'page-templates/template-pedrasnaturais.php' ) ) { echo ' title--white'; }
		 ?>">Como chegar até nós</h1>
		</div>
<form class="directions" action="https://www.google.com/maps/dir/" method="get" target="_blank">
   <div class="directions__wrap">
		 <input type="text" class="directions__input<?php if ( is_page_template( 'page-templates/template-pedrasnaturais.php' ) ) { echo ' directions__input--dark'; }
 		?>" name="saddr" placeholder="Insira o ponto de partida" />
		<div class="directions__button">
			<input type="submit" class="directions__submit<?php if ( is_page_template( 'page-templates/template-pedrasnaturais.php' ) ) { echo ' directions__submit--dark'; }
			?>" value="Go" />
		</div>
  		 <select id="daddr" name="daddr" class="directions__select<?php if ( is_page_template( 'page-templates/template-pedrasnaturais.php' ) ) { echo ' directions__select--dark'; }
	 		?>" >
         <option value="38.842424, -9.340419" selected="selected">PEDREIRA 1 - Lameiras</option>
         <option value="38.8456232,-9.312163" >PEDREIRA 2 – Morelena</option>
         <option value="38.753461,-7.442758">PEDREIRA 3 – Vila Viçosa</option>
         <option value="41.343693,-8.5011136">ARMAZÉM – Santo Tirso</option>
         <option value="40.7137911,-8.4839657">ARMAZÉM – Albergaria-A-Velha</option>
         <option value="39.541510, -8.900360">ARMAZÉM – Alcobaça</option>
         <option value="38.574486, -9.015328">ARMAZÉM – Palmela</option>
       </select>
   </div>

</form>
	<div class="container container__content">
		<ul class="contacts__list">
			<?php
			//var_dump(get_the_ID());

			if ( ICL_LANGUAGE_CODE == 'pt-pt') {
				$contact_id = 610;
			} else if ( ICL_LANGUAGE_CODE == 'en') {
				$contact_id = 2457;
			} else if ( ICL_LANGUAGE_CODE == 'es') {
				$contact_id = 2360;	
			} else {
				$contact_id = 610;
			}


				if( have_rows('contactos', $contact_id) ):

						while ( have_rows('contactos', $contact_id) ) : the_row(); ?>

								<li class="contacts__item">
										<p class="contacts__subtitle"><?php the_sub_field('titulo_do_contactos'); ?></p>
										<p><?php the_sub_field('contactos'); ?></p>
								</li>

					 <?php endwhile;

				endif;

				?>

		</ul>
	</div>


	</div>
</section>

	</div><!-- #content -->
</div><!-- #page -->

<style>
#myBtn {
	position: fixed;
	bottom: 20px;
	right: 30px;
	z-index: 99;
	border: none;
	outline: none;
	background-color: #aaa;
	color: white;
	cursor: pointer;
	padding: 15px;
	border-radius: 0;
	display: none;
}
</style>

<a href="#page" id="myBtn" title="Go to top">Top</button>

<script type="text/javascript">

window.onscroll = function() {
	scrollFunction()
};

function scrollFunction() {
	if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
			document.getElementById("myBtn").style.display = "inline-block";
	} else {
			document.getElementById("myBtn").style.display = "none";
	}
}

</script>


<?php wp_footer(); ?>

<?php //var_dump(ICL_LANGUAGE_CODE); ?>

</body>
</html>
