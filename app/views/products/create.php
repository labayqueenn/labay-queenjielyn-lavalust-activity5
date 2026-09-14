<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Add School Supply</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: #eaf7ff;
            font-family: "Trebuchet MS", Arial, sans-serif;
            color: #42596d;
            padding: 30px 20px;
        }

        /* =========================
           BACKGROUND DOODLES
        ========================= */

        body::before {
            content: "✦ ✏️ ♡ 📚 ✿ ★ ✎";
            position: fixed;
            top: 22px;
            right: 25px;
            color: #a8d6ec;
            font-size: 22px;
            letter-spacing: 13px;
            opacity: 0.65;
            pointer-events: none;
        }

        body::after {
            content: "♡ ✦ ✿ ✏️ 📒";
            position: fixed;
            bottom: 22px;
            left: 25px;
            color: #afd9eb;
            font-size: 22px;
            letter-spacing: 14px;
            opacity: 0.65;
            pointer-events: none;
        }

        /* =========================
           MAIN
        ========================= */

        .page {
            width: 100%;
            max-width: 950px;
            margin: 0 auto;
        }

        /* =========================
           HEADER
        ========================= */

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 22px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .brand-icon {
            width: 58px;
            height: 58px;
            background: #ffffff;
            border: 3px solid #a8d5e9;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            transform: rotate(-4deg);
            box-shadow: 4px 5px 0 #c3e2ef;
        }

        .brand h1 {
            margin: 0;
            color: #3d86ad;
            font-size: 24px;
            letter-spacing: 1.5px;
        }

        .brand p {
            margin: 4px 0 0;
            color: #87a2b3;
            font-size: 10px;
            letter-spacing: 1px;
        }

        .back-top {
            text-decoration: none;
            background: #ffffff;
            border: 2px solid #c1dfed;
            color: #5486a0;
            padding: 10px 14px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: bold;
        }

        .back-top:hover {
            background: #eefaff;
        }

        /* =========================
           CONTENT
        ========================= */

        .content {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 22px;
        }

        /* =========================
           LEFT CARD
        ========================= */

        .welcome-card {
            background: #d9f1ff;
            border: 3px solid #a8d5ea;
            border-radius: 22px;
            padding: 28px 22px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .welcome-card::before {
            content: "✦";
            position: absolute;
            top: 15px;
            left: 18px;
            color: #7bb8d8;
            font-size: 20px;
        }

        .welcome-card::after {
            content: "♡";
            position: absolute;
            right: 18px;
            top: 14px;
            color: #83bdd9;
            font-size: 23px;
        }

        .big-icon {
            width: 105px;
            height: 105px;
            margin: 22px auto 18px;
            background: #ffffff;
            border-radius: 50%;
            border: 4px solid #a7d5ea;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            box-shadow: 0 8px 0 #b6ddea;
        }

        .welcome-card h2 {
            margin: 0;
            color: #407e9f;
            font-size: 22px;
        }

        .welcome-card p {
            margin: 10px 5px 0;
            color: #6d8da0;
            font-size: 12px;
            line-height: 1.7;
        }

        .mini-note {
            margin-top: 25px;
            background: #fffce5;
            border: 2px solid #eee09c;
            padding: 13px;
            border-radius: 12px;
            color: #82939c;
            font-size: 10px;
            line-height: 1.6;
            transform: rotate(2deg);
        }

        /* =========================
           FORM CARD
        ========================= */

        .form-card {
            background: #ffffff;
            border: 3px solid #c0dfed;
            border-radius: 22px;
            padding: 32px;
            box-shadow: 7px 9px 0 rgba(104, 157, 181, 0.12);
        }

        .form-heading {
            margin-bottom: 25px;
            padding-bottom: 16px;
            border-bottom: 2px dashed #c9e4ef;
        }

        .form-heading h2 {
            margin: 0;
            color: #3f82a5;
            font-size: 23px;
        }

        .form-heading p {
            margin: 6px 0 0;
            color: #91a5b0;
            font-size: 11px;
        }

        /* =========================
           FORM
        ========================= */

        .field {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            color: #527489;
            font-size: 12px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 13px 14px;
            border: 2px solid #d1e7f1;
            border-radius: 12px;
            background: #fafdff;
            color: #40586a;
            font-family: "Trebuchet MS", Arial, sans-serif;
            font-size: 13px;
            outline: none;
            transition: 0.2s;
        }

        input:focus,
        textarea:focus {
            border-color: #70b5d5;
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(112, 181, 213, 0.12);
        }

        input::placeholder,
        textarea::placeholder {
            color: #a9bdc8;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
            line-height: 1.5;
        }

        /* =========================
           SUBMIT
        ========================= */

        .submit-btn {
            width: 100%;
            margin-top: 7px;
            padding: 14px;
            border: none;
            border-radius: 14px;
            background: #68afd3;
            color: #ffffff;
            font-family: inherit;
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 5px 0 #448eaf;
            transition: 0.2s;
        }

        .submit-btn:hover {
            background: #529dc4;
            transform: translateY(2px);
            box-shadow: 0 3px 0 #448eaf;
        }

        /* =========================
           BOTTOM BACK
        ========================= */

        .back-bottom {
            display: block;
            margin-top: 17px;
            text-align: center;
            text-decoration: none;
            color: #6b94a9;
            font-size: 11px;
            font-weight: bold;
        }

        .back-bottom:hover {
            color: #3f82a5;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            text-align: center;
            margin-top: 25px;
            color: #83a4b5;
            font-size: 10px;
            letter-spacing: 1.5px;
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 720px) {

            body {
                padding: 20px 14px;
            }

            .header {
                align-items: flex-start;
                gap: 12px;
            }

            .brand h1 {
                font-size: 19px;
            }

            .brand p {
                font-size: 8px;
            }

            .brand-icon {
                width: 48px;
                height: 48px;
                font-size: 23px;
            }

            .back-top {
                font-size: 9px;
                padding: 8px 10px;
            }

            .content {
                grid-template-columns: 1fr;
            }

            .welcome-card {
                padding: 20px;
            }

            .big-icon {
                width: 80px;
                height: 80px;
                font-size: 36px;
            }

            .form-card {
                padding: 24px 19px;
            }

        }

    </style>

</head>


<body>


<div class="page">


    <!-- =========================
         HEADER
    ========================= -->

    <div class="header">

        <div class="brand">

            <div class="brand-icon">
                📚
            </div>

            <div>

                <h1>
                    STUDY SUPPLIES
                </h1>

                <p>
                    SCHOOL ESSENTIALS MANAGEMENT
                </p>

            </div>

        </div>


        <a
            href="/products"
            class="back-top"
        >
            ♡ Inventory
        </a>

    </div>


    <!-- =========================
         CONTENT
    ========================= -->

    <div class="content">


        <!-- =========================
             WELCOME CARD
        ========================= -->

        <div class="welcome-card">

            <div class="big-icon">
                ✏️
            </div>

            <h2>
                Add Something New! ✨
            </h2>

            <p>
                Add a new school supply to your inventory and keep everything organized.
            </p>

            <div class="mini-note">

                ✿
                Don't forget to enter the correct
                price and quantity!

            </div>

        </div>


        <!-- =========================
             FORM CARD
        ========================= -->

        <div class="form-card">


            <div class="form-heading">

                <h2>
                    ✎ Add School Supply
                </h2>

                <p>
                    Fill in the details below to add a new item ♡
                </p>

            </div>


            <form
                action="/products/create"
                method="POST"
            >


                <!-- PRODUCT NAME -->

                <div class="field">

                    <label>
                        ✿ School Supply Name
                    </label>

                    <input
                        type="text"
                        name="product_name"
                        placeholder="e.g. Notebook, Ballpen, Pencil"
                        required
                    >

                </div>


                <!-- DESCRIPTION -->

                <div class="field">

                    <label>
                        ✿ Description
                    </label>

                    <textarea
                        name="description"
                        placeholder="Enter the description of the school supply"
                        required
                    ></textarea>

                </div>


                <!-- PRICE -->

                <div class="field">

                    <label>
                        ✿ Price (₱)
                    </label>

                    <input
                        type="number"
                        name="price"
                        step="0.01"
                        placeholder="0.00"
                        required
                    >

                </div>


                <!-- QUANTITY -->

                <div class="field">

                    <label>
                        ✿ Quantity
                    </label>

                    <input
                        type="number"
                        name="quantity"
                        placeholder="Enter quantity"
                        required
                    >

                </div>


                <!-- SUBMIT -->

                <button
                    type="submit"
                    class="submit-btn"
                >
                    ✏️ Add School Supply
                </button>


            </form>


            <!-- BACK -->

            <a
                class="back-bottom"
                href="/products"
            >
                ← Back to School Supplies
            </a>


        </div>


    </div>


    <!-- =========================
         FOOTER
    ========================= -->

    <footer>

        ✦ STUDY SUPPLIES MANAGEMENT SYSTEM • MADE FOR STUDENTS ♡

    </footer>


</div>


</body>

</html>