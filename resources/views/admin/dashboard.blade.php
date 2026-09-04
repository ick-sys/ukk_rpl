<!DOCTYPE html>
<html class="dark" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>ParkEase PRO - Intelligent Parking Management &amp; Telemetry</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;family=Space+Grotesk:wght@500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            brand: { 400: '#fbbf24', 500: '#f59e0b', 600: '#d97706' },
            darkbg: '#090d16',
            darkcard: '#111726',
            darksurface: '#172033',
            darkborder: '#1e293b',
          },
          fontFamily: {
            sans: ['Plus Jakarta Sans', 'sans-serif'],
            mono: ['JetBrains Mono', 'monospace'],
            display: ['Space Grotesk', 'sans-serif']
          }
        }
      }
    }
</script>
<style>
    ::-webkit-scrollbar { width: 6px; height: 6px; }
    ::-webkit-scrollbar-track { background: #090d16; }
    ::-webkit-scrollbar-thumb { background: #1e293b; border-radius: 9999px; }
    ::-webkit-scrollbar-thumb:hover { background: #334155; }

    .barcode-stripes {
      background: repeating-linear-gradient(
        90deg, #1e293b 0, #1e293b 2px, transparent 2px, transparent 4px,
        #1e293b 4px, #1e293b 8px, transparent 8px, transparent 11px,
        #1e293b 11px, #1e293b 14px, transparent 14px, transparent 17px,
        #1e293b 17px, #1e293b 22px
      );
    }

    /* Accessible focus ring everywhere instead of the browser default outline */
    a:focus-visible, button:focus-visible, input:focus-visible {
      outline: 2px solid #f59e0b;
      outline-offset: 2px;
      border-radius: 6px;
    }

    @keyframes dropdownIn {
      from { opacity: 0; transform: translateY(-6px) scale(0.98); }
      to { opacity: 1; transform: translateY(0) scale(1); }
    }
    #profile-menu.open { display: block; animation: dropdownIn 0.14s ease-out; }
</style>
</head>
<body class="bg-[#090d16] text-slate-100 font-sans antialiased min-h-screen selection:bg-amber-500 selection:text-black">

<!-- SIDEBAR NAVIGATION -->
<aside class="fixed left-0 top-0 h-screen w-72 bg-[#0d121f] border-r border-slate-800/80 z-40 flex flex-col justify-between shadow-2xl">
<div class="flex flex-col h-full overflow-hidden">

<div class="h-20 px-5 flex items-center gap-3 border-b border-slate-800/80 bg-[#0b0f1a]">
<div class="relative w-11 h-11 rounded-xl p-1 bg-gradient-to-tr from-amber-500/20 via-amber-400/10 to-transparent border border-amber-500/30 flex items-center justify-center shadow-[0_0_15px_rgba(245,158,11,0.15)]">
<span class="material-symbols-outlined text-amber-400 text-[24px]">local_parking</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-2">
<span class="font-display font-bold text-lg text-white tracking-tight leading-none">ParkEase <span class="text-amber-400 font-extrabold">PRO</span></span>
</div>
<div class="flex items-center gap-1.5 mt-1">
<span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
<span class="text-[11px] font-mono text-emerald-400 font-semibold tracking-wide uppercase">v4.2 Live Telemetry</span>
</div>
</div>
</div>

<!-- Navigation Links -->
<div class="flex-1 overflow-y-auto px-3.5 py-4 space-y-6">
<div>
<div class="px-3 pb-2 text-[10px] font-mono font-bold tracking-wider text-slate-400 uppercase">Operasional</div>
<div class="space-y-1">
<a class="group flex items-center justify-between px-3 py-2.5 rounded-lg bg-gradient-to-r from-amber-500/20 via-amber-500/10 to-transparent text-amber-300 font-semibold text-sm border-l-4 border-amber-400 shadow-[0_4px_12px_rgba(245,158,11,0.08)] transition-all" href="#">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px] text-amber-400">grid_view</span>
<span>Dashboard Ringkasan</span>
</div>
<span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-slate-800/60 font-medium text-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[20px] text-slate-400">login</span>
<span>Pos Masuk / Transaksi</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-slate-800/60 font-medium text-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[20px] text-slate-400">point_of_sale</span>
<span>Pos Keluar &amp; Billing</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-slate-800/60 font-medium text-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[20px] text-slate-400">receipt_long</span>
<span>Cetak Ulang Struk</span>
</a>
</div>
</div>
<div>
<div class="px-3 pb-2 text-[10px] font-mono font-bold tracking-wider text-slate-400 uppercase">Master Data (Admin)</div>
<div class="space-y-1">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-slate-800/60 font-medium text-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[20px] text-slate-400">price_change</span>
<span>CRUD Tarif Parkir</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-slate-800/60 font-medium text-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[20px] text-slate-400">space_dashboard</span>
<span>CRUD Area &amp; Kuota</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-slate-800/60 font-medium text-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[20px] text-slate-400">directions_car</span>
<span>CRUD Kendaraan / Member</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-slate-800/60 font-medium text-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[20px] text-slate-400">manage_accounts</span>
<span>CRUD User &amp; Hak Akses</span>
</a>
</div>
</div>
<div>
<div class="px-3 pb-2 text-[10px] font-mono font-bold tracking-wider text-slate-400 uppercase">Laporan &amp; Audit (Owner)</div>
<div class="space-y-1">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-slate-800/60 font-medium text-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[20px] text-slate-400">query_stats</span>
<span>Laporan Pendapatan &amp; Kasir</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-slate-800/60 font-medium text-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[20px] text-slate-400">history_edu</span>
<span>Log Aktifitas Petugas</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-slate-100 hover:bg-slate-800/60 font-medium text-sm transition-colors" href="#">
<span class="material-symbols-outlined text-[20px] text-slate-400">assignment_turned_in</span>
<span>Rekap Shift</span>
</a>
</div>
</div>
</div>

<!-- Bottom Status Widget -->
<div class="p-3.5 border-t border-slate-800/80 bg-[#0a0e18]">
<div class="p-3 rounded-xl bg-slate-900/90 border border-slate-800 space-y-2.5">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-emerald-400 shadow-[0_0_8px_#34d399]"></span>
<span class="text-xs font-semibold text-slate-200">Gate &amp; Server</span>
</div>
<span class="text-[10px] font-mono px-1.5 py-0.5 rounded bg-emerald-950 text-emerald-400 border border-emerald-800/60 font-bold">ONLINE</span>
</div>
<div class="flex items-center justify-between text-[11px] text-slate-400 pt-1 border-t border-slate-800/60">
<span class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[15px] text-amber-400">sensors</span>
ALPR Optical Cam #01
</span>
<span class="font-mono text-emerald-400 font-semibold">60 FPS</span>
</div>
</div>
</div>
</div>
</aside>

<!-- MAIN WRAPPER -->
<div class="pl-72 flex flex-col min-h-screen">

<!-- HEADER / TOPBAR -->
<header class="sticky top-0 z-30 h-20 bg-[#090d16]/95 backdrop-blur-md border-b border-slate-800/80 px-8 flex items-center justify-between gap-6 shadow-sm">
<div class="flex items-center gap-4 flex-1 max-w-2xl">
<div class="relative w-full max-w-md">
<div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
<span class="material-symbols-outlined text-[20px]">search</span>
</div>
<input class="w-full pl-10 pr-20 py-2 rounded-xl bg-slate-900/90 border border-slate-800 text-slate-100 placeholder:text-slate-400 text-xs font-mono focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400/30 transition-all uppercase" placeholder="Quick Search Plat Kendaraan (e.g. B 1234 ABC)..." type="text"/>
<div class="absolute inset-y-0 right-0 pr-2.5 flex items-center pointer-events-none">
<kbd class="px-2 py-0.5 rounded bg-slate-800 text-[10px] font-mono text-slate-400 border border-slate-700">Ctrl + K</kbd>
</div>
</div>
<div class="hidden xl:flex items-center gap-2 px-3 py-1.5 rounded-xl bg-slate-900/80 border border-slate-800">
<span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
<span class="text-xs font-mono font-bold text-amber-400" id="live-clock">--:--:-- WIB</span>
<span class="text-[10px] font-mono uppercase px-1 rounded bg-slate-800 text-slate-400">Sync</span>
</div>
<div class="hidden md:flex items-center gap-2 px-3 py-1.5 rounded-xl bg-amber-500/10 border border-amber-500/20">
<span class="material-symbols-outlined text-amber-400 text-[18px]">local_parking</span>
<span class="text-xs font-bold text-slate-200">
<strong class="text-amber-400 font-mono text-sm">142</strong> / 450 Tersedia
</span>
</div>
</div>

<div class="flex items-center gap-4">
<div class="hidden lg:flex items-center gap-2 px-3 py-1.5 rounded-xl bg-slate-900 border border-slate-800 text-xs">
<span class="material-symbols-outlined text-[17px] text-amber-400">schedule</span>
<span class="text-slate-300 font-medium">Shift Pagi</span>
<span class="text-[10px] font-mono text-slate-400 bg-slate-800 px-1.5 py-0.5 rounded">07:00 - 15:00</span>
</div>
<span class="hidden sm:inline-flex items-center px-2.5 py-1 rounded-lg bg-amber-500/15 border border-amber-400/30 text-amber-300 font-mono font-semibold text-[11px]">
Petugas &amp; Admin
</span>
<button class="relative p-2 rounded-xl bg-slate-900 border border-slate-800 text-slate-300 hover:text-white hover:border-slate-700 transition-colors" title="Notifikasi">
<span class="material-symbols-outlined text-[20px]">notifications</span>
<span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-rose-500 ring-2 ring-[#090d16]"></span>
</button>

<!-- User Profile Pill + Logout dropdown -->
<div class="relative pl-2 border-l border-slate-800" id="profile-widget">
<button id="profile-trigger" type="button" aria-haspopup="true" aria-expanded="false" class="flex items-center gap-3 rounded-xl px-1.5 py-1 hover:bg-slate-900 transition-colors">
<img alt="Foto profil {{ auth()->user()->nama_lengkap ?? 'Supervisor' }}" class="w-9 h-9 rounded-xl object-cover ring-2 ring-amber-400/40" src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->nama_lengkap ?? 'Bambang S') }}&background=f59e0b&color=0b0f1a&bold=true"/>
<div class="hidden sm:flex flex-col text-left">
<span class="text-xs font-bold text-slate-100 leading-tight">{{ auth()->user()->nama_lengkap ?? 'Bambang S.' }}</span>
<span class="text-[10px] font-mono text-slate-400 capitalize">{{ auth()->user()->role ?? 'Supervisor Gate' }}</span>
</div>
<span class="material-symbols-outlined text-[18px] text-slate-500 hidden sm:inline">expand_more</span>
</button>

<div id="profile-menu" class="hidden absolute right-0 top-[calc(100%+8px)] w-60 rounded-xl bg-[#111726] border border-slate-800 shadow-2xl overflow-hidden z-50">
<div class="px-4 py-3 border-b border-slate-800/80">
<p class="text-sm font-bold text-slate-100">{{ auth()->user()->nama_lengkap ?? 'Bambang S.' }}</p>
<p class="text-[11px] font-mono text-slate-400">{{ auth()->user()->role ?? 'Supervisor Gate' }} &middot; Shift Pagi</p>
</div>
<a href="#" class="flex items-center gap-2.5 px-4 py-2.5 text-xs font-semibold text-slate-300 hover:bg-slate-800/60 hover:text-white transition-colors">
<span class="material-symbols-outlined text-[18px] text-slate-400">person</span>
Profil &amp; Pengaturan
</a>
<form method="POST" action="{{ route('logout') }}" id="logout-form">
@csrf
<button type="submit" class="w-full flex items-center gap-2.5 px-4 py-2.5 text-xs font-semibold text-rose-400 hover:bg-rose-500/10 transition-colors border-t border-slate-800/80">
<span class="material-symbols-outlined text-[18px]">logout</span>
Keluar (Logout)
</button>
</form>
</div>
</div>
</div>
</header>

<!-- CONTENT BODY -->
<main class="flex-1 p-8 space-y-7">

<!-- SUBHEADER / OPERATIONAL STATUS BAR -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 p-4 rounded-2xl bg-gradient-to-r from-[#111728] via-[#0f1523] to-[#111728] border border-slate-800/90 shadow-lg">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-amber-500/15 border border-amber-500/30 flex items-center justify-center text-amber-400">
<span class="material-symbols-outlined text-[24px]">traffic</span>
</div>
<div>
<div class="flex items-center gap-2">
<h1 class="text-base font-display font-bold text-white tracking-tight">Terminal Telemetry Matrix &bull; Gate Control v4.2</h1>
<span class="px-2 py-0.5 rounded-full bg-emerald-950 border border-emerald-800 text-emerald-400 text-[10px] font-mono font-bold">ALL GATES ACTIVE</span>
</div>
<p class="text-xs text-slate-400 mt-0.5">Integrasi otomatis loop sensor barrier, kamera ALPR OCR, dan modul thermal billing.</p>
</div>
</div>
<div class="flex items-center gap-2.5 flex-wrap">
<div class="flex items-center gap-3 px-3 py-1.5 rounded-xl bg-slate-900 border border-slate-800 text-xs font-mono">
<span class="flex items-center gap-1.5 text-slate-300"><span class="w-2 h-2 rounded-full bg-emerald-400"></span> IN-01</span>
<span class="flex items-center gap-1.5 text-slate-300"><span class="w-2 h-2 rounded-full bg-emerald-400"></span> IN-02</span>
<span class="flex items-center gap-1.5 text-slate-300"><span class="w-2 h-2 rounded-full bg-emerald-400"></span> OUT-01</span>
</div>
<button class="flex items-center gap-2 px-3.5 py-1.5 rounded-xl bg-rose-500/15 hover:bg-rose-500 text-rose-400 hover:text-white border border-rose-500/30 text-xs font-semibold transition-all shadow-sm" id="btn-emergency-override">
<span class="material-symbols-outlined text-[16px]">lock_open</span>
<span>Override Palang Manual</span>
</button>
<button class="flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 border border-slate-700 text-xs font-semibold transition-colors" onclick="window.print()">
<span class="material-symbols-outlined text-[16px]">print</span>
<span>Rekap Sesi</span>
</button>
</div>
</div>

<!-- TOP METRIC STATS CARDS -->
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5">
<div class="relative overflow-hidden p-5 rounded-2xl bg-[#111726] border border-slate-800 hover:border-amber-500/40 transition-all shadow-lg group">
<div class="flex items-center justify-between mb-3">
<span class="text-xs font-mono font-semibold uppercase text-slate-400 tracking-wider">Okupansi Parkir Aktif</span>
<div class="w-9 h-9 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 group-hover:scale-105 transition-transform">
<span class="material-symbols-outlined text-[20px]">local_parking</span>
</div>
</div>
<div class="flex items-baseline gap-2 mb-2">
<span class="text-3xl font-display font-bold text-white">418</span>
<span class="text-sm font-mono text-slate-400">/ 500 Slot</span>
</div>
<div class="w-full bg-slate-800 rounded-full h-2 overflow-hidden mb-2.5">
<div class="bg-gradient-to-r from-amber-500 to-amber-400 h-2 rounded-full" style="width: 83.6%"></div>
</div>
<div class="flex items-center justify-between text-xs font-mono">
<span class="text-amber-400 font-bold">84% Terisi</span>
<span class="text-emerald-400 font-medium">82 Slot Tersisa</span>
</div>
</div>

<div class="relative overflow-hidden p-5 rounded-2xl bg-[#111726] border border-slate-800 hover:border-emerald-500/40 transition-all shadow-lg group">
<div class="flex items-center justify-between mb-3">
<span class="text-xs font-mono font-semibold uppercase text-slate-400 tracking-wider">Kendaraan Masuk Hari Ini</span>
<div class="w-9 h-9 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 group-hover:scale-105 transition-transform">
<span class="material-symbols-outlined text-[20px]">login</span>
</div>
</div>
<div class="flex items-baseline gap-2 mb-2">
<span class="text-3xl font-display font-bold text-white">1.240</span>
<span class="text-xs font-mono text-emerald-400 font-bold px-1.5 py-0.5 rounded bg-emerald-950 border border-emerald-800/60">+8.2%</span>
</div>
<div class="text-xs text-slate-400 mb-2">Rata-rata 98 kdr/jam</div>
<div class="flex items-center justify-between text-xs text-slate-400 pt-1 border-t border-slate-800/80 font-mono">
<span>Peak Hour:</span>
<span class="text-slate-300 font-semibold">11:30 - 13:00 WIB</span>
</div>
</div>

<div class="relative overflow-hidden p-5 rounded-2xl bg-[#111726] border border-slate-800 hover:border-blue-500/40 transition-all shadow-lg group">
<div class="flex items-center justify-between mb-3">
<span class="text-xs font-mono font-semibold uppercase text-slate-400 tracking-wider">Kendaraan Keluar Hari Ini</span>
<div class="w-9 h-9 rounded-xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 group-hover:scale-105 transition-transform">
<span class="material-symbols-outlined text-[20px]">logout</span>
</div>
</div>
<div class="flex items-baseline gap-2 mb-2">
<span class="text-3xl font-display font-bold text-white">1.058</span>
<span class="text-xs font-mono text-slate-400">Unit Selesai</span>
</div>
<div class="text-xs text-slate-400 mb-2">99.4% Gate Clearance</div>
<div class="flex items-center justify-between text-xs text-slate-400 pt-1 border-t border-slate-800/80 font-mono">
<span>Avg Tap Out:</span>
<span class="text-emerald-400 font-semibold">4.8 Detik</span>
</div>
</div>

<div class="relative overflow-hidden p-5 rounded-2xl bg-[#111726] border border-slate-800 hover:border-amber-500/40 transition-all shadow-lg group">
<div class="flex items-center justify-between mb-3">
<span class="text-xs font-mono font-semibold uppercase text-slate-400 tracking-wider">Pendapatan Shift Berjalan</span>
<div class="w-9 h-9 rounded-xl bg-amber-500/15 border border-amber-500/30 flex items-center justify-center text-amber-400 group-hover:scale-105 transition-transform">
<span class="material-symbols-outlined text-[20px]">payments</span>
</div>
</div>
<div class="flex items-baseline gap-1 mb-2">
<span class="text-lg font-mono font-bold text-amber-400">Rp</span>
<span class="text-2xl font-display font-bold text-white">4.850.000</span>
</div>
<div class="text-xs text-slate-400 mb-2">Cashless 82% &bull; Tunai 18%</div>
<div class="flex items-center justify-between text-xs pt-1 border-t border-slate-800/80">
<span class="text-[11px] font-mono text-emerald-400">+12.4% vs kemarin</span>
<button class="px-2 py-0.5 rounded bg-amber-500/20 hover:bg-amber-500/30 text-amber-300 text-[11px] font-semibold border border-amber-500/30 transition-colors">Rekap Kas</button>
</div>
</div>
</div>

<!-- ENTRY FORM (LEFT) + TICKET PREVIEW & AREA MONITORING (RIGHT) -->
<div class="grid grid-cols-1 xl:grid-cols-12 gap-7">

<!-- LEFT COLUMN: TRANSACTION ENTRY -->
<div class="xl:col-span-7 p-6 rounded-2xl bg-[#111726] border border-slate-800 shadow-xl space-y-5">
<div class="flex items-center gap-3 border-b border-slate-800/80 pb-4">
<div class="w-9 h-9 rounded-xl bg-slate-900 border border-slate-800 flex items-center justify-center text-amber-400">
<span class="material-symbols-outlined text-[20px]">directions_car</span>
</div>
<div>
<h3 class="text-sm font-display font-bold text-white tracking-tight">Pos Masuk / Buka Transaksi</h3>
<p class="text-xs text-slate-400">Ketik plat nomor manual atau gunakan pemindaian ALPR otomatis</p>
</div>
</div>

<!-- Plate Number Input + ALPR -->
<div class="space-y-1.5">
<label class="block text-xs font-mono font-semibold uppercase text-slate-400 tracking-wider" for="input-plate">Nomor Polisi Kendaraan</label>
<div class="flex items-center gap-2.5">
<input id="input-plate" type="text" placeholder="B 1234 ABC" autocomplete="off" class="flex-1 px-4 py-3 rounded-xl bg-slate-900 border border-slate-800 text-slate-100 font-mono font-bold text-sm uppercase tracking-wider placeholder:text-slate-600 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400/30 transition-all"/>
<button id="btn-alpr-sync" type="button" class="flex items-center gap-2 px-4 py-3 rounded-xl bg-slate-900 border border-slate-800 hover:border-amber-500/40 text-slate-300 hover:text-amber-300 font-semibold text-xs transition-all" title="Pindai plat otomatis via kamera ALPR">
<span class="material-symbols-outlined text-[18px]">camera</span>
<span class="hidden sm:inline">Scan ALPR</span>
</button>
</div>
</div>

<!-- Vehicle Category Selector -->
<div class="space-y-2">
<label class="block text-xs font-mono font-semibold uppercase text-slate-400 tracking-wider">Kategori Tarif Kendaraan</label>
<div class="grid grid-cols-3 gap-3" id="vehicle-type-container">
<button class="vehicle-btn active flex flex-col items-center justify-center p-3.5 rounded-xl border-2 border-amber-500 bg-amber-500/15 text-white transition-all shadow-md" data-rate="5000" data-type="MOBIL" type="button">
<span class="material-symbols-outlined text-[26px] text-amber-400">directions_car</span>
<span class="font-bold text-sm mt-1">Mobil</span>
<span class="text-[11px] font-mono text-amber-300/90 font-medium">Rp 5.000 / jam</span>
</button>
<button class="vehicle-btn flex flex-col items-center justify-center p-3.5 rounded-xl border-2 border-slate-800 bg-slate-900/90 hover:border-slate-700 text-slate-300 transition-all" data-rate="2000" data-type="MOTOR" type="button">
<span class="material-symbols-outlined text-[26px] text-slate-400">two_wheeler</span>
<span class="font-bold text-sm mt-1">Motor</span>
<span class="text-[11px] font-mono text-slate-400 font-medium">Rp 2.000 / jam</span>
</button>
<button class="vehicle-btn flex flex-col items-center justify-center p-3.5 rounded-xl border-2 border-slate-800 bg-slate-900/90 hover:border-slate-700 text-slate-300 transition-all" data-rate="10000" data-type="TRUK" type="button">
<span class="material-symbols-outlined text-[26px] text-slate-400">local_shipping</span>
<span class="font-bold text-sm mt-1">Truk / Bus</span>
<span class="text-[11px] font-mono text-slate-400 font-medium">Rp 10.000 / jam</span>
</button>
</div>
</div>

<!-- Parking Area Selector & Card Member -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="space-y-1.5">
<label class="block text-xs font-mono font-semibold uppercase text-slate-400 tracking-wider">Alokasi Zona Masuk</label>
<div class="space-y-2">
<label class="flex items-center justify-between p-2.5 rounded-xl bg-slate-900 border border-slate-800 cursor-pointer hover:border-amber-500/40 transition-colors">
<div class="flex items-center gap-2.5">
<input checked="" class="text-amber-500 focus:ring-amber-400 bg-slate-800 border-slate-700" name="area_zone" type="radio" value="Area A (Lt 1)"/>
<span class="text-xs font-semibold text-slate-200">Area A (Lt 1)</span>
</div>
<span class="text-[11px] font-mono text-amber-400">Sisa 20 Slot</span>
</label>
<label class="flex items-center justify-between p-2.5 rounded-xl bg-slate-900 border border-slate-800 cursor-pointer hover:border-slate-700 transition-colors">
<div class="flex items-center gap-2.5">
<input class="text-amber-500 focus:ring-amber-400 bg-slate-800 border-slate-700" name="area_zone" type="radio" value="Area B (VIP)"/>
<span class="text-xs font-semibold text-slate-200">Area B (VIP Basement)</span>
</div>
<span class="text-[11px] font-mono text-emerald-400">Sisa 15 Slot</span>
</label>
</div>
</div>
<div class="space-y-1.5">
<label class="block text-xs font-mono font-semibold uppercase text-slate-400 tracking-wider">Kartu RFID / Akses Member</label>
<div class="p-2.5 rounded-xl bg-slate-900 border border-slate-800 flex flex-col justify-between h-[82px]">
<div class="flex items-center justify-between">
<span class="text-xs font-mono text-slate-300">RFID-9982-FLAZZ</span>
<span class="material-symbols-outlined text-[18px] text-emerald-400">contactless</span>
</div>
<div class="flex items-center justify-between text-[11px] text-slate-400">
<span>Status Kartu:</span>
<span class="font-mono text-emerald-400 font-semibold">Aktif &bull; Terdaftar Member VIP</span>
</div>
</div>
</div>
</div>

<!-- Action Buttons -->
<div class="flex flex-col sm:flex-row items-center gap-3 pt-2">
<button class="flex-1 w-full flex items-center justify-center gap-2.5 py-3.5 px-6 rounded-xl bg-gradient-to-r from-amber-500 via-amber-400 to-amber-500 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-bold font-sans text-sm shadow-[0_0_20px_rgba(245,158,11,0.35)] active:scale-[0.99] transition-all" id="btn-print-entry" type="button">
<span class="material-symbols-outlined text-[20px]">confirmation_number</span>
<span>Cetak Tiket &amp; Buka Palang</span>
</button>
<button class="w-full sm:w-auto flex items-center justify-center gap-2 py-3.5 px-5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 border border-slate-700 font-semibold text-sm transition-colors" id="btn-process-exit" type="button">
<span class="material-symbols-outlined text-[18px] text-amber-400">exit_to_app</span>
<span>Proses Bayar Keluar</span>
</button>
</div>
</div>
<!-- BOTTOM ROW: TABEL TRANSAKSI TERBARU & LOG AKTIFITAS PETUGAS -->
<div class="grid grid-cols-1 xl:grid-cols-12 gap-7">

<!-- LEFT 8 COLS: TABEL TRANSAKSI TERBARU -->
<div class="xl:col-span-8 p-6 rounded-2xl bg-[#111726] border border-slate-800 shadow-xl space-y-4">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-slate-800/80 pb-4">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-xl bg-slate-900 border border-slate-800 flex items-center justify-center text-amber-400">
<span class="material-symbols-outlined text-[20px]">table_chart</span>
</div>
<div>
<h3 class="text-sm font-display font-bold text-white tracking-tight">Tabel Transaksi Terbaru &amp; Monitoring Real-Time</h3>
<p class="text-xs text-slate-400">Pencatatan sesi aktif, billing tiket parkir, dan audit keluar gerbang</p>
</div>
</div>
<div class="flex items-center gap-1 p-1 rounded-xl bg-[#090d16] border border-slate-800" id="table-filter-group">
<button class="filter-tab active px-3 py-1 rounded-lg text-xs font-mono font-semibold bg-amber-500 text-slate-950 shadow" type="button">Semua Kendaraan</button>
<button class="filter-tab px-3 py-1 rounded-lg text-xs font-mono text-slate-400 hover:text-white transition-colors" type="button">Mobil</button>
<button class="filter-tab px-3 py-1 rounded-lg text-xs font-mono text-slate-400 hover:text-white transition-colors" type="button">Motor</button>
<button class="filter-tab px-3 py-1 rounded-lg text-xs font-mono text-slate-400 hover:text-white transition-colors" type="button">Member</button>
</div>
</div>

<div class="overflow-x-auto">
<table class="w-full text-xs">
<thead>
<tr class="text-left text-slate-400 font-mono uppercase text-[10px] tracking-wider border-b border-slate-800">
<th class="py-2.5 px-3 font-semibold">No. Tiket</th>
<th class="py-2.5 px-3 font-semibold">Plat</th>
<th class="py-2.5 px-3 font-semibold">Jenis</th>
<th class="py-2.5 px-3 font-semibold">Waktu Masuk</th>
<th class="py-2.5 px-3 font-semibold">Durasi</th>
<th class="py-2.5 px-3 font-semibold">Area</th>
<th class="py-2.5 px-3 font-semibold">Status</th>
<th class="py-2.5 px-3 font-semibold text-right">Aksi</th>
</tr>
</thead>
<tbody id="parking-table-body" class="divide-y divide-slate-800/60">
<tr class="hover:bg-slate-800/40 transition-colors">
<td class="py-3 px-3 font-bold text-white">TKT-0418</td>
<td class="py-3 px-3"><span class="px-2 py-0.5 rounded bg-slate-900 text-amber-300 font-bold border border-slate-700">B 1092 PKS</span></td>
<td class="py-3 px-3 text-slate-300">Mobil</td>
<td class="py-3 px-3 text-slate-300">14:10:22</td>
<td class="py-3 px-3 text-slate-400">0h 18m</td>
<td class="py-3 px-3"><span class="px-1.5 py-0.5 rounded bg-slate-800 text-slate-300 text-[10px]">Area A</span></td>
<td class="py-3 px-3"><span class="px-2 py-0.5 rounded-full bg-amber-500/15 border border-amber-500/30 text-amber-400 font-semibold text-[10px]">Aktif (Parkir)</span></td>
<td class="py-3 px-3 text-right">
<div class="flex items-center justify-end gap-1.5">
<button class="p-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white transition-colors" title="Cetak Ulang Struk"><span class="material-symbols-outlined text-[15px]">print</span></button>
<button class="p-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white transition-colors" title="Detail Kendaraan"><span class="material-symbols-outlined text-[15px]">visibility</span></button>
</div>
</td>
</tr>
<tr class="hover:bg-slate-800/40 transition-colors">
<td class="py-3 px-3 font-bold text-white">TKT-0417</td>
<td class="py-3 px-3"><span class="px-2 py-0.5 rounded bg-slate-900 text-amber-300 font-bold border border-slate-700">D 4321 BCA</span></td>
<td class="py-3 px-3 text-slate-300">Motor</td>
<td class="py-3 px-3 text-slate-300">13:58:07</td>
<td class="py-3 px-3 text-slate-400">0h 30m</td>
<td class="py-3 px-3"><span class="px-1.5 py-0.5 rounded bg-slate-800 text-slate-300 text-[10px]">Area C</span></td>
<td class="py-3 px-3"><span class="px-2 py-0.5 rounded-full bg-amber-500/15 border border-amber-500/30 text-amber-400 font-semibold text-[10px]">Aktif (Parkir)</span></td>
<td class="py-3 px-3 text-right">
<div class="flex items-center justify-end gap-1.5">
<button class="p-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white transition-colors" title="Cetak Ulang Struk"><span class="material-symbols-outlined text-[15px]">print</span></button>
<button class="p-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white transition-colors" title="Detail Kendaraan"><span class="material-symbols-outlined text-[15px]">visibility</span></button>
</div>
</td>
</tr>
<tr class="hover:bg-slate-800/40 transition-colors">
<td class="py-3 px-3 font-bold text-white">TKT-0416</td>
<td class="py-3 px-3"><span class="px-2 py-0.5 rounded bg-slate-900 text-amber-300 font-bold border border-slate-700">B 7788 VIP</span></td>
<td class="py-3 px-3 text-slate-300">Mobil</td>
<td class="py-3 px-3 text-slate-300">13:41:55</td>
<td class="py-3 px-3 text-slate-400">0h 47m</td>
<td class="py-3 px-3"><span class="px-1.5 py-0.5 rounded bg-slate-800 text-slate-300 text-[10px]">Area B</span></td>
<td class="py-3 px-3"><span class="px-2 py-0.5 rounded-full bg-amber-500/15 border border-amber-500/30 text-amber-400 font-semibold text-[10px]">Aktif (Parkir)</span></td>
<td class="py-3 px-3 text-right">
<div class="flex items-center justify-end gap-1.5">
<button class="p-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white transition-colors" title="Cetak Ulang Struk"><span class="material-symbols-outlined text-[15px]">print</span></button>
<button class="p-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white transition-colors" title="Detail Kendaraan"><span class="material-symbols-outlined text-[15px]">visibility</span></button>
</div>
</td>
</tr>
<tr class="hover:bg-slate-800/40 transition-colors">
<td class="py-3 px-3 font-bold text-white">TKT-0415</td>
<td class="py-3 px-3"><span class="px-2 py-0.5 rounded bg-slate-900 text-amber-300 font-bold border border-slate-700">B 5543 QRS</span></td>
<td class="py-3 px-3 text-slate-300">Truk / Bus</td>
<td class="py-3 px-3 text-slate-300">13:20:11</td>
<td class="py-3 px-3 text-slate-400">1h 08m</td>
<td class="py-3 px-3"><span class="px-1.5 py-0.5 rounded bg-slate-800 text-slate-300 text-[10px]">Area D</span></td>
<td class="py-3 px-3"><span class="px-2 py-0.5 rounded-full bg-emerald-500/15 border border-emerald-500/30 text-emerald-400 font-semibold text-[10px]">Selesai (Keluar)</span></td>
<td class="py-3 px-3 text-right">
<div class="flex items-center justify-end gap-1.5">
<button class="p-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white transition-colors" title="Cetak Ulang Struk"><span class="material-symbols-outlined text-[15px]">print</span></button>
<button class="p-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white transition-colors" title="Detail Kendaraan"><span class="material-symbols-outlined text-[15px]">visibility</span></button>
</div>
</td>
</tr>
<tr class="hover:bg-slate-800/40 transition-colors">
<td class="py-3 px-3 font-bold text-white">TKT-0414</td>
<td class="py-3 px-3"><span class="px-2 py-0.5 rounded bg-slate-900 text-amber-300 font-bold border border-slate-700">L 1822 ZZ</span></td>
<td class="py-3 px-3 text-slate-300">Motor</td>
<td class="py-3 px-3 text-slate-300">13:02:39</td>
<td class="py-3 px-3 text-slate-400">1h 26m</td>
<td class="py-3 px-3"><span class="px-1.5 py-0.5 rounded bg-slate-800 text-slate-300 text-[10px]">Area C</span></td>
<td class="py-3 px-3"><span class="px-2 py-0.5 rounded-full bg-emerald-500/15 border border-emerald-500/30 text-emerald-400 font-semibold text-[10px]">Selesai (Keluar)</span></td>
<td class="py-3 px-3 text-right">
<div class="flex items-center justify-end gap-1.5">
<button class="p-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white transition-colors" title="Cetak Ulang Struk"><span class="material-symbols-outlined text-[15px]">print</span></button>
<button class="p-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white transition-colors" title="Detail Kendaraan"><span class="material-symbols-outlined text-[15px]">visibility</span></button>
</div>
</td>
</tr>
</tbody>
</table>
</div>

<div class="flex items-center justify-between pt-3 border-t border-slate-800 text-xs font-mono text-slate-400">
<span id="table-footer-count">Menampilkan 5 dari 1.240 sesi hari ini</span>
<div class="flex items-center gap-2">
<button class="px-2.5 py-1 rounded-lg bg-slate-900 border border-slate-800 hover:bg-slate-800 text-slate-300 transition-colors" type="button">Prev</button>
<span class="text-amber-400 font-bold">1 / 248</span>
<button class="px-2.5 py-1 rounded-lg bg-slate-900 border border-slate-800 hover:bg-slate-800 text-slate-300 transition-colors" type="button">Next</button>
</div>
</div>
</div>
</main>
</div>

<!-- INTERACTIVE JS -->
<script>
    (function initParkingSystem() {
      // Every lookup is guarded so a missing element on a future page edit
      // can never crash the rest of the script (this was the root cause of
      // several buttons silently doing nothing before).
      const $ = (id) => document.getElementById(id);

      const inputPlate = $('input-plate');
      const ticketPlateView = $('ticket-plate-view');
      const ticketTypeView = $('ticket-type-view');
      const ticketNumberView = $('ticket-number-view');
      const ticketTimeView = $('ticket-time-view');
      const btnPrint = $('btn-print-entry');
      const btnExit = $('btn-process-exit');
      const btnAlpr = $('btn-alpr-sync');
      const btnOverride = $('btn-emergency-override');
      const tableBody = $('parking-table-body');
      const vehicleBtns = document.querySelectorAll('.vehicle-btn');
      const filterTabs = document.querySelectorAll('.filter-tab');
      const liveClock = $('live-clock');

      let currentType = 'MOBIL';
      let ticketIdCounter = 418;

      const formatRupiah = (n) => 'Rp ' + n.toLocaleString('id-ID');

      // Live clock
      function updateClock() {
        const now = new Date();
        const hrs = String(now.getHours()).padStart(2, '0');
        const mins = String(now.getMinutes()).padStart(2, '0');
        const secs = String(now.getSeconds()).padStart(2, '0');
        if (liveClock) liveClock.innerText = `${hrs}:${mins}:${secs} WIB`;
      }
      setInterval(updateClock, 1000);
      updateClock();

      // Vehicle pill selection
      vehicleBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          vehicleBtns.forEach(b => {
            b.classList.remove('border-amber-500', 'bg-amber-500/15', 'text-white');
            b.classList.add('border-slate-800', 'bg-slate-900/90', 'text-slate-300');
            const icon = b.querySelector('.material-symbols-outlined');
            if (icon) icon.className = 'material-symbols-outlined text-[26px] text-slate-400';
          });

          btn.classList.remove('border-slate-800', 'bg-slate-900/90', 'text-slate-300');
          btn.classList.add('border-amber-500', 'bg-amber-500/15', 'text-white');
          const icon = btn.querySelector('.material-symbols-outlined');
          if (icon) icon.className = 'material-symbols-outlined text-[26px] text-amber-400';

          currentType = btn.getAttribute('data-type') || currentType;
          if (ticketTypeView) {
            const label = currentType.charAt(0) + currentType.slice(1).toLowerCase();
            ticketTypeView.innerText = `${label} (Pass)`;
          }
        });
      });

      // Sync plate input to receipt preview as the officer types
      if (inputPlate) {
        inputPlate.addEventListener('input', (e) => {
          const val = e.target.value.toUpperCase();
          if (ticketPlateView) ticketPlateView.innerText = val || 'B ---- ---';
        });
      }

      // Mock ALPR capture
      const mockPlates = ['B 9081 KLM', 'D 4321 BCA', 'B 3099 UVW', 'L 1822 ZZ', 'B 5543 QRS', 'B 7788 VIP'];
      if (btnAlpr) {
        btnAlpr.addEventListener('click', () => {
          const randomPlate = mockPlates[Math.floor(Math.random() * mockPlates.length)];
          if (inputPlate) inputPlate.value = randomPlate;
          if (ticketPlateView) ticketPlateView.innerText = randomPlate;
          btnAlpr.classList.add('bg-amber-500', 'text-slate-950');
          setTimeout(() => btnAlpr.classList.remove('bg-amber-500', 'text-slate-950'), 600);
        });
      }

      // Print & open gate
      if (btnPrint) {
        btnPrint.addEventListener('click', () => {
          const plate = (inputPlate ? inputPlate.value : '').trim().toUpperCase();
          if (!plate) {
            alert('Silakan masukkan Nomor Polisi Kendaraan terlebih dahulu.');
            if (inputPlate) inputPlate.focus();
            return;
          }

          ticketIdCounter++;
          const newTicketNum = `TKT-${String(ticketIdCounter).padStart(4, '0')}`;
          const now = new Date();
          const timeStr = `${String(now.getHours()).padStart(2, '0')}:${String(now.getMinutes()).padStart(2, '0')}:${String(now.getSeconds()).padStart(2, '0')}`;
          const dateStr = `${String(now.getDate()).padStart(2, '0')}/${String(now.getMonth() + 1).padStart(2, '0')}/${now.getFullYear()}`;

          if (ticketNumberView) ticketNumberView.innerText = newTicketNum;
          if (ticketTimeView) ticketTimeView.innerText = `${dateStr} ${timeStr} WIB`;
          if (ticketPlateView) ticketPlateView.innerText = plate;

          const typeLabel = currentType.charAt(0) + currentType.slice(1).toLowerCase();

          if (tableBody) {
            const newRow = document.createElement('tr');
            newRow.className = 'hover:bg-slate-800/40 transition-colors bg-amber-500/10';
            newRow.innerHTML = `
              <td class="py-3 px-3 font-bold text-white">${newTicketNum}</td>
              <td class="py-3 px-3"><span class="px-2 py-0.5 rounded bg-slate-900 text-amber-300 font-bold border border-slate-700">${plate}</span></td>
              <td class="py-3 px-3 text-slate-300">${typeLabel}</td>
              <td class="py-3 px-3 text-slate-300">${timeStr}</td>
              <td class="py-3 px-3 text-slate-400">0h 00m</td>
              <td class="py-3 px-3"><span class="px-1.5 py-0.5 rounded bg-slate-800 text-slate-300 text-[10px]">Area A</span></td>
              <td class="py-3 px-3"><span class="px-2 py-0.5 rounded-full bg-amber-500/15 border border-amber-500/30 text-amber-400 font-semibold text-[10px]">Aktif (Parkir)</span></td>
              <td class="py-3 px-3 text-right">
                <div class="flex items-center justify-end gap-1.5">
                  <button class="p-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white transition-colors" title="Cetak Ulang Struk" type="button"><span class="material-symbols-outlined text-[15px]">print</span></button>
                  <button class="p-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white transition-colors" title="Detail Kendaraan" type="button"><span class="material-symbols-outlined text-[15px]">visibility</span></button>
                </div>
              </td>
            `;
            tableBody.insertBefore(newRow, tableBody.firstChild);
          }

          const originalContent = btnPrint.innerHTML;
          btnPrint.innerHTML = '<span class="material-symbols-outlined text-[20px] animate-spin">sync</span><span>Tiket Dicetak! Palang Terbuka...</span>';
          btnPrint.disabled = true;
          setTimeout(() => {
            btnPrint.innerHTML = originalContent;
            btnPrint.disabled = false;
            const freshRow = tableBody ? tableBody.firstChild : null;
            if (freshRow) freshRow.classList.remove('bg-amber-500/10');
            // Reset the entry form so the officer can process the next vehicle
            if (inputPlate) inputPlate.value = '';
          }, 1500);
        });
      }

      // Exit / payment process
      if (btnExit) {
        btnExit.addEventListener('click', () => {
          const plate = (inputPlate ? inputPlate.value : '').trim().toUpperCase() || 'B 1802 KK';
          alert(`Perhitungan Kendaraan Keluar: ${plate}\nTotal Durasi: 3 Jam 13 Menit\nTotal Biaya: ${formatRupiah(20000)}\nMetode: Siap Tap E-Money / QRIS di Gate OUT-01.`);
        });
      }

      // Emergency override
      if (btnOverride) {
        btnOverride.addEventListener('click', () => {
          const confirmed = confirm('PERINGATAN OPERATOR:\nBuka paksa palang barrier secara manual tanpa transaksi tiket? Tindakan ini dicatat ke Audit Trail Keamanan.');
          if (confirmed) alert('Perintah Buka Palang Manual berhasil diteruskan ke Controller Gate IN-01 & OUT-01.');
        });
      }

      // Filter tabs
      filterTabs.forEach(tab => {
        tab.addEventListener('click', () => {
          filterTabs.forEach(t => {
            t.classList.remove('bg-amber-500', 'text-slate-950', 'shadow');
            t.classList.add('text-slate-400');
          });
          tab.classList.remove('text-slate-400');
          tab.classList.add('bg-amber-500', 'text-slate-950', 'shadow');
        });
      });

      // ----- Profile dropdown / logout -----
      const profileWidget = $('profile-widget');
      const profileTrigger = $('profile-trigger');
      const profileMenu = $('profile-menu');
      const logoutForm = $('logout-form');

      function closeProfileMenu() {
        if (!profileMenu) return;
        profileMenu.classList.remove('open');
        profileMenu.classList.add('hidden');
        if (profileTrigger) profileTrigger.setAttribute('aria-expanded', 'false');
      }

      if (profileTrigger && profileMenu) {
        profileTrigger.addEventListener('click', (e) => {
          e.stopPropagation();
          const isOpen = profileMenu.classList.contains('open');
          if (isOpen) {
            closeProfileMenu();
          } else {
            profileMenu.classList.remove('hidden');
            profileMenu.classList.add('open');
            profileTrigger.setAttribute('aria-expanded', 'true');
          }
        });

        document.addEventListener('click', (e) => {
          if (profileWidget && !profileWidget.contains(e.target)) closeProfileMenu();
        });

        document.addEventListener('keydown', (e) => {
          if (e.key === 'Escape') closeProfileMenu();
        });
      }

      // Confirm before logging out, then submit the real Laravel logout
      // form so the session is destroyed server-side and the app returns
      // to the login page.
      if (logoutForm) {
        logoutForm.addEventListener('submit', (e) => {
          const confirmed = confirm('Yakin ingin mengakhiri sesi dan keluar dari ParkEase PRO?');
          if (!confirmed) e.preventDefault();
        });
      }
    })();
</script>
</body>
</html>