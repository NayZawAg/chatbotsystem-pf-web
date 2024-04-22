<?php
  require '../lib/blob_url.php';
  require '../page_parts/response_header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo 'test-poster' ?></title>

  <!-- Main Stylesheet File -->
  <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 centered">
        <img src=<?php echo getBlobUrlWithSignature('poster/Kushiro_area_chatbot_poster_ja.jpg') ?> usemap="#poster_map" width="1145" height="1610" class="img-responsive">
      </div>
    </div>
  </div>
</body>
</html>
