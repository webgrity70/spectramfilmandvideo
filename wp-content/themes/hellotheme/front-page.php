<?php get_header(); ?>
<main>
    <!-- carousel -->
    <section id="homeCarousels" class="carousel slide carousel-fade homeCarousel" data-ride="carousel">
        <ol class="carousel-indicators align-items-center">
            <li data-target="#homeCarousels" data-slide-to="0" class="active"></li>
            <li data-target="#homeCarousels" data-slide-to="1"></li>
            <li data-target="#homeCarousels" data-slide-to="2"></li>
            <li data-target="#homeCarousels" data-slide-to="3"></li>
            <li data-target="#homeCarousels" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/banner1.jpg" class="d-block w-100" alt="" loading="lazy">
            </div>
            <div class="carousel-item">
                <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/Banner2.jpg" class="d-block w-100" alt="" loading="lazy">
            </div>
            <div class="carousel-item">
                <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/Banner3.jpg" class="d-block w-100" alt="" loading="lazy">
            </div>
            <div class="carousel-item">
                <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/Banner4.jpg" class="d-block w-100" alt="" loading="lazy">
            </div>
            <div class="carousel-item">
                <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/Banner5.jpg" class="d-block w-100" alt="" loading="lazy">
            </div>
        </div>
    </section>
    <!-- ending carousel -->

    <!-- what we offer -->
    <section class="container-fluid whatWeOfferSec bgNoRepeat bgCover pt90 pb50" style="background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2021/12/1.jpg');">
    	<div class="container">
    		<div class="row">
    			<div class="col-12">
    				<h1 class="text-center mb50">What We Offer</h1>
    			</div>
    		</div>
    		<div class="row no-gutters">
    			<div class="col-md-3">
    				<div class="row no-gutters row">
    					<div class="col-3 px-2">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/film-processing.png" alt="" class="img-fluid" loading="lazy">               
                        </div>
                        <div class="col-9 px-2">
                            <h2 class="font24">Film Processing</h2>
                            <p>Premium lab services, specializing in negative and reversal chemical processing.</p>
                        </div>
    				</div>
    			</div>
    			<div class="col-md-3">
                    <div class="row no-gutters row">
                        <div class="col-3 px-2">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/film-scanning.png" alt="" class="img-fluid" loading="lazy">               
                        </div>
                        <div class="col-9 px-2">
                            <h2 class="font24">Film Scanning</h2>
                            <p>Spectra suites now offer true RGB 4K or hi-definition SCANITY & Spirit Datacine scans.</p>
                        </div>
                    </div>
    			</div>
    			<div class="col-md-3">
                    <div class="row no-gutters row">
                        <div class="col-3 px-2">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/product-supply.png" alt="" class="img-fluid" loading="lazy">               
                        </div>
                        <div class="col-9 px-2">
                            <h2 class="font24">Product Supply</h2>
                            <p>We are factory direct distributors for Kodak, Hama, Tayloreel and other major manufacturers.</p>
                        </div>
                    </div>
    			</div>
    			<div class="col-md-3">
                    <div class="row no-gutters row">
                        <div class="col-3 px-2">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/rental-service.png" alt="" class="img-fluid" loading="lazy">               
                        </div>
                        <div class="col-9 px-2">
                            <h2 class="font24">Rental Service</h2>
                            <p>Spectra provides reasonably priced, well maintained equipment for projects.</p>
                        </div>
                    </div>
    				<div>
    					
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- ending what we offer -->


    <!-- after what we offer -->
    <section class="container-fluid bgNoRepeat bgCover pb90 pt90" style="background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2021/12/2.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="boxWithImg" style="background-color: #ff2601;">
                        <h3 class="text-center font24 weight500 text-white">Lab</h3>
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/lab.jpg" alt="" class="thumb">
                        <div class="contentWrpr d-flex flex-column">
                            <div class="excerpt"><p>We process 35mm & Super 35, 16mm & Super 16, Regular 8mm and Super 8! Film is processed in batches and...</p></div>
                            <a href="#" class="anchorbtn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="boxWithImg" style="background-color: #fda319;">
                        <h3 class="text-center font24 weight500 text-white">Scanning</h3>
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/scan.jpg" alt="" class="thumb">
                        <div class="contentWrpr d-flex flex-column">
                            <div class="excerpt"><p>Spectra suites now offer true RGB 4K or hi-definition SCANITY and Spirit Datacine scans complete with multi...</p></div>
                            <a href="#" class="anchorbtn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="boxWithImg" style="background-color: #8900c1;">
                        <h3 class="text-center font24 weight500 text-white">Film</h3>
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/filming.jpg" alt="" class="thumb">
                        <div class="contentWrpr d-flex flex-column">
                            <div class="excerpt"><p>We carry only factory fresh films! No recans!  No Re-branding!  Refrigerated for freshness...</p></div>
                            <a href="#" class="anchorbtn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="boxWithImg" style="background-color: #099f51;">
                        <h3 class="text-center font24 weight500 text-white">Products</h3>
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/products.jpg" alt="" class="thumb">
                        <div class="contentWrpr d-flex flex-column">
                            <div class="excerpt"><p>Spectra Film and Video carries a variety of hard to find items to make shooting and editing your projects easier...</p></div>
                            <a href="#" class="anchorbtn">View Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ending after what we offer -->

    <!-- single product section -->
    <section class="homeSingleProdSec container-fluid bgNoRepeat bgCover" style="background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2021/12/bg-with-camera.jpg');">
        <div class="container text-white">
            <div class="row">
                <div class="col-md-7 font20 weight300">
                    <h2 class="text-primary">Cameras</h2>
                    <p>Need a camera rental for your next film shoot? We carry classic camera models in 16mm & Super 8mm film formats. Daily & weekly rates available.</p>
                    <p>Have a camera in need of servicing or repair? Check out our resourceful referral list for facilities all over the country.</p>

                    <div class="pt-5">
                        <a href="#" class="btn btn-primary">View Products</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ending single product section -->

    <section class="hapyToHelpSec container-fluid bgNoRepeat bgCover pt90 pb50">
        <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/bg-help.jpg" class="overlay" alt="" loading="lazy">
        <div class="container text-center text-white">
            <div class="row">
                <div class="col-10 offset-1">
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/help-icon.png" alt="" loading="lazy" >
                    <h2 class="mt-4 text-white">Happy to Help <span class="text-primary">Filmmakers</span></h2>
                    <p>We enjoy assisting our clients and customers and will respond to any of your questions about Spectra products and services. Our team of experienced and knowledgeable personnel advises and offers agreeable solutions for all filmmakers' film and digital inquiries. Visit our <a href="#">contact page</a> for more information.</p>
                </div>
            </div>
            
        </div>
    </section>
</main>
<?php get_footer(); ?>