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
    <?php include 'partials/header.php'; ?>

    <?php
        $id = $_GET['story_id'];
        $sql = "Select * from `topic` where topic_id = $id";
        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_assoc($result)){
            $topic_image = $row['topic_image'];
            $topic_name = $row['topic_name'];
            $topic_desc = $row['topic_desc'];
        }
    ?>

    <!-- ----------Jumbotron--------------  -->
    <div class="container-fluid px-0 mt-5">
        <div class=" bg-primary-subtle rounded p-5">
            <h1 class="display-4 fw-bold"><?php echo $topic_name; ?></h1>
            <p class="fs-4"><?php echo $topic_desc; ?></p>
            <button class="btn btn-dark">
                <a href="#reading" class="text-decoration-none text-light fw-bold" role="button">Continue Reading...</a>
            </button>
        </div>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide">
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
                <img src="images/img1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/img2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/img3.jpg" class="d-block" alt="...">
            </div>
        </div>
    </div>

    <!-- --------------Reading-----------------  -->
    <div class="container" id="reading">
        <div class=" bg-dark rounded px-5 py-3">
            <h1 class="display-4 text-center text-white">Enjoy Reading</h1>
            <div class="text-center">
                <img class="img-fluid" src="<?php echo $topic_image; ?>" alt="">
            </div>
            <?php
            $all_story = array("unicorn.php", "rich_main.php", "magic_paintbrush.php", "elephent.php","farmer.php","little_kids.php");
            $s_id = $id - 1;
            // echo '<h1 class="fw-bold text-primary">'.$all_story[$s_id] .'</h1>';
            $path = "./all_story/" . $all_story[$s_id];
            // echo '<h1 class="fw-bold text-primary">'.$path .'</h1>';
            include($path); 
            ?>
            <div class="px-5 border text-light rounded bg-primary d-flex align-items-center">
        <p class="fs-4 mt-2">Want to read offline? download full PDF here</p>
        <button type="button" class="btn btn-danger ms-auto" id="download_btn">Download Full PDF</button>
    </div>
        </div>
    </div>
<!-- ---------thank you txt----------  -->
 <div class="container-fluid my-4">
    <h2 class="text-center display-4">Thank you for your time 😆</h2>
 </div>



    <?php include 'partials/footer.php'; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="script.js"></script>
</html>