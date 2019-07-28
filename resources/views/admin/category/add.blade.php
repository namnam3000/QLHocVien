@extends('admin.layouts.index')
@section('content')
    <body>

    <div class="container">
        <h2>Vertical (basic) form</h2>
        <form action="admin/category/add" method="post">
            @csrf
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}} <br>
                    @endforeach
                </div>
            @endif

            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>

            <button type="submit" class="btn btn-default">Them</button>
        </form>
    </div>

    </body>
@endsection
