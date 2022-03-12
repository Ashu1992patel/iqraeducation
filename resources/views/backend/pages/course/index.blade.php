@extends('backend.app') @section('title', 'Courses') @section('content')
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
                <h4 class="card-title">
                    <a class="btn btn-primary" href="{{ route('course.create') }}">
                        Add New Course
                    </a>
                </h4>
                <p class="card-description">List of<code>All Courses</code></p>
                <div class="table-responsive">
                    <!-- table-bordered -->
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>
                                    <p style="font-size: 10px;">Thumbnail (small)</p>
                                </th>
                                <th>Action</th>
                                <th>Name</th>
                                <th>
                                    <p style="font-size: 10px;">Image (large)</p>
                                </th>
                                <th>Price</th>
                                <th>Period/Duration</th>
                                <th>Language</th>
                                <th>Assessment</th>
                                {{-- <th>Description</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($courses as $key => $course)
                                <tr>
                                    <td>
                                        {{ ++$key }}
                                    </td>
                                    <td>
                                        <p class="product">
                                            <a href="{{ $course->thumbnail }}" target="_blank">
                                                <img src="{{ $course->thumbnail }}" alt="" class="zoom" />
                                            </a>
                                        </p>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-info dropdown-toggle btn-block btn-sm" type="button"
                                                id="dropdownMenuIconButton6" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="ti-action"></i>
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6"
                                                style="">
                                                <h6 class="dropdown-header">Action</h6>
                                                <a class="dropdown-item"
                                                    href="{{ route('course.edit', $course->id) }}">Edit</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('course.show', $course->id) }}">Show Details</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">List In Popular</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        {{ $course->name }}
                                    </td>
                                    <td>
                                        <a href="{{ $course->image }}" target="_blank">
                                            <img src="{{ $course->image }}" alt="" class="zoom" />
                                        </a>
                                    </td>
                                    <td>
                                        {{ '₹ ' . $course->price }}
                                    </td>
                                    <td>
                                        {{ $course->period }}
                                    <br>
                                    {{ $course->duration }}
                                    </td>
                                    <td>
                                        {{ $course->language }}
                                    </td>
                                    <td>
                                        <label class="badge badge-{{ $course->assessment ? 'success' : 'danger' }}">
                                            {{ $course->customAssessment }}
                                        </label>
                                    </td>
                                    {{-- <td>{!! $course->shortDescription !!}</td> --}}
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
