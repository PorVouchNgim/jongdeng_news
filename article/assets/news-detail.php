<?php include('header.php'); ?>
<main class="news-detail">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <?php
                    $post_id = $_GET['post'];
                    $conn = new mysqli('localhost', 'root', '**aa12345', 'msc');
                    $sql = "select * from tbl_news where status=1 and id='$post_id'";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <div class="main-news">
                            <div class="thumbnail">
                                <img src=<?php echo '../admin/assets/image/' . $row['thumbnail'] ?>>
                            </div>
                            <div class="detail">
                                <h3 class="title">​<?php echo $row['title']; ?></h3>
                                <div class="date">​<?php echo $row['create_at']; ?></div>
                                <div class="description">
                                    ​<?php echo $row['description']; ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-4">
                    <div class="relate-news">
                        <h3 class="main-title">Related News</h3>
                        <?php
                        $post_type = $_GET['cat'];
                        $conn = new mysqli('localhost', 'root', '**aa12345', 'msc');
                        $sql = "select * from tbl_news where status=1 and post_type='$post_type' ORDER by id DESC limit 3;";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <figure>
                                <a href="news-detail.php?post=<?php echo $row['id'] ?>&cat=<?php echo $row['post_type'] ?>">
                                    <div class="thumbnail">
                                        <img src=<?php echo '../admin/assets/image/' . $row['thumbnail'] ?> width="350px" alt="">
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">​<?php echo $row['title']; ?></h3>
                                        <div class="date">​<?php echo $row['create_at']; ?></div>
                                        <div class="description">
                                        ​<?php echo $row['description']; ?>
                                        </div>
                                    </div>
                                </a>
                            </figure>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('footer.php'); ?>