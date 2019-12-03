<?php include('includes/header.php');?>
<main class="site-content page-back innerpages search-result-page">
	 <div class="content-wrap">
	 	<section class="product-row-filters filter-on">
         <?php include('includes/products-filters.php');?>	
	 	</section>
         <section class="no-result">
            <div class="bd-container">
                <div class="no-matches">
                    <span class="icon icon-search_icon"></span>
                    <h5>Sorry, there are no matches for “<span>Asdfds</span>”</h5>
                    <p>Check your spelling, use different keyword and try again.</p>
                </div>
            </div>
        </section>
	 	<?php include('includes/recommended.php');?>
	</div>			
</main>
<?php include('includes/result-page-cta.php');?>
<?php include('includes/footer.php');?>
