<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        $id = $_GET['id'];
        echo "<script>
        if (confirm('Bạn có chắc muốn xóa dữ liệu?') == true)
        {  
            window.location.href = 'confirmDeleteProduct.php?id=$id';
        }
        else window.location.href = 'productManagement.php';
    </script>";
    ?>
</body>
</html>
