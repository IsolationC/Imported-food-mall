<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="<?php echo site_url(); ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
  <link rel="stylesheet" href="assets/css/Untitled.css">
  <title>进口食品商城</title>
  <link rel="icon" href="assets/images/菜花.png">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-primary" style="">
    <div class="container-fluid"> 
      <a class="navbar-brand" href="#">
        <i class="fa d-inline fa-delicious" style=""></i>
        <b><b> 进口食品商城</b></b>
      </a> 
      <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar16">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar16">
        <ul class="navbar-nav ml-auto">
          <?php
            if($this->session->userdata('logged_in')){
          ?>
              <li class="nav-item mr-3"> 
                <a class="nav-link disabled" href="">
                  <b><b><span style="font-weight: normal;">已登录</span></b></b>
                </a> 
              </li>
          <?php 
            }else{
          ?>
              <li class="nav-item mr-3"> 
                <a class="nav-link" href="user/login">
                  <b><b><span style="font-weight: normal;">登录</span></b></b>
                </a> 
              </li>
          <?php
            }
          ?>
          <li class="nav-item mr-3"> <a class="nav-link" href="cart/show_cart">购物车</a> </li>
          <li class="nav-item"> <a class="nav-link" href="user/center">个人中心</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="" style=" background-image: linear-gradient(to bottom, rgb(231, 232, 193), rgb(231, 232, 193)); background-position: top left;  background-size: 100%;  background-repeat: repeat;">
    <div class="container">
      <div class="text-center mx-auto col-lg-8 col-10"></div>
      <div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
        <div class="carousel-inner">
          <div class="carousel-item active"> <img class="d-block w-100" src="assets/images/轮播1.jpg" style="" height="350px"> </div>
          <div class="carousel-item"> <img class="d-block w-100" height="350px" src="assets/images/轮播2.jpg"> </div>
          <div class="carousel-item"> <img class="d-block w-100" height="350px" src="assets/images/轮播3.png"> </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#carousel1" data-slide-to="0" class="active"> </li>
          <li data-target="#carousel1" data-slide-to="1"> </li>
          <li data-target="#carousel1" data-slide-to="2"> </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="ml-3 py-0">
    <div class="col-md-12 mt-2" style="">
      <form class="form-inline mt-3 px-1" action="item/search" method="post">
        <div class="input-group">
          <input type="text" name="item_name" class="form-control form-control-lg" id="inlineFormInputGroup" style="" placeholder="查找商品">
          <div class="input-group-append">
            <button class="btn btn-primary px-2" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="bg-light mt-2 py-2">
    <h4 class="ml-5 mb-2"><i class="fa fa-fw fa-thumbs-up"></i>今日推荐</h4>
    <div class="container">
      <div class="row">
        <div class="col-md-3"> <!-- 重复 -->
          <div class="rounded-sm col-md-12">
            <div class="card"> <img class="card-img-top" height="140px" width="230px" src="assets/images/0001.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">商品名</h5>
                <p class="card-text">￥123</p>
                <p class="card-text">产地：</p> <a href="#" class="btn btn-primary">查看详情</a>
              </div>
            </div>
          </div>
        </div> <!-- 重复 -->
        <div class="col-md-3">
          <div class="rounded-sm col-md-12">
            <div class="card"> <img class="card-img-top" src="assets/images/0001.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title" contenteditable="true">商品名</h5>
                <p class="card-text">￥123</p>
                <p class="card-text">产地：</p> <a href="#" class="btn btn-primary">查看详情</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </div>
  <div class="mx-0 py-2 bg-dark">
    <h4 class="ml-5 mb-2 text-light"><i class="fa fa-fw fa-thumbs-o-up"></i>特价优惠</h4>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="rounded-sm col-md-12" style="">
            <div class="card"> <img class="card-img-top" src="assets/images/0002.png" alt="Card image cap" height="140px">
              <div class="card-body">
                <h5 class="card-title">商品名</h5>
                <p class="card-text">￥123</p>
                <p class="card-text">产地：</p> <a href="#" class="btn btn-primary">查看详情</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="rounded-sm col-md-12">
            <div class="card"> <img class="card-img-top" src="assets/images/0002.png" alt="Card image cap" height="140px">
              <div class="card-body" style="">
                <h5 class="card-title">商品名</h5>
                <p class="card-text">￥123</p>
                <p class="card-text">产地：</p> <a href="#" class="btn btn-primary">查看详情</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </div>
  <div class="pt-2 pb-1">
    <div class="container">
      <div class="row pl-2">
        <div class="col-md-1 mx-auto" style=""><i class="fa fa-spin mx-auto fa-archive d-inline fa-2x pl-1 text-secondary"></i></div>
      </div>
    </div>
  </div>
  <div class="py-3" style="	background-image: linear-gradient(to bottom, #FFFAF0, #FFFAF0);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center d-md-flex align-items-center">
          <a class="btn btn-link mx-auto" href="shop/home">返回主页</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mt-2 mb-0">©&nbsp;黑龙江大学-软件学院-陈嘉悦-20155426</p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>