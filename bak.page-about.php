<?php
/**
 * Template Name: About Page
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

$banner_section_title = get_field('banner_section_title');
$banner_section_text = get_field('banner_section_text');
$banner_section_button_text = get_field('banner_section_button_text');
$banner_section_button_link = get_field('banner_section_button_link');
$section_one_title = get_field('section_one_title');
$section_one_text = get_field('section_one_text');
$section_one_button_text = get_field('section_one_button_text');
$section_one_button_link = get_field('section_one_button_link');
$section_two_title = get_field('section_two_title');
$section_two_text = get_field('section_two_text');
$board_of_directors_text = get_field('board_of_directors_text');
$board_of_directors = get_field('board_of_directors');
$advisory_board = get_field('advisory_board');

?>

<div class="pageTopTitle AboutPageTop">
	<div class="container">
		<h1 class="page-title"><?php echo $banner_section_title; ?></h1>
		<div class="page-top-content"><?php echo $banner_section_text; ?></div>
		<div class="page-top-button"><a href="<?php echo $banner_section_button_link; ?>"  class="orangeButton"><?php echo $banner_section_button_text; ?></a></div>
	</div>
</div>

<div class="aboutSection1">
	<div class="container">
    	<div class="itemTitle"><?php echo $section_one_title; ?></div>
        <span class="homeText "><?php echo $section_one_text; ?></span>
        <a href="<?php echo $section_one_button_link; ?>" class="orangeButton"><?php echo $section_one_button_text; ?></a>
    </div>
</div>

<div class="aboutSection2 clearfix">
	<div class="aboutSection2-left"></div>
	<div class="aboutSection2-right">
		<div class="itemTitle"><?php echo $section_two_title; ?></div>
        <span class="homeText ">
			<?php echo $section_two_text; ?>
			<div class="badgeBox"><a href="https://927paws.org/?utm_source=reportcruelty&utm_campaign=badge" title="Report Animal Cruelty via 927paws.org" style="margin:0;padding:0;outline:none;border:none;"><img src="https://927paws.org/taskforce-badge-2018.png" alt="Report Animal Cruelty - 927paws.org" width="130" height="130"/></a></div>
		</span>
	</div>
</div>

<div class="aboutboardSection clearfix">
	<div class="container">
		<div class="directorsSection">
	       	<div class="itemTitle">Board of Directors</div>
	        <span class="homeText "><?php echo $board_of_directors_text; ?></span>
	        <div class="directorsContainer clearfix">
	        	<?php 
					$directorCount = 0; 
					if($board_of_directors)
					{
						echo '<ul class="directorList">';

						foreach($board_of_directors as $director)
						{
							$image = $director['director_portrait'];
							$title = $director['director_title'];
							$modal = $director['director_modal_text'];
							
						?>
							<li class="directorItemHolder">
								<div class="directorItemBox">
									<?php if($modal){ ?><a href="#" data-toggle="modal" data-target="#directorModal<?php echo $directorCount; ?>"><?php } ?>
									<?php if($image){ ?><div class="directorPortrait"><img src="<?php echo $director['director_portrait']; ?>" /></div><?php } ?>
									<div class="directorName"><?php echo $director['director_name']; ?></div>
									<?php if($modal){ ?></a><?php } ?>
									<?php if($title){ ?><div class="directorTitle"><?php echo $director['director_title']; ?></div><?php } ?>
								</div>
							</li>
							<?php if($modal){ ?>		
								<div class="modal fade" id="directorModal<?php echo $directorCount; ?>" tabindex="-1" role="dialog">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel"><?php echo $director['director_name']; ?></h4>
									  </div>
									  <div class="modal-body">
										<div class="supportModalText"><?php echo $modal; ?></div>
									  </div>
									</div>
								  </div>
								</div>
							<?php } ?>
						<?php
							$directorCount++;
						}

						echo '</ul>';
					}
				?>
	        </div>
        </div>
        <div class="advisorySection">
	       	<div class="itemTitle">Advisory Board</div>
	        <div class="advisoryContainer">
	        	<?php 

					if($advisory_board)
					{
						echo '<ul class="advisoryList">';

						foreach($advisory_board as $advisory)
						{
						?>
							<div class="advisoryhold">
							<li class="advisoryItemHolder">
								<div class="advisoryName"><?php echo $advisory['board_member_name']; ?></div>
							</li>
							</div>
						<?php
						}

						echo '</ul>';
					}
				?>
	        </div>
        </div>
	</div>
</div>

<?php get_footer(); ?>
