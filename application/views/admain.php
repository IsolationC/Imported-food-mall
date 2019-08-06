<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css"> -->
  <link rel="stylesheet" href="assets/css/Untitled.css">
  <base href="<?php echo site_url(); ?>" />
  <title>商品管理</title>
  <link rel="icon" href="assets/images/汉堡.png">
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container"> <a class="navbar-brand" href="#">
        <i class="fa d-inline fa-cogs"></i>
        <b> 商品管理</b>
      </a> </div>
  </nav>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-3">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item"> <a class="active nav-link" href="" data-toggle="pill" data-target="#tabone">待审核商品</a> </li>
            <li class="nav-item"> <a href="" class="nav-link" data-toggle="pill" data-target="#tabtwo">删除被举报商品</a> </li>
          </ul>
        </div>
        <div class="col-9">
          <div class="tab-content">
          
            <div class="tab-pane fade show active" id="tabone" role="tabpanel">
            <?php
                foreach ($items as $val) {
                    if($val->state==0 && $val->pass==0 && $val->complain==0){
            ?>
              <div class="row">
                <div class="col-md-12">
                  <div class="row mb-2" style="	box-shadow: 0px 0px 3px  gray;">
                    <div class="rounded col-md-4" style=""><img class="d-block my-2 ml-2" src="<?php echo $val->item_image ?>" width="230px" height="140px" ></div>
                    <div class="col-md-5">
                      <h5 class="mt-2"><?php echo $val->item_name ?></h5>
                      <div class="row">
                        <div class="col-md-5">
                          <h6 class="">￥<?php echo $val->price ?></h6>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <h6 class="">产地：<?php echo $val->country?></h6>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-5">
                          <h6 class="">简介：</h6>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <h6 class="mb-2"><?php echo $val->introduce?></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3"><a class="btn ml-4 mt-4 btn-secondary text-white" href="admin/pass/<?php echo $val->item_id ?>">&nbsp; 通过审核&nbsp;&nbsp;</a>
                      <div class="row">
                        <div class="col-md-12"><a class="btn ml-4 mt-2 btn-danger" href="admin/npass/<?php echo $val->item_id ?>">不通过审核</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php
                    }
                }
            ?> 
            </div>
            
            <div class="tab-pane fade" id="tabtwo" role="tabpanel">
            <?php
                foreach ($items as $val) {
                    if($val->complain==1){
            ?>
              <div class="col-md-12">
                <div class="row mb-2" style="	box-shadow: 0px 0px 3px  gray;">
                  <div class="rounded col-md-4" style=""><img class="d-block my-2 ml-2" src="<?php echo $val->item_image ?>" width="230px" height="140px"></div>
                  <div class="col-md-5">
                    <h5 class="mt-2"><?php echo $val->item_name ?></h5>
                    <div class="row">
                      <div class="col-md-5">
                        <h6 class="">￥<?php echo $val->price ?></h6>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <h6 class="">产地：<?php echo $val->country ?></h6>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <h6 class="">简介：</h6>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <h6 class="mb-2"><?php echo $val->introduce ?></h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="row">
                      <div class="col-md-12"><a class="btn btn-danger ml-4 mt-5" href="admin/delete_item/<?php echo $val->item_id ?>">删除该商品</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
                    }
                }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>