<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Hi</title>

    <style type="text/css">
        .entete {
            margin: 25px 25px 50px 25px;
            font-weight: 700;
        }

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

        /* Styles pour aligner les éléments horizontalement et répartir l'espace entre eux */
        /* .entete1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0px 25px 25px 25px;
            font-weight: 700;

        }

        /* Styles pour les étiquettes des cases à cocher */
        /* .form-check-label {
            font-weight: bold;
        }*/
        .entete2 {
            overflow: hidden;
            justify-content: space-between;
            align-items: center;
            margin: 0px 25px 25px 25px;
            font-weight: 700;
            /* Clearfix pour contenir les éléments flottants */
        }

        .form-check {
            float: left;
            /* Flotte les éléments à gauche */
            margin-right: 25px;
            margin-left: 15px;
            font-size: 15px;

            /* Marge à droite pour espacement */
        }
    </style>
</head>

<body>
    <div class="entete">
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
    </div>

    {{-- 
    <div class="entete1">
        <div class="form-check">
            <input class="form-check-input border border-success" value="absence" type="radio" name="radio"
                id="flexRadioDefault1">
            <label class="form-check-label fw-bolder" for="flexRadioDefault1">
                ABSENCE
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input border border-success" value="conge_annuel" type="radio" name="radio"
                id="flexRadioDefault2">
            <label class="form-check-label fw-bolder" for="flexRadioDefault2">
                CONGES ANNUELS
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input border border-success" value="conge_maternite" type="radio" name="radio"
                id="flexRadioDefault3">
            <label class="form-check-label fw-bolder" for="flexRadioDefault3">
                CONGES E DE MATERNITE
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input border border-success" value="autre" type="radio" name="radio"
                id="flexRadioDefault4">
            <label class="form-check-label fw-bolder" for="flexRadioDefault4">
                AUTRES A PRECISER: Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae debitis aperiam incidunt perspiciatis quasi nulla fuga dolore vitae unde ducimus, quae dolorum. Nesciunt rerum maxime esse. Ipsa libero necessitatibus vitae.
            </label>
        </div>
        <div class="clearfix"></div> <!-- Pour éviter le "clearfix" et gérer le flottement -->
    </div> --}}
    <div style="margin-left: 20px;">
        <span style="margin-right: 30px; font-weight:bold;">
            <input class="form-check-input border border-success" value="absence" type="radio" name="radio"
                id="flexRadioDefault1">
            <label class="form-check-label fw-bolder" for="flexRadioDefault1">
                ABSENCE
            </label>
        </span>
        <span style="margin-right: 30px; font-weight:bold;">
            <input class="form-check-input border border-success" value="absence" type="radio" name="radio"
                id="flexRadioDefault1">
            <label class="form-check-label fw-bolder" for="flexRadioDefault1">
                CONGES ANNUELS
            </label>
        </span>
        <span style="margin-right: 30px; margin-bottom:10px; font-weight:bold;">
            <input class="form-check-input border border-success" value="absence" type="radio" name="radio"
                id="flexRadioDefault1">
            <label class="form-check-label fw-bolder" for="flexRadioDefault1">
                CONGES E DE MATERNITE
            </label>
        </span>
            <input class="form-check-input border border-success" value="absence" type="radio" name="radio"
                id="flexRadioDefault1">
            <label style="font-weight:bold;" class="form-check-label fw-bolder" for="flexRadioDefault1">
                AUTRES A PRECISER: 
            </label><span style="margin-top:20px;"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sit excepturi.</span>
      
    </div>

</body>

</html>
