@extends('backend.app')
@section('title', 'Dashboard')
@section('content')

<div class="row">
  <div class="col-sm-12">
    <div class="home-tab">
      <div class="tab-content tab-content-basic">
        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
          <div class="row">
            <div class="col-sm-12">
              <div class="statistics-details d-flex align-items-center justify-content-between">

                <div>
                  <p class="statistics-title">Courses</p>
                  <h3 class="rate-percentage">{{ $counter['courseCount'] }}</h3>
                  <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                </div>
                <div>
                  <p class="statistics-title">Categories</p>
                  <h3 class="rate-percentage">{{ $counter['category'] }}</h3>
                  <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                </div>
                <div>
                  <p class="statistics-title">Students</p>
                  <h3 class="rate-percentage">{{ $counter['userCount'] }}</h3>
                  <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                </div>
                <div class="d-none d-md-block">
                  <p class="statistics-title">Files/Images</p>
                  <h3 class="rate-percentage">{{ $counter['file'] }}</h3>
                  <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-8 d-flex flex-column">
              <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card card-rounded">
                    <div class="card-body">
                      <div class="d-sm-flex justify-content-between align-items-start">
                        <div>
                          <h4 class="card-title card-title-dash">Recent Courses</h4>
                          <!-- <p class="card-subtitle card-subtitle-dash">You have 50+ new requests</p> -->
                        </div>
                        <div>
                          <a href="{{ route('course.create') }}" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button">
                            <i class="mdi mdi-account-plus"></i>
                            Add new course
                          </a>
                        </div>
                      </div>
                      <div class="table-responsive  mt-1">
                        <table class="table select-table">
                          <thead>
                            <tr>
                              <th>
                                <div class="form-check form-check-flat mt-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                </div>
                              </th>
                              <th>Name</th>
                              <th>Period</th>
                              <th>Price</th>
                              <th>Language</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($counter['course'] as $course)
                            <tr>
                              <td>
                                <div class="form-check form-check-flat mt-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                </div>
                              </td>
                              <td>
                                <div class="d-flex ">
                                  <img src="{{ $course->thumbnail }}" alt="{{ $course->name }}">
                                  <div>
                                    <h6>{{ $course->name }}</h6>
                                    <p>{{ $course->category->name }}</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <h6>{{ $course->period }}</h6>
                                <p>{{ $course->teacher }}</p>
                              </td>
                              <td>
                                <h6>{{ $course->price }}</h6>
                                <p>{{ $course->duration }}</p>
                              </td>
                              <td>
                                <div class="badge badge-opacity-warning">
                                  {{ $course->language??'NA' }}
                                </div>
                              </td>
                            </tr>
                            @endforeach

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-flex flex-column">
              <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card card-rounded">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="card-title card-title-dash">Type By Amount</h4>
                          </div>
                          <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                          <div id="doughnut-chart-legend" class="mt-5 text-center"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card card-rounded">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                              <h4 class="card-title card-title-dash">Recent Registered Student</h4>
                            </div>
                          </div>
                          <div class="mt-3">
                            @foreach ($counter['user'] as $user)
                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                              <div class="d-flex">
                                <img class="img-sm rounded-10" src="{{ url('backend') }}/images/faces/face1.jpg" alt="profile">
                                <div class="wrapper ms-3">
                                  <p class="ms-1 mb-1 fw-bold">
                                    {{ $user->fullname }}
                                  </p>
                                  <small class="text-muted mb-0">
                                    {{ $user->contact }}
                                  </small>
                                </div>
                              </div>
                              <div class="text-muted text-small">
                                {{ $user->email }}
                              </div>
                            </div>
                            @endforeach

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection