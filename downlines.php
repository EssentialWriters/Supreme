<?php
include_once ("Php/session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 
  
  <title>Alpha FX | Downlines</title>
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


 



<div style="">


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
</main>
          </head>
    
     </head>
     <body>
 
  <br>
     
    </div>
    </div>
        <!-- partial -->
        <div style="position:fixed;width:100%;right:12px;padding:15px;background-color: ">
    
        <div class="main-panel"  >

            <?php
                     $regDate ="SELECT date FROM affiliateuser WHERE username='$username'";
                     $resultDate = mysqli_query($conn,$regDate);
                     
                     while($row = mysqli_fetch_array($resultDate)){
                         $Date="$row[date]";
                     }
                     $today=date("d F Y");         
                  ?>
                    
        <?php            
// Fetch referred users
$sql = "SELECT username, phone, email, date FROM affiliateuser WHERE referedby = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $username);
$stmt->execute();
$result = $stmt->get_result();

?>

                  </ul>
                </div>
</div>
</div>
<br>
 
 <br>
  
</div>
<br>

 <br>
  
 <br> 





 <?php            
// Fetch referred users
$sql = "SELECT id,username, phone, email, date FROM affiliateuser WHERE referedby = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $username);
$stmt->execute();
$result = $stmt->get_result();

?>

             
           <br>
        
     <div class="col-md-6 grid-margin stretch-card"  style="background-color: #17181a ;" >
      
                       
<br>
 <div class=" table table  table-dark table-success table-bordered table-striped table-hover " style="background-color: ;"   >
<style>

.table-hover

{
color:lime;
}



 
        table {
            width: 80%;
            border-collapse: collapse;

            height: 1vh;width: ;position: absolute; left: 190px; top: 120px;


        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
 





</style>

     <?php
  

 if ($result->num_rows > 0) {
  echo "<table>";
  echo "<tr>
  <th>Id</th>
 <br>
      <th>Username</th>
     <br>
    <th>Phone</th>

    <th>Email</th>
    <th>Created On</th>

    </tr>";
    while ($row = $result->fetch_assoc()) {
     echo "<tr>";
     echo "<td>" . htmlspecialchars($row['id']) . "</td>";
     echo "<td>" . htmlspecialchars($row['username']) . "</td>";
     echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
     echo "<td>" . htmlspecialchars($row['email']) . "</td>";
     echo "<td>" . htmlspecialchars($row['date']) . "</td>";
     echo "</tr>";
     }
    echo "</table>";
     } else {
    echo "<p>No referred users found.</p>";
        }



    $stmt->close();
    $conn->close();
     ?>
 




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
          </div>
          </div>
 
 <br
 <br> 
 <br>
  
 <br>
 
 <br
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
