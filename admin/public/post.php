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
<section class="pt-20 px-8 w-full">
    <div class="bg-white rounded-xl mx-5 mt-5">
        <form class="flex flex-col p-5" action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <label for="Default Form For Post" class="font-bold">Default Form For Post</label>
            <label for="Let's Start" class="text-gray-500 text-sm py-3">Let's Start</label>
            <label for="Title" class="text-gray-600 py-3 text-sm">Title</label>
            <input class="outline-none border transition-all duration-500 border-gray-300 focus:border-blue-400 text-gray-600 rounded-md pl-5 p-2.5 text-sm" placeholder="Title" type="text" name="" id="">
            <label for="Title" class="text-gray-600 py-3 text-sm">Title</label>
            <input class="outline-none border transition-all duration-500 border-gray-300 focus:border-blue-400 text-gray-600 rounded-md pl-5 p-2.5 text-sm" placeholder="Title" type="text" name="" id="">
            <label for="Title" class="text-gray-600 py-3 text-sm">Title</label>
            <input class="outline-none border transition-all duration-500 border-gray-300 focus:border-blue-400 text-gray-600 rounded-md pl-5 p-2.5 text-sm" placeholder="Title" type="text" name="" id="">
            <label for="Title" class="text-gray-600 py-3 text-sm">Title</label>
            <input class="file" type="file" name="file">
            <button class="bg-blue-800 text-lg w-1/4 my-4 transition-all duration-300 ring-2 ring-white hover:ring-blue-500 text-white rounded-xl p-2" name="post">Post</button>
        </form>
    </div>
</section>
</section>

<?php require_once("../includes/footer.php"); ?>