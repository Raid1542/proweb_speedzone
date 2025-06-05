<!--  <div class="ml-10 mt-20">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Deskripsi Produk</th>
                <th>Harga Produk</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nama as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item }}</td>
                <td>{{ $desc[$index] }}</td>
                <td>{{ $harga[$index] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
-->


<head> 
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>
<!-- <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-900 uppercase dark:bg-gray-400 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Produk
                </th>
                <th scope="col" class="px-6 py-3">
                    Deskripsi Produk
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga Produk
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nama as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item }}</td>
                <td>{{ $desc[$index] }}</td>
                <td>{{ $harga[$index] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
-->





<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-blue-100 dark:text-blue-100">
        <thead class="text-xs text-white uppercase bg-blue-600 border-b border-blue-400 dark:text-white">
            <tr>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    No 
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Produk
                </th>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    Deskripsi Produk
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga Produk
                </th>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    Action
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nama as $index => $item)
            <tr class="bg-blue-600 border-b border-blue-400">
                <td>{{ $index + 1 }}</td>
                <td>{{ $item }}</td>
                <td>{{ $desc[$index] }}</td>
                <td>{{ $harga[$index] }}</td>
                <td>
                    <form action="{{ route('produk.delete', $id[$index]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure want to delete {{ $item }}?')">Delete</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('produk.edit', $id[$index]) }}">
                        <button type="button">Edit</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div><h1>Input Produk</h1></div>
<form method="POST" action="{{ route('produk.simpan') }}"> @csrf
    <table class="table">
        <tr>
            <td>Nama:</td>
            <td colspan="3"><input type="text" class="form-control" id="nama" name="nama"></td>
        </tr>
        <tr>
            <td>Deskripsi:</td>
            <td colspan="3"><textarea class="form-control" id="deskripsi" name="deskripsi"></textarea></td>
        </tr>
        <tr>
            <td>Harga:</td>
            <td><input type="number" class="form-control" id="harga" name="harga"></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

</div>

<!-- <div><h1>Input Produk</h1></div>
<form method="POST" action="{{ route('produk.simpan') }}"> @csrf
    <table class="table">
        <tr>
            <td>Nama:</td>
            <td colspan="3"><input type="text" class="form-control" id="nama" name="nama"></td>
        </tr>
        <tr>
            <td>Deskripsi:</td>
            <td colspan="3"><textarea class="form-control" id="deskripsi" name="deskripsi"></textarea></td>
        </tr>
        <tr>
            <td>Harga:</td>
            <td><input type="number" class="form-control" id="harga" name="harga"></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
-->