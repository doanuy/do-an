@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h2>Danh sách bệnh</h2>
    <a href="{{ route('diseases.create') }}" class="btn btn-primary">+ Thêm bệnh</a>
</div>

{{-- FORM SEARCH --}}
<form method="GET" action="{{ route('diseases.index') }}" class="mb-3">
    <div class="input-group">
        <input type="text" 
               name="search" 
               class="form-control"
               placeholder="Tìm theo tên bệnh..."
               value="{{ request('search') }}">
        <button class="btn btn-success">Tìm</button>
    </div>
</form>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>STT</th>
            <th>Tên bệnh</th>
            <th width="200">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @forelse($diseases as $disease)
        <tr>
            {{-- STT chuẩn khi dùng pagination --}}
            <td>{{ $diseases->firstItem() + $loop->index }}</td>
            <td>{{ $disease->name }}</td>
            <td>
                <a href="{{ route('diseases.show', $disease) }}" class="btn btn-info btn-sm">Xem</a>
                <a href="{{ route('diseases.edit', $disease) }}" class="btn btn-warning btn-sm">Sửa</a>
                <form action="{{ route('diseases.destroy', $disease) }}" 
                      method="POST" 
                      style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Bạn chắc chắn muốn xóa?')">
                        Xóa
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3" class="text-center">Không tìm thấy bệnh nào</td>
        </tr>
        @endforelse
    </tbody>
</table>

{{-- PAGINATION --}}
<div class="mt-3">
    {{ $diseases->links() }}
</div>

@endsection