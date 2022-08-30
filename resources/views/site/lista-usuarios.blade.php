<x-layout-base title="Users">
    <h1>
        Tabela de Usuários:

    </h1>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Fidelidade</th>
                <th scope="col">Nível</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>

                @foreach($users as $user)
                    <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->fidelity}}</td>
                    <td>{{$user->permission}}</td>
                    <td>
                        <a href="/users/visualizar/?id={{$user->id}}" class="btn  btn-info"><i class="me-1 fa fa-heart"></i>Visualizar</a>
                        <a href="/users/editar/?id={{$user->id}}" class="btn  btn-primary"><i class="me-1 fa fa-heart"></i>Editar </a>
                        <a href="/users/delete/?id={{$user->id}}" class="btn  btn-danger"><i class="me-1 fa fa-heart"></i>Excluir </a>
                    </td>
            </tr>
                @endforeach


            </tbody>
        </table>
    </div>



</x-layout-base>
