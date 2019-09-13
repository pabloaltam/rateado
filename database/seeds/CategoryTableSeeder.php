<?php

    use App\Category;
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
    }
}
