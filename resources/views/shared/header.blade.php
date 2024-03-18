<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('./css')}}">
    @livewireStyles
</head>
<body style="background-color: #FCF3F3">

<!-- component -->
<style>
    module.exports = {
    theme: {
    fontFamily: {
    'sans': ['Poppins', 'sans-serif'],
    },
    },
    variants: {},
    plugins: [],
    }

    html {
        scroll-behavior: smooth;
    }
    /* Compiled dark classes from Tailwind */
    .dark .dark\:divide-gray-700 > :not([hidden]) ~ :not([hidden]) {
        border-color: rgba(55, 65, 81);
    }
    .dark .dark\:bg-gray-50 {
        background-color: rgba(249, 250, 251);
    }
    .dark .dark\:bg-gray-100 {
        background-color: rgba(243, 244, 246);
    }
    .dark .dark\:bg-gray-600 {
        background-color: rgba(75, 85, 99);
    }
    .dark .dark\:bg-gray-700 {
        background-color: rgba(55, 65, 81);
    }
    .dark .dark\:bg-gray-800 {
        background-color: rgba(31, 41, 55);
    }
    .dark .dark\:bg-gray-900 {
        background-color: rgba(17, 24, 39);
    }
    .dark .dark\:bg-red-700 {
        background-color: rgba(185, 28, 28);
    }
    .dark .dark\:bg-green-700 {
        background-color: rgba(4, 120, 87);
    }
    .dark .dark\:hover\:bg-gray-200:hover {
        background-color: rgba(229, 231, 235);
    }
    .dark .dark\:hover\:bg-gray-600:hover {
        background-color: rgba(75, 85, 99);
    }
    .dark .dark\:hover\:bg-gray-700:hover {
        background-color: rgba(55, 65, 81);
    }
    .dark .dark\:hover\:bg-gray-900:hover {
        background-color: rgba(17, 24, 39);
    }
    .dark .dark\:border-gray-100 {
        border-color: rgba(243, 244, 246);
    }
    .dark .dark\:border-gray-400 {
        border-color: rgba(156, 163, 175);
    }
    .dark .dark\:border-gray-500 {
        border-color: rgba(107, 114, 128);
    }
    .dark .dark\:border-gray-600 {
        border-color: rgba(75, 85, 99);
    }
    .dark .dark\:border-gray-700 {
        border-color: rgba(55, 65, 81);
    }
    .dark .dark\:border-gray-900 {
        border-color: rgba(17, 24, 39);
    }
    .dark .dark\:hover\:border-gray-800:hover {
        border-color: rgba(31, 41, 55);
    }
    .dark .dark\:text-white {
        color: rgba(255, 255, 255);
    }
    .dark .dark\:text-gray-50 {
        color: rgba(249, 250, 251);
    }
    .dark .dark\:text-gray-100 {
        color: rgba(243, 244, 246);
    }
    .dark .dark\:text-gray-200 {
        color: rgba(229, 231, 235);
    }
    .dark .dark\:text-gray-400 {
        color: rgba(156, 163, 175);
    }
    .dark .dark\:text-gray-500 {
        color: rgba(107, 114, 128);
    }
    .dark .dark\:text-gray-700 {
        color: rgba(55, 65, 81);
    }
    .dark .dark\:text-gray-800 {
        color: rgba(31, 41, 55);
    }
    .dark .dark\:text-red-100 {
        color: rgba(254, 226, 226);
    }
    .dark .dark\:text-green-100 {
        color: rgba(209, 250, 229);
    }
    .dark .dark\:text-blue-400 {
        color: rgba(96, 165, 250);
    }
    .dark .group:hover .dark\:group-hover\:text-gray-500 {
        color: rgba(107, 114, 128);
    }
    .dark .group:focus .dark\:group-focus\:text-gray-700 {
        color: rgba(55, 65, 81);
    }
    .dark .dark\:hover\:text-gray-100:hover {
        color: rgba(243, 244, 246);
    }
    .dark .dark\:hover\:text-blue-500:hover {
        color: rgba(59, 130, 246);
    }

    /* Custom style */
    .header-right {
        width: calc(100% - 3.5rem);
    }
    .sidebar:hover {
        width: 16rem;
    }
    @media only screen and (min-width: 768px) {
        .header-right {
            width: calc(100% - 16rem);
        }
    }
    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 0.75;
            transform: translateY(0);
        }
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-fadeInRight {
        animation: fadeInRight 1s ease-out;
    }

    .animate-fadeInUp {
        animation: fadeInUp 1s ease-out;
    }

    .animate-fadeInLeft {
        animation: fadeInLeft 1s ease-out;
    }
    @keyframes pulse {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(67, 104, 80, 0.7);
        }
        70% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(67, 104, 80, 0);
        }
        100% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(67, 104, 80, 0);
        }
    }

    .animate-pulse {
        animation: pulse 2s infinite;
    }
    .camera-animation-container {
        position: relative;
    }

    .camera-animation {
        animation: cameraMove 20s linear infinite;
    }

    @keyframes cameraMove {
        0% {
            transform: translateX(-50%) translateY(-50%);
        }
        50% {
            transform: translateX(50%) translateY(50%);
        }
        100% {
            transform: translateX(-50%) translateY(-50%);
        }
    }

    .camera-particle {
        position: absolute;
        width: 5px;
        height: 5px;
        background-color: #2B3D4F; /* Couleur des particules */
        border-radius: 50%;
    }

    .camera-particle:nth-child(1) {
        top: 20%;
        left: 20%;
    }

    .camera-particle:nth-child(2) {
        top: 50%;
        left: 50%;
    }

    .camera-particle:nth-child(3) {
        top: 80%;
        left: 80%;
    }
    /* Ajoutez plus de règles pour positionner d'autres particules */

    .shadow-image {
        position: relative;
    }

    .image {
        max-width: 100%;
        height: auto;
        border-radius: 10px; /* Arrondir les coins de l'image */
        filter: grayscale(10%) sepia(10%) brightness(100%) contrast(100%); /* Appliquer un filtre pour ajuster la couleur et le contraste */
        transition: filter 0.3s ease-in-out; /* Ajouter une transition fluide lors du survol */
    }

    .shadow-image::after {
        content: '';
        position: absolute;
        top: 10px;
        left: 10px;
        width: calc(100% - 20px);
        height: calc(100% - 20px);
        background-color: rgba(0, 0, 0, 0.5); /* Couleur de l'ombre */
        border-radius: 10px;
        z-index: -1;
        transition: opacity 0.3s ease-in-out; /* Ajouter une transition fluide pour l'opacité */
        opacity: 0; /* Initialiser l'opacité à 0 pour masquer l'ombre */
    }

    .shadow-image:hover::after {
        opacity: 1; /* Augmenter l'opacité au survol */
    }

    .shadow-image:hover .image {
        filter: grayscale(100%) sepia(100%) brightness(90%) contrast(120%); /* Appliquer un filtre différent au survol */
    }



    .dynamic-background {
        animation: backgroundShift 10s ease infinite alternate;
    }

    @keyframes backgroundShift {
        0% {
            background: linear-gradient(15deg, #FCF3F3, #ADBC9F);
        }
        100% {
            background: linear-gradient(15deg, #FCF3F3, #ADBC9F);
        }
    }
    .dynamic-background-2 {
        animation: backgroundShift 10s ease infinite alternate;
    }

    @keyframes backgroundShift {
        0% {
            background: linear-gradient(15deg,#ADBC9F, #FCF3F3);
        }
        100% {
            background: linear-gradient(15deg, #ADBC9F, #FCF3F3);
        }
    }


    .animate-hover:hover {
        transform: translateY(-5px); /* Déplace les éléments vers le haut au survol */
    }

    .animate-hover {
        transition: transform 0.3s ease; /* Ajoute une transition douce */
    }

    .transition-opacity {
        transition: opacity 0.5s ease-in-out; /* Ajoute une transition de 0.5 seconde pour l'opacité */
    }

</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script>

