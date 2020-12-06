// +------------------------------------------------------------------------+
// | @author Monjur Munna
// | @author_url 1: https://imean.xyz
// | @author_url 2: https://imean.xyz
// | @author_email: imeansocial@gmail.com   
// +------------------------------------------------------------------------+
// | imean - Social Networking Website
// | Copyright (c) 2017 imean. All rights reserved.
// +------------------------------------------------------------------------+

$(document).ready(function(){

      $(document).on("click",".show-forums",function(){
          $("div[data-slide=" +  $(this).attr("id")+"]").slideToggle("slow");
      });


      

 });
