<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="<?php echo site_url(); ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/Untitled.css">
  <link rel="icon" href="assets/images/菜花.png">
  <title>购物车</title>
</head>

<body>
  <?php
    if($this->session->userdata('logged_in')==FALSE){
      echo '<script language="JavaScript">;alert("请先登录！");location.href="user/login";</script>;';
    }
  ?>
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
  <div class="mb-2 py-2" style="	background-image: url(assets/images/bg1.png);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="col-6 p-2 col-md-1" style=""> <img class="img-fluid d-block" src="assets/images/Cart.png" width="90px" style=""> </div>
        <div class="col-6 pt-3 col-md-6" style="">
          <h4 class="text-body mt-2"><span class="text-white"><b>我的购物车</b></span></h4>
        </div>
      </div>
    </div>
  </div>
  <?php 
  if($cart_info){
    foreach ($cart_info as $val) {
  ?>
  <div class="py-2" style="" >
    <div class="container">
      <div class="row rounded pl-3" style=" background-image: linear-gradient(rgb(255, 255, 255), rgb(255, 255, 255));  background-position: left top;  background-size: 100%;  background-repeat: repeat;  box-shadow: 0px 2px 4px  gray;">
        <div class="p-2 col-md-3" style=""><img class="d-block ml-3" src="<?php echo $val->item_image ?>" width="230px" height="140px"></div>
        <div class="p-3 col-md-2" style="">
          <h6 class=""><?php echo $val->item_name ?></h6>
        </div>
        <div class="col-md-2" style="">
          <h6 class="mt-5">￥<?php echo $val->price ?></h6>
        </div>
        <div class="ml-4 col-md-2" style=""><a class="btn btn-secondary text-white ml-5 mt-5" href="order/new_order/<?php echo $val->item_id ?>">购&nbsp; 买</a></div>
        <div class="col-md-2"><a class="btn btn-danger mt-5" href="cart/deleteitem/<?php echo $val->item_id ?>">从购物车中删除</a></div>
      </div>
    </div>
  </div>
  <?php 
    }
  }else{
  ?>
    <div class="py-3" >
      <div class="container">
        <div class="row">
          <div class="col-md-2 mx-auto">
            <h6 class="text-muted">购物车里什么都没有...</h6>
          </div>
        </div>
      </div>
    </div>
  <?php 
    }
  ?>

  <div class="py-1" data-pingendo-transient="">
    <div class="container">
      <div class="row pl-2">
        <div class="col-md-1 mx-auto" style=""><i class="fa fa-spin mx-auto fa-cutlery text-secondary fa-2x d-inline pl-2"></i></div>
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
</body>

</html>