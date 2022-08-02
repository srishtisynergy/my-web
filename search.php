<?php
/**
 * The template for displaying Search Results pages.
 * @package IT Company
 */
get_header(); ?>

<main id="maincontent" role="main" class="main-wrap-box py-5">
    <?php
    $it_company_left_right = get_theme_mod( 'it_company_layout','Right Sidebar');
    if($it_company_left_right == 'Right Sidebar'){ ?>
        <div id="blog_post">    
            <div class="container"> 
                <div class="row">       
                    <div class="col-lg-9 col-md-9">
                        <h1 class="search-title mb-3 text-center"><?php /* translators: %s: search term */ printf(esc_html('Search Results for: %s','it-company'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if( get_theme_mod( 'it_company_blog_nav_position','bottom') == 'top' || get_theme_mod( 'it_company_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'it_company_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php it_company_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content' , get_post_format() );
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'it_company_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'it_company_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'it_company_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php it_company_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                    </div>      
                    <div class="col-lg-3 col-md-3"><?php get_sidebar();?></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    <?php }else if($it_company_left_right == 'Left Sidebar'){ ?>
        <div id="blog_post">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3"><?php get_sidebar();?></div>
                    <div class="col-lg-9 col-md-9">
                        <h1 class="search-title mb-3 text-center"><?php /* translators: %s: search term */ printf(esc_html('Search Results for: %s','it-company'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if( get_theme_mod( 'it_company_blog_nav_position','bottom') == 'top' || get_theme_mod( 'it_company_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'it_company_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php it_company_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content' , get_post_format() );
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'it_company_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'it_company_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'it_company_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php it_company_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                    </div> 
                </div>                   
            </div>
        </div>
    <?php }else if($it_company_left_right == 'One Column'){ ?>
        <div id="blog_post">
            <div class="container">
                <h1 class="search-title mb-3 text-center"><?php /* translators: %s: search term */ printf(esc_html('Search Results for: %s','it-company'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                <?php if( get_theme_mod( 'it_company_blog_nav_position','bottom') == 'top' || get_theme_mod( 'it_company_blog_nav_position','bottom') == 'both') { ?>
                    <?php if( get_theme_mod( 'it_company_post_navigation',true) != '') { ?>
                        <div class="navigation">
                            <?php it_company_posts_pagination();?>
                            <div class="clearfix"></div>
                        </div>
                    <?php }?>
                <?php }?>
                <?php if ( have_posts() ) :
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content' , get_post_format() );
                    endwhile;
                      else :
                        get_template_part( 'no-results' ); 
                    endif; 
                ?>
                <?php if( get_theme_mod( 'it_company_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'it_company_blog_nav_position','bottom') == 'both') { ?>
                    <?php if( get_theme_mod( 'it_company_post_navigation',true) != '') { ?>
                        <div class="navigation">
                            <?php it_company_posts_pagination();?>
                            <div class="clearfix"></div>
                        </div>
                    <?php }?>
                <?php }?>               
            </div>
        </div>
    <?php }else if($it_company_left_right == 'Three Columns'){ ?>
        <div id="blog_post">
            <div class="container">
                <div class="row">
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div class="col-lg-6 col-md-6">
                        <h1 class="search-title mb-3 text-center"><?php /* translators: %s: search term */ printf(esc_html('Search Results for: %s','it-company'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if( get_theme_mod( 'it_company_blog_nav_position','bottom') == 'top' || get_theme_mod( 'it_company_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'it_company_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php it_company_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content' , get_post_format() );
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'it_company_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'it_company_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'it_company_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php it_company_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                    </div> 
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
                </div>               
            </div>
        </div>
    <?php }else if($it_company_left_right == 'Four Columns'){ ?>
        <div id="blog_post">
            <div class="container">
                <div class="row">
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div class="col-lg-3 col-md-3">
                        <h1 class="search-title mb-3 text-center"><?php /* translators: %s: search term */ printf(esc_html('Search Results for: %s','it-company'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if( get_theme_mod( 'it_company_blog_nav_position','bottom') == 'top' || get_theme_mod( 'it_company_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'it_company_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php it_company_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content' , get_post_format() );
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'it_company_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'it_company_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'it_company_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php it_company_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                    </div> 
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-3');?></div>
                </div>
            </div>
        </div>
    <?php }else if($it_company_left_right == 'Grid Layout'){ ?>
        <div id="blog_post">
            <div class="container"> 
                <div class="row">       
                    <div class="col-lg-8 col-md-8">
                        <h1 class="search-title mb-3 text-center"><?php /* translators: %s: search term */ printf(esc_html('Search Results for: %s','it-company'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if( get_theme_mod( 'it_company_blog_nav_position','bottom') == 'top' || get_theme_mod( 'it_company_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'it_company_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php it_company_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                        <div class="row">               
                            <?php if ( have_posts() ) :
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/grid-layout' );
                                endwhile;
                                  else :
                                    get_template_part( 'no-results' );
                                endif; 
                            ?>
                        </div>
                        <?php if( get_theme_mod( 'it_company_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'it_company_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'it_company_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php it_company_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                    </div>      
                    <div class="col-lg-4 col-md-4"><?php get_sidebar();?></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    <?php }else {?>
        <div id="blog_post">    
            <div class="container"> 
                <div class="row">       
                    <div class="col-lg-9 col-md-9">
                        <h1 class="search-title mb-3 text-center"><?php /* translators: %s: search term */ printf(esc_html('Search Results for: %s','it-company'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if( get_theme_mod( 'it_company_blog_nav_position','bottom') == 'top' || get_theme_mod( 'it_company_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'it_company_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php it_company_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content' , get_post_format() );
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'it_company_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'it_company_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'it_company_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php it_company_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                    </div>      
                    <div class="col-lg-3 col-md-3"><?php get_sidebar();?></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    <?php } ?>
</main>

<?php get_footer(); ?>