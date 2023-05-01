<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SoapRosesRND</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-background flex flex-col min-h-screen">

<header>
    <nav class="bg-main font-montserratAlter py-3 items-center">
        <div class="container items-center mx-auto columns-12 flex flex-row">
            <a href="{{ route('index') }}" class="basis-1/12">
                <span class="self-center text-lightText text-montserratAlter text-2xl font-bold whitespace-nowrap">SoupRoses</span>
            </a>
            <ul class="basis-8/12 px-4 flex flex-row items-center pt-1 text-lightText">
                <li>
                    <a href="#"
                       class="block items-center pr-4 text-lightText hover:text-selectedHeaderText hover:underline hover:underline-offset-4 hover:decoration-3 hover:decoration-selectedHeaderText transition duration-500">Главная</a>
                </li>
                <li>
                    <a href="#"
                       class="block items-center pr-4 text-lightText hover:text-selectedHeaderText hover:underline hover:underline-offset-4 hover:decoration-3 hover:decoration-selectedHeaderText transition duration-500">Конструктор
                        букетов</a>
                </li>
                <li>
                    <a href="#"
                       class="block items-center pr-4 text-lightText hover:text-selectedHeaderText hover:underline hover:underline-offset-4 hover:decoration-3 hover:decoration-selectedHeaderText transition duration-500">Готовые
                        букеты</a>
                </li>
                <li>
                    <a href="#"
                       class="block items-center pr-4 text-lightText hover:text-selectedHeaderText hover:underline hover:underline-offset-4 hover:decoration-3 hover:decoration-selectedHeaderText transition duration-500">Доставка</a>
                </li>
                <li>
                    {{--                    <a href="">--}}
                    {{--                        <img src="{{ Vite::asset('resources/images/cart.svg') }}"  class="object-contain h-12 w-12" alt="Корзина">--}}
                    {{--                    </a>--}}
                </li>
            </ul>
            <div class="text-center flex flex-row items-center">


                <button type="button"
                        class="inline-flex bg-lightText items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md  hover: focus:outline-none transition ease-in-out duration-500">
                    Корзина
                </button>
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    @if(auth()->user() === null)
                        <div>
                            <div>
                                <button
                                    class="inline-flex bg-lightText items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md  hover: focus:outline-none transition ease-in-out duration-500"
                                    type="submit">
                                    <a href="{{route('login')}}">Войти</a>

                                </button>
                            </div>
                        </div>
                    @else
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex bg-lightText items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md  hover: focus:outline-none transition ease-in-out duration-500">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Профиль') }}
                                </x-dropdown-link>
                                @if((int)auth()->user()->role_id === 2)

                                    <x-dropdown-link :href="route('admin')">
                                        {{ __('Админка') }}
                                    </x-dropdown-link>
                                @endif

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Выход') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>

                    @endif


                </div>
            </div>
        </div>

    </nav>

</header>

<main>
    <section>
        <div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24">
            <!--Left Col-->
            <div class="flex flex-col w-full lg:w-1/2 justify-center items-start pt-12 pb-24 px-6">
                <div class="basis-7/12 py-5 max-h-96">
                    <h1 class="text-2xl font-montserrat font-bold font-montserratAlter">
                        {{$product->title}}
                    </h1>
                    <h2 class="mb:text-base lg:text-lg xl:text-xl font-montserrat font-medium leading-relaxed py-5">
                        {{$product->description}}
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi autem excepturi iure magnam natus nisi nulla, officiis. Aspernatur at beatae et excepturi facere libero maiores non perferendis sit voluptatum.
                    </h2>
                    <h3>
                        {{$product->price}} <span> руб</span>
                    </h3>
                </div>
                <button type="button" class="mt-5 text-lightText py-2 shadow-xl text-shadow-xl font-montserratAlter min-w-[50%] bg-target rounded-full text-xl px-4 py-2.5 text-center mr-2 mb-2">Заказать букет</button>
            </div>
            <!--Right Col-->
            <div class="w-full lg:w-1/2 lg:py-6 text-center">
                <!--Add your product image here-->

                <img class="max-h-[475px] mx-auto" src="{{ asset('storage/'.$product->image) }}" alt="img">
            </div>

        </div>
    </section>

</main>


<footer class="bg-main shadow  mb-none py-4 ">
    <div class="w-full mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="#" class="flex items-center mb-4 sm:mb-0">
                <span class="self-center text-lightText text-montserratAlter text-2xl font-bold whitespace-nowrap">SoupRoses</span>
            </a>
            <ul class="flex flex-wrap font-montserrat text-lightText items-center mb-6 text-sm font-medium sm:mb-0">
                <li>
                    <a href="#" class="mr-4 hover:text-selectedHeaderText hover:underline hover:underline-offset-4 hover:decoration-3 hover:decoration-selectedHeaderText transition duration-500 md:mr-6 ">Конструктор букетов</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:text-selectedHeaderText hover:underline hover:underline-offset-4 hover:decoration-3 hover:decoration-selectedHeaderText transition duration-500 md:mr-6">Наши работы</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:text-selectedHeaderText hover:underline hover:underline-offset-4 hover:decoration-3 hover:decoration-selectedHeaderText transition duration-500 md:mr-6 ">Политика конфиденциальности</a>
                </li>
                <li>
                    <a href="#" class="hover:text-selectedHeaderText hover:underline hover:underline-offset-4 hover:decoration-3 hover:decoration-selectedHeaderText transition duration-500">Контакты</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />

        <span class="block text-sm sm:text-center font-montserrat text-lightText">© 2023 <a href="#" class="hover:text-selectedHeaderText hover:underline hover:underline-offset-4 hover:decoration-3 hover:decoration-selectedHeaderText transition duration-500">SoupRoses</a>. Все права защищены.</span>
    </div>
</footer>


</body>
</html>
