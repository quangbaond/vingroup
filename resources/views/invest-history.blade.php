@extends('layouts.app')
<x-header title="Lịch sử đầu tư" />
@if(session('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif
<div id="main">
    <table id="" class="table table-bordered">
        <thead>
            <tr>
                {{-- <th>Tên danh mục đấu thầu</th> --}}
                <th>Số tiền</th>
                <th>Số dư</th>
                <th>Thời gian</th>
            </tr>
        </thead>
        <tbody>
            @foreach($invests as $invest)
            <tr>
                {{-- <td>
                    <a style="color: #8da5c9 !important;" href="{{route('product-detail', $invest->product->slug)}}">
                        {{ $invest->product->name }}
                    </a>
                </td> --}}
                @if($invest->status == 1)
                <td>
                    <p style="color: rgb(255, 166, 0)">{{ number_format($invest->amount) }} VND</p>
                    <p>{{ $invest->type == 1 ? 'Tiền lãi đầu tư' : 'Tiền lời góp vốn'}}</p>
                </td>
                @elseif($invest->status == 2)
                    <td style="color: green">
                        <p style="color: rgb(255, 166, 0)"> + {{ number_format($invest->amount) }} VND</p>
                        <p>{{ $invest->type == 1 ? 'Tiền lãi đầu tư' : 'Tiền lời góp vốn'}}</p>
                    </td>
                @elseif($invest->status == 3)
                    <td style="color: red">
                        <p style="color: rgb(255, 166, 0)"> - {{ number_format($invest->amount) }} VND</p>
                        <p>{{ $invest->type == 1 ? 'Tiền lãi đầu tư' : 'Tiền lời góp vốn'}}</p>
                    </td>
                @else
                @endif
                {{-- <td>
                    @if($invest->status == 0)
                    <span class="badge badge-warning" style="color: #000">Đang chờ</span>
                    @elseif($invest->status == 1)
                    <span class="badge badge-success" style="color: #000">Đã xác nhận</span>
                    @elseif($invest->status == 2)
                    <span class="badge badge-danger" style="color: #000">Thành công</span>
                    @else
                    <span class="badge badge-danger" style="color: #000">Thất bại</span>
                    @endif
                </td> --}}
                <td>
                    {{ number_format(auth()->user()->balance) }} VND
                </td>
                <td>{{ $invest->created_at }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@include('includes.footer')