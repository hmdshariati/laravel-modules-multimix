### Multi Frontend Scaffolding

#### A demo for a purposal for nwidart/laravel-modules and laravel-multimix

The purpose is to have multi frontend scaffolding pipelines, one per module, all from project root

If you have been building apps with a considerate high ammount of "areas", concerns and/or using different frontend dependencies, you know what I'm talking about.

This will be as easy as

```
npm run mix dev <MODULE_NAME> 
```

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

#### Try it out
``` 
git clone https://github.com/ijpatricio/laravel-modules-multimix.git

cp .env.example .env

## just make sure .env with MIX_MIX_PUBLIC_PATH=public

composer install

php artisan key:generate

valet open ## or open the app in browser
```

