@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Заказы</h3>
                </div>

                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline"
                                       aria-describedby="example2_info">
                                    <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example2"
                                            rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Date">Дата
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="ID">ID Заказчика
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Name">Имя
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Phone">Номер телефона
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Order ID">ID Заказа
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Products">Товары
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Price">Итого
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="State">Статус
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="State">Доставка
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    @foreach($readyForUseOrderProducts->keys() as $readyForUseOrderProductKey)
                                        <tr>
                                            <td>
                                                {{$orders->firstWhere('id', $readyForUseOrderProductKey)->created_at}}
                                            </td>
                                            <td>

                                                {{ $users->firstWhere('id', $profiles->firstWhere('id', $orders->firstWhere('id',$readyForUseOrderProductKey)->profile_id)->user_id)->id }}
                                            </td>
                                            <td>
                                                {{ $users->firstWhere('id', $profiles->firstWhere('id', $orders->firstWhere('id',$readyForUseOrderProductKey)->profile_id)->user_id)->name }}
                                            </td>
                                            <td>
                                                {{ $profiles->firstWhere('id', $orders->firstWhere('id',$readyForUseOrderProductKey)->profile_id)->phone_number }}
                                            </td>
                                            <td>
                                                @foreach($orders->where('id', $readyForUseOrderProductKey) as $order)
                                                    {{ $order->id }}
                                                @endforeach

                                            </td>
                                            <td>
                                                @foreach($ordersProducts->where('order_id', $readyForUseOrderProductKey) as $orderProduct)
                                                    {{$products->firstWhere('id',$orderProduct->product_id)->title}}<br>
                                                @endforeach

                                            </td>
                                            <td>
                                                @php($price = 0)
                                                @foreach($ordersProducts->where('order_id', $readyForUseOrderProductKey) as $orderProduct)
                                                    @php($price += $products->firstWhere('id',$orderProduct->product_id)->price)
                                                @endforeach
                                                {{$price}}
                                            </td>
                                            <td>
                                                {{ $orderStates->firstWhere('id', $orders->firstWhere('id', $readyForUseOrderProductKey)->state_id)->name }}
                                            </td>
                                            <td>
                                                {{ $deliveryTypes->firstWhere('id', $orders->firstWhere('id', $orderProduct->order_id)->delivery_type_id)->name }}
                                            </td>


                                        </tr>
                                        {{--                                        @foreach($readyForUseOrderProduct as $orderProduct)--}}

                                        {{--                                            <tr>--}}
                                        {{--                                                <td>--}}
                                        {{--                                                    {{ $readyForUseOrderProduct }}--}}
                                        {{--                                                </td>--}}
                                        {{--                                                <td>--}}
                                        {{--                                                    {{ $users->--}}
                                        {{--                                                        firstWhere('id', ($profiles->--}}
                                        {{--                                                            firstWhere('id', ($orders->firstWhere('id', $orderProduct->order_id))->id)->id))--}}
                                        {{--                                                                ->id }}--}}
                                        {{--                                                </td>--}}
                                        {{--                                                <td>--}}
                                        {{--                                                    {{ $users->--}}
                                        {{--                                                        firstWhere('id', ($profiles->--}}
                                        {{--                                                            firstWhere('id', ($orders->firstWhere('id', $orderProduct->order_id))->id)->id))--}}
                                        {{--                                                                ->name }}--}}
                                        {{--                                                </td>--}}
                                        {{--                                                <td>--}}
                                        {{--                                                    {{ $profiles->firstWhere('id', ($orders->firstWhere('id', $orderProduct->order_id))->id)->phone_number }}--}}
                                        {{--                                                </td>--}}
                                        {{--                                                <td>--}}
                                        {{--                                                    {{ $orders->firstWhere('id', $orderProduct->order_id)->id }}--}}
                                        {{--                                                </td>--}}
                                        {{--                                                <td>--}}
                                        {{--                                                    {{ $products->firstWhere('id', $orderProduct->product_id)->title }}--}}
                                        {{--                                                </td>--}}
                                        {{--                                                <td>--}}
                                        {{--                                                    {{ $products->firstWhere('id', $orderProduct->product_id)->price }}--}}
                                        {{--                                                </td>--}}
                                        {{--                                                <td>--}}
                                        {{--                                                    {{ $orderStates->firstWhere('id', $orders->firstWhere('id', $orderProduct->order_id)->state_id)->name }}--}}
                                        {{--                                                </td>--}}
                                        {{--                                                <td>--}}
                                        {{--                                                    {{ $deliveryTypes->firstWhere('id', $orders->firstWhere('id', $orderProduct->order_id)->delivery_type_id)->name }}--}}
                                        {{--                                                </td>--}}


                                        {{--                                            </tr>--}}
                                        {{--                                        @endforeach--}}
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
