<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 | Page Not Found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Tailwind CDN for speed (swap to compiled if needed) --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }

        .floating {
            animation: float 4s ease-in-out infinite;
        }

        .noise::after {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E");
            pointer-events: none;
        }
    </style>
</head>
<body class="relative min-h-screen bg-gradient-to-br from-slate-900 via-indigo-950 to-black text-white overflow-hidden noise">

    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(99,102,241,0.15),transparent_60%)]"></div>

    <main class="relative z-10 flex min-h-screen flex-col items-center justify-center px-6 text-center">

        <div class="floating text-[9rem] font-extrabold tracking-tight bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 bg-clip-text text-transparent drop-shadow-lg">
            404
        </div>

        <h1 class="mt-4 text-3xl md:text-4xl font-bold">
            This page wandered off.
        </h1>

        <p class="mt-3 max-w-xl text-slate-300">
            Either the link is broken, the page was removed, or it never existed.
            Don’t worry — even the best devs end up here sometimes.
        </p>

        <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
            <a href="{{ url('/') }}"
               class="rounded-xl bg-indigo-500 px-6 py-3 font-semibold text-white transition hover:bg-indigo-400 hover:scale-105">
                Take me home
            </a>

            <button onclick="window.history.back()"
                class="rounded-xl border border-white/20 px-6 py-3 font-semibold text-white transition hover:bg-white/10">
                Go back
            </button>
        </div>

        <div class="mt-12 text-sm text-slate-400">
            Error code: <span class="font-mono">HTTP_404</span> · {{ now()->year }}
        </div>
    </main>

</body>
</html>
