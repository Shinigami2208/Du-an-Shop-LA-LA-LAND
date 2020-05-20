<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>La La Land: Thành phố ngàn sao</title>
        <style type="text/css" rel="stylesheet">
            * {
                    box-sizing: border-box;
                    padding: 0;
                    margin: 0;
                }

                    a{
                        text-decoration: none;
                }

                    li{
                        list-style-type: none;
                }

                    .container-flex {
                        max-width: 1140px;
                        width: 100%;
                        padding-right: 15px;
                        padding-left: 15px;
                        margin: 0 auto;
                }

                    .row-flex{
                        display: flex;
                        flex-wrap: wrap;
                }

                    .row-flex-nowrap{
                        display: flex;
                        flex-wrap: nowrap;
                }
                /* Section title */
                .section-title{
                    text-transform: uppercase;
                    color: #AFB0AF;
                    margin-bottom: 10px;
                }

                .gutter-5 > [class*='col-'] {
                    padding-right:5px;
                    padding-left:5px;
                }
                .gutter-25 > [class*='col-'] {
                    padding-right:25px;
                    padding-left:25px;
                }
                .discovery-more{
                    display: flex;
                    justify-content: center;
                    margin-top: 20px;
                }

                .discovery-more-content{
                    font-size: 1rem ;
                    font-weight: bold;
                    text-align: center;
                    position: absolute;
                    width: 120px;
                    display: block;
                    font-size: 0.7rem;
                    font-style: italic;
                }

                .discovery-more-border{
                    border-top:3px solid #AFB0AF;
                    width: 30%;
                    position: relative;
                    margin-left: 40px;
                }

                .discovery-more a{
                    color: #AFB0AF;
                }
                .discovery-more a:hover{
                    text-decoration: none;
                    color: #AFB0AF;
                    opacity: 0.5;
                }

                .discovery-more-content:hover .discovery-more-border{
                    opacity: 0.5;
                }
                .border-section{
                    border-bottom: 1px solid gray;
                    margin-bottom: 20px;
                }

                /* Home product Item */
                .home-product-list-item{
                    flex-grow: 1;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    margin-bottom: 20px;
                    transition: all 0.3s;
                    border-radius: 5px;
                    width: 100%;
                }

                .home-product-list-item:hover{
                    transform: translateY(-5px);
                    border-top: 1px solid gray;
                    border-right: 1px solid gray;
                    box-shadow: 2px -2px 5px;
                }

                .home-product-list-item:hover .btn-view-add-to-cart{
                    display: block;
                }

                .home-product-list-item:last-child{
                    margin-right: 0px;
                }

                .home-product-list-item-photo{
                    height: auto;
                    width: 100%;
                    background-size: cover;
                    cursor: pointer;
                    border-radius: 3px;
                    object-fit: contain;
                    
                }
                /* btn Add to Cart */
                .contain-add-to-cart{
                    position: relative;
                    display: flex;
                    justify-content: center;
                }

                .btn-view-add-to-cart{
                    background-color:#999 ;
                    display: none;
                    color: white;
                    padding-bottom: 5px;
                    padding-top: 5px;
                    width: 50px;
                    font-size: 1.2rem;
                    text-align: center;
                    border-radius: 5px;
                    margin-top: 40px;
                    position: absolute;
                    bottom: 100%;
                    border: none;
                    transition: display 0.3s ease-in-out;
                }

                .btn-view-add-to-cart:hover{
                    color: white;
                    background-color: #c8b560;
                }
        </style>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        <div id="app" class="flex-center position-ref full-height">
            <router-view></router-view>
        </div>
    </body>
    <script src="{{ url('js/app.js') }}"></script>
</html>

