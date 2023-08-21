<div class="container">
  @foreach($products as $product)
  <div class="card">
    <img src="{{ $product['thumb']}}">
    <a href="{{ route ('product',['index'=>$loop->index]) }}">{{$product['title']}}</a>
  </div>
  @endforeach
  
</div>