<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        /**
                Set the margins of the page to 0, so the footer and the header
                can be of the full height and width !
             **/
        @page {
            margin: 0cm 0cm;
        }

        /** Define now the real margins of every page in the PDF **/
        body {
            margin-top: 3cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;

            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
        }

        /** Define the header rules **/
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
            /* border: 2px solid black; */
        }

        /** Define the footer rules **/
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            /* border: 2px solid black; */
        }

        table {
            width: 100%
        }
    </style>
    <script src="{{ asset('global_assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/visualization/echarts/echarts.min.js') }}"></script>
</head>

<body>
    <!-- Define header and footer blocks before your content -->
    <header class="bg-gray-300">
        <!-- <img src="header.png" width="100%" height="100%"/> -->
    </header>

    <footer class="bg-gray-300">
        <!-- <img src="footer.png" width="100%" height="100%"/> -->
    </footer>
    <main>

        <table class="table table-striped bg-gray-800">
            <thead>
                <tr>
                    <th align=center>#</th>
                    <th align=center>Aircraft Reg</th>

                    <th align=right>Flight Cycles</th>
                    <th align=right>Flight Hours</th>
                </tr>
            </thead>
            <tbody>
                @php
                $totalCycles = 0;
                $totalHours = 0;
                $i = 1;
                @endphp
                @foreach($logBookRes as $res)
                @php
                $totalCycles += $res->total_cycles;
                $totalHours += $res->total_hours;
                @endphp
                <tr>
                    <td align=center>{{ $i++ }}</td>
                    <td align=center>{{ $res->aircraft_reg }}</td>

                    <td align=right>{{ $res->total_cycles }}</td>
                    <td align=right>{{ $res->total_hours }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="bg-primary">
                    <td class="center"></td>
                    <td class="left"></td>

                    <th align=right>{{ $totalCycles }}</th>
                    <th align=right>{{ $totalHours }}</th>
                </tr>
            </tfoot>
        </table>

    </main>
</body>

</html>
