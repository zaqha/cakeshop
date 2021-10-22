<!DOCTYPE html>
<html lang="zh-tw">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cake shop</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <link rel="shortcut icon" href="../hotel/img/favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="custom.css">
</head>
<body>
<!-- 導覽列 -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">cake shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="Nav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <!-- fafw ->fix width -->
          <a class="nav-link active" href="#room"><i class="fas fa-fw fa-bed me-2"></i>所有商品</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#facility"><i class="fas fa-fw fa-dumbbell me-2"></i>品牌介紹</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#food"><i class="fas fa-fw fa-utensils me-2"></i>產品特色</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#traffic"><i class="fas fa-fw fa-map-marker-alt me-2"></i>交通資訊</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact"><i class="fas fa-fw fa-envelope me-2"></i>預約試吃</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=""><i class="fas fa-fw "></i>會員登入</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="frontend/admin.php"><i class="fas fa-f"></i>管理登入</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<!-- header -->
  <div id="slider" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#slider" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item vh-100 active">
        <img src="https://picsum.photos/1980/1080?random=1" class="b-block w-100 h-100">
        <div class="carousel-caption top-0 bottom-0 d-flex flex-column justify-content-center">
          <h1>CAKE</h1>
          <p class="d-none d-md-block">忙碌的生活中，你有多久沒有好好的考賞自己呢？放慢腳步，來cake shop好好享受吧</p>
        </div>
      </div>
      <div class="carousel-item vh-100">
          <img src="https://picsum.photos/1980/1080?random=2" class="b-block w-100 h-100">
          <div class="carousel-caption top-0 bottom-0 d-flex flex-column justify-content-center">
          <h1>人氣店家 世界聞名而來</h1>
          <p class="d-none d-md-block">質感風格打造午茶新風景</p>
        </div>
      </div>
      <div class="carousel-item vh-100">
          <img src="https://picsum.photos/1980/1080?random=3" class="b-block w-100 h-100">
          <div class="carousel-caption top-0 bottom-0 d-flex flex-column justify-content-center">
          <h1>寵愛有你 專案特惠</h1>
          <p class="d-none d-md-block">特惠方案</p>
        </div>
      </div>
      <div class="carousel-item vh-100">
        <img src="https://picsum.photos/1980/1080?random=4" class="b-block w-100 h-100">
        <div class="carousel-caption top-0 bottom-0 d-flex flex-column justify-content-center">
        <h1>美食饗宴</h1>
        <p class="d-none d-md-block">歡迎外燴商約洽談</p>
      </div>
    </div>
    </div>


    <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- 分頁介紹 -->
<section id="room"  class="container py-5">
  <header  class="text-center">
    <h2 class="text-warning pb-3">所有商品</h2>

   
<!-- 特色 -->
<section id="facility" class="py-5">
  <header class="container text-center">
    <h2 class="text-warning pb-3">特色</h2>
  </header>
  <article class="container py-5 text-white">
  <ul class="row list-unstyled gy-4">
    <li  class="col-12 col-lg-6">
      <div class="row align-items-center">
        <img class="col-6" src="https://summer10920.github.io/skillStudies_CSSBS_WebDemo/Bootstrap50_Hotel/media/fac1.jpg" width="400px" alt="">
        <div class="col-6">
          <h5>特色</h5>
          <p class="pb-3 border-bottom border-warning">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?</p>
        </div>
      </div>
    </li>
    <li  class="col-12 col-lg-6">
      <div class="row align-items-center">
        <img class="col-6" src="https://summer10920.github.io/skillStudies_CSSBS_WebDemo/Bootstrap50_Hotel/media/fac2.jpg" width="400px" alt="">
        <div class="col-6">
          <h5>特色</h5>
          <p class="pb-3 border-bottom border-warning">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?</p>
        </div>
      </div>
    </li>
    <li  class="col-12 col-lg-6">
      <div class="row align-items-center">
        <img class="col-6" src="https://summer10920.github.io/skillStudies_CSSBS_WebDemo/Bootstrap50_Hotel/media/fac3.jpg" width="400px" alt="">
        <div class="col-6">
          <h5>3特色</h5>
          <p class="pb-3 border-bottom border-warning">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?</p>
        </div>
      </div>
    </li>
    <li  class="col-12 col-lg-6">
      <div class="row align-items-center">
        <img class="col-6" src="https://summer10920.github.io/skillStudies_CSSBS_WebDemo/Bootstrap50_Hotel/media/fac4.jpg" width="400px" alt="">
        <div class="col-6">
          <h5>特色</h5>
          <p class="pb-3 border-bottom border-warning">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?</p>
        </div>
      </div>
    </li>
    <li  class="col-12 col-lg-6">
      <div class="row align-items-center">
        <img class="col-6" src="https://summer10920.github.io/skillStudies_CSSBS_WebDemo/Bootstrap50_Hotel/media/fac5.jpg" width="400px" alt="">
        <div class="col-6">
          <h5>特色</h5>
          <p class="pb-3 border-bottom border-warning">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?</p>
        </div>
      </div>
    </li>
    <li  class="col-12 col-lg-6">
      <div class="row align-items-center">
        <img class="col-6" src="https://summer10920.github.io/skillStudies_CSSBS_WebDemo/Bootstrap50_Hotel/media/fac6.jpg" width="400px" alt="">
        <div class="col-6">
          <h5>特色</h5>
          <p class="pb-3 border-bottom border-warning">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?</p>
        </div>
      </div>
    </li>
  </ul>
  </article>
</section>

<!-- 餐飲美食 -->
<section id="food" class="container py-5">
  <h2 class="text-warning  text-center">餐飲美食</h2>

  <article class="py-5 row gy-4">
    <!--圖片-->
    <div class="tab-content col-lg-6">
      <img id="foodImg1" class="img-thumbnail img-fluid tab-pane fade show active" src="https://summer10920.github.io/skillStudies_CSSBS_WebDemo/Bootstrap50_Hotel/media/food1.jpg">
      <img id="foodImg2" class="img-thumbnail img-fluid tab-pane fade" src="https://summer10920.github.io/skillStudies_CSSBS_WebDemo/Bootstrap50_Hotel/media/food2.jpg">
      <img id="foodImg3" class="img-thumbnail img-fluid tab-pane fade" src="https://summer10920.github.io/skillStudies_CSSBS_WebDemo/Bootstrap50_Hotel/media/food3.jpg">
    </div>
    <!--Accordion-->
    <div class="accordion list-group col-lg-6 px-3" id="foodMenu">
      <div class="accordion-item" data-bs-toggle="list" data-bs-target="#foodImg1">
        <a class="accordion-header accordion-button  text-decoration-none text-warning alert-warning" data-bs-toggle="collapse" href="#foodTxt1">中歐頂級豪華早餐 （自助式）
          <small class="position-absolute start-0 top-0 badge bg-danger">2F 食堂</small>
        </a>
        <div id="foodTxt1" class="accordion-collapse collapse show" data-bs-parent="#foodMenu">
          <div class="accordion-body">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?
            </p>
            <p class="text-end text-danger">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?
            </p>
          </div>
        </div>
      </div>
      <div class="accordion-item" data-bs-toggle="list" data-bs-target="#foodImg2">
        <a class="accordion-header accordion-button collapsed text-decoration-none text-warning alert-warning" data-bs-toggle="collapse" href="#foodTxt2">咖啡複合式鋼琴酒吧
          <small class="position-absolute start-0 top-0 badge bg-danger">1F 中庭</small>
        </a>
        <div id="foodTxt2" class="accordion-collapse collapse" data-bs-parent="#foodMenu">
          <div class="accordion-body">
            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?</p>
            <p class="float-end text-danger">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?
            </p>
          </div>
        </div>
      </div>
      <div class="accordion-item" data-bs-toggle="list" data-bs-target="#foodImg3">
        <a class="accordion-header accordion-button collapsed text-decoration-none text-warning alert-warning" data-bs-toggle="collapse" href="#foodTxt3">桶仔爐烤春雞 露營客最愛
          <small class="position-absolute start-0 top-0 badge bg-danger">代訂預約</small>
        </a>
        <div id="foodTxt3" class="accordion-collapse collapse" data-bs-parent="#foodMenu">
          <div class="accordion-body">
            <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?
            </p>
            <p class="float-end text-danger">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, suscipit rem incidunt fuga voluptas reiciendis. Repudiandae modi hic fugit dolorem sapiente qui reiciendis voluptates eligendi praesentium porro rem, distinctio repellat tenetur reprehenderit excepturi consequatur. Explicabo nostrum illum ratione excepturi. Dolor vitae, facere quos ducimus harum molestiae illo porro sunt voluptates?）
            </p>
          </div>
        </div>
      </div>
    </div>
  </article>
</section>

  <!-- 交通資訊 -->
  <section id="traffic" class="py-5 ratio">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.7020090598976!2d121.41729491532458!3d25.044184944036388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a7bed3dc9b59%3A0x57e6439a2db0fa2a!2zMjQz5paw5YyX5biC5rOw5bGx5Y2A5rOw5bGx6IG36KiT5Lit5b-D!5e0!3m2!1szh-TW!2stw!4v1623306096916!5m2!1szh-TW!2stw"></iframe>

    <article class="container position-static">
      <div class="row">
        <div class="col-lg-6">
          <header class="text-center h2 card text-warning mb-4">交通資訊</header>
          <div class="card card-body">
            <strong>公車、捷運</strong>
            <ul class="ps-4">
              <li>公車：三重客運 (637、638)、指南客運 (797、798、801、858、880、883、1501、1503)，至明志科技大學站下車。</li>
              <li>新北市泰山區免費公車（泰山區 F216 明志國小-台北車站（北三門搭車）)：至貴子路下車後，步行至貴子路口左轉明志路 3 段，明志路直行約 100 公尺至工專路右轉，再直行即可至明志科技大學。
              </li>
              <li>捷運：臺北捷運中和新蘆線至丹鳳站 1 號出口或桃園捷運機場線至泰山貴和站（明志科大）1 號出口，再轉乘公車或騎乘 YouBike 微笑單車（約 10~15 分鐘）至明志科技大學。</li>
            </ul>
            <strong>自行開車</strong>
            <ul class="ps-4">
              <li>高速公路五股交流道下（往新莊、泰山），經新五路至新北大道右轉，直行至貴子路口右轉，貴子路直行至明志路左轉。於明志路繼續前行約 100 公尺右轉工專路，即可抵達明科技大學。</li>
              <li>由台北車站走忠孝橋，直行高架道路，下到平面道路之後直行至貴子路口右轉，貴子路直行至明志路左轉，於明志路繼續前行約 100 公尺右轉工專路，即可抵達明科技大學。</li>
              <li>明志科大「汽車」停車費 30 元/小時，請儘量搭乘大眾交通工具或機車（免停車費）。</li>
            </ul>
          </div>
        </div>
      </div>
    </article>
  </section>

<!-- 聯絡我們 -->
<section id="contact" class="py-5 bg-dark text-light">
  <header class="container text-center">
    <h2 class="text-warning pb-3">聯絡我們</h2>
  </header>
  <article class="container py-5">
    <form class="row g-4" method="post">
      <div class="col-12 col-md-6">
          <label class="form-label" for="dataUser">訪客姓名</label>
          <div class="input-group">
            <input class="form-control" type="text" id="dataUser" name="dataUser" placeholder="Full Name" required>
            <div class="input-group-text">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="dataSexM" name="dataSex" value="man">
                <label class="form-check-label" for="dataSexM">男性</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="dataSexW" name="dataSex" value="woman">
                <label class="form-check-label" for="dataSexW">女性</label>
              </div>
            </div>
          </div>
      </div>
      <div class="col-12 col-md-6">
        <label class="form-label" for="dataTel">連絡電話</label>
        <input class="form-control" type="tel" id="dataTel" name="dataTel" placeholder="Phone Number" required>
      </div>
      <div class="col-12 col-md-6">
        <label class="form-label" for="dataMail">電子信箱</label>
        <input class="form-control" type="email" id="dataMail" name="dataMail" placeholder="Email Address" required>
      </div>
      <div class="col-12 col-md-6">
        <label class="form-label" for="dataQus">問題類型</label>
        <select class="form-select" id="dataQus" name="DataQus">
          <option value="相關">相關</option>
          <option value="訂桌">訂桌</option>
          <option value="其他">其他</option>
        </select>
      </div>
      <div class="col-12">
        <label class="form-label" for="dataMessage">需求說明</label>
        <textarea class="form-control" id="dataMessage" name="dataMessage" placeholder="Writer Your Message..." rows="3"></textarea>
      </div>
      <div class="col-12 text-center">
        <div class="form-text">請如實填寫便於信件回覆</div>
        <hr class="border-secondary">
        <button type="submit" class="btn btn-primary">確認送出</button>
      </div>
    </form>
  </article>
  <!-- logo -->
  <article class="container-fluid bg-light py-5 text-center">
    <div class="d-flex justify-content-center align-items-center flex-wrap">
      <a href="https://www.facebook.com/" target="_blank" class="link-secondary m-3 p-3 border rounded">
        <i class="fab fa-facebook-square fa-3x"></i><br>
        cake shop
      </a>
    </div>
  </article>
</section>
</body>