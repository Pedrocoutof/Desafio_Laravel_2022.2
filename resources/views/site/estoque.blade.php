<x-layout-base title="Estoque">
    <h1>Estoque:</h1>
    <a href="criando-produto" class="btn  btn-primary"><i class="me-1 fa fa-heart"></i>Adicionar estoque</a>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Quantidade</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>

            @foreach($estoque as $item)
                <tr>
                    <!-- Me desculpe por isso -->
                    <td>{{\App\Models\Product::findOrFail($item->produto)->name}}</td>
                    <td>{{$item->quantidade}}</td>
                    <td>
                        <a href="/home/product/?id={{$item->id}}" class="btn  btn-info"><i class="me-1 fa fa-heart"></i>Visualizar</a>
                        <a href="/adm/produtos/editar/?id={{$item->id}}" class="btn  btn-primary"><i class="me-1 fa fa-heart"></i>Editar</a>
                        <a href="/adm/produtos/delete/?id={{$item->id}}" class="btn  btn-danger"><i class="me-1 fa fa-heart"></i>Excluir</a>
                    </td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>



</x-layout-base>
