@extends('layouts.admin')

@section('content')

<div class="card shadow">
    <div class="card-header bg-info text-white">
        <h4 class="mb-0">Chi tiết bệnh</h4>
    </div>

    <div class="card-body">
        <h5><strong>Tên bệnh:</strong></h5>
        <p>{{ $disease->name }}</p>

        <hr>

        <h5><strong>Mô tả:</strong></h5>
        <p>{{ $disease->description }}</p>

        <hr>

        <h5><strong>Triệu chứng:</strong></h5>
        <p>{{ $disease->symptoms }}</p>

        <hr>

        <h5><strong>Điều trị:</strong></h5>
        <p>{{ $disease->treatment }}</p>

        <a href="{{ route('diseases.index') }}" class="btn btn-secondary mt-3">
            ← Quay lại
        </a>
    </div>
</div>

@endsection