<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>plantilla </title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  
 
    
  </head>
  <body>
    <nav class="menu-movil" id="movil">
      <div class="">
          <div class="flex justify-end mt-5 mr-5" id="icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </div>
          <div class="flex flex-col justify-center">
              <div class="flex justify-center mt-10">
                  <a href="" class="text-xl text-gray-500 hover:text-gray-300">Home</a>
              </div>
              <div class="flex justify-center mt-10">
                  <a href="" class="text-xl text-gray-500 hover:text-gray-300">Taylor-made trips</a>
              </div>
              <div class="flex justify-center mt-14 dropdown2">
                <button class="inline-flex items-center px-4 py-2 mb-10 rounded text-dark">
                  <span class="mr-1 text-xl text-gray-500">Destinations</span>
                  <svg class="w-8 h-4 text-gray-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                </button>
                <ul class="absolute hidden pt-8 text-center text-dark dropdown-menu2">
           
                <?php require 'config/db.php'; ?>
                        <?php require 'models/Destination.php'; ?>
							<?php 
							$destinations = new Destination();
							$dests = $destinations->get_destinations();
							foreach ($dests as $dest) {?>
                                <li><a href="Destination.php?id=<?php echo $dest['id'];?>" class="block px-4 py-2 text-gray-500 hover:text-gray-300"><?php echo $dest['name'];?></a></li>
                              <?php 							 }?>





               
                </ul>
              </div>
            
           
              
            
          </div>

      </div>

  </nav>
      <header class="flex flex-row items-center justify-around p-3 md:p-9"> 
          <div class="flex-none " id="ham">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
          </div>
          <div class="flex justify-start invisible md:visible izq" >
            <a href="" class="mr-8 text-xl tracking-wider text-white cursor-pointer">Home</a>
            <a href="" class="text-xl tracking-wider text-white">Taylor-made trips</a>
          </div>
          <div class="flex justify-start mr-6">
            <img src="img/ll.webp" class="w-20 ml-0 md:w-20" alt="">
        </div>
          <div class="flex justify-end invisible dropdown md:visible">
            <button class="inline-flex items-center px-4 py-2 text-white rounded">
                <span class="mr-1 text-xl tracking-wider">Destinations</span>
                <svg class="w-8 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
              </button>
              <ul class="absolute hidden pt-2 text-white dropdown-menu destination">
              <?php 
							$destinations = new Destination();
							$dests = $destinations->get_destinations();
							foreach ($dests as $dest) {?>
                                <li><a href="Destination.php?id=<?php echo $dest['id'];?>" class="block px-4 py-2 whitespace-no-wrap "><?php echo $dest['name'];?></a></li>
                              <?php 							 }?>

           
              </ul>
            </div>
          </div>
        

      </header>
      <div class="flex items-center justify-center text-2xl font-bold text-white banner">
        <h1 class="text-4xl tracking-wider">Plannig your trip</h1>
        
      </div>