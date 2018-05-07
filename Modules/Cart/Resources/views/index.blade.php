@extends('cart::layouts.master')

@section('content')


    <b-container class="bv-example-row pt-5">
        <b-row>
            <b-col>
                <h1>Hello World</h1>
            </b-col>
            <b-col>
                <p>
                    This view is loaded from module: {!! config('cart.name') !!}
                </p>
            </b-col>
            <b-col>
                <b-alert show>
                    Welcome to Cart module, powered by Vue and Bootstrap-Vue
                </b-alert>
            </b-col>
        </b-row>
    </b-container>

@stop
