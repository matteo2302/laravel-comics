<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/js/app.js');
  <title>DC comics</title>
</head>
<body>
  @include('includes.header')
  <div class="cards-container">
 @include('includes.cards')
 <button>Load More</button>
 </div>
 @include('includes.shop')

  @include('includes.footer')
</body>
</html>