<footer class="footer-container">
		<div class="footer-column-left">
			<h4>NEWSLETTER</h4>
			<a href="">HandyMan Tips</a>

			
			
				<ul>
					
				</ul>
		</div>

		<div class="footer-column-mid">
			<h4>MORE INFO</h4>
				<ul>
					
					
					<?php
			if(empty($_SESSION['username'])) {
				?>
				<a href="login.php">Account Page</a> 
				<?php
			} else {
				?>
				<a href="account.php">Account page</a>
				<?php
			}
			?>
					</li>
				</ul>
		</div>

		<div class="footer-column-right">
			<h4>CONTACT US</h4>
				<ul class="share-buttons">
					<p>Huddersfield University</p>
					<li>
  						<a href="https://en-gb.facebook.com/login/" title="Share on Facebook" target="_blank">
  						<img src="images/Facebook.svg">
  					</a></li>
  					<li>
  						<a href="https://twitter.com/intent/tweet?source=&text=:%20" target="_blank" title="Tweet"><img src="images/Twitter.svg">
  					</a></li>
  					<li>
  						<a href="https://plus.google.com/share?url=" target="_blank" title="Share on Google+"><img src="images/Google+.svg">
  					</a></li>

  				</ul>
		</div>
</footer>

<div class=" mainfooter">
    	<p>@Copyright Handyman U1362360.</p>
</div>

</body>