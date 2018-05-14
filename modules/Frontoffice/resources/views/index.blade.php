@extends('frontoffice::layouts.master')

@section('content')
    <div id="app">

        <div class="flex justify-center mt-12">

            <div class="max-w-lg rounded overflow-hidden shadow-lg">

                <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">

                <div class="px-6 py-4 mb-4">
                    <div class="font-bold text-xl">Laravel with Laravel-Modules and Laravel-Multimix</div>
                    <p class="text-grey-darker text-base leading-loose">
                        This is an awesome way to have separate concerns on both backend and frontend.
                    </p>
                </div>

                <div class="px-6 py-4">
                    <p class="text-grey-darker text-base leading-loose">

                        Basically, on the server-side is a Laravel application.

                        On the same project, with Laravel-Mix, and those packages mentioned above, we get independent
                        frontend areas:
                    </p>
                </div>

                <div class="px-6 py-4 flex-col">

                    <div class="flex h-16 justify-center">
                        <div class="flex">
                            <div>
                                The frontoffice, where you are... With (the both amazing!!)
                            </div>
                            <div class="ml-3">
                                <a href="https://tailwindcss.com/" target="_blank" class="external-link">
                                    TailwindCSS
                                </a>
                            </div>
                            <div class="ml-3">and</div>
                            <div class="ml-3">
                                <a href="https://vuejs.org/" target="_blank" class="external-link">
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
                            built with
                            <a href="https://vuejs.org/" target="_blank" class="external-link">
                                VueJS
                            </a>
                            <a href="https://bootstrap-vue.js.org/" target="_blank" class="external-link">
                                Bootstrap-Vue
                            </a>
                            <a href="https://getbootstrap.com/" target="_blank" class="external-link">
                                Bootstrap 4
                            </a>
                        </div>
                    </div>

                    <div class="flex h-16 justify-center">
                        <div>
                            <a href="/product" class="package-link rounded-full">Product Module</a>
                        </div>
                        <div class="ml-3">
                            built with
                            <a href="https://reactjs.org/" target="_blank" class="external-link">
                                ReactJS
                            </a>
                            <a href="https://bulma.io/" target="_blank" class="external-link">
                                Bulma
                            </a>
                        </div>
                    </div>

                    <div class="flex h-16 justify-center">
                        <div class="ml-3">
                            built with
                            <a href="https://laravel.com/" target="_blank" class="external-link">
                                Laravel
                            </a>
                            <a href="https://github.com/JeffreyWay/laravel-mix" target="_blank" class="external-link">
                                Laravel Mix
                            </a>
                            deployed with ❤️ , ☕️ , and
                            <a href="https://forge.laravel.com/" target="_blank" class="external-link">
                                Forge
                            </a>
                        </div>
                    </div>

                </div>

                <div class="px-6 flex ">
                    <p class="text-grey-darker text-base leading-normal ">
                        So I put together 2 packages, customized both implementations, and got this result.
                        I hope you see value in it, and it helps you out!! You've got to go through the source code.
                        If you have interest in the topic, you will know your way around!
                    </p>
                </div>

                <div class="flex justify-around mb-6 mt-6">
                    <a href="https://github.com/nWidart/laravel-modules" target="_blank" class="package-link">nwidart/laravel-modules</a>
                    <a href="https://github.com/fandogh/laravel-multimix" target="_blank" class="package-link">fandogh/laravel-multimix</a>
                </div>


                <div class="px-6 py-4 flex mb-6">
                    <p class="mt-4 text-grey-darker text-base leading-normal ">
                        Thank you to all the creators!! Happy coding!!
                    </p>
                </div>

            </div>

        </div>

    </div>
@stop
