@extends('layouts.main')

@section('container')

<div class="container-fluid">
    <section>
        <div class="py-2 mb-4">
            <h1 class="">{{ ('Subscription') }}</h1>
            <!-- Breadcrumb -->
            <nav class="d-flex">
                <h6 class="mb-0">
                    <a href="" class="text-reset">{{ ('Home') }}</a>
                    <span>/</span>
                    <a href="" class="text-reset"><u>{{ ('Subscription') }}</u></a>
                </h6>
            </nav>
            <!-- Breadcrumb -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <!-- Tombol Add di sebelah kiri -->
                        <!-- <a href="" class="btn btn-primary">
                                {{ ('User Subcribtion') }}
                            </a> -->
                        <button class="btn btn-success" onclick="window.location.href='{{ route('cetak.selectuser.pdf') }}'">
                            <i class="fa fa-print"></i> {{ __('Print') }}
                        </button>


                        <!-- Menu Icon di sebelah kanan -->
                        <div class="dropdown">
                            <button class="btn btn-light" type="button" id="menuDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-bars"></i> <!-- Ikon Hamburger Menu -->
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="menuDropdown">
                                <li><a class="dropdown-item" href="#">Option 1</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-server" class="table table-hover table-striped nowrap" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="select-all"></th> <!-- Checkbox All -->
                                        {{-- <th>{{ ('No') }}</th> --}}
                                        <th>{{ ('Name') }}</th>
                                        <th>{{ ('Institution') }}</th>
                                        <th>{{ ('Start Date') }}</th>
                                        <th>{{ ('End Date') }}</th>
                                        <th>{{ ('Is Free') }}</th>
                                        <th>{{ ('Status') }}</th>
                                        <th>{{ ('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user_subscriptions as $index => $subscription)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $subscription->user->name }}</td>
                                        <td>{{ $subscription->institution->name_institution }}</td>
                                        <td>{{ $subscription->start_date }}</td>
                                        <td>{{ $subscription->end_date }}</td>
                                        <td>{{ $subscription->duration_month }}</td>
                                        <td>{{ $subscription->is_free ? 'Yes' : 'No' }}</td>
                                        <td>
                                            <a href="{{ route('detail-Subscription.index') }}" class="btn btn-warning btn-sm">Detail</a>
                                            <form action="" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
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
    </section>
</div>

@endsection

<script>
    // Script untuk "Select All" checkbox
    document.getElementById('select-all').onclick = function() {
        var checkboxes = document.querySelectorAll('input[name="selected[]"]');
        for (var checkbox of checkboxes) {
            checkbox.checked = this.checked;
        }
    }
</script>