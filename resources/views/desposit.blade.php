@extends('layouts.app')
<x-header title="Nạp tiền"/>

<div id="main">
    <div class="row px-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nạp tiền</h5>
                    <p class="card-text">Nạp tiền vào tài khoản của bạn thông qua CHSK.</p>
                    {{-- <p>Vui lòng liên hệ</p> --}}
                    <a href="{{ env('SMARTSUPP_URL') }}" style="color: #fff !important" type="button" class="btn btn-primary btn-cash">Liên hệ ngay CSKH</a>
                </div>
            </div>
        </div>
    </div>


</div>