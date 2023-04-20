<nav x-data="{ open: false }" class="bg-main font-montserratAlter py-3 items-center">
    <!-- Primary Navigation Menu -->
    <div class="container items-center mx-auto columns-12 flex flex-row">
        <a href="{{ route('index') }}" class="basis-1/12">
            <span class="self-center text-lightText text-montserratAlter text-2xl font-bold whitespace-nowrap">SoupRoses</span>
        </a>
        <ul class="basis-8/12 px-4 flex flex-row items-center pt-1 text-lightText">
            <li>
                <a href="#" class="block items-center pr-4 text-lightText hover:text-selectedHeaderText hover:underline hover:underline-offset-4 hover:decoration-3 hover:decoration-selectedHeaderText transition duration-500">Главная</a>
            </li>
            <li>
                <a href="#" class="block items-center pr-4 text-lightText hover:text-selectedHeaderText hover:underline hover:underline-offset-4 hover:decoration-3 hover:decoration-selectedHeaderText transition duration-500">Конструктор букетов</a>
            </li>
            <li>
                <a href="#" class="block items-center pr-4 text-lightText hover:text-selectedHeaderText hover:underline hover:underline-offset-4 hover:decoration-3 hover:decoration-selectedHeaderText transition duration-500">Готовые букеты</a>
            </li>
            <li>
                <a href="#" class="block items-center pr-4 text-lightText hover:text-selectedHeaderText hover:underline hover:underline-offset-4 hover:decoration-3 hover:decoration-selectedHeaderText transition duration-500">Доставка</a>
            </li>
            <li>
                {{--                    <a href="">--}}
                {{--                        <img src="{{ Vite::asset('resources/images/cart.svg') }}"  class="object-contain h-12 w-12" alt="Корзина">--}}
                {{--                    </a>--}}
            </li>
        </ul>
        <div class="text-center flex flex-row items-center">


            <button type="button" class="inline-flex bg-lightText items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md  hover: focus:outline-none transition ease-in-out duration-500">Корзина</button>
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex bg-lightText items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md  hover: focus:outline-none transition ease-in-out duration-500">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
</nav>
