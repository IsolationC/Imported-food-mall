<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="<?php echo site_url(); ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/Untitled.css">
  <title>管理员登录</title>
  <link rel="icon" href="assets/images/汉堡.png">
</head>

<body >
  <div class="py-5" style="background-image: url('https://static.pingendo.com/cover-stripes.svg'); background-position:left center; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="p-5 col-lg-6">
          <h1 class="mb-3">进口食品商城管理</h1>
          <form action="admin/admin_login" method="post">
            <div class="form-group"> <input type="text" class="form-control" placeholder="管理员用户名" id="form11" name="name"> </div>
            <div class="form-group"> <input type="password" class="form-control" placeholder="密码" id="form12" name="pwd"> <small class="form-text text-muted text-right"></small> </div> <button type="submit" class="btn btn-dark mt-1">确 定</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>