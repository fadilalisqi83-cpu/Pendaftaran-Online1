<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman - PPDB</title>
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

        .page-header {
            margin-bottom: 30px;
        }

        .page-header h2 {
            font-size: 28px;
            color: #292524;
            margin-bottom: 8px;
        }

        .page-header p {
            color: #78716C;
            font-size: 15px;
        }

        .content-container {
            background: white;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.03);
            border: 1px solid #E7E5E4;
            min-height: 500px;
        }

        .announcement-card {
            background: white;
            border: 1px solid #F5F5F4;
            border-radius: 12px;
            padding: 25px 30px;
            border-left: 6px solid #14B8A6;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
            margin-bottom: 20px;
            overflow-wrap: break-word;
        }

        .announcement-card h3 {
            font-size: 22px;
            color: #78350F;
            margin-bottom: 6px;
        }

        .announcement-card .date {
            font-size: 13px;
            color: #A8A29E;
            margin-bottom: 15px;
            display: block;
        }

        .announcement-card p {
            color: #57534E;
            font-size: 15px;
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
        <a href="/user/dashboard">
            <svg fill="none" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1" stroke-width="2"/><rect x="14" y="3" width="7" height="7" rx="1" stroke-width="2"/><rect x="14" y="14" width="7" height="7" rx="1" stroke-width="2"/><rect x="3" y="14" width="7" height="7" rx="1" stroke-width="2"/></svg>
            Dashboard
        </a>
        <a href="/user/formulir">
            <svg fill="none" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            Formulir Pendaftaran
        </a>
        <a href="/user/pengumuman" class="active">
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
    <div class="page-header">
        <h2>Pengumuman PPDB</h2>
        <p>Informasi dan pengumuman terbaru dari pihak sekolah.</p>
    </div>

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