<?php
  require("header.php");
  $id = $_GET['id'];
  $date1 = $_GET['date1'];
  $date2 = $_GET['date2'];
  $row = $reservation->confirmReciept($id);

  $indate = date_create($date1);
  $outdate = date_create($date2);
  $diff = date_diff($indate, $outdate);
  $totaldays = $diff->format('%a');

  if(isset($_POST['book'])){
    $duration = $_POST['duration'];
    $totalpay = $_POST['price'];
    $room_id = $_GET['id'];
    $userid = $_SESSION['userid'];
    $addreservation = $reservation->store($userid, $room_id, $date1, $date2, $totalpay);
  }
?>   

<section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(../images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
              <h1>Confirm Reciept</h1>
              <p>Discover our world's #1 Luxury Room For VIP.</p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="mb-5">Confirm Reciept</h2>
              <div class="card mb-3">
    <div class="card-header">
      </div>
        <div class="card-body">
        <form method="post">
                    <div class="form-group mt-2 mx-2">
                        <label>First Name</label>
                        <input type="text" name="fname" class="form-control" readonly value="<?php echo $userdetail['firstname'];?>">
                    </div>
                    <div class="form-group mt-2 mx-2">
                        <label>Last Name</label>
                        <input type="text" name="lname" class="form-control" readonly value="<?php echo $userdetail['lastname'];?>">
                    </div>
                    <div class="form-group mt-2 mx-2">
                        <label>Room Type</label>
                        <input type="text" name="type" class="form-control" readonly value="<?php echo $row['room_type'];?>">
                    </div>
                    <div class="form-group mt-2 mx-2">
                        <label>Room Price</label>
                        <input type="text" name="rprice" class="form-control" readonly value="<?php echo $row['room_price'];?>">
                    </div>
                    <div class="form-group mt-2 mx-2">
                        <label>Duration</label>
                        <input type="text" name="duration" class="form-control" readonly value="<?php echo $totaldays;?>">
                    </div>
                    <div class="form-group mt-2 mx-2">
                        <label>Total Payment</label>
                        <input type="text" name="price" class="form-control" readonly value="<?php echo $row['room_price'] * $totaldays;?>">
                    </div>
                    <button type="submit" name="book" class="btn btn-info btn-block">Book</button>
                </form>
        </div>
      </div>
    </div>
              </div>
    
              </div>
        </div>
      </div>
    </section>
    <!-- END section -->


   
   

    <section class="section-cover" data-stellar-background-ratio="0.5" style="background-image: url(../images/img_5.jpg);">
      <div class="container">
        <div class="row justify-content-center align-items-center intro">
          <div class="col-md-9 text-center element-animate">
            <h2>Relax and Enjoy your Holiday</h2>
            <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quidem tempore expedita facere facilis, dolores!</p>
            <div class="btn-play-wrap"><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn-play popup-vimeo "><span class="ion-ios-play"></span></a></div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
   
    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3>Phone Support</h3>
            <p>24/7 Call us now.</p>
            <p class="lead"><a href="tel://">+ 1 332 3093 323</a></p>
          </div>
          <div class="col-md-4">
            <h3>Connect With Us</h3>
            <p>We are socialized. Follow us</p>
            <p>
              <a href="#" class="pl-0 p-3"><span class="fa fa-facebook"></span></a>
              <a href="#" class="p-3"><span class="fa fa-twitter"></span></a>
              <a href="#" class="p-3"><span class="fa fa-instagram"></span></a>
              <a href="#" class="p-3"><span class="fa fa-vimeo"></span></a>
              <a href="#" class="p-3"><span class="fa fa-youtube-play"></span></a>
            </p>
          </div>
          <div class="col-md-4">
            <h3>Connect With Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.</p>
            <form action="#" class="subscribe">
              <div class="form-group">
                <button type="submit"><span class="ion-ios-arrow-thin-right"></span></button>
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
              
            </form>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            &copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/jquery-migrate-3.0.0.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>

    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/magnific-popup-options.js"></script>
    <script src="../https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

    <script>
      
      $('#arrival_date, #departure_date').datepicker({});

    </script>

    

    <script src="../js/main.js"></script>
  </body>
</html>