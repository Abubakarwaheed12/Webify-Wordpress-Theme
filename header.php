<?php
$logo = get_header_image();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo the_title(); ?></title>
    <script src="<?php echo get_template_directory_uri(); ?> /assets/jquery/jquery-3.6.0.js"></script>
    <script src="https://kit.fontawesome.com/777a0b0f94.js" crossorigin="anonymous"></script>
    <script src="assets/js/app.js"></script>
</head>
<?php wp_head(); ?>

<body>
    <!-- ---------------HEADER----------- -->
    <header class="header">
        <div class="container">
            <!-- ---------NAVBAR ------------->
            <div class="navbar">
                <div class="logo">
                    <a href="<?php bloginfo('url'); ?>"><img src=" <?php echo $logo ?>" alt="" />
                    </a>
                </div>
                <div class="menu">

                    <?php wp_nav_menu(
                        array('theme_location' => 'primary-menu')
                    ); ?>

                </div>
                <div class="request_purposal">
                    <a href="#" class="form_btn">request purposal
                        <span class="req_icon"><img src="assets/images/arrow.png" alt="" /></span></a>
                </div>
                <div class="toggle">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>

        </div>
    </header>
    <!----------------MODAL POPUP FORM ------->
    <section class="modal_popup">
        <div class="modal_form" id="form_content">
            <div class="form_data">
                <div class="close_btn">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="form_text">
                    <h2>What Makes Us Different?</h2>
                    <p>Please fill out the short form below with your project details
                        and we will be in touch shortly.</p>
                </div>
                <div class="form">
                    <div class="form_flex1">
                        <div class="name">
                            <span class="name_icon">
                                <input type="text" name="" placeholder="Name">
                            </span>
                        </div>
                        <div class="email">
                            <span class="email_icon">
                                <input type="email" name="" placeholder="Email">
                            </span>
                        </div>

                    </div>
                    <div class="form_flex1">
                        <div class="url">
                            <span class="url_icon">
                                <input type="url" name="" placeholder="Your Website URL">
                            </span>
                        </div>
                        <div class="budget">
                            <span class="bug_icon">
                                <select name="" id="">
                                    <option value="">Your Budget</option>
                                    <option value="">3500-2500</option>
                                    <option value="">3500-5000</option>
                                    <option value="">3500-5000</option>
                                </select>
                            </span>
                        </div>
                    </div>
                    <div class="message">
                        <span class="mes">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                        </span>
                    </div>
                    <div class="send_btn">
                        <span class="btn_icon">
                            <input type="button" value="Send Me A Proposal">
                            <img src="assets/images/arrow.png" alt="">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>