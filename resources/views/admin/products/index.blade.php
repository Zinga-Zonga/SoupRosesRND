@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                        <h3 class="card-title col-6">Букеты</h3>
                </div>

                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6">
                                <button type="button" class="btn btn-success  my-1">
                                    <a  class="text-decoration-none text-reset" href="{{ route('admin.products.create') }}">
                                        Добавить
                                    </a>
                                </button>
                            </div>
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
                                            aria-label="ID">ID
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Name">Название
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Phone">Описание
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Phone">Изображение
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Total bought">Цена
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Total bought">Действия
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>
                                                <a href="{{ route('admin.products.show', $product->id) }}">
                                                    {{ $product->title }}
                                                </a>
                                            </td>
                                            <td>{{ $product->description }}</td>
                                            <td><img class="img-fluid" src="{{ asset('storage/'.$product->image) }}" alt="img"></td>
                                            <td>{{ $product->price}}<span> руб</span></td>
                                            <td class="mx-auto">
                                                <button type="button" class="btn btn-warning w-100 mt-1">
                                                    <a  class="text-decoration-none text-reset" href="{{ route('admin.products.edit', $product->id) }}">
                                                        Изменить
                                                    </a>
                                                </button>
                                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
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
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
