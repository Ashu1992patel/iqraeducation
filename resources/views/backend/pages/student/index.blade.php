@extends('backend.app') @section('title', 'All Students') @section('content')
<style>
    .zoom {
        transition: transform .5s;
        /* Animation */
    }

    .zoom:hover {
        transform: scale(2);
        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }

</style>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                {{-- <h4 class="card-title">
                    <a class="btn btn-primary" href="{{ route('student.create') }}">
                        Add New Student
                    </a>
                </h4> --}}
                <p class="card-description">List of<code>All Student</code></p>
                <div class="table-responsive">
                    <!-- table-bordered -->
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <td colspan="8" class="text-end">
                                    {{ $students->links() }}
                                </td>
                            </tr>
                            <tr>
                                <th>S.No.</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Course</th>
                                <th>Contact </th>
                                <th>Email</th>                                
                                <th>Birthday</th>
                                <th>Address</th>
                                {{-- <th>Description</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($students as $key => $student)
                                <tr>
                                    <td>
                                        {{ ++$key }}
                                    </td>                                    
                                    <td>
                                        <h4>
                                            {{ $student->fullname }}    
                                        </h4>
                                    </td>
                                    <td>
                                        <small class="badge badge-sm badge-success">
                                            {{ $student->gender }}
                                        </small>
                                    </td>
                                    <td>
                                        <a target="_blank" class="text-primary text-decoration-none"
                                                href="{{ route('course.show', $student->course->id) }}">
                                                {{ $student->course->name }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="tel:{{ $student->contact }}" class=" text-decoration-none">
                                            {{ $student->contact }}
                                        </a>                                        
                                    </td>
                                    <td>
                                        <p class="product">
                                            {{ $student->email }}
                                        </p>
                                    </td>
                                    <td>
                                        {{ $student->birthday }}
                                    </td>
                                    <td>
                                        {{ $student->address }}
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>    
                        <tfoot>
                            <tr>
                                <td colspan="8" class="text-end">
                                    {{ $students->links() }}
                                </td>
                            </tr>
                        </tfoot>                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
