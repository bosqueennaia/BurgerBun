<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Manage Menu</title>

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
            <h5 class="mb-4">Create new product</h5>
            <form action="/admin/menu/create" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="example-menu">Menu</label>
                    <input type="text" class="form-control" id="example-menu" aria-describedby="emailHelp" 
                        placeholder="Enter menu" required name="menu">
                </div>

                <div class="form-group">
                    <label for="example-price">Price</label>
                    <input type="number" min="1" class="form-control" id="example-price" aria-describedby="emailHelp" 
                        placeholder="Enter price" required name="price">
                </div>

                <div class="form-group">
                    <label for="example-category">Category</label>
                    <select class="form-control" name="category" id="example-category">
                        <option value="Burgers">Burgers</option>
                        <option value="Hot Snacks">Hot Snacks</option>
                        <option value="Beverages">Beverages</option>
                    </select>
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

</body>

</html>