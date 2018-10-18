<?php
include ('./users.php');

$obj_users = new users();

$keyword = '';
if ($_GET['keyword']) {

    $keyword = $_GET['keyword'];
    
}

$users = $obj_users->getUsers($keyword);
//xoa
$id ='';
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $obj_users->deleteUser($id);
}
?>
<html lang="en"><head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="public/css/font-awesome.min.css" rel="stylesheet">
        <link href="public/css/type-12.css" rel="stylesheet" type="text/css">
        <!--Ket Noi File Less -->

    </head><body>
        <header>
            <div class="type-12">
                <!--Begin Header Top-->
                <div class="container">
                    <div class="col-md-12 boder">
                        <div class="type">Our team</div>

                        <form>
                            <input type="text" name='keyword' placeholder="Nhập từ khóa">

                            <input type='submit' value='Tìm kiếm'>
                        </form>

                        <div class="row">

                            <?php foreach($users as $user): ?>
                            <div class="col-md-4 col-sm-6 sol-xs-12 class">
                                <a href='cau5.php?id=<?php echo $user['id'] ?>'> Xóa </a>
                                <a href='themmoi.php?id=<?php echo $user['id'] ?>'> Cập nhật </a>
                                <div class="hover">
                                <div class="images">
                                    <img src="public/images/photo_1.jpg" alt="imgAlt">
                                </div>
                                <div class="overlays">
                                <div class="content">

                                    <p>Senior salesman with 15 years of experience. He knows everything about the products he offers.</p>
                                </div>
                                </div>
                            </div>
                                <div class="tieude">
                                    <a href="#"><h3><?php echo $user['username'] ?></h3></a>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>

                    </div>

                </div>

                <!--End Header Top-->


            </div>
        </header>
</body></html>