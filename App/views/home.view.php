<?php loadPartial('head')  ?>
<?php loadPartial('navbar') ?>
<?php loadPartial('me') ?>

   

      <!-- Main Content -->
      <section id="blog" class="blog-section">
        <div class="blog-container">
          
          <?php foreach($posts as $post) : ?>
          <div class="blog-card">
            <img src="<?= $post->image_url?>" alt="" />
            <div class="blog-card-content">
              <h3><?= $post->title ?></h3>
              <p>
                <?= $post->content ?>
              </p>
              <a href="/post?id=<?= $post->id ?>" class="readmore-blog">بیشتر بخوانید</a>
            </div>
          </div>
          <?php endforeach; ?>

        </div>
      </section>

      <section id="projects" class="projects"></section>

      <!-- Bottom Banner -->
    </main>

<?php loadPartial('footer') ?>