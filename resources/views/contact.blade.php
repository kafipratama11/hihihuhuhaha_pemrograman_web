<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato');
body {
  background-color: #adadad;
  color: rgba(255, 255, 255, 0.7);
  font-family: 'Lato', sans-serif;
  margin: 20px;
}

* {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
}

.navbar{
    display: flex;
    justify-content: center;
}

.menu a{
    color: #11516e;
}
.home {
    height: 200vh;
}

.menu {
  text-transform: uppercase;
  color: rgba(9, 3, 66, 0.8);
  display: inline-block;
  cursor: pointer;
  pointer-events: none;
  position: sticky-bot;
  bottom: 20px;
  left: 20px;
  background-color: rgb(240, 240, 240);
  padding: 1rem;
}

.menu:hover {
  pointer-events: all;
}

.label {
  display: inline-block;
  cursor: pointer;
  pointer-events: all;
}

.spacer {
  display: inline-block;
  width: 80px;
  margin-left: 15px;
  margin-right: 15px;
  vertical-align: middle;
  cursor: pointer;
  position: relative;
}

.spacer:before {
  content: "";
  position: absolute;
  border-bottom: 1px solid #000000;
  height: 1px;
  width: 0%;
  transition: width 0.25s ease;
  transition-delay: 0.7s;
}

.item {
  position: relative;
  display: inline-block;
  margin-right: 30px;
  top: 10px;
  opacity: 0;
  transition: opacity 0.5s ease, top 0.5s ease;
  transition-delay: 0;
}
.span {
  transition: color 0.5s ease;
}
.item:hover span a {
  color: #0488c5;
}

.menu:hover .spacer:before {
  width: 100%;
  transition-delay: 0s;
}
.menu:hover .item {
  opacity: 1;
  top: 0px;
}
.item:nth-child(1) {
  transition-delay: 0.45s;
}
.item:nth-child(2) {
  transition-delay: 0.4s;
}
.item:nth-child(3) {
  transition-delay: 0.35s;
}
.item:nth-child(4) {
  transition-delay: 0.3s;
}
.item:nth-child(5) {
  transition-delay: 0.25s;
}
.item:nth-child(6) {
  transition-delay: 0.2s;
}
.item:nth-child(7) {
  transition-delay: 0.15s;
}
.item:nth-child(8) {
  transition-delay: 0.1s;
}
.item:nth-child(9) {
  transition-delay: 0.05s;
}
.item:nth-child(10) {
  transition-delay: 0s;
}
.menu:hover .item:nth-child(1) {
  transition-delay: 0.25s;
}
.menu:hover .item:nth-child(2) {
  transition-delay: 0.3s;
}
.menu:hover .item:nth-child(3) {
  transition-delay: 0.35s;
}
.menu:hover .item:nth-child(4) {
  transition-delay: 0.4s;
}
.menu:hover .item:nth-child(5) {
  transition-delay: 0.45s;
}
.menu:hover .item:nth-child(6) {
  transition-delay: 0.5s;
}
.menu:hover .item:nth-child(7) {
  transition-delay: 0.55s;
}
.menu:hover .item:nth-child(8) {
  transition-delay: 0.6s;
}
.menu:hover .item:nth-child(9) {
  transition-delay: 0.65s;
}
.menu:hover .item:nth-child(10) {
  transition-delay: 0.7s;
}
    </style>
    
</head>
<body>
    <div class="home">
        <div class="navbar d-flex justify-content-center sticky-top">
            <div class="menu rounded-pill ">
                <div class="label"><script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/cnpvyndp.json"
                        trigger="hover"
                        state="hover-home-1"
                        style="width:30px;height:30px">
                    </lord-icon></div>
                <div class="spacer"></div>
                <div class="item"><span class="span"><a href="" class="link-underline link-underline-opacity-0">Home</a></span></div>
                <div class="item"><span class="span"><a href="" class="link-underline link-underline-opacity-0">About</a></span></div>
                <div class="item"><span class="span"><a href="" class="link-underline link-underline-opacity-0">Resume</a></span></div>
                <div class="item"><span class="span"><a href="" class="link-underline link-underline-opacity-0">Portfolio</a></span></div>
                <div class="item"><span class="span"><a href="" class="link-underline link-underline-opacity-0">Contact</a></span></div>
              </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>