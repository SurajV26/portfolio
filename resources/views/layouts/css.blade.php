<style>

    * {
        margin: 0%;
        padding: 0%;
        box-sizing: border-box;
    }

    html, body {
        font-family: "Trirong", serif;
        height: 100%;
        width: 100%;
    }

    .page {
        position: relative;
        overflow: hidden;
    }

    .text {
        font-size: 1.1em;
    }

    .navbarp {
        height: 10vh;
        width: 100%;
        background-color: rgb(255, 255, 255);
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 0 20px;
        position: fixed;
        top: 0;
        z-index: 1000;
    }

    .navbarc {
        height: 100%;
        display: flex;
        align-items: center;
        list-style-type: none;
    }

    .navbarc li {
        margin: 0 40px;
        font-size: 20px;
    }

    .navbarc li a {
        text-decoration: none;
        color: #000000;
        font-weight: bold;
    }

    .navbarc li a:hover {
        color: #000000;
    }

    .bar {
        display: none;
    }

    .mobile-menu {
        display: none;
        position: absolute;
        top: 8vh;
        left: 0;
        width: 100%;
        background-color: #ffffff;
        z-index: 1000;
        text-align: center;
    }

    .mobile-menu ul {
        list-style-type: none;
        padding: 0;
    }

    .mobile-menu li {
        margin: 20px 0;
    }

    .mobile-menu li a {
        color: #000000;
        font-weight: bold;
        text-decoration: none;
        font-size: 20px;
    }

    @media (max-width: 786px) {
        .navbarc {
            display: none;
        }
        .bar {
            display: block;
        }
        .mobile-menu.active {
            display: block;
        }
        .navbarp {
            justify-content: space-between;
        }

        .logo {
            order: 1;
        }

        .bar {
            order: 3;
        }

        .text {
            font-size: 1.1em;
        }
    }

    /* index */

    .container-center {
        display: flex;
        flex-wrap: wrap; 
        padding-top: 3%;
        padding-left: 10%;
        padding-right: 10%; 
    }

    .container1 {
        display: flex;
        flex-wrap: wrap;
        padding-top: 80px;
    }

    .left {
        order: 1;
    }

    .right {
        order: 2;
    }

    .right img {
        max-width: 100%;
        height: auto;
    }

    .left .heading{
        text-align: center;
        font-size: xx-large;
        font-weight: bolder;
        padding-top: 18%;
        padding-left: 18%;
        padding-right: 18%;
    }

    .left .content{
        text-align: center;
        padding-top: 5%;
        padding-bottom: 8%;
        padding-left: 10%;
        padding-right: 10%;
    }

    .container-heading {
        font-size: xx-large;
        font-weight: bolder;
        padding-top: 4%;
        padding-left: 10%;
        padding-right: 10%;   
    }
    
    .elementor-divider {
        width: 30%;
        height: 0.3vh;
        background-color:  #61748f;
        position: relative;
        overflow: hidden;
    }

    .elementor-divider-wrapper {
        display: flex;
        justify-content: center;
    }

    .elementor-divider::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, #c6c7c9, rgba(255,255,255,0.7), rgba(255,255,255,0)); 
        animation: loading 1s ease-in-out infinite;
    }

    @keyframes loading {
        0% { left: -100%; }
        100% { left: 100%; }
    }

    .elementor-divider-separator {
        display: none;
    }


    @media (max-width: 768px) {

        .left, .right {
            width: 100%;
            order: initial;
        }

        .container1 {
            padding-top: 120px;
        }
        
        .elementor-divider {
            width: 40%;
            height: 0.3vh;
        }
    }

    
    /* about page */

    .about {
        padding-top: 12vh;
    }

    .background {
        position: absolute;
        width: 100vw;
        height: 15vh;
        background-color: #dee2e673;
        filter: blur(10px);
        z-index: -1;
    }

    .about-us {
        position: relative;
        z-index: 1;
        width: 100vw;
        height: 15vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .about-me {
        font-size: xx-large;
        font-weight: 400;
        color: black;
    }

    .section-padding {
        padding: 50px 0;
    }

    .box {
        position: absolute;
        top: 0;
        width: 67%;
        height: 100%;
        background-color: #dee2e697;
        backdrop-filter: blur(10px);
        z-index: -1;
        margin: 18px;
        border-radius: 10px;
    }

    .img-box {
        position: relative;
        width: 70%;
        display: inline-block;
        border-radius: 10px;
    }

    .img-box img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .boxes {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        gap: 50px;
        flex-wrap: wrap;
    }

    .section-padding-boxes {
        padding: 3% 10%;
    }

    .boxy {
        width: 40vh;
        /* height: 200px; */
        position: relative;
        overflow: hidden;
        border-radius: 15px 15px;
    }

    .boxy:hover {
        box-shadow: 0px -1px 21px 0px #8d9db669;
    }

    .boxy-img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        transition: transform 0.3s ease;
        border-radius: 10px 10px;
    }

    .boxy-text {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.393);
        color: white;
        padding: 10px;
        transform: translate(-50%, 50%);
        transition: opacity 0.3s ease, transform 0.3s ease;
        display: flex;
        /* text-align: center; */
        align-items: center;
        border-radius: 10px 10px;
    }

    
    .boxy:hover .boxy-text {
        opacity: 1;
        transform: translate(-50%, -50%);
    }

    .card-box {
        display: flex;
        justify-content: space-evenly;
        padding-top: 8%;
    }

    .cards {
        width: 25%;
        background-color: #f2f2f23f;
        text-align: center;
        margin-bottom: 20px;
        box-shadow: 0 5px 8px 2px #8d9db669;
        transition: box-shadow 0.3s, transform 0.3s;
        border-radius: 15px 15px;
        overflow: hidden; 
    }

    .cards img {
        width: 100%; 
        height: 190px; 
        object-fit: cover; 
    }

    .card-text {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f2f2f2;
        height: 10vh;
        padding: 10px;
    }

    .card-text-2 {

        padding: 10px;
        border-radius: 0 0 10px 10px;
        text-align: start;
    }

    .cards:hover {
        box-shadow: 0 10px 16px 1px #95989c;
        transform: translateY(-5px);
    }

    .cards:active {
        box-shadow: 0px 15px 20px 7px #9baab99e;
        transform: translateY(-8px);
    }

    /* @media (max-width: 1200px) {
        .box {
            display: none;
        }
    } */
    
    @media (max-width: 768px) {

        .box {
            display: block;
            width: 88%;
            /* height: 100%; */
        }

        .img-box {
            position: relative;
            width: 94%;
            display: inline-block;
            border-radius: 10px;
        }

        .img-box img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .space {
            padding: 20px 0px;
        }

        .boxes {
            gap: 40px;
        }

        .boxy {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 88%;
            padding: 10px;
            border: 0.1px solid #add8e621;
            background-color: #edeeefab;
            box-shadow: 0 5px 8px 2px #8d9db669;
            border-radius: 10px;
        }

        .boxy:hover .boxy-text {
            transform: translateY(0);
        }

        .boxy-img {
            width: 100%;
            margin-bottom: 10px;
        }

        .boxy-text {
            position: static;
            transform: translateY(0);
            transition: none;
            background-color: rgb(255 255 255 / 50%);
            color: black;
            border-radius: 10px;
        }

        .card-box {
            flex-direction: column;
            align-items: center;
        }

        .cards {
            width: 80%;
        }
    }

    /* about page */

    .project-img {
        border-radius: 20px;
    }
    .img-pad {
        padding: 0% 0% 10%;
    }

    /* contact page */

    .get-me {
        padding-left: 5%;
    }

    .big-text {
        margin: 15vh 0 3vh -10px;
        position: relative;
        color: rgb(43, 5, 5);
        font-size: 500%;
        font-family: "Sofia", sans-serif;
        text-shadow: 3px 3px 3px #ababab;
    }

    .contact-pad {
        padding: 3% 1%;
    }
    
    .sub {
        width: 100px;
        height: 50px;
        border-radius: 20px;
        border: none;
        background-color: #cbcbcb;
    }

    @media (max-width: 768px) {
        .big-text {
            font-size: 10vh;
        }

        .contact-pad {
            padding: 3% 4%;
        }
    }



    /* footer */

    .footer {
        background-color: #40352d;
        color: #fff;
        padding: 30px 0;
        border-radius: 10px 10px 0 0;
        text-align: center;
    }

    .footer-logo {
        display: flex;
        align-items: center; 
    }

    .footer-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .footer-menu, .social-icons {
        list-style: none;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .footer-menu li, .social-icons li {
        display: inline-block;
        margin-right: 20px;
    }

    .footer-menu li:last-child, .social-icons li:last-child {
        margin-right: 0;
    }

    .footer-menu a,.social-icons a {
        color: #fff;
        text-decoration: none;
    }

    .footer-hire {
        width: 115px;
        height: 55px;
        border-radius: 20px;
        border: none;
        color: white;
        background-color: #e0b9a4;
        align-items: center;
        justify-content: center;
        display: flex;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .footer-hire:hover {
        background-color: #d9947e;
        box-shadow: 0px 5px 6px 4px rgb(204 193 193);
    }

    @media (max-width: 768px) {
        .footer-menu, .social-icons {
            list-style: none;
            padding: 0;
            margin: 0;
            list-style: none;
            display: grid;
            justify-items: start;
        }
    }

    /* contact----container */

    .contact-container {
        position: fixed;
        bottom: 130px;
        right: -200px;
        text-decoration: none;
        color: #fff;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }

    .icon {
        display: flex;
        width: 240px;
        height: 45px;
        margin-bottom: 10px;
        padding-left: 15px;
        transition: transform 0.3s ease;
        text-decoration: none;
        color: #fff;
        border-radius: 5px 0 0 5px;
        box-shadow: 0 2px 4px #7d7d7d;
        align-items: center;
        justify-content: flex-start;
    }

    .icon:hover {
        transform: translateX(-160px);
    }

    a:hover {
        color: white;
        text-decoration: none;
    }

    .icon i {
        margin-right: 10px;
        font-size: 20px;
    }

    .icon:before {
        content: attr(data-text);
        font-size: 30px;
        font-weight: 900;
        transition: margin 0.25s ease;
    }

    .icon:hover:before {
        margin-right: 0;
    }

    /* back to top  */

    .back-to-top {
        position: fixed;
        bottom: 20px;
        left: 10px;
        background-color: #000;
        color: #fff;
        width: 40px;
        height: 40px;
        border-radius: 30%;
        text-align: center;
        line-height: 40px;
        font-size: 20px;
        z-index: 9999;
        transition: opacity 0.3s ease-in-out;
        }

    .back-to-top:hover {
        background-color: #c10000;
    }

</style>