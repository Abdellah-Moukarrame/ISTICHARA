<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile professionnels - ISTICHARA</title>
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
    <!-- Header (same as homepage) -->
    <header class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-blue-900 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <span class="text-xl font-bold text-gray-900">ISTICHARA</span>
                </div>
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="index.html" class="text-sm font-medium text-gray-700 hover:text-blue-900 transition-colors">Retour à la recherche</a>
                    <a href="login.html" class="px-4 py-2 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition-colors shadow-md hover:shadow-lg text-sm font-medium">
                        Connexion Admin
                    </a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Profile Content -->
    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Back Button -->
        <a href="index.html" class="inline-flex items-center text-blue-900 hover:text-blue-700 font-medium mb-6 transition-colors">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Retour aux résultats
        </a>

        <!-- Profile Card -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden mb-8">
            <div class="h-3 bg-gradient-to-r from-blue-900 to-blue-700"></div>
            <div class="p-8">
                <div class="flex flex-col md:flex-row items-start md:items-center space-y-4 md:space-y-0 md:space-x-6 mb-8">
                    <div class="w-24 h-24 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-3xl font-bold text-blue-900">AB</span>
                    </div>
                    <div class="flex-1">
                        <h1 class="text-3xl font-bold text-gray-900 mb-2">Me. Ahmed Bennani</h1>
                        <span class="inline-flex px-3 py-1 text-sm font-medium rounded-full bg-blue-100 text-blue-800 mb-3">Avocat</span>
                        <div class="flex flex-wrap gap-4 text-sm text-gray-600">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Casablanca, Maroc
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                15 ans d'expérience
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm text-gray-600 mb-1">Tarif Horaire</p>
                        <p class="text-3xl font-bold text-blue-900">800 DH</p>
                    </div>
                </div>

                <!-- Contact Buttons -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                    <button class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-all shadow-md hover:shadow-lg font-medium flex items-center justify-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>Appeler</span>
                    </button>
                    <button class="px-6 py-3 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition-all shadow-md hover:shadow-lg font-medium flex items-center justify-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span>Envoyer un Email</span>
                    </button>
                </div>

                <!-- About Section -->
                <div class="border-t border-gray-200 pt-6 mb-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">À propos</h2>
                    <p class="text-gray-700 leading-relaxed">
                        Avocat d'affaires expérimenté avec plus de 15 ans de pratique dans le droit commercial et le droit des sociétés. Spécialisé dans la création d'entreprises, les fusions-acquisitions, et le conseil juridique aux PME et grandes entreprises. Diplômé de la Faculté de Droit de Casablanca et membre du Barreau de Casablanca depuis 2009.
                    </p>
                </div>

                <!-- Specialties -->
                <div class="border-t border-gray-200 pt-6 mb-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Domaines de Spécialité</h2>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-blue-50 text-blue-900 rounded-lg font-medium border border-blue-200">Droit des affaires</span>
                        <span class="px-4 py-2 bg-blue-50 text-blue-900 rounded-lg font-medium border border-blue-200">Droit commercial</span>
                        <span class="px-4 py-2 bg-blue-50 text-blue-900 rounded-lg font-medium border border-blue-200">Création d'entreprises</span>
                        <span class="px-4 py-2 bg-blue-50 text-blue-900 rounded-lg font-medium border border-blue-200">Fusions-acquisitions</span>
                        <span class="px-4 py-2 bg-blue-50 text-blue-900 rounded-lg font-medium border border-blue-200">Conseil juridique</span>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="border-t border-gray-200 pt-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Informations de Contact</h2>
                    <div class="space-y-3">
                        <div class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span>+212 6 12 34 56 78</span>
                        </div>
                        <div class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>ahmed.bennani@cabinet-bennani.ma</span>
                        </div>
                        <div class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            <span>123 Boulevard Zerktouni, Casablanca 20000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                            </svg>
                        </div>
                        <span class="text-xl font-bold">ISTICHARA</span>
                    </div>
                    <p class="text-gray-400 text-sm">
                        La plateforme de référence pour trouver des professionnels juridiques au Maroc.
                    </p>
                </div>
                <div>
                    <h3 class="font-bold mb-4">Liens Rapides</h3>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">À propos</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Conditions d'utilisation</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Politique de confidentialité</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-4">Contact</h3>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li>Email: contact@istichara.ma</li>
                        <li>Téléphone: +212 5 22 XX XX XX</li>
                        <li>Adresse: Casablanca, Maroc</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-sm text-gray-400">
                <p>© 2026 ISTICHARA. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>
