<footer class="footer" style="background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2021/12/footerdot-e1640337407688.jpg');">
	<div class="container-fluid bgNoRepeat bgCover">
		<div class="container pt90">
			<div class="row">
				<div class="col-md-4">
					<div class="mb-5">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/footer-logo.png" class="img-fluid" alt="" loading="lazy" >
					</div>
					<a target="_blank" href="http://www.facebook.com/pages/Spectra-Film-and-Video/491877490840574" class="d-inline-block">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/facebook.jpg" alt="" loading="lazy" />
					</a>
				</div>
				<div class="col-md-4">
					<div class="widgetWrpr">
						<h4 class="widgetTitle">Contact Us</h4>
						<ul>
							<li>
								<a href="#">
									<span class="icon">
										<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/map-icon.png" alt="" class="img-fluid">
									</span>
									<span>5626 Vineland Ave North Hollywood, CA 91601</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="icon">
										<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/call-icon.png" alt="" class="img-fluid">
									</span>
									<span>818-762-4545</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="icon">
										<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/faxicon.png" alt="" class="img-fluid">
									</span>
									<span>818-762-5454</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="icon">
										<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/mail-icon.png" alt="" class="img-fluid">
									</span>
									<span>sales@spectrafilmandvideo.com</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<?php dynamic_sidebar('footer-sitemap'); ?>
				</div>
			</div>
		</div>
	</div>
		
	<div class="container-fluid copyRightCont py-4">
		<div class="container ">
			<div class="text-center text-white weight300">© 2021 Spectra Film and Video. All Rights Reserved.  <a href="#">Web Design</a></div>
		</div>
	</div>
		
</footer>



<div class="modal fade" id="videoEmbedModal" tabindex="-1" aria-labelledby="videoEmbedModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoEmbedModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				<div class="iframeWrpr">
					<!-- <iframe src="https://player.vimeo.com/video/196277011?h=f9328d3d50&autoplay=1&color=ffffff&title=0&byline=0&portrait=0&badge=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe> -->
				</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade searchModal" id="searchFormModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog border-0 m-0">
        <div class="modal-content rounded-0">
            <div class="modal-header border-0 rounded-0">

                <button type="button" class="close btnTransparent" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body rounded-0 d-flex justify-content-center flex-column">
				<form role="search" class="d-flex align-items-center p-4" method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>" >
				    <div class="formWrpr mx-auto d-flex w-100">
				        <input type="text" name="s" class="searchBox px-4 rounded-0" placeholder="I am looking for..">
				        <button class="btn btn-primary px-3 px-md-5 rounded-0 d-flex align-items-center"><i class="fa fa-search" aria-hidden="true"></i> <span class="d-none d-sm-block">SEARCH</span></button>

				    </div>
				</form>
            </div>

        </div>
    </div>
</div>

<!-- <script src="https://player.vimeo.com/api/player.js"></script> -->
<?php wp_footer(); ?>

</body>
</html>