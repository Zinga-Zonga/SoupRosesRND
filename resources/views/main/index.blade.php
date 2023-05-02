@extends('layouts.main')

@section('content')

    <section>
        <div class="flex flex-row min-h-min min-w-screen bg-center bg-repeat-x"
             style="background-image: url({{ Vite::asset('resources/images/HeaderImage.svg') }})">
            <div class="bg-gradient-to-r from-gradStart to-gradFinish w-full">
                <h1 class="font-pacifico text-center py-4 text-5xl my-2 text-lightText">
                    Добро пожаловать на наш сайт!
                </h1>
                <h2 class="font-pacifico text-center py-4 text-4xl my-2 text-lightText">
                    Подари невероятные эмоции!
                </h2>
            </div>
        </div>
    </section>
    <section>
        <div class="container align-middle columns-12 mx-auto px-8 flex flex-row justify-between align-middle">
            <div class="basis-7/12 my-7 max-h-96">
                <h1 class="font-montserratAlter font-bold text-6xl">
                    Цветы
                </h1>
                <h2 class="font-pacifico text-3xl py-5 leading-relaxed">
                    Которые помогут вашей девушке расцвести<br>
                    и сами никогда не<br> завянут
                </h2>
                <button type="button"
                        class="mt-5 text-lightText py-2 shadow-xl text-shadow-xl font-montserratAlter min-w-[50%] bg-target rounded-full text-xl px-4 py-2.5 text-center mr-2 mb-2">
                    Заказать букет
                </button>
            </div>
            <div class="basics-5/12 max-h-96 items-center">
                <img alt="Букет мыльных роз" class="max-h-full mx-auto"
                     src="{{ Vite::asset('resources/images/bouquet.svg') }}">
            </div>
        </div>
    </section>
    <section class="container mx-auto px-8 my-7">
        <h1 class="text-5xl font-pacifico text-center">
            Наши работы
        </h1>
        <!-- ТОВАРЫ -->
        <div class="w-full h-full md:h-auto grid my-2 grid-cols-1 md:grid-cols-3 gap-4 px-2 py-4">
            <!-- item 1 -->
            @foreach($products as $product)
                <div class="select-none mb-6 w-full">
                    <div class="relative pb-64">
                        <a href="{{ route('main.products.show', $product->id) }}" class="cursor-pointer">
                            <img
                                class="absolute w-full h-full rounded-lg object-cover border-b shadow-md cursor-pointer"
                                src="{{asset('storage/'.$product->image)}}"
                                alt="product name"/>
                        </a>
                    </div>

                    <div class="px-4 -mt-16 relative">
                        <div class="bg-white rounded-lg shadow-lg border">
                            <div class="p-5">
                                <a class="text-gray-800 block mt-2 truncate hover:underline font-bold text-lg" href="#">
                                    {{$product->title}}
                                </a>
                                <a class="text-gray-600 block mt-2 truncate  font-medium text-md" href="#">
                                    {{$product->description}}

                                </a>

                            </div>


                            <div class="flex justify-between items-center pb-3 px-4">
                                <div>
                                    <div class="text-gray-800 text-lg">
                                        <span class="font-medium">{{$product->price}} руб</span>
                                    </div>
                                </div>

                                <div>
                                    <a class="btn-link flex items-center text-xs text-indigo-600 hover:underline"
                                       href="{{ route('main.products.show', $product->id) }}">
                                        Подробнее &rarr;
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between items-center pb-3 px-4">
                                <div>
                                    <form class="col-6" action="{{route('cart.store')}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" class="form-control hidden" id="productTitle" name="product_id" value="{{$product->id}}">
                                        <input type="text" class="form-control hidden" id="productTitle" name="cart_id" value="{{auth()->user() !== null ? \App\Models\Cart::firstWhere('user_id', auth()->user()->id)->id : ''}}">
                                        <button
                                            class="bg-target hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                                            В корзину
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

    </section>
{{--    <section style="background-color: #B39BC8">--}}
{{--        <div class="container  py-5 mx-auto px-8 columns-12 flex flex-row">--}}
{{--            <div class="basis-full py-5">--}}
{{--                <h1 class="text-5xl font-pacifico text-center">--}}
{{--                    Соберите свой букет--}}
{{--                </h1>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container mx-auto px-8 columns-12 gap-1 flex flex-row justify-between">--}}
{{--            <div class="basis-7/12 py-5 max-h-96">--}}
{{--                <h1 class="text-2xl font-montserrat font-bold">--}}
{{--                    Уникальный 3D конструктор букетов--}}
{{--                </h1>--}}
{{--                <h2 class="mb:text-base lg:text-lg xl:text-xl font-montserrat font-medium leading-relaxed py-5">--}}
{{--                    Позволит вам собрать прекрасный подарок для<br>--}}
{{--                    любого повода из всех доступных нам мыльных <br>--}}
{{--                    цветов. Вы сможете выбрать упаковку и самостоятельно<br>--}}
{{--                    разместить в ней выбраные Вами цветы. Как только Вы<br>--}}
{{--                    соберёте букет и подтвердите заказ, наш флорист<br>--}}
{{--                    свяжется с вами и уточнит детали вашего заказа.--}}
{{--                </h2>--}}
{{--            </div>--}}
{{--            <div class="basis-5/12 md:p-4 lg:p-none max-h-72">--}}
{{--                <img class="max-h-full mx-auto" src="{{ Vite::asset('resources/images/image500.png') }}"--}}
{{--                     alt="Конструктор букетов мыльных роз">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container mx-auto columns-12 flex flex-row">--}}
{{--            <div class="basis-6/12 py-5 mx-auto">--}}
{{--                <div class="mx-auto flex flex-row justify-center">--}}
{{--                    <button type="button"--}}
{{--                            class="mt-5 text-lightText  shadow-xl text-shadow-xl font-montserratAlter min-w-[50%] bg-target rounded-full text-xl px-4 py-2.5 text-center mr-2 mb-2">--}}
{{--                        Воспользоваться конструктором--}}
{{--                    </button>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--    </section>--}}
    <section class="my-7">
        <div class="columns-12 container mx-auto flex flex-row">
            <div class="basis-full py-5">
                <h1 class="text-5xl font-pacifico text-center">
                    Плюсы мыльных цветов
                </h1>
            </div>
        </div>
        <div class="px-8 py-4 columns-12 gap-8 container mx-auto flex flex-row">
            <div class="card basis-4/12 rounded-3xl shadow-2xl" style="background-color: #A1C3D1">
                <img class="rounded-3xl min-w-full" src="{{ Vite::asset('resources/images/plusi1.svg') }}" alt=""/>
                <h5 class="my-3 text-2xl font-bold font-montserratAlter text-center">Великолепный вид</h5>
                <p class="mb-3 font-normal font-montserratAlter text-center">
                    Шикарно выглядящие мыльные<br>
                    розы имеют максимальную<br>
                    схожесть с живыми розами.
                </p>
            </div>
            <div class="card basis-4/12 rounded-3xl shadow-2xl" style="background-color: #A1C3D1">
                <img class="rounded-3xl min-w-full" src="{{ Vite::asset('resources/images/plusi1.svg') }}" alt=""/>
                <h5 class="my-3 text-2xl font-bold font-montserratAlter text-center">Прекрасно пахнут</h5>
                <p class="mb-3 font-normal font-montserratAlter text-center">
                    В них содержатся только натуральные компоненты,
                    масла и отдушки, при этом сами розы прекрасно
                    предают эти ароматы.
                </p>
            </div>
            <div class="card basis-4/12 rounded-3xl shadow-2xl" style="background-color: #A1C3D1">
                <img class="rounded-3xl min-w-full" src="{{ Vite::asset('resources/images/plusi1.svg') }}" alt=""/>
                <h5 class="my-3 text-2xl font-bold font-montserratAlter text-center">Не вянут</h5>
                <p class="mb-3 font-normal font-montserratAlter text-center">
                    Букет из мыльных роз, стоящий в правильных условиях стоит 2-3 года, сохраняя прекрасный внешний вид
                    и аромат.
                </p>
            </div>

        </div>
        <div class="px-8 py-4 columns-12 gap-8 container mx-auto flex flex-row">
            <div class="card basis-4/12 rounded-3xl shadow-2xl" style="background-color: #A1C3D1">
                <img class="rounded-3xl min-w-full" src="{{ Vite::asset('resources/images/plusi1.svg') }}" alt=""/>
                <h5 class="my-3 text-2xl font-bold font-montserratAlter text-center">Не требуют ухода</h5>
                <p class="mb-3 font-normal font-montserratAlter text-center">
                    Не требуют влажной уборки. Достаточно просто поставить в защищённое от солнца место с температурой
                    5-25°C.
                </p>
            </div>
            <div class="card basis-4/12 rounded-3xl shadow-2xl" style="background-color: #A1C3D1">
                <img class="rounded-3xl min-w-full" src="{{ Vite::asset('resources/images/plusi1.svg') }}" alt=""/>
                <h5 class="my-3 text-2xl font-bold font-montserratAlter text-center">Гипоаллергенность</h5>
                <p class="mb-3 font-normal font-montserratAlter text-center">
                    Мыльные розы изготовлены из гипоаллергенного мыльного состава с использованием эфирных масел
                </p>
            </div>
            <div class="card basis-4/12 rounded-3xl shadow-2xl" style="background-color: #A1C3D1">
                <img class="rounded-3xl min-w-full" src="{{ Vite::asset('resources/images/plusi1.svg') }}" alt=""/>
                <h5 class="my-3 text-2xl font-bold font-montserratAlter text-center">Мыльный состав</h5>
                <p class="mb-3 font-normal font-montserratAlter text-center">
                    Всеми мыльными розами можно воспользоваться точно также, как и мылом.
                </p>
            </div>

        </div>
    </section>
    <section class="my-7">
        <div class="container mx-auto px-8 columns-12 flex flex-row">
            <div class="basis-full py-5">
                <h1 class="text-5xl font-pacifico text-center">
                    Доставка
                </h1>
            </div>
        </div>
        <div class="container mx-auto py-4 columns-3 align-middle items-top flex flex-row">
            <div class="basis-1/3 items-center  text-center md:px-8 lg:px-20 xl:px-28 my-3 align-top">
                <div class="bg-deliveryCards rounded-2xl p-4">
                    <img class="mx-auto" src="{{ Vite::asset('resources/images/fast-delivery.svg') }}"
                         alt="Быстрая доставка">
                    <h5 class="text-center font-montserrat font-bold my-3 ">
                        Быстрая доставка
                    </h5>
                    <h6 class="text-center font-montserrat font-medium">
                        Курьер доставит букет в течении 2-3 часов после момента сборки.Стоимость доставки в пределах
                        Ростова-на-Дону 250 рублей
                    </h6>
                </div>

            </div>
            <div class="basis-1/3 items-center  text-center md:px-8 lg:px-20 xl:px-28 my-3 align-top">
                <div class="bg-deliveryCards rounded-2xl p-4">
                    <img class="mx-auto" src="{{ Vite::asset('resources/images/support.svg') }}"
                         alt="Быстрая доставка">
                    <h5 class="text-center font-montserrat font-bold my-3 ">
                        Поддержка на всех этапах
                    </h5>
                    <h6 class="text-center font-montserrat font-medium">
                        Вы всегда сможете связаться с нами и уточнить детали вашего заказа, а также внести в него изменения (до момента отправки).
                    </h6>
                </div>

            </div>
            <div class="basis-1/3 items-center  text-center md:px-8 lg:px-20 xl:px-28 my-3 align-top">
                <div class="bg-deliveryCards rounded-2xl p-4">
                    <img class="mx-auto" src="{{ Vite::asset('resources/images/earth.svg') }}"
                         alt="Быстрая доставка">
                    <h5 class="text-center font-montserrat font-bold my-3 ">
                        Доставляем в любую точку Ростовской области
                    </h5>
                    <h6 class="text-center font-montserrat font-medium">
                        Доставка осуществляется в такие города как: Аксай, Шахты, Новошахтинск.
                    </h6>
                </div>

            </div>

        </div>
    </section>
@endsection
