<div class="container">
    <h2><?php echo $title ?></h2>
    <?php validation_errors() ?>
    <?php echo form_open('posts/create') ?>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="title">title</label>
            <input type="text" class="form-control" id="title" placeholder="title"  name="title">
        </div>
        <div class="form-group col-md-6">
            <label for="body">body</label>
            <input type="text" class="form-control" id="body" placeholder="body"  name="body">
        </div>
        
    </div>
   
    <button type="submit" class="btn btn-primary">create post</button>
    </form>
</div>