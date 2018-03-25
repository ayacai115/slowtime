<?php

/**
* The template for displaying archive pages
*/

get_header(); ?>

  <!-- ==== ページ見出し ==== -->
  <div class="jumbotron jumbotron-sub">
    <h3>スタッフブログ</h3>
  </div>

  <!-- ==== パンくずリスト ==== -->
  <ol class="breadcrumb">
    <li><a href="<?php echo esc_url( home_url() ); ?>">ホーム</a></li>
    <li class="active"><a href="<?php echo esc_url( home_url('/blog') ); ?>">スタッフブログ</a></li>
<!--     <li class="active">
      <?php $category_query = single_term_title(); ?>
      <?php if (empty($category_query)) : ?>
        <?php echo $category_query ?>
        <?php echo "からだよ" ?>
      <?php else : ?>
        <?php echo "からじゃないよ" ?>
        <?php $year = get_query_var('year');
              echo $year . '年';
              ?>
        <?php $monthNum = get_query_var('monthnum');
              $month = date("F", mktime(0, 0, 0, $monthNum));
              echo translate_month($month) . '月の投稿';
              ?>
      <?php endif; ?>
    </li> -->
  </ol>

<!-- ==== BLOG SECTION ==== -->
<div class="container">
  <div class="row">
    <div class="col-sm-8 blog-main">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="blog-post">
        <h2 class="blog-post-title">

          <?php the_title(); ?>
        </h2>
        <p class="blog-post-meta"><?php echo get_the_date('Y年Fj日'); ?>
          by <a href="#"><?php the_author(); ?></a><br>

          <i class="fa fa-tag"></i>
          <?php the_tags(); ?><br>

          <i class="fa fa-folder-open"></i>
          <?php _e( 'カテゴリー: ');?>
          <?php the_category(', '); ?>
          </p>

          <?php the_content(); ?>


      </div><!-- blog post -->



  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

      <nav>
        <ul class="pager">
          <li><?php previous_post_link(); ?></li>
          <li><?php next_post_link(); ?></li>
        </ul>
      </nav>

    </div><!-- /.blog-main -->


    <!-- ==== SIDEBAR SECTION ==== -->
    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
      <?php get_sidebar(); ?>

    </div><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</div><!-- /.container -->





<?php get_footer(); ?>
