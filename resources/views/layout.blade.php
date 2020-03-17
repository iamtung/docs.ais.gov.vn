<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Cục An toàn thông tin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="banner row">
                <div class="col-md-12">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('/assets/images/top_banner.png') }}" alt="Cục An toàn thông tin" style="width: 100%;">
                    </a>
                </div>
            </div>
            <nav class="navbar navbar-expand-md navbar-dark bg-primary">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('/assets/images/home.png') }}" alt="Cục An toàn thông tin">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/van-ban') }}">Văn bản</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="content">
            @yield('content')
        </div>
        <div class="footer fixed-bottom container text-white" style="background-color: #0451a1; width: 100%;">
            <div class="row p-3">
                <div class="col-md-2 text-center">
                    <img src="{{ asset('/assets/images/footer_logo.png') }}" alt="Cục An toàn thông tin">
                </div>
                <div class="col-md-10" style="font-size: 14px;">
                    <h5>CỤC AN TOÀN THÔNG TIN - BỘ THÔNG TIN VÀ TRUYỀN THÔNG</h5>
                    <p class="pb-0 mb-0">
                        Chịu trách nhiệm chính: Ông Nguyễn Thành Phúc - Cục trưởng Cục An toàn thông tin.<br>
                        Trụ sở: Tầng 8 Tòa nhà Cục Tần số vô tuyến điện - 115 Trần Duy Hưng - Cầu giấy - Hà Nội.<br>
                        Điện thoại:   +84 24 3209 6789  &nbsp;&nbsp;Fax:    +84 24 3943 6684<br>
                        <br>
                        <span style="font-style: italic">Bản quyền thuộc Cục An toàn thông tin. (Ghi rõ nguồn "Cục An toàn thông tin" khi phát hành lại thông tin từ website này)</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
