@extends('dashboard')
@section('title', 'User')

@section('content')
<h6 style="color:red">*note : Tidak Boleh Hapus User Sembarangan</h6>
<div class="card shadow mb-4">
    <div class="card-header bg-primary text-white text-center">
        <h4>User</h4>
    </div>
    <div class="card-body">
        <table class="table" id="table_mobil">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Gender</td>
                    <td>Phone</td>
                    <td>Opsi</td>
                </tr>
            </thead>
            @php
                $i = 1;
            @endphp
            <tbody>
                <?php foreach ($user as $pengguna): ?>
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $pengguna->name }}</td>
                        <td>{{ $pengguna->email }}</td>
                        <td>{{ $pengguna->gender }}</td>
                        <td>+62{{ $pengguna->phone }}</td>
                        <td>
                            <form action="{{route('user.delete',['id' => $pengguna->id])}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger ml-3">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
@endsection
