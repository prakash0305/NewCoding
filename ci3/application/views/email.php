<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MyVideoHub</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }
  header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
  }
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
  }
  .video {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    padding: 10px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  .video img {
    width: 200px;
    height: auto;
    margin-right: 20px;
  }
  .video-info {
    flex: 1;
  }
  .video-title {
    font-size: 18px;
    font-weight: bold;
    margin: 0;
  }
  .video-description {
    margin: 10px 0;
  }
</style>
</head>
<body>
<header>
  <h1>Welcome to MyVideoHub</h1>
</header>
<div class="container">
  <div class="video">
    <img src="video1-thumbnail.jpg" alt="Video 1">
    <div class="video-info">
      <h2 class="video-title">Amazing Travel Destinations</h2>
      <p class="video-description">Explore breathtaking travel destinations around the world.</p>
    </div>
  </div>
  <div class="video">
    <img src="video2-thumbnail.jpg" alt="Video 2">
    <div class="video-info">
      <h2 class="video-title">Cooking Masterclass</h2>
      <p class="video-description">Learn to cook delicious dishes from professional chefs.</p>
    </div>
  </div>
  <!-- Add more video sections as needed -->
</div>
</body>
</html>
