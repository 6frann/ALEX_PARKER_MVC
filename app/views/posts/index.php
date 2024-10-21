<!-- Blog Post Start -->
<div class="col-md-12 blog-post row">
    <?php foreach($posts as $post): ?>
        <div class="post-title">
            <a href="single.html"
            ><h1>
            <?php echo $post['title']; ?>
            </h1></a
            >
        </div>
        <div class="post-info">
            <span><?php echo date_format(date_create($post['created_at']),"D M Y") ; ?></span> | <span>Life style</span>
        </div>
        <p>
        <?php echo \Core\Helpers\truncate($post['text']); ?>
        </p>
        <a
            href="single.html"
            class="
            button button-style button-anim
            fa fa-long-arrow-right
            "
            ><span>Read More</span>
        </a>
    <?php endforeach; ?>
</div>
<!-- Blog Post End -->