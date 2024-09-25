@extends('layouts.main')

@section('container')

<div class="main-content">
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
                            <a href="" class="btn btn-primary">
                                {{ ('User Subcribtion') }}
                            </a>

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
                                            <th>{{ ('No') }}</th>
                                            <th>{{ ('Name') }}</th>
                                            <th>{{ ('Institution') }}</th>
                                            <th>{{ ('Start Date') }}</th>
                                            <th>{{ ('End Date') }}</th>
                                            <th>{{ ('Status') }}</th>
                                            <th>{{ ('Actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- Data akan ditampilkan di sini --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
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
