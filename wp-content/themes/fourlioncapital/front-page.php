<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="home_wrap">

    <section class="banner" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-bg.jpg');" id="home">
        <div class="container">
            <div class="banner_main">
                <div class="banner_txtwrap">
                    <h1> Differentiated Exposure to  Indian<br class="d-none d-md-block"> Public Equities </h1> 
                </div>
            </div>
        </div>
    </section>

    <section class="home_corVal padd-row" id="home">
        <div class="container">
            <div class="main-heading" data-aos="fade-up">
                <h2> Guided by the Four Lions on the Ashoka Pillar </h2> 
            </div>
            <div class="home_corVal_list">
                <div class="row">
                    <div class="col-md-3 col-6" data-aos="fade-up">
                        <div class="home_corVal_box">
                            <div class="home_corVal_box_icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/core_val_icon_1.svg" alt="icon">
                            </div>
                            <div class="home_corVal_box_txt">
                                <h4> Confidence </h4>
                                <p> in the India Growth Story </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6" data-aos="fade-up">
                        <div class="home_corVal_box">
                            <div class="home_corVal_box_icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/core_val_icon_2.svg" alt="icon">
                            </div>
                            <div class="home_corVal_box_txt">
                                <h4> COURAGE </h4>
                                <p> of Conviction in Difficult Times </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6" data-aos="fade-up">
                        <div class="home_corVal_box">
                            <div class="home_corVal_box_icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/core_val_icon_3.svg" alt="icon">
                            </div>
                            <div class="home_corVal_box_txt">
                                <h4> PRIDE  </h4>
                                <p> in building an institutional grade investment fund </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6" data-aos="fade-up">
                        <div class="home_corVal_box">
                            <div class="home_corVal_box_icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/core_val_icon_4.svg" alt="icon">
                            </div>
                            <div class="home_corVal_box_txt">
                                <h4> FAITH </h4>
                                <p> in Long-Term Approach to Investing </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home_abt_sec bg_grey padd-row" id="about">
        <div class="container">
            <div class="home_abt_secWrap">
                <div class="row">
                    <div class="col-md-3">
                        <div class="main-heading" data-aos="fade-up">
                            <h2> About Us </h2>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="home_abt_rigtSide">
                            <div class="home_abt_secTxt">
                                <p> <strong> FourLion Capital (“FLC”) brings together the complementary skillsets of two partners building an Indian public equities fund. </strong> </p>
                                <p> We deploy global capital in high-quality Indian businesses with a long-term horizon. Leveraging our deep networks within the Indian ecosystem, we conduct private equity-style diligence on public equities. </p>
                            </div>
                            <div class="home_abt_colList">
                                <h3 class="home_abt_heading"> MEET OUR TEAM </h3>
                                <?php if (have_rows('team_boxes')): ?>
                                <div class="row">
                                    <?php 
                                        $modal_count = 0;
                                        $modals = [];
                                        while (have_rows('team_boxes')): the_row(); 
                                        $modal_count++;
                                        $modal_id = 'teamMemberModal' . $modal_count;
                                        $modals[] = $modal_id;
                                    ?>
                                    <div class="col-6 col-md-4">
                                        <a href="javascript:void(0);" class="home_abt_teamBox" data-aos="fade-up" data-toggle="modal" data-target="#<?php echo $modal_id; ?>">
                                            <?php 
                                            $image = get_sub_field('image');
                                            if (!empty($image)): ?>
                                            <div class="home_abt_teamBox_img">
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            </div>
                                            <?php endif; ?>
                                            <div class="home_abt_teamBox_txt">
                                                <?php if (get_sub_field('title')): ?>
                                                <h4><?php echo get_sub_field('title'); ?></h4>
                                                <?php endif; ?>
                                                <?php if (get_sub_field('sub_title')): ?>
                                                <div class="team_desi"><?php echo get_sub_field('sub_title'); ?></div>
                                                <?php endif; ?>
                                                <?php 
                                                $image = get_sub_field('logos');
                                                if (!empty($image)): ?>
                                                    <div class="home_abt_teamBox_logosimg">
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    </div>
                                                <?php endif; ?>
                                                <div class="team_boxLink">
                                                    <span class="team_box_linkBtn"> Know More </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                                <?php  
                                    $modal_count = 0; 
                                    while (have_rows('team_boxes')): the_row(); 
                                    $modal_count++; 
                                    $modal_id = $modals[$modal_count - 1]; // Current modal ID
                                    $prev_modal_id = $modal_count > 1 ? $modals[$modal_count - 2] : ''; // Previous modal ID
                                    $next_modal_id = $modal_count < count($modals) ? $modals[$modal_count] : ''; // Next modal ID
                                ?>
                                <div class="teamModal">
                                    <div class="modal" id="<?php echo $modal_id; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $modal_id; ?>Label" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                        <div class="modal-dialog modal-dialog-centered modal-lg teamModal-animate" role="document">
                                            <div class="modal-content">
                                                <div class="teamModalBox">
                                                    <?php if ($prev_modal_id): ?>
                                                    <button type="button" class="teamModal_navbtn prev_btn d-none d-md-block" data-toggle="modal" data-target="#<?php echo $prev_modal_id; ?>" data-current="#<?php echo $modal_id; ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prev_icon.svg" alt="Prev"></button>
                                                    <?php endif; ?>
                                                    <div class="teamModalBox_row">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-5">
                                                                <div class="teamModalBox_lftSide">
                                                                    <div class="teamModalBox_img">
                                                                        <?php 
                                                $image = get_sub_field('image');
                                                if (!empty($image)): ?>
                                                                         <div class="teamModalBox_image">
                                                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="400" />
                                                                        </div>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <div class="teamModalSocial">
                                                                        <ul>
                                                                            <?php if (get_sub_field('email_url')): ?> 
                                                                            <li><a href="mailto:<?php echo get_sub_field('email_url'); ?>" target="_blank"> <i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                                                            <?php endif; ?> 
                                                                            <?php if (get_sub_field('linked_url')): ?> 
                                                                            <li><a href="<?php echo get_sub_field('linked_url'); ?>" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                                            <?php endif; ?> 
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <div class="teamModalBox_rightSide">
                                                                    <div class="teamModalBox_heading">
                                                                        <?php if (get_sub_field('title')): ?>
                                                                        <h4><?php echo get_sub_field('title'); ?></h4>
                                                                        <?php endif; ?>
                                                                        <?php if (get_sub_field('sub_title')): ?>
                                                                        <div class="teamModalBox_subtitle"><?php echo get_sub_field('sub_title'); ?></div>
                                                                        <?php endif; ?>
                                                                        <div class="teamModalBox_close">
                                                                            <a href="javascript:void(0);" type="button" class="close close_icon" data-dismiss="modal" aria-label="Close">&times;</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="teamModalBox_descWrap">
                                                                        <div class="teamModalBox_desc">
                                                                            <?php echo get_sub_field('description'); ?>
                                                                            <?php 
                                                                            $image = get_sub_field('logos');
                                                                            if (!empty($image)): ?>
                                                                                <div class="home_abt_teamBox_logosimg">
                                                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                                                </div>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php if ($next_modal_id): ?>
                                                    <button type="button" class="teamModal_navbtn next_btn d-none d-md-block" data-toggle="modal" data-target="#<?php echo $next_modal_id; ?>" data-current="#<?php echo $modal_id; ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/next_icon.svg" alt="next"></button>
                                                    <?php endif; ?>
                                                    <div class="teamModal_btnwrap d-md-none">
                                                        <?php if ($prev_modal_id): ?>
                                                        <button type="button" class="teamModal_navbtn prev_btn" data-toggle="modal" data-target="#<?php echo $prev_modal_id; ?>" data-current="#<?php echo $modal_id; ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prev_icon.svg" alt="Prev"></button>
                                                        <?php endif; ?>
                                                        <?php if ($next_modal_id): ?>
                                                        <button type="button" class="teamModal_navbtn next_btn" data-toggle="modal" data-target="#<?php echo $next_modal_id; ?>" data-current="#<?php echo $modal_id; ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/next_icon.svg" alt="next"></button>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="investmentFeaturesWrap padd-row a" id="philosophy">
        <div class="container">
            <div class="investmentFeaturesInner">
                <div class="row">
                    <div class="col-md-3">
                        <div class="investmentTitle">
                            <h2>Investment Philosophy</h2>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="inventmentTabWrap">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Fund Strategy and Objectives
                                        </h5>
                                    </div> 
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">  
                                            <div class="invst_cardbody">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="invst_cardbody_heading">
                                                            <h4> Long-Only </h4>
                                                            <p class="mb-0"> Investment Strategy </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="invst_cardbody_heading">
                                                            <h4> 15-25 Names </h4>
                                                            <p class="mb-0"> Concentrated Portfolio </p>
                                                        </div> 
                                                    </div> 
                                                    <div class="col-md-4">
                                                        <div class="invst_cardbody_heading">
                                                            <h4> Flexi-Cap </h4>
                                                            <p class="mb-0"> Market Cap. Considerations </p>
                                                        </div>     
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="invst_cardbody_heading">
                                                            <h4> >$1mm </h4>
                                                            <p class="mb-0"> Avg. Daily Trading Volume </p>
                                                        </div>   
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="invst_cardbody_heading">
                                                            <h4> 3+ Years </h4>
                                                            <p class="mb-0"> Holding Period </p>
                                                        </div>  
                                                    </div> 
                                                    <div class="col-md-4">
                                                        <div class="invst_cardbody_heading">
                                                            <h4> S&P BSE 500 </h4>
                                                            <p class="mb-0"> Benchmark Index </p>
                                                        </div>    
                                                    </div> 
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            The FourLion Advantage
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="invst_cardbody">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h4> Strong Relationships within Ecosystem </h4>
                                                        <ul>
                                                            <li>Corporate Management Teams</li>
                                                            <li>Indian Fund Managers (Mutual Funds, DIIs, FIIs, etc.)</li>
                                                            <li>Pre-IPO Opportunities</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h4> Differentiated Due-Diligence Capabilities </h4>
                                                        <ul>
                                                            <li>PE-style Diligence to Public Equities</li>
                                                            <li>Proprietary Expert Networks</li>
                                                            <li>Investment Banks / Sell-side Research</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h4> Deep Conviction Investing </h4>
                                                        <ul>
                                                            <li>‘Buy & Hold’ over Long Time Horizons</li>
                                                            <li>Concentrated Book</li>
                                                            <li>Patient Capital</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            PE-style Diligence on Public Equities
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body"> 
                                            <ul>
                                                <li> <h4> Industry Structure </h4></li> 
                                                <li> <h4> Company Deep-dive </h4></li> 
                                                <li> <h4> Management </h4></li> 
                                                <li> <h4> Stock Sentiment </h4></li> 
                                                <li> <h4> Valuation </h4> </li> 
                                            </ul> 
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Investible Universe
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="investImg">
                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/invest-uni.svg" alt="Investment Universe">                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFifth">
                                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
                                            Portfolio Construction
                                        </h5>
                                    </div>
                                    <div id="collapseFifth" class="collapse" aria-labelledby="headingFifth" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th class="tdWhite"></th>
                                                            <th colspan="2" class="text-center">
                                                                15-25 names
                                                            </th>
                                                        </tr>
                                                        <tr class="bgGray">
                                                            <th class="tdWhite"></th>
                                                            <th class="text-center">Core Portfolio</th>
                                                            <th class="text-center">Thesis-Based</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th class="tdWhite"></th>
                                                            <td>60% of AUM</td>
                                                            <td>40% of AUM</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="tdDark">Number of Positions</th>
                                                            <td>5 - 7</td>
                                                            <td>10 - 18</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="tdDark">Holding Period </th>
                                                            <td>5+ years</td>
                                                            <td>2-3 years</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="tdDark">Idea Generation</th>
                                                            <td>
                                                                <ul>
                                                                    <li>Past experience</li>
                                                                    <li>Sectoral knowledge</li>
                                                                    <li>Secular macro tailwinds</li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <ul>
                                                                    <li>Turnaround stories</li>
                                                                    <li>Tech inflections</li>
                                                                    <li>Stock specific controversies</li>
                                                                    <li>PE / strategic activity</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="tdDark">Thesis</th>
                                                            <td>High Quality Names at a reasonable price </td>
                                                            <td>Favorable risk-reward based on thesis</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    <section class="home_princpls bg_blue padd-row" id="principles">
        <div class="container">
            <div class="home_princpls_secWrap">
                <div class="row">
                    <div class="col-md-3">
                        <div class="main-heading text-white" data-aos="fade-up">
                            <h2> Principles </h2> 
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="home_princpls_rigtSide">
                            <div class="home_princpls_list">
                                <div class="row">
                                    <div class="col-md-4 col-6" data-aos="fade-up">
                                        <div class="home_corVal_box">
                                            <div class="home_corVal_box_icon">
                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prinicial_icon_1.svg" alt="icon">
                                            </div>
                                            <div class="home_corVal_box_txt">
                                                <h4> Integrity </h4>
                                                <p> Avoid temptation in all circumstances </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6" data-aos="fade-up">
                                        <div class="home_corVal_box">
                                            <div class="home_corVal_box_icon">
                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prinicial_icon_2.svg" alt="icon">
                                            </div>
                                            <div class="home_corVal_box_txt">
                                                <h4> Student of the Markets </h4>
                                                <p> Curiosity breeds idea generation </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6" data-aos="fade-up">
                                        <div class="home_corVal_box">
                                            <div class="home_corVal_box_icon">
                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prinicial_icon_3.svg" alt="icon">
                                            </div>
                                            <div class="home_corVal_box_txt">
                                                <h4> Stewards of Capital </h4>
                                                <p> Relentless focus on risk management </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6" data-aos="fade-up">
                                        <div class="home_corVal_box">
                                            <div class="home_corVal_box_icon">
                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prinicial_icon_4.svg" alt="icon">
                                            </div>
                                            <div class="home_corVal_box_txt">
                                                <h4> Investment in People </h4>
                                                <p> Our people are our biggest strength </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6" data-aos="fade-up">
                                        <div class="home_corVal_box">
                                            <div class="home_corVal_box_icon">
                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prinicial_icon_5.svg" alt="icon">
                                            </div>
                                            <div class="home_corVal_box_txt">
                                                <h4> Courage </h4>
                                                <p> Be bold; but learn from mistakes </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6" data-aos="fade-up">
                                        <div class="home_corVal_box">
                                            <div class="home_corVal_box_icon">
                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prinicial_icon_6.svg" alt="icon">
                                            </div>
                                            <div class="home_corVal_box_txt">
                                                <h4> Performance </h4>
                                                <p> Excellence in research and due-diligence </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portalWrapper" id="contact">
        <div class="row no-gutters">
            <div class="col-md-6">
                <div class="formWrapper">
                    <h2>Investor Portal</h2>
                    <form class="portalForm" id="portalForm">
                        <div class="formInput">
                            <input type="text" class="inputField" id="userId" placeholder="USER ID/EMAIL" required />
                        </div>
                        <div class="formInput">
                            <input type="password" class="inputField" id="password" placeholder="PASSWORD" required />
                        </div>
                        <div class="formSubmitBtn">
                            <input type="submit" class="submitBtn" value="Submit" />
                        </div>
                        <div class="errorMessage" id="errorMessage">Your Email or Password is wrong.</div>
                    </form> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="formWrapper contactForm">
                    <h2>Get in Touch</h2>
                    <p>We would love to hear from you. Reach out to us for any inquiries or further information.</p>
                    <?php echo do_shortcode('[wpforms id="17" title="false"]'); ?>
                </div>
            </div>
        </div>
    </section>

</div>

<script>
    jQuery(document).ready(function($) {
        $("div[id^='teamMemberModal'], div[id^='teamSupportModal']").each(function() {
            var currentModal = $(this);

            // Click next
            currentModal.find('.next_btn').click(function() {
                currentModal.modal('hide');
                currentModal.on('hidden.bs.modal', function() {
                    currentModal.nextAll("div[id^='teamMemberModal'], div[id^='teamSupportModal']").first().modal('show');
                    currentModal.off('hidden.bs.modal');
                });
            });

            // Click prev
            currentModal.find('.prev_btn').click(function() {
                currentModal.modal('hide');
                currentModal.on('hidden.bs.modal', function() {
                    currentModal.prevAll("div[id^='teamMemberModal'], div[id^='teamSupportModal']").first().modal('show');
                    currentModal.off('hidden.bs.modal');
                });
            });
        });

        $('.modal').on('hidden.bs.modal', function() {
            $('body').removeClass('modal-open');
        });

        $('.modal').on('shown.bs.modal', function() {
            $('body').addClass('modal-open');
        });
    });

</script>

<?php
get_footer();
