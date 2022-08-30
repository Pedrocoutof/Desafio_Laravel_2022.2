<x-layout-base title="Editando usuário">
    <h1>
        Editando usuário
    </h1>

    <form class="row mb-3" action= '/users/update/?id={{$user->id}}' method='post'>
        @csrf
        <label class='form-label' for="name">Nome:</label>
        <input class='form-control' type='text' id='name' name='name' value="{{$user->name}}">

        <label class='form-label' for="email">Email:</label>
        <input class='form-control' type='text' id='email' name='email' value="{{$user->email}}">

        <label class='form-label' for="permission">Nível de permissão:</label>
        <input class='form-control' type='text' id='permission' name='permission' value="{{$user->permission}}">

        <label class='form-label' for="fidelity">Fidelidade:</label>
        <input class='form-control' type='text' id='fidelity' name='fidelity' value="{{$user->fidelity}}">

        <button href='./../' type="cancel" class="btn btn-danger mb-3">Cancelar</button>
        <button href='#' type="submit" class="btn btn-primary mb-3">Enviar</button>

    </form>

</x-layout-base>
