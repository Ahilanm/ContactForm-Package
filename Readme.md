# Contact Us Package

## This is a contact us form package from which contact us mail will be delivered to admin

# Installation
Begin by pulling in the package through Composer.

```bash
composer require ahilan/contact
```


## Configuration
###### This Package requires connection configuration. To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish --provider="Package\Contact\ContactServiceProvider"
```

This will create a `config/contact.php` file in your app that you can modify to set your admin email configuration. Also, make sure you check for changes to the original config file in this package between releases.
And also views and migration files will be created/published.

## Usage
Initially create the database table for saving the records:
```bash
$ php artisan migrate
```

After Installation and configuration just access `/contact` route to check the contact us page
For example: example.com/contact