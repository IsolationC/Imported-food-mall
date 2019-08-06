<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="<?php echo site_url(); ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/Untitled.css">
  <link rel="icon" href="assets/images/菜花.png">
  <title>搜索结果</title>
</head>

<body >
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
  <div class="pt-3 pb-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h5 class="">查询结果</h5>
        </div>
      </div>
    </div>
  </div>
  <?php
    foreach ($search_result as $val) {
      if($val->state==1 && $val->pass==1 && $val->complain==0){
  ?>
      <div class="mt-2 mb-1">
        <div class="container">
          <div class="row" style="	background-image: linear-gradient(to bottom, #FFFFF0, #FFFFF0);	background-position: top left;	background-size: 100%;	background-repeat: repeat;	box-shadow: 1px 2px 4px  gray;">
            <div class="py-2 pl-4 col-md-2" style=""><img class="d-block ml-3" src="<?php echo $val->item_image ?>" width="230px" height="140px"></div>
            <div class="offset-md-1 py-3 col-md-3" style="">
              <h6 class="" contenteditable="true"><?php echo $val->item_name ?></h6>
            </div>
            <div class="col-md-4 pt-5" style="">
              <div class="row">
                <div class="col-md-4" style="">
                  <h6 class="">￥<?php echo $val->price ?></h6>
                </div>
                <div class="mt-4 col-md-8" style="">
                  <h6 class="">产 地：<?php echo $val->country ?></h6>
                </div>
              </div>
            </div>
            <form class="p-2 col-md-2" action="item/item_info/<?php echo $val->item_id ?>" method="post">
              <button type="submit" class="btn btn-primary ml-3 mt-5">查看详情</button>
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
      <div class="row pl-2">
        <div class="col-md-1 mx-auto" style=""><i class="fa fa-spin mx-auto d-inline pl-2 fa-search fa-2x text-dark"></i></div>
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