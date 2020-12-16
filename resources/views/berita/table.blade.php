<table class="table">
    <thead calss="thead-dark">
        <tr style="background-color:#31b0d5">
            <th>no</th>
            <th>judul</th>
            <th>isi</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($beritas as $item)
            <tr>
              <td>{{ $loop->iteration }} </td>
              <td>{{ $item->judul }}</td>
              <td>{{ $item->isi }}</td>
              <td>
                    <a href="{{ route('berita.show', $item->id) }}" class="btn btn-success">Tampil</a>
              </td>
              <td>
                    <a href="{{ route('berita.destroy', $item->id) }}" class="btn btn-success">hapus</a>
              </td>
            </tr>
        @endforeach
    </tbody>
</table>