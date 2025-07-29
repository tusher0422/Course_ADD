<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .list-group-item {
        position: relative;
    }
    form button.btn-danger {
        position: absolute;
        top: 10px;
        right: 10px;
    }
</style>
</head>

<body>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>All Courses</h2>
        <a href="{{ route('courses.create') }}" class="btn btn-primary">+ Add New Course</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($courses->count())
        <div class="list-group">
            @foreach($courses as $course)
                <div class="list-group-item d-flex justify-content-between align-items-start">
                <div>
                <h5>{{ $course->title }}</h5>
                <p>{{ $course->description }}</p>
                <small class="text-muted">Category: {{ $course->category }}</small>
                </div>
                <form action="{{ route('courses.destroy', $course) }}" method="POST" onsubmit="return confirm('Are you sure?')" style="margin-left: auto;">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger">Delete</button>
                </form>
                </div>

            @endforeach
        </div>
    @else
        <div class="alert alert-info">
            No courses found. Click "Add New Course" to create one.
        </div>
    @endif
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
