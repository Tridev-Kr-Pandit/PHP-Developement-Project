<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Storys Book</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include 'partials/connect.php'; ?>

  <div class="container-fluid slider">
    <?php include 'partials/header.php';?>
    <div id="carouselExampleIndicators" class="carousel slide mt-5">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/img2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/img2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/img3.jpg" class="d-block" alt="...">
        </div>
      </div>
    </div>
  </div>

  <!-- -------------------------- Cards -------------------------- -->
  <div class="container" id="story">
    <h1 class="text-center featureTitle mb-5 fw-bold">Featured Stories</h1>
    <div class="row mb-5">

      <?php
          $sql = "Select * from `topic`";
          $result = mysqli_query($con, $sql);
          if($result){
            while($row = mysqli_fetch_assoc($result)){
              $id = $row['topic_id'];
              $topic_image = $row['topic_image'];
              $topic_name = $row['topic_name'];
              $topic_desc = $row['topic_desc'];
              // echo $topic_image;
              echo '<div class="col-md-4 col-sm-6">
                      <div class="card border-0" style="width: 22rem; height: 30rem">
                        <img src='.$topic_image.' class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">'.$topic_name .'</h5>
                            <p class="card-text">'.substr($topic_desc,0, 50).'.......</p>
                            <a href="stories.php?story_id='.$id.'" class="btn btn-primary">Continue Reding...</a>
                          </div>
                        </div>
                    </div>';
            }
          }
      ?>
    </div>
  </div>


  <!-- -----------------------Footer----------------------------  -->
  <?php include 'partials/footer.php'; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="script.js"></script>
</html>