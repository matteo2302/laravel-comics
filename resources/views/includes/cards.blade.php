<div class="container">
  @foreach($products as $product)
  <div class="card">
    <img src="{{ $product['thumb']}}">
    <a>{{$product['title']}}</a>
  </div>
  @endforeach
  
</div>