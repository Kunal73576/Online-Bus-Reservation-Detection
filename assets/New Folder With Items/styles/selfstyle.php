<style>
    body,
    html {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
        scroll-behavior: smooth;
    }

    *,
    *::after,
    *::before {
        box-sizing: inherit;
    }

    .link-light {
        text-decoration: none;
    }

    .searchQuery {
        position: relative;
    }

    .sugg {
        position: absolute;
        width: 100%;
        z-index: 1;
        background-color: white;
        max-height: 179px;
        overflow: auto;
    }

    .sugg li {
        list-style-type: none;
        padding: 0;
        text-align: left;
        padding: 0.3rem;
        text-transform: capitalize;
        border-style: solid;
        border-color: black;
        border-width: 0 2px 2px 2px;
        border-radius: 5px;
    }

    .sugg li:hover {
        background-color: #efefef;
        cursor: pointer;
    }


    .hl {
        background-color: #ddbea9;
    }


    /* Overriding Bootstrap */
    nav a:hover {
        color: black;
    }

    nav {
        text-align: center;
        padding: 1.5rem 0;
    }

    nav div,
    nav ul {
        margin-top: 1rem;
    }

    nav div:first-child {
        margin-top: 0;
    }

    nav>div a {
        display: block;
    }

    nav ul {
        list-style-type: none;
        padding: 0;
        margin-bottom: 0;
    }

    nav a {
        padding-bottom: 0.2rem;
        text-decoration: none;
        color: black;
        font-weight: bold;
        text-transform: uppercase;
    }

    nav a:not(.nav-logo):hover {
        text-decoration: underline;
    }

    .nav-logo {
        color: #207DFF;
        letter-spacing: 5px;
        transition: none;
    }

    /* Alert Message on top of the header */
    .alert {
        z-index: 3;
        border-radius: 0px;
    }


    #home {
        height: 70vh;
        background-image: url("assets/img/sbtbsimg.png");
        background-size: cover;
        background-position: 0% 65%;
        ;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>