@extends('layouts.client')

@section('title')
    <title>Đặt hàng thành công</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('clients/home/home.css') }}">
@endsection

@section('js')
    <script src="{{ asset('clients/home/home.js') }}"></script>
@endsection

@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="text-center" style="height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                <h4>Cảm ơn bạn đã đặt hàng, vui lòng kiểm tra Email.</h4>
                <p id="redirect-message">Bạn sẽ được đưa về trang chủ trong 3 giây</p>
            </div>
        </div>
    </section>
    <!--/#cart_items-->

    <style>
        #redirect-message {
            margin-top: 20px; /* Khoảng cách từ đoạn văn bản đến h4 */
        }
    </style>

    <script type="text/javascript">
        function Redirect() {
            window.location = "http://127.0.0.1:8000";
        }

        setTimeout('Redirect()', 3000);
    </script>
@endsection
