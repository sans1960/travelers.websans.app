<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>plantilla </title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/easySelectStyle.css">
  
 
    
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
      <div class="container w-3/4 mx-auto">
        <h1 class="mt-5 mb-5 text-lg text-center text-gray-500">Inquire about a taylor-made trip with us</h1>
        <form action="form.php" method="post" class="w-full">
          <h1 class="ml-4 text-2xl text-gray-500 md:ml-0">Yours details</h1>
          <div class="flex flex-col">
            <div class="flex  text-gray-400 mt-5">
              <label for="trait" class="mr-5 p-2">Traitement</label>
              <select name="trait" id="trait" class="p-2 border">
                <option value="">Choose a traitment</option>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
              </select>
            </div>
            <input type="hidden" name="code" value="<?php echo uniqid();?>">
            <input type="hidden" name="pagina" value="Europe">
            <div class="grid grid-cols-1 gap-4 mt-5 ml-4 mr-4 md:grid-cols-2 md:ml-0 md:mr-0">
              <div class="border-b border-b-2 border-gray-400">
                <input type="text" placeholder="Name*" class="w-full p-2 bg-transparent border-none outline-none appearance-none" name="name" required>
              </div>
            
              <div class="border-b border-b-2 border-gray-400">
                <input type="text" placeholder="Phone*" class="w-full p-2 bg-transparent border-none outline-none appearance-none" name="phone" required>
              </div>
              <div class="border-b border-b-2 border-gray-400">
                <input type="text" placeholder="Surname*" class="w-full p-2 bg-transparent border-none outline-none appearance-none" name="surname" required>
              </div>
            
              <div class="border-b border-b-2 border-gray-400">
                <input type="text" placeholder="City*" class="w-full p-2 bg-transparent border-none outline-none appearance-none" name="city" required>
              </div>

            </div>
            <div class="flex flex-col w-full mt-5 ml-4 mr-4 md:flex-row md:ml-0 md:mr-0"> 
              <div class="w-full mb-4 mr-4 border-b border-b-2 border-gray-400 md:mb-0 md:w-1/2">
                <input type="email" placeholder="Email*" class="w-full p-2 bg-transparent border-none outline-none appearance-none" name="email" required>
              </div>
            
              <div class="w-full mb-4 mr-2 border-b border-b-2 border-gray-400 md:mb-0 md:w-1/4">
                <input type="text" placeholder="State*" class="w-full p-2 bg-transparent border-none outline-none appearance-none" name="state" required>
              </div>
              <div class="w-full mb-4 border-b border-b-2 border-gray-400 md:mb-0 md:w-1/4">
                <input type="text" placeholder="Zipcode" class="w-full p-2 bg-transparent border-none outline-none appearance-none" name="zipcode">
              </div>
            
             
            </div>
            <div class="flex flex-col w-full mt-5 ml-4 mr-4 md:flex-row md:ml-0 md:mr-0">
              <div class="flex flex-col w-full mr-3 md:w-1/2">
                <h1 class="ml-4 text-2xl text-gray-500 md:ml-0">Your travel plans</h1>
                <div class="flex flex-col justify-between p-2 mb-3 text-gray-500 md:flex-row">
                  <label class="w-1/4 p-2" for="dur">Duration</label>
                  <select name="duration" id="dur" class="w-3/4 p-2 border ">
                    <option value="">Choosse duration.</option>
                    <option value="about-a-week">About a week</option>
                    <option value="two-to-three-weeks">Two to three weeks</option>
                    <option value="a-month-or-more">A month or more</option>
                  </select>
                </div>
                <div class="flex flex-col justify-between p-2 mb-3 text-gray-500 md:flex-row">
                  <label class="w-1/4 p-2" for="season">Season</label>
                  <select name="season" id="season" class="w-3/4 p-2 border">
                    <option value="">Choosse season.</option>
                    <option value="spring">Spring</option>
                    <option value="summer">Summer</option>
                    <option value="winter">Winter</option>
                    <option value="autumm">Autumm</option>
                  </select>
                </div>
                <div class="flex flex-col justify-between p-2 mb-3 text-gray-500 md:flex-row">
                  <label class="w-1/4 p-2" for="travel">Travellers</label>
                  <select name="travellers" id="travel" class="w-3/4 p-2 border">
                    <option value="">Choose travellers</option>
                    <option value="individual">Individual</option>
                    <option value="couple">Couple</option>
                    <option  value="family">Family</option>
                    <option value="group">Group</option>
                  </select>
                </div>
                <div class="flex flex-row justify-center p-2 mb-3 text-gray-500" id="child"> 
                  <input type="checkbox" name="children" value="Travel with children">
                  <label class="ml-4"> Travel with children</label>
                </div>
              </div>
              <div class="flex flex-col w-full md:w-1/2">
                <h1 class="ml-4 text-2xl text-gray-500 md:ml-0">Trip type</h1>
                <div class="flex flex-row justify-start mt-5 ml-4 text-gray-500">
                  <input type="radio" name="triptype" id="" value="leisure">
                  <div class="ml-5">
                    <h4 class="text-xl">Mostly leisure</h4>
                    <p class="text-xs">A leisure attractions trip with some cultural and gourmet attractions</p>
                  </div>
                </div>
                <div class="flex flex-row justify-start mt-5 ml-4 text-gray-500">
                  <input type="radio" name="triptype" id="" value="cultural">
                  <div class="ml-5">
                    <h4 class="text-xl">Mostly cultural</h4>
                    <p class="text-xs">A cultural attractions trip with some leisure and gourmet attractions</p>
                  </div>
                </div>
                <div class="flex flex-row justify-start mt-5 ml-4 text-gray-500">
                  <input type="radio" name="triptype" id="" value="gourmet">
                  <div class="ml-5">
                    <h4 class="text-xl">Mostly gourmet</h4>
                    <p class="text-xs">A gourmet attractions trip with some cultural and leisure attractions</p>
                  </div>
                </div>
                <div class="flex flex-row justify-start mt-5 ml-4 text-gray-500">
                  <input type="radio" name="triptype" id="" value="adventure">
                  <div class="ml-5">
                    <h4 class="text-xl">Adventure trip</h4>
                    <p class="text-xs">With some cultural and gourmet attractions</p>
                  </div>
                </div>

              </div>
              
            </div>
            <h1 class="mt-4 mb-4 ml-4 text-lg text-gray-500 md:ml-0">Others specifications</h1>
            <div class="flex flex-col justify-start md:flex-row">
              <div class="flex flex-row justify-center ml-3 md:0">
                <input type="checkbox" name="specifications[]" id="" value="romantic">
                <p class="ml-4 text-gray-500" > Romantic trip</p>
              </div>
              <div class="flex flex-row justify-center ml-6 md:flex-row">
                <input type="checkbox" name="specifications[]" id="" value="reduced">
                <p class="ml-4 text-gray-500"> Movility reduced</p>
              </div>

            </div>
            <h1 class="mt-4 mb-4 ml-4 text-2xl text-gray-500 md:ml-0">Countries interested</h1>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <div class="w-full " >
              
        <select  name="destinity[]" id="one" data-max="" multiple="multiple" >
            <option value="Denmark">Denmark</option>
            <option value="Finland">Finland</option>
            <option value="Iceland">Iceland</option>
            <option value="Norway">Norway</option>
            <option value="Sweden">Sweden</option>
           
        </select>
    </div>
    <div class="w-full" >
      
        <select name="destinity[]" id="two" data-max="" multiple="multiple" >
            <option value="France">France</option>
            <option value="Luxemburg">Luxemburg</option>
            <option value="Belgium">Belgium</option>
            <option value="Netherlands">Netherlands</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="Liechtenstein">Liechtenstein</option>
            <option value="Ireland">Ireland</option>
        </select>
    </div>
    <div class="w-full" >
      
        <select name="destinity[]" id="three" data-max="" multiple="multiple" >
            <option value="Austria">Austria</option>
            <option value="Czech Republic">Czech Republic</option>
            <option value="Germany">Germany</option>
            <option value="Hungary">Hungary</option>
            <option value="Poland">Poland</option>
            <option value="Slovakia">Slovakia</option>
            <option value="Slovenia">Slovenia</option>
            <option value="Switzerland">Switzerland</option>
        </select>
    </div>
    <div class="w-full" >
      
        <select name="destinity[]" id="four" data-max="" multiple="multiple" >
            <option value="Spain">Spain</option>
            <option value="Portugal">Portugal</option>
            <option value="Andorra">Andorra</option>
            
        </select>
    </div>
    <div class="w-full" >
            
        <select name="destinity[]" id="five" data-max="" multiple="multiple" >
            <option value="Italy">Italy</option>
            <option value="Cyprus">Cyprus</option>
            <option value="Monaco">Monaco</option>
            <option value="Greece">Greece</option>
            <option value="Malta">Malta</option>
            <option value="San Marino">San Marino</option>
            <option value="Vatican City">Vatican City</option>
        </select>
    </div>
    <div class="w-full" >
 
        <select name="destinity[]" id="six" data-max="" multiple="multiple" >
            <option value="Albania">Albania</option>
            <option value="Bosnia and Hercegovina">Bosnia and Hercegovina</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Croatia">Croatia</option>
            <option value="Kosovo">Kosovo</option>
            <option value="Moldova">Moldova</option>
            <option value="Montenegro">Montenegro</option>
            <option value="Macedonia">Macedonia</option>
            <option value="Rumania">Rumania</option>
            <option value="Serbia">Serbia</option>
        </select>
    </div>
    <div class="w-full" >

        <select name="destinity[]" id="seven" data-max="" multiple="multiple" >
            <option value="Armenia">Armenia</option>
            <option value="Azerbaijan">Azerbaijan</option>
            <option value="Belarus">Belarus</option>
            <option value="Georgia">Georgia</option>
            <option value="Latvia">Latvia</option>
            <option value="Lithuania">Lithuania</option>
            <option value="Esthonia">Esthonia</option>
            <option value="Russia">Russia</option>
            <option value="Ukraine">Ukraine</option>
        </select>
    </div>
            </div>
     
            
            <h1 class="mt-4 mb-4 ml-4 text-2xl text-gray-500 md:ml-0">More info</h1>
            <div>
              <textarea class="w-full p-2 border border-4 border-gray-400 appearance-none" placeholder="Tell us more interested " name="message" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="flex flex-col items-center justify-center w-full p-5">
              <div class="mb-4 text-gray-500">
                <input type="radio"  name="legal" required >
                <label>I aprove <span><a href="">RGPD</a></span></label><br>
                </div>
              <input class="px-8 py-2 tracking-wider bg-white border-2 border-gray-900 cursor-pointer rounded-3xl hover:bg-gray-800 hover:text-white boton" type="submit" value="send" name="send">

            </div>


          </div>

        </form>

      </div> 
      <footer class="flex flex-col items-center justify-between p-6 mt-5 text-white md:flex-row">
        <p>Copyright © 2021 Sojournplanet - All rights reserved<span>- <a href="">Images Copyright</a></span></p>
       
        <a href="">
          <img src="../img/facebook.png" width="40" alt="">
        </a>
      
       
      </footer>
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> 
      <script src="../js/easySelect.js"></script>
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
       <script>
             $("#one").easySelect({
         buttons: true, 
         search: false,
         placeholder: 'Northern Europe',
         placeholderColor: 'violet',
         selectColor: 'lila',
         itemTitle: 'Color selected',
         showEachItem: true,
         width: '100%',
         dropdownMaxHeight: '450px',
     });
     $("#two").easySelect({
         buttons: true, 
         search: false,
         placeholder: 'Western Europe',
         placeholderColor: 'violet',
         selectColor: 'lila',
         itemTitle: 'Color selected',
         showEachItem: true,
         width: '100%',
         dropdownMaxHeight: '450px',
     });
     $("#three").easySelect({
         buttons: true, 
         search: false,
         placeholder: 'Central Europe',
         placeholderColor: 'violet',
         selectColor: 'lila',
         itemTitle: 'Color selected',
         showEachItem: true,
         width: '100%',
         dropdownMaxHeight: '450px',
     });
     $("#four").easySelect({
         buttons: true, 
         search: false,
         placeholder: 'Southwest Europe',
         placeholderColor: 'violet',
         selectColor: 'lila',
         itemTitle: 'Color selected',
         showEachItem: true,
         width: '100%',
         dropdownMaxHeight: '450px',
     });
     $("#five").easySelect({
         buttons: true, 
         search: false,
         placeholder: 'Southern Europe',
         placeholderColor: 'violet',
         selectColor: 'lila',
         itemTitle: 'Color selected',
         showEachItem: true,
         width: '100%',
         dropdownMaxHeight: '450px',
     });
     $("#six").easySelect({
         buttons: true, 
         search: false,
         placeholder: 'Southeast Europe',
         placeholderColor: 'violet',
         selectColor: 'lila',
         itemTitle: 'Color selected',
         showEachItem: true,
         width: '100%',
         dropdownMaxHeight: '450px',
     });
     $("#seven").easySelect({
         buttons: true, 
         search: false,
         placeholder: 'Eastern Europe',
         placeholderColor: 'violet',
         selectColor: 'lila',
         itemTitle: 'Color selected',
         showEachItem: true,
         width: '100%',
         dropdownMaxHeight: '450px',
     });
  

     
    </script>

  </body>

  
</html>


