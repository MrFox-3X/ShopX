<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Commerce Landing Page</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="https://raw.githubusercontent.com/MrFox-3X/ShopX/refs/heads/main/style.css">
  <link rel="stylesheet" href="https://raw.githubusercontent.com/MrFox-3X/ShopX/refs/heads/main/responsive.css">
<style>


:root {

  /**
   * colors
   */
  --text-color:rgb(88, 85, 85);
  --main-text-color:rgb(16, 14, 14);
  --maximum-blue-green_10: hsla(185, 75%, 45%, 0.1);
  --rich-black-fogra-29: hsl(217, 28%, 9%);
  --gray-x-11-gray: hsl(0, 0%, 74%);
  --oxford-blue_60: hsla(230, 41%, 14%, 0.6);
  --bittersweet: hsl(5, 100%, 69%);
  --smoky-black: rgb(7, 6, 1);
  --gainsboro: hsl(0, 0%, 88%);
  --black_90: hsla(0, 0%, 0%, 0.9);
  --cultured: hsl(200, 12%, 95%);
  --salmon: hsl(5, 100%, 73%);
  --white: hsl(0, 0%, 100%);
  --black: hsl(0, 0%, 0%);
  --onyx: hsl(0, 0%, 27%);
  --main-color:rgb(252, 173, 26);

  /**
   * typography
   */
  
  --ff-roboto: 'Roboto', sans-serif;
  --ff-josefin-sans: 'Josefin Sans', sans-serif;

  --fs-1: 3rem;
  --fs-2: 2.6rem;
  --fs-3: 2.2rem;
  --fs-4: 2rem;
  --fs-5: 1.8rem;
  --fs-6: 1.6rem;
  --fs-7: 1.4rem;
  --fs-8: 1.2rem;

  --fw-300: 300;
  --fw-500: 500;
  --fw-600: 600;
  --fw-700: 700;

  /**
   * transition
   */

  --transition-1: 0.25s ease;
  --transition-2: 0.5s ease;
  --cubic-out: cubic-bezier(0.51, 0.03, 0.64, 0.28);
  --cubic-in: cubic-bezier(0.33, 0.85, 0.56, 1.02);

  /**
   * spacing
   */

  --section-padding: 60px;

}





/*-----------------------------------*\
 * #RESET
\*-----------------------------------*/

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

li { list-style: none; }

a { text-decoration: none; }

a,
img,
span,
table,
tbody,
button,
ion-icon { display: block; }

button,
input {
  font: inherit;
  background: none;
  border: none;
}

input { width: 100%; }

button { cursor: pointer; }

address {
  font-style: normal;
  line-height: 1.8;
}

html {
  font-family: var(--ff-josefin-sans);
  font-size: 10px;
  scroll-behavior: smooth;
}

body {
  background: #edebeb;
  font-size: 1.6rem;
  padding-block-start: 90px;
}
.container{
  margin: 0 8%;
}
/*-----------------------------------*\
 * #HEADER
\*-----------------------------------*/

.header {
  background: var(--white);
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  transition: var(--transition-1);
  z-index: 4;
}

.header.active { box-shadow: 0 2px 10px hsla(0, 0%, 0%, 0.1); }

.header .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-block: 20px;
}

.nav-open-btn {
  font-size: 30px;
  background: var(--bittersweet);
  color: var(--white);
  padding: 8px;
}

.nav-open-btn:is(:hover, :focus) { background: var(--salmon); }

.nav-open-btn ion-icon { --ionicon-stroke-width: 40px; }

.navbar {
  background: var(--white);
  position: fixed;
  top: 0;
  left: -280px;
  width: 100%;
  max-width: 270px;
  height: 100%;
  border-right: 3px solid var(--rich-black-fogra-29);
  font-family: var(--ff-roboto);
  overflow-y: auto;
  overscroll-behavior: contain;
  z-index: 2;
  visibility: hidden;
  transition: 0.25s var(--cubic-out);
}

.navbar.active {
  visibility: visible;
  transform: translateX(280px);
  transition: 0.5s var(--cubic-in);
}

.nav-close-btn {
  color: var(--rich-black-fogra-29);
  position: absolute;
  top: 0;
  right: 0;
  padding: 13px;
  font-size: 25px;
  transition: var(--transition-1);
}

.nav-close-btn ion-icon { --ionicon-stroke-width: 55px; }

.nav-close-btn:is(:hover, :focus) { color: var(--bittersweet); }

.navbar .logo {
  background: var(--maximum-blue-green_10);
  padding-block: 50px 40px;
}

.navbar .logo img { margin-inline: auto; }

.navbar-list,
.nav-action-list { margin: 30px; }

.navbar-list {
  padding: 20px;
  border-bottom: 1px solid var(--gainsboro);
}

.navbar-link {
  color: var(--rich-black-fogra-29);
  padding-block: 10px;
  transition: var(--transition-1);
}

.navbar-link:is(:hover, :focus) { color: var(--bittersweet); }

.navbar-item:not(:last-child) { border-bottom: 1px solid var(--gainsboro); }

.nav-action-list > li:first-child { display: none; }

.nav-action-btn {
  color: var(--rich-black-fogra-29);
  display: flex;
  align-items: center;
  gap: 10px;
  width: 100%;
  padding-block: 10px;
  transition: var(--transition-1);
}

.nav-action-btn:is(:hover, :focus) { color: var(--bittersweet); }

.nav-action-btn ion-icon {
  font-size: 22px;
  --ionicon-stroke-width: 25px;
}

.nav-action-text strong {
  font-weight: initial;
  color: var(--bittersweet);
}

.nav-action-badge {
  margin-left: auto;
  font-size: var(--fs-8);
  background: var(--bittersweet);
  color: var(--white);
  width: 18px;
  height: 18px;
  display: grid;
  place-items: center;
  border-radius: 50%;
}

.overlay {
  position: fixed;
  inset: 0;
  background: hsla(0, 0%, 0%, 0.6);
  z-index: 1;
  opacity: 0;
  pointer-events: none;
  transition: var(--transition-1);
}

.overlay.active {
  opacity: 1;
  pointer-events: all;
}





/*-----------------------------------*\
 * #HERO
\*-----------------------------------*/

.hero {
  background-repeat: no-repeat;
  background-size: cover;
  background-position: left;
  min-height: 500px;
  display: flex;
  justify-content: flex-start;
  align-items: center;
}
.hero-container{
  margin: 0 8%;
}
.hero-title{
  margin: 0 60% 0 0;
}
.hero-heading{
  font-size: 2.2rem;
  color: var(--text-color);
}
.hero-main-title{
  font-size: 4rem;
  margin-top: 2rem;
}
.hero-sub-heading{
  font-size: 1.5rem;
  margin-right: 10rem;
}
.action-btn{
   background-color: var(--main-color);
   padding: 2rem 4rem;
   border-radius: 5rem;
   margin-top: 2rem;
   text-align: center;
   width: 16rem;
   color: #fff;
}
/*-----------------------------------*\
 * #End HERO
\*-----------------------------------*/

/*-----------------------------------*\
 * #Icons Section
\*-----------------------------------*/
 .icons{
  margin: 2% 6%;
 }
 .icons-container{
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  justify-items: center;
 }
 .icons-items{
  display: flex;
  flex-direction: row;
  gap: 0.4rem;
  align-items: center;
  background-color: #dcdcdc;
  width: 270px;
  border-radius: 1rem;
  padding: 2rem;
 }
 .icons-icon{
  background-color:#fff;
  padding: 2rem;
  border: 1px solid var(--bittersweet);
  border-radius: 50%;
 }
.icons-heading{
  font-size: 2rem;
  font-weight: bolder;
  color:var(--main-text-color);
}
.icon-sub-heading{
  font-size: 1.2rem;
  color: var(--text-color);
}

/*-----------------------------------*\
 * #End Icons Section
\*-----------------------------------*/

/*-----------------------------------*\
 * #Deal Section
\*-----------------------------------*/

.deal{
  margin: 2% 6%;
}
.deal-container{
  background-color: #fff;
  border-radius: 2rem;
}
.deal-heading{
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 1rem;
 
}
.deal-icon{
  color: var(--main-color);
  font-size: 4rem;
  margin: 2rem;
}
.deal-main-title{
  font-size: 2rem;
  font-weight: bolder;
}
.deal-item{
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1rem;
}
.deal-items-list{
  display: flex;
  flex-direction: row;
  align-items: center;
  background-color: #d9d9d9;
  margin: 2rem;
  border-radius: 1rem;

}
.deal-name{
  font-size: 2rem;
  font-weight: bolder;
  margin-left: 2rem;
}
.deal-price{
  color: var(--main-color);
  font-size: 2rem;
  margin-top: 2rem;
  margin-left: 2rem;
}
.deal-btn{
  background-color: var(--main-color);
   padding: 1rem 2rem;
   border-radius: 5rem;
   margin-top: 2rem;
   display: flex;
   text-align: center;
   align-items: center;
   width: 12rem;
   margin-left: 2rem;
   color: #fff;
}
.deal-image{
  height: 240px;
}
.left-right-icon{
  display: flex;
  flex-direction: row;
  align-items: center;
  padding: 1rem;
  gap: 1rem;
  justify-content: center;
}
.deal-left-icon{
  background-color: var(--main-color);
  padding: 1rem;
  border-radius: 0.5rem;
  color: #fff;
}
.deal-right-icon{
  background-color: var(--main-color);
  padding: 1rem;
  border-radius: 0.5rem;
  color: #fff;
}
/* End Deal Section */

/* Hot Deal Section */
.hot-deal{
  margin: 2% 6%;
}
.hot-deal-headings{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  
}
.hot-deal-main-title{
  display: flex;
  flex-direction: row;
  align-items: center;
}
.hot-deal-icon{
  color: var(--main-color);
  font-size: 4rem;
  margin: 2rem;
}
.hot-deal-main-title{
  font-size: 2rem;
  font-weight: bolder;
}
.hot-deal-btn{
   background-color: var(--main-color);
   padding: 1rem 2rem;
   border-radius: 2rem;
   margin-top: 2rem;
   display: flex;
   margin-right: 2rem;
   text-align: center;
   align-items: center;
   color: #fff;
}
.hot-deal-items{
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  justify-items: center;
}
.hot-deal-items-list{
  background-color: #fff;
  width: 290px;
  border-radius: 1rem;
  margin-top: 1rem;
}
.hot-deal-list-image{
  display: flex;
  justify-content: center;
  position: relative;
}
.hot-deal-img{
  height: 180px;
}
.deal-tag{
  background-color: var(--bittersweet);
  padding: 0.4rem 1rem;
  font-size: 1.1rem;
  border-radius: 2rem;
  width: 4rem;
  margin-top: 1rem;
  margin-left: 2%;
  color: white;
}
.deal-tag-sale{
  background-color: black;
  padding: 0.4rem 1rem;
  font-size: 1.1rem;
  border-radius: 2rem;
  width: 4rem;
  margin-top: 1rem;
  margin-left: 2%;
  color: white;
}
.hot-deal-icons{
  position: absolute;
  display: none;
  margin-left: 79%;
  margin-top: 7%;
}
.hot-deal-list-image:hover > .hot-deal-icons {
  display: block;
}
.hot-deal-icons i{
  background-color:var(--main-color);
  padding: 1rem;
  margin-top: 1rem;
  color: #fff;
  display: flex;
  flex-direction: column;
  border-radius: 0.7rem;
}
.hot-deal-item-name a{
  font-size: 2rem;
  font-weight: bolder;
  text-align: center;
  color: var(--main-text-color);
}
.hot-deal-item-type a{
  font-size: 1.3rem;
  text-align: center;
  margin-top: 0.4rem;
  color: var(--text-color);

}
.hot-deal-footer{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  margin: 1rem 1.0rem;
  align-items: center;
}
.hot-deal-list-price{
  display: flex;
  flex-direction: column;
  gap:1rem;
}
.hot-deal-active-price{
  font-size: 2rem;
  color: var(--main-color);
}
.hot-deal-del-price{
  font-size: 1.5rem;
  color: red;
}
.hot-deal-cart{
  background-color: var(--main-color);
   padding: 1rem 1.5rem;
   border-radius: 2rem;
   margin-top: 2rem;
   text-align: center;
   color: #fff;
}
.load-more{
  display: flex;
  flex-direction: row;
  justify-content: center;
}
.hot-deal-more-btn{
  background-color: var(--bittersweet);
  padding: 1rem 2rem;
  border-radius: 2rem;
  margin-top: 2rem;
  display: flex;
  justify-content: flex-end;
  margin-right: 2rem;
  text-align: center;
  align-items: center;
  color: #fff;
}
/*-----------------------------------*\
 * #End Hot Deals Section
\*-----------------------------------*/

/*-----------------------------------*\
 * #Category Section
\*-----------------------------------*/
 .category{
  margin: 2% 6%;
 }
 .category-list{
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap:1rem;
 }
 .category-list-item {
  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(https://raw.githubusercontent.com/MrFox-3X/ShopX/refs/heads/main/man.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  border-radius: 2rem;
  display: inline-block;
}
.category-list-item:last-child {
  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(https://raw.githubusercontent.com/MrFox-3X/ShopX/refs/heads/main/women.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  border-radius: 2rem;
  display: inline-block;
}
 
 .category-headings{
  display: flex;
  position: relative;
  flex-direction: column;
  align-items: flex-end;
  margin: 4rem;
 }
 .heading{
   margin-left: 20rem;
 }
 .category-title{
   color: #fff;
   font-size: 2.5rem;
   font-weight: bolder;
 }
 .category-title-heading{
  color: var(--main-text-color);
  font-size: 2rem;
  font-weight: bolder;
  margin-top: 2rem;
 }
 .category-btn{
  color: #fff;
  padding: 2rem 0rem;
  text-decoration: underline;
 }
 .category-btn:hover{
  text-decoration: none;
 }
/*-----------------------------------*\
 * #End Category Section
\*-----------------------------------*/

/*-----------------------------------*\
 * #Product Section
\*-----------------------------------*/
.product{
  margin: 2% 6%;
}
.product-heading{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
}
.product-heading-icon{
  display: flex;
  align-items: center;
}
.all-product-icon{
  color: var(--main-color);
  font-size: 3rem;
  margin: 2rem;
}
.product-title{
  font-size: 2rem;
  font-weight: bolder;
}
.all-product-btn{
  background-color: var(--main-color);
  padding: 1rem 2rem;
  border-radius: 5rem;
  display: flex;
  text-align: center;
  align-items: center;
  margin: 0 3rem 0 0;
  color: #fff;
}
.product-item{
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1rem;
  justify-items: center;
}
.product-list-title{
  font-size: 1.4rem;
  text-align: center;
  font-weight: 400;
  margin-top: 1rem;
}
.product-item-list{
  display: flex;
  flex-direction: row;
  margin: 0.7rem;
  background-color: #fff;
  border-radius: 1rem;
  width: 350px;
  align-items: center;
}
.product-img{
  background-color: #dcdcdc;
  margin: 2rem;
}
.product-list-img{
  height: 100px;
}
.product-info{
  display: flex;
  flex-direction: column;
  gap: 1rem;
}
.product-name{
  font-weight: 500;
  font-size: 2rem;
}
.product-price{
  font-size: 2rem;
  font-weight: 400;
  color: var(--main-color);
}
.product-foot{
  display: flex;
  flex-direction: row;
  gap: 1rem;
}
.product-cart{
  background-color: var(--main-color);
   padding: 1rem 1rem;
   border-radius: 2rem;
   text-align: center;
   color: #fff;
}
/*-----------------------------------*\
 * #End Product Section
\*-----------------------------------*/

/*-----------------------------------*\
 * #Footer Section
\*-----------------------------------*/
.footer{
  background-color: #4a4a4a;
  border-top-left-radius: 3rem;
  border-top-right-radius: 3rem;
}
.footer-container{
  margin: 2% 6% 0 6%;
 }
.footer-menu{
  display: grid;
  grid-template-columns: repeat(4, 1fr);
}
.footer-heading{
  display: flex;
  flex-direction: row;
  gap:0.4rem;
  
}
.footer-heading i{
 color: var(--main-color);
}
.footer-title{
  font-size: 2rem;
  font-weight: 500;
}
.footer-title::after{
  content: "";
  display: flex;
  height: 0.3rem;
  width: 5rem;
  background-color: var(--main-color);
  position: absolute;

}
.footer-menu-list{
  color: #fff;
  display: flex;
  margin-top: 4rem;
  flex-direction: column;

}
.footer-sub-description{
  margin-right: 6rem;
}
.footer-menu-items{
  display: flex;
  flex-direction: column;
  margin-top: 2rem;
  gap:1rem;
}
.footer-menu-items a{
  color: #fff;
  display: flex;
  text-align: center;
}
.footer-support{
  display: flex;
  flex-direction: row;
  gap:0.4rem;
  align-items: center;
}
.footer-icon{
  display: flex;
  gap: 0.6rem;
}
.footer-icon i{
  color: #fff;
  background-color: var(--main-color);
  padding: 1rem;
  border-radius: 50%;
}
.credit{
  background-color: #2f2f2f;
}
.credit-container{
  margin: 0 6%;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}
.author-name{
  margin: 1rem;
  display: flex;
  flex-direction: row;
  color: #fff;
  gap: 1rem;
}
.author-name span{
  color: var(--main-color);
}
/*-----------------------------------*\
 * #End Footer Section
\*-----------------------------------*/
/*-----------------------------------*\
 * #GO TOP
\*-----------------------------------*/

.go-top-btn {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background: var(--main-color);
  color: var(--white);
  font-size: 20px;
  padding: 10px;
  border: 4px solid var(--white);
  border-radius: 50%;
  opacity: 0;
  visibility: hidden;
  transition: var(--transition-1);
  z-index: 2;
}

.go-top-btn.active {
  opacity: 1;
  visibility: visible;
}

.go-top-btn:is(:hover, :focus) { background: var(--salmon); }






  @media (min-width: 992px) {
    .nav-open-btn,
    .nav-close-btn,
    .navbar .logo,
    .nav-action-text,
    .overlay { display: none; }
  
    .navbar,
    .navbar-list,
    .nav-action-list { all: unset; }
  
    .navbar-item:not(:last-child) { border: none; }
  
    .navbar-list,
    .nav-action-list { display: flex; }
  
    .nav-action-list { gap: 20px; }
  
    .navbar {
      display: flex;
      align-items: center;
      flex-grow: 1;
    }
  
    .navbar-list {
      margin-inline: auto;
      gap: 35px;
    }
  
    .navbar-link {
      font-family: var(--ff-roboto);
      font-weight: var(--fw-500);
    }
  
    .nav-action-list > li:first-child { display: block; }
  
    .nav-action-btn { position: relative; }
  
    .nav-action-badge ion-icon { --ionicon-stroke-width: 30px; }
  
    .nav-action-badge {
      position: absolute;
      top: 5px;
      right: -12px;
    }
}
  
/* Hero Section */
@media (max-width:900px) {
    .hero{
        background-image: url('https://raw.githubusercontent.com/MrFox-3X/ShopX/refs/heads/main/hero-small-image.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: calc(100% - 40%);
        min-height: 500px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }
    .hero-container{
        margin: 0 2%;
      }
      .hero-title{
        margin: 0 20% 0 0;
      }
      .hero-heading{
        font-size:1.6rem;
        color: var(--text-color);
      }
      .hero-main-title{
        font-size: 3.5rem;
        margin-top: 2rem;
      }
      .hero-sub-heading{
        font-size: 1.5rem;
        margin-right: 5rem;
      }
}
/* End Hero Section */

/* Icons Section */
@media (max-width:430px) {
    .icons-container{
        display: grid;
        grid-template-columns: 1fr;
        justify-items: center;
        gap: 0.2rem;
       }
}
@media (min-width:431px)and (max-width:640px) {
    .icons-container{
        display: grid;
        grid-template-columns: 1fr 1fr;
        justify-items: center;
        gap: 0.4rem;
       }
       .icons-items{
        width: 200px;
       }
       .icons-heading{
        font-size: 1.2rem;
      }
      .icon-sub-heading{
        font-size: 1rem;
      }
}
@media (min-width:641px)and (max-width:900px) {
    .icons-container{
        display: grid;
        grid-template-columns: 1fr 1fr;
        justify-items: center;
        gap: 0.4rem;
       }
       .icons-heading{
        font-size: 1.5rem;
      }
      .icon-sub-heading{
        font-size: 1rem;
      }
}
@media (min-width:901px)and (max-width:1250px) {
    .icons-container{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        justify-items: center;
        gap: 0.4rem;
       }
       .icons-items{
        display: flex;
        flex-direction: row;
        gap: 0.4rem;
        align-items: center;
        background-color: #dcdcdc;
        width: 200px;
        border-radius: 1rem;
        padding: 2rem;
       }
       .icons-heading{
        font-size: 1.4rem;
      }
      .icon-sub-heading{
        font-size: 1rem;
      }
}
/* End Icons Section */

/* Deal Seaction */
@media (max-width:768px) {
    .deal{
        margin: 2% 2%;
      }
}
@media (max-width:570px) {
    .deal-item{
        display: grid;
        grid-template-columns: 1fr;
        gap: 1rem;
      }
      .deal-items-list{
        display: flex;
        flex-direction: row;
        align-items: center;
        background-color: #d9d9d9;
        margin: 1rem;
        border-radius: 1rem;
        width: auto;
        height: 250px;
      }
      .deal-image{
        height: 140px;
      }
}
@media (min-width:400px)and (max-width:600px) {
      .deal-image{
        height: 180px;
      }
}
@media (min-width:571px)and (max-width:1000px) {
    .deal-item{
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0.2rem;
        justify-items: center;
      }
      .deal-items-list{
        display: flex;
        flex-direction: row;
        align-items: center;
        background-color: #d9d9d9;
        margin: 1rem;
        border-radius: 1rem;
        width: 240px;
        height: 250px;
      }
      .deal-image{
        height: 120px;
      }
}
@media (min-width:1001px)and (max-width:1500px) {
    .deal-item{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 0.2rem;
        justify-items: center;
      }
      .deal-items-list{
        display: flex;
        flex-direction: row;
        align-items: center;
        background-color: #d9d9d9;
        margin: 1rem;
        border-radius: 1rem;
        width: 270px;
        height: 250px;
      }
      .deal-image{
        height: 120px;
      }
}
/* Deal Section End */

/* Hot Deal Section */
@media (max-width:768px) {
    .hot-deal{
        margin: 2% 2%;
      }
}
@media (max-width:380px) {
    .hot-deal-items{
        display: grid;
        grid-template-columns:1fr;
        justify-items: center;
      }
    
}
@media (min-width:380px)and (max-width:600px) {
    .hot-deal-items{
        display: grid;
        grid-template-columns:1fr 1fr;
        justify-items: center;
      }
      .hot-deal-items-list{
        width: 185px;
      }
    
}
@media (min-width:601px)and (max-width:850px) {
    .hot-deal-items{
        display: grid;
        grid-template-columns:1fr 1fr 1fr;
        justify-items: center;
      }
      .hot-deal-items-list{
        width: 180px;
      }
     
}
@media (min-width:851px)and (max-width:1450px) {
    .hot-deal-items{
        display: grid;
        grid-template-columns:1fr 1fr 1fr 1fr;
        justify-items: center;
      }
      .hot-deal-items-list{
        width: 185px;
      }
}
/* End Hot-Deals Section */

/* Category Section */
@media (max-width:768px) {
  .categoty{
    margin: 2% 2%;
  }
  .category-list{
    display: grid;
    grid-template-columns: 1fr;
    gap:1rem;
    width:100%;
   }
   .category-list-item {
    width: 100%;
  }
  .heading{
    margin-left: 10rem;
  }
}
@media (min-width:769px)and (max-width:1050px) {
  .heading{
    margin-left: 12rem;
  }
}
/* End Category Section */

/* Product Section */
@media (max-width:768px) {
  .product{
    margin: 2% 2%;
  }
}
@media (max-width:600px) {
  .product-item{
    display: grid;
    grid-template-columns: 1fr;
    gap: 1rem;
    justify-items: center;
  }
  .product-item-list{
    width: 325px;
  }
}
@media (min-width:601px)and (max-width:950px) {
  .product-item{
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0.4rem;
    justify-items: center;
  }
  .product-item-list{
    width: 295px;
  }
}
@media (min-width:951px)and (max-width:1300px) {
  .product-item{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 0.4rem;
    justify-items: center;
  }
  .product-item-list{
    width: 290px;
  }
  .product-list-img{
    height: 80px;
  }
  .product-name{
    font-weight: 500;
    font-size: 1.4rem;
  }
  .product-price{
    font-size: 1.2rem;
    font-weight: 400;
    color: var(--main-color);
  }
}
/* End Product Section */

/* Footer Section */
@media (max-width:768px) {
  .footer-container{
    margin: 2% 2%;
  }
}
@media (max-width:500px) {
  .footer-menu{
    display: grid;
    grid-template-columns: 1fr;
  }
}
@media (min-width:501px)and (max-width:700px) {
  .footer-menu{
    display: grid;
    grid-template-columns: 1fr 1fr;
  }
}

@media (min-width:701px)and (max-width:1200px) {
  .footer-menu{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
  }
}
/* End Footer Section */


</style>
  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">

  <!-- 
    - preload banner
  -->
  <link rel="preload" href="https://raw.githubusercontent.com/MrFox-3X/ShopX/refs/heads/main/hero-banner.png" as="image">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
        <img src="https://raw.githubusercontent.com/MrFox-3X/ShopX/2999034cd8b96e4ab7217aa14be69b10dd30ea39/logo1.svg" width="160" height="70" alt="logo">
      </a>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="https://raw.githubusercontent.com/MrFox-3X/ShopX/2999034cd8b96e4ab7217aa14be69b10dd30ea39/logo1.svg" width="190" height="50" alt="logo">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="?" class="navbar-link">Home</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">About</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Products</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Shop</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Blog</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Contact</a>
          </li>

        </ul>

        <ul class="nav-action-list">

          <li>
            <button class="nav-action-btn">
              <ion-icon name="search-outline" aria-hidden="true"></ion-icon>

              <span class="nav-action-text">Search</span>
            </button>
          </li>

          <li>
            <a href="#" class="nav-action-btn">
              <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

              <span class="nav-action-text">Login / Register</span>
            </a>
          </li>

          <li>
            <button class="nav-action-btn">
              <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>

              <span class="nav-action-text">Wishlist</span>

              <data class="nav-action-badge" value="5" aria-hidden="true">5</data>
            </button>
          </li>

          <li>
            <button class="nav-action-btn">
              <ion-icon name="bag-outline" aria-hidden="true"></ion-icon>

              <data class="nav-action-text" value="318.00">Basket: <strong>$318.00</strong></data>

              <data class="nav-action-badge" value="4" aria-hidden="true">4</data>
            </button>
          </li>

        </ul>

      </nav>

    </div>
  </header>
 <!--Hero Section-->
  <section class="hero" style="background-image: url(https://raw.githubusercontent.com/MrFox-3X/ShopX/refs/heads/main/hero.jpg);">
    <div class="hero-container">
       <div class="hero-title">
        <span class="hero-heading">
          Big Offer 50% off
        </span>
        <h1 class="hero-main-title">
          New Collection
        </h1>
        <p class="hero-sub-heading">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
           Nulla, temporibus beatae nisi,
           modi id esse placeat sit sint quod nihil 
           neque, harum debitis. Sapiente 
           excepturi amet voluptatum tempora hic quam!
        </p>
         <a href="#" class="action-btn">Shop Now</a>
       </div>
    </div>
  </section>
   <!--End Hero Section-->

    <!--icons Section-->
    <section class="icons">
      <div class="icons-container">
         <div class="icons-items">
            <div class="icons-items-icon">
              <i class="fa-solid fa-truck icons-icon"></i>
            </div>
            <div class="icons-items-heading">
              <span class="icons-heading">Free Delievery</span>
              <span class="icon-sub-heading">Get free delivery for every order above 30$</span>
            </div>
         </div>

         <div class="icons-items">
          <div class="icons-items-icon">
            <i class="fa-solid fa-right-left icons-icon"></i>
          </div>
          <div class="icons-items-heading">
            <span class="icons-heading">7 Days Return</span>
            <span class="icon-sub-heading">Return within 7days of receiving your order</span>
          </div>
       </div>

       <div class="icons-items">
        <div class="icons-items-icon">
          <i class="fa-solid fa-money-bills icons-icon"></i>
        </div>
        <div class="icons-items-heading">
          <span class="icons-heading">Secure Payment</span>
          <span class="icon-sub-heading">100% Secure payment. Get easy support anytime</span>
        </div>
     </div>

     <div class="icons-items">
      <div class="icons-items-icon">
        <i class="fa-solid fa-headset icons-icon"></i>
      </div>
      <div class="icons-items-heading">
        <span class="icons-heading">24/7 Support</span>
        <span class="icon-sub-heading">Dedicates support anytime anywhere</span>
      </div>
   </div>
      </div>
    </section>
   <!--End Icons Section-->

   <!--Deals Section-->
   <section class="deal">
        <div class="deal-container">
          <div class="deal-heading">
            <i class="fa-solid fa-bolt deal-icon"></i>
            <span class="deal-main-title">Flash Deals</span>
          </div>
          <div class="deal-item">
             <div class="deal-items-list">
                <div class="deal-items-info">
                  <span class="deal-name">
                    Playstation 4 Game Pro
                  </span>
                  <span class="deal-price">
                     $500
                  </span>
                  <a href="#" class="deal-btn">Buy Now <i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <div class="deal-items-img">
                  <img src="https://cdn.shopify.com/s/files/1/0328/7066/2275/products/CarbonFibreWhite_084f710f-02d0-48e4-bb93-3f5519358b04_2048x2048.png?v=1612446619" class="deal-image" alt="">
                </div>
             </div>

             <div class="deal-items-list">
              <div class="deal-items-info">
                <span class="deal-name">
                  Long Puffer Winter Coat
                </span>
                <span class="deal-price">
                   $75
                </span>
                <a href="#" class="deal-btn">Buy Now <i class="fa-solid fa-chevron-right"></i></a>
              </div>
              <div class="deal-items-img">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/847/343/small/isolated-blue-front-sweater-free-png.png" class="deal-image" alt="">
              </div>
           </div>

           <div class="deal-items-list">
            <div class="deal-items-info">
              <span class="deal-name">
                Casual Shoes
              </span>
              <span class="deal-price">
                 $133
              </span>
              <a href="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>?PlaceOrder" class="deal-btn">Buy Now <i class="fa-solid fa-chevron-right"></i></a>
            </div>
            <div class="deal-items-img">
              <img src="https://freepngimg.com/thumb/categories/627.png" class="deal-image" alt="">
            </div>
         </div>
          </div>
          <div class="left-right-icon">
            <i class="fa-solid fa-arrow-left deal-left-icon"></i>
            <i class="fa-solid fa-arrow-right deal-right-icon"></i>
           </div>
        </div>
   </section>
   <!--End Deal Section-->

   <!--Hot Deal Section-->
    <section class="hot-deal">
       <div class="hot-deal-container">
          <div class="hot-deal-headings">
              <div class="hot-deal-main-title">
                <i class="fa-solid fa-fire hot-deal-icon"></i>
                <span class="hot-deal-main-title">Hot Deals</span>
              </div>
              <div class="hot-deal-button">
                <a href="#" class="hot-deal-btn">See All</a>
              </div>
          </div>

          <div class="hot-deal-items">
                      <div class="hot-deal-items-list">
                        <div class="hot-deal-tag">
                          <span class="deal-tag">
                            New
                          </span>
                        </div>
                        <div class="hot-deal-list-image">
                          <img src="https://www.freepnglogos.com/uploads/shoes-png/shoes-bright-safety-shoe-20.png" class="hot-deal-img" alt="">
                          <div class="hot-deal-icons">
                          <a href=""><i class="fa-solid fa-code-compare"></i></a> 
                          <a href=""><i class="fa-regular fa-heart"></i></a>
                            <a href=""><i class="fa-regular fa-eye"></i></a>
                          </div>
                        </div>
                       
                        <div class="hot-deal-list-info">
                              <span class="hot-deal-item-name">
                                <a href="">Casual Shoes</a>
                              </span>
                              <span class="hot-deal-item-type">
                                <a href="">Men/Women</a>
                              </span>
                              <div class="hot-deal-footer">
                              <div class="hot-deal-list-price">
                                <span class="hot-deal-active-price">
                                  $50
                                </span>
                                <span class="hot-deal-del-price">
                                <strike> $65</strike>
                                </span>
                              </div>
                              <div class="hot-deal-items-cart-btn">
                                <a href="#" class="hot-deal-cart">Add to cart</a>
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="hot-deal-items-list">
                        <div class="hot-deal-tag">
                          <span class="deal-tag-sale">
                            Sale
                          </span>
                          </div>
                        <div class="hot-deal-list-image">
                        <img src="https://www.pngitem.com/pimgs/b/47-479625_ring-png-solitaire-diamond-ring-gold-transparent-png.png" class="hot-deal-img" alt="">
                        <div class="hot-deal-icons">
                          <a href=""><i class="fa-solid fa-code-compare"></i></a> 
                          <a href=""><i class="fa-regular fa-heart"></i></a>
                          <a href=""><i class="fa-regular fa-eye"></i></a>
                          </div>
                      </div>
                       
                        <div class="hot-deal-list-info">
                            <span class="hot-deal-item-name">
                              <a href="">Finger Ring</a>
                            </span>
                            <span class="hot-deal-item-type">
                              <a href="">Women</a>
                            </span>
                            <div class="hot-deal-footer">
                            <div class="hot-deal-list-price">
                              <span class="hot-deal-active-price">
                                $50
                              </span>
                              <span class="hot-deal-del-price">
                                <strike> $65</strike>
                              </span>
                            </div>
                            <div class="hot-deal-items-cart-btn">
                              <a href="#" class="hot-deal-cart">Add to cart</a>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="hot-deal-items-list">
                      <div class="hot-deal-tag">
                        <span class="deal-tag">
                          New
                        </span>
                        </div>
                      <div class="hot-deal-list-image">
                      <img src="https://www.freeiconspng.com/thumbs/heels-png/heels-png-file-10.png" class="hot-deal-img" alt="">
                      <div class="hot-deal-icons">
                        <a href=""><i class="fa-solid fa-code-compare"></i></a> 
                        <a href=""><i class="fa-regular fa-heart"></i></a>
                        <a href=""><i class="fa-regular fa-eye"></i></a>
                        </div>
                    </div>
                     
                      <div class="hot-deal-list-info">
                          <span class="hot-deal-item-name">
                            <a href="">Heals</a>
                          </span>
                          <span class="hot-deal-item-type">
                            <a href="">Women</a>
                          </span>
                          <div class="hot-deal-footer">
                          <div class="hot-deal-list-price">
                            <span class="hot-deal-active-price">
                              $50
                            </span>
                            <span class="hot-deal-del-price">
                              <strike> $65</strike>
                            </span>
                          </div>
                          <div class="hot-deal-items-cart-btn">
                            <a href="#" class="hot-deal-cart">Add to cart</a>
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="hot-deal-items-list">
                    <div class="hot-deal-tag">
                      <span class="deal-tag-sale">
                        Sale
                      </span>
                      </div>
                    <div class="hot-deal-list-image">
                    <img src="https://5.imimg.com/data5/CI/EX/MY-16338676/men-leather-formal-shoes-500x500.jpg" class="hot-deal-img" alt="">
                    <div class="hot-deal-icons">
                      <a href=""><i class="fa-solid fa-code-compare"></i></a> 
                      <a href=""><i class="fa-regular fa-heart"></i></a>
                      <a href=""><i class="fa-regular fa-eye"></i></a>
                      </div>
                  </div>
                   
                    <div class="hot-deal-list-info">
                        <span class="hot-deal-item-name">
                          <a href="">Lather Shoes</a>
                        </span>
                        <span class="hot-deal-item-type">
                          <a href="">Mens</a>
                        </span>
                        <div class="hot-deal-footer">
                        <div class="hot-deal-list-price">
                          <span class="hot-deal-active-price">
                            $50
                          </span>
                          <span class="hot-deal-del-price">
                            <strike> $65</strike>
                          </span>
                        </div>
                        <div class="hot-deal-items-cart-btn">
                          <a href="#" class="hot-deal-cart">Add to cart</a>
                        </div>
                      </div>
                    </div>
                </div>

                    <div class="hot-deal-items-list">
                      <div class="hot-deal-tag">
                        <span class="deal-tag">
                          New
                        </span>
                        </div>
                      <div class="hot-deal-list-image">
                      <img src="https://freepngimg.com/save/31770-cricket-bat-image/1000x1000" class="hot-deal-img" alt="">
                      <div class="hot-deal-icons">
                        <a href=""><i class="fa-solid fa-code-compare"></i></a> 
                        <a href=""><i class="fa-regular fa-heart"></i></a>
                        <a href=""><i class="fa-regular fa-eye"></i></a>
                        </div>
                    </div>
                     
                      <div class="hot-deal-list-info">
                          <span class="hot-deal-item-name">
                            <a href="">Cricket Bat</a>
                          </span>
                          <span class="hot-deal-item-type">
                            <a href="">Men/Women</a>
                          </span>
                          <div class="hot-deal-footer">
                          <div class="hot-deal-list-price">
                            <span class="hot-deal-active-price">
                              $50
                            </span>
                            <span class="hot-deal-del-price">
                              <strike> $65</strike>
                            </span>
                          </div>
                          <div class="hot-deal-items-cart-btn">
                            <a href="#" class="hot-deal-cart">Add to cart</a>
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="hot-deal-items-list">
                    <div class="hot-deal-tag">
                      <span class="deal-tag">
                        New
                      </span>
                      </div>
                    <div class="hot-deal-list-image">
                    <img src="https://admin.pngadgil1832.com/UploadedFiles/ProductImages/OTH3068178PNG_01.png" class="hot-deal-img" alt="">
                    <div class="hot-deal-icons">
                      <a href=""><i class="fa-solid fa-code-compare"></i></a> 
                      <a href=""><i class="fa-regular fa-heart"></i></a>
                      <a href=""><i class="fa-regular fa-eye"></i></a>
                      </div>
                  </div>
                  
                    <div class="hot-deal-list-info">
                        <span class="hot-deal-item-name">
                          <a href="">Women Watch</a>
                        </span>
                        <span class="hot-deal-item-type">
                          <a href="">Women</a>
                        </span>
                        <div class="hot-deal-footer">
                        <div class="hot-deal-list-price">
                          <span class="hot-deal-active-price">
                            $50
                          </span>
                          <span class="hot-deal-del-price">
                            <strike> $65</strike>
                          </span>
                        </div>
                        <div class="hot-deal-items-cart-btn">
                          <a href="#" class="hot-deal-cart">Add to cart</a>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="hot-deal-items-list">
                  <div class="hot-deal-tag">
                    <span class="deal-tag-sale">
                      Sale
                    </span>
                    </div>
                  <div class="hot-deal-list-image">
                  <img src="https://purepng.com/public/uploads/large/wrist-watch-ogx.png" class="hot-deal-img" alt="">
                  <div class="hot-deal-icons">
                    <a href=""><i class="fa-solid fa-code-compare"></i></a> 
                    <a href=""><i class="fa-regular fa-heart"></i></a>
                    <a href=""><i class="fa-regular fa-eye"></i></a>
                    </div>
                </div>
                 
                  <div class="hot-deal-list-info">
                      <span class="hot-deal-item-name">
                        <a href="">Wrist Watch</a>
                      </span>
                      <span class="hot-deal-item-type">
                        <a href="">Mens</a>
                      </span>
                      <div class="hot-deal-footer">
                      <div class="hot-deal-list-price">
                        <span class="hot-deal-active-price">
                          $50
                        </span>
                        <span class="hot-deal-del-price">
                          <strike> $65</strike>
                        </span>
                      </div>
                      <div class="hot-deal-items-cart-btn">
                        <a href="#" class="hot-deal-cart">Add to cart</a>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="hot-deal-items-list">
                <div class="hot-deal-tag">
                  <span class="deal-tag-sale">
                    Sale
                  </span>
                  </div>
                <div class="hot-deal-list-image">
                <img src="https://freepngimg.com/thumb/categories/1543.png" class="hot-deal-img" alt="">
                <div class="hot-deal-icons">
                  <a href=""><i class="fa-solid fa-code-compare"></i></a> 
                  <a href=""><i class="fa-regular fa-heart"></i></a>
                  <a href=""><i class="fa-regular fa-eye"></i></a>
                  </div>
              </div>
                
                <div class="hot-deal-list-info">
                    <span class="hot-deal-item-name">
                      <a href="">Boys T-Shirt</a>
                    </span>
                    <span class="hot-deal-item-type">
                      <a href="">Mens</a>
                    </span>
                    <div class="hot-deal-footer">
                    <div class="hot-deal-list-price">
                      <span class="hot-deal-active-price">
                        $50
                      </span>
                      <span class="hot-deal-del-price">
                        <strike> $65</strike>
                      </span>
                    </div>
                    <div class="hot-deal-items-cart-btn">
                      <a href="#" class="hot-deal-cart">Add to cart</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="hot-deal-items-list">
                <div class="hot-deal-tag">
                  <span class="deal-tag-sale">
                    Sale
                  </span>
                  </div>
                <div class="hot-deal-list-image">
                <img src="https://freepngimg.com/thumb/categories/1543.png" class="hot-deal-img" alt="">
                <div class="hot-deal-icons">
                  <a href=""><i class="fa-solid fa-code-compare"></i></a> 
                  <a href=""><i class="fa-regular fa-heart"></i></a>
                  <a href=""><i class="fa-regular fa-eye"></i></a>
                  </div>
              </div>
                
                <div class="hot-deal-list-info">
                    <span class="hot-deal-item-name">
                      <a href="">Boys T-Shirt</a>
                    </span>
                    <span class="hot-deal-item-type">
                      <a href="">Mens</a>
                    </span>
                    <div class="hot-deal-footer">
                    <div class="hot-deal-list-price">
                      <span class="hot-deal-active-price">
                        $50
                      </span>
                      <span class="hot-deal-del-price">
                        <strike> $65</strike>
                      </span>
                    </div>
                    <div class="hot-deal-items-cart-btn">
                      <a href="#" class="hot-deal-cart">Add to cart</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="hot-deal-items-list">
                <div class="hot-deal-tag">
                  <span class="deal-tag">
                    New
                  </span>
                  </div>
                <div class="hot-deal-list-image">
                <img src="https://www.pngall.com/wp-content/uploads/2016/06/Adidas-Shoes-Free-Download-PNG.png" class="hot-deal-img" alt="">
                <div class="hot-deal-icons">
                  <a href=""><i class="fa-solid fa-code-compare"></i></a> 
                  <a href=""><i class="fa-regular fa-heart"></i></a>
                  <a href=""><i class="fa-regular fa-eye"></i></a>
                  </div>
              </div>
               
                <div class="hot-deal-list-info">
                    <span class="hot-deal-item-name">
                      <a href="">Adidas Shoes</a>
                    </span>
                    <span class="hot-deal-item-type">
                      <a href="">Men/Women</a>
                    </span>
                    <div class="hot-deal-footer">
                    <div class="hot-deal-list-price">
                      <span class="hot-deal-active-price">
                        $50
                      </span>
                      <span class="hot-deal-del-price">
                        <strike> $65</strike>
                      </span>
                    </div>
                    <div class="hot-deal-items-cart-btn">
                      <a href="#" class="hot-deal-cart">Add to cart</a>
                    </div>
                  </div>
                </div>
            </div>

            <div class="hot-deal-items-list">
              <div class="hot-deal-tag">
                <span class="deal-tag-sale">
                  Sale
                </span>
                </div>
              <div class="hot-deal-list-image">
              <img src="https://freepngimg.com/thumb/categories/1543.png" class="hot-deal-img" alt="">
              <div class="hot-deal-icons">
                <a href=""><i class="fa-solid fa-code-compare"></i></a> 
                <a href=""><i class="fa-regular fa-heart"></i></a>
                <a href=""><i class="fa-regular fa-eye"></i></a>
                </div>
            </div>
              
              <div class="hot-deal-list-info">
                  <span class="hot-deal-item-name">
                    <a href="">Boys T-Shirt</a>
                  </span>
                  <span class="hot-deal-item-type">
                    <a href="">Mens</a>
                  </span>
                  <div class="hot-deal-footer">
                  <div class="hot-deal-list-price">
                    <span class="hot-deal-active-price">
                      $50
                    </span>
                    <span class="hot-deal-del-price">
                      <strike> $65</strike>
                    </span>
                  </div>
                  <div class="hot-deal-items-cart-btn">
                    <a href="#" class="hot-deal-cart">Add to cart</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="hot-deal-items-list">
              <div class="hot-deal-tag">
                <span class="deal-tag-sale">
                  Sale
                </span>
                </div>
          <div class="hot-deal-list-image">
          <img src="https://i.pinimg.com/originals/42/66/59/42665914a91827984d705f2129f519ef.png" class="hot-deal-img" alt="">
          <div class="hot-deal-icons">
            <a href=""><i class="fa-solid fa-code-compare"></i></a> 
            <a href=""><i class="fa-regular fa-heart"></i></a>
            <a href=""><i class="fa-regular fa-eye"></i></a>
            </div>
        </div>
         
          <div class="hot-deal-list-info">
              <span class="hot-deal-item-name">
                <a href="">Red Prom Dress</a>
              </span>
              <span class="hot-deal-item-type">
                <a href="">Women</a>
              </span>
              <div class="hot-deal-footer">
              <div class="hot-deal-list-price">
                <span class="hot-deal-active-price">
                  $50
                </span>
                <span class="hot-deal-del-price">
                  <strike> $65</strike>
                </span>
              </div>
              <div class="hot-deal-items-cart-btn">
                <a href="#" class="hot-deal-cart">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="load-more">
      <a href="#" class="hot-deal-more-btn">Load More <i class="fa-solid fa-rotate"></i></a>
    </div>
       </div>
    </section>
    <!--End Hot Deals Section-->

    <!--Product Section-->
    <section class="product">
      <div class="product-container">
          <div class="product-heading">
              <div class="product-heading-icon">
                <i class="fa-solid fa-shirt all-product-icon"></i>
                <span class="product-title">All Products</span>
              </div>
              <div class="product-heading-btn">
                <a href="#" class="all-product-btn">See All</a>
              </div>
          </div>
          <div class="product-item">
             <!--1st Coloum-->
            <div class="product-box">
              <span class="product-list-title">Trending</span>
             <div class="product-item-list">
                  <div class="product-img">
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/008/847/343/small/isolated-blue-front-sweater-free-png.png" class="product-list-img" alt="">
                  </div>
                  <div class="product-info">
                    <span class="product-name">
                       Causual Shoes
                    </span>
                     <span class="product-price">
                       Price: $50
                     </span>
                     <div class="product-foot">
                     <abbr title="Add to Cart"><a href="#" class="product-cart"><i class="fa-solid fa-cart-shopping"></i></a></abbr>
                     <abbr title="Add to Wishlist"><a href="#" class="product-cart"><i class="fa-regular fa-heart"></i></a></abbr>
                    </div>
                 </div>
              </div>

             <div class="product-item-list">
              <div class="product-img">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/847/343/small/isolated-blue-front-sweater-free-png.png" class="product-list-img" alt="">
              </div>
              <div class="product-info">
                <span class="product-name">
                   Causual Shoes
                </span>
                 <span class="product-price">
                   Price: $50
                 </span>
                 <div class="product-foot">
                 <abbr title="Add to Cart"><a href="#" class="product-cart"><i class="fa-solid fa-cart-shopping"></i></a></abbr>
                 <abbr title="Add to Wishlist"><a href="#" class="product-cart"><i class="fa-regular fa-heart"></i></a></abbr>
                </div>
                </div>
               </div>

            <div class="product-item-list">
              <div class="product-img">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/847/343/small/isolated-blue-front-sweater-free-png.png" class="product-list-img" alt="">
              </div>
              <div class="product-info">
                <span class="product-name">
                  Causual Shoes
                </span>
                <span class="product-price">
                  Price: $50
                </span>
                <div class="product-foot">
                <abbr title="Add to Cart"><a href="#" class="product-cart"><i class="fa-solid fa-cart-shopping"></i></a></abbr>
                <abbr title="Add to Wishlist"><a href="#" class="product-cart"><i class="fa-regular fa-heart"></i></a></abbr>
                </div>
                </div>
            </div>
            </div>
             <!--End 1st Coloum-->

             <!--2nd Coloum-->
            <div class="product-box">
              <span class="product-list-title">Top Selling</span>
             <div class="product-item-list">
                  <div class="product-img">
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/008/847/343/small/isolated-blue-front-sweater-free-png.png" class="product-list-img" alt="">
                  </div>
                  <div class="product-info">
                    <span class="product-name">
                       Causual Shoes
                    </span>
                     <span class="product-price">
                       Price: $50
                     </span>
                     <div class="product-foot">
                     <abbr title="Add to Cart"><a href="#" class="product-cart"><i class="fa-solid fa-cart-shopping"></i></a></abbr>
                     <abbr title="Add to Wishlist"><a href="#" class="product-cart"><i class="fa-regular fa-heart"></i></a></abbr>
                    </div>
                 </div>
              </div>

             <div class="product-item-list">
              <div class="product-img">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/847/343/small/isolated-blue-front-sweater-free-png.png" class="product-list-img" alt="">
              </div>
              <div class="product-info">
                <span class="product-name">
                   Causual Shoes
                </span>
                 <span class="product-price">
                   Price: $50
                 </span>
                 <div class="product-foot">
                 <abbr title="Add to Cart"><a href="#" class="product-cart"><i class="fa-solid fa-cart-shopping"></i></a></abbr>
                 <abbr title="Add to Wishlist"><a href="#" class="product-cart"><i class="fa-regular fa-heart"></i></a></abbr>
                </div>
                </div>
               </div>

            <div class="product-item-list">
              <div class="product-img">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/847/343/small/isolated-blue-front-sweater-free-png.png" class="product-list-img" alt="">
              </div>
              <div class="product-info">
                <span class="product-name">
                  Causual Shoes
                </span>
                <span class="product-price">
                  Price: $50
                </span>
                <div class="product-foot">
                <abbr title="Add to Cart"><a href="#" class="product-cart"><i class="fa-solid fa-cart-shopping"></i></a></abbr>
                <abbr title="Add to Wishlist"><a href="#" class="product-cart"><i class="fa-regular fa-heart"></i></a></abbr>
                </div>
                </div>
            </div>
            </div>
             <!--End 2nd Coloum-->

            <!--3rd Coloum-->
            <div class="product-box">
              <span class="product-list-title">Sale</span>
             <div class="product-item-list">
                  <div class="product-img">
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/008/847/343/small/isolated-blue-front-sweater-free-png.png" class="product-list-img" alt="">
                  </div>
                  <div class="product-info">
                    <span class="product-name">
                       Causual Shoes
                    </span>
                     <span class="product-price">
                       Price: $50
                     </span>
                     <div class="product-foot">
                     <abbr title="Add to Cart"><a href="#" class="product-cart"><i class="fa-solid fa-cart-shopping"></i></a></abbr>
                     <abbr title="Add to Wishlist"><a href="#" class="product-cart"><i class="fa-regular fa-heart"></i></a></abbr>
                    </div>
                 </div>
              </div>

             <div class="product-item-list">
              <div class="product-img">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/847/343/small/isolated-blue-front-sweater-free-png.png" class="product-list-img" alt="">
              </div>
              <div class="product-info">
                <span class="product-name">
                   Causual Shoes
                </span>
                 <span class="product-price">
                   Price: $50
                 </span>
                 <div class="product-foot">
                 <abbr title="Add to Cart"><a href="#" class="product-cart"><i class="fa-solid fa-cart-shopping"></i></a></abbr>
                 <abbr title="Add to Wishlist"><a href="#" class="product-cart"><i class="fa-regular fa-heart"></i></a></abbr>
                </div>
                </div>
               </div>

            <div class="product-item-list">
              <div class="product-img">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/847/343/small/isolated-blue-front-sweater-free-png.png" class="product-list-img" alt="">
              </div>
              <div class="product-info">
                <span class="product-name">
                  Causual Shoes
                </span>
                <span class="product-price">
                  Price: $50
                </span>
                <div class="product-foot">
                <abbr title="Add to Cart"><a href="#" class="product-cart"><i class="fa-solid fa-cart-shopping"></i></a></abbr>
                <abbr title="Add to Wishlist"><a href="#" class="product-cart"><i class="fa-regular fa-heart"></i></a></abbr>
                </div>
                </div>
            </div>
            </div>
             <!-- End 3rd Coloum-->
          </div>
          <div class="left-right-icon">
            <i class="fa-solid fa-arrow-left deal-left-icon"></i>
            <i class="fa-solid fa-arrow-right deal-right-icon"></i>
           </div>
      </div>
    </section>
   <!--End Product Section-->

   <!--Footer Section-->
   <section class="footer">
      <div class="footer-container">
         <div class="footer-menu">
             <div class="footer-menu-list">
              <div class="footer-heading">
              <i class="fa-solid fa-angles-right"></i> 
              <span class="footer-title">Company</span>
            </div>
                 <div class="footer-menu-items">
                      <p class="footer-sub-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Libero illum ducimus magnam deleniti earum 
                        dolorum minus commodi facere quasi, officia modi 
                        quis minima quisquam optio ipsam molestiae
                         blanditiis consequatur et.</p>
                 </div>
             </div>

             <div class="footer-menu-list">
              <div class="footer-heading">
                <i class="fa-solid fa-angles-right"></i> 
                <span class="footer-title">Links</span>
              </div>
               <div class="footer-menu-items">
                <a href="#">Home</a>
              <a href="#">About</a>
              <a href="#">Category</a>
              <a href="#">Product</a>
              <a href="#">Shop</a>
                    
               </div>
           </div>

           <div class="footer-menu-list">
            <div class="footer-heading">
              <i class="fa-solid fa-angles-right"></i> 
              <span class="footer-title">Resources</span>
            </div>
             <div class="footer-menu-items">
              <a href="#">Term & Condition</a>
              <a href="#">Return Policy</a>
              <a href="#">Safety</a>
              <a href="#">Privacy</a>
              <a href="#">COD</a>
             </div>
         </div>

        <div class="footer-menu-list">
          <div class="footer-heading">
            <i class="fa-solid fa-angles-right"></i> 
            <span class="footer-title">Support</span>
          </div>
           <div class="footer-menu-items">
            <div class="footer-support">
              <i class="fa-solid fa-envelope"></i>
              <span class="support-title">support@<?php echo $_SERVER['HTTP_HOST']; ?></span>
            </div>
            <div class="footer-support">
              <i class="fa-solid fa-globe"></i>
              <span class="support-title">www.<?php echo $_SERVER['HTTP_HOST']; ?></span>
            </div>
            <div class="footer-support">
              <div class="footer-icon">
              <a href="#"><i class="fa-brands fa-facebook"></i></a>
              <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
            </div>
           </div>
       </div>
         </div>
      </div>
   </section>
   <!--End Footer Section-->
    
    
  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top-btn" data-go-top>
    <ion-icon name="arrow-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="https://raw.githubusercontent.com/MrFox-3X/ShopX/refs/heads/main/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script src="https://kit.fontawesome.com/9498bdc1c3.js" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
