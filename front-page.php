<?php get_header(); ?>

    <!-- Banner, o banner terá texto, butões de serviços e uma imagem e um gradiente, não está decidido se o gradiente é uma boa opção neste caso
  mas por enquanto vamos manter assim -->
    <section class="home__slider">
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/banner/hi-dpi/banner-ws-1-hidpi.jpg"
            style="width:100%"
          />
          <div class="container">
            <div class="large-hero__description">
              <span class="large-hero__description__intro"
                >Somos Valeo Serviços:</span
              >
              <!-- <p class="large-hero__description__company-name">Valeo Serviços</p> -->
              <p class="large-hero__description__company-text">
                Há mais de 15 anos dedicando muito <a>profissionalismo</a>,
                <a>seriedade </a> e <a>qualidade</a> que permita oferecer
                soluções integradas, no trato e garantia de serviços ao cliente.
              </p>
              <button class="btn large-hero__btn btn-medium">Serviços</button>
            </div>
          </div>
        </div>

        <div class="mySlides fade">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/banner/hi-dpi/banner-ws-2-hidpi.jpg"
            style="width:100%"
          />
          <div class="container">
            <div class="large-hero__description">
              <span class="large-hero__description__intro"
                >Somos Valeo Serviços:</span
              >
              <!-- <p class="large-hero__description__company-name">Valeo Serviços</p> -->
              <p class="large-hero__description__company-text">
                Há mais de 15 anos dedicando muito <a>profissionalismo</a>,
                <a>seriedade </a> e <a>qualidade</a> que permita oferecer
                soluções integradas, no trato e garantia de serviços ao cliente.
              </p>
              <button class="btn large-hero__btn btn-medium">Serviços</button>
            </div>
          </div>
        </div>

        <div class="mySlides fade">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/banner/hi-dpi/banner-ws-3-hidpi.jpg"
            style="width:100%"
          />
          <div class="container">
            <div class="large-hero__description">
              <span class="large-hero__description__intro"
                >Somos Valeo Serviços:</span
              >
              <!-- <p class="large-hero__description__company-name">Valeo Serviços</p> -->
              <p class="large-hero__description__company-text">
                Há mais de 15 anos dedicando muito <a>profissionalismo</a>,
                <a>seriedade </a> e <a>qualidade</a> que permita oferecer
                soluções integradas, no trato e garantia de serviços ao cliente.
              </p>
              <button class="btn large-hero__btn btn-medium">Serviços</button>
            </div>
          </div>
        </div>
      </div>
      <br />

      <div class="dots" style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    </section>

    <!-- Clientes, aqui teremos uma lista de principais clientes -->
    <div class="costumers">
      <div class="container">
        <div class="owl-carousel owl-theme">
          <div class="costumers__item">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/clientes/cliente-1.svg"
              alt="certificados"
              title="Apcer"
            />
          </div>
          <div class="costumers__item">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/clientes/cliente-2.svg"
              alt="certificados"
              title="Apcer"
            />
          </div>
          <div class="costumers__item">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/clientes/cliente-3.svg"
              alt="certificados"
              title="Apcer"
            />
          </div>
          <div class="costumers__item">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/clientes/cliente-4.svg"
              alt="certificados"
              title="Apcer"
            />
          </div>
          <div class="costumers__item">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/clientes/cliente-5.svg"
              alt="certificados"
              title="Apcer"
            />
          </div>
          <div class="costumers__item">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/clientes/cliente-6.svg"
              alt="certificados"
              title="Apcer"
            />
          </div>
        </div>
      </div>
    </div>

    <section class="whoWeAre page-session">
      <div class="container">
        <div class="row row--gutters">
          <div class="row__lg-7">
            <div class="whoWeAre__left-content__description intro">
              <p class="whoWeAre__left-content__title desktop-visibe">
                Quem <strong>somos?</strong>
              </p>
              <p class="whoWeAre__left-content__subtitle">
                desde o nascimento, para responder e satisfazer aos seus
                clientes, com imenso prazer.
              </p>
              <p class="whoWeAre__left-content__text">
                A Valeo Serviços, esta no mercado desde 2003, todo este tempo,
                tem dedicado muito profissionalismo, seriedade e qualidade que
                permita oferecer soluções integradas, no trato e garantia de
                serviços ao cliente.
              </p>
              <button class="large-hero__description__btn btn btn-bgWhite">
                Saiba mais
              </button>
            </div>
          </div>

          <!-- Adicionar um Fallback, usar um poster(imagem) para navegadores que não suportam vídeos -->
          <div class="row__lg-5">
            <div class="whoWeAre__video-presentation">
              <iframe
                class="whoWeAre__right-content__iframe"
                src="https://www.youtube.com/embed/07o-h5StVsI"
                allowfullscreen
              >
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      class="services page-session--grey text-content text-content--black"
    >
      <div class="container">
        <div class="services__header">
          <h3 class="services__header__title services__header--center">
            O que<strong> Fazemos?</strong>
          </h3>
        </div>
        <!-- Fim do Header -->

        <div class="row__lg-6 services--mb-mobile">
          <!-- Lista de Serviços Prestados Pela Empresa -->
          <div class="services__box">
            <!-- Icon -->
            <div class="services__item">
              <img
                class="services__item__icon"
                src="<?php echo get_template_directory_uri(); ?>/images/icons/print-icon.svg"
                alt=" Our printing services"
              />
              <h3 class="services__item__title">Descrição do serviço</h3>

              <p class="services__item__description__text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio
                ipsa dolorum cumque voluptatibus sapiente reiciendis.
              </p>
            </div>
          </div>

          <!-- Lista de Serviços Prestados Pela Empresa -->
          <div class="services__box">
            <!-- Icon -->
            <div class="services__item">
              <img
                class="services__item__icon"
                src="<?php echo get_template_directory_uri(); ?>/images/icons/print-icon.svg"
                alt=" Our printing services"
              />
              <h3 class="services__item__title">Descrição do serviço</h3>

              <p class="services__item__description__text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio
                ipsa dolorum cumque voluptatibus sapiente reiciendis.
              </p>
            </div>
          </div>
        </div>

        <div class="row__lg-6">
          <!-- Lista de Serviços Prestados Pela Empresa -->
          <div class="services__box">
            <!-- Icon -->
            <div class="services__item">
              <img
                class="services__item__icon"
                src="<?php echo get_template_directory_uri(); ?>/images/icons/print-icon.svg"
                alt=" Our printing services"
              />
              <h3 class="services__item__title">Descrição do serviço</h3>

              <p class="services__item__description__text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio
                ipsa dolorum cumque voluptatibus sapiente reiciendis.
              </p>
            </div>
          </div>

          <!-- Lista de Serviços Prestados Pela Empresa -->
          <div class="services__box">
            <!-- Icon -->
            <div class="services__item">
              <img
                class="services__item__icon"
                src="<?php echo get_template_directory_uri(); ?>/images/icons/print-icon.svg"
                alt=" Our printing services"
              />
              <h3 class="services__item__title">Descrição do serviço</h3>

              <p class="services__item__description__text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio
                ipsa dolorum cumque voluptatibus sapiente reiciendis.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="callUs page-session page-session--short">
      <div class="container">
        <div class="row__lg-6 row--gutters--large">
          <div
            class="callUs__session callUs__session--first-content text-content"
          >
            <h3 class="callUs__title">Falemos de <strong>Negócios</strong></h3>
            <p class="callUs__text">
              Entre em contacto por Chamada Telefónica ou por WhatsApp
            </p>
            <br />
            <p class="callUs__numbers">
              <strong>(+258) 84 51 000 01 / 84 51 000 01</strong>
            </p>
          </div>
        </div>
        <div class="row__lg-6">
          <div class="callUs__session">
            <h3 class="callUs__title"><strong>Orçamento</strong></h3>
            <button class="btn btn-medium btn--center">Enviar e-mail</button>
          </div>
        </div>
      </div>
    </section>

    <section class="testimonials page-session animate">
      <div class="container">
        <div class="testimonials__header">
          <p class="testimonials__header-title testimonials__header--center">
            <strong>Testemunhos</strong>
          </p>
        </div>

        <div class="row row--gutters--small">
          <div class="testimonial__list">
            <div class="row__lg-4">
              <div class="testimonials__box">
                <div class="testimonials__photo">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/images/testimonial.svg"
                    alt="Name da Pessoa"
                    class="testimonial-photo"
                  />
                </div>
                <div class="testimonials__details">
                  <p class="name">Valério Leonardo</p>
                  <h3 class="testmonials__company">Cicoti, Lda</h3>
                  <p class="testimonials__text">
                    "Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    ut facilis dolorem mollitia quos. Architecto provident nisi
                    earum praesentium dol"
                  </p>
                </div>
              </div>
            </div>
            <div class="row__lg-4 ">
              <div class="testimonials__box">
                <div class="testimonials__photo">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/images/testimonial.svg"
                    alt="Name da Pessoa"
                    class="testimonial-photo"
                  />
                </div>
                <div class="testimonials__details">
                  <p class="name">Valério Leonardo</p>
                  <h3 class="testmonials__company">Cicoti, Lda</h3>
                  <p class="testimonials__text">
                    "Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    ut facilis dolorem mollitia quos. Architecto provident nisi
                    earum praesentium dol"
                  </p>
                </div>
              </div>
            </div>
            <div class="row__lg-4">
              <div class="testimonials__box testimonials__box--last-child">
                <div class="testimonials__photo">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/images/testimonial.svg"
                    alt="Name da Pessoa"
                  />
                </div>
                <div class="testimonials__details">
                  <p class="name">Valério Leonardo</p>
                  <h3 class="testmonials__company">Cicoti, Lda</h3>
                  <p class="testimonials__text">
                    "Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    ut facilis dolorem mollitia quos. Architecto provident nisi
                    earum praesentium dol"
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php get_footer(); ?>