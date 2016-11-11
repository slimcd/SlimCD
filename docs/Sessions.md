# Sessions

## cancelSession

```php
// Instantiate a new cancel session request class
$request = new SlimCD\Sessions\CancelSessionRequest();

// Set the properties
$request->username  = '1032';
$request->password  = '289075';
$request->sessionid = '1234';

// Instantiate a new Sessions class
$reports = new SlimCD\Sessions\Sessions();

// Pass the request to the cancel session method
$reply = $reports->cancelSession($request);
```

## checkSession

```php
// Instantiate a new check session request class
$request = new SlimCD\Sessions\CheckSessionRequest();

// Set the properties
$request->username         = '1032';
$request->password         = '289075';
$request->sessionid        = '1234';
$request->wait             = 0;
$request->waitforcompleted = '';
$request->userfields       = null;

// Instantiate a new Sessions class
$reports = new SlimCD\Sessions\Sessions();

// Pass the request to the check session method
$reply = $reports->checkSession($request);
```

## createSession

```php
// Instantiate a new create session request class
$request = new SlimCD\Sessions\CreateSessionRequest();

// Set the properties
$request->username   = '1032';
$request->password   = '289075';
$request->clientid   = 0;
$request->siteid     = 0;
$request->priceid    = 0;
$request->formname   = '';
$request->transtype  = '';
$request->amount     = 0;
$request->userfields = null;

// Instantiate a new Sessions class
$reports = new SlimCD\Sessions\Sessions();

// Pass the request to the create session method
$reply = $reports->createSession($request);
```

## destroySessions

```php
// Instantiate a new destroy session request class
$request = new SlimCD\Sessions\DestroySessionsRequest();

// Set the properties
$request->username   = '1032';
$request->password   = '289075';
$request->sessionid  = '1234';

// Instantiate a new Sessions class
$reports = new SlimCD\Sessions\Sessions();

// Pass the request to the destroy session method
$reply = $reports->destroySessions($request);
```

## getSessionFields

```php
// Instantiate a new get session fields request class
$request = new SlimCD\Sessions\GetSessionFieldsRequest();

// Set the properties
$request->username   = '1032';
$request->password   = '289075';
$request->sessionid  = '1234';

// Instantiate a new Sessions class
$reports = new SlimCD\Sessions\Sessions();

// Pass the request to the get session fields method
$reply = $reports->getSessionFields($request);
```

## multiSession

```php
// Instantiate a new multi session request class
$request = new SlimCD\Sessions\MultiSessionRequest();

// Set the properties
$request->username   = '1032';
$request->password   = '289075';
$request->sessionid  = '1234';

// Instantiate a new Sessions class
$reports = new SlimCD\Sessions\Sessions();

// Pass the request to the multi session method
$reply = $reports->multiSession($request);
```

## searchSessions

```php
// Instantiate a new search sessions request class
$request = new SlimCD\Sessions\SearchSessionsRequest();

// Set the properties
$request->username     = '1032';
$request->password     = '289075';
$request->siteid       = 0;
$request->enddate      = 0;
$request->clientid     = 0;
$request->startdate    = 0;
$request->sessionid    = '';
$request->amount       = 0;
$request->approvedamt  = '';
$request->transtype    = '';
$request->cardpart     = '';
$request->approved     = '';
$request->gateid       = 0;
$request->completed    = '';
$request->cancelled    = '';
$request->reverseorder = '';

// Instantiate a new Sessions class
$reports = new SlimCD\Sessions\Sessions();

// Pass the request to the search sessions method
$reply = $reports->searchSessions($request);
```

## sendSession

```php
// Instantiate a new send session request class
$request = new SlimCD\Sessions\SendSessionRequest();

// Set the properties
$request->username   = '1032';
$request->password   = '289075';
$request->sessionid  = 0;
$request->message    = '';
$request->send_email = '';
$request->email      = '';
$request->email_from = '';
$request->send_html  = '';
$request->send_sms   = '';
$request->phone      = 0;

// Instantiate a new Sessions class
$reports = new SlimCD\Sessions\Sessions();

// Pass the request to the send session method
$reply = $reports->sendSession($request);
```

## showSession

```php
// Instantiate a new show session request class
$request = new SlimCD\Sessions\ShowSessionRequest();

// Set the properties
$request->sessionid = 0;

// Instantiate a new Sessions class
$reports = new SlimCD\Sessions\Sessions();

// Pass the request to the show session method
$reply = $reports->showSession($request);
```

## spawnSessions

```php
// Instantiate a new spawn sessions request class
$request = new SlimCD\Sessions\SpawnSessionsRequest();

// Set the properties
$request->amount    = '';
$request->sessionid = 0;

// Instantiate a new Sessions class
$reports = new SlimCD\Sessions\Sessions();

// Pass the request to the spawn sessions method
$reply = $reports->spawnSessions($request);
```
