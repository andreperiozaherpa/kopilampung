@extends('layout.master')
@section('content')
    <main>
        <div class="container">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h1 class="mb-0 pb-0 display-4" id="title">
                            Dashboard
                        </h1>
                        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                            <ul class="breadcrumb pt-0">
                                <li class="breadcrumb-item">
                                    <a href="Dashboards.Default.html">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="Dashboards.html">Dashboards</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row p-0 m-0 mb-5">
                    <section class="scroll-section " id="lineIcons">
                        <h2 class="small-title">Anggaran Pendapatan dan Belanja Daerah</h2>
                        <div class="row g-3">
                            <div class="col-12 col-lg-4 col-xxl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <div class="heading d-flex justify-content-between lh-1-25 mb-3">
                                                    <span>{{ $apbd_fix[1]['label'] }}</span>
                                                </div>
                                                <div class="text-small text-muted mb-1">Rp.</div>
                                                <div class="cta-1 text-primary">@currency($apbd_fix[1]['data'][4])</div>
                                            </div>
                                            <i data-acorn-icon="wallet" data-acorn-size="40" class="text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-xxl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <div class="heading d-flex justify-content-between lh-1-25 mb-3">
                                                    <span>{{ $apbd_fix[2]['label'] }}</span>
                                                </div>
                                                <div class="text-small text-muted mb-1">Rp.</div>
                                                <div class="cta-1 text-primary">@currency($apbd_fix[2]['data'][4])</div>
                                            </div>
                                            <i data-acorn-icon="cart" data-acorn-size="40" class="text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-xxl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <div class="heading d-flex justify-content-between lh-1-25 mb-3">
                                                    <span>{{ $apbd_fix[3]['label'] }}</span>
                                                </div>
                                                <div class="text-small text-muted mb-1">Rp.</div>
                                                <div class="cta-1 text-primary">@currency($apbd_fix[3]['data'][4])</div>
                                            </div>
                                            <i data-acorn-icon="money" data-acorn-size="40" class="text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-xxl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <div class="heading d-flex justify-content-between lh-1-25 mb-3">
                                                    <span>{{ $apbd_fix[5]['label'] }}</span>
                                                </div>
                                                <div class="text-small text-muted mb-1">Rp.</div>
                                                <div class="cta-1 text-primary">@currency($apbd_fix[5]['data'][4])</div>
                                            </div>
                                            <i data-acorn-icon="board-1" data-acorn-size="40" class="text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-xxl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <div class="heading d-flex justify-content-between lh-1-25 mb-3">
                                                    <span>{{ $apbd_fix[4]['label'] }}</span>
                                                </div>
                                                <div class="text-small text-muted mb-1">Rp.</div>
                                                <div class="cta-1 text-primary">@currency($apbd_fix[4]['data'][4])</div>
                                            </div>
                                            <i data-acorn-icon="sign" data-acorn-size="40" class="text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="row p-0 m-0 mb-5">
                    <div class="col-6">
                        <section class="scroll-section" id="activityLogs">
                            <h2 class="small-title">Data penata usaha </h2>
                            <div class="card">
                                <div class="card-body mb-n2">
                                    <div class="sh-30 overflow-scroll py-2">
                                        <div class="row g-0 mb-2">
                                            <div class="col-auto">
                                                <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                                    <div class="d-flex flex-column">
                                                        <div class="mt-n1 lh-1-25">
                                                            <span class="badge bg-primary">DATA</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="text-alternate mt-n1 lh-1-25"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="text-alternate mt-n1 lh-1-25"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                                    <span class="badge bg-warning">Jumlah</span>
                                                </div>
                                            </div>
                                        </div>

                                        @php
                                            $p = 1;
                                        @endphp
                                        @foreach ($perben as $perbens)
                                            <div class="row g-0 mb-2">
                                                <div class="col-auto">
                                                    <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                                        <div class="d-flex flex-column">
                                                            <div class="text-alternate mt-n1 lh-1-25">{{ $p++ }}.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div class="text-alternate mt-n1 lh-1-25">{{ $perbens[1] }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                                        <div class="d-flex flex-column">
                                                            <div class="text-alternate mt-n1 lh-1-25">{{ $perbens[2] }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                                        <div class="text-muted ms-2 mt-n1 lh-1-25">{{ $perbens[3] }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    {{-- @php
                        dd($lra);
                    @endphp --}}
                    <div class="col-6">
                        <h2 class="small-title">Laporan Realisasi Anggaran</h2>
                        <div class="row g-2" id="listLra">
                            @php
                                $i = 10;
                            @endphp
                            @foreach ($lra as $lras)
                                <div class="col-12 col-md-6">
                                    <div class="card sh-18">
                                        <div class="card-body d-flex">
                                            <div class="row g-0 d-flex w-100 align-items-center">
                                                <div class="col sh-7 d-flex flex-column justify-content-center custom-legend-container">
                                                    <div class="text mt-2">{{ $lras[0] }}</div>
                                                    <div id="nilai{{ $i }}" class="cta-3 value nilaiPerbandingan">{{ $lras[2] }} / {{ $lras[1] }}</div>
                                                </div>

                                                <template class="custom-legend-item">
                                                    <div class="text-small text-primary text mb-2"></div>
                                                    <div class="cta-3 text-small text-muted value"></div>
                                                </template>
                                                <div class="col-auto">
                                                    <canvas id="smallDoughnutChart{{ $i++ }}" class="sw-10 sh-10 chartjs-render-monitor" style="display: block; height: 56px; width: 56px;" width="112" height="112"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="col-12 col-md-6">
                                <div class="card sh-18">
                                    <div class="card-body d-flex">
                                        <div class="row g-0 d-flex w-100 align-items-center">
                                            <div class="col sh-7 d-flex flex-column justify-content-center custom-legend-container">
                                                <div class="text mt-2">BELANJA DAERAH</div>
                                                <div id="nilaiBD" class="cta-3 value">964.987.433.719 / 625.403.333.334</div>
                                            </div>

                                            <template class="custom-legend-item">
                                                <div class="text-small text-primary text mb-2"></div>
                                                <div class="cta-3 text-small text-muted value"></div>
                                            </template>
                                            <div class="col-auto">
                                                <canvas id="smallDoughnutChart22" class="sw-10 sh-10 chartjs-render-monitor" style="display: block; height: 56px; width: 56px;" width="112" height="112"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card sh-18">
                                    <div class="card-body d-flex">
                                        <div class="row g-0 d-flex w-100 align-items-center">
                                            <div class="col sh-7 d-flex flex-column justify-content-center custom-legend-container">
                                                <div class="text mt-2">PENERIMAAN PEMBIAYAAN</div>
                                                <div id="nilaiPM" class="cta-3 value">964.987.433.719 / 625.403.333.334</div>
                                            </div>

                                            <template class="custom-legend-item">
                                                <div class="text-small text-primary text mb-2"></div>
                                                <div class="cta-3 text-small text-muted value"></div>
                                            </template>
                                            <div class="col-auto">
                                                <canvas id="smallDoughnutChart23" class="sw-10 sh-10 chartjs-render-monitor" style="display: block; height: 56px; width: 56px;" width="112" height="112"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card sh-18">
                                    <div class="card-body d-flex">
                                        <div class="row g-0 d-flex w-100 align-items-center">
                                            <div class="col sh-7 d-flex flex-column justify-content-center custom-legend-container">
                                                <div class="text mt-2">PENGELUARAN PEMBIAYAAN</div>
                                                <div id="nilaiPK" class="cta-3 value">964.987.433.719 / 625.403.333.334</div>
                                            </div>

                                            <template class="custom-legend-item">
                                                <div class="text-small text-primary text mb-2"></div>
                                                <div class="cta-3 text-small text-muted value"></div>
                                            </template>
                                            <div class="col-auto">
                                                <canvas id="smallDoughnutChart24" class="sw-10 sh-10 chartjs-render-monitor" style="display: block; height: 56px; width: 56px;" width="112" height="112"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="row p-0 m-0 mb-5">
                    <div class="col-12">
                        <section class="scroll-section" id="roundedBarChartTitle">
                            <h2 class="small-title">Indeks Pengelolaan Keuangan Daerah</h2>
                            <div class="card mb-5">
                                <div class="card-body">
                                    <div class="sh-35">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas id="ipkdChart" style="display: block; height: 280px; width: 516px;" width="1032" height="560" class="chartjs-render-monitor"></canvas>
                                    </div>
                                </div>
                            </div>
                        </section>
                        {{-- <h2 class="small-title">Indeks Pengelolaan Keuangan Daerah</h2>
                        <div class="card mb-5 sh-40">
                            <div class="card-body">
                                <div class="custom-legend-container mb-3 pb-3 d-flex flex-row">
                                    <a href="#" class="d-flex flex-row g-0 align-items-center me-5">
                                        <div class="pe-2">
                                            <div class="icon-container border sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center" style="border-color: rgb(28, 163, 94) !important;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-loaf icon" style="color: rgb(28, 163, 94) !important;">
                                                    <path d="M18 11C18 16 14.4183 16 10 16C5.58172 16 2 16 2 11C2 7.68629 4 4 10 4C16 4 18 7.68629 18 11Z"></path>
                                                    <path d="M6 10 6 5M14 10 14 5M10 9 10 4"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text p mb-0 d-flex align-items-center text-small text-muted">BREADS</div>
                                            <div class="value cta-4" style="color: rgb(28, 163, 94) !important;">2214</div>
                                        </div>
                                    </a>

                                    <a href="#" class="d-flex flex-row g-0 align-items-center me-5">
                                        <div class="pe-2">
                                            <div class="icon-container border sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center" style="border-color: rgb(100, 229, 100) !important;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-cupcake icon" style="color: rgb(100, 229, 100) !important;">
                                                    <path d="M16.5 11.5L14.5586 12.2894C13.6118 12.6743 12.527 12.4622 11.7949 11.7489V11.7489C10.7962 10.7757 9.20383 10.7757 8.20507 11.7489V11.7489C7.47305 12.4622 6.38817 12.6743 5.44139 12.2894L3.5 11.5"></path>
                                                    <path d="M14 5L15.1555 5.30852C16.0463 5.54637 16.7839 6.17049 17.1659 7.00965V7.00965C17.6884 8.15765 17.6161 9.48873 16.9721 10.5733L16.3962 11.5433C16.2168 11.8454 16.0919 12.1767 16.0271 12.522L15.4588 15.5529C15.1928 16.9718 13.9539 18 12.5102 18H7.48978C6.04613 18 4.80721 16.9718 4.54116 15.5529L3.97288 12.522C3.90813 12.1767 3.78322 11.8454 3.60383 11.5433L3.0279 10.5733C2.38394 9.48873 2.31157 8.15765 2.83414 7.00965V7.00965C3.21614 6.17049 3.95371 5.54637 4.84452 5.30852L6 5"></path>
                                                    <path d="M6 6.5C6 4.29086 7.5454 2 10 2C12.4546 2 14 4.29086 14 6.5"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text p mb-0 d-flex align-items-center text-small text-muted">CAKES</div>
                                            <div class="value cta-4" style="color: rgb(100, 229, 100) !important;">1240</div>
                                        </div>
                                    </a>
                                </div>
                                <template class="custom-legend-item">
                                    <a href="#" class="d-flex flex-row g-0 align-items-center me-5">
                                        <div class="pe-2">
                                            <div class="icon-container border sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center">
                                                <i class="icon"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text p mb-0 d-flex align-items-center text-small text-muted">Title</div>
                                            <div class="value cta-4">Value</div>
                                        </div>
                                    </a>
                                </template>
                                <div class="sh-25">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="customLegendBarChart" style="display: block; height: 200px; width: 604px;" width="1208" height="400" class="chartjs-render-monitor"></canvas>
                                    <div class="custom-tooltip position-absolute bg-foreground rounded-md border border-separator pe-none p-3 d-flex z-index-1 align-items-center opacity-0 basic-transform-transition">
                                        <div class="icon-container border d-flex align-middle align-items-center justify-content-center align-self-center rounded-xl sh-5 sw-5 rounded-xl me-3">
                                            <span class="icon"></span>
                                        </div>
                                        <div>
                                            <span class="text d-flex align-middle text-muted align-items-center text-small">Bread</span>
                                            <span class="value d-flex align-middle align-items-center cta-4">300</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@push('script')
    <script>
        $(document).ready(function() {

            var get_array_chart = $('#listLra').children()
            // console.log(get_array_chart);
            var i = 0;
            $.each(get_array_chart, function(indexInArray, valueOfElement) {
                var get_id_chart = valueOfElement.querySelector('.chartjs-render-monitor').id;
                var get_nilai_id_chart = valueOfElement.querySelector('.nilaiPerbandingan').id;
                var get_text_chart = valueOfElement.querySelector('.text').innerText;
                realisasiAnggaran(get_id_chart, get_nilai_id_chart, get_text_chart);
            });

            const barChart = document
                .getElementById("ipkdChart")
                .getContext("2d");
            this._roundedBarChart = new Chart(barChart, {
                type: "bar",
                options: {
                    cornerRadius: parseInt(Globals.borderRadiusMd),
                    plugins: {
                        crosshair: false,
                        datalabels: {
                            display: false
                        },
                    },
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        yAxes: [{
                            gridLines: {
                                display: true,
                                lineWidth: 1,
                                color: Globals.separatorLight,
                                drawBorder: false,
                            },
                            ticks: {
                                beginAtZero: true,
                                // stepSize: 100,
                                // min: 300,
                                // max: 800,
                                padding: 20,
                            },
                        }, ],
                        xAxes: [{
                            gridLines: {
                                display: false
                            },
                        }, ],
                    },
                    legend: {
                        position: "bottom",
                        labels: ChartsExtend.LegendLabels(),
                    },
                    tooltips: ChartsExtend.ChartTooltip(),
                },
                data: {
                    // labels: ["2020", "2021", "2022", "2023", "2024"],
                    labels: ["{!! $label_ipkd !!}"],
                    datasets: {!! $body_ipkd !!},
                    // datasets: [{
                    //         label: "Breads",
                    //         borderColor: Globals.primary,
                    //         backgroundColor: "rgba(" + Globals.primaryrgb + ",0.1)",
                    //         data: [456, 479, 424, 662, 22],
                    //         borderWidth: 2,
                    //     },
                    //     {
                    //         label: "Patty",
                    //         borderColor: Globals.secondary,
                    //         backgroundColor: "rgba(" + Globals.secondaryrgb + ",0.1)",
                    //         data: [364, 504, 605, 400, 222],
                    //         borderWidth: 2,
                    //     },
                    // ],
                },
            });
        });

        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

        function realisasiAnggaran(idChart, idNilai, title) {

            var value1 = document.getElementById(idNilai).innerText
            var value1Remove = value1.replaceAll('.', '');
            var value1Split = value1Remove.split('/');

            var chartsJs = ChartsExtend.SmallDoughnutChart(
                idChart,
                value1Split,
                title
            )

            var colorPrimary = getComputedStyle(document.body).getPropertyValue('--primary');
            var legend = chartsJs.canvas.parentElement.parentElement.querySelector(".custom-legend-container").querySelector('.value')
            chartsJs.data.datasets[0].backgroundColor[0] = colorPrimary
            chartsJs.update()

            var value1Modif = value1.split('/');
            value1Modif.forEach(function(i, element) {
                if (element === 0) {
                    // console.log('Anggran Rp. ' + i);
                    legend.innerHTML = `<div><span class="text-meduim text-primary">Anggran</span>
                                <div>Rp. ` + formatRupiah(i) + `</div>
                            </div>`
                } else {
                    // console.log('Realisasi Rp. ' + i);
                    legend.innerHTML += `<div><span class="text-medium text-primary">Realisasi</span>
                                <div> Rp. ` + formatRupiah(i) + `</div>
                            </div>`
                }
            });
        }
    </script>
@endpush
