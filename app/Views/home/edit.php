<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Burger Bun</title>

    <link href="//fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="/burgerbun/assets/css/style-starter.css">
    
  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0">
          <h1> <a class="navbar-brand" href="index">
              <img src="/burgerbun/assets/images/burger.png" alt="burger logo"width="20px" /> burger bun
              </a></h1>
          <!-- if logo is image enable this   
  <a class="navbar-brand" href="#index">
      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
  </a> -->
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>
</header>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Update menu <?= $data['menu'] ?></h5>
            <form action="/home/update/<?= $data['id'] ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="put" />

                <div class="form-group">
                    <label for="example-menu">Menu</label>
                    <input type="text" class="form-control" id="example-menu" aria-describedby="emailHelp" 
                        placeholder="Enter menu" required name="menu" value="<?= $data['menu'] ?>">
                </div>

                <div class="form-group">
                    <label for="example-price">Price</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>
                        <input type="number" min="1" class="form-control" id="example-price" aria-describedby="emailHelp" 
                            placeholder="Enter price" required name="price" value="<?= $data['price'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="example-category">Category</label>
                    <select class="form-control" name="category" id="example-category">
                        <option value="Burgers" <?= ($data['category'] == 'Burgers') ? 'selected' : '' ?>>Burgers</option>
                        <option value="Hot Snacks" <?= ($data['category'] == 'Hot Snacks') ? 'selected' : '' ?>>Hot Snacks</option>
                        <option value="Beverages" <?= ($data['category'] == 'Beverages') ? 'selected' : '' ?>>Beverages</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="example-photo">Current Photo:</label>
                    <?php if ($data['photo']) { ?>
                        <img src="/photos/<?= $data['photo'] ?>" alt="" width=100 height=100>
                    <?php } else { ?>
                        <p>No Photo.</p>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label for="example-photo">Photo</label>
                    <input type="file" class="form-control" id="example-photo" aria-describedby="photoHelp" name="photo">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
