<?php
/**
 * Template Name: Grants
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

$grantsText = get_field('grant_text');
$grantsButtonText = get_field('grant_button_text');
$grantsButtonLink = get_field('grant_button_link');
$grants2018 = get_field('2018_grant_recipients');
$grants2017 = get_field('2017_grant_recipients');
$grants2016 = get_field('2016_grant_recipients');
$grants2015 = get_field('2015_grant_recipients');
?>

<div id="primary" class="content-area clearfix">
	<div class="container">
    	<div class="row">
   			<div class="col-md-12">
   				<div class="grantContentBox">
   					<h1 class="grantTitle"><?php the_title(); ?></h1>
					<div class="grantSubTitle">
						<?php echo $grantsText; ?>
					</div>
					<a href="<?php echo $grantsButtonLink; ?>" class="orangeButton"><?php echo $grantsButtonText; ?></a>
					
	  			</div>
	  			<div class="grantListBox">
	  				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
						  <h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							  2018 Houston PetSet Grant Recipients
							</a>
						  </h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						  <div class="panel-body">
							<?php 

								if($grants2018)
								{
									echo '<ul>';

									foreach($grants2018 as $grant)
									{
									?>
										<li class="grantList-item">
											<span><?php echo $grant['2018_recipient']; ?></span>
										</li>
									<?php
									}

									echo '</ul>';
								}
							?>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
							  2017 Houston PetSet Grant Recipients
							</a>
						  </h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						  <div class="panel-body">
							<?php 

								if($grants2017)
								{
									echo '<ul>';

									foreach($grants2017 as $grant)
									{
									?>
										<li class="grantList-item">
											<span><?php echo $grant['2017_recipient']; ?></span>
										</li>
									<?php
									}

									echo '</ul>';
								}
							?>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">
							  2016 Houston PetSet Grant Recipients
							</a>
						  </h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						  <div class="panel-body">
							<?php 

								if($grants2016)
								{
									echo '<ul>';

									foreach($grants2016 as $grant)
									{
									?>
										<li class="grantList-item">
											<span><?php echo $grant['2016_recipient']; ?></span>
										</li>
									<?php
									}

									echo '</ul>';
								}
							?>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="collapsed">
							  2015 Houston PetSet Grant Recipients
							</a>
						  </h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
						  <div class="panel-body">
							<?php 

								if($grants2015)
								{
									echo '<ul>';

									foreach($grants2015 as $grant)
									{
									?>
										<li class="grantList-item">
											<span><?php echo $grant['2015_recipient']; ?></span>
										</li>
									<?php
									}

									echo '</ul>';
								}
							?>
						  </div>
						</div>
					  </div>
					</div>
	  			</div>
   			</div>
   		</div>
	</div>
</div><!-- .content-area -->


<?php get_footer(); ?>
