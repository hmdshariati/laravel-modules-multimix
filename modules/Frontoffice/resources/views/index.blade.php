@extends('frontoffice::layouts.master')

@section('content')
    <style>
        * {
            /*outline: 1px red solid !important;*/
        }
    </style>
    <div id="app">

        <div class="flex justify-center mt-12">

            <div class="max-w-2xl rounded overflow-hidden shadow-lg">

                <img class="w-full" src="/img/launch.jpeg" alt="Modular Laravel">

                <div class="px-6 py-4 flex flex-wrap">

                    <div class="w-full lg:w-2/3">

                        <p class="font-bold text-xl mb-2">
                            Modular Laravel with Laravel-Modules and Laravel-Multimix
                        </p>
                        <p class="text-grey-darker mb-2">
                            An awesome way to have separate concerns on backend and frontend.
                        </p>
                        <p class="text-sm">
                            Any doubt, issue, typo, error, please let me know!
                        </p>

                    </div>
                    <div class="w-auto text-center mt-8 text-left">

                        <a href="https://github.com/ijpatricio/laravel-modules-multimix/" target="_blank"
                           class="ml-12 text-xs no-underline font-semibold rounded-full px-4 py-1 leading-normal bg-white border border-purple text-purple hover:bg-purple hover:text-white">
                            Github
                        </a>

                    </div>
                </div>



                <div class="px-6 py-4 flex flex-wrap justify-around">
                    <div class="w-full md:w-1/2 text-center">
                        <img src="/img/folder_structure_1.png" class="max-w-sm">
                    </div>
                    <div class="w-full md:w-1/2 text-center">
                        <img src="/img/folder_structure_2.png" class="max-w-sm">
                    </div>
                </div>


                <div class="px-6 py-4">
                    <p class="text-grey-darker text-base leading-loose">
                        Basically, on the server-side it's a
                        <a href="https://laravel.com/" target="_blank" class="external-link">
                            Laravel
                        </a>
                        application.On the same project, with
                        <a href="https://github.com/JeffreyWay/laravel-mix" target="_blank" class="external-link">
                            Laravel Mix
                        </a>
                        ,the packages and tools mentioned below, we get independent areas (both back and frontend):
                    </p>
                </div>

                {{----------------------------}}
                {{--MODULES DESCRIPTION AREA--}}
                {{----------------------------}}

                <div class="flex mb-4 px-6 py-4 text-center">
                    <div class="w-full leading-loose bg-grey-light rounded-lg px-4 py-4">
                        The
                        <a href="/#" class="package-link py-1 ">Frontoffice Module</a>
                        (where you are right now)
                        built with
                        <a href="https://tailwindcss.com/" target="_blank" class="external-link">TailwindCSS</a>
                        and
                        <a href="https://vuejs.org/" target="_blank" class="external-link">VueJS</a>
                    </div>
                </div>

                <div class="flex mb-4 px-6 py-4 text-center">
                    <div class="w-full leading-loose bg-grey-light rounded-lg px-4 py-4">
                        The
                        <a href="/cart" class="package-link rounded-full">Cart Module</a>
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

                <div class="flex mb-4 px-6 py-4 text-center">
                    <div class="w-full leading-loose bg-grey-light rounded-lg px-4 py-4">
                        The
                        <a href="/product" class="package-link rounded-full">Product Module</a>
                        built with
                        <a href="https://reactjs.org/" target="_blank" class="external-link">
                            ReactJS
                        </a>
                        <a href="https://bulma.io/" target="_blank" class="external-link">
                            Bulma
                        </a>
                    </div>
                </div>


                <div class="flex flex-wrap mt-8 mb-8 md:justify-center">
                    <div class="w-full sm:w-1/2 h-10 text-center">
                        built with ❤️,
                        <a href="https://laravel.com/" target="_blank" class="external-link">
                            Laravel
                        </a>
                        and
                        <a href="https://github.com/JeffreyWay/laravel-mix" target="_blank" class="external-link">
                            Laravel Mix
                        </a>
                    </div>
                    <div class="w-full sm:w-1/2 h-10 text-center">
                        deployed with ☕️, and
                        <a href="https://forge.laravel.com/" target="_blank" class="external-link">
                            Forge
                        </a>
                    </div>
                </div>


                <div class="px-6 flex justify-around">
                    <p class="max-w-md text-grey-darker text-center leading-normal ">
                        So I put together 2 packages, customized both implementations, and got this result.
                        I hope you see value in it, and it helps you out!! You've got to go through the source code.
                        If you have interest in the topic, you will know your way around!
                    </p>
                </div>

                <div class="flex justify-around mb-6 mt-6 px-4">
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
