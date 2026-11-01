<?php
require_once 'db.php';

$query = "SELECT * FROM tasks ORDER BY created_at DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; padding-top: 50px; }
        .container { max-width: 600px; }
        .card { margin-bottom: 20px; }
        .completed { text-decoration: line-through; color: gray; }
    </style>
</head>
<body>

<div class="container">
    <div class="text-center mb-4">
        <h2>📝 My Tasks</h2>
        <p class="text-muted">Simple PHP/MySQL App</p>
    </div>

    <!-- Add Task Form -->
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title">Add New Task</h5>
            <form action="actions.php" method="POST">
                <input type="hidden" name="action" value="add">
                <div class="mb-3">
                    <input type="text" name="title" class="form-control" placeholder="What needs to be done?" required>
                </div>
                <div class="mb-3">
                    <textarea name="description" class="form-control" placeholder="Add details (optional)"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Add Task</button>
            </form>
        </div>
    </div>

    <!-- Task List -->
    <div class="mt-4">
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="card shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-start">
                        <div>
                            <h5 class="<?php echo $row['status'] == 'completed' ? 'completed' : ''; ?>">
                                <?php echo htmlspecialchars($row['title']); ?>
                            </h5>
                            <p class="mb-0 text-muted small"><?php echo htmlspecialchars($row['description']); ?></p>
                        </div>
                        <div class="ms-3">
                            <form action="actions.php" method="POST" class="d-inline">
                                <input type="hidden" name="action" value="toggle">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <button type="submit" class="btn btn-sm btn-outline-success">✓</button>
                            </form>
                            <form action="actions.php" method="POST" class="d-inline">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <button type="submit" class="btn btn-sm btn-outline-danger">✕</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="text-center text-muted">No tasks found. Add one above!</p>
        <?php endif; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
