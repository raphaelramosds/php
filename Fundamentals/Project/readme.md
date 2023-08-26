# Project notes

## GET & POST

Both methods can be used to send data to the server

- GET sends the data in the URL
- POST sends the data in the request header (hidden)

## Security issues

### Cross-Site scripting (XSS attack)

Malicious scripts injected on form inputs. Once they're submitted, PHP might echo these scripts on the HTML page. You can escape them using `htmlspecialchars` method.