<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saç Ekim Merkezi</title>
    @include('reqs/head')
</head>
<body>
@include('reqs/navbar')
<main>
    <section class="intro">
        <div class="intro-text">
            <h1>Saç Ekim Danışmanlığı</h1>
            <p>Sizi Aynalarla Buluşturuyoruz!</p>
        </div>
        <div class="intro-button">
            <a href="https://forms.gle/absM7sZnKeAqMqYt9" class="button" target="_blank">Ücretsiz Randevu Alın</a>
        </div>
    </section>

    <section class="about-us">
        <h2>Hakkımızda</h2>
        <p>MES Saç Ekim Danışmanlığı, Adıyaman’da saç sağlığı ve estetiği konusunda uzmanlaşmış bir merkezdir. Deneyimli kadrosu ve modern ekipmanlarıyla, saç ekimi ve saç sağlığı alanında kişiye özel tedavi planları sunarak, müşteri memnuniyetini ön planda tutar. En son teknolojileri ve ileri teknikleri kullanan merkez, doğal ve kalıcı sonuçlarla müşterilerine güvenli ve konforlu bir tedavi süreci sağlamayı amaçlar. MES Saç Ekim Danışmanlığı, sürekli kendini geliştirerek, müşterilerine en iyi hizmeti sunmaya devam etmektedir.</p>
    </section>

    <section class="gallery">
        <h2>Galeri</h2>
        <div class="gallery-row">

            @foreach($photos as $photo)
                <div class="gallery-item"> <h1>Before</h1> <img src="{{ config('app.url') }}/storage/{{ str_replace('public/', '', $photo->before) }}" alt="Before"></div>
                <div class="gallery-item"> <h1>After</h1> <img src="{{ config('app.url')}}/storage/{{ str_replace('public/', '', $photo->after) }}" alt="After"></div>
            @endforeach
        </div>
    </section>
</main>

@include('reqs/footer')
</body>
</html>
