@extends('layouts.admin')

@section('content')
    <div class="row">
        <form class="col-6" action="{{ route('admin.orders.update', $orderProduct->id) }}" method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="productTitle"
                       class="form-label">{{$orders->firstWhere('id', $orderProduct->order_id)->created_at}}</label>
            </div>
            <div class="mb-3">
                <label for="productTitle" class="form-label">
                    @foreach($orders->where('id', $orderProduct->order_id) as $order)
                        {{ $order->id }}
                    @endforeach</label>
            </div>
            <div class="mb-3">
                <label for="productTitle"
                       class="form-label">{{ $users->firstWhere('id', $profiles->firstWhere('id', $orders->firstWhere('id',$orderProduct->order_id)->profile_id)->user_id)->name }}</label>
            </div>
            <div class="mb-3">
                <label for="productTitle"
                       class="form-label">{{ $profiles->firstWhere('id', $orders->firstWhere('id',$orderProduct->order_id)->profile_id)->phone_number }}</label>
            </div>
            <div class="mb-3">
                <label for="productTitle"
                       class="form-label">{{ $users->firstWhere('id', $profiles->firstWhere('id', $orders->firstWhere('id',$orderProduct->order_id)->profile_id)->user_id)->id }}</label>
            </div>
            <div class="mb-3">
                <label for="productTitle" class="form-label">
                    @foreach($ordersProducts->where('order_id', $orderProduct->order_id) as $orderProduct)
                        {{$products->firstWhere('id',$orderProduct->product_id)->title}}<br>
                    @endforeach</label>
            </div>
            <div class="mb-3">
                @php($price = 0)
                @foreach($ordersProducts->where('order_id', $orderProduct->order_id) as $orderProduct)
                    @php($price += $products->firstWhere('id',$orderProduct->product_id)->price)
                @endforeach
                <label class="form-label">{{$price}}</label>

            </div>
            <div class="form-group">
                <label>Статус заказа</label>
                <select class="form-control" name="state_id">
                    @foreach($orderStates as $orderState)
                        <option value="{{$orderState->id}}"
                            {{$orderState->id == $orderStates->firstWhere('id', $orders->firstWhere('id', $orderProduct->order_id)->state_id)->id ? ' selected' : ''}}>
                            {{$orderState->name}}
                        </option>
                    @endforeach
                </select>
            </div>


            {{--            <div class="form-group">--}}
            {{--                <label>Роль</label>--}}
            {{--                <select class="form-control" name="role_id">--}}
            {{--                    @foreach($roles as $role)--}}
            {{--                        <option value="{{$role->id}}"--}}
            {{--                        {{$role->id == $roles->firstWhere('id', $users->firstWhere('id', $profile->user_id)->role_id)->id ? ' selected' : ''}}>{{$role->name}}</option>--}}
            {{--                    @endforeach--}}
            {{--                </select>--}}
            {{--            </div>--}}
            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>

    </div>
@endsection
