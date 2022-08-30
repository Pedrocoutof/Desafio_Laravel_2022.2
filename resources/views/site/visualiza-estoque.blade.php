<x-layout-base title="Visualizando estoque">

        <legend>Visualizando estoque</legend>
        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input disabled type="number" name="quantidade" id="quantidade" class="form-control" value='{{$estoque->quantidade}}'>
        </div>
        <div class="mb-3">
            <label for="produto" class="form-label">Produto:</label>
            <select id="produto" name="produto" class="form-select">
                <option>{{$produto->id}} - {{$produto->name}}</option>
            </select>
        </div>

    <a href="/estoque/" type="cancel" class="btn btn-primary">Voltar</a>

</x-layout-base>
