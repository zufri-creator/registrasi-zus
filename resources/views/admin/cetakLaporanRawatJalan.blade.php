<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Rawat Jalan</title>
</head>
<body>
    <table style="border-collapse: collapse; width: 900px;">
        <tr>
            <td>
                <h2 style="text-align: left">FORMULIR PENDAFTARAN RAWAT JALAN PASIEN</h2> 
                
            </td>
        </tr>
   </table>
   <table border="0" style="border-collapse: collapse; width: 900px;">
        <tr>
            <td colspan="3" style="padding: 8pxs">
                <h4 style="margin: 0px">DATA YANG DISI OLEH PASIEN</h4>
            </td>
        </tr>
        <tr>
            <td width="250" style="padding:8px">Nama Pasien</td>
            <td width="10">:</td>
            <td>{{ $dataRawatJalan->pasien->nama_pasien }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Tanggal Lahir</td>
            <td>:</td>
            <td>{{ $dataRawatJalan->tgl_lahir }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Alamat</td>
            <td>:</td>
            <td>{{ $dataRawatJalan->alamat }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Telepon</td>
            <td>:</td>
            <td>{{ $dataRawatJalan->tlp }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Agama</td>
            <td>:</td>
            <td>{{ $dataRawatJalan->agama }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Status</td>
            <td>:</td>
            <td>{{ $dataRawatJalan->status }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Pekerjaan</td>
            <td>:</td>
            <td>{{ $dataRawatJalan->pekerjaan }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Nama Penanggung Jawab</td>
            <td>:</td>
            <td>{{ $dataRawatJalan->nama_penganggun_jawab }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Alamat Penanggung Jawab</td>
            <td>:</td>
            <td>{{ $dataRawatJalan->alamat_penangguna_jawab }}</td>
        </tr>

        <tr>
            <td style="padding: 8px" colspan="3">
            <h4 style="margin: 0px">DATA YANG DISI OLEH PETUGAS KESEHATAN</h4>
            </td>
        </tr>
        <tr>
            <td style="padding: 8px">Tanggal Kunjungan</td>
            <td>:</td>
            <td>{{ $dataKunjungan->tgl_kunjungan }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Alergi</td>
            <td>:</td>
            <td>{{ $dataKunjungan->alergi }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Keseimbangan Berjalan Pasien, Apakah pasien tampak seimbang ?</td>
            <td>:</td>
            <td>{{ $dataKunjungan->keseimbangan_berjalan }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Apakah pasien memegang pinggiran kursi/meja saat akan duduk ?</td>
            <td>:</td>
            <td>{{ $dataKunjungan->menopang_saat_duduk }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Resiko Jatuh</td>
            <td>:</td>
            <td>{{ $dataKunjungan->resiko_jatuh }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Aktifitas Mobilisasi</td>
            <td>:</td>
            <td>{{ $dataKunjungan->aktifitas_mobilisasi }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Riwayat Penyakit</td>
            <td>:</td>
            <td>{{ $dataKunjungan->riwayat_penyakit }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Status General</td>
            <td>:</td>
            <td>{{ $dataKunjungan->status_general }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Keluhan Utama Pasien</td>
            <td>:</td>
            <td>{{ $dataKunjungan->keluhan_utama }}</td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <h5 style="margin: 0px;">SURAT PERNYATAAN</h5>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                Yang bertanda tangan dibawah ini menyatakan bersedia untuk mematuhi perataruan rawat jalan Rumah Sakit Zainal Umar Sidiki
            </td>
        </tr>
        
    </table>
    <table>
        <tr>
            <td>
                Gorontalo Utara,&nbsp;&nbsp;{{ \Carbon\Carbon::now()->format('d-m-Y') }}
                <br>
                <br>
                <br>
                <br>

                (...............................................)<br>
                Nama lengkap dan tanda tangan
            </td>
            <td width="200">&nbsp;</td>
            <td>
                Petugas penerimaan pasien
                <br>
                <br>
                <br>
                <br>
                (...............................................)<br>
                Nama lengkap dan tanda tangan
            </td>
        </tr>
    </table>
<script> 
    window.print();
</script>
</body>
</html>