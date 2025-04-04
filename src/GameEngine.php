<?php

    namespace PokeJogo;

    class GameEngine{
        
        # Lista de pokemons possíveis para aleatorização em wildPokemonAppearedDo()
        public $wildPokemonList = ["Pikachu",
        "Bulbassaur",
        "Charmander",
        "Squirtle",
        "Ditto",
        "Pidgey",
        "Magikarp",
        "Lucario"];

        public $contextEvents = ['WELCOME', 'JUST_EXPLORED', 'WILD_POKEMON_APPEARED','NPC'];

        # Mostra informações relevantes e boas vindas
        public function welcomeDo(){
            global $argv;
            $appName = "PokeAdventure 0.0.2";
            $time = date("H:i");
            $trainerName = $argv[1] ?? '';

            showMessage("$appName".PHP_EOL.
            "Hora da execução: $time".PHP_EOL.
            "Bem-vindo, Treinador $trainerName!".PHP_EOL);
        }

        # Mensagem caso nada aconteça
        public function justExploredDo(){
            global $argv;
            $trainerName = $argv[1] ?? 'treinador';
            showMessage("Ufa! Treinador $trainerName, passamos por matinhos e nada aconteceu.");
        }

        # Mensagem caso um Pokemon selvagem apareça
        public function wildPokemonAppearedDo(){
            $pokemon = $this->wildPokemonList[rand(0, count($this->wildPokemonList) - 1)];
            showMessage("Eita, prepare-se um $pokemon está bem á sua frente");
        }

        # Mesnagem caso um NPC apareça
        public function npcDo(){
            showMessage("Olá, gritou uma personagem de longe. Vamos conversar?");
        }

        # Função para rodar o loop do jogo
        public function runLoop(){
            $this->welcomeDo();

            switch(random_int(0,2)){
                case 0:
                    $this->justExploredDo();
                    break;
                case 1:
                    $this->wildPokemonAppearedDo();
                    break;
                case 2:
                    $this->npcDo();
                    break;
            }
        }
    }