<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course_++</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .module-box, .content-box {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 10px;
            background: #f9f9f9;
        }
        .remove-btn {
            float: right;
            cursor: pointer;
            color: red;
        } 
    </style>
</head>
<body>
    <div class="container mt-5">
         <h2>Create a New Course</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Course Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Category</label>
            <input type="text" name="category" class="form-control" required>
        </div>

        <hr>
        <h4>Modules</h4>
        <div id="modules-container"></div>
        <button type="button" class="btn btn-sm btn-outline-primary" id="add-module-btn">+ Add Module</button>

        <hr>
        <button type="submit" class="btn btn-success mt-3">Create Course</button>
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
let moduleIndex = 0;

$('#add-module-btn').click(function () {
    const moduleHTML = `
        <div class="module-box">
            <span class="remove-btn" onclick="$(this).closest('.module-box').remove()">×</span>
            <div class="mb-2">
                <label>Module Title</label>
                <input type="text" name="modules[${moduleIndex}][title]" class="form-control" required>
            </div>
            <div class="contents-container"></div>
            <button type="button" class="btn btn-sm btn-outline-secondary add-content-btn">+ Add Content</button>
        </div>`;
    $('#modules-container').append(moduleHTML);
    moduleIndex++;
});

$(document).on('click', '.add-content-btn', function () {
    const moduleBox = $(this).closest('.module-box');
    const contentsContainer = moduleBox.find('.contents-container');

    const moduleIdx = $('#modules-container .module-box').index(moduleBox);
    const contentCount = contentsContainer.find('.content-box').length;

    const contentHTML = `
        <div class="content-box mt-2">
            <span class="remove-btn" onclick="$(this).closest('.content-box').remove()">×</span>
            <div class="row">
                <div class="col-md-4">
                    <label>Content Type</label>
                    <select name="modules[${moduleIdx}][contents][${contentCount}][type]" class="form-select" required>
                        <option value="">Select</option>
                        <option value="text">Text</option>
                        <option value="image">Image</option>
                        <option value="video">Video</option>
                        <option value="link">Link</option>
                    </select>
                </div>
                <div class="col-md-8">
                    <label>Content Value</label>
                    <input type="text" name="modules[${moduleIdx}][contents][${contentCount}][value]" class="form-control" required>
                </div>
            </div>
        </div>`;
    contentsContainer.append(contentHTML);
});
</script>
</body>
</html>