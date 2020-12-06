// +------------------------------------------------------------------------+
// | @author Deen Doughouz (DoughouzForest)
// | @author_url 1: http://www.imean.com
// | @author_url 2: http://codecanyon.net/user/doughouzforest
// | @author_email: imeansocial@gmail.com   
// +------------------------------------------------------------------------+
// | imean - The Ultimate Social Networking Platform
// | Copyright (c) 2017 imean. All rights reserved.
// +------------------------------------------------------------------------+

$(document).ready(function(){

      $(document).on("click",".show-forums",function(){
          $("div[data-slide=" +  $(this).attr("id")+"]").slideToggle("slow");
      });


      

 });
