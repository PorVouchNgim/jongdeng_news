<?php
include('sidebar.php');
function getAllNews()
{
    $conn = new mysqli('localhost', 'root', '**aa12345', 'msc');
    $selectNews = "SELECT * FROM msc.tbl_feedback order by user_id DESC;";
    $result = $conn->query($selectNews);
    while ($row = $result->fetch_assoc()) {
        echo '
                <tr>
                    <td>' . $row['username'] . '</td>
                    <td>' . $row['email'] . '</td>
                    <td>' . $row['phone'] . '</td>
                    <td>' . $row['address'] . '</td>
                    <td width="150px">
                        <button type="button" username="' . $row['username'] . '" message="' . $row['message'] . '" class="btn btn-success btn-remove" data-bs-toggle="modal" data-bs-target="#viewmessage">
                            View Message
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
            <h3>All Feedback</h3>
        </div>
        <div class="bottom view-post">
            <figure>
                <form method="post" enctype="multipart/form-data">
                    <div class="block-search">

                    </div>
                    <table class="table text-center align-middle" border="1px" style="table-layout: fixed;">
                        <tr>
                            <th>Name</th>
                            <th>email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>view Message</th>
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
                    <div class="modal fade" id="viewmessage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="username"></h5>
                                    </div>
                                    <p class="" id="msg"></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                                </div>
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
    var viewmessage = document.getElementById('viewmessage');
    viewmessage.addEventListener('show.bs.modal', function(event) {
        var btn = event.relatedTarget;
        var val_username = btn.getAttribute('username');
        var msg = btn.getAttribute('message');
        viewmessage.querySelector('#username').innerText = " Feedback from Mr/Ms : " + val_username;
        viewmessage.querySelector('#msg').innerText = msg;
    });
</script>
<?php
if (isset($_POST['delete'])) {
    $news_id = $_POST['remove_id'];
    $conn = new mysqli('localhost', 'root', '**aa12345', 'msc');
    $delete_new = "UPDATE `tbl_news` set status='0'  WHERE `id`='$news_id'";
    $conn->query($delete_new);
    echo "<script>window.location.href='view-post.php'</script>";
}
?>