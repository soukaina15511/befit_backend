<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foodItems = [
            // Fruits
            ['name' => 'Apple', 'category_id' => 1],
            ['name' => 'Banana', 'category_id' => 1],
            ['name' => 'Orange', 'category_id' => 1],
            ['name' => 'Strawberry', 'category_id' => 1],
            ['name' => 'Grapes', 'category_id' => 1],
            ['name' => 'Watermelon', 'category_id' => 1],
            ['name' => 'Pineapple', 'category_id' => 1],
            ['name' => 'Mango', 'category_id' => 1],
            ['name' => 'Kiwi', 'category_id' => 1],
            ['name' => 'Peach', 'category_id' => 1],
            ['name' => 'Pear', 'category_id' => 1],
            ['name' => 'Cherry', 'category_id' => 1],
            ['name' => 'Blueberry', 'category_id' => 1],
            ['name' => 'Raspberry', 'category_id' => 1],
            ['name' => 'Blackberry', 'category_id' => 1],
            ['name' => 'Cantaloupe', 'category_id' => 1],
            ['name' => 'Plum', 'category_id' => 1],
            ['name' => 'Apricot', 'category_id' => 1],
            ['name' => 'Lemon', 'category_id' => 1],
            ['name' => 'Lime', 'category_id' => 1],
            ['name' => 'Coconut', 'category_id' => 1],
            ['name' => 'Pomegranate', 'category_id' => 1],
            ['name' => 'Fig', 'category_id' => 1],
            ['name' => 'Passion Fruit', 'category_id' => 1],
            ['name' => 'Dragon Fruit', 'category_id' => 1],
            ['name' => 'Guava', 'category_id' => 1],
            ['name' => 'Persimmon', 'category_id' => 1],
            ['name' => 'Star Fruit', 'category_id' => 1],
            ['name' => 'Lychee', 'category_id' => 1],
            ['name' => 'Mangosteen', 'category_id' => 1],
            ['name' => 'Durian', 'category_id' => 1],
            ['name' => 'Jackfruit', 'category_id' => 1],
            ['name' => 'Kumquat', 'category_id' => 1],
            // Vegetables
         

            ['name' => 'Carrot', 'category_id' => 2],
            ['name' => 'Broccoli', 'category_id' => 2],
            ['name' => 'Spinach', 'category_id' => 2],
            ['name' => 'Bell Pepper', 'category_id' => 2],
            ['name' => 'Tomato', 'category_id' => 2],
            ['name' => 'Cucumber', 'category_id' => 2],
            ['name' => 'Zucchini', 'category_id' => 2],
            ['name' => 'Eggplant', 'category_id' => 2],
            ['name' => 'Onion', 'category_id' => 2],
            ['name' => 'Garlic', 'category_id' => 2],
            ['name' => 'Cauliflower', 'category_id' => 2],
            ['name' => 'Lettuce', 'category_id' => 2],
            ['name' => 'Green Bean', 'category_id' => 2],
            ['name' => 'Sweet Potato', 'category_id' => 2],
            ['name' => 'Radish', 'category_id' => 2],
            ['name' => 'Asparagus', 'category_id' => 2],
            ['name' => 'Artichoke', 'category_id' => 2],
            ['name' => 'Celery', 'category_id' => 2],
            ['name' => 'Cabbage', 'category_id' => 2],
            ['name' => 'Kale', 'category_id' => 2],
            ['name' => 'Brussels Sprout', 'category_id' => 2],
            ['name' => 'Beetroot', 'category_id' => 2],
            ['name' => 'Pumpkin', 'category_id' => 2],
            ['name' => 'Squash', 'category_id' => 2],
            ['name' => 'Turnip', 'category_id' => 2],
            ['name' => 'Okra', 'category_id' => 2],
            ['name' => 'Fennel', 'category_id' => 2],
            ['name' => 'Rutabaga', 'category_id' => 2],
            ['name' => 'Watercress', 'category_id' => 2],
            ['name' => 'Bok Choy', 'category_id' => 2],
            ['name' => 'Chard', 'category_id' => 2],
            ['name' => 'Collard Greens', 'category_id' => 2],
            ['name' => 'Snow Peas', 'category_id' => 2],
            ['name' => 'Mustard Greens', 'category_id' => 2],
            ['name' => 'Parsnip', 'category_id' => 2],
            ['name' => 'Arugula', 'category_id' => 2],
            ['name' => 'Radicchio', 'category_id' => 2],
            ['name' => 'Kohlrabi', 'category_id' => 2],
            ['name' => 'Endive', 'category_id' => 2],
            ['name' => 'Chicory', 'category_id' => 2],
            ['name' => 'Leek', 'category_id' => 2],
            ['name' => 'Scallion', 'category_id' => 2],
            // Meats
            
            ['name' => 'Chicken Breast', 'category_id' => 3],
            ['name' => 'Beef Steak', 'category_id' => 3],
            ['name' => 'Pork Chops', 'category_id' => 3],
            ['name' => 'Lamb Chops', 'category_id' => 3],
            ['name' => 'Ground Beef', 'category_id' => 3],
            ['name' => 'Turkey Breast', 'category_id' => 3],
            ['name' => 'Duck Breast', 'category_id' => 3],
            ['name' => 'Bacon', 'category_id' => 3],
            ['name' => 'Sausage', 'category_id' => 3],
            ['name' => 'Ham', 'category_id' => 3],
            ['name' => 'Veal Cutlets', 'category_id' => 3],
            ['name' => 'Venison', 'category_id' => 3],
            ['name' => 'Rabbit', 'category_id' => 3],
            ['name' => 'Quail', 'category_id' => 3],
            ['name' => 'Goose', 'category_id' => 3],
            ['name' => 'Salmon Fillet', 'category_id' => 3],
            ['name' => 'Tuna Steak', 'category_id' => 3],
            ['name' => 'Cod Fillet', 'category_id' => 3],
            ['name' => 'Shrimp', 'category_id' => 3],
            ['name' => 'Crab', 'category_id' => 3],
            ['name' => 'Lobster', 'category_id' => 3],
            ['name' => 'Clams', 'category_id' => 3],
            ['name' => 'Oysters', 'category_id' => 3],
            ['name' => 'Mussels', 'category_id' => 3],
            ['name' => 'Octopus', 'category_id' => 3],
            ['name' => 'Squid', 'category_id' => 3],
            ['name' => 'Buffalo', 'category_id' => 3],
            ['name' => 'Elk', 'category_id' => 3],
            ['name' => 'Frog Legs', 'category_id' => 3],

            // Eggs

            ['name' => 'Chicken Eggs', 'category_id' => 4],
            ['name' => 'Duck Eggs', 'category_id' => 4],
            ['name' => 'Quail Eggs', 'category_id' => 4],
            ['name' => 'Goose Eggs', 'category_id' => 4],
            ['name' => 'Turkey Eggs', 'category_id' => 4],
            ['name' => 'Ostrich Eggs', 'category_id' => 4],
            ['name' => 'Pheasant Eggs', 'category_id' => 4],
            ['name' => 'Emu Eggs', 'category_id' => 4],
            ['name' => 'Partridge Eggs', 'category_id' => 4],
            ['name' => 'Guinea Fowl Eggs', 'category_id' => 4],



            // Fish and Seafood

            ['name' => 'Salmon', 'category_id' => 5],
            ['name' => 'Shrimp', 'category_id' => 5],
            ['name' => 'Tuna', 'category_id' => 5],
            ['name' => 'Cod', 'category_id' => 5],
            ['name' => 'Lobster', 'category_id' => 5],
            ['name' => 'Crab', 'category_id' => 5],
            ['name' => 'Mussels', 'category_id' => 5],
            ['name' => 'Clams', 'category_id' => 5],
            ['name' => 'Oysters', 'category_id' => 5],
            ['name' => 'Scallops', 'category_id' => 5],
            ['name' => 'Tilapia', 'category_id' => 5],
            ['name' => 'Haddock', 'category_id' => 5],
            ['name' => 'Swordfish', 'category_id' => 5],
            ['name' => 'Mackerel', 'category_id' => 5],
            ['name' => 'Sardines', 'category_id' => 5],
            ['name' => 'Trout', 'category_id' => 5],
            ['name' => 'Halibut', 'category_id' => 5],
            ['name' => 'Anchovies', 'category_id' => 5],
            ['name' => 'Squid', 'category_id' => 5],


            // Beverages

            ['name' => 'Orange Juice', 'category_id' => 6],
            ['name' => 'Coffee', 'category_id' => 6],
            ['name' => 'Green Tea', 'category_id' => 6],
            ['name' => 'Black Tea', 'category_id' => 6],
            ['name' => 'Lemonade', 'category_id' => 6],
            ['name' => 'Milk', 'category_id' => 6],
            ['name' => 'Almond Milk', 'category_id' => 6],
            ['name' => 'Soy Milk', 'category_id' => 6],
            ['name' => 'Coconut Water', 'category_id' => 6],
            ['name' => 'Apple Juice', 'category_id' => 6],
            ['name' => 'Grape Juice', 'category_id' => 6],
            ['name' => 'Tomato Juice', 'category_id' => 6],
            ['name' => 'Smoothie', 'category_id' => 6],
            ['name' => 'Hot Chocolate', 'category_id' => 6],
            ['name' => 'Herbal Tea', 'category_id' => 6],
            ['name' => 'Iced Tea', 'category_id' => 6],
            ['name' => 'Energy Drink', 'category_id' => 6],
            ['name' => 'Protein Shake', 'category_id' => 6],
            ['name' => 'Sparkling Water', 'category_id' => 6],
            ['name' => 'Sports Drink', 'category_id' => 6],
            ['name' => 'Kombucha', 'category_id' => 6],
            ['name' => 'Chai Tea', 'category_id' => 6],
            ['name' => 'Latte', 'category_id' => 6],
            ['name' => 'Cappuccino', 'category_id' => 6],
            ['name' => 'Matcha', 'category_id' => 6],
            ['name' => 'Buttermilk', 'category_id' => 6],
            ['name' => 'Fruit Punch', 'category_id' => 6],
            ['name' => 'Vegetable Juice', 'category_id' => 6],
            ['name' => 'Cranberry Juice', 'category_id' => 6],
            ['name' => 'Pineapple Juice', 'category_id' => 6],
            ['name' => 'Peppermint Tea', 'category_id' => 6],
            ['name' => 'Chamomile Tea', 'category_id' => 6],
            ['name' => 'Rooibos Tea', 'category_id' => 6],
            ['name' => 'Oolong Tea', 'category_id' => 6],



            // Snacks

            ['name' => 'Potato Chips', 'category_id' => 7],
            ['name' => 'Chocolate Bar', 'category_id' => 7],
            ['name' => 'Popcorn', 'category_id' => 7],
            ['name' => 'Pretzels', 'category_id' => 7],
            ['name' => 'Trail Mix', 'category_id' => 7],
            ['name' => 'Granola Bars', 'category_id' => 7],
            ['name' => 'Cookies', 'category_id' => 7],
            ['name' => 'Crackers', 'category_id' => 7],
            ['name' => 'Gummy Bears', 'category_id' => 7],
            ['name' => 'Fruit Snacks', 'category_id' => 7],
            ['name' => 'Nuts', 'category_id' => 7],
            ['name' => 'Beef Jerky', 'category_id' => 7],
            ['name' => 'Rice Cakes', 'category_id' => 7],
            ['name' => 'Cheese Sticks', 'category_id' => 7],
            ['name' => 'Yogurt', 'category_id' => 7],
            ['name' => 'Pita Chips', 'category_id' => 7],
            ['name' => 'Veggie Chips', 'category_id' => 7],
            ['name' => 'Pop Tarts', 'category_id' => 7],
            ['name' => 'Dried Fruit', 'category_id' => 7],
            ['name' => 'Energy Bars', 'category_id' => 7],
            ['name' => 'Candy Bars', 'category_id' => 7],
            ['name' => 'Muffins', 'category_id' => 7],
            ['name' => 'Cupcakes', 'category_id' => 7],
            ['name' => 'Brownies', 'category_id' => 7],
            ['name' => 'Ice Cream', 'category_id' => 7],
            ['name' => 'Popsicles', 'category_id' => 7],
            ['name' => 'Fruit Cups', 'category_id' => 7],
            ['name' => 'Pudding', 'category_id' => 7],
            ['name' => 'Chips and Salsa', 'category_id' => 7],
            ['name' => 'Hummus and Veggies', 'category_id' => 7],
            ['name' => 'Soft Pretzels', 'category_id' => 7],
            ['name' => 'Rice Krispies Treats', 'category_id' => 7],
            ['name' => 'Nachos', 'category_id' => 7],



            // Dairy

            ['name' => 'Milk', 'category_id' => 8],
            ['name' => 'Cheese', 'category_id' => 8],
            ['name' => 'Yogurt', 'category_id' => 8],
            ['name' => 'Butter', 'category_id' => 8],
            ['name' => 'Cream', 'category_id' => 8],
            ['name' => 'Cottage Cheese', 'category_id' => 8],
            ['name' => 'Sour Cream', 'category_id' => 8],
            ['name' => 'Whipped Cream', 'category_id' => 8],
            ['name' => 'Cream Cheese', 'category_id' => 8],
            ['name' => 'Ice Cream', 'category_id' => 8],
            ['name' => 'Buttermilk', 'category_id' => 8],
            ['name' => 'Ghee', 'category_id' => 8],
            ['name' => 'Half and Half', 'category_id' => 8],
            ['name' => 'Greek Yogurt', 'category_id' => 8],
            ['name' => 'Mozzarella', 'category_id' => 8],
            ['name' => 'Cheddar', 'category_id' => 8],
            ['name' => 'Parmesan', 'category_id' => 8],
            ['name' => 'Feta', 'category_id' => 8],
            ['name' => 'Swiss Cheese', 'category_id' => 8],
            ['name' => 'Brie', 'category_id' => 8],
            ['name' => 'Ricotta', 'category_id' => 8],
            ['name' => 'Blue Cheese', 'category_id' => 8],
            ['name' => 'Provolone', 'category_id' => 8],
            ['name' => 'Colby Jack', 'category_id' => 8],
            ['name' => 'Monterey Jack', 'category_id' => 8],
            ['name' => 'Havarti', 'category_id' => 8],
            ['name' => 'Gouda', 'category_id' => 8],
            ['name' => 'Mascarpone', 'category_id' => 8],
            ['name' => 'Paneer', 'category_id' => 8],
            ['name' => 'Queso Fresco', 'category_id' => 8],



            // Cereals
            ['name' => 'Oatmeal', 'category_id' => 9],
            ['name' => 'Corn Flakes', 'category_id' => 9],
            ['name' => 'Granola', 'category_id' => 9],
            ['name' => 'Rice Krispies', 'category_id' => 9],
            ['name' => 'Wheaties', 'category_id' => 9],
            ['name' => 'Cheerios', 'category_id' => 9],
            ['name' => 'Frosted Flakes', 'category_id' => 9],
            ['name' => 'Special K', 'category_id' => 9],
            ['name' => 'Lucky Charms', 'category_id' => 9],
            ['name' => 'Raisin Bran', 'category_id' => 9],
            ['name' => 'Cinnamon Toast Crunch', 'category_id' => 9],
            ['name' => 'Honey Nut Cheerios', 'category_id' => 9],
            ['name' => 'Froot Loops', 'category_id' => 9],

           // Bread and Bakery

            ['name' => 'Whole Wheat Bread', 'category_id' => 10],
            ['name' => 'Croissant', 'category_id' => 10],
            ['name' => 'Bagel', 'category_id' => 10],
            ['name' => 'White Bread', 'category_id' => 10],
            ['name' => 'Sourdough Bread', 'category_id' => 10],
            ['name' => 'French Bread', 'category_id' => 10],
            ['name' => 'Rye Bread', 'category_id' => 10],
            ['name' => 'Multigrain Bread', 'category_id' => 10],
            ['name' => 'Pita Bread', 'category_id' => 10],
            ['name' => 'Ciabatta Bread', 'category_id' => 10],
            ['name' => 'Brioche', 'category_id' => 10],
            ['name' => 'English Muffin', 'category_id' => 10],
            ['name' => 'Cinnamon Roll', 'category_id' => 10],
            ['name' => 'Dinner Roll', 'category_id' => 10],
            ['name' => 'Focaccia', 'category_id' => 10],
            ['name' => 'Biscuit', 'category_id' => 10],
            ['name' => 'Baguette', 'category_id' => 10],
            ['name' => 'Kaiser Roll', 'category_id' => 10],
            ['name' => 'Scone', 'category_id' => 10],
            ['name' => 'Flatbread', 'category_id' => 10],
            ['name' => 'Crostini', 'category_id' => 10],
            ['name' => 'Challah', 'category_id' => 10],
            ['name' => 'Pretzel', 'category_id' => 10],
            ['name' => 'Naan Bread', 'category_id' => 10],
            ['name' => 'Muffin', 'category_id' => 10],
            ['name' => 'Danish Pastry', 'category_id' => 10],
            ['name' => 'Fougasse', 'category_id' => 10],
            ['name' => 'Pumpernickel Bread', 'category_id' => 10],
            ['name' => 'Panettone', 'category_id' => 10],
            ['name' => 'Babka', 'category_id' => 10],


        ];

        DB::table('food_items')->insert($foodItems);
    }
}
