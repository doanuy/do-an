@extends('layouts.admin')

@section('content')

<h2>Sửa bệnh</h2>

<form action="{{ route('diseases.update', $disease) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Tên bệnh</label>
        <input type="text" name="name" class="form-control" value="{{ $disease->name }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Mô tả</label>
        <textarea name="description" class="form-control">{{ $disease->description }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Triệu chứng</label>
        <textarea name="symptoms" class="form-control">{{ $disease->symptoms }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Điều trị</label>
        <textarea name="treatment" class="form-control">{{ $disease->treatment }}</textarea>
    </div>

    <button type="submit" class="btn btn-warning">Cập nhật</button>
    <a href="{{ route('diseases.index') }}" class="btn btn-secondary">Quay lại</a>
</form>

@endsection