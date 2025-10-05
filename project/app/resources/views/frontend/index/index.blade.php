@extends('frontend.layout')


@section('content')
    <main>
        <section class="bg-gradient-to-br from-indigo-50 to-white dark:from-slate-800 dark:to-slate-900">
            <header style="width:100%; height:650px; overflow:hidden;">
                <img src="image/av/圖.png" alt="Header" style="width:100%; object-fit:contain; background-color:#000;">

            </header>
            <div class="carousel">
                <div class="slides">
                    <div class="slide"><img src="image/av/冬月楓.jpg" alt="image 3"></div>
                    <div class="slide"><img src="image/av/輝月あんり.jpg" alt="image 3"></div>
                    <div class="slide"><img src="image/av/明里紬.jpg" alt="image 3"></div>
                    <div class="slide"><img src="image/av/七沢みあ.jpg" alt="image 3"></div>
                    <div class="slide"><img src="image/av/希咲那奈.jpg" alt="image 2"></div>
                    <div class="slide"><img src="image/av/倉本蓳.jpg" alt="image 3"></div>
                    <div class="slide"><img src="image/av/五十嵐清華.jpg" alt="image 1"></div>
                    <div class="slide"><img src="image/av/白上咲花.jpg" alt="image 3"></div>
                </div>
                <div class="nav">
                    <button id="prev">&#10094;</button>
                    <button id="next">&#10095;</button>
                </div>
            </div>
            <script>
                const slides = document.querySelector('.slides');
                const slideCount = document.querySelectorAll('.slide').length;
                let index = 0;
                
                document.getElementById('next').addEventListener('click', () => {
                index = (index + 1) % slideCount;
                slides.style.transform = `translateX(-${index * 100}%)`;
                });
                
                document.getElementById('prev').addEventListener('click', () => {
                index = (index - 1 + slideCount) % slideCount;
                slides.style.transform = `translateX(-${index * 100}%)`;
                });
                
                // 自動播放
                setInterval(() => {
                index = (index + 1) % slideCount;
                slides.style.transform = `translateX(-${index * 100}%)`;
                }, 4000);
            </script>
        </section>
        <!-- Features -->
        <section id="features" class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <h2 class="text-2xl font-bold">hahaha</h2>
            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-6">
                <div class="p-6 bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-300">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">🎨 UI 設計</h3>
                    <p class="text-sm text-slate-500">\ ^ O ^ /</p>
                </div>

                <div class="p-6 bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-300">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">⚙️ 系統開發</h3>
                    <p class="text-sm text-slate-500">O .O</p>
                </div>

                <div class="p-6 bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-300">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">🚀 專案整合</h3>
                    <p class="text-sm text-slate-500">^ O &lt;</p>
                </div>
            </div>

        </section>
        
    </main>
@endsection