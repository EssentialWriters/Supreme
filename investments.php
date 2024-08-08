 <?php
include_once ("Php/session.php");
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 
  
  <title>Alpha FX | Investments</title>
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
    style="padding: 20px;   ;background-color: black;"> 
                                           
    
    <a href="withdraw.php" class="logo">
            
      <img class="Green Dollar-logo" src="  IMG_20240406_202141.jpg  " alt=" SmartFX" width="100" height="50"   style="    
 
"> </a>
    
    
    </div>
    <div class="text right">
        <a href="dash.php" style="position: absolute;right: 10px;top: 15px;color: black; background-color: dodgerblue ;  " class="btn  ">Dashboard</a>
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

       </head>
 
  </head>
  <body>
    
<p>
 
</p>
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
            <div class="row">
              <div class="col-md-12">
              <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                  <div class="d-md-block d-none">
                    <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
                    <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
                  </div>
                </div>
                <div class="tab-content tab-transparent-content">
                  <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                    <div class="row">
                      <div class="col-xl-4 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <?php
                                $result2 = mysqli_query($conn,"SELECT count(*) FROM  investuser where username = '".$_SESSION['username']."'");
                                $row2 = mysqli_fetch_row($result2);
                                $numrows2 = $row2[0];

                            ?>
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Investments : </h5>
                            <h2 class="mb-4 text-dark font-weight-bold">
                                <?php 
                                    print $numrows2; 
                                ?>
                            </h2>
                            
                            <p class="mt-4 mb-0">Total Investments.</p>
                            
                          </div>
                        </div>
                      </div>

                      <br>
                      <div class="col-xl-4 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <?php
                    
                               /* total of Investment amount in COMPANY*/
                               $query1="SELECT sum(tamount) as total FROM  investuser where username = '$username'"; 
                               $result1 = mysqli_query($conn,$query1);
                               $totalInvest=0;


                               if (!$result1) {
                                    printf("Error: %s\n", mysqli_error($conn));
                                    $totalInvest=0;
                                    exit();
                                  }else{
                                  while($row1 = mysqli_fetch_array($result1))
                                  {
                                  $totalInvest="$row1[total]";
                                    }
                               }
                            ?>
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Investment Earnings : </h5>
                            <h2 class="mb-4 text-dark font-weight-bold">
                                <?php 
                                 echo (int)$totalInvest;
                                ?>
                            </h2>
                            
                            <p class="mt-4 mb-0">Total Investment Earnings.</p>
                            
                          </div>
                        </div>
                      </div>
  
  <br>
<br>
<br>

                    
                            <?php
                    
                               /* total of Investment amount in COMPANY*/
                               $query5="SELECT sum(invested) as total FROM  investuser where username = '$username'"; 
                               $result5 = mysqli_query($conn,$query5);
                               $totalInvest=0;


                               if (!$result5) {
                                    printf("Error: %s\n", mysqli_error($conn));
                                    $totalInvest=0;
                                    exit();
                                  }else{
                                  while($row1 = mysqli_fetch_array($result5))
                                  {
                                  $totalInvest="$row1[total]";
                                  }
                               }
                            ?>
        <div class="col-xl-4 col-lg-6 col-sm-6 grid-margin stretch-card"style="background-color:transparent ;">
                            <br>
                 <br>
                 <br>
                 <div class="card-body text-center"style="background-color: lime;">
                            <h5 class="mb-2 text-dark font-weight-normal">Total Invested : </h5>
                            <h2 class="mb-4 text-dark font-weight-bold">
                                <?php
                                 echo ((int)$totalInvest);
                                ?>.00 Ksh
                            </h2>
                            
                            <p class="mt-4 mb-0">Invested amount </p>
                            
                          </div>
                        </div>
                      </div>
                       <!-- 
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Followers</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">4250k</h2>
                            
                            <p class="mt-4 mb-0">Decreased since yesterday</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">25%</h3>
                          </div>
                        </div>
                      </div>
                        -->
                    </div>
                    
                  
                  </div>
                </div>
              </div>
            </div>

            <br>
                  <br>
                  <br> <br>
                  <br> <br>
                  <br> <br>
                  <br>
                  <br>
                  <br>
                  <br> <br>
                  <br>
                  <br>

           <div class="col-lg-12 grid-margin stretch-card"   style="background-color: #17181a ;border-radius:5px;border-radius:5px;color: red;  "    >
           <div class="card" style="background-color: lime;"  >
                              <div class="card-body table-responsive">
                 
                    <table class="table table-dark table-{RED} table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th >Inv.. id</th>
                          <th >Package</th>
                          <th >Invested</th>
                          <th >date</th>
                          <th >Status</th>
                          <th >Period</th>
                          <th >Earned</th>
                          
                        </tr>
                      </thead>
                              </table>
                        <?php
                              $timer=0;
                              $query="SELECT id,username,invested,date,active,tamount,mpesacode,pcktaken,time FROM  investuser where username='$username'"; 
                              $result = mysqli_query($conn,$query);
                              if (!$result) {
                                    printf("Error: %s\n", mysqli_error($conn));
                                    exit();
                                }else{
                                   
                                
                              while($row = mysqli_fetch_array($result))
                              {
                               $id="$row[id]";
                               $username="$row[username]";
                               $invested="$row[invested]";
                               $date="$row[date]";
                               $time="$row[time]";
                               $active="$row[active]";
                               $tamount="$row[tamount]";
                               $mpesacode="$row[mpesacode]";
                               $pcktaken="$row[pcktaken]";
                               //$regtime="$row[regtime]";
                                 // echo $pcktaken;
                               if($active=0){
                                $status="Inactive";

                               }else{
                                $status="Active";
                               } 
                                  
                               if($pcktaken==10){
                                $pcktaken="Bronze";
                                $days=3;
                               }else if($pcktaken==20){
                                $pcktaken="Solster";
                                $days=4;
                               }else if($pcktaken==30){
                                $pcktaken="Pluto";
                                $days=5;
                               }else if($pcktaken==40){
                                $pcktaken="Diamond";
                                $days=7;
                               }else if($pcktaken==50){
                                $pcktaken="Beast";
                                $days=10;
                               }else {
                                   $pcktaken="Not Input";
                               }
                                  
                                
                           /*
                           echo "<li class='list-group-item' >
                                              <div class='media'>
                                              <div class='media-body' style='padding:5%;'>
                                                <div>Username : $row[username]</div>
                                    
                                                <div>Invested : $row[invested]</div>
                                                <br>
                                                
                                                <div>Investment Date : $row[date] </div>
                                            </div>
                                          </li> "; *

                                  
                                  $expected=30*$invested*0.03;
                                  $endDate=date('Y-m-d', strtotime($date. ' + 30 days'));
                                  /*$getDateTime = date('H:i:s', $regtime);
                                  $Timeget=strtotime("+4 hours", strtotime($getDateTime));
                                  echo $getDateTime;
                                  echo $Timeget;*/
                                  //echo $regtime->format("h:i:s A");
                                  /*
                                  $your_date = date("h:i:s A", strtotime($regtime));
                                  $your_date;
                                  $hour = date("h", strtotime($your_date));
                                  $minutes = date("i", strtotime($your_date));
                                  $now=date("h:i:s A");
                                  $current = $now-$your_date;
                                  $gethours=$current-23;
                                  $nowtime = date("i");
                                  $getminutes= $nowtime- $minutes;*/
                                  
 
                                          // Add days to date and display it
                                  /*         
                                 if($gethours==24){
                                     $getActualMinutes = 0;
                                 }
                                  else{
                                      $getActualMinutes=60-$getminutes;
                                  }*/

                                         echo "
                                      
                                                <tr >
                                                  <td>$row[id]</td>
                                                  <td>$pcktaken</td>
                                                  <td>$row[invested]</td>
                                                  <td>$row[date]</td>
                                                  <td>$status</td>
                                                  <td>$days days</td>
                                                  <td>$row[tamount]</td>
                                                </tr>";
                                            
                                                            
                        
                        
                      }
                              }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div> 
  <br>

  
    
   



                           
<br>
            
    
<div style="position: fixed; left: 0; bottom: 0; z-index: 999999; width: 100%;">
  <div style="width: 100%; background-color: #000; overflow:hidden; box-sizing: border-box; text-align: right; line-height:14px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; padding:1px;padding: 0px; margin: 0px;">
    <div style="height:40px;">
      <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=" width="100%" height="36" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;">
       </iframe>
    </div>
    </div>
  </div>       

          </div>
          
        </body>




</html>
