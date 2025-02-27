<?php 
    include('sidebar.php');
    function getAllNews(){
        $conn = new mysqli('localhost', 'root', '**aa12345', 'msc');
        $selectNews = "SELECT n.*, u.user_name FROM `tbl_news` AS n INNER JOIN `tbl_user` AS u ON n.userID = u.user_id  WHERE n.status = '1' ORDER BY n.id DESC";
        $result =$conn->query($selectNews);
        while($row=$result->fetch_assoc()){
            echo '
                <tr>
                    <td><img width="80px" src="./assets/image/'.$row['thumbnail'].'"/></td>
                    <td style="white-space: nowrap; overflow: hidden;  text-overflow: ellipsis;   width: 200px;">'.$row['title'].'</td>
                    <td><span style="  background-color: green;  color:white;  padding: 2px 6px;  border-radius: 4px;">'.$row['post_type'].'</span></td>
                    <td><span style="  background-color: green;  color:white;  padding: 2px 6px;  border-radius: 4px;">'.$row['category'].'</span></td>
                    <td>'.$row['create_at'].'</td>
                    <td>'.$row['user_name'].'</td>
                    <td width="150px">
                        <a href="editNews.php?id='.$row['id'].'" type="button" class="btn btn-warning">Update</a>
                        <button type="button" remove-id="'.$row['id'].'" class="btn btn-danger btn-remove" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                            <h3>All Sport News</h3>
                        </div>
                        <div class="bottom view-post">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                    <div>
                                    <a href="add-post.php"><button type="button" class="btn btn-success">Add News</button></a>
                                    </div>
                                    <div class="block-search">

                                    </div>
                                    <table class="table text-center align-middle" border="1px" style="table-layout: fixed;">
                                        <tr>
                                            <th>Thumbnail</th>
                                            <th>Title</th>
                                            <th>Post Type</th>
                                            <th>Categories</th>
                                            <th>Publish Date</th>
                                            <th>Admin</th>
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
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to remove this post?</h5>
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
<?php 
    if(isset($_POST['delete'])){
        $news_id=$_POST['remove_id'];
        $conn = new mysqli('localhost', 'root', '**aa12345', 'msc');
        $delete_new="UPDATE `tbl_news` set status='0'  WHERE `id`='$news_id'";
        $conn->query($delete_new);
        echo "<script>window.location.href='view-post.php'</script>";
    }
?>