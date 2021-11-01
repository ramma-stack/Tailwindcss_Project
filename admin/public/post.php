<?php require_once("../includes/nav.php");
in(1); ?>
<?php
if (isset($_POST['submit'])) {
    // echo $session->user_id;
    // $upload->user_id = $session->user_id;
    $upload->title = "shert";
    $upload->price = "10000";
    $image = $_FILES['file'];
    echo $upload->scan_image($image);
}
?>
<section class="m-40">
    <div id="example"></div>
</section>
</section>
<div class="w-250">
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button name="submit">submit</button>
    </form>
</div>

<?php require_once("../includes/footer.php"); ?>