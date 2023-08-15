<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inter pdf</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="card container mt-3">
        <div class="card-header bg-success">
            REMPLISSEZ LES CHAMPS DE FORMULAIRE
        </div>
        <div class="card-body">
            <form class="mt-5" action="{{ route('generate-pdf') }}">
                <div class="d-flex justify-content-between">
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
                        <input class="form-check-input border border-success" value="conge_maternite"  type="radio" name="radio"
                            id="flexRadioDefault3">
                        <label class="form-check-label fw-bolder" for="flexRadioDefault3">
                            CONGES E DE MATERNITE
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input border border-success" value="autre"  type="radio" name="radio"
                            id="flexRadioDefault4">
                        <label class="form-check-label fw-bolder" for="flexRadioDefault4">
                            AUTRES A PRECISER
                        </label>
                        <div class="">
                            <textarea class="form-control border border-success" name="autre" id="" cols="30" rows="0"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-12  mb-4">
                    <label class="fw-bolder mb-2" for="motif_absence">MOTIF D'ABSENCE <span
                            class="text-danger">*</span></label>
                    <input class="form-control border border-success" type="text" name="motif" id="motif">
                </div>
                <label class="fw-bolder" for="periode">PERIODE DE LA DEMANDE <span class="text-danger">*</span></label>
                <div class="col-md-12 row mb-4">
                    <div class="col-md-6">
                        <label class="fw-bolder" for="">Du</label>
                        <input class="form-control border border-success" type="date" name="date_debut"
                            id="">
                    </div>
                    <div class="col-md-6">
                        <label class="fw-bolder" for="">Au</label>
                        <input class="form-control border border-success" type="date" name="date_fin" id="">
                    </div>
                </div>
                <div class="col-md-12  mb-4">
                    <label class="fw-bolder mb-2" for="motif_absence">Date de reprise <span
                            class="text-danger">*</span></label>
                    <input class="form-control border border-success" type="date" name="date_reprise" id="">
                </div>

                <div class="col-md-12 mb-4 d-flex justify-content-evenly">
                    <h5 class="fw-bolder mb-2" for="permission">Permission déductible sur congés:</h5>
                    <div class="form-check">
                        <input class="form-check-input border border-success" value="non" type="radio" name="radio1"
                            id="flexRadioDefault5">
                        <label class="form-check-label fw-bolder" for="flexRadioDefault5">
                            NON
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input border border-success" value="oui"  type="radio" name="radio1"
                            id="flexRadioDefault6">
                        <label class="form-check-label fw-bolder" for="flexRadioDefault6">
                            OUI
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input border border-success" value="autres" type="radio" name="radio1"
                            id="radio1">
                        <label class="form-check-label fw-bolder" for="radio1">
                            Autres
                        </label>
                        <input class="form-control border border-success" type="text" name="autres"
                            id="autre">
                    </div>
                </div>
                <button class="btn btn-primary fw-bolder" type="submit"><i class="fa-solid fa-print"></i>Imprimer</button>
            </form>
        </div>
    </div>
</body>

</html>
