<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script defer src="./main.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap" rel="stylesheet">
    <title>To Do List</title>
</head>
<body>

<div id="app">
    <div class="container pt-5">
       <h1 class="text-capitalize text-center py-5">to do list</h1>

       <div class="card mb-3">
            <ul class="list-group list-group-flus" v-for="(task, i) in tasks">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span class="w-75"
                    :class="task.do ? 'text-decoration-line-through' : ''"
                    @click="toggleDo()">
                        {{ task.todo }}
                    </span>
                    <div class="trash"
                    @click="deleteTask(i)">
                        <i class="fa-solid fa-trash"></i>
                    </div>
                </li>
            </ul>
       </div>

       <div class="input-group">
            <input type="text" placeholder="Add things to do..." class="w-75 p-3" v-model="newTask">
            <button class="w-25" @click="addTask()">Add</button>
       </div>
    </div>
</div>
    
</body>
</html>