<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Hi</title>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-size: 15px;
        }

        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <tbody>
            <tr>
                <td>POLYPHARMA SARL</td>
                <td rowspan="2">FICHE DE DEMANDE DE <br> PERMISSION/CONGES</td>
                <td>POLYFORH03v01 <br>De Décembre 2022</td>
            </tr>
            <tr>
                <td>FORMULAIRE</td>
                <td>Page 1 sur 1</td>
            </tr>
        </tbody>
    </table>


    <h1 style="color: aqua; text-align:center;">{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p class="text-danger float-end">{{ $name }}</p>
    <p class="text-danger">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>

</html>
