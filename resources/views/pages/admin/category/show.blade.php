<table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <td class="text-capitalize">{{ isset($category->name) ? $category->name : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Keterangan</th>
        <td>{{ isset($category->description) ? $category->description : 'N/A' }}</td>
    </tr>
</table>
