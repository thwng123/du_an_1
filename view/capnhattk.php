<div class="box-spct">
    <ul>
        <li><a href="index.php?act=home">Trang chủ </a></li>
        <li> / </li>
        <li>Tài khoản của tôi</li>
    </ul>

    
</div>

<div class="form-user">
    <div class="hoso">
        <h1>Hồ Sơ Của Tôi</h1>
        <span>Quản lý thông tin hồ sơ để bảo mật tài khoản</span>
    </div>
    <hr>

    <div class="form-container">
         <?php
                if(isset($_SESSION['username']) && (is_array($_SESSION['username']))){
                    extract($_SESSION['username']);
                }
            ?>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="info-user">
                <div class="form-group">
                    <label for="username">  Tên đăng nhập:</label><br>
                    <input type="text" id="username" name="username"  style="width:450px;padding: 5px;border: 1px solid #ccc;border-radius: 5px;padding: 0 20px;height: 48px;">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email"  style="width:450px">
                </div>
                <div class="form-group">
                    <label for="username">  Địa chỉ:</label><br>
                    <input type="text" id="address" name="address"  style="width:450px;padding: 5px;border: 1px solid #ccc;border-radius: 5px;padding: 0 20px;height: 48px;">
                </div>
                <div class="form-group">
                    <label for="username">  Số điện thoại:</label><br>
                    <input type="number" id="phone" name="phone"  style="width:450px;padding: 5px;border: 1px solid #ccc;border-radius: 5px;padding: 0 20px;height: 48px;">
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu:</label><br>
                    <input type="password" id="password" name="password" value="password123"style="width:450px" >
                </div>
            </div>
           <div class="img-user">
                <img src="" alt="">
                <label for="password">Chọn ảnh:</label><br>
                <input type="file" name="image"  style="width:450px;padding:10px;border: 1px solid #ccc;border-radius: 5px;height: 48px;">
           </div>
           <input type="hidden" name="user_id" value="<?= $user_id?>">
            <div class="form-group" >
                <button type="submit" style="width:70px; padding:0 20px; height:40px;border:none; color:white;margin-top:10px; background: rgb(238, 77, 45);">Lưu</button>
            </div>
        </form>
    </div>
</div>