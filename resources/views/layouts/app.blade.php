<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-3.3.7-dist\css\bootstrap.min.css') }}">
    <script type="text/javascript" src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script> -->
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="{{ asset('img/logo.jpg') }}">
            </div>
            <div class="menu-top">
                <ul>
                <?php
                    $level = Auth::user()->level;
                ?>
                    @if($level=='security')
                    <li><a>Thu Thập Thông Tin Khách Hàng</a></li>
                    @endif
                    @if($level=='manager')
                    <li><a href="/manager/taichinh">Tài Chính</a></li>
                    <li><a href="/manager/kho">Quản lý Kho</a></li>
                    <li><a href="/manager/nhan-su">Nhân sự</a></li>
                    <li><a href="/manager/monan">Món ăn</a></li>
                    <li><a href="/manager/order">Order</a></li>
                    @endif
                    @if($level=='phucvu'))
                    <li><a>Phục Vụ</a></li>
                    @endif
                    <a href="/home"><img height="65px" src="{{ asset('img/refresh.png') }}"></a>
                </ul>
            </div>
            <span class="logout"><a href="/logout">Đăng Xuất</a></span>
            <div class="clr"></div>
        </div>
        <div class="content">
        @yield('content')
        </div>
        <div class="clr"></div>
    </div>
</body>
</html>
