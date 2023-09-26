

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .para{

        background: pink;
        height: 300px;
        width: 200px;
        text-align: center;
        border: 2px solid pink;
    }
</style>
<body>
  
 
  <div class="para">
  "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae, dicta ex, esse neque rem maxime, natus labore sapiente ea mollitia provident officiis! Quidem optio maxime assumenda porro error harum possimus."?>
  </div>
  
  
  <button onclick="hide()"> hide</button>
  <button onclick="show()"> show</button>



 

    <script>
    function show(){
   let para = document.querySelector(".para");
   if( para.style.display === "none"){
      
    para.style.display = "block"
   }else{
    para.style.display="block";
   }

    }
      // hide function

      function hide(){
        let para = document.querySelector(".para");
        if( para.style.display ==="none"){
            para.style.display = "none"
        }else{
          para.style.display="none"
        }
      }
    </script>
</body>
</html>
<?php


?>