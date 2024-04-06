# Belgian Phone Number Formatter
This PHP code takes a Belgian phone number as input and returns the formatted phone number with the country code (32) added at the beginning. 

- The code first checks if the 'q' parameter is set in the GET request, if not, it defaults to '0491/12 34 56'.
- It then uses a regular expression to remove any non-numeric characters from the phone number.
- Finally, it adds the country code '32' at the beginning of the phone number and outputs the formatted phone number to the user. 

Overall, this code ensures that the phone number is properly formatted with the Belgium country code added.
