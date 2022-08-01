<?php
/**
 * The template part for displaying Slider
 * @package IT Company
 * @subpackage it_company
 * @since 1.0
 */
?>
<?php if( get_theme_mod('it_company_slider_hide') != '' || get_theme_mod('it_company_slider_responsive')){ ?>
  <section id="slider">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="<?php echo esc_attr(get_theme_mod('it_company_slider_speed',3000)); ?>"> 
      <?php $it_company_content_pages = array();
        for ( $count = 1; $count <= 4; $count++ ) {
          $mod = intval( get_theme_mod( 'it_company_slider_page' . $count ));
          if ( 'page-none-selected' != $mod ) {
            $it_company_content_pages[] = $mod;
          }
        }
        if( !empty($it_company_content_pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $it_company_content_pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
      ?>
      <div class="carousel-inner" role="listbox">
        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <a href="<?php echo esc_url( get_permalink() );?>">
              <?php if(has_post_thumbnail()){
                  the_post_thumbnail();
              } else{?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slider.png" alt="" />
              <?php } ?>
            <span class="screen-reader-text"><?php the_title(); ?></a>
            <div class="carousel-caption py-md-3 py-0">
              <div class="inner_carousel">
                <?php if ( get_theme_mod('it_company_slider_title',true) != '' ) {?>
                  <h1 class="animated fadeInDown p-0"><?php the_title(); ?></h1>
                <?php }?>
                <?php if ( get_theme_mod('it_company_slider_content',true) != '' ) {?>
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( it_company_string_limit_words( $excerpt, esc_attr(get_theme_mod('it_company_slider_excerpt_number','25')))); ?></p>
                <?php }?>
                <?php if(get_theme_mod('it_company_slider_button',true) != '' || get_theme_mod('it_company_slider_button_responsive',true) != '') {?>
                  <?php if ( get_theme_mod('it_company_slider_button_label','DETAILS') != '' ) {?>
                    <div class="more-btn py-md-3 py-0">              
                      <span class="p-1"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_theme_mod('it_company_slider_button_label',__('DETAILS','it-company')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('it_company_slider_button_label',__('DETAILS','it-company')) ); ?></span></a></span>
                    </div>
                  <?php }?>
                <?php }?>
              </div>
            </div>
          </div>
        <?php $i++; endwhile; 
        wp_reset_postdata();?>
      </div>
      <?php else : ?>
        <div class="no-postfound"></div>
        <?php endif;
      endif;?>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon py-2 px-3" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
        <span class="screen-reader-text"><?php esc_html_e('Previous','it-company'); ?></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon py-2 px-3" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
        <span class="screen-reader-text"><?php esc_html_e('Next','it-company'); ?></span>
      </a>
    </div>  
    <div class="clearfix"></div>
  </section>
<?php }?>