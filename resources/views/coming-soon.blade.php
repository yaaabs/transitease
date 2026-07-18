<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TransitEase is currently being updated. Stay tuned for the next version.">
    <meta name="robots" content="noindex, nofollow">
    <title>TransitEase | Updating</title>
    <link rel="icon" type="image/png" href="{{ asset('img/PLEASE.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4e73df;
            --primary-dark: #3559c8;
            --accent: #1cc88a;
            --surface: rgba(255,255,255,0.9);
            --text: #132238;
            --muted: #5b6b82;
            --border: rgba(78, 115, 223, 0.16);
        }

        * { box-sizing: border-box; }
        html, body { margin: 0; padding: 0; min-height: 100%; }
        body {
            font-family: 'Inter', 'Segoe UI', Roboto, Arial, sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at top left, rgba(78,115,223,0.12), transparent 28%),
                linear-gradient(135deg, #f7f9ff 0%, #eef3ff 45%, #f7fcfa 100%);
            overflow-x: hidden;
        }

        .page {
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 24px;
            position: relative;
        }

        .shape {
            position: absolute;
            border-radius: 999px;
            filter: blur(8px);
            opacity: 0.28;
            animation: float 9s ease-in-out infinite;
            pointer-events: none;
        }

        .shape-one { width: 220px; height: 220px; top: 8%; left: -40px; background: rgba(78,115,223,0.3); }
        .shape-two { width: 180px; height: 180px; right: -20px; bottom: 12%; background: rgba(28,200,138,0.24); animation-delay: -3s; }

        .card {
            position: relative;
            width: min(100%, 760px);
            padding: 40px 32px 32px;
            border: 1px solid var(--border);
            border-radius: 28px;
            background: var(--surface);
            box-shadow: 0 20px 60px rgba(19,34,56,0.12);
            backdrop-filter: blur(12px);
            animation: fadeUp 650ms ease both;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            border-radius: 999px;
            font-size: 0.82rem;
            font-weight: 700;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: var(--primary-dark);
            background: rgba(78,115,223,0.1);
            border: 1px solid rgba(78,115,223,0.16);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 20px;
        }

        .brand img {
            width: 54px;
            height: 54px;
            border-radius: 16px;
            object-fit: cover;
            box-shadow: 0 10px 22px rgba(78,115,223,0.18);
        }

        .brand h1 {
            margin: 0;
            font-size: 1.25rem;
            font-weight: 800;
            letter-spacing: -0.02em;
        }

        h2 {
            margin: 0 0 12px;
            font-size: clamp(1.9rem, 3vw, 2.7rem);
            line-height: 1.1;
            letter-spacing: -0.03em;
        }

        p {
            margin: 0;
            color: var(--muted);
            font-size: 1rem;
            line-height: 1.7;
        }

        .actions {
            margin-top: 24px;
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 18px;
            border-radius: 999px;
            text-decoration: none;
            font-weight: 700;
            transition: transform 180ms ease, box-shadow 180ms ease, background 180ms ease;
            border: 1px solid transparent;
        }

        .btn:hover,
        .btn:focus-visible {
            transform: translateY(-1px);
            box-shadow: 0 10px 24px rgba(19,34,56,0.12);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: white;
        }

        .btn-secondary {
            color: var(--primary-dark);
            border-color: rgba(78,115,223,0.2);
            background: rgba(255,255,255,0.7);
        }

        footer {
            margin-top: 24px;
            color: #6f7c8f;
            font-size: 0.95rem;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(12px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            50% { transform: translateY(-16px) translateX(10px); }
        }

        @media (max-width: 640px) {
            .card { padding: 28px 20px 24px; border-radius: 22px; }
            .brand { margin-bottom: 16px; }
            .brand img { width: 46px; height: 46px; }
            .actions { flex-direction: column; }
            .btn { width: 100%; }
        }
    </style>
</head>
<body>
    <main class="page">
        <div class="shape shape-one" aria-hidden="true"></div>
        <div class="shape shape-two" aria-hidden="true"></div>

        <section class="card" aria-labelledby="coming-soon-title">
            <div class="badge">Version Refresh</div>
            <div class="brand" style="margin-top: 16px;">
                <img src="{{ asset('img/Logoo.png') }}" alt="TransitEase logo">
                <h1>TransitEase</h1>
            </div>

            <h2 id="coming-soon-title">TransitEase is being updated.</h2>
            <p>We’re currently working on a newer version of TransitEase to provide a better commuting experience. Thank you for your patience while we prepare the next update.</p>

            <div class="actions">
                <a class="btn btn-primary" href="mailto:transitease@gmail.com">Contact Us</a>
                <a class="btn btn-secondary" href="https://www.facebook.com/TransitEasePH" target="_blank" rel="noopener noreferrer">Follow Updates</a>
            </div>

            <footer>© TransitEase</footer>
        </section>
    </main>
</body>
</html>
