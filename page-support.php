<?php
/**
 * Template Name: Support Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();

$amazon_smile_modal_text = get_field('amazon_smile_modal_text');
$amazon_smile_modal_button_text = get_field('amazon_smile_modal_button_text');
$amazon_smile_modal_button_link = get_field('amazon_smile_modal_button_link');
$charity_charge_modal_text = get_field('charity_charge_modal_text');
$charity_charge_modal_button_text = get_field('charity_charge_modal_button_text');
$charity_charge_modal_button_link = get_field('charity_charge_modal_button_link');
$gift_modal_text = get_field('gift_modal_text');
$gift_modal_button_text = get_field('gift_modal_button_text');
$gift_modal_button_link = get_field('gift_modal_button_link');
$mail_modal_text = get_field('mail_modal_text');
$mail_modal_button_text = get_field('mail_modal_button_text');
$mail_modal_button_link = get_field('mail_modal_button_link');
$employer_match_modal_text = get_field('employer_match_modal_text');
$employer_match_modal_button_text = get_field('employer_match_modal_button_text');
$employer_match_modal_button_link = get_field('employer_match_modal_button_link');
$planned_gift_modal_text = get_field('planned_gift_modal_text');
$planned_gift_modal_button_text = get_field('planned_gift_modal_button_text');
$planned_gift_modal_button_link = get_field('planned_gift_modal_button_link');

?>

<div id="primary" class="content-area clearfix">
	<div class="container">
   		<div class="row supportTopRow">
   			<div class="col-md-12">
   				<div class="supportContentBox">
   					<h1 class="contactTitle"><?php the_title(); ?></h1>
					<div class="supportSubTitle">
						<?php the_content(); ?>
					</div>
					<!--<a href="https://houstonpetset.salsalabs.org/donationform/index.html" class="orangeButton" target="_blank">Donate</a>
					<div style="background:#ff5b34; border-radius:0px 0px 0px 0px;font-weight:bold; border:none;box-shadow:none;left: 50%; margin-left:-72.5px;clear: both;display: block; width:145px;height:45px; line-height:2.8; position:relative; font-size:16px;text-align:center; cursor:pointer;color:#fff;text-decoration: none; z-index:1" onclick="open_window('MzUwMTg=')">DONATE</div>-->
					
	  			</div>
   			</div>
   		</div>
    	<div class="row">
       		<div class="col-md-12">
       			<div class="otherDonates">
       				<div class="donateTitle">Other Ways to Donate</div>
                    <p class="donateP">Help Houston PetSet alleviate the suffering and homelessness of our community’s companion animals. With your gift, you directly support our efforts, and our partners’ efforts, in transport and rescue, spay and neuter, cruelty prevention, research, community service and education and advocacy.</p>
       				<!-- <div class="donateitemsRow">
       					<a href="#" data-toggle="modal" data-target="#amazonSmile"><div class="donateItem">
       						<div class="donateItemIcon donateiconSmile"></div>
       						<div class="donateItemTitle">Amazon Smile</div>
       					</div></a>
       					<a href="#" data-toggle="modal" data-target="#charityCharge"><div class="donateItem">
       						<div class="donateItemIcon donateiconCharge"></div>
       						<div class="donateItemTitle">Charity Charge</div>
       					</div></a>

       				</div>-->
       				<div class="donateitemsRow clearfix">
       					<a href="#" data-toggle="modal" data-target="#Gift"><div class="donateItem">
       						<div class="donateItemIcon donateiconGift"></div>
       						<div class="donateItemTitle">Gift</div>
       					</div></a>
       					<a href="#" data-toggle="modal" data-target="#Mail"><div class="donateItem">
       						<div class="donateItemIcon donateiconMail"></div>
       						<div class="donateItemTitle">Mail</div>
       					</div></a>
       					<a href="#" data-toggle="modal" data-target="#employerMatch"><div class="donateItem">
       						<div class="donateItemIcon donateiconEmployer"></div>
       						<div class="donateItemTitle">Employer Match</div>
       					</div></a>
       					<a href="#" data-toggle="modal" data-target="#plannedGift"><div class="donateItem">
       						<div class="donateItemIcon donateiconPlanned"></div>
       						<div class="donateItemTitle">Planned Gift</div>
       					</div></a>
       				</div>
       			</div>
       		</div>
        </div>
	</div>
</div><!-- .content-area -->

<div class="modal fade" id="amazonSmile" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Amazon Smile</h4>
      </div>
      <div class="modal-body">
        <div class="supportModalText"><?php echo $amazon_smile_modal_text; ?></div>
		<?php if($amazon_smile_modal_button_link && $amazon_smile_modal_button_text){ ?><a href="<?php echo $amazon_smile_modal_button_link; ?>" class="orangeButton" target="_blank"><?php echo $amazon_smile_modal_button_text; ?></a><?php } ?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="charityCharge" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Charity Charge</h4>
      </div>
      <div class="modal-body">
        <div class="supportModalText"><?php echo $charity_charge_modal_text; ?></div>
		<?php if($charity_charge_modal_button_link && $charity_charge_modal_button_text){ ?><a href="<?php echo $charity_charge_modal_button_link; ?>" class="orangeButton" target="_blank"><?php echo $charity_charge_modal_button_text; ?></a><?php } ?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Gift" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Gift</h4>
      </div>
      <div class="modal-body">
        <div class="supportModalText"><?php echo $gift_modal_text; ?></div>
		<?php if($gift_modal_button_link && $gift_modal_button_text){ ?><a href="<?php echo $gift_modal_button_link; ?>" class="orangeButton" target="_blank"><?php echo $gift_modal_button_text; ?></a><?php } ?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Mail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Mail</h4>
      </div>
      <div class="modal-body">
        <div class="supportModalText"><?php echo $mail_modal_text; ?></div>
		<?php if($mail_modal_button_link && $$mail_modal_button_text){ ?><a href="<?php echo $mail_modal_button_link; ?>" class="orangeButton" target="_blank"><?php echo $mail_modal_button_text; ?></a><?php } ?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="employerMatch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Employer Match</h4>
      </div>
      <div class="modal-body">
        <div class="supportModalText"><?php echo $employer_match_modal_text; ?></div>
		<?php if($employer_match_modal_button_link && $employer_match_modal_button_text){ ?><a href="<?php echo $employer_match_modal_button_link; ?>" class="orangeButton" target="_blank"><?php echo $employer_match_modal_button_text; ?></a><?php } ?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="plannedGift" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Planned Gift</h4>
      </div>
      <div class="modal-body">
        <div class="supportModalText"><?php echo $planned_gift_modal_text; ?></div>
		<?php if($planned_gift_modal_button_link && $planned_gift_modal_button_text){ ?><a href="<?php echo $planned_gift_modal_button_link; ?>" class="orangeButton" target="_blank"><?php echo $planned_gift_modal_button_text; ?></a><?php } ?>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
