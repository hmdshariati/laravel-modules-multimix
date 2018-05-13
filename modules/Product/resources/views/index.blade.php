@extends('product::layouts.master')

@section('content')

    <div class="columns" style="margin-top: 1em;">
        <div class="column has-text-centered">
            <h1>Hello World</h1>
        </div>
        <div class="column has-text-centered">
            <p>
                This view is loaded from module: {!! config('product.name') !!}
            </p>
        </div>
        <div class="column has-text-centered" style="margin-right: 30px;">
            <div class="notification is-primary">
                This module is powered by Vue and Bulma
            </div>
        </div>
    </div>

    <div class="columns" style="margin-top: 1em;">
        <div class="column has-text-centered">
            <a href="/" class="button is-primary is-outlined">Back</a>
        </div>
    </div>

@stop
