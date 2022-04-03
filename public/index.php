<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\controllers\IndexController;
use coding\app\controllers\CategoriesController;
use coding\app\controllers\BookController;
use coding\app\controllers\UsersController;
use coding\app\controllers\AuthorsController;
use coding\app\controllers\PublishersController;
use coding\app\controllers\CitiesController;
use coding\app\controllers\OffersController;
use coding\app\controllers\PayementsController;
use coding\app\controllers\User_PayementController;
use coding\app\controllers\CartController;
use coding\app\controllers\LoginController;

use coding\app\system\AppSystem;
use coding\app\system\Router;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));//createImmutable(__DIR__);
$dotenv->load();

$config=array(
  'servername'=>$_ENV['DB_SERVER_NAME'],
  'dbname'=>$_ENV['DB_NAME'],
  'dbpass'=>$_ENV['DB_PASSWORD'],
  'username'=>$_ENV['DB_USERNAME']

);
$system=new AppSystem($config);

/** web routes  */


Router::get('/',[IndexController::class,'viewIndex']);
Router::get('/home',[IndexController::class,'list']);
Router::post('/home/{bookid}',[IndexController::class,'cartSession']);

Router::get('/add_category',[CategoriesController::class,'create']);
Router::post('/save_category',[CategoriesController::class,'store']);
Router::get('/categories',[CategoriesController::class,'showCategories']);

Router::get('/add_book',[BookController::class,'createBook']);
Router::post('/save_book',[BookController::class,'storeBook']);
Router::get('/books',[BookController::class,'showBook']);


Router::get('/add_publisher',[PublishersController::class,'create']);
Router::post('/save_publisher',[PublishersController::class,'insertPublisher']);
Router::get('/publishers',[PublishersController::class,'showPublishers']);

Router::get('/add_author',[AuthorsController::class,'cearteAuthor']);
Router::post('/save_author',[AuthorsController::class,'storeAuthor']);
Router::get('/authors',[AuthorsController::class,'showAuthor']);
Router::get('/edit_author/{id}',[AuthorsController::class,'showAuthorById']);
Router::post('/update_author',[AuthorsController::class,'updateAuthor']);
Router::get('/delete_author/{id}',[AuthorsController::class,'deleteAuthor']);
Router::get('/isActive_author/{id}',[AuthorsController::class,'isActiveAuthor']);
Router::get('/noActive_author/{id}',[AuthorsController::class,'noActiveAuthor']);

Router::get('/add_user',[UsersController::class,'createUser']);
Router::post('/save_user',[UsersController::class,'storeUser']);
Router::get('/users',[UsersController::class,'showUsers']);

Router::get('/add_city',[CitiesController::class,'createCity']);
Router::post('/save_city',[CitiesController::class,'storCity']);
Router::get('/cities',[CitiesController::class,'showSities']);

Router::get('/add_offers',[OffersController::class,'createOffers']);
Router::post('/save_offers',[OffersController::class,'storeOffers']);
Router::get('/offers',[OffersController::class,'showOffers']);

Router::get('/redirect',[OffersController::class,'storeOffers']);
Router::get('/add_payement',[PayementsController::class,'createPayment']);
Router::post('/save_payment',[PayementsController::class,'storePayment']);

Router::get('/add_user_payment_methods',[User_PayementController::class,'cerateUserPayement']);
Router::post('/save_UserPayement',[User_PayementController::class,'saveUserPayement']);
Router::get('/user_payement',[User_PayementController::class,'showMethod']);



Router::get('/cart',[CartController::class,'showCart']);
Router::post('/sigin',[LoginController::class,'siginup']);
Router::post('/login',[LoginController::class,'login']);




/** end of web routes */



$system->start();

