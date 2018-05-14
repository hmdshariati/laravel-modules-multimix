### Modular Laravel with Laravel-Modules and Laravel-Multimix

##### An awesome way to have separate concerns on backend and frontend.

###### Instructions below pictures

See it in action here [Live Demo, with Vue and React DevTools Enabled](https://laravel-modules-multimix.cursor.pt/)

![ModularLaravelImg](public/img/launch.jpeg/?raw=true "Title")

The purpose is to have multi frontend scaffolding pipelines, one per module, all of it from project root

If you have been building apps with a considerate high ammount of "areas", concerns and/or using different frontend dependencies, you know what I'm talking about.

![Folder_structure_1](public/img/folder_structure_1.png?raw=true "Title")   ![Folder_structure_2](public/img/folder_structure_2.png?raw=true "Title")

This implementation approach is combining nWidart/laravel-modules and  fandogh/laravel-multimix

Implementation keypoints:

- Multiple frontend asset pipelines (webpack.mix.js)

- Multiple manifest.json files (one per module)

This will be as easy as

```
npm run mix dev <MODULE_NAME> 
```

Thank you to the developers of both great packages

[Laravel-Modules nWidart/laravel-modules](https://github.com/nWidart/laravel-modules)

[Laravel-Multimix fandogh/laravel-multimix](https://github.com/fandogh/laravel-multimix)

Example, for a `Product` Module
```
npm run mix dev Product

## or

npm run mix watch Product

npm run mix production Product
```

Also, `poll` and `hot` are presets available, but haven't still tried it out. 

Each module will have its own package.json with frontend dependencies, and its own webpack.mix.js

In this example, not only separating concerns, but also making:

- Frontoffice Module with TailwindCSS + VueJs

- Cart Module with VueJS + Bootstrap

- Product Module with ReactJs + Bulma

Frontend assets will be on "public/modules/<MODULE_NAME>"

```
public/modules/Product/mix-manifest.json
public/modules/Product/js/*
public/modules/Product/css/*

(...)

public/modules/Cart/mix-manifest.json
public/modules/Cart/js/*
public/modules/Cart/css/*

(...)
```

Mix helper on Blade Files will receive the manifest.json path as 2nd argument

```
<link rel="stylesheet" href="{{ mix('css/product.css','modules/Product') }}">
```

#### Try it out
``` 
git clone https://github.com/ijpatricio/laravel-modules-multimix.git

cp .env.example .env

composer install

php artisan key:generate

valet open ## or open the app in browser
```

#### Key files to inspect

From analyzing these three files, you get the picture of how it's working

```
webpack.mix.js
modules/Cart/webpack.mix.js
Cart/Resources/views/layouts/master.blade.php
```



To compile assets for a module, remember you have to have its dependencies installed.

``` 

cd modules/<ModuleName>

npm install

```
