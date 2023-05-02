@extends('layouts.main')

@section('content')
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
@endsection
