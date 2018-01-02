<?php
/**
 * The template for displaying the homepage.
 * Includes multiple loops and a slideshow
 */
get_header(); ?>

<div class="home-page">
	<div class="row attr big-red">
		<div class='col-md-6 home-card'>
			<div class='avatar card-1'> <img  src='<?php echo get_template_directory_uri() ?>/includes/images/write.png'/>
			<span class='role'>Content Writer</span>	
			<p class='role-info'> 10+ years of Experience in Ghost writing and creative content writing over various niches like Health, Lifestyle, Technology, Movies, Games, Social Media, Education etc. </p>	

<script>
<!--

var randomlinks=new Array()

randomlinks[0]="http://devilsworkshop.org/is-the-new-orkut-a-clone-of-facebook/"
randomlinks[1]="https://hellboundbloggers.com/tips-to-increase-twitter-followers/4327/"
randomlinks[2]="http://www.allblogtools.com/tricks-and-hacks/how-to-add-google-web-fonts-to-blogger/"
randomlinks[3]="http://rajeelkp.com/the-divine-light/"
randomlinks[4]="http://crictalks.com/has-the-team-india-became-indian-team-again/"
randomlinks[5]="http://www.donofweb.com/how-to-solve-e-cant-mount-sd-card-error-of-external-sd-card-in-clockworkmod-cwm-recovery/"

function randomlink(){
window.location=randomlinks[Math.floor(Math.random()*randomlinks.length)]
}
//-->
</script>
	</div>
<form method="post">
<p><input class='random-button' type="button" name="B1" value="Read a random article" onclick="randomlink()"></p> </form>



		

		</div>
		<div class='col-md-6 home-card'> <div class='avatar card-1'> <img  src='<?php echo get_template_directory_uri() ?>/includes/images/design.png'/>
		<span class='role'>Web designer</span>
			<p class='role-info'> Experience in Blogger / Wordpress web designing and created several open-source templates. Design Mobile-first and responsive web designs on custom framework as per client requirement. </p>
		<script>
<!--

var randomlinks=new Array()

randomlinks[0]="https://tt003.blogspot.com/"
randomlinks[1]="https://donelegant.blogspot.com/"
randomlinks[2]="http://www.rajeelkp.com"
randomlinks[3]="http://roofings.in/"

function randomlink(){
window.location=randomlinks[Math.floor(Math.random()*randomlinks.length)]
}
//-->
</script></div>
<form method="post">
<p><input class='random-button' type="button" name="B1" value="View a random website" onclick="randomlink()"></p> </form>

		</div>
	</div>
</div>

<div class="row">
	<div class='col-md-12 random-button read' onclick="showBlog()">
		Read Blog >>

	</div>
</div>

<!-- posts -->
<div id='hided'>
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to overload this in a child theme then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
			?>

		<?php endwhile; ?>

		<?php _tk_content_nav( 'nav-below' ); ?>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'index' ); ?>

	<?php endif; ?>

	<!-- posts end -->
</div>

<script>
function showBlog() {
    var x = document.getElementById("hided");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>

<?php get_sidebar(); ?>

<?php get_footer(); ?>