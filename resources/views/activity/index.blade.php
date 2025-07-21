<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Aktivitas</h1>
    </div>

    <div class="add mb-4">
        <a href="{{ route('activity.create') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah aktivitas</a>
    </div>

    <!-- Search Bar -->
    <div class="mb-3">
        <input type="text" id="tableSearch" class="form-control" placeholder="Search Aktivitas...">
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">History Aktivitas</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Aktivitas</th>
                            <th scope="col">Desktripsi</th>
                            <th scope="col">Tanggal Aktivitas</th>
                            <th scope="col">Foto Aktivitas</th>
                            <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activities as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->date }}</td>
                                <td>
                                    @if ($item->picture)
                                        <img src="{{ asset('storage/' . $item->picture) }}" alt="Photo"
                                            class="img-thumbnail dark-thumb" style="width: 100px; height: auto;"
                                            onclick="showImage('{{ asset('storage/' . $item->picture) }}')" />
                                    @else
                                        No Photo
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('activity.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#handleDelete"
                                    onclick="document.getElementById('deleteForm').action = '{{ route('activity.destroy', $item->id) }}'"><i class="fa-solid fa-trash"></i> Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- IMAGE OVERLAY --}}
    <div id="imageOverlay" class="image-overlay" style="display: none;" onclick="closeImageOverlay()">&times;">
        <div class="a"></div>
        <span class="close-btn" onclick="closeImageOverlay()">&times;</span>
        <img id="overlayImage" src="" class="overlay-image">
    </div>
    {{-- END OF IMAGE OVERLAY --}}

    <!-- DELETE MODAL -->
    <div class="modal fade" id="handleDelete">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Yakin menghapus data ini?</p>
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">Hapus</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF DELETE MODAL -->

</div>
<!-- /.container-fluid -->
