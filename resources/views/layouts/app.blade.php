<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard - BioLink')</title>

    <!-- 1. Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- 2. Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Google Font: Plus Jakarta Sans -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#F8FAFC] text-slate-800 antialiased selection:bg-blue-300 selection:text-blue-900 min-h-screen flex flex-col overflow-x-hidden">

    <!-- Responsive Modern Navbar (Disamakan gayanya dengan elemen Dashboard: Neo-Brutalist Stabilo) -->
    <nav class="bg-white border-b-4 border-slate-900 text-slate-900 sticky top-0 z-50 shadow-[0px_4px_0px_0px_#0f172a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 sm:h-20">
                
                <!-- Logo & Brand -->
                <div class="flex items-center space-x-2 sm:space-x-3">
                    <div class="bg-[#ccff00] text-slate-900 p-2 sm:p-2.5 rounded-xl sm:rounded-2xl border-2 border-slate-900 shadow-[3px_3px_0px_0px_#0f172a]">
                        <i data-lucide="link" class="w-5 h-5 sm:w-6 sm:h-6 stroke-[3]"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-black text-lg sm:text-xl tracking-tight text-slate-900">BioLink</span>
                        <span class="hidden sm:block text-[10px] text-slate-700 font-extrabold uppercase tracking-widest leading-none mt-0.5">Dashboard Panel</span>
                    </div>
                </div>

                <!-- Nav Links -->
                <div class="flex items-center space-x-2 sm:space-x-4">
                    <!-- MENU DASHBOARD -->
                    <a href="{{ route('admin.dashboard') }}" class="text-slate-900 hover:bg-[#ccff00] transition-all duration-200 p-2 sm:px-4 sm:py-2.5 rounded-xl text-sm font-black flex items-center gap-2 border-2 border-transparent hover:border-slate-900 hover:shadow-[3px_3px_0px_0px_#0f172a]">
                        <i data-lucide="bar-chart-3" class="w-5 h-5 sm:w-4 sm:h-4 stroke-[3]"></i>
                        <span class="hidden md:inline">Dashboard</span>
                    </a>
                    
                    <!-- MANAGE LINKS -->
                    <a href="{{ route('admin.links.index') ?? '#' }}" class="text-slate-900 hover:bg-[#00ffff] transition-all duration-200 p-2 sm:px-4 sm:py-2.5 rounded-xl text-sm font-black flex items-center gap-2 border-2 border-transparent hover:border-slate-900 hover:shadow-[3px_3px_0px_0px_#0f172a]">
                        <i data-lucide="layout-dashboard" class="w-5 h-5 sm:w-4 sm:h-4 stroke-[3]"></i>
                        <span class="hidden md:inline">Manage Links</span>
                    </a>

                    <!-- Preview Button -->
                    <a href="/" target="_blank" class="bg-[#00ffff] hover:bg-[#00e6e6] text-slate-900 font-black px-3 py-2 sm:px-5 sm:py-2.5 rounded-xl text-xs sm:text-sm transition-all duration-200 flex items-center gap-1.5 sm:gap-2 border-2 border-slate-900 shadow-[3px_3px_0px_0px_#0f172a] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none">
                        <span class="hidden sm:inline">Preview Public</span>
                        <span class="sm:hidden">Preview</span>
                        <i data-lucide="external-link" class="w-4 h-4 stroke-[3]"></i>
                    </a>

                    <!-- Form Aksi Logout (HTTP POST) -->
                    <form action="{{ route('logout') }}" method="POST" class="m-0">
                        @csrf
                        <button type="submit"
                                class="bg-rose-300 hover:bg-rose-400 text-slate-900 font-black text-xs sm:text-sm px-3 py-2 sm:px-5 sm:py-2.5 rounded-xl border-2 border-slate-900 shadow-[3px_3px_0px_0px_#0f172a] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none transition-all flex items-center gap-1.5 sm:gap-2">
                            <i data-lucide="log-out" class="w-4 h-4 stroke-[3]"></i>
                            <span class="hidden sm:inline">Keluar</span>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </nav>

    <!-- Main Content Container -->
    <main class="max-w-7xl mx-auto py-6 sm:py-10 px-4 sm:px-6 lg:px-8 flex-grow w-full">
        <!-- Flash Message Notification (Success) -->
        @if(session('success'))
            <div class="mb-6 p-4 sm:p-5 bg-emerald-200 text-emerald-950 font-extrabold rounded-2xl border-2 border-slate-900 shadow-[4px_4px_0px_0px_#0f172a] flex items-center gap-3">
                <i data-lucide="check-circle-2" class="w-6 h-6 text-emerald-800 shrink-0 stroke-[3]"></i>
                <span class="text-sm sm:text-base">{{ session('success') }}</span>
            </div>
        @endif
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t-4 border-slate-900 text-center py-6 px-4 text-xs font-black text-slate-900 mt-auto">
        &copy; {{ date('Y') }} Mini Bootcamp Laravel 12 &bull; Bio Link Application
    </footer>

    <!-- 3. Inisialisasi Script Lucide -->
    <script>
        lucide.createIcons();
    </script>
</body>
</html>