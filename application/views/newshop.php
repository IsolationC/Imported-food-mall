<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="<?php echo site_url(); ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/Untitled.css">
  <title>申请成为店主</title>
  <link rel="icon" href="assets/images/菜花.png">
  <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
    <script>
      //图片上传预览
        function previewImage(file)
        {
          var MAXWIDTH  = 90; 
          var MAXHEIGHT = 90;
          var div = document.getElementById('preview');
          if (file.files && file.files[0])
          {
              div.innerHTML ='<img id=imghead onclick=$("#previewImg").click()>';
              var img = document.getElementById('imghead');
              img.onload = function(){
                var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                img.width  =  rect.width;
                img.height =  rect.height;
                img.style.marginTop = rect.top+'px';
              }
              var reader = new FileReader();
              reader.onload = function(evt){img.src = evt.target.result;}
              reader.readAsDataURL(file.files[0]);
          }
          else //兼容IE
          {
            var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
            file.select();
            var src = document.selection.createRange().text;
            div.innerHTML = '<img id=imghead>';
            var img = document.getElementById('imghead');
            img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
            var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
            status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
            div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
          }
        }
        function clacImgZoomParam( maxWidth, maxHeight, width, height ){
            var param = {top:0, left:0, width:width, height:height};
            if( width>maxWidth || height>maxHeight ){
                rateWidth = width / maxWidth;
                rateHeight = height / maxHeight;
                
                if( rateWidth > rateHeight ){
                    param.width =  maxWidth;
                    param.height = Math.round(height / rateWidth);
                }else{
                    param.width = Math.round(width / rateHeight);
                    param.height = maxHeight;
                }
            }
            param.left = Math.round((maxWidth - param.width) / 2);
            param.top = Math.round((maxHeight - param.height) / 2);
            return param;
        }
    </script>
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

  <form action="user/become_shopkeeper" method="post">
    <div class="py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-1">
            <img class="d-block rounded" src="assets/images/加2.png" width="95px" height="95px" onclick="$('#previewImg').click();">
          </div>
          <input type="file" onchange="previewImage(this)" style="display: none;" id="previewImg" name="image">
          <div class="col-md-8">
            <div class="form-inline">
              <div class="input-group">
                <input type="text" class="form-control ml-2 mt-4" id="inlineFormInputGroup" name="name" placeholder="店铺名">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-2">
      <div class="container">
        <div class="row">
          <div class="">
            <h5 class="mt-2">添加商品</h5>
          </div>
          <div class="col-md-8">
            <h6 class="text-danger mt-2">* 请先添加一个商品，该商品通过审核后可继续添加商品</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="py-1" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img class="img-fluid d-block mx-auto rounded" src="assets/images/上传.png" style="box-shadow: 0px 0px 4px  black;" onclick="$('#previewImg').click();">     
          </div>
          <input type="file" onchange="previewImage(this)" style="display: none;" id="previewImg" name="item_image">
        </div>
      </div>
    </div>
    <div class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="c_form-h" class="">
              <div class="form-group row"> <label for="inputmailh" class="col-form-label col-1">商 品 名</label>
                <div class="col-5">
                  <input type="text" class="form-control" id="inputmailh" name="item_name"> </div>
              </div>
              <div class="form-group row"> <label for="inputpasswordh" class="col-form-label col-1">价 格</label>
                <div class="col-5">
                  <input type="text" class="form-control" id="inputpasswordh" name="price"> </div>
              </div>
              <div class="form-group row"> <label for="inputpasswordh" class="col-form-label col-1">产 地</label>
                <div class="col-5">
                  <input type="text" class="form-control" id="inputpasswordh" name="country"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="pb-1" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4 class="mb-2" contenteditable="true">商品详情</h4>
            <div>
              <div class="form-group"> 
                <textarea class="form-control" id="form32" rows="3" name="detial"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="py-3">
      <div class="container">
        <div class="row">
          <button type="submit" name="sub" class="btn btn-primary">提&nbsp; 交</button>
        </div>
      </div>
    </div>
  </form>
  <div class="py-3 text-primary">
    <div class="container">
      <div class="row">
        <div class="col-md-1 mx-auto"><i class="fa fa-spin fa-3x mx-auto fa-cog"></i></div>
      </div>
    </div>
  </div>
</body>

</html>