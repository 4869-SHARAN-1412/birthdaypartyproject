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
        <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">

    <title>EatableItems</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body style="padding-top: 100px;">
    <header>
    <?php include('navbar.php'); ?>
    </header>

    <main>
    <article>

    <section>
    <div class="container">
    <div><h3 style="font-family: 'Merienda', cursive;">Appetizers</h3>
    <p style="font-family: 'PT Serif', serif; font-size:20px;">There's nothing quite like the glorious feeling of absolute control that comes with hosting a party. We provide some snacks which are fun, healthy and delicious that help in hunger remover at parties. Our catalogue has three super tasty items, namely popcorn, candy-floss and chocolate fountain.</p>
</div>
<div class="heading"><h3 id="D2">Popcorn</h3></div>
<div class="card-deck card-margin">
  <div class="card">
    <div class="card-body">
    <img class="card-img ImgThumbnail" src="popcorn/g (1).jpeg" alt="Card image cap">
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <img class="card-img ImgThumbnail" src="popcorn/g (2).jpg" alt="Card image cap"> 
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <img class="card-img  ImgThumbnail" src="popcorn/g (3).jpg" alt="Card image cap">
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <img class="card-img  ImgThumbnail" src="popcorn/g 1(1).jpg" alt="Card image cap">
    </div>
  </div>
</div>

    </section>

    <section>
    
    <div class="container">
    <div class="heading"><h3 id="D2">Sugar Candy</h3></div>
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

    </section>

    <section>
    
    <div class="container">
    <div class="heading"><h3 id="D3">Chocolate Fountain</h3></div>
<div class="card-deck card-margin">
  <div class="card">
    <div class="card-body">
    <img class="card-img ImgThumbnail" src="chocolatefountain/f (2).jpg" alt="Card image cap">
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <img class="card-img ImgThumbnail" src="chocolatefountain/f 1(1).jpg" alt="Card image cap"> 
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <img class="card-img  ImgThumbnail" src="chocolatefountain/f (3).jpg" alt="Card image cap">
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <img class="card-img  ImgThumbnail" src="chocolatefountain/f (4).jpg" alt="Card image cap">
    </div>
  </div>
</div>

    </section>

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


    </article>

    </main>
    
    <footer>
    <?php  include('footer.php'); ?>
    </footer>

</body>

</html>