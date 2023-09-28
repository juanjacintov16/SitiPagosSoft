Como hacer login y registro en cakephp 4
Descargo  CakePHP 
composer create-project --prefer-dist cakephp/app:~4.0 login-cake

Crear migración
bin/cake bake migration CreateUsers username:string email:string:unique password created modified 

Creo la tabla y campos
bin/cake migrations migrate

Creo el crud de usuarios
bin/cake bake all users

Instalo en plugin de autentificacion
composer require "cakephp/authentication:^2.4"

En la entidad user hacheo la contraseña
  use Authentication\PasswordHasher\DefaultPasswordHasher;

   protected function _setPassword(string $password) : ?string

    {

        if (strlen($password) > 0) {

            return (new DefaultPasswordHasher())->hash($password);

        }

    }

En src/Application.php agregar
// In src/Application.php add the following imports

use Authentication\AuthenticationService;
use Authentication\AuthenticationServiceInterface;
use Authentication\AuthenticationServiceProviderInterface;
use Authentication\Middleware\AuthenticationMiddleware;
use Cake\Routing\Router;
use Psr\Http\Message\ServerRequestInterface; 

//a la baseApplicacion exitente le agrego
// in src/Application.php

class Application extends BaseApplication

    implements AuthenticationServiceProviderInterface 

{

Entro al método middelware y después del
 ->add(new BodyParserMiddleware()) agrego el 

  ->add(new AuthenticationMiddleware($this));

Agregamos a continuación el método
public function getAuthenticationService(ServerRequestInterface $request): AuthenticationServiceInterface
{

    $authenticationService = new AuthenticationService([

        'unauthenticatedRedirect' => Router::url('/users/login'),

        'queryParam' => 'redirect',

    ]);

    // Load identifiers, ensure we check email and password fields
    $authenticationService->loadIdentifier('Authentication.Password', [

        'fields' => [

            'username' => 'email',

            'password' => 'password',

        ]

    ]);



    // Load the authenticators, you want session first

    $authenticationService->loadAuthenticator('Authentication.Session');

    // Configure form data check to pick email and password
$authenticationService->loadAuthenticator('Authentication.Form', [

'fields' => [

    'username' => 'email',

    'password' => 'password',

],

'loginUrl' => Router::url('/users/login'),

]);



return $authenticationService;

}

En // src/Controller/AppController.php
en el método initialize al final agregar 
$this->loadComponent('Authentication.Authentication');

A continuación agrego el método
public function beforeFilter(\Cake\Event\EventInterface $event)

{

parent::beforeFilter($event);

// Configure the login action to not require authentication, preventing

// the infinite redirect loop issue

$this->Authentication->addUnauthenticatedActions(['login']);

}



Agrego al controllador de users el método login
// in src/Controller/UsersController.php

// in src/Controller/UsersController.php



public function login()

{

$result = $this->Authentication->getResult();

// If the user is logged in send them away.

if ($result->isValid()) {

    return $this->redirect(['controller' => 'Users','action' => 'index']);

}

if ($this->request->is('post')) {

    $this->Flash->error('Invalid username or password');

}

}

Creo la plantilla para el login
// in templates/Users/login.php

<div class="users form content">

<?= $this->Form->create() ?>

<fieldset>

<legend><?= __('Please enter your email and password') ?></legend>

<?= $this->Form->control('email') ?>

<?= $this->Form->control('password') ?>

</fieldset>

<?= $this->Form->button(__('Login')); ?>

<?= $this->Form->end() ?>

</div>



* si ejecuto ya funciona


Voy a src/View/AppView.php
y agrego en el método inicialize

para ver el usuario desde cualquier parte de la aplicación



$this->loadHelper('Authentication.Identity');



- con esta linea $username = $this->Identity->get('username');

puedo ver el suario en cualquier parte 

lo agregaremos a la vista de index

<?= $username = $this->Identity->get('username'); ?>



puedo ver tambien el correo del usuario

<?= $username = $this->Identity->get('email'); ?>



Agrego el logout al controlador users
// in src/Controller/UsersController.php

public function logout()

{

$result = $this->Authentication->getResult();

// regardless of POST or GET, redirect if user is logged in

if ($result && $result->isValid()) {

$this->Authentication->logout();

return $this->redirect(['controller' => 'Users', 'action' => 'login']);

}

}

Si deseo dar permiso para crear el primer usuario
debo agregar el add en src/Controller/AppController.php



public function beforeFilter(\Cake\Event\EventInterface $event)

{

parent::beforeFilter($event);



$this->Authentication->allowUnauthenticated(['login','add']); <---

}

Agregar en el menú de la aplicación la opción de logout
debo agregar donde quiera 

<?= $this->Html->link('Salir',['controller' => 'Users','action' => 'logout']) ?>

Si deseo mostrarlo solo cuando este logeado
<?= $username = $this->Identity->get('email'); ?>

<?php if ($username){?>

<?= $this->Html->link('Salir',['controller' => 'Users','action' => 'logout']) ?>

<?php } ?>



AHORA SI ENTRO A users/add 

podre agregar usuarios

luego de esto lo quito de nuevo si lo deseo