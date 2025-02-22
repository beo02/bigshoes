<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>ADMIN</title>
	<!-- Bootstrap Styles-->
    <link href="../css/admin/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="../css/admin/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="../css/admin/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><strong style = "margin-left: 40px;">BIG SHOES</strong></a>
            </div>
           
    <!-- Nav bar-->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Cài đặt</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="dang-xuat.php"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>

        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li>
                        <a href="thong-ke-list.php"><i class="fa fa-dashboard"></i>TRANG CHỦ</a>
                    </li>
                    <li>
                        <a href="loai-hang-list.php"><i class="fa fa-list-alt" aria-hidden="true"></i>LOẠI HÀNG</a>
                    </li>
                    <li>
                        <a href="hang-hoa-list.php"><i class="fa fa-qrcode"></i>HÀNG HÓA</a>
                    </li>
                    
                    <li>
                        <a href="khach-hang-list.php"><i class="fa fa-user"></i>KHÁCH HÀNG</a>
                    </li>
                    <li>
                        <a href="binh-luan-list.php"><i class="fa fa-comment-o" aria-hidden="true"></i>BÌNH LUẬN</a>
                    </li>
                    <li>
                        <a href="hoa-don-list.php"><i class="fa fa-edit"></i>ĐƠN HÀNG</a>
                    </li>       
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		  <div class="header"> 
                        <div class="page-header">
                            <h1>QUẢN LÝ HÀNG HÓA</h1>
                            <p>Dưới đây là danh sách các khách hàng đã được thêm vào: </p>

                            <!-- /. XỬ LÝ CODE PHP  -->
                            <?php
                                require_once ('khach-hang.php');

                                $items = khach_hang_select_all();
                            ?>
                            <!-- /. CONTENT  -->
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>TÊN ĐĂNG NHẬP</th>
                                    <th>HỌ VÀ TÊN</th>
                                    <th>MẬT KHẨU</th>
                                    <th>EMAIL</th>
                                    <th>ĐỊA CHỈ</th>
                                    <th>VAI TRÒ</th>
                                    <th>HÀNH ĐỘNG</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php foreach($items as $item){ 
                                     extract($item);
                                    ?> 
                                  <tr>
                                    <td><?=$ma_kh?></td>
                                    <td><?=$ho_ten?></td>
                                    <td><?=$mat_khau?></td>
                                    <td><?=$email?></td>
                                    <td><?=$dia_chi?></td>
                                    <td><?php if($vai_tro == 0){
                                        echo "Khách hàng";
                                    }else{
                                        echo "Admin";
                                    } ?></td>
                                    <td> 
                                        <a href="khach-hang-update.php?ma_kh=<?=$ma_kh?>"><button class="btn btn-primary">Sửa</button></a>
                                        <a onclick = "return confirm('Bạn có chắc chắn muốn xóa ?')" href="khach-hang-delete.php?ma_kh=<?=$ma_kh?>"><button class="btn btn-danger">Xóa</button></a>
                                    </td>
                                  </tr>
                                <?php } ?>
                                </tbody>
                              </table>
                            <a href="khach-hang-new.php"><button class="btn btn-danger">Thêm mới</button></a>
                        </div>
		</div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="../css/admin/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="../css/admin/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="../css/admin/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="../css/admin/js/custom-scripts.js"></script>
    
   
</body>
</html>
