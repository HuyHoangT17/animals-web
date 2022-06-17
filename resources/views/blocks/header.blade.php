{{-- <header class="py-5  border shadow">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1> UBISOFT</h1>
            </div>
            <div class="col-8 d-flex justify-content-end align-items-center">
                <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href=" {{route('home')}} ">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href=" {{route('list')}} ">List</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Q&A</a>
                    </li>
                  </ul>
            </div>
        </div>
    </div>
</header> --}}

<!--header-->
<div id="top" >
  <div class="top-logo">
      <a href="{{route('home')}}">
          <img src="{{ asset ('assets/images/logo-removebg-preview (3).png')}}" alt="logo-image">
      </a>
  </div>
      <div class="top-menu">
          <a class="loginmenu" href="{{route('get-form')}}" title="会員登録・ログイン">
              <i class="far fa-user-circle" style="font-size: 40px;"></i><br>会員登録・ログイン
          </a>
          <a class="loginmenu" href="#" title="お気に入り">
              <i class="fas fa-heart" style="font-size: 40px;"></i><br>お気に入り
          </a>
          <a class="loginmenu" href="#" title="メッセージ">
              <i class="fas fa-comments" style="font-size: 40px;"></i><br>メッセージ
          </a>
          <a class="loginmenu" href="#" title="よくある質問">
              <i class="fas fa-question" style="font-size: 40px;"></i><br>よくある質問
          </a>
     
      </div>
</div> 
<!--navigation-->

<div id="nav">
  <div class="bar-button-left">
    <a class="bar-home" href="{{route('home')}}">HOME<br>--Pet House Top--</a>

    <a class="bar-room" id="bar-room-popup" href="#modal-01">PET ROOM<br>--犬・猫 検索--</a>

    <a class="bar-contact" href="#">お問い合わせ<br>--サイトに対して--</a>
  </div>
</div>