<?php get_header(); ?>
   
    <!-- カードレイアウト -->
    <section class="card">
        <div class="container">

            <div class="text-center card__title">
                <h2 class="card__title__txt">新着記事</h2>
            </div>

            <div class="row">
               
                <?php
                query_posts('posts_per_page=8');
                if(have_posts()) : 
                    while(have_posts()) : the_post();
                ?>
                <div class="col-md-6 col-sm-6 card__containar">
                    <!-- Press Item -->
                    <div class="card_item">
                        <?php if (has_post_thumbnail()) : ?>
                          <div class="card__containar__item__img" style="background-image: url(<?php the_post_thumbnail('thumbnail'); ?>);">
                          </div>
                          <?php else : ?>
                          <div class="card__containar__item__img" style="background-image: url(http://placehold.it/300x350);">
                        </div>
                        <?php endif ; ?>
                        <div class="card__containar__item__text">
                            <h3 class="h2 card__containar__item__text__title"><?php the_title(); ?> <span class="card__containar__item__text__title__border"></span></h3>
                            <p><?php echo mb_substr(get_the_excerpt(), 0, 200); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-block">記事を読む</a>
                        </div>
                    </div>
                    <!-- Press Item -->
                </div>
                <?php
                    endwhile;
                else:
                ?>
                <!-- 記事がない場合の表示はこちら -->
                <?php endif; ?>
                
            </div>
        </div>
    </section>
    <!-- カードレイアウト -->

<?php get_footer(); ?>