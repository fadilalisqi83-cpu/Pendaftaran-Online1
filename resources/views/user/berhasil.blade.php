<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil - PPDB</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #F8F9FA;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .success-card {
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            border: 1px solid #E5E7EB;
            text-align: center;
            max-width: 480px;
            width: 100%;
            margin: 20px;
        }

        .success-icon {
            width: 70px;
            height: 70px;
            background: #DCFCE7;
            color: #16A34A;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px auto;
        }

        .success-icon svg {
            width: 36px;
            height: 36px;
            stroke: currentColor;
        }

        .success-card h2 {
            font-size: 24px;
            color: #111827;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .success-card p {
            color: #4B5563;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .btn-dashboard {
            display: inline-block;
            background: #0284C7;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: background 0.2s;
            width: 100%;
        }

        .btn-dashboard:hover {
            background: #0369A1;
        }
    </style>
</head>
<body>

    <div class="success-card">
        <div class="success-icon">
            <svg fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
        </div>
        
        <h2>Pendaftaran Berhasil Dikirim!</h2>
        
        <p>
            Terima kasih telah melakukan pendaftaran. Data dan berkas Anda telah berhasil disimpan dan saat ini sedang menunggu proses verifikasi oleh panitia admin PPDB TK Islam Ar-Rasyid.
        </p>

        <a href="/user/dashboard" class="btn-dashboard">
            Kembali ke Dashboard
        </a>
    </div>

</body>
</html>