<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>404 - Not Found</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-15px); }
    }
  </style>
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white overflow-hidden">

  <!-- Glow background -->
  <div class="absolute w-96 h-96 bg-blue-500/20 rounded-full blur-3xl animate-pulse"></div>

  <div class="relative text-center px-6">
    
    <!-- Animated 404 -->
    <h1 class="text-[10rem] font-extrabold tracking-widest animate-bounce">
      404
    </h1>

    <h2 class="text-3xl font-semibold mt-4 animate-fade-in">
      Page Not Found
    </h2>

    <p class="mt-4 text-gray-300 max-w-md mx-auto animate-fade-in delay-150">
      The page you’re looking for doesn’t exist or has been moved.
    </p>

    <!-- Button -->
    <a href="/"
       class="inline-block mt-10 px-10 py-3 rounded-full bg-white text-slate-900 font-semibold
              transition transform hover:scale-110 hover:shadow-xl">
      Go Back Home
    </a>

    <!-- Floating icon -->
    <div class="mt-10 text-4xl opacity-70"
         style="animation: float 3s ease-in-out infinite;">
      🚀
    </div>

  </div>

</body>
</html>
