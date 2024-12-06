<?php include('../src/components/sidebar.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PipelineObserver - Dashboard</title>
    <link href="./css/styles.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="flex">
        <!-- Sidebar -->
        <?php include('../src/components/sidebar.php'); ?>

        <!-- Main Content -->
        <main class="flex-grow p-6 ml-64 lg:ml-72">
            <h1 class="text-4xl font-bold text-center text-blue-600">PipelineObserver Dashboard</h1>
            <p class="text-lg text-center mt-4">Welcome to the PipelineObserver Dashboard. Monitor vessel traffic and marker status.</p>

            <!-- You can add more content here -->
        </main>
    </div>

    <script>
        // Sidebar toggle functionality
        const sidebarToggleBtn = document.getElementById('sidebar-toggle');
        const sidebar = document.getElementById('sidebar');
        
        sidebarToggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('w-64');
            sidebar.classList.toggle('w-20');
            sidebar.classList.toggle('lg:w-72');
            sidebar.classList.toggle('lg:w-20');
        });
    </script>
</body>

</html>
