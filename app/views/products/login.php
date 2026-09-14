<?php 
 
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); 
 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 
    <title>Admin Login</title> 
 
    <style> 
 
        * { 
            box-sizing: border-box; 
        } 
 
        body { 
            margin: 0; 
            min-height: 100vh; 
            font-family: "Trebuchet MS", Arial, sans-serif; 
            background: #eaf5ff; 
            color: #354b63; 
 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            overflow: hidden; 
            position: relative; 
        } 
 
        /* DECORATIVE BACKGROUND */ 
 
        body::before { 
            content: "✦  ✎  ♡  ✿  ★  ✏  ♡  ✦"; 
            position: absolute; 
            top: 30px; 
            left: 0; 
            width: 100%; 
            text-align: center; 
            font-size: 22px; 
            letter-spacing: 28px; 
            color: #9bcbea; 
            opacity: 0.65; 
        } 
 
        body::after { 
            content: "♡  ✿  ✎  ★  ✦  ♡  ✏"; 
            position: absolute; 
            bottom: 25px; 
            left: 0; 
            width: 100%; 
            text-align: center; 
            font-size: 20px; 
            letter-spacing: 25px; 
            color: #a9d5f0; 
            opacity: 0.7; 
        } 
 
        /* MAIN CONTAINER */ 
 
        .login-container { 
            width: 100%; 
            max-width: 450px; 
            padding: 25px 20px; 
            position: relative; 
            z-index: 2; 
        } 
 
        /* HEADER */ 
 
        .brand { 
            text-align: center; 
            margin-bottom: 18px; 
        } 
 
        .brand-icon { 
            width: 65px; 
            height: 65px; 
            margin: 0 auto 12px; 
            background: #ffffff; 
            border: 3px solid #8fc5e8; 
            border-radius: 50%; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-size: 31px; 
            box-shadow: 0 6px 15px rgba(74, 145, 190, 0.15); 
        } 
 
        .brand-name { 
            margin: 0; 
            font-size: 30px; 
            font-weight: 800; 
            letter-spacing: 2px; 
            color: #3182b8; 
        } 
 
        .brand-subtitle { 
            margin-top: 6px; 
            font-size: 12px; 
            color: #789bb3; 
            letter-spacing: 1px; 
        } 
 
        /* LOGIN CARD */ 
 
        .login-card { 
            background: #ffffff; 
            border: 3px solid #b8dcf3; 
            border-radius: 24px; 
            padding: 35px 38px 38px; 
            box-shadow: 0 15px 35px rgba(63, 128, 168, 0.16); 
            position: relative; 
        } 
 
        /* SMALL DECORATIONS */ 
 
        .login-card::before { 
            content: "✦"; 
            position: absolute; 
            top: 15px; 
            left: 20px; 
            color: #7dbce2; 
            font-size: 18px; 
        } 
 
        .login-card::after { 
            content: "♡"; 
            position: absolute; 
            top: 14px; 
            right: 20px; 
            color: #7dbce2; 
            font-size: 20px; 
        } 
 
        /* TITLE */ 
 
        .login-title { 
            text-align: center; 
            margin-bottom: 28px; 
        } 
 
        .login-title h1 { 
            margin: 0; 
            font-size: 25px; 
            font-weight: 800; 
            color: #36546d; 
        } 
 
        .login-title p { 
            margin: 7px 0 0; 
            font-size: 12px; 
            color: #8aa7ba; 
        } 
 
        /* ERROR */ 
 
        .error { 
            padding: 12px 14px; 
            margin-bottom: 20px; 
            background: #fff3f5; 
            border: 2px solid #f2c4cf; 
            border-radius: 12px; 
            color: #c05c72; 
            font-size: 12px; 
            text-align: center; 
        } 
 
        /* FORM */ 
 
        .form-group { 
            margin-bottom: 19px; 
        } 
 
        .form-group label { 
            display: block; 
            margin-bottom: 7px; 
            color: #547188; 
            font-size: 12px; 
            font-weight: bold; 
        } 
 
        .form-group input { 
            width: 100%; 
            padding: 14px 16px; 
            border: 2px solid #c7dfef; 
            border-radius: 13px; 
            background: #f8fcff; 
            color: #354b63; 
            font-family: inherit; 
            font-size: 13px; 
            outline: none; 
            transition: 0.2s; 
        } 
 
        .form-group input:focus { 
            border-color: #6eafd7; 
            background: #ffffff; 
            box-shadow: 0 0 0 4px rgba(110, 175, 215, 0.12); 
        } 
 
        .form-group input::placeholder { 
            color: #a6bbc9; 
        } 
 
        /* LOGIN BUTTON */ 
 
        .login-button { 
            width: 100%; 
            margin-top: 8px; 
            padding: 14px; 
            border: none; 
            border-radius: 14px; 
            background: #65a9d2; 
            color: #ffffff; 
            font-family: inherit; 
            font-size: 13px; 
            font-weight: bold; 
            cursor: pointer; 
            box-shadow: 0 6px 12px rgba(75, 143, 186, 0.20); 
            transition: 0.2s; 
        } 
 
        .login-button:hover { 
            background: #4f94bf; 
            transform: translateY(-2px); 
            box-shadow: 0 8px 15px rgba(75, 143, 186, 0.25); 
        } 
 
        .login-button:active { 
            transform: translateY(0); 
        } 
 
        /* FOOTER */ 
 
        .footer { 
            text-align: center; 
            margin-top: 17px; 
            font-size: 11px; 
            color: #82a5ba; 
            letter-spacing: 1px; 
        } 
 
        /* MOBILE */ 
 
        @media (max-width: 500px) { 
 
            body::before, 
            body::after { 
                letter-spacing: 10px; 
                font-size: 16px; 
            } 
 
            .login-container { 
                padding: 20px 18px; 
            } 
 
            .brand-icon { 
                width: 58px; 
                height: 58px; 
                font-size: 27px; 
            } 
 
            .brand-name { 
                font-size: 25px; 
            } 
 
            .login-card { 
                padding: 32px 24px; 
                border-radius: 20px; 
            } 
 
        } 
 
    </style> 
 
</head> 
 
<body> 
 
    <div class="login-container"> 
 
        <!-- BRAND --> 
 
        <div class="brand"> 
 
            <div class="brand-icon"> 
                ✏️ 
            </div> 
 
            <h2 class="brand-name"> 
                STUDY SUPPLIES 
            </h2> 
 
            <div class="brand-subtitle"> 
                Cute • Creative • School Essentials 
            </div> 
 
        </div> 
 
 
        <!-- LOGIN CARD --> 
 
        <div class="login-card"> 
 
            <div class="login-title"> 
 
                <h1> 
                    Welcome Back! ♡ 
                </h1> 
 
                <p> 
                    Sign in to manage your school supplies 
                </p> 
 
            </div> 
 
 
            <?php if (isset($error)): ?> 
 
                <div class="error"> 
                    <?php echo html_escape($error); ?> 
                </div> 
 
            <?php endif; ?> 
 
 
            <form action="<?php echo site_url('login'); ?>" method="POST"> 
 
                <div class="form-group"> 
 
                    <label for="username"> 
                        ✿ Username 
                    </label> 
 
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        placeholder="Enter your username" 
                        required 
                    > 
 
                </div> 
 
 
                <div class="form-group"> 
 
                    <label for="password"> 
                        ✿ Password 
                    </label> 
 
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="Enter your password" 
                        required 
                    > 
 
                </div> 
 
 
                <button type="submit" class="login-button"> 
                    ✏️ Login to Study Supplies 
                </button> 
 
            </form> 
 
        </div> 
 
 
        <div class="footer"> 
            Made for students ♡ 
        </div> 
 
    </div> 
 
</body> 
 
</html>