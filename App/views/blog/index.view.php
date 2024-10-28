<?php loadPartial('head')  ?>
<?php loadPartial('navbar') ?>

    
    <!-- Main Content -->
    <section id="projects" class="blog-section-single">
        <div class="blog-container">
        <?php foreach($posts as $post) : ?>
          <div class="blog-card">
            <img src="<?= $post->image_url?>" alt="" />
            <div class="blog-card-content">
              <h3><?= $post->title ?></h3>
              <p>
                <?= $post->content ?>
              </p>
              <a href="#" class="readmore-blog">بیشتر بخوانید</a>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </section>

      <?php loadPartial('footer') ?>