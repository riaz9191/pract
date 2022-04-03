<?php include('header.php') ?>


  <!--Navbar -->
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><b>SMS</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
      aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Events</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Dropdown
          </a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item">
          <!-- <a class="nav-link waves-effect waves-light">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light">
            <i class="fab fa-google-plus-g"></i>
          </a> -->
        </li>
        <li class="nav-item dropdown">
          <?php if(isset($_SESSION['login'])) { ?>

          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user mr-2"></i>Account
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </div>
          <?php } else { ?>
          <a href="login.php" class="nav-link"><i class="fa fa-user mr-4"> Login</i></a>
          <?php } ?>
        </li>
      </ul>
    </div>
  </nav>
  <!--/.Navbar -->

  <div class="d-flex shadow" style="height: 550px; background: linear-gradient(-45deg, #00337e 50%, transparent 50%);">
    <div class="container-fluid my-auto">
      <div class="row">
        <div class="col-lg-6 my-auto">
          <h1 class="display-3 font-weight-bold">Addmission Open For 2022-2023 </h1>
          <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aliquam!
          </p>
          <a href="" class="btn btn-lg btn-default"> Call to Action</a>
        </div>
        <div class="col-lg-6">
          <div class="col-lg-8 mx-auto card">
            <div class="card-body ">
              <h3>Inquiry From</h3>
              <form action="" method="post">
                <!-- Material input -->
                <div class="md-form">
                  <input type="text" id="form1" class="form-control">
                  <label for="form1">Your Name</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                  <input type="email" id="email" class="form-control">
                  <label for="email">Your Email</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                  <input type="text" id="phone" class="form-control">
                  <label for="mobile">Your Mobile No.</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                  <input type="text" id="phone" class="form-control">
                  <label for="class">Your Class</label>
                </div>
            </div>
            <button class="btn btn-dark ">Submit Form</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About us -->
  <section class="py-5">
    <div class="container shadow">
      <div class="row">
        <div class="col-lg-6 py-5">
          <h2 class="font-weight-bold">About <br> School Management System</h2>
          <div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati eos id enim reprehenderit esse! Ex
              ducimus beatae est odio repellat eos blanditiis, pariatur aut fugit perferendis, amet non voluptatum
              tempore atque dolores nemo natus tempora reprehenderit ullam nobis consequuntur voluptates? Quas
              asperiores pariatur a molestiae exercitationem reiciendis fugiat sint repellat.
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, consectetur!</p>
            </p>
          </div>
          <a href="about-us.php" class="btn btn-outline-secondary shadow">Know more
          </a>
        </div>
        <div class="col-lg-6 py-5">
          <img src="https://risingnepaldaily.com/banner_image/5f75abe94c6f2_school-1.jpg" alt="about" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <!-- Our Classes -->
  <section class="py-5 bg bg-light">
    <div class="text-center mb-5 ">
      <h2 class="font-weight-bold">Our Classes</h2>
      <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti recusandae assumenda
        voluptates officia consectetur ab animi!</p>
    </div>
    <div class="container">
      <div class="row">
        <?php
        for ($i = 1; $i <= 8; $i++) { ?>
        <div class="col-lg-3 mb-4">
          <div class="card">
            <div>
              <img src="./assets/images/courses.jpg" alt="" class="img-fluid rounded-top">
            </div>
            <div class="card-body text-center">
              <p class="card-text">
                <b>Class <?php echo $i; ?> </b>
                <br>
                <button class="btn btn-default btn-sm">Enroll Now</button>
              </p>
            </div>
          </div>
        </div>
        <?php
        } ?>
      </div>
    </div>
  </section>
  <!-- Our Courses -->
  <section class="py-5 bg bg-light">
    <div class="text-center mb-5 ">
      <h2 class="font-weight-bold">Our Courses</h2>
      <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti recusandae assumenda
        voluptates officia consectetur ab animi!</p>
    </div>
    <div class="container">
      <div class="row">
        <?php
        for ($i = 1; $i <= 8; $i++) { ?>
        <div class="col-lg-3 mb-4">
          <div class="card">
            <div>
              <img src="./assets/images/asdf.jpg" alt="" class="img-fluid rounded-top">
            </div>
            <div class="card-body text-center">
              <p class="card-text">
                <b>Web development <?php echo $i; ?> </b>
                <br>
                <button class="btn btn-default btn-sm">Enroll Now</button>
              </p>
            </div>
          </div>
        </div>
        <?php
        } ?>
      </div>
    </div>
  </section>

  <!-- Our Teachers -->
  <section class="py-5 ">
    <div class="text-center mb-5 ">
      <h2 class="font-weight-bold">Our Teachers</h2>
      <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti recusandae assumenda
        voluptates officia consectetur ab animi!</p>
    </div>
    <div class="container">
      <div class="row">
        <?php for ($i = 0; $i < 8; $i++) { ?>
        <div class="col-lg-3 my-5">
          <div class="card">
            <div class="col-7 position-absloute" style="top:-50px">
              <img src="./assets/images/dummy.jpeg" alt="" class="mw-100 border rounded-circle">
            </div>
            <div class="card-body">
              <h5 class="card-title">Teacher's Name</h5>
              <p class="cardd-text">
                <b>Course: </b> 5 <br>
                <b>Ratings:</b> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i
                  class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i><i
                  class="fa fa-star text-warning"></i>
              </p>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
    </div>
  </section>
  <!-- Achivement -->
  <section class="py-5 text-white" style="height: 550px; background:#00337e">>
    <div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>Achivements</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus laudantium veniam, sint suscipit
              tempora molestias fugiat illo sunt dolorum nisi?</p>
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Larkmead_School%2C_Abingdon%2C_Oxfordshire.png"
              alt="" class="img-fluid rounded-top rounded-bottom shadow">
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 mb-4">
                <div class="border rounded">
                  <div class="card-body text-center">
                    <span><i class=" text-warning fa fa-graduation-cap fa-3x"></i></span>
                    <h2 class="my-2 font-weight-bold h1">334</h2>
                    <hr>
                    <h4>Graduates</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="border rounded">
                  <div class="card-body text-center">
                    <span><i class=" text-warning fa fa-graduation-cap fa-3x"></i></span>
                    <h2 class="my-2 font-weight-bold h1">334</h2>
                    <hr>
                    <h4>Graduates</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="border rounded">
                  <div class="card-body text-center">
                    <span><i class=" text-warning fa fa-graduation-cap fa-3x"></i></span>
                    <h2 class="my-2 font-weight-bold h1">334</h2>
                    <hr>
                    <h4>Graduates</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="border rounded">
                  <div class="card-body text-center">
                    <span><i class=" text-warning fa fa-graduation-cap fa-3x"></i></span>
                    <h2 class="my-2 font-weight-bold h1">334</h2>
                    <hr>
                    <h4>Graduates</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Testimonial -->
  <section class="py-5 text-white" style="background: #2a2048;">
    <div class="text-center mb-5">
      <h2 class="font-weight-bold">What people Says</h2>
      <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo hic repellendus, eligendi
        beatae suscipit inventore non porro officiis cum eum?</p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="border rounder position-relative">
            <div class="p-4 text-center">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, molestiae.
            </div>
          </div>
          <div class="text-center mt-n2">
            <img src="./assets/images/dummy.jpeg" alt="" class="rounded-circle border" width="100px" height="100">
            <h6>Name of the candidate</h6>
            <p><i>Designation</i></p>
          </div>
        </div>
        <div class="col-6">
          <div class="border rounder position-relative">
            <div class="p-4 text-center">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, molestiae.
            </div>
          </div>
          <div class="text-center mt-n2">
            <img src="./assets/images/dummy.jpeg" alt="" class="rounded-circle border" width="100px" height="100">
            <h6>Name of the candidate</h6>
            <p><i>Designation</i></p>
          </div>
        </div>
      </div>
    </div>


  </section>

  <!-- Footer -->
  <footer style="background:url(./assets/images/asdf.jpg) center/cover no-repeat">
    <div class="py-5 text-white" style="background:#060606c9">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <h5>Useful links</h5>
            <ul class="fa-ul ml-4">
              <ul class="fa-ul text-dark">
                <li><a href=""><i class="fa-li fa fa-angle-right"></i>List icons</a></li>
                <li><a href=""><i class="fa-li fa fa-angle-right"></i>can be used</a></li>
                <li><a href=""><i class="fa-li fa fa-angle-right"></i>as bullets</a></li>
                <li><a href=""><i class="fa-li fa fa-angle-right"></i>in lists</a></li>
              </ul>
            </ul>
          </div>
          <div class="col-lg-4">
            <h5>Social Presence</h5>
            <div>
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fab fa-facebook fa-stack-1x fa-inverse text-dark"></i>
              </span>
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fab fa-instagram fa-stack-1x fa-inverse text-dark"></i>
              </span>
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fab fa-twitter fa-stack-1x fa-inverse text-dark"></i>
              </span>
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fab fa-youtube fa-stack-1x fa-inverse text-dark"></i>
              </span>
            </div>
          </div>
          <div class="col-lg-4">
            <h5>Email us</h5>
            <form action="">
              <!-- Material input -->
              <div class="md-form">
                <input type="email" id="email-s" class="form-control">
                <label for="">Your Email</label>
              </div>
              <button class="btn btn-secondary btn-sm btn-block">Submit</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <!-- Copyright -->
  <section class="py-2 bg-dark text-white text-center">
    <div class="containter-fluid">
      Copyright 2022. All Rights Reserved. <a href="#" class="text-muted text-right">School Manegment System</a>
    </div>

  </section>

  <?php include('footer.php') ?>