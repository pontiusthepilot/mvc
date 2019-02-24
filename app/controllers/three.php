<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Widgets</title>
  <style>
    body {
      position: relative;
    }
    
    .main {
      width: 300px;
      margin: auto;
    }
    
    .widget1 {
      width: 100px;
      height: 75px;
      float: left;
    }
    
    .widget2 {
      position: absolute;
      top: 0px;
      right: 0px;
    }
    
    .content {
      float: left;
    }
  </style>
</head>
<body>
  <div class="main">
    <div class="widget1">Widget1</div>
    <div class="content">
      Content ... ... ... ... ... ... ... ... ... ... ... ... ...
      ... ... ... ... ... ... ... ... ... ... ... ... ... ... ... ... ... ... ... ...
      ... ... ... ... ... ... ... ... ... ... ... ... ... ... ... ... ... ... ... ...
      ... ... ... ... ... ... ... ... ... ... ... ... ... ... ... ... ... ... ... ...
      ... ... ... ... ... ... ... ... ... ... ... ... ... ... ... ... ... ... ... ...
    </div>
    <div class="widget2">Widget2</div>
  </div>
</body>
</html>