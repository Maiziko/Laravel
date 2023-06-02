<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid #dddddd;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
        color: #333333;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    h3 {
        margin: 0;
        padding: 8px;
    }
</style>

<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($categories as $key => $category)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->description }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="3">
                <h3>Data Kosong</h3>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
