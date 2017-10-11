<h2><?= $title ?></h2>
<?php foreach ($posts as $post) { ?>
    <h3><?php echo $post['title']; ?></h3>
    <small>Posted on: <?php echo $post['create_at']; ?></small>
    <?php echo $post['body']; ?>
    <br/><br/>
    <p><a class="btn btn-default" href="<?php echo '/posts/'.$post['slug'] ?>">Read More</a></p>
<?php } ?>