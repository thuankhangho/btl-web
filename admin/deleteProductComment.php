<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <?php 
        $id = $_GET['id'];
        $prod_id = $_GET['prod_id'];
        echo "<script>
        if (confirm('Bạn có chắc muốn xóa bình luận?') == true)
        {  
            window.location.href = 'confirmDeleteProductComment.php?id=$id&prod_id=$prod_id';
        }
        else window.location.href = '../productInfo.php?prod_id=$prod_id';
    </script>";
    ?>
</body>
</html>