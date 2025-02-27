<?php include('header.php'); ?>
    <div class="content contact">
        <section class="trending">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-trending">
                            <div class="content-left">
                                CONTACT US
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="wrap-follow">
                            <h4 class="title">FOLLOW US</h4>
                            <ul>
                                <li>
                                   <img src="assets/icon/fb.png" width="40px"> <a href="">Facebook</a>
                                </li>
                                <li>
                                   <img src="assets/icon/yt.png" width="40px"> <a href="">Youtube</a>
                                </li>
                                <li>
                                   <img src="assets/icon/ig.jfif" width="40px"> <a href="">Instagram</a>
                                </li>
                                <li>
                                   <img src="assets/icon/telegram.png" width="40px"> <a href="">Telegram</a>
                                </li>
                                <li>
                                   <img src="assets/icon/gmail-1.png" width="40px"> <a href="">Email</a>
                                </li>
                                <li>
                                   <img src="assets/icon/tiktok.png" width="40px"> <a href="">Tok Tok</a>
                                </li>
                                <li>
                                   <img src="assets/icon/phone.jpg" width="40px"> <a href="">012 333 444 / 010 232 323</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="wrap-contact">
                            <h4 class="title">FEEDBACK TO US</h4>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="label">Username</div>
                                        <input type="text" class="box" placeholder="Username" name="username" required>
                                    </div>
                                    <div class="col-6">
                                        <div class="label">Email</div>
                                        <input type="email" class="box" placeholder="Email" name="email" required>
                                    </div>
                                    <div class="col-6">
                                        <div class="label">Telephone</div>
                                        <input type="tel" class="box" placeholder="Telephone"  name="tel" minlength="9" maxlength="10">
                                    </div>
                                    <div class="col-6">
                                        <div class="label">Address</div>
                                        <input type="text" class="box" placeholder="Address" name="address" required>
                                    </div>
                                    <div class="col-12">
                                        <div class="label">Message</div>
                                        <textarea cols="30" rows="10" placeholder="Message Here" name="msg" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="wrap-btn">
                                            <button type="submit" name="btn_message"><i class="fab fa-telegram-plane"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php include('footer.php'); 
 $conn = new mysqli('localhost', 'root', '**aa12345', 'msc');
if(isset($_POST['btn_message'])){
    $name=$_POST['username'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $address=$_POST['address'];
    $msg=$_POST['msg'];
    if(!empty($name) && !empty($email) && !empty($tel) && !empty($address) &&!empty($msg)){
        $insertNews="INSERT INTO tbl_feedback(`username`,`email`,`phone`,`address`,`message`)VALUES('$name','$email','$tel','$address','$msg');";
        $result=$conn->query($insertNews);
        try{
            if($result){
                echo '
                    <script>
                        Swal.fire({
                            title: "Success",
                            text: "Thank for your feedback",
                            icon: "success"
                        });
                    </script>
                ';
            }
        }catch(Exception $e){
            echo $e;
        }
    }else{
        echo '
                    <script>
                        Swal.fire({
                            title: "Error",
                            text: "Please enter all !",
                            icon: "error"
                        });
                    </script>
                ';
    }
}
?>