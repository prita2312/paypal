# PayPal's express checkout (in the sandbox environment) coded using PHP

# Working
1. Customer chooses the product and presses the express checkout button that calls the SetExpressCheckout API
2. Customer is now directed to PayPal for login and reviewing shipping and billing information
3. Customer confirms his/her details wherein the credentials are collected from the PayPal website through GetExpressCheckoutDetails API
4. The payment is then successfully made by calling the DoExpressCheckoutPayment API

