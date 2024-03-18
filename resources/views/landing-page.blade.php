@extends('shared.layout')

@section('content')


    <div class="flex justify-center items-center relative  camera-animation-container dynamic-background transition-opacity">
        <div class="animate-fadeInLeft z-0 absolute inset-0 overflow-hidden camera-animation">
            <!-- Particules de la caméra -->
            <div class="camera-particle"></div>
            <div class="camera-particle"></div>
            <div class="camera-particle"></div>

            <!-- Ajoutez plus de particules selon vos préférences -->
        </div>
        <div class="flex flex-col space-y-10 animate-fadeInRight z-10">
            <h1 style="color: #2B3D4F; font-weight: bold; font-size: 94px">
                Déchainer <br>
                L'Art de la <br>
                Photographie
            </h1>
            <p style="color: #2B3D4F; font-size: 18px; opacity: 0.75" class="animate-fadeInUp">Chez YESINEGRAPH, nous nous spécialisons dans la capture des moments<br>
                les plus précieux de la vie, les transformant en œuvres d'art intemporelles.<br>
                Notre équipe de photographes passionnés est dédiée à raconter des<br>
                histoires à travers l'objectif, veillant à ce que chaque clic capture l'essence<br>
                de votre parcours unique.
            </p>
            <button class="text-white font-bold py-2 px-4 border border-green-700 rounded-md animate-pulse" style="background-color: #436850;">
                Réservez votre session maintenant
            </button>

        </div>
        <div class="animate-fadeInLeft shadow-image">
            <img src="yassine-photo.png">
        </div>
    </div>

    <div class="transition-opacity">

        <div class="flex items-center justify-center p-5">
            <h1 style="color: #2B3D4F; font-weight: bold; font-size: 50px">
                Explorez notre expertise
            </h1>
        </div>
        <div class="flex items-center justify-around text-center p-5">
            <div class="flex flex-col items-center justify-center animate-hover p-5">
                <img src="icone1.png">
                <h1 style="font-weight: bold;">Professional editing</h1>
                <p style="color: #2B3D4F; opacity: 0.90">Votre créativité, notre inspiration.<br>
                    Quoi que vous souhaitiez.</p>
            </div>
            <div class="flex flex-col items-center justify-center animate-hover">
                <img src="icon2.png">
                <h1 style="font-weight: bold;">Professional editing</h1>
                <p style="color: #2B3D4F; opacity: 0.90">Votre créativité, notre inspiration.<br>
                    Quoi que vous souhaitiez.</p>
            </div>
            <div class="flex flex-col items-center justify-center animate-hover">
                <img src="icone3.png">
                <h1 style="font-weight: bold;">Professional editing</h1>
                <p style="color: #2B3D4F; opacity: 0.90">Votre créativité, notre inspiration.<br>
                    Quoi que vous souhaitiez.</p>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-around ">
        <div>
            <img src="creative.png">
        </div>
        <div class="flex flex-col space-y-10 p-5">
            <div>
                <h1 style="color: #2B3D4F; font-weight: bold; font-size: 50px">Créativité inégalée</h1>
            </div>
            <div>
                <p style="color: #2B3D4F; font-size: 18px; opacity: 0.75" class="animate-fadeInUp">Chez YESINEGRAPH, nous nous spécialisons dans la capture des moments<br>
                    les plus précieux de la vie, les transformant en œuvres d'art intemporelles.<br>
                    Notre équipe de photographes passionnés est dédiée à raconter des<br>
                    histoires à travers l'objectif, veillant à ce que chaque clic capture l'essence<br>
                    de votre parcours unique.
                </p>
            </div>
            <div class="flex items-center justify-around ">
                <div class="">
                    <h1 style="color: #2B3D4F; font-weight: bold; font-size: 50px">550+</h1>
                    <p style="color: #2B3D4F; font-size: 18px; opacity: 0.75" class="animate-fadeInUp"> Client satisfaits</p>
                </div>
                <div>
                    <h1 style="color: #2B3D4F; font-weight: bold; font-size: 50px">38+</h1>
                    <p style="color: #2B3D4F; font-size: 18px; opacity: 0.75" class="animate-fadeInUp">Prix remportés</p>
                </div>
                <div>
                    <h1 style="color: #2B3D4F; font-weight: bold; font-size: 50px">9000+</h1>
                    <p style="color: #2B3D4F; font-size: 18px; opacity: 0.75" class="animate-fadeInUp"> Événements capturés</p>

                </div>
            </div>
        </div>
    </div>


@endsection
