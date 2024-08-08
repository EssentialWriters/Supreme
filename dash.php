<?php
include_once ("Php/session.php");
include_once ("Php/conn.php");
?>
<!DOCTYPE html>
 
<html lang="en" dir="ltr">
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/static/css/homex.css">

     <script src="https://kit.fontawesome.com/adcef960e9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     <meta name="theme-color" content=" rgba(2, 1, 15, 0.822)">
 
    <meta charset="UTF-8">
    <title>  Alpha FX - Dashboard  </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="/static/css/homex.css">
        

 <!-- Custom minified CSS -->
 <link rel="stylesheet" href="https://leewihshylockloans.websites.co.in/service-pro/css/custom.min.css?v=621856441"> 

             <script src="https://kit.fontawesome.com/adcef960e9.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
             <meta name="theme-color" content=" rgba(2, 1, 15, 0.822)">
        
             <script href="/static/css/particles1.json"></script>
 
	<head>
 <br> 

 <br> 
 
 

 
 <div style="margin-bottom:400px"></div>


<div style="">

<div style="position:fixed;width:100%;top:0;padding:15px;background-color: #17181a">
  
    <a href="" class="logo">
            
  <?php
                         $sql ="SELECT * FROM affiliateuser WHERE username='".$_SESSION['username']."'";
                         $result = mysqli_query($conn,$sql);

                         while($row = mysqli_fetch_array($result))
                         {
                             $ac="$row[images]";
                             if($ac==0){
                                $ac="face2.jpg"; 
                             }else{
                                 $ac="$row[images]";
                             }
                         }
                      ?>



<?php
                       $sql ="SELECT * FROM affiliateuser WHERE username='".$_SESSION['username']."'";
                       $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($result))
                        {
                         $ac="$row[images]";
                        }
                         
                         ?>

      <img  src="uploads/<?php echo $ac; ?>" class="rounded-circle" alt="" 
      
      style=" height: 5vh;width: auto;position: absolute; right: 15px; top: 15px;"></a>
  

  <br>


  <br>
  <nav style=" height: 5vh;width: auto;position: absolute; right: 30px; top: 15px;">
    <div class="navbar">
      <i class='bx bx-menu'  ></i>
         <br>
       
      <div class="logo"><a href="dash.php">  </a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name"> <strong style="color: orange;"> </strong> <i style="color: whitesmoke;"> </i>   </span>

<div> 
<p>
</div>


          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li style="color:lime;">Hello <?php echo "$username"; ?></li>
          <li><a href="deposit.php"> Deposit</a></li>
          <li><a href="withdraw.php"> Withdraw</a></li>
        
          <li><a href="check.php"> Check Balance</a></li>
          <li><a href=" investments.php">Investments </a></li>
          <li><a href="Downlines.php"> Downlines</a></li>
          <li><a href="blog.php"> Notifications</a></li>
          <li><a href=" profile.php"> My Account</a> </li>
          <ul>
 
          <li>
            <a href="#"><o style="color: orange;">See More</o><i style="color: whitesmoke;"></i>  </a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
            <ul class="htmlCss-sub-menu sub-menu">


              <li><a href="trades.php">Transactions</a></li>

  <li><a href="logout.php">Logout</a></li>
            </li>
         
            <ul class="links">
              <li><a href="privacy policy.php">Privacy Policy  </a></li>
            <li><a href="refferal.php"> Reffer Friends  </a></li>
          </ul>
 
      <div class="search-box">
        <i class='bx bx-search'></i>
        <div class="input-box"lock>
          <input type="text" placeholder hide="Search...">
        </div>
      </div>
      </div>   
    </nav>
</head><br>
<br>

<?php     
// SQL query to select Amount for the logged-in user's phone number
$sql = "SELECT Amount FROM transactions WHERE PhoneNumber = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $UserPhoneNumber);
$stmt->execute();
$result = $stmt->get_result();

// Define variable Bal
$Bal = 0;

// Check if there are results
if ($result->num_rows > 0) {
    // Fetch the Amount and store it in Bal
    $row = $result->fetch_assoc();
    $Bal = $row["Amount"];
} 
?>
    <body style=" background-image: url(Screenshot_29-7-2024_22255_localhost.jpeg);height:300px;">
  <p style=" font-family: monospace;position: absolute;top: 60px;left: 30px;">
   Bal: <?php
                       echo "$Bal";
                                ?>.00 Ksh
   </p>
    </div>
 <div class="quick-float" style="">
     <a class="" 
     target="_blank" 
     rel="noopener nofollow" 
     href="       ">
     <img class="quick-float-icon" 
         src="whatsapp-icon.png" 
         alt="WhatsApp" 
         title="Join Supreme on WhatsApp Channel">
 </a>
 <br>
 <br>
 <?php ?>
 <br>
 <br>   
 <br>   

 <br>
 <?php ?>
 <br>
 
 <div class="quick-float">
     <a class="" 
     target="_blank" 
     rel="noopener nofollow" 
     href="     ">
     <img class="quick-float-icon" 
         src="telegram.png" 
         alt="Telegram" 
         title="Join Supreme on Telegram Channel ">
 </a>
 
</p> 
<br>
<br>
 
</div>
</div>
</nav>
 
  <style>

/* Googlefont Poppins CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
 background-image: url(Screenshot_29-7-2024_22255_localhost.jpeg); 
 background-position: center;
  background-size: cover;
}
nav{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  height: 70px;
  background-color: transparent;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  z-index: 99;
 background-image: url(   ); 
 background-position: center;
  background-size: cover;
 shadow: 3px 3px black;
}
nav .navbar{
  height: 100%;
  max-width: 1250px;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: auto;
   
  /* background: red; */
  padding: 0 50px;
}
.navbar .logo a{
  font-size: 30px;
  color: lime;
  background-image: url(         )    ;
  background-position: center;
  background-size: cover;
  text-decoration: none;
  font-weight: 600;

}
nav .navbar .nav-links{
  line-height: 70px;
  height: 100%;
   
}
nav .navbar .links{
  display: flex;
   
}
nav .navbar .links li{
  position: relative;
  display: flex;
  align-items: center;
  justify-content: space-between;
  list-style: none;
  padding: 0 14px;
   
   
}
nav .navbar .links li a{
  height: 100%;
  text-decoration: none;
  white-space: nowrap;
  color: dodgerblue ;
  font-size: 15px;
  font-weight: 500;
  
}
.links li:hover .htmlcss-arrow,
.links li:hover .js-arrow{
  transform: rotate(180deg);
  }

nav .navbar .links li .arrow{
  /* background: red; */
  height: 100%;
  width: 22px;
  line-height: 70px;
  text-align: center;
  display: inline-block;
  color: #fff;
  transition: all 0.3s ease;
}
nav .navbar .links li .sub-menu{
  position: absolute;
  top: 70px;
  left: 0;
  line-height: 40px;
  background: black;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  border-radius: 0 0 4px 4px;
  display: none;
  z-index: 2;
   
}
nav .navbar .links li:hover .htmlCss-sub-menu,
nav .navbar .links li:hover .js-sub-menu{
  display: block;
   
}
.navbar .links li .sub-menu li{
  padding: 0 22px;
  border-bottom: 1px solid rgba(255,255,255,0.1);
  

}
.navbar .links li .sub-menu a{
  color: yellowgreen;
  font-size: 15px;
  font-weight: 500;
}
.navbar .links li .sub-menu .more-arrow{
  line-height: 40px;
}
.navbar .links li .htmlCss-more-sub-menu{
  /* line-height: 40px; */
}
.navbar .links li .sub-menu .more-sub-menu{
  position: absolute;
  top: 0;
  left: 100%;
  border-radius: 0 4px 4px 4px;
  z-index: 1;
  display: none;
}
.links li .sub-menu .more:hover .more-sub-menu{
  display: block;
}
.navbar .search-box{
  position: relative;
   height: 40px;
  width: 40px;
}
.navbar .search-box i{
  position: absolute;
  height: 100%;
  width: 100%;
  line-height: 40px;
  text-align: center;
  font-size: 22px;
  color:  black;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
}
.navbar .search-box .input-box{
  position: absolute;
  right: calc(100% - 40px);
  top: 80px;
  height: 60px;
  width: 300px;
  background: #3E8DA8;
  border-radius: 6px;
  opacity: 0;
  pointer-events: none;
  transition: all 0.4s ease;
}
.navbar.showInput .search-box .input-box{
  top: 65px;
  opacity: 1;
  pointer-events: auto;
  background: #3E8DA8;
}
.search-box .input-box::before{
  content: '';
  position: absolute;
  height: 20px;
  width: 20px;
  background: #3E8DA8;
  right: 10px;
  top: -6px;
  transform: rotate(50deg);
}
.search-box .input-box input{
  position: absolute;
  top: 50%;
  left: 50%;
  border-radius: 4px;
  transform: translate(-50%, -50%);
  height: 35px;
  width: 280px;
  outline: none;
  padding: 0 15px;
  font-size: 16px;
  border: none;
}
.navbar .nav-links .sidebar-logo{
  display: none;
  color: lime;

  background-image: url(  ); 
 background-position: center;
  background-size: cover;
   border-bottom-left-radius: 50px;
         border-top-right-radius: 50px;  

}
.navbar .bx-menu{
  display: none;
}
@media (max-width:920px) {
  nav .navbar{
    max-width: 100%;
    padding: 0 25px;
  }

  nav .navbar .logo a{
    font-size: 27px;
  }
  nav .navbar .links li{
    padding: 0 10px;
    white-space: nowrap;
  }
  nav .navbar .links li a{
    font-size: 15px;
  }
}
@media (max-width:800px){
  .navbar .bx-menu{
    display: block;
  }
  nav .navbar .nav-links{
    position: fixed;
    top: 0;
    left: -100%;
    display: block;
    max-width: 270px;
    width: 100%;
    background: #17181a;
    line-height: 40px;
    padding: 20px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    transition: all 0.5s ease;
    z-index: 1000;
 background-color:#17181a; 
 background-position: center;
  background-size: cover;
 
  }
  .navbar .nav-links .sidebar-logo{
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .sidebar-logo .logo-name{
    font-size: 25px;
    color: lime;
  }
    .sidebar-logo  i,
    .navbar .bx-menu{
      font-size: 25px;
      color: dodgerblue; 



    }
  nav .navbar .links{
    display: block;
    margin-top: 20px;
  }
  nav .navbar .links li .arrow{
    line-height: 40px;
  }
nav .navbar .links li{
    display: block;
  }
nav .navbar .links li .sub-menu{
  position: relative;
  top: 0;
  box-shadow: none;
  display: none;
}
nav .navbar .links li .sub-menu li{
  border-bottom: none;

}
.navbar .links li .sub-menu .more-sub-menu{
  display: none;
  position: relative;
  left: 0;
}
.navbar .links li .sub-menu .more-sub-menu li{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.links li:hover .htmlcss-arrow,
.links li:hover .js-arrow{
  transform: rotate(0deg);
  }
  .navbar .links li .sub-menu .more-sub-menu{
    display: none;
  }
  .navbar .links li .sub-menu .more span{
    /* background: red; */
    display: flex;
    align-items: center;
    /* justify-content: space-between; */
  }

  .links li .sub-menu .more:hover .more-sub-menu{
    display: none;
  }
  nav .navbar .links li:hover .htmlCss-sub-menu,
  nav .navbar .links li:hover .js-sub-menu{
    display: none;
  }
.navbar .nav-links.show1 .links .htmlCss-sub-menu,
  .navbar .nav-links.show3 .links .js-sub-menu,
  .navbar .nav-links.show2 .links .more .more-sub-menu{
      display: block;
    }
    .navbar .nav-links.show1 .links .htmlcss-arrow,
    .navbar .nav-links.show3 .links .js-arrow{
        transform: rotate(180deg);
}
    .navbar .nav-links.show2 .links .more-arrow{
      transform: rotate(90deg);
    }
}
@media (max-width:370px){
  nav .navbar .nav-links{
  max-width: 100%;
} 
}


 


  </style>


  <script src="script.js"></script>

  <script>
// search-box open close js code
let navbar = document.querySelector(".navbar");
let searchBox = document.querySelector(".search-box .bx-search");
// let searchBoxCancel = document.querySelector(".search-box .bx-x");

searchBox.addEventListener("click", ()=>{
  navbar.classList.toggle("showInput");
  if(navbar.classList.contains("showInput")){
    searchBox.classList.replace("bx-search" ,"bx-x");
  }else {
    searchBox.classList.replace("bx-x" ,"bx-search");
  }
});

// sidebar open close js code
let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .bx-menu");
let menuCloseBtn = document.querySelector(".nav-links .bx-x");
menuOpenBtn.onclick = function() {
navLinks.style.left = "0";
}
menuCloseBtn.onclick = function() {
navLinks.style.left = "-100%";
}


// sidebar submenu open close js code
let htmlcssArrow = document.querySelector(".htmlcss-arrow");
htmlcssArrow.onclick = function() {
 navLinks.classList.toggle("show1");
}
let moreArrow = document.querySelector(".more-arrow");
moreArrow.onclick = function() {
 navLinks.classList.toggle("show2");
}
let jsArrow = document.querySelector(".js-arrow");
jsArrow.onclick = function() {
 navLinks.classList.toggle("show3");
}


  </script>
 
        
 <style>                      
  
  body {
	margin: 30px;
	padding-top: 90px;
  background-color:transparent;
  display:c;
  align-items: center;
      justify-content: center;
      background-color: black;
      padding-right: 30%;
      padding-left: 10%;
      box-sizing: border-box;
      position: relative;
      background-image: url(  );
  background-position: center;
  background-size: cover;

}

.submit-area {
  background-color: n;
	padding: 10px;
	margin-top: 50px;
	border-radius: 1px;
	box-shadow: 5px 5px darkblue;
  color: black;
}

 .balance { 
  border-radius: 1px;
	box-shadow: 5px 5px cyan;
  color: yellow;
}

deposit {
  border-radius: 1px;
	box-shadow: 5px 5px blue;
  color: lime;
}
withdraw {
  border-radius: 1px;
	box-shadow: 5px 5px orange;
  color: red;
  
}
 

*{
                            margin: 0;
                            padding: 0;
                            box-sizing: border-box;
                            font-family: 'Poppins', sans-serif;
 
                             
                        
                        }
                        .form{
                            position: absolute;
                            max-width: 430px;
                            width: 100%;
                            padding: 30px;
                            border-radius: 6px;
                            
                        }
                          
                 
                 form{
                     margin-top: 30px;
                 } 
                 
                  
                 field button{
                     height: 100%;
                     width: 100%;
                     border: none;
                     font-size: 16px;
                     font-weight: 400;
                     border-radius: 6px;
                 }
                 
                 field button{
                     color: black;
                     background-color #0025f8;
                     transition: all 0.3s ease;
                     cursor: pointer;
                 }

                   
                 field button:hover{
                     background-color orangered;
                 }
                  
</style>
<script>
        //deposit button event handler
        const deposit_btn = document.getElementById('deposit-btn');
        deposit_btn.addEventListener('click', function(){

            const depositStringToInt = getInputNumb("deposit-amount");

            updateSpanTest("current-deposit", depositStringToInt);
            updateSpanTest("current-balance", depositStringToInt);

            //setting up the input field blank when clicked
            document.getElementById('deposit-amount').value = "";

        })

         //withdraw button event handler
         const withdraw_btn = document.getElementById('withdraw-btn');
         withdraw_btn.addEventListener('click', function()
            const withdrawNumb = getInputNumb("withdraw-amount");

            updateSpanTest("current-withdraw", withdrawNumb);   </script>
        
 
        
 <style>                      
  
  body {
	margin: 30px;
	padding-top: 90px;
  background-color:#17181a;
  display:c;
  align-items: center;
      justify-content: center;
      background: #17181a;
      padding-right: 30%;
      padding-left: 10%;
      box-sizing: border-box;
      position: relative;
      background-image: url(   );
  background-position: center;
  background-size: cover;

}

.submit-area {
  background-color: n;
	padding: 10px;
	margin-top: 50px;
	border-radius: 20px;
	box-shadow: 5px 5px darkblue;
  color: black;
}

 .balance { 
  border-radius: 20px;
	box-shadow: 5px 5px RED;
  color: lime;

  border-bottom-left-radius: 50px;
        border-top-right-radius: 50px;


        box-shadow: 0 10px 10px yellowgreen;

}

.deposit {
  border-radius: 20px;
	box-shadow: 5px 5px cyan;
  color: orange;
  border-bottom-left-radius: 50px;
        border-top-right-radius: 50px;
        box-shadow: 0 10px 10px cyan;
     

}

.withdraw {
  border-radius: 30px;
	box-shadow: 5px 5px lime;
  color: yellowgreen;

  border-bottom-left-radius: 50px;
        border-top-right-radius: 50px;

        box-shadow: 0 10px 10px lime;
  
}  
 

*{
                            margin: 0;
                            padding: 0;
                            box-sizing: border-box;
                            font-family: 'Poppins', sans-serif;
 
                             
                        
                        }
                        .form{
                            position: absolute;
                            max-width: 430px;
                            width: 100%;
                            padding: 30px;
                            border-radius: 6px;
                            
                        }
                          
                 
                 form{
                     margin-top: 30px;
                 } 
                 
                  
                 .field button{
                     height: 100%;
                     width: 100%;
                     border: none;
                     font-size: 16px;
                     font-weight: 400;
                     border-radius: 6px;

                     border-bottom-left-radius: 50px;
            border-top-right-radius: 50px;
            box-shadow: 0 10px 10px lime;


                 }




                 
                 .field button{
                     color: black;
                     background-color: yellowgreen;
                     transition: all 0.3s ease;
                     cursor: pointer;
                 }

                   
                 .field button:hover{
                     background-color:lime;
                 }
                  
</style>
 
         <!-- Optional JavaScript -->
         <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>



         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>



         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       
             </div>
        
             <style>
     
     body { 
       background-color:#17181a; 
       background-position: bottom;
       
       background-image: url(           );
     background-size: cover;
     body{
                 background-color: black;
             }
     }
     
     button{
       color: aqua;
     }
     h6{
       color: white;
     }
     p{
      color:yellowgreen ;
     }
     
     i{
       color: blue;
     }
     h4{
       color: red;
     }
     #navbar-brand {
       color:lime
     }
     
     
     main {
       flex: 100%;
       padding: 2rem;
       color:orange;
       display: flex;
       flex-direction: column;
        
     }
     
     main h1 {
       margin-bottom: 1rem;
     }
     
     main .copyright {
       margin-top: auto;
       font-size: 0.9rem;
     }
     
     main .copyright span {
       color: lime;
       font-weight: 500;
       cursor: pointer;
     }
     
     .navbar .logo a{
       font-size: 30px;
       color:white;
       text-decoration: none;
       font-weight: 600;
        
     }
     
     b{
       color: yellow;
     }
     
             </style>  
             
             <div  class="services">
               <section data-aos="fade-up" data-aos-delay="100">
		  <div class="container"  style=" background-image: url( xero-code.gif  ); background-position: center; background-size: cover;top: 15px;
                                                                              "    >
        <br><br>
        <br><br>
        <br><br>  
        <br><br>  
            <div class="text-center" style="margin: 50px; 
    ">
            <a href="Bot.php" type="button"  class="btn btn-success"          style="   
              color: #000; background-color: dodgerblue; ">Hire Bot</a>
           
              <a href=" track_bot.php" class="btn btn-success"          style="   
              color: #000; background-color: yellowgreen; ">Track Bot</a>
         </h6>
            </div>
            </div>
            </section>
   
            <br>
         <br>
         <br> 
         <br> 
           <div>
            <section data-aos="fade-up" data-aos-delay="100">
            <div class="container"  style=" background-image: url(23-10-50-478_512.gif); background-position: center; background-size: cover;top: 15px;">
            <br><br>
           <div style="bottom: 30px;color:whitesmoke;">
           Our mission in this is to make Ferrari discoverable and efficient.
           We allow you to hire Ferrari and then  a gain a profit of 9% interest after 12 hours.
           Minimum amount required to hire a Ferrari is 4,500.00 Ksh.
           After hiring a Ferrari ,you will recieve 10% interest after 12 hour.</div>
     
        <br><br>                                                                 
        <br><br>
        <br><br>
        <br><br>   <br><br>
            <div class="text-center" style="margin: 50px; 
    ">
            <a href="Ferrari.php" class="btn btn-success"     style="   
              color: #000; background-color: lime; ">Hire Ferrari</a>
      
            <a href="track_ferrari.php" class="btn btn-success"      style="     
             background-color: dodgerblue; color: #000; ">Track Ferrari</a>
   </div>
         
            </div>
            </section>

            
         <br>
         <br> 
         <br>
         <br> 
              <div>
            <section data-aos="fade-up" data-aos-delay="100">
<div class="container"  style=" background-image: url(giphy.gif); background-position: center; background-size: cover;top: 15px;">
<br><br>
           <div style="bottom: 30px;color:orange"> You are allowed to Hire LG that will take you 24 Hours to receive your payout.
           Minimum amount for buying LG is 2,500.00 Ksh.
           You will receive 8% interest after 24 Hours.</div>
        <br><br>                                                                 
        <br><br>
        <br><br>
        <br><br>   <br><br>
            <div class="text-center" style="margin: 50px; 
    ">
            <a href="LG.php" class="btn btn-success"          style="   
              color: ; background-color: ; ">Hire LG </a>
      
            <a href="track_lg.php" class="btn btn-success"      style="     
             background-color: dodgerblue; color:black; ">Track LG</a>

         <br>
         <br>  
            </section>

             
         <br>
         <br>
         <br> 
         <br> 
               <div>
            <section data-aos="fade-up" data-aos-delay="100">
            <div class="container"  style=" background-image: url(be04f8992f7ba26ccda27e8ff60a20b7.gif); background-position: center; background-size: cover;top: 15px;">
            <br><br>
           <div style="bottom: 30px;color:cyan">
           Our mission in this is to make Lamborghini discoverable and efficient.
           We allow you to hire Labgini and then  a gain a profit of 10% interest after 24 hours.
           Minimum amount required to hire a labgini is 5,500.00 Ksh.
           After hiring a Labgini ,you will recieve 10% interest after 24 hour.</div>
     
        <br><br>                                                                 
        <br><br>
        <br><br>
        <br><br>   <br><br>
            <div class="text-center" style="margin: 50px; 
    ">
            <a href="Labgini.php" class="btn btn-success"     style="   
              color: #000; background-color: lime; ">Hire Labgini</a>
      
            <a href="track_labgini.php" class="btn btn-success"      style="     
             background-color: dodgerblue; color: #000; ">Track Labgini</a>
   </div>
         
            </div>
            </section>
             
            
         <br>
         <br> 
         <br>
         <br> 
              <div>
            <section data-aos="fade-up" data-aos-delay="100">
     <div class="container"  style=" background-image: url( Screenshot_20240305-221041.jpg); background-position: center; background-size: cover;top: 15px;">
           
        <br><br>
        <br><br>
        <br><br>   <br><br>                                                       
        <br><br>
            <div class="text-center" style="margin: 50px; 
    ">
            <a href="Trade.php"   class="btn btn-success"          style="   
              color:black ; background-color:yellowgreen; ">Trade</a>
      
            <a href="track_trade.php" class="btn btn-success"      style="     
             background-color: lime; color:black ; ">Track </a>

         <br>
         <br>
            </section>
         
        </div>
         <br>
      </article>
</body>
 
</html>
		<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/92191.bb0aa12f5e562fd483f3.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/32109.4d5de3fbde1cd7dc5e9f.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/9817.5d0098bab0d2d4ea02e5.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/53842.42bc4751c46a902d7f17.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/49174.8e27ed79a2e4aea61638.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/88548.e312aba9582fdbab30ab.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/69403.4f5f4717726a678b0810.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/54712.a33c76f5549cc7102e61.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/92483.726dbd3f2cf50c973c26.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/73151.a699c72be5565e942bf2.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/50293.d4ce023e54009adf69b3.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/29928.b414033c036a33d2ce75.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/67103.de1e2a61cac87d771a3d.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/54690.7401048db4e1840d727b.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/25282.1bc06c8cd02f291c10e7.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/47341.0fb5e9b97c5c67c26ffb.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/51465.6434d58b60ed028e7504.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/43698.241d3755f1caed9e8e81.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/63221.a0923edf4110ad920c85.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/26264.abb5fc922cf22958ab44.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/23841.1a180470b83136748cd7.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/29005.1d3bf0532e701ec41f37.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/62235.2c7bc88aa73f71d26a3a.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/30492.00726947d4ca28a5b65e.css" rel="stylesheet" type="text/css"/>
	 
 
<div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
			<div style="margin-top: 100px;"></div>

			<div class="modal-dialog" role="document" >
				<div class="modal-content modal-content-bg" style="background:   #17181a                 ;  color: yellowgreen;  
          ">
					<div class="modal-header">
						<strong class="modal-title method-name " id="exampleModalLabel">Hire Ferrari Now</strong>
						<a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" style="color:black">&times;</span>
						</a>
					</div>
				 
 
					     <div class="modal-body">
							<div class="form-group">
            		</div>
                         
									<div class="form-group">
									<label>Amount in Ksh</label> <br> 
                         
                <div class="form-group">
                <form action="trades.php" method="POST">
                  <input id="amount" type="text" name="currency" value="EUR/USD" required autocomplete="off" hidden>
                             
                  <div class="input-group">
                    <input id="number" type="number" placeholder="254xxxxxxxxx" step="0.01" class="form-control form-control-lg"
                      name="phonenumber"  value="<?php echo $phone ?>"   required autocomplete="off" readonly  style="background-color:white;color:black">

                  </div> 
                  <br>
                  <div class="input-group">
                    <input id="amount" type="number" placeholder="0.00" step="0.01" class="form-control form-control-lg"
                      name="amount"  required autocomplete="off" style="background-color:white;color:black">

                  </div>
							</div>
													</div>
						<div class="modal-footer " >
							<div class="text-center">
							<button type="submit"class="btn btn-md "  style="background-color: yellowgreen;   color: #000;
                ">Hire Ferrari Now</button>
                </form>
						   </div>
						</div> 
				</div>
			</div>
		</div>

 
		</div>

<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/76592.e28e75165f1449a40136.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/5145.a2b224fd27ab2941c565.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/38881.362fa6a7ab1f3e3b06c4.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/63987.f8d37c426545344ad5f8.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/42244.978883064a56316fec98.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/6744.f44f91c247bfe6ac0431.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/69601.96734ea42b4553a531d8.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/46987.c69166c3f0d2b77c3979.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/74188.44c09201d5a176dba236.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/63391.964e582c2ef59d17337c.css" rel="stylesheet" type="text/css"/>






<div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
			<div style="margin-top: 100px;"></div>

			<div class="modal-dialog" role="document" >
				<div class="modal-content modal-content-bg" style="background:   #17181a                 ;  color: yellowgreen;  
          ">
					<div class="modal-header">
						<strong class="modal-title method-name " id="exampleModalLabel">Hire LG Now</strong>
						<a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" style="color:black">&times;</span>
						</a>
					</div>
				 
 
					     <div class="modal-body">
							<div class="form-group">
            		</div>
                         
									

                
                           
									<div class="form-group">
									<label>Amount in Ksh</label> <br> 
                         
                <div class="form-group">
                <form action="trades.php" method="POST">
                  <input id="amount" type="text" name="currency" value="EUR/USD" required autocomplete="off" hidden>
                             
                  <div class="input-group">
                    <input id="number" type="number" placeholder="254xxxxxxxxx" step="0.01" class="form-control form-control-lg"
                      name="phonenumber"  value="<?php echo $phone ?>"   required autocomplete="off" readonly style="background-color:white;color:black">

                  </div> 
                  <br>
                  <div class="input-group">
                    <input id="amount" type="number" placeholder="0.00" step="0.01" class="form-control form-control-lg"
                      name="amount"  required autocomplete="off" style="background-color:white;color:black">

                  </div>
							</div>
													</div>
						<div class="modal-footer " >
							<div class="text-center">
							<button type="submit"class="btn btn-md "  style="background-color: yellowgreen;   color: #000;
                ">Hire LG Now</button>
                </form>
						   </div>
						</div>
				 
				</div>
			</div>
		</div>

 
		</div>
 
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/30437.91a858a761e8ec1c2498.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/54765.135f857c53851e84f336.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/25905.76b53d849e04d07888c5.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/8545.3ea79d7dc2adb798b744.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/83644.3373dddcea57834db483.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/59345.2de174b139c92a44b38b.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/37143.fbae7be1b9b33201e1fd.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/44117.f72a340652c65feff9e0.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/32867.1b307a7b1f073bb5c5f0.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/3517.a9a166376777314293c2.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/17012.a88e1830ad755c315337.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/20216.cef5d03103f6d95d1b08.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/43314.6f3a3ccf68acfb1c8adc.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/61061.8c382e32e4fd24663336.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/17478.708770ed68cad00705e1.css" rel="stylesheet" type="text/css"/>
 
		<!-- categories/base additional_css_bundles -->
			<!-- render_css_bundle(base_screener_page_component) -->
			<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/62253.814b89347490069bc661.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/5993.690a3696fdb4a243d5f5.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/34465.303d3d3a2eef8a440230.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/72639.b5e8a83187e56f119d2a.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/69121.3b7926877c2d7095553f.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/92108.b3cd152760ac50bb50b3.css" rel="stylesheet" type="text/css"/>
 
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/88194.42b7c9754e648b57cade.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/66639.885b5577e3fb71ee2bea.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/13423.11ffeaf687ce27276f82.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/35649.ba2cb3fe6f8753a7bfbc.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/91033.5197f9f8b8500206d06c.css" rel="stylesheet" type="text/css"/>
  


<br>
         <br>

<br>
         <br>
<div style="margin-bottom:400px"></div>


<div style="">

<div style="position:fixed;width:100%;bottom:0;padding:15px;background-color:#17181a">


<div class="text-center">
   <a  href="deposit.php" class="btn btn-success"  style="color:black;background-color:yellowgreen;" >
                                Deposit</a>
   <a href="profile.php" class="btn btn-primary" style="color: whitesmoke;" >
                              My Account</a>
   <a data-toggle="modal" data-target="#exampleModal3"  class="btn btn-primary" style="color: whitesmoke;" >
                                Chat Us</a>
<a href="Withdraw.php" class="btn btn-success" style="color:black;background-color:yellowgreen;">
        Withdraw</a>
   </div>

 


</div>






<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/48155.b43afbb75bb1474194cb.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/26855.add0290c625e1ccdbd39.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/46036.3b493a9f0ab052e6447c.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/40866.f61dbbb7c19abb5afdf9.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/91967.0060be07b52a75af65dc.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/43610.674a0ca7d822dcce1bff.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/41320.94a07ea345650f95e190.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/96899.f7c04dbd5aab12bf8b83.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/36842.64f1eec0948c9ad6edc8.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/99916.60c48148a54dba9504a0.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/36956.9c3bb659c16040b458dd.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/9227.88f52c90aede6929cf1f.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/56388.e9af7ffb47aeafe1fc99.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/57039.77523fb44b32591dbb1b.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/77817.ffefb1f86231043ec0be.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/98638.07801d9ab73e59d230af.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/42063.778ad09bff0c8d877753.css" rel="stylesheet" type="text/css"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/448.c09912056f5102b84341.css" rel="stylesheet" type="text/css"/>
		<!-- / categories/base additional_css_bundles -->

<!-- { endblock personal_css_bundle } -->

<!-- { block extra_styles } -->
<!-- { endblock extra_styles } --><script nonce="18F4vjGLSb8QHRj/n4yb9Q==">
window.locale = 'en';
window.language = 'en';
</script>
<!-- { block personal_js_bundle } -->
<!-- render_js_bundle('category_base') -->
		<!-- render_js_bundle('category') -->

		<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/runtime.32d93975e10637f02eed.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/en.18562.632f461f5fee5e346db3.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/en.28139.4ead17396f058ea398f4.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/en.71335.56d9700b6cad31b42516.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/962.c105f327045268286f99.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/23127.e1a5a557b0a07cfdd28e.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/10726.ffb91505af9c08133b76.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/43041.f3a6eaa60d47a9798004.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/47377.dbc08f4960f4769ae762.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/7672.6463ccd9f83078e3449f.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/30128.aa478d757d07c3953b7a.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/70804.74d12c21a206b34c87a9.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/83912.c7138b93e5c631a103c6.js" rel="preload" as="script"/>
 
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/68748.ba93514f7636d1d22a05.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/4985.ec6c2b9ff9f21349b51f.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/86323.41a6ef2fb0163d0353db.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/9142.3c3c96895dd6765ef14c.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/26759.58bf430be770d3161a6a.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/15318.006dd289b4a45f62495e.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/92810.207204b02d5575205b24.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/category_base.b23d6b62f3e5e5b98951.js" rel="preload" as="script"/><script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/runtime.32d93975e10637f02eed.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/en.18562.632f461f5fee5e346db3.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/en.28139.4ead17396f058ea398f4.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/en.71335.56d9700b6cad31b42516.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/962.c105f327045268286f99.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/23127.e1a5a557b0a07cfdd28e.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/10726.ffb91505af9c08133b76.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/43041.f3a6eaa60d47a9798004.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/47377.dbc08f4960f4769ae762.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/7672.6463ccd9f83078e3449f.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/30128.aa478d757d07c3953b7a.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/70804.74d12c21a206b34c87a9.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/83912.c7138b93e5c631a103c6.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/68748.ba93514f7636d1d22a05.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/4985.ec6c2b9ff9f21349b51f.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/86323.41a6ef2fb0163d0353db.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/9142.3c3c96895dd6765ef14c.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/26759.58bf430be770d3161a6a.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/15318.006dd289b4a45f62495e.js" defer></script>
 
<!--Chat Us popup--> 
        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
		

			<div class="modal-dialog" role="document" >
				<div class="modal-content modal-content-bg" style="background:       #17181a   ;border-radius:5px;border-radius:5px;color: yellowgreen;  ">
					<div class="modal-header">
                        <label> <o style="color:whitesmoke;">Supre</o><i style="color: orange;">me</i></label>
					
						<a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" style="color:black">&times;</span>
						</a>
					</div>
					

				 	     <div class="modal-body">
                 <p></p>

							<div class="form-group">
							
								<input type="hidden" name="SmartFx`s Robot" value="1">
							</div>
                            <strong class="modal-title method-name " id="exampleModalLabel">Withdraw</strong>
                            <br>
                           <i style="color: lime;">Withdrawals are processed within 24Hrs</i>
								  
<br>
   
                           <div class="form-group">
							
                    
                <div class="form-group">
                <form action="withdral.php" method="POST">
                  <input type="hidden" name="robot" value="8">
                </div> 
                <div class="form-group">
                  <label>Amount in Ksh</label> 
 
                  <div style="margin: 30px;">
           

           <a href="https://wa.me/254764428762"><i class="fab fa-whatsapp" style="background-color:green;border-radius:50%;font-size:25px;right:20px;padding:15px;color:white"></i><a>
              
            <a href="https://wa.me/254765048393"><i class="fab fa-whatsapp" style="background-color:green;border-radius:50%;font-size:25px;right:20px;padding:15px;color:white"></i><a>
               <a href="mailto:platinumvast2@gmail.com"><i class="fa fa-envelope" style="background-color:rgb(128, 0, 0);border-radius:50%;font-size:25px;right:20px;padding:15px;color:white"></i><a>



       </div>
     </div> 
 

     <div>
 
         



     </div>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/92810.207204b02d5575205b24.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/category_base.b23d6b62f3e5e5b98951.js" defer></script>
		<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/en.18809.8bf839cd305258e5f2a2.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/en.89540.d6753cd8cbb33367a489.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/en.62365.39288393516794ec3b8d.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/25977.84991d3f49efb2a1d089.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/24951.26214624d376e53ea617.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/51004.106aa4e3894f7243f2a8.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/17352.519806bbc515911171c7.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/91192.170422438569047e93c5.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/68616.bd36a093f566ce0dc63f.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/6885.6c643d9116d118330521.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/57820.7be77bd41e8847b73afb.js" rel="preload" as="script"/>
<link crossorigin="anonymous" href="https://static.tradingview.com/static/bundles/category.0d576d2a068c5bd6152c.js" rel="preload" as="script"/><script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/en.18809.8bf839cd305258e5f2a2.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/en.89540.d6753cd8cbb33367a489.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/en.62365.39288393516794ec3b8d.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/25977.84991d3f49efb2a1d089.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/24951.26214624d376e53ea617.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/51004.106aa4e3894f7243f2a8.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/17352.519806bbc515911171c7.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/91192.170422438569047e93c5.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/68616.bd36a093f566ce0dc63f.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/6885.6c643d9116d118330521.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/57820.7be77bd41e8847b73afb.js" defer></script>
<script crossorigin="anonymous" src="https://static.tradingview.com/static/bundles/category.0d576d2a068c5bd6152c.js" defer></script>	<!-- { endblock personal_js_bundle } -->

</body> 


<!--Withdraw popup-->
		
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >


  <div class="modal-dialog" role="document" >
    <div class="modal-content modal-content-bg" style="background:       #17181a   ;border-radius:5px;border-radius:5px;color: yellowgreen;  ">
      <div class="modal-header">
                    <label> <o style="color:whitesmoke;">Supre</o><i style="color: orange;">me</i></label>
      
        <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:black">&times;</span>
        </a>
      </div>
      

            <div class="modal-body">
             <p></p>

          <div class="form-group">
          
            <input type="hidden" name="SmartFx`s Robot" value="1">
          </div>
                        <strong class="modal-title method-name " id="exampleModalLabel">Withdraw</strong>
                        <br>
                       <i style="color: lime;">Withdrawals are processed within 24Hrs</i>
              
<br>

                       <div class="form-group">
          
                
            <div class="form-group">
            <form action="withdral.php" method="POST">
              <input type="hidden" name="robot" value="8">
            </div> 
            <div class="form-group">
              <label>Amount in Ksh</label>
              <input id="amount" type="text" name="currency" value="EUR/USD" required autocomplete="off" hidden>
                         
              <div class="input-group">
                <input id="number" type="number" placeholder="254xxxxxxxxx" step="0.01" class="form-control form-control-lg"
                  name="phonenumber"  value="<?php echo $phone ?>"   required autocomplete="off" readonly style="background-color:white;color:black">

              </div> 
              <br>
              <div class="input-group">
                <input id="amount" type="number" placeholder="0.00" step="0.01" class="form-control form-control-lg"
                  name="amount"  required autocomplete="off" style="background-color:white;color:black">

              </div>
            </div>
          </div>
        <div class="modal-footer " >
          <div class="text-center">
       
          <button type="submit"   class="btn btn-md "  style="background-color: yellowgreen;"> Withdraw Now</button>
          </form>

           </div>













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
 














