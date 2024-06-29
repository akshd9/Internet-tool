<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin-bottom: 50px;
        }
        .dark-mode {
            background-color: #212529;
            color: white;
        }
        .light-mode {
            background-color: white;
            color: black;
        }
        .form-control.dark-mode {
            background-color: #343a40;
            color: white;
            border: 1px solid #495057;
        }
        .form-control.light-mode {
            background-color: white;
            color: black;
            border: 1px solid #ced4da;
        }
        .form-control.dark-mode:focus, .form-control.light-mode:focus {
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
            position: fixed;
            bottom: 10px;
            left: 10px;
            color: #f8f9fa;
            font-size: 14px;
        }
        section {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ddd;
        }
        section.dark-mode {
            border-color: #495057;
        }
    </style>
</head>
<body class="dark-mode">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Animals</h1>
            <div class="light-dark-toggle">
                <button id="toggleMode" class="btn btn-secondary">Light</button>
            </div>
        </div>
        <div class="my-3">
            <input type="text" class="form-control dark-mode" placeholder="Search Animals">
        </div>
        <ul class="nav nav-tabs" id="navTabs">
            <li class="nav-item">
                <a class="nav-link " href="#adaptations">Adaptations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#behavior">Behavior</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#conservation">Conservation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#diversity">Diversity</a>
            </li>
        </ul>
        <div class="d-flex justify-content-around mt-4">
            <img src="mypet/penguins.jpg" alt="Penguins" class="image-circle">
            <img src="mypet/puppies.webp" alt="Puppies" class="image-circle">
            <img src="mypet/Cat.jpg" alt="Cat" class="image-circle">
        </div>
        <section id="adaptations">
            <h2>Adaptations</h2>
            <p>They adapt really well.</p>
        </section>
        <section id="behavior">
            <h2>Behavior</h2>
            <p>They are versatile.</p>
        </section>
        <section id="conservation">
            <h2>Conservation</h2>
            <p>Conservation is required.</p>
        </section>
        <section id="diversity">
            <h2>Diversity</h2>
            <p>There are so many.</p>
        </section>
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