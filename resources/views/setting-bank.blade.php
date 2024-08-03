@extends('layouts.app')
@section('content')
<x-header title="Thông tin tài khoản" />
<div id="main" class="p-3">
    @if(auth()->user()->banks->count() == 0)
        <p>Không có dữ liệu</p>
    @else
    @foreach(auth()->user()->banks as $bank) @endforeach
    <div class="card">
        <div class="card-body">
            <div class="row" style="align-items: center">
                <p id="">Tên chủ sở hữu: {{ $bank->bank_account_name }}</p>
                <p >Số tài khoản: <span id="stk">{{ $bank->bank_account }}</span> <i id="open_stk" class="fa fa-eye-slash" aria-hidden="true"></i></p>
                <p>Ngân hàng: {{ $bank->bank_name }}</p>
                <p>Chi nhánh: {{ $bank->bank_branch }}</p>
                <p>CCCD:
                    <span id="cccd">
                    {{ $bank->id_card }}
                </span>
                    <i id="open_cccd" class="fa fa-eye-slash" aria-hidden="true"></i>
                </p>
            </div>
        </div>
        {{-- //action --}}
        {{-- <div class="card-footer">
            <a class="btn btn-danger w-100" style="color: #fff !important">Xóa</a>
        </div> --}}
    </div>

    @endif
        <div class="">
            <a href="{{ route('add-bank') }}" style="color: #fff !important" class="btn btn-primary btn-cash">Thêm tài khoản</a>
        </div>
</div>
@include('includes.footer')
<script>
    let stk = document.getElementById('stk');
    // let

    stk.innerHTML = '**** **** **** ' + "{{ $bank->bank_account }}".slice(-4);
    let cccd = document.getElementById('cccd');
    cccd.innerHTML = '**** ****' + "{{ $bank->id_card }}".slice(-4);

    document.getElementById('open_stk').addEventListener('click', function() {
        var stk = document.getElementById('stk');
        if(stk.innerHTML == "{{ $bank->bank_account }}") {
            stk.innerHTML = '**** ****' + "{{ $bank->bank_account }}".slice(-4);
            this.classList.remove('fa-eye');
            this.classList.add('fa-eye-slash');
        } else {
            stk.innerHTML = {{ $bank->bank_account }};
            this.classList.remove('fa-eye-slash');
            this.classList.add('fa-eye');
        }
    });

    document.getElementById('open_cccd').addEventListener('click', function() {
        var cccd = document.getElementById('cccd');
        if(cccd.innerHTML == "{{ $bank->id_card }}") {
            cccd.innerHTML = '**** ****' + "{{ $bank->id_card }}".slice(-4);
            this.classList.remove('fa-eye');
            this.classList.add('fa-eye-slash');
        } else {
            cccd.innerHTML = "{{ $bank->id_card }}";
            this.classList.remove('fa-eye-slash');
            this.classList.add('fa-eye');
        }
    });
</script>
@endsection
