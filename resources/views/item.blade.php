<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-gray-900 to-gray-800 flex items-center justify-center min-h-screen font-sans">

    <div class="bg-gray-900/70 backdrop-blur-xl border border-gray-700 p-8 rounded-2xl shadow-2xl w-full max-w-3xl text-white">
        
        <div class="flex justify-between items-center mb-6 pb-4 border-b border-gray-700">
            <div>
                <h1 class="text-3xl font-bold text-white">Product</h1>
                <p class="text-gray-400 mt-1">Product List</p>
            </div>
           
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr>
                        <th class="p-4 text-sm font-semibold text-gray-400 uppercase tracking-wider">ID</th>
                        <th class="p-4 text-sm font-semibold text-gray-400 uppercase tracking-wider">Product Name</th>
                        <th class="p-4 text-sm font-semibold text-gray-400 uppercase tracking-wider">Stock</th>
                                                <th class="p-4 text-sm font-semibold text-gray-400 uppercase tracking-wider">Price</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($items as $item)
                        <tr class="border-b border-gray-800 hover:bg-gray-800/60 transition-colors duration-150">
                            <td class="p-4">
                                <span class="bg-gray-700 text-gray-300 text-xs font-medium px-2.5 py-1 rounded-full">{{ $item->id }}</span>
                            </td>
                            <td class="p-4 font-medium text-gray-200">{{ $item->name }}</td>
                            <td class="p-4 font-medium text-gray-200">{{ $item->stock }}</td>
                            <td class="p-4 font-medium text-gray-200">{{ $item->price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>