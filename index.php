<?php include 'templates/header.php';?>
<div class="container w-3/4 mx-auto mt-5">

  <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
  <?php 
							$destinations = new Destination();
							$dests = $destinations->get_destinations();
							foreach ($dests as $dest) {?>
                              
                              <div class="p-2 mt-2 text-center bg-white border rounded-lg shadow-lg hover:bg-gray-900 hover:text-white">
                              
                                 
                                  
                                  <a href="Destination.php?id=<?php echo $dest['id'];?>">
                                  <?php echo $dest['name'];?>
                                </a>








                              </div>
                              <?php 							 }?>
  </div>
  
</div>


<?php include 'templates/footer.php';?>

	

