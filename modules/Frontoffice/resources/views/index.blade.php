@extends('frontoffice::layouts.master')

@section('content')
    <div id="app">

        <div class="flex justify-center mt-12">

            <div class="max-w-2xl rounded overflow-hidden shadow-lg">

                <img class="w-full" src="/img/launch.jpeg" alt="Modular Laravel">

                <div class="px-6 py-4 mb-4">
                    <div class="flex ">
                        <span class="font-bold pt-1 text-xl">Modular Laravel with Laravel-Modules and Laravel-Multimix</span>
                        <a href="https://github.com/ijpatricio/laravel-modules-multimix/" target="_blank"
                           class="ml-3 text-xs no-underline font-semibold rounded-full px-4 py-1 leading-normal bg-white border border-purple text-purple hover:bg-purple hover:text-white">
                            Github
                        </a>
                    </div>
                    <p class="text-grey-darker text-base leading-loose">
                        This is an awesome way to have separate concerns on both backend and frontend.
                    </p>
                </div>

                <div class="px-6 py-4 flex justify-around">
                    <div class="">
                        <img src="/img/folder_structure_1.png">
                    </div>
                    <div class="">
                        <img src="/img/folder_structure_2.png" class="w-full">
                    </div>
                </div>


                <div class="px-6 py-4">
                    <p class="text-grey-darker text-base leading-loose">

                        Basically, on the server-side it's a
                        <a href="https://laravel.com/" target="_blank" class="external-link">
                            Laravel
                        </a>
                        application.

                        On the same project, with
                        <a href="https://github.com/JeffreyWay/laravel-mix" target="_blank" class="external-link">
                            Laravel Mix
                        </a>
                        , the packages and tools mentioned below, we get independent areas (both back and frontend):
                    </p>
                </div>

                <div class="px-6 py-4 flex-col">

                    <div class="flex h-16 justify-center">
                        <div class="flex">
                            <div>
                                The
                                <a href="/#" class="package-link rounded-full">Frontoffice Module</a>
                                (where you are right now) built with
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


                <div class="px-6 py-4 flex mb-6 justify-center flex-col">

                    <div class="text-center">
                        <p class="mt-4 text-grey-darker leading-normal">
                            Thank you so much to all the creators and amazing community members, that make this journey so awesome!!
                        </p>
                    </div>

                    <div class="mt-6 mb-6">
                        <div class="bg-white mx-auto max-w-sm shadow-lg rounded-lg overflow-hidden">
                            <div class="sm:flex sm:items-center px-6 py-4">
                                <img class="block h-16 sm:h-24 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0"
                                     src="https://avatars0.githubusercontent.com/u/26031459?s=460&v=4" alt="">
                                <div class="text-center sm:text-left sm:flex-grow">
                                    <div class="mb-4">
                                        <p class="text-xl leading-tight">João Patrício</p>
                                        <p class="text-sm leading-tight text-grey-dark">
                                            Happy coding!
                                        </p>
                                    </div>
                                    <div>
                                        <a href="https://twitter.com/ijpatricio" target="_blank"
                                           class="text-xs no-underline font-semibold rounded-full px-4 py-1 leading-normal bg-white border border-purple text-purple hover:bg-purple hover:text-white">
                                            Twitter
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@stop
