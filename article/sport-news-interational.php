<?php include('header.php'); ?>
<main class="sport">
    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            SPORT NEWS
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container">
            <div class="row">

            <?php
                $conn = new mysqli('localhost', 'root', '**aa12345', 'msc');
                $sql = "select * from tbl_news where status=1 and post_type='Sport' and category='International'  ORDER by id DESC;";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="col-4">
                        <figure>
                        <a href="news-detail.php?post=<?php echo $row['id'] ?>&cat=<?php echo $row['post_type'] ?>">
                                    <div class="thumbnail">
                                        <img src=<?php echo '../admin/assets/image/' . $row['thumbnail'] ?> width="350px" height="200px" alt="">
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
                    </div>
                <?php
                }
                ?>

            </div>
            <!-- <div class="row pagination">
                <div class="col-12">
                    <ul>
                        <li>
                            <a href="">1</a>
                        </li>
                        <li>
                            <a href="">2</a>
                        </li>
                        <li>
                            <a href="">3</a>
                        </li>
                    </ul>   
                </div>
            </div> -->
        </div>
    </section>
</main>
<?php include('footer.php'); ?>