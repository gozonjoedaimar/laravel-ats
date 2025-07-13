@extends('layout.dashboard')

@section('title', 'Applicants')

@section('content')
    <div>
        <h1>Applicants</h1>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <form action="{{ route('applicants.store') }}" method="POST" class="w-90">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}">
            </div>
            <button type="submit">Submit</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $applicant)
                    <tr>
                        <td>{{ $applicant->name }}</td>
                        <td>
                            <form action="{{ route('applicants.destroy', $applicant->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button>Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if(count($list) == 0)
                    <tr>
                        <td colspan="4">No Applicants</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
