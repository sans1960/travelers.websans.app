<footer class="flex flex-col items-center justify-between p-6 mt-5 text-white md:flex-row">
        <p>Copyright © 2021 Sojournplanet - All rights reserved<span>- <a href="">Images Copyright</a></span></p>
       
        <a href="">
          <img src="img/facebook.png" width="40" alt="">
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

