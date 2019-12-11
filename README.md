Unit of google is Interface of google service.
===

## Usage

### Instantiate

```php
$google = Unit::Instantiate('Google');
```

### OAuth

#### Config

```php
Env::Set('google',[
  'oauth'=>[
    'client_id'     => 'xxxx',
    'crient_secret' => 'xxxx',
  ],
]);
```

#### OAuth

```php
$user_info = $google->OAuth('http://localhost/callback_url');
D($user_info);
```

### Translation

#### Config

```php
Env::Set('google',[
  'translation'=>[
    'apikey' => 'xxxx',
  ],
]);
```

#### Translation

```php
$to   = 'ja';
$from = 'en';
$translation = $google->Translate('This is an apple.', $to, $from);
D($translation);
```
