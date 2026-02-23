@extends('layouts.admin')

@section('content')

<h2 class="mb-4">📊 Dashboard</h2>

<div class="row">
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body text-center">
                <h5>Tổng số bệnh</h5>
                <h2 class="text-primary">{{ $totalDiseases }}</h2>
            </div>
        </div>
    </div>
</div>

@endsection