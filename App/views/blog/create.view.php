<?php loadPartial('head')  ?>
<?php loadPartial('navbar') ?>


<div class="form-container">
      <form action="" class="create-post-form">
        <input
          type="text"
          name="title"
          id="title"
          placeholder="عنوان پست"
          required
        />
        <textarea
          type="text"
          name="content"
          id="content"
          placeholder="محتوای پست"
          required
        ></textarea>
        <input type="file" name="image" id="image" placeholder="تصویر پست" />
        <input
          type="text"
          name="category"
          id="category"
          placeholder="دسته بندی"
        />
        <button type="submit">ارسال پست</button>
      </form>
    </div>


    <?php loadPartial('footer') ?>