<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="<?php echo site_url(); ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/Untitled.css">
  <title>个人中心</title>
  <link rel="icon" href="assets/images/菜花.png">
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
  <div class="pt-4 pb-3" style="	background-image: url(&quot;assets/images/背景.png&quot;);	background-position: top;	background-size: 100%;	background-repeat: repeat;	box-shadow: 0px 0px 0px  black;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-3">
          <h3 class="text-light" style=""><b>个人空间</b></h3>
        </div>
      </div>
    </div>
  </div>
  <?php
    foreach ($info as $val) { //对象
  ?>
  <div class="py-4">
    <div class="container">
      <div class="row">
        <div class="">
          <img class="d-block rounded-circle ml-0" src="<?php echo $val->image ?>" width="100px" height="100px">
        </div>
        <div class="col-md-8">
          <h5 class="ml-3 mt-4" style=""><?php echo $val->user_name ?>&nbsp;</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="py-0 mt-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active rounded" style="">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">收 货 地 址</h5>
              </div>
              <p class="mb-1"><?php echo $val->address ?></p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active rounded list-group-item-success">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">联 系 方 式</h5>
              </div>
              <p class="mb-1"><?php echo $val->tel ?></p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    }
  ?>
  <div class="py-4" >
    <div class="container">
      <div class="row">
        <?php 
          if($this->session->userdata('shopkeeper')==0){
        ?>
            <div class="col-md-2"><a class="btn btn-link" href="user/shopkeeper">申请成为店主</a></div>
            <div class="col-md-2"><a class="btn btn-link disabled" href="shopmaster.html">进入我的店铺</a></div>
            <div class="col-md-2"><a class="btn btn-link text-secondary disabled" href="message.html">我的消息</a></div>
        <?php 
          }else{
        ?>
            <div class="col-md-2"><a class="btn btn-link disabled" href="user/shopkeeper">申请成为店主</a></div>
            <div class="col-md-2"><a class="btn btn-link" href="shop/myshop">进入我的店铺</a></div>
            <div class="col-md-2"><a class="btn btn-link text-secondary" href="item/message">我的消息</a></div>
        <?php 
          }
        ?>
      </div>
    </div>
  </div>
  
  <div class="py-2 ml-5 mb-2" style="	background-image: linear-gradient(to right, rgb(53, 43, 16), rgb(244, 238, 216));	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h5 class="text-light"><b>我的订单</b></h5>
        </div>
      </div>
    </div>
  </div>
  <?php
    if($orders){
      foreach ($orders as $val) {
        if($val->order_condition=='1'){
  ?>
  <div class="py-2">
    <div class="container">
      <div class="row" style="	background-image: linear-gradient(to bottom, rgb(244, 238, 216), rgb(244, 238, 216));	background-position: top left;	background-size: 100%;	background-repeat: repeat;	box-shadow: 1px 2px 4px  gray;">
        <div class="col-md-2 py-2 pl-4" style=""><img class="d-block ml-3" src="<?php echo $val->item_image ?>" width="230px" height="140px"></div>
        <div class="col-md-3 offset-md-1 py-3" style="">
          <h6 class="" contenteditable="true"><?php echo $val->item_name ?></h6>
        </div>
        <div class="col-md-3 p-5" style="">
          <h6 class="">￥<?php echo $val->price ?></h6>
        </div>
        <form class="col-md-3 p-4" action="order/comment/<?php echo $val->order_id ?>" method="post">
          <button type="submit" name="sub" class="btn btn-primary ml-5 mt-4">评 价</button>
        </form>
      </div>
    </div>
  </div>
  <?php
        }
      }
    }else{
  ?>
    <div class="py-3" >
      <div class="container">
        <div class="row">
          <div class="col-md-2 mx-auto">
            <h6 class="text-muted">还没有购买商品哦...</h6>
          </div>
        </div>
      </div>
    </div>
  <?php 
    }
  ?>
  <div class="py-1">
    <div class="container">
      <div class="row pl-2">
        <div class="col-md-1 mx-auto" style=""><i class="fa fa-spin mx-auto fa-user-circle-o fa-2x d-inline pl-1 text-dark"></i></div>
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