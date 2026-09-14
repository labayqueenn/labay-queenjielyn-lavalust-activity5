<?php 
 
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); 
 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
 
    <meta charset="UTF-8"> 
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 
    <title>Edit School Supply</title> 
 
    <style> 
 
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: #dff3ff;
            font-family: "Trebuchet MS", Arial, sans-serif;
            color: #425b70;
            padding: 35px 20px;
        }

        /* =========================
           DECORATIONS
        ========================= */

        body::before {
            content: "✦  ♡  ✏  ✿  ★  📚  ✦";
            position: fixed;
            top: 20px;
            left: 25px;
            font-size: 21px;
            letter-spacing: 12px;
            color: #9bcde7;
            opacity: 0.7;
            pointer-events: none;
        }

        body::after {
            content: "♡  ✿  ✦  ✎  ★";
            position: fixed;
            bottom: 20px;
            right: 25px;
            font-size: 21px;
            letter-spacing: 13px;
            color: #a6d4e9;
            opacity: 0.7;
            pointer-events: none;
        }

        /* =========================
           MAIN WRAPPER
        ========================= */

        .page {
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
        }

        /* =========================
           TOP BRAND
        ========================= */

        .brand {
            text-align: center;
            margin-bottom: 22px;
        }

        .brand-icon {
            width: 72px;
            height: 72px;
            margin: 0 auto 10px;
            border-radius: 20px;
            background: #ffffff;
            border: 3px solid #9fcfe7;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 34px;
            transform: rotate(-5deg);
            box-shadow: 5px 7px 0 #b8ddec;
        }

        .brand h1 {
            margin: 13px 0 3px;
            color: #3985ad;
            font-size: 29px;
            letter-spacing: 2px;
        }

        .brand p {
            margin: 0;
            color: #7998aa;
            font-size: 11px;
            letter-spacing: 1px;
        }

        /* =========================
           EDIT AREA
        ========================= */

        .edit-area {
            display: grid;
            grid-template-columns: 250px 1fr;
            gap: 20px;
            align-items: stretch;
        }

        /* =========================
           LEFT NOTE
        ========================= */

        .side-note {
            background: #fffbdc;
            border: 2px solid #f0df8e;
            padding: 25px 20px;
            position: relative;
            box-shadow: 5px 7px 0 rgba(118, 158, 178, 0.12);
            transform: rotate(-2deg);
            min-height: 480px;
        }

        .tape {
            position: absolute;
            width: 80px;
            height: 25px;
            background: #bde2f2;
            top: -11px;
            left: 82px;
            opacity: 0.85;
            transform: rotate(-3deg);
        }

        .side-icon {
            font-size: 50px;
            text-align: center;
            margin-top: 30px;
            margin-bottom: 18px;
        }

        .side-note h2 {
            margin: 0;
            text-align: center;
            color: #638397;
            font-size: 21px;
        }

        .side-note p {
            text-align: center;
            color: #879ca8;
            font-size: 12px;
            line-height: 1.7;
            margin-top: 12px;
        }

        .tips {
            margin-top: 30px;
            padding: 15px;
            border-top: 2px dashed #e5d58b;
            color: #7f929e;
            font-size: 11px;
            line-height: 1.7;
        }

        .tips strong {
            color: #64869a;
        }

        /* =========================
           FORM PAPER
        ========================= */

        .form-paper {
            background: #ffffff;
            border: 2px solid #b9ddeb;
            border-radius: 5px;
            padding: 35px;
            position: relative;
            box-shadow: 8px 10px 0 rgba(91, 145, 170, 0.12);
        }

        .form-paper::before {
            content: "";
            position: absolute;
            left: 28px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #f3cbd3;
            opacity: 0.7;
        }

        .paper-title {
            margin-left: 20px;
            margin-bottom: 25px;
        }

        .paper-title h2 {
            margin: 0;
            color: #3e7fa5;
            font-size: 24px;
        }

        .paper-title p {
            margin: 6px 0 0;
            color: #8aa0ad;
            font-size: 12px;
        }

        /* =========================
           FORM
        ========================= */

        .field {
            margin-left: 20px;
            margin-bottom: 19px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            color: #52758a;
            font-size: 12px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            border: none;
            border-bottom: 2px solid #c9e3ef;
            background: #fafdff;
            padding: 12px 13px;
            color: #40586b;
            font-family: "Trebuchet MS", Arial, sans-serif;
            font-size: 13px;
            outline: none;
            transition: 0.2s;
        }

        input:focus,
        textarea:focus {
            border-bottom-color: #62a9cf;
            background: #f5fbff;
        }

        textarea {
            min-height: 105px;
            resize: vertical;
            line-height: 1.6;
        }

        input::placeholder,
        textarea::placeholder {
            color: #a9bdc9;
        }

        /* =========================
           BUTTONS
        ========================= */

        .buttons {
            margin-left: 20px;
            margin-top: 25px;
            display: flex;
            gap: 10px;
        }

        .update-btn {
            flex: 1;
            border: none;
            background: #65abd0;
            color: #ffffff;
            padding: 14px;
            border-radius: 12px;
            font-family: inherit;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 5px 0 #438caf;
            transition: 0.2s;
        }

        .update-btn:hover {
            background: #529bc3;
            transform: translateY(2px);
            box-shadow: 0 3px 0 #438caf;
        }

        .back-btn {
            flex: 1;
            text-align: center;
            text-decoration: none;
            padding: 13px;
            border-radius: 12px;
            background: #fff3f6;
            border: 2px solid #edccd5;
            color: #bd7082;
            font-size: 12px;
            font-weight: bold;
        }

        .back-btn:hover {
            background: #fbe4e9;
        }

        /* =========================
           FOOTER
        ========================= */

        .footer {
            text-align: center;
            margin-top: 25px;
            color: #80a2b4;
            font-size: 10px;
            letter-spacing: 1.5px;
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 720px) {

            body {
                padding: 25px 15px;
            }

            .edit-area {
                grid-template-columns: 1fr;
            }

            .side-note {
                min-height: auto;
                transform: none;
                padding: 20px;
            }

            .side-icon {
                margin-top: 10px;
            }

            .tips {
                display: none;
            }

            .form-paper {
                padding: 28px 22px;
            }

            .form-paper::before {
                left: 15px;
            }

            .paper-title,
            .field,
            .buttons {
                margin-left: 12px;
            }

            .buttons {
                flex-direction: column;
            }

            .brand h1 {
                font-size: 24px;
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
            ✏️
        </div>

        <h1>
            STUDY SUPPLIES
        </h1>

        <p>
            CUTE SCHOOL ESSENTIALS • INVENTORY SYSTEM
        </p>

    </div>


    <!-- =========================
         EDIT AREA
    ========================= -->

    <div class="edit-area">


        <!-- =========================
             SIDE NOTE
        ========================= -->

        <div class="side-note">

            <div class="tape"></div>

            <div class="side-icon">
                📒
            </div>

            <h2>
                Update Time! ✨
            </h2>

            <p>
                Keep your school supply information fresh and organized.
            </p>

            <div class="tips">

                <strong>
                    ✦ Quick Tip
                </strong>

                <br>

                Check the product name, price,
                description, and quantity before
                saving your changes.

            </div>

        </div>


        <!-- =========================
             FORM PAPER
        ========================= -->

        <div class="form-paper">


            <div class="paper-title">

                <h2>
                    ✎ Edit School Supply
                </h2>

                <p>
                    Make changes to the information below ♡
                </p>

            </div>


            <form
                action="<?php echo site_url('products/edit/' . $product['id']); ?>"
                method="POST"
            >


                <!-- PRODUCT NAME -->

                <div class="field">

                    <label for="product_name">
                        ✿ School Supply Name
                    </label>

                    <input
                        type="text"
                        id="product_name"
                        name="product_name"
                        value="<?php echo html_escape($product['product_name']); ?>"
                        placeholder="Example: Notebook"
                        required
                    >

                </div>


                <!-- DESCRIPTION -->

                <div class="field">

                    <label for="description">
                        ✿ Description
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        placeholder="Enter school supply description..."
                        rows="5"
                    ><?php echo html_escape($product['description']); ?></textarea>

                </div>


                <!-- PRICE -->

                <div class="field">

                    <label for="price">
                        ✿ Price (₱)
                    </label>

                    <input
                        type="number"
                        id="price"
                        name="price"
                        value="<?php echo html_escape($product['price']); ?>"
                        step="0.01"
                        min="0"
                        placeholder="0.00"
                        required
                    >

                </div>


                <!-- QUANTITY -->

                <div class="field">

                    <label for="quantity">
                        ✿ Quantity
                    </label>

                    <input
                        type="number"
                        id="quantity"
                        name="quantity"
                        value="<?php echo html_escape($product['quantity']); ?>"
                        min="0"
                        placeholder="Enter quantity"
                        required
                    >

                </div>


                <!-- BUTTONS -->

                <div class="buttons">

                    <button
                        type="submit"
                        class="update-btn"
                    >
                        ✏️ Save Changes
                    </button>

                    <a
                        class="back-btn"
                        href="<?php echo site_url('products'); ?>"
                    >
                        ♡ Back to Supplies
                    </a>

                </div>


            </form>


        </div>


    </div>


    <!-- FOOTER -->

    <div class="footer">

        ✦ STUDY SUPPLIES MANAGEMENT SYSTEM • MADE WITH ♡ ✦

    </div>


</div>


</body>

</html>