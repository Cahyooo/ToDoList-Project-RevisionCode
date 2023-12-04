<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./style-register.css">
</head>

<body>
    <main>
        <h1>Registrasi</h1>

        <?php
        if ($data["userSama"] == "error") {
            echo '<p style="color: red; font-style: italic; margin:0; position:absolute; transform:translate(7vw,-1.5vw); text-align:center;font-size:0.9vw;transform: translate(3.5vw,-1.5vw);">Username sudah dipakai! Silahkan gunakan username lain!</p>';
        } else if ($data["passwordBeda"] == "error") {
            echo '<p style="color: red; font-style: italic; margin:0; position:absolute; transform:translate(7vw,-1.5vw); text-align:center;font-size:0.9vw;transform: translate(6vw,-1.5vw);">Password dan Confirm password harus sama!</p>';
        }
        ?>

        <form action="" method="post">
            <div class="kotakUser">
                <div class="kotakSVG"><svg fill="#000000" width="60%" height="60%" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <title>user</title>
                            <path d="M4 28q0 0.832 0.576 1.44t1.44 0.576h20q0.8 0 1.408-0.576t0.576-1.44q0-1.44-0.672-2.912t-1.76-2.624-2.496-2.144-2.88-1.504q1.76-1.088 2.784-2.912t1.024-3.904v-1.984q0-3.328-2.336-5.664t-5.664-2.336-5.664 2.336-2.336 5.664v1.984q0 2.112 1.024 3.904t2.784 2.912q-1.504 0.544-2.88 1.504t-2.496 2.144-1.76 2.624-0.672 2.912z"></path>
                        </g>
                    </svg></div>
                <input type="text" id="username" name="username" required placeholder="Username">
            </div>
            <div class="kotakPassword">
                <div class="kotakSVG"><svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60%" height="60%" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill="#231F20" d="M52,24h-4v-8c0-8.836-7.164-16-16-16S16,7.164,16,16v8h-4c-2.211,0-4,1.789-4,4v32c0,2.211,1.789,4,4,4h40 c2.211,0,4-1.789,4-4V28C56,25.789,54.211,24,52,24z M32,48c-2.211,0-4-1.789-4-4s1.789-4,4-4s4,1.789,4,4S34.211,48,32,48z M40,24 H24v-8c0-4.418,3.582-8,8-8s8,3.582,8,8V24z"></path>
                        </g>
                    </svg></div>
                <input type="password" id="password" name="password" required placeholder="Password">
            </div>
            <div class="kotakConfirm">
                <div class="kotakSVG"><svg width="60%" height="60%" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="invisible_box" data-name="invisible box">
                                    <rect width="48" height="48" fill="none"></rect>
                                </g>
                                <g id="Layer_7" data-name="Layer 7">
                                    <path d="M39,18H35V13A11,11,0,0,0,24,2H22A11,11,0,0,0,11,13v5H7a2,2,0,0,0-2,2V44a2,2,0,0,0,2,2H39a2,2,0,0,0,2-2V20A2,2,0,0,0,39,18ZM15,13a7,7,0,0,1,7-7h2a7,7,0,0,1,7,7v5H15ZM14,35a3,3,0,1,1,3-3A2.9,2.9,0,0,1,14,35Zm9,0a3,3,0,1,1,3-3A2.9,2.9,0,0,1,23,35Zm9,0a3,3,0,1,1,3-3A2.9,2.9,0,0,1,32,35Z"></path>
                                </g>
                            </g>
                        </g>
                    </svg></div>
                <input type="password" id="confirm" name="confirm" required placeholder="Confirm Password">
            </div>
            <div class="kotaksubmit"><button type="submit" name="register" class="submit">Registrasi!</button></div>
        </form>
        <span class="login">
            <p>Sudah punya akun?<a href="<?= BASEURL ?>/login.php">Login</a> Disini</p>
        </span>
    </main>
</body>

</html>