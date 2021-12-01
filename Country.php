<?php include 'templates/header.php';?>
<div class="container w-3/4 mx-auto mt-5">
<?php
      require 'models/Country.php';
      $id = $_GET['id'];
      $country = new Country();
      $count= $country->get_country($id);
  
    ?>
<h1 class="text-3xl text-center titulo"><?php echo $count['name'];?></h1>
</div>
<div class="container flex flex-row mx-auto mt-2">
<div class="grid w-4/5 grid-cols-1 gap-8 mt-5 md:grid-cols-2 lg:grid-cols-3">
<?php
        require 'models/Post.php';
        $country_id = $_GET['id'];
        $posts = new Post();
        $pos=$posts->get_posts($country_id);
        foreach($pos as $po){?>
    
        <div class="mt-5 border rounded-lg shadow-lg outline-none respuesta">
            <img src="img/<?php echo $po['image'];?>" class="" alt="...">
            <div class="p-2">
              <h3 class="text-2xl"><?php echo $po['title'];?></h3>
              
              <p class="text-xl"><?php echo $po['category'];?></p>
              <p class="font-bold"><?php echo $po['extract'];?></p>
             
            </div>
            <div class="flex justify-center mb-5">
            <a href="Post.php?id=<?php echo $po['id'];?>" class="mt-5 text-center hover:text-gray-500">learn more</a>
            </div>
             </div>
        

       <?php }
        ?>

</div>
<div class="container flex flex-col items-center justify-start w-1/5 mx-auto mt-5">
<h1 class="mb-5 text-2xl text-center titulo">Categories</h1>
<?php 
   require 'models/Category.php';
   $categoriess = new Category();
   $cats = $categoriess->get_categories();
   foreach($cats as $cat){?>
         <a class="mb-5" href="Category.php?id=<?php echo $cat['id'];?>"><?php echo $cat['name'];?></a>
 <?php  } ?>

  
</div>
</div>
<?php include 'templates/footer.php';?>
