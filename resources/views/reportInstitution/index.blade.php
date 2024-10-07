@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <section>
            <div class="py-2 mb-4">
                <h1 class="">{{ 'Report Institution Payment' }}</h1>
                <!-- Breadcrumb -->
                <nav class="d-flex">
                    <h6 class="mb-0">
                        <a href="" class="text-reset">{{ 'Home' }}</a>
                        <span>/</span>
                        <a href="" class="text-reset"><u>{{ 'Report Institution Payment' }}</u></a>
                    </h6>
                </nav>
                <!-- Breadcrumb -->
            </div>

            <!-- Card untuk informasi detail -->
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <!-- Informasi detail di sebelah kiri -->
                            <h5 class="mb-0">{{ 'Subscription Information' }}</h5>
                            <!-- Tombol Cetak di sebelah kanan -->
                            <button class="btn btn-success" onclick="window.print()">
                                <i class="fa fa-print"></i> {{ 'Print' }}
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>{{ 'Name' }}:</strong> Habib Maulana Shidiq</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>{{ 'Institution' }}:</strong> Politeknik Negeri Padang</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>{{ 'Duration (Months)' }}:</strong> 5 Months</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>{{ 'Payment Status' }}:</strong> Paid</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabel dengan daftar pembayaran -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable-server" class="table table-hover table-striped nowrap"
                                    style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>{{ 'No' }}</th>
                                            <th>{{ 'Month' }}</th>
                                            <th>{{ 'Installment' }}</th>
                                            <th>{{ 'Payment Date' }}</th>
                                            <th>{{ 'Amount' }}</th>
                                            <th>{{ 'Status' }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data pembayaran akan ditampilkan di sini -->
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
