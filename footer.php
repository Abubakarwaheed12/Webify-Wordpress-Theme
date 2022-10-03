    <!--------------------FOOTER-------------------->
 
    <footer>
    <div class="footer">
        <div class="container">
            <div class="ftr_content">
                <div class="ftr_logo">
                    <!-- call widgets -->
                <?php
						if (is_active_sidebar( 'footer-col-1' )) :
							dynamic_sidebar( 'footer-col-1' );
						endif;
					?>

                </div>
             


                <div class="navi">
                        <!-- call widgets -->
                <?php
						if (is_active_sidebar( 'footer-col-2' )) :
							dynamic_sidebar( 'footer-col-2' );
						endif;
					?>
                    <div class="btm_line_ftr"></div>
                    <div class="ftr_menu">
                       <?php 
                       wp_nav_menu(
                        array(
                            'theme-location'=>'footer-menu',
                             'menu_class' =>'ftr_menu',
                        )
                        );
                       ?>
                    </div>
                </div>
                <div class="ftr_services">
                   <!-- call widgets -->
                   <?php
						if (is_active_sidebar( 'footer-col-3' )) :
							dynamic_sidebar( 'footer-col-3' );
						endif;
					?>
               
                </div>
                <div class="social">
                   <!-- call widgets -->
                <?php
						if (is_active_sidebar( 'footer-col-4' )) :
							dynamic_sidebar( 'footer-col-4' );
						endif;
					?>
                </div>
            </div>
            <div class="copyright">
                <p>© 2022 <a href="index.html" style="color:white; text-decoration: none; font-size:17px ;"> Webify.</a> All
                    Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>


<!-- js for menu  -->
<script src=" <?php echo  get_template_directory_uri();?>  /assets/jq plugin/slick1/slick/slick.min.js"></script>
<script src="<?php echo  get_template_directory_uri();?>  /assets/js/app.js"></script>
    <script>
        
    $(document).ready(function(){
        $(".toggle").click(function(){
            // $(".menu.active").toggleClass("active");
            $(".menu").toggleClass("active");
            $(".toggle").toggleClass("active");
        })

        // js for for popup form
        $(".form_btn").click(function(){
            $('#form_content').show();
        })
        //close button
        $('.close_btn').click(function(){
            $('#form_content').hide();
        })

        // slider
        
      });
   </script>
      <?php wp_footer(); ?>