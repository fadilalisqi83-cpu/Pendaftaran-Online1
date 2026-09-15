<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Siswa - PPDB</title>
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

        /* --- SIDEBAR --- */
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
            stroke: currentColor;
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

        .sidebar-footer form {
            width: 100%;
        }

        .user-profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            background: #14B8A6;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 12px;
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
            color: #EA580C;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            padding: 10px 12px;
            border-radius: 8px;
            transition: 0.2s;
            text-align: left;
        }

        .logout-btn:hover {
            background: #FFEDD5;
        }

        .logout-btn svg {
            width: 20px;
            height: 20px;
            margin-right: 10px;
            stroke: currentColor;
        }

        /* --- MAIN CONTENT --- */
        .main {
            flex: 1;
            padding: 40px;
            overflow-y: auto;
        }

        /* --- ALERT BOX --- */
        .alert-box {
            padding: 14px 18px;
            border-radius: 12px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 12px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        }
        .alert-box .icon { font-size: 20px; }
        .alert-box .content strong { display: block; font-size: 14px; margin-bottom: 2px; }
        
        .alert-success { background: #ECFDF5; border: 1px solid #A7F3D0; color: #065F46; }
        .alert-success .desc { color: #047857; font-size: 13px; }

        .alert-warning { background: #FEF2F2; border: 1px solid #FCA5A5; color: #991B1B; }
        .alert-warning .desc { color: #B91C1C; font-size: 13px; }

        /* --- WELCOME CARD (BAGIAN ATAS) --- */
        .welcome-card {
            background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%);
            border: 1px solid #FDE68A;
            border-left: 6px solid #D97706;
            border-radius: 16px;
            padding: 25px 30px;
            margin-bottom: 25px;
            box-shadow: 0 4px 15px rgba(217, 119, 6, 0.05);
        }
        .welcome-card h2 {
            font-size: 24px;
            color: #78350F;
            font-weight: 700;
        }

        /* --- STATUS CARD --- */
        .status-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 25px 30px;
            margin-bottom: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
            border: 1px solid #E7E5E4;
        }
        .status-title {
            margin-bottom: 8px;
            font-size: 18px;
            font-weight: 700;
        }
        .status-text {
            font-size: 14px;
            margin-bottom: 18px;
            line-height: 1.6;
        }

        .status-accepted { border-left: 6px solid #10B981; background: #ECFDF5; border-color: #A7F3D0; }
        .status-accepted .status-title { color: #065F46; }
        .status-accepted .status-text { color: #047857; }

        .status-waiting { border-left: 6px solid #EA580C; background: #FFF7ED; border-color: #FED7AA; }
        .status-waiting .status-title { color: #9A3412; }
        .status-waiting .status-text { color: #C2410C; }

        .status-pending { border-left: 6px solid #D97706; background: #FEF3C7; border-color: #FDE68A; }
        .status-pending .status-title { color: #92400E; }
        .status-pending .status-text { color: #B45309; }

        .status-default { border-left: 6px solid #D97706; background: #FFFFFF; }
        .status-default .status-title { color: #78350F; }
        .status-default .status-text { color: #57534E; }

        /* --- TOMBOL AKSI --- */
        .btn-status {  
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 11px 20px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            color: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            transition: all 0.2s ease;
        }
        .btn-status:hover { transform: translateY(-1px); }
        .btn-green { background: #10B981; }
        .btn-whatsapp { background: #25D366; }
        .btn-orange { background: #D97706; }

        /* --- SECTION PENGUMUMAN --- */
        .section-box {
            background: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
            border: 1px solid #E7E5E4;
            margin-top: 25px;
        }
        .section-box h3.section-heading {
            font-size: 18px;
            color: #292524;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
            border-bottom: 2px solid #F5F5F4;
            padding-bottom: 12px;
        }

        .announcement-card {
            background: #FAFAF9;
            border: 1px solid #E7E5E4;
            border-radius: 12px;
            padding: 20px 24px;
            border-left: 5px solid #14B8A6  ; 
            margin-bottom: 15px;
            transition: all 0.2s;
            overflow-wrap: break-word;
        }
        .announcement-card:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,0.04);
        }
        .announcement-card h4 {
            font-size: 17px;
            color: #78350F;
            margin-bottom: 6px;
        }
        .announcement-card .date {
            font-size: 12px;
            color: #78716C;
            margin-bottom: 12px;
            display: block;
            font-weight: 500;
        }
        .announcement-card p {
            color: #57534E;
            font-size: 14px;
            line-height: 1.6;
        } 
    </style>
</head>
<body>

<div class="sidebar">
    <div class="sidebar-header">
        <h1>Dashboard Siswa</h1>
    </div>
    
    <div class="sidebar-menu">
        <a href="/user/dashboard" class="active">
            <svg fill="none" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1" stroke-width="2"/><rect x="14" y="3" width="7" height="7" rx="1" stroke-width="2"/><rect x="14" y="14" width="7" height="7" rx="1" stroke-width="2"/><rect x="3" y="14" width="7" height="7" rx="1" stroke-width="2"/></svg>
            Dashboard
        </a>
        <a href="/user/formulir">
            <svg fill="none" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            Formulir Pendaftaran
        </a>
        <a href="/user/pengumuman">
            <svg fill="none" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
            Pengumuman
        </a>
    </div>

    <div class="sidebar-footer">
        <div class="user-profile">
            <div class="user-avatar">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            </div>
            <div class="user-info">
                <span class="name">{{ Auth::user()->name }}</span>
                <span class="email">{{ Auth::user()->email ?? 'user@gmail.com' }}</span>
            </div>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn">
                <svg fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                Logout
            </button>
        </form>
    </div>
</div>

<div class="main">

    <!-- NOTIFIKASI SESSION -->
    @if(session('success'))
        <div class="alert-box alert-success">
            <span class="icon">✨</span>
            <div class="content">
                <strong>Berhasil!</strong>
                <span class="desc">{{ session('success') }}</span>
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="alert-box alert-warning">
            <span class="icon">📌</span>
            <div class="content">
                <strong>Perhatian, Ayah/Bunda</strong>
                <span class="desc">{{ session('error') }}</span>
            </div>
        </div>
    @endif

    <!-- KARTU SAMBUTAN UTAMA -->
    <div class="welcome-card">
        <h2>Halo👋, Ayah/Bunda {{ Auth::user()->name }}!</h2>
        <p style="color: #92400E; font-size: 15px; margin-top: 6px;">Selamat datang di portal pendaftaran peserta didik baru TK. Silakan pantau status pendaftaran Ananda di bawah ini.</p>
    </div>

    <!-- KONTEN DINAMIS BERDASARKAN STATUS PENDAFTARAN -->
    @if(isset($formulir))
        @php $status = strtolower($formulir->status); @endphp
        
        @if($status == 'diterima')
            @if($status == 'diterima')
            <!-- JIKA DITERIMA -->
            <div class="status-card status-accepted">
                <h3 class="status-title">Selamat, Ananda Diterima! 🎉</h3>
                <p class="status-text" style="margin-bottom: 0;">
                    {{ $formulir->catatan_admin ?? 'Selamat kepada Ananda! Silakan datang langsung ke sekolah bersama orang tua untuk melakukan proses daftar ulang     dan menyerahkan fotocopy KK dan akte sesuai jadwal yang ditentukan.' }}
                </p>
            </div>
            @endif

        @elseif($status == 'ditolak')
            <!-- JIKA MASUK DAFTAR CADANGAN / BELUM LOLOS -->
            <div class="status-card status-waiting">
                <h3 class="status-title">Informasi Status Pendaftaran</h3>
                <p class="status-text">
                    {{ $formulir->catatan_admin ?? 'Mohon maaf Ayah/Bunda, untuk gelombang ini kuota kelas sudah penuh atau belum memenuhi syarat usia. Ananda masuk dalam daftar cadangan prioritas kami.' }}
                </p>
                <a href="https://wa.me/6281234567890?text=Halo%20Admin,%20saya%20ingin%20bertanya%20mengenai%20status%20pendaftaran%20Ananda%20dengan%20nomor%20pendaftaran%20{{ $formulir->nomor_pendaftaran }}" target="_blank" class="btn-status btn-whatsapp">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    Tanya Panitia via WhatsApp
                </a>
            </div>

        @else
            <!-- JIKA MASIH MENUNGGU -->
            <div class="status-card status-pending">
                <h3 class="status-title">Menunggu Konfirmasi Panitia</h3>
                <p class="status-text">
                    Data pendaftaran Ananda sudah berhasil dikirim dan sedang dalam antrean verifikasi oleh panitia sekolah. Silakan cek halaman ini secara berkala ya, Ayah/Bunda!
                </p>
            </div>
        @endif

    @else
        <!-- JIKA BELUM MENDAFTAR SAMA SEKALI -->
        <div class="status-card status-default">
            <h3 class="status-title">Belum Mengisi Formulir</h3>
            <p class="status-text">
                Silakan lengkapi formulir pendaftaran terlebih dahulu agar data Ananda tercatat di sistem PPDB TK kami.
            </p>
            <a href="/user/formulir" class="btn-status btn-orange">Isi Formulir Sekarang</a>
        </div>
    @endif

    <!-- BAGIAN PENGUMUMAN SEKOLAH -->
    <div class="section-box">
        <h3 class="section-heading">
            <span>📢</span> Informasi & Pengumuman Terbaru
        </h3>

       <div class="content-container">
        @if(isset($pengumuman) && count($pengumuman) > 0)
            @foreach($pengumuman as $item)
            <div class="announcement-card">
                <h3>{{ $item->judul }}</h3>
                <span class="date">{{ \Carbon\Carbon::parse($item->tanggal ?? $item->created_at)->format('d-m-Y') }}</span>
                <p>{{ $item->isi }}</p>
            </div>
            @endforeach
        @else
            <div class="announcement-card" style="border-left-color: #E7E5E4;">
                <p style="text-align: center; margin: 20px 0; color: #A8A29E;">Belum ada pengumuman untuk saat ini.</p>
            </div>
        @endif
    </div>
</div>

</body>
</html>