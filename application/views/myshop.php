<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="<?php echo site_url(); ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/Untitled.css">
  <link rel="icon" href="assets/images/菜花.png">
  <title>我的店铺</title>
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
  <div class="py-4">
    <div class="container">
      <div class="row" style="">
        <?php
          foreach ($shop_info as $val) {
        ?>
            <div class=""><img class="d-block ml-0 rounded" src="<?php echo $val->shop_image ?>" width="95px" height="95px"></div>
            <div class="">
              <h5 class="ml-3 mt-4" style=""><?php echo $val->shop_name ?>&nbsp;</h5>
            </div>
        <?php 
          }
        ?>
      </div>
    </div>
  </div>
  <div class="mb-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h5 class="">全部商品</h5>
        </div>
      </div>
    </div>
  </div>
  <?php
    foreach ($items as $val) {
      if($val->state==1 && $val->pass==1 && $val->complain==0){
  ?>
        <div class="pb-3">
          <div class="container">
            <div class="row py-2" style="	box-shadow: 2px 2px 4px  gray;	background-image: linear-gradient(to bottom, #FFFAFA, #FFFAFA);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
              <div class="rounded col-md-3" style=""><img class="d-block ml-4" src="<?php echo $val->item_image ?>" width="230px" height="140px"></div>
              <div class="col-md-3">
                <h6 class="mt-2"><?php echo $val->item_name ?></h6>
              </div>
              <div class="col-md-2">
                <h6 class="mt-4">￥<?php echo $val->price ?></h6>
              </div>
              <div class="col-md-2">
                <h6 class="mt-4">产地：<?php echo $val->country ?></h6>
              </div>
              <form class="col-md-1" action="item/changeitem/<?php echo $val->item_id ?>" method="post">
                <button type="submit" class="btn btn-primary mt-5">编 辑</button>
              </form>
              <form class="col-md-1" action="item/deletei/<?php echo $val->item_id ?>" method="post">
                <button type="submit" class="btn btn-danger mt-5">删 除</button>
              </form>
            </div>
          </div>
        </div>
  <?php 
    }
  }
  ?>
  
  <div class="py-1" >
    <div class="container">
      <div class="row">
        <div class="col-md-11 mx-auto">
          <div class="list-group">
            <a href="item/show_newitem" class="list-group-item list-group-item-action flex-column align-items-start" style="	min-height: 90px;	box-shadow: 0px 0px 4px  gray;">
              <p class="ml-5 py-3 px-4">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;添&nbsp; 加&nbsp; 商&nbsp; 品</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-1 mx-auto"><i class="fa fa-spin fa-3x mx-auto fa-cog text-primary"></i></div>
      </div>
    </div>
  </div>
</body>

</html>