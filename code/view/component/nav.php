<?php

namespace hahaha\view\component;

class nav
{
    use \hahaha\instance;

	// 建構子
    public function __construct() {
 
    }
    //

    public function view()
    {
?>
<!-- 頂部導覽列 -->
<header class="sticky top-0 z-40 bg-white/60 dark:bg-slate-900/60 glass backdrop-blur-md border-b border-slate-200 dark:border-slate-800">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center gap-4">
                <a class="flex items-center gap-2" href="#">
                    <svg class="w-8 h-8 text-indigo-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="3" width="7" height="7" rx="1" fill="currentColor"/>
                        <rect x="14" y="3" width="7" height="7" rx="1" fill="currentColor" opacity="0.6"/>
                        <rect x="3" y="14" width="7" height="7" rx="1" fill="currentColor" opacity="0.35"/>
                    </svg>
                    <span class="font-semibold">MyProduct</span>
                </a>
                <nav class="hidden md:flex gap-4 ml-6">
                    <a href="#features" class="py-2 px-3 rounded hover:bg-slate-100 dark:hover:bg-slate-800">hahaha</a>
                    <a href="#pricing" class="py-2 px-3 rounded hover:bg-slate-100 dark:hover:bg-slate-800">AV</a>
                    <a href="#contact" class="py-2 px-3 rounded hover:bg-slate-100 dark:hover:bg-slate-800">❤</a>
                </nav>
            </div>
            <div class="flex items-center gap-3">
                <button id="darkToggle" class="hidden md:inline-flex items-center gap-2 px-3 py-2 rounded border border-slate-200 dark:border-slate-700">切換主題</button>
                <a href="#" class="inline-flex items-center px-4 py-2 rounded bg-indigo-600 text-white shadow hover:opacity-95">O .O</a>
                <button id="menuBtn" class="md:hidden p-2">☰</button>
            </div>
        </div>
    </div>
    <!-- mobile menu -->
    <div id="mobileMenu" class="md:hidden hidden px-4 pb-4">
        <a class="block py-2" href="#features">hahaha</a>
        <a class="block py-2" href="#pricing">AV</a>
        <a class="block py-2" href="#contact">❤</a>
    </div>
</header>
<?php

    }
}
