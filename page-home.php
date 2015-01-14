<?php
/**
 * Template name: Home
 *
 * @package WordPress
 * @subpackage 
 * @since 
 */
?>

<?php get_header();?>

<div class="container" id="container-page" itemscope itemtype="http://schema.org/Article">
	<div class="schema-hide" itemprop="articleSection"><?php wp_title(); ?></div>
	<div class="row content home-content" itemprop="articleBody">
	<div class="section group">
		<div class="col main-content-span">
			<?php //echo do_shortcode('[smartblock id=424]'); ?>
<p style="text-align:center;"><!--<img src="<?php echo do_shortcode('[blogurl]'); ?>wp-content/uploads/images/dd-lines2.jpg" id="dd-lines-2" />--></p><br/>
			
			<p style="text-align:center;"><img src="<?php echo do_shortcode('[blogurl]'); ?>wp-content/uploads/images/dd-lines2.jpg" id="dd-lines-2" /></p>
<div style="background:#4d628a;font-color:#000000;padding-bottom: 30px;padding-top: 7px;">
			<?php echo do_shortcode('[smartblock id=50]'); ?>
</div>


			<div class="col home-page-one-third-span">
				<div id="inside-home-third-col">
					<div id="fact1"><h2>Abraham Lincoln In Depth</h2></div>
<div id="factimg"><img itemprop="image" title="Abraham Lincoln In Depth" src="<?php echo do_shortcode('[blogurl]'); ?>wp-content/uploads/2014/05/in-depth.jpg" alt="Abraham Lincoln In Depth" width="216" height="86" border="0" /></div>
				<?php dynamic_sidebar('sidebar-home-in-depth-section'); ?>			
				</div>
			</div>
			<div class="col home-page-one-third-span">
				<div id="inside-home-third-col">
					<div id="fact1"><h2>Abraham Lincoln & Freedom</h2></div>
<div id="factimg"><img itemprop="image" title="Abraham Lincoln & Freedom" src="<?php echo do_shortcode('[blogurl]'); ?>wp-content/uploads/2014/05/freedom.jpg" alt="Abraham Lincoln & Freedom" width="216" height="86" border="0" /></div>
				<?php dynamic_sidebar('sidebar-home-freedom-section'); ?>			
				</div>
			</div>
			<div class="col home-page-one-third-span">
				<div id="inside-home-third-col">
					<div id="fact1"><h2>Abraham Lincoln's White House</h2></div>
					<div id="factimg">
					<img itemprop="image" title="Abraham Lincoln's White House" src="<?php echo do_shortcode('[blogurl]'); ?>wp-content/uploads/2014/05/whitehouse.jpg" alt="Abraham Lincoln's White House" width="216" height="86" border="0" /></div>
				<?php dynamic_sidebar('sidebar-home-white-house-section'); ?>	
				</div>
			</div>

<p style="text-align:center;"><img src="<?php echo do_shortcode('[blogurl]'); ?>wp-content/uploads/images/dd-lines2.jpg" id="dd-lines-2" /></p>
<div style="background:#4d628a;font-color:#000000;padding-bottom: 30px;padding-top: 7px;">
			<?php echo do_shortcode('[smartblock id=50]'); ?>
</div>


<p style="text-align:center;"><img src="<?php echo do_shortcode('[blogurl]'); ?>wp-content/uploads/images/dd-lines2.jpg" id="dd-lines-2" /></p>

			<div class="col home-page-one-third-span">
				<div id="inside-home-third-col">
				<?php echo do_shortcode('[smartblock id=43]'); ?>
				</div>
			</div>
			<div class="col home-page-one-third-span">
				<div id="inside-home-third-col">
				<?php echo do_shortcode('[smartblock id=44]'); ?>
				</div>
			</div>
			<div class="col home-page-one-third-span">
				<div id="inside-home-third-col">
				<?php echo do_shortcode('[smartblock id=45]'); ?>
				</div>
			</div>
				<?php echo do_shortcode('[smartblock id=102]'); ?>
<p style="text-align:center;"><img src="<?php echo do_shortcode('[blogurl]'); ?>wp-content/uploads/images/dd-lines2.jpg" id="dd-lines-2" /></p>
			<div class="col home-page-one-third-span">
				<div id="inside-home-third-col">
					<div id="fact1"><h2>Abraham Lincoln & Friends</h2></div>
<div id="factimg"><img itemprop="image" title="Abraham Lincoln & Friends" src="<?php echo do_shortcode('[blogurl]'); ?>wp-content/uploads/2014/05/friends.jpg" alt="Abraham Lincoln & Friends" width="216" height="86" border="0" /></div>
				<?php dynamic_sidebar('sidebar-home-friends-section'); ?>			
				</div>
			</div>
			<div class="col home-page-one-third-span">
				<div id="inside-home-third-col">
					<div id="fact1"><h2>Abraham Lincoln & New York</h2></div>
<div id="factimg"><img itemprop="image" title="Abraham Lincoln & New York" src="<?php echo do_shortcode('[blogurl]'); ?>wp-content/uploads/2014/05/nyc-draft.jpg" alt="Abraham Lincoln & New York" width="216" height="86" border="0" /></div>
				<?php dynamic_sidebar('sidebar-home-new-york-section'); ?>			
				</div>
			</div>
			<div class="col home-page-one-third-span">
				<div id="inside-home-third-col">
					<div id="fact1"><h2>Lincoln's Contemporaries</h2></div>
					<div id="factimg">
					<img itemprop="image" title="Lincoln's Contemporaries" src="<?php echo do_shortcode('[blogurl]'); ?>wp-content/uploads/2014/05/contemp.jpg" alt="Lincoln's Contemporaries" width="216" height="86" border="0" /></div>
					<?php dynamic_sidebar('sidebar-home-contemporaries-section'); ?>			
				</div>
			</div>
<p style="text-align:center;"><img src="<?php echo do_shortcode('[blogurl]'); ?>wp-content/uploads/images/dd-lines2.jpg" id="dd-lines-2" /></p>
			<?php echo do_shortcode('[smartblock id=49]'); ?>
<p style="text-align:center;"><img src="<?php echo do_shortcode('[blogurl]'); ?>wp-content/uploads/images/dd-lines2.jpg" id="dd-lines-2" /></p>
		</div>
		<div class="col sidebar-span">
	    		<?php dynamic_sidebar('sidebar-home'); ?>			
		</div>
	</div>
	<!--
	<div class="section group" style="background:#4d628a;">
		<div class="col main-content-span" style="background:#4d628a;">
			<div id="inside-home-third-col">
			<?php //echo do_shortcode('[smartblock id=50]'); ?>
			</div>
		</div>
		<div class="col sidebar-span">
			<div id="inside-home-third-col">
	    		<?php //echo do_shortcode('[smartblock id=51]'); ?>
			</div>			
		</div>
	</div>	
	-->
</div>

<?php get_footer(); ?>