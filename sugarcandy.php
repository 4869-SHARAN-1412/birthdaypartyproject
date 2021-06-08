<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>SugarCandy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body style="padding-top: 100px;">
    <header>
    <?php include('navbar.php'); ?>
    </header>

    <main>

    <div class="container">
<div class="card-deck card-margin">
  <div class="card">
    <div class="card-body">
    <img class="card-img ImgThumbnail" src="sugar candy/h (4).jpg" alt="Card image cap">
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <img class="card-img ImgThumbnail" src="sugar candy/h (2).jpg" alt="Card image cap"> 
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <img class="card-img  ImgThumbnail" src="sugar candy/h (3).jpg" alt="Card image cap">
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <img class="card-img  ImgThumbnail" src="sugar candy/h 1(1).png" alt="Card image cap">
    </div>
  </div>
</div>






<div class="modal">
<span class="close">×</span>
<img class="modalImage" id="img01" />
</div>
</div>

<script>
var modalEle = document.querySelector(".modal");
var modalImage = document.querySelector(".modalImage");
Array.from(document.querySelectorAll(".ImgThumbnail")).forEach(item => {
   item.addEventListener("click", event => {
      modalEle.style.display = "block";
      modalImage.src = event.target.src;
   });
});
document.querySelector(".close").addEventListener("click", () => {
   modalEle.style.display = "none";
});
</script>




    </main>
    
    <footer>
    <?php  include('footer.php'); ?>
    </footer>

</body>

</html>