<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>John Doe - Web Developer</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        #preview-modal .overflow-auto {
            scrollbar-width: thin; /* For Firefox */
            scrollbar-color: #aaa transparent;
        }

        #preview-modal .overflow-auto::-webkit-scrollbar {
            width: 8px; /* For Chrome, Edge, and Safari */
        }

        #preview-modal .overflow-auto::-webkit-scrollbar-thumb {
            background-color: #aaa;
            border-radius: 4px;
        }
    </style>

</head>

<body class="bg-gray-100 font-sans" x-data="{ sidebarOpen: false, darkMode: false }" :class="{ 'dark': darkMode }">
    <div class="flex h-screen overflow-hidden">
        <x-dashboard.layout.aside-bar />

        <div class="flex-1 flex flex-col overflow-hidden">
            <x-dashboard.layout.header />

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 dark:bg-gray-900">
                {{ $slot }}
            </main>
        </div>
    </div>

    <script>
        const revenueCtx = document.getElementById('revenueChart').getContext('2d');
        new Chart(revenueCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Revenue',
                    data: [12000, 19000, 15000, 22000, 18000, 25000],
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const userGrowthCtx = document.getElementById('userGrowthChart').getContext('2d');
        new Chart(userGrowthCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'New Users',
                    data: [50, 80, 60, 120, 90, 150],
                    backgroundColor: 'rgba(153, 102, 255, 0.6)'
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
<script>
    // Function to fade out flash messages smoothly
    function fadeOutEffect(element) {
        let opacity = 1; // Initial opacity
        const timer = setInterval(() => {
            if (opacity <= 0.1) {
                clearInterval(timer);
                element.style.display = 'none';
            }
            element.style.opacity = opacity;
            opacity -= opacity * 0.1; // Reduce opacity by 10% each step
        }, 50); // 50ms interval for smooth animation
    }

    // Hide success message after 5 seconds
    const successMessage = document.getElementById('successMessage');
    if (successMessage) {
        setTimeout(() => fadeOutEffect(successMessage), 5000);
    }

    // Hide error message after 5 seconds
    const errorMessage = document.getElementById('errorMessage');
    if (errorMessage) {
        setTimeout(() => fadeOutEffect(errorMessage), 5000);
    }
</script>
</body>

</html>
