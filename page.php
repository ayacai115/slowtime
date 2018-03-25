<?php get_header(); ?>



    <!-- ==== ページ見出し ==== -->
    <div class="jumbotron jumbotron-sub">
      <h3><?php the_title(); ?></h3>
    </div>

    <!-- ==== パンくずリスト ==== -->
    <ol class="breadcrumb">
      <li><a href="<?php echo esc_url( home_url() ); ?>">ホーム</a></li>
      <li class="active"><?php the_title(); ?></li>
    </ol>

<?php while( have_posts() ): the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php
    the_content();
     wp_link_pages( array(
      'before'      => '<div class="entry__page-links">',
      'after'       => '</div>',
      'link_before' => '<span class="btn btn-default">',
      'link_after'  => '</span>',
      'pagelink'    => '%ページ',
      'separator'   => '',
      ));
    ?>

  </article>

  <?php endwhile; ?>

<?php get_footer(); ?>
