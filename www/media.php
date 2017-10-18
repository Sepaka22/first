<?php include_once "header.php";?>
        
<div class="container-fluid container_upper">
  <div class="row col-xs-12 col-sm-3 col-sm-offset-2"></div>
  <div class="menu2 col-xs-12 col-sm-6 col-sm-offset-1">
      <button class="video_filter on" data-filter="*">Все</button>
      <button class="video_filter" data-filter=".video">Видео</button>
      <button class="video_filter" data-filter=".performance">Шоу-лекции</button>
  </div>
</div>

<div class="wrap video_wrap isotope">
    <div class="performance">
        <iframe class="youtube" src="https://www.youtube.com/embed/HsXrylybmNI" frameborder="0" allowfullscreen></iframe>
        <div class="youtube_title">Президент из паутины</div>
    </div>
    <div class="video">
         <iframe class="youtube" src="https://www.youtube.com/embed/5IHySDxrTMQ" frameborder="0" allowfullscreen></iframe>
         <div class="youtube_title">9 долбаных точек или великие провокаторы</div>
    </div>
    <div class="performance">
         <iframe class="youtube" src="https://www.youtube.com/embed/aymDfdvAaFA" frameborder="0" allowfullscreen></iframe>
         <div class="youtube_title">Как продать родину</div>
    </div>
    <div class="video">
         <iframe class="youtube" src="https://www.youtube.com/embed/2eaalZvxRX4" frameborder="0" allowfullscreen></iframe>
         <div class="youtube_title">Я реклама</div>
    </div>
</div>
        
<?php include_once "footer.php";?>