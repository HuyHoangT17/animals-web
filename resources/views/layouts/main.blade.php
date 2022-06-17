<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon1.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('css')

</head>

<body>

    @include('blocks.header')

    @yield('content')

    <!--scroll to top button-->
    <div class="scrolltoTopbtn">
        <i class="fas fa-angle-up" style="font-size:60px;" title="トップページへ"></i><br>
    </div>
    
     <!--POPUP-->
     <div class="box">
        {{-- <a href="#modal-01" class="modal-btn">検索するペットの変更</a> --}}
        <div class="modal-wrapper" id="modal-01">
            <a href="#!" class="modal-overlay"></a>
            <div class="modal-window">
                <div class="pop-up">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <h1>-Search-</h1>
                    <p>検索したい種類を選択してください</p>

                    <div class="modal-seach">
                        <div class="accordion">
                            <div class="det1">
                                <div class="acd-menu1">犬種で探す
                                </div>

                                <div class="acd-content">
                                    <li class="acd-contents1">
                                        <a href="pet-seach.html">
                                            <img src=" {{ asset('assets/images/%E9%9B%91%E7%A8%AE%E7%8A%AC.jpg') }}">
                                            <p class="pet-name">雑種</p>
                                        </a>
                                    </li>
                                    <li class="acd-contents1">
                                        <a href="pet-seach.html">
                                            <img src=" {{ asset('assets/images/%E6%9F%B4%E7%8A%AC.jpg') }}">
                                            <p class="pet-name">柴犬</p>
                                        </a>
                                    <li class="acd-contents1">
                                        <a href="pet-seach.html">
                                            <img
                                                src=" {{ asset('assets/images/%E3%83%9D%E3%83%A1%E3%83%A9%E3%83%8B%E3%82%A2%E3%83%B3.jpg') }}">
                                            <p class="pet-name">ポメラニアン</p>
                                        </a>
                                    </li>
                                    <li class="acd-contents1">
                                        <a href="pet-seach.html">
                                            <img
                                                src=" {{ asset('assets/images/%E3%83%88%E3%82%A4%E3%83%97%E3%83%BC%E3%83%89%E3%83%AB.jpg') }}">
                                            <p class="pet-name">トイプードル</p>
                                        </a>
                                    </li>
                                    <li class="acd-contents1">
                                        <a href="pet-seach.html">
                                            <img
                                                src=" {{ asset('assets/images/%E3%83%80%E3%83%83%E3%82%AF%E3%82%B9%E3%83%95%E3%83%B3%E3%83%88.jpg') }}">
                                            <p class="pet-name">ダックスフント</p>
                                        </a>
                                    </li>
                                    <li class="acd-contents1">
                                        <a href="pet-seach.html">
                                            <img
                                                src=" {{ asset('assets/images/%E3%82%B3%E3%83%BC%E3%82%AE%E3%83%BC.jpg') }}">
                                            <p class="pet-name">コーギー</p>
                                        </a>
                                    </li>
                                    <li class="acd-contents1">
                                        <a href="pet-seach.html">
                                            <img src=" {{ asset('assets/images/%E3%83%81%E3%83%AF%E3%83%AF.jpg') }}">
                                            <p class="pet-name">チワワ</p>
                                        </a>
                                    </li>
                                    <li class="acd-contents1">
                                        <a href="pet-seach.html">
                                            <img
                                                src=" {{ asset('assets/images/%E3%81%9D%E3%81%AE%E4%BB%96%E7%8A%AC.jpg') }}">
                                            <p class="pet-name">その他</p>
                                        </a>
                                    </li>
                                </div>
                            </div>


                            <div class="det2">
                                <div class="acd-menu2">猫種で探す
                                </div>

                                <div class="acd-content">
                                    <li class="acd-contents2">
                                        <a href="pet-seach.html">
                                            <img src=" {{ asset('assets/images/%E9%9B%91%E7%A8%AE%E7%8C%AB.jpg') }}">
                                            <p class="pet-name">雑種</p>
                                        </a>
                                    </li>
                                    <li class="acd-contents2">
                                        <a href="pet-seach.html">
                                            <img
                                                src=" {{ asset('assets/images/%E3%82%A2%E3%83%A1%E3%83%AA%E3%82%AB%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%BC%E3%83%88.jpg') }}">
                                            <p class="pet-name">アメリカン<br>ショート</p>
                                        </a>
                                    <li class="acd-contents2">
                                        <a href="pet-seach.html">
                                            <img
                                                src=" {{ asset('assets/images/%E3%83%9E%E3%83%B3%E3%83%81%E3%82%AB%E3%83%B3.jpg') }}">
                                            <p class="pet-name">マンチカン</p>
                                        </a>
                                    </li>
                                    <li class="acd-contents2">
                                        <a href="pet-seach.html">
                                            <img
                                                src=" {{ asset('assets/images/%E3%82%B9%E3%82%B3%E3%83%86%E3%82%A3%E3%83%83%E3%82%B7%E3%83%A5%E3%83%95%E3%82%A9%E3%83%BC%E3%83%AB%E3%83%89.jpg') }}">
                                            <p class="pet-name">スコティッシュ<br>フォールド</p>
                                        </a>
                                    </li>
                                    <li class="acd-contents2">
                                        <a href="pet-seach.html">
                                            <img
                                                src=" {{ asset('assets/images/%E3%82%A8%E3%82%AD%E3%82%BE%E3%83%81%E3%83%83%E3%82%AF%E3%82%B7%E3%83%A7%E3%83%BC%E3%83%88%E3%83%98%E3%82%A2.jpg') }}">
                                            <p class="pet-name">エキゾチック<br>ショートヘア</p>
                                        </a>
                                    </li>
                                    <li class="acd-contents2">
                                        <a href="pet-seach.html">
                                            <img
                                                src=" {{ asset('assets/images/%E3%83%9F%E3%83%8C%E3%82%A8%E3%83%83%E3%83%88.jpg') }}">
                                            <p class="pet-name">ミヌエット</p>
                                        </a>
                                    </li>
                                    <li class="acd-contents2">
                                        <a href="pet-seach.html">
                                            <img
                                                src=" {{ asset('assets/images/%E3%83%96%E3%83%AA%E3%83%86%E3%82%A3%E3%83%83%E3%82%B7%E3%83%A5%E3%82%B7%E3%83%A7%E3%83%BC%E3%83%88%E3%83%98%E3%82%A2.jpg') }}">
                                            <p class="pet-name">ブリティッシュ<br>ショートヘア</p>
                                        </a>
                                    </li>
                                    <li class="acd-contents2">
                                        <a href="pet-seach.html">
                                            <img
                                                src=" {{ asset('assets/images/%E3%81%9D%E3%81%AE%E4%BB%96%E7%8C%AB.jpg') }}">
                                            <p class="pet-name">その他</p>
                                        </a>
                                    </li>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    

    @include('blocks.footer')

    <script type="text/javascript" src="https://kit.fontawesome.com/307140e2a3.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
    @yield('js')
</body>

</html>
