<?php

    use App\Item;
    use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::truncate();

        $item = new Item();
        $item->name = "Beakers Burguer";
        $item->subcategory_id = 2;
        $item->save();

        $item = new Item();
        $item->name = "Jack's Burger";
        $item->subcategory_id = 2;
        $item->save();

        $item = new Item();
        $item->name = "Uncle Joes";
        $item->subcategory_id = 2;
        $item->save();

        $item = new Item();
        $item->name = "Burger King";
        $item->subcategory_id = 2;
        $item->save();

        $item = new Item();
        $item->name = "John Wick 1";
        $item->subcategory_id = 17;
        $item->save();

        $item = new Item();
        $item->name = "John Wick 2";
        $item->subcategory_id = 17;
        $item->save();

        $item = new Item();
        $item->name = "John Wick 3";
        $item->subcategory_id = 17;
        $item->save();

        $item = new Item();
        $item->name = "Rápido y Furioso 1";
        $item->subcategory_id = 17;
        $item->save();
    }
}
