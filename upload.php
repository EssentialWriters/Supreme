<?php

include_once ("Php/session.php");


// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
        print "
        <script language='javascript'>
          window.location ='login.php';
        </script>
      ";
}
$username=$_SESSION['username'];
$currency="Ksh";


include_once("Php/conn.php");

                    if(isset($_FILES['profile']) && isset($_POST['submit']))
                    {
                    // Collect the data from post method of form submission // 

                    // echo "dfghj";
                         /*$profile=mysqli_real_escape_string($con,$_POST['Mpesa']);
                     */
                    
                    $fileName = $_FILES['profile']['name'];
                    $fileTmpName = $_FILES['profile']['tmp_name'];
                    $fileSize = $_FILES['profile']['size'];
                    $fileError = $_FILES['profile']['error'];
                    
                    
                        
                    if($fileError === 0){
                       if($fileSize > 1250000){
                        $em = "The Profile image  is too large" ;
                        header ("Location: profile.php?error=$em");
                           
                       }else{
                           $img_ex = pathinfo($fileName, PATHINFO_EXTENSION);
                           $img_ex_lc = strtolower($img_ex);
                           $allowed_exs = array("jpg","jpeg","gif","png");
                           
                           if(in_array($img_ex_lc,$allowed_exs)){
                               $new_profile_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                               $path = 'uploads/'.$new_profile_name;
                               move_uploaded_file($fileTmpName,$path);
                               $em="Success !!";
                               header ("Location: profile.php?error=$em");
                               
                               /*insert to db*/
                               
                               //$sql = "INSERT INTO images(id,image_url) VALUES(1,'$new_profile_name')";
                               $sql = "UPDATE affiliateuser
                                       SET images='$new_profile_name'
                                       WHERE username='".$_SESSION['username']."'";
                               mysqli_query($conn,$sql);
                               
                               header ("Location: profile.php?succeess");
                               
                           }else{
                               $em = "Only jpeg, png and jpg allowed !!";
                               header ("Location: profile.php?error=$em");
                               
                           }
                       }
                    }else{
                        $em = "Unknown Error While Uploading";
                        header ("Location: profile.php?error=$em");
                    }
                    



                    }   
                    ?>
              