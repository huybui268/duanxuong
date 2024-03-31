<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sản Phẩm </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
    
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?url=list-product">Sản Phẩm</a>
                </li>
            </ul>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?url=list-category">Danh Mục Sản Phẩm</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="login.php">Đăng xuất</a>
                </li>
            </ul>
        </div>
    </nav>

<h2 class="text-center">Danh Sách Sản Phẩm</h2>
<a href="index.php?url=add-product" class="btn btn-success">Thêm</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên Sản Phẩm</th>
                <th scope="col">Gía Sản Phẩm</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Tên Danh Mục</th>
                <th scope="col">Trang Thái</th>
                <th scope="col">Chức Năng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list_product as $value) : ?>
            <tr>
                <th scope="row"><?=$value['id']?></th>
                <td><?=$value['name'] ?></td>
                <td><?=$value['price'] ?></td>
                <td><img style="width:50px ;" src="<?=$value['image']?>" alt=""></td>
                <td><?=$value['category_name'] ?></td>
                <td>
                    <?php if($value['trang_thai'] == 1){
                        echo "Đang hoạt động" ;
                    }else{
                        echo "Ngưng hoạt động" ;
                    } ?>
                </td>
                <td>
                    <a href="index.php?url=update-product&id=<?=$value['id']?>" class="btn btn-warning">Sửa</a>
                    <a onclick="return confirm('Ban co chac muon xoa khong') " href="index.php?url=delete-product&id=<?=$value['id']?>" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>
</body>

</html>