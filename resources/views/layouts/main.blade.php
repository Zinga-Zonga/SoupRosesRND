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
            <div class="text-center items-center">
                <button type="button" class="rounded-full text-sm bg-lightText font-montserrat font-medium text-center mx-2 py-1 px-1">Корзина</button>
                <button type="button" class="rounded-full text-sm bg-lightText font-montserrat font-medium text-center mx-2 py-1 px-1">Профиль</button>
                <button type="button" class="rounded-full text-sm bg-lightText font-montserrat font-medium text-center mx-2 py-1 px-1">Выход</button>
            </div>
        </div>

    </nav>

</header>

<main>
    <section>
        <div class="flex flex-row min-h-min min-w-screen bg-center bg-repeat-x" style="background-image: url({{ Vite::asset('resources/images/HeaderImage.svg') }})">
            <div class="bg-gradient-to-r from-gradStart to-gradFinish w-full">
                <h1 class="font-pacifico text-center py-4 text-5xl my-2 text-lightText">
                    Добро пожаловать на наш сайт!
                </h1>
                <h2 class="font-pacifico text-center py-4 text-4xl my-2 text-lightText">
                    Огурцы помидоры и т.п
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
                <button type="button" class="mt-5 text-lightText py-2 shadow-xl text-shadow-xl font-montserratAlter min-w-[50%] bg-target rounded-full text-xl px-4 py-2.5 text-center mr-2 mb-2">Заказать букет</button>
            </div>
            <div class="basics-5/12 max-h-96 items-center">
                <img alt="Букет мыльных роз" class="max-h-full mx-auto" src="{{ Vite::asset('resources/images/bouquet.svg') }}">
            </div>
        </div>
    </section>
    <section class="container mx-auto px-8 my-7">
        <h1 class="text-5xl font-pacifico text-center">
            Наши работы
        </h1>

    </section>
    <section style="background-color: #B39BC8">
        <div class="container  py-5 mx-auto px-8 columns-12 flex flex-row">
            <div class="basis-full py-5">
                <h1 class="text-5xl font-pacifico text-center">
                    Соберите свой букет
                </h1>
            </div>
        </div>
        <div class="container mx-auto px-8 columns-12 gap-1 flex flex-row justify-between">
            <div class="basis-7/12 py-5 max-h-96">
                <h1 class="text-2xl font-montserrat font-bold">
                    Уникальный 3D конструктор букетов
                </h1>
                <h2 class="mb:text-base lg:text-lg xl:text-xl font-montserrat font-medium leading-relaxed py-5">
                    Позволит вам собрать прекрасный подарок для<br>
                    любого повода из всех доступных нам мыльных <br>
                    цветов. Вы сможете выбрать упаковку и самостоятельно<br>
                    разместить в ней выбраные Вами цветы. Как только Вы<br>
                    соберёте букет и подтвердите заказ, наш флорист<br>
                    свяжется с вами и уточнит детали вашего заказа.
                </h2>
            </div>
            <div class="basis-5/12 md:p-4 lg:p-none max-h-72">
                <img class="max-h-full mx-auto" src="{{ Vite::asset('resources/images/image500.png') }}" alt="Конструктор букетов мыльных роз">
            </div>
        </div>
        <div class="container mx-auto columns-12 flex flex-row">
            <div class="basis-6/12 py-5 mx-auto">
                <div class="mx-auto flex flex-row justify-center">
                    <button type="button" class="mt-5 text-lightText  shadow-xl text-shadow-xl font-montserratAlter min-w-[50%] bg-target rounded-full text-xl px-4 py-2.5 text-center mr-2 mb-2">Воспользоваться конструктором</button>

                </div>
            </div>
        </div>



    </section>
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
                <img class="rounded-3xl min-w-full" src="{{ Vite::asset('resources/images/plusi1.svg') }}" alt="" />
                <h5 class="my-3 text-2xl font-bold font-montserratAlter text-center">Великолепный вид</h5>
                <p class="mb-3 font-normal font-montserratAlter text-center">
                    Шикарно выглядящие мыльные<br>
                    розы имеют максимальную<br>
                    схожесть с живыми розами.
                </p>
            </div>
            <div class="card basis-4/12 rounded-3xl shadow-2xl" style="background-color: #A1C3D1">
                <img class="rounded-3xl min-w-full" src="{{ Vite::asset('resources/images/plusi1.svg') }}" alt="" />
                <h5 class="my-3 text-2xl font-bold font-montserratAlter text-center">Прекрасно пахнут</h5>
                <p class="mb-3 font-normal font-montserratAlter text-center">
                    В них содержатся только натуральные компоненты,
                    масла и отдушки, при этом сами розы прекрасно
                    предают эти ароматы.
                </p>
            </div>
            <div class="card basis-4/12 rounded-3xl shadow-2xl" style="background-color: #A1C3D1">
                <img class="rounded-3xl min-w-full" src="{{ Vite::asset('resources/images/plusi1.svg') }}" alt="" />
                <h5 class="my-3 text-2xl font-bold font-montserratAlter text-center">Не вянут</h5>
                <p class="mb-3 font-normal font-montserratAlter text-center">
                    Букет из мыльных роз, стоящий в правильных условиях стоит 2-3 года, сохраняя прекрасный внешний вид и аромат.
                </p>
            </div>

        </div>
        <div class="px-8 py-4 columns-12 gap-8 container mx-auto flex flex-row">
            <div class="card basis-4/12 rounded-3xl shadow-2xl" style="background-color: #A1C3D1">
                <img class="rounded-3xl min-w-full" src="{{ Vite::asset('resources/images/plusi1.svg') }}" alt="" />
                <h5 class="my-3 text-2xl font-bold font-montserratAlter text-center">Не требуют ухода</h5>
                <p class="mb-3 font-normal font-montserratAlter text-center">
                    Не требуют влажной уборки. Достаточно просто поставить в защищённое от солнца место с температурой 5-25°C.
                </p>
            </div>
            <div class="card basis-4/12 rounded-3xl shadow-2xl" style="background-color: #A1C3D1">
                <img class="rounded-3xl min-w-full" src="{{ Vite::asset('resources/images/plusi1.svg') }}" alt="" />
                <h5 class="my-3 text-2xl font-bold font-montserratAlter text-center">Гипоаллергенность</h5>
                <p class="mb-3 font-normal font-montserratAlter text-center">
                    Мыльные розы изготовлены из гипоаллергенного мыльного состава с использованием эфирных масел
                </p>
            </div>
            <div class="card basis-4/12 rounded-3xl shadow-2xl" style="background-color: #A1C3D1">
                <img class="rounded-3xl min-w-full" src="{{ Vite::asset('resources/images/plusi1.svg') }}" alt="" />
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
                    <img class="mx-auto" src="{{ Vite::asset('resources/images/fast-delivery.svg') }}" alt="Быстрая доставка">
                    <h5 class="text-center font-montserrat font-bold my-3 ">
                        Быстрая доставка
                    </h5>
                    <h6 class="text-center font-montserrat font-medium">
                        Курьер доставит букет в течении 2-3 часов после момента сборки.Стоимость доставки в пределах Ростова-на-Дону 250 рублей
                    </h6>
                </div>

            </div>
            <div class="basis-1/3 items-center  text-center md:px-8 lg:px-20 xl:px-28 my-3 align-top">
                <div class="bg-deliveryCards rounded-2xl p-4">
                    <img class="mx-auto" src="{{ Vite::asset('resources/images/fast-delivery.svg') }}" alt="Быстрая доставка">
                    <h5 class="text-center font-montserrat font-bold my-3 ">
                        Быстрая доставка
                    </h5>
                    <h6 class="text-center font-montserrat font-medium">
                        Курьер доставит букет в течении 2-3 часов после момента сборки.Стоимость доставки в пределах Ростова-на-Дону 250 рублей
                    </h6>
                </div>

            </div>
            <div class="basis-1/3 items-center  text-center md:px-8 lg:px-20 xl:px-28 my-3 align-top">
                <div class="bg-deliveryCards rounded-2xl p-4">
                    <img class="mx-auto" src="{{ Vite::asset('resources/images/fast-delivery.svg') }}" alt="Быстрая доставка">
                    <h5 class="text-center font-montserrat font-bold my-3 ">
                        Быстрая доставка
                    </h5>
                    <h6 class="text-center font-montserrat font-medium">
                        Курьер доставит букет в течении 2-3 часов после момента сборки.Стоимость доставки в пределах Ростова-на-Дону 250 рублей
                    </h6>
                </div>

            </div>

        </div>
    </section>
</main>


<footer class="bg-main shadow  mb-none py-4">
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
