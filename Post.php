<?php include 'templates/header.php';?>
<div class="container w-3/4 mx-auto mt-5">
<div class="flex flex-col justify-start">
<?php
            require 'models/Post.php';
            $id = $_GET['id'];
            $posts = new Post();
            $post = $posts->get_post($id); ?>
             <h1 class="mb-5 text-4xl text-center"><?php echo $post['title'];?></h1>
             <img src="img/<?php echo $post['image'];?>" class="w-1/2 mx-auto rounded-xl" alt="...">
             <div class="flex flex-col justify-start p-3 mt-4">
             <p class=""><?php echo $post['date'];?></p>
             <div>
             <p class="font-bold">
             <?php echo $post['extract'];?>
             </p>
             </div>
             <div>
             <?php echo $post['body'];?>
             </div>

             </div>

</div>
</div>
<?php include 'templates/footer.php';?>