@extends('layouts.app')
@section('title', 'Daftar Link - Admin Dashboard')

@section('content')
<div class="space-y-6 sm:space-y-8">
    
    <!-- Header Section: Warna Stabilo Lime (#ccff00) -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 sm:gap-6 bg-[#ccff00] p-5 sm:p-6 rounded-2xl sm:rounded-3xl border-4 border-slate-900 shadow-[6px_6px_0px_0px_#0f172a]">
        <div>
            <span class="bg-white text-slate-900 text-[10px] font-black px-3 py-0.5 rounded-full border-2 border-slate-900 uppercase tracking-widest shadow-[2px_2px_0px_0px_#0f172a] inline-block mb-2 rotate-[-1deg]">
                ⚡ Link Management
            </span>
            <h1 class="text-xl sm:text-2xl font-black text-slate-900 tracking-tight flex items-center gap-2.5 sm:gap-3">
                Kelola Tautan
            </h1>
            <p class="text-xs sm:text-sm text-slate-900 font-bold mt-1 sm:mt-1.5">Atur tautan bio Anda dengan gaya stabilo modern interaktif.</p>
        </div>
        <a href="{{ route('admin.links.create') }}"
        class="w-full sm:w-auto bg-[#00ffff] hover:bg-[#00cccc] text-slate-900 font-black py-3 sm:py-3.5 px-6 rounded-xl sm:rounded-2xl border-4 border-slate-900 shadow-[4px_4px_0px_0px_#0f172a] hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition-all flex items-center justify-center gap-2">
            <i data-lucide="plus" class="w-5 h-5 stroke-[3]"></i>
            Tambah Link Baru
        </a>
    </div>

    <!-- Data List Container -->
    <div class="bg-white rounded-2xl sm:rounded-3xl border-4 border-slate-900 shadow-[6px_6px_0px_0px_#0f172a] overflow-hidden flex flex-col">
        
        <!-- Table Header (Desktop Only) -->
        <div class="hidden lg:grid grid-cols-12 gap-4 bg-[#fde68a] text-slate-900 px-6 py-4 border-b-4 border-slate-900 text-xs font-black uppercase tracking-wider">
            <div class="col-span-5">Judul & URL</div>
            <div class="col-span-2">Status</div>
            <div class="col-span-3">Total Klik</div>
            <div class="col-span-2 text-right">Aksi</div>
        </div>

        <!-- Table Body -->
        <div class="divide-y-4 divide-slate-900 bg-white">
            @forelse($links as $link)
                <div class="flex flex-col lg:grid lg:grid-cols-12 gap-4 lg:gap-4 items-start lg:items-center p-4 sm:p-6 lg:p-6 hover:bg-[#ccff00]/20 transition-colors group">

                    <!-- 1. Judul & URL -->
                    <div class="lg:col-span-5 flex items-center space-x-3 sm:space-x-4 w-full">
                        @if($link->image)
                            <img src="{{ asset('storage/' . $link->image) }}" alt="{{ $link->title }}" class="flex-shrink-0 h-10 w-10 sm:h-12 sm:w-12 object-cover border-2 border-slate-900 rounded-lg sm:rounded-xl shadow-[2px_2px_0px_0px_#0f172a] bg-[#00ffff]">
                        @else
                            <div class="flex-shrink-0 h-10 w-10 sm:h-12 sm:w-12 bg-[#00ffff] text-slate-900 font-black border-2 border-slate-900 flex items-center justify-center rounded-lg sm:rounded-xl shadow-[2px_2px_0px_0px_#0f172a]">
                                {{ strtoupper(substr($link->title, 0, 2)) }}
                            </div>
                        @endif

                        <div class="overflow-hidden">
                            <div class="text-sm sm:text-base font-black text-slate-900 group-hover:text-indigo-600 transition-colors truncate">{{ $link->title }}</div>
                            <div class="text-xs font-bold text-slate-600 truncate mt-0.5">{{ $link->url }}</div>
                        </div>
                    </div>

                    <!-- Container Status & Klik di Mobile -->
                    <div class="flex flex-row lg:contents w-full gap-4 mt-2 lg:mt-0">
                        <!-- 2. Status -->
                        <div class="lg:col-span-2 flex flex-col lg:flex-row items-start lg:items-center flex-1">
                            <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider mb-1 lg:hidden">Status</span>
                            @if($link->is_active)
                                <span class="px-3 py-1 inline-flex text-xs font-black rounded-lg bg-[#a7f3d0] text-slate-900 border-2 border-slate-900 shadow-[2px_2px_0px_0px_#0f172a] items-center gap-1.5 whitespace-nowrap">
                                    <span class="w-2 h-2 bg-emerald-600 rounded-full border border-slate-900 animate-pulse"></span> Aktif
                                </span>
                            @else
                                <span class="px-3 py-1 inline-flex text-xs font-black rounded-lg bg-[#fecdd3] text-slate-900 border-2 border-slate-900 shadow-[2px_2px_0px_0px_#0f172a] items-center gap-1.5 whitespace-nowrap">
                                    <span class="w-2 h-2 bg-rose-600 rounded-full border border-slate-900"></span> Non-Aktif
                                </span>
                            @endif
                        </div>

                        <!-- 3. Total Klik -->
                        <div class="lg:col-span-3 flex flex-col lg:flex-row items-start lg:items-center flex-1">
                            <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider mb-1 lg:hidden">Statistik</span>
                            <div class="inline-flex items-center px-3 py-1 rounded-lg bg-[#ff99cc] border-2 border-slate-900 text-xs font-black text-slate-900 shadow-[2px_2px_0px_0px_#0f172a] whitespace-nowrap">
                                <i data-lucide="mouse-pointer-click" class="w-3.5 h-3.5 mr-1.5 stroke-[3]"></i>
                                {{ number_format($link->clicks) }} Klik
                            </div>
                        </div>
                    </div>

                    <!-- 4. Aksi (Edit & Hapus) -->
                    <div class="lg:col-span-2 flex items-center justify-start lg:justify-end space-x-2 w-full lg:w-auto mt-2 lg:mt-0 pt-4 lg:pt-0 border-t-2 border-dashed border-slate-300 lg:border-none">

                        <!-- Tombol Edit (Stabilo Cyan) -->
                        <a href="{{ route('admin.links.edit', $link->id) }}"
                           class="flex-1 lg:flex-none text-center px-4 py-2 bg-[#00ffff] text-slate-900 rounded-xl border-2 border-slate-900 shadow-[2px_2px_0px_0px_#0f172a] hover:bg-[#00cccc] text-xs font-black transition-all hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none">
                            Edit
                        </a>

                        <!-- Form Hapus (Stabilo Pink) -->
                        <form action="{{ route('admin.links.destroy', $link->id) }}"
                              method="POST"
                              class="flex-1 lg:flex-none m-0"
                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus tautan ini? Berkas gambar terkait juga akan terhapus secara permanen.');">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="w-full text-center px-4 py-2 bg-[#ff66b2] text-slate-900 rounded-xl border-2 border-slate-900 shadow-[2px_2px_0px_0px_#0f172a] hover:bg-[#ff3385] text-xs font-black transition-all hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none">
                                Hapus
                            </button>
                        </form>
                    </div>

                </div>
            @empty
                <!-- Empty State -->
                <div class="px-6 py-16 text-center">
                    <div class="flex flex-col items-center justify-center max-w-sm mx-auto p-6 bg-[#fde68a] rounded-3xl border-4 border-slate-900 shadow-[4px_4px_0px_0px_#0f172a]">
                        <div class="bg-[#ccff00] p-3 rounded-2xl border-2 border-slate-900 shadow-[2px_2px_0px_0px_#0f172a] mb-3 text-slate-900">
                            <i data-lucide="inbox" class="w-6 h-6 stroke-[3]"></i>
                        </div>
                        <p class="text-base font-black text-slate-900">Belum ada data link.</p>
                        <p class="text-xs font-bold text-slate-700 mt-1">Silakan tambahkan tautan baru untuk mulai membagikannya.</p>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Pagination Section -->
        @if($links->hasPages())
            <div class="bg-[#f8fafc] border-t-4 border-slate-900 px-6 py-4">
                {{ $links->links('vendor.pagination.custom') }}
            </div>
        @endif

    </div>
</div>
@endsection