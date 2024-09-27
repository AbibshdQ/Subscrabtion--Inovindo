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
                        <a href="" class="text-reset">{{ ('Home') }}</a>
                        <span>/</span>
                        <a href="" class="text-reset"><u>{{ ('Payment') }}</u></a>
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
                                    <label for="amount" class="form-label">Office Name</label>
                                    <input type="text" name="office_name" id="office_name" class="form-control @error('office_name') is-invalid @enderror" value="{{ old('office_name') }}" maxlength="50" required>
                                    @error('office_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="payment_type" class="form-label">{{ __('Payment Type') }}</label>
                                    <select class="form-select" id="payment_type" name="payment_type" required>
                                        <option value="" disabled selected>{{ __('Select Payment Type') }}</option>
                                        <option value="cash">{{ __('Cash') }}</option>
                                        <option value="transfer">{{ __('Transfer') }}</option>
                                    </select>
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