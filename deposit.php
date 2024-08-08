<?php
include_once ("Php/session.php");

?>



<?php
      $username=mysqli_real_escape_string($conn,$_SESSION['username']);
      $query2="SELECT Id,username,email,date,active,invtimes,pcktaken,accounttype,tamount,phone FROM  affiliateuser where username='$username'"; 
      $result2 = mysqli_query($conn,$query2) or die( mysqli_error($conn));


      $phone="0";
      while($row = mysqli_fetch_array($result2))
      {
          $phone="$row[phone]";
      }
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Alpha FX | Deposit</title>
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

  <!-- =======================================================
  * Template Name: Moderna - v4.8.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background-color: rgb(22, 22, 22);">
  
   
    <div style="padding: 20px;  color:aliceblue;  background-color: black;">
    
    
    
    
    
    
      <a href="deposit.php" class="logo">
            
        <img class="Green Dollar-logo" src="IMG_20240406_202141.jpg" alt=" SmartFX" width="100" height="50"   style=" 
                
   
  "></a>
    
    
    
    
    
    
    
    
    </div>
    <div class="text right">
        <a href="dash.php" style="position: absolute;right: 10px;top: 15px;color: #000;
          "  class="btn btn-primary">Dashboard</a>
    </div>

  <main >
  
    <br>
    <br>  
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
   
  </head>
  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container" style="  ;">
       

        <div class="row">
          
         


          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" >
            <div class="icon-box "  style="width:100% ;background-color:       black      ; outline-width: yellowgreen;                           
                                    ">
                   <div class="text-center">
                       <div style="margin: 30px; "></div>
           
              <img src="        1699811772227.jpg   " style="width: 200px; "  alt="" class="user-profile-pic profile-pic"><br><br>
  
                   <div class="container" >
                    <div class="text-center" style="margin: 50px; 
                ">
                    <a class="btn btn-success"   type="button" data-toggle="modal" data-target="#exampleModal1"        style="  
                          color: #000;
  ">Deposit</a>
                
                    </div>
                   
          
          
          
          
                    <div class="credits" style="color: yellowgreen;  font-family: monospace;">
                      <!-- All the links in the footer should remain intact. -->
                      <!-- You can delete the links only if you purchased the pro version. -->
                      <!-- Licensing information: https://bootstrapmade.com/license/ -->
                      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
                     Forex Made Simple 
                     <h7> <i style="color: orange;">Alpha</i>   <i style="color: whitesmoke;">FX</i>  / Writers </h7>
                    </div>
                  </div>
          
                  </div>
          </div>

         

        </div>








      </div>
    </section><!-- End Services Section -->
 

 







           
    <p> </p>



<br>
<br>
<br>
<br>
<br>



    
			<!--Deposit Popup-->

		
		
		<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
			<div style="margin-top: 100px;"></div>

			<div class="modal-dialog" role="document" >
				<div class="modal-content modal-content-bg" style="background:  #17181a ;border-radius:5px;border-radius:5px;color: yellowgreen;   
         ">
					<div class="modal-header">
						<strong class="modal-title method-name " id="exampleModalLabel">Mpesa Deposit</strong>
           
						<a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" style="color:black">&times;</span>
						</a> <div>
            </div>         </div>
                  <h7 style="color: transparent;">Alpha<i style="color: transparent;"></i> <i style="color: yellowgreen;"></i> </h7>

                
             
                  <form class="" action="Php/stkpush.php" method="POST">
 
                <div class="form-group">
									  
                  <br>
                  <div class="modal-header">
                                   
                    <input id="amount" type="text"  name="currency" value="EUR/USD" required autocomplete="off" hidden>
									
									<div class="input-group">
 
                    <div class="input-group">
                    <input  class=" d-block custom2 form-control mt-3 bg-white " type="text"  name="phone-number" step="0.01" class="form-control form-control-lg" placeholder="Enter Your Phone Number"  value="<?php echo $phone ?>"  Required  readonly >
                      </div>
<br><br><br>
                    <div class="input-group">
                    <input  class=" d-block custom2 form-control mt-3 bg-white " step="0.01" class="form-control form-control-lg" id="amount" type="number" placeholder="0.00" step="0.01" name="amount" placeholder=" Enter Amount" Required >
                      </div>
                    
<br>
<br><br>
   
 <div class="modal-footer " >
							<div class="text-center">
							<input type="submit" class="btn btn-md " name="submit"  value="Deposit" style="background-color: yellowgreen;"> </button>
              </form>
                      </div>

                      </div>

                      </div>
                      </div>
<br><br>

								</div>

                      </div>

                      </div>




                </div>
               
    





                      </form>




                
              
              <!--   
					<form action="mpesa" method="post" class="withdraw" >

					<input type="hidden" name="csrfmiddlewaretoken" value="5SPKFVLSbilFLzYRs0obTMiT1Z3HwseuH61GYrzURSGwddFCG5S5GFMtIIq4Gsnb">

					     <div class="modal-body">
							<div class="form-group">
								<input type="hidden" name="currency" class="edit-currency" value="">
								<input type="hidden" name="method_code" class="edit-method-code" value="">
							</div>
                                  
                                    
                                     
                                     
                      
                                
                                     
                                     
                                     
                            <div class="form-group">
                                <label>Phone</label>
                                
                                <div class="input-group">
                                    <input id="amount" type="number" placeholder="0722000000" class="form-control form-control-lg" value="" name="phone" required autocomplete="off" style="background-color:white;color:black">
                                
                            </div>
									<div class="form-group">
									<label>Amount in Ksh</label>
									
									<div class="input-group">
										<input id="amount" type="number" placeholder="0.0" class="form-control form-control-lg"  name="amount" required autocomplete="off" style="background-color:white;color:black">
									
								</div>
							</div>
                            </div>

                    <?php if (isset($_GET['error']) && $_GET['error'] != '') { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>

                    <?php unset($_GET['error']);
                    } ?>

                </div>
                          
													</div>
						<div class="modal-footer " >
							<div class="text-center">
							<button type="submit" id="btnFetchxs" class="btn btn-md btn-primary">Deposit</button>
                                                    
                                                
                                               
                                          
                                               
              <script type="text/javascript"> 
                $(document).ready(function() {
                  $("#btnFetchxs").click(function() {
                  // disable button
                  $(this).prop("disabled", false);
                  // add spinner to button
                  $(this).html(
                  '<i class="fa fa-circle-o-notch fa-spin"></i> Processing...'
                  );
                  });
                  });
              
              </script>

						   </div>
						</div>
					</form>
                 
                 -->
                  
				</div>
			</div>
		</div>

    
    

<br>
<br>
<br>
<br>
<br>

    <br>
<br>
<br>
<br>
<br>
		</div>
 
    <!-- ======= Services Section ======= -->
    <section class="services">
      
       
      <div class="col-lg-12 grid-margin stretch-card" style="background-transparent: #17181a ;"> 
                            <div class="card" style="color: red; background-color: #17181a;">
                              <div class="card-body table-responsive"  style="background-color: lime ;">  
                                <h4 class="card-title">My Deposits:</h4>
                                <p style=" color-yellowgreen">Automatic Deposits</p>
                                <table class="table table-dark table-{RED} table-bordered table-striped table-hover" >
                                  <thead>
                                    <tr>
                                      <th >Inv.. id</th>
                                      <th >MPESA_Code</th>
                                      <th >Invested</th>
                                      <th >date</th>
                                      <th >Status</th>
                                      <th >Earned</th>
                                      <th >Expected Earnings</th>
                                      <th >End Date</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      $query="SELECT id,username,invested,date,active,tamount,mpesacode,pcktaken FROM  investuser where username='".$_SESSION['username']."' AND invested>0"; 
                                      $result = mysqli_query($conn,$query);
                                           
                                       $id=0;
                                       $username=0;
                                       $invested=0;
                                       $date=0;
                                       $active=0;
                                       $tamount=0;
                                       $mpesacode=0;
                                      while($row = mysqli_fetch_array($result))
                                      {
                                       $id="$row[id]";
                                       $username="$row[username]";
                                       $invested="$row[invested]";
                                       $date="$row[date]";
                                       $active="$row[active]";
                                       $tamount="$row[tamount]";
                                       $mpesacode="$row[mpesacode]";
                                       $pck="$row[pcktaken]";
                                          
                                       if($active==0){
                                        $status="Inactive";

                                       }else{
                                        $status="Active";
                                       }
                                          
                                          
                                      
                                          
                                          $qu="SELECT * FROM  packages where id = '$pck'"; 
                                          $re = mysqli_query($conn,$qu);
                                          $days=0;
                                          $dailyearn=0;
                                          while($r = mysqli_fetch_array($re))
                                          {
                                            $pckid="$r[id]";
                                            $pckname="$r[name]";
                                            $pckprice="$r[price]";

                                            $pckcur="$r[currency]";
                                            $pcksbonus="$r[sbonus]";
                                            $days="$r[days]";
                                            $dailyearn="$r[level1]";
                                            
                                            
                                          //fetching elevl settings ends
                                          //Customiezed Code Part 1 Ends
                                          } 
                                      
                                       echo $days;
                                          echo $dailyearn;
                                          
                                       
                                       /*
                                       echo "<li class='list-group-item' >
                                                          <div class='media'>
                                                          <div class='media-body' style='padding:5%;'>
                                                            <div>Username : $row[username]</div>

                                                            <div>Invested : $row[invested]</div>
                                                            <br>

                                                            <div>Investment Date : $row[date] </div>
                                                        </div>
                                                      </li> "; */

                                          $expected=$days*$dailyearn;
                                          $endDate=date('Y-m-d', strtotime($date. ' +'.$days.'days'));
                                          
 
                                          // Add days to date and display it
                                           
 

                                             echo "

                                                    <tr >
                                                      <td>$row[id]</td>
                                                      <td>$row[mpesacode]</td>
                                                      <td>$row[invested]</td>
                                                      <td>$row[date]</td>
                                                      <td>$status</td>
                                                      <td>$row[tamount]</td>
                                                      <td>$expected</td>
                                                      <td>$endDate</td>
                                                      
                                                    </tr>";
                                            
                                                            
                        

                                      }
                                        ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                      
                    </div>
                    
                  
                  </div>
                </div>
              </div>
            </div>
          </div>

    </section><!-- End Services Section -->
 

 







           
    <p> or</p>



<br>
<br>
<br>
                  </div>
                </div>
              </div>
            </div>
          </div>
<br>
<br>




<br>
<br>
<br>
                  </div>
                </div>
              </div>
            </div>
          </div>
<br>
<br>
                 
              

                 
                 
                 
				</div>
			</div>
		</div>

		</div>
 

  <!-- ======= Footer ======= -->





 
    

<br>
<br>
<br>
<br>
<br>
  </footer><!-- End Footer -->















 <!-- Custom minified CSS -->
 <link rel="stylesheet" href="https://leewihshylockloans.websites.co.in/service-pro/css/custom.min.css?v=621856441"> 


        






<br>













  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  

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
  
	<div style="position: fixed; left: 0; bottom: 0; z-index: 999999; width: 100%;">
		<div style="width: 100%; background-color: #000; overflow:hidden; box-sizing: border-box; text-align: right; line-height:14px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; padding:1px;padding: 0px; margin: 0px;">
			<div style="height:40px;">
				<iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=" width="100%" height="36" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;">
				 </iframe>
			</div>
			</div>
		</div>       

  
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    




    <br>
<br>
<br>
                  </div>
                </div>
              </div>
            </div>
          </div>
<br>
<br>









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
    
 
<br>
<br>

    </body>
    </html>






















    <br>
<br>
<br>
                  </div>
                </div>
              </div>
            </div>
          </div>
<br>
<br>
 

</body>

</html>