<?php include('submenus/web_sub.php') ?>
<div id="content" style="height: 425px">
<form name="WebQuote" method="post" action="send_form_email.php">
		<table>
			<tr>
				<td>Basic page</td>
				<td>$125</td>
				<td></td>
			</tr>
			<tr>
				<td>Each additional page with same design<sup><small>*</small></sup></td>
				<td>$75</td>
				<td><input id="num_basic_additional_pages" onchange="updatePricing()" value="0"/></td>
			</tr>
			<tr>
				<td>Each additional page with different design<sup><small>**</small></sup></td>
				<td>$100</td>
				<td><input id="num_extra_designs" onchange="updatePricing()" value="0"/></td>
			</tr>
			<tr>
				<td>Social Media Integration<sup><small>***</small></sup></td>
				<td>$25 per social site</td>
				<td><input id="num_social_sites" onchange="updatePricing()" value="0"/></td>
			</tr>
			<tr>
				<td>Webstore integration</td>
				<td>$50</td>
				<td><input id="num_webstores" onchange="updatePricing()" value="0"/></td>
			</tr>
			<tr>
				<td>Custom Graphics</td>
				<td>$10+ depending on complexity</td>
				<td><input id="num_custom_graphics" onchange="updatePricing()" value="0"/></td>
			</tr>
			<tr>
				<td></td>
				<td style="text-align:right">Total:</td>
				<td><div id="total"></div></td>
			</tr>
		</table>
<script>
function updatePricing()
{
	var totalbox = document.getElementById( "total" );
	var morePages = document.getElementById( "num_basic_additional_pages" ).value;
	var moreDesigns = document.getElementById( "num_extra_designs" ).value;
	var integrations = document.getElementById( "num_social_sites" ).value;
	var numWebStorefronts = document.getElementById( "num_webstores" ).value;
	var numCustomGraphics = document.getElementById( "num_custom_graphics" ).value;

	var total = 125 + (morePages * 75) + ( moreDesigns * 100 ) +
			( integrations * 25 ) + ( numWebStorefronts * 50 ) +
			( numCustomGraphics * 10 );

	totalbox.innerHTML = "$" + total.toString();
}
</script>
<hr/>
<h3>Email the quote to me</h3>
<table style="width:33%">
<tr>
<td style="width: 75%">
First Name:<br/>
<input name="FirstName" type="text" size="25"/><br/>
Last Name:<br/>
<input name="LastName" type="text" size="25"/><br/>
Your Email Address:<br/>
<input name="EmailAddress" type="text" size="25"/>
<td>
<br/>
	<input type="submit" value="Submit">
</td>
</tr>
</table>
</form>
  
  </div>

