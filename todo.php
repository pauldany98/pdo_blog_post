<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Todo List</h1>
        <form id="todo-form">
            <input type="text" id="todo-input" placeholder="Add a new task">
            <button type="submit">Add</button>
        </form>
        <ul id="todo-list"></ul>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('todo-form');
    const input = document.getElementById('todo-input');
    const list = document.getElementById('todo-list');

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const task = input.value.trim();
        if (task !== '') {
            addTask(task);
            input.value = '';
        }
    });

    function addTask(task) {
        const li = document.createElement('li');
        const checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.addEventListener('change', () => {
            li.classList.toggle('completed');
        });

        const span = document.createElement('span');
        span.textContent = task;

        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Delete';
        deleteButton.addEventListener('click', () => {
            list.removeChild(li);
        });

        li.appendChild(checkbox);
        li.appendChild(span);
        li.appendChild(deleteButton);
        list.appendChild(li);
    }
});

    </script>
</body>
</html>
