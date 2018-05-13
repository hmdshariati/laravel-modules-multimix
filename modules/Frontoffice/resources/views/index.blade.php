@extends('frontoffice::layouts.master')

@section('content')
    <div id="app">

        <div class="flex justify-center mt-12">

            <div class="max-w-lg rounded overflow-hidden shadow-lg">

                <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">

                <div class="px-6 py-4 mb-4">
                    <div class="font-bold text-xl mb-2">Laravel with Laravel-Modules and Laravel-Multimix</div>
                    <p class="text-grey-darker text-base leading-loose">
                        This is an awesome (IMHO) way to have separate concerns on both backend and frontend.
                    </p>

                    <p class="mt-4 text-grey-darker text-base leading-normal ">
                        So I put together 2 packages, customized both implementations, and got this result.
                        I hope you see value in it, and it helps you out!! You've got to go through the source code.
                        If you have interest in the topic, you will know your way around!
                    </p>
                </div>

                <div class="flex justify-around">
                    <a href="https://github.com/nWidart/laravel-modules" target="_blank" class="package-link">nwidart/laravel-modules</a>
                    <a href="https://github.com/fandogh/laravel-multimix" target="_blank" class="package-link">fandogh/laravel-multimix</a>
                </div>


                <div class="px-6 py-4">
                    <p class="mt-4 text-grey-darker text-base leading-loose">

                        Basically, on the server-side is a Laravel application.

                        On the same project, with Laravel-Mix, and those packages mentioned above, we get independent
                        frontend areas:
                    </p>
                </div>

                <div class="px-6 py-4 mb-10 flex-col">

                    <div class="flex h-16 justify-center">
                        <div class="flex">
                            <div>
                                The frontoffice, where you are... With (the both amazing!!)
                            </div>
                            <div class="ml-3">
                                <a href="https://tailwindcss.com/" class="external-link">
                                    TailwindCSS
                                </a>
                            </div>
                            <div class="ml-3">and</div>
                            <div class="ml-3">
                                <a href="https://vuejs.org/" class="external-link">
                                    VueJS
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex h-16 justify-center">
                        <div>
                            <a href="/cart" class="package-link rounded-full">Cart Module</a>
                        </div>
                        <div class="ml-3">
                            Product Module, Vue and Bulma
                        </div>
                    </div>

                    <div class="flex h-16 justify-center">
                        <div>
                            <a href="/product" class="package-link rounded-full">Product Module</a>
                        </div>
                        <div class="ml-3">
                            Product Module, Vue and Bulma
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@stop
