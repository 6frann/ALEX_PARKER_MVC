<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once '../app/views/templates/partials/_head.php'; ?>
  </head>

  <body>
    <!-- Preloader Start -->
    <div class="preloader">
      <div class="rounder"></div>
    </div>
    <!-- Preloader End -->

    <div id="main">
      <div class="container">
        <div class="row">
          
        <?php include_once '../app/views/templates/partials/_aside.php'; ?>

          <!-- Blog Post (Right Sidebar) Start -->
          <div class="col-md-9">
            <div class="col-md-12 page-body">
              <div class="row">
                <div class="col-md-12 content-page">
                  <!-- ADD A POST -->
                  <div>
                    <a href="posts/add/form.html" type="button" class="btn btn-primary"
                      >Add a Post</a
                    >
                  </div>
                  <!-- ADD A POST END -->

                  <?php echo $content; ?>

                  <?php include_once '../app/views/templates/partials/_nav.php'; ?>

                </div>
              </div>
            </div>

            <?php include_once '../app/views/templates/partials/_footer.php'; ?>

          </div>
          <!-- Blog Post (Right Sidebar) End -->
        </div>
      </div>
    </div>

    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <!-- Back to Top End -->

    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>

    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>
  </body>
</html>