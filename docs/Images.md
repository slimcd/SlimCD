# Images

Most of these requests are very similar. They share a lot
of the same properties and return similar data.

## downloadSignature

Download a signature.

```php
// Instantiate a new download signature request class
$request = new SlimCD\Images\DownloadSignatureRequest();

// Set all the properties
$request->username = '1032';
$request->password = '289075';
$request->gateid   = '1234';

// Instantiate an Images class
$images = new SlimCD\Images\Images();

// Pass the request to the download signature method
$reply = $transact->downloadSignature($request);
```

## downloadCheck

Download a check.

```php
// Instantiate a new download check request class
$request = new SlimCD\Images\DownloadCheckRequest();

// Set all the properties
$request->username = '1032';
$request->password = '289075';
$request->gateid   = '1234';

// Instantiate an Images class
$images = new SlimCD\Images\Images();

// Pass the request to the download signature method
$reply = $transact->downloadCheck($request);
```

## uploadSignature

Upload a signature.

```php
// Instantiate a new upload signature request class
$request = new SlimCD\Images\UploadSignatureRequest();

// Set all the properties
$request->username  = '1032';
$request->password  = '289075';
$request->siteid    = '74';
$request->gateid    = '1234';
$request->filetype  = 'JPG';
$request->imagedata = '';

// Instantiate an Images class
$images = new SlimCD\Images\Images();

// Pass the request to the upload signature method
$reply = $transact->uploadSignature($request);
```

## uploadReceipt

Upload a receipt.

```php
// Instantiate a new upload receipt request class
$request = new SlimCD\Images\UploadReceiptRequest();

// Set all the properties
$request->username  = '1032';
$request->password  = '289075';
$request->siteid    = '74';
$request->gateid    = '1234';
$request->filetype  = 'JPG';
$request->imagedata = '';

// Instantiate an Images class
$images = new SlimCD\Images\Images();

// Pass the request to the upload receipt method
$reply = $transact->uploadReceipt($request);
```

## uploadCheck

Upload a check.

```php
// Instantiate a new upload check request class
$request = new SlimCD\Images\UploadCheckRequest();

// Set all the properties
$request->username  = '1032';
$request->password  = '289075';
$request->siteid    = '74';
$request->gateid    = '1234';
$request->filetype  = 'JPG';
$request->imagedata = '';

// Instantiate an Images class
$images = new SlimCD\Images\Images();

// Pass the request to the upload check method
$reply = $transact->uploadCheck($request);
```

## getReceipt

Get a receipt image.

```php
// Instantiate a new get receipt request class
$request = new SlimCD\Images\GetReceiptRequest();

// Set all the properties
$request->username = '1032';
$request->password = '289075';
$request->gateid   = '1234';

// Instantiate an Images class
$images = new SlimCD\Images\Images();

// Pass the request to the get receipt method
$reply = $transact->getReceipt($request);
```

## sendReceipt

Send a receipt.

```php
// Instantiate a new send receipt request class
$request = new SlimCD\Images\SendReceiptRequest();

// Set all the properties
$request->username   = '1032';
$request->password   = '289075';
$request->gateid     = '1234';
$request->send_sms   = 'no';
$request->phone      = '9995551234';
$request->send_email = 'no';
$request->email      = 'example@example.com';
$request->send_cc    = 'no';
$request->ccemail    = 'ccexample@example.com';

// Instantiate an Images class
$images = new SlimCD\Images\Images();

// Pass the request to the send receipt method
$reply = $transact->sendReceipt($request);
```

## getSignatureImage

Get a signature image.

```php
// Instantiate a new get signature image request class
$request = new SlimCD\Images\GetSignatureImageRequest();

// Set all the properties
$request->username    = '1032';
$request->password    = '289075';
$request->gateid      = '1234';
$request->imgflag     = 'PNG';
$request->height      = null;
$request->width       = null;
$request->transparent = 'yes';
$request->edge        = null;
$request->penwidth    = null;
$request->border      = 'no';
$request->testmode    = 'no';

// Instantiate an Images class
$images = new SlimCD\Images\Images();

// Pass the request to the get signature image method
$reply = $transact->getSignatureImage($request);
```
