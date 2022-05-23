<!DOCTYPE html>
<html lang="en">
<head>
    <x-client.head.head-page-component />
</head>
<body>
    <!-- <x-client.form.form-lead-component /> -->
    <x-client.header.header-lk-component />

    <main class="main"> 
        <div class="container">
            <div class="row m-block">
                <div class="col-9">
                    <h1 class="mt-5">Тарифы</h1>
                </div>
                <div class="col-3">

                </div>
            </div>
            <nav class="site-nav lk-nav mt-5 m-none">
                <ul>
                    <li><a href="/account/profile" <?php if ( Route::current()->uri == "account/profile") print("class='current-page'");?>>Аккаунт</a></li>
                    <li><a href="/account/courses" <?php if ( Route::current()->uri == "account/courses") print("class='current-page'");?>>Мои курсы</a></li>
                    <li><a href="/account/actions" <?php if ( Route::current()->uri == "account/actions") print("class='current-page'");?>>Мои акции</a></li>
                    <li><a href="/account/tarif" <?php if ( Route::current()->uri == "account/tarif") print("class='current-page'");?>>Тарифы и оплата</a></li>
                </ul>
            </nav>


            <div class="row mt-5 justify-content-between section-last">
                <div class="col-md-7 order-2 order-md-1 mt-3 mt-md-0">
                    <h2>Как оплатить</h1>
                    <p>
                        Повседневная практика показывает, что постоянный количественный рост и сфера нашей 
                        активности обеспечивает широкому кругу (специалистов) участие в формировании форм развития. 
                        Повседневная практика показывает, что постоянный количественный рост и сфера нашей активности 
                        представляет собой интересный эксперимент проверки позиций, занимаемых участниками в отношении 
                        поставленных задач. Разнообразный и богатый опыт новая модель организационной деятельности способствует по
                    </p>
                    <?php if ( $school->tarif()->first() != null ): ?>
                    <h2>Стоимость размещения</h2>
                    <div class="price-col">
                        <div>
                            <h4 class="m-0">1 месяц</h4>
                            <div class="mt-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.50002 6.00002C7.20334 6.00002 6.91333 6.08799 6.66666 6.25281C6.41999 6.41763 6.22773 6.6519 6.1142 6.92599C6.00067 7.20008 5.97096 7.50168 6.02884 7.79265C6.08672 8.08362 6.22958 8.3509 6.43936 8.56068C6.64914 8.77046 6.91641 8.91332 7.20738 8.97119C7.49835 9.02907 7.79995 8.99937 8.07404 8.88584C8.34813 8.7723 8.5824 8.58005 8.74722 8.33337C8.91204 8.0867 9.00002 7.79669 9.00002 7.50002C9.00002 7.10219 8.84198 6.72066 8.56068 6.43936C8.27937 6.15805 7.89784 6.00002 7.50002 6.00002V6.00002ZM21.12 10.71L12.71 2.29002C12.6166 2.19734 12.5058 2.12401 12.3839 2.07425C12.2621 2.02448 12.1316 1.99926 12 2.00002H3.00002C2.7348 2.00002 2.48045 2.10537 2.29291 2.29291C2.10537 2.48045 2.00002 2.7348 2.00002 3.00002V12C1.99926 12.1316 2.02448 12.2621 2.07425 12.3839C2.12401 12.5058 2.19734 12.6166 2.29002 12.71L10.71 21.12C11.2725 21.6818 12.035 21.9974 12.83 21.9974C13.625 21.9974 14.3875 21.6818 14.95 21.12L21.12 15C21.6818 14.4375 21.9974 13.675 21.9974 12.88C21.9974 12.085 21.6818 11.3225 21.12 10.76V10.71ZM19.71 13.53L13.53 19.7C13.3427 19.8863 13.0892 19.9908 12.825 19.9908C12.5608 19.9908 12.3074 19.8863 12.12 19.7L4.00002 11.59V4.00002H11.59L19.71 12.12C19.8027 12.2135 19.876 12.3243 19.9258 12.4461C19.9756 12.5679 20.0008 12.6984 20 12.83C19.9989 13.0924 19.8948 13.3438 19.71 13.53V13.53Z" fill="#E61D2B"/>
                                </svg>                                                    
                                <span class="lk-price"><?=(isset($school->tarif()->first()->price_1) ? $school->tarif()->first()->price_1 . " $" : "") ?></span>
                            </div>
                        </div>
                        <div>
                            <h4 class="m-0">3 месяца</h4>
                            <div class="mt-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.50002 6.00002C7.20334 6.00002 6.91333 6.08799 6.66666 6.25281C6.41999 6.41763 6.22773 6.6519 6.1142 6.92599C6.00067 7.20008 5.97096 7.50168 6.02884 7.79265C6.08672 8.08362 6.22958 8.3509 6.43936 8.56068C6.64914 8.77046 6.91641 8.91332 7.20738 8.97119C7.49835 9.02907 7.79995 8.99937 8.07404 8.88584C8.34813 8.7723 8.5824 8.58005 8.74722 8.33337C8.91204 8.0867 9.00002 7.79669 9.00002 7.50002C9.00002 7.10219 8.84198 6.72066 8.56068 6.43936C8.27937 6.15805 7.89784 6.00002 7.50002 6.00002V6.00002ZM21.12 10.71L12.71 2.29002C12.6166 2.19734 12.5058 2.12401 12.3839 2.07425C12.2621 2.02448 12.1316 1.99926 12 2.00002H3.00002C2.7348 2.00002 2.48045 2.10537 2.29291 2.29291C2.10537 2.48045 2.00002 2.7348 2.00002 3.00002V12C1.99926 12.1316 2.02448 12.2621 2.07425 12.3839C2.12401 12.5058 2.19734 12.6166 2.29002 12.71L10.71 21.12C11.2725 21.6818 12.035 21.9974 12.83 21.9974C13.625 21.9974 14.3875 21.6818 14.95 21.12L21.12 15C21.6818 14.4375 21.9974 13.675 21.9974 12.88C21.9974 12.085 21.6818 11.3225 21.12 10.76V10.71ZM19.71 13.53L13.53 19.7C13.3427 19.8863 13.0892 19.9908 12.825 19.9908C12.5608 19.9908 12.3074 19.8863 12.12 19.7L4.00002 11.59V4.00002H11.59L19.71 12.12C19.8027 12.2135 19.876 12.3243 19.9258 12.4461C19.9756 12.5679 20.0008 12.6984 20 12.83C19.9989 13.0924 19.8948 13.3438 19.71 13.53V13.53Z" fill="#E61D2B"/>
                                </svg>                                                    
                                <span class="lk-price"><?=(isset($school->tarif()->first()->price_3) ? $school->tarif()->first()->price_3 . " $" : "") ?></span>
                            </div>
                        </div>
                    </div>                        
                    <?php endif ?>
                </div>
                <div class="col-md-4 order-1 order-md-2">
                    <?php if ( $school->tarif()->first() != null ): ?>
                        <div class="you-tarif p-4 p-md-5 p-relative">
                            <h3 class="m-0">
                                Ваш тариф: 
                                <br />
                                <?=$school->tarif()->first()->title ?>
                                </h3>
                            <p></p>
                            <h4 class="m-0">Дата окончания тарифа</h4>
                            <p class="tarif-date mt-2 mb-4">
                                <!-- 20.12.2022г. -->
                                -
                            </p>
                            <a href="/account/tarif/<?=$school->tarif()->first()->slug ?>" class="btn btn-red">Оплатить тариф</a>
                            <img src="/resources/img/tarif.svg" class="tarif-img" alt="" />
                        </div>
                    <?php else: ?>
                        <div class="you-tarif p-4 p-md-5 p-relative">
                            <h3 class="m-0">Ваш тариф</h3>
                            <p>Вы пользуетесь бесплатной пробной версией» и срок её окончания.</p>
                            <h4 class="m-0">Дата окончания тарифа</h4>
                            <p class="tarif-date mt-2 mb-4">
                                <!-- 20.12.2022г. -->
                                -
                            </p>
                            <a href="#" class="btn btn-red">Оплатить тариф</a>
                            <img src="/resources/img/tarif.svg" class="tarif-img" alt="" />
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <?=$template["paginated"] ?>    
            
        </div>
    </main>

    <x-client.footer.footer-component />
</body>
</html>