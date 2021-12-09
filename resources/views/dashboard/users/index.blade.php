<x-app-layout>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Users</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Fullname</th>
                            <th>ID Number</th>
                            <th>Role</th>
                            <th>Grade</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Subject</th>
                            <th>Code</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($users->sortBy('lastName') as $user)
                        <tr class="{{ $user->suspended ? 'bg-danger text-white':''}}">
                            <td>{{ $user->title}} {{ $user->lastName}} {{ $user->firstNames}}</td>
                            <td>{{ $user->idNumber}}</td>
                            <td>{{ Str::ucfirst($user->role)}}</td>
                            <td>{{ $user->grade}} {{ Str::upper($user->section)}}</td>
                            <td>{{ $user->email}}</td>
                            <td>
                                <a href="">Edit</a>
                                <a href="">Delete</a>
                                <a href="">Link Parent</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan=3>
                                No subjects in the database.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>