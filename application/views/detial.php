<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php echo site_url(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/Untitled.css">
    <link rel="icon" href="assets/images/菜花.png">
    <title>商品详情</title>
</head>

<body style="	box-shadow: 0px 0px 4px  white;">
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
    <?php
        foreach ($item_info as $val) {
    ?>
            <div class="mb-2" style="	background-image: linear-gradient(to bottom, #F5F5DC, #F5F5DC);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                        <img class="card-img" alt="Card image" height="400px" src="<?php echo $val->item_image ?>">
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="mb-3" style="">
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                        <div class="card-body" style="">
                        <h5 class="card-title"><?php echo $val->item_name ?></h5>
                        <h6 class="card-subtitle my-2 text-muted">￥<?php echo $val->price ?></h6>
                        <p class="card-text">产 地：<?php echo $val->country ?></p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <?php 
                foreach ($shop_info as $val2) {
            ?>
                <div class="py-2 mb-2">
                    <div class="container">
                    <div class="row" style="">
                        <div class=""><img class="d-block ml-0 rounded" src="<?php echo $val2->shop_image ?>" width="90px" height="90px"></div>
                        <div class="col-md-5"><a class="btn mt-4 btn-link text-dark" href="shop.html"><?php echo $val2->shop_name ?></a></div>
                    </div>
                    </div>
                </div>
            <?php
                }
            ?>
            <div class="mb-2">
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><b> 商品详情</b></div>
                        <div class="card-body">
                        <p><?php echo $val->introduce ?><br></p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            
            <?php
                if($this->session->userdata('logged_in')==TRUE){
            ?>
            <div class="pt-2 pb-4">
                <div class="container">
                <div class="row">
                    <form class="col-md-2" action="cart/addcart/<?php echo $val->item_id ?>" method="post">
                        <button type="submit" name="sub" class="btn btn-primary">加入购物车</button>
                    </form>
                    <form class="col-md-8" action="item/complain/<?php echo $val->item_id ?>" method="post">
                        <button type="submit" name="sub" class="btn btn-danger">举报该商品</button>
                    </form>
                </div>
                </div>
            </div>
    <?php 
            }
        }
    ?>
    <div class="py-1">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h5 class="">用户评价</h5>
            </div>
        </div>
        </div>
    </div>

    <?php
        if($comments){
            foreach ($comments as $val) {
                if($val->order_condition=='1'){
    ?>
  <div class="py-2">
    <div class="container">
      <div class="row" style="	box-shadow: 0px 0px 4px  gray;">
        <div class="col-md-2"><img class="d-block ml-auto my-2 rounded-circle" src="<?php echo $val->image ?>" width="95px" height="95px"></div>
        <div class="col-md-10">
          <h5 class="mt-5"><?php echo $val->user_name ?></h5>
        </div>
        <div class="col-md-12">
          <p class="ml-5 mt-2"><?php echo $val->comment ?></p>
        </div>
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
                            <h6 class="text-muted">暂无评价...</h6>
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
        <div class="col-md-1 mx-auto" style=""><i class="fa fa-spin mx-auto fa-2x d-inline text-dark fa-barcode pl-2"></i></div>
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