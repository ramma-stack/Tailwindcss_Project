<?php require_once("../includes/nav.php");
in(1); ?>
<?php
if (isset($_GET['Delete_id'])) {
    $Delete_id = $_GET['Delete_id'];
    $query = $user->delete("`id` = '$Delete_id'");
    if ($query) {
        echo "Delete Success";
    } else {
        echo "Delete Fail";
    }
}
?>
<section class="py-20 px-8 w-full">
    <div class="grid grid-cols-10 mx-5 mt-5 gap-10">
        <?php
        $var = $upload->get_all(0);
        foreach ($var as $key) { ?>
            <div class="flex col-span-10 bg-white xl:col-span-5 rounded-lg overflow-hidden">
                <div class="w-40 overflow-hidden">
                    <img class="h-48 object-cover w-full" src="../images/<?= $key->fileName ?>" alt="">
                </div>
                <div class="m-5 w-full flex justify-between">
                    <div>
                        <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold"><?= $key->title; ?></h3>
                        <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold"><?= $key->price; ?></h3>
                        <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold"><?= $key->price; ?></h3>
                        <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold"><?= $key->price; ?></h3>
                    </div>
                    <div class="flex flex-col justify-between">
                        <a href="?Delete_id=<?= $key->id ?>" class="btn1 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Edit Post</a>
                        <a href="?Delete_id=<?= $key->id ?>" class="btn2 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            preview Post</a>
                        <a href="?Delete_id=<?= $key->id ?>" class="btn text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Delete Post</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
</section>

<?php require_once("../includes/footer.php"); ?>