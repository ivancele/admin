<x-app-layout>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Subjects</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Code</th>
                            @if(Auth::user()->isStaff())
                                <th>Actions</th>
                            @endif
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Subject</th>
                            <th>Code</th>
                            @if(Auth::user()->isStaff())
                                <th>Actions</th>
                            @endif
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($subjects->sortBy('name') as $subject)
                        <tr>
                            <td>{{ $subject->name}}</td>
                            <td>{{ $subject->code}}</td>
                            @if(Auth::user()->isStaff())
                                <td></td>
                            @endif
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