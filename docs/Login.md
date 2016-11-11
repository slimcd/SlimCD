# Login

## getUserSettings

```php
// Instantiate a new get user settings request class
$request = new SlimCD\Login\GetUserSettingsRequest();

// Set the properties
$request->username = '1032';
$request->password = '289075';

// Instantiate a new Login class
$transact = new SlimCD\Login\Login();

// Pass the request to the get user settings method
$reply = $transact->getUserSettings($request);
```

## getUserClients

```php
// Instantiate a new get user clients request class
$request = new SlimCD\Login\GetUserClientsRequest();

// Set the properties
$request->username = '1032';
$request->password = '289075';

// Instantiate a new Login class
$transact = new SlimCD\Login\Login();

// Pass the request to the get user clients method
$reply = $transact->getUserClients($request);
```

## getUserClientSite

```php
// Instantiate a new get user client site request class
$request = new SlimCD\Login\GetUserClientSiteRequest();

// Set the properties
$request->username = '1032';
$request->password = '289075';
$request->clientid = 0;
$request->siteid   = 0;

// Instantiate a new Login class
$transact = new SlimCD\Login\Login();

// Pass the request to the get user client site method
$reply = $transact->getUserClientSite($request);
```
