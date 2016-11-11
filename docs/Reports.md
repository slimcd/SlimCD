# Reports

## getOpenBatch

```php
// Instantiate a new get open batch request class
$request = new SlimCD\Reports\GetOpenBatchRequest();

// Set the properties
$request->username = '1032';
$request->password = '289075';
$request->siteid   = '74';

// Instantiate a new Reports class
$reports = new SlimCD\Reports\Reports();

// Pass the request to the get open batch method
$reply = $reports->getOpenBatch($request);
```

## searchTransactions

```php
// Instantiate a new search transactions request class
$request = new SlimCD\Reports\SearchTransactionsRequest();

// Set the properties
$request->username        = '1032';
$request->password        = '289075';
$request->recordcountonly = fal
$request->maxrecords      = 0;
$request->startdate       = '';
$request->enddate         = '';
$request->clientid        = 0;
$request->firstname       = '';
$request->lastname        = '';
$request->city            = '';
$request->state           = '';
$request->zip             = 0;
$request->email           = '';
$request->amount          = '';
$request->clienttransref  = '';
$request->transtype       = '';
$request->cardnumber      = 0;
$request->cardid          = '';
$request->cardpart        = '';
$request->clerkname       = '';
$request->gateid          = 0;
$request->reverseorder    = '';

// Instantiate a new Reports class
$reports = new SlimCD\Reports\Reports();

// Pass the request to the search transactions method
$reply = $reports->searchTransactions($request);
```

## getDailySummary

```php
// Instantiate a new get daily summary request class
$request = new SlimCD\Reports\GetDailySummaryRequest();

// Set the properties
$request->username   = '1032';
$request->password   = '289075';
$request->metabankid = 0;
$request->bankid     = 0;
$request->clientid   = 0;
$request->siteid     = 0;
$request->startdate  = '';
$request->enddate    = '';

// Instantiate a new Reports class
$reports = new SlimCD\Reports\Reports();

// Pass the request to the get daily summary method
$reply = $reports->getDailySummary($request);
```

## getBatchSummary

```php
// Instantiate a new get batch summary class
$request = new SlimCD\Reports\GetBatchSummaryRequest();

// Set the properties
$request->username  = '1032';
$request->password  = '289075';
$request->siteid    = '74';
$request->startdate = '';
$request->enddate   = '';

// Instantiate a new Reports class
$reports = new SlimCD\Reports\Reports();

// Pass the request to the get batch summary method
$reply = $reports->getBatchSummary($request);
```

## getClosedBatchTransactions

```php
// Instantiate a new get closed batch transactions request class
$request = new SlimCD\Reports\GetClosedBatchTransactionsRequest();

// Set the properties
$request->username  = '1032';
$request->password  = '289075';
$request->siteid    = '74';
$request->batchid   = '1234';

// Instantiate a new Reports class
$reports = new SlimCD\Reports\Reports();

// Pass the request to the get closed batch transactions method
$reply = $reports->getClosedBatchTransactions($request);
```

## getOpenAuths

```php
// Instantiate a new get open auths request class
$request = new SlimCD\Reports\GetOpenAuthsRequest();

// Set the properties
$request->username  = '1032';
$request->password  = '289075';
$request->siteid    = '74';
$request->StartDate = '';
$request->EndDate   = '';

// Instantiate a new Reports class
$reports = new SlimCD\Reports\Reports();

// Pass the request to the get open auths method
$reply = $reports->getOpenAuths($request);
```

## getTransactionDetails

```php
// Instantiate a new get transaction details request class
$request = new SlimCD\Reports\GetTransactionDetailsRequest();

// Set the properties
$request->username  = '1032';
$request->password  = '289075';
$request->siteid    = '74';
$request->StartDate = '';
$request->EndDate   = '';

// Instantiate a new Reports class
$reports = new SlimCD\Reports\Reports();

// Pass the request to the get transaction details method
$reply = $reports->getTransactionDetails($request);
```

## getBatchHistory

```php
// Instantiate a new get batch history request class
$request = new SlimCD\Reports\GetBatchHistoryRequest();

// Set the properties
$request->username  = '1032';
$request->password  = '289075';
$request->siteid    = '74';
$request->startdate = '';
$request->enddate   = '';

// Instantiate a new Reports class
$reports = new SlimCD\Reports\Reports();

// Pass the request to the get batch history method
$reply = $reports->getBatchHistory($request);
```
