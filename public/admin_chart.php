<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMASTOK</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                        <a href="#" class="text-white underline underline-offset-8 px-3 py-2 rounded-md text-xl font-medium" aria-current="page">Chart</a>
                        <a href="admin_catalog.php" class="text-gray-300 hover:text-amber-300 px-3 py-2 rounded-md text-xl font-medium">Catalog</a>
                        <a href="admin_image.php" class="text-gray-300 hover:text-amber-300 px-3 py-2 rounded-md text-xl font-medium">Image</a>
                    </div>
                </div>
                <div class="flex items-center">
                    <i class='bx bxs-user-circle text-4xl px-7 text-gray-300 hover:text-amber-300'></i>
                </div>
            </div>
        </div>
    </nav>

    <!--chart-->

    <div class="bg-slate-300 w-[200vb] h-[100vb] p-5 pb-2 pt-2 rounded-lg shadow-lg mx-12 my-8 ml-20 ">
        <h2 class="text-lg font-semibold text-gray-700 mb-2">Penjualan</h2>
        <canvas id="myChart" class="w-full h-full "></canvas>
    </div>

    <!--rekap-->

    <div class="flex-auto top-24 flex justify-end space-x-4 mr-4">
        <div class="bg-gray-200 p-4 rounded-lg shadow-lg w-24 h-24 flex items-center justify-center">
            <i class="bx bx-plus text-3xl text-black hover:text-white"></i> <!-- Plus icon -->
        </div>
        <div class="flex flex-col space-y-3 pt-1">
            <button class="bg-gray-100 text-black px-3 py-2 rounded-md hover:bg-yellow-300 transition duration-200 ">HAPUS</button>
            <button class="bg-gray-100 text-black px-3 py-2 rounded-md hover:bg-yellow-300 transition duration-200">TAMBAH</button>
        </div>
    </div>

    <!--promosi-->

    <div>
        <div class="inline-flex bg-white border-2 border-black rounded-lg shadow-lg pr-6 ">
            <h2 class="text-lg font-bold mb-1 ml-2">Promosi</h2>
        </div>
        <div class="flex-auto size-auto bg-slate-100 rounded-lg shadow-lg p-4">
            <p class="text-gray-700">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam quaerat voluptas nemo repellat a, maiores ducimus eligendi. Exercitationem iusto assumenda repellat eveniet minima ipsa dignissimos, sapiente beatae quos distinctio odio ratione enim expedita dolorum explicabo suscipit id quasi quam nisi rerum porro quod possimus tempore. Accusamus dolorem ipsa dolore ea incidunt magni nemo pariatur unde commodi quibusdam! Minima quos cum dicta et repudiandae iure officia ea qui consequatur beatae sapiente magni aliquid maxime iusto ullam aperiam deleniti magnam, enim, est veniam repellendus, similique accusantium molestias. Quisquam officiis, harum repellendus magnam quo dolore a eos earum optio velit culpa explicabo qui.            </p>
        </div>
    </div>
    <script src="./js/SIMASTOK.js"></script>
</body>

</html>