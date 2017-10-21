<?php

/**
 * The following are huge list of examples that you can look, 
 * customize and use it on your project.
 * 
 * Note:
 * Make sure that your .htaccess is configured correctly to use this class
 * Check the documenation for more details.
 * 
 */

require_once( dirname(__FILE__) . '/router.php' );

//GET
Router::get('/', 'homeController@index');
Router::get('/about', 'aboutController@index');

Router::get('/newsroom', 'newsroomController@index');
Router::get('/newsroom/something-else', 'newsroomController@others');
Router::get('/newsroom/{year}', 'newsroomController@year');
Router::get('/newsroom/{year}/{single}', 'newsroomController@single');

Router::get('/photo-gallery', 'photoGalleryController@index');
Router::get('/photo-gallery/something-else', 'photoGalleryController@others');
Router::get('/photo-gallery/{year}', 'photoGalleryController@year');
Router::get('/photo-gallery/{year}/{single}', 'photoGalleryController@single');

Router::get('/{username}', 'profileController@index');
Router::get('/{username}/about', 'profileController@about');
Router::get('/{username}/photos', 'profileController@photos');
Router::get('/{username}/videos', 'profileController@videos');

Router::get('/resources', 'resourcesController@index');

//POST
Router::post('/', 'homeController@Postindex');
Router::post('/about', 'aboutController@Postindex');

Router::post('/newsroom', 'newsroomController@Postindex');
Router::post('/newsroom/something-else', 'newsroomController@Postothers');
Router::post('/newsroom/{year}', 'newsroomController@Postyear');
Router::post('/newsroom/{year}/{single}', 'newsroomController@Postsingle');

Router::post('/photo-gallery', 'photoGalleryController@Postindex');
Router::post('/photo-gallery/something-else', 'photoGalleryController@Postothers');
Router::post('/photo-gallery/{year}', 'photoGalleryController@Postyear');
Router::post('/photo-gallery/{year}/{single}', 'photoGalleryController@Postsingle');

Router::post('/{username}', 'profileController@Postindex');
Router::post('/{username}/about', 'profileController@Postabout');
Router::post('/{username}/photos', 'profileController@Postphotos');
Router::post('/{username}/videos', 'profileController@Postvideos');

//Start constructing the pattern and params
echo Router::dispatch();