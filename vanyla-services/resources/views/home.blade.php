<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanyla Cakes</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-800">
<header class="bg-pink-500 p-6">
    <h1 class="text-center text-white text-4xl font-bold">Vanyla Cakes - Gluten-Free Delights</h1>
</header>
    <x-navbar />

<section class="text-center p-10">
    <h2 class="font-semibold text-blue-700 text-4xl">Vanyla Cakes co.</h2>
    <p class="mt-4 text-lg text-gray-700">
        En Vanyla Cakes, nos especializamos en ofrecer productos de pastelería sin gluten. Nuestros productos son elaborados con los ingredientes más frescos y de la mejor calidad para asegurarnos de que puedas disfrutar del mejor sabor.
    </p>
</section>

<section class="p-10 bg-gray-100">
    <h3 class="text-2xl font-semibold mb-6">Nuestros Servicios</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h4 class="text-xl font-semibold text-pink-600">Catering para Cumpleaños</h4>
            <p class="mt-4 text-gray-600">Ofrecemos un servicio completo para que tu fiesta sea inolvidable, con pasteles y dulces sin gluten personalizados para ti.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h4 class="text-xl font-semibold text-pink-600">Eventos Especiales</h4>
            <p class="mt-4 text-gray-600">Desde bodas hasta reuniones familiares, cubrimos todo tipo de eventos con nuestras deliciosas creaciones sin gluten.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h4 class="text-xl font-semibold text-pink-600">Recetas Gluten-Free</h4>
            <p class="mt-4 text-gray-600">Visita nuestro blog de recetas para aprender a cocinar tus propios productos sin gluten desde la comodidad de tu hogar.</p>
        </div>
    </div>
</section>

<footer class="bg-gray-800 p-6 text-center text-white">
    <p>&copy; 2024 Vanyla Cakes. Todos los derechos reservados.</p>
{{--TODO: ESTO VA EN UN COMPONENTE--}}
</footer>

</body>
</html>
