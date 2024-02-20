<?php
// Template Name: Home
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
  <article class="sobre-bg" id=sobre>
    <div class="sobre-dark">
    <div class="container">
    <div class="sobre">
      <h2 class="subtitulo"><?php the_field('titulo_sobre')?></h2>
      <p class="texto-padrao"><?php the_field('descricao_sobre')?>.</p>
    </div>
    </div>
    </div>
  </article>

  <!-- HISTORIA -->
  <article class="historia">
    <ul class="lista-historia">
      <li class="item-historia">
        <h3><?php the_field('subtitulo_historia_1')?></h3>
        <p class="texto-padrao"><?php the_field('descricao_historia_1')?></p>
      </li>
      <li class="item-historia">
        <h3><?php the_field('subtitulo_historia_2')?></h3>
        <p class="texto-padrao"><?php the_field('descricao_historia_2')?></p>
      </li>
      <li class="item-historia">
        <h3><?php the_field('subtitulo_historia_3')?></h3>
        <p class="texto-padrao"><?php the_field('descricao_historia_3')?></p>
      </li>
    </ul>
    <img class="img-2" src="<?php the_field('logo_historia')?>" alt="Logomarca">


  </article>

  <!-- SERVIÇOS  -->
  <section aria-label="servicos" class="servicos-bg" id="servicos">
      <div class="servico-before">

      <div class="servicos container">

      <h2 class="subtitulo"><?php the_field('titulo_servico')?></h2>

    <ul class="lista-servico">
      <li class="item-servico">
        <h3><?php the_field('subtitulo_servico_1')?></h3>
        <p class="texto-padrao"><?php the_field('descricao_servico_1')?></p>
      </li>
      <li class="item-servico">
        <h3><?php the_field('subtitulo_servico_2')?></h3>
        <p class="texto-padrao"><?php the_field('descricao_servico_2')?></p>
      </li>
      <li class="item-servico">
        <h3><?php the_field('subtitulo_servico_3')?></h3>
        <p class="texto-padrao"><?php the_field('descricao_servico_3')?></p>
      </li>
      <li class="item-servico">
        <h3><?php the_field('subtitulo_servico_4')?></h3>
        <p class="texto-padrao"><?php the_field('descricao_servico_4')?></p>
      </li>
    </ul>
      </div>
  </div>

  </section >

    <!-- CLIENTES -->
    <section aria-label="clientes" class="clientes" id="clientes">
    <div class="slider">
        <picture class="item-slide">
          <img src="<?php the_field('cliente_1')?>" alt="<?php the_field('descricao_cliente_1')?>" width="auto" height="auto">
        </picture>
        <picture class="item-slide">
          <img src="<?php the_field('cliente_2')?>" loading="lazy" alt="<?php the_field('descricao_cliente_2')?>" width="auto" height="auto">
        </picture>
        <picture class="item-slide">
          <img src="<?php the_field('cliente_3')?>" loading="lazy" alt="<?php the_field('descricao_cliente_3')?>" width="auto" height="auto">
        </picture>
        <picture class="item-slide">
          <img src="<?php the_field('cliente_4')?>" loading="lazy" alt="<?php the_field('descricao_cliente_4')?>" width="auto" height="auto">
        </picture>
        <picture class="item-slide">
          <img src="<?php the_field('cliente_5')?>" loading="lazy" alt="<?php the_field('descricao_cliente_5')?>" width="auto" height="auto">
        </picture>
        <picture class="item-slide">
          <img src="<?php the_field('cliente_6')?>" loading="lazy" alt="<?php the_field('descricao_cliente_6')?>" width="auto" height="auto">
        </picture>
    </div>

  </section>
  

  <!-- ATUAÇÃO  -->
  <section class="container atuacao">

  <h2 class="subtitulo"><?php the_field('titulo_atuacao') ;?></h2>

  <ul class="lista-atuacao">
        <li class="item-atuacao" onclick="mostrarConteudo('pacote')"><?php the_field('item_atuacao_1') ;?></li>
        <li class="item-atuacao" onclick="mostrarConteudo('alocacao')"><?php the_field('item_atuacao_2') ;?></li>
        <li class="item-atuacao" onclick="mostrarConteudo('projeto')"><?php the_field('item_atuacao_3') ;?></li>
    </ul>

    <div class="div-item pacote" id="pacote">
        <h4 class="sub-atuacao"><?php the_field('subtitulo_atuacao_1') ;?></h4>
        <p class="descricao-atuacao"><?php the_field('descricao_atuacao_1') ;?></p>
    </div>

    <div class="div-item alocacao" id="alocacao">
        <h4 class="sub-atuacao"><?php the_field('subtitulo_atuacao_2') ;?></h4>
        <p class="descricao-atuacao"><?php the_field('descricao_atuacao_2') ;?></p>
    </div>

    <div class="div-item projeto" id="projeto">
        <h4 class="sub-atuacao"><?php the_field('subtitulo_atuacao_3') ;?></h4>
        <p class="descricao-atuacao"><?php the_field('descricao_atuacao_3') ;?></p>
    </div>

    </section>

  <?php get_footer(); ?>
  <?php endwhile; else: endif ?>
</html>