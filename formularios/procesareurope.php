<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/slider.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="js/slider.js"></script>
</head>
<body>
<?php
if (isset($_POST['send'])) {
    $trait = $_POST['trait'];
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
   

    
    // echo "<p class='mb-3'>Thanks you : ".$name." ".$surname." "."</p>";
    // echo "<p class='mb-3'>We will contact with you</p>";
    // echo "<p class='mb-3'> You will recived a email</p>";

    

    $to = $email;
    $subject = "Contact for trip";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $message2 ="Thanks you : ".$trait." ".$name." ".$surname." "."</p>";
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
 <div class="Slider h-screen">
        <div class="Slider-content flex flex-col justify-around items-center">
            <div class="mt-5">
                <img src="img/ll.webp">
            </div>
          <div class="Slider-content-inner mt-14">
          <h1 class="text-3xl text-white font-bold">Thanks you</h1>
          <h1 class="text-4xl text-white font-bold"><?php echo $trait;?> <?php echo $name;?></h1>
          <h1 class="text-3xl text-white font-bold">You will recive an email</h1>
          <div class="flex justify-center mt-5 text-dark">
            <a class="px-8 py-2 tracking-wider  bg-white border-2 border-gray-900 cursor-pointer rounded-3xl hover:bg-gray-800 hover:text-white boton" href="index.php">Back</a>
        </div>
          
           </div>
           <div class="flex flex-col items-center justify-between p-6 mt-14 text-white md:flex-row">
        <p>Copyright © 2021 Sojournplanet - All rights reserved<span>- <a href="">Images Copyright</a></span></p>
       
        <a href="" class="ml-14">
          <img src="../img/facebook.png" width="40" alt="">
        </a>
      
       
      </div>
      </div>
     
        <div class="Slider-slide show" style="background-image: url('https://www.seedtribe.com/assets/img/carousel/img-seedtribe-homepage-hero-1.jpg');"></div>
        <div class="Slider-slide" style="background-image: url('https://www.seedtribe.com/assets/img/carousel/img-seedtribe-homepage-hero-2.jpg');"></div>
        <div class="Slider-slide" style="background-image: url('https://www.seedtribe.com/assets/img/carousel/img-seedtribe-homepage-hero-3.jpg');"></div>
    </div> 
</body>
</html>