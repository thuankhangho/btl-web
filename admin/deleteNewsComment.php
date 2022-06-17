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
        $news_id = $_GET['news_id'];
        echo "<script>
        if (confirm('Bạn có chắc muốn xóa bình luận?') == true)
        {  
            window.location.href = 'confirmDeleteNewsComment.php?id=$id&news_id=$news_id';
        }
        else window.location.href = '../newsInfo.php?news_id=$news_id';
    </script>";
    ?>
</body>
</html>