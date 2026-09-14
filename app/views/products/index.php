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

    <title>Study Supplies | Inventory</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #eef8ff;
            font-family: "Trebuchet MS", Arial, sans-serif;
            color: #40566b;
        }

        /* =========================
           BACKGROUND DOODLES
        ========================= */

        body::before {
            content: "✦  ♡  ✎  ✿  ★  📚  ✏️  ♡";
            position: fixed;
            top: 20px;
            right: 25px;
            font-size: 22px;
            letter-spacing: 12px;
            color: #a8d5ed;
            opacity: 0.55;
            pointer-events: none;
        }

        body::after {
            content: "✿  ✦  ♡  ✏️  ★";
            position: fixed;
            bottom: 20px;
            left: 25px;
            font-size: 22px;
            letter-spacing: 14px;
            color: #b7dced;
            opacity: 0.55;
            pointer-events: none;
        }

        /* =========================
           PAGE
        ========================= */

        .page {
            width: 94%;
            max-width: 1200px;
            margin: 35px auto;
        }

        /* =========================
           NOTEBOOK HEADER
        ========================= */

        .notebook-header {
            background: #ffffff;
            border: 3px solid #b7dcef;
            border-radius: 22px;
            padding: 24px 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            box-shadow: 0 10px 25px rgba(82, 145, 181, 0.12);
        }

        .notebook-header::before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: 9px;
            border-bottom: 2px dashed #d9edf8;
        }

        .title-area {
            display: flex;
            align-items: center;
            gap: 17px;
        }

        .pencil-box {
            width: 58px;
            height: 58px;
            border-radius: 17px;
            background: #dff2ff;
            border: 2px solid #a8d5ee;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 29px;
        }

        .title-area h1 {
            margin: 0;
            color: #3c8bbb;
            font-size: 27px;
            letter-spacing: 1px;
        }

        .title-area p {
            margin: 5px 0 0;
            color: #8ba7ba;
            font-size: 12px;
        }

        .logout {
            background: #fff4f6;
            border: 2px solid #f2c9d3;
            color: #c36b80;
            padding: 10px 16px;
            border-radius: 12px;
            text-decoration: none;
            font-size: 12px;
            font-weight: bold;
            position: relative;
            z-index: 2;
        }

        .logout:hover {
            background: #f9dfe5;
        }

        /* =========================
           WELCOME NOTE
        ========================= */

        .welcome-note {
            margin: 28px 0;
            background: #fffef2;
            border-left: 8px solid #f4d878;
            padding: 22px 25px;
            border-radius: 5px 17px 17px 5px;
            box-shadow: 0 7px 18px rgba(103, 134, 151, 0.08);
            transform: rotate(-0.4deg);
        }

        .welcome-note h2 {
            margin: 0;
            color: #4b687c;
            font-size: 25px;
        }

        .welcome-note p {
            margin: 7px 0 0;
            color: #8a9baa;
            font-size: 13px;
        }

        /* =========================
           SUMMARY
        ========================= */

        .summary {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 17px;
            margin-bottom: 28px;
        }

        .summary-card {
            padding: 20px;
            border-radius: 18px;
            border: 2px solid #c5e3f3;
            background: #ffffff;
            position: relative;
            overflow: hidden;
        }

        .summary-card:nth-child(1) {
            background: #f4fbff;
        }

        .summary-card:nth-child(2) {
            background: #f9f7ff;
            border-color: #d9cef0;
        }

        .summary-card:nth-child(3) {
            background: #fff8fa;
            border-color: #efd0d9;
        }

        .summary-card::after {
            content: "✦";
            position: absolute;
            right: 15px;
            top: 10px;
            font-size: 18px;
            color: #acd8ed;
        }

        .summary-label {
            display: block;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            color: #8198aa;
        }

        .summary-number {
            display: block;
            margin-top: 8px;
            color: #418db8;
            font-size: 25px;
            font-weight: bold;
        }

        /* =========================
           INVENTORY BOARD
        ========================= */

        .inventory-board {
            background: #ffffff;
            border: 3px solid #b9dced;
            border-radius: 22px;
            padding: 25px;
            box-shadow: 0 12px 30px rgba(69, 128, 164, 0.10);
        }

        .board-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 22px;
        }

        .board-title h3 {
            margin: 0;
            color: #3f7fa7;
            font-size: 21px;
        }

        .board-title h3::before {
            content: "📒 ";
        }

        .add-btn {
            background: #68add3;
            color: #ffffff;
            text-decoration: none;
            padding: 11px 17px;
            border-radius: 13px;
            font-size: 12px;
            font-weight: bold;
            box-shadow: 0 5px 10px rgba(71, 145, 187, 0.18);
        }

        .add-btn:hover {
            background: #4f96bd;
            transform: translateY(-1px);
        }

        /* =========================
           TABLE
        ========================= */

        .table-wrapper {
            overflow-x: auto;
            border: 2px solid #d6ebf6;
            border-radius: 16px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 900px;
        }

        thead {
            background: #e9f7ff;
        }

        th {
            padding: 14px;
            text-align: left;
            color: #56809a;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            border-bottom: 2px solid #d3eaf6;
        }

        td {
            padding: 16px 14px;
            font-size: 13px;
            border-bottom: 1px dashed #dcecf4;
            vertical-align: middle;
        }

        tbody tr:hover {
            background: #f8fcff;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        /* =========================
           PRODUCT DATA
        ========================= */

        .product-id {
            display: inline-block;
            background: #f1f8fc;
            color: #86a2b4;
            padding: 5px 8px;
            border-radius: 8px;
            font-size: 11px;
        }

        .product-name {
            color: #3d87b2;
            font-weight: bold;
            font-size: 14px;
        }

        .description {
            color: #748998;
            max-width: 260px;
            line-height: 1.45;
        }

        .price {
            color: #5186a3;
            font-weight: bold;
        }

        .quantity {
            display: inline-block;
            background: #e8f6ff;
            color: #438ab5;
            border: 1px solid #c4e4f4;
            padding: 6px 12px;
            border-radius: 30px;
            font-size: 11px;
            font-weight: bold;
        }

        .date {
            color: #91a4b1;
            font-size: 11px;
        }

        /* =========================
           ACTIONS
        ========================= */

        .actions {
            white-space: nowrap;
        }

        .edit-btn,
        .delete-btn {
            display: inline-block;
            text-decoration: none;
            padding: 7px 10px;
            border-radius: 9px;
            font-size: 10px;
            font-weight: bold;
            margin-right: 3px;
        }

        .edit-btn {
            background: #edf7ff;
            color: #4388af;
            border: 1px solid #c9e4f3;
        }

        .edit-btn:hover {
            background: #dceffc;
        }

        .delete-btn {
            background: #fff2f5;
            color: #c36a7c;
            border: 1px solid #efcbd4;
        }

        .delete-btn:hover {
            background: #f9dfe5;
        }

        /* =========================
           EMPTY STATE
        ========================= */

        .empty-state {
            text-align: center;
            padding: 65px 20px;
            background: #f8fcff;
            border: 2px dashed #b9dced;
            border-radius: 17px;
        }

        .empty-icon {
            font-size: 48px;
            margin-bottom: 12px;
        }

        .empty-state h3 {
            margin: 0;
            color: #4788ad;
            font-size: 22px;
        }

        .empty-state p {
            color: #899daa;
            font-size: 13px;
            margin: 9px 0 22px;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            text-align: center;
            padding: 28px 0;
            color: #8aa8ba;
            font-size: 10px;
            letter-spacing: 1.5px;
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 750px) {

            .page {
                width: 94%;
                margin: 20px auto;
            }

            .notebook-header {
                padding: 18px;
                align-items: flex-start;
                gap: 15px;
            }

            .title-area {
                gap: 10px;
            }

            .pencil-box {
                width: 48px;
                height: 48px;
                font-size: 23px;
            }

            .title-area h1 {
                font-size: 20px;
            }

            .title-area p {
                font-size: 9px;
            }

            .logout {
                padding: 8px 11px;
                font-size: 10px;
            }

            .summary {
                grid-template-columns: 1fr;
            }

            .inventory-board {
                padding: 16px;
            }

            .board-title {
                flex-direction: column;
                align-items: flex-start;
                gap: 13px;
            }

            .add-btn {
                width: 100%;
                text-align: center;
            }

        }

    </style>

</head>


<body>


<div class="page">


    <!-- =========================
         NOTEBOOK HEADER
    ========================= -->

    <header class="notebook-header">

        <div class="title-area">

            <div class="pencil-box">
                ✏️
            </div>

            <div>

                <h1>
                    STUDY SUPPLIES
                </h1>

                <p>
                    CUTE SCHOOL ESSENTIALS • INVENTORY SYSTEM
                </p>

            </div>

        </div>


        <a
            href="<?php echo site_url('logout'); ?>"
            class="logout"
        >
            ♡ Logout
        </a>

    </header>


    <!-- =========================
         WELCOME NOTE
    ========================= -->

    <div class="welcome-note">

        <h2>
            Hello, Supply Manager! ✨
        </h2>

        <p>
            Keep your school supplies organized, updated, and ready for every study day.
        </p>

    </div>


    <!-- =========================
         SUMMARY
    ========================= -->

    <div class="summary">


        <div class="summary-card">

            <span class="summary-label">
                ✦ Total Products
            </span>

            <span class="summary-number">
                <?php echo count($products); ?>
            </span>

        </div>


        <div class="summary-card">

            <span class="summary-label">
                ✿ Inventory Items
            </span>

            <span class="summary-number">

                <?php

                $total_quantity = 0;

                foreach ($products as $item) {
                    $total_quantity += (int) $item['quantity'];
                }

                echo $total_quantity;

                ?>

            </span>

        </div>


        <div class="summary-card">

            <span class="summary-label">
                ♡ System Status
            </span>

            <span class="summary-number">
                Active ✦
            </span>

        </div>


    </div>


    <!-- =========================
         INVENTORY BOARD
    ========================= -->

    <section class="inventory-board">


        <div class="board-title">

            <h3>
                My School Supplies
            </h3>

            <a
                href="<?php echo site_url('products/create'); ?>"
                class="add-btn"
            >
                ✚ Add School Supply
            </a>

        </div>


        <!-- =========================
             PRODUCT TABLE
        ========================= -->

        <?php if (!empty($products)): ?>


            <div class="table-wrapper">

                <table>

                    <thead>

                        <tr>

                            <th>
                                ID
                            </th>

                            <th>
                                School Supply
                            </th>

                            <th>
                                Description
                            </th>

                            <th>
                                Price
                            </th>

                            <th>
                                Quantity
                            </th>

                            <th>
                                Created
                            </th>

                            <th>
                                Actions
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        <?php foreach ($products as $product): ?>


                            <tr>


                                <td>

                                    <span class="product-id">

                                        #<?php
                                        echo html_escape(
                                            $product['id']
                                        );
                                        ?>

                                    </span>

                                </td>


                                <td>

                                    <div class="product-name">

                                        ✿

                                        <?php
                                        echo html_escape(
                                            $product['product_name']
                                        );
                                        ?>

                                    </div>

                                </td>


                                <td>

                                    <div class="description">

                                        <?php
                                        echo html_escape(
                                            $product['description']
                                        );
                                        ?>

                                    </div>

                                </td>


                                <td>

                                    <span class="price">

                                        ₱<?php

                                        echo number_format(
                                            $product['price'],
                                            2
                                        );

                                        ?>

                                    </span>

                                </td>


                                <td>

                                    <span class="quantity">

                                        <?php
                                        echo html_escape(
                                            $product['quantity']
                                        );
                                        ?>

                                    </span>

                                </td>


                                <td>

                                    <span class="date">

                                        <?php
                                        echo html_escape(
                                            $product['created_at']
                                        );
                                        ?>

                                    </span>

                                </td>


                                <td>

                                    <div class="actions">


                                        <a
                                            href="<?php
                                            echo site_url(
                                                'products/edit/' .
                                                $product['id']
                                            );
                                            ?>"
                                            class="edit-btn"
                                        >
                                            ✎ Edit
                                        </a>


                                        <a
                                            href="<?php
                                            echo site_url(
                                                'products/delete/' .
                                                $product['id']
                                            );
                                            ?>"
                                            class="delete-btn"
                                            onclick="return confirm('Are you sure you want to delete this school supply?');"
                                        >
                                            ♡ Delete
                                        </a>


                                    </div>

                                </td>


                            </tr>


                        <?php endforeach; ?>


                    </tbody>

                </table>

            </div>


        <?php else: ?>


            <!-- =========================
                 EMPTY STATE
            ========================= -->

            <div class="empty-state">

                <div class="empty-icon">
                    📚✨
                </div>

                <h3>
                    Your Supply Shelf Is Empty!
                </h3>

                <p>
                    Add your first school supply and start organizing your inventory.
                </p>

                <a
                    href="<?php echo site_url('products/create'); ?>"
                    class="add-btn"
                >
                    ✚ Add First School Supply
                </a>

            </div>


        <?php endif; ?>


    </section>


    <!-- =========================
         FOOTER
    ========================= -->

    <footer>

        ✦ STUDY SUPPLIES • MADE FOR STUDENTS ♡ ✦

    </footer>


</div>


</body>

</html>