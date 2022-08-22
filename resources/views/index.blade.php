<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Essentia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="header">
        <div class="header-logo">
            <img src="{{ asset('img/logo_official 2.png') }}" alt="curios">
        </div>
        <nav class="my-nav">
            <ul class="my-navbar">
                <li class="my-navbar-item">オークション
                    <img src="{{ asset('img/arrow-down.png') }}" alt="" class="my-navbar-item-img">
                </li>
                <li class="my-navbar-item">出品
                    <img src="{{ asset('img/arrow-down.png') }}" alt="" class="my-navbar-item-img">
                </li>
                <li class="my-navbar-item">CuriosXについて</li>
                <li class="my-navbar-item">ニュース</li>
                <li class="my-navbar-item">よくある質問</li>
            </ul>
        </nav>
        <form class="my-form" action="">
            <label class="my-form-icon-search" for="my-form-input">
                <img src="{{ asset('img/icon-search.png') }}" class="my-form-icon-search-img">
            </label>
            <input type="text" class="my-form-input" id="my-form-input">
        </form>
        <form action="" class="my-form2">
            <label for="" class="my-form2-label">ログイン</label>
            <button class="my-form2-btn">新規登録</button>
            <div class="my-form2-flag">
                <img src="{{ asset('img/flag.png') }}" alt="">
            </div>
        </form>
    </header>

    <section class="section-first">
        <div class="header-section-first">
            <ul class="list">
                <li class="list-item arrow-left">&#171;</li>
                <li class="list-item">サッカー</li>
                <li class="list-item">野球</li>
                <li class="list-item">バスケットボール</li>
                <li class="list-item">アメフト</li>
                <li class="list-item">ラグビー</li>
                <li class="list-item">ゴルフ</li>
                <li class="list-item">テニス</li>
                <li class="list-item">ボクシング</li>
                <li class="list-item arrow-right">&#187;</li>
            </ul>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/background-first.svg') }}" class="d-block w-100">
                    <div class="content-section-first">
                        <div class="title">
                            <h1>Signed football shirt <br> by Paul Pogba 1</h1>
                        </div>
                        <div class="image">
                            <img src="{{ asset('img/front-shirt.png') }}" alt="front shirt">
                            <img src="{{ asset('img/back-shirt.png') }}" alt="back shirt">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/background-first.svg') }}" class="d-block w-100">
                    <div class="content-section-first">
                        <div class="title">
                            <h1>Signed football shirt <br> by Paul Pogba 2</h1>
                        </div>
                        <div class="image">
                            <img src="{{ asset('img/front-shirt.png') }}" alt="front shirt">
                            <img src="{{ asset('img/back-shirt.png') }}" alt="back shirt">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/background-first.svg') }}" class="d-block w-100">
                    <div class="content-section-first">
                        <div class="title">
                            <h1>Signed football shirt <br> by Paul Pogba 3</h1>
                        </div>
                        <div class="image">
                            <img src="{{ asset('img/front-shirt.png') }}" alt="front shirt">
                            <img src="{{ asset('img/back-shirt.png') }}" alt="back shirt">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/background-first.svg') }}" class="d-block w-100">
                    <div class="content-section-first">
                        <div class="title">
                            <h1>Signed football shirt <br> by Paul Pogba 4</h1>
                        </div>
                        <div class="image">
                            <img src="{{ asset('img/front-shirt.png') }}" alt="front shirt">
                            <img src="{{ asset('img/back-shirt.png') }}" alt="back shirt">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/background-first.svg') }}" class="d-block w-100">
                    <div class="content-section-first">
                        <div class="title">
                            <h1>Signed football shirt <br> by Paul Pogba 5</h1>
                        </div>
                        <div class="image">
                            <img src="{{ asset('img/front-shirt.png') }}" alt="front shirt">
                            <img src="{{ asset('img/back-shirt.png') }}" alt="back shirt">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/background-first.svg') }}" class="d-block w-100">
                    <div class="content-section-first">
                        <div class="title">
                            <h1>Signed football shirt <br> by Paul Pogba 6</h1>
                        </div>
                        <div class="image">
                            <img src="{{ asset('img/front-shirt.png') }}" alt="front shirt">
                            <img src="{{ asset('img/back-shirt.png') }}" alt="back shirt">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev btn-slider" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <img src="{{ asset('img/arrow-left.svg') }}" class="arrow-left">
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next btn-slider" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <img src="{{ asset('img/arrow-right.svg') }}" class="arrow-right">
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="section-second">
        <div class="header-title">
            <h1>開催中オークション</h1>
            <a href="">もっと見る</a>
            <div class="clear"></div>
            <div class="line"></div>
        </div>
        <div class="card-container">
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('img/card1.svg') }}" alt="card image">
                </div>
                <div class="card-content card-content-primary ">
                    <div class="wrap-card-btn">
                        <a class="card-btn card-btn-primary" href="">開催中</a>
                    </div>
                    <h3>失きのリわ医贈ぜ通理ニヌオク新反</h3>
                    <div class="content-left">
                        <p class="p1">¥100</p>
                        <p class="p2">現在価格</p>
                    </div>
                    <div class="content-right">
                        <p class="p1">1日</p>
                        <p class="p2">残り時間</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('img/card2.svg') }}" alt="card image">
                </div>
                <div class="card-content card-content-primary ">
                    <div class="wrap-card-btn">
                        <a class="card-btn card-btn-primary" href="">開催中</a>
                    </div>
                    <h3>失きのリわ医贈ぜ通理ニヌオク新反</h3>
                    <div class="content-left">
                        <p class="p1">¥100</p>
                        <p class="p2">現在価格</p>
                    </div>
                    <div class="content-right">
                        <p class="p1">1日</p>
                        <p class="p2">残り時間</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('img/card3.svg') }}" alt="card image">
                </div>
                <div class="card-content card-content-primary ">
                    <div class="wrap-card-btn">
                        <a class="card-btn card-btn-primary" href="">開催中</a>
                    </div>
                    <h3>失きのリわ医贈ぜ通理ニヌオク新反</h3>
                    <div class="content-left">
                        <p class="p1">¥100</p>
                        <p class="p2">現在価格</p>
                    </div>
                    <div class="content-right">
                        <p class="p1">1日</p>
                        <p class="p2">残り時間</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('img/card4.svg') }}" alt="card image">
                </div>
                <div class="card-content card-content-primary ">
                    <div class="wrap-card-btn">
                        <a class="card-btn card-btn-primary" href="">開催中</a>
                    </div>
                    <h3>失きのリわ医贈ぜ通理ニヌオク新反</h3>
                    <div class="content-left">
                        <p class="p1">¥100</p>
                        <p class="p2">現在価格</p>
                    </div>
                    <div class="content-right">
                        <p class="p1">1日</p>
                        <p class="p2">残り時間</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('img/card5.svg') }}" alt="card image">
                </div>
                <div class="card-content card-content-primary ">
                    <div class="wrap-card-btn">
                        <a class="card-btn card-btn-primary" href="">開催中</a>
                    </div>
                    <h3>失きのリわ医贈ぜ通理ニヌオク新反</h3>
                    <div class="content-left">
                        <p class="p1">¥100</p>
                        <p class="p2">現在価格</p>
                    </div>
                    <div class="content-right">
                        <p class="p1">1日</p>
                        <p class="p2">残り時間</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('img/card6.svg') }}" alt="card image">
                </div>
                <div class="card-content card-content-primary ">
                    <div class="wrap-card-btn">
                        <a class="card-btn card-btn-primary" href="">開催中</a>
                    </div>
                    <h3>失きのリわ医贈ぜ通理ニヌオク新反</h3>
                    <div class="content-left">
                        <p class="p1">¥100</p>
                        <p class="p2">現在価格</p>
                    </div>
                    <div class="content-right">
                        <p class="p1">1日</p>
                        <p class="p2">残り時間</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('img/card7.svg') }}" alt="card image">
                </div>
                <div class="card-content card-content-primary ">
                    <div class="wrap-card-btn">
                        <a class="card-btn card-btn-primary" href="">開催中</a>
                    </div>
                    <h3>失きのリわ医贈ぜ通理ニヌオク新反</h3>
                    <div class="content-left">
                        <p class="p1">¥100</p>
                        <p class="p2">現在価格</p>
                    </div>
                    <div class="content-right">
                        <p class="p1">1日</p>
                        <p class="p2">残り時間</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('img/card8.svg') }}" alt="card image">
                </div>
                <div class="card-content card-content-primary ">
                    <div class="wrap-card-btn">
                        <a class="card-btn card-btn-primary" href="">開催中</a>
                    </div>
                    <h3>失きのリわ医贈ぜ通理ニヌオク新反</h3>
                    <div class="content-left">
                        <p class="p1">¥100</p>
                        <p class="p2">現在価格</p>
                    </div>
                    <div class="content-right">
                        <p class="p1">1日</p>
                        <p class="p2">残り時間</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-third">
        <div class="header-title">
            <h1>カテゴリー</h1>
            <div class="clear"></div>
            <div class="line"></div>
        </div>
        <div class="box-container" style="background-image: url('{{ asset('img/mask.svg') }}')">
            <div class="box-item">
                <img src="{{ asset('img/soccer.png') }}" alt="sport image" class="box-img">
                <h4 class="box-title">サッカー</h4>
            </div>
            <div class="box-item">
                <img src="{{ asset('img/baseball.svg') }}" alt="sport image" class="box-img">
                <h4 class="box-title">野球</h4>
            </div>
            <div class="box-item">
                <img src="{{ asset('img/golf.svg') }}" alt="sport image" class="box-img">
                <h4 class="box-title">ゴルフ</h4>
            </div>
            <div class="box-item">
                <img src="{{ asset('img/rugby.png') }}" alt="sport image" class="box-img">
                <h4 class="box-title">ラグビー</h4>
            </div>
            <div class="box-item">
                <img src="{{ asset('img/tennis.png') }}" alt="sport image" class="box-img">
                <h4 class="box-title">テニス</h4>
            </div>
            <div class="box-item">
                <img src="{{ asset('img/basketball.svg') }}" alt="sport image" class="box-img">
                <h4 class="box-title">バスケットボール</h4>
            </div>
        </div>
    </section>

    <section class="section-forth">
        <div class="header-title">
            <h1>過去のオークション</h1>
            <a href="">もっと見る</a>
            <div class="clear"></div>
            <div class="line"></div>
        </div>
        <div class="card-container">
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('img/card1_1.svg') }}" alt="card image">
                </div>
                <div class="card-content card-content-secondary ">
                    <div class="wrap-card-btn">
                        <a class="card-btn card-btn-secondary" href="">開催中</a>
                    </div>
                    <h3>失きのリわ医贈ぜ通理ニヌオク新反</h3>
                    <div class="content-left">
                        <p class="p1">¥100</p>
                        <p class="p2">現在価格</p>
                    </div>
                    <div class="content-right">
                        <p class="p1 p1_1">2021年3月30日</p>
                        <p class="p2 p2_1">残り時間</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('img/card2_1.svg') }}" alt="card image">
                </div>
                <div class="card-content card-content-secondary ">
                    <div class="wrap-card-btn">
                        <a class="card-btn card-btn-secondary" href="">開催中</a>
                    </div>
                    <h3>失きのリわ医贈ぜ通理ニヌオク新反</h3>
                    <div class="content-left">
                        <p class="p1">¥100</p>
                        <p class="p2">現在価格</p>
                    </div>
                    <div class="content-right">
                        <p class="p1 p1_1">2021年3月30日</p>
                        <p class="p2 p2_1">残り時間</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('img/card3_1.svg') }}" alt="card image">
                </div>
                <div class="card-content card-content-secondary ">
                    <div class="wrap-card-btn">
                        <a class="card-btn card-btn-secondary" href="">開催中</a>
                    </div>
                    <h3>失きのリわ医贈ぜ通理ニヌオク新反</h3>
                    <div class="content-left">
                        <p class="p1">¥100</p>
                        <p class="p2">現在価格</p>
                    </div>
                    <div class="content-right">
                        <p class="p1 p1_1">2021年3月30日</p>
                        <p class="p2 p2_1">残り時間</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('img/card4_1.svg') }}" alt="card image">
                </div>
                <div class="card-content card-content-secondary ">
                    <div class="wrap-card-btn">
                        <a class="card-btn card-btn-secondary" href="">開催中</a>
                    </div>
                    <h3>失きのリわ医贈ぜ通理ニヌオク新反</h3>
                    <div class="content-left">
                        <p class="p1">¥100</p>
                        <p class="p2">現在価格</p>
                    </div>
                    <div class="content-right">
                        <p class="p1 p1_1">2021年3月30日</p>
                        <p class="p2 p2_1">残り時間</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('img/card5_1.svg') }}" alt="card image">
                </div>
                <div class="card-content card-content-secondary ">
                    <div class="wrap-card-btn">
                        <a class="card-btn card-btn-secondary" href="">開催中</a>
                    </div>
                    <h3>失きのリわ医贈ぜ通理ニヌオク新反</h3>
                    <div class="content-left">
                        <p class="p1">¥100</p>
                        <p class="p2">現在価格</p>
                    </div>
                    <div class="content-right">
                        <p class="p1 p1_1">2021年3月30日</p>
                        <p class="p2 p2_1">残り時間</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('img/card6_1.svg') }}" alt="card image">
                </div>
                <div class="card-content card-content-secondary ">
                    <div class="wrap-card-btn">
                        <a class="card-btn card-btn-secondary" href="">開催中</a>
                    </div>
                    <h3>失きのリわ医贈ぜ通理ニヌオク新反</h3>
                    <div class="content-left">
                        <p class="p1">¥100</p>
                        <p class="p2">現在価格</p>
                    </div>
                    <div class="content-right">
                        <p class="p1 p1_1">2021年3月30日</p>
                        <p class="p2 p2_1">残り時間</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('img/card7_1.svg') }}" alt="card image">
                </div>
                <div class="card-content card-content-secondary ">
                    <div class="wrap-card-btn">
                        <a class="card-btn card-btn-secondary" href="">開催中</a>
                    </div>
                    <h3>失きのリわ医贈ぜ通理ニヌオク新反</h3>
                    <div class="content-left">
                        <p class="p1">¥100</p>
                        <p class="p2">現在価格</p>
                    </div>
                    <div class="content-right">
                        <p class="p1 p1_1">2021年3月30日</p>
                        <p class="p2 p2_1">残り時間</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="card-item">
                <div class="card-img">
                    <img src="{{ asset('img/card8_1.svg') }}" alt="card image">
                </div>
                <div class="card-content card-content-secondary ">
                    <div class="wrap-card-btn">
                        <a class="card-btn card-btn-secondary" href="">開催中</a>
                    </div>
                    <h3>失きのリわ医贈ぜ通理ニヌオク新反</h3>
                    <div class="content-left">
                        <p class="p1">¥100</p>
                        <p class="p2">現在価格</p>
                    </div>
                    <div class="content-right">
                        <p class="p1 p1_1">2021年3月30日</p>
                        <p class="p2 p2_1">残り時間</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-fifth">
        <div class="header-title">
            <h1>ニュース</h1>
            <a href="">もっと見る</a>
            <div class="clear"></div>
            <div class="line"></div>
        </div>
        <div class="card-news">
            <div class="card-news-item">
                <div class="news-img">
                    <img src="{{ asset('img/news1.svg') }}" alt="news image">
                </div>
                <div class="news-content">
                    <h2 class="news-title">愛読ねっきじ掲連転腕きよ判浜ょぱねっきじ掲連転腕きよ判浜ょ</h2>
                    <p class="p1">2021年1月28日</p>
                    <p class="p2">愛読ねっきじ掲連転腕きよ判浜ょぱ秘7鶴ヤヱウ 新92質ヨムハレ省文愛読ね
                        っきじ掲連転腕きよ判浜ょぱ秘7鶴ヤ愛読ねっきじ掲連転腕きよ判浜ょぱ秘7ヤ</p>
                </div>
            </div>
            <div class="card-news-item">
                <div class="news-img">
                    <img src="{{ asset('img/news2.svg') }}" alt="news image">
                </div>
                <div class="news-content">
                    <h2 class="news-title">愛読ねっきじ掲連転腕きよ判浜ょぱねっきじ掲連転腕きよ判浜ょ</h2>
                    <p class="p1">2021年1月28日</p>
                    <p class="p2">愛読ねっきじ掲連転腕きよ判浜ょぱ秘7鶴ヤヱウ 新92質ヨムハレ省文愛読ね
                        っきじ掲連転腕きよ判浜ょぱ秘7鶴ヤ愛読ねっきじ掲連転腕きよ判浜ょぱ秘7ヤ</p>
                </div>
            </div>
            <div class="card-news-item">
                <div class="news-img">
                    <img src="{{ asset('img/news3.svg') }}" alt="news image">
                </div>
                <div class="news-content">
                    <h2 class="news-title">愛読ねっきじ掲連転腕きよ判浜ょぱねっきじ掲連転腕きよ判浜ょ</h2>
                    <p class="p1">2021年1月28日</p>
                    <p class="p2">愛読ねっきじ掲連転腕きよ判浜ょぱ秘7鶴ヤヱウ 新92質ヨムハレ省文愛読ね
                        っきじ掲連転腕きよ判浜ょぱ秘7鶴ヤ愛読ねっきじ掲連転腕きよ判浜ょぱ秘7ヤ</p>
                </div>
            </div>
            <div class="card-news-item">
                <div class="news-img">
                    <img src="{{ asset('img/news4.svg') }}" alt="news image">
                </div>
                <div class="news-content">
                    <h2 class="news-title">愛読ねっきじ掲連転腕きよ判浜ょぱねっきじ掲連転腕きよ判浜ょ</h2>
                    <p class="p1">2021年1月28日</p>
                    <p class="p2">愛読ねっきじ掲連転腕きよ判浜ょぱ秘7鶴ヤヱウ 新92質ヨムハレ省文愛読ね
                        っきじ掲連転腕きよ判浜ょぱ秘7鶴ヤ愛読ねっきじ掲連転腕きよ判浜ょぱ秘7ヤ</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-about">
        <div class="header-title">
            <h1>支払いと配達</h1>
            <div class="clear"></div>
            <div class="line"></div>
        </div>
        <div class="wrap-about">
            <div class="about-img">
                <img src="{{ asset('img/credit.svg') }}" alt="payment method image">
            </div>
            <div class="about-img">
                <img src="{{ asset('img/bank.svg') }}" alt="payment method image">
            </div>
            <div class="about-img">
                <img src="{{ asset('img/domestic.svg') }}" alt="payment method image">
            </div>
        </div>
    </section>

    <div class="across"></div>

    <footer class="footer">
        <div class="foo-container">
            <div class="foo-item">
                <div class="title">
                    <h5>Auctions</h5>
                </div>
                <div class="content content-first">
                    <ul>
                        <li>開催中オークション</li>
                        <li>過去のオークション</li>
                        <li>サッカー</li>
                        <li>野球</li>
                    </ul>
                    <ul>
                        <li>バスケットボール</li>
                        <li>アメフト</li>
                        <li>ラグビー</li>
                        <li>ゴルフ</li>
                    </ul>
                    <ul>
                        <li>過去のオークション</li>
                        <li>テニス</li>
                        <li>ボクシング</li>
                    </ul>
                </div>
            </div>
            <div class="foo-item">
                <div class="title">
                    <h5>Bid/Sell</h5>
                </div>
                <div class="content">
                    <ul>
                        <li>出品査定の申込 </li>
                        <li>入札ガイド </li>
                        <li>出品ガイド </li>
                    </ul>
                </div>
            </div>
            <div class="foo-item">
                <div class="title">
                    <h5>Information</h5>
                </div>
                <div class="content">
                    <ul>
                        <li>プライバシーポリシー</li>
                        <li>ユーザー利用規約</li>
                        <li>特定商取引法に基づく表記 </li>
                        <li>お問い合わせ </li>
                    </ul>
                </div>
            </div>
            <div class="foo-item">
                <div class="title">
                    <h5>About</h5>
                </div>
                <div class="content">
                    <ul>
                        <li>CuriosXとは</li>
                        <li>運営会社</li>
                        <li>ニュース</li>
                        <li>よくある質問</li>
                    </ul>
                </div>
            </div>
            <div class="foo-item">
                <div class="title title-last">
                    <h5>メルマガ登録</h5>
                </div>
                <div class="content-last">
                    <p>今後のオークションの通知を受け取る</p>
                    <input type="text" placeholder="メールアドレス">
                    <button>登録する</button>
                    <div class="images">
                        <img src="{{ asset('img/pm1.svg') }}" alt="payment method image">
                        <img src="{{ asset('img/pm2.svg') }}" alt="payment method image">
                        <img src="{{ asset('img/pm3.svg') }}" alt="payment method image">
                        <img src="{{ asset('img/pm4.svg') }}" alt="payment method image">
                        <img src="{{ asset('img/pm5.svg') }}" alt="payment method image">
                        <img src="{{ asset('img/pm6.svg') }}" alt="payment method image">
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>