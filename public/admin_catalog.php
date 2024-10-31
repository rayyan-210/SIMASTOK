<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMASTOK</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   
    <link rel="stylesheet" href="css/tailwind.css">
</head>
<body class="bg-gradient-to-r from-gray-800 via-gray-700 to-gray-900">
      <!--navbar-->
      <nav class="bg-red-800">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0">
                    <img class="h-8 w-auto" src="LOGO_RINS.png" alt="Your Company">
                </div>
                <div class="hidden sm:block">
                    <div class="flex space-x-10">
                        <a href="admin_chart.php"class="text-gray-300 hover:text-amber-300 px-3 py-2 rounded-md text-xl font-medium">Chart</a>
                        <a href="#"class="text-white underline underline-offset-8 px-3 py-2 rounded-md text-xl font-medium" aria-current="page">Catalog</a>
                        <a href="admin_image.php" class="text-gray-300 hover:text-amber-300 px-3 py-2 rounded-md text-xl font-medium">Image</a>
                    </div>
                </div>
                <div class="flex items-center">
                    <i class='bx bxs-user-circle text-4xl px-7 text-gray-300 hover:text-amber-300'></i>
                </div>
            </div>
        </div>
    </nav>
    <main class="p-6">
        <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">

            <!-- Upload Section -->
            <div class="flex flex-col items-center justify-center bg-gray-200 rounded-lg h-48 cursor-pointer">
                <div class="text-4xl">⬆️</div>
                <button class="mt-2 bg-red-600 text-white rounded-full px-3 py-1">+</button>
            </div>

            <!-- Product Card -->
            <div class="flex flex-col items-center">
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="./AsetFoto/Catalog/kmpmt1.png" alt="Product Image" class="w-full h-36 object-cover">
                </div>
                <div class="flex space-x-2 mt-2">
                    <button class="bg-red-600 text-white p-2 rounded-md hover:bg-red-700">
                        ✏️
                    </button>
                    <button class="bg-red-600 text-white p-2 rounded-md hover:bg-red-700">
                        🗑️
                    </button>
                </div>
            </div>

            <!-- Duplicate Product Cards -->
            <div class="flex flex-col items-center">
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="./AsetFoto/Catalog/kmp4mt.png" alt="Product Image" class="w-full h-36 object-cover">
                </div>
                <div class="flex space-x-2 mt-2">
                    <button class="bg-red-600 text-white p-2 rounded-md hover:bg-red-700">
                        ✏️
                    </button>
                    <button class="bg-red-600 text-white p-2 rounded-md hover:bg-red-700">
                        🗑️
                    </button>
                </div>
            </div>

            <!-- Additional Product Cards as needed... -->
            
        </div>
    </main>
</body>
</html>