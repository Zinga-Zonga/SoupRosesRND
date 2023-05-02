@extends('layouts.main')

@section('content')
    <div class="container  py-5 mx-auto px-8 columns-12 flex flex-row">
        <div class="basis-full py-5">
            <h1 class="text-5xl font-pacifico text-center">
                Ваша корзина
            </h1>
        </div>
    </div>
    <div class="flex flex-col mb-5">
        <div class="overflow-x-none sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                        <tr>
                            <th scope="col" class="px-6 py-4">#</th>
                            <th scope="col" class="px-6 py-4">Название товара</th>
                            <th scope="col" class="px-6 py-4">Описание</th>
                            <th scope="col" class="px-6 py-4">Цена</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        @php($count = 1)
                        @php($total = 0)
                        @foreach($products as $product)

                            <tr class="border-b dark:border-neutral-500">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{$count++}}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{$product->title}}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{$product->description}}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{$product->price}}</td>
                                @php($total += $product->price)
                            </tr>
                        @endforeach
                        <tr class="bg-gray-300">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">Итого:</td>
                            <td class="whitespace-nowrap px-6 py-4"></td>
                            <td class="whitespace-nowrap px-6 py-4"></td>
                            <td class="whitespace-nowrap px-6 py-4">{{$total}}</td>
                        </tr>

                        </tbody>
                    </table>
                    <div class="flex justify-center items-center pb-3 px-4 my-2">
                        <div>

                            <form class="col-6" action="{{route('cart.makeOrder')}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <button
                                    class="bg-target hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                                    Оформить заказ
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
