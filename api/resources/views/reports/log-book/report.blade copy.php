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
            }

            /** Define the footer rules **/
            footer {
                position: fixed;
                bottom: 0cm;
                left: 0cm;
                right: 0cm;
                height: 2cm;
            }


        </style>
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <header class="bg-gray">
            <!-- <img src="header.png" width="100%" height="100%"/> -->
        </header>

        <footer class="bg-gray">
            <!-- <img src="footer.png" width="100%" height="100%"/> -->
        </footer>

        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
            Montenegro Airlines
        </main>
    </body>
</html>
