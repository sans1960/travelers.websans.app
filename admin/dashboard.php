<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <nav class="flex flex-col justify-center p-4 text-white bg-green-700 md:flex-row md:justify-around">
        <div>
            <a href="dashboard.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            </a>
        </div>
        <div class="flex flex-col justify-around md:flex-row">
            
            <a class="mr-3" href="allDestinations.php">Destinations</a>
            <a class="mr-3" href="allCountries.php">Countries</a>
            <a class="mr-3" href="allCategories.php">Categories</a>
            <a href="allPosts.php">Posts</a>
        </div>
        <div>
            <a href="logout.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
             </svg>
            </a>
        </div>
    </nav>
    <div class="container mx-auto">
        <h1 class="mt-5 text-3xl text-center">Dashboard</h1>
        <div class="w-1/3 p-5 mx-auto mt-8 text-center border rounded-lg shadow-lg">
        <?php
          require '../config/db.php';
          require '../models/Admin.php';
          $admin = new Admin();
          $identificado = $admin->identificado();
          if ($identificado=='ok'){
              echo 'Welcome';
          }
        ?>

        </div>

    </div>
    
</body>
</html>