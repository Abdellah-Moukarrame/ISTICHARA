<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques - ISTICHARA Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e3a8a',
                        secondary: '#10b981',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar (same as other admin pages) -->
        <aside class="w-64 bg-blue-900 text-white flex-shrink-0 hidden md:block">
            <div class="p-6">
                <div class="flex items-center space-x-3 mb-8">
                    <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <span class="text-xl font-bold">ISTICHARA</span>
                </div>
                <nav class="space-y-2">
                    <a href="dashboard" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-800 text-blue-100 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                        </svg>
                        <span class="font-medium">Dashboard</span>
                    </a>
                    <a href="members" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-800 text-blue-100 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span class="font-medium">Professionnels</span>
                    </a>
                    <a href="stats" class="flex items-center space-x-3 px-4 py-3 rounded-lg bg-blue-800 text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        <span class="font-medium">Statistiques</span>
                    </a>
                </nav>
            </div>
            <div class="absolute bottom-0 w-64 p-6 border-t border-blue-800">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-blue-700 rounded-full flex items-center justify-center">
                        <span class="text-sm font-medium">AD</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium">Admin</p>
                        <p class="text-xs text-blue-300">admin@istichara.ma</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white border-b border-gray-200 px-6 py-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">Statistiques</h1>
                        <p class="text-sm text-gray-600 mt-1">Analyse et rapports détaillés</p>
                    </div>
                    <button class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors shadow-sm flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        <span>Exporter PDF</span>
                    </button>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-y-auto p-6">
                <!-- Distribution by City -->
                <div class="bg-white rounded-xl shadow-md border border-gray-100 p-6 mb-6">
                    <h2 class="text-lg font-bold text-gray-900 mb-4">Distribution par Ville</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Ville</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Avocats</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Huissiers</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Total</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">Casablanca</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">85</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">28</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">113</td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">Rabat</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">72</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">24</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">96</td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">Marrakech</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">45</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">18</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">63</td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">Tanger</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">28</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">11</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">39</td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">Fès</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">15</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">8</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">23</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Top Professionals -->
                <div class="bg-white rounded-xl shadow-md border border-gray-100 p-6 mb-6">
                    <h2 class="text-lg font-bold text-gray-900 mb-4">Top Avocats</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Avocat</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Ville</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Expérience</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <?php foreach ($top_avocat as $value) { ?>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        
                                        <td class="px-6 py-4">
                                            <div class="flex items-center space-x-3">
                                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                                    <span class="text-sm font-medium text-blue-900">AV</span>
                                                </div>
                                                <p class="text-sm font-medium text-gray-900"><?= $value['full_name'] ?></p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-900"><?= $value['nom_ville'] ?></td>
                                        <td class="px-6 py-4 text-sm text-gray-900"><?= $value['experience'] ?></td>
                                    </tr>
                                <?php } ?>


                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Top_huissier-->

                <div class="bg-white rounded-xl shadow-md border border-gray-100 p-6 mb-6">
                    <h2 class="text-lg font-bold text-gray-900 mb-4">Top Huissiers</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Huissier</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Ville</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Expérience</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <?php foreach ($top_huissiers as $row) { ?>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        
                                        <td class="px-6 py-4">
                                            <div class="flex items-center space-x-3">
                                                <div class="w-10 h-10 bg-green-200 rounded-full flex items-center justify-center">
                                                    <span class="text-sm font-medium text-black-900">HU</span>
                                                </div>
                                                <p class="text-sm font-medium text-gray-900"><?= $row['full_name'] ?></p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-900"><?= $row['nom_ville'] ?></td>
                                        <td class="px-6 py-4 text-sm text-gray-900"><?= $row['experience'] ?></td>
                                    </tr>
                                <?php } ?>


                            </tbody>
                        </table>
                    </div>
                </div>


            </main>
        </div>
    </div>
</body>

</html>