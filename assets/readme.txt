Inicio de proyecto Symfony con Bootstrap 

composer create-project symfony/skeleton my_project  

composer require symfony/maker-bundle --dev 

composer require symfony/twig-bundle 

En config/packages/twig.yaml añadir:  

twig: 

    paths: 

        '%kernel.project_dir%/templates': templates 

Composer install 

composer require symfony/webpack-encore-bundle 

npm install bootstrap --save-dev 

npm install @popperjs/core --save-dev 

npm run watch         *compila los assets en public/build 

php bin/console make:controller DefaultController   

En app.js añadir -> import './scss/styles.scss'; import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';

Descomentar .enableSassLoader() de webpack.config 

npm install sass-loader@^14.0.0 sass --save-dev 

npm run watch 

Se pueden añadir más funciones de bootstrap a app.js. Por ejemplo: 
	// Import only the Bootstrap components we need 

import { Popover } from 'bootstrap'; 

// Create an example popover 

document.querySelectorAll('[data-bs-toggle="popover"]') 

  .forEach(popover => { 

    new Popover(popover) 

  }) 

 