<x-layout-base title="Produtos">
    <h1>
        Tabela de Produtos:
    </h1>
    <a href="produtos/create" class="btn  btn-primary"><i class="me-1 fa fa-heart"></i>Adicionar produto</a>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>

            @foreach($produtos as $produto)
                <tr>
                    <td>{{$produto->name}}</td>
                    <td>{{$produto->price}}</td>
                    <td>
                        <a href="/produtos/visualizar/?id={{$produto->id}}" class="btn  btn-info"><i class="me-1 fa fa-heart"></i>Visualizar</a>
                        <a href="/produtos/editar/?id={{$produto->id}}" class="btn  btn-primary"><i class="me-1 fa fa-heart"></i>Editar</a>
                        <a href="/produtos/delete/?id={{$produto->id}}" class="btn  btn-danger"><i class="me-1 fa fa-heart"></i>Excluir</a>
                    </td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>



</x-layout-base>
