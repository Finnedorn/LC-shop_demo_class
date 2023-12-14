<div class="col-12 col-md-4 col-lg-3">
    <div class="card">
        <img src="<?= $image ?>" class="card-img-top my-ratio" alt="<?= $title ?>">
        <div class="card-body">
            <h5 class="card-title">
                <?= $title ?>
            </h5>
            <?php if (isset($content)) { ?>
                <p class="card-text">
                    <?= $content ?>
                </p>
            <?php } ?>
            <?php if (isset($custom)) { ?>
                <div>
                    <?= $custom ?>
                </div>
            <?php } ?>

        </div>
    </div>
</div>