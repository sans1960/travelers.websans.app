<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.3/datatables.min.css"/>
 
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.3/datatables.min.js"></script>
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
<div class="container flex justify-end w-3/4 mt-5">
    <a href="addPost.php" class="p-2 text-white bg-green-600 rounded-full">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
     </svg>
    </a>
 </div>
 <div class="container w-3/4 mx-auto mt-5 mb-5">
    <table class="mx-auto mt-2 mb-5 table-auto" id="four">
        <thead>
        <tr class="p-2">
                        <th class="p-2">ID</th>
                        <th class="p-2">Title</th>
                        <th class="p-2">Destination</th>
                        <th class="p-2">Country</th>
                        <th class="p-2">Category</th>
                        <th class="p-2">Date</th>

                        <th class="p-2">Edit</th>
                        <th class="p-2">Delete</th>
                    </tr>
        </thead>
        <tbody>
        <?php require '../config/db.php'; ?>
                        <?php require '../models/Post.php'; ?>
							<?php 
							$posts = new Post();
							$pos = $posts->get_allposts();
							foreach ($pos as $po) {?>
                            <tr class="p-2 text-center">
                                <td class="p-2"><?php echo $po['id'];?></td>
                                <td class="p-2"><?php echo $po['title'];?></td>
                                <td class="p-2"><?php echo $po['name'];?></td>
                                <td class="p-2"><?php echo $po['country'];?></td>
                                <td class="p-2"><?php echo $po['category'];?></td>
                                <td class="p-2"><?php echo $po['date'];?></td>



                                <td class="p-2 "><a href="" class="text-yellow-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                                </a></td>
                                <td class="p-2"><a href="" class="text-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                </a></td>
                            </tr>
                              
                              <?php }?>
        </tbody>

    </table>

    </div>
    <script>
        $(document).ready(function() {
    $('#four').DataTable();
} );
    </script>
</body>
</html>