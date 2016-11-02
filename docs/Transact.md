# Transact

```php
$amount = rand(1, 999);

// Instantiate a new process transaction request class
$request = new SlimCD\Transact\ProcessTransactionRequest();

// Set all the properties
$request->username = '1032';
$request->password = '289075';
$request->clientid = '1032';
$request->siteid = 228226448;
$request->priceid = 74;
$request->transtype = 'SALE';
$request->amount = $amount . '.00';
$request->cardnumber = '4111111111111111' ;
$request->expmonth = '12';
$request->expyear = '49';
$request->product = 'SlimCD Package';
$request->ver = '0.1.0';
$request->key = 'SVD-072-5QQ6-5K58';

// Instantiate a new Transact class
$transact = new SlimCD\Transact\Transact();

// Pass the request to the processTransaction method
$reply = $transact->processTransaction($request);

if($reply->response == "Success") {
    echo 'Payment successful';
}
```
