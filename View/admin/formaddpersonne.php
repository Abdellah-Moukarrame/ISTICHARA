<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Professionnel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-3xl bg-white rounded-xl shadow-lg p-8">

        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-900">Ajouter un Professionnel</h1>
            <p class="text-sm text-gray-600 mt-1">
                Remplissez les informations du professionnel
            </p>
        </div>

        <!-- Form -->
        <form method="post" class="form space-y-6">

            <!-- Nom & Email -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nom complet</label>
                    <input type="text" placeholder="Me. Ahmed Bennani"
                        name="nom_personne"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300
                               focus:ring-2 focus:ring-blue-900 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" placeholder="email@exemple.com"
                        name="email_personne"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300
                               focus:ring-2 focus:ring-blue-900 focus:outline-none">
                </div>
            </div>

            <!-- Type & Ville -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Type</label>
                    <select
                        name="personne"
                        class="personne w-full px-4 py-3 rounded-lg border border-gray-300
                               focus:ring-2 focus:ring-blue-900 focus:outline-none">
                        <option>Choisir</option>
                        <option value="avocat">Avocat</option>
                        <option value="huissier">Huissier</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Ville</label>
                    <input type="text" placeholder="Casablanca"
                        name="ville_personne"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300
                               focus:ring-2 focus:ring-blue-900 focus:outline-none">
                </div>
            </div>

            <!-- Téléphone & Expérience -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Téléphone</label>
                    <input type="text" placeholder="+212 6 XX XX XX XX"
                        name="tele_personne"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300
                               focus:ring-2 focus:ring-blue-900 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Expérience (années)</label>
                    <input type="number" placeholder="10"
                        name="exp_personne"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300
                               focus:ring-2 focus:ring-blue-900 focus:outline-none">
                </div>
            </div>

            <!-- Tarif -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Tarif / heure (DH)</label>
                <input type="number" placeholder="500"
                    name="tarif_personne"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300
                           focus:ring-2 focus:ring-blue-900 focus:outline-none">
            </div>
            <!-- Specialités & Consultation en ligne -->
            <div class="avocat grid grid-cols-1 md:grid-cols-2 gap-6">
            </div>
            <!-- Types acte -->
            <div id="huissier">
            </div>


            <!-- Actions -->
            <div class="flex justify-end space-x-4 pt-6">
                <a href="members.php"
                    class="px-6 py-3 rounded-lg border border-gray-300 text-gray-700
                          hover:bg-gray-100 transition">
                    Annuler
                </a>

                <button type="submit" name="add_personne"
                    class="px-8 py-3 bg-green-600 text-white rounded-lg
                               hover:bg-green-700 transition shadow-md">
                    Enregistrer
                </button>
            </div>

        </form>
    </div>

    <script>
        const personne = document.querySelector(".personne");
        const form = document.querySelector(".form");
        const avocat = document.querySelector(".avocat");
        const huissier = document.querySelector("#huissier");
        console.log(personne.value);

        personne.addEventListener('change', (e) => {
            e.preventDefault();

            if (personne.value == 'avocat') {
                avocat.style.display = "block";

                avocat.innerHTML = "";
                avocat.innerHTML += `
                        <!-- Specialités -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Spécialités
                            </label>
                            <select
                                name="specialite"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300
                                    focus:ring-2 focus:ring-blue-900 focus:outline-none">
                                <option value="">Choisir une spécialité</option>
                                <option>Droit de la famille</option>
                                <option>Droit pénal</option>
                                <option>Droit commercial</option>
                                <option>Droit du travail</option>
                                <option>Droit immobilier</option>
                            </select>
                        </div>

                        <!-- Consultation en ligne -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Consultation en ligne
                            </label>
                            <select
                                name="consultaion"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300
                                    focus:ring-2 focus:ring-blue-900 focus:outline-none">
                                <option value="">Choisir</option>
                                <option value="yes">Oui</option>
                                <option value="no">Non</option>
                            </select>
                        </div>
            `
                huissier.style.display = "none";


            } else if (personne.value == 'huissier') {

                huissier.innerHTML = "";
                huissier.innerHTML += `<label class="block text-sm font-medium text-gray-700 mb-2">
                    Type acte
                </label>
                <select name="type_acte"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300
                    focus:ring-2 focus:ring-blue-900 focus:outline-none">
                    <option value="">Choisir le type acte</option>
                    <option value="signification">Signification</option>
                    <option value="execution">Exécution</option>
                    <option value="constat">Constat</option>
                </select>`
                avocat.style.display = "none";
                huissier.style.display = "block";
            } else {
                avocat.style.display = "none";
                huissier.style.display = "none";
            }

        })
    </script>

</body>

</html>