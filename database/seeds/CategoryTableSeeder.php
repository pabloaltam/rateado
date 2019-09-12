<?php

    use App\Category;
    use App\Subcategory;
    use Carbon\Carbon;
    use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        $category = new Category();
        $category->name = "Restaurantes";
        $category->description = "Locales asociados a la comida.";
        $category->save();

        $category = new Category();
        $category->name = "Servicios";
        $category->description = "Servicios prestados por terceros.";
        $category->save();

        $category = new Category();
        $category->name = "Hoteles";
        $category->description = "Servicio de hospedaje.";
        $category->save();

        $category = new Category();
        $category->name = "Mercados";
        $category->description = "Supermercados y minimarkets.";
        $category->save();

        $category = new Category();
        $category->name = "Tiendas";
        $category->save();

        $category = new Category();
        $category->name = "Cafés";
        $category->save();

        $category = new Category();
        $category->name = "Farmacias";
        $category->save();

        $category = new Category();
        $category->name = "Mascoterías";
        $category->save();

        $category = new Category();
        $category->name = "Películas";
        $category->save();

        $category = new Category();
        $category->name = "Series";
        $category->save();

        $category = new Category();
        $category->name = "Vehículos";
        $category->save();

        $category = new Category();
        $category->name = "Panaderías";
        $category->save();

        $category = new Category();
        $category->name = "Marcas";
        $category->save();

        Subcategory::truncate();

        $subcategory = new Subcategory();
        $subcategory->name = "Sándwiches";
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Hamburguesas";
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Sushi";
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Tailandesa";
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Pizza";
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Italiana";
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Japonesa";
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Peruana";
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "China";
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Chilena";
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Venezolana";
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Pollo";
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Medio Oriente";
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Mexicana";
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Árabe";
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Helados";
        $subcategory->category_id = 1;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Acción y aventuras";
        $subcategory->category_id = 9;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Animación";
        $subcategory->category_id = 9;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Suspenso";
        $subcategory->category_id = 9;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Drama";
        $subcategory->category_id = 9;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Ciencia Ficción";
        $subcategory->category_id = 9;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Misterio";
        $subcategory->category_id = 9;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Comedia";
        $subcategory->category_id = 9;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Guerra";
        $subcategory->category_id = 9;
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->name = "Terror";
        $subcategory->category_id = 9;
        $subcategory->save();
    }
}
