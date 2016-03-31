<?php 
/**
Template Name:Landing: First Visit Offer
 *
 * Template for the Service-Specific (First Visit) Landing page of the site
 *
 */
 // Details about this Landing Page
 $gift_amount = "50";
 $offer = "First Visit Offer";
 
 $title = "Get a FREE $$gift_amount Gift Card for your First Visit";
 $restrictions = "*Restrictions: For First time Clients only. Spend $100 or more and take $50 Off  (excluding tax and gratuity). Spend $50 or more and Take $25 Off (excluding tax and gratuity).";
 
 $custom_css_file = ""; //service-specific-offers.css
 
 $amail_id = "tttijdh";
 
 $pricing_table = "			
 			<table id='first-offer-pricing'>
				<tr>
					<td>OxyTrio Facial <small>(30min)</small></td>
					<td>$100</td>
					<td>Customized Facial <small>(50min)</small></td>
					<td>$80</td>
				</tr>													
				<tr>
					<td>Power Peel <small>(30min)</small></td>
					<td>$80</td>
					<td>Swedish Massage <small>(50min)</small></td>
					<td>$80</td>
				</tr>
				<tr>
					<td>Laser Genesis <small>(45min)</small></td>
					<td>$200</td>
					<td>Swedish Massage <small>(80min)</small></td>
					<td>$110</td>
				
				</tr>
			</table>
			";
 ?>

<?php include("service-specific-common.php"); ?>