<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
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
           
                <?php require '../config/db.php'; ?>
                        <?php require '../models/Destination.php'; ?>
							<?php 
							$destinations = new Destination();
							$dests = $destinations->get_destinations();
							foreach ($dests as $dest) {?>
                                <li><a href="../Destination.php?id=<?php echo $dest['id'];?>" class="block px-4 py-2 text-gray-500 hover:text-gray-300"><?php echo $dest['name'];?></a></li>
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
            <img src="../img/ll.webp" class="w-20 ml-0 md:w-20" alt="">
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
                                <li><a href="../Destination.php?id=<?php echo $dest['id'];?>" class="block px-4 py-2 whitespace-no-wrap "><?php echo $dest['name'];?></a></li>
                              <?php 							 }?>

           
              </ul>
            </div>
          </div>
        

      </header>
      <div class="flex items-center justify-center text-2xl font-bold text-white banner">
        <h1 class="text-4xl tracking-wider">Plannig your trip</h1>
        </div> 
        <div class="container w-1/3 mt-5 p-5 rounded-lg mx-auto text-center bg-green-600 text-white">
        <?php
if (isset($_POST['send'])) {
    $code = $_POST['code'];
    $pagina =$_POST['pagina'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    if(isset($_POST['zipcode'])){
        $zipcode = $_POST['zipcode'];
    }else{
        $zipcode = null;
    }
    if(isset($_POST['duration'])){
        $duration = $_POST['duration'];
    }else{
        $duration = null;
    }
    if(isset($_POST['season'])){
        $season = $_POST['season'];
    }else{
        $season = null;
    }
    if(isset($_POST['travellers'])){
        $travellers = $_POST['travellers'];
    }else{
        $travellers = null;
    }
    if(isset($_POST['triptype'])){
        $triptype = $_POST['triptype'];
    }else{
        $triptype = null;
    }
    if (isset($_POST['specifications'])) {
        $specifications = $_POST['specifications'];
    } else {
        $specifications = null;
    }
   
    if (isset($_POST['children'])) {
        $children =$_POST['children'];
    } else {
        $children = null;
    }
    if (isset($_POST['destinity'])) {
        $destinity = $_POST['destinity'];
    } else {
        $destinity=null;
    }
   
    $message = $_POST['message'];
    $data = file_get_contents('../data/contactes.json');
    $data = json_decode($data,true);

   $input = array(
       'code'=>$_POST['code'],
       'pagina'=>$_POST['pagina'],
       'name' => $_POST['name'],
       'surname' => $_POST['surname'],
       'email' => $_POST['email'],
       'phone' => $_POST['phone'],
       'city' => $_POST['city'],
       'state' => $_POST['state'],
       'zipcode' => $_POST['zipcode'],
       'duration' => $_POST['duration'],
       'season' => $_POST['season'],
       'travellers' => $_POST['travellers'],
       'triptype' => $triptype,
       'specifications' => $specifications,
       'children'=>  $children,           
       'destinity'=>$destinity,
       'message' => $_POST['message'],
   );
   $data[] = $input;
   $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('../data/contactes.json', $data);
   

    
    echo "<p class='mb-3'>Thanks you : ".$name." ".$surname." "."</p>";
    echo "<p class='mb-3'>We will contact with you</p>";
    echo "<p class='mb-3'> You will recived a email</p>";

    

    $to = $email;
    $subject = "Contact for trip";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $message2 ="Thanks you : ".$name." ".$surname." "."</p>";
    mail($to, $subject, $message2, $headers);  

    $htmlContent =  '<html lang="en">
<head>
   <title>Email</title>
   <style>
       *{
           font-family: Verdana, Geneva, Tahoma, sans-serif;
       }
       h1{
           text-align:center ;
       }
       table{
           margin: 20px auto;
           padding: 10px;
       }
   </style>
</head>
<body>
<h1>Welcome to Soujourplanet </h1>
<table>
<tr>
     <th>Interest : </th><td>'.$pagina.'</td>
    </tr>
   <tr>
       <th>Name : </th><td>'.$name.'</td>
   </tr>
   <tr>
       <th>Surname : </th><td>'.$surname.'</td>
   </tr>
   <tr>
       <th>Email : </th><td>'.$email.'</td>
   </tr>
   <tr>
       <th>Phone : </th><td>'.$phone.'</td>
   </tr>
   <tr>
       <th>City : </th><td>'.$city.'</td>
   </tr>
   <tr>
       <th>State : </th><td>'.$state.'</td>
   </tr>
   <tr>
       <th>Zipcode : </th><td>'.$zipcode.'</td>
   </tr>
   <tr>
       <th>Duration : </th><td>'.$duration.'</td>
   </tr>
   <tr>
       <th>Season : </th><td>'.$season.'</td>
   </tr>
   <tr>
       <th>Tavellers : </th><td>'.$travellers.'</td>
   </tr>
   <tr>
       <th>Triptype : </th><td>'.$triptype.'</td>
   </tr> ';
   if(!empty( $specifications)){
       foreach($specifications as $specification){
           $htmlContent .='<tr><th>Specifications : </th><td>'.$specification.'</td></tr>';
       }
      
       } else{
           $htmlContent .='<tr><th>Specifications : </th><td>null</td></tr>';
   }
   if(!empty($children)){
       $htmlContent .='<tr><th>Children : </th><td>'.$children.'</td></tr>';
   }else{
       $htmlContent .='<tr><th>Children : </th><td>null</td></tr>';
   }
   if(!empty($destinity)){
       foreach($destinity as $dest){
           $htmlContent .='<tr><th>Destinity : </th><td>'.$dest.'</td></tr>';
       }
   }else{
       $htmlContent .='<tr><th>Destinity : </th><td>null</td></tr>';
   }
   $htmlContent .='</table>';
   $htmlContent .='<p>Message : '.$message.'</p>';
   $htmlContent .='</body></html>';


 
   mail('g.sans.real@gmail.com',$subject,$htmlContent,$headers);








   

   
}
?>
        </div>
        
      

      <footer class="flex flex-col items-center justify-between p-6 mt-5 text-white md:flex-row">
        <p>Copyright © 2021 Sojournplanet - All rights reserved<span>- <a href="">Images Copyright</a></span></p>
       
        <a href="">
          <img src="../img/facebook.png" width="40" alt="">
        </a>
      
       
      </footer>
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> 
      <script>
          $(document).ready(function(){
      $("#ham").click(function(){
        $("#movil").animate({left: '0px'});
        $("header").hide();
        $(".banner").hide();
        $(".container").hide();
        $("footer").hide();
      });
      $("#icon").click(function(){
        $("#movil").animate({left: '-1000px'});
        $("header").show();
        $(".banner").show();
        $(".container").show();
        $("footer").show();
      });
      $('#travel').on('change', function() { 
     if ( this.value == 'family'){ 
     	$("#child").show(); 
     } 
     else{ 
     	$("#child").hide(); 
     } 
     }); 
      });
           
      </script> 
</body>
</html>