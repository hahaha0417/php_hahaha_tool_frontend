<!doctype html>
<html lang="zh-Hant">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>hahaha</title>
        <!-- Tailwind CDN for quick prototyping -->
        <script src="https://cdn.tailwindcss.com"></script>
        <meta name="description" content="hahaha" />
        <style>
            /* 小量自訂樣式 */
            .glass {
            background: rgba(255,255,255,0.6);
            backdrop-filter: blur(6px);
            }
        </style>
    </head>
    <body class="bg-slate-50 text-slate-800 dark:bg-slate-900 dark:text-slate-100">
        <?php \hahaha\view\component\nav::instance()->view(); ?>
        
        <!-- Hero -->
        @yield('content')

        <?php \hahaha\view\component\footer::instance()->view(); ?>
        
        
        <script>
            // Year
            document.getElementById('year').textContent = new Date().getFullYear();
            
            // Mobile menu
            const menuBtn = document.getElementById('menuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            menuBtn.addEventListener('click', ()=> mobileMenu.classList.toggle('hidden'));
            
            // Dark mode toggle
            const darkToggle = document.getElementById('darkToggle');
            darkToggle?.addEventListener('click', ()=>{
              document.documentElement.classList.toggle('dark');
              // Persist choice
              const isDark = document.documentElement.classList.contains('dark');
              localStorage.setItem('prefer-dark', isDark ? '1' : '0');
            });
            // Load preference
            if(localStorage.getItem('prefer-dark') === '1') document.documentElement.classList.add('dark');
            
            // Contact form demo (不會真的送出)
            const form = document.getElementById('contactForm');
            const status = document.getElementById('formStatus');
            form.addEventListener('submit', (e)=>{
              e.preventDefault();
              const data = new FormData(form);
              status.textContent = '送出中...';
              setTimeout(()=>{
                status.textContent = '已送出，感謝你的訊息！(此範例不會實際送出)';
                form.reset();
              }, 700);
            });
        </script>

        <style>
        * { box-sizing: border-box; }
        body { font-family: sans-serif; margin: 0; }

        .carousel {
            position: relative;
            width: 600px;
            height: 350px;
            margin: 30px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: 100%;
        }

        .slide {
            min-width: 100%;
            transition: opacity 0.5s;
        }

        .slide img {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }

        .nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .nav button {
            background-color: rgba(0,0,0,0.5);
            border: none;
            color: #fff;
            font-size: 2em;
            padding: 5px 15px;
            cursor: pointer;
            border-radius: 6px;
        }

        .nav button:hover {
            background-color: rgba(0,0,0,0.8);
        }
        </style>
    </body>
</html>