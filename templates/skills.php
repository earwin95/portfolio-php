<?php
// Tableau des compétences
$skills = [
    'html' => [
        'name' => 'HTML',
        'images' => '/images/html.svg'
    ],
    'css' => [
        'name' => 'CSS',
        'images' => '/images/css.svg'
    ],
    'tailwind' => [
        'name' => 'Tailwind',
        'images' => '/images/tailwindcss.svg'
    ],
    'js' => [
        'name' => 'JavaScript',
        'images' => '/images/javascript.svg'
    ],
    'React' => [
        'name' => 'React',
        'images' => '/images/React.svg'
    ],
    'php' => [
        'name' => 'PHP',
        'images' => '/images/php.svg'
    ],
    'symfony' => [
        'name' => 'Symfony',
        'images' => '/images/symfony.svg'
    ],
    'figma' => [
        'name' => 'Figma',
        'images' => '/images/figma.svg'
    ],
    'gitHub' => [
        'name' => 'GitHub',
        'images' => '/images/github.svg'
    ]
];
?>


    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-t from-orange-700 via-orange-500 to-orange-300 font-sans justify-center items-center min-h-screen">

    <h1 class="py-10 bg-clip-text bg-gradient-to-br from-slate-800 via-orange-800 to-slate-800 text-6xl font-bold text-transparent text-center">
        Mes Compétences
    </h1>
    <div class="w-full max-w-5xl bg-white p-8 rounded-xl shadow-xl">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($skills as $skill): ?>
                <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                    <!-- Affichage de l'images de la compétence -->
                    <div class="flex justify-center mb-4">
                        <img src="<?php echo $skill['images']; ?>" alt="<?php echo $skill['name']; ?>" class="w-16 h-16">
                    </div>
                    
                    <!--compétence -->
                    <h2 class="text-xl font-semibold text-gray-800 mb-3 text-center"><?php echo $skill['name']; ?></h2>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

