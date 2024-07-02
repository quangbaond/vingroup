@extends('layouts.app')
@section('content')
<x-header title="Chi tiết" />
<div id="main">
    <div class="p-3">
        <strong>Tiền thân của VinGroup là Tập đoàn Technocom, thành lập năm 1993 tại Ucraina. Đầu những năm 2000, Technocom trở về Việt
        t Nam, tập trung đầu tư vào lĩnh vực du lịch và bất động sản với hai hiệu quả chiến lược ban đầu là Vinpear và Vincom.
        Đến tháng 1/2012, công ty CP Vincom và Công ty CP Vincom sáp nhập, chính thức hoạt động dưới mô hình tập đoàn với tên
        gọi Tập đoàn Group – Công ty CP.
        3 nhóm hoạt động tâm trí của Tập đoàn bao gồm:

        - Công nghệ - Công nghiệp
        - Thương mại Dịch vụ
        - Thiện nguyện Xã hội

        Với mong muốn mang đến cho thị trường những sản phẩm - dịch vụ theo tiêu chuẩn quốc tế và những trải nghiệm hoàn toàn
        mới về phong cách sống hiện đại, ở bất cứ lĩnh vực nào, VinGroup cũng chứng tỏ vai trò tiên phong, dẫn dắt thay đổi tiêu
        điểm hướng xu hướng.
        <hr>
        <div class="row">
            <div class="col-4">
                Tên gọi đầy đủ bằng tiếng Việt
            </div>
            <div class="col-8">
                <strong>Tập đoàn Vingroup (Vingroup JSC)</strong>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Tên viết tắt
            </div>
            <div class="col-8">
                <strong>Vingroup</strong>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-4">
                Tên giao dịch quốc tế
            </div>
            <div class="col-8">
                <strong>Airports Corporation of Vietnam</strong>
            </div>
        </div> --}}
        {{-- <div class="row">
            <div class="col-4">
                Trụ sở chính
            </div>
            <div class="col-8">
                58 đường Trường Sơn - Phường 2 - Quận Tân Bình - Thành phố Hồ Chí Minh
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-4">
                Điện thoại
            </div>
            <div class="col-8">
                (84-28) 3848 5383
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Fax
            </div>
            <div class="col-8">
                (84-28) 3844 5127
            </div>
        </div> --}}

        <div class="row">
            <div class="col-4">
                Website
            </div>
            <div class="col-8">
                <a href="{{ env('APP_URL') }}">{{ env('APP_URL') }}</a>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                Biểu tượng
            </div>
            <div class="col-8">
                <img src="/static/logo/1.jpg"
                    alt="" width="200px">
            </div>
        </div>

    </div>
</div>
@include('includes.footer')
@endsection

