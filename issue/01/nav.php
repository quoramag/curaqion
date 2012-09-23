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
 	<p>Issue #001</p>
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
			<a href="#">03.</a>
			<div class="preview hide">
				<div class="title" style="background-image:url('../../img/01/facebook-small.jpg');">
					<p>What is the most beautiful number, and why?</p>
 				</div>
 			</div>
		</li>
		<li class="four">
			<a href="#">04.</a>
			<div class="preview hide">
				<div class="title" style="background-image:url('../../img/01/facebook-small.jpg');">
					<p>How do you know when it's time to leave your current company and move on?</p>
 				</div>
 			</div>
		</li>
		<li class="five">
			<a href="#">05.</a>
			<div class="preview hide">
				<div class="title" style="background-image:url('../../img/01/facebook-small.jpg');">
					<p>What are some great stories about Steve Jobs?</p>
 				</div>
 			</div>
		</li>
		<li class="six"><a href="#">06.</a></li>
		<li class="seven"><a href="#">07.</a></li>
		<li class="eight"><a href="#">08.</a></li>
		<li class="nine"><a href="#">09.</a></li>
		<li class="ten">
			<a href="#">10.</a>
			<div class="preview hide">
				<div class="title" style="background-image:url('../../img/01/facebook-small.jpg');">
					<p>What are some decisions taken by the “Growth team” at Facebook that helped Facebook reach 500 million users?</p>
 				</div>
 			</div>

		</li>

	</ul>
</div>