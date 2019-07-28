@extends('admin.layouts.index')
@section('content')
    <body>

    <div class="container">
        <h2>Vertical (basic) form</h2>
        <form action="admin/user/add" method="post">
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
                <label>Tên</label>
                <input type="text" class="form-control" id="name" name="name"
                       placeholder="Nhập tên người dùng"/>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" id="email" name="email"
                       placeholder="Nhập địa chỉ email"/>
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" class="form-control" id="pwd" name="password"
                       placeholder="Nhập mật khẩu"/>
            </div>

            <div class="form-group">
                <label>Quyền</label>
                <label class="radio-inline">
                    <input name="level" value="0" checked type="radio">User
                </label>
                <label class="radio-inline">
                    <input name="level" value="1" type="radio">Admin
                </label>

            </div>
            <button type="submit" class="btn btn-default">Thêm</button>
            <button type="reset" class="btn btn-default">Làm mới</button>
        </form>
    </div>

    </body>
@endsection
