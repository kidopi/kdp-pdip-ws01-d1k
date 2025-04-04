<?php

require __DIR__ . '/vendor/autoload.php';

// ./src/Utils.php
require_once('src/Utils.php');

use PokeJogo\GameEngine;

# Novo jogo
$gameEngine = new GameEngine();

# Roda o loop do jogo
$gameEngine->runLoop();