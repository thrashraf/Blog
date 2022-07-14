<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        width: 100%;
        height: 100vh;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    body form {
        width: 400px;
        height: 400px;
        background-color: royalblue;
        border: 1px solid #fff;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    input[type='text'],
    input[type='email'],
    input[type='password'] {
        padding: 10px 15px;
        border: 1px solid #fff;
        margin: 20px 0;
        width: 200px;
        border-radius: 7px
    }

    button {
        margin-top: 30px;
        width: 100px;
        height: 40px;
        border: 1px solid #fff;
        border-radius: 7px;
        color: black
    }

    section {
        margin-top: 50px;
    }
</style>

<body>
    <form>
        <input type="text" name="name" placeholder="Full Name">
        <input type="email" name="" id="" placeholder="Email">
        <input type="password" name="" id="" placeholder="Password">
        <input type="password" name="" id="" placeholder="Re enter Password">
        <button type="submit">Register</button>
    </form>

    <section>
        <p>Already have an account? <a href="/login">Login</a></p>
    </section>
</body>

</html>
