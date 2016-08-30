<?php
require_once "photos.php";
?>

<html>
<head></head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="photos[]" multiple="multiple"/><br/>
        <input type="submit" value="Отправить">
    </form>

    <div style="width: 100%">
        <?php showGallery_2(3);?>

    </div>
</body>
</html>