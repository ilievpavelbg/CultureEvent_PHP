<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <title>Закупи Билет</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
    <?php include "banner.php" ?>
    <?php include "nav.php" ?>
    <div class="container mt-5">
        <img class="byTicket-overlay" src="./images/shapelined-_JBKdviweXI-unsplash.jpg">
        <div class="row">
            <div class="col-4 text-right">
                <h3 class="custom-title-red">Закупи билет</h3>
                <h3 class="custom-title-red">за събитието</h3>
            </div>
            <div class="col ml-5">
                <div class="row ml-5">
                    <p class="note-paymentForm">За да закупите своя билет за събитието, моля попълнете фолмата по-долу. </p>
                    <p class="note-paymentForm">След успешна регистрация, ще получите имейл с данни за заплащане на билета и допълнителна информация.</p>
                    <form action="register.php" method="post" class="mt-2 rounded-top rounded-bottom form-group">
                        <div class="form-outline mb-4">
                            <input type="text" name="FullName" class="form-control" placeholder="Име и фамилия" required />
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" name="Phone" class="form-control" placeholder="Телефон" required />
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="email" name="Email" class="form-control" placeholder="Имейл адрес" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" name="CosmeticCenter" class="form-control" placeholder="Име на козметичен център" required />
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" name="Address" class="form-control" placeholder="Адрес" required />
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mb-4">Регистрация</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container mb-3 mt-3">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-8">
                        <p class="small-title">Цените на билетите за отделните панели са както следва : </p>
                        <div class="row mt-3">
                            <div class="col">
                                <p class="price-title">Basic:</p>
                                <p class="price-description">До 24.11 - 130лв.</p>
                                <p class="price-description">До 25.11 - 150лв. (възможно е плащане на място)</p>
                            </div>
                            <div class="col">
                                <p class="price-title">Premium:<span class="price-premium">(с включен коктейл и вечеря)</span></p>
                                <p class="price-description">До 24.11 - 160лв.</p>
                                <p class="price-description">До 25.11 - 220лв. (възможно е плащане на място)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<footer class="footer mt-auto py-1">
    <?php include "footer_nav.php" ?>
</footer>

</html>