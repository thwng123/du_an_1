

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reid</title>
    <link rel="stylesheet" href="../css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    
</head>
<body>
     <header>
        <div class="logo">
            <a href="index.php?act=home">
                <img src="../image/logo/logo.png" alt="">
            </a>
        </div>

     
        <div class="sreach">
            <form action="index.php?act=search" method="post">    
                    <input type="text" name="kyw"  placeholder="Search entire store here...">
                    <button type="submit" name="btn" ><i class="fa-solid fa-search" style="font-size: 17px; color:#747474;padding:1px 6px "></i></button>
                    <!-- <input type="submit" name="btn" value="sreach"> -->
            </form>
        </div>  
        <!-- <div class="sreach">
            <input type="text"  placeholder="Search entire store here...">
            
            <button ><i class="fa-solid fa-search" style="font-size: 17px; color:#747474;padding:1px 6px "></i></button>
        </div>   -->
        <div class="login">
            <a href="index.php?act=dangnhap"> <i class="fa-solid fa-user" style="font-size: 20px; color:black; margin-right:15px "></i></a> 
            
            <a href="#" class="cart"><i class="fa-solid fa-shopping-basket" style=" font-size: 20px;color:black "></i></a> 

        </div>
    </header>
    <nav>
        <div class="menu">
            <a href="index.php?act=nam">Nam</a>
            <a href="index.php?act=nu">Nữ</a>
            <a href="index.php?act=lienhe">Liên hệ</a>
            <a href="#">Blog</a>
            <a href="index.php?act=gioithieu">Về chúng tôi</a>
        </div>
      
    
    </nav>