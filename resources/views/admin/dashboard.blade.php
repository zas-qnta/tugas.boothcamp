@extends('layouts.app')

@section('content')
<div class="min-h-screen relative overflow-hidden py-8">

    <!-- Background Floating Emojis (Bergerak dari bawah ke atas) -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
        <span class="absolute text-3xl select-none" style="left: 8%; bottom: -50px; animation: floatUp 7s linear infinite; animation-delay: 0s;">⚡</span>
        <span class="absolute text-3xl select-none" style="left: 22%; bottom: -50px; animation: floatUp 9s linear infinite; animation-delay: 2s;">🔗</span>
        <span class="absolute text-3xl select-none" style="left: 38%; bottom: -50px; animation: floatUp 6s linear infinite; animation-delay: 1s;">📊</span>
        <span class="absolute text-3xl select-none" style="left: 55%; bottom: -50px; animation: floatUp 8s linear infinite; animation-delay: 3s;">🚀</span>
        <span class="absolute text-3xl select-none" style="left: 72%; bottom: -50px; animation: floatUp 10s linear infinite; animation-delay: 1.5s;">✨</span>
        <span class="absolute text-3xl select-none" style="left: 88%; bottom: -50px; animation: floatUp 6.5s linear infinite; animation-delay: 4s;">🔥</span>
    </div>

    <style>
        @keyframes floatUp {
            0% { transform: translateY(105vh) scale(0.8) rotate(0deg); opacity: 0; }
            20% { opacity: 0.7; }
            80% { opacity: 0.7; }
            100% { transform: translateY(-10vh) scale(1.2) rotate(360deg); opacity: 0; }
        }
    </style>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-8">
        
        <!-- HEADER DASHBOARD: Warna Kuning Stabilo (#ccff00) -->
        <div class="bg-[#ccff00] border-4 border-slate-900 rounded-3xl p-6 md:p-8 shadow-[8px_8px_0px_0px_#0f172a] relative">
            <div class="absolute -top-4 right-8">
                <span class="bg-[#ff0055] text-white text-[10px] font-black px-4 py-1.5 rounded-full border-2 border-slate-900 uppercase tracking-widest shadow-[3px_3px_0px_0px_#0f172a] inline-block rotate-2">
                    ⚡ Live Control Center
                </span>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-center">
                <div class="lg:col-span-2 space-y-3">
                    <h1 class="text-3xl md:text-5xl font-black text-slate-900 tracking-tight leading-none">
                        Dashboard <span class="bg-[#00ffff] px-2 py-0.5 rounded-xl border-2 border-slate-900 shadow-[2px_2px_0px_0px_#0f172a] inline-block">Performa</span>
                    </h1>
                    <div class="flex items-center gap-3 pt-2">
                        <span class="w-4 h-4 bg-[#ff0055] rounded-full border-2 border-slate-900 animate-pulse"></span>
                        <span class="text-xs font-black uppercase tracking-wider text-slate-900">Sistem Aktif & Terhubung</span>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row lg:flex-col justify-center gap-3 bg-white border-2 border-slate-900 p-4 rounded-2xl shadow-[4px_4px_0px_0px_#0f172a]">
                    <p class="text-xs font-black uppercase tracking-widest text-slate-900">Aksi Cepat Menu</p>
                    <a href="{{ route('admin.links.index') }}" class="w-full bg-[#ff99cc] hover:bg-[#ff80bf] text-slate-900 font-black py-3 px-4 rounded-xl border-2 border-slate-900 shadow-[3px_3px_0px_0px_#0f172a] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none transition-all flex items-center justify-center gap-2 text-sm">
                        Kelola Tautan <i data-lucide="arrow-right" class="w-4 h-4 stroke-[3]"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- 1. SUMMARY CARDS -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Card 1: Total Tautan -->
            <div class="bg-[#ccff00] border-4 border-slate-900 rounded-3xl p-6 shadow-[6px_6px_0px_0px_#0f172a] relative overflow-hidden group hover:-translate-y-1 transition-transform">
                <div class="absolute inset-0 overflow-hidden pointer-events-none">
                    <span class="absolute text-xl opacity-30 select-none" style="left: 20%; bottom: -30px; animation: floatUp 5s linear infinite; animation-delay: 0s;">📦</span>
                    <span class="absolute text-xl opacity-30 select-none" style="left: 70%; bottom: -30px; animation: floatUp 7s linear infinite; animation-delay: 2s;">🔗</span>
                </div>

                <div class="flex items-center justify-between mb-4 relative z-10">
                    <span class="bg-white border-2 border-slate-900 text-slate-900 text-[10px] font-black px-2.5 py-0.5 rounded-full uppercase tracking-widest shadow-[2px_2px_0px_0px_#0f172a]">Database Link</span>
                    <div class="w-10 h-10 bg-white border-2 border-slate-900 rounded-xl flex items-center justify-center shadow-[2px_2px_0px_0px_#0f172a]">
                        <i data-lucide="link" class="w-5 h-5 text-slate-900 stroke-[3]"></i>
                    </div>
                </div>
                <h3 class="text-xs font-black text-slate-900 uppercase tracking-widest mb-1 relative z-10">Total Tautan</h3>
                <div class="flex items-baseline gap-2 relative z-10">
                    <span class="text-5xl font-black text-slate-900">{{ $totalLinks }}</span>
                    <span class="text-xs font-black bg-white px-2.5 py-1 rounded-xl border-2 border-slate-900 shadow-[2px_2px_0px_0px_#0f172a] text-slate-900">{{ $activeLinks }} Aktif</span>
                </div>
            </div>

            <!-- Card 2: Total Klik -->
            <div class="bg-[#00ffff] border-4 border-slate-900 rounded-3xl p-6 shadow-[6px_6px_0px_0px_#0f172a] relative overflow-hidden group hover:-translate-y-1 transition-transform">
                <div class="absolute inset-0 overflow-hidden pointer-events-none">
                    <span class="absolute text-xl opacity-30 select-none" style="left: 25%; bottom: -30px; animation: floatUp 6s linear infinite; animation-delay: 1s;">👆</span>
                    <span class="absolute text-xl opacity-30 select-none" style="left: 75%; bottom: -30px; animation: floatUp 8s linear infinite; animation-delay: 2.5s;">⚡</span>
                </div>

                <div class="flex items-center justify-between mb-4 relative z-10">
                    <span class="bg-white border-2 border-slate-900 text-slate-900 text-[10px] font-black px-2.5 py-0.5 rounded-full uppercase tracking-widest shadow-[2px_2px_0px_0px_#0f172a]">Traffic Analyzer</span>
                    <div class="w-10 h-10 bg-white border-2 border-slate-900 rounded-xl flex items-center justify-center shadow-[2px_2px_0px_0px_#0f172a]">
                        <i data-lucide="mouse-pointer-click" class="w-5 h-5 text-slate-900 stroke-[3]"></i>
                    </div>
                </div>
                <h3 class="text-xs font-black text-slate-900 uppercase tracking-widest mb-1 relative z-10">Total Akses Keseluruhan</h3>
                <div class="flex items-baseline gap-2 relative z-10">
                    <span class="text-5xl font-black text-slate-900">{{ $totalClicks }}</span>
                    <span class="text-xs font-black uppercase text-slate-900 bg-white px-2.5 py-1 rounded-xl border-2 border-slate-900 shadow-[2px_2px_0px_0px_#0f172a]">Clicks</span>
                </div>
            </div>

            <!-- Card 3: Top Link -->
            <div class="bg-[#ff99cc] border-4 border-slate-900 rounded-3xl p-6 shadow-[6px_6px_0px_0px_#0f172a] relative overflow-hidden group hover:-translate-y-1 transition-transform">
                <div class="absolute inset-0 overflow-hidden pointer-events-none">
                    <span class="absolute text-xl opacity-30 select-none" style="left: 30%; bottom: -30px; animation: floatUp 5.5s linear infinite; animation-delay: 0.5s;">🏆</span>
                    <span class="absolute text-xl opacity-30 select-none" style="left: 80%; bottom: -30px; animation: floatUp 7.5s linear infinite; animation-delay: 1.8s;">⭐</span>
                </div>

                <div class="flex items-center justify-between mb-4 relative z-10">
                    <span class="bg-white border-2 border-slate-900 text-slate-900 text-[10px] font-black px-2.5 py-0.5 rounded-full uppercase tracking-widest shadow-[2px_2px_0px_0px_#0f172a]">Leaderboard</span>
                    <div class="w-10 h-10 bg-white border-2 border-slate-900 rounded-xl flex items-center justify-center shadow-[2px_2px_0px_0px_#0f172a]">
                        <i data-lucide="trophy" class="w-5 h-5 text-slate-900 stroke-[3]"></i>
                    </div>
                </div>
                <h3 class="text-xs font-black text-slate-900 uppercase tracking-widest mb-1 relative z-10">Tautan Terpopuler</h3>
                @if($topLink)
                    <p class="text-base font-black text-slate-900 relative z-10 truncate mb-2">{{ $topLink->title }}</p>
                    <span class="text-xs font-black bg-white px-2.5 py-1 rounded-lg border-2 border-slate-900 shadow-[2px_2px_0px_0px_#0f172a] text-slate-900 inline-block relative z-10">
                        🔥 {{ $topLink->clicks }} Klik
                    </span>
                @else
                    <p class="text-sm font-black text-slate-900 relative z-10">Belum ada data tersedia</p>
                @endif
            </div>

        </div>

        <!-- 2 & 3. CHARTS AREA: Warna Oranye/Kuning Hangat (#ffcc00) & Ungu/Pink Cerah (#ff99cc) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <!-- Bar Chart (7 Kolom) -->
            <div class="lg:col-span-7 bg-[#ffcc00] border-4 border-slate-900 rounded-3xl p-6 shadow-[6px_6px_0px_0px_#0f172a] flex flex-col justify-between">
                <div class="flex items-center justify-between border-b-4 border-slate-900 pb-3 mb-6">
                    <h3 class="text-sm md:text-base font-black text-slate-900 uppercase tracking-wider flex items-center gap-2">
                        <i data-lucide="bar-chart-3" class="w-5 h-5 text-slate-900 stroke-[3]"></i> Perbandingan Klik (Top 3)
                    </h3>
                    <span class="px-2.5 py-1 bg-white border-2 border-slate-900 text-[10px] font-black rounded-lg uppercase shadow-[2px_2px_0px_0px_#0f172a]">Bar View</span>
                </div>
                
                <div class="relative w-full h-80 bg-white/60 border-2 border-slate-900 rounded-2xl p-4 shadow-[4px_4px_0px_0px_#0f172a]">
                    <canvas id="barChart"></canvas>
                </div>
            </div>

            <!-- Doughnut Chart (5 Kolom) -->
            <div class="lg:col-span-5 bg-[#ff99cc] border-4 border-slate-900 rounded-3xl p-6 shadow-[6px_6px_0px_0px_#0f172a] flex flex-col justify-between">
                <div class="flex items-center justify-between border-b-4 border-slate-900 pb-3 mb-6">
                    <h3 class="text-sm md:text-base font-black text-slate-900 uppercase tracking-wider flex items-center gap-2">
                        <i data-lucide="pie-chart" class="w-5 h-5 text-slate-900 stroke-[3]"></i> Peminat Rasio
                    </h3>
                    <span class="px-2.5 py-1 bg-white border-2 border-slate-900 text-[10px] font-black rounded-lg uppercase shadow-[2px_2px_0px_0px_#0f172a]">Ratio View</span>
                </div>
                
                <div class="relative w-full h-80 flex justify-center items-center bg-white/60 border-2 border-slate-900 rounded-2xl p-4 shadow-[4px_4px_0px_0px_#0f172a]">
                    <canvas id="doughnutChart"></canvas>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- ========================================== -->
<!-- SCRIPT CHART.JS STABILO PALETTE          -->
<!-- ========================================== -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const chartLabels = @json($chartLabels);
    const chartData = @json($chartData);

    const bgColors = ['#ccff00', '#00ffff', '#ff99cc', '#ffcc00', '#ff6666'];
    const borderColors = ['#0f172a', '#0f172a', '#0f172a', '#0f172a', '#0f172a'];

    Chart.defaults.font.family = 'Inter, sans-serif';
    Chart.defaults.font.weight = 'bold';
    Chart.defaults.color = '#0f172a';

    const ctxBar = document.getElementById('barChart').getContext('2d');
    new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: chartLabels,
            datasets: [{
                label: 'Jumlah Klik',
                data: chartData,
                backgroundColor: bgColors,
                borderColor: borderColors,
                borderWidth: 3,
                borderRadius: 8,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: { precision: 0 },
                    grid: { color: '#cbd5e1', lineWidth: 2, borderDash: [4, 4] }
                },
                x: {
                    grid: { display: false }
                }
            },
            plugins: {
                legend: { display: false }
            }
        }
    });

    const ctxDoughnut = document.getElementById('doughnutChart').getContext('2d');
    new Chart(ctxDoughnut, {
        type: 'doughnut',
        data: {
            labels: chartLabels,
            datasets: [{
                data: chartData,
                backgroundColor: bgColors,
                borderColor: borderColors,
                borderWidth: 3,
                hoverOffset: 10
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { 
                    position: 'bottom',
                    labels: {
                        boxWidth: 15,
                        padding: 15,
                        font: { size: 11 }
                    }
                }
            }
        }
    });
</script>
@endsection