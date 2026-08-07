<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Area - BioLink Admin</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        .bg-grid-pattern {
            background-color: #ccff00;
            background-image:
                linear-gradient(to right, rgba(15, 23, 42, 0.1) 2px, transparent 2px),
                linear-gradient(to bottom, rgba(15, 23, 42, 0.1) 2px, transparent 2px);
            background-size: 32px 32px;
        }

        /* Animasi Emoji Bergerak dari Bawah ke Atas */
        @keyframes floatUp {
            0% {
                transform: translateY(100vh) scale(0.8) rotate(0deg);
                opacity: 0;
            }
            20% {
                opacity: 0.8;
            }
            80% {
                opacity: 0.8;
            }
            100% {
                transform: translateY(-20vh) scale(1.2) rotate(360deg);
                opacity: 0;
            }
        }

        .floating-emoji {
            position: absolute;
            bottom: -50px;
            font-size: 2rem;
            animation: floatUp linear infinite;
            user-select: none;
            pointer-events: none;
            z-index: 0;
        }
    </style>
</head>
<body class="bg-grid-pattern min-h-screen font-sans antialiased flex items-center justify-center p-4 sm:p-6 lg:p-8 relative overflow-hidden">

    <!-- Background Floating Emojis Container -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <span class="floating-emoji" style="left: 10%; animation-duration: 7s; animation-delay: 0s;">⚡</span>
        <span class="floating-emoji" style="left: 25%; animation-duration: 9s; animation-delay: 2s;">🔗</span>
        <span class="floating-emoji" style="left: 40%; animation-duration: 6s; animation-delay: 1s;">💻</span>
        <span class="floating-emoji" style="left: 55%; animation-duration: 8s; animation-delay: 3s;">🚀</span>
        <span class="floating-emoji" style="left: 70%; animation-duration: 10s; animation-delay: 1.5s;">✨</span>
        <span class="floating-emoji" style="left: 85%; animation-duration: 7s; animation-delay: 4s;">🔥</span>
    </div>

    <div class="w-full max-w-md relative z-10">

        <!-- Main Card Container -->
        <div class="bg-white border-4 border-slate-900 rounded-3xl p-6 sm:p-8 shadow-[8px_8px_0px_0px_#0f172a] relative">

            <!-- Floating Badge Top Center -->
            <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                <span class="bg-[#fde68a] text-slate-900 text-[10px] font-black px-3.5 py-1 rounded-full border-2 border-slate-900 uppercase tracking-widest shadow-[2px_2px_0px_0px_#0f172a] inline-block whitespace-nowrap">
                    🔐 SECURE ACCESS
                </span>
            </div>

            <!-- Header inside the card -->
            <div class="text-center mt-3 mb-6">
                <div class="w-14 h-14 bg-[#00ffff] border-3 border-slate-900 rounded-2xl flex items-center justify-center shadow-[3px_3px_0px_0px_#0f172a] mx-auto mb-3">
                    <i data-lucide="user-round" class="w-7 h-7 text-slate-900 stroke-[3]"></i>
                </div>
                <h1 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">Login Admin</h1>
                <p class="text-xs sm:text-sm font-bold text-slate-600 mt-1">Masuk untuk mengelola Data</p>
            </div>

            <form action="{{ route('login.post') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Display Alert Error -->
                @if($errors->any())
                    <div class="bg-[#fecdd3] border-2 border-slate-900 p-3.5 rounded-xl flex items-start gap-3 shadow-[2px_2px_0px_0px_#0f172a]">
                        <i data-lucide="alert-triangle" class="w-5 h-5 text-slate-900 shrink-0 mt-0.5 stroke-[3]"></i>
                        <p class="text-xs sm:text-sm font-black text-slate-900">{{ $errors->first() }}</p>
                    </div>
                @endif

                <!-- Input Email -->
                <div class="space-y-1.5">
                    <label for="email" class="block text-xs sm:text-sm font-black text-slate-900">Alamat Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus placeholder="admin@domain.com"
                           class="w-full px-4 py-3 bg-[#f8fafc] border-2 border-slate-900 rounded-xl focus:outline-none focus:ring-4 focus:ring-[#00ffff]/30 font-bold text-slate-900 text-sm transition-all placeholder:text-slate-400 shadow-[2px_2px_0px_0px_#0f172a]">
                </div>

                <!-- Input Password -->
                <div class="space-y-1.5">
                    <label for="password" class="block text-xs sm:text-sm font-black text-slate-900">Kata Sandi</label>
                    <input type="password" id="password" name="password" required placeholder="••••••••"
                           class="w-full px-4 py-3 bg-[#f8fafc] border-2 border-slate-900 rounded-xl focus:outline-none focus:ring-4 focus:ring-[#00ffff]/30 font-bold text-slate-900 text-sm transition-all placeholder:text-slate-400 shadow-[2px_2px_0px_0px_#0f172a]">
                </div>

                <!-- Submit Button -->
                <div class="pt-3">
                    <button type="submit" class="w-full bg-[#00ffff] hover:bg-[#00cccc] text-slate-900 font-black py-3.5 rounded-xl border-2 border-slate-900 shadow-[4px_4px_0px_0px_#0f172a] hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition-all flex items-center justify-center gap-2 text-sm sm:text-base">
                        Masuk <i data-lucide="arrow-right" class="w-5 h-5 stroke-[3]"></i>
                    </button>
                </div>
            </form>

        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>