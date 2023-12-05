@extends('layouts.app')

@section('pageTitle', 'Kontak')

@section('content')
    <section class="tw-mt-[112px]">
        <div class="container">
            <x-HeaderTitle>
                <div class="tw-mb-4">
                    Kontak & Lokasi
                </div>
            </x-HeaderTitle>
            <p class="tw-text-base tw-tect-[#434E56]">Informasi Kontak dan lokasi KCD Pendidikan Wilayah V</p>

            {{-- lokasi --}}
            <div class="container tw-pb-20 md:tw-pb-40">
                <x-HeaderTitle position='text-center'>
                    <div class="tw-mt-[112px] tw-mb-[56px]">
                        Lokasi
                    </div>
                </x-HeaderTitle>
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0693659951276!2d106.94392507499612!3d-6.882293993116616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e684823a3c5baa5%3A0x3e87310caf62efa7!2sKANTOR%20CABANG%20DINAS%20PENDIDIKAN%20WILAYAH%20V%20PROVINSI%20JAWA%20BARAT!5e0!3m2!1sid!2sid!4v1701008903174!5m2!1sid!2sid"
                        class="tw-h-[325px] md:tw-h-[650px]" width="100%" style="border:0; border-radius: 18px"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            {{-- end Lokasi --}}
        </div>
    </section>
@endsection
