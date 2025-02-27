<?php include('header.php');
$conn = new mysqli('localhost', 'root', '**aa12345', 'msc');
?>
<main class="home">
    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            TRENDING NOW
                        </div>
                        <div class="content-right">
                            <marquee behavior="" direction="left">
                                <div class="text-news">
                                    <i class="fas fa-angle-double-right"></i>
                                    <a href="">ពិធីសម្ពោធដាក់ឱ្យប្រើប្រាស់នូវកំណាត់ផ្លូវជាតិលេខ២៦ ប្រវែងជិត ៦៤គីឡូម៉ែត្រ </a> &ensp;
                                    <i class="fas fa-angle-double-right"></i>
                                    <a href="">ពិធីសម្ពោធដាក់ឱ្យប្រើប្រាស់នូវកំណាត់ផ្លូវជាតិលេខ២៦ ប្រវែងជិត ៦៤គីឡូម៉ែត្រ </a>

                                </div>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="latest-news">
        <div class="container">
            <div class="row">
                <div class="col-8 content-left">
                    <figure>
                        <?php
                        $sql = "select * from tbl_news where status=1 and post_type='Sport' ORDER by id DESC limit 1;";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <a href="news-detail.php?post=<?php echo $row['id'] ?>&cat=<?php echo $row['post_type'] ?>">
                                <div class="thumbnail">
                                    <img src=<?php echo '../admin/assets/image/' . $row['thumbnail'] ?> width="730px" alt="">
                                    <div class="title">
                                        ​<?php echo $row['title'] ?>
                                    </div>
                                </div>
                            </a>
                        <?php
                        }
                        ?>
                    </figure>
                </div>
                <div class="col-4 content-right">
                    <div class="col-12">
                        <figure>
                            <?php
                            $sql = "select * from tbl_news where status=1 and post_type='Sport' ORDER by id DESC limit 1;";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                            ?>
                                <a href="news-detail.php?post=<?php echo $row['id'] ?>&cat=<?php echo $row['post_type'] ?>">
                                    <div class="thumbnail">
                                        <img src=<?php echo '../admin/assets/image/' . $row['thumbnail'] ?> width="350px" alt="">
                                        <div class="title">
                                            ​<?php echo $row['title'] ?>
                                        </div>
                                    </div>
                                </a>
                            <?php
                            }
                            ?>
                        </figure>
                    </div>
                    <div class="col-12">
                        <figure>
                            <?php
                            $sql = "select * from tbl_news where status=1 and post_type='Sport' ORDER by id DESC limit 1;";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                            ?>
                                <a href="news-detail.php?post=<?php echo $row['id'] ?>&cat=<?php echo $row['post_type'] ?>">
                                    <div class="thumbnail">
                                        <img src=<?php echo '../admin/assets/image/' . $row['thumbnail'] ?> width="350px" alt="">
                                        <div class="title">
                                            ​<?php echo $row['title'] ?>
                                        </div>
                                    </div>
                                </a>
                            <?php
                            }
                            ?>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <section class="news">
        <div class="container">
            <div class="row">

                <?php
                $conn = new mysqli('localhost', 'root', '**aa12345', 'msc');
                $sql = "select * from tbl_news where status=1 and post_type='Sport' ORDER by id DESC limit 3;";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="col-4">
                        <figure>
                            <a href="news-detail.php?post=<?php echo $row['id'] ?>&cat=<?php echo $row['post_type'] ?>">
                                <div class="thumbnail">
                                    <img src=<?php echo '../admin/assets/image/' . $row['thumbnail'] ?> width="350px" height="200px">
                                    <div class="title">
                                        ​<?php echo $row['title'] ?>
                                    </div>
                                </div>
                            </a>
                        </figure>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            SOCIAL NEWS
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="row">
            <?php
                $conn = new mysqli('localhost', 'root', '**aa12345', 'msc');
                $sql = "select * from tbl_news where status=1 and post_type='Social' ORDER by id DESC limit 3;";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="col-4">
                        <figure>
                            <a href="news-detail.php?post=<?php echo $row['id'] ?>&cat=<?php echo $row['post_type'] ?>">
                                <div class="thumbnail">
                                    <img src=<?php echo '../admin/assets/image/' . $row['thumbnail'] ?> width="350px" height="200px">
                                    <div class="title">
                                        ​<?php echo $row['title'] ?>
                                    </div>
                                </div>
                            </a>
                        </figure>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            ENTERTAINMENT NEWS
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="row">
            <?php
                $conn = new mysqli('localhost', 'root', '**aa12345', 'msc');
                $sql = "select * from tbl_news where status=1 and post_type='Entertainment' ORDER by id DESC limit 3;";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="col-4">
                        <figure>
                            <a href="news-detail.php?post=<?php echo $row['id'] ?>&cat=<?php echo $row['post_type'] ?>">
                                <div class="thumbnail">
                                    <img src=<?php echo '../admin/assets/image/' . $row['thumbnail'] ?> width="350px" height="200px">
                                    <div class="title">
                                        ​<?php echo $row['title'] ?>
                                    </div>
                                </div>
                            </a>
                        </figure>
                    </div>
                <?php
                }
                ?>
        </div>
    </section>
</main>
<?php include('footer.php'); ?>