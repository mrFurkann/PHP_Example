<div class="card mb-3">
    <div class="row">

        <div class="col md-4">
            <img src="img/<?php echo $kurs['resim']; ?>" class="img-fluid rounded-start">

        </div><!-- Col-md-4 -->

        <div class="col md-8">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="./course-detail.php?id=<?php echo $kurs["id"];?>">
                        <?php echo $kurs["baslik"];  ?>
                    </a>
                    
                </h5>
                <p>
                    <?php echo $kurs["aciklama"]; ?>
                </p>
            </div><!-- CARD-BODY -->
        </div><!-- Col-md-8 -->

    </div><!-- ROW -->

</div><!-- CARD -->