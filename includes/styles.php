<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <style type="text/css">

@import url('https://fonts.googleapis.com/css?family=Lato');
    @import url('https://fonts.googleapis.com/css?family=Lobster');


    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
        text-decoration: none;
        color: white;
    }

    .navbar-brand {
        height: 12em;
        overflow: hidden;
    }

    .navbar-brand:before {
        content: '';
        display: block;
        position: absolute;
        height: 25%;
        width: 100%;
        background: #ff7200;
    }

    .navbar-brand .navbar-heading {
        position: absolute;
        top: 4vmax;
        left: 2vmax;
        padding: 0;
        margin: 0;
        color: #fff;
        font-size: 7em;
    }

    .navbar-menu {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    .navbar li {
        float: left;
        display: block;
        transition-duration: 0.5s;
        border-radius: 50px;
    }

    .navbar-menu li a {
        border:none;
        background-color:white;
        border-radius:4px;
        display: block;
        color: #f1b225;
        padding: 5px 12px;
        text-decoration: none;
    }

    .navbar-menu ul li :hover {
        color: #fff;
        background-color:#f1b225;
    }

    .navbar-menu li :hover>a {
        color: #fff;
        background-color:#f1b225;
    }

    .navbar-container {
        position: absolute;
        top: 8em;
        right: 1%;
    }

    /* Footer Styling */

    .footer {
        display: grid;
        grid-gap: 5px;
        padding: 10px 10%;
        background-color: #4e4e4e;
        color: #FFF;
        bottom: 0;
        width: 100%;
        margin-top: 40px;
    }

    .footer-section {
        text-align: left;
        padding: 20px;
        width: 100%;
    }

    .footer-section1 {
        grid-row: 1;
    }

    .footer-section2 {
        grid-column: 2 /span 2;
    }

    .footer-section3 {
        grid-row: 2;
        grid-column: 1 / span 3;
    }

    .footer-section3>* {
        display: inline;
    }

    .footer-section3>a {
        float: right;
        padding: 0 20px;
    }

    .footer-section3>p {
        float: left;
    }

    .footer-section-inner-container {
        margin: 15px 0;
        padding: 25px;
        width: 100%;
        background-color: #666666;
        text-align: justify;
        border-radius: 5px;
        display: flex;
        flex-direction: column;
    }

    .footer-section-inner-container>span {
        margin: 10px 0;
    }

</style>
</head>
<body>
    
</body>
</html>