<?php

  function isActive($ruta) {
    return request()->routeIs($ruta);
  }