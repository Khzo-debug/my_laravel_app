<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami - LaraPress</title>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaraPress</title>
    <style>
        /* Reset & Base Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background-color: #f8fafc;
            color: #334155;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* Card Container */
        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        /* Headings & Text */
        h1 {
            color: #0f172a;
            font-size: 1.75rem;
            margin-bottom: 12px;
        }

        p {
            color: #64748b;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 24px;
        }

        /* Buttons & Links */
        a {
            display: inline-block;
            text-decoration: none;
            color: #ffffff;
            background-color: #ef4444; /* Warna khas Laravel */
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 500;
            transition: background-color 0.2s ease;
        }

        a:hover {
            background-color: #dc2626;
        }

        /* Link khusus di dalam teks */
        p a {
            background: none;
            color: #ef4444;
            padding: 0;
            border-radius: 0;
        }

        p a:hover {
            background: none;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Tentang LaraPress</h1>
    <p>LaraPress adalah sebuah proyek blog sederhana yang dibuat untuk mempelajari dasar-dasar framework Laravel 12.</p>
    <a href="/">Kembali ke Halaman Utama</a>
    <a href="/kontak">Lihat Halaman Kontak</a>
</body>
</html>
