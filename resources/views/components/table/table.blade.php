@props(['col_1', 'col_2', 'col_3', 'trigger'])

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">{{ $col_1 }}</th>
        <th scope="col">{{ $col_2 }}</th>
        <th scope="col">{{ $col_3 }}</th>
    </tr>
    </thead>
    <tbody>

    {{ $trigger }}

    </tbody>
</table>
