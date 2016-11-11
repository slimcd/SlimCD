# Transact

## processTransaction

Process a payment.

```php
$amount = rand(1, 999); // random amount used for testing

// Instantiate a new process transaction request class
$request = new SlimCD\Transact\ProcessTransactionRequest();

// Set all the properties
$request->username   = '1032';
$request->password   = '289075';
$request->clientid   = '1032';
$request->siteid     = 228226448;
$request->priceid    = 74;
$request->transtype  = 'SALE';
$request->amount     = $amount . '.00';
$request->cardnumber = '4111111111111111';
$request->expmonth   = '12';
$request->expyear    = '49';
$request->product    = 'SlimCD Package';
$request->ver        = '1.1.0';
$request->key        = 'SVD-072-5QQ6-5K58';

// Instantiate a new Transact class
$transact = new SlimCD\Transact\Transact();

// Pass the request to the processTransaction method
$reply = $transact->processTransaction($request);

if($reply->response == "Success") {
    echo 'Payment successful';
}
```

## closeBatch

Close a batch request

```php
// Instantiate a new close batch request class
$request = new SlimCD\Transact\CloseBatchRequest();

// Set all the properties
$request->username    = '1032';
$request->password    = '289075';
$request->siteid      = 74;
$request->batchnumber = '99';

// Instantiate a new Transact class
$transact = new SlimCD\Transact\Transact();

// Pass the request to the processTransaction method
$reply = $transact->closeBatch($request);
```
