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
                    <a href="dashboard.php" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-800 text-blue-100 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                        </svg>
                        <span class="font-medium">Dashboard</span>
                    </a>
                    <a href="members.php" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-800 text-blue-100 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span class="font-medium">Professionnels</span>
                    </a>
                    <a href="statistique.php" class="flex items-center space-x-3 px-4 py-3 rounded-lg bg-blue-800 text-white transition-colors">
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
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Pourcentage</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">Casablanca</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">85</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">28</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">113</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center space-x-3">
                                            <div class="flex-1 bg-gray-200 rounded-full h-2 max-w-[200px]">
                                                <div class="bg-blue-900 h-2 rounded-full" style="width: 34%"></div>
                                            </div>
                                            <span class="text-sm font-medium text-gray-900">34%</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">Rabat</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">72</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">24</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">96</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center space-x-3">
                                            <div class="flex-1 bg-gray-200 rounded-full h-2 max-w-[200px]">
                                                <div class="bg-blue-900 h-2 rounded-full" style="width: 29%"></div>
                                            </div>
                                            <span class="text-sm font-medium text-gray-900">29%</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">Marrakech</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">45</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">18</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">63</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center space-x-3">
                                            <div class="flex-1 bg-gray-200 rounded-full h-2 max-w-[200px]">
                                                <div class="bg-blue-900 h-2 rounded-full" style="width: 19%"></div>
                                            </div>
                                            <span class="text-sm font-medium text-gray-900">19%</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">Tanger</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">28</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">11</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">39</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center space-x-3">
                                            <div class="flex-1 bg-gray-200 rounded-full h-2 max-w-[200px]">
                                                <div class="bg-blue-900 h-2 rounded-full" style="width: 12%"></div>
                                            </div>
                                            <span class="text-sm font-medium text-gray-900">12%</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">Fès</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">15</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">8</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">23</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center space-x-3">
                                            <div class="flex-1 bg-gray-200 rounded-full h-2 max-w-[200px]">
                                                <div class="bg-blue-900 h-2 rounded-full" style="width: 6%"></div>
                                            </div>
                                            <span class="text-sm font-medium text-gray-900">6%</span>
                                        </div>
                                    </td>
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
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Rang</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Avocat</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Ville</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Expérience</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Vues</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Contacts</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-yellow-100 text-yellow-800 font-bold text-sm">1</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                                <span class="text-sm font-medium text-blue-900">AB</span>
                                            </div>
                                            <p class="text-sm font-medium text-gray-900">Me. Ahmed Bennani</p>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-900">Casablanca</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">15 ans</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">2,341</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">156</td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-gray-200 text-gray-700 font-bold text-sm">2</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-sm font-medium text-green-900">FE</span>
                                            </div>
                                            <p class="text-sm font-medium text-gray-900">Me. Fatima El Amrani</p>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-900">Rabat</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">12 ans</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">1,987</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">134</td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-orange-100 text-orange-700 font-bold text-sm">3</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center">
                                                <span class="text-sm font-medium text-purple-900">KM</span>
                                            </div>
                                            <p class="text-sm font-medium text-gray-900">Me. Karim Mansouri</p>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-900">Marrakech</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">10 ans</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">1,654</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">98</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Chart Placeholder -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="bg-white rounded-xl shadow-md border border-gray-100 p-6">
                        <h2 class="text-lg font-bold text-gray-900 mb-4">Croissance Mensuelle</h2>
                        <div class="h-64 flex items-end justify-around space-x-2">
                            <div class="flex flex-col items-center flex-1">
                                <div class="w-full bg-blue-900 rounded-t-lg transition-all hover:bg-blue-800" style="height: 60%"></div>
                                <span class="text-xs text-gray-600 mt-2">Jan</span>
                            </div>
                            <div class="flex flex-col items-center flex-1">
                                <div class="w-full bg-blue-900 rounded-t-lg transition-all hover:bg-blue-800" style="height: 75%"></div>
                                <span class="text-xs text-gray-600 mt-2">Fév</span>
                            </div>
                            <div class="flex flex-col items-center flex-1">
                                <div class="w-full bg-blue-900 rounded-t-lg transition-all hover:bg-blue-800" style="height: 85%"></div>
                                <span class="text-xs text-gray-600 mt-2">Mar</span>
                            </div>
                            <div class="flex flex-col items-center flex-1">
                                <div class="w-full bg-blue-900 rounded-t-lg transition-all hover:bg-blue-800" style="height: 70%"></div>
                                <span class="text-xs text-gray-600 mt-2">Avr</span>
                            </div>
                            <div class="flex flex-col items-center flex-1">
                                <div class="w-full bg-blue-900 rounded-t-lg transition-all hover:bg-blue-800" style="height: 90%"></div>
                                <span class="text-xs text-gray-600 mt-2">Mai</span>
                            </div>
                            <div class="flex flex-col items-center flex-1">
                                <div class="w-full bg-blue-900 rounded-t-lg transition-all hover:bg-blue-800" style="height: 100%"></div>
                                <span class="text-xs text-gray-600 mt-2">Juin</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-md border border-gray-100 p-6">
                        <h2 class="text-lg font-bold text-gray-900 mb-4">Répartition Type</h2>
                        <div class="h-64 flex items-center justify-center">
                            <div class="relative w-48 h-48">
                                <svg viewBox="0 0 100 100" class="transform -rotate-90">
                                    <circle cx="50" cy="50" r="40" fill="none" stroke="#1e3a8a" stroke-width="20" stroke-dasharray="175 251" class="transition-all"></circle>
                                    <circle cx="50" cy="50" r="40" fill="none" stroke="#10b981" stroke-width="20" stroke-dasharray="76 251" stroke-dashoffset="-175" class="transition-all"></circle>
                                </svg>
                                <div class="absolute inset-0 flex items-center justify-center flex-col">
                                    <p class="text-3xl font-bold text-gray-900">334</p>
                                    <p class="text-sm text-gray-600">Total</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-center space-x-6 mt-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-4 h-4 bg-blue-900 rounded"></div>
                                <span class="text-sm text-gray-700">Avocats (73%)</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="w-4 h-4 bg-green-600 rounded"></div>
                                <span class="text-sm text-gray-700">Huissiers (27%)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
