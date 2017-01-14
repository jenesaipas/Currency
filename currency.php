<!DOCTYPE html>
<!--	Author: Susan Nagy
		Date:	10/19/14
		File:	currency.php
		Purpose:Converting currencies while incrementing the dollar values by a hundred from $100 to $1000 simply by selecting the country from the dropdown menu and having the currency amount equal to the dollar amount.
-->
<html>
<head>
	<title>Currency Conversions</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>
	<?php
		/* Conversion source: https://www.google.com/?gws_rd=ssl#q=google+currency+converter
		Also since the book has been published, looks like Italy doesn't use Euros anymore so I used Lira for the assignment.

		CHANGES:
		Moved the prints around to the appropriate spots for them to show up in the flow of the php program. Added tables via print. The amounts in the FOR equal to the dollar column, the code in {}  for $amount will be displayed in the right column. Both information will generate through the print values. Added another elseif option as Hungary, also added it on the list for the html file. I added the number format so the numbers would match up correctly.
		 */
		$country = $_POST['country'];
		print("<h1>Currency Conversions: $country</h1>");
		print ("<table border = \"1\"> ");


			if ($country == "Chile")
		{
				$currency = "PESO";
				$conversionFactor = 586.60;
		}	
		elseif ($country == "Egypt")
		{	
				$currency = "POUND";
				$conversionFactor = 7.15;
		}	
		elseif ($country == "Italy")
		{	
				$currency = "LIRA";
				$conversionFactor = 1518.;
		}	
		elseif ($country == "Japan")
		{	
				$currency = "YEN";
				$conversionFactor =  106.88;
		}	
		elseif ($country == "Spain")
		{
				$currency = "EURO";
				$conversionFactor = 0.78;
		} 
		elseif ($country == "Hungary")
		{
				$currency = "FORINT";
				$conversionFactor = 239.54;
		} 

			print ("<tr><td><strong>DOLLARS</strong></td>
				<td><strong>$currency</strong></td></tr>");

				for ($dollars = 100; $dollars <= 1000; $dollars = $dollars + 100 )
		{
			$amount = $conversionFactor * $dollars;
			print("<tr><td class=\"center\">$".number_format($dollars, 2)."</td>
				<td class=\"center\">".number_format($amount, 2)."</td></tr>");
		}

		print ("</table>");
	?>
</body>
</html>
