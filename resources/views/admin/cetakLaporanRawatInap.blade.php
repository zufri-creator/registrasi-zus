<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Rawat Inap</title>
</head>
<body>
    <table style="border-collapse: collapse; width: 900px;">
        <tr>
            <td>
                <h2 style="text-align: left">FORMULIR PENDAFTARAN RAWAT INAP PASIEN</h2> 
                
            </td>
        </tr>
   </table>
   <table style="border-collapse: collapse; width: 900px;">
        <tr>
            <td colspan="3" style="padding: 8px">
                <h4 style="margin: 0px">DATA YANG DISI OLEH PASIEN</h4>
            </td>
        </tr>
        <tr>
            <td width="300" style="padding: 8px">Nama Pasien</td>
            <td>:</td>
            <td>{{ $dataRawatInap->pasien->nama_pasien }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Poli</td>
            <td>:</td>
            <td>{{ $dataRawatInap->poli->nama_poli }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Tempat Lahir</td>
            <td>:</td>
            <td>{{ $dataRawatInap->tempat_lahir }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Tanggal Lahir</td>
            <td>:</td>
            <td>{{ $dataRawatInap->tgl_lahir }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Alamat</td>
            <td>:</td>
            <td>{{ $dataRawatInap->alamat }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">No RT</td>
            <td>:</td>
            <td>{{ $dataRawatInap->no_rt }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">No RW</td>
            <td>:</td>
            <td>{{ $dataRawatInap->no_rw }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Kelurahan/Desa</td>
            <td>:</td>
            <td>{{ $dataRawatInap->kelurahan }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Teleponn</td>
            <td>:</td>
            <td>{{ $dataRawatInap->tlp }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Pekerjaan</td>
            <td>:</td>
            <td>{{ $dataRawatInap->pekerjaan }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Nama Penanggung Jawab</td>
            <td>:</td>
            <td>{{ $dataRawatInap->nama_penanggung_jawab }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Alamat Penanggung Jawab</td>
            <td>:</td>
            <td>{{ $dataRawatInap->alamat_penanggung_jawab }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Telepon Penanggung Jawab</td>
            <td>:</td>
            <td>{{ $dataRawatInap->telepon_penanggung_jawab }}</td>
        </tr>
        <tr>
            <td style="padding: 8px" colspan="3">
            <h4 style="margin: 0px">DATA YANG DISI OLEH PETUGAS KESEHATAN</h4>
            </td>
        </tr>
        <tr>
            <td style="padding: 8px">Jenis Ruangan</td>
            <td>:</td>
            <td>{{ $dataPenerimaan->jenis_ruangan }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Kelas</td>
            <td>:</td>
            <td>{{ $dataPenerimaan->kelas }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Tanggal Masuk</td>
            <td>:</td>
            <td>{{ $dataPenerimaan->tgl_masuk }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Jam Masuk</td>
            <td>:</td>
            <td>{{ $dataPenerimaan->jam_masuk }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Asal Pasien</td>
            <td>:</td>
            <td>{{ $dataPenerimaan->asal_pasien }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Status Pasien</td>
            <td>:</td>
            <td>{{ $dataPenerimaan->status_pasien }}</td>
        </tr>
        <tr>
            <td style="padding: 8px">Biaya Perawatan</td>
            <td>:</td>
            <td>{{ $dataPenerimaan->biaya_perawatan }}</td>
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