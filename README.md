# Studizz API Package for Laravel

This package provides a convenient way to interact with the Studizz API in Laravel applications.

## Installation

You can install the package via composer:

```bash
composer require amphibee/studizz
```

## Configuration

Publish the configuration file:

```bash
php artisan vendor:publish --provider="AmphiBee\Studizz\Providers\StudizzServiceProvider"
```

Add your Studizz API credentials to your `.env` file:

```
STUDIZZ_API_KEY=your_api_key
STUDIZZ_BASE_URL=https://sandbox.studizz.fr/api
```

## Usage

This package provides two main services: `ContactService` and `FormationService`. You can access these services through the `Studizz` facade.

### Contacts

#### Create a Contact

```php
use AmphiBee\Studizz\Facades\Studizz;
use AmphiBee\Studizz\Dto\ContactDto;

$contactData = [
    'firstname' => 'John',
    'lastname' => 'Doe',
    'email' => 'john.doe@example.com',
    'phone' => '+33612345678',
    'degreeLevel' => 0,
    'teamAssigned' => '63e26d24383062596b949cff',
    'interestedFormations' => ['5bdeb73136da49690e78c510'],
    'rgpd' => true,
    'cV' => [
        'file' => file_get_contents('/path/to/file.pdf'),
        'filename' => 'file.pdf',
    ];
];

$contactDto = new AmphiBee\Studizz\Dto\ContactDto($contactData);

$newContact = AmphiBee\Studizz\Facades\Contact::create($contactDto);
```

#### Get Contact Fields

```php
$fields = AmphiBee\Studizz\Facades\Contact::getFields();
```

### Formations

#### Get All Formations

```php
$formations = AmphiBee\Studizz\Facades\Formation::getAll();
```

### Campus

#### Get All Campus

```php
$formation = AmphiBee\Studizz\Facades\Campus::getAll();
```

## Testing

To run the tests for this package, use the following command:

```bash
./vendor/bin/pest
```

## Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details.

## Security

If you discover any security-related issues, please email security@amphibee.fr instead of using the issue tracker.

## Credits

- [AmphiBee](https://github.com/amphibee)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
```
