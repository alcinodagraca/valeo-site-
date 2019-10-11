<?php 
/* 
  Template Name: Sobre-nos 
*/
get_header(); ?>

<?php while(have_posts()){
    the_post();

    get_template_part('top-page-headers');
 ?>

    <!-- Missão      Valores     Visão   -->

    <section class="about__intro page-session">
      <div class="container">
        <div class="row between-xs">
          <div class="col-xs-12 col-md-4 col-lg-4">
            <div class="about__box missao text-content">
              <h3 class="about__title">Missão</h3>
              <p class="about__text">
                Garantir a criação de valor para clientes, colaboradores e a
                sociedade em geral em todas as áreas de negócio, desenvolvendo
                produtos e prestando serviços de elevada qualidade, tendo por
                base os valores de competência, cooperação, ética, rigor e
                solidez e respeitando os padrões de crescimento sustentável que
                caracterizam o Grupo ValeoServiços.
              </p>
            </div>
          </div>
          <div class="col-xs-12 col-md-4 col-lg-4">
            <div class="about__box visao text-content">
              <h3 class="about__title">Visão</h3>
              <p class="about__text">
                Ser uma empresa inovadora, diferenciada, comprometida com o
                atendimento e a qualidade dos serviços, desenvolvendo programas
                sócio-ambientais, sendo referência no segmento ao grupo de
                serviços de elevada qualidade que caracterizam o Grupo
                ValeoServiços, contribuindo para o progresso económico do país.
              </p>
            </div>
          </div>
          <div class="col-xs-12 col-md-4 col-lg-4">
            <div class="about__box valores text-content">
              <h3 class="about__title">Valores</h3>
              <p class="about__text">
                Compromisso com a qualidade e busca por soluções criativas para
                nossos clientes; Ser uma empresa por Excelência Integridade e
                parceria Valorização das pessoas, estimulandoo crescimento
                pessoal e qualidade de vida. Ambiente participativo
                Transparência de gestão Ética e Respeito.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about__iframe page-session">
      <div class="container">
        <iframe
          class="iframe"
          src="https://www.youtube.com/embed/07o-h5StVsI"
          allowfullscreen
        >
        </iframe>
      </div>
    </section>

    <!-- Clientes, aqui teremos uma lista de principais clientes -->
    <div class="costumers">
      <div class="container">
        <div class="owl-carousel owl-theme">
          <div class="costumers__item">
            <img
              src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/clientes/cliente-2.svg"
              alt="certificados"
              title="Apcer"
            />
          </div>
          <div class="costumers__item">
            <img
              src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/clientes/cliente-3.svg"
              alt="certificados"
              title="Apcer"
            />
          </div>
          <div class="costumers__item">
            <img
              src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/clientes/cliente-4.svg"
              alt="certificados"
              title="Apcer"
            />
          </div>
          <div class="costumers__item">
            <img
              src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/clientes/cliente-5.svg"
              alt="certificados"
              title="Apcer"
            />
          </div>
          <div class="costumers__item">
            <img
              src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/clientes/cliente-6.svg"
              alt="certificados"
              title="Apcer"
            />
          </div>
          <div class="costumers__item">
            <img
              src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/clientes/cliente-7.svg"
              alt="certificados"
              title="Apcer"
            />
          </div>
        </div>
      </div>
    </div>

    <!-- Locations -->
    <section class="locations page-session">
      <div class="container">
        <!-- Header -->
        <div class="testimonials__header header__about">
          <p class="testimonials__header-title testimonials__header--center">
            <strong>Escritórios</strong>
          </p>
        </div>

        <!-- Locations Descriptions -->
        <div class="locations">
          <div class="row row--gutters">
            <div class="row__lg-4">
              <div class="locations__details">
                <p>
                  <strong style="text-transform: uppercase;"
                    >Valeo Serviços, Sociedade Unipessoal, Lda.</strong
                  >
                  está sediada <br />
                  na <strong>Cidade de Maputo, Maputo</strong>
                </p>

                <address>
                  <i></i>
                  <span style="text-transform: uppercase;">Maputo (Sede)</span>
                  <br />
                  Rua Travessia da Tanzânia
                  <br />
                  Bairro do Alto-Maé
                  <br />
                  Av. Ahmed Seuk Touré (corrigir)
                  <br />
                  C.P: 1823
                </address>
              </div>
            </div>
            <div class="row__lg-8">
              <div id="map"><?php the_content(); ?></div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php } ?>


<?php get_footer(); ?>