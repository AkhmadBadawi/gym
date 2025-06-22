@include('navbar')
<div class="container p-3">
    <h2>Members</h2>
    <a href="{{ route('member.create') }}" class="btn btn-primary">Add Member</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Status</th>
                <th scope="col">Photo</th>
                <th scope="col">Payment Receipt</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        @if ($item->photo)
                            <img src="{{ asset('storage/' . $item->photo) }}" alt="Photo" class="img-thumbnail" style="width: 100px; height: auto;" />
                        @else
                            No Photo
                        @endif
                    </td>
                    <td>
                        @if ($item->payment_receipt)
                            <a href="{{ asset('storage/' . $item->payment_receipt) }}" target="_blank">View Receipt</a>
                        @else
                            No Receipt
                        @endif
                    </td>

                    {{-- <td>
                        <a href="{{ route('authors.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('authors.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
