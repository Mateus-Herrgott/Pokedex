<?php 

    namespace app\Controllers;

    use app\Models\Pokemon;
    use app\Models\Type;

    class MainController extends CoreController {

        public function homeAction() {

            
            $model = new Pokemon();
            $pokemons = $model->findAll();

            $this->show('list', [
                "pokemons" => $pokemons,
            ]);
        }

        public function detailAction($params) {
            $idPokemon = $params['id'];

            $model = new Pokemon();
            $pokemon = $model->findByNumber($idPokemon);
            $types = $pokemon->getTypes();

            $modelType = new Type();
            $type = $model->findAll();

            $this->show('detail', [
                "pokemon" => $pokemon,
                "types" => $types
            ]);
        }

        public function typesAction() {

            $model = new Type();
            $types = $model->findAll();

            $this->show('types', [
                'types'=> $types
            ]);
        }

        public function filteredTypeAction($params) {
            $pokemonType = $params['type'];

            $model = new Pokemon();
            $pokemons = $model->findByType($pokemonType);

            $this->show('list', [
                "pokemons" => $pokemons,
            ]);
        }

    }