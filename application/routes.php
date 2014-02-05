<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

View::name('layouts.default', 'layout');

$layout = View::of('layout');


/* HOME URI */
Route::get('/', array('as' => 'home', function() use ($layout)
{
    return $layout->with('title', 'Home')->nest('content', 'home');

}));

/* PRODUCTS URI */
Route::get('products/overview', function() use ($layout)
{
    return $layout->with('title', 'Market Overview')->nest('content', 'home');
});

Route::get('products/spirulina-turnkey', function() use ($layout)
{
    return $layout->with('title', 'Spirulina Turnkey')->nest('content', 'home');
});

/* TECHNOLOGY URI */
Route::get('technology/overview', function() use ($layout)
{
    return $layout->with('title', 'Technology Overview')->nest('content', 'home');
});

Route::get('technology/algae-strain', function() use ($layout)
{
    return $layout->with('title', 'Algae Strain')->nest('content', 'home');
});

Route::get('technology/algae-cultivation', function() use ($layout)
{
    return $layout->with('title', 'Algae Cultivatiob')->nest('content', 'home');
});

Route::get('technology/harvesting-agitation', function() use ($layout)
{
    return $layout->with('title', 'Harvesting &amp; Agitation')->nest('content', 'home');
});

Route::get('technology/infrastructure', function() use ($layout)
{
    return $layout->with('title', 'Infrastructure')->nest('content', 'home');
});

/* GALLERY URI */
Route::get('gallery', function() use ($layout)
{
    return $layout->with('title', 'Gallery')->nest('content', 'home');
});

/* COMPANY URI */
Route::get('team', function() use ($layout)
{
    return $layout->with('title', 'Our Team')->nest('content', 'home');
});

Route::get('advisors-mentors', function() use ($layout)
{
    return $layout->with('title', 'Advisors &amp; Mentors')->nest('content', 'home');
});

Route::get('contact-us', function() use ($layout)
{
    return $layout->with('title', 'Contact Us')->nest('content', 'home');
});

Route::get('advantage', function() use ($layout)
{
    return $layout->with('title', 'Advantage')->nest('content', 'home');
});

/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Route::get('/', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});