<?php include('includes/header.php');?>
<main class="site-content page-back innerpages search-result-page explore-bisdesk-page">
	 <div class="content-wrap">
        
        <!-- message popup section -->
		<section class="msg-popup-sec">
            <i class="close-msg"></i>
            <div class="bd-container">
                <div class="row">
                    <div class="msg-div">
					<div class="page-title ttl-sm">
							<img class="visible_mobile brnd-image" src="assets/images/meeting-room-mob.svg" alt=""><h1>Meeting Rooms</h1>
						</div>
                        <p>A private office is a space that is separated and out of ear shot from other companies. Compared to open offices, private offices offer businesses control over the space, more privacy, and a quieter working environment.</p>
                        <p>You can find private offices in serviced, leased, and subleased office spaces. These workspaces all come with a host of services to meet the needs of your business.</p>
                    </div>
                    <div class="img-div  brand-icon-img">
                        <span class="msg-img">
                            <img src="assets/images/uploads/meetingroom.svg" alt="">
                        </span>
                    </div>
                </div>
            </div>			
        </section>
        <div class="visible_mobile">
			<div class="explore-mob ttl">
				Explore Memberships
			</div>
		</div>
	 	<section class="product-row-filters filter-on">
         <?php include('includes/products-filters.php');?>
			<div class="fluid-container">
				<div class="search-result-top">
					<div class="row d-flx alignVcenter h100">
						<div class="col-lg-8 col-md-8">
							<div class="search-rslt">
								120 Meeting rooms spaces in Dubai”
							</div>
						</div>
						<div class="col-lg-4 col-md-4 text-right">
							<div class="show-map-btn">
								<input class="tgl tgl-light" id="showmap" type="checkbox"/>
    							<label class="tgl-btn" for="showmap"></label>
    							<span class="showmap-text">Show Map</span>
							</div>
						</div>
					</div>
				</div>
			</div>		
	 	</section>
		 <?php include('includes/product-results.php');?>
	</div>			
</main>
<?php include('includes/result-page-cta.php');?>
<?php include('includes/footer.php');?>
