 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="assets/images/favicon.png" rel="icon" />
<meta name="description" content="Your ThemeForest item Name and description">
<meta name="author" content="harnishdesign.net">

<!-- Stylesheet
============================== -->
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css" />
<!-- Font Awesome Icon -->
<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css" />
<!-- Magnific Popup -->
<link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css" />
<!-- Highlight Syntax -->
<link rel="stylesheet" type="text/css" href="assets/vendor/highlight.js/styles/github.css" />
<!-- Custom Stylesheet -->
<link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css" />
</head>

<!-- Preloader -->
<div class="preloader">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- Preloader End --> 

<!-- Document Wrapper   
=============================== -->
<div id="main-wrapper"> 
  
  <!-- Header
  ============================ -->

  <div id="header"></div>

      <script>
          fetch('header.html')
            .then(response => response.text())
            .then(data => {
              document.getElementById('header').innerHTML = data;
            });
        });
      </script>


  <!-- Header End --> 
  
  <!-- Content
  ============================ -->
  <div id="content" role="main">

	<div id="sidebar"></div>

      <script>
          fetch('sidebar.html')
            .then(response => response.text())
            .then(data => {
              document.getElementById('sidebar').innerHTML = data;
            });
        });
      </script>
    
    <!-- Docs Content
	============================ -->
    <div class="idocs-content">
      <div class="container"> 

		<!-- Content -->

        <section id="ref1">

          <div id="content1"></div>

                <script>
                    fetch('content1.html')
                      .then(response => response.text())
                      .then(data => {
                        document.getElementById('content1').innerHTML = data;
                      });
                  });
                </script>

        </section>

		<hr class="divider">

      </div>
    </div>
	
  </div>
  <!-- Content end --> 
  
<div id="footer"></div>

<script>
    fetch('footer.html')
      .then(response => response.text())
      .then(data => {
        document.getElementById('footer').innerHTML = data;
      });
  });
</script>

  
</div>
<!-- Document Wrapper end --> 

<!-- Back To Top --> 
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- JavaScript ============================ -->

<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendor/highlight.js/highlight.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/js/theme.js"></script>


</body>
</html>
