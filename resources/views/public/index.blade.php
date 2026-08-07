<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Bio-Link | Destinasi Coffe Shop Di Sukabumi </title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        .bg-grid-pattern {
            background-color: #ff00ff;
            background-image:
                linear-gradient(to right, rgba(204, 255, 0, 0.25) 2px, transparent 2px),
                linear-gradient(to bottom, rgba(204, 255, 0, 0.25) 2px, transparent 2px);
            background-size: 36px 36px;
        }

        @keyframes blink-animation {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.3; }
        }

        .animate-blink {
            animation: blink-animation 1s infinite;
        }

        .neo-card {
            box-shadow: 4px 4px 0px 0px #111111;
            transition: all 0.15s ease;
        }
        .neo-card:active {
            transform: translate(2px, 2px);
            box-shadow: 2px 2px 0px 0px #111111;
        }

        @keyframes floatEmoji {
            0% {
                transform: translateY(105vh) rotate(0deg) scale(0.8);
                opacity: 0;
            }
            15% {
                opacity: 0.8;
            }
            85% {
                opacity: 0.8;
            }
            100% {
                transform: translateY(-110vh) rotate(360deg) scale(1.2);
                opacity: 0;
            }
        }

        .floating-emoji {
            position: fixed;
            bottom: -50px;
            font-size: 2rem;
            user-select: none;
            pointer-events: none;
            z-index: 0;
            animation: floatEmoji linear infinite;
        }

        .cloud-container {
            background: #ccff00;
            border: 4px solid #111111;
            border-radius: 90px 90px 30px 30px / 60px 60px 30px 30px;
            box-shadow: 0px -10px 0px 0px #111111;
            position: relative;
        }

        .cloud-container::before {
            content: '';
            position: absolute;
            top: -45px;
            left: 10px;
            width: 120px;
            height: 60px;
            background: #ccff00;
            border: 4px solid #111111;
            border-radius: 60px 60px 0 0;
            z-index: 10;
        }

        .cloud-container::after {
            content: '';
            position: absolute;
            top: -55px;
            right: 10px;
            width: 140px;
            height: 70px;
            background: #ccff00;
            border: 4px solid #111111;
            border-radius: 70px 70px 0 0;
            z-index: 10;
        }
    </style>
</head>

<body class="bg-grid-pattern min-h-screen font-sans antialiased text-[#111111] pb-24 relative overflow-x-hidden">

    <div class="emoji-container fixed inset-0 overflow-hidden pointer-events-none z-0">
        <span class="floating-emoji" style="left: 5%; animation-duration: 8s; animation-delay: 0s;">☕</span>
        <span class="floating-emoji" style="left: 20%; animation-duration: 11s; animation-delay: 2s;">🍩</span>
        <span class="floating-emoji" style="left: 35%; animation-duration: 12s; animation-delay: 1s;">✨</span>
        <span class="floating-emoji" style="left: 50%; animation-duration: 9s; animation-delay: 4s;">🥤</span>
        <span class="floating-emoji" style="left: 65%; animation-duration: 10s; animation-delay: 3s;">🥐</span>
        <span class="floating-emoji" style="left: 80%; animation-duration: 10s; animation-delay: 5s;">🔥</span>
        <span class="floating-emoji" style="left: 90%; animation-duration: 15s; animation-delay: 1.5s;">☕</span>
    </div>

    <main class="max-w-md mx-auto pt-10 px-4 flex flex-col items-center relative z-10">

        <div class="bg-[#ccff00] border-2 border-[#111111] px-4 py-1 rounded-full text-xs font-black uppercase tracking-widest shadow-[3px_3px_0px_0px_#111111] mb-6 rotate-[-2deg]">
            ☕ Eksplor Rasa Sukabumi
        </div>

        <div class="relative mb-4">
            <div class="w-28 h-28 rounded-3xl border-4 border-[#111111] overflow-hidden shadow-[6px_6px_0px_0px_#111111] bg-[#00ffff] rotate-[2deg]">
                <img src="{{asset('image/1.png')}}" alt="Profile"
                    class="w-full h-full object-cover">
            </div>
            <div class="absolute -bottom-1 -right-1 bg-[#ccff00] border-2 border-[#111111] w-7 h-7 rounded-full flex items-center justify-center shadow-[2px_2px_0px_0px_#111111]">
                <span class="w-3 h-3 bg-[#ff0000] rounded-full animate-ping absolute"></span>
                <span class="w-3 h-3 bg-[#ff0000] rounded-full"></span>
            </div>
        </div>

        <h1 class="text-2xl font-black mb-1 text-center tracking-tight bg-white px-3 py-0.5 border-2 border-[#111111] shadow-[3px_3px_0px_0px_#111111] rotate-[-1deg]">
            @SukabumiSpot
        </h1>

        <p class="text-center text-xs font-extrabold px-6 mb-6 mt-3 bg-[#00ffff] border-2 border-[#111111] py-2 rounded-xl shadow-[3px_3px_0px_0px_#111111]">
            DAFTAR COFFEE SHOP DI SUKABUMI <br>
            <span class="text-[#ff0000] font-black animate-blink inline-block bg-[#ccff00] px-1.5 py-0.5  mt-1 text-[11px]">↓↓↓ KLIK LINK DIBAWAH INI ↓↓↓</span>
        </p>

        <!-- TOMBOL BULAT IKON KOPI -->
        <div class="flex items-center gap-4 mb-8 justify-center">
            <a href="#"
                class="w-14 h-14 bg-[#ccff00] rounded-full border-2 border-[#111111] shadow-[3px_3px_0px_0px_#111111] flex items-center justify-center hover:-translate-y-0.5 transition-transform">
                <i data-lucide="coffee" class="w-6 h-6 text-[#111111] stroke-[2.5]"></i>
            </a>
            <a href="#"
                class="w-14 h-14 bg-[#00ffff] rounded-full border-2 border-[#111111] shadow-[3px_3px_0px_0px_#111111] flex items-center justify-center hover:-translate-y-0.5 transition-transform">
                <i data-lucide="coffee" class="w-6 h-6 text-[#111111] stroke-[2.5]"></i>
            </a>
            <a href="#"
                class="w-14 h-14 bg-[#ff99cc] rounded-full border-2 border-[#111111] shadow-[3px_3px_0px_0px_#111111] flex items-center justify-center hover:-translate-y-0.5 transition-transform">
                <i data-lucide="coffee" class="w-6 h-6 text-[#111111] stroke-[2.5]"></i>
            </a>
        </div>

        <div class="w-full space-y-4">
            <button onclick="openModal()" class="w-full relative group">
                <div class="absolute inset-0 bg-[#111111] rounded-2xl translate-y-1.5 translate-x-1.5"></div>
                <div class="relative w-full bg-[#ccff00] border-2 border-[#111111] rounded-2xl p-4 flex items-center justify-between neo-card">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-[#ff00ff] border-2 border-[#111111] rounded-xl flex items-center justify-center shadow-[2px_2px_0px_0px_#111111]">
                            <i data-lucide="user-check" class="w-5 h-5 text-[#111111] stroke-[2.5]"></i>
                        </div>
                        <div class="text-left">
                            <span class="font-black text-[#111111] text-base block leading-tight">Contact Details</span>
                            <span class="text-[11px] font-bold text-[#111111] opacity-80">Narahubung & Jadwal</span>
                        </div>
                    </div>
                    <div class="bg-[#111111] text-white p-1.5 rounded-lg">
                        <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                    </div>
                </div>
            </button>

            <!-- KOTAK BESAR PEMBUNGKUS DAFTAR LINK -->
            <div class="relative">
                <div class="absolute inset-0 bg-[#111111] rounded-3xl translate-y-2 translate-x-2"></div>
                <div class="relative w-full bg-white border-4 border-[#111111] rounded-3xl p-4 sm:p-5 space-y-3.5 shadow-[6px_6px_0px_0px_#111111]">
                    
                    @foreach ($links as $link)
                        <a href="{{ route('public.redirect', $link->id) }}" target="_blank" rel="noopener noreferrer"
                            class="w-full block relative group">

                            <div class="absolute inset-0 bg-[#111111] rounded-2xl translate-y-1.5 translate-x-1.5"></div>
                            <div class="relative w-full bg-white border-2 border-[#111111] rounded-2xl p-3.5 flex items-center justify-between neo-card">

                                <div class="flex items-center gap-3 w-full pr-2">
                                    @if ($link->image)
                                        <img src="{{ asset('storage/' . $link->image) }}"
                                            class="w-11 h-11 object-cover rounded-xl border-2 border-[#111111] shrink-0 bg-[#00ffff]">
                                    @else
                                        <div class="w-11 h-11 bg-[#00ffff] border-2 border-[#111111] rounded-xl flex items-center justify-center shrink-0 shadow-[2px_2px_0px_0px_#111111]">
                                            <i data-lucide="coffee" class="w-5 h-5 text-[#111111] stroke-[2.5]"></i>
                                        </div>
                                    @endif

                                    <span class="font-black text-[#111111] text-sm md:text-base truncate w-full">
                                        {{ $link->title }}
                                    </span>
                                </div>

                                <div class="w-8 h-8 bg-[#ccff00] border-2 border-[#111111] rounded-xl flex items-center justify-center shrink-0 shadow-[2px_2px_0px_0px_#111111]">
                                    <i data-lucide="chevron-right" class="w-4 h-4 text-[#111111] stroke-[3]"></i>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>

        </div>

        <div class="mt-6 w-full flex justify-center">
            {{ $links->links('vendor.pagination.custom-public') }}
        </div>

    </main>

    {{-- MODAL KONTAK --}}
    <div id="contact-modal" class="fixed inset-0 z-50 hidden opacity-0 transition-opacity duration-300">
        <div class="absolute inset-0 bg-[#111111]/70 backdrop-blur-sm" onclick="closeModal()"></div>

        <div id="modal-content"
            class="absolute bottom-0 left-0 right-0 cloud-container p-6 pt-12 max-w-md mx-auto h-auto max-h-[85vh] overflow-y-auto pb-12 flex flex-col translate-y-full transition-transform duration-300">

            <div class="w-12 h-1.5 bg-[#111111] rounded-full mx-auto mb-6 shrink-0 relative z-20"></div>

            <div class="text-center mb-6 relative z-20">
                <span class="bg-[#ff0055] text-white text-[10px] font-black px-3 py-1 rounded-full border border-[#111111] uppercase tracking-widest shadow-[2px_2px_0px_0px_#111111]">
                    Informasi Kontak
                </span>
                <h3 class="text-xl font-black text-[#111111] mt-3">Narahubung Resmi</h3>
                <p class="text-xs font-bold text-[#111111] opacity-80 mt-0.5">Destinasi Coffee Shop Di Sukabumi</p>
            </div>

            <div class="bg-white border-2 border-[#111111] rounded-2xl p-4 mb-5 space-y-3 shadow-[4px_4px_0px_0px_#111111] relative z-20">
                <div class="flex items-center gap-3 border-b-2 border-dashed border-[#111111] pb-3">
                    <div class="p-2 bg-[#00ffff] border-2 border-[#111111] rounded-xl shadow-[2px_2px_0px_0px_#111111]">
                        <i data-lucide="mail" class="w-4 h-4 text-[#111111]"></i>
                    </div>
                    <p class="font-black text-xs md:text-sm truncate text-[#111111]">zaskiaqanitanajiyah@gmail.com</p>
                </div>

                <div class="flex items-center gap-3 border-b-2 border-dashed border-[#111111] pb-3">
                    <div class="p-2 bg-[#ff00ff] border-2 border-[#111111] rounded-xl shadow-[2px_2px_0px_0px_#111111]">
                        <i data-lucide="phone" class="w-4 h-4 text-[#111111]"></i>
                    </div>
                    <p class="font-black text-xs md:text-sm truncate text-[#111111]">+62 823-2140-0313</p>
                </div>

                <div class="flex items-start gap-3">
                    <div class="p-2 bg-[#ff5500] border-2 border-[#111111] rounded-xl shadow-[2px_2px_0px_0px_#111111] mt-0.5">
                        <i data-lucide="clock" class="w-4 h-4 text-[#111111]"></i>
                    </div>
                    <div>
                        <p class="font-black text-xs text-[#111111]">Senin - Jumat: 09:00 - 15:00</p>
                        <p class="font-bold text-[11px] text-[#111111] opacity-70 mt-0.5">Weekend: By Appointment</p>
                    </div>
                </div>
            </div>

            <div class="bg-[#00ffff] border-2 border-[#111111] p-3.5 rounded-xl flex gap-3 mb-6 shadow-[3px_3px_0px_0px_#111111] relative z-20">
                <i data-lucide="info" class="w-5 h-5 shrink-0 mt-0.5 text-[#111111]"></i>
                <p class="text-[11px] font-black text-[#111111] leading-relaxed">
                    Browser Anda mungkin tidak mendukung download VCF otomatis. Silakan salin nomor secara manual.
                </p>
            </div>

            <div class="mt-auto flex gap-3 relative z-20">
                <button class="flex-1 bg-[#111111] text-[#ccff00] font-black py-3.5 rounded-xl hover:bg-[#333333] transition-colors border-2 border-[#111111] shadow-[3px_3px_0px_0px_rgba(0,0,0,0.3)] text-sm">
                    Save Contact
                </button>
                <button onclick="closeModal()"
                    class="w-12 h-12 shrink-0 bg-[#ff0055] text-white border-2 border-[#111111] rounded-xl flex items-center justify-center shadow-[3px_3px_0px_0px_#111111] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none transition-all">
                    <i data-lucide="x" class="w-5 h-5 stroke-[3]"></i>
                </button>
            </div>
        </div>
    </div>

    <script>
        lucide.createIcons();

        const modal = document.getElementById('contact-modal');
        const modalContent = document.getElementById('modal-content');

        function openModal() {
            modal.classList.remove('hidden');
            requestAnimationFrame(() => {
                modal.classList.remove('opacity-0');
                modalContent.classList.remove('translate-y-full');
            });
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modal.classList.add('opacity-0');
            modalContent.classList.add('translate-y-full');

            setTimeout(() => {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }, 300);
        }
    </script>
</body>

</html>