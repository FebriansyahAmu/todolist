<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Task</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/style.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Add New Task</h4>
                    </div>
                    <div class="card-body">
                        <!-- Form Input Task -->
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="taskName" class="form-label">Task Name</label>
                                <input type="text" class="form-control" id="taskName" name="taskName" placeholder="Enter task name" required>
                            </div>
                            <div class="mb-3">
                                <label for="taskDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="taskDescription" name="taskDescription" rows="3" placeholder="Enter task description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="taskDueDate" class="form-label">Due Date</label>
                                <input type="date" class="form-control" id="taskDueDate" name="taskDueDate">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Add Task</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="index.html" class="btn btn-outline-secondary">Back to To-Do List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS (Optional) -->
    <script src="../assets/js/script.js"></script>
</body>
</html>