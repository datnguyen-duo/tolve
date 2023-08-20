<?php
/**
 * Template part for Footer for all pages
 */

?>

		
<div class="footer-push">&nbsp; </div>

			<footer>
			    
				<div class="flude-container">
					<div class="full-row"><span class="bar-strong">&nbsp;</span></div>
					<div class="row">
						<div class="col-md-3 footer-column1">
							<h4 class="footer-heading">TOLVE TRAVEL</h4>
							<ul class="footer-menu-list">
								<li><a href="https://tolve.co/">Home</a></li>
								<li><a href="/destinations">Destinations</a></li>
								<li><a href="custom-travel">Custom Travel</a></li>
								<li><a href="/booking">Booking</a></li>	
								<li><a href="/ethos">Ethos</a></li>
								<li><a href="/founders">Founders</a></li>
							<!--	<li><a href="/coffee">Coffee</a></li>  hiding coffee page for now -->
							</ul>
							
						</div>
						<div class="col-md-3 footer-column2">
							<h4 class="footer-heading">MORE INFO</h4>
							<ul class="footer-menu-list">
								<li><a href="/faq">FAQ</a></li>
								<li><a href="/terms">Terms &amp; Conditions</a></li>
								<li><a href="/traveler-form">Traveler Form</a></li>
								<li><a href="https://squareup.com/gift/MX0ZG9NKF4X6P/order" target="_blank" >E-gift card</a></li>
							<!-- save for later	<li><a href="#">Partners</a></li> -->
							</ul>
							
						</div>
						<div class="col-md-3 footer-column3">
							<h4 class="footer-heading">CONTACT</h4>
							<ul class="footer-menu-list">
								<li><a href="contact">Get in Touch</a></li>
								<li><a href="https://instagram.com/tolve.co" target="_blank">Instagram</a></li>
								<li><a href="mailto:hello@tolve.co">hello@tolve.co</a></li>
							</ul>
						</div>
						<div class="col-md-3 footer-column4">
							<h4 class="footer-heading">GET THE LATEST</h4>
						    <ul class="footer-menu-list">
								<li><a href="https://tolve.co/contact#subscribe" >Sign up for our mailing list</a></li>
								<li> </li></ul>
							       
							
						</div>
					</div>
				</div>


		</footer>
				


	</body>


<!-- slider jquery -->
	
<script src="https://tolve.co/wp-content/themes/arke-child/js/index.js"></script>
<script src="https://tolve.co/wp-content/themes/arke-child/js/owl.carousel.min.js"></script>
<script>
$('.owl-carousel').owlCarousel({
	autoplay:true,
    autoplayTimeout:3000,
	smartSpeed: 1500,
    loop:true,
    margin:10,
    nav:true,
	dots:false,
    responsive:{
        0:{
            items:1
        },
        800:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
</script>

<script>
	function openNav() {
	document.getElementById("Sidenav").style.width = "250px";
	} 
	function closeNav() {
	document.getElementById("Sidenav").style.width = "0";
	}
	
	$("#emailbox .close").on("click", function() {
		console.log("hi")
		$("#emailToggle input").prop("checked", false)
	})
	</script>


</html>

				