<!-- Footer ------------------------------------------------------ -->
<hr class="soft">
<div  id="footerSection">
	<div class="row">
		<div class="span3">
			<h5>ACCOUNT</h6>
			<a href="login.html">YOUR ACCOUNT</a>
			<a href="login.html">PERSONAL INFORMATION</a>
			<a href="login.html">ADDRESSES</a>
			<a href="login.html">DISCOUNT</a>
			<a href="login.html">ORDER HISTORY</a>
		 </div>
		<div class="span3">
			<h5>INFORMATION</h5>
			<a href="contact.html">CONTACT</a>
			<a href="register.html">REGISTRATION</a>
			<a href="legal_notice.html">LEGAL NOTICE</a>
			<a href="tac.html">TERMS AND CONDITIONS</a>
			<a href="faq.html">FAQ</a>
		 </div>
		<div class="span3">
			<h5>OUR OFFERS</h5>
			<a href="#">NEW PRODUCTS</a>
			<a href="#">TOP SELLERS</a>
			<a href="special_offer.html">SPECIAL OFFERS</a>
			<a href="#">MANUFACTURERS</a>
			<a href="#">SUPPLIERS</a>
		 </div>
		<div id="socialMedia" class="span3 pull-right">
			<h5>SOCIAL MEDIA </h5>
			<a href="#"><img width="60" src="<?php echo base_url(); ?>assets/img/facebook.png" title="facebook"/></a>
			<a href="#"><img width="60" src="<?php echo base_url(); ?>assets/img/twitter.png" title="twitter"/></a>
			<a href="#"><img width="60" src="<?php echo base_url(); ?>assets/img/rss.png" title="rss"/></a>
			<a href="#"><img width="60" src="<?php echo base_url(); ?>assets/img/youtube.png" title="youtube"/></a>
		 </div>
	 </div>
	 <hr class="soft">
	<p class="pull-right">&copy; Boot'sshop</p>
</div><!-- /container -->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <div id="show"></div>
 <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          setInterval(function(){
            $('#show').load('<?php echo base_url(); ?>application/views/client/newsfeed.php')
          },3000);
        });
       
      </script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/google-code-prettify/prettify.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/application.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-typeahead.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-affix.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.lightbox-0.5.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootsshoptgl.js"></script>
	 <script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
    });
    </script>
  </body>
</html>
