<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<main class="l-index">
	<div class="hero u-flex u-flex--center" id="js-hero">
		<div class="hero__left">
			<div class="hero__eyecatch" id="js-hero-image-1" style="background-image: url(<?php echo IMAGE_URL; ?>hero-1-final.png);" data-splitting="cells" data-columns="10"></div>
			<img src="<?php echo IMAGE_URL; ?>hero-2-final.png" alt="" id="js-hero-image-2">
			<img src="<?php echo IMAGE_URL; ?>hero-3.png" alt="" id="js-hero-image-3">
		</div>
		<div class="hero__right" id="js-hero-right">
			<h2>All-in-One Digital Marketing Services</h2>
			<p>First impression indeed counts.</p>
			<p>Your potential leads will enjoy a seamless experience navigating through your customer-centric site leaving them with a lasting impression.
			<a href="#js-contact" class="button js-scroll" data-text="CONTACT US">
				<span>GET QUOTE</span>
			</a>
		</div>
		<div class="hero__decor hero__decor--left rellax" data-rellax-speed="3" data-rellax-xs-speed="2">
			<?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/images/d-overlay.svg' ); ?>
		</div>
		<div class="hero__decor hero__decor--right rellax" data-rellax-speed="-3" data-rellax-xs-speed="-2">
			<?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/images/d-overlay.svg' ); ?>
		</div>
	</div>
	<section class="l-index__about" id="js-about">
		<div class="l-container js-scroll-activate">
			<h2 class="section-title">ABOUT</h2>
			<p><span>Digidence Inc.</span> is an end-to-end digital marketing agency that offers <span>strategic consultancy and development</span> for startups to growing businesses.</p>
			<p>Whether you need a user-friendly <span>website design</span>, or you want to increase your <span>brand awareness</span> in search engines and social media, we’re here to work on making your first impression last.</p>
		</div>
	</section>
	<section class="l-index__services" id="js-services">
		<div class="l-container js-scroll-activate">
			<h2 class="section-title">SERVICES</h2>
			<ul class="l-index__services-list u-flex">
				<li>
					<div class="service">
						<div class="service__image"></div>
						<h3>Web Design / Development</h3>
						<ul>
							<li>Create Stunning and User-Friendly Design</li>
							<li>Create interactive animation with website</li>
							<li>Implement website via Wordpress</li>
							<li>Desktop and Mobile Ready</li>
						</ul>
					</div>
				</li>
				<li>
					<div class="service">
						<div class="service__image"></div>
						<h3>Search Engine Optimization</h3>
						<ul>
							<li>Website audit</li>
							<li>Competitor Research</li>
							<li>Target Market Research</li>
							<li>Generate data driven 3 months blog topics</li>
							<li>Optimize website meta description</li>
							<li>Optimize Title Tags</li>
							<li>Optimize Heading Tags</li>
							<li>Site Map</li>
						</ul>
					</div>
				</li>
				<li>
					<div class="service">
						<div class="service__image"></div>
						<h3>Social Media Management</h3>
						<ul>
							<li>20 social media posts <span>( Facebook and Instagram )</span></li>
							<li>Hashtags research <span>( update monthly by trends )</span></li>
							<li>Engagement to audience weekly </li>
							<li>Sharing relevant posts <span>( not from competitors )</span></li>
							<li>Stories weekdays</li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
		<div class="l-index__services-overlay"></div>
		<div class="l-index__services-decor l-index__services-decor--left rellax"  data-rellax-speed="5" data-rellax-xs-speed="3"></div>
		<div class="l-index__services-decor l-index__services-decor--right rellax"  data-rellax-speed="-5" data-rellax-xs-speed="-3"></div>
	</section>
	<section class="l-index__packages" id="js-packages">
		<div class="l-container js-scroll-activate">
			<h2 class="section-title">PACKAGES</h2>
			<ul>
				<li>
					<div class="package u-flex u-flex--center">
						<div class="package__left">
							<h3><span>6</span> MONTHS</h3>
						</div>
						<div class="package__right">
							<div class="package__details u-flex u-flex--center">
								<h4>ELEPHANT</h4>
								<p>$2400</p>
							</div>
							<p class="package__inclusions">Web Design / Development | SEO | Social Media Management</p>
						</div>
					</div>
				</li>
				<li>
					<div class="package u-flex u-flex--center">
						<div class="package__left">
							<h3><span>12</span> MONTHS</h3>
						</div>
						<div class="package__right">
							<div class="package__details u-flex u-flex--center">
								<h4>ORCA</h4>
								<p>$2000</p>
							</div>
							<p class="package__inclusions">Web Design / Development | SEO | Social Media Management</p>
						</div>
					</div>
				</li>
				<li>
					<div class="package u-flex u-flex--center">
						<div class="package__left">
							<h3><span>18</span> MONTHS</h3>
						</div>
						<div class="package__right">
							<div class="package__details u-flex u-flex--center">
								<h4>EAGLE</h4>
								<p>$1800</p>
							</div>
							<p class="package__inclusions">Web Design / Development | SEO | Social Media Management</p>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<section class="l-index__works js-scroll-activate">
		<h2 class="section-title">LATEST WORKS</h2>
		<ul id="js-works-slider">
			<li>
				<a href="https://a-ble.co.jp/" target="_blank">
					<img src="<?php echo IMAGE_URL; ?>works-1.png" alt="">
				</a>
			</li>
			<li>
				<a href="https://edulead.jp/" target="_blank">
					<img src="<?php echo IMAGE_URL; ?>works-2.png" alt="">
				</a>
			</li>
			<li>
				<a href="https://travel-doctor.jp/tabikana-project/" target="_blank">
					<img src="<?php echo IMAGE_URL; ?>works-3.png" alt="">
				</a>
			</li>
			<li>
				<a href="https://oc-house.com/" target="_blank">
					<img src="<?php echo IMAGE_URL; ?>works-4.png" alt="">
				</a>
			</li>
			<li>
				<a href="https://vom.world/" target="_blank">
					<img src="<?php echo IMAGE_URL; ?>works-5.png" alt="">
				</a>
			</li>
			<li>
				<a href="https://chat-mado.com/" target="_blank">
					<img src="<?php echo IMAGE_URL; ?>works-6.png" alt="">
				</a>
			</li>
		</ul>
	</section>
	<section class="l-index__reasons">
		<div class="l-container js-scroll-activate">
			<h2 class="section-title">WHY WORK WITH US</h2>
			<ul class="u-flex">
				<li>
					<div class="reason">
						<div class="reason__image"></div>
						<div class="reason__details">
							<h3>Passionate Creatives</h3>
							<p>We love strategizing for the digital world. Helping professionals and businesses reach their goals through our knowledge, passion, and creativity encourages us to keep doing what we do best.</p>
						</div>
					</div>
				</li>
				<li>
					<div class="reason">
						<div class="reason__image"></div>
						<div class="reason__details">
							<h3>Adaptable Digital Professionals</h3>
							<p>We know your time is valuable and you have a lot of tasks on your hands. You can entrust the digital marketing tasks with us and we assure you, they’re in good hands.</p>
						</div>
					</div>
				</li>
				<li>
					<div class="reason">
						<div class="reason__image"></div>
						<div class="reason__details">
							<h3>Advocates for Progress</h3>
							<p>Digital Marketing is a fast-moving world, and we aspire to move along with it. We believe in progress and constant improvement, so we can assure you that your online marketing strategies keep up with the latest trends.</p>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<aside class="l-index__contact js-scroll-activate" id="js-contact">
		<div class="contact">
			<h2 class="contact__title">Get in touch</h2>
			<p class="contact__tagline">Get A Quote From Us!</p>
			<?php echo do_shortcode('[contact-form-7 id="6" title="Contact Form"]'); ?>
			<ul class="contact__sns u-flex">
				<li>
					<a href="https://www.facebook.com/digidence.inc" target="_blank">
						<i class="icon icon-facebook"></i>
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/digidence.inc/" target="_blank">
						<i class="icon icon-instagram"></i>
					</a>
				</li>
				<li>
					<a href="https://www.linkedin.com/company/75111371/" target="_blank">
						<i class="icon icon-linkedin"></i>
					</a>
				</li>
			</ul>
			<a href="https://digidence.net">
				<img src="<?php echo IMAGE_URL; ?>letter-d.svg" class="contact__logo">
			</a>
		</div>
		<div class="l-index__contact-decor l-index__contact-decor--left rellax"  data-rellax-speed="4" data-rellax-xs-speed="2">
			<?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/images/d-overlay.svg' ); ?>
		</div>
		<div class="l-index__contact-decor l-index__contact-decor--right rellax"  data-rellax-speed="-4" data-rellax-xs-speed="-2">
			<?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/images/d-overlay.svg' ); ?>
	</aside>
</main>

<?php
get_footer();