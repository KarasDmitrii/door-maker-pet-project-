<?php
class Html
{
 
    public function getHtml($data)
    {
        return <<<HERE
        <!DOCTYPE html>
        <html>

        <head>
            <title>Заказ</title>
            <style>
            body { font-family: DejaVu Sans }
            .content {
                display: block;
                margin: 2%;
                border: 2px solid gray;
                padding-bottom: 4%;
            }
    
            .param {
                border: 2px solid gray;
                margin: 0% 10% 4% 10%;
                padding: 1%;
                line-height: normal;
            }
    
            .name {
                display: inline-block;
            }
    
            .text {
                text-align: center;
                margin-top: 3%;
                margin-bottom: 3%;
                font-size: xx-large;
            }
    
            .value {
                display: inline-block;
                margin-left: 2%;
                text-align: end;
            }
    
            .priceBox {
            }
            .priceBlock {
                border: 3px solid rgb(97, 92, 92);
                 display:inherit; 
                margin-right: 10%;
                margin-left: 40%;
                padding: 5px;
            }
            .price {
                box-sizing: border-box;
                display: inline-block;
                font-size: large;
                margin-left: 1%;
            }
    
            .namePrice {
                box-sizing: border-box;
                display: inline-block;
                font-size: x-large;
            }
            </style>
        </head>

        <div class="content">
    <h1 class="text">Детали заказа</h1>

    <div class="param">
        <div class="name">Цвет покраски:</div>
        <div class="value">{$data["colorPrint"]}</div>
    </div>
    <div class="param">
        <div class="name">Цвет плёнки:</div>
        <div class="value">{$data["colorSkin"]}</div>
    </div>
    <div class="param">
        <div class="name">Цвет ручки:</div>
        <div class="value">{$data["colorHandle"]}</div>
    </div>
    <div class="param">
        <div class="name">Ширина:</div>
        <div class="value">{$data["width"]}</div>
    </div>
    <div class="param">
        <div class="name">Высота:</div>
        <div class="value">{$data["height"]}</div>
    </div>
    <div class="param">
        <div class="name">Открвывание:</div>
        <div class="value">{$data["opened"]}</div>
    </div>
    <div class="param">
        <div class="name">Аксессуары:</div>
        <div class="value">{$data["acces"]}</div>
    </div>
    <div class="priceBox">
        <div class="priceBlock">
            <div class="namePrice">Стоимость:</div>
            <div class="price">{$data["price"]} руб.</div>
        </div>
    </div>

</div>
</body>

</html>
HERE;

    }
}