<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="application-version" content="{{ $version }}" />
    <title>{{ $etabType . ' ' . $etabName }} • {{ $page_name }} | Gadia</title>
    <link rel="shortcut icon" href="https://gadia.valbion.com/assets/img/logo_color.svg" type="image/svg">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/tailwind.output.css?{{ $version->meta }}" />
    <link rel="stylesheet" href="/assets/css/custom.css?{{ $version->meta }}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="/assets/js/init-alpine.js"></script>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
</head>
