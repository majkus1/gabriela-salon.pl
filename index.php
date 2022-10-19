<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salon Fryzjerski Gabriela w Pilicy</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    .wrapper {
  margin: 0 auto;
  max-width: 1550px;
  width: 100%;
}

html {
  font-display: swap;
  scroll-behavior: smooth;
}

body {
  background-color: white;
  font-family: "Montserrat", sans-serif;
  font-display: swap;
}

.desktopnav {
  display: flex;
  position: fixed;
  justify-content: space-between;
  align-items: center;
  height: 80px;
  font-size: 16px;
  background: linear-gradient(to bottom, #eee, #ddd);
  box-shadow: 0px 0px 35px black;
  z-index: 1000000000000000000000000000000000000000000000000000000;
  opacity: 9;
}
.desktopnav .navlogo .logo {
  height: 70px;
  width: 200px;
}
.desktopnav .link::before {
  content: "";
  background: linear-gradient(to bottom, #eee, #ddd);
  height: 80px;
  width: 80px;
  -webkit-clip-path: polygon(0 0, 0 100%, 100% 100%);
          clip-path: polygon(0 0, 0 100%, 100% 100%);
  margin-left: -1.5px;
}
.desktopnav .link {
  background-repeat: no-repeat;
  height: 80px;
  width: 750px;
  display: flex;
  align-items: center;
  background-color: purple;
  border: none;
}
.desktopnav .link .links a {
  margin-left: 40px;
  text-decoration: none;
  color: white;
  transition: color 0.5s;
  font-weight: 400;
  font-display: swap;
}
.desktopnav .link .links a:hover {
  color: rgb(225, 105, 117);
}
.desktopnav .link .links .active {
  color: pink;
}

header .section {
  height: 100%;
}
header .bgc {
  display: flex;
  justify-content: center;
  align-items: center;
  background: rgba(139, 0, 139, 0.134);
}
header .bgc .desktopbgc {
  background-size: contain;
  background-repeat: no-repeat;
  height: 400px;
  width: 100%;
  opacity: 0.9;
  margin-top: 70px;
  z-index: -1;
}
header .bgc .text {
  position: absolute;
  display: flex;
  flex-direction: column;
  align-items: center;
}
header .bgc .text h1 {
  color: purple;
  margin-top: 100px;
  font-size: 40px;
  z-index: 1;
  text-align: center;
  font-weight: 400;
  padding: 20px;
  box-shadow: 0px 0px 10px black;
  background: linear-gradient(to bottom, #eee, #ddd);
  font-display: swap;
}
header .bgc .text a {
  color: white;
  z-index: 1;
  background: purple;
  padding: 10px;
  font-size: 14px;
  width: 100px;
  border: 1px solid purple;
  box-shadow: 0px 0px 35px white;
  transition: all 0.4s;
  font-display: swap;
  text-align: center;
  cursor: pointer;
  text-decoration: none;
}
header .bgc .text a:hover {
  background: darkmagenta;
  color: white;
  text-decoration: underline;
  cursor: pointer;
}
header svg {
  display: none;
}

.aboutusmobile h2 {
  color: purple;
  padding: 10px;
  background: linear-gradient(to bottom, #eee, #ddd);
  text-align: center;
  margin-top: 55px;
  font-display: swap;
}
.aboutusmobile h3 {
  color: white;
  padding: 10px;
  background: darkmagenta;
  text-align: center;
  font-display: swap;
}
.aboutusmobile p {
  color: darkmagenta;
  font-size: 18px;
  max-width: 1250px;
  margin-left: auto;
  margin-right: auto;
  text-align: start;
  padding: 25px;
  font-display: swap;
}
.aboutusmobile .imagesmob {
  display: flex;
  flex-direction: column;
  background: linear-gradient(to bottom, rgb(255, 255, 255), rgb(248, 248, 248));
  padding: 25px;
}
.aboutusmobile .imagesmob .imgsalon {
  align-self: flex-start;
  background: darkmagenta;
  box-shadow: 0px 0px 35px black;
  width: 50vw;
  height: 200px;
}
.aboutusmobile .imagesmob .imgsalon .firstph {
  width: 100%;
  height: 100%;
  opacity: 0.7;
  box-shadow: 0px 0px 5px black;
}
.aboutusmobile .imagesmob .imgsalontwo {
  align-self: flex-end;
  background: darkmagenta;
  box-shadow: 0px 0px 5px black;
  width: 50vw;
  height: 200px;
  margin-top: -25px;
}
.aboutusmobile .imagesmob .imgsalontwo .secph {
  width: 100%;
  height: 100%;
  opacity: 0.8;
  box-shadow: 0px 0px 35px black;
}
.aboutusmobile .buttonshowstyle {
  display: flex;
  justify-content: center;
  margin-top: 25px;
  margin-bottom: 35px;
}
.aboutusmobile .buttonshowstyle .expand {
  padding: 10px;
  color: white;
  background: darkmagenta;
  border-radius: 15px;
  border: 2px solid white;
  cursor: pointer;
}
.aboutusmobile .closestylization {
  display: none;
  justify-content: center;
  margin-top: 25px;
  margin-bottom: 35px;
}
.aboutusmobile .closestylization .closest {
  padding: 10px;
  color: white;
  background: darkmagenta;
  border-radius: 15px;
  border: 2px solid white;
  cursor: pointer;
}
.aboutusmobile .showstyle {
  display: none;
}
.aboutusmobile .showstyle .imagesmobst {
  display: flex;
  flex-direction: column;
  padding: 25px;
}
.aboutusmobile .showstyle .imagesmobst .imgsalonst {
  align-self: flex-start;
  box-shadow: 0px 0px 35px black;
  width: 50vw;
  height: 200px;
}
.aboutusmobile .showstyle .imagesmobst .imgsalonst .firstphst {
  width: 100%;
  height: 100%;
  opacity: 0.7;
  box-shadow: 0px 0px 5px black;
}
.aboutusmobile .showstyle .imagesmobst .imgsalontwost {
  align-self: flex-end;
  box-shadow: 0px 0px 5px black;
  width: 50vw;
  height: 200px;
  margin-top: -25px;
}
.aboutusmobile .showstyle .imagesmobst .imgsalontwost .secphst {
  width: 100%;
  height: 100%;
  opacity: 0.8;
  box-shadow: 0px 0px 35px black;
}
.aboutusmobile .socialmedia {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: -14px;
  background-color: darkmagenta;
  padding: 7px;
}
.aboutusmobile .socialmedia img {
  width: 110px;
  height: 110px;
}

.reservation {
  padding-top: 30px;
}
.reservation .section {
  height: 100%;
}
.reservation h2 {
  color: purple;
  padding: 10px;
  background: linear-gradient(to bottom, #eee, #ddd);
  text-align: center;
  margin-top: 55px;
  font-display: swap;
}

.wrappersreserve {
  margin: 0 auto;
  max-width: 1150px;
  width: 100%;
}

.contact {
  padding-top: 60px;
}
.contact .section {
  height: 100%;
}
.contact h2 {
  color: purple;
  padding: 10px;
  background: linear-gradient(to bottom, #eee, #ddd);
  text-align: center;
  font-display: swap;
}
.contact .panel form {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin-top: 0;
  background: linear-gradient(to bottom, #eee, #ddd);
  font-size: 18px;
  font-family: "Montserrat", sans-serif;
}
.contact .panel form label {
  color: black;
  font-weight: 600;
}
.contact .panel form input {
  margin-bottom: 15px;
  margin-left: 3px;
  background-color: white;
  color: black;
  border: 1px solid darkmagenta;
  border-radius: 5px;
  width: 200px;
  height: 25px;
  font-size: 18px;
}
.contact .panel form textarea {
  margin-top: 3px;
  background-color: white;
  color: black;
  border: 1px solid darkmagenta;
  border-radius: 5px;
  font-size: 18px;
  font-family: "Montserrat", sans-serif;
  width: 265px;
}
.contact .panel form .sendmail {
  margin-top: 20px;
  margin-bottom: 30px;
  padding: 11px 25px;
  color: white;
  border: none;
  background: darkmagenta;
  font-weight: 600;
  cursor: pointer;
}
.contact .panel .mapdesktop {
  display: none;
}
.contact .info {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.contact .info .open {
  display: flex;
  align-items: center;
  margin-top: 25px;
}
.contact .info .open img {
  height: 45px;
  width: 45px;
}
.contact .info .open p {
  margin-left: 15px;
}
.contact .info .localization {
  display: flex;
  align-items: center;
  margin-top: 25px;
}
.contact .info .localization img {
  height: 45px;
  width: 45px;
}
.contact .info .localization p {
  margin-left: 10px;
}
.contact .mapsmobile {
  margin-top: 20px;
}
.contact .oursocial {
  display: flex;
  justify-content: space-around;
  align-items: center;
  margin-top: 22px;
  padding: 15px;
  background: darkmagenta;
}
.contact .oursocial img {
  width: 70px;
  height: 70px;
}

@media (max-width: 500px) {
  header .bgc {
    background: none;
    box-shadow: none;
  }
  header .bgc .desktopbgc {
    display: none;
  }
  header .bgc .mediumbgc {
    display: none;
  }
  header .bgc .mobilebgc {
    position: relative;
    margin-top: 60px;
    width: 100%;
    height: 84vh;
    opacity: 1;
    z-index: -1;
    box-shadow: none;
    -o-object-fit: cover;
       object-fit: cover;
  }
  header .bgc .text h1 {
    color: darkmagenta;
    margin-top: 100px;
    font-size: 30px;
    z-index: 1;
    font-weight: 500;
    padding: 20px;
    box-shadow: 0px 0px 35px black;
    background: rgba(216, 216, 216, 0.942);
    text-align: center;
    font-display: swap;
  }
  header .bgc .text a {
    color: white;
    z-index: 1;
    background: darkmagenta;
    padding: 10px;
    font-size: 14px;
    width: 100px;
    border: 1px solid purple;
    box-shadow: 0px 0px 35px white;
    transition: all 0.4s;
    font-display: swap;
    text-align: center;
    cursor: pointer;
  }
  header svg {
    display: inline;
    margin-top: -500px;
    z-index: 100;
    box-shadow: none;
  }
  header .telcontact {
    z-index: 100000000000000040000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000;
    display: flex;
    justify-content: start;
  }
  header .telcontact a {
    z-index: 100000000000000040000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000;
    position: fixed;
    left: 15px;
    bottom: 10px;
  }
  header .telcontact a img {
    width: 55px;
    height: 55px;
  }
}
@media (min-width: 500px) and (max-width: 950px) {
  header .bgc {
    box-shadow: none;
  }
  header .bgc .desktopbgc {
    display: none;
  }
  header .bgc .mediumbgc {
    display: block;
    background-size: contain;
    background-repeat: no-repeat;
    height: 650px;
    width: 100%;
    box-shadow: none;
  }
  header .bgc .mobilebgc {
    display: none;
  }
  header svg {
    display: inline;
    margin-top: -500px;
    z-index: 100;
    box-shadow: none;
  }
  header .telcontact {
    z-index: 100000000000000040000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000;
    display: flex;
    justify-content: start;
  }
  header .telcontact a {
    z-index: 100000000000000040000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000;
    position: fixed;
    left: 15px;
    bottom: 10px;
  }
  header .telcontact a img {
    width: 55px;
    height: 55px;
  }
  .aboutusmobile .imagesmob .imgsalon {
    width: 50vw;
    height: 330px;
  }
  .aboutusmobile .imagesmob .imgsalontwo {
    width: 50vw;
    height: 330px;
  }
  .aboutusmobile .showstyle .imagesmobst .imgsalonst {
    width: 50vw;
    height: 330px;
  }
  .aboutusmobile .showstyle .imagesmobst .imgsalontwost {
    width: 50vw;
    height: 330px;
  }
}
@media (max-width: 950px) {
  .desktopnav .link .links {
    display: none;
  }
  .desktopnav .main-nav {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    text-align: center;
    background: #fff;
    opacity: 0;
    z-index: -1;
    visibility: hidden;
    transition: all 0.375s;
    padding: 70px;
  }
  .desktopnav .is-open {
    opacity: 1;
    z-index: 100;
    visibility: visible;
  }
  .desktopnav .main-nav::before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: -15px;
    background: purple;
    height: 100vh;
    width: 100vw;
    transform-origin: 0 0;
    transform: skew(-14deg) translateX(-120%);
    transition: all 0.275s 0.1s;
  }
  .desktopnav .main-nav.is-open::before {
    transform: skew(-14deg) translateX(0);
  }
  .desktopnav .main-nav ul {
    display: inline-flex;
    flex-direction: column;
    height: 100%; /* Should be 100%, but we have a notice message :D */
    align-items: flex-end;
    justify-content: center;
    transform: translateX(-18%) skew(-16deg);
  }
  .desktopnav .main-nav li {
    display: block;
    margin: 0.5rem 0;
    text-align: right;
    transform: skew(16deg);
    font-display: swap;
  }
  .desktopnav .main-nav a {
    opacity: 0;
    transform: translateY(-10px);
  }
  .desktopnav .main-nav.is-open a {
    opacity: 1;
    transform: translateY(0);
  }
  .desktopnav .main-nav li:nth-child(1) a {
    transition: all 275ms 375ms;
  }
  .desktopnav .main-nav li:nth-child(2) a {
    transition: all 275ms 425ms;
  }
  .desktopnav .main-nav li:nth-child(3) a {
    transition: all 275ms 575ms;
  }
  .desktopnav .main-nav li:nth-child(4) a {
    transition: all 275ms 625ms;
  }
  .desktopnav .main-nav li:nth-child(5) a {
    transition: all 275ms 775ms;
  }
  .desktopnav .main-nav ul,
.desktopnav .main-nav li {
    list-style: none;
    padding: 0;
  }
  .desktopnav .main-nav a {
    display: block;
    padding: 12px 0;
    color: #fff;
    font-size: 1.4em;
    text-decoration: none;
    font-weight: bold;
  }
  .desktopnav .open-main-nav {
    position: absolute;
    top: 19px;
    padding-top: 20px;
    right: 15px;
    z-index: 1000;
    background: none;
    border: 0;
    cursor: pointer;
  }
  .desktopnav .open-main-nav:focus {
    outline: none;
  }
  .desktopnav .burger {
    position: relative;
    display: block;
    width: 28px;
    height: 4px;
    margin: 0 auto;
    background: #5a3b5d;
    transform: skew(5deg);
    transition: all 0.275s;
  }
  .desktopnav .burger:after,
.desktopnav .burger:before {
    content: "";
    display: block;
    height: 100%;
    background: #5a3b5d;
    transition: all 0.275s;
  }
  .desktopnav .burger:after {
    transform: translateY(-12px) translateX(-2px) skew(-20deg);
  }
  .desktopnav .burger:before {
    transform: translateY(-16px) skew(-10deg);
  }
  .desktopnav .is-open .burger {
    transform: skew(5deg) translateY(-8px) rotate(-45deg);
    background: white;
  }
  .desktopnav .is-open .burger:before {
    transform: translateY(0px) skew(-10deg) rotate(75deg);
    background: white;
  }
  .desktopnav .is-open .burger:after {
    transform: translateY(-12px) translateX(10px) skew(-20deg);
    opacity: 0;
  }
  .desktopnav .burger-text {
    display: block;
    font-size: 0.675rem;
    letter-spacing: 0.05em;
    margin-top: 0.5em;
    text-transform: uppercase;
    font-weight: 500;
    text-align: center;
    color: #5a3b5d;
  }
  .desktopnav .container {
    position: absolute;
    display: flex;
    align-items: center;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    height: 80px;
    width: 100%;
    background: linear-gradient(to bottom, #eee, #ddd);
  }
  .desktopnav .container .mobilelogo {
    display: flex;
    align-items: center;
    margin-left: 5px;
  }
  .desktopnav .container .mobilelogo img {
    height: 60px;
    width: 190px;
  }
  .aboutusdesktop {
    display: none;
  }
}
@media (min-width: 950px) {
  .desktopnav .mobilenav {
    display: none;
  }
  header .bgc .mediumbgc {
    display: none;
  }
  header .bgc .mobilebgc {
    display: none;
  }
  header .telcontact {
    z-index: 100000000000000040000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000;
    display: flex;
    justify-content: start;
  }
  header .telcontact a {
    z-index: 100000000000000040000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000;
    position: fixed;
    left: 15px;
    bottom: 10px;
  }
  header .telcontact a img {
    width: 55px;
    height: 55px;
  }
  .aboutusmobile {
    display: none;
  }
  .aboutusdesktop .section {
    height: 100%;
  }
  .aboutusdesktop h2 {
    color: purple;
    text-align: center;
    font-size: 25px;
    font-display: swap;
    background: none;
  }
  .aboutusdesktop .textabout {
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin: 20px;
  }
  .aboutusdesktop .textabout p {
    width: 50%;
    color: black;
    background: linear-gradient(to bottom, #eee, #ddd);
    font-size: 18px;
    padding: 95px;
    font-display: swap;
  }
  .aboutusdesktop .textabout .imagetext {
    width: 40%;
    background-size: cover;
    background: darkmagenta;
    height: 550px;
    box-shadow: 0px 0px 35px black;
    z-index: 1;
  }
  .aboutusdesktop .textabout .imagetext img {
    width: 100%;
    height: 550px;
    opacity: 0.8;
  }
  .aboutusdesktop .textaboutsecond {
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin-top: 65px;
    margin: 20px;
  }
  .aboutusdesktop .textaboutsecond .imagetextsecond {
    width: 40%;
    background-size: cover;
    background: darkmagenta;
    height: 550px;
    box-shadow: 0px 0px 35px black;
    z-index: 1;
  }
  .aboutusdesktop .textaboutsecond .imagetextsecond img {
    width: 100%;
    height: 550px;
    opacity: 0.8;
  }
  .aboutusdesktop .textaboutsecond p {
    width: 50%;
    color: black;
    background: linear-gradient(to bottom, #eee, #ddd);
    font-size: 18px;
    padding: 95px;
    font-display: swap;
  }
  .aboutusdesktop h3 {
    margin-top: 85px;
    color: white;
    padding: 10px;
    background: darkmagenta;
    text-align: center;
    font-display: swap;
  }
  .aboutusdesktop .socialmedia {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: -14px;
    background-color: darkmagenta;
    padding: 10px;
  }
  .aboutusdesktop .socialmedia img {
    margin-left: 50px;
    width: 150px;
    height: 150px;
  }
  .aboutusdesktop .wrappers {
    top: 25px;
    position: relative;
    flex-grow: 1;
    margin: auto;
    max-width: 1200px;
    max-height: 1200px;
    display: grid;
    grid-template-columns: repeat(8, 1fr);
    grid-template-rows: repeat(4, 1fr);
    grid-gap: 2vmin;
    justify-items: center;
    align-items: center;
  }
  .aboutusdesktop .gallerystyle {
    z-index: 1;
    grid-column: span 2;
    max-width: 100%;
    margin-bottom: -52%;
    -webkit-clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
            clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
    transform: scale(1);
    transition: all 0.25s;
    opacity: 1;
  }
  .aboutusdesktop .gallerystyle:nth-child(7n+1) {
    grid-column: 2/span 2;
  }
  .aboutusdesktop .gallerystyle:hover {
    z-index: 2;
    transform: scale(2);
    opacity: 1;
  }
  .reservation h2 {
    color: purple;
    text-align: center;
    font-size: 25px;
    margin-top: 65px;
    font-display: swap;
    background: none;
  }
  .contact h2 {
    background: none;
  }
  .contact .panel {
    display: flex;
    justify-content: space-around;
    padding-top: 25px;
    padding-bottom: 25px;
    background: linear-gradient(to bottom, #eee, #ddd);
  }
  .contact .panel form {
    justify-content: center;
    align-items: center;
    margin-left: 60px;
    width: 50%;
  }
  .contact .panel form input {
    margin-left: 10px;
    padding: 2px;
    width: 300px;
  }
  .contact .panel form textarea {
    width: 400px;
    padding: 2px;
  }
  .contact .panel form .sendmail:hover {
    color: white;
    background: gray;
  }
  .contact .panel .mapdesktop {
    display: flex;
    width: 50%;
    padding: 30px;
    margin: 20px;
    background: linear-gradient(to bottom, rgb(184, 183, 183), #ddd);
  }
  .contact .mapsmobile {
    display: none;
  }
  .contact .information {
    display: flex;
    justify-content: space-between;
    width: 100%;
  }
  .contact .information .info {
    flex-direction: row;
    width: 60%;
  }
  .contact .information .info .open {
    margin-top: 0;
    margin-left: 75px;
  }
  .contact .information .info .localization {
    margin-top: 0;
  }
  .contact .information .oursocial {
    margin-top: 0;
    padding-top: 30px;
    padding-bottom: 30px;
    width: 40%;
    background: linear-gradient(to right, rgb(255, 255, 255), darkmagenta);
  }
}
  </style>
</head>

<body class="wrapper main-page">

  <nav class="desktopnav wrapper">
    <li class="navlogo" style="list-style: none;">
      <a href="#">
        <img src="/img/logo.png" alt="" class="logo" style="margin-left: 10px;">
      </a>
    </li>
    <div class="link">
      <div class="links">
        <a href="#strona_glowna" class="active">Strona główna</a>
        <a href="#o_nas" style="margin-left: 50px;">O nas</a>
        <a href="#reservation" style="margin-left: 50px;">Rezerwacja wizyty</a>
        <a href="#contact" style="margin-left: 50px;">Kontakt</a>
      </div>
    </div>

    <div class="mobilenav">
      <div class="container">
        <div class="mobilelogo">
          <img src="img/logo.png" alt="">
        </div>
        <button id="burger" class="open-main-nav">
          <span class="burger"></span>
          <span class="burger-text">Menu</span>
        </button>
        <div class="main-nav" id="main-nav">
          <ul id="items">
            <li>
              <a href="#strona_glowna">Strona Główna</a>
            </li>
            <li>
              <a href="#o-nas">O nas</a>
            </li>
            <li>
              <a href="#reservation">Rezerwacja</a>
            </li>
            <li>
              <a href="#contact">Kontakt</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <header class="wrapper section" id="strona_glowna">
    <div class="bgc">
      <img src="img/bgcdesktop.webp" alt="" class="desktopbgc">
      <img src="img/bgcmedium.webp" alt="" class="mediumbgc">
      <img src="img/bgcmobile.webp" alt="" class="mobilebgc">

      <div class="text">
        <h1>Salon Fryzjerski Gabriela w Pilicy</h1>
        <a href="#reservation">Rezerwacja wizyty</a>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1"
        d="M0,96L80,128C160,160,320,224,480,224C640,224,800,160,960,133.3C1120,107,1280,117,1360,122.7L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
      </path>
    </svg>
    <div class="telcontact">
      <a href="tel: +48 692 167 892"><img src="/img/telephone.png" alt="znaczek słuchawki od telefonu"></a>
    </div>
  </header>

  <main>
    <section class="aboutusmobile wrapper" id="o-nas" style="padding-top: 30px;">
      <h2>O nas</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius error aliquam consectetur impedit voluptatum
        obcaecati. Nesciunt temporibus aliquid sint id eos facilis porro eveniet nam quaerat similique ratione, tempora
        quae qui fugit vero incidunt corrupti atque ea. Ad ullam at, consequatur dolorem quia debitis voluptas nam unde
        aliquam, placeat ea!</p>
      <div class="imagesmob">
        <div class="imgsalon" data-aos="fade-up" data-aos-duration="3000">
          <img src="img/iStock-529062824.webp" alt="" class="firstph" loading="lazy">
        </div>
        <div class="imgsalontwo" data-aos="fade-down" data-aos-duration="3000">
          <img src="img/iStock-529063044.webp" alt="" class="secph" loading="lazy">
        </div>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius error aliquam consectetur impedit voluptatum
        obcaecati. Nesciunt temporibus aliquid sint id eos facilis porro eveniet nam quaerat similique ratione, tempora
        quae qui fugit vero incidunt corrupti atque ea. Ad ullam at, consequatur dolorem quia debitis voluptas nam unde
        aliquam, placeat ea!</p>
      <h3 style="margin-top: 50px;">Wykonane stylizacje</h3>

      <div class="imagesmob">
        <div class="imgsalon">
          <img src="img/1x1.webp" alt="" class="firstph" loading="lazy">
        </div>
        <div class="imgsalontwo">
          <img src="img/22.webp" alt="" class="secph" loading="lazy">
        </div>
      </div>

      <div class="buttonshowstyle">
        <button class="expand">Rozwiń więcej zdjęć</button>
      </div>
      <div class="showstyle">
        <div class="imagesmobst">
          <div class="imgsalonst">
            <img src="img/33.webp" alt="" class="firstphst" loading="lazy">
          </div>
          <div class="imgsalontwost">
            <img src="img/44.webp" alt="" class="secphst" loading="lazy">
          </div>
        </div>
        <div class="imagesmobst">
          <div class="imgsalonst">
            <img src="img/55.webp" alt="" class="firstphst" loading="lazy">
          </div>
          <div class="imgsalontwost">
            <img src="img/66.webp" alt="" class="secphst" loading="lazy">
          </div>
        </div>
        <div class="imagesmobst">
          <div class="imgsalonst">
            <img src="img/77.webp" alt="" class="firstphst" loading="lazy">
          </div>
          <div class="imgsalontwost">
            <img src="img/88.webp" alt="" class="secphst" loading="lazy">
          </div>
        </div>
        <div class="imagesmobst">
          <div class="imgsalonst">
            <img src="img/99.webp" alt="" class="firstphst" loading="lazy">
          </div>
          <div class="imgsalontwost">
            <img src="img/100.webp" alt="" class="secphst" loading="lazy">
          </div>
        </div>
      </div>

      <div class="closestylization">
        <button class="closest">Schowaj zdjęcia</button>
      </div>

      <h3>więcej o nas...</h3>
      <div class="socialmedia">
        <a href=""><img src="img/Facebook_Box_Filled_R Shadowless.png"
            alt="" loading="lazy"></a>
        <a href=""><img src="img/Instagram_Box_Filled_R.png" alt=""
            loading="lazy"></a>
        <a href=""><img src="img/TikTok_Box_R Shadowless.png" alt=""
            loading="lazy"></a>
      </div>
    </section>

    <section class="aboutusdesktop section" id="o_nas" style="padding-top: 30px;">
      <h2>O nas</h2>
      <div class="textabout">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut ipsam accusantium nemo, obcaecati animi iusto
          minus saepe neque, tempore, laudantium architecto doloremque delectus dolorum corrupti soluta esse magni
          eveniet. Harum sit unde nulla magnam adipisci enim vitae deleniti consectetur tempora, quae in magni, non
          libero, optio recusandae ex natus temporibus?</p>
        <div class="imagetext"><img src="img/iStock-529062824.webp" alt="" loading="lazy"></div>
      </div>
      <div class="textaboutsecond">
        <div class="imagetextsecond"><img src="img/iStock-529063044.webp" alt="" loading="lazy"></div>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut ipsam accusantium nemo, obcaecati animi iusto
          minus saepe neque, tempore, laudantium architecto doloremque delectus dolorum corrupti soluta esse magni
          eveniet. Harum sit unde nulla magnam adipisci enim vitae deleniti consectetur tempora, quae in magni, non
          libero, optio recusandae ex natus temporibus?</p>
      </div>
      <h3>Wykonane stylizacje</h3>
      <div class="wrappers">
        <img src="img/1x1.webp" alt="" class="gallerystyle">
        <img src="img/22.webp" alt="" class="gallerystyle">
        <img src="img/33.webp" alt="" class="gallerystyle">
        <img src="img/44.webp" alt="" class="gallerystyle">
        <img src="img/55.webp" alt="" class="gallerystyle">
        <img src="img/66.webp" alt="" class="gallerystyle">
        <img src="img/77.webp" alt="" class="gallerystyle">
        <img src="img/88.webp" alt="" class="gallerystyle">
        <img src="img/99.webp" alt="" class="gallerystyle">
        <img src="img/100.webp" alt="" class="gallerystyle">
      </div>

      <h3>Zobacz więcej na...</h3>
      <div class="socialmedia">
        <a href="" data-aos="zoom-in" data-aos-duration="2000"><img src="img/Facebook_Box_Filled_R Shadowless.png"
            alt="" loading="lazy"></a>
        <a href="" data-aos="zoom-in" data-aos-duration="2000"><img src="img/Instagram_Box_Filled_R.png" alt=""
            loading="lazy"></a>
        <a href="" data-aos="zoom-in" data-aos-duration="2000"><img src="img/TikTok_Box_R Shadowless.png" alt=""
            loading="lazy"></a>
      </div>
    </section>



    <section class="reservation wrappersreserve section" id="reservation">
      <h2>Rezerwacja wizyty</h2>
      <!-- <link href="https://gabriela-salon.pl/script/core/framework/libs/pj/css/pj.bootstrap.min.css" type="text/css"
        rel="stylesheet" />
      <link href="https://gabriela-salon.pl/script/index.php?controller=pjFrontEnd&action=pjActionLoadCss"
        type="text/css" rel="stylesheet" />
      <script type="text/javascript"
        src="https://gabriela-salon.pl/script/index.php?controller=pjFrontEnd&action=pjActionLoad"></script> -->
      <div id="bookero"></div>
    </section>

    <section class="contact section" id="contact">
      <h2>Kontakt</h2>
      <div class="panel">
        <form method="POST" class="contact contactform" name="myform" onsubmit="return validation()">
          <p style="margin-top: -30px;">Formularz kontaktowy:</p>
          <div>
            <label for="mail">E-mail:</label>
            <input type="email" name="Email" id="mail">
          </div>
          <div>
            <label for="number">Telefon:</label>
            <input type="number" name="Number" id="number">
          </div>
          <div class="textarea">
            <label for="msg">Wiadomość:</label>
            </br>
            <textarea name="Message" id="msg" cols="30" rows="10"></textarea>
            <div id="error"></div>
          </div>
          <button class="sendmail" type="submit" name="Login" value="submit">Wyślij</button>
        </form>
        <iframe class="mapdesktop"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158.72317490652864!2d19.65677787640972!3d50.467716614206374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47171bcc55a378ef%3A0x66a2a1dac4fa8199!2sDW790%2034%2C%2042-436%20Pilica!5e0!3m2!1spl!2spl!4v1660378180444!5m2!1spl!2spl"
          width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="information">
        <div class="info">
          <div class="localization">
            <img src="/img/place-localizer.png" alt="">
            <p>42-440 Pilica</br>
              ul. Rynek 4</p>
          </div>
          <div class="open">
            <img src="/img/clock.png" alt="">
            <p>Godziny otwarcia:</br>
              9:00-18:00</p>
          </div>
        </div>
        <iframe class="mapsmobile"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158.72317490652864!2d19.65677787640972!3d50.467716614206374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47171bcc55a378ef%3A0x66a2a1dac4fa8199!2sDW790%2034%2C%2042-436%20Pilica!5e0!3m2!1spl!2spl!4v1660378180444!5m2!1spl!2spl"
          width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="oursocial">
          <a href=""><img src="/img/icons8-facebook-96.webp" alt=""></a>
          <a href=""><img src="/img/icons8-instagram-96.webp" alt=""></a>
          <a href=""><img src="/img/icons8-tiktok-96.webp" alt=""></a>
        </div>
      </div>
    </section>
  </main>

  <script>
    const email = document.forms['myform']['Email'];
    const number = document.forms['myform']['Number'];
    const message = document.forms['myform']['Message'];
    const errors = document.getElementById('error');

    function validation() {
      if (email.value == '') {
        errors.innerHTML = "Proszę wypełnić puste pola.";
        errors.style.display = "block";
        errors.style.color = "red";
        errors.style.fontSize = "20px";
        errors.style.textAlign = "center";
        return false;
      }
      else if (number.value == '') {
        errors.innerHTML = "Proszę wypełnić puste pola.";
        errors.style.display = "block";
        errors.style.color = "red";
        errors.style.fontSize = "20px";
        errors.style.textAlign = "center";
        return false;
      }
      else if (message.value == '') {
        errors.innerHTML = "Proszę wypełnić puste pola.";
        errors.style.display = "block";
        errors.style.color = "red";
        errors.style.fontSize = "20px";
        errors.style.textAlign = "center";
        return false;
      }
      return true;
    }
  </script>

  <?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/Exception.php');
require('PHPMailer/SMTP.php');
require('PHPMailer/PHPMailer.php');

if(isset($_POST['Login']))
{
    $email=$_POST['Email'];
    $number=$_POST['Number'];
    $message=$_POST['Message'];

    $mail = new PHPMailer(true);

    try {                    //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'contact@lideaweb.com';                     //SMTP username
        $mail->Password   = 'wlptbwnggutxcwmu';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('contact@lideaweb.com', 'LIDEAWEB');
        $mail->addAddress('contact@lideaweb.com');     //Add a recipient
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Contact from website';
        $mail->Body    = "Email: $email <br> Phone: $number <br> Message: $message";
    
        $mail->send();
        echo "<script>alert('Wiadomość wysłana')</script>";
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
    }
}
?>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script>
    let burger = document.getElementById('burger'),
	nav = document.getElementById('main-nav'),
	item = document.getElementById('items')

burger.addEventListener('click', function (e) {
	this.classList.toggle('is-open')
	nav.classList.toggle('is-open')
})

item.addEventListener('click', function () {
	nav.classList.remove('is-open')
	burger.classList.remove('is-open')
})


const menuItems = document.querySelectorAll('.links a')
const scrollSpySections = document.querySelectorAll('.section')


const handleScrollSpy = () => {
    if(document.body.classList.contains('main-page')) {

        const sections = []

        scrollSpySections.forEach(section => {
            // console.log(window.scrollY);
            // wartość scrolla
            // console.log(section.offsetTop);
            // odległośc danej sekcji od górnej krawędzi przeglądarki
            // console.log(section.offsetHeight);
            // wysokość każdej z sekcji

            if(window.scrollY <= section.offsetTop + section.offsetHeight -103) {
                sections.push(section)
               
                const activeSection = document.querySelector(`[href*="${sections[0].id}"]`)
                
                menuItems.forEach(item => item.classList.remove('active'))

                activeSection.classList.add('active')
            }
        })
    }
}

window.addEventListener('scroll', handleScrollSpy)

const openstylebtn = document.querySelector('.expand')
const stylization = document.querySelector('.showstyle')
const closestylebtn = document.querySelector('.closestylization')

const open = () => {
    if (!(stylization.style.display === 'block')) {
       stylization.style.display = 'block'
       openstylebtn.style.display = 'none'
       closestylebtn.style.display = 'flex'
    }
}

const close = () => {
    if (!(stylization.style.display === 'none')) {
        stylization.style.display = 'none'
        openstylebtn.style.display = 'block'
        closestylebtn.style.display = 'none'
     }
}

openstylebtn.addEventListener('click', open)
closestylebtn.addEventListener('click', close)
  </script>
  <script src="/main.js"></script>

  <script type="text/javascript">
    var bookero_config = {
      id: '4doNiEpZ1anB',
      container: 'bookero',
      type: 'standard',
      position: '',
      plugin_css: true,
      lang: 'pl'
    };

    (function () {
      var d = document, s = d.createElement('script');
      s.src = 'https://cdn.bookero.pl/plugin/v2/js/bookero-compiled.js';
      d.body.appendChild(s);
    })();
  </script>
</body>

</html>