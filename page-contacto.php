<?php 
/* 
  Template Name: Contactos 
*/
get_header();  

while(have_posts()){
    the_post();
}
?>

  <?php get_template_part('top-page-headers'); ?>

    <section class="contact text-content--black">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-4 col-lg-5">
            <div class="contact__info text-content">
              <h3>Valeo Serviços</h3>
              <p>
                Rua da Tanzânia, nº 23 Bairro <br />
                Alto-Maé, Maputo

                <br />
                CP: 1823
              </p>
              <br>
              <p>valeo@valeoserviços.com</p>
              <p>(+258) 84 51 000 01 / 84 51 000 01</p>
              <p>(+258) 84 51 000 01 / 84 51 000 01</p>
            </div>
          </div>
          <div class="col-xs-12 col-md-4 col-lg-7">
            <div class="contact__mail">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div id="map" class="contact__map">
      <?php the_post(); ?>
    </div>
<?php get_footer(); ?>