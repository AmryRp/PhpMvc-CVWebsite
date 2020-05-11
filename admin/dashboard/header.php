
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title >Dashboard Admin</title>
        

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
        <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js" ></script>
       <!--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.all.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://arp-cv.website/cv/static/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
        
        <link rel="stylesheet" href="https://arp-cv.website/cv/static/css/orionicons.css">
        <link rel="stylesheet" href="https://arp-cv.website/cv/static/css/style.default.css" id="theme-stylesheet">
        <link rel="stylesheet" href="https://arp-cv.website/cv/static/css/custom.css">
        <link rel="stylesheet" href="https://arp-cv.website/cv/static/css/tooltip.css">
        <link rel="shortcut icon" href="https://arp-cv.website/cv/static/img/favicon.png?3">
    </head>
    <body style="background: #1C1B21" onload="afterdelete()">
        <header class="header"style="background: #1C1B21">
            <nav class="navbar navbar-expand-lg px-4 py-2 bg-black shadow" >
                <a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead">
                    <i class="fas fa-align-left"></i></a>
                <a href="https://arp-cv.website/cv/templates/views/" class="navbar-hidden navbar-brand font-weight-bold text-uppercase text-header-color text-base">Admin : 
                <?php echo $_SESSION['user']; ?></a>
                
                 <a style="position: absolute; top: 50%;right: 3%;-webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);" href="https://arp-cv.website/admin/login/logout.php"> <i class="fas fa-power-off"></i></a>
                </nav>
           
        </header>
        <script type="text/javascript">
           function afterdelete(){
            <?php 
            if(isset($_SESSION['alert']))
            {  
            ?> 
           swal({
          title: 'Thank You!',
          text: 'Our Volunteer Will Contact You Soon!',
          icon: 'success',
          confirmButtonText: 'Ok!',
          allowOutsideClick: false
          }).then(function (result) {
                setTimeout(function () {
                    
                }, 30);
            });  
            // 
            <?php
            // unset($_SESSION['alert']);
            }
            ?>
            
           }
            
        </script>
        
