<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TK Islam Ar-Rasyid</title>
    <!-- Import Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            height: 100vh;
            background-color: #f9fafb; /* Warna background abu-abu muda */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background-color: #ffffff;
            width: 100%;
            max-width: 420px;
            padding: 40px 32px;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.04);
            border: 1px solid #f3f4f6;
            .card {
            background-color: #ffffff;
            width: 100%;
            max-width: 420px;
            padding: 40px 32px;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.04);
            border: 1px solid #f3f4f6;
            position: relative; 
            z-index: 50; 
        }
        }
        .card-header {
            text-align: center;
            margin-bottom: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .icon-box {
            width: 56px;
            height: 56px;
            background-color: #ffffff;
            border: 1px solid #f3f4f6;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            border-radius: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
            color: #005bb5;
        }

        .card-header h1 {
            color: #005bb5;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .card-header p {
            color: #6b7280;
            font-size: 13px;
            line-height: 1.5;
            max-width: 280px;
        }

        .card-footer {
            text-align: center;
            margin-top: 24px;
            font-size: 13px;
            color: #6b7280;
            .card {
            background-color: #ffffff;
            width: 100%;
            max-width: 420px;
            padding: 40px 32px;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.04);
            border: 1px solid #f3f4f6;
            position: relative; 
            z-index: 50; 
        }
        }

        .card-footer a {
            color: #005bb5;
            font-weight: 500;
            text-decoration: none;
        }

        .card-footer a:hover {
            text-decoration: underline;
        }

        /* --- Bagian Form --- */
        .form-group {
            margin-bottom: 20px;
        }

        .form-label-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px;
        }

        .form-label {
            font-size: 13px;
            font-weight: 600;
            color: #374151;
        }

        .link-lupa-sandi {
            font-size: 12px;
            color: #005bb5;
            text-decoration: none;
            font-weight: 500;
        }

        .link-lupa-sandi:hover {
            text-decoration: underline;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            top: 50%;
            left: 14px;
            transform: translateY(-50%);
            color: #9ca3af;
            width: 20px;
            height: 20px;
        }

        .form-input {
            width: 100%;
            padding: 10px 16px 10px 44px; /* Padding kiri lebih besar untuk tempat ikon */
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            font-size: 14px;
            color: #1f2937;
            outline: none;
            transition: 0.3s;
        }

        .form-input::placeholder {
            color: #9ca3af;
        }

        .form-input[type="password"] {
            letter-spacing: 2px;
        }

        .form-input:focus {
            border-color: #005bb5;
            box-shadow: 0 0 0 1px #005bb5;
        }

        /* --- Tombol --- */
        .btn-primary {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            width: 100%;
            background-color: #005bb5;
            color: #ffffff;
            padding: 10px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 24px;
        }

        .btn-primary:hover {
            background-color: #004a94;
        }

        /* --- Footer --- */
        
    </style>
</head>
<body>

    <div class="card">
        
        <!-- Header -->
        <div class="card-header">
            <div class="icon-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 10v6M2 10l-10-5-10 5 10 5z"/>
                    <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                </svg>
            </div>
            <h1>TK Islam Ar-Rasyid</h1>
            <p>Tempat anak memulai pendidikan menuju masa depan yg cerah, cerdas dan islami</p>
        </div>

        <!-- Form -->
        <form action="{{ route('login') }}" method="POST">
            @csrf
            @if ($errors->any())
    <div style="background-color: #fee2e2; color: #b91c1c; padding: 12px; border-radius: 8px; margin-bottom: 16px; font-size: 13px;">
        <ul style="margin-left: 20px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="form-group">
                <div class="form-label-container">
                    <label class="form-label">Email atau Username</label>
                </div>
                <div class="input-wrapper">
                    <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                        <circle cx="12" cy="7" r="4"/>
                    </svg>
                    <input type="email" name="email" class="form-input" placeholder="Masukkan email" required>
                </div>
            </div>

            <div class="form-group">
                <div class="form-label-container">
                    <label class="form-label">Kata Sandi</label>
                    <a href="#" class="link-lupa-sandi">Lupa Sandi?</a>
                </div>
                <div class="input-wrapper">
                    <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                    </svg>
                    <input type="password" name="password" class="form-input" placeholder="••••••••" required>
                </div>
            </div>

            <button type="submit" class="btn-primary">
                Masuk Sekarang
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                    <polyline points="10 17 15 12 10 7"/>
                    <line x1="15" y1="12" x2="3" y2="12"/>
                </svg>
            </button>
            
        </form>

        <!-- Footer -->
        <div class="card-footer">
            Belum punya akun? <a href="{{ route('register') }}">Daftar sekarang</a>
        </div>

    </div>

</body>
</html>