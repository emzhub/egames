 $(document).ready(function(){
          $(".newsfeeds").hide(),
             $("#s_games").hide(),
                          $("#post-somer").click(function()
        {
            $(".newsfeeds").show(),$(".some").hide();
        }),
                           
                 $("#postback-bt").click(function()
        {
                   $(".some").show(),$(".newsfeeds").hide();
        }),



$("#postback-games").click(function(){
  $("#s_games").show(),$("#c").hide();
}),

$("#hid_rules").click(function(){
  $("#s_games").hide(),$("#c").show();
});

        }); 