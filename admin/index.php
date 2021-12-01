<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="flex justify-start mt-8 mb-5 ml-8">
        <a href="../index.php" class="p-2 text-white bg-green-700 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
    </a>

    </div>
    <div class="container flex flex-col items-center justify-center w-1/3 mx-auto mt-8">
    <div class="flex justify-center w-full p-3 text-white bg-gray-800 rounded-lg">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
   </svg>
    </div>
    <form action="controllers/validarController.php" method="post" class="flex flex-col items-center justify-around w-full ">
        <input class="w-full p-2 mt-5 mb-5 border rounded-lg outline-none" type="text" name="name" id="" placeholder="Name">
        <input class="w-full p-2 mb-5 border rounded-lg outline-none" type="text" name="password" id="" placeholder="Password">
        <input type="submit" value="login" name="send" class="px-4 py-2 font-bold text-white bg-gray-800 border-4 border-gray-800 rounded-lg cursor-pointer hover:bg-white hover:text-gray-900">

    </form>

    </div>
    
</body>
</html>