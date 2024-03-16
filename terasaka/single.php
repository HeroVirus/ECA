<?php get_header(); ?>


<div class="common-header-title"><img src="<?php echo get_template_directory_uri(); ?>/images/Ribbon_HeaderTitle.png" loading="lazy" sizes="100vw" srcset="<?php echo get_template_directory_uri(); ?>/images/Ribbon_HeaderTitle-p-500.png 500w, <?php echo get_template_directory_uri(); ?>/images/Ribbon_HeaderTitle-p-800.png 800w, <?php echo get_template_directory_uri(); ?>/images/Ribbon_HeaderTitle-p-1080.png 1080w, <?php echo get_template_directory_uri(); ?>/images/Ribbon_HeaderTitle-p-1600.png 1600w, <?php echo get_template_directory_uri(); ?>/images/Ribbon_HeaderTitle.png 1920w" alt="" class="common-header-image-l"><img src="<?php echo get_template_directory_uri(); ?>/images/Ribbon_HeaderTitle_SP.png" loading="lazy" sizes="100vw" srcset="<?php echo get_template_directory_uri(); ?>/images/Ribbon_HeaderTitle_SP-p-500.png 500w, <?php echo get_template_directory_uri(); ?>/images/Ribbon_HeaderTitle_SP-p-800.png 800w, <?php echo get_template_directory_uri(); ?>/images/Ribbon_HeaderTitle_SP.png 960w" alt="" class="common-header-image-s">
    <div class="common-header-title-block">
      <h1 class="common-header-title-heading">お知らせ</h1>
      <p class="common-header-title-eng">Information</p>
    </div>
  </div>
  <section>
    <div class="w-layout-blockcontainer common-container w-container">
      <div class="news-post">

        <?php while (have_posts()) : the_post(); ?>
            <h2 class="common-text-heading-02"><?php the_title(); ?></h2>
            <div class="news-detail">
            <p class="home-info-list-category"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></p>
            <p class="home-info-list-date"><?php the_time('Y年m月j日'); ?></p>
            </div>
            <p class="common-text-lh1-8"><?php the_content(); ?></p>
        <?php endwhile; ?>
    </div>
    </div>
  </section>
  <address class="news-other-post">
    <h3 class="common-text-heading-03 center">その他の記事</h3>

        <?php
        $current_post_id = get_the_ID(); 
        $args = [
          "post_type" => 'post', 
          "posts_per_page" => -1, 
          "post__not_in" => [$current_post_id] 
        ];
        $post_query = new WP_Query($args);
        ?>
        <?php
        $cat = get_the_category();
        $catname = $cat[0]->cat_name;
        $catslug = $cat[0]->slug;
        ?>
        <?php if ($post_query->have_posts()) : ?>
    <ul role="list" class="home-info-list">
    <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
      <li class="home-info-list-item">
        <div class="home-info-list-item-detail">
          <p class="home-info-list-date"><?php the_time('Y年m月j日'); ?></p>
          <p class="home-info-list-category"><?php echo $catname; ?></p>
        </div>
        <a href="<?php the_permalink(); ?>" class="home-info-list-link w-inline-block">
          <p class="home-info-list-posttitle">
          <?php if(wp_is_mobile()): ?><?php echo wp_trim_words( get_the_title(), 12, '...' ); ?>
              <?php else: ?>
                <?php echo wp_trim_words( get_the_title(), 25, '...' ); ?>
              <?php endif; ?>
        </p>
        </a>
      </li>
      <?php endwhile; ?>
    </ul>
    <?php else: ?>
      <div class="w-layout-blockcontainer common-container w-container news-sub-txtbox">
      <div class="news-post">
      <p class="common-text-lh1-8">現在、その他の記事はありません。</p>
      </div>
      </div>
    <?php endif; ?>


  </address>



<?php get_footer(); ?>