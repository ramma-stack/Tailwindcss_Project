<?php require_once("../includes/nav.php"); in(2);?>
<?php
    if(isset($_POST['submit'])){
        // echo $session->user_id;
        // $upload->user_id = $session->user_id;
        $upload->title = "shert";
        $upload->price = "10000";
        $image = $_FILES['file'];
        echo $upload->scan_image($image);
    }
?>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
<input type="file" name="file">
<button name="submit">submit</button>
</form>

<?php require_once("../includes/footer.php"); ?>