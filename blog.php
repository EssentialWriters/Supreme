<?php
include_once ("Php/session.php");
?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
{
   
    
    $message=mysqli_real_escape_string($conn,$_POST['message']);
    $date=date("Y-m-d H:i:s");
    
    $query="INSERT INTO blog (id,username,phone,message,date) VALUES(0,'$username','$phone','$message','$date');";

    if (!mysqli_query($conn,$query)) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
    }else{
    //echo "Success registering";
        
    }
    
}
?> 


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 
  
  <title>Alpha FX | Blog & Notifications</title>
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
                                           
    
    <a href="blog.php" class="logo">
            
      <img class="Green Dollar-logo" src="IMG_20240406_202141.jpg" alt=" SmartFX" width="100" height="50"   style=" 
    
 
"></a>
    
    
    </div>
    <div class="text right">
        <a href="dash.php" style="position: absolute;right: 10px;top: 15px;color: black; background-color: dodgerblue ;   " class="btn  "   style="color:dorgerblue; ">Dashboard</a>
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
     
        <!-- partial -->
        <div class="main-panel" style="background-color: transparent ;" >
          <div style="background-color: transparent ;">
            <div class="d-xl-flex justify-content-between align-items-start">
           
              
              </div>
            </div>
  
  <br>
<br>
<br>
            <div class="row">
              <div class="col-md-12">
                <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                  <ul class="nav nav-tabs tab-transparent" role="tablist">
                    
                    <li class="nav-item" >
                        </li>
                    
                  </ul>
                  <div class="d-md-block d-none">
                    <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
                    <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
                  </div>
                </div>
                <div class="tab-content tab-transparent-content">
                  <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                    <div class="row">
                              <?php
                            $query="SELECT * FROM  blogs WHERE status=1 AND type='Blog' ORDER BY id ASC "; 
			 
			 
                             $result = mysqli_query($conn,$query);

                            while($row = mysqli_fetch_array($result))
                            {

                              $id="$row[id]";
                              $type="$row[type]";
                              $title="$row[title]";

                              $text="$row[text]";
                              $date="$row[date]";           
                          
                              

                                         echo "
                                      
                     <div class='col-md-12 grid-margin stretch-card'>
                        <div class='card'>
                          <div class='card-body'>
                            <h4 class='card-title'>$title</h4>
                            
                            <p style='color:black !important;'> $text</p>
                            <p class='card-description' style='color:black !important;'> Notified On <code >$date</code>  </p>
                          </div>
                        </div>
                      </div>";
                                            
                                                            
                        
                        
                      }
                        ?>
                     
                        
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                  <ul class="nav nav-tabs tab-transparent" role="tablist">
                    
                    <li class="nav-item" >
                          </li>
                    
                  </ul>
                  <div class="d-md-block d-none">
                    <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
                    <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
                  </div>
                </div>
                <div class="tab-content tab-transparent-content">
                  <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                    <div class="row">
                        <?php
                            $query="SELECT * FROM  blogs WHERE status=1 AND type='notification' ORDER BY id ASC "; 
			 
			 
                             $result = mysqli_query($conn,$query);

                            while($row = mysqli_fetch_array($result))
                            {

                              $id="$row[id]";
                              $type="$row[type]";
                              $title="$row[title]";

                              $text="$row[text]";
                              $date="$row[date]";           
                          
 

                                         echo "
                                      
                     <div class='col-md-12 grid-margin stretch-card'>
                        <div class='card'>
                          <div class='card-body'>
                            <h4 class='card-title'>$title</h4>
                            
                            <p style='color:black !important;'> $text</p>
                            <p class='card-description' style='color:black !important;'> Notified On <code >$date</code>  </p>
                          </div>
                        </div>
                      </div>";
                                            
                                                            
                        
                        
                      }
                        ?>
                     
                        
                    </div>
                      <div class="">
                      </div>
                  </div>
                </div>
              </div>
            </div>
              
              
               <div class="row">
              <div class="col-md-12">
                <div class="d-sm-flex justify-content-between align-items-center red-tab-border {">
                  <ul class="nav nav-tabs tab-transparent" role="tablist">
                    
                    <li class="nav-item" >
                         </li>
                    
                  </ul>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>

                  <div class="d-md-block d-none">
                    <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
                    <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
                  </div>
                </div>

                <div class="tab-content tab-transparent-content">
                  <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                    <div class="row">
                      <div class="col-lg-12 grid-margin stretch-card"  style="background-color: yellowgreen;">
                          <div class="card"style="background-color: lime;">
                            <div class="card-body">
                              <h4 class="card-title">Write A Message or Ask A question:</h4>
                              <p class="card-description">
                              
                              </p>
                              
				 	     <div class="modal-body">
                              <div class="pt-1">
                                <form class="pt-1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>" method="post">
                                  <div class="form-group">
                                     <label for="">Message</label>
                                    <input type="textarea" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Input The message or text" name="message" required>
                                  </div>
                                  <br>
                                  <div class="mt-3 form-group row">
                                    <button  class="btn btn-md "   style="background-color: dodgerblue;"   type="submit" name="submit">Message</button>
                                  </div>
                                  <div class="text-center mt-4 font-weight-light">
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

  
            <br>
 <br>
  
  <br>
<br>
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
      </main>
        </body>




</html>
