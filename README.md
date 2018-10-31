
**PHP Router**
Inspired from Symphony and Laravel routing engine, this class handles basic HTTP routing.
  
**.htaccess**
Your htaccess should look something like below

    <IfModule mod_rewrite.c>
            Options +FollowSymlinks
            RewriteEngine On
            RewriteBase /
            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteCond %{REQUEST_FILENAME} !-d
            RewriteRule ^(.*)$ /index.php?uri=$1 [L,QSA]
    </IfModule>

**How to use it**
Download and place the router.php class on your application directory. E.g. App/router.php and then require router.php script from your index.php file e.g.

    require_once( dirname(__FILE__) .  '/App/router.php' );

**GET Route**
The following example matches the GET request to the HomeController@index

    Router::get('/', 'HomeController@index');

**POST Route**
The following example matches the POST request to the HomeController@Postindex

    Router::post('/', 'homeController@Postindex');

Here are more eamples on how to use routes and wildcard routes

    Router::get('/photo-gallery', 'photoGalleryController@index');
    Router::get('/photo-gallery/something-else', 'photoGalleryController@others');
    Router::get('/photo-gallery/{year}', 'photoGalleryController@year');
    Router::get('/photo-gallery/{year}/{single}', 'photoGalleryController@single');

At the end of all the routes you should call

    Router::dispatch();

This will return the matching route. You can assign it to the variable and use it anyway you like.
