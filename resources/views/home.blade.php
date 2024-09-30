<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MES Saç Ekim Danışmanlığı</title>
    @include('reqs/head')
</head>
<body>
@include('reqs/navbar')
<main>
    <div class="jumbotron jumbotron-fluid" style="background-image: url('/imgs/intro-bg.png'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-4 text-light">Mes Saç Ekim Danışmanlığı</h1>
                    <p class="lead text-light">Sizi Aynalarla Buluşturuyoruz!</p>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end justify-content-start align-items-center">
                    <a href="/randevu" class="btn btn-primary btn-lg">Ücretsiz Randevu Al</a>
                </div>
            </div>
        </div>
    </div>

    <section class="about-us">
        <h2>Hakkımızda</h2>
        <p>MES Saç Ekim Danışmanlığı, Adıyaman’da saç sağlığı ve estetiği konusunda uzmanlaşmış bir merkezdir. Deneyimli kadrosu ve modern ekipmanlarıyla, saç ekimi ve saç sağlığı alanında kişiye özel tedavi planları sunarak, müşteri memnuniyetini ön planda tutar. En son teknolojileri ve ileri teknikleri kullanan merkez, doğal ve kalıcı sonuçlarla müşterilerine güvenli ve konforlu bir tedavi süreci sağlamayı amaçlar. MES Saç Ekim Danışmanlığı, sürekli kendini geliştirerek, müşterilerine en iyi hizmeti sunmaya devam etmektedir.</p>
    </section>

    <div class="container my-5">
        <h2 class="text-center mb-4">Galeri</h2>

        @foreach($photos as $photo)
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-center">Öncesi</h4>
                <img src="{{ config('app.url') }}/storage/{{ str_replace('public/', '', $photo->before) }}" class="img-fluid" alt="Before">
            </div>
            <div class="col-md-6">
                <h4 class="text-center">Sonrası</h4>
                <img src="{{ config('app.url')}}/storage/{{ str_replace('public/', '', $photo->after) }}" class="img-fluid" alt="After">
            </div>
        </div>

        <hr class="my-5">
        @endforeach

    </div>
</main>

@include('reqs/footer')
</body>
</html>
