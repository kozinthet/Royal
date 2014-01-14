<?php
/*
 * Created on Jan 9, 2014
 */
?>
<div id="home_map">
	<div id="sub_title">
		<img src="images/home-2.png" class="home" align="left">
		<img src="images/arrow.png" class="arrow" align="left">
		<p class="navi"><?php echo $navi;?></p>
		<?php
			if(isset ($subnavi)){?>
				<img src="images/arrow.png" class="arrow" align="left">
				<p class="sub_navi"><?php echo $subnavi;?></p>
			<?php } ?>
	</div><!-- end sub_title -->
	<div id="abt_mm">
		<p class="h_about">Tour Guides</p>
		<div id="tour">
			<img src="images/guide-1.png">
			<p class="p1_tour">Tour Guide 1</p>
			<p class="p2_tour">Language:</p>
			<p class="p1_tour">English</p>
			<p class="p2_tour">Lisence No:</p>
			<p class="p1_tour">TLN:012345678910</p>
		</div>
		<div id="tour">
			<img src="images/guide-2.png">
			<p class="p1_tour">Tour Guide 2</p>
			<p class="p2_tour">Language:</p>
			<p class="p1_tour">French</p>
			<p class="p2_tour">Lisence No:</p>
			<p class="p1_tour">TLN:012345678910</p>
		</div>
		<div id="tour">
			<img src="images/guide-3.png">
			<p class="p1_tour">Tour Guide 3</p>
			<p class="p2_tour">Language:</p>
			<p class="p1_tour">Thai</p>
			<p class="p2_tour">Lisence No:</p>
			<p class="p1_tour">TLN:012345678910</p>
		</div>
		<div id="tour">
			<img src="images/guide-4.png">
			<p class="p1_tour">Tour Guide 4</p>
			<p class="p2_tour">Language:</p>
			<p class="p1_tour">Chinese</p>
			<p class="p2_tour">Lisence No:</p>
			<p class="p1_tour">TLN:012345678910</p>
		</div>
		<div id="tour">
			<img src="images/guide-5.png">
			<p class="p1_tour">Tour Guide 5</p>
			<p class="p2_tour">Language:</p>
			<p class="p1_tour">Italian</p>
			<p class="p2_tour">Lisence No:</p>
			<p class="p1_tour">TLN:012345678910</p>
		</div>
		<div id="tour">
			<img src="images/guide-6.png">
			<p class="p1_tour">Tour Guide 6</p>
			<p class="p2_tour">Language:</p>
			<p class="p1_tour">German</p>
			<p class="p2_tour">Lisence No:</p>
			<p class="p1_tour">TLN:012345678910</p>
		</div>
		<div id="tour">
			<img src="images/guide-7.png">
			<p class="p1_tour">Tour Guide 7</p>
			<p class="p2_tour">Language:</p>
			<p class="p1_tour">Japanese</p>
			<p class="p2_tour">Lisence No:</p>
			<p class="p1_tour">TLN:012345678910</p>
		</div>
		<div id="tour">
			<img src="images/guide-1.png">
			<p class="p1_tour">Tour Guide 8</p>
			<p class="p2_tour">Language:</p>
			<p class="p1_tour">Spanish</p>
			<p class="p2_tour">Lisence No:</p>
			<p class="p1_tour">TLN:012345678910</p>
		</div>

	</div><!-- end abt_mm -->
</div><!-- end home_map -->

<div id="home_right">
	<?php  $this->load->view("menu_adv"); ?>
</div><!-- end home_right -->
<div style="clear:both"></div>
