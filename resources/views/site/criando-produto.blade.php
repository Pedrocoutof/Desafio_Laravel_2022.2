<x-layout-base title="Criando produto">
    <h1>
        Criando produto
    </h1>

    <form class="row mb-3" action= 'store/' method='post'>
        @csrf
        <label class='form-label' for="name">Nome:</label>
        <input class='form-control' type='text' id='name' name='name'>

        <label class='form-label' for="price">Preço:</label>
        <input class='form-control' type='number' id='price' name='price'>

        <label class='form-label' for="flavor">Sabor:</label>
        <input class='form-control' type='text' id='flavor' name='flavor'>

        <label class='form-label' for="description">Descrição:</label>
        <input class='form-control' type='text' id='description' name='description'>

        <label class='form-label' for="photo">Foto:</label>
        <input class='form-control' type='file' id='photo' name='photo'>

        <button href='produtos' class="btn btn-danger mb-3">Cancelar</button>
        <button href='#' type="submit" class="btn btn-primary mb-3">Adicionar</button>

    </form>

</x-layout-base>
