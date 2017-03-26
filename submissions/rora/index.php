<!DOCTYPE html>
    <head>
      <script src="./js/jquery.js"></script>
      <script src="./js/new.js"></script>
    </head>
    <body>
      <script>
        function auto_load(){
          $.ajax({
              url: "index.php",
              cache: false,
              success: function(data){
              $("#dailyImg").attr("src", $("#dailyImg").attr("src")+"?timestamp=" 
                + new Date().getTime());
              }
          });
        }

        $(document).ready(function(){
          //Call auto_load() function when DOM is Ready 
          auto_load();       
        });
        //Refresh auto_load() function after 10000 milliseconds
        setInterval(auto_load, 500);
      </script>
        <div id="mydiv">
            <img id="dailyImg" src="./FullScreenshot.jpg">
        </div>
    </body>
</html>
