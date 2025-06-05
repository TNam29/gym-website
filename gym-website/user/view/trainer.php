<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="site-section" id="trainer-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
          <div class="col-md-8  section-heading">
            
            <h2 class="heading mb-3">Huấn luyện viên</h2>
          </div>
        </div>
<div class="row">
          
          <?php
      if (isset($dsdmpt) && (count($dsdmpt) > 0)) {
        
              
              
        foreach ($dsdmpt  as $dm) {
          echo '
          <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="">
            <div class="person">
              <img src="../../admin/uploaded/avartar.jpg " alt="Free website template by Free-Template.co" class="img-fluid">
              <h3>'. $dm['tenpt'] .'</h3>
              <p class="position">Trainer</p>
              <p>'. $dm['quandiem'] .'</p>
            </div>
          </div>
        
  
        ';
        }
        
      }
      ?>
          
        
        </div>
      </div>
    </div>
</body>
</html>