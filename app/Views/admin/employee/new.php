<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Manage Employee</title>

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
                <h1><a class="navbar-brand" href="index">
                    <img src="/burgerbun/assets/images/burger.png" alt="burger logo" width="20px" /> burger bun
                </a></h1>
                <button class="navbar-toggler collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
            </nav>
        </div>
    </header>
    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col-12">
                <h5 class="mb-4">Create new employee</h5>
                <form action="/admin/employee/create" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="example-name">Name</label>
                        <input type="text" class="form-control" id="example-name" aria-describedby="emailHelp"
                            placeholder="Enter name" required name="name">
                    </div>

                    <div class="form-group">
                        <label for="example-age">Age</label>
                        <input type="number" min="1" class="form-control" id="example-age" aria-describedby="emailHelp"
                            placeholder="Enter age" required name="age">
                    </div>

                    <div class="form-group">
                        <label for="example-gender">Gender</label>
                        <select class="form-control" name="gender" id="example-gender">
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="example-marital-status">Marital Status</label>
                        <select class="form-control" name="marital_status" id="example-marital-status">
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="example-work-schedule">Work Schedule</label>
                        <select class="form-control" name="work_schedule" id="example-work-schedule">
                            <option value="Full Time">Full Time</option>
                            <option value="Shift">Shift</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="example-position">Position</label>
                        <input type="text" class="form-control" id="example-position" aria-describedby="emailHelp"
                            placeholder="Enter position" required name="position">
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
