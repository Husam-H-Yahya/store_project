@extends('layouts.admin')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="py-3 px-2">
        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Order id</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($categories as $category)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $category->name }}</td>
                        <td>

                            <button class="btn btn-info"><a href="{{ url('products/edit/' . $category->id) }}"></a><i
                                    class="fa fa-edit"></i></button>
                            <button class="btn btn-danger"><a href="{{ url('products/delete/' . $category->id) }}"></a><i
                                    class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach --}}

                <tr>
                    <th scope="row">1</th>
                    <td>1312241</td>
                    <td>Product 1</td>
                    <td>2</td>
                    <td>

                        <button class="btn btn-info"><a href="#"></a><i
                                class="fa fa-edit"></i></button>
                        <button class="btn btn-danger"><a href="#"></a><i
                                class="fa fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
