<script>		  window.fbAsyncInit = function() {		    FB.init({		      appId      : '354153854662587',		      xfbml      : true,		      version    : 'v2.8'		    });		    FB.AppEvents.logPageView();		  };		  (function(d, s, id){		     var js, fjs = d.getElementsByTagName(s)[0];		     if (d.getElementById(id)) {return;}		     js = d.createElement(s); js.id = id;		     js.src = "//connect.facebook.net/en_US/sdk.js";		     fjs.parentNode.insertBefore(js, fjs);		   }(document, 'script', 'facebook-jssdk'));		   		 </script><div class="container">	<div class="row">		<div class="col-xs-10 col-xs-offset-1">            <?php if($result==TRUE): ?>			<h1 class="colgreen Dagger text-center">				 Keep Up The Good Work Continue Cracking...			</h1>			<?php else: ?>			<h1 class="text colwhite Dagger text-center">				Decryption Failed !!!			</h1>			<?php endif; ?>		</div>	</div>	<br>	<!--<div class="row" >		<div class="col-xs-5 col-xs-offset-1">			<?php if($result==TRUE): ?>			<h1 class="text-success">				Correct			</h1>			<?php else: ?>			<h1 class="text-danger">				Wrong			</h1>			<?php endif; ?>		</div>	</div>-->	<br>	<?php if($result==TRUE): ?>	<div class="row">		<img src="<?php echo base_url('index.php/levels/'.$img) ?>"       	class="img-rounded col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 " style="border-style:solid; border-color:rgba(255,255,255,0.2); border-width:15px;padding:0;border-radius: 0px;">	</div>	<?php endif; ?>	<br>	<div class="row" >		<div class="text-center">			<?php if($result==TRUE): ?>			<a onclick="FB.ui({		    method: 'share',		    display: 'popup',		    quote:'conjura',		    href: 'https://developers.facebook.com/docs/',		    }, function(response){});" href="<?php echo base_url('index.php/pages/viewstory') ?>" class="buttonfb btnsuccess btn btn-lg btn-success" role="button">Continue</a>			<?php else: ?>			<a href="<?php echo base_url() ?>" class="buttonfb buttontryagain btn btn-lg btn-danger" role="button">Try Again</a>			<?php endif; ?>		</div>	</div></div>