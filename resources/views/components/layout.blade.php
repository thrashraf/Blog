<html>

<head>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            padding: 0;
            margin: 0;
        }

        article {
            margin: auto;
            max-width: 500px;

        }

        nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 50px;
            width: 100%;
            color: #fff;
            background-color: royalblue;
        }

        nav button {
            padding: 5px 15px;
            border: 1px solid #fff;
            border-radius: 4px;
            cursor: pointer
        }
    </style>


</head>

<nav>
    <h1>Blog</h1>

    <button><a href="/login">Login</a></button>
</nav>

<body>


    <article>
        {{ $slot }}
    </article>
</body>

</html>
