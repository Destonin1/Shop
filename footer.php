	<section id="email">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="letter">
						<div class="letter_title">
							<h3>news letter</h3>
							<p>join us now to get all news and special offers</p>
						</div>
						<div class="form_for_email">
							<img src="img/mail.png" alt="mail">
							<form class="form_email">
								<input class="email_text" type="text" name="email" placeholder="type your email here">
								<input class="email_button" type="button" name="submit" value="join us">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-4 col-12">
					<div class="footer_logo">
						<img src="img/logo.png" alt="logo">
						<p>shopy c 2015 . your copy right here</p>
					</div>
				</div>

				<div class="col-lg-6 col-sm-7 col-12">
					<div class="footer_menu_wrap">
						<ul class="footer_menu">
							<div class="footer_menu_item">
								<li><a href="#">about us</a></li>
								<li><a href="#">contact us</a></li>
								<li><a href="#">support</a></li>
							</div>
							<div class="footer_menu_item">
								<li><a href="#">our feed</a></li>
								<li><a href="#">terms and conditions</a></li>
								<li><a href="#">our privacy</a></li>
							</div>
							<div class="footer_menu_item">
								<li><a href="#">join us</a></li>
								<li><a href="#">live support</a></li>
							</div>
						</ul>
					</div>
				</div>

				<div class="col-lg-2 col-sm-1 col-12">
					<div class="payment">
						<h5>Payment Methods</h5>
						<div class="payment_img">
							<img src="img/mastercard.svg" alt="mastercard">
							<img src="img/mastercard1.svg" alt="mastercard">
							<img src="img/paypal.svg" alt="mastercard">
							<img src="img/visa.svg" alt="mastercard">
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>



	<div class="modal fade" id="basket_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Products in the basket:</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div id="modal_content" class="modal-body row modal_content">
	      	
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn modal_close" data-dismiss="modal">Close</button>
	        <button type="button" class="btn modal_clear">Clear all</button>
	        <button type="button" class="btn modal_submit">Order</button>
	      </div>
	    </div>
	  </div>
	</div>

	<dialog id="confirm-delete" class="site-dialog">
      <header class="dialog-header">
        <h1>Please Confirm</h1>
      </header>
      <div class="dialog-content">
        <p>Are you sure you want remove all products from the basket?</p>
      </div>
      <div class="btn-group">
        <button class="btn btn-cancel" id="cancel_btn">Cancel</button>
        <button class="btn btn-danger" id="delete_btn">Remove</button>
      </div>
    </dialog>

		
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  		<script type="text/javascript" src="slick/slick.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="js/script.js"></script>
	</body>
</html>