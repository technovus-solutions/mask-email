# Display partial email by masking it

This package will mask and display only the partial email.

## Installation

You can install the package via composer:

```bash
composer require technovus-solutions/mask-email
```

## Usage

``` php
use Technovus\MaskEmail\MaskEmail;

$mask = new MaskEmail;

echo $mask->hide('someone@gmail.com'); // so***@gm***
```

By default, both username and domain part will be hidden. This can be changed as below:

``` php
echo $mask->hide('someone@gmail.com', true, false); // so***@gmail.com

echo $mask->hide('someone@gmail.com', false, true); // someone@gm***
```

Use any other character in place of *

``` php
echo $mask->hide('someone@gmail.com', true, true, '?'); // so???@gm???
```

Configure the number of letters to display for username and domain part

``` php
echo $mask->hide('someone@gmail.com', true, true, '*', 4, 6); // some***@gmail.***
```

By default, the mask character will be shown 3 times. You can change it to any number e.g.

``` php
echo $mask->hide('someone@gmail.com', true, true, '*', 4, 6, 5); // some*****@gmail.*****
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email dev@technovus.in instead of using the issue tracker.

## Credits

- [Technovus Solutions](https://github.com/technovus)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
