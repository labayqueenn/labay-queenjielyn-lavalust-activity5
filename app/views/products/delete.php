<?php 
 
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); 
 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
 
    <meta charset="UTF-8"> 
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 
    <title>Delete School Supply</title> 
 
    <style> 
 
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: #eaf7ff;
            font-family: "Trebuchet MS", Arial, sans-serif;
            color: #40586b;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 30px 20px;
        }

        /* =========================
           DECORATIONS
        ========================= */

        body::before {
            content: "✦  ✿  ♡  ✏️  ★";
            position: fixed;
            top: 25px;
            left: 25px;
            color: #a8d5e9;
            font-size: 23px;
            letter-spacing: 13px;
            opacity: 0.65;
        }

        body::after {
            content: "📚  ✦  ♡  ✿  ✎";
            position: fixed;
            bottom: 25px;
            right: 25px;
            color: #a8d5e9;
            font-size: 21px;
            letter-spacing: 12px;
            opacity: 0.65;
        }

        /* =========================
           MAIN
        ========================= */

        .page {
            width: 100%;
            max-width: 720px;
        }

        /* =========================
           HEADER
        ========================= */

        .brand {
            text-align: center;
            margin-bottom: 22px;
        }

        .brand-icon {
            width: 65px;
            height: 65px;
            margin: 0 auto 12px;
            background: #ffffff;
            border: 3px solid #acd7e9;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            transform: rotate(4deg);
            box-shadow: 5px 6px 0 #c4e2ed;
        }

        .brand h1 {
            margin: 0;
            color: #3d83aa;
            font-size: 27px;
            letter-spacing: 2px;
        }

        .brand p {
            margin: 5px 0 0;
            color: #88a4b4;
            font-size: 10px;
            letter-spacing: 1.5px;
        }

        /* =========================
           WARNING BOARD
        ========================= */

        .warning-board {
            background: #ffffff;
            border: 3px solid #c3e1ed;
            border-radius: 24px;
            padding: 28px;
            box-shadow: 8px 10px 0 rgba(86, 145, 171, 0.12);
            position: relative;
        }

        .warning-board::before {
            content: "";
            position: absolute;
            top: 0;
            left: 22px;
            right: 22px;
            border-top: 3px dashed #d6ebf3;
        }

        /* =========================
           WARNING STICKER
        ========================= */

        .warning-sticker {
            width: 110px;
            height: 110px;
            margin: 10px auto 20px;

            background: #fff5b8;
            border: 4px solid #efd86e;
            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 48px;

            transform: rotate(-6deg);

            box-shadow: 6px 7px 0 #e9dca0;
        }

        .warning-title {
            text-align: center;
            margin-bottom: 18px;
        }

        .warning-title h2 {
            margin: 0;
            color: #4d6879;
            font-size: 25px;
        }

        .warning-title p {
            margin: 7px 0 0;
            color: #8ba0ac;
            font-size: 12px;
        }

        /* =========================
           MESSAGE
        ========================= */

        .question {
            max-width: 500px;
            margin: 0 auto 18px;
            padding: 14px 18px;

            background: #f3faff;
            border: 2px dashed #b9ddea;
            border-radius: 14px;

            text-align: center;
            color: #698292;
            font-size: 13px;
            line-height: 1.6;
        }

        /* =========================
           PRODUCT TAG
        ========================= */

        .product-tag {
            width: fit-content;
            max-width: 90%;
            margin: 0 auto 25px;

            background: #fff0f4;
            border: 2px solid #efcbd5;

            padding: 13px 25px;
            border-radius: 13px;

            text-align: center;

            color: #bd7082;
            font-size: 17px;

            position: relative;
        }

        .product-tag::before {
            content: "♡";
            margin-right: 7px;
        }

        .product-tag::after {
            content: "♡";
            margin-left: 7px;
        }

        /* =========================
           BUTTON AREA
        ========================= */

        .actions {
            display: flex;
            justify-content: center;
            gap: 12px;
            max-width: 430px;
            margin: 0 auto;
        }

        button {
            flex: 1;
            padding: 13px 20px;

            border: none;
            border-radius: 13px;

            background: #ef8fa4;
            color: #ffffff;

            font-family: inherit;
            font-size: 12px;
            font-weight: bold;

            cursor: pointer;

            box-shadow: 0 4px 0 #d36f86;
            transition: 0.2s;
        }

        button:hover {
            background: #e47d94;
            transform: translateY(2px);
            box-shadow: 0 2px 0 #d36f86;
        }

        .cancel {
            flex: 1;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 13px 20px;

            border: 2px solid #bcddea;
            border-radius: 13px;

            background: #edf9ff;
            color: #54849c;

            text-decoration: none;

            font-size: 12px;
            font-weight: bold;

            transition: 0.2s;
        }

        .cancel:hover {
            background: #dff3fc;
        }

        /* =========================
           SMALL NOTE
        ========================= */

        .note {
            margin: 25px auto 0;
            max-width: 450px;

            text-align: center;

            color: #93a6b1;
            font-size: 10px;
            line-height: 1.6;
        }

        /* =========================
           FOOTER
        ========================= */

        .footer {
            text-align: center;
            margin-top: 20px;

            color: #83a4b5;
            font-size: 10px;
            letter-spacing: 1.5px;
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 550px) {

            body {
                padding: 25px 15px;
            }

            .warning-board {
                padding: 23px 17px;
            }

            .brand h1 {
                font-size: 23px;
            }

            .warning-sticker {
                width: 90px;
                height: 90px;
                font-size: 39px;
            }

            .warning-title h2 {
                font-size: 21px;
            }

            .actions {
                flex-direction: column;
            }

            button,
            .cancel {
                width: 100%;
            }

            .product-tag {
                font-size: 15px;
            }

        }

    </style>

</head>


<body>


<div class="page">


    <!-- =========================
         BRAND
    ========================= -->

    <div class="brand">

        <div class="brand-icon">
            📚
        </div>

        <h1>
            STUDY SUPPLIES
        </h1>

        <p>
            SCHOOL SUPPLIES MANAGEMENT
        </p>

    </div>


    <!-- =========================
         WARNING BOARD
    ========================= -->

    <div class="warning-board">


        <!-- WARNING STICKER -->

        <div class="warning-sticker">
            🥺
        </div>


        <!-- TITLE -->

        <div class="warning-title">

            <h2>
                Wait! Don't Delete Yet! ♡
            </h2>

            <p>
                Please check the item before removing it.
            </p>

        </div>


        <!-- MESSAGE -->

        <div class="question">

            Are you sure you want to delete this
            school supply from your inventory?

        </div>


        <!-- PRODUCT -->

        <p class="product-tag">

            <strong>

                <?php echo html_escape($product['product_name']); ?>

            </strong>

        </p>


        <!-- ACTIONS -->

        <form
            action="<?php echo site_url('products/delete/' . $product['id']); ?>"
            method="POST"
        >

            <div class="actions">


                <button type="submit">

                    🗑️ Yes, Delete

                </button>


                <a
                    class="cancel"
                    href="<?php echo site_url('products'); ?>"
                >

                    ♡ Keep This Item

                </a>


            </div>

        </form>


        <!-- NOTE -->

        <div class="note">

            ✦ Deleting this item will remove it from your
            school supplies inventory. ✦

        </div>


    </div>


    <!-- FOOTER -->

    <div class="footer">

        ✦ STUDY SUPPLIES MANAGEMENT SYSTEM • MADE WITH ♡ ✦

    </div>


</div>


</body>

</html>