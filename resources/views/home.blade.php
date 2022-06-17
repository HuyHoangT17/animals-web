@extends('layouts.main')

@section('title', 'PET HOUSE')



@section('content')


    <!--Base contents-->
    <div class="contents-container">
        <!--images slideshow-->
        <div class="slide-container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/images/intro-img.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/cat1.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/3.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/4.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/5.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        <!--main content-->
        <div class="page-intro">
            <h1 class="h1-page-intro">ご一緒に帰りませんか？</h1>
            <div class="intro-content">
                <h1>ペッとを愛する方へ</h1>
                <p>“ぼくたちはあなたをあいしています。<br>あなたはぼくたちをあいしていますか？”</p>
            </div>
        </div>

        <!-----main----->

        <div class="pet-main">
            <div class="dog-box">
                <h4 class="home-pets-tittle">ワンちゃん</h4>

                <ul class="home-pets">
                    @foreach ($petsList as $pet)
                    <li class="home-flex-item">
                        <a href="#">
                            <img src=" {{ asset('assets/images/inu.jpg') }}" class="home-pic" alt="pets-picture">
                        </a>
                        <h2 class="new">NEW</h2>
                        <div class="home-details_container">
                            <details open>
                                <summary>
                                    <span class="open">もっと見る</span>
                                    <span class="close">閉じる</span>
                                </summary>
                                
                                <div class="home-details-content">
                                   
                                    <table class="table table-bordered text-white">
                                          
                                        <tr>
                                            <td>ID :</td>
                                            <th>{{ $petsList->id}}</th>
                                        </tr>
                                        <tr>
                                            <td>題名 :</td>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td>種類 :</td>
                                            <th>1</th>
                                        </tr>
                                        <tr>
                                            <td>年齢 :</td>
                                            <th>1 month</th>
                                        </tr>
                                        <tr>
                                            <td>性別 :</td>
                                            <th>1</th>
                                        </tr>
                                        <tr>
                                            <td>所在地 :</td>
                                            <th>1</th>
                                        </tr>
                                        <tr>
                                            <td>応募可能地域 :</td>
                                            <th>1</th>
                                        </tr>
                                        <tr>
                                            <td>掲載期間 :</td>
                                            <th>1</th>
                                        </tr>

                                    </table>
                                    
                                </div>
                                
                            </details>
                        </div>
                        
                    </li>
                    @endforeach


                    <li class="home-flex-item">
                        <a href="#">
                            <img src=" {{ asset('assets/images/inu3.jpg') }}" class="home-pic" alt="pets-picture">
                        </a>
                        <h2 class="new" style="font-size: 15px">NEW</h2>
                        <div class="home-details_container">
                            <details open>
                                <summary>
                                    <span class="open">もっと見る</span>
                                    <span class="close">閉じる</span>
                                </summary>
                                <div class="home-details-content">
                                    <table class="table table-bordered text-white">

                                        <tr>
                                            <td>ID :</td>
                                            <th>0001</th>
                                        </tr>
                                        <tr>
                                            <td>題名 :</td>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td>種類 :</td>
                                            <th>chiwawa</th>
                                        </tr>
                                        <tr>
                                            <td>年齢 :</td>
                                            <th>3m</th>
                                        </tr>
                                        <tr>
                                            <td>性別 :</td>
                                            <th>osu</th>
                                        </tr>
                                        <tr>
                                            <td>所在地 :</td>
                                            <th>Tokyo</th>
                                        </tr>
                                        <tr>
                                            <td>応募可能地域 :</td>
                                            <th>kanto</th>
                                        </tr>
                                        <tr>
                                            <td>掲載期間 :</td>
                                            <th>2022/05/27</th>
                                        </tr>


                                    </table>
                                </div>
                            </details>
                        </div>

                    </li>

                    <li class="home-flex-item">
                        <a href="">
                            <img src="{{ asset('assets/images/inu2.jpg') }}" class="home-pic" alt="pets-picture">
                        </a>
                        <h2 class="new">NEW</h2>
                        <div class="home-details_container">
                            <details open>
                                <summary>
                                    <span class="open">もっと見る</span>
                                    <span class="close">閉じる</span>
                                </summary>
                                <div class="home-details-content">
                                    <table class="table table-bordered text-white">

                                        <tr>
                                            <td>ID :</td>
                                            <th>0001</th>
                                        </tr>
                                        <tr>
                                            <td>題名 :</td>
                                            <th>pet</th>
                                        </tr>
                                        <tr>
                                            <td>種類 :</td>
                                            <th>chiwawa</th>
                                        </tr>
                                        <tr>
                                            <td>年齢 :</td>
                                            <th>3m</th>
                                        </tr>
                                        <tr>
                                            <td>性別 :</td>
                                            <th>osu</th>
                                        </tr>
                                        <tr>
                                            <td>所在地 :</td>
                                            <th>Tokyo</th>
                                        </tr>
                                        <tr>
                                            <td>応募可能地域 :</td>
                                            <th>kanto</th>
                                        </tr>
                                        <tr>
                                            <td>掲載期間 :</td>
                                            <th>2022/05/27</th>
                                        </tr>


                                    </table>
                                </div>
                            </details>
                        </div>

                    </li>

                </ul>
            </div>

            <div class="cat-box">
                <h4 class="home-pets-tittle">ネコちゃん</h4>
                <ul class="home-pets">
                    <li class="home-flex-item">
                        <a href="">
                            <img src="{{ asset('assets/images/cat1.jpg') }}" class="home-pic" alt="pets-picture">
                        </a>
                        <h2 class="new">NEW</h2>
                        <div class="home-details_container">
                            <details open>
                                <summary>
                                    <span class="open">もっと見る</span>
                                    <span class="close">閉じる</span>

                                </summary>
                                <div class="home-details-content">
                                    <table class="table table-bordered text-white">

                                        <tr>
                                            <td>ID :</td>
                                            <th>0001</th>
                                        </tr>
                                        <tr>
                                            <td>題名 :</td>
                                            <th>pet</th>
                                        </tr>
                                        <tr>
                                            <td>種類 :</td>
                                            <th>chiwawa</th>
                                        </tr>
                                        <tr>
                                            <td>年齢 :</td>
                                            <th>3m</th>
                                        </tr>
                                        <tr>
                                            <td>性別 :</td>
                                            <th>osu</th>
                                        </tr>
                                        <tr>
                                            <td>所在地 :</td>
                                            <th>Tokyo</th>
                                        </tr>
                                        <tr>
                                            <td>応募可能地域 :</td>
                                            <th>kanto</th>
                                        </tr>
                                        <tr>
                                            <td>掲載期間 :</td>
                                            <th>2022/05/27</th>
                                        </tr>


                                    </table>
                                </div>
                            </details>
                        </div>

                    </li>

                    <li class="home-flex-item">
                        <a href="#">
                            <img src="{{ asset('assets/images/cat2.jpg') }}" class="home-pic" alt="pets-picture">
                        </a>
                        <h2 class="new">NEW</h2>
                        <div class="home-details_container">
                            <details open>
                                <summary>
                                    <span class="open">もっと見る</span>
                                    <span class="close">閉じる</span>
                                </summary>
                                <div class="home-details-content">
                                    <table class="table table-bordered text-white">

                                        <tr>
                                            <td>ID :</td>
                                            <th>0001</th>
                                        </tr>
                                        <tr>
                                            <td>題名 :</td>
                                            <th>pet</th>
                                        </tr>
                                        <tr>
                                            <td>種類 :</td>
                                            <th>chiwawa</th>
                                        </tr>
                                        <tr>
                                            <td>年齢 :</td>
                                            <th>3m</th>
                                        </tr>
                                        <tr>
                                            <td>性別 :</td>
                                            <th>osu</th>
                                        </tr>
                                        <tr>
                                            <td>所在地 :</td>
                                            <th>Tokyo</th>
                                        </tr>
                                        <tr>
                                            <td>応募可能地域 :</td>
                                            <th>kanto</th>
                                        </tr>
                                        <tr>
                                            <td>掲載期間 :</td>
                                            <th>2022/05/27</th>
                                        </tr>


                                    </table>

                                </div>
                            </details>
                        </div>

                    </li>

                    <li class="home-flex-item">
                        <a href="#">
                            <img src=" {{ asset('assets/images/cat3.jpg') }}" class="home-pic" alt="pets-picture">
                        </a>
                        <h2 class="new">NEW</h2>
                        <div class="home-details_container">
                            <details open>
                                <summary>
                                    <span class="open">もっと見る</span>
                                    <span class="close">閉じる</span>
                                </summary>
                                <div class="home-details-content">
                                    <table class="table table-bordered text-white">

                                        <tr>
                                            <td>ID :</td>
                                            <th>0001</th>
                                        </tr>
                                        <tr>
                                            <td>題名 :</td>
                                            <th>pet</th>
                                        </tr>
                                        <tr>
                                            <td>種類 :</td>
                                            <th>chiwawa</th>
                                        </tr>
                                        <tr>
                                            <td>年齢 :</td>
                                            <th>3m</th>
                                        </tr>
                                        <tr>
                                            <td>性別 :</td>
                                            <th>osu</th>
                                        </tr>
                                        <tr>
                                            <td>所在地 :</td>
                                            <th>Tokyo</th>
                                        </tr>
                                        <tr>
                                            <td>応募可能地域 :</td>
                                            <th>kanto</th>
                                        </tr>
                                        <tr>
                                            <td>掲載期間 :</td>
                                            <th>2022/05/27</th>
                                        </tr>


                                    </table>

                                </div>
                            </details>
                        </div>

                    </li>
                </ul>
            </div>

        </div>


        <!--PAGE NO-->
        <div class="pager">
            <ul class="pagination">
                <li><a href="">«</a></li>
                <li><a class="active" href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="">5</a></li>
                <li><a href="">6</a></li>
                <li><a href="">7</a></li>
                <li><a href="">8</a></li>
                <li><a href="">»</a></li>
            </ul>
        </div>

       
    </div>
@endsection
