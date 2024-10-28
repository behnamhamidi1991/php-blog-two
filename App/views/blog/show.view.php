<?php loadPartial('head')  ?>
<?php loadPartial('navbar') ?>


<div class="single-post">
          <div class="blog-card">
            <img src="<?= $post->image_url ?>" alt="" />
            
            <div class="blog-card-content">
              <h3><?= $post->title ?> </h3>
              <p>
                <?= $post->content ?>
              </p>
            </div>
          </div>

<?php loadPartial('footer') ?>