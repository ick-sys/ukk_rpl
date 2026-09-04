<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Parkir</title>

    <link rel="icon" type="image/png" href="{{ asset('images/logo-parkir.png') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ink: {
                            800: '#1e1e2f',
                            900: '#151521',
                        },
                        gold: {
                            400: '#fbbf24',
                            500: '#f59e0b',
                        }
                    },
                    fontFamily: {
                        display: ['sans-serif'],
                    }
                }
            }
        }
    </script>
</head>

<body class="relative bg-ink-900 min-h-screen flex flex-col items-center justify-center px-8 py-12 antialiased overflow-hidden">

    <div class="pointer-events-none absolute inset-0" style="background: radial-gradient(60% 50% at 50% 40%, rgba(245,158,11,0.10) 0%, rgba(0, 0, 0, 0.78) 70%);"></div>
    <div class="pointer-events-none absolute inset-0 opacity-[0.05]" style="background-image: repeating-linear-gradient(135deg, #fff 0, #fff 2px, transparent 1px, transparent 56px);"></div>
    <div class="pointer-events-none absolute inset-0" style="background: radial-gradient(120% 100% at 50% 50%, transparent 60%, rgba(0,0,0,0.45) 100%);"></div>

    <div class="pointer-events-none absolute inset-0">
        <span class="absolute w-1 h-1 rounded-full bg-gold-400/40" style="top:12%; left:18%;"></span>
        <span class="absolute w-1 h-1 rounded-full bg-gold-400/30" style="top:22%; left:78%;"></span>
        <span class="absolute w-1.5 h-1.5 rounded-full bg-gold-400/20" style="top:70%; left:8%;"></span>
        <span class="absolute w-1 h-1 rounded-full bg-gold-400/30" style="top:82%; left:88%;"></span>
        <span class="absolute w-1 h-1 rounded-full bg-gold-400/20" style="top:45%; left:92%;"></span>
        <span class="absolute w-1.5 h-1.5 rounded-full bg-gold-400/20" style="top:60%; left:4%;"></span>
    </div>

    <div class="relative bg-[#070707] border border-[#dcac00]/30 rounded-2xl px-8 py-12 shadow-2xl shadow-black/40 w-full max-w-sm">
        <div class="flex flex-col items-center text-center mb-8">
            <img src="{{ asset('images/logo-parkir.png') }}" alt="Logo E-Parkir" class="w-28 h-28 object-contain mb-4">
            <h1 class="font-display text-2xl font-bold text-white">Portal Akses E-Parkir</h1>
            <p class="text-gold-400 text-xs mt-1">kelola gerbang &amp; slot parkir</p>
        </div>

        <form method="POST" action="{{ route('login.store') }}" class="space-y-4">
            @csrf
            
            <div>
                <div class="relative">
                    <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-500">
                        <svg class="w-4.5 h-4.5" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path></svg>
                    </span>
                    <input
                        type="text"
                        name="username"
                        placeholder="ID petugas"
                        autofocus
                        required
                        class="w-full bg-black/20 border border-white/10 rounded-xl py-3 pl-11 pr-4 text-sm text-slate-200 placeholder:text-slate-500 focus:outline-none focus:border-gold-400/50 focus:ring-1 focus:ring-gold-400/30 transition"
                    >
                </div>
            </div>

            <div x-data="{ show: false }">
                <div class="relative">
                    <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-500">
                        <svg class="w-4.5 h-4.5" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" /></svg>
                    </span>
                    <input
                        :type="show ? 'text' : 'password'"
                        name="password"
                        placeholder="Kata sandi"
                        required
                        class="w-full bg-black/20 border border-white/10 rounded-xl py-3 pl-11 pr-11 text-sm text-slate-200 placeholder:text-slate-500 focus:outline-none focus:border-gold-400/50 focus:ring-1 focus:ring-gold-400/30 transition"
                    >
                    <button type="button" @click="show = !show" class="absolute right-3.5 top-1/2 -translate-y-1/2 text-slate-500 hover:text-slate-300 transition">
                        <svg x-show="!show" class="w-4.5 h-4.5" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /></svg>
                        <svg x-show="show" style="display:none" class="w-4.5 h-4.5" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0 1 12 4.5c4.756 0 8.774 3.162 10.065 7.498a10.523 10.523 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" /></svg>
                    </button>
                </div>
            </div>

            <div class="pt-6">
                <button
                    type="submit"
                    class="w-full bg-gold-500 hover:bg-gold-400 text-ink-900 font-display font-semibold py-3 rounded-xl transition shadow-lg shadow-gold-500/20"
                >
                    Masuk ke Sistem
                </button>
            </div>
        </form>
    </div>

</body>
</html>
