<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home - {{ $nama_kampus }}</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            background: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }

        /* HEADER */
        header {
            display: flex;
            align-items: center;
            gap: 25px;
            padding-bottom: 20px;
            border-bottom: 2px solid #e0e0e0;
        }

        header img {
            width: 120px;
            height: auto;
        }

        header h1 {
            margin: 0;
            font-size: 32px;
            color: #1a237e;
        }

        header p {
            margin: 6px 0 0;
            font-size: 16px;
            color: #555;
        }

        /* SECTION */
        section {
            margin-top: 35px;
        }

        section h2 {
            font-size: 24px;
            color: #1a237e;
            margin-bottom: 15px;
            border-left: 5px solid #1a237e;
            padding-left: 10px;
        }

        ul {
            padding-left: 20px;
        }

        ul li {
            margin-bottom: 8px;
            line-height: 1.6;
        }

        /* SEJARAH */
        .sejarah p {
            text-align: justify;
            margin-bottom: 15px;
            line-height: 1.8;
        }

        /* FOOTER */
        footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            font-size: 14px;
            color: #777;
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                text-align: center;
            }

            header img {
                width: 100px;
            }
        }
    </style>
</head>
<body>

<div class="container">

    <header>
        <img src="{{ asset($logo) }}" alt="Logo Kampus">
        <div>
            <h1>{{ $nama_kampus }}</h1>
            <p><em>{{ $slogan }}</em></p>
        </div>
    </header>

    <section>
        <h2>Visi</h2>
        <ul>
            @foreach ($visi as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </section>

    <section>
        <h2>Misi</h2>
        <ul>
            @foreach ($misi as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </section>

    <section class="sejarah">
        <h2>Sejarah Singkat</h2>
        @foreach ($sejarah as $paragraf)
            <p>{{ $paragraf }}</p>
        @endforeach
    </section>

    <footer>
        © {{ date('Y') }} {{ $nama_kampus }} | Company Orientation Project
    </footer>

</div>

</body>
</html>
