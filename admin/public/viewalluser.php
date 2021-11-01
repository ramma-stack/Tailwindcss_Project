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
    <div class="grid grid-cols-8 mx-5 mt-5 gap-10">
    <?php
    $var = $user->get_all(0);
    foreach ($var as $key) { ?>
            <div class="col-span-8 bg-white sm:col-span-4 xl:col-span-2 shadow-lg shadow-gray-900 rounded-lg overflow-hidden">
                <div class="overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-40 w-full text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="m-5">
                    <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold"><?= $key->username; ?></h3>
                    <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold"><?= $key->email; ?></h3>
                    <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold"><?= $key->rule == 0 ? "Admin" : "Editor"; ?></h3>
                    <div class="flex justify-between my-4">
                        <a href="?Delete_id=<?= $key->id ?>" class="btn text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
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