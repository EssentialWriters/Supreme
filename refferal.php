<?php
include_once ("Php/session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 
  
  <title>Alpha FX | Invitation Link</title>
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

<body style="   background-image: url(Screenshot_14-4-2024_82244_127.0.0.1.jpeg  );">
   
   <div                  
    style="padding: 20px;   ;background-color: black;"> 
                                           
    
    <a href="refferal.php" class="logo">
            
      <img class="Green Dollar-logo" src="IMG_20240406_202141.jpg" alt=" SmartFX" width="100" height="50"   style=" 
    
 
"></a>
    
    
    </div>
    <div class="text right">
        <a href="dash.php" style="position: absolute;right: 10px;top: 15px;color: black; background-color: dodgerblue ;   " class="btn  ">Dashboard</a>
    </div>

  <main >
    
  <head>
 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <link rel="stylesheet" href="/static/css/login2.css"/>
       <meta name="theme-color" content=" rgba(2, 1, 15, 0.822)">
   
  </head>
 
  <br>
   
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="refferal.css">
  <title>Alpha FX | Invitation System</title>
</head>
<body    style="  background-image: url( Screenshot_14-4-2024_82244_127.0.0.1.jpeg);" >

<div id="referral-info">
    <h3 style="color: yellowgreen;">Invitation History</h3>

  <br>
 
    <br>
    <p style="color: yellowgreen;">Total Invites: <span id="total-invites" style="color: dodgerblue;">0</span></p>
    <p style="color: yellowgreen;">Invited Users: <span id="invited-users" style="color: dodgerblue;">0</span></p>
  </div>
  
  <br>
 
 <br
 <br>
 
 <br>
 <?php
                            
                        
                            /*Get Total Investment amount*/
                            $queryv="SELECT tamount FROM  investuser where username = '$username'";
                            $result = mysqli_query($conn,$queryv);
                            $Invtamount=0;
                            while($row1 = mysqli_fetch_array($result)){
                              $Invtamount = "$row1[tamount]";
                            }
                            
                           /*Get Total Affiliate amount*/
                            $query2="SELECT tamount FROM  affiliateuser  where username = '$username'";
                            $result2 = mysqli_query($conn,$query2);
                            $Reftamount=0;
                            while($row1 = mysqli_fetch_array($result2)){
                              $Reftamount = "$row1[tamount]";
                            }
                            
                            $TotalAccount=$Reftamount+$Invtamount;
                            
                                
                            ?>
 <br>
 
 <br
 <br>
 
 <br> 
 
  <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card" style="background-color: transparent;">
                        
                          <div class="card-body text-center"style="background-color: dodgerblue;">
                            <h5 class="mb-2 text-dark font-weight-normal">My Refferal Program</h5>


   
                            
                          </div>
                        </div>
                      </div>
                        
</div>
 
<div>
  <div>
 
</div>
<br>
             

 <br>
  
 <br>
 <br>
                        <?php
                             $sqlRefusername ="SELECT username FROM affiliateuser WHERE id='$username'";
                             $resultusername = mysqli_query($conn,$sqlRefusername);

                             while($row = mysqli_fetch_array($resultusername))
                             {
                                     $username="$row[username]";
                             }
                          ?>
 
 <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card" style="background-color:  transparent;"  >
                        <div class="card">
                          <div class="card-body text-center"  style="background-color: orange;">
                          
                             


                                <?php
// Assume the user is logged in and their username is 'user1' (this is just for example purposes)

$referral_link = "http://localhost/Supreme/signup.php?ref=" . $username;
?>
<input type="text" id="referralLink" value="<?php echo $referral_link; ?>" readonly>
<button onclick="copyToClipboard()">Copy Referral Link</button>


                              </div>
                                <div class="mt-1">
                                  
                                </div>
                                <script>
        function copyToClipboard() {
            var copyText = document.getElementById("referralLink");
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices
            document.execCommand("copy");
            alert("Copied the referral link: " + copyText.value);
        }
    </script>
                          </div>
                        </div>
                      




<br>
            
<?php


// Update referral earnings for the referrer
if (!empty($referedby)) {
    $update_stmt = $conn->prepare("UPDATE users SET  $Reftamount = $Reftamount + 100.00 WHERE username = ?");
    $update_stmt->bind_param("s", $referedby);
    $update_stmt->execute();
    $update_stmt->close();
}



?>
    

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

<?php
    $query="SELECT id,username,invested,date,active,tamount,mpesacode,pcktaken,updated,time FROM  investuser where username='$username'"; 
    $result = mysqli_query($conn,$query); 
    $id=0;
    $username=0;
    $invested=0;                                  
    $date=0;                                   
    $active=0;                                
    $tamount=0;                                  
    $mpesacode=0;
    $updated=0;
    $pck=0;                                                                                                  
                                      
    while($row = mysqli_fetch_array($result)){
        $id="$row[id]";
        $username="$row[username]";
        $invested="$row[invested]";
        $date="$row[date]";
        $active="$row[active]";
        $tamount="$row[tamount]";
        $mpesacode="$row[mpesacode]";
        $pck="$row[pcktaken]";
        $updated="$row[updated]";
        $time="$row[time]";
        
        $qu="SELECT * FROM  packages where id = '$pck'"; 
        $re = mysqli_query($conn,$qu);
        $days=0;
        $dailyearn=0;                                  
        while($r = mysqli_fetch_array($re)){
            $pckid="$r[id]";
            $pckname="$r[name]";
            $pckprice="$r[price]";

            $pckcur="$r[currency]";
            $pcksbonus="$r[sbonus]";
            $days="$r[days]";
            $dailyearn="$r[dailyearn]";
        }
        $Regdate = strtotime($date)."<br>";                                                                                           //get //Today       
        $today=time();

        //Get Difference from registration to today
        $difference = ((int)$today)-((int)$Regdate);
        $Period = round($difference/(60*60*24));                                                                                             //echo $Period." Period:<br>";   
        $todaysdate=date("Y-m-d");                                                                                                

        if($updated==$todaysdate){
            //echo "updated today";
        } else{
            //get the difference in earning days
            //echo $days;

            $endDate=date('Y-m-d', strtotime($date. ' + '.$days.'days'));
            if($updated==$date){
                $todaysdate=date("Y-m-d");
                //echo $todaysdate;
            }else if($updated > $endDate || $endDate > $todaysdate){
                //echo "The Earning cant continue";
            }else if($updated != $todaysdate && $updated < $todaysdate){
                //echo "Days Are numbered";
                $NewEarnings=$Period*$dailyearn;

                //Now Get Tamount in Investuser
                $queryT="SELECT tamount FROM  investuser where username='$username' AND id='$id'";
                $resultT = mysqli_query($conn,$queryT);
                $tamountT=0;
                while($rowT = mysqli_fetch_array($resultT)){
                    $tamountT="$rowT[tamount]";
                   // echo $tamountT;
                }
                //echo $tamountT;

                //Add the Values
                $intTamount=((int)$tamountT)+((int)$NewEarnings);

                //Update InvestUser
                $sqlUpdate1="UPDATE investuser SET tamount='$intTamount' WHERE username ='$username' AND  id='$id'";
                $stmt = $conn->prepare($sqlUpdate1);
                $stmt->execute();


                /*Add Date plus the contract days*/
                $date=date('Y-m-d');
                /*Update the date to today to avoid repetition of The Code Functionality*/
                $sqlUpdate2="UPDATE investuser SET updated='$date' WHERE username ='$username' AND  id='$id'";
                $stmt = $conn->prepare($sqlUpdate2);
                $stmt->execute(); 
                
            }else if($updated <= $endDate){
                //echo "<br>".$Period."<br>";
                $NewEarnings=$Period*$dailyearn;

                //Now Get Tamount in Investuser
                $queryT="SELECT tamount FROM  investuser where username='$username' AND id='$id'";
                $resultT = mysqli_query($conn,$queryT);
                $tamountT=0;
                while($rowT = mysqli_fetch_array($resultT)){
                    $tamountT="$rowT[tamount]";
                   // echo $tamountT;
                }
                //echo $tamountT;

                //Add the Values
                $intTamount=((int)$tamountT)+((int)$NewEarnings);

                //Update InvestUser
                $sqlUpdate1="UPDATE investuser SET tamount='$intTamount' WHERE username ='$username' AND  id='$id'";
                $stmt = $conn->prepare($sqlUpdate1);
                $stmt->execute();


                /*Add Date plus the contract days*/
                $date=date('Y-m-d');
                /*Update the date to today to avoid repetition of The Code Functionality*/
                $sqlUpdate2="UPDATE investuser SET updated='$date' WHERE username ='$username' AND  id='$id'";
                $stmt = $conn->prepare($sqlUpdate2);
                $stmt->execute();  
            }else{
                //echo "destruct query";
            }
        }  
                                                                                                      
    
    }                                                                                                
                                                                
    
?>
                                  
     


 