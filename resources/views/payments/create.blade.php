@extends('layouts.main')

@section('container')
    <div class="main-content">
        <div class="container-fluid">
            <section>
                <div class="py-2 mb-4">
                    <h1 class="">{{ __('Payment') }}</h1>
                    <!-- Breadcrumb -->
                    <nav class="d-flex">
                        <h6 class="mb-0">
                            <a href="" class="text-reset">{{ 'Home' }}</a>
                            <span>/</span>
                            <a href="" class="text-reset"><u>{{ 'Payment' }}</u></a>
                        </h6>
                    </nav>
                    <!-- Breadcrumb -->
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">

                            </div>
                            <div class="card-body">
                                <form action="{{ route('payments.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="pay" class="form-label">{{ 'Pay' }}</label>
                                        <input type="text" name="pay" id="pay"
                                            class="form-control @error('pay') is-invalid @enderror"
                                            value="{{ old('pay') }}" maxlength="50" required>
                                        @error('pay')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="payment_type">Jenis Kelamin
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select id="payment_type" name="payment_type" class="form-control">
                                            <option value="">Payment Type</option>
                                            <option value="cash" {{ old('payment_type') == 'cash' ? 'selected' : '' }}>
                                                Cash</option>
                                            <option value="Transfer"
                                                {{ old('payment_type') == 'transfer' ? 'selected' : '' }}>Transfer</option>
                                        </select>
                                        @error('payment_type')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                    <button type="submit" class="btn btn-primary">{{ __('Back') }}</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endsection
