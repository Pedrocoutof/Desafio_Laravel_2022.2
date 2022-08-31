<x-layout-base title="Editando produto">
    <h1>
        Editando produto
    </h1>

    <form class="row mb-3" action= '/produtos/update/?id={{$produto->id}}' method='post'>
        @csrf
        <label class='form-label' for="name">Nome:</label>
        <input class='form-control' type='text' id='name' name='name' value="{{$produto->name}}">

        <label class='form-label' for="price">Preço:</label>
        <input class='form-control' type='number' id='price' name='price' value="{{$produto->price}}">

        <label class='form-label' for="flavor">Sabor:</label>
        <input class='form-control' type='text' id='flavor' name='flavor' value="{{$produto->flavor}}">

        <label class='form-label' for="description">Descrição:</label>
        <input class='form-control' type='text' id='description' name='description' value="{{$produto->description}}">

        <label class='form-label' for="photo">Foto:</label>
        <input class='form-control' type='file' id='photo' name='photo' value="{{$produto->photo}}">

        <a href='./../' type="cancel" class="btn btn-danger mb-3">Cancelar</a>
        <button href='#' type="submit" class="btn btn-primary mb-3">Enviar</button>

    </form>

</x-layout-base>
