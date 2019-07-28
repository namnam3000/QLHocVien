@extends('admin.layouts.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="">
                <h2>Categories</h2>
            </div>
        </div>
        <div class="row">
            <div class="">
                <a href="#">Add</a>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr align="center">
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($category as $value)
                <tr align="center">
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>
                        <button type="button" data-target="#edit-product" data-toggle="modal"
                                class="btn btn-primary edit-product" value="{{$value->id}}">Sửa
                        </button>
                        <button class="btn btn-danger delete-product" value="{{$value->id}}">Xóa</button>

                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

    </div>
@endsection
