<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sửa Sản Phẩm</title>
</head>

<body>
    <div class="containe">
        <h2 class="text-center">Sửa Sản Phẩm</h2>
        <?php if (isset($one_product)) { ?>
            <form style="width: 50%;" class="mx-auto" action="" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="" class="form-label">Tên sản phẩm:</label>
                    <input type="text" name="name" value="<?= $one_product['name'] ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Giá Sản Phẩm :</label>
                    <input type="text" name="price" value="<?= $one_product['price'] ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Hình ảnh :</label>
                    <img style="width :80px;" src="<?= $one_product['image'] ?>" alt="">
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Danh mục Sản Phẩm</label>
                    <select name="id_category" id="">
                        <?php foreach ($list_category as $value) : ?>
                            <option <?= $one_product['id_category'] == $value['id'] ? 'selected' : '' ?> value="<?= $value['id'] ?>"><?= $value['category_name'] ?></option>
                        <?php endforeach ?>
                    </select>
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