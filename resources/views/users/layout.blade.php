<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title', 'Users')</title>
    <style>
        :root{--accent:#6d28d9;--accent-2:#06b6d4;--muted:#6b7280}
        body{font-family:Inter,Arial,Helvetica,sans-serif;background:linear-gradient(120deg,#f8fafc, #fff);margin:0;color:#111}
        .topbar{background:linear-gradient(90deg,var(--accent),var(--accent-2));color:#fff;padding:18px 24px}
        .container{max-width:980px;margin:22px auto;padding:0 16px}
        .card{background:#fff;border-radius:12px;box-shadow:0 6px 18px rgba(20,20,40,0.06);padding:18px;margin-bottom:14px}
        .btn{display:inline-block;padding:8px 14px;border-radius:10px;text-decoration:none;color:#fff;background:var(--accent);transition:transform .12s ease;}
        .btn.secondary{background:transparent;color:var(--accent);border:1px solid rgba(109,40,217,0.12)}
        .btn:hover{transform:translateY(-2px)}
        .muted{color:var(--muted)}
        .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:12px}
        form input,form button,form textarea{font-size:14px}
        .field{margin-bottom:10px}
        input[type=text],input[type=email],input[type=password],textarea{width:100%;padding:10px;border-radius:8px;border:1px solid #e6e8eb}
        .flash{padding:10px;border-radius:8px;margin-bottom:12px;background:linear-gradient(90deg,rgba(6,182,212,0.08),rgba(109,40,217,0.06));border:1px solid rgba(109,40,217,0.06)}
        a.logo{font-weight:700;color:#fff;text-decoration:none}
    </style>
</head>
<body>
    <div class="topbar">
        <div class="container">
            <a class="logo" href="/">SmartStudy</a>
        </div>
    </div>
    <div class="container">
        @if(session('success'))
            <div class="flash">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>
</body>
</html>
