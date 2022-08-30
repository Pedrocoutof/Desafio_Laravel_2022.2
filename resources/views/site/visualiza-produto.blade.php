<x-layout-base title="{{$produto->name}}">

    <div class="row">
        <aside class="col-lg">
                <div class="img-big-wrap img-thumbnail">
                        <img height="280" src="{{$produto->photo}}">
                </div> <!-- img-big-wrap.// -->
        </aside>
        <main class="col-lg-6">
            <article class="ps-lg-3">
                <h4 class="title text-dark">{{$produto->name}}
                    <br> {{$produto->flavor}} </h4>


                <div class="mb-3">
                    <var class="price h5">R$ {{$produto->price}}</var>
                    <span class="text-muted">/por produto</span>
                </div>

                    <p>{{ $produto->description }}</p>

                <hr>

                <div class="row mb-4">
                    <div class="col-md-4 col-6 mb-3">
                        <label class="form-label d-block">Quantidade:</label>
                        <div class="input-group input-spinner">
                            <button class="btn btn-icon btn-light" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#999" viewBox="0 0 24 24">
                                    <path d="M19 13H5v-2h14v2z"></path>
                                </svg>
                            </button>
                            <input class="form-control text-center" placeholder="" value="1">
                            <button class="btn btn-icon btn-light" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#999" viewBox="0 0 24 24">
                                    <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
                                </svg>
                            </button>
                        </div> <!-- input-group.// -->
                    </div> <!-- col.// -->
                </div> <!-- row.// -->

                <a href="#" class="btn  btn-warning"> Comprar </a>
            </article> <!-- product-info-aside .// -->
        </main> <!-- col.// -->
    </div>

</x-layout-base>
