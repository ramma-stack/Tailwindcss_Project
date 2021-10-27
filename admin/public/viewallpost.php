<?php require_once("../includes/nav.php"); in(2);?>
<?php
    if(isset($_GET['Delete_id'])){
        $Delete_id = $_GET['Delete_id'];
        $query = $upload->delete("`post_id` = '$Delete_id'");
        if($query){
            echo "Delete Success";
        }else{
            echo "Delete Fail";
        }
    }
?>
<section class="p-5 lg:w-1/3 w-full mx-1 rounded-2xl bg-gradient-to-t from-purple-400 to-blue-500">
<?php
$var = $upload->get_all();
foreach ($var as $key ) {?>
 <div class="grid grid-cols-8 mx-5 mt-5 gap-10">
                <div class="col-span-8 bg-white sm:col-span-4 xl:col-span-2 shadow-lg shadow-gray-900 rounded-lg overflow-hidden">
            <div class="overflow-hidden">
            <img src="../images/<?= $key->fileName; ?>" alt="">
            </div>
            <div class="m-5">
               <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold"><?= $key->title; ?></h3>
               <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold"><?= $key->price; ?></h3>
               <?php $users = $user->get_id("`id` = '$key->user_id'");?>
                <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold"><?= $users->username; ?></h3>
                <div class="flex justify-between my-4">
                    <button class="btn1 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                          </svg>
                          Update Post</button>
                        <a href="?Delete_id=<?= $key->post_id ?>" class="btn text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                              </svg>
                            Delete Post</a>
                </div>
            </div>
        </div>
    </div>
 <?php }?>
 </section>

<?php require_once("../includes/footer.php"); ?>