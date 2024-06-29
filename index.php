<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #212529;
            color: white;
            position: relative;
            margin-bottom: 50px;
        }
        .navigatebar, .navigate-tabs {
            background-color: #343a40;
        }
        .navigate-link {
            color: white;
        }
        .navigate-link.active {
            background-color: #0d6efd;
        }
        .form-control {
            background-color: #343a40;
            color: white;
            border: 1px solid #495057;
        }
        .form-control:focus {
            background-color: #343a40;
            color: white;
            border-color: #0d6efd;
        }
        .image-circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }
        .light-dark-toggle {
            position: absolute;
            top: 10px;
            right: 10px;
        }
        .spectrum-text {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: #f8f9fa;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Animals</h1>
            <div class="light-dark-toggle">
                <button id="toggleMode" class="btn btn-secondary">Light</button>
            </div>
        </div>
        <div class="my-3">
            <input type="text" class="form-control" placeholder="Search Animals">
        </div>
        <ul class="navigate navigate-tabs">
            <li class="navigate-item">
                <a class="navigate-link" href="#">Adaptations</a>
            </li>
            <li class="navigate-item">
                <a class="navigate-link active" href="#">Behavior</a>
            </li>
            <li class="navigate-item">
                <a class="navigate-link" href="#">Conservation</a>
            </li>
            <li class="navigate-item">
                <a class="navigate-link" href="#">Diversity</a>
            </li>
        </ul>
        <div class="d-flex justify-content-around mt-4">
            <img src="mypet/penguins.jpg" alt="Penguins" class="image-circle">
            <img src="mypet/puppies.webp" alt="Puppies" class="image-circle">
            <img src="mypet/Cat.jpg" alt="Cat" class="image-circle">
        </div>
    </div>
    
    <div class="spectrum-text">Animal spectrum all the way....</div>

    <script>
        const toggleModeButton = document.getElementById('toggleMode');
        toggleModeButton.addEventListener('click', () => {
            if (document.body.style.backgroundColor === 'white') {
                document.body.style.backgroundColor = '#212529';
                document.body.style.color = 'white';
                toggleModeButton.textContent = 'Light';
            } else {
                document.body.style.backgroundColor = 'white';
                document.body.style.color = 'black';
                toggleModeButton.textContent = 'Dark';
            }
        });
    </script>
</body>
</html>
