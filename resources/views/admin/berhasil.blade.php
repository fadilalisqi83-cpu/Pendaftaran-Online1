<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil - Admin</title>
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

        .btn-group {
            display: flex;
            gap: 10px;
        }

        .btn-primary {
            flex: 1;
            background: #0284C7;
            color: white;
            padding: 12px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: background 0.2s;
            display: inline-block;
        }

        .btn-primary:hover {
            background: #0369A1;
        }

        .btn-secondary {
            flex: 1;
            background: #F3F4F6;
            color: #374151;
            padding: 12px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: background 0.2s;
            display: inline-block;
        }

        .btn-secondary:hover {
            background: #E5E7EB;
        }
    </style>
</head>
<body>

    <div class="success-card">
        <div class="success-icon">
            <svg fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
        </div>
        
        <h2>Data Berhasil Disimpan!</h2>
        
        <p>
            Data pendaftar baru telah berhasil dimasukkan ke dalam sistem oleh admin. Anda dapat melihat daftar lengkapnya atau kembali menambahkan data siswa lainnya.
        </p>

        <div class="btn-group">
            <a href="/admin/formulir" class="btn-secondary">Tambah Lagi</a>
            <a href="/admin/data-pendaftar" class="btn-primary">Lihat Data</a>
        </div>
    </div>

</body>
</html>