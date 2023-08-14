@extends('layouts.admin')

@section('title')
    <title>Trang quản lý khách hàng</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admins/slider/index/list.css') }}">
@endsection

@section('js')
    <script src="{{ asset('vendors/sweetAlert2/sweetalert2@11.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admins/main.js') }}"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('admin.components.content-header', ['name' => 'Customer', 'key' => 'List'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Đoạn mã tìm kiếm -->
                        <div class="col-md-12">
                            <form action="{{ route('customers.search') }}" method="GET">
                                <div class="input-group mb-3">
                                    <input type="text" name="searchTerm" class="form-control" placeholder="Tìm kiếm theo tên, email hoặc số điện thoại">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit">Tìm kiếm</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Kết thúc đoạn mã tìm kiếm -->
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Số điện thoại</th>
                                    <th scope="col">Địa chỉ</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <th scope="row">{{ $customer->id }}</th>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        <td>{{ $customer->address }}</td>
                                        <td>
                                            @can('customer-delete')
                                                <a href="" data-url="{{ route('customers.delete', ['id' => $customer->id]) }}"
                                                    class="btn btn-danger action_delete">Delete</a>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $customers->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    @endsection
