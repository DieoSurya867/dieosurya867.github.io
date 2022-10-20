@extends('layout.admin')


@section('title')
    Omal (Oleh-Oleh Khas Malang)
@endsection
@section('users')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                    <table class="table table-bordered table-hover">

                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($user as $u)
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $u['name'] }}</strong>
                                    </td>
                                    <td>{{ $u['email'] }}</td>
                                    <td>{{ $u['password'] }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->

            <hr class="my-5" />
            <!--/ Responsive Table -->
        </div>
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>
@endsection
