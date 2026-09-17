<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftar - Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        /* Latar belakang gading hangat */
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
            color: #78350F; /* Cokelat mocca tua */
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
            color: #78716C; /* Abu-abu kecokelatan */
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
            background: #D97706; /* Karamel emas */
            color: white;
            box-shadow: 0 2px 4px rgba(217, 119, 6, 0.2);
        }

       .sidebar-footer {
            padding: 2px;
            border-top: 1px dashed #D6D3D1;
        }

        .user-profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            background: #14B8A6; /* Teal segar */
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
            color: #EA580C; /* Terakota */
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            padding: 10px 12px;
            border-radius: 8px;
            transition: 0.2s;
            text-align: left;
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
            padding: 30px 40px;
            overflow-y: auto;
        }

        /* TOP NAVIGATION */
        .top-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #E7E5E4;
        }

        .top-nav h2 {
            font-size: 28px;
            color: #78350F;
            font-weight: 700;
        }

        .top-nav .nav-right {
            display: flex;
            align-items: center;
            gap: 15px;
            color: #78716C;
            font-size: 14px;
            font-weight: 500;
        }

        /* FILTER SECTION */
        .filter-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            display: flex;
            gap: 15px;
            align-items: flex-end;
            margin-bottom: 25px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.03);
            border: 1px solid #E7E5E4;
        }

        .filter-group {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .filter-group label {
            font-size: 12px;
            font-weight: 600;
            color: #57534E;
            margin-bottom: 8px;
        }

        .filter-input {
            padding: 10px 15px;
            border: 1px solid #D6D3D1;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            background: #FAFAF9;
            color: #44403C;
            transition: 0.2s;
        }

        .filter-input:focus {
            border-color: #D97706;
            box-shadow: 0 0 0 3px rgba(217, 119, 6, 0.1);
        }

        .btn-filter {
            background: #D97706;
            color: white;
            border: none;
            padding: 12px 15px;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.2s;
        }

        .btn-filter:hover {
            background: #B45309;
        }

        /* TABLE SECTION */
        .table-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.03);
            border: 1px solid #E7E5E4;
            overflow: hidden;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th {
            background: #F5F5F4;
            padding: 15px 20px;
            font-size: 13px;
            font-weight: 600;
            color: #44403C;
            border-bottom: 1px solid #E7E5E4;
        }

        td {
            padding: 15px 20px;
            font-size: 14px;
            color: #57534E;
            border-bottom: 1px solid #E7E5E4;
            vertical-align: middle;
        }

        .student-cell {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .student-avatar {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: #CCFBF1; /* Soft Teal */
            color: #0F766E; /* Dark Teal */
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 14px;
        }

        .status-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #FEF3C7;
            color: #B45309;
            padding: 4px 12px;
            border-radius: 99px;
            font-size: 12px;
            font-weight: 600;
        }

        .status-pill::before {
            content: '';
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #D97706;
        }

        .detail-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #14B8A6; /* Teal accent for detail button */
            color: white;
            padding: 6px 14px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            transition: 0.2s;
        }

        .detail-btn:hover {
            background: #0D9488;
        }

        /* PAGINATION */
        .pagination-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background: #F5F5F4;
            font-size: 13px;
            color: #78716C;
        }

        .pagination-controls {
            display: flex;
            gap: 5px;
        }

        .page-btn {
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #D6D3D1;
            background: white;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            color: #44403C;
            transition: 0.2s;
        }

        .page-btn:hover {
            border-color: #D97706;
            color: #D97706;
        }

        .page-btn.active {
            background: #D97706;
            color: white;
            border-color: #D97706;
        }

        /* STATS WIDGETS */
        .stats-row {
            display: flex;
            gap: 20px;
        }

        .stat-widget {
            flex: 1;
            padding: 25px;
            border-radius: 12px;
            position: relative;
            overflow: hidden;
            border: 1px solid #E7E5E4;
            box-shadow: 0 1px 3px rgba(0,0,0,0.03);
        }

        .stat-widget.primary {
            background: #D97706;
            color: white;
            border: none;
        }
        
        .stat-widget.white {
            background: white;
        }

        .stat-widget.wide {
            flex: 2;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .stat-title {
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 10px;
            letter-spacing: 0.5px;
        }
        .stat-widget.white .stat-title { color: #78716C; }

        .stat-number {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        .stat-widget.white .stat-number { color: #78350F; }

        .stat-desc {
            font-size: 12px;
            opacity: 0.9;
        }
        .stat-widget.white .stat-desc { color: #A8A29E; }

        .progress-bar-container {
            width: 100%;
            height: 12px;
            background: #F5F5F4;
            border-radius: 99px;
            margin: 15px 0;
            overflow: hidden;
        }
        
        .progress-bar-fill {
            height: 100%;
            background: #14B8A6; /* Teal */
            border-radius: 99px;
            transition: width 0.5s ease;
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
                <svg fill="none" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1" stroke-width="2"/><rect x="14" y="3" width="7" height="7" rx="1" stroke-width="2"/><rect x="14" y="14" width="7" height="7" rx="1" stroke-width="2"/><rect x="3" y="14" width="7" height="7" rx="1" stroke-width="2"/></svg>
                Dashboard
            </a>
            <a href="/admin/data-pendaftar" class="active">
                <svg fill="none" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                Data Pendaftar
            </a>
            <a href="/admin/pengumuman">
                <svg fill="none" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
                Kelola Pengumuman
            </a>
            <a href="/admin/panduan">
                <svg fill="none" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                Formulir Pendaftaran
            </a>
        </div>

        <div class="sidebar-footer">
            <div class="user-profile">
                <div class="user-avatar">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                <div class="user-info">
                    <span class="name">{{ Auth::user()->name }}</span>
                    <span class="email">{{ Auth::user()->email ?? 'admin@gmail.com' }}</span>
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
        
        <div class="top-nav">
            <h2>Data Pendaftar</h2>
            <div class="nav-right">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                <span>Senin, 24 Mei 2024</span>
            </div>
        </div>

 <form action="{{ url('/admin/data-pendaftar') }}" method="GET" class="filter-card">
    <div class="filter-group" style="flex: 2;">
        <label>Cari Siswa</label>
        <input type="text" name="search" value="{{ request('search') }}" class="filter-input" placeholder="Masukkan nama atau nomor pendaftaran...">
    </div>
    
    <div class="filter-group">
        <label>Status</label>
        <select name="status" class="filter-input">
            <option value="">Semua Status</option>
            <option value="Menunggu" {{ request('status') == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
            <option value="Diterima" {{ request('status') == 'Diterima' ? 'selected' : '' }}>Diterima</option>
            <option value="Ditolak" {{ request('status') == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
        </select>
    </div>

    <div class="filter-group">
        <label>Urutkan</label>
        <select name="sort" class="filter-input">
            <option value="terbaru" {{ request('sort') == 'terbaru' ? 'selected' : '' }}>Terbaru</option>
            <option value="terlama" {{ request('sort') == 'terlama' ? 'selected' : '' }}>Terlama</option>
        </select>
    </div>

    <button type="submit" class="btn-filter" style="padding: 10px 20px; font-weight: 600; gap: 8px; display: flex; align-items: center; justify-content: center;" title="Cari">
        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        Cari
    </button>

    @if(request('search') || request('status') || request('sort') != 'terbaru')
        <a href="{{ url('/admin/data-pendaftar') }}" class="btn-filter" style="background: #78716C; text-decoration: none; display: flex; align-items: center; justify-content: center; padding: 10px 15px;" title="Reset Filter">Reset</a>
    @endif
</form>

        <div class="table-card">
            <table>
                <thead>
                    <tr>
                        <th>Nama Siswa</th>
                        <th>Nama Orang Tua</th>
                        <th>No Pendaftaran</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataPendaftar as $item)
                    <tr>
                        <td>
                            <div class="student-cell">
                                <div class="student-avatar">
                                    {{ strtoupper(substr($item->nama_lengkap, 0, 2)) }}
                                </div>
                                <span style="font-weight: 600; color:#292524;">{{ $item->nama_lengkap }}</span>
                            </div>
                        </td>
                        <td>{{ $item->nama_ayah }}</td>
                        <td>{{ $item->nomor_pendaftaran }}</td>
                        <td>
                            <span class="status-pill">{{ ucfirst($item->status) }}</span>
                        </td>
                        <td>
                            <a href="/admin/data-pendaftar/{{ $item->id }}" class="detail-btn">
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Detail
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            <div class="pagination-footer">
                <span>Menampilkan 1 dari {{ count($dataPendaftar) }} pendaftar</span>
                <div class="pagination-controls">
                    <a href="#" class="page-btn"><svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg></a>
                    <a href="#" class="page-btn active">1</a>
                    <a href="#" class="page-btn">2</a>
                    <a href="#" class="page-btn">3</a>
                    <span style="padding: 0 5px; display:flex; align-items:flex-end;">...</span>
                    <a href="#" class="page-btn">25</a>
                    <a href="#" class="page-btn"><svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
                </div>
            </div>
        </div>

        @php
            // Hitung otomatis data pendaftar dan persentasenya
            $totalPendaftar = count($dataPendaftar);
            $maxKuota = 30;
            $persentase = $totalPendaftar > 0 ? round(($totalPendaftar / $maxKuota) * 100) : 0;
            $persentase = $persentase > 100 ? 100 : $persentase; // Mentok di 100% walau pendaftar > 30
        @endphp

        <div class="stats-row">
            <div class="stat-widget primary">
                <div class="stat-title">TOTAL PENDAFTAR</div>
                <div class="stat-number">{{ $totalPendaftar }}</div>
                <div class="stat-desc">Data pendaftar saat ini</div>
            </div>
            
            <div class="stat-widget white">
                <div class="stat-title">MENUNGGU REVIEW</div>
                <div class="stat-number">1</div>
                <div class="stat-desc">Butuh verifikasi segera</div>
            </div>

            <div class="stat-widget white wide" style="flex-direction: row; justify-content: space-between; align-items: center;">
                <div style="flex: 1; padding-right: 20px;">
                    <div class="stat-title">KUOTA TERISI</div>
                    <div class="progress-bar-container">
                        <div class="progress-bar-fill" style="width: {{ $persentase }}%;"></div>
                    </div>
                    <div style="display:flex; justify-content:space-between; font-size:12px; color:#78716C;">
                        <span style="font-weight:600; color:#292524;">{{ $totalPendaftar }} / {{ $maxKuota }} Siswa</span>
                        <span>{{ $persentase }}% dari Kapasitas Maksimal</span>
                    </div>
                </div>
                
                <div style="width: 80px; height: 80px; position:relative;">
                    <svg viewBox="0 0 36 36" style="width:100%; height:100%;">
                        <path d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="#F5F5F4" stroke-width="4"/>
                        <path d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="#14B8A6" stroke-width="4" stroke-dasharray="{{ $persentase }}, 100"/>
                    </svg>
                    <div style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); font-size:14px; font-weight:700; color:#14B8A6;">{{ $persentase }}%</div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>