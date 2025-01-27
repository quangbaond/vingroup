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
                <td style="width: 150px">
                    <p style="color: rgb(255, 166, 0);margin-bottom :0">{{ number_format($invest->amount) }} VND</p>
                    <p style="font-size: 12px; color #ccc; margin-bottom :0">(Trừ tiền đầu tư)</p>
                </td>
                @elseif($invest->status == 2)
                    <td style="width: 150px">
                        <p style="color: green;margin-bottom :0"> + {{ number_format($invest->amount) }} VND</p>
                       <p style="font-size: 12px; color #ccc; margin-bottom :0">{{ $invest->type == 1 ? '(Hoàn tiền đầu tư)' : '(Tiền lời góp
                        vốn)'}}</p>
                    </td>
                @elseif($invest->status == 3)
                    <td style="width: 150px">
                        <p style="margin-bottom :0"> - {{ number_format($invest->amount) }} VND</p>
                        <p style="font-size: 12px; color #ccc; margin-bottom :0">{{ $invest->type == 1 ? '(Hoàn tiền đầu tư)' : '(Tiền lời góp
                            vốn)'}}</p>
                    </td>
                @else
                <td style="width: 150px">
                    <p style="color: rgb(255, 166, 0);margin-bottom :0">{{ number_format($invest->amount) }} VND</p>
                    <p style="font-size: 12px; color #ccc; margin-bottom :0">(trừ tiền đầu tư)</p>
                </td>
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
                    @if($invest->status == 0)
                    <span style="color: #000">{{ number_format($invest->balance) }} VND</span>
                    @elseif($invest->status == 1)
                    <span  style="color: #000">{{ number_format($invest->balance) }} VND</span>
                    @elseif($invest->status == 2)
                    <span  style="color: #000">{{ number_format($invest->balance + ($invest->amount * $invest->product->profit_everyday / 100)) }} VND</span>
                    @else
                    <span style="color: #000">{{
                       number_format($invest->balance +  $invest->product->min_invest) }} VND</span>
                    @endif
                </td>
                <td>{{ $invest->created_at }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@include('includes.footer')