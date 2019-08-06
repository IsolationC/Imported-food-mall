<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="<?php echo site_url(); ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/Untitled.css">
  <title>注册</title>
  <link rel="icon" href="assets/images/菜花.png">
</head>

<body >
  <div class="py-5 text-center" style="	background-image: linear-gradient(to bottom, rgba(126, 138, 116), rgba(126, 138, 116));	background-position: top left;	background-size: 100%;	background-repeat: repeat;	box-shadow: 0px 0px 4px  black;">
    <div class="container">
      <div class="row rounded py-3" style="	background-image: linear-gradient(to bottom, #fff, #fff);	background-position: top left;	background-size: 100%;	background-repeat: repeat;	box-shadow: 2px 2px 4px  gray;">
        <div class="mx-auto col-lg-6 col-10">
          <h1 class="mb-3"><b>注&nbsp; 册</b></h1>
          <form class="text-left" action="user/do_reg" method="post">
            <div class="form-group"> 
              <label for="form16">用 户 名：</label>
              <input type="text" class="form-control" id="form16" name="name" placeholder="请填写用户名"> 
            </div>
            <div class="form-group"> 
              <label for="form17">密 码：</label> 
              <input type="password" class="form-control" id="form17" name="pwd" placeholder="请填写密码"> 
            </div>
            <div class="form-group"> 
              <label for="form18">收 货 地 址：</label> 
              <input type="text" class="form-control" id="form18" name="add" placeholder="收货地址要精确到门牌号"> 
            </div>
            <div class="form-group"> 
              <label for="form18">联 系 方 式：</label> 
              <input type="text" class="form-control" id="form18" name="phone" placeholder="请填写联系电话"> 
            </div>
            <button type="submit" class="btn btn-primary mt-2">提&nbsp; 交</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1">
    <div class="container">
      <div class="row pl-2">
        <div class="col-md-1 mx-auto" style=""><i class="fa fa-spin fa-3x mx-auto fa-key d-inline text-primary"></i></div>
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