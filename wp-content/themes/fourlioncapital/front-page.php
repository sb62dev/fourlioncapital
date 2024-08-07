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
                    <h1> Differentiated Exposure to <br class="d-none d-md-block"> Indian Equities </h1>
                    <div class="banner-desc">
                        <p> We Make Long-Term Investments in High-Quality Businesses </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home_corVal padd-row" id="home">
        <div class="container">
            <div class="main-heading" data-aos="fade-up">
                <h2> Core Values </h2>
                <p> Guided by the four lions on the Ashoka Pillar, our philosophy is rooted in a deep conviction in: </p>
            </div>
            <div class="home_corVal_list">
                <div class="row">
                    <div class="col-md-3 col-6" data-aos="fade-up">
                        <div class="home_corVal_box">
                            <div class="home_corVal_box_icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/core_val_icon_1.svg" alt="icon">
                            </div>
                            <div class="home_corVal_box_txt">
                                <h4> Confidence <span>in the India Growth Story</span></h4>
                                <p> Our unwavering belief in India's growth potential drives our investment strategies, allowing us to capitalize on emerging opportunities and deliver value to our clients.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6" data-aos="fade-up">
                        <div class="home_corVal_box">
                            <div class="home_corVal_box_icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/core_val_icon_2.svg" alt="icon">
                            </div>
                            <div class="home_corVal_box_txt">
                                <h4> COURAGE <span>of Conviction in Difficult Times</span></h4>
                                <p> We stand firm in our decisions during challenging times, guided by thorough research and a deep understanding of the market. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6" data-aos="fade-up">
                        <div class="home_corVal_box">
                            <div class="home_corVal_box_icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/core_val_icon_3.svg" alt="icon">
                            </div>
                            <div class="home_corVal_box_txt">
                                <h4> PRIDE <span>in building an institutional grade investment fund</span></h4>
                                <p> We take pride in our meticulous approach to creating a robust, institutional-grade investment fund that meets the highest standards of excellence. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6" data-aos="fade-up">
                        <div class="home_corVal_box">
                            <div class="home_corVal_box_icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/core_val_icon_4.svg" alt="icon">
                            </div>
                            <div class="home_corVal_box_txt">
                                <h4> FAITH <span>in Long-Term Approach to Investing</span></h4>
                                <p> Our commitment to a long-term investment strategy ensures that we prioritize sustainable growth and consistent returns for our clients. </p>
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

    <section class="investmentFeaturesWrap padd-row" id="philosophy">
        <div class="container">
            <div class="investmentFeaturesInner">
                <div class="row">
                    <div class="col-md-3">
                        <div class="investmentTitle">
                            <h2>Investment Philosophy</h2>
                            <p>We focus on high-quality investments, guided by thorough research and a long-term growth strategy</p>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="inventmentTabWrap">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Fund Strategy and Objectives
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Long-Only Investment Strategy</p>
                                            <p>15-25 Names Concentrated Portfolio</p>
                                            <p>Flexi-Cap Market Cap. Considerations</p>
                                            <p>3+ Years Holding Period</p>
                                            <p>$1mm Avg. Daily Trading Volume</p>
                                            <p>S&P BSE 500 Benchmark Index</p>
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
                                            <p>Strong Relationships within Ecosystem</p>
                                            <ul>
                                                <li>Corporate Management Teams</li>
                                                <li>Indian Fund Managers (Mutual Funds, DIIs, FIIs, etc.)</li>
                                                <li>Pre-IPO Opportunities</li>
                                            </ul>
                                            <p>Differentiated Due-Diligence Capabilities.</p>
                                            <ul>
                                                <li>PE-style Diligence to Public Equities</li>
                                                <li>Proprietary Expert Networks</li>
                                                <li>Investment Banks / Sell-side Research</li>
                                            </ul>
                                            <p>Deep Conviction Investing</p>
                                            <ul>
                                                <li>‘Buy & Hold’ over Long Time Horizons</li>
                                                <li>Concentrated Book</li>
                                                <li>Patient Capital</li>
                                            </ul>
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
                                            <p>Industry Structure</p>
                                            <ul>
                                                <li>Tailwinds and headwinds due to secular / cyclical factors</li>
                                                <li>Customer, supplier, competitor bargaining power / capture of value in supply chain</li>
                                                <li>Barriers to entry / specific MOATs</li>
                                            </ul>
                                            <p>Company Deep-dive</p>
                                            <ul>
                                                <li>Identify the actual TAM, its growth and adjacencies</li>
                                                <li>Competitive differentiation, strategic positioning and revenue growth drivers</li>
                                                <li>Operating leverage</li>
                                                <li>Earnings / free cash flow algorithm</li>
                                            </ul>
                                            <p>Management</p>
                                            <ul>
                                                <li>Historical track record of capital allocation</li>
                                                <li>Related party transactions, if any</li>
                                                <li>Outstanding and potential legal and tax obligations</li>
                                                <li>Auditor relationship</li>
                                                <li?>Earnings communications and disclosures</li>
                                            </ul>
                                            <p>Stock Sentiment</p>
                                            <ul>
                                                <li>Deep understanding of free float and consistent market participants in the stock</li>
                                                <li>Buy-side (institutional) sentiment assessment</li>
                                                <li>PE/VC position overhang with potential supply of blocks</li>
                                            </ul>
                                            <p>Valuation</p>
                                            <ul>
                                                <li>Reverse DCF to understand market assumptions</li>
                                                <li>Bottoms-up analysis to calculate fair value of shares</li>
                                                <li>Floor and ceiling assessment based on probabilities</li>
                                                <li>Strategic takeout potential</li>
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
                                                            <th class="tdDark"></th>
                                                            <th colspan="2" class="text-center">
                                                                15-25 names
                                                            </th>
                                                        </tr>
                                                        <tr class="bgGray">
                                                            <th class="tdDark"></th>
                                                            <th class="text-center">Core Portfolio</th>
                                                            <th class="text-center">Thesis-Based</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th class="tdDark"></th>
                                                            <td>(60% of AUM)</td>
                                                            <td>(40% of AUM)</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="tdDark">Number of Positions</th>
                                                            <td>5 – 7</td>
                                                            <td>10 – 18</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="tdDark">Holding Period </th>
                                                            <td>7 – 10 years</td>
                                                            <td>2 – 5 years</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="tdDark">Idea Generation</th>
                                                            <td>
                                                                <ul>
                                                                    <li>Past experience /</li>
                                                                    <li>Sectoral knowledge</li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <ul>
                                                                    <li>Step change regulations, tech</li>
                                                                    <li>Inflections, stock specific controversies,</li>
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
                            <p> Guided by our principles, we drive every decision with purpose </p>
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
