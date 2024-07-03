<footer>
<div class="row" style="align-items: center">
    <div class="col-3">
        <a href="{{ route('home') }}">
            <img style="width: 30px" src="/static/icon/footer/1.png" alt="">
            <div>Trang chủ</div>
        </a>

    </div>
    <div class="col-3">
        <a href="{{ route('invest') }}">
            <img style="width: 30px" src="/static/icon/footer/2.png" alt="">
            <div>Đấu thầu</div>
        </a>

    </div>
    <div class="col-3">
        <a href="{{ env('SMARTSUPP_URL') }}">
            <img style="width: 30px" src="/static/icon/footer/3.png" alt="">
            <div>CSKH</div>
        </a>

    </div>
    <div class="col-3">
        <a href="{{ route('profile') }}">
            <img style="width: 30px" src="/static/icon/footer/4.png" alt="">
            <div>Của tôi</div>
        </a>
    </div>
</div>
</footer>