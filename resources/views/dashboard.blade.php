{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Statistiques') }}
        </h2>
    </x-slot>

    <div class="shadow rounded-sm w-full">
        <div class="flex flex-col justify-around items-center">
            <p class="font-bold py-2 m-4 text-secondaire text-xl">Statistiques</p>

            
            {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <canvas id="myChart"></canvas> --}}
            <div class="flex justify-evenly">
                <div class=" w-50">
                    <canvas id="line-chart" width="800" height="450"></canvas>
                </div>
                <div class="w-50">
                    <canvas id="bar-chart"></canvas>
                </div>
            </div>
            <div class="m-10">
                <div class=" w-50">
                    <canvas id="bar-chart-grouped" width="800" height="450"></canvas>
                </div>
            </div>
            <script>
// Bar chart
                new Chart(document.getElementById("bar-chart"), {
                    type: 'bar',
                    data: {
                    labels: ["Fruits", "Cereal", "Riz", "Ble", "Huile"],
                    datasets: [
                        {
                        label: "Produits (millions)",
                        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                        data: [2478,5267,734,784,433]
                        }
                    ]
                    },
                    options: {
                    legend: { display: false },
                    title: {
                        display: true,
                        text: ''
                    }
                    }
                })

                new Chart(document.getElementById("line-chart"), {
                type: 'line',
                data: {
                    labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
                    datasets: [{ 
                        data: [86,114,106,106,107,111,133,221,783,2478],
                        label: "Fruits",
                        borderColor: "#3e95cd",
                        fill: false
                    }, { 
                        data: [282,350,411,502,635,809,947,1402,3700,5267],
                        label: "Cereales",
                        borderColor: "#8e5ea2",
                        fill: false
                    }, { 
                        data: [168,170,178,190,203,276,408,547,675,734],
                        label: "Légumes",
                        borderColor: "#3cba9f",
                        fill: false
                    }, { 
                        data: [40,20,10,16,24,38,74,167,508,784],
                        label: "Viande",
                        borderColor: "#e8c3b9",
                        fill: false
                    }, { 
                        data: [6,3,2,2,7,26,82,172,312,433],
                        label: "Produits laitiers",
                        borderColor: "#c45850",
                        fill: false
                    }
                    ]
                },
                options: {
                    title: {
                    display: true,
                    text: 'Aliments par année (millions)'
                    }
                }
                });

                // new Chart(document.getElementById("pie-chart"), {
                //     type: 'pie',
                //     data: {
                //     labels: ["Fruits", "Légumes", "Viandes", "Produits laitiers", "Poissons"],
                //     datasets: [{
                //         label: "Ventes (millions d'euros)",
                //         backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                //         data: [325, 210, 175, 150, 120]
                //     }]
                //     },
                //     options: {
                //     title: {
                //         display: true,
                //         text: 'Ventes de produits alimentaires par catégorie (en millions d\'euros)'
                //     }
                //     }
                // });

                // new Chart(document.getElementById("mixed-chart"), {
                //     type: 'bar',
                //     data: {
                //     labels: ["2010", "2015", "2020", "2025"],
                //     datasets: [{
                //         label: "Fruits et légumes (Millions XOF)",
                //         type: "line",
                //         borderColor: "#8e5ea2",
                //         data: [4000000, 4500000, 5000000, 5500000],
                //         fill: false
                //         }, {
                //         label: "Produits laitiers (Millions XOF)",
                //         type: "line",
                //         borderColor: "#3e95cd",
                //         data: [2500000, 3000000, 3500000, 4000000],
                //         fill: false
                //         }, {
                //         label: "Fruits et légumes (Prix moyen)",
                //         type: "bar",
                //         backgroundColor: "rgba(0, 0, 255, 0.2)",
                //         data: [20000, 21000, 22000, 23000]
                //         }, {
                //         label: "Produits laitiers (Prix moyen)",
                //         type: "bar",
                //         backgroundColor: "rgba(255, 0, 0, 0.2)",
                //         data: [25000, 26000, 27000, 28000]
                //         }
                //     ]
                //     },
                //     options: {
                //     title: {
                //         display: true,
                //         text: 'Évolution des prix en francs CFA (XOF) pour différentes catégories d\'aliments'
                //     },
                //     legend: { display: true }
                //     }
                // });

                new Chart(document.getElementById("bar-chart-grouped"), {
                    type: 'bar',
                    data: {
                    labels: ["Fruits", "Produits laitiers", "Cereales", "Viande"],
                    datasets: [
                        {
                        label: "Particulier",
                        backgroundColor: "#3e95cd",
                        data: [150, 180, 220, 200]
                        }, {
                        label: "Partenaire",
                        backgroundColor: "#8e5ea2",
                        data: [200, 220, 240, 230]
                        }
                    ]
                    },
                    options: {
                    title: {
                        display: true,
                        text: 'Nombre d\'achats-ventes par trimestre'
                    }
                    }
                });

            </script>

        </div>
    </div>

</x-app-layout>
