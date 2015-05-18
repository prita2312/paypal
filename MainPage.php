<html>

<head>
	<title>Main Page</title>
</head>

<body>
	<h2 align="center">Service subscription details</h2>

	<form action='http://www.priya.4rog.in/expresscheckout.php' METHOD='POST'>
		<table>
			<tbody>
				<tr>
					<td style="width:30px">
						<input id="monthly" type="radio" value="10" name="Payment_Amount">
					</td>
					<td>
						<label for="monthly">
							Monthly subscription at SGD 10
						</label>
					</td>
				</tr>
				<tr>
					<td>
						<input id="yearly" type="radio" value="110" name="Payment_Amount">
					</td>
					<td>
						<label for="yearly">
							Yearly subscription at SGD 110
						</label> 
					</td>
				</tr>
				<tr>
					<td>
						<input id="biyearly" type="radio" value="200" name="Payment_Amount">
					</td>
					<td>
						<label for="biyearly">
							Two year subscription at SGD 200
						</label>
					</td>
				</tr>
			</tbody>
		</table>
		<p>
			Please pay with Paypal's express checkout:
		</p>
		<input type='image' name='submit' src='https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif' border='0' align='top' alt='Check out with PayPal'/>
	</form>
</body>

</html>


