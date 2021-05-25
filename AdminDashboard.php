<html>
  <style>
    @import url("https://fonts.googleapis.com/css?family=Lato:400,700&display=swap");

:root {
  --page-header-bgColor: #87251a;
  --page-header-bgColor-hover: #42170d;
  --page-header-txtColor: #baafad;
  --page-header-headingColor: #a47878;
  --page-header-width: 220px;
  --page-content-bgColor: #f6f0f0;
  --page-content-txtColor: #171616;
  --page-content-blockColor: #fff;
  --white: #fff;
  --black: #333;
  --blue: #eb0800;
  --red: #a14e37;
  --border-radius: 4px;
  --box-shadow: 0 0 10px -2px rgba(0, 0, 0, 0.075);
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

ul {
  list-style: none;
}

a,
button {
  color: inherit;
}

a {
  text-decoration: none;
}

button {
  background: none;
  cursor: pointer;
}

input {
  -webkit-appearance: none;
}

button,
input {
  border: none;
}

svg {
  display: block;
}

body {
  font: 16px/1.5 "Lato", sans-serif;
}


/* HEADER STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.page-header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  overflow: auto;
  padding-top: 20px;
  width: var(--page-header-width);
  color: var(--page-header-txtColor);
  background: var(--page-header-bgColor);
}

/*In case you prefer an absolutely positioned header that covers the full page height, add these styles*/
/*body {
  position: relative;
}

.page-header {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
}*/

/*remove these styles*/
/*.page-header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  overflow: auto;
}*/

.page-header nav {
  display: flex;
  flex-direction: column;
  min-height: 100%;
}

.page-header .logo {
  display: block;
  max-width: 120px;
  margin: 0 15px;
}

.page-header .toggle-mob-menu {
  display: none;
  margin-left: 5px;
  padding: 4px;
  background: var(--page-content-blockColor);
  border-radius: var(--border-radius);
}

.page-header .toggle-mob-menu svg {
  fill: var(--black);
  transition: transform 0.2s;
}

.page-header .admin-menu {
  display: flex;
  flex-direction: column;
  flex-grow: 1;
  margin-top: 35px;
}

.page-header .admin-menu li:nth-last-child(2) {
  margin-bottom: 35px;
}

.page-header .admin-menu li:last-child {
  margin-top: auto;
  margin-bottom: 20px;
}

.page-header .admin-menu li > * {
  width: 100%;
  padding: 12px 15px;
}

.page-header .admin-menu .menu-heading h3 {
  text-transform: uppercase;
  letter-spacing: 0.15em;
  font-size: 12px;
  margin-top: 12px;
  color: var(--page-header-headingColor);
}

.page-header .admin-menu svg {
  width: 20px;
  height: 20px;
  fill: var(--page-header-txtColor);
  margin-right: 10px;
  transition: fill 0.2s;
}

.page-header .admin-menu a,
.page-header .admin-menu button {
  display: flex;
  align-items: center;
  font-size: 0.9rem;
  transition: background 0.2s, color 0.2s;
}

.page-header .admin-menu a:hover,
.page-header .admin-menu a:focus,
.page-header .admin-menu button:hover,
.page-header .admin-menu button:focus {
  background: var(--page-header-bgColor-hover);
  color: var(--blue);
  outline: none;
}

.page-header .admin-menu a:hover svg,
.page-header .admin-menu a:focus svg,
.page-header .admin-menu button:hover svg,
.page-header .admin-menu button:focus svg {
  fill: var(--blue);
}


/* PAGE CONTENT STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.page-content {
  position: relative;
  left: var(--page-header-width);
  width: calc(100% - var(--page-header-width));
  min-height: 100vh;
  padding: 30px;
  color: var(--page-content-txtColor);
  background: var(--page-content-bgColor);
}

.search-and-user {
  display: grid;
  grid-template-columns: 1fr auto;
  grid-column-gap: 50px;
  align-items: center;
  background: var(--page-content-bgColor);
  margin-bottom: 30px;
}

.search-and-user form {
  position: relative;
}

.search-and-user input[type="search"] {
  width: 100%;
  height: 50px;
  font-size: 1.5rem;
  padding-left: 15px;
  background: var(--page-content-blockColor);
  color: var(--white);
  border-radius: var(--border-radius);
  box-shadow: var(--box-shadow);
}

.search-and-user ::placeholder {
  color: var(--page-content-txtColor);
}

.search-and-user form svg {
  width: 26px;
  height: 26px;
  fill: var(--page-content-txtColor);
}

.search-and-user form button {
  position: absolute;
  top: 50%;
  right: 15px;
  transform: translateY(-50%);
}

.search-and-user .admin-profile {
  display: flex;
  align-items: center;
}

.search-and-user .admin-profile .greeting {
  margin: 0 10px 0 20px;
}

.search-and-user .admin-profile svg {
  width: 30px;
  height: 30px;
}

.search-and-user .admin-profile .notifications {
  position: relative;
}

.search-and-user .admin-profile .badge {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: -10px;
  right: -3px;
  width: 18px;
  height: 18px;
  border-radius: 50%;
  font-size: 10px;
  color: var(--white);
  background: var(--red);
}

.page-content .grid {
  display: grid;
  grid-template-columns: repeat(1, 1fr);
  grid-gap: 30px;
}

.page-content .grid > article {
  display: flex;
  height: 600px;
  background: var(--page-content-blockColor);
  border-radius: var(--border-radius);
  box-shadow: var(--box-shadow);
}

.page-content .grid > article:first-child,
.page-content .grid > article:last-child {
  grid-column: 1 / -1;
}


/* MQ RULES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
@media screen and (max-width: 767px) {
  .page-header,
  .page-content {
    position: static;
    width: 100%;
  }
   
  .page-header {
    padding: 10px;
  }

  .page-header nav {
    flex-direction: row;
  }

  .page-header .logo {
    margin: 0;
    height: 35px;
  }

  .page-header .toggle-mob-menu {
    display: block;
  }

  .page-header .admin-menu {
    position: absolute;
    left: 98px;
    top: 57px;
    margin-top: 0;
    z-index: 2;
    border-radius: var(--border-radius);
    background: var(--page-header-bgColor);
    visibility: hidden;
    opacity: 0;
    transform: scale(0.95);
    transition: all 0.2s;
  }

  .page-header .admin-menu li:nth-last-child(2) {
    margin-bottom: 12px;
  }
  
  .page-header .admin-menu li:last-child,
  .search-and-user .admin-profile .greeting {
    display: none;
  }
  
  .page-content {
    min-height: 0;
    padding: 10px;
  }

  .page-content .grid {
    grid-gap: 10px;
  }

  .search-and-user {
    position: absolute;
    left: 131px;
    top: 10px;
    padding: 0;
    grid-column-gap: 5px;
    width: calc(100% - 141px);
    border-radius: var(--border-radius);
    background: transparent;
  }

  .search-and-user input[type="search"] {
    font-size: 1rem;
    height: 35px;
  }

  .search-and-user form svg {
    width: 18px;
    height: 18px;
  }

  .search-and-user .admin-profile svg {
    fill: var(--white);
  }
}

@media screen and (max-width: 400px) {
  .page-content .grid > article {
    grid-column: 1 / -1;
  }
}


/* BODY CLASSES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.mob-menu-opened .toggle-mob-menu svg {
  transform: rotate(180deg);
}

.mob-menu-opened .page-header .admin-menu {
  transform: scale(1);
  visibility: visible;
  opacity: 1;
}

@media screen and (min-width: 768px) {
  .collapsed .page-header {
    width: 40px;
  }

  .collapsed .page-header .admin-menu li > * {
    padding: 10px;
  }

  .collapsed .page-header .logo,
  .collapsed .page-header .admin-menu span,
  .collapsed .page-header .admin-menu .menu-heading {
    display: none;
  }

  .collapsed .page-header .admin-menu svg {
    margin-right: 0;
  }

  .collapsed .page-header .collapse-btn svg {
    transform: rotate(180deg);
  }

  .collapsed .page-content {
    left: 40px;
    width: calc(100% - 40px);
  }
}


/* FOOTER
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.page-footer {
  font-size: 0.85rem;
  text-align: right;
  margin-top: 10px;
}

.page-footer span {
  color: var(--red);
}





.form-style-5{
	max-width: 80%;
	padding: 10px 20px;
	background: #f8f4f4;
	margin: 10px auto;
	padding: 20px;
	background: #f8f4f4;
	border-radius: 8px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
	border: none;
}
.form-style-5 legend {
	font-size: 1.4em;
	margin-bottom: 10px;
}
.form-style-5 label {
	display: block;
	margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type = "number"],
.form-style-5 textarea,
.form-style-5 select {
	font-family: Georgia, "Times New Roman", Times, serif;
	background: rgba(255,255,255,.1);
	border: none;
	border-radius: 4px;
	font-size: 15px;
	margin: 0;
	outline: 0;
	padding: 5px;
	width: 100%;
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	background-color: #efe8e8;
	color:#a08a8a;
	-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	margin-bottom: 10px;
}

.form-style-5 select:focus{
	background: #ddd2d2;
}
.form-style-5 select{
	-webkit-appearance: menulist-button;
	height:35px;
}
.form-style-5 .number {
	background: #bc1a1a;
	color: #fff;
	height: 30px;
	width: 30px;
	display: inline-block;
	font-size: 0.8em;
	margin-right: 4px;
	line-height: 30px;
	text-align: center;
	text-shadow: 0 1px 0 rgba(255,255,255,0.2);
	border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
	position: relative;
	display: block;
	padding: 19px 39px 18px 39px;
	color: #FFF;
	margin: 0 auto;
	background: #bc1a1a;
	font-size: 18px;
	text-align: center;
	font-style: normal;
	width: 100%;
	border: 1px solid #800f0f;
	border-width: 1px 1px 3px;
	margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
	background: #911010;
}


#users {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

#users td, #customers th {
  border: 1px solid #efe8e8;
  padding: 8px;
}

#users tr:nth-child(even){background-color: #f8f4f4;}

#users tr:hover {background-color: #ddd2d2;}

#users th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #bc1a1a;
  color: white;
}
    </style>

<script>
const body = document.body;
const menuLinks = document.querySelectorAll(".admin-menu a");
const collapseBtn = document.querySelector(".admin-menu .collapse-btn");
const toggleMobileMenu = document.querySelector(".toggle-mob-menu");
const collapsedClass = "collapsed";

collapseBtn.addEventListener("click", function() {
  this.getAttribute("aria-expanded") == "true"
    ? this.setAttribute("aria-expanded", "false")
    : this.setAttribute("aria-expanded", "true");
  this.getAttribute("aria-label") == "collapse menu"
    ? this.setAttribute("aria-label", "expand menu")
    : this.setAttribute("aria-label", "collapse menu");
  body.classList.toggle(collapsedClass);
});

toggleMobileMenu.addEventListener("click", function() {
  this.getAttribute("aria-expanded") == "true"
    ? this.setAttribute("aria-expanded", "false")
    : this.setAttribute("aria-expanded", "true");
  this.getAttribute("aria-label") == "open menu"
    ? this.setAttribute("aria-label", "close menu")
    : this.setAttribute("aria-label", "open menu");
  body.classList.toggle("mob-menu-opened");
});

for (const link of menuLinks) {
  link.addEventListener("mouseenter", function() {
    body.classList.contains(collapsedClass) &&
    window.matchMedia("(min-width: 768px)").matches
      ? this.setAttribute("title", this.textContent)
      : this.removeAttribute("title");
  });
}const body = document.body;
const menuLinks = document.querySelectorAll(".admin-menu a");
const collapseBtn = document.querySelector(".admin-menu .collapse-btn");
const toggleMobileMenu = document.querySelector(".toggle-mob-menu");
const collapsedClass = "collapsed";

collapseBtn.addEventListener("click", function() {
  this.getAttribute("aria-expanded") == "true"
    ? this.setAttribute("aria-expanded", "false")
    : this.setAttribute("aria-expanded", "true");
  this.getAttribute("aria-label") == "collapse menu"
    ? this.setAttribute("aria-label", "expand menu")
    : this.setAttribute("aria-label", "collapse menu");
  body.classList.toggle(collapsedClass);
});

toggleMobileMenu.addEventListener("click", function() {
  this.getAttribute("aria-expanded") == "true"
    ? this.setAttribute("aria-expanded", "false")
    : this.setAttribute("aria-expanded", "true");
  this.getAttribute("aria-label") == "open menu"
    ? this.setAttribute("aria-label", "close menu")
    : this.setAttribute("aria-label", "open menu");
  body.classList.toggle("mob-menu-opened");
});

for (const link of menuLinks) {
  link.addEventListener("mouseenter", function() {
    body.classList.contains(collapsedClass) &&
    window.matchMedia("(min-width: 768px)").matches
      ? this.setAttribute("title", this.textContent)
      : this.removeAttribute("title");
  });
}
  </script>

<svg style="display:none;">
  <symbol id="down" viewBox="0 0 16 16">
    <polygon points="3.81 4.38 8 8.57 12.19 4.38 13.71 5.91 8 11.62 2.29 5.91 3.81 4.38" />
  </symbol>
  <symbol id="users" viewBox="0 0 16 16">
    <path d="M8,0a8,8,0,1,0,8,8A8,8,0,0,0,8,0ZM8,15a7,7,0,0,1-5.19-2.32,2.71,2.71,0,0,1,1.7-1,13.11,13.11,0,0,0,1.29-.28,2.32,2.32,0,0,0,.94-.34,1.17,1.17,0,0,0-.27-.7h0A3.61,3.61,0,0,1,5.15,7.49,3.18,3.18,0,0,1,8,4.07a3.18,3.18,0,0,1,2.86,3.42,3.6,3.6,0,0,1-1.32,2.88h0a1.13,1.13,0,0,0-.27.69,2.68,2.68,0,0,0,.93.31,10.81,10.81,0,0,0,1.28.23,2.63,2.63,0,0,1,1.78,1A7,7,0,0,1,8,15Z" />
  </symbol>
  <symbol id="collection" viewBox="0 0 16 16">
    <rect width="7" height="7" />
    <rect y="9" width="7" height="7" />
    <rect x="9" width="7" height="7" />
    <rect x="9" y="9" width="7" height="7" />
  </symbol>
  <symbol id="charts" viewBox="0 0 16 16">
    <polygon points="0.64 7.38 -0.02 6.63 2.55 4.38 4.57 5.93 9.25 0.78 12.97 4.37 15.37 2.31 16.02 3.07 12.94 5.72 9.29 2.21 4.69 7.29 2.59 5.67 0.64 7.38" />
    <rect y="9" width="2" height="7" />
    <rect x="12" y="8" width="2" height="8" />
    <rect x="8" y="6" width="2" height="10" />
    <rect x="4" y="11" width="2" height="5" />
  </symbol>
  <symbol id="comments" viewBox="0 0 16 16">
      <path d="M0,16.13V2H15V13H5.24ZM1,3V14.37L5,12h9V3Z"/><rect x="3" y="5" width="9" height="1"/><rect x="3" y="7" width="7" height="1"/><rect x="3" y="9" width="5" height="1"/>
    </symbol>
  <symbol id="pages" viewBox="0 0 16 16">
    <rect x="4" width="12" height="12" transform="translate(20 12) rotate(-180)"/><polygon points="2 14 2 2 0 2 0 14 0 16 2 16 14 16 14 14 2 14"/>
    </symbol>
  <symbol id="appearance" viewBox="0 0 16 16">
    <path d="M3,0V7A2,2,0,0,0,5,9H6v5a2,2,0,0,0,4,0V9h1a2,2,0,0,0,2-2V0Zm9,7a1,1,0,0,1-1,1H9v6a1,1,0,0,1-2,0V8H5A1,1,0,0,1,4,7V6h8ZM4,5V1H6V4H7V1H9V4h1V1h2V5Z"/>
  </symbol>
  <symbol id="trends" viewBox="0 0 16 16">
    <polygon points="0.64 11.85 -0.02 11.1 2.55 8.85 4.57 10.4 9.25 5.25 12.97 8.84 15.37 6.79 16.02 7.54 12.94 10.2 9.29 6.68 4.69 11.76 2.59 10.14 0.64 11.85"/>
  </symbol>
  <symbol id="settings" viewBox="0 0 16 16">
    <rect x="9.78" y="5.34" width="1" height="7.97"/><polygon points="7.79 6.07 10.28 1.75 12.77 6.07 7.79 6.07"/><rect x="4.16" y="1.75" width="1" height="7.97"/><polygon points="7.15 8.99 4.66 13.31 2.16 8.99 7.15 8.99"/><rect x="1.28" width="1" height="4.97"/><polygon points="3.28 4.53 1.78 7.13 0.28 4.53 3.28 4.53"/><rect x="12.84" y="11.03" width="1" height="4.97"/><polygon points="11.85 11.47 13.34 8.88 14.84 11.47 11.85 11.47"/>
    </symbol>
  <symbol id="options" viewBox="0 0 16 16">
    <path d="M8,11a3,3,0,1,1,3-3A3,3,0,0,1,8,11ZM8,6a2,2,0,1,0,2,2A2,2,0,0,0,8,6Z"/><path d="M8.5,16h-1A1.5,1.5,0,0,1,6,14.5v-.85a5.91,5.91,0,0,1-.58-.24l-.6.6A1.54,1.54,0,0,1,2.7,14L2,13.3a1.5,1.5,0,0,1,0-2.12l.6-.6A5.91,5.91,0,0,1,2.35,10H1.5A1.5,1.5,0,0,1,0,8.5v-1A1.5,1.5,0,0,1,1.5,6h.85a5.91,5.91,0,0,1,.24-.58L2,4.82A1.5,1.5,0,0,1,2,2.7L2.7,2A1.54,1.54,0,0,1,4.82,2l.6.6A5.91,5.91,0,0,1,6,2.35V1.5A1.5,1.5,0,0,1,7.5,0h1A1.5,1.5,0,0,1,10,1.5v.85a5.91,5.91,0,0,1,.58.24l.6-.6A1.54,1.54,0,0,1,13.3,2L14,2.7a1.5,1.5,0,0,1,0,2.12l-.6.6a5.91,5.91,0,0,1,.24.58h.85A1.5,1.5,0,0,1,16,7.5v1A1.5,1.5,0,0,1,14.5,10h-.85a5.91,5.91,0,0,1-.24.58l.6.6a1.5,1.5,0,0,1,0,2.12L13.3,14a1.54,1.54,0,0,1-2.12,0l-.6-.6a5.91,5.91,0,0,1-.58.24v.85A1.5,1.5,0,0,1,8.5,16ZM5.23,12.18l.33.18a4.94,4.94,0,0,0,1.07.44l.36.1V14.5a.5.5,0,0,0,.5.5h1a.5.5,0,0,0,.5-.5V12.91l.36-.1a4.94,4.94,0,0,0,1.07-.44l.33-.18,1.12,1.12a.51.51,0,0,0,.71,0l.71-.71a.5.5,0,0,0,0-.71l-1.12-1.12.18-.33a4.94,4.94,0,0,0,.44-1.07l.1-.36H14.5a.5.5,0,0,0,.5-.5v-1a.5.5,0,0,0-.5-.5H12.91l-.1-.36a4.94,4.94,0,0,0-.44-1.07l-.18-.33L13.3,4.11a.5.5,0,0,0,0-.71L12.6,2.7a.51.51,0,0,0-.71,0L10.77,3.82l-.33-.18a4.94,4.94,0,0,0-1.07-.44L9,3.09V1.5A.5.5,0,0,0,8.5,1h-1a.5.5,0,0,0-.5.5V3.09l-.36.1a4.94,4.94,0,0,0-1.07.44l-.33.18L4.11,2.7a.51.51,0,0,0-.71,0L2.7,3.4a.5.5,0,0,0,0,.71L3.82,5.23l-.18.33a4.94,4.94,0,0,0-.44,1.07L3.09,7H1.5a.5.5,0,0,0-.5.5v1a.5.5,0,0,0,.5.5H3.09l.1.36a4.94,4.94,0,0,0,.44,1.07l.18.33L2.7,11.89a.5.5,0,0,0,0,.71l.71.71a.51.51,0,0,0,.71,0Z"/>
    </symbol>
  <symbol id="collapse" viewBox="0 0 16 16">
    <polygon points="11.62 3.81 7.43 8 11.62 12.19 10.09 13.71 4.38 8 10.09 2.29 11.62 3.81"/>
  </symbol>
  <symbol id="search" viewBox="0 0 16 16">
    <path d="M6.57,1A5.57,5.57,0,1,1,1,6.57,5.57,5.57,0,0,1,6.57,1m0-1a6.57,6.57,0,1,0,6.57,6.57A6.57,6.57,0,0,0,6.57,0Z"/><rect x="11.84" y="9.87" width="2" height="5.93" transform="translate(-5.32 12.84) rotate(-45)"/>
  </symbol>
</svg>
<header class="page-header">
  <nav>
    <a href="#0">
      <img class="logo" src="https://64.media.tumblr.com/8f01ce075fefe5cab201fabd72040db9/c6bbef7474f8c119-19/s1280x1920/e59bf2b43ff08b83bb7311e4c87ab1460fb2658b.png" alt="Health415 logo">
    </a>
    <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
      <svg width="20" height="20" aria-hidden="true">
        <use xlink:href="#down"></use>
      </svg>
    </button>
    <ul class="admin-menu">
      <li class="menu-heading">
        <h3>Admin</h3>
      <li>
        <a href="#0">
          <svg>
            <use xlink:href="#users"></use> <!--Links to regular users who have signed up for the website-->
          </svg>
          <span>Users</span>
        </a>
      </li>
  
      <li>
        <a href="document">
          <svg>
            <use xlink:href="#collection"></use>
          </svg>
          <span>Catalogue</span>
        </a>
      </li>

 
      <li class="menu-heading">
        <h3>Sign Out</h3>
      </li>
      <li>
         <a href = 'logout.php'>
          <span>Sign Out</sSignpan>
        </a>
      </li>
      <li>
        <a href="#0">
          <svg>
            <use xlink:href="#options"></use>
          </svg>
          <span>Reset Password</span>
        </a>
      </li>
      <li>
        <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
          <svg aria-hidden="true">
            <use xlink:href="#collapse"></use>
          </svg>
          <span>Collapse</span>
        </button>
      </li>
    </ul>
  </nav>
</header>
<section class="page-content">
  <section class="search-and-user">
    <form>
      <input type="search" placeholder="Search Pages...">
      <button type="submit" aria-label="submit form">
        <svg aria-hidden="true">
          <use xlink:href="#search"></use>
        </svg>
      </button>
    </form>
    <div class="admin-profile">
      <span class="greeting">Hello admin</span>
      <div class="notifications">
        <span class="badge">1</span>
        <svg>
          <use xlink:href="#users"></use> 
        </svg>
      </div>
    </div>
  </section><svg style="display:none;">
  <symbol id="down" viewBox="0 0 16 16">
    <polygon points="3.81 4.38 8 8.57 12.19 4.38 13.71 5.91 8 11.62 2.29 5.91 3.81 4.38" />
  </symbol>
  <symbol id="users" viewBox="0 0 16 16">
    <path d="M8,0a8,8,0,1,0,8,8A8,8,0,0,0,8,0ZM8,15a7,7,0,0,1-5.19-2.32,2.71,2.71,0,0,1,1.7-1,13.11,13.11,0,0,0,1.29-.28,2.32,2.32,0,0,0,.94-.34,1.17,1.17,0,0,0-.27-.7h0A3.61,3.61,0,0,1,5.15,7.49,3.18,3.18,0,0,1,8,4.07a3.18,3.18,0,0,1,2.86,3.42,3.6,3.6,0,0,1-1.32,2.88h0a1.13,1.13,0,0,0-.27.69,2.68,2.68,0,0,0,.93.31,10.81,10.81,0,0,0,1.28.23,2.63,2.63,0,0,1,1.78,1A7,7,0,0,1,8,15Z" />
  </symbol>
  <symbol id="collection" viewBox="0 0 16 16">
    <rect width="7" height="7" />
    <rect y="9" width="7" height="7" />
    <rect x="9" width="7" height="7" />
    <rect x="9" y="9" width="7" height="7" />
  </symbol>
  <symbol id="charts" viewBox="0 0 16 16">
    <polygon points="0.64 7.38 -0.02 6.63 2.55 4.38 4.57 5.93 9.25 0.78 12.97 4.37 15.37 2.31 16.02 3.07 12.94 5.72 9.29 2.21 4.69 7.29 2.59 5.67 0.64 7.38" />
    <rect y="9" width="2" height="7" />
    <rect x="12" y="8" width="2" height="8" />
    <rect x="8" y="6" width="2" height="10" />
    <rect x="4" y="11" width="2" height="5" />
  </symbol>
  <symbol id="comments" viewBox="0 0 16 16">
      <path d="M0,16.13V2H15V13H5.24ZM1,3V14.37L5,12h9V3Z"/><rect x="3" y="5" width="9" height="1"/><rect x="3" y="7" width="7" height="1"/><rect x="3" y="9" width="5" height="1"/>
    </symbol>
  <symbol id="pages" viewBox="0 0 16 16">
    <rect x="4" width="12" height="12" transform="translate(20 12) rotate(-180)"/><polygon points="2 14 2 2 0 2 0 14 0 16 2 16 14 16 14 14 2 14"/>
    </symbol>
  <symbol id="appearance" viewBox="0 0 16 16">
    <path d="M3,0V7A2,2,0,0,0,5,9H6v5a2,2,0,0,0,4,0V9h1a2,2,0,0,0,2-2V0Zm9,7a1,1,0,0,1-1,1H9v6a1,1,0,0,1-2,0V8H5A1,1,0,0,1,4,7V6h8ZM4,5V1H6V4H7V1H9V4h1V1h2V5Z"/>
  </symbol>
  <symbol id="trends" viewBox="0 0 16 16">
    <polygon points="0.64 11.85 -0.02 11.1 2.55 8.85 4.57 10.4 9.25 5.25 12.97 8.84 15.37 6.79 16.02 7.54 12.94 10.2 9.29 6.68 4.69 11.76 2.59 10.14 0.64 11.85"/>
  </symbol>
  <symbol id="settings" viewBox="0 0 16 16">
    <rect x="9.78" y="5.34" width="1" height="7.97"/><polygon points="7.79 6.07 10.28 1.75 12.77 6.07 7.79 6.07"/><rect x="4.16" y="1.75" width="1" height="7.97"/><polygon points="7.15 8.99 4.66 13.31 2.16 8.99 7.15 8.99"/><rect x="1.28" width="1" height="4.97"/><polygon points="3.28 4.53 1.78 7.13 0.28 4.53 3.28 4.53"/><rect x="12.84" y="11.03" width="1" height="4.97"/><polygon points="11.85 11.47 13.34 8.88 14.84 11.47 11.85 11.47"/>
    </symbol>
  <symbol id="options" viewBox="0 0 16 16">
    <path d="M8,11a3,3,0,1,1,3-3A3,3,0,0,1,8,11ZM8,6a2,2,0,1,0,2,2A2,2,0,0,0,8,6Z"/><path d="M8.5,16h-1A1.5,1.5,0,0,1,6,14.5v-.85a5.91,5.91,0,0,1-.58-.24l-.6.6A1.54,1.54,0,0,1,2.7,14L2,13.3a1.5,1.5,0,0,1,0-2.12l.6-.6A5.91,5.91,0,0,1,2.35,10H1.5A1.5,1.5,0,0,1,0,8.5v-1A1.5,1.5,0,0,1,1.5,6h.85a5.91,5.91,0,0,1,.24-.58L2,4.82A1.5,1.5,0,0,1,2,2.7L2.7,2A1.54,1.54,0,0,1,4.82,2l.6.6A5.91,5.91,0,0,1,6,2.35V1.5A1.5,1.5,0,0,1,7.5,0h1A1.5,1.5,0,0,1,10,1.5v.85a5.91,5.91,0,0,1,.58.24l.6-.6A1.54,1.54,0,0,1,13.3,2L14,2.7a1.5,1.5,0,0,1,0,2.12l-.6.6a5.91,5.91,0,0,1,.24.58h.85A1.5,1.5,0,0,1,16,7.5v1A1.5,1.5,0,0,1,14.5,10h-.85a5.91,5.91,0,0,1-.24.58l.6.6a1.5,1.5,0,0,1,0,2.12L13.3,14a1.54,1.54,0,0,1-2.12,0l-.6-.6a5.91,5.91,0,0,1-.58.24v.85A1.5,1.5,0,0,1,8.5,16ZM5.23,12.18l.33.18a4.94,4.94,0,0,0,1.07.44l.36.1V14.5a.5.5,0,0,0,.5.5h1a.5.5,0,0,0,.5-.5V12.91l.36-.1a4.94,4.94,0,0,0,1.07-.44l.33-.18,1.12,1.12a.51.51,0,0,0,.71,0l.71-.71a.5.5,0,0,0,0-.71l-1.12-1.12.18-.33a4.94,4.94,0,0,0,.44-1.07l.1-.36H14.5a.5.5,0,0,0,.5-.5v-1a.5.5,0,0,0-.5-.5H12.91l-.1-.36a4.94,4.94,0,0,0-.44-1.07l-.18-.33L13.3,4.11a.5.5,0,0,0,0-.71L12.6,2.7a.51.51,0,0,0-.71,0L10.77,3.82l-.33-.18a4.94,4.94,0,0,0-1.07-.44L9,3.09V1.5A.5.5,0,0,0,8.5,1h-1a.5.5,0,0,0-.5.5V3.09l-.36.1a4.94,4.94,0,0,0-1.07.44l-.33.18L4.11,2.7a.51.51,0,0,0-.71,0L2.7,3.4a.5.5,0,0,0,0,.71L3.82,5.23l-.18.33a4.94,4.94,0,0,0-.44,1.07L3.09,7H1.5a.5.5,0,0,0-.5.5v1a.5.5,0,0,0,.5.5H3.09l.1.36a4.94,4.94,0,0,0,.44,1.07l.18.33L2.7,11.89a.5.5,0,0,0,0,.71l.71.71a.51.51,0,0,0,.71,0Z"/>
    </symbol>
  <symbol id="collapse" viewBox="0 0 16 16">
    <polygon points="11.62 3.81 7.43 8 11.62 12.19 10.09 13.71 4.38 8 10.09 2.29 11.62 3.81"/>
  </symbol>
  <symbol id="search" viewBox="0 0 16 16">
    <path d="M6.57,1A5.57,5.57,0,1,1,1,6.57,5.57,5.57,0,0,1,6.57,1m0-1a6.57,6.57,0,1,0,6.57,6.57A6.57,6.57,0,0,0,6.57,0Z"/><rect x="11.84" y="9.87" width="2" height="5.93" transform="translate(-5.32 12.84) rotate(-45)"/>
  </symbol>
</svg>
<header class="page-header">
  <nav>
    <a href="#0">
      <img class="logo" src="https://64.media.tumblr.com/8f01ce075fefe5cab201fabd72040db9/c6bbef7474f8c119-19/s1280x1920/e59bf2b43ff08b83bb7311e4c87ab1460fb2658b.png" alt="Health415 logo">
    </a>
    <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
      <svg width="20" height="20" aria-hidden="true">
        <use xlink:href="#down"></use>
      </svg>
    </button>
    <ul class="admin-menu">
      <li class="menu-heading">
        <h3>Admin</h3>
      <li>
        <a href="#0">
          <svg>
            <use xlink:href="#users"></use> <!--Links to regular users who have signed up for the website-->
          </svg>
          <span>Users</span>
        </a>
      </li>
  
      <li>
        <a href="document">
          <svg>
            <use xlink:href="#collection"></use>
          </svg>
          <span>Catalogue</span>
        </a>
      </li>

 
      <li class="menu-heading">
        <h3>Sign Out</h3>
      </li>
      <li>
        <a href="logout.php"> <!--Link to timer page that brings you back to login page-->
          <span>Sign Out</sSignpan>
        </a>
      </li>
      <li>
        <a href="#0">
          <svg>
            <use xlink:href="#options"></use>
          </svg>
          <span>Reset Password</span>
        </a>
      </li>
      <li>
        <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
          <svg aria-hidden="true">
            <use xlink:href="#collapse"></use>
          </svg>
          <span>Collapse</span>
        </button>
      </li>
    </ul>
  </nav>
</header>

  <section class="grid">
   
  
    <article>
  
 <div class = "form-style-5"><legend>Add Products</legend>
  <form action="addProduct1.php" method="post">

    <table border="0" id = "users">
     
      <tr>
        <td>product_name</td>
         <td><input type="text" name="product_name" maxlength="30" size="30" required></td>
      </tr>
      <tr>
        <td>product_price</td>
        <td> <input type="number" name="product_price" maxlength="30" size="10" required></td>
      </tr>
      <tr>
        <td>product_quantity</td>
        <td> <input type="number" name="product_quantity" maxlength="235" size="30" required></td>
      </tr>
      <tr>
        <td>product_id</td>
        <td><input type="number" name="product_id" maxlength="30" size="30" required></td>
      </tr>
        <tr>
        <td>product_image</td>
        <td><input type="text" name="product_image" maxlength="1500" size="200" required></td>
      </tr>
      <tr>
        <td>product_desc</td>
        <td><input type="text" name="product_desc" maxlength="1500" size="200" required></td>
      </tr>
      <tr>
        <td>product_category</td>
        <td><input type="text" name="product_category" maxlength="1500" size="200" required></td>
      </tr>
      <tr>
       <td colspan="2"><input type="submit" value="Submit"></td></div>
      </tr>
    </table>

  </form> 
    </article>
    
    
    
  
    <article>
 
          <div class="form-style-5">
              <legend> Product Update</legend>
            
            <form action=" " method = "POST">
                <input type = "number" name = "product_id" placeholder = "Enter product ID" required /> 
                <input type = "text" name = "product_name" placeholder = "Enter product Name" required /> 
                <input type = "number" name = "product_price" placeholder = "Enter product price" required /> 
                <input type = "number" name = "product_quantity" placeholder = "Enter product quantity" required />
                <input type = "text" name = "product_image" placeholder = "Enter product image" required/> <br/>
                <input type = "text" name = "product_desc" placeholder = "Enter product description" required /> 
                <input type = "text" name = "product_category" placeholder = "Enter product category" required /> 
                
                <input type = "submit" name = "update" value = "Update Data"/>
            </form>
            </table>
                </div>
    </article> 
    
    
    <article>
        
        <?php
  @ $db = new mysqli('localhost', 'mwhrskay_customer', 'FJb$**]ac_?N', 'mwhrskay_Health415');
  if(isset($_POST['update']))
  {
      $product_id = $_POST['product_id'];
      $product_name = $_POST['product_name'];
      $product_price = $_POST['product_price'];
      $product_quantity = $_POST['product_quantity'];
      $product_image = $_POST['product_image'];
      $product_desc = $_POST['product_desc'];
      $product_category = $_POST['product_category'];
      
      $query = "UPDATE products SET product_name = '$product_name', product_price = '$product_price', product_quantity = '$product_quantity', product_image = '$product_image', product_desc = '$product_desc', product_category = '$product_category'  where product_id = '$product_id' ";
      $query_run = mysqli_query($db, $query);
      if($query_run)
      {
          echo "database updated";
      }
      else
      {
          echo "error: no connection";
      }
      
  }
?>

<div class="form-style-5">
    <legend>Delete product</legend><br>
<form action="deletetest.php" method="post">
    <table border="0">
      <tr>
        <td>product_name</td>
         <td><input type="text" name="product_name" maxlength="30" size="30" required></td>
      </tr>
      <tr>
        <td>product_price</td>
        <td> <input type="number" name="product_price" maxlength="30" size="10" required></td>
      </tr>
      <tr>
        <td>product_quantity</td>
        <td> <input type="number" name="product_quantity" maxlength="235" size="30" required></td>
      </tr>
      <tr>
        <td>product_id</td>
        <td><input type="number" name="product_id" maxlength="30" size="30" required></td>
      </tr>
        <tr>
        <td>product_image</td>
        <td><input type="text" name="product_image" maxlength="1500" size="200" required></td>
      </tr>
      <tr>
        <td>product_desc</td>
        <td><input type="text" name="product_desc" maxlength="1500" size="200" required></td>
      </tr>
      <tr>
        <td>product_category</td>
        <td><input type="text" name="product_category" maxlength="1500" size="200" required></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Submit"></td>
      </tr>
    </table>
  </form>
        </div>
    </article> 
    
    
    
                        <!--Return Requests-->
                        <article>
                            <div class = "form-style-5"><legend>User Return Request</legend></div>
                            <?php
                    
                    $con=mysqli_connect('localhost', 'mwhrskay_customer', 'FJb$**]ac_?N', 'mwhrskay_Health415');
                    // Check connection
                    if (mysqli_connect_errno())
                    {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
                    
                    $result = mysqli_query($con,"SELECT * FROM receipt");
                    
                    echo "<table border='1' id = 'users'>
                    <tr>
                    <th>Username</th>
                    <th>Order Number</th>
                    <th>Total</th>
                    <th>Shipment Status</th>
                    <th>Cancel Request</th>
                    </tr>";
                    
                    while($row = mysqli_fetch_array($result))
                    {
                    echo "<tr>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['order_number'] . "</td>";
                    echo "<td>" . $row['total'] . "</td>";
                    echo "<td>" . $row['shipment_status'] . "</td>";
                    echo "<td>" . $row['cancel_request'] . "</td>";
                    echo "</tr>";
                    }
                    echo "</table>";
                    
                    mysqli_close($con);
                    ?>
                    
                            </article>
    
    
    
    <!--Process Return Requests-->
     <div class = "form-style-5"><legend>Customer Order Processing</legend> 
    <article>
        
       
            <form action=" " method = "POST">
                <input type = "number" name = "order_number" placeholder = "Enter order number"  required/> 
      
                <label for="shipment_status"> Enter Shipment Status</label>
                <select name="shipment_status" id = "shipment_status" required>
                    <option value = "ready"> ready</option>
                    <option value = "shipped"> shipped</option>
                    <option value = "delivered"> delivered</option>
                    <option value = "cancelled"> cancelled</option>
               
                
                <input type = "submit" name = "update" value = "Update Shipment" onSubmit = form.method()/>
            </form>
           
<?php
  @ $db = new mysqli('localhost', 'mwhrskay_customer', 'FJb$**]ac_?N', 'mwhrskay_Health415');
  if(isset($_POST['update']))
  {
      $order_number = $_POST['order_number'];
      #$username = $_POST['username'];
      #$total = $_POST['total'];
      $shipment_status = $_POST['shipment_status'];
      
      #$query = "UPDATE receipt SET username = '$username', total = '$total', shipment_status = '$shipment_status' where order_number = '$order_number' ";
      $query = "UPDATE receipt SET shipment_status = '$shipment_status' where order_number = '$order_number'";
      $query_run = mysqli_query($db, $query);
      if($query_run)
      {
          echo "<script>window.location.href='AdminDashboard.php';</script>";
      }
      else
      {
          echo "error: no connection";
      }
      
  }
?>
        
      
        </article>
     </div>

     <article>   
  <div class="form-style-5"><legend>Registered Users</legend>  </div></br>
      <?php

            $con=mysqli_connect('localhost', 'mwhrskay_customer', 'FJb$**]ac_?N', 'mwhrskay_Health415');
           
            if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
          
            $result = mysqli_query($con,"SELECT * FROM users");
 
            echo "<table border='1' id = 'users'><tr>
<th>First name</th>
<th>Last name</th>
<th>Username</th>
</tr>";
           
            
            while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "</tr>";
            }
                echo "</table>";
            
            mysqli_close($con);
        ?>

    
            
    <form action="logout.php" method = "POST">
      </form>
      <!-- <button class="btn" onclick="document.location='register.html'">Register</button> -->
</div>      
</article>



  </section>
 
 
</html>
   


