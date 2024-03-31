<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Thêm Sách</title>
</head>

<body>
    <div class="containe">
        <h2 class="text-center">Thêm danh sách</h2>

        <form style="width: 50%;" class="mx-auto" action="" method="post" enctype="multipart/form-data">
        
            <div class="mb-3">
                <label for="" class="form-label">Tên Sản Phẩm :</label>
                <input type="text" name="name" placeholder="" class="form-control">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Giá sản phẩm:</label>
                <input type="text" name="price" placeholder="" class="form-control">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Hình ảnh :</label>
                <input type="file" name="image" placeholder="" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Danh mục sản phẩm</label>
                <select name="id_category" id="">
                    <option value="">[chọn danh mục]</option>
                    <?php foreach($list_category as $value) :?>
                        <option value="<?=$value['id']?>"><?=$value['category_name'] ?></option>
                    <?php endforeach?>
                </select>
            </div>

            <button type="submit" class=" btn btn-success ">Thêm</button>
            <a class=" btn btn-success " href="index.php?url=list-product">Danh Sách</a>
        </form>
    </div>
</body>

</html>