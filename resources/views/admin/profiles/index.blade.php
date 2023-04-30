@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Пользователи</h3>
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
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="ID">ID
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Name">Имя
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Phone">Номер телефона
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Phone">Адрес
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Total bought">Всего куплено
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Role">Роль
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Role">Действия
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                             @foreach($profiles as $profile)
                                 <tr>
                                     <td>{{ $profile->id }}</td>
                                     <td>{{ ($users->firstWhere('id', $profile->user_id))->name }}</td>
                                     <td>{{ $profile->phone_number }}</td>
                                     <td>{{ $profile->address }}</td>
                                     <td>{{ $profile->total_bought }}</td>
                                     <td>{{ $roles->firstWhere('id', $users->firstWhere('id', $profile->user_id)->role_id)->name}}</td>
                                     <td class="mx-auto">
                                         <button type="button" class="btn btn-warning w-100 mt-1">
                                             <a  class="text-decoration-none text-reset" href="{{ route('admin.profiles.edit', $profile->id) }}">
                                                 Изменить
                                             </a>
                                         </button>
                                         <form action="{{ route('admin.profiles.destroy', $profile->id) }}" method="POST">
                                             {{method_field('DELETE')}}
                                             @csrf
                                             <button type="submit" class="btn btn-danger w-100 my-1">Удалить</button>
                                         </form>

                                     </td>
                                 </tr>
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="">
                    {{ $profiles->links() }}
                </div>
            </div>
        </div>

    </div>

@endsection
