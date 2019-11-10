<div class="container">
    <h2><?php echo $title ?></h2>
    <?php validation_errors() ?>
    <?php echo form_open('posts/update') ?>
    <input type="hidden" name="id" value="<?php echo $post['id'] ?>">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="title">title</label>
            <input type="text" class="form-control" id="title" placeholder="title"  name="title" value="<?php echo  $post['title'] ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="body">body</label>
            <input type="text" class="form-control" id="body" placeholder="body"  name="body"   value="<?php echo  $post['body'] ?>">
        </div>
        
    </div>
   
    <button type="submit" class="btn btn-primary">update post</button>
    </form>
</div>