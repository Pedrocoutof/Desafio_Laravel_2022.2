<x-layout-base title="Criando estoque">
    <form action='store/' method="post">
        @csrf
            <legend>Adicionando estoque</legend>
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="number" name="quantidade" id="quantidade" class="form-control" placeholder='0'>
            </div>
            <div class="mb-3">
                <label for="produto" class="form-label">Produto:</label>
                <select id="produto" name="produto" class="form-select">
                    @foreach($produtos as $produto)
                        <option>{{$produto->id}} - {{$produto->name}}</option>
                    @endforeach
                </select>
            </div>

            <a href="/estoque/" type="cancel" class="btn btn-danger">Voltar</a>
            <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</x-layout-base>
