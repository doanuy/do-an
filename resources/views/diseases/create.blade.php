@extends('layouts.admin')

@section('content')

<h2>Thêm bệnh</h2>

<form action="{{ route('diseases.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Tên bệnh</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Mô tả</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Triệu chứng</label>
        <textarea name="symptoms" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Điều trị</label>
        <textarea name="treatment" class="form-control"></textarea>
    </div>
    <div>
    <label>Description</label>
    <textarea name="description" required></textarea>
</div>

    <button type="submit" class="btn btn-success">Lưu</button>
    <a href="{{ route('diseases.index') }}" class="btn btn-secondary">Quay lại</a>
</form>

@endsection