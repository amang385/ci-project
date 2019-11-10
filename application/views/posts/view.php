<h1><?php  echo $title?></h1>
<small class="post-date"><?php echo   $post['created_at'] ?></small>
<div class="post-body">
    <?php echo  $post['body'] ?>
</div>

<hr>
<a class="btn btn-info float-left" href="<?php echo base_url()?>posts/edit/<?php echo $post['slug'] ?>">Edit</a>
<?php echo form_open('posts/delete/'.$post['id']) ?>
    <input type="submit" class="btn btn-danger  pull-left" value="Delete">
</form>