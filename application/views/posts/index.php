<h1><?php  echo $title?></h1>
<?php foreach($posts as $post): ?>
    <h3><?php echo $post['title'] ?></h3>
    <small class="post-date"><?php echo   $post['created_at'] ?></small>
    <?php echo  $post['body'] ?>
    <p><a class="btn btn-primary" href="<?php echo site_url('/posts/'.$post['slug']) ?>">Read more</a></p>
<?php endforeach ?>