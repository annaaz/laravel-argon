@extends('layouts.app')

@section('content')
    @include('layouts.navbars.guest.navbar')
    <style>
        .boxes:hover {
            box-shadow: 1px 5px 12px 2px rgba(232,120,120,0.75);
            -webkit-box-shadow: 1px 5px 12px 2px rgba(232,120,120,0.75);
            -moz-box-shadow: 1px 5px 12px 2px rgba(232,120,120,0.75);
        }
    </style>
    <div style="display: flex;align-items: center;justify-content:center;margin-top:130px;gap:10px;">
        <h3 style="font-weight: bold">PROFIL</h3>
    </div>
    <div style="display: flex;align-items: center;justify-content:center;margin-top:1@endif;gap:10px;padding: 10px;margin-bottom: 50px;">
        <div style="width: 80vw; display: flex;justify-content: center;flex-direction:column;align-items: center">
            <div class="img wrapp " style="width: 750px; height: 420px; overflow: hidden">
                <img src="{{ asset('img/profil-unhan.png') }}" width="750" height="420" alt="Example Image" loading="lazy" >
            </div>
            <div style="width: 78vw;margin-top: 10px;font-size: 15px;">
                <br /><br />
                <p style="font-size: 15px">
                    Universitas Pertahanan Indonesia (Unhan) atau Indonesia Defense University (IDU) ditetapkan melalui Surat Mendiknas Nomor 29/MPN/OT/2009 tanggal 6 Maret 2009 perihal Pendirian Unhan dan diresmikan oleh Presiden Susilo Bambang Yudhoyono pada tanggal 11 maret 2009 di Istana Negara.
                <br />
                    Unhan merupakan lembaga pendidikan tinggi yang unik karena mengkhususkan diri pada studi pertahanan setingkat S 2. Unhan adalah lembaga pendidikan tinggi terbuka. Unhan memberi kesempatan bagi para perwira TNI dan sipil untuk belajar dan memperdalam Ilmu Pertahanan dari sudut pandang militer, politik, ekonomi, sosial dan budaya.
                </p>
                <p style="font-size: 15px">
                    (Perpres Nomor 5 Tahun 2011)
                </p>
                <p style="font-size: 15px">
                    Sebagai perguruan tinggi pemerintah, Universitas Pertahanan (Unhan) secara teknis akademik dibina oleh Kementerian Pendidikan dan Kebudayaan atau sekarang Kementerian Riset dan Pendidikan Tinggi (Kemenristek Dikti) dan secara teknis fungsional dibina oleh Kementerian Pertahanan RI (Kemhan RI).
               <br />
                    Pembinaan teknis akademik, meliputi penentuan program studi pendidikan, kurikulum program studi, kemahasiswaan, proses belajar mengajar dan wisuda. Sedangkan pembinaan teknis fungsional, meliputi pembinanaan organisasi, pembinaan personel dan dukungan administrasi. Sejak berdiri tahun 2009 hingga saat ini, Unhan sudah menginjak usia ketujuh dan masih tergolong relatif muda untuk ukuran lembaga pendidikan tinggi, dan terlebih baru pertama kali berdiri di Indonesia. Perkembangan Unhan dapat dikatakan relatif pesat, sehingga telah mewadahi Program Doktoral, Magister dan Sarjana.
                </p>
            </div>
        </div>
    </div>

    @include('layouts.footers.guest.footer')
@endsection
