<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="<?php echo site_url(); ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/Untitled.css">
  <title>登录</title>
  <link rel="icon" href="assets/images/菜花.png">
</head>

<body >
  <div class="py-5 text-center" style=" background-image: url(assets/images/背景.jpg);  background-position: top left;  background-size: 100%;  background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-6 col-10 bg-white p-4">
          <h1 class="mb-4"><b style="">登&nbsp; 录</b></h1>
                <!-- 控制器名/方法名 -->
          <form action="user/do_login" method="post">
            <div class="form-group form-row">
              <label for="form16" class="col-sm-2 col-form-label">用户名</label>
              <div class="col-sm-10">
                <input name="name" type="text" class="form-control" id="form16">
              </div>
            </div>
            <div class="form-group mb-3">
              <div class="form-group form-row">
                <label for="form17" class="col-sm-2 col-form-label">密&nbsp; &nbsp;码</label>
                <div class="col-sm-10">
                  <input name="pwd" type="password" class="form-control" id="form17">
                </div>
              </div>
              <small class="form-text text-muted text-right">
                <a href="user/reg">还没有账号？前去注册</a>
              </small>
            </div>
            <button type="submit" name="sub" class="btn btn-primary">确&nbsp; 定</button>
          </form>

        </div>
      </div>
    </div>
  </div>

  <div class="py-1">
    <div class="container">
      <div class="row pl-2">
        <div class="col-md-1 mx-auto" style=""><i class="fa fa-spin fa-3x mx-auto d-inline fa-lock pl-2 text-warning"></i></div>
      </div>
    </div>
  </div>

  <div class="py-3" style=" background-image: linear-gradient(to bottom, #FFFAF0, #FFFAF0); background-position: top left;  background-size: 100%;  background-repeat: repeat;">
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