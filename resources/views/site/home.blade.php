
<x-layout-base title="Produtos">

    <div class="row row-cols-4 row-cols-md-4 g-4">
        @foreach($products as $product)
            <div class="col">
                <div class="card">

                    <img src="{{$product->photo}}" class="card-img-top" alt='{{$product->name}} - Imagem'>
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <a href="/home/product/?id={{$product->id}}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>



</x-layout-base>
