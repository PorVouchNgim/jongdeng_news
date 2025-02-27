<?php
include('sidebar.php');
function getAllNews()
{
    $conn = new mysqli('localhost', 'root', '**aa12345', 'msc');
    $selectuser = "SELECT * FROM `tbl_user` where status=1";
    $result = $conn->query($selectuser);
    while ($row = $result->fetch_assoc()) {
        echo '
                <tr>
                    <td align=left>' . $row['user_name'] . '</td>
                    <td align=left with=200px>' . $row['email'] . '</td>
                    <td align=left><span style="  background-color:rgb(99, 188, 99);  color:white;  padding: 2px 6px;  border-radius: 4px;">' . $row['role'] . '</span></td>
                    <td width="200px">
                        <button type="button" username="' . $row['user_name'] . '" passwd_id="' . $row['user_id'] . '" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#resetpasswd" " '.(($_SESSION['role']=='Editor')? 'disabled':'').' >Reset Password</button>
                        <button type="button" user_id="' . $row['user_id'] . '" username="' . $row['user_name'] . '" email="' . $row['email'] . '" role="' . $row['role'] . '" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#update_user " '.(($_SESSION['role'] =='Editor')? 'disabled':'').' >update</button>
                        <button type="button" remove-id="' . $row['user_id'] . '" username="' . $row['user_name'] . '" class="btn btn-danger btn-remove" data-bs-toggle="modal" data-bs-target="#exampleModal" " '.(($_SESSION['role'] =='Editor')? 'disabled':'').'>
                            Remove
                        </button>
                    </td>
                </tr>
            ';
    }
}
?>
<div class="col-10">
    <div class="content-right">
        <div class="top">
            <h3>All Users</h3>
        </div>
        <div class="bottom view-post">
            <figure>
                <form method="post" enctype="multipart/form-data">
                    <div>
                        <button type="button" class="btn btn-success" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#create_user" <?php
                        if($_SESSION['role']=='Editor'){
                            echo 'disabled';
                        }
                        ?>>Add User</button>
                    </div>
                    <div class="block-search">
                    </div>
                    <table class="table text-left align-middle" border="1px" style="table-layout: fixed;">
                        <tr>
                            <th width=200px align="left">UserName</th>
                            <th align="left">Email</th>
                            <th align="left">Role</th>
                            <th>Actions</th>
                        </tr>
                        <?php getAllNews() ?>
                    </table>
                    <ul class="pagination">
                        <li>
                            <a href="">1</a>
                            <a href="">2</a>
                            <a href="">3</a>
                            <a href="">4</a>
                        </li>
                    </ul>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to remove this user?</h5>
                                </div>
                                <div class="modal-footer">
                                    <form action="" method="post">
                                        <input type="hidden" class="value_remove" name="remove_id">
                                        <button type="submit" class="btn btn-danger" name="delete">Yes</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal reset password -->
                    <div class="modal fade" id="resetpasswd" tabindex="-1" data-bs-backdrop="static" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel">change Password </h5>
                                </div>
                                <form action="" method="post" id="resetpasswd_frm">
                                    <div class="modal-body">
                                        <input type="hidden" name="user_id" id="user_id">
                                        <label for="New_password"> New Password</label>
                                        <input type="password" name="New_password" id="New_password">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success" name="passwd" id="reset_passwd">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- modal add user -->
                    <div class="modal fade" id="create_user" tabindex="-1" data-bs-backdrop="static" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel">New User </h5>
                                </div>
                                <form action="" method="post">
                                    <div class="modal-body">
                                        <div class="row">
                                            <label for="username" class="col-sm-2 col-form-label">UserName</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nusername" name="nusername">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="password" name="password">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <select class="form-select" name="role" id="role" aria-label="Default select example">
                                                <option selected>Select Role</option>
                                                <option value="Administrator">Administrator</option>
                                                <option value="Editor">Editor</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success" name="new_user" id="new_user">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="update_user" tabindex="-1" data-bs-backdrop="static" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel">Update User </h5>
                                </div>
                                <form action="" method="post">
                                    <div class="modal-body">
                                        <div class="row">
                                            <input type="hidden" name="user_id" id="user_id">
                                            <div class="col-3">
                                                <label for="username" class="col-sm-2 col-form-label">UserName</label>
                                            </div>
                                            <div class="col-9">
                                                <input type="text" class="form-control" id="nusername" name="nusername" style="width: 100%;" disabled>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                            </div>
                                            <div class="col-9">
                                                <input type="email" class="form-control" id="email" name="email" style="width: 100%;">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <label for="role" class="col-sm-2 col-form-label"> Role</label>
                                            </div>
                                            <div class="col-9">
                                                <select class="form-select" name="role" id="role" aria-label="Default select example">
                                                    <option selected>Select Role</option>
                                                    <option value="Administrator">Administrator</option>
                                                    <option value="Editor">Editor</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success" name="update_user" id="update_user">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
            </figure>
        </div>
    </div>
</div>
</div>
</div>
</main>
</body>

</html>
<script>
    var restpasswdmodal = document.getElementById('resetpasswd');
    restpasswdmodal.addEventListener('show.bs.modal', function(event) {
        var btn = event.relatedTarget;
        var val_username = btn.getAttribute('username');
        var val_userid = btn.getAttribute('passwd_id');
        restpasswdmodal.querySelector('#user_id').value = val_userid
        restpasswdmodal.querySelector('#myModalLabel').innerText = "Change password for user " + val_username;
    });
    var updatemodal = document.getElementById('update_user');
    updatemodal.addEventListener('show.bs.modal', function(event) {
        var btn = event.relatedTarget;
        var val_id = btn.getAttribute('user_id');
        var val_username = btn.getAttribute('username');
        var val_email = btn.getAttribute('email');
        var val_role = btn.getAttribute('role');
        updatemodal.querySelector('#nusername').value = val_username;
        updatemodal.querySelector('#email').value = val_email;
        updatemodal.querySelector('#user_id').value = val_id;
        var select = updatemodal.querySelector('#role');
        for (var opt of select.options) {
            if (opt.value == val_role) {
                opt.selected = true;
                break;
            }
        }

    })
    var deleteModal=document.getElementById('exampleModal');
    deleteModal/addEventListener('show.bs.modal',function(event){
        var btn=event.relatedTarget;
        var username=btn.getAttribute('username');
        deleteModal.querySelector('#exampleModalLabel').innerText='Do you want to delete user '+ username + '?';
    })
</script>
<?php
$conn = new mysqli('localhost', 'root', '**aa12345', 'msc');
if (isset($_POST['delete'])) {
    $news_id = $_POST['remove_id'];
    $delete_new = "UPDATE `tbl_user` set status='0'  WHERE `user_id`='$news_id'";
    $conn->query($delete_new);
    echo "<script>window.location.href='view-user.php'</script>";
}
if (isset($_POST['passwd'])) {
    $user_id = $_POST['user_id'];
    $new_passwd = $_POST['New_password'];
    $new_passwd = password_hash($new_passwd, PASSWORD_DEFAULT);
    $update_password = "update tbl_user set password='$new_passwd' where user_id='$user_id'";
    $conn->query($update_password);
}
if (isset($_POST['new_user'])) {
    $username = $_POST['nusername'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    if (!empty($username) and !empty($email) and !empty($password) and $role == 'Select Role') {
        $sql = "INSERT INTO `tbl_user` (`user_name`,`email`,`password`,`role`) VALUES ('$username','$email','$password','$role');";
        $result = $conn->query($sql);
        if ($result) {
            echo '
                        <script>
                            Swal.fire({
                                title: "Success",
                                text: "User was added!",
                                icon: "success"
                            });
                            window.location.href=view-user.php
                        </script>
                    ';
        }
    } else {
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
if (isset($_POST['update_user'])) {
    $user_id = $_POST['user_id'];
    $username = $_POST['nusername'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    if (!empty($username) and !empty($email) and $role != 'Select Role') {
        $sql = "UPDATE `tbl_user` SET `user_name` = '$username',`email` = '$email',`role` ='$role'  WHERE `user_id` = '$user_id' ;";
        printf($sql);
        $result = $conn->query($sql);
        if ($result) {
            echo '
                        <script>
                            Swal.fire({
                                title: "Success",
                                text: "User was update!",
                                icon: "success"
                            });
                        </script>
                    ';
        }
    } else {
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