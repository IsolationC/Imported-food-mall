<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php echo site_url(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/Untitled.css">
    <title>评价商品</title>
    <link rel="icon" href="assets/images/菜花.png">
</head>

<body >
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

    <div class="pt-3 pb-2" style="	background-image: linear-gradient(to bottom, #5F9EA0, #5F9EA0);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
        <div class="container">
        <div class="row">
            <div class="col-md-12 text-light">
            <h4 class="" contenteditable="true">商品评价</h4>
            </div>
        </div>
        </div>
    </div>
    <div class="mt-3">
        <div class="container">
        <div class="row">
            <div class="px-4 order-1 order-md-2 col-lg-12">
            <h5 class="mb-2">填写商品评价</h5>
            
                    <!-- 取订单ID可能有问题，键名的问题？ -->
                    <form action="order/do_comment/<?php echo $id ?>" method="post">
                        <div class="form-group"> 
                            <textarea class="form-control" id="form46" rows="3" name="comment"></textarea> 
                        </div> 
                        <button type="submit" class="btn btn-primary">提&nbsp; 交</button>
                    </form>
          
            </div>
        </div>
        </div>
    </div>

    <div class="py-1">
        <div class="container">
        <div class="row pl-2">
            <div class="col-md-1 mx-auto" style=""><i class="fa fa-spin fa-star fa-2x mx-2 text-success"></i></div>
        </div>
        </div>
    </div>
</body>

</html>