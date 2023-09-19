<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="upload[img]" />
    <input type="file" name="upload[img2]" />
    <input type="file" name="upload[img3]" />
    <input type="submit" />
</form>
    <?php
    echo "<pre>"; print_r($_FILES['upload']);

?>