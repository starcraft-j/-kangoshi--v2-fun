<?php get_header(); ?>
<div id="wrapper">
  <main class="side__page single__page" id="main"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section id="section__single">
      <div id="side__page--bread"> <a href="<?php echo home_url('/'); ?>">
           HOME </a><span> > <?php the_title(); ?></span></div>
      <h2 class="single__title"><?php the_title(); ?></h2>
      <div class="single__content"><?php the_content(); ?></div><?php endwhile; endif;

     ?>
    </section>
  </main>
</div><?php get_footer(); ?>