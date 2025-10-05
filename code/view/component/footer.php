<?php

namespace hahaha\view\component;

class footer
{
    use \hahaha\instance;

	// 建構子
    public function __construct() {
 
    }
    //
    public function view()
    {
?>
<!-- Footer -->
<footer class="border-t border-slate-200 dark:border-slate-800 mt-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex items-center justify-between">
        <div class="text-sm">© <span id="year"></span> hahaha. 版權所有。</div>
        <div class="text-sm text-slate-500">Made In Taiwan</div>
    </div>
</footer>
<?php

    }
}
