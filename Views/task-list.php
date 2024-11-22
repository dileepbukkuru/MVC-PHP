<table class="table table-bordered">
    <thead>
    <tr>
        <th>Task</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($tasks as $index => $task): ?>
        <tr>
            <td><?= htmlspecialchars($task['name']) ?></td>
            <td><?= $task['done'] ? 'Done' : 'Pending' ?></td>
            <td>
                <?php if (!$task['done']): ?>
                    <a href="index.php?action=done&id=<?= $index ?>" class="btn btn-sm btn-success">Mark as Done</a>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
