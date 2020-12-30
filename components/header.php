<?php

$header = <<<HTML

<!-- header -->
<div class="container">
  <div class="header row align-items-center justify-content-between py-4">

    <div class="logo col-6 col-md-4">
      <a href="/">
        <img src="Assets/wasted-font.png" />
      </a>
    </div>

    <div class="icon d-none d-md-block col-6 col-md-4">
      <a href="#">
        <img src="./Assets/logo-icon.png" class="w-100" />
      </a>
    </div>

    <div class="d-flex col-6 col-md-4 justify-content-end">
      <!-- shopping cart -->
      <!-- <div class="cart">
            <div class="counter">0</div>
            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="shopping-cart" role="img"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
              class="svg-inline--fa fa-shopping-cart fa-w-18 fa-2x">
              <path fill="currentColor"
                d="M551.991 64H144.28l-8.726-44.608C133.35 8.128 123.478 0 112 0H12C5.373 0 0 5.373 0 12v24c0 6.627 5.373 12 12 12h80.24l69.594 355.701C150.796 415.201 144 430.802 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-18.136-7.556-34.496-19.676-46.142l1.035-4.757c3.254-14.96-8.142-29.101-23.452-29.101H203.76l-9.39-48h312.405c11.29 0 21.054-7.869 23.452-18.902l45.216-208C578.695 78.139 567.299 64 551.991 64zM208 472c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm256 0c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm23.438-200H184.98l-31.31-160h368.548l-34.78 160z"
                class=""></path>
            </svg>
          </div> -->

      <!-- dropdown menu desktop -->
      <div class="burger-menu d-md-flex d-none flex-column align-items-end justify-content-center">
        <div></div>
        <div></div>
        <div></div>
      </div>

      <!-- dropdown menu mobile -->
      <div class="burger-menu d-flex d-md-none flex-column align-items-end justify-content-center" onClick="show()">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>


  </div>
</div>

HTML;
