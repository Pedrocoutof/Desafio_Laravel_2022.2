<x-layout-base title="Editando estoque">
    <form action='/estoque/editar/update/?id={{$estoque->id}}' method="post">
        @csrf
        <legend>Editando estoque</legend>
        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control" value='{{$estoque->quantidade}}'>
        </div>
        <div class="mb-3">
            <label for="produto" class="form-label">Produto:</label>
            <select id="produto" name="produto" class="form-select">
                @foreach($produtos as $produto)
                    <option>{{$produto->id}} - {{$produto->name}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</x-layout-base>
