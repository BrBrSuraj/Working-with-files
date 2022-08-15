<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transaction report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">



        <table class="table">
            <thead>
                <tr class="thead bg-info">
                    <th scope="col">Date</th>
                    <th scope="col">Check Number</th>
                    <th scope="col">Transaction</th>
                    <th scope="col">Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transactions as $data) : ?>
                    <tr>
                        <th scope="row"><?= $data['date'] ?></th>
                        <th scope="row"><?= $data['num'] ?></th>
                        <th scope="row"><?= $data['transaction'] ?></th>
                        <th scope="row"><?= $data['amount'] ?></th>
                    </tr>
                <?php endforeach ?>
                <tr>

                    <th class="text-danger" colspan="3" scope="row">Total Expenditure: <?= $expance ?></th>
                </tr>
                <tr>
                    <th class="text-success" colspan="3" scope="row">Total Income: <?= $income ?></th>
                </tr>
                <tr>
                    <th class="text-success" colspan="3" scope="row">Total Saving: <?= $income + $expance ?></th>
                </tr>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>