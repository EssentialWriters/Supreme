<?php
include_once ("Php/session.php");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 
  
  <title>Supreme - My Account</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/static/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/static/assets/css/style3.css" rel="stylesheet">
 



</head>

 
  
<body style="background-color:    #17181a   ;">
   
   <div                  
    style="padding: 20px;   ;background-color: black; "> 
                                           
    
    <a href="withdraw.php" class="logo">
            
      <img class="Green Dollar-logo" src="  IMG_20240406_202141.jpg  " alt=" SmartFX" width="100" height="50"   style="   "> </a>
    </div>
</div><br>
    <div class="text right">
        <a href="dash.php" style="position: absolute;right: 10px;top: 15px;color: black; background-color: dodgerblue ; " class="btn btn-primary" >Dashboard</a>
    </div>

    </div>
    </div>

  
   
  
   
   

  <main >
    
<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <link rel="stylesheet" href="/static/css/login2.css"/>
       <meta name="theme-color" content=" rgba(2, 1, 15, 0.822)">
   


       <!DOCTYPE html>
       <html lang="en">
       <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         
   <script src="Withdraw.js"></script>
  
   <script
     type="text/javascript"
     src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"
   ></script>
  
   <script type="text/javascript">
    (function () {
      emailjs.init("rCVBQ_1skn3YeuNBf");
    })();
  </script>





<br>
    <!-- ======= Services Section ======= -->
    
      <div class="container" style="background-color: ;"class="services">
       
    
        <div class="row">
          
          <div data-aos="fade-up">
            <div class="icon-box " style="width:100% ;background-color:    #17181a      color: white;">









    <!-- ======= Services Section ======= -->
  

<div class="container" style="background-color: ;">

<!-- partial -->
<div class="main-panel">
 

    
       <div class="row">
      
       <?php
               $sql ="SELECT * FROM affiliateuser WHERE username='".$_SESSION['username']."'";
               $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($result))
                {
                 $ac="$row[images]";
                }
                 
                 ?>

              
                 
                       <!-- <div class="profile_image"> 
                            <img class="img-xs rounded-circle" src="uploads/<?php echo $ac; ?>">
            
                        </div>-->
                       
        <div class="col-md-6 col-xl-4 grid-margin stretch-card"    style="background-color:#17181a ;"    >
        <div class="card"  style=" background-color:lime " >
          <div class="card-body">
            <h4 class="card-title">My Account</h4>
            <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                <?php
                     if(isset($_GET['error'])){
                         echo "<h3 style='color:red;'>".$_GET['error']."</h3>";
                     }
                  ?>
              
            </div>
            <div class="d-flex py-4">
              <div class="preview-list w-100">
                <div class="preview-item p-0">
                  <div class="preview-thumbnail">

                    <img src="uploads/<?php echo $ac; ?>" class="rounded-circle" alt=""   style=" height: 30vh;width: auto;"   >

                  </div> 
                  <br>
                  <div class="preview-item-content d-flex flex-grow">
                    <div class="flex-grow">
                      <div class="d-flex d-md-block d-xl-flex justify-content-between">
                        <h6 class="preview-subject" style="color:yellowgreen;background-color:black ">Helloo Trader <?php echo $username;?>...</h6>
                        <style>



</style>
                        <p class="text-muted text-small"> </p>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
                
            </div>
              <form class="forms-sample" action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label>Choose File</label>
                    <input  class="form-control p_input" type="file" name="profile" id="profile" style="background-color: black !important;">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn" name="submit" style="color:black;";>Update Profile</button>
                </div>
              
            </form>
            
          </div>
        </div>
      </div>
      <br>
           <br>  <br>  <br>
           <br>  <br>
           <br>  <br>
           <br>
           <br>  <br>  <br>
         
           <br>  <br>  <br>
           <br>  <br>
           <br>  <br>
           <br>
           <br>  <br>  <br>
         

           <br>  <br>  <br>

           <br>  <br>  <br>
           <br>  <br>
           <br>  <br>
      <?php
       
              /*Affiliate User Data*/



              $query="SELECT * FROM  affiliateuser where username='$username' ";
               $result = mysqli_query($conn,$query);
               $i=0;

               $id="";
               $username="";
               $firstname="";
               $lastname="";
               $date="";
               $firstname="";
               $lastname="";
               $email="";
               $active="";
               $Nationality="";
               $phone="";
              
               $refered="";

              while($row = mysqli_fetch_array($result))
              {
                
                $id="$row[id]";
                $username="$row[username]";
                $firstname="$row[firstname]";
                $lastname="$row[lastname]";
                $date="$row[date]";
                $firstname="$row[firstname]";
                $lastname="$row[lastname]";
                $email="$row[email]";
                $refered="$row[referedby]";
                $active="$row[active]";
                $Nationality="$row[country]";
                $phone="$row[phone]";
                $password="$row[password]";
              }
              if($active==1){
                $accinfo="Account Is Active";
              }else{
                $accinfo="Account Not Active";
              }
              ?>
           <br>
           <br>  <br>
           <br>
     <div class="col-md-6 grid-margin stretch-card"  style="background-color: #17181a ;" class="services">
     <div data-aos="fade-up">
         
        <div class="card"  style="background-color:lime;">
          <div class="card-body">
            <h4 class="card-title">My Info</h4>
            <p class="card-description"> Account Profile </p>
            
              <br>
            <form class="forms-sample "  style=" color:blue">
              <style>
                  input{
                    background-color: !important;
                      color: aqua !important;
                  }
                </style>
              <div class="form-group row ">
                
              
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control black" id="exampleInputUsername2" placeholder="<?php echo $username; ?>" readonly="true">
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control " id="exampleInputEmail2" placeholder="<?php echo $email; ?>" readonly="true">
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="exampleInputMobile" placeholder="<?php echo $phone; ?>" readonly="true">
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Registered On</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="exampleInputMobile" placeholder="<?php echo $date; ?>" readonly="true">
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Trades</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="exampleInputMobile" placeholder="Loading..."  readonly="true">
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">State</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control " id="exampleInputEmail2" placeholder="<?php echo $Nationality; ?> "readonly="true">
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Referred By</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control "   id="exampleInputEmail2" placeholder="<?php echo $refered; ?>" readonly="true">
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Account Status</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control " id="exampleInputEmail2" placeholder="<?php echo $accinfo; ?>" readonly="true">
                </div>
              </div>
              
              <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">My Password</label>
              <div class="col-sm-9">
                  <input type="email" class="form-control " id="exampleInputEmail2" placeholder="<?php echo $password; ?>" readonly="true">
                </div>
              </div>
              </div>
              </div>
              
            </form>
          </div>
        </div>
      </div>
                      

               
      </div>
        </div>
      </div>
   
    
      </div>
        </div>
      </div>

      </div>

      </div>
                </div>
              </div>
             

      <?php
                     $regDate ="SELECT date FROM affiliateuser WHERE username='$username'";
                     $resultDate = mysqli_query($conn,$regDate);
                     
                     while($row = mysqli_fetch_array($resultDate)){
                         $Date="$row[date]";
                     }
                     $today=date("d F Y");         
                  ?>
                <div class="dropdown ms-0 ml-md-4 mt-2 mt-lg-0">
                  <br>
                  <br> <i class="mdi mdi-calendar me-1"style="color:lime;">
                  <p style="color:orange">
               Account Created on</p><?php
                  echo $Date;?> <br><br><br><br> <p style="color:orange"> Last Login</p><?php echo $today;?>
                  
                </i>
                  
                </p>
  </div>
       
  </div>   </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- Code injected by live-server -->

</body>
</html>
<br>
  <br>
            <br>
                        </main>
           <!--  -->

            </div>
      
			<!--Mega Bot-->

		<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        </head>
<script src="Withdraw.js"></script>

<script
  type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"
></script>

<script type="text/javascript">
    (function () {
      emailjs.init("rCVBQ_1skn3YeuNBf");
    })();
  </script>
 
      </body>
  <br>
        
  
  <!-- Vendor JS Files -->
  <script src="/static/assets/vendor/purecounter/purecounter.js"></script>
  <script src="/static/assets/vendor/aos/aos.js"></script>
  <script src="/static/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/static/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/static/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/static/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/static/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/static/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/static/assets/js/main.js"></script>
  
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    

    <script src="Payout.js"></script>










    <!doctype html>
    <html lang="en">
      <head>
        
        <!-- Required meta tags      AM
    You sent
    💰💸 💫✨
                      -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/static/css/homex.css">
    
         <script src="https://kit.fontawesome.com/adcef960e9.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
         <meta name="theme-color" content=" rgba(2, 1, 15, 0.822)">
    
         <script href="/static/css/particles1.json"></script>
    
    
    
    
    
     <!-- ===== IONICONS ===== -->
     <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    
     <!--===== MAIN JS =====-->
     <script src="app.js"></script>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
          AOS.init({
              offset: 150,
              duration: 1000
          });
      </script>


      </html>