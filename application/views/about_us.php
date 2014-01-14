<?php
/*
 * Created on Jan 8, 2014
 *
 */
?>
<?php
/*
 * Created on Jan 8, 2014
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
		<p class="h_about">About us</p>
		<p class="p_about">Dear Valuable Customers,</p>
		<p class="p_about">"Mingalarbar!" (Auspicious Day)! We would like to introduce ourselves to you and to let you know that we would be honored to take care of your vacation in Myanmar (Burma) as well as in the adjoining countries in the Greater Mekong sub regional area. Royal Holiday Travel & Tours company limited is a well established, energetic and completely professional travel agency with Myanmar's most experienced and courteous staffs. Whatever type of tour you desire, we will help you choose from a diverse selection of hotels to find the most suitable and comfortable accommodations to best suit your needs. With your input, we will handle all of the hotel, meal, and transportation arrangements for you, so that you enjoy a totally carefree vacation in beautiful Myanmar. </p>
		<p class="p_about">From a desk, then from a small office in Yangon, Royal Holiday became one of the independent travel companies and image of Myanmar that the visitor carries home and forever keeps. The main ambition is to give the best service and care travelers to explore and better understand Myanmar, our country. For your comfort and convenience, we can do the every tour style in Myanmar such as; </p>
		<ul class="list_about">
			<li><p>(a)<?php echo nbs(3);?>Adventure Tour</p></li>
			<li><p>(b)<?php echo nbs(3);?>Business Tour</p></li>
			<li><p>(c)<?php echo nbs(3);?>Eco Tour</p></li>
			<li><p>(d)<?php echo nbs(3);?>Golf Tour</p></li>
			<li><p>(e)<?php echo nbs(3);?>Leisure and Nature Tour</p></li>
			<li><p>(f) <?php echo nbs(3);?>Trekking Tour</p></li>
			<li><p>(g)<?php echo nbs(3);?>Special Interest / Incentive Tour</p></li>
			<li><p>(h)<?php echo nbs(3);?>Individual and Group Tour (FIT / Package)</p></li>
		</ul>
		<p class="p_about">We can also offer as following Services,</p>
			<ul class="list_about">
			<li><p>(a)<?php echo nbs(3);?>Hotel Reservation</p></li>
			<li><p>(b)<?php echo nbs(3);?>Flight Reservation & Ticketing</p></li>
			<li><p>(c)<?php echo nbs(3);?>	Boat Ticket</p></li>
			<li><p>(d)<?php echo nbs(3);?>Car Rental Service</p></li>
			<li><p>(e)<?php echo nbs(3);?>Language Guide Service </p></li>
			<li><p>(f) <?php echo nbs(3);?>Visa Service (Visa on Arrival)</p></li>
			</ul>
		<p class="p_about">We specialize in tailor-made and customized tours for individual, family, business travelers and group through Myanmar at reasonable prices.
We offer you our assurance that our valuable customers and clients will be completely satisfied with our conscientious and courteous service. </p>
		<p class="p_about">With our Warmest Greetings,</p>
		<p class="p_about_1">Myint Myint Aye @ Aster</p>
		<p class="p_about_1">Managing Director </p>
		<p class="p_about_1">Royal Holiday Travel & Tours</p>
	</div><!-- end abt_mm -->
</div><!-- end home_map -->

<div id="home_right">
	<?php  $this->load->view("menu_adv"); ?>
</div><!-- end home_right -->
<div style="clear:both"></div>


