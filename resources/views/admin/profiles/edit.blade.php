@extends('layouts.admin')

@section('content')
    <div class="row">
        <form class="col-6" action="{{ route('admin.profiles.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="productTitle" class="form-label">{{$users->firstWhere('id',$profile->user_id)->name}}</label>


            </div>
            <div class="mb-3">
                <label for="productTitle" class="form-label">Номер телефона</label>
                <input type="text" class="form-control" id="productTitle" name="phone_number" value="{{$profile->phone_number}}">

            </div>
            <div class="mb-3">
                <label for="productTitle" class="form-label">Адрес</label>
                <input type="text" class="form-control" id="productPrice" name="address" value="{{$profile->address}}">
            </div>

            <div class="mb-3">
                <label for="productTitle" class="form-label">Всего куплено</label>
                <input type="text" class="form-control" id="productPrice" name="total_bought" value="{{$profile->total_bought}}">
            </div>
            <div class="form-group">
                <label>Роль</label>
                <select class="form-control" name="role_id">
                    @foreach($roles as $role)
                        <option value="{{$role->id}}"
                        {{$role->id == $roles->firstWhere('id', $users->firstWhere('id', $profile->user_id)->role_id)->id ? ' selected' : ''}}>{{$role->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>

    </div>
@endsection
