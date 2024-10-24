<div class="col-md-9">
            <div class="col-md-12 page-body">
              <div class="row">
                <div class="sub-title">
                  <a href="index.html" title="Go to Home Page"
                    ><h2>Back Home</h2></a
                  >
                  <a href="#comment" class="smoth-scroll"
                    ><i class="icon-bubbles"></i
                  ></a>
                </div>

                <div class="col-md-12 content-page">
                  <div class="col-md-12 blog-post">
                    <div>
                      <img src="images/blog/1.jpg" alt="">
                    </div>

                    <!-- Post Headline Start -->
                    <div class="post-title">
                      <h1>
                        <?php echo $post['title']; ?>
                      </h1>
                    </div>
                    <!-- Post Headline End -->

                    <!-- Post Detail Start -->
                    <div class="post-info">
                      <span> <?php echo date_format(date_create($post['created_at']),"D M Y"); ?> </span> | <span> life style </span>
                    </div>
                    <!-- Post Detail End -->

                    <p>
                    <?php echo $post['text']; ?>
                      <b
                        ><a
                          href="javascript:void(0)"
                          data-toggle="popover"
                          data-placement="top"
                          data-content="You can write any text here"
                          >Click me</a
                        ></b
                      >
                      <?php echo $post['text']; ?>
                      <b
                        data-toggle="tooltip"
                        data-placement="top"
                        title="You can write any text here."
                        >Hover me</b
                      >
                      <?php echo $post['text']; ?>
                    </p>

                    <!-- Post Blockquote (Italic Style) Start -->
                    <blockquote class="margin-top-40 margin-bottom-40">
                      <p>
                      <?php echo $post['quote']; ?>
                      </p>
                    </blockquote>
                    <!-- Post Blockquote (Italic Style) End -->

                    <!-- Post Buttons -->
                    <div>
                      <a href="posts/<?php echo $post['id']; ?>/<?php echo \Core\Helpers\slugify($post['title']); ?>/edit/form.html" type="button" class="btn btn-primary"
                        >Edit Post</a
                      >
                      <a
                        href="posts/<?php echo $post['id']; ?>/<?php echo \Core\Helpers\slugify($post['title']); ?>/delete.html"
                        type="button"
                        class="btn btn-secondary"
                        role="button"
                        >Delete Post</a
                      >
                    </div>
                    <!-- Post Buttons End -->
                  </div>
                </div>
              </div>
            </div>