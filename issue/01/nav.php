<script type="text/javascript">

var fadeStart=100,
	fadeUntil=400;

 $(window).bind('scroll', function(){
    var offset = $(document).scrollTop(),
     	 opacity=0;

    if( offset<=fadeStart ){
        opacity=1;
    }else if( offset<=fadeUntil ){
        opacity=1-offset/fadeUntil;
    }
    $(".overmeta").css('opacity',opacity);
 	$(".overmeta").css('bottom', (-($(this).scrollTop())/4));

 });

$(document).ready(function() {
	$(".content-nav li a").removeClass('current');
	$(".content-nav li."+current+" a").addClass('current');

	$(".content-nav li a").not('.current').on('hover',function(e){
		$(this).toggleClass('hovering');
		$(this).next().toggleClass('hide');
	})

});
</script>
 <div class="content-nav clearfix">
 	<p class="issueno">Issue #001</p>
	<ul>
		<li class="one">
			<a class="tips" title="What are some decisions taken by the “Growth team” at Facebook that helped Facebook reach 500 million users?" href="facebook-growth.php">01.</a>
			<div class="preview hide">
				<div class="title" style="background-image:url('../../img/01/facebook-small.jpg');">
					<p>What are some decisions taken by the “Growth team” at Facebook that helped Facebook reach 500 million users?</p>
 				</div>
 			</div>
		</li>
		<li class="two">
			<a href="science-in-picking-colors-for-design.php">02.</a>
			<div class="preview hide">
				<div class="title" style="background-image:url('../../img/01/color-small.jpg');">
					<p>Is there a science to picking the colors that work well together in a design, or is it just subjective?</p>
 				</div>
 			</div>
		</li>
		<li class="three">
			<a href="the-most-beautiful-number.php">03.</a>
			<div class="preview hide">
				<div class="title" style="background-image:url('../../img/01/number-small.jpg');">
					<p>What is the most beautiful number, and why?</p>
 				</div>
 			</div>
		</li>
		<li class="four">
			<a href="when-to-leave-your-current-company.php">04.</a>
			<div class="preview hide">
				<div class="title" style="background-image:url('../../img/01/facebook-small.jpg');">
					<p>How do you know when it's time to leave your current company and move on?</p>
 				</div>
 			</div>
		</li>
		<li class="five">
			<a href="great-stories-about-steve-jobs.php">05.</a>
			<div class="preview hide">
				<div class="title" style="background-image:url('../../img/01/stevejobs-small.jpg');">
					<p>What are some great stories about Steve Jobs?</p>
 				</div>
 			</div>
		</li>
		<li class="six">
			<a href="homeless-good-strategy-to-cut-costs.php">06.</a>
			<div class="preview hide">
				<div class="title" style="background-image:url('../../img/01/homeless-small.jpg');">
					<p>Would becoming homeless be a good strategy to cut costs?</p>
 				</div>
 			</div>
		</li>
		<li class="seven">
			<a href="being-a-sniper.php">07.</a>
			<div class="preview hide">
				<div class="title" style="background-image:url('../../img/01/sniper-small.jpg');">
					<p>What is it like to be a sniper?</p>
 				</div>
 			</div>
		</li>
 		<li class="eight">
			<a href="michael-jackson-get-surgery-to-turn-white.php">08.</a>
			<div class="preview hide">
				<div class="title" style="background-image:url('../../img/01/mj-small.jpg');">
					<p>Why did Michael Jackson get surgery to turn white?</p>
 				</div>
 			</div>
		</li>

	</ul>
</div>