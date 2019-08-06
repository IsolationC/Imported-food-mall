<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="<?php echo site_url(); ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/Untitled.css">
  <link rel="icon" href="assets/images/菜花.png">
  <title>我的消息</title>
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
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h5 class="text-primary">全部消息</h5>
        </div>
      </div>
    </div>
  </div>
  <?php
    foreach ($item_messages as $val) {
      if($val->state==1 && $val->pass==0 && $val->complain==0){
  ?>
        <div class="pb-3">
          <div class="container">
            <div class="row rounded border border-info" style="	background-image: linear-gradient(to bottom, #FFF5EE, #FFF5EE);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
              <div class="my-2 col-md-2"><img class="d-block rounded ml-5" src="<?php echo $val->item_image ?>" width="100px" height="100px"></div>
              <div class="col-md-4">
                <h6 class="ml-3 mt-3"><?php echo $val->item_name ?></h6>
              </div>
              <div class="col-md-4 pt-2">
                <h5 class="ml-3 mt-4"><b>该商品未通过审核</b></h5>
              </div>
            </div>
          </div>
        </div>
    <?php 
      }else if($val->state==1 && $val->pass==1 && $val->complain==0){
    ?>
        <div class="pb-3" >
          <div class="container">
            <div class="row rounded border border-info" style="	background-image: linear-gradient(to bottom, #E1FFFF, #E1FFFF);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
              <div class="my-2 col-md-2"><img class="d-block rounded ml-5" src="<?php echo $val->item_image ?>" width="100px" height="100px"></div>
              <div class="col-md-4">
                <h6 class="ml-3 mt-3"><?php echo $val->item_name ?></h6>
              </div>
              <div class="col-md-4 pt-2">
                <h5 class="ml-3 mt-4"><b>该商品已通过审核</b></h5>
              </div>
            </div>
          </div>
        </div>
    <?php 
      }else if($val->complain==2){
    ?>
        <div class="pb-3">
          <div class="container">
            <div class="row rounded border border-info" style="	background-image: linear-gradient(to bottom, #FFFACD, #FFFACD);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
              <div class="my-2 col-md-2"><img class="d-block rounded ml-5" src="<?php echo $val->item_image ?>" width="100px" height="100px"></div>
              <div class="col-md-4">
                <h6 class="ml-3 mt-3"><?php echo $val->item_name ?></h6>
              </div>
              <div class="col-md-4 pt-2">
                <h5 class="ml-3 mt-4">该商品已被投诉删除</h5>
              </div>
            </div>
          </div>
        </div>
  <?php
      }
  }
  ?>

  <?php
    foreach ($order_messages as $val) {
      if($val->order_condition=='0'){
  ?>
        <div class="pb-3">
          <div class="container">
            <div class="row rounded border border-info" style="	background-image: linear-gradient(to bottom, #F0F8FF, #F0F8FF);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
              <div class="col-md-1">
                <h5 class="mt-1">新订单</h5>
              </div>
              <div class="col-md-1"><img class="d-block my-3 rounded" src="<?php echo $val->item_image ?>" width="100px" height="100px"></div>
              <div class="col-md-2">
                <h6 class="ml-3 mt-4"><?php echo $val->item_name ?></h6>
              </div>
              <div class="col-md-2">
                <h6 class="mt-4"><?php echo $val->user_name ?></h6>
              </div>
              <div class="col-md-4">
                <div class="row">
                  <div class="col-md-6">
                    <h6 class="mt-4"><?php echo $val->address ?></h6>
                  </div>
                  <div class="col-md-6">
                    <h6 class="mt-4"><?php echo $val->tel ?></h6>
                  </div>
                </div>
              </div>
              <form class="col-md-2" action="order/confirm_order/<?php echo $val->order_id ?>" method="post">
                <button type="submit" name="sub" class="btn mt-5 btn-primary">确认订单</button>
              </form>
            </div>
          </div>
        </div>
  <?php
      }
    }
  ?>
  <div class="py-3 text-primary">
    <div class="container">
      <div class="row">
        <div class="col-md-1 mx-auto"><i class="fa fa-spin fa-3x mx-auto fa-cog"></i></div>
      </div>
    </div>
  </div>
</body>

</html>