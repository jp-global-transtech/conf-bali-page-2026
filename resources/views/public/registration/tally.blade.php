<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GETS 2026 Registration</title>

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet" />
    <script async src="https://tally.so/widgets/embed.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-slate-900 bg-[#f7f9f5]">
    <main class="min-h-screen overflow-hidden">
        <section class="relative px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
            <div class="absolute inset-0 -z-10">
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-50 via-white to-slate-50"></div>
</div>

            <div class="mx-auto max-w-5xl">
                <header class="mx-auto max-w-4xl text-center">
                    <p class="text-sm font-semibold uppercase tracking-[0.28em] text-emerald-800">
                        Global Environment &amp; Transition Summit
                    </p>

                    <h1 class="mt-5 text-4xl font-bold tracking-tight text-slate-950 sm:text-5xl lg:text-6xl">
                        GETS 2026
                        <span class="block text-3xl text-emerald-800 sm:text-4xl lg:text-5xl">Registration Form</span>
                    </h1>

                    <div class="mx-auto mt-7 max-w-3xl border-y border-emerald-900/15 py-6">
                        <p class="text-sm font-semibold uppercase tracking-[0.18em] text-slate-500">Theme</p>
                        <p class="mt-3 text-2xl font-semibold leading-snug text-slate-950 sm:text-3xl">
                            Leading the Green Transition:
                            <span class="block text-emerald-800">Strategies for a Climate-Resilient Future</span>
                        </p>
                    </div>
                </header>

                <dl class="mt-8 grid gap-4 sm:grid-cols-3">
                    <div class="rounded-2xl border border-emerald-900/10 bg-white/90 p-5 text-center shadow-sm">
                        <dt class="text-sm font-semibold uppercase tracking-[0.16em] text-slate-500">Date</dt>
                        <dd class="mt-2 text-lg font-bold text-slate-950">24 August 2026</dd>
                    </div>

                    <div class="rounded-2xl border border-emerald-900/10 bg-white/90 p-5 text-center shadow-sm">
                        <dt class="text-sm font-semibold uppercase tracking-[0.16em] text-slate-500">Venue</dt>
                        <dd class="mt-2 text-lg font-bold text-slate-950">
                            Universitas Udayana
                            <span class="block font-semibold text-slate-700">Bali, Indonesia</span>
                        </dd>
                    </div>

                    <div class="rounded-2xl border border-emerald-900/10 bg-white/90 p-5 text-center shadow-sm">
                        <dt class="text-sm font-semibold uppercase tracking-[0.16em] text-slate-500">Format</dt>
                        <dd class="mt-2 text-lg font-bold text-slate-950">Hybrid Conference</dd>
                    </div>
                </dl>

                <section class="mx-auto mt-12 max-w-5xl rounded-3xl bg-white p-5 shadow-xl shadow-emerald-950/10">

    <div class="border-b border-slate-200 px-3 py-5 text-center">

        <h2 class="text-3xl font-bold text-slate-950">
            Participant Registration
        </h2>

        <p class="mt-3 text-lg text-slate-600">
            Complete the official GETS 2026 registration form below.
        </p>

    </div>

    <div class="pt-6 bg-white">

        <iframe
            data-tally-src="https://tally.so/r/ZjWXVA?hideTitle=1&transparentBackground=1&dynamicHeight=1&fontSize=18px"
            width="100%"
            height="2200"
            frameborder="0"
            marginheight="0"
            marginwidth="0"
            title="Global Environment & Transition Summit (GETS) 2026 Registration Form">
        </iframe>

    </div>

</section>
        </section>
    </main>
</body>
</html>
