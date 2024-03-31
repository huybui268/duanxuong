<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sửa sản phẩm</title>
</head>

<body>
    <div class="containe">
        <h2 class="text-center">Cập nhật danh mục sản phẩm</h2>
        <?php if (isset($one_category)) { ?>
            <form style="width: 50%;" class="mx-auto" action="" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="" class="form-label">Tên Danh Mục</label>
                    <input type="text" name="category_name" value="<?= $one_category['category_name'] ?>" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label for="">Trạng thái :</label>
                    <select name="trang_thai" id="">
                        <option value="1">Đang hoạt động</option>
                        <option value="0">Ngưng hoạt động</option>
                    </select>
                </div>

                <button type="submit" class=" btn btn-success ">Sửa</button>
            </form>
        <?php } ?>
    </div>
</body>

</html>