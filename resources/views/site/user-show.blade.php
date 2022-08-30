<x-layout-base title='Usuário'>

        <label class='form-label' for="name">Nome:</label>
        <input disabled class='form-control' type='text' id='name' name='name' value="{{$user->name}}">

        <label class='form-label' for="email">Email:</label>
        <input disabled  class='form-control' type='text' id='email' name='email' value="{{$user->email}}">

        <label class='form-label' for="permission">Nível de permissão:</label>
        <input disabled  class='form-control' type='text' id='permission' name='permission' value="{{$user->permission}}">

        <label class='form-label' for="fidelity">Fidelidade:</label>
        <input disabled  class='form-control' type='text' id='fidelity' name='fidelity' value="{{$user->fidelity}}">

        <a href='/users/' class="btn  btn-primary"><i class="me-1 fa fa-heart"></i> Voltar </a>


</x-layout-base>
