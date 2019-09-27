<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('chartset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Valeo Serviços | Página Inicial</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> 

    <header class="header">
        <div class="container">
        <div class="row">
            <div class="row__lg-2">
            <div class="header__logotipo">
                <!-- <img src="" alt="Valeo" class="logo"> -->
                <p>Valeo Serviços</p>
            </div>
            </div>
            <div class="row__lg-10">
            <!-- Menu do topo, contém todas as páginas do site-->
            <div class="primary-nav">
                <nav class="primary-nav__main-nav nav">
                    <ul class="primary-nav__menu nav-links">
                        <li class="primary-nav__menu-item"><a href="<?php echo site_url(''); ?>">Início</a></li>
                        <li class="primary-nav__menu-item"><a href="<?php echo site_url('/servicos'); ?>">Serviços</a></li>
                        <li class="primary-nav__menu-item"><a href="<?php echo site_url('/portfolio'); ?>">Portfólio</a></li>
                        <li class="primary-nav__menu-item"><a href="<?php echo site_url('/sobre-nos'); ?>">A Empresa</a></li>
                        <li class="primary-nav__menu-item"><a href="<?php echo site_url('/contacto'); ?>"><button class="primary-nav__btn btn btn-medium">Contacte-nos</button></a></li>
                    </ul>
                </nav>  
                <div class="primary-nav__hamburguer-menu burger">
                <div class="primary-nav__hamburguer-menu__icon icon-1"></div>
                <div class="primary-nav__hamburguer-menu__icon icon-2"></div>
                <div class="primary-nav__hamburguer-menu__icon icon-3"></div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </header>









