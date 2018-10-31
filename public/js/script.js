 $(document).ready(function(){
          $(".newsfeeds").hide(),
                          $("#post-somer").click(function()
        {
            $(".newsfeeds").show(),$(".some").hide();
        }),
                           
                 $("#postback-bt").click(function()
        {
                   $(".some").show(),$(".newsfeeds").hide();
        });

        }); 