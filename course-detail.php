<?php require_once('config.php') ?>  


<?php include('partials/_header.php') ?>
<?php include('partials/_navbar.php') ?>


<?php

    if(!isset($_GET["id"])){
        header("Location: index.php");
    }
    $id = $_GET["id"];

    $result_kategoriler = mysqli_query($baglanti, "SELECT * from kategoriler");
    $result_kurs = mysqli_query($baglanti, "SELECT * from kurslar WHERE id=".$id);

    $kategoriler = mysqli_fetch_all($result_kategoriler, MYSQLI_ASSOC); //fetch_all toplu bir şekilde bilgi getiryor örneğin 5 tane.
    $kurs = mysqli_fetch_assoc($result_kurs); //fetch_assoc bu method tek bir kayıt getiriyor.
    
    mysqli_close($baglanti);
?>


<div class="container my-3">
    <div class="row">
        <div class="col-3">
            <?php include('partials/_kategoriler.php') ?>
        </div> <!-- Col-3 -->

        <div class="col-9">

        <?php include('partials/_course.php') ?>

        </div><!-- Col-9 -->

    </div><!-- ROW -->
</div> <!-- CONTAİNER -->

<?php include('partials/_footer.php') ?>