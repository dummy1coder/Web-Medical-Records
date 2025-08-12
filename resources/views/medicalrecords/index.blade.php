@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">MedicalRecord List</div>
    <div class="card-body">
        @can('create-medicalrecord')
            <a href="{{ route('medicalrecords.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New MedicalRecord</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">S#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($medicalrecords as $medicalrecord)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $medicalrecord->name }}</td>
                    <td>{{ $medicalrecord->description }}</td>
                    <td>
                        <form action="{{ route('medicalrecords.destroy', $medicalrecord->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('medicalrecords.show', $medicalrecord->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                            @can('edit-medicalrecord')
                                <a href="{{ route('medicalrecords.edit', $medicalrecord->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                            @endcan

                            @can('delete-medicalrecord')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this medicalrecord?');"><i class="bi bi-trash"></i> Delete</button>
                            @endcan
                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="4">
                        <span class="text-danger">
                            <strong>No Medicalrecord Found!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>

        {{ $medicalrecords->links() }}

    </div>
</div>
@endsection