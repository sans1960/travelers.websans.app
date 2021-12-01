<?php include 'templates/header.php';?>
<div class="container w-3/4 mx-auto mt-5">
<div class="container flex justify-end mt-5 mb-5">
    <a href="formularios/europe.php">Planning your trip</a>

  </div>
<?php
  
  $destinations = new Destination();
  $id = $_GET['id'];
  $dests = $destinations->get_destination($id);
?>
<h1 class="text-3xl text-center titulo"><?php echo $dests['name'];?></h1>
<div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-6">
<?php
         require 'models/Country.php';
         $destination_id = $_GET['id'];
         $countries = new Country();
         $counts = $countries->get_countries($destination_id);
         foreach($counts as $count){?>
             
               
                     <a class="mt-3 respuesta hover:text-gray-500" href="Country.php?id=<?php echo $count['id'];?>"><?php echo $count['name'];?></a>
               
       

        <?php }
        ?>

</div>
</div>
<div class="container flex flex-col mx-auto mt-2 md:flex-row">
<div class="grid w-4/5 grid-cols-1 gap-8 mt-5 ml-5 md:ml-0 md:grid-cols-2 lg:grid-cols-3">
<?php
        require 'models/Post.php';
        $destination_id = $_GET['id'];
        $posts = new Post();
        $pos=$posts->get_destination_posts($destination_id);
        foreach($pos as $po){?>
    
        <div class="mt-5 border rounded-lg shadow-lg outline-none  respuesta">
            <img src="img/<?php echo $po['image'];?>" class="" alt="...">
            <div class="p-2">
              <h3 class="text-2xl"><?php echo $po['title'];?></h3>
              <h5 class="text-xl"><?php echo $po['country'];?></h5>
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

<div class="container flex flex-col items-center justify-start order-first w-1/5 mx-auto mt-5 md:order-last">
<h1 class="mb-5 text-2xl text-center titulo">Categories</h1>
<div class="flex flex-row flex-wrap md:flex-col">
<?php 
   require 'models/Category.php';
   $categoriess = new Category();
   $cats = $categoriess->get_categories();
   foreach($cats as $cat){?>
         <a class="mb-5 mr-3" href="Category.php?id=<?php echo $cat['id'];?>"><?php echo $cat['name'];?></a>
 <?php  } ?>
</div>



  
</div>

</div>
<?php include 'templates/footer.php';?>