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
<section class="pt-14 px-8 w-full">
    <div class="grid grid-cols-10 mx-5 mt-5 gap-10">
        <?php
        $var = $upload->get_all(0);
        foreach ($var as $key) {
            if ($key->user_id == $session->user_id) { ?>
                <div class="col-span-10 bg-white sm:col-span-5 xl:col-span-2 shadow-lg shadow-gray-900 rounded-lg overflow-hidden">
                    <div class="overflow-hidden">
                        <img src="../images/<?= $key->fileName ?>" alt="">
                    </div>
                    <div class="m-5">
                        <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold"><?= $key->title; ?></h3>
                        <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold"><?= $key->price; ?></h3>
                        <div class="flex justify-between my-4">
                            <a href="?Delete_id=<?= $key->id ?>" class="btn text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                                Delete Post</a>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>
    </div>
</section>
</section>

<?php require_once("../includes/footer.php"); ?>