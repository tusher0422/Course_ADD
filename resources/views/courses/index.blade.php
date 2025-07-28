<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                <div class="list-group-item">
                    <h5>{{ $course->title }}</h5>
                    <p class="mb-1">{{ $course->description }}</p>
                    <small class="text-muted">Category: {{ $course->category }}</small>
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
