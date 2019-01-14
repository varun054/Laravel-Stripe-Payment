# Laravel-Stripe-Payment
Stripe payment gateway integration with Laravel

Laravel 5.7 and Stripe payment installation steps:

Step 1. installation
"cartalyst/stripe-laravel": "9.0.*
Installation with the stripe, with * its install latest version of the stripe, and its work with laravel 5.7
composer update “composer update”

Step 2. Update “config/app.php” 
In the $providers array add the following service provider for this package
	“Cartalyst\Stripe\Laravel\StripeServiceProvider::class,”
In the $aliases array add the following facade for this package.
	“'Stripe' => Cartalyst\Stripe\Laravel\Facades\Stripe::class,”
Step 3. Set API key
 Now you need to setup the Stripe API key, to do this open or create the config/services.php file, and add or update the 'stripe' array:

	<?php

	return [

	    'stripe' => [
		'secret' => 'your-stripe-key-here',
	    ],

	];

after it follow this link https://cartalyst.com/manual/stripe/2.0
