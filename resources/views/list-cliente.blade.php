<table>
    <thead>
        <tr>
            <th>codigo</th>
            <th>criado em</th>
            <th>Atualizar</th>
            <th>nome do cliente</th>
            <th>ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente) 
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->created_at }}</td>
                <td>{{ $cliente->updated_at }}</td>
                <td>{{ $cliente->nome }}</td>
                <td>
                    <a href="/cliente/remove/{{ $cliente->id }}">Excluir</a>
                    <a href="">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>