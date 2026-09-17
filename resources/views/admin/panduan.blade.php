<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panduan Pengisian Formulir - PPDB</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            display: flex;
            background: #FAFAF9; 
            color: #44403C;
            min-height: 100vh;
        }

        svg {
            fill: none;
            stroke: currentColor;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .sidebar {
            width: 260px;
            background: #FFFFFF;
            display: flex;
            flex-direction: column;
            border-right: 1px solid #E7E5E4;
            position: sticky;
            top: 0;
            height: 100vh;
        }

        .sidebar-header {
            padding: 30px 25px;
        }

        .sidebar-header h1 {
            color: #78350F;
            font-size: 22px;
            font-weight: 700;
        }

        .sidebar-menu {
            flex: 1;
            padding: 0 15px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            color: #78716C;
            text-decoration: none;
            padding: 12px 15px;
            margin-bottom: 5px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 500;
            transition: all 0.2s;
        }

        .sidebar-menu a svg {
            width: 20px;
            height: 20px;
            margin-right: 12px;
        }

        .sidebar-menu a:hover {
            background: #FEF3C7;
            color: #78350F;
        }

        .sidebar-menu a.active {
            background: #D97706;
            color: white;
            box-shadow: 0 2px 4px rgba(217, 119, 6, 0.2);
        }

        .sidebar-footer {
            padding: 20px;
            border-top: 1px dashed #D6D3D1;
        }

        .user-profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .user-avatar {
            width: 36px;
            height: 36px;
            background: #10B981;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 12px;
        }

        .user-avatar svg {
            width: 20px;
            height: 20px;
        }

        .user-info {
            display: flex;
            flex-direction: column;
        }

        .user-info .name {
            font-size: 14px;
            font-weight: 600;
            color: #292524;
        }

        .user-info .email {
            font-size: 12px;
            color: #78716C;
        }

        .logout-btn {
            display: flex;
            align-items: center;
            width: 100%;
            background: none;
            border: none;
            color: #DC2626;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            padding: 10px 12px;
            border-radius: 8px;
            transition: 0.2s;
            text-align: left;
        }

        .logout-btn:hover {
            background: #FEE2E2;
        }

        .logout-btn svg {
            width: 18px;
            height: 18px;
            margin-right: 10px;
        }

        .main {
            flex: 1;
            padding: 40px 50px;
            overflow-y: auto;
        }

        .page-header {
            margin-bottom: 40px;
        }

        .page-header h2 {
            font-size: 32px;
            color: #292524;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .page-header p {
            font-size: 18px;
            color: #57534E;
            line-height: 1.5;
            max-width: 600px;
        }

        .section-title {
            display: flex;
            align-items: center;
            font-size: 22px;
            color: #292524;
            font-weight: 600;
            margin-bottom: 25px;
        }

        .section-title::after {
            content: "";
            flex: 1;
            height: 1px;
            background: #E7E5E4;
            margin-left: 20px;
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 20px;
            position: relative;
        }

        .steps-grid::before {
            content: "";
            position: absolute;
            top: 40px;
            left: 16%;
            right: 16%;
            height: 2px;
            background: #E7E5E4;
            z-index: 0;
        }

        .step-card {
            background: white;
            border: 1px solid #E7E5E4;
            border-radius: 12px;
            padding: 24px;
            text-align: center;
            position: relative;
            z-index: 1;
            box-shadow: 0 1px 3px rgba(0,0,0,0.02);
        }

        .step-number {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
            margin: 0 auto 15px auto;
        }

        .step-active .step-number {
            background: #D97706;
            color: white;
            box-shadow: 0 0 0 4px white;
        }

        .step-inactive .step-number {
            background: #E7E5E4;
            color: #57534E;
            box-shadow: 0 0 0 4px white;
        }

        .step-card h4 {
            color: #292524;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .step-card p {
            color: #78716C;
            font-size: 13px;
            line-height: 1.5;
        }

        .action-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
        }

        .card-main {
            background: white;
            border: 1px solid #E7E5E4;
            border-radius: 12px;
            padding: 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 1px 3px rgba(0,0,0,0.02);
        }

        .card-main-content {
            max-width: 60%;
        }

        .tag {
            display: inline-flex;
            align-items: center;
            color: #D97706;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
        }

        .tag svg {
            width: 14px;
            height: 14px;
            margin-right: 6px;
        }

        .card-main h3 {
            font-size: 24px;
            color: #292524;
            margin-bottom: 12px;
        }

        .card-main p {
            color: #57534E;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            background: #D97706;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.2s;
        }

        .btn-primary:hover {
            background: #B45309;
        }

        .btn-primary svg {
            width: 16px;
            height: 16px;
            margin-left: 8px;
        }

        .card-main-image {
            width: 180px;
            height: 180px;
            background: #FEF3C7;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
        }

        .card-help {
            background: white;
            border: 1px solid #E7E5E4;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.02);
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .icon-circle {
            width: 48px;
            height: 48px;
            background: #FDE68A;
            color: #B45309;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .icon-circle svg {
            width: 24px;
            height: 24px;
        }

        .card-help h3 {
            font-size: 18px;
            color: #292524;
            margin-bottom: 10px;
        }

        .card-help p {
            color: #78716C;
            font-size: 13px;
            line-height: 1.5;
            margin-bottom: 25px;
        }

        .btn-outline {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            border: 1px solid #D97706;
            color: #D97706;
            padding: 10px 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.2s;
        }

        .btn-outline:hover {
            background: #FFFBEB;
        }

        .btn-outline svg {
            width: 16px;
            height: 16px;
            margin-right: 8px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <div class="sidebar-header">
        <h1>Dashboard Admin</h1>
    </div>
    
    <div class="sidebar-menu">
        <a href="/admin/dashboard">
            <svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/></svg>
            Dashboard
        </a>
        <a href="/admin/data-pendaftar">
            <svg viewBox="0 0 24 24"><path d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
            Data Pendaftar
        </a>
        <a href="/admin/pengumuman">
            <svg viewBox="0 0 24 24"><path d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
            Kelola Pengumuman
        </a>
        <a href="/admin/panduan" class="active">
            <svg viewBox="0 0 24 24"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            Formulir Pendaftaran
        </a>
    </div>

    <div class="sidebar-footer">
        <div class="user-profile">
            <div class="user-avatar">
                <svg viewBox="0 0 24 24"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            </div>
            <div class="user-info">
                <span class="name">{{ Auth::user()->name }}</span>
                <span class="email">{{ Auth::user()->email ?? 'admin@gmail.com' }}</span>
            </div>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn">
                <svg viewBox="0 0 24 24"><path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                Logout
            </button>
        </form>
    </div>
</div>

<div class="main">
    <div class="page-header">
        <h2>Panduan Pengisian Formulir</h2>
        <p>Mohon perhatikan alur dan panduan pengisian formulir di bawah ini</p>
    </div>

    <div class="section-title">Alur Pendaftaran</div>

    <div class="steps-grid">
        <div class="step-card step-active">
            <div class="step-number">1</div>
            <h4>Isi Formulir</h4>
            <p>Lengkapi data diri ananda dan orang tua dengan akurat pada formulir pendaftaran.</p>
        </div>
        <div class="step-card step-inactive">
            <div class="step-number">2</div>
            <h4>Unggah Dokumen</h4>
            <p>Siapkan dan unggah dokumen pendukung seperti Akta Kelahiran dan Kartu Keluarga.</p>
        </div>
        <div class="step-card step-inactive">
            <div class="step-number">3</div>
            <h4>Verifikasi</h4>
            <p>Tunggu proses verifikasi dari pihak sekolah. Hasil akan diumumkan melalui dashboard ini.</p>
        </div>
    </div>

    <div class="action-grid">
        <div class="card-main">
            <div class="card-main-content">
                <div class="tag">
                    <svg viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    MULAI PERJALANAN
                </div>
                <h3>Mulai Pendaftaran Ananda</h3>
                <p>Bergabunglah dengan lingkungan belajar yang terstruktur, aman, dan penuh kegembiraan. Isi formulir sederhana kami untuk memulai proses seleksi.</p>
                <a href="{{ route('admin.formulir.create') }}" class="btn-primary">
                    Isi Formulir Sekarang
                    <svg viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            
            <div class="card-main-image">
                🧒
            </div>
        </div>

        <div class="card-help">
            <div class="icon-circle">
                <svg viewBox="0 0 24 24"><path d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            </div>
            <h3>Butuh Bantuan?</h3>
            <p>Tim admisi kami siap membantu Anda di setiap langkah. Jangan ragu untuk menghubungi kami jika ada pertanyaan.</p>
            <a href="https://wa.me/6285892399786" target="_blank" class="btn-outline">
                <svg viewBox="0 0 24 24"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                Hubungi Admin
            </a>
        </div>
    </div>
</div>

</body>
</html> 