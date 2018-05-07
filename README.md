### Multi Frontend Scaffolding

#### A demo for a purposal for nwidart/laravel-modules and laravel-multimix

The purpose is to have multi frontend scaffolding pipelines, one per module, all from project root

If you have been building apps with a considerate high ammount of "areas", concerns and/or using different frontend dependencies, you know what I'm talking about.

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

- Product Module with VueJS + Bulma

- Cart Module with VueJS + Bootstrap

Frontend assets will be on "public/modules/MODULE_NAME"

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

## just make sure .env with MIX_MIX_PUBLIC_PATH=public

composer install

php artisan key:generate

valet open ## or open the app in browser
```

#### Key files to inspect

From analyzing this 2 files, you get the picture of how it's working

```
webpack.mix.js
Modules/Product/webpack.mix.js
Product/Resources/views/layouts/master.blade.php
```



To compile assets for a module, remember you have to have its dependencies installed.

So go to the module directory, and (depending on your preference)

``` 

cd Modules/<ModuleName>

npm install

# or

yarn
```